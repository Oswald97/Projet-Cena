<?php

namespace App\Http\Controllers;

use App\Rapport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MercurySeries\Flashy\Flashy;

class RapportController extends Controller
{
    public function rapportB(Request $request)
    {
      /*
      |
      |Méthode pour afficher le formulaire d'envoie de rapport
      |pour les chefs bureaux
      |
      */
      return view('BV.rapport');
    }

    public function rapportC(Request $request)
    {
      /*
      |
      |Méthode pour afficher le formulaire d'envoie de rapport
      |pour les chefs centre
      |
      */
      return view('centre.rapports');
    }

    public function store(Request $request){
      /*
      |
      |Méthode pour stocker les rapports dans la base de donnée
      |
      */
      $nomFichier=Auth::user()->nom."_".Auth::user()->prenom;

      $request->fichier->storeAs($nomFichier,config('files.path'), 'public'); 
      Flashy::message("Rapport enregistré avec succès");

      $chemin="/storage/rapports/".$nomFichier;
      Rapport::create([
        "chemin"=>$chemin,
        "id_user"=>Auth::user()->id,
      ]);
      return redirect()->back();
    }
}

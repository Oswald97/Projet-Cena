<?php

namespace App\Http\Controllers;

use App\AdminBureau;
use App\Partie;
use App\Resultat;
use Illuminate\Foundation\Testing\Constraints\toString;
use Illuminate\Http\Concerns\input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MercurySeries\Flashy\Flashy;
use Webmozart\Assert\integer;
class BureauController extends Controller
{
    public function index()
    {

      $parties=Partie::orderBy("nom_partie")->get();
      $nb=$parties->count();
      return view('BV.envoie',['parties'=>$parties, 'nb'=>$nb]);
    }

    public function enregistre(Request $request)
    {
      $parties=Partie::orderBy("nom_partie")->get();
      $nb=$parties->count();
      $id = Auth::user()->id;
      $bureau=AdminBureau::whereUserId($id)->first()->id;
      $send=Resultat::wherePartieId($parties[1]->id)->where("bureauVote_id",$bureau)->first();
      if($send){
        Flashy::error("Impossible d'envoyer ces résultats.<br/> Vous avez déjà enregistré les résultats");
      }
      else{
        foreach ($parties as $partie) {
          Resultat::firstOrCreate([
          "bureauVote_id"=>$bureau,
          "partie_id"=>$partie->id],[
          "voix"=>$request->input($partie->nom_partie)
          ]);
        }
        
        Flashy::message("Résultats envoyés avec succès");
      }
      
      return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use App\AdminCentre;
use App\BureauVote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CentreController extends Controller
{

  public function index(){
    /*
    |
    |Méthode pour afficher la liste des bureaux de vote
    |disponibles dans le centre
    |
    */
    $idCentre=Auth::user()->adminCentres()->first()->centre_vote_id;
    $bureaux=BureauVote::whereCentreVoteId($idCentre)->get();
    $nb=$bureaux->count();
    return view('centre.acceuil',compact('bureaux','nb'));
    }
}

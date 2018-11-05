<?php

namespace App\Http\Controllers;

use App\BureauVote;
use App\CentreVote;
use App\Charts\ResultatGeneralChart;
use App\Commune;
use App\Partie;
use App\Resultat;
use Illuminate\Http\Request;

class ResultatController extends Controller
{
    /*
    |
    |Controller pour éffectuer la visualisation de tous les résultats
    |
    */

    public function general(){
      /*
      |
      |Méthode utiliseée pour éffectuer la visualisation des 
      |résulats généraux
      |
      */

      /*
      |
      |instanciation d'un nouvel objet de la classe ResultatGeneralChart
      |qui permet de créé des diagrammes à partir de données
      |
      */
      $chart= new ResultatGeneralChart;

      $parties=Partie::orderBy('nom_partie')->get();
      $nomP=[];//tableau qui servira à mémoriser les noms des parties politiques
      $voix=[];// tableau qui servira à stocker les voix de chaque partie 
      $nb=$parties->count();//nombre de parties
      foreach ($parties as $partie) {
        array_push($nomP, $partie->nom_partie);

        $partie_id=$partie->id;
        $x=Resultat::wherePartieId($partie_id)->sum('voix');//variable pour sommer les voix de chaque partie
        array_push($voix, $x);
      }
      $chart->labels($nomP);
      $chart->dataset('Résultats général', 'bar', $voix);
      
      return view('cena.general',compact('chart'));
    }




    public function commune(){
      $nom=[];
      $communes=Commune::orderBy('nom_commune')->get();
      $nb=$communes->count();
      
      return view('cena.resultC',compact('communes','nb'));
    }
    
    public function chartC(Request $request){
    /*
    |
    |Méthode pour visualiser les résultats par commune au niveau de la Cena 
    |
    */

      $chart= new ResultatGeneralChart;
      $circle= new ResultatGeneralChart;

      $parties=Partie::orderBy('nom_partie')->get();
      $nomP=[];
      $voix=[];
      $nb=$parties->count();
      $nbre_votant=0;
      foreach ($parties as $partie) {
        array_push($nomP, $partie->nom_partie);
      }
      $communes=Commune::find($request->idCom);
      
      $arrondissements=$communes->arrondissements()->get();
      // $centreId est une colletion qui contient tous les centres
      $centresId=[];
      foreach ($arrondissements as $arrondissement) {
        $centres=CentreVote::whereArrondissementId($arrondissement->id)->get();
        foreach ($centres as $centre) {
          array_push($centresId, $centre);
        }
      }
      $bureauId=[];

      foreach ($centresId as $centreId) {
        $bureaux=BureauVote::whereCentreVoteId($centreId->id)->get();
        foreach ($bureaux as $bureau) {
          array_push($bureauId, $bureau->id);
        }
      }
      foreach ($parties as $partie) {
        $i=0;
        foreach ($bureauId as $id) {
          $x=Resultat::wherePartieId($partie->id)->where('bureauVote_id',$id)->sum('voix');
          $i=$x+$i;
        }
        $nbre_votant+=$i;
        array_push($voix, $i);
      }

      /*
      |
      |Algo permettant de calculer le nombre de si_ges
      |à attribuer à chaque parti politique
      |
      */
      $nbre_siege=$communes->nbre_siege;

      $q= $nbre_votant/$nbre_siege;
      $sieges_partie =[];
      $sieges_attribue=0;

      for ($i=0; $i <$nb ; $i++) { 
        if($q==0){
          $q=1;
        }
        $var = (int)($voix[$i]/$q);

        $sieges_attribue +=$var;
        array_push($sieges_partie, $var);
      }
     $sieges_restant= $nbre_siege -$sieges_attribue;

     for ( $x=0;$x < $sieges_restant; $x++) {
      $max=0;
      $indice=0;
       for ($i=0; $i <$nb ; $i++) { 
         $moy=$voix[$i]/($sieges_partie[$i]+1);
         if ($moy > $max) {

           $max=$moy;
           $indice=$i;
         }
       }
       $sieges_partie[$indice]++;
       
     }

      $chart->labels($nomP);
      $chart->dataset('Résultats communal', 'bar', $voix);

      $circle->labels($nomP);

      $circle->dataset('Attribution de sièges', 'pie',$sieges_partie);

      return view('cena.communal',compact('chart','parties','nb','sieges_partie','circle'));
    }

    public function chartB(Request $request){
      /*
      |
      |Méthode pour visualiser les résultats par bureau
      |de vote au niveau des chefs centre
      |
      */

      $chart= new ResultatGeneralChart;

      $parties=Partie::orderBy('nom_partie')->get();
      $nomP=[];
      $voix=[];
      $nb=$parties->count();
      foreach ($parties as $partie) {
        array_push($nomP, $partie->nom_partie);
      }

      foreach ($parties as $partie) {
          $i=Resultat::wherePartieId($partie->id)->where('bureauVote_id',$request->idB)->sum('voix');
        array_push($voix, $i);
      }
      $chart->labels($nomP);
      $chart->dataset('Résultats Par Bureau', 'bar', $voix);
      return view('centre.resultatBureau',compact('chart'));
    }
}

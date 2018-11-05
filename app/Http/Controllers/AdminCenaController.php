<?php

namespace App\Http\Controllers;
use App\AdminArrondissement;
use App\AdminBureau;
use App\AdminCentre;
use App\Allow;
use App\Arrondissement;
use App\BureauVote;
use App\CentreVote;
use App\Code;
use App\Commune;
use App\Departement;
use App\Mail\CodeMail;
use App\Partie;
use App\Rapport;
use App\Role;
use App\RoleUser;
use App\User;
use App\fullName;
use App\hasRole;
use Illuminate\Database\Query\orderBy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use MercurySeries\Flashy\Flashy;
use Yajra\DataTables\Facades\DataTables;

class AdminCenaController extends Controller
{
    protected $tab_commune=[];
    protected $tab_arrondissement=[];
    protected $tab_centre=[];
    protected $tab_bureau=[];

    public function index()
    {
      $nb=User::all()->count();
      $nbDep=Departement::all()->count();
      return view('cena.adminCena',compact('nb','nbDep'));
    }

    public function inscription()
    {
      /*
      |
      |Méthode pour afficher le formulaire de
      |pré-inscription des agents
      |
      */
      $communes=Commune::all();
      $nbCommune=$communes->count();
      foreach ($communes as $commune)
        {
          array_push($this->tab_commune, $commune->nom_commune);
        }
      $arrondissements=Arrondissement::all();
      $nbArrondissement=$arrondissements->count();
      foreach ($arrondissements as $arrondissement)
        {
          array_push($this->tab_arrondissement, $arrondissement->nom_arrondissement);
        }
      $centres=CentreVote::all();
      $nbCentre=$centres->count();
      foreach ($centres as $centre)
        {
          array_push($this->tab_centre, $centre->nom_centre);
        }

      $bureaus=BureauVote::all();
      $nbBureau=$bureaus->count();
      foreach ($bureaus as $bureau)
        {
          array_push($this->tab_bureau, $bureau->numero);
        }
      return view('cena.inscription',[
                   "communes"=>$this->tab_commune,
                   "arrondissements"=>$this->tab_arrondissement,
                   "centres"=>$this->tab_centre,
                   "bureaus"=>$this->tab_bureau,
                   "nbCo"=>$nbCommune,
                   "nbA"=>$nbArrondissement,
                   "nbCe"=>$nbCentre,
                   "nbB"=>$nbBureau
      ]);
    }
    

    public function code(Request $request)
    {
      /*
      |
      |Méthode pour éffectuer la pré-inscription des agents
      |
      */
      if($request->role==0){
        $role_id=4;
      }
      elseif ($request->role==1) {
        $role_id=3;
      }
      elseif ($request->role==2) {
        $role_id=1;
      }
      elseif ($request->role==3) {
        $role_id=2;
      }
      if ($role_id ==4) {
        $arrondissement_id=null;
        $centre_id=null;
        $bureau_id=null;
      }
      elseif ($role_id==3) {
        $arrondissement_id=Arrondissement::whereNomArrondissement($request->arrondissement)->first()->id;;
        $centre_id=null;
        $bureau_id=null;
      }
      elseif ($role_id==1) {
        $arrondissement_id=Arrondissement::whereNomArrondissement($request->arrondissement)->first()->id;;
        $centre_id=$centre_id=CentreVote::whereNomCentre($request->centre)->whereArrondissementId($arrondissement_id)->first()->id;
        $bureau_id=null;
      }
      else{
        $arrondissement_id=Arrondissement::whereNomArrondissement($request->arrondissement)->first()->id;;
        $centre_id=$centre_id=CentreVote::whereNomCentre($request->centre)->whereArrondissementId($arrondissement_id)->first()->id;
        $bureau_id=BureauVote::whereNumero($request->bureau)->whereCentreVoteId($centre_id)->first()->id;
      }
      
      $email=$request->email;

      $code=Code::getCode();
      $row=Code::create([
        "code"=>$code,
        "email"=>$email,
        "role_id"=>$role_id,
        "arrondissement_id"=>$arrondissement_id,
        "centre_vote_id"=>$centre_id,
        "bureau_vote_id"=>$bureau_id,

      ]);
      if ($row) {
        $mail=new CodeMail($code);
        Mail::to($email)->send($mail);
        Flashy::message("Le code a été généré et envoyé avec succès");
        return redirect()->back();
      }
    }
    public function liste(){
      /*
      |
      |Méthode pour afficher la liste des agents
      |
      */

      $users=User::orderBy('nom')->paginate(15);
      $nb=$users->count();
      return view('cena.liste',["users"=>$users,"nb"=>$nb]);
    }


    public function destroy($id){
      /*
      |
      |Méthode pour supprimer le compte des agents
      |
      */
      $user=User::find($id);

      if ($user->hasRole('Chef Centre')){
        $var=AdminCentre::whereUserId($id)->first()->id;
        AdminCentre::destroy($var);
      }
      elseif ($user->hasRole('Chef Bureau')){
        $var=AdminBureau::whereUserId($id)->first()->id;
        AdminBureau::destroy($var);
      }
      elseif ($user->hasRole('Chef Arrondissement')){
        $var=AdminArrondissement::whereUserId($id)->first()->id;
        AdminArrondissement::destroy($var);
      }
      DB::table('role_user')->whereUserId($id)->delete();
      User::destroy($id);
      Flashy::message("Agent supprimé avec succès");
      return redirect()->back();
    }

    public function doc(){
      /*
      |
      |Méthode pour éffectuer le téléchargement des rapports
      |
      */

      $raps=Rapport::orderBy('created_at','desc')->paginate(15);
      $nb=$raps->count();
      $users=[];

      foreach ($raps as $rap) {
        $var=User::whereId($rap->id_user)->first();
        $name=$var->fullName();
        array_push($users, $name);
      }
      return view('cena.rapports',compact('raps','nb','users'));
    }

    public function profil(Request $request){
      /*
      |
      |Méthode pour afficher le profil des agents
      |
      */
      $user= User::find($request->utilisateur);
      $role=$user->roles()->first()->nom;
      if ($user->hasRole('Membre Cena')) {
        $commune= " ";
        $arron= " ";
        $centre= " ";
        $bureau= " ";
      }
      elseif ($user->hasRole('Chef Arrondissement')) {
        $arrondissementId= AdminArrondissement::whereUserId($request->utilisateur)->first()->arrondissement_id;
        $arron=Arrondissement::whereId($arrondissementId)->first()->nom_arrondissement;

        $communeId= $arrondissement=Arrondissement::whereId($arrondissementId)->first()->commune_id;
        $commune=Commune::whereId($communeId)->first()->nom_commune;
        
        $centre= " ";
        $bureau= " ";
      }
      elseif ($user->hasRole('Chef Centre')) {
        $centreId=AdminCentre::whereUserId($request->utilisateur)->first()->centre_vote_id;
        $centre=CentreVote::whereId($centreId)->first()->nom_centre;

        $arrondissementId=CentreVote::whereId($centreId)->first()->arrondissement_id;
        $arron=Arrondissement::whereId($arrondissementId)->first()->nom_arrondissement;

        $communeId= $arrondissement=Arrondissement::whereId($arrondissementId)->first()->commune_id;
        $commune=Commune::whereId($communeId)->first()->nom_commune;

        $bureau= " ";
      }

      elseif ($user->hasRole('Chef Bureau')) {
        $bureauId=AdminBureau::whereUserId($request->utilisateur)->first()->bureau_vote_id;
        $bureau=BureauVote::whereId($bureauId)->first()->numero;

        $centreId=BureauVote::whereId($bureauId)->first()->centre_vote_id;
        $centre=CentreVote::whereId($centreId)->first()->nom_centre;

        $arrondissementId=CentreVote::whereId($centreId)->first()->arrondissement_id;
        $arron=Arrondissement::whereId($arrondissementId)->first()->nom_arrondissement;

        $communeId= $arrondissement=Arrondissement::whereId($arrondissementId)->first()->commune_id;
        $commune=Commune::whereId($communeId)->first()->nom_commune;
      }

      return view("cena.profil",compact('user','role','bureau','centre','commune','arron'));
    }

    public function partie(){
      $parties=Partie::orderBy('nom_partie')->get();
      $nb=$parties->count();
      return view('cena.partie',compact("parties",'nb'));
    }

    public function configGet(){
      /*
      |
      |Méthode pour afficher le formulaire de configuration
      |des élections
      |
      */
      $communes=Commune::orderBy('nom_commune')->get();
      $nb=$communes->count();

      return view('cena.config',compact('communes','nb'));
    }
    public function configPost(Request $request){
      /*
      |
      |Méthode pour éffectuer les traitements nécessaire
      |pour la configuration des élections 
      |
      */

      $date=$request->date;

      $mois=substr($date,0,2);
      $jour=substr($date,3,2);
      $annee=substr($date,6,4);

      $dates = $annee.'-'.$mois.'-'.$jour;
      
      Allow::whereId(1)->update(['date'=>$dates]);

      $communes=Commune::orderBy('nom_commune')->get();
      $nb=$communes->count();
      for ($i=0; $i <$nb ; $i++) { 
       Commune::whereNomCommune($communes[$i]->nom_commune)->update([
          'nbre_siege'  =>  $request->$i
       ]);
      }
      return redirect()->back();
    }
}



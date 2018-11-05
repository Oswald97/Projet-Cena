<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\User;
use App\Arrondissement;
use App\CentreVote;
use App\Role;
use App\Allow;
use MercurySeries\Flashy\Flashy;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/home', 'Auth\RegisterController@create')->name('inscrit');

/*
|----------------------------------------------------------------
|Routes destinées  aux admin de la cena
|----------------------------------------------------------------
|
|Les routes ci dessous sont celles qui interviennent dans la 
|section d'un administrateur de la cena
|
*/

//routes pour inscrire des agents
Route::get('/inscription', 'AdminCenaController@inscription')->name('inscription')->middleware('cena');
Route::post('/inscription', 'AdminCenaController@code')->name('inscription')->middleware('cena');

//Routes pour la supression des  agents
Route::get('/liste', 'AdminCenaController@liste')->name('liste')->middleware('cena');
Route::delete('liste/{id}', 'AdminCenaController@destroy')->name('liste.destroy')->middleware('cena');

//Page d'acceuil 
Route::get('/adminCena', 'AdminCenaController@index')->name('accueilCena')->middleware('cena');

//Téléchargement des rapport
Route::get('/doc','AdminCenaController@doc')->name('rapports')->middleware('cena');

//Affichage du profil des agents
Route::post('/profil','AdminCenaController@profil')->name('profil')->middleware('cena');

//Résultats communaux
Route::get('/commune', 'ResultatController@commune')->name('resultatC')->middleware('cena');
Route::post('/commune', 'ResultatController@chartC')->name('resultatC')->middleware('cena');

//Résultats généraux
Route::get('/general', 'ResultatController@general')->name('general')->middleware('cena');

//Routes pour configurer une élection

Route::get('/config','AdminCenaController@configGet')->name('config')->middleware('cena');
Route::post('/config','AdminCenaController@configPost')->name('config')->middleware('cena');


/*
|----------------------------------------------------------------
|Routes destinées  aux chefs Bureau
|----------------------------------------------------------------
|
|Les routes ci dessous sont celles qui interviennent dans la 
|section d'un chef Bureau
|
*/

//Routes pour l'envoie des résultats

Route::get('/bureau', 'BureauController@index')->name('bureau')->middleware('bureau');
Route::post('/bureau', 'BureauController@enregistre')->name('bureau.enregistre')->middleware('bureau');

//Pour l'envoie des rapports

Route::get('/rapport', 'RapportController@rapportB')->name('rapport')->middleware('bureau');



/*
|----------------------------------------------------------------
|Routes destinées  aux chefs Centre
|----------------------------------------------------------------
|
|Les routes ci dessous sont celles qui interviennent dans la 
|section d'un chef Centre
|
*/

//Pour la visualisation des résultats par bureau de vote

Route::get('/centre', 'CentreController@index')->name('centre')->middleware('centre');
Route::post('/bureaau', 'ResultatController@chartB')->name('resultatB')->middleware('centre');

//Pour l'envoie des rapport

Route::post('/rapport','RapportController@store')->name('rapport');

Route::get('/rapportC', 'RapportController@rapportC')->name('rapportC')->middleware('centre');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

/*
|
|La route pour afficher la page d'attente
|
*/
Route::get('/wait', function(){
    $date=Allow::first()->date->format('d/m/Y');
    return view('wait',compact('date'));
})->name('wait');




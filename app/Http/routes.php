<?php
use Illuminate\Support\Facades\Input;
use App\Personne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

 
Route::get('/documents', function () {
    return view('documents.index');
});
Route::get('/agents', function () {
    return view('agents.index');
});

Route::get('/agents/{id_personne}/affecter', ['as' =>'agents.affecter', 'uses' =>'AgentController@affecter']);


Route::get('/parcours/detail', function () {
    return view('parcours.show');
});
Route::get('/accueil', function () {
    return view('parcours.accueil');
});

Route::get('/parcours', function () {
    return view('parcours.index');
});
Route::get('/formulaire', function () {
    return view('demandes.remplir_demande');
});

Route::get('/agentss', function () {
    return view('agents.liste_agent');
});

Route::get('/consulter', function () {
    return view('services.consulter');
}); 

Route::resource('/clients', 'ClientController');
Route::resource('/personnes', 'PersonneController');
Route::get('/personnes/{id_perssonne}/destroy', ['as' =>'personnes.destroy', 'uses' =>'AgentController@destroy']);

Route::post('/clients/create','ClientController@store');

Route::post('/submitdata','DocumentController@test');
Route::resource('/descriptions', 'DescriptionController');
Route::resource('/agents', 'AgentController');
Route::resource('/clients', 'ClientController');
Route::post('/agents/create','AgentController@store');
Route::post('/agents/edit','AgentController@update');
Route::get('/agents/liste_agent', ['as' =>'agents.liste_agent', 'uses' =>'AgentController@liste_agent']);
Route::get('/agents/liste_agent_disponible', ['as' =>'agents.liste_agent_disponible', 'uses' =>'AgentController@liste_agent_disponible']);
Route::resource('/documents', 'DocumentController');
Route::get('/documents/{id_document}/destroy', ['as' =>'documents.destroy', 'uses' =>'DocumentController@destroy']);
Route::resource('/register', 'HelloController@showhello');
Route::post('/documents/create','DocumentController@store');
Route::post('/documents/edit','DocumentController@update');
Route::post('/descriptions/edit','DescriptionController@update');
Route::post('/documents/show','DocumentController@show');
Route::post('/hello','HelloController@showhello');
Route::resource('/documents', 'DocumentController');

Route::get('/documents/{id_document}/consulter', ['as' =>'documents.consulter', 'uses' =>'DocumentController@consulter']);
Route::get('/documents/{id_document}/papier', ['as' =>'documents.papier', 'uses' =>'DocumentController@papier']);
Route::get('/documents/{id_document}/{id_description}/desc_client',['as' =>'documents.desc_client', 'uses' =>'DocumentController@desc_client']);
Route::get('/inscription', function () {
    return view('clients.form');
});
Route::get('/services/{id_service}/{id_personne}/affecter',['as' =>'services.affecter', 'uses' =>'ServiceController@affecter']);
Route::get('/services/{id_service}/{id_agent}/{id_personne}/consulte',['as' =>'services.consulte', 'uses' =>'ServiceController@consulte']);


Route::get('/documents/{id_document}/delete', ['as' =>'documents.delete', 'uses' =>'DocumentController@delete']);
Route::get('/personne/login', function () {
    return view('clients.connexion');
});
Route::get('/', ['as' =>'personnes.connexion', 'uses' =>'PersonneController@connexion']);
Route::get('/Bienvenue/agents/{id_personne}', ['as' =>'agents.font_agent', 'uses' =>'AgentController@font_agent']);
Route::post('/personne/bienvenu/', ['as' =>'personnes.verification', 'uses' =>'PersonneController@verification']);
Route::get('/Bienvenue/{id_personne}/documents', ['as' =>'documents.papierclient', 'uses' =>'DocumentController@papierclient']);
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/admin', function () {
    return view('welcome');
});
Route::get('/Bienvenue', function () {
    return view('app.accueil');
});
Route::get('/{id}/{id_personne}/profile', ['as' =>'agents.profile', 'uses' =>'AgentController@profile']);

Route::auth();

Route::get('/home', 'HomeController@index');



Route::resource('/descriptions', 'DescriptionController');
Route::get('/descriptions/{id_document}/create', ['as' =>'descriptions.create', 'uses' =>'DescriptionController@create']);

Route::get('/descriptions/{id_description}/destroy', ['as' =>'descriptions.destroy', 'uses' =>'DescriptionController@destroy']);
Route::get('/descriptions', function () {
    return view('descriptions.form');
});
Route::get('/{id_personne}/documents/{id_document}/consulterclient', ['as' =>'documents.consulterclient', 'uses' =>'DocumentController@consulterclient']);






Route::get('/description', function () {
    return view('documents.description');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('profile', 'AgentController@profile');



Route::resource('/services', 'ServiceController');
Route::post('/services/create','ServiceController@store');
Route::get('/services/{id_personne}/create/designation', ['as' =>'services.create', 'uses' =>'ServiceController@create']);
Route::get('/services/{id_personne}/rejoindre/{id_parcours}', ['as' =>'services.rejoindre', 'uses' =>'ServiceController@rejoindre']);
Route::get('/services/parcours/{id_personne}', ['as' =>'services.parcours', 'uses' =>'ServiceController@parcours']);
Route::get('/demande', function () {
    return view('services.demande');
});

Route::get('/services/{id_service}/destroy', ['as' =>'services.destroy', 'uses' =>'ServiceController@destroy']);
Route::get('/services/{id_service}/accepter', ['as' =>'services.accepter', 'uses' =>'ServiceController@accepter']);
Route::get('/services/{id_service}/accepter_demande', ['as' =>'services.accepter_demande', 'uses' =>'ServiceController@accepter_demande']);
Route::post('/services/{id_personne}/{id_parcours}/rejoindreparcour', ['as' =>'services.rejoindreparcour', 'uses' =>'ServiceController@rejoindreparcour']);
Route::get('/services/{id_personne}/affectereservice', ['as' =>'services.affecterservice', 'uses' =>'ServiceController@affecterservice']);
Route::get('/agents/{id_personne}/affecteragent', ['as' =>'agents.affecteragent', 'uses' =>'AgentController@affecteragent']);
Route::get('/agents/liste', ['as' =>'agents.liste', 'uses' =>'AgentController@d']);

Route::post('/agents/recherche','AgentController@Recherche');
Route::post('/services/recherche','ServiceController@Recherche');
Route::post('/documents/recherche','DocumentController@Recherche');


Route::get('/getlogout', ['as' =>'personnes.getlogout', 'uses' =>'PersonneController@getlogout']);
Route::auth();

Route::get('/home', 'HomeController@index');
Route::resource('/mails', 'MailController');

Route::get('contact/{$id_service}','MailController@getContact');

Route::post('contact','MailController@PostContact');

Route::get('/hola/{id_personne}', ['as' =>'personnes.bienvenue', 'uses' =>'PersonneController@bienvenue']);


Route::resource('/parcours', 'ParcourController');
Route::get('/parcours/parcoursadmin', ['as' =>'parcours.parcoursadmin', 'uses' =>'ParcourController@parcoursadmin']);
Route::get('/parcours/{id_service}/accepter_parcours', ['as' =>'parcours.accepter_parcours', 'uses' =>'ParcourController@accepter_parcours']);
Route::get('/parcours/{id_service}/Refuser_parcours', ['as' =>'parcours.Refuser_parcours', 'uses' =>'ParcourController@Refuser_parcours']);

Route::get('/{id_personne}/affiche', ['as' =>'personnes.affiche', 'uses' =>'PersonneController@affiche']);

Route::get('/{id_personne}/consulter_services', ['as' =>'services.consulter_services', 'uses' =>'ServiceController@consulter_services']);


Route::resource('/commentaires', 'CommentaireController');
Route::post('/commentaires/store/{id_personne}', ['as' =>'commentaires.store', 'uses' =>'CommentaireController@store']);

Route::get('/servicescours', ['as' =>'services.afficheservice', 'uses' =>'ServiceController@afficheservice']);
Route::get('/services/{id_service}/accepterdemande', ['as' =>'services.accepterdemande', 'uses' =>'ServiceController@accepterdemande']);

Route::get('/services/{id_service}/supprimer', ['as' =>'services.supprimer', 'uses' =>'ServiceController@supprimer']);

Route::get('/connecte', function () {
    return view('personnes.connexion');
});

Route::get('/acc', function () {
    return view('app.accueil_client');
});

Route::get('/services/{id_service}/calcul', ['as' =>'services.calcul', 'uses' =>'ServiceController@calcul']);
Route::post('/services/{id_service}/montant', ['as' =>'services.montant', 'uses' =>'ServiceController@montant']);

Route::get('/services/{id_service}/calcultarif', ['as' =>'services.calcultarif', 'uses' =>'ServiceController@calcultarif']);
Route::post('/services/{id_service}/divisertarif', ['as' =>'services.divisertarif', 'uses' =>'ServiceController@divisertarif']);

Route::get('/service_client', ['as' =>'services.service_client', 'uses' =>'ServiceController@service_client']);
Route::get('/service_client/{id_personne}', ['as' =>'services.facture', 'uses' =>'ServiceController@facture']);

Route::get('/service', function () {
    return view('app.services');
});

Route::get('/refuser/{id_service}', ['as' =>'services.refuser', 'uses' =>'ServiceController@refuser']);
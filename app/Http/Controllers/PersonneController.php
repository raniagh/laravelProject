<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Auth;
use Session;
use App\Http\Requests;
use App\Personne;
use App\Service;
use App\Donnee;

class PersonneController extends Controller
{
    protected $personnes;
     

    public function __construct(Personne $personnes)
    {
        $this->personnes = $personnes;
        //parent::__construct();
    }

    public function index()
    {
        $personnes = $this->personnes->OrderBy('id_personne', 'asc')->paginate(5);
         $nouveau_services =   Service::Where('etat_service','=' ,'en attente')->get();
         $count=count($nouveau_services);
         $n =   Service::Where('etat_service','=' ,'affecté')
                         ->Orwhere('etat_service','=' ,'refusé')
                        ->get();
         $c=count($n);

     return view('personnes.index', compact('personnes','personne','nom','prenom','agen','nouveau_services','count','n','c'));
    }

    public function create(Personne $personnes)
    {
        return view('personnes.form', compact('personnes'));
    }

     public function store(Request $request)
    {

        $personne = new Personne();
        $this->validate($request, [
            'nom' => 'required|alpha',
            'prenom' => 'required|alpha',
            'Num_tel' => 'required|numeric',
            'adresse' => 'required',
            'email' => 'required|email|unique:personnes,email',
            'password' => 'required|confirmed|min:6',


        ]);
        $personne->agen = $request->agen;
        $personne->nom = $request->nom;
        $personne->prenom = $request->prenom;
        $personne->Num_tel = $request->Num_tel;
        $personne->adresse = $request->adresse;  
        $personne->email = $request->email;
        $personne->password = $request->password;
        $personne->role = "admin";
        $personne->save();
        return redirect(route('personnes.connexion'))->with('message','Félicitations, vous êtes inscrit avec succès');
    }
    public function getlogout(){
    	Auth::logout();
    	return view('clients.connexion');
    }

    public function connexion(Request $request)
    {
         return view('clients.connexion', compact('personnes'));

    }

    public function verification(Request $request)
    {

    	//service etat = en attente
    	$nouveau_services =   Service::Where('etat_service','=' ,'en attente')->get();
    	$count=count($nouveau_services);
    	 $n =   Service::Where('etat_service','=' ,'affecté')->get();
         $c=count($n);
        
    	$existe=false;
        $this->validate($request, [
            'password' => 'required',
            'password' => 'min:6.',
            'email' => 'required|email',]);
		$personnes = $this->personnes->all();

       foreach ($personnes as $personne){ 
       	

            if ((($personne->email) == ($request->email))and(($personne->password) == ($request->password))) {
            		$existe=true;
            		$role=$personne->role;
                    $id_personne=$personne->id_personne;
                   

            } 
        }
       

       if(($existe== true )and ($role=='Client') ){

             $personne = Personne::Where('id_personne','=' ,$id_personne)->firstOrfail();
       	    return view('app.accueil_client', compact('personne'));
       	}elseif (($existe == true) and ($role=='admin')){

    
          $personne = Personne::Where('id_personne','=' ,$id_personne)->firstOrfail();

          	return view('hello', compact('personne','nouveau_services','count','donne','c','n','personnes'));
        } 
       else{

          	return view('clients.form')->withErrors("Erreur!Vous ");
        } 
   }

    public function bienvenue($id_personne)
    {
        $personne = Personne::Where('id_personne','=' ,$id_personne)->firstOrfail();
    	$nouveau_services =   Service::Where('etat_service','=' ,'en attente')->get();
        $count=count($nouveau_services);
     $n =   Service::Where('etat_service','=' ,'affecté')->get();
         $c=count($n);
        return view('hello', compact('personne','nom','prenom','agen','count','nouveau_services','n','c'));
    }

     public function affiche($id_personne)
    {
         $personne = Personne::Where('id_personne','=' ,$id_personne)->firstOrfail();
         
    
        return view('app.accueil_client', compact('personne'));
    }



 
}

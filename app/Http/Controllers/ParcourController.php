<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Parcour;
use App\Service;
use App\Personne;

class ParcourController extends Controller
{
	 protected $parcours;
  protected $personnes;
    public function __construct(Parcour $parcours,Personne $personnes)
    {
        $this->parcours = $parcours;
          $this->personnes = $personnes;
        //parent::__construct();
    }
     public function index()
    {
        $parcours = $this->parcours->where('id_agent','<>','Null')->get();
        $nouveau_services =   Service::Where('etat_service','=' ,'en attente')->get();
       $count=count($nouveau_services);
        $n =   Service::Where('etat_service','=' ,'affecté')->get();
         $c=count($n);
        return view('parcours.liste_parcours',compact('parcours','nouveau_services','count','n','c'));
     
    }
 public function show()
    {
       $parcours = $this->parcours->where('id_agent','<>','Null')->get();
       $services= Service::get();
       $personnes=$this->personnes->all();
       $nouveau_services =   Service::Where('etat_service','=' ,'en attente')->get();
       $count=count($nouveau_services);
        $n =   Service::Where('etat_service','=' ,'affecté')->get();
         $c=count($n);
        return view('parcours.liste_parcoursadmin', compact('services','parcours','personnes','nouveau_services','count','n','c'));
       
        
    }
    
    public function parcours($id_personne){

        $parcours = $this->parcours->where('id_agent','<>','Null')->get();
        $services= $this->services->where('etat_service', '=', 'terminé')->OrderBy('date_echeance','asc')->paginate(5);
$nouveau_services =   Service::Where('etat_service','=' ,'en attente')->get();
       $count=count($nouveau_services);
        $n =   Service::Where('etat_service','=' ,'affecté')->get();
         $c=count($n);
        return view('parcours.liste_parcours',compact('services','nouveau_services','count','c','n'));
    }

    public function parcoursadmin()
    {
      $parcours = $this->parcours->get();
       $services= Service::get();
       foreach ($services as $service) {
         $personne = Personne::Where('id_personne','=' ,$service->id_agent)->get();
       }
       $personnes=$this->personnes->get();
     $nouveau_services =   Service::Where('etat_service','=' ,'en attente')->get();
       $count=count($nouveau_services);
        $n =   Service::Where('etat_service','=' ,'affecté')->get();
         $c=count($n);
        return view('parcours.liste_parcoursadmin', compact('agent','services','parcours','personnes','nouveau_services','count','n','c'));
       
    }

     public function accepter_parcours($id_service){
        $service = Service::findOrFail($id_service);
        $service->etat_service="affecté";
        $service->save();
        $nouveau_services =   Service::Where('etat_service','=' ,'en attente')->get();
       $count=count($nouveau_services);
        $n =   Service::Where('etat_service','=' ,'affecté')->get();
         $c=count($n);
        return redirect(route('parcours.parcoursadmin',compact('nouveau_services','count')))->with('message','la demande ' .$service->designation . ' est acceptée');
    }


public function Refuser_parcours($id_service){
        $service = Service::findOrFail($id_service);
        $service->etat_service="en attente";
        $service->id_agent=Null;
        $service->id_parcours=Null;
        $service->save();
        $nouveau_services =   Service::Where('etat_service','=' ,'en attente')->get();
       $count=count($nouveau_services);
        return redirect(route('parcours.parcoursadmin',compact('nouveau_services','count')))->with('message','la demande ' .$service->designation . ' est refusé');
    }
   
}

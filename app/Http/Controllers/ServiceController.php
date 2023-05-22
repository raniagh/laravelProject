<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Session;
use App\Http\Requests;
use App\Service;
use App\Personne;
use App\Facture;
use Illuminate\Support\Facades\Input;
use Date;
use DateTime;
use App\Parcour;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $services;
    protected $parcours;
     protected $personnes;



    public function __construct(Service $services,Parcour $parcours,Personne $personnes)
    {
        $this->services = $services;
         $this->parcours = $parcours;
          $this->personnes = $personnes;

        //parent::__construct();
    }
    
     public function index()

{
     $services = $this->services->where('type', '=', 1)
                                   ->orWhere('id_agent','=', Null)
                                   ->orWhere('id_parcours','=', Null)
        
                                  ->OrderBy('date_echeance','asc')->paginate(4);
        
        $personnes=$this->personnes->all();
       $nouveau_services =   Service::Where('etat_service','=' ,'en attente')->get();
       $count=count($nouveau_services);
      
       
    
        return view('services.liste_demande', compact('services','service','personnes','personne','nouveau_services','count','agen'));
    
  
   
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id_personne)
    {
        $personne = Personne::Where('id_personne','=' ,$id_personne)->firstOrfail();
         $nouveau_services =   Service::Where('etat_service','=' ,'en attente')->get();
       $count=count($nouveau_services);
      
        return view('services.demande', compact('personne','nouveau_services','count'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service = new Service();
        $this->validate($request, [
            'designation' => 'required',
             'description' => 'required',
            'point_depart' => 'required',
            'point_arrive' => 'required',
            'date_echeance' => 'required',
            'type'=> 'required',
            'id_personne' =>'required',

        ]);

        $service->designation = $request->designation;
        $service->description = $request->description;
        $service->point_depart = $request->point_depart;
        $service->point_arrive = $request->point_arrive ;
        $service->date_echeance= $request->date_echeance;
        $service->type= $request->type;
        $service->id_personne= $request->id_personne;
        $service->etat_service="en attente";
         $service->save();
         
       
        //return new Response( $service->type);

        /************ lacer parcours si type = partagé****************/
        if( $service->type == 0)
        {
            $parcour= new Parcour();
            $parcour->date_echeance= $request->date_echeance;
            $parcour->save();
            $service->id_parcours= $parcour->id_parcours;
            $service->save();
        }
        $personne= Personne::Where('id_personne','=' ,$service->id_personne)->first();
         return redirect(route('personnes.affiche',$personne))->with('message','bravo votre demande a été envoyée avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_service,$id_agent)
    {
       $service = Service::Where('id_service','=' ,$id_service)->first();
       $agent= Personne::Where('id_personne','=' ,$id_agent)->first();
      $nouveau_services =   Service::Where('etat_service','=' ,'en attente')->get();
       $count=count($nouveau_services);
      
        return view('services.show', compact('service','agent','nouveau_services','count'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_service)
    {
        $service = Service::where('id_service','=', $id_service)->delete();
        return redirect(route('services.index',compact('nouveau_services','count')))->with('message','la demande est supprimée');

    }

     public function supprimer($id_service)
    {

        $service = Service::where('id_service','=', $id_service)->delete();
         $services= $this->services->where('etat_service', '=', 'en cours')->get();
          $nouveau_services =   Service::Where('etat_service','=' ,'en attente')->get();
       $count=count($nouveau_services);
       return  redirect(route('services.afficheservice',$id_service,$nouveau_services,$services,$count))->with('message','demande a été refuser');
    }
    public function affecterservice($id_personne)
    {
        $services= $this->services->where('etat_service', '=', 'en cours')->get();

        $agent= Personne::Where('id_personne','=' ,$id_personne)->first();

     $nouveau_services =   Service::Where('etat_service','=' ,'en attente')->get();
       $count=count($nouveau_services);
      

        return view('services.services_cours',compact('services','agent','datestart','datediff','dateEnd','nom','prenom','personne','agen','nouveau_services','count'));
    }
    public function affecter($id_service,$id_personne)
    {
        $services= $this->services->where('etat_service', '=', 'en cours')->OrderBy('date_echeance','asc')->paginate(4);
        $service = Service::Where('id_service','=' ,$id_service)->first();
        $agent= Personne::Where('id_personne','=' ,$id_personne)->first();
        $service->id_agent=$id_personne;
        $service->etat_service="affecté";
        $service->save();
 
 $nouveau_services =   Service::Where('etat_service','=' ,'en attente')->get();
       $count=count($nouveau_services);
      
        /************ affecter l agent au  parcour en attente ****************/
        if( $service->type == 0 and $service->id_parcours != Null)
        {
            $parcour = Parcour::Where('id_parcours','=' , $service->id_parcours)->first(); 

            $parcour->id_agent= $service->id_agent;
            $parcour->save();
        }




return  redirect(route(['services.affecter',$id_service,$agent->id_personne],$nouveau_services,$agent,$services,$count))->with('message','Agent ' .$agent->prenom . ' a été affecté avec succés');
       
    }

    public function accepter($id_service){
     
        $service = Service::findOrFail($id_service);
        $service->etat_service="en cours";
        $service->save();
         $nouveau_services =   Service::Where('etat_service','=' ,'en attente')->get();
       $count=count($nouveau_services);
      
        return redirect(route('services.index',compact('nouveau_services','count')))->with('message','la demande ' .$service->designation . ' est acceptée');

    }

     public function refuser($id_service){
     
        $service = Service::findOrFail($id_service);
        $service->etat_service="refusé";
        $service->save();
         $nouveau_services =   Service::Where('etat_service','=' ,'en attente')->get();
       $count=count($nouveau_services);
      
        return redirect(route('services.index',compact('nouveau_services','count')))->with('message','la demande ' .$service->designation . ' est refusé');

    }
    public function accepterdemande($id_service){
        $service = Service::findOrFail($id_service);
        $service->etat_service="en cours";
        $service->save();
         $nouveau_services =   Service::Where('etat_service','=' ,'en attente')->get();
         $count=count($nouveau_services);
         $services =   Service::Where('etat_service','=' ,'en attente')->get();
        return view('services.Recherche',compact('nouveau_services','services','count'))->with('message','la demande ' .$service->designation . ' est acceptée');

    }

     public function accepter_demande($id_service){
        $nouveau_services =   Service::Where('etat_service','=' ,'en attente')->get();
        $count=count($nouveau_services);
        $service = Service::findOrFail($id_service);
        $service->etat_service="en cours";
        $service->save();
         $nouveau_services =   Service::Where('etat_service','=' ,'en attente')->get();
       $count=count($nouveau_services);
      
        return view('hello',compact('nouveau_services','count'))->with('message','la demande ' .$service->designation . ' est acceptée');
    }

    public function parcours($id_personne){
        $personne = Personne::findOrFail($id_personne);
        $parcours = $this->parcours->where('id_agent','<>','Null')->OrderBy('id_parcours','desc')->paginate(2);
        $services= $this->services->all();
         $nouveau_services =   Service::Where('etat_service','=' ,'en attente')->get();
       $count=count($nouveau_services);
      
    return view('parcours.liste_parcours',compact('services','parcours','personne',compact('nouveau_services','count')));
    }

     public function rejoindre($id_personne,$id_parcours){
        $parcour = Parcour::findOrFail($id_parcours);
        $personne = Personne::findOrFail($id_personne);
        return view('services.demandepartage', compact('personne','parcour',compact('nouveau_services','count')));
    }
     public function rejoindreparcour(Request $request ,$id_personne,$id_parcours){
          $personne = Personne::findOrFail($id_personne);
          $parcour = Parcour::findOrFail($id_parcours);
          $service = new Service();
         $this->validate($request, [
            'designation' => 'required',
            'description' => 'required',
            'point_depart' => 'required',
            'point_arrive' => 'required',
           

        ]);
         $service->designation = $request->designation;
        $service->description = $request->description;
        $service->point_depart = $request->point_depart;
        $service->point_arrive = $request->point_arrive;
        $service->date_echeance=  $parcour->date_echeance;
        $service->type=0;
        $service->id_parcours= $parcour->id_parcours;
        $service->id_agent= $parcour->id_agent;
        $service->id_personne= $request->id_personne;
        $service->etat_service="en attente";
        $service->save();
         return view('app.accueil_client', compact('personne','parcour'));
    }

    public function Recherche()
    {
        $keyword = Input::get('keyword');
        $services = $this->services
            ->where('date_echeance', 'like', '%' . $keyword . '%')
            ->Orwhere('point_depart', 'like', '%' . $keyword . '%')
            ->Orwhere('point_arrive', 'like', '%' . $keyword . '%')
            ->orwhere('etat_service', 'like', '%' . $keyword . '%')
            ->OrderBy('date_echeance','asc')->paginate(5);
             $nouveau_services =   Service::Where('etat_service','=' ,'en attente')->get();
       $count=count($nouveau_services);
      
        return view('services.Recherche', compact('services','nouveau_services','count'));

    }
     public function consulte($id_service,$id_agent,$id_personne)
    {
       $service = Service::Where('id_service','=' ,$id_service)->first();
       $agent= Personne::Where('id_personne','=' ,$id_agent)->first();
       $client= Personne::Where('id_personne','=' ,$id_personne)->first();
      $nouveau_services =   Service::Where('etat_service','=' ,'en attente')->get();
       $count=count($nouveau_services);
      
        return view('services.consulte', compact('service','agent','client',compact('nouveau_services','count')));
    }

    
  public function consulter_services($id_personne)
    {
      $personne= Personne::Where('id_personne','=' ,$id_personne)->first();
      $designation='papiers universitaires';
      
        return view('services.consulter_service',compact('personne','designation'));
    }
     public function afficheservice()
    {
        $services= $this->services->where('etat_service', '=', 'en cours')->OrderBy('date_echeance','asc')->paginate(4);
        
      
 
 $nouveau_services =   Service::Where('etat_service','=' ,'en attente')->get();
       $count=count($nouveau_services);
      
        /************ affecter l agent au  parcour en attente ****************/
       
        return view('services.affiche_servicesencours',compact('nouveau_services','services','agent','count'));

 }


  public function calcul($id_service)
    {
         $nouveau_services =   Service::Where('etat_service','=' ,'en attente')->get();
       $count=count($nouveau_services);
      $service = Service::Where('id_service','=' ,$id_service)->firstOrfail();
      
        return view('services.tarif',compact('service','nouveau_services','count'));
    }
     public function montant($id_service,Request $request)
    {
         $nouveau_services =   Service::Where('etat_service','=' ,'en attente')->get();
       $count=count($nouveau_services);
      $service = Service::Where('id_service','=' ,$id_service)->firstOrfail();
       
        $service->montant = $request->montant;
        $service->frais_transport= $request->frais_transport;
        $service->save();
        $somme= $service->montant + $service->frais_transport;
        $service->montant_total=$somme; 
         $service->etat_service="archivé";
           $service->save();
           return redirect(route('services.index',compact('nouveau_services','count','service','services','frais')))->with('message','Le tarif du serrvice' .$service->designation . ' a été calculé avec succés');
       }

        public function calcultarif($id_service)
    {
         $nouveau_services =   Service::Where('etat_service','=' ,'en attente')->get();
       $count=count($nouveau_services);
      $service = Service::Where('id_service','=' ,$id_service)->firstOrfail();
      $services = Service::where('id_parcours', '=', $service->id_parcours)->get();
         $nbr_client = count($services);
       $service->etat_service="archivé";
        return view('services.divisertarif',compact('service','nouveau_services','count','nbr_client'));
    }

 public function divisertarif($id_service,Request $request)
    {
         $nouveau_services =   Service::Where('etat_service','=' ,'en attente')->get();
       $count=count($nouveau_services);
       $service = Service::Where('id_service','=' ,$id_service)->firstOrfail();
       $service->etat_service = "archivé";
       $service->montant = $request->montant;
       $services = Service::where('id_parcours', '=', $service->id_parcours)->get();
         $nbr_client = count($services);
       $frais=($request->frais_transport)/$nbr_client;

        $somme= $service->montant + $frais;
        $service->montant_total=$somme; 
        $service->frais_transport = $request->frais_transport;
           $service->save();
          return redirect(route('services.index',compact('nouveau_services','count','service','services','frais','nbr_client')));
      }
public function facture($id_personne)
    {
        $personne = Personne::Where('id_personne','=' ,$id_personne)->firstOrfail();
        $services=Service::Where('id_personne','=' ,$id_personne)->get();
        $facture= new Facture();
        $facture->date='17/05/2017';
        $facture->save();
        $somme=0;
        $somme_remise=0;
        foreach ($services as $service) {
        $service->id_facture= $facture->id_facture;
         $somme=$somme+ $service->montant_total ;
         $remise= ($service->montant + $service->frais_transport) - $service->montant_total ;
        $somme_remise=$somme_remise + $remise ;
        $service->save();
        }
      
     $nouveau_services =   Service::Where('etat_service','=' ,'en attente')->get();
       $count=count($nouveau_services);
        $n =   Service::Where('etat_service','=' ,'affecté')->get();
         $c=count($n);
        return view('services.facture', compact('services','personne','parcours','personnes','nouveau_services','count','n','c','facture','somme','remise','somme_remise'));
      }

public function service_client()
    {
         
       $services=Service::Where('etat_service','=' ,'archivé')->get();
       $personnes =$this->personnes
                  ->join('services', function ($join) {
            $join->on('personnes.id_personne', '=', 'services.id_personne');        
        })
        ->get();
       $factures = $this->personnes
                  ->join('services', function ($join) {
            $join->on('personnes.id_personne', '=', 'services.id_personne');
                 
        })
        ->get();
       

       $nouveau_services =   Service::Where('etat_service','=' ,'en attente')->get();
       $count=count($nouveau_services);
       $n =   Service::Where('etat_service','=' ,'affecté')->get();
       $c = count($n);
        return view('services.service_client', compact('factures','services','parcours','personnes','nouveau_services','count','n','c'));
      }



    
}

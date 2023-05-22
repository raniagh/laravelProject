<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Personne;
use App\Service;
use Image;
use Session;
use Illuminate\Support\Facades\Input;


class AgentController extends Controller
{
    protected $agents;
    public $nbr_service;

    public function __construct(Personne $agents)
    {
        
        $this->agents = $agents;
        //parent::__construct();
    }

    public function index()

{
       $nouveau_services =   Service::Where('etat_service','=' ,'en attente')->get();
      $count=count($nouveau_services);
        $n =   Service::Where('etat_service','=' ,'affecté')->get();
         $c=count($n);
        $agents= $this->agents->where('role', '=', 'Agent')->OrderBy('id_personne','asc')->paginate(5);
    
        return view('agents.index', compact('agents','personne','nouveau_services','count','agen','n','c'));
    
  
   
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(Personne $agent)
    {
     $nouveau_services =   Service::Where('etat_service','=' ,'en attente')->get();
      $count=count($nouveau_services);
        $n =   Service::Where('etat_service','=' ,'affecté')->get();
         $c=count($n);
    
        return view('agents.form', compact('agents','personne','nom','prenom','agen','n','c'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $agent = new Personne();
        $this->validate($request, [
            'nom' => 'required|alpha',
            'prenom' => 'required|alpha',
            'Num_tel' => 'required|numeric',
            'adresse' => 'required',
            'region' => 'required',
            'email' => 'required|email|unique:personnes,email',
            'password' => 'required|confirmed|min:6',
            'etat'=> 'required',

        ]);
        $agent->agen = $request->agen;
        $agent->nom = $request->nom;
        $agent->prenom = $request->prenom;
        $agent->Num_tel = $request->Num_tel;
        $agent->adresse = $request->adresse;
        $agent->region = $request->region;
        $agent->email = $request->email;
        $agent->password = $request->password;
        $agent->role = "Agent";
        $agent->etat = $request->etat;
        $agent->save();
 $nouveau_services =   Service::Where('etat_service','=' ,'en attente')->get();
      $count=count($nouveau_services);
       
        return redirect(route('agents.index'))->with('message','Agent ' .$agent->prenom . ' a été ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_personne,Request $request)
    {
        $agent = Personne::findOrFail($id_personne);
        if($request->hasFile('agen')){
            $agen=$request->file('agen');
            $filename=time().'.'.getClientOriginalExtension();
            Image::make($agen)->resize(300,300)->save(public_path('/img/photos/'.$filename));
            $agent = new Personne();
            $agent->agen = $filename;
            $agent->save();
        }
        $services= Service::where('id_agent', '=',$id_personne)->get();

        $nbr_service=$services->count();
        $nouveau_services =   Service::Where('etat_service','=' ,'en attente')->get();
        $count=count($nouveau_services);
        $n =   Service::Where('etat_service','=' ,'affecté')->get();
         $c=count($n);
        return view('agents.show', compact('agent','services','service','nbr_service','personne','nom','prenom','agen','n','c','count','nouveau_services'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_personne)
    {
        $agent = Personne::findOrFail($id_personne);
         $nouveau_services =   Service::Where('etat_service','=' ,'en attente')->get();
      $count=count($nouveau_services);
        $n =   Service::Where('etat_service','=' ,'affecté')->get();
         $c=count($n);
        return view('agents.edit', compact('agent','personne','nom','prenom','agen','count','nouveau_services','n','c'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_personne)
    {
        $this->validate($request, [
            'nom' => 'required|alpha',
            'prenom' => 'required|alpha',
            'Num_tel' => 'required|numeric',
            'adresse' => 'required',
            'region' => 'required',
            'etat'=> 'required',

        ]);
        $agent= Personne::findOrFail($id_personne);
        $agent->fill($request->only('nom', 'prenom','Num_tel','adresse', 'region','etat','email','agen'))->save();

        return redirect()->route('agents.index')->with('message','Agent ' .$agent->prenom . ' a été modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_personne)
    {
        $agent = Personne::where('id_personne','=', $id_personne)->delete();
         $nouveau_services =   Service::Where('etat_service','=' ,'en attente')->get();
      $count=count($nouveau_services);
        $n =   Service::Where('etat_service','=' ,'affecté')->get();
         $c=count($n);
        return redirect(route('agents.index'))->with('message','Agent a été supprimé avec succès');
    }

    public function font_agent($id_personne)
    {
       $personne = Personne::Where('id_personne','=' ,$id_personne)->firstOrfail();
        $agents= $this->agents->where('role', '=', 'Agent')->OrderBy('id_personne','asc')->paginate(5);

        return view('agents.font_agent',compact('agent','agents','personne'));
    }


    public function liste()
    {
        $agents= $this->agents->where('role', '=', 'agent')->get();

        return view('agents.liste',compact('agent','agents','agents','agent'));
    }

    public function profile($id,$id_personne,Request $request)
    {
        $agent = Personne::findOrFail($id);
        if($request->hasFile('agen')){
            $agen=$request->file('agen');
            $filename=time().'.'.getClientOriginalExtension();
            Image::make($agen)->resize(300,300)->save(public_path('/img/photos/'.$filename));
            $agent = new Personne();
            $agent->agen = $filename;
            $agent->save();
        }
        $personne = Personne::Where('id_personne','=' ,$id_personne)->firstOrfail();

        return view('agents.profile', compact('agent','personne'));
    }

    public function affecteragent($id_personne)
    {
      
        $agent = Personne::findOrFail($id_personne)->get();
          $nouveau_services =   Service::Where('etat_service','=' ,'en attente')->get();
      $count=count($nouveau_services);
        $n =   Service::Where('etat_service','=' ,'affecté')->get();
         $c=count($n);
        return redirect()->route('services.affecterservice',compact('agent','personne','nom','prenom','agen','n','c'))->with('id_personne',$id_personne);
    }
    public function Recherche()
    {
        $keyword = Input::get('keyword');
        if($keyword=='disponible')
            $agents = $this->agents->where('etat','=','1'  )->OrderBy('id_personne','asc')->paginate(5);
        elseif($keyword=='non disponible')
            $agents = $this->agents->where('etat','=','0'  )->OrderBy('id_personne','asc')->paginate(5);
        else
        $agents = $this->agents
                      ->where('Num_tel', 'like', '%' . $keyword . '%')
                       ->Orwhere('email', 'like', '%' . $keyword . '%')
                       ->orwhere('etat', 'like', '%' . $keyword . '%')
                      ->OrderBy('id_personne','asc')->paginate(5);

                $nouveau_services =   Service::Where('etat_service','=' ,'en attente')->get();
      $count=count($nouveau_services);       
     $n =   Service::Where('etat_service','=' ,'affecté')->get();
         $c=count($n);
        return view('agents.Recherche', compact('agents', 'agent','personne','nom','prenom','agen','nouveau_services','count','n','c'));

    }
    public function calcul_salaire($id_personne){
      
      $agent = Personne::findOrFail($id_personne)->get();
    

    }

}

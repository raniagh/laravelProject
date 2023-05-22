<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Personne;


class ClientController extends Controller
{
    protected $clients;

    public function __construct(Personne $clients)
    {
        $this->clients = $clients;
        //parent::__construct();
    }

    public function index()
    {

        $clients= $this->clients->where('role', '=', 'Client')->OrderBy('id_personne','asc')->paginate(5);
        return view('clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Personne $client)
    {
        return view('clients.form', compact('client'));
    }
    public function store(Request $request)
    {

        $client = new Personne();
        $this->validate($request, [
            'nom' => 'required|alpha',
            'prenom' => 'required|alpha',
            'Num_tel' => 'required|numeric',
            'adresse' => 'required',
            'region' => 'required',
            'cin'=>'required|numeric|unique:personnes,cin',
            'email' => 'required|email|unique:personnes,email',
            'password' => 'required|confirmed|min:6',


        ]);
        $client->nom = $request->nom;
        $client->prenom = $request->prenom;
        $client->Num_tel = $request->Num_tel;
        $client->adresse = $request->adresse;
        $client->region = $request->region;
        $client->email = $request->email;
        $client->password = $request->password;
        $client->cin = $request->cin;
        $client->role = "Client";
        $client->save();
        return redirect(route('personnes.connexion'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_personne)
    {
        $client = Personne::findOrFail($id_personne);
        $services = Service::where('$id_personne', '=',$id_personne)
            ->get();

        return view('clients.show', compact('client', 'services'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_personne)
    {
        $client = Personne::findOrFail($id_personne);
        return view('clients.edit', compact('client'));
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
        $client = Personne::findOrFail($id_personne);
        $client->fill($request->only('nom', 'prenom','Num_tel','adresse', 'region','email', 'password','cin'))->save();

        return redirect()->route('personnes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_personne)
    {
        $client = Personne::where('id_personne','=', $id_personne)->delete();
        return redirect(route('clients.index'));
    }





}

<?php

namespace App\Http\Controllers;

use App\Description;
use Illuminate\Http\Request;
use App\Document;
use App\Commentaire;
use App\Service;
use App\Http\Requests;
use Session;

class DescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id_document)
    {
        $Document = Document::findOrFail($id_document);
        
    $Commentaire = Commentaire::where('id_document','=', $id_document)->delete();
        $nouveau_services =   Service::Where('etat_service','=' ,'en attente')->get();
        $count=count($nouveau_services);
         $n =   Service::Where('etat_service','=' ,'affecté')->get();
         $c=count($n);
        return view('descriptions.form', compact('Document','nouveau_services','count','n','c'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
        $Description = new Description();
        $this->validate($request, [
            'titre' => 'required|max:40',
            'contenu' => 'required',
            'id_document' =>'required',

        ]);

        $Description->titre = $request->titre;
        $Description->contenu= $request->contenu;
        $Description->id_document = $request->id_document;
        $Description->save();

        $descriptions = Description::all();
        $Document = Document::Where('id_document', '=',$Description->id_document)->get()->first();
       
        $nouveau_services =   Service::Where('etat_service','=' ,'en attente')->get();
        $count=count($nouveau_services);
         $n =   Service::Where('etat_service','=' ,'affecté')->get();
         $c=count($n);
        return redirect(route('documents.show',$Document,$Description,$descriptions,$nouveau_services,$count,$n,$c))->with('message',' ' .$Description->titre . ' a été ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_document)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_description)
    {
        $description = Description::findOrFail($id_description);
        
        $nouveau_services =   Service::Where('etat_service','=' ,'en attente')->get();
   $count=count($nouveau_services);
    $n =   Service::Where('etat_service','=' ,'affecté')->get();
         $c=count($n);
        return view('descriptions.edit', compact('description','personne','nom','prenom','agen','nouveau_services','count','n','c'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_description)
    {
        

        $this->validate($request, [
            'titre' => 'required|max:15',
            'contenu' => 'required',
            
        ]);
        $description = Description::findOrFail($id_description);
        $description->fill($request->only('titre', 'contenu'))->save();
        $Document = Document::Where('id_document', '=',$description->id_document)->get()->first();
        $descriptions = Description::all();
       
        $nouveau_services =   Service::Where('etat_service','=' ,'en attente')->get();
        $count=count($nouveau_services);
         $n =   Service::Where('etat_service','=' ,'affecté')->get();
         $c=count($n);
        return redirect(route('documents.show',$Document,$description,$descriptions,$nouveau_services,$count,$n,$c))->with('message',' ' .$description->titre . ' a été modifié avec succès');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_description)
    {
        $description= Description::Where('id_description','=' ,$id_description)->firstOrfail();
        $Document = Document::Where('id_document', '=',$description->id_document)->get()->first();
        $description = Description::where('id_description','=', $id_description)->delete();
        $descriptions = Description::all();

        $nouveau_services =   Service::Where('etat_service','=' ,'en attente')->get();
        $count=count($nouveau_services);
         $n =   Service::Where('etat_service','=' ,'affecté')->get();
         $c=count($n);
       return redirect(route('documents.show',$Document,$description,$descriptions,$nouveau_services,$count,$n,$c))->with('message','la description a été supprimé avec succès');
    }
}


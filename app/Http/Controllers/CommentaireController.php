<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Document;
use App\Commentaire;
use App\Description;
use App\Personne;

class CommentaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id_document,$id_perosnne)
    {
        $Document = Document::findOrFail($id_document);
        return view('commentaires.form', compact('Document'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id_personne)
    {


     
        $Commentaire = new Commentaire();
        $this->validate($request, [
            'contenu' => 'required|max:255',
            'id_document' =>'required',
           
           


        ]);

         $Commentaire->contenu = $request->contenu;
         $Commentaire->id_document = $request->id_document;
          $Commentaire->save();
         $Document = Document::Where('id_document', '=',$Commentaire->id_document)->get()->first();
         $descriptions= Description::where('id_document', '=',$Commentaire->id_document)->get();
         $personne = Personne::Where('id_personne','=' ,$id_personne)->firstOrfail();
       
         $commentaires = Commentaire::all();
       

        return view('documents.consulterclient',compact('Document','descriptions','personne','commentaires'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    public function destroy($id_commentaire)
    {
       $Commentaire = Commentaire::Where('id_commentaire','=' ,$id_commentaire)->firstOrfail();
        $Document = Article::Where('id_document', '=',$Commentaire->id_document)->get()->first();
        $Commentaire = Commentaire::where('id_commentaire','=', $id_commentaire)->delete();

        $comments = Commentaire::all();

        return view('documents', compact('comments','Article'));
    }
}

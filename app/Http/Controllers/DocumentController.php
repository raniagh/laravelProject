<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Document;
use App\Description;
use App\Commentaire;
use App\Personne;
use App\Service;
use Input;
use Image;
use Session;


class DocumentController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        protected $documents;
        protected $descriptions;
         protected $personnes;

    public function __construct(Document $documents,Description $descriptions,Personne $personnes)
    {
        $this->documents = $documents;
        $this->personnes = $personnes;
        $this->descriptions = $descriptions;
        //parent::__construct();
    }

     public function index()

{
       $nouveau_services =   Service::Where('etat_service','=' ,'en attente')->get();
      $count=count($nouveau_services);
         $n =   Service::Where('etat_service','=' ,'affecté')->get();
         $c=count($n);
       $documents = $this->documents->OrderBy('id_document','asc')->paginate(5);
    
        return view('documents.index', compact('documents','personne','nouveau_services','count','agen','n','c'));
    
  
   
}

   


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Document $Document)

    {
        $nouveau_services =   Service::Where('etat_service','=' ,'en attente')->get();
        $count=count($nouveau_services);
         $n =   Service::Where('etat_service','=' ,'affecté')->get();
         $c=count($n);
        $documents = $this->documents->OrderBy('id_document','asc')->paginate(5);
    
        return view('documents.form', compact('documents','personne','nouveau_services','count','agen','n','c'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Document = new Document();
        $this->validate($request, [
            'titre' => 'required|unique:documents,titre|max:30',
            
        ]);

        $Document->titre = $request->titre;
        $Document->date_publication= $request->date_publication;
        $Document->nom_fichier = $request->nom_fichier;
        $Document->nom_video= $request->nom_video;
        $Document->avatar= $request->avatar;

        $Document->save();
       
        $nouveau_services =   Service::Where('etat_service','=' ,'en attente')->get();
      $count=count($nouveau_services);
        return redirect(route('documents.index'))->with('message','bravo le' .$Document->titre . ' a été créé avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id_document)
    {
        $Document = Document::findOrFail($id_document);
        if($request->hasFile('avatar')) {
            $Document = $request->file('avatar');
            $filename = time() . '.' . getClientOriginalExtension();
            Image::make($Document)->resize(50,50)->save(public_path('/img/photos/' . $filename));
            $Document = new Document();
            $Document->agen = $filename;
            $Document->save();
        }
       
        $descriptions= $this->descriptions->get();
        $commentaires = Commentaire::where('id_document', '=',$id_document)
            ->get();

     $nouveau_services =   Service::Where('etat_service','=' ,'en attente')->get();
        $count=count($nouveau_services);
         $n =   Service::Where('etat_service','=' ,'affecté')->get();
         $c=count($n);
        return view('documents.show', compact('Document','descriptions','commentaires','personne','nouveau_services','count','agen','c','n'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $idf
     * @return \Illuminate\Http\Response
     */
    public function edit($id_document)
    {
        $Document = Document::findOrFail($id_document);
         $nouveau_services =   Service::Where('etat_service','=' ,'en attente')->get();
      $count=count($nouveau_services);
       $n =   Service::Where('etat_service','=' ,'affecté')->get();
         $c=count($n);
        return view('documents.edit', compact('Document','nouveau_services','count','personne','nom','prenom','agen','n','c'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_document)
    {$this->validate($request, [
        'titre' => 'required|unique:documents,titre',
        'date_publication' => 'required',
    ]);
        $Document = Document::findOrFail($id_document);
        $Document->fill($request->only('titre', 'date_publication','avatar'))->save();
        $nouveau_services =   Service::Where('etat_service','=' ,'en attente')->get();
      $count=count($nouveau_services);

        return redirect(route('documents.index',$count))->with('message','le document ' .$Document->titre . ' a été modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_document)
    {
        $Document = Document::where('id_document','=', $id_document)->delete();
        $Description = Description::where('id_document','=', $id_document)->delete();
        $Commentaire = Commentaire::where('id_document','=', $id_document)->delete();
        $nouveau_services =   Service::Where('etat_service','=' ,'en attente')->get();
      $count=count($nouveau_services);
        return redirect(route('documents.index'))->with('message','le document a été suppimé avec succès!');
    }

    public function consulter( $id_document)
    {
        $documents = $this->documents->all();

        $descriptions= Description::where('id_document', '=',$id_document)->get();
$commentaires = Comment::where('id_document', '=',$id_document)
            ->get();
$nouveau_services =   Service::Where('etat_service','=' ,'en attente')->get();
      $count=count($nouveau_services);
       $n =   Service::Where('etat_service','=' ,'affecté')->get();
         $c=count($n);
        return view('documents.consulter', compact('Document','description','descriptions','documents','personne','nom','prenom','agen','n','c'));
    }
    public function papier($id_document)
    {
        $documents = $this->documents->all();
        $descriptions= Description::where('id_document', '=',$id_document)->get();
        $commentaires = Comment::where('id_document', '=',$id_document)
            ->get();
            $nouveau_services =   Service::Where('etat_service','=' ,'en attente')->get();
      $count=count($nouveau_services);

        return view('documents.papier',compact('Document','documents','descriptions','description'));
    }

    public function desc_client( $id_document,$id_description)
    {
        $documents = $this->documents->all();
        $Document = Document::findOrFail($id_document);
        $description = Description::findOrFail($id_description);
        //$description= Description::where('id_description', '=',$id_description)->get();

        //$description = Description::where('id_document','=', $id_document)->get();
        return view('documents.desc_client', compact('Document','description','documents'));
    }


    public function papierclient($id_personne)
    {
        $personne = Personne::Where('id_personne','=' ,$id_personne)->firstOrfail();
          $documents = $this->documents->OrderBy('id_document','asc')->paginate(5);
       
        return view('documents.papierclient',compact('Document','documents','personne'));
    }

    public function consulterclient( $id_personne,$id_document)
    {
          
         $Document = Document::findOrFail($id_document);
         $personne = Personne::Where('id_personne','=' ,$id_personne)->firstOrfail();
        
         $commentaires = Commentaire::where('id_document', '=',$id_document)
            ->get();
       $descriptions= Description::where('id_document', '=',$id_document)->get();

        return view('documents.consulterclient', compact('Document','description','descriptions','documents','personne','commentaires'));
    }

     public function Recherche()
    {
        $keyword = Input::get('keyword');
        $documents = $this->documents
                      ->where('titre', 'like', '%' . $keyword . '%')
                      ->OrderBy('id_document','asc')->paginate(5);

           $n =   Service::Where('etat_service','=' ,'affecté')->get();
         $c=count($n);           
        $nouveau_services =   Service::Where('etat_service','=' ,'en attente')->get();
        $count=count($nouveau_services);
        return view('documents.Recherche', compact('documents','nouveau_services','count','n','c'));

    }


}

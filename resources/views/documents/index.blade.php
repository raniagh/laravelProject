

@extends('layout1')
@section('title', 'documents')
@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <section class="panel">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
       
                        @if(Session()->has('message'))
                            <div class="alert alert-success fade in" id="y">
                                <button data-dismiss="alert" class="close close-sm" type="button">
                                    <i class="fa fa-times"></i>
                                </button>{{Session::get('message') }}</div>
                        @endif
                        

                </div>
                </div>
                  <div class="row">
                <div class="pull-right">
                        {{Form::open(array('url'=>'documents/recherche'))}}
                            <div class="form-group has-feedback">
                                <input type="text" class="form-control search" name="keyword" id="keyword" placeholder="Rechercher ici">
                            </div>
                        {!! Form::close() !!}
                    </div>
                        </div>
                <header class="panel-heading">
                    <h1 id="z" style="display:none">Gestion des documents</h1>
                    <a href="/mails/envoie"> </a>
                </header>
                <div class="panel-body">
                    <section class="panel">
                        <header >
                            <h3><i class="fa fa-book"></i>Documents</h3>
                            
                            <a rel="tooltip" title="Ajouter document" id="editable-sample_new" style="padding-bottom: 3px; padding-top: 1px;" class=" btn btn-primary pull-right" href="{{ route('documents.create')}}"> Ajouter nouveau document <i class="fa fa-plus"></i></a>
                        </header>

                                    <table class="table table-striped table-advance table-hover">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Titre</th>
                                            <th>Image</th>
                                            <th>Nom de fichier</th>
                                            <th>date de publication</th>
                                            <th> Action</th>
                                        <th></th>
                                           
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if($documents->isEmpty())
                                            <tr>
                                                <td colspan="5" align="center"> il n'y a aucun document</td>
                                            </tr>
                                        @else
                                            @foreach($documents as $Document)
                                                <tr>
                                                    <td>{{$Document->id_document}}</td>
                                                    <td>{{$Document->titre}}</td>
                                                    <td> <a href="{{ route('documents.show', [ $Document->id_document]) }}"><img alt="" class="" src="/img/photos/{{$Document->avatar}}"></a></td>
                                                    <td>{{$Document->nom_fichier}}</td>
                                                    <td>{{$Document->date_publication}}</td>
                                                    <td>
                                                        <a class="btn btn-info btn-xs" href="{{ route('documents.edit', $Document->id_document) }}" rel="tooltip" title="Modifier ce document">
                                                            <i class="fa fa-pencil"></i>Modifier</a>
                                                        
                                                        <a href="{{ route('documents.show',[ $Document->id_document]) }}" class="btn btn-success btn-xs" rel="tooltip" title="consulter ce document et ses descriptions"><i class="fa fa-eye"></i> Voir </a>
                                                      
                                                        <td>
                                                        <form action="{{ route('documents.destroy', $Document->id_document) }}" method="patch">
                                                                {!! Form::submit('Supprimer', ['class' => 'btn btn-danger', 'onclick' => 'return confirm(\'Voulez-vous Vraiment supprimer ce document ?\')']) !!}
                                                        </form>
                                                    </td>
                                                
                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                        <div class="text-center">
                            {!! $documents->links(); !!}
                        </div>
                        </section>
                        </div>
                </div>
                    </section>
                    <!-- page end-->
            </section>
        </section>
        <!--main content end-->
@endsection

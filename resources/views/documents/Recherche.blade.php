

@extends('layout1')
@section('title', 'documents')
@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <section class="panel">
                @if(count($documents)>0)
                <header class="panel-heading">
                    <h1 id="z" style="display:none">Gestion des documents</h1>
                </header>
                <div class="panel-body">
                    <section class="panel">
                        <header >
                          <h3> <i class="fa fa-book"></i>Document</h3>

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


                    </section>

                    @else
                <div class="panel-body">
                    <p> Document introuvable.</p>
                </div>
                    @endif
            </section>
        </section>

@endsection

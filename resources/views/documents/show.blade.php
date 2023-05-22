
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
                <header class="panel-heading">
                     <h1 id="z" style="display:none; text-align: center;">{{ $Document->titre}}</h1>
                    <h3 id="z" style="display:none;text-align: center;">{{ $Document->date_publication}}</h3>

            <!-- page start-->
                </header>
                 
                <div class="panel-body">
            <section class="panel">
                        <header >
                            <h3><i class="fa fa-lightbulb-o"></i>Descriptions</h3>
                              <a rel="tooltip" title="Ajouter descriprtion" id="editable-sample_new" style=" margin-top:1px; padding-bottom: 4px; padding-top: 5px;" class=" btn btn-primary pull-right" href="{{ route('descriptions.create', $Document->id_document) }}" rel="tooltip" title="Vous pouvez ajouter une description concernant ce document"> Ajouter nouvelle description <i class="fa fa-plus"></i></a>
                        </header>
                <table class="table table-striped table-advance table-hover">
                    <thead>
        <tr>
            <th>#</th>
            <th>Titre</th>
           <th>Contenu</th>
           <th>Action</th>
                                        
        </tr>
        </thead>
        <tbody>
        @if($descriptions->isEmpty())
            <tr>
                <td colspan="4" align="center">Aucune description </td>
            </tr>
        @else
            @foreach($descriptions as $description)
             @if($description->id_document == $Document->id_document)
                <tr>
                 <td>
                        {{ $description->id_description}}
                    </td>
                    <td>
                        {{ $description->titre }}
                    </td>
                    <td>{{ $description->contenu}}</td>
                    <td>

                        <a class="btn btn-info btn-xs" href="{{ route('descriptions.edit', $description->id_description) }}"rel="tooltip" title="Modifier"> <i class="fa fa-pencil"></i>Modifier</a></td>
                        <td>
  <form action="{{ route('descriptions.destroy', $description->id_description) }}" rel="tooltip" title="Supprimer" method="patch">
                                                                {!! Form::submit('Supprimer', ['class' => 'btn btn-danger', 'onclick' => 'return confirm(\'Voulez-vous Vraiment supprimer cette description ?\')']) !!}
                                                        </form>
                        </td>
                </tr>
                @endif
            @endforeach
        @endif

        </tbody>
    </table>

                       
</section>
</div>
                    <a href="javascript:history.back()" class="btn btn-warning">
                        <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
                    </a>
                    
                  
            </div>
            </section>
            </section>
            </section>
            

    @endsection
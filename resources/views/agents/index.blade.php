

@extends('layout1')
@section('title', 'Agents')
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
                        {{Form::open(array('url'=>'agents/recherche'))}}
                            <div class="form-group has-feedback">
                                <input type="text" class="form-control search" name="keyword" id="keyword" placeholder="Rechercher ici">
                            </div>
                        {!! Form::close() !!}
                    </div>
                        </div>
                <header class="panel-heading">
                    <h1 id="z" style="display:none">Gestion des agents</h1>
                </header>
                <div class="panel-body">
                    <section class="panel">
                        <header >
                            <h3><i class="fa fa-users"></i>Agents</h3>
                             <a id="editable-sample_new" style="padding-bottom: 3px; padding-top: 1px;" class=" btn btn-primary pull-right" href="{{ route('agents.create')}}"> Ajouter  nouvel agent<i class="fa fa-plus"></i></a>
                    <section class="panel">
                        </header>
  <table class="table table-striped table-advance table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th> Nom</th>
                                <th> Prénom</th>
                                <th>etat</th>
                                <th>email</th>
                                <th>Action</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($agents->isEmpty())
                                <tr>
                                    <td colspan="11" align="center"> il n'y a aucun agent</td>
                                </tr>
                            @else
                                @foreach($agents as $agent)
                                    <tr>

                                        <td>{{$agent->id_personne}}</td>
                                        <td>{{$agent->nom}}</td>
                                        <td>{{$agent->prenom }}</td>
                                        <td>
                                        @if($agent->etat)
                                                <span class="badge bg-success">disponible</span>
                                            @else
                                                <span class="badge bg-important">non disponible</span>
                                            @endif
                                        </td>
                                        <td>{{$agent->email}}</td>
                                       <td>
                                        <a class="btn btn-info btn-xs" href="{{ route('agents.show', $agent->id_personne) }}" rel="tooltip" title="voir profile agent">
                                                <i class="fa fa-eye"></i></a>
                                            <a class="btn btn-primary btn-xs" href="{{ route('agents.edit', $agent->id_personne) }}" rel="tooltip" title="Modifier">
                                                <i class="fa fa-pencil"></i></a>
                                                <a 
                                        </td>
                                        <td>
                                            <form action="{{ route('personnes.destroy', $agent->id_personne) }}" method="patch">
                                                    {!! Form::submit('Supprimer', ['class' => 'btn btn-danger', 'onclick' => 'return confirm(\'Voulez-vous Vraiment supprimer cet agent ?\')']) !!}
                                            </form>

                                        </td>
                                    </tr>

                                @endforeach
                            @endif

                            </tbody>

                        </table>
                                    <div class="text-center">
                                        {!! $agents->links(); !!}
                                    </div>
                    </section>
                    </div>

            </section>

        </section>
    </section>

@endsection






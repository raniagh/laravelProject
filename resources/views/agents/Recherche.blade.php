

@extends('layout1')
@section('title', 'Agents')
@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <section class="panel">
             <a id="editable-sample_new" style="padding-bottom: 3px; padding-top: 1px;" class=" btn btn-primary pull-right" href="{{ route('services.afficheservice')}}">Consulter services en cours</a>
                @if(count($agents)>0)
                <header class="panel-heading">
                    <h1>Gestion des agents</h1>
                    
                </header>
               

                </div>
                <div class="panel-body">
                    <section class="panel">
                        <header >
                            <i class="fa fa-users"></i>Agents

                        </header>

                                    <table class="table table-striped table-advance table-hover">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th> Nom</th>
                                            <th> Prénom</th>
                                            <th> email</th>
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
                                                    <td>{{$agent->email }}</td>
                                                    <td>

                                                        <a class="btn btn-info btn-xs" href="{{ route('agents.show', $agent->id_personne) }}" rel="tooltip" title="voir profile agent">
                                                            <i class="fa fa-eye"></i></a>
                                                        <a class="btn btn-primary btn-xs" href="{{ route('agents.edit', $agent->id_personne) }}" rel="tooltip" title="Modifier">
                                                            <i class="fa fa-pencil"></i></a>

                                                        <a href="{{ route('services.affecterservice',$agent->id_personne) }}" class="btn btn-success  fa fa-check">Affecter agent</a>

                                                    </td>
                                                    <td>
                                                        <form action="{{ route('agents.destroy', $agent->id_personne) }}" method="patch">
                                                                {!! Form::submit('Supprimer', ['class' => 'btn btn-danger', 'onclick' => 'return confirm(\'Voulez-vous Vraiment supprimer cet a ?\')']) !!}
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

                    @else
                <div class="panel-body">
                    <p> Agent introuvable.</p>
                </div>
                    @endif
            </section>
        </section>

@endsection






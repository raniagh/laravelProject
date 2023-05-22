

@extends('layout1')
@section('title', 'Personne')
@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <section class="panel">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        @if(Session()->has('message'))
                            <div class="alert alert-success fade in">
                                <button data-dismiss="alert" class="close close-sm" type="button">
                                    <i class="fa fa-times"></i>
                                </button>{{Session::get('message') }}</div>
                        @endif

                    </div>
                </div>
                <header class="panel-heading">
                    <h1>Utilisateurs</h1>
                </header>
                <div class="panel-body">
                    <section class="panel">
                        <div class="table-responsive">
                            <div class="panel-body">
                                <div class="row">
                                    <table class="table table-striped table-advance table-hover">
                                        <thead>
                            <tr>

                                <th> Nom</th>
                                <th> Prénom</th>
                                <th>Téléphone</th>
                                <th >Adresse</th>
                               
                                <th> email</th>
                               
                                <th>cin</th>
                               

                            </tr>
                            </thead>
                            <tbody>
                            @if($personnes->isEmpty())
                                <tr>
                                    <td colspan="11" align="center"> il n'y a aucune personne</td>
                                </tr>
                            @else
                                @foreach($personnes as $personne)
                                    <tr>

                                        <td>{{$personne->nom }}</td>
                                        <td>{{$personne->prenom }}</td>
                                        <td>{{$personne->Num_tel}}</td>
                                        <td>{{$personne->adresse}}</td>
                                
                                        <td> {{$personne->email }} </td>
                                
                                        
                                        <td>{{$personne->cin}}</td>
                                       

                                    </tr>

                                @endforeach
                            @endif

                            </tbody>
                                    </table>
                                    <div class="text-center">
                                        {!! $personnes->links(); !!}
                                    </div>
                                </div>
                            </div>
                        </div>

            </section>
                </div>
            </section>
        </section>
    </section>

@endsection






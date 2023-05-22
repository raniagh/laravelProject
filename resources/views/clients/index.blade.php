

@extends('base')
@section('title', 'clients')
@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">
            <!-- page start-->
            <section class="panel">
                <header class="panel-heading">
                La liste des clients
                </header>
                <div class="panel-body">
                    <div class="row">
                        <table class="table table-striped table-advance table-hover">
                            <thead>
                            <tr>

                                <th> Nom</th>
                                <th> Prénom</th>
                                <th>Numéro_téléphone</th>
                                <th >Adresse</th>
                                <th>Région</th>
                                <th> email</th>
                                <th>Mot de passe</th>
                                <th>cin</th>
                                <th> Rôle</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($clients->isEmpty())
                                <tr>
                                    <td colspan="11" align="center">il n'y a ucun client</td>
                                </tr>
                            @else
                                @foreach($clients as $client)
                                    <tr>

                                        <td>{{$client->nom }}</td>
                                        <td>{{$client->prenom }}</td>
                                        <td>{{$client->Num_tel}}</td>
                                        <td>{{$client->adresse}}</td>
                                        <td>{{$client->region}}</td>
                                        <td> {{$client->email }} </td>
                                        <td>{{$client->password }}</td>
                                        <td>{{$client->cin}}</td>
                                        <td>{{$client->role}}</td>
                                    </tr>

                                @endforeach
                            @endif

                            </tbody>

                        </table>
                    </div>
                </div>
            </section>
        </section>
    </section>

@endsection






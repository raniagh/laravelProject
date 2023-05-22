@extends('layout1')
@section('title', 'Agents')
@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <aside class="profile-nav col-lg-3">
                    <section class="panel">
                        <div class="user-heading round">
                            <a href="#">
                                <img src="/img/photos/{{$agent->agen}}" alt="">
                            </a>
                            <h1>{{$agent->nom }}  {{$agent->prenom}}</h1>
                            <p>{{$agent->email}}</p>
                        </div>

                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="{{ route('agents.show', $agent->id_personne)}}"> <i class="fa fa-user"></i> Profil</a></li>
                            <li><a href=""> <i class="fa fa-calendar"></i>Totals des services<span class="label label-danger pull-right r-activity"> {{$nbr_service}} </span></a></li>
                            <li  class="active"><a href="{{ route('agents.edit', $agent->id_personne)}}"> <i class="fa fa-edit"></i> Modifier profile</a></li>
                        </ul>

                    </section>
                </aside>
                <aside class="profile-info col-lg-9">
                    <section class="panel">
                        <div class="bio-graph-heading"><h1>Informations personnelles</h1>
                        </div>
                        <div class="panel-body bio-graph-info">
                            <div class="row">
                                <div class="bio-row">
                                    <p><span>Prénom</span>: {{$agent->prenom}}</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Nom</span>: {{ $agent->nom}}</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Adresse </span>: {{$agent->adresse}}</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Région </span>: {{$agent->region}}</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Adresse éléctronique</span>: {{$agent->email}}</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Téléphone </span>: {{$agent->Num_tel}}</p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section>
                        <div class="row">
                            @foreach($services as $service)
                                @if(($service->etat_service)==("terminé"))
                            <div class="col-lg-6">
                                <div class="panel">
                                    <div class="panel-body">
                                        
                                        <div class="bio-desk">
                                            <h4 class="green">{{$service->designation}}</h4>
                                             <p>{{$service->description}}</p>
                                            <p><i class="fa fa-map-marker"></i> {{ $service->point_depart}}<i class=" fa fa-arrow-right"></i>{{$service->point_arrive}}</p>
                                            <p> <i class="fa fa-calendar"></i> {{ $service->date_echeance}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                    @elseif(($service->etat_service)==("en cours"))
                                        <div class="col-lg-6">
                                            <div class="panel">
                                                <div class="panel-body">
                                                    
                                                    <div class="bio-desk">
                                                        <h4 class="terques">{{$service->designation}}</h4>
                                                         <p>{{$service->description}}</p>
                                                        <p><i class="fa fa-map-marker"></i>{{$service->point_depart}}<i class=" fa fa-arrow-right">{{$service->point_arrive}}</p>
                                                        <p>{{$service->date_echeance}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @else
                                        <div class="col-lg-6">
                                            <div class="panel">
                                                <div class="panel-body">
                                                   
                                                    <div class="bio-desk">
                                                        <h4 class="red">{{$service->designation}}</h4>
                                                        <p>{{$service->description}}</p>
                                                        <p>{{$service->point_depart}}</p>
                                                        <p>{{$service->point_arrive}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                        </div>
                    </section>
                </aside>
            </div>

            <!-- page end-->
        </section>
    </section>
    <!--main content end-->

@endsection

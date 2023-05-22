@extends('layout1')
@section('title', 'demandes')
@section('content')

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="col-sm-offset-3 col-sm-6">
                @if(session()->has('ok'))
                    <div class="alert alert-success" role="alert">{!! session('ok') !!}</div>
                @endif
            </div>
            <section class="panel">
                <!--main content start-->
            <div class="row">
                <div class="col-md-12">
                    <section class="panel tasks-widget">
                        @if($services->isEmpty())
                            <header class="panel-heading">
                                 il n'y a aucune demande en cours
                            </header>
                        @else
                        <header class="panel-heading">
                            <h1>les demandes en cours</h1>
                        </header>
                        <div class="panel-body">
                            <div class="task-content">
                                <ul id="sortable" class="task-list">
                                    @foreach($services as $service)
                                        @php
                                            $datestart= Date::now();
                                            $dateEnd   =($service->date_echeance);
                                            $dteStart = new DateTime($datestart);
                                            $dteEnd = new DateTime( $dateEnd);
                                            $datediff =  $dteStart->diff($dteEnd);
                                            $days = $datediff->format("%a");
                                        @endphp
                                     @if($days>4)
                                    <li class="list-primary">
                                        <i class=" fa fa-ellipsis-v"></i>
                                        <div class="task-title">
                                            <span class="task-title-sp">{{$service->designation}}         ({{$service->point_depart}}       {{$service->point_arrive}})</span>
                                            <span class="badge badge-sm label-success">{{$days}}jours</span>
                                            <div class="pull-right hidden-phone">
                                                <a href="{{ route('services.affecter',[$service->id_service,$agent->id_personne] ) }}" class="btn btn-success fa fa-check" rel="tooltip" title="affecter">Affecté</a>
                                                 <a href="{{ route('services.destroy', $service->id_service) }}" class="btn btn-danger fa fa-trash-o" rel="tooltip" title="Refuser la demande"> Refuser </a>
                                            </div>
                                        </div>
                                    </li><br/>
                                        @elseif($days==0)
                                        <li class="list-danger">
                                            <i class=" fa fa-ellipsis-v"></i>
                                            <div class="task-title">
                                                <span class="task-title-sp">{{$service->designation   }}        ({{$service->point_depart}}   {{$service->point_arrive}})</span>
                                                <span class="badge badge-sm label-danger">Aujourd'hui</span>
                                                <div class="pull-right hidden-phone">
                                                    <a href="{{ route('services.affecter',[$service->id_service,$agent->id_personne] ) }}" class="btn btn-success fa fa-check" rel="tooltip" title="affecter">Affecté</a>
                                                     <a href="{{ route('services.destroy', $service->id_service) }}" class="btn btn-danger fa fa-trash-o" rel="tooltip" title="Refuser la demande"> Refuser </a>
                                                </div>
                                            </div>
                                        </li><br/>
                                        @else
                                            <li class="list-success">
                                                <i class=" fa fa-ellipsis-v"></i>
                                                <div class="task-title">
                                                    <span class="task-title-sp">{{$service->designation}}           ({{$service->point_depart}}       {{$service->point_arrive}})</span>
                                                    <span class="badge badge-sm label-warning">{{$days}}jours</span>
                                                   
                                                    <div class="pull-right hidden-phone">
                                                        <a href="{{ route('services.affecter',[$service->id_service,$agent->id_personne] ) }}" class="btn btn-success fa fa-check" rel="tooltip" title="affecter">Affecté</a>
                                                         <a href="{{ route('services.destroy', $service->id_service) }}" class="btn btn-danger fa fa-trash-o" rel="tooltip" title="Refuser la demande"> Refuser </a>

                                                        
                                                   
                                                    </div>
                                                </div>
                                            </li><br/>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                            @endif
                    </section>
                </div>
            </div>
</div>
                    <a href="javascript:history.back()" class="btn btn-warning">
                        <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
                    </a>
                </div>
            <!-- page end-->
        </section>
    </section>
    <!--main content end-->
            </section>
                @endsection









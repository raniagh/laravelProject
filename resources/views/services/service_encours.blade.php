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
                <header class="panel-heading">
                    <h1>les demandes en cours</h1>
                </header>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            {{Form::open(array('url'=>'service/recherche'))}}
                            <div class="input-group"><input type="text" name="keyword" id="keyword" placeholder="Rechercher ici" class="input-sm form-control"> <span class="input-group-btn">
                              <button type="button" class="btn btn-sm btn-success"> Rechercher!</button> </span></div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                <table class="table table-hover p-table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Désignation du service</th>
                        <th>Lieu de service</th>
                        <th>Adresse de livraison</th>
                        <th>Date d'échéance</th>
                        <th>type</th>
                        <th>Action </th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($services->isEmpty())
                        <tr>
                            <td colspan="11" align="center"> il n'y a aucune demande</td>
                        </tr>
                    @else
                        @foreach($services as $service)
                            <tr>
                                <td>{{$service->id_service}}</td>
                                <td>{{$service->designation}}</td>
                                <td>{{$service->point_depart}}</td>
                                <td>{{$service->point_arrive}}</td>
                                <td>{{$service->date_echeance}}</td>
                                <td> @if($service->type)
                                        <p>individuel</p>
                                    @else
                                        <p> partagé</p>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('services.affecter',[$service->id_service,$agent->id_personne] ) }}" class="btn btn-xs"><i class="fa fa-check" rel="tooltip" title="affecter"></i></a>
                                </td>
                                @endforeach
                                @endif

                            </tr>
                    </tbody>
                </table>

            </section>
            <!-- page end-->
        </section>
    </section>
    <!--main content end-->


@endsection
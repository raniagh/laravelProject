@extends('layout')

@section('title', 'Parcours')
@section('title1','|Parcours')
@section('content')
    <div id="page-content">
        <div class="container">
<div id="page-content" class="agent-profile">
        <div class="container">
          <div class="page-content mt60">
            <div class="row">

              <div class="col-md-12">
                <div class="main-content" id="add-client">
                 @if($parcours->isEmpty())
                                <tr>
                                    <td colspan="11" align="center"> il n'y a aucun parcours</td>
                                </tr>
                            @else
                                @foreach($parcours as $parcour)
                                
                 <div class="row">
                    <h1 style="text-align: center; color:blue;"> 
                    Parcour{{$parcour->id_parcours }}    ({{$parcour->date_echeance }} )

                    </h1>
                    </div>
                          <div class="row">
                                    <table class="table table-striped table-advance table-hover">
                                        <thead>
                            <tr>

                                <th> Désignation du service</th>
                                <th> Description</th>
                                <th>Lieu de service</th>
                                <th>Adresse de livraison</th>
                            

                            </tr>
                            </thead>
                            <tbody>
                           
                                @foreach($services as $service)
                                  @if($service->id_parcours == $parcour->id_parcours  )

                                  
                                    <tr>

                                        <td>{{$service->designation}}</td>
                                        <td>{{$service->description}}</td>
                                        <td>{{$service->point_depart}}</td>
                                        <td>{{$service->point_arrive}}</td>
                                    </tr>
                                    @endif

                                @endforeach
                               </tbody>
                                    </table>
                                    </div>
                                    <div class="pull-right">
                                     <a href="{{ route('services.rejoindre',[$personne->id_personne,$parcour->id_parcours] ) }}" class="btn btn-default btn-xs"><i class="fa fa-check" rel="tooltip" title="Rejoindre le parcours"></i>Rejoindre</a>
                                     </div>
                                    @endforeach
                                    @endif

                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                      <div class="text-center">
                            {!! $parcours->links(); !!}
                        </div>
                                    </div>
                                    </div>

                                    @endsection
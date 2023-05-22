

@extends('layout1')
@section('title', 'facture')

@section('content')

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
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
        <section class="panel">
            <header class="panel-heading">
                <h1>la liste des services pour chaque client</h1>
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
                        <th>Client</th>
                        <th colspan="2">services</th>
                       <th colspan="3" style="text-align: center;">Action</th>
                         </tr>
                    </thead>
                    <tbody>
                        @foreach($personnes as $personne)
                                 
                            <tr>
                               
                                <td  colspan="" >  {{$personne->prenom }} {{$personne->nom }} </td>
                                  <td>  
                                  <table class="table table-striped table-advance table-hover">
                                        <thead>
                          
                               <th> Désignation service</th>
                                <th> tarif</th>
                          
                            </thead>
                            <tbody>
                           
                                @foreach($services as $service)
                                  @if(($service->id_personne == $personne->id_personne ))
                                  
                                    <tr>
                                <td>{{ $service->designation }}</td>
                              
                                        <td>{{$service->montant_total}}</td>
                                    </tr>
@endif
@endforeach
                               </tbody>
                                    </table>
                                    </td>
                                     <td>  
              <a class="btn btn-success btn-xs" href="/service_client/{{$personne->id_personne}}"><i class="fa fa-money"></i>Facture</a></td>

                                  
                                
                             @endforeach
                 </table>
                 </section>
                 </section>
                 </section>
                 @endsection
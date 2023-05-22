@extends('layout')

@section('title', 'Services')
@section('title1','|Services')
@section('content')
    
    <div id="page-content">
        <div class="container">
            <div class="page-content">
            <div class="pull-right">
             <a  class="btn btn-default" href="{{ route('services.create',[ $personne->id_personne,$designation]) }}"><i class="fa fa-pencil"></i> Déposer votre demande </a></div>
     <h1> Services<h1>
    
        <div class="col-md-3 column sortable">
            <div class="panel panel-default">
                <h3 style="text-align: center;">Papiers universitaires</h3>
                
                <div class="panel-body">
                   <img src="/img/photos/dip.jpg">
                </div>
            </div>
        </div>
       <div class="col-md-3 column sortable">
            <div class="panel panel-default">
                <h3 style="text-align: center;">Colis</h3>
                <div class="panel-body">
                 <img src="/img/photos/colis.png">
                </div>
            </div>
        </div>
         <div class="col-md-3 column sortable">
            <div class="panel panel-default">
                <h3 style="text-align: center;">Papiers juridiques</h3>
                <div class="panel-body">
                   <img src="/img/photos/administration.jpg">
                </div>
            </div>
        </div>
        <div class="col-md-3 column sortable">
            <div class="panel panel-default">
        
                <h3 style="text-align: center;">Payement facture</h3>
                <div class="panel-body">
                  <img src="/img/photos/facture.jpg">
                </div>
            </div>
        </div>

            </div>
        </div>
    </div>

@endsection
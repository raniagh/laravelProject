

@extends('layout')

@section('title', 'Accueil')
@section('title1','')
@section('content')

    <!--main content start-->

    <div id="page-content" class="page-content pt60">
        <div class="container">
        <div class="col-md-10 col-md-offset-1">
       
                        @if(Session()->has('message'))
                            <div class="alert alert-success fade in" id="y">
                                <button data-dismiss="alert" class="close close-sm" type="button">
                                    <i class="fa fa-times"></i>
                                </button>{{Session::get('message') }}</div>
                        @endif
                        

                </div>
    <div class="row">
    <div class="row-fluid" id="draggable_portlets">
        <div class="col-md-4 column sortable">
            <!-- BEGIN Portlet PORTLET-->
            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-file-text-o"></i>Services</div>
                <div class="panel-body">
                    <p>Vous pouvez consulter nos services en ligne et demandez un en remplissant un simple formulaire</p>
                    <span class="pull-center">
                                    <a  class="btn btn-default" href="{{ route('services.consulter_services', $personne->id_personne) }}"><i class="fa fa-eye"></i> Voir plus </a>
                              </span>
                </div>
            </div>
        </div>
    </div>
            <!-- END Portlet PORTLET-->
            <!-- BEGIN Portlet PORTLET-->
        <div class="row-fluid" id="draggable_portlets">
        <div class="col-md-4 column sortable">
            <div class="panel panel-default">

                <div class="panel-heading"><i class="fa fa-book"></i>Papiers</div>
                <div class="panel-body">
                    <p>Carte d'identité nationale,passeport,permis de conduire,etc</p>
                    <span class="center">
                                    <a  href="{{ route('documents.papierclient', $personne->id_personne) }}" class="btn btn-default" ><i class="fa fa-eye"></i> Voir plus </a>
                              </span>
                </div>
            </div>
        </div>
        </div>
            <!-- END Portlet PORTLET-->
            <!-- BEGIN Portlet PORTLET-->
    <div class="row-fluid" id="draggable_portlets">
        <div class="col-md-4 column sortable">
            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-truck"></i>Parcours</div>
                <div class="panel-body">
                    <p>Vous pouvez Consulter la liste des parcours des services chaque jour...</p>
                    <span class="pull-center">
                                    <a href="{{ route('services.parcours', $personne->id_personne) }}" class="btn btn-default"><i class="fa fa-eye"></i> Voir plus </a>
                              </span>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>
    </div>
    @endsection






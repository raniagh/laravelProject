

@extends('layout')
@section('title', 'Agents')
@section('title1','Profile agent')
@section('content')
    <div id="page-content">
        <div class="container">
            <div class="page-content mt60">
                <div class="row">
                    <div class="col-md-3">
                        <div class="motijob-sidebar">

                            <a href="#">      <img alt="" class ="" src="/img/photos/{{$agent->agen}}">     </a>


                            <!-- end .agent-profile-picture -->

                            <div class="agent-details">
                                <div class="title clearfix">
                                    <h6>Les informations d'agent</h6>

                                </div> <!-- end .title -->
                                <div class="agent-address">
                                    <p> <i class="fa fa-pencil"></i>    Nom & Prénom:  {{$agent->nom}} {{$agent->prenom }} </p>
                                </div>


                                    <p><i class="fa fa-phone"></i> Numéro de téléphone: {{$agent->Num_tel}} </p>
                                    <p><i class="fa fa-map-marker"></i>Adresse :     {{$agent->adresse}} , {{$agent->region}}</p>

                                    <p><i class="fa fa-envelope"></i>Email : {{$agent->email}}</p>


>
                            </div> <!-- end agent-details -->




                        </div>

                    </div> <!-- end 3rd grid .page-sidebar layout -->

                    <div class="col-md-9">
                        <div class="main-content" id="agent-profile">
                            <div class="view-sort">
                                <div class="row">





                                    <!-- end .job-sort-by -->



                                </div> <!-- end .end col-sm-5 grid-layout  -->
                            </div> <!-- end .row -->
                        </div> <!-- end .view-sort div -->

                        <div class="table-responsive-small">

                            <!-- end .editing-link -->

                            <div class="assigned-job-list">

                                <div class="table-heading">
                                    <div class="css-table">

                                        <div class="table-details css-table-cell">
                                            <h5>Les parcours effectués par cet agent</h5>
                                        </div>




                                    </div> <!-- end .main-content -->
                                </div> <!-- end 9th grid layout -->
                            </div> <!-- end .row -->
                        </div> <!-- end container -->
                    </div> <!-- end .page-content -->
                </div> <!-- end #page-content -->

            </div>
        </div>
    </div>
    @endsection
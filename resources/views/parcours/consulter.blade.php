@extends('base')
@section('title', 'documents')
@section('content')

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">
            <!-- page start-->
            <section class="panel">
                <header class="panel-heading">
                    La liste des parcours
                    <span class="pull-right">
                          <a href="#" class=" btn btn-success btn-xs"> Créer nouveau parcours</a>
                      </span>
                </header>
                <div class="panel-body">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="input-group"><input type="text" placeholder="Rechercher ici" class="input-sm form-control"> <span class="input-group-btn">
                              <button type="button" class="btn btn-sm btn-success"> Rechercher!</button> </span></div>
                        </div>
                    </div>
                </div>
                <table class="table table-hover p-table">
                    <thead>
                    <tr>
                        <th>Désignation du service</th>
                        <th>Agent</th>
                        <th>Destination</th>
                        <th>Adresse de livraison</th>
                        <th>Date d'échéance</th>
                        <th> </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="p-name">
                            <a href="parcours_detail.html">New Dashboard BS3</a>
                            <br>
                            <small>Created 27.11.2014</small>
                        </td>
                        <td class="p-team">
                            <a href="#"><img alt="image" class="" src="img/chat-avatar.jpg"></a>
                            <a href="#"><img alt="image" class="" src="img/chat-avatar2.jpg"></a>
                            <a href="#"><img alt="image" class="" src="img/pro-ac-1.png"></a>
                        </td>
                        <td class="p-progress">
                            <div class="progress progress-xs">
                                <div style="width: 87%;" class="progress-bar progress-bar-success"></div>
                            </div>
                            <small>87% Complete </small>
                        </td>
                        <td>
                            <span class="label label-primary">Active</span>
                        </td>
                        <td>
                            <div class="input-group date form_datetime-component">
                                <input type="text" class="form-control" readonly="" size="16">
                                <span class="input-group-btn">
                                                <button type="button" class="btn btn-danger date-set"><i class="fa fa-calendar"></i></button>
                                                </span>
                            </div>
                        </td>
                        <td>

                            <a href="javascript:;" class="btn btn-success" id="pulsate-regular"></a>
                            <a href="javascript:;" class="btn btn-danger" id="pulsate-regular"></a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </section>
            <!-- page end-->
        </section>
    </section>
    <!--main content end-->

    </section>
    </section>
@endsection
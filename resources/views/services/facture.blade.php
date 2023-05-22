@extends('layout1')
@section('title', 'facture')
@section('content')
<!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!-- invoice start-->
            <section>
                <div class="panel panel-primary">
                    <!--<div class="panel-heading navyblue"> INVOICE</div>-->
                    <div class="panel-body">
                        <div class="row invoice-list">
                            <div class="text-center corporate-id">
                                <img src="{{URL::asset('img/user/logo.png')}}" alt="">
                            </div>
                            <div class="col-lg-4 col-sm-4">
                                <h4>ADRESSE DE LIVRAISON</h4>
                                <p>
                                    {{ $personne->prenom}}  {{ $personne->nom }}<br>
                                     {{ $personne->adresse }} <br>
                                     {{ $personne->email}}<br>
                                    Tel:  {{ $personne->Num_tel}}
                                </p>
                            </div>
                           
                            <div class="col-lg-4 col-sm-4">
                                <h4>FACTURE</h4>
                                <ul class="unstyled">
                                    <li>Numéro facture 		: <strong>{{ $facture->id_facture }}</strong></li>
                                    <li>Date facture		: {{ $facture->date }}</li>
                                    
                                </ul>
                            </div>
                        </div>
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th> Désignation service</th>
                              <th class="hidden-phone">Description</th>
                               <th class="">Prix service</th>
                              <th class="">Frais du transport</th>
                              <th class="">Remise</th>
                                <th>Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($services as $service)
                            <tr>
                                <td>{{ $service->designation }}</td>
                                <td>{{ $service->description }}</td>
                                <td class="hidden-phone">{{ $service->montant }} dt</td>
                                <td class="">{{ $service->frais_transport }} dt</td>
                                <td class="">{{ $remise }} dt</td>
                                <td>{{ $service->montant_total }}dt</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-lg-4 invoice-block pull-right">
                                <ul class="unstyled amounts">
                                   <li><strong>Remise Total :</strong> {{ $somme_remise}}dt</li>
                                    <li><strong>Grand Total :</strong> {{ $somme}}dt</li>
                                </ul>
                            </div>
                        </div>
                        <div class="text-center invoice-btn">
                            <a class="btn btn-danger btn-lg"><i class="fa fa-check"></i> Submit Invoice </a>
                            <a class="btn btn-info btn-lg" onclick="javascript:window.print();"><i class="fa fa-print"></i> Print </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- invoice end-->
        </section>
    </section>
    <!--main content end-->
@endsection

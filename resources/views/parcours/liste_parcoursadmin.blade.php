

@extends('layout1')
@section('title', 'demandes')

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
                <h1>la liste des parcours</h1>
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
                        <th>Parcours</th>
                        <th colspan="7" style="text-align: center;">Services</th>
                        <th colspan="3">Agent</th>
                         </tr>
                    </thead>
                    <tbody>
                        @foreach($parcours as $parcour)
                                       
                            <tr>
                               
                                <td  colspan="" >  Parcour{{$parcour->id_parcours }}    ({{$parcour->date_echeance }} ) </td>
                                
                              <td>  <table class="table table-striped table-advance table-hover">
                                        <thead>
                            <tr>
                               <th> Client</th>
                                <th> Désignation du service</th>
                                <th>Lieu de service</th>
                                <th>Adresse de livraison</th>
                                <th>état service</th>
                                <th>Action</th>
                                <th>tarif</th>

                            </tr>
                            </thead>
                            <tbody>
                           
                                @foreach($services as $service)
                                  @if(($service->id_parcours == $parcour->id_parcours ) or (($service->id_agent == $parcour->id_agent ) and ($service->date_echeance == $parcour->date_echeance)))

                                  
                                    <tr>
                                       @foreach($personnes as $personne)
                                @if($personne->id_personne == $service->id_personne )
                                <td>{{$personne->prenom}} {{$personne->nom}}</td>
                                @endif
                                @endforeach
                                        <td>{{$service->designation}}</td>
                                        <td>{{$service->point_depart}}</td>
                                        <td>{{$service->point_arrive}}</td>
                                        
                                <td>
                                    @if (($service->etat_service)==("affecté"))
                                        <boutton class="btn btn-primary btn-xs"><i class="fa fa-check"></i>affecté</boutton>
                                        @else
                                        <boutton class="btn btn-danger btn-xs">en attente</boutton>
                                    @endif
                                </td>
                                @if((($service->etat_service)==("affecté")))
                                    <td>  <a class="btn btn-warning btn-xs" data-toggle="modal" href="#myModal"><i class="fa fa-envelope-o"></i>
                           Envoyer réponse au client
                          </a>
                          <!-- Modal -->
                          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                          <h4 class="modal-title"><i class="fa fa-pencil"></i></h3>Répondre le client</h4>
                                      </div>
                                      <div class="modal-body">
                                      <form action="{{ url('contact')}}" method="POST" class="form-horizontal" role="form">

                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                
                                                 <div class="form-group">
                                                  <label  class="col-lg-2 control-label">De</label>
                                                  <div class="col-lg-10">
                                                      <input type="text" class="form-control" id="inputEmail1" >
                                                  </div>
                                              </div>

                                              <div class="form-group">
                                                  <label  class="col-lg-2 control-label">à</label>
                                                  <div class="col-lg-10">
                                                      <input class="form-control" name="email" type="email">
@if(count($errors) >0 )
<label style="color: red"> {{ $errors->first('email') }}</label>
@endif
                                                  </div>
                                              </div>
                          
                                              <div class="form-group">
                                                  <label class="col-lg-2 control-label">Objet</label>
                                                  <div class="col-lg-10">
                                                     <input type="text" class="form-control" name="subject" placeholder="" >
@if(count($errors) >0 )
<label style="color: red"> {{ $errors->first('subject') }}</label>
@endif
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="col-lg-2 control-label">Message</label>
                                                  <div class="col-lg-10">
                                                      <textarea name="message" id="" class="form-control" cols="30" rows="10"></textarea>
                                                      @if(count($errors) >0 )
<label style="color: red"> {{ $errors->first('message') }}</label>
@endif
                                                  </div>
                                              </div>
  
                                              <div class="form-group">
                                                  <div class="col-lg-offset-2 col-lg-10">
                                                      <button type="submit" class="btn btn-send">Envoyer</button>
                                                  </div>
                                              </div>
                                          </form>
                                      </div>
                                  </div><!-- /.modal-content -->
                              </div><!-- /.modal-dialog -->
                          </div>
                           @php
                          $service->etat_service="répondu";
                          @endphp
                          </td>
                         @if($service->montant_total==null)
                          <td>
                         
                         <a class="btn btn-success btn-xs" href="{{ route('services.calcultarif',$service->id_service ) }}"><i class="fa fa-money"></i>Calculer tarif</a></td>
                         @else
                         <td>
                         {{$service->montant_total}} dt
                         </td>
                         @endif

                                @else
                                 
                                
                                <td>
                                 
                                  <a href="{{ route('parcours.accepter_parcours',$service->id_service ) }}" class="btn btn-primary btn-xs" data-toggle="modal" href="#myModal"><i class="fa fa-check" rel="tooltip" title="Accepter la demande"></i>Accepter</a>
  
                          <!-- Modal -->
                          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                          <h4 class="modal-title"><i class="fa fa-pencil"></i></h3>Répondre le client</h4>
                                      </div>
                                      <div class="modal-body">
                                      <form action="{{ url('contact')}}" method="POST" class="form-horizontal" role="form">

                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                
                                                 <div class="form-group">
                                                  <label  class="col-lg-2 control-label">De</label>
                                                  <div class="col-lg-10">
                                                      <input type="text" class="form-control" id="inputEmail1" >
                                                  </div>
                                              </div>

                                              <div class="form-group">
                                                  <label  class="col-lg-2 control-label">à</label>
                                                  <div class="col-lg-10">
                                                      <input class="form-control" name="email" type="email">
@if(count($errors) >0 )
<label style="color: red"> {{ $errors->first('email') }}</label>
@endif
                                                  </div>
                                              </div>
                          
                                              <div class="form-group">
                                                  <label class="col-lg-2 control-label">Objet</label>
                                                  <div class="col-lg-10">
                                                     <input type="text" class="form-control" name="subject" placeholder="" >
@if(count($errors) >0 )
<label style="color: red"> {{ $errors->first('subject') }}</label>
@endif
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="col-lg-2 control-label">Message</label>
                                                  <div class="col-lg-10">
                                                      <textarea name="message" id="" class="form-control" cols="30" rows="10"></textarea>
                                                      @if(count($errors) >0 )
<label style="color: red"> {{ $errors->first('message') }}</label>
@endif
                                                  </div>
                                              </div>

                                              <div class="form-group">
                                                  <div class="col-lg-offset-2 col-lg-10">
                                                      <button type="submit" class="btn btn-send">Envoyer</button>
                                                  </div>
                                              </div>
                                          </form>
                                      </div>
                                  </div><!-- /.modal-content -->
                              </div><!-- /.modal-dialog -->
                          </div>
                           @php
                          $service->etat_service="répondu";
                          @endphp
                                    
                         
                                    <a href="{{ route('parcours.Refuser_parcours', $service->id_service) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" rel="tooltip" title="Refuser la demande"></i> Refuser </a>
                                   </td>
                                    @endif
                            </td>
                                    </tr>
                                     @endif

                                @endforeach
                  
                               </tbody>
                                    </table></td>
                                 
                              
                                    <td> @foreach($personnes as $personne)
                                  @if($personne->id_personne == $parcour->id_agent  )  <img alt="" class ="" src="/img/photos/{{$personne->agen}}">
                                  @endif
                                  @endforeach

                                  </td>
                                 
                                 
                                
                                

                    </tr>

                     @endforeach
                    </tbody>
                </table>
        
            </section>
            <!-- page end-->
        </section>
    </section>
    <!--main content end-->


@endsection
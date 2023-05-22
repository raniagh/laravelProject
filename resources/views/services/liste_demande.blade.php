

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
                <h1>La liste des demandes </h1>
            </header>
            <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            {{Form::open(array('url'=>'services/recherche'))}}
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
                        <th>Client</th>
                        <th>Agent</th>
                        <th>Désignation du service</th>
                        <th>Lieu de service</th>
                        <th>Adresse de livraison</th>
                        <th>Date d'échéance</th>
                        <th>état du service</th>
                        <th>Type</th>
                        <th colspan="2" style="text-align: center;">Action</th>
                        <th></th>
                       
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
                                @foreach($personnes as $personne)
                                @if($personne->id_personne == $service->id_personne )
                                <td>{{$personne->email}}</td>
                                @endif
                                @endforeach
                                

                                <td> @foreach($personnes as $personne)
                                  @if($personne->id_personne == $service->id_agent  )  <img alt="" class ="" src="/img/user/{{$personne->agen}}">
                                  @endif
                                  @endforeach

                                  </td>
                               
                                
                                   <td>{{$service->designation}}</td> 
                                
                                <td>{{$service->point_depart}}</td>
                                <td>{{$service->point_arrive}}</td>
                                <td>{{$service->date_echeance}}</td>
                                <td>@if(($service->etat_service)==("en cours"))
                                        <boutton class="btn btn-warning btn-xs">en cours</boutton>
                                    @elseif (($service->etat_service)==("affecté"))
                                        <boutton class="btn btn-primary btn-xs"><i class="fa fa-check"></i>affecté</boutton>
                                        @elseif(($service->etat_service)==("archivé"))
                                         <boutton class="btn btn-success btn-xs">archivé</boutton>
                                       @elseif(($service->etat_service)==("en attente"))
                                         <boutton class="btn btn-danger btn-xs">en attente</boutton>
                                        @else
                                          <boutton class="btn btn-danger btn-xs">refusé</boutton>
                                    @endif
                                </td>
                              <td>@if (($service->type)==1) individuelle 
                              @else
                              paratgé 
                              @endif</td>
                                @if((($service->etat_service)==("en cours")))
                                <td>
                                </td>
                                @elseif((($service->etat_service)==("archivé")))
                          
                         <td>
                                </td>
                                @elseif((($service->etat_service)==("refusé")))
                          
                         <td colspan="2" > <a class="btn btn-warning btn-xs" class="open-AddBookDialog" data-id="$service->id_service" data-toggle="modal" href="#myModal"><i class="fa fa-envelope-o"></i>
                          
                                     Envoyer réponse au client</a>
                        
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
                                              <input type="hidden" name="serviceId" id="serviceId" value=""/>


                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                
                                                 <div class="form-group">
                                                  <label  class="col-lg-2 control-label">De</label>
                                                  <div class="col-lg-10">
                                                      <input type="text" class="form-control" id="inputEmail1" placeholder="{{$personne->email}}">
                                                  </div>
                                              </div>

                                              <div class="form-group">
                                                  <label  class="col-lg-2 control-label">à</label>
                                                  <div class="col-lg-10">
                                                  @foreach($personnes as $personne)
                                   @if($personne->id_personne == $service->id_personne )
                                                      <input class="form-control" name="{{$personne->email}}" id="{{$personne->email}}" type="email" placeholder="{{$personne->email}}">
                                                      @endif
                                                      @endforeach
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
                                                     <button type="submit" class="btn btn-send">  Envoyer</button></a>
                                                    
                                                  </div>
                                              </div>
                                          </form>
                                      </div>
                                  </div><!-- /.modal-content -->
                              </div><!-- /.modal-dialog -->
                          </div>
                          

                           <a href="{{ route('services.destroy', $service->id_service) }}" class="btn btn-danger fa fa-trash-o" rel="tooltip" title="Supprimer la demande"> Supprimer </a>

                                </td>
                               
                        
                                @elseif((($service->etat_service)==("en attente")))
                                
                                   <td>
                                    <a href="{{ route('services.accepter',$service->id_service ) }}" class="btn btn-primary "><i class="fa fa-check" rel="tooltip" title="Accepter la demande"></i>Accepter</a></td>
<td>
<a  href="{{ route('services.refuser',$service->id_service ) }}" method="patch" rel="tooltip" title="Refuser la demande">
 
                                                                {!! Form::submit('Refuser la demande', ['class' => 'btn btn-danger', 'onclick' => 'return confirm(\'Voulez-vous Vraiment refuser cette demande ?\')']) !!}
                                                       
                           </a>
                          
                                                       </td>
                        
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
                                                      <input type="text" class="form-control" id="inputEmail1" placeholder="{{$personne->email}}">
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
                                                     <button type="submit" class="btn btn-send">  Envoyer</button></a>
                                                  </div>
                                                  
                                              </div>
                                          </form>
                                      </div>
                                  </div><!-- /.modal-content -->
                              </div><!-- /.modal-dialog -->
                          </div>
                        
                                 </td>
                                   </td>
                                  
                                   
                               @elseif((($service->etat_service)==("affecté")))
                             
                               
                                    <td>  <a class="btn btn-warning btn-xs" class="open-AddBookDialog" data-id="$service->id_service" data-toggle="modal" href="#myModal"><i class="fa fa-envelope-o"></i>
                          
                                     Envoyer réponse au client </a>
                        
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
                                              <input type="hidden" name="serviceId" id="serviceId" value=""/>


                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                
                                                 <div class="form-group">
                                                  <label  class="col-lg-2 control-label">De</label>
                                                  <div class="col-lg-10">
                                                      <input type="text" class="form-control" id="inputEmail1" placeholder="{{$personne->email}}">
                                                  </div>
                                              </div>

                                              <div class="form-group">
                                                  <label  class="col-lg-2 control-label">à</label>
                                                  <div class="col-lg-10">
                                                  @foreach($personnes as $personne)
                                   @if($personne->id_personne == $service->id_personne )
                                                      <input class="form-control" name="{{$personne->email}}" id="{{$personne->email}}" type="email" placeholder="{{$personne->email}}">
                                                      @endif
                                                      @endforeach
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
                                                     <button type="submit" class="btn btn-send">  Envoyer</button></a>
                                                    
                                                  </div>
                                              </div>
                                          </form>
                                      </div>
                                  </div><!-- /.modal-content -->
                              </div><!-- /.modal-dialog -->
                          </div>
                          </td>
                           @if($service->montant_total==null)
                          <td>
                         
                         <a class="btn btn-success btn-xs" href="{{ route('services.calcul',$service->id_service ) }}"><i class="fa fa-money"></i>Calculer tarif</a></td>
                         @else
                           <td>  <a class="btn btn-warning btn-xs" class="open-AddBookDialog" data-id="$service->id_service" data-toggle="modal" href="#myModal"><i class="fa fa-envelope-o"></i>
                          
                                     Envoyer réponse au client </a>
                        
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
                                              <input type="hidden" name="serviceId" id="serviceId" value=""/>


                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                
                                                 <div class="form-group">
                                                  <label  class="col-lg-2 control-label">De</label>
                                                  <div class="col-lg-10">
                                                      <input type="text" class="form-control" id="inputEmail1" placeholder="{{$personne->email}}">
                                                  </div>
                                              </div>

                                              <div class="form-group">
                                                  <label  class="col-lg-2 control-label">à</label>
                                                  <div class="col-lg-10">
                                                  @foreach($personnes as $personne)
                                   @if($personne->id_personne == $service->id_personne )
                                                      <input class="form-control" name="{{$personne->email}}" id="{{$personne->email}}" type="email" placeholder="{{$personne->email}}">
                                                      @endif
                                                      @endforeach
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
                                                     <button type="submit" class="btn btn-send">  Envoyer</button></a>
                                                    
                                                  </div>
                                              </div>
                                          </form>
                                      </div>
                                  </div><!-- /.modal-content -->
                              </div><!-- /.modal-dialog -->
                          </div>
                          </td>
                         <td>
                         {{$service->montant_total}} dt
                         </td>
                         @endif
                          
                               @endif
                                @endforeach
                                @endif
                                @foreach($services as $service)
                                 @if((($service->etat_service)==("répondu")))
                          $service=$service->delete();
                          @endif
                          @endforeach


                    </tr>
                    </tbody>
                </table>
            <div class="text-center">
                {!! $services->links(); !!}
            </div>
            </section>
            <!-- page end-->
        </section>
    </section>
    <!--main content end-->
    <!--<script type="text/javascript">
      
      $(document).ready(function () {
          $("#open-AddBookDialog").click(function () {
            alert('ok');
              $('#serviceId').val($(this).data('id'));
              $('#myModal').modal('show');
          });
      });

    </script>-->


@endsection
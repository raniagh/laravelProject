
@extends('layout1')
@section('title','consulter')

@section('content')
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
              <!-- page start-->
              @if($descriptions->isEmpty())

                  <div class="alert alert-block alert-danger fade in">
                      <button data-dismiss="alert" class="close close-sm" type="button">
                          <i class="fa fa-times"></i>
                      </button>
                      <strong>Désolé </strong>aucune description n'est disponible pour le moment
                  </div>

              @else
                  @foreach($descriptions as $description)
                  <div class="row-fluid" id="draggable_portlets">
                      <div class="col-md-4 column sortable">
                      <!-- BEGIN Portlet PORTLET-->
                      <div class="panel panel-success">
                          <div class="panel-heading">{{$description->titre}}
                              <i class="fa fa-clipboard"></i></div>
                          <div class="panel-body">
                              {{ str_limit($description->contenu, $limit = 20)}}<br/>

                              <span class="pull-right">
                                    <a class="btn btn-success" href="{{ route('documents.desc_client',[$description->id_document, $description->id_description]) }}"><i class="fa fa-eye"></i> Voir plus </a>
                              </span>


                            </div>
                            <!-- END Portlet PORTLET-->

                        </div>

                    </div>
              @endforeach
                @endif
                  </div>

                <!-- page end-->
                </section>
      </section>
            </section>
            <!--main content end-->
            @endsection
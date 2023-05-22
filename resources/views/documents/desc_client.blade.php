
@extends('base')
@section('title','description')

@section('content')
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="bio-graph-heading project-heading">
                  <strong> {{$Document->titre }} </strong>
              </div>
              <div class="row">
                      <div class="panel panel-info">
                          <div class="panel-heading">
                              <h4 class="panel-title">
                                  <a href="#accordion1_1" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle">
                                      {{$description->titre}}
                                  </a>
                              </h4>
                          </div>
                          <div class="panel-collapse collapse  in" id="accordion1_1">
                              <div class="panel-body">
                                  {{$description->contenu}}
                              </div>
                          </div>
                      </div>

                      </div>




              <!-- page end-->
          </section>
      </section>

      <!--main content end-->
      @endsection


       
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from thevectorlab.net/flatlab/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Mar 2017 22:45:00 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">

    <title>@yield('title')</title>
    <!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
    <link rel="stylesheet" href="{{URL::asset('assets/file-uploader/css/jquery.fileupload.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/file-uploader/css/jquery.fileupload-ui.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />

    <!-- Bootstrap core CSS -->
    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/bootstrap-reset.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{URL::asset('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')}}" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="{{URL::asset('css/owl.carousel.css')}}" type="text/css">
    <!--  summernote -->
    <link href="{{URL::asset('assets/summernote/dist/summernote.css')}}" rel="stylesheet">
     <link href="{{URL::asset('css/invoice-print.css')}}" rel="stylesheet" media="print">
     <link  href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" type="text/javascript">

    <!--right slidebar-->
    <link href="{{URL::asset('css/slidebars.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->

    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/style-responsive.css')}}" rel="stylesheet" />



    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

 
                             
                             
 <body>
      
<section id="container">
    <header class="header white-bg"">
        <div class="sidebar-toggle-box">
            <i class="fa fa-bars"></i>
        </div>
        <!--logo start-->
 <a href= "{{ route('personnes.bienvenue',$personne->id_personne ) }}" class="logo">Admin<span>istration</span></a>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">
            <!--  notification start -->
            <ul class="nav top-menu">
                <!-- settings start -->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="fa fa-tasks"></i>
                        <span class="badge bg-success">{{ $count }}</span>
                    </a>
                    <ul class="dropdown-menu extended tasks-bar">
                        <div class="notify-arrow notify-arrow-green"></div>
                        <li>
                            <p class="green">Il y'a {{ $count }} nouvelles demandes</p>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">Dashboard v1.3</div>
                                    <div class="percent">40%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                        <span class="sr-only">40% Complete (success)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">Database Update</div>
                                    <div class="percent">60%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <span class="sr-only">60% Complete (warning)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">Iphone Development</div>
                                    <div class="percent">87%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 87%">
                                        <span class="sr-only">87% Complete</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">Mobile App</div>
                                    <div class="percent">33%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 33%">
                                        <span class="sr-only">33% Complete (danger)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">Dashboard v1.3</div>
                                    <div class="percent">45%</div>
                                </div>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                        <span class="sr-only">45% Complete</span>
                                    </div>
                                </div>

                            </a>
                        </li>
                        <li class="external">
                            <a href="#">See All Tasks</a>
                        </li>
                    </ul>
                </li>
                <!-- settings end -->
                <!-- inbox dropdown start-->
                <li id="header_inbox_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge bg-important">{{ $c }}</span>
                    </a>
                    <ul class="dropdown-menu extended inbox">
                        <div class="notify-arrow notify-arrow-red"></div>
                        <li>
                            <p class="red">{{ $c }} clients vous devez les répondre</p>
                        </li>
                         @foreach($n as $m)
                         
                        <li>
                        @foreach($personnes as $personne)
                         @if(($personne->id_personne)==($m->id_personne))
                            <a href="#">
                                
                                <span class="subject">
                                    <span class="from">{{ $personne->prenom }}{{ $personne->nom }}</span>
                                   
@endif
@endforeach
                                    @if(($m->etat_service)=="affecté")
                                    <boutton class="btn btn-primary btn-xs"><i class="fa fa-check"></i>affecté</boutton>
@else
<boutton class="btn btn-danger btn-xs"><i class="fa fa-check"></i>Refusé</boutton>
@endif
<a class="btn btn-warning btn-xs" data-toggle="modal" href="#myModal"><i class="fa fa-envelope-o"></i>
                          
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
                                    </span>
                                    </span>
                                
                            </a>
                            
                            
                        </li>
                @endforeach
                        <li>
                            <a href="#">voir plus</a>
                        </li>
                    </ul>
                </li>
                <!-- inbox dropdown end -->
                <!-- notification dropdown start-->
                <li id="header_notification_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
       
                           
                        
    

                        <i class="fa fa-bell-o"></i>
            
                        <span class="badge bg-warning">{{ $count }} </span>
                      
                    </a>
                    <ul class="dropdown-menu extended notification">
                        <div class="notify-arrow notify-arrow-yellow"></div>
                        <li>
                        <p class="yellow">Il y'a {{ $count }} nouvelles demandes</p>
                        </li>
                    
                        @foreach( $nouveau_services as $service)
                       
                        <li>
                        <div>
                            <a href="#">
                                <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                               {{ $service->designation }}
                                <span class="small italic"> {{ $service->date_echeance}}</span>
                                </a>
                           
                            <span><a href="{{ route('services.accepter_demande',$service->id_service ) }}"  class="btn btn-success btn-xs fa fa-check" rel="tooltip" title="accepter" ></a></span>
                                                   
                          </div>  
                        </li>
                        @endforeach
                       
                        <li>
                            <a href="#">voir toutes les demandes</a>
                        </li>
                    </ul>
                </li>
                <!-- notification dropdown end -->
            </ul>
            <!--  notification end -->
        </div>
        <div class="top-nav ">
            <!--search & user info start-->
            <ul class="nav pull-right top-menu">
            
                <!-- user login dropdown start-->
                <li class="dropdown">
      <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    
                      <img alt="" src="/img/user/{{ $personne->agen }} ">
                       @yield('span')
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <div class="log-arrow-up"></div>
                       
                        <li><a href=""><i class="fa fa-bell-o"></i> Notification</a></li>
                        <li><a href="{{ route('personnes.getlogout')}}""><i class="fa fa-key"></i> Déconnexion</a></li>
                    </ul>
                </li>
                <li class="sb-toggle-right">
                    <i class="fa  fa-align-right"></i>
                </li>
                <!-- user login dropdown end -->
            </ul>
          
            <!--search & user info end-->
        </div>
    </header>
    <!--header end-->
    <!--sidebar start-->
    <aside>
        <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">
                <li> 

                    <a class="active" href= "{{ route('personnes.bienvenue',$personne->id_personne ) }}">
                        <i class="fa fa-dashboard"></i>
                        <span>Accueil</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="{{ route('services.index')}}" >
                        <i class="fa fa-file-text-o"></i>
                        <span>Demandes</span>
                    </a>
                </li>
   <li class="sub-menu">
                    <a href="{{ route('agents.index')}}">
                        <i class="fa fa-users"></i>
                        <span>Agents</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="{{ route('agents.index')}}">Gestion agents</a></li>
                        <li><a  href="/agentss">tous les profils agents</a></li>
                    </ul>
                </li>

               

               <li class="sub-menu">
                    <a href="/parcours/parcoursadmin" >
                        <i class="fa fa-truck"></i>
                        <span>Parcours</span>
                    </a>
                </li>
                 <li class="sub-menu">
                    <a href="/service_client" >
                        <i class="fa fa-money"></i>
                        <span>facture</span>
                    </a>
                </li>
               
                <li class="sub-menu">
                    <a href="{{ route('documents.index')}}" href="javascript:;" >
                        <i class="fa fa-book"></i>
                        <span>Documents</span>

                    </a>

                </li>
              
            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
    <body >
@yield('content')
    </body>
<!-- Right Slidebar start -->
    <div class="sb-slidebar sb-right sb-style-overlay">
        <h5 class="side-title">Online Customers</h5>
        <ul class="quick-chat-list">
            <li class="online">
                <div class="media">
                    <a href="#" class="pull-left media-thumb">
                        <img alt="" src="img/chat-avatar2.jpg" class="media-object">
                    </a>
                    <div class="media-body">
                        <strong>John Doe</strong>
                        <small>Dream Land, AU</small>
                    </div>
                </div><!-- media -->
            </li>
            <li class="online">
                <div class="media">
                    <a href="#" class="pull-left media-thumb">
                        <img alt="" src="img/chat-avatar.jpg" class="media-object">
                    </a>
                    <div class="media-body">
                        <div class="media-status">
                            <span class=" badge bg-important">3</span>
                        </div>
                        <strong>Jonathan Smith</strong>
                        <small>United States</small>
                    </div>
                </div><!-- media -->
            </li>

            <li class="online">
                <div class="media">
                    <a href="#" class="pull-left media-thumb">
                        <img alt="" src="img/pro-ac-1.png" class="media-object">
                    </a>
                    <div class="media-body">
                        <div class="media-status">
                            <span class=" badge bg-success">5</span>
                        </div>
                        <strong>Jane Doe</strong>
                        <small>ABC, USA</small>
                    </div>
                </div><!-- media -->
            </li>
            <li class="online">
                <div class="media">
                    <a href="#" class="pull-left media-thumb">
                        <img alt="" src="img/avatar1.jpg" class="media-object">
                    </a>
                    <div class="media-body">
                        <strong>Anjelina Joli</strong>
                        <small>Fockland, UK</small>
                    </div>
                </div><!-- media -->
            </li>
            <li class="online">
                <div class="media">
                    <a href="#" class="pull-left media-thumb">
                        <img alt="" src="img/mail-avatar.jpg" class="media-object">
                    </a>
                    <div class="media-body">
                        <div class="media-status">
                            <span class=" badge bg-warning">7</span>
                        </div>
                        <strong>Mr Tasi</strong>
                        <small>Dream Land, USA</small>
                    </div>
                </div><!-- media -->
            </li>
        </ul>
        <h5 class="side-title"> pending Task</h5>
        <ul class="p-task tasks-bar">
            <li>
                <a href="#">
                    <div class="task-info">
                        <div class="desc">Dashboard v1.3</div>
                        <div class="percent">40%</div>
                    </div>
                    <div class="progress progress-striped">
                        <div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-success">
                            <span class="sr-only">40% Complete (success)</span>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="task-info">
                        <div class="desc">Database Update</div>
                        <div class="percent">60%</div>
                    </div>
                    <div class="progress progress-striped">
                        <div style="width: 60%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-warning">
                            <span class="sr-only">60% Complete (warning)</span>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="task-info">
                        <div class="desc">Iphone Development</div>
                        <div class="percent">87%</div>
                    </div>
                    <div class="progress progress-striped">
                        <div style="width: 87%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" role="progressbar" class="progress-bar progress-bar-info">
                            <span class="sr-only">87% Complete</span>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="task-info">
                        <div class="desc">Mobile App</div>
                        <div class="percent">33%</div>
                    </div>
                    <div class="progress progress-striped">
                        <div style="width: 33%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar" class="progress-bar progress-bar-danger">
                            <span class="sr-only">33% Complete (danger)</span>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="task-info">
                        <div class="desc">Dashboard v1.3</div>
                        <div class="percent">45%</div>
                    </div>
                    <div class="progress progress-striped active">
                        <div style="width: 45%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="45" role="progressbar" class="progress-bar">
                            <span class="sr-only">45% Complete</span>
                        </div>
                    </div>

                </a>
            </li>
            <li class="external">
                <a href="#">See All Tasks</a>
            </li>
        </ul>
    </div>
    <!-- Right Slidebar end -->


    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{URL::asset('js/jquery.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
    <script class="include" type="text/javascript" src="{{URL::asset('js/jquery.dcjqaccordion.2.7.js')}}"></script>
    <script src="{{URL::asset('js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery.nicescroll.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('js/jquery.sparkline.js')}}" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="{{URL::asset('js/owl.carousel.js')}}" ></script>
    <script src="{{URL::asset('js/jquery.customSelect.min.js')}}" ></script>
    <script src="{{URL::asset('js/respond.min.js')}}" ></script>

    <!--right slidebar-->
    <script src="{{URL::asset('js/slidebars.min.js')}}"></script>

    <!--common script for all pages-->
    <script src="{{URL::asset('js/common-scripts.js')}}"></script>

    <!--script for this page-->
    <script src="{{URL::asset('js/sparkline-chart.js')}}"></script>
    <script src="{{URL::asset('js/easy-pie-chart.js')}}"></script>
    <script src="{{URL::asset('js/count.js')}}"></script>

  <script>

      //owl carousel

      $(document).ready(function() {
          $("#owl-demo").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true,
              autoPlay:true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

      $(window).on("resize",function(){
          var owl = $("#owl-demo").data("owlCarousel");
          owl.reinit();
      });

  </script>
  !--summernote-->
  <script src="{{URL::asset('asset/summernote/dist/summernote.min.js')}}"></script>
<script src="{{URL::asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{URL::asset('js/jquery.confirm.min.js')}}"></script>
<script type="text/javascript">
$(function(){
        $('#r').confirm();
    });
   
</script>
<script src="{{URL::asset('js/nouveauscript.js')}}"></script>
<script type="text/javascript">
    $(function(){
        $('#c').delay(400).fadeout(500,function(){
            $(this).attr('src','\proj\public\img\photos\autumn-1649440_960_720.jpg').fadeIn(500);
        });
    });
</script>
 <script type="text/javascript">
      $(document).ready(function () {
          //default
          var elem = document.querySelector('.js-switch');
          var init = new Switchery(elem);


          //small
          var elem = document.querySelector('.js-switch-small');
          var switchery = new Switchery(elem, { size: 'small' });

          //large
          var elem = document.querySelector('.js-switch-large');
          var switchery = new Switchery(elem, { size: 'large' });


          //blue color
          var elem = document.querySelector('.js-switch-blue');
          var switchery = new Switchery(elem, { color: '#7c8bc7', jackColor: '#9decff' });

          //green color
          var elem = document.querySelector('.js-switch-yellow');
          var switchery = new Switchery(elem, { color: '#FFA400', jackColor: '#ffffff' });

          //red color
          var elem = document.querySelector('.js-switch-red');
          var switchery = new Switchery(elem, { color: '#ff6c60', jackColor: '#ffffff' });


      });
  </script>
  <script>

      jQuery(document).ready(function(){

          $('.summernote').summernote({
              height: 200,                 // set editor height

              minHeight: null,             // set minimum height of editor
              maxHeight: null,             // set maximum height of editor

              focus: true                 // set focus to editable area after initializing summernote
          });
      });

  </script>
<script type="text/javascript">
    $(function(){
        $('#y').hide(4000);
    })
</script>
<script type="text/javascript">
    $(function(){
        $('#x').show(1000);
    })
</script>
<script type="text/javascript">
    $(function(){
        $('#z').fadeIn(3000);
    })
</script>
<script type="text/javascript">
    $(function(){
        $('#a').click(function()
            {
                $('#a').fadeout(2000)
            }
        )
    })
</script>
<!--this page plugins-->

<script type="text/javascript" src="{{URL::asset('assets/fuelux/js/spinner.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/bootstrap-fileupload/bootstrap-fileupload.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/bootstrap-daterangepicker/moment.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/bootstrap-timepicker/js/bootstrap-timepicker.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/jquery-multi-select/js/jquery.multi-select.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/jquery-multi-select/js/jquery.quicksearch.js')}}"></script>
<script>

    //owl carousel

    $(document).ready(function() {
        $("#owl-demo").owlCarousel({
            navigation : true,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem : true,
            autoPlay:true

        });
    });

    //custom select box

    $(function(){
        $('select.styled').customSelect();
    });

    $(window).on("resize",function(){
        var owl = $("#owl-demo").data("owlCarousel");
        owl.reinit();
    });

</script>

  <!--right slidebar-->
<script src="{{URL::asset('js/slidebars.min.js')}}"></script>


<!--Form Validation-->
<script src="{{URL::asset('js/bootstrap-validator.min.js')}}" type="text/javascript"></script>

<!--Form Wizard-->
<script src="{{URL::asset('js/jquery.steps.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('js/jquery.validate.min.js')}}" type="text/javascript"></script>


<!--common script for all pages-->
<script src="{{URL::asset('js/common-scripts.js')}}"></script>

<!--script for this page-->
<script src="{{URL::asset('js/jquery.stepy.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $("[rel=tooltip]").tooltip({ placement: 'top'});
    });
</script>



<script>

    //step wizard

    $(function() {
        $('#default').stepy({
            backLabel: 'Précédent',
            block: true,
            nextLabel: 'Suivant',
            titleClick: true,
            titleTarget: '.stepy-tab'
        });
    });
</script>

<script type="text/javascript">

    $(document).ready(function () {
        var form = $("#wizard-validation-form");
        form.steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            onStepChanging: function (event, currentIndex, newIndex) {
                form.validate().settings.ignore = ":disabled,:hidden";
                return form.valid();
            },
            onFinishing: function (event, currentIndex) {
                form.validate().settings.ignore = ":disabled";
                return form.valid();
            },
            onFinished: function (event, currentIndex) {
                alert("Submitted!");
            }
        }).validate({
            errorPlacement: function errorPlacement(error, element) {
                element.after(error);
            },
            rules: {
                confirm: {
                    equalTo: "#password"
                }
            }
        });
    });

</script>

<script>
    jQuery(document).ready(function() {
        GoogleMaps.init();
    });
</script>
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="{{URL::asset('assets/file-uploader/js/vendor/jquery.ui.widget.js')}}"></script>
<!-- The Templates plugin is included to render the upload/download listings -->
<script src="http://blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="http://blueimp.github.io/JavaScript-Load-Image/js/load-image.min.jsby"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="http://blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>

<!-- blueimp Gallery script -->
<script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="{{URL::asset('assets/file-uploader/js/jquery.iframe-transport.js')}}"></script>
<!-- The basic File Upload plugin -->
<script src="{{URL::asset('assets/file-uploader/js/jquery.fileupload.js')}}"></script>
<!-- The File Upload processing plugin -->
<script src="{{URL::asset('assets/file-uploader/js/jquery.fileupload-process.js')}}"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="{{URL::asset('assets/file-uploader/js/jquery.fileupload-image.js')}}"></script>
<!-- The File Upload audio preview plugin -->
<script src="{{URL::asset('assets/file-uploader/js/jquery.fileupload-audio.js')}}"></script>
<!-- The File Upload video preview plugin -->
<script src="{{URL::asset('assets/file-uploader/js/jquery.fileupload-video.js')}}"></script>
<!-- The File Upload validation plugin -->
<script src="{{URL::asset('assets/file-uploader/js/jquery.fileupload-validate.js')}}"></script>
<!-- The File Upload user interface plugin -->
<script src="{{URL::asset('assets/file-uploader/js/jquery.fileupload-ui.js')}}"></script>
<!-- The main application script -->
<script src="{{URL::asset('assets/file-uploader/js/main.js')}}"></script>
<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
<!--[if (gte IE 8)&(lt IE 10)]>
<script src="{{URL::asset('assets/file-uploader/js/cors/jquery.xdr-transport.js')}}"></script>
<![endif]-->

<!-- The template to display files available for upload -->
 
 
<script>
$(function () {
// définition de la boîte de dialogue
// la méthode jQuery dialog() permet de transformer un div en boîte de dialogue et de définir ses boutons
$("#popupconfirmation").dialog( {
autoOpen: false,
width: 400
});

// comportement du bouton devant ouvrir la boîte de dialogue
$(".boutonsupprimer").click(function(event) {
// cette ligne est très importante pour empêcher les liens ou les boutons de rediriger
// vers une autre page avant que l'usager ait cliqué dans le popup
event.preventDefault();
// retrouve l'attribut href du lien sur lequel on a cliqué
var targetUrl = $(this).attr("href");
// on définit les boutons ici plutôt que plus haut puisqu'on a besoin de connaître l'URL de la page, qui n'était pas encore disponible sur le document.ready.
$("#popupconfirmation").dialog({
buttons: [
{
text: "Oui",
click: function () {
window.location.href = targetUrl;
}
},
{
text: "Non",
click: function () {
$(this).dialog("close");
}
}
]
});

// affichage du popup
$("#popupconfirmation").dialog("open");
});
});

    </script>



<script type="text/javascript">

    $("#nameid").select2({
        placeholder: 'Choisir la ville' ,
        allowClear:true
    });
</script>
<script>
    jQuery(document).ready(function() {
        TaskList.initTaskWidget();
    });

    $(function() {
        $( "#sortable" ).sortable();
        $( "#sortable" ).disableSelection();
    });

</script>



</body>

<!-- Mirrored from thevectorlab.net/flatlab/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Mar 2017 22:45:33 GMT -->
</html>


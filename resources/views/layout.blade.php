<!doctype html>
<html lang="en">

<!-- Mirrored from new.uouapps.com/motijobs/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Apr 2017 21:36:48 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <link rel="{{URL::asset('shortcut icon')}}" href="{{URL::asset('img/favicon.html')}}">


    <!-- blueimp Gallery styles -->
    <link  href="{{URL::asset('http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css')}}" rel="stylesheet">
    <!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
    <link rel="stylesheet" href="{{URL::asset('assets/file-uploader/css/jquery.fileupload.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/file-uploader/css/jquery.fileupload-ui.css')}}">
    <!-- CSS adjustments for browsers with JavaScript disabled -->
    <noscript>
        <link rel="stylesheet" href="{{URL::asset('assets/file-uploader/css/jquery.fileupload-noscript.css')}}">
    </noscript>
    <noscript>
        <link rel="stylesheet" href="{{URL::asset('assets/file-uploader/css/jquery.fileupload-ui-noscript.css')}}">
    </noscript>

    <!-- Bootstrap core CSS -->
    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/bootstrap-reset.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{URL::asset('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet')}}" type="text/css" media="screen"/>
    <link rel="stylesheet" href="{{URL::asset('css/owl.carousel.css')}}" type="text/css">
    <link  href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/style-responsive.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('css/invoice-print.css')}}" rel="stylesheet" media="print">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="{{URL::asset('js/html5shiv.js')}}"></script>
    <script src="{{URL::asset('js/respond.min.js')}}"></script>
    <link  href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js')}}" type="text/javascript">

    <![endif]-->
    <!--right slidebar-->
    <link href="{{URL::asset('css/slidebars.css')}}" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>

    <!-- Stylesheets -->
    <link href="{{URL::asset('https://fonts.googleapis.com/css?family=Raleway:300,400,500,600')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/jquery.tagsinput.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/owl.carousel.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/responsive.css')}}">

    <!--[if IE 9]>

    <script src="{{URL::asset('js/media.match.min.js')}}"></script>
    <![endif]-->

</head>


  <body>
    <div id="main-wrapper" class="our-agents-content">

      <!-- HEADER -->
      <header id="header">
        <div class="header-top-bar">

          <!--
          HEADER TOP BAR WITH NOTIFICATION FOR REGISTER USER
          -->


          <div class="header-notification-bar">
            <div class="non-register-user">

              <div class="container">
                <div class="row">

                  <div class="col-md-3 col-sm-3">
                    <div class="logo-section">
                      <a href="index-2.html"><img src="{{URL::asset('img/photos/logo.png') }}" alt="hhhhhhhhh"></a>
                    </div>
                  </div>

                  <div class="col-md-6 col-sm-5">
                    
                  </div>

                  <div class="col-md-3 col-sm-4">
                    <div class="notification-section text-right">

                       <ul class="list-inline">
                                        <li><h6><i class="fa fa-user"></i>
                                        {{$personne->prenom  }}  {{  $personne->nom}}</li>
                                         <li><a href="{{ route('personnes.getlogout')}}""><i class="fa fa-lock"></i>
                                        Déconnexion</a></h6></li>
                                    

                                    </ul>
                    </div>
                  </div>

                </div> <!-- end .row -->
              </div> <!-- end .container -->
            </div> <!-- end .visitors-top-bar -->
          </div> <!-- end. header-notification-bar  -->

            <!--
            END HEADER TOP BAR FOR WITHOUT LOGIN USER
            -->

            <!-- Navigation -->
            <div class="main-navbar">

                <nav class="navbar navbar-default">
                    <div class="container">

                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="/admin"><img src="{{URL::asset('img/photos/logo.png')}}" alt="kikii"></a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->



                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                        <ul class="nav navbar-nav">
                                            <li class="active"><a href="{{ route('personnes.affiche',$personne->id_personne ) }}"><i class="fa fa-home"></i>Accueil</a></li>
                                            <li class="active"><a href="/connecte"><i class="fa fa-home"></i>Administration</a></li>
                                            <li class="active"><a href="{{ route('services.create', $personne->id_personne) }}"><i class="fa fa-file-text-o"></i>Services</a></li>
                                            <li class="active"><a href="{{ route('documents.papierclient', $personne->id_personne) }}"><i class="fa fa-book"></i>Papiers</a></li>
                                            <li class="active"><a href="{{ route('services.parcours', $personne->id_personne) }}"><i class="fa fa-truck"></i>Parcours</a></li>
                                            <li class="active"><a href="{{ route('agents.font_agent', $personne->id_personne) }}"<i class="fa fa-users"></i>Agents</a></li>
                                        </ul>

                                    </div><!-- /.navbar-collapse -->
                                </li>
                            </ul>
                        </div>
                </nav>
            </div>
        </div>
    </header>
</div>



    <!-- end .header-banner -->

    <div class="header-page-title job-registration clearfix">
        <div class="title-overlay"></div>
        <div class="container">

            <ol class="breadcrumb">
                <li><a href="{{ route('personnes.affiche',$personne->id_personne ) }}"><h3>Accueil </h3></a></li>
                <li><a id="z" style="display:none" class="active" href="/Bienvenue"><h4>@yield('title1')</h4></a></li>
            </ol>


        </div> <!-- end .container -->
    </div> <!-- end .header-page-title -->
    <!-- Page Content -->
@yield('content')

 <!-- end .container -->
 <!-- end #page-content -->

<!-- Footer Start -->
<!-- end #footer -->


<!-- end #main-wrapper -->

<!-- Scripts -->

<script src="{{URL::asset('js/jquery.js')}}"></script>
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<script class="include" type="text/javascript" src="{{URL::asset('js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{URL::asset('js/jquery.scrollTo.min.js')}}"></script>
<script src="{{URL::asset('js/jquery.nicescroll.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('js/jquery.sparkline.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')}}"></script>
<script src="{{URL::asset('js/owl.carousel.js')}}" ></script>
<script src="{{URL::asset('js/jquery.customSelect.min.js')}}" ></script>
<script src="{{URL::asset('js/respond.min.js')}}" ></script>
<script src="assets/summernote/dist/summernote.min.js"></script>
<script src="{{URL::asset('js/jquery.confirm.js')}}"></script>
<script src="{{URL::asset('js/jquery.confirm.min.js')}}"></script>

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
<!-- js placed at the end of the document so the pages load faster -->
<script src="{{URL::asset('js/jquery.js')}}"></script>
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<script class="include" type="text/javascript" src="{{URL::asset('js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{URL::asset('js/jquery.scrollTo.min.js')}}"></script>
<script src="{{URL::asset('js/jquery.nicescroll.js" type="text/javascript')}}"></script>
<script src="{{URL::asset('js/respond.min.js')}}" ></script>

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
<script src="js/jquery.stepy.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $("[rel=tooltip]").tooltip({ placement: 'top'});
    });
</script>
<script>
    $(".confirm").confirm();
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
<script src="http://blueimp.github.io/JavaScript-Load-Image/js/load-image.min.js"></script>
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
<script id="template-upload" type="text/x-tmpl">
      {% for (var i=0, file; file=o.files[i]; i++) { %}
      <tr class="template-upload fade">
          <td>
              <span class="preview"></span>
          </td>
          <td>
              <p class="name">{%=file.name%}</p>
              <strong class="error text-danger"></strong>
          </td>
          <td>
              <p class="size">Processing...</p>
              <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
          </td>
          <td>
              {% if (!i && !o.options.autoUpload) { %}
              <button class="btn btn-primary start" disabled>
                  <i class="glyphicon glyphicon-upload"></i>
                  <span>Start</span>
              </button>
              {% } %}
              {% if (!i) { %}
              <button class="btn btn-warning cancel">
                  <i class="glyphicon glyphicon-ban-circle"></i>
                  <span>Cancel</span>
              </button>
              {% } %}
          </td>
      </tr>
      {% } %}
  </script>
<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
      {% for (var i=0, file; file=o.files[i]; i++) { %}
      <tr class="template-download fade">
          <td>
            <span class="preview">
                {% if (file.thumbnail_url) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnail_url%}"></a>
                {% } %}
            </span>
          </td>
          <td>
              <p class="name">
                  {% if (file.url) { %}
                  <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnail_url?'data-gallery':''%}>{%=file.name%}</a>
                  {% } else { %}
                  <span>{%=file.name%}</span>
                  {% } %}
              </p>
              {% if (file.error) { %}
              <div><span class="label label-danger">Error</span> {%=file.error%}</div>
              {% } %}
          </td>
          <td>
              <span class="size">{%=o.formatFileSize(file.size)%}</span>
          </td>
          <td>
              {% if (file.deleteUrl) { %}
              <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
              <i class="glyphicon glyphicon-trash"></i>
              <span>Delete</span>
              </button>
              <input type="checkbox" name="delete" value="1" class="toggle">
              {% } else { %}
              <button class="btn btn-warning cancel">
                  <i class="glyphicon glyphicon-ban-circle"></i>
                  <span>Cancel</span>
              </button>
              {% } %}
          </td>
      </tr>
      {% } %}
  </script>
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
<script src="{{URL::asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{URL::asset('js/nouveauscript.js')}}"></script>
<script type="text/javascript">
    $(function(){
        $('#y').hide(3000);
    })
</script>
<script type="text/javascript">
    $(function(){
        $('#x').show(800);
    })
</script>
<script type="text/javascript">
    $(function(){
        $('#z').fadeIn(1000);
    })
</script>
<script type="text/javascript">
    $(function(){
        $('#a').click(function()
            {
                $('#a').hide(2000);
            }
        )
    })
</script>

<script src="{{URL::asset('js/jquery-3.1.1.min.js')}}"></script>
<script src="{{URL::asset('js/bootstrap.js')}}"></script>
<script src="{{URL::asset('js/jquery.ba-outside-events.min.js')}}"></script>
<script src="{{URL::asset('js/jquery.responsive-tabs.js')}}"></script>
<script src="{{URL::asset('js/jquery.flexslider-min.js')}}"></script>
<script src="{{URL::asset('js/jquery.fitvids.js')}}"></script>
<script src="{{URL::asset('js/jquery-ui-1.10.4.custom.min.js')}}"></script>
<script src="{{URL::asset('js/jquery.inview.min.js')}}"></script>

<script src="{{URL::asset('js/jquery-ui-1.10.4.custom.min.js')}}"></script>
<script src="{{URL::asset('js/owl.carousel.min.js')}}"></script>
<script src="{{URL::asset('js/scripts.js')}}"></script>
<script type="text/javascript">
    $('#tags').tagsInput();
</script>
<script type="text/javascript">


    new nicEditor().panelInstance('editor');

    $('.nicEdit-panelContain').parent().width('100%');
    $('.nicEdit-panelContain').parent().next().width('100%');


    //$(".dropdown-menu li a").click(function(e){
    // e.preventDefault();
    // $(".btn:first-child").text($(this).text());
    // $(".btn:first-child").val($(this).text());
    //});



</script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
var geocoder = new google.maps.Geocoder();

function geocodePosition(pos) {
  geocoder.geocode({
    latLng: pos
  }, function(responses) {
    if (responses && responses.length > 0) {
      updateMarkerAddress(responses[0].formatted_address);
    } else {
      updateMarkerAddress('Cannot determine address at this location.');
    }
  });
}

function updateMarkerStatus(str) {
  document.getElementById('markerStatus').innerHTML = str;
}

function updateMarkerPosition(latLng) {
  document.getElementById('info').innerHTML = [
    latLng.lat(),
    latLng.lng()
  ].join(', ');
}

function updateMarkerAddress(str) {
  document.getElementById('address').innerHTML = str;
}

function initialize() {
  var latLng = new google.maps.LatLng(-34.397, 150.644);
  var map = new google.maps.Map(document.getElementById('mapCanvas'), {
    zoom: 8,
    center: latLng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });
  var marker = new google.maps.Marker({
    position: latLng,
    title: 'Point A',
    map: map,
    draggable: true
  });

  // Update current position info.
  updateMarkerPosition(latLng);
  geocodePosition(latLng);

  // Add dragging event listeners.
  google.maps.event.addListener(marker, 'dragstart', function() {
    updateMarkerAddress('Dragging...');
  });

  google.maps.event.addListener(marker, 'drag', function() {
    updateMarkerStatus('Dragging...');
    updateMarkerPosition(marker.getPosition());
  });

  google.maps.event.addListener(marker, 'dragend', function() {
    updateMarkerStatus('Drag ended');
    geocodePosition(marker.getPosition());
  });
}

// Onload handler to fire off the app.
google.maps.event.addDomListener(window, 'load', initialize);
</script>
<script type="text/javascript">
    $(function(){
        $('#z').fadeIn(3000);
    })
</script>
<style>
  #mapCanvas {
    width: 500px;
    height: 400px;
    float: left;
  }
  #infoPanel {
    float: left;
    margin-left: 10px;
  }
  #infoPanel div {
    margin-bottom: 5px;
  }
  </style>
</body>

<!-- Mirrored from new.uouapps.com/motijobs/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Apr 2017 21:37:10 GMT -->
</html>

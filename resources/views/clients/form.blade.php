<!doctype html>
<html lang="en">
  
<!-- Mirrored from new.uouapps.com/motijobs/register-process1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Apr 2017 21:38:39 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inscription</title>

    <!-- Stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/jquery.tagsinput.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/owl.carousel.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/responsive.css')}}">

    <!--[if IE 9]>
    <script src="js/media.match.min.js"></script>
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
                      <a href=""><img src="{{URL::asset('img/photos/logo.png')}}" alt=""></a>
                    </div>
                  </div>

                  <div class="col-md-6 col-sm-5">
                    
                  </div>

                  <div class="col-md-3 col-sm-4">
                    <div class="notification-section text-right">

                      <ul class="list-inline">
            
                        <li><a href="#"><i class="fa fa-user"></i>Connexion</a></li>
                        <li><a href="{{route('personnes.create')}}"><i class="fa fa-pencil"></i>Inscription</a></li>
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
                            <a class="navbar-brand" href="/admin"><img src="img/photos/logo.png" alt=""></a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->



                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                        <ul class="nav navbar-nav">
                                            <li class="active"><a href="/personne/login"><i class="fa fa-home"></i>Accueil</a></li>
                                            <li class="active"><a href="/connecte"><i class="fa fa-home"></i>Administration</a></li>
                                            <li class="active"><a href="/personne/login"><i class="fa fa-file-text-o"></i>Services</a></li>
                                            <li class="active"><a href="/personne/login"><i class="fa fa-book"></i>Papiers</a></li>
                                            <li class="active"><a href="/personne/login"><i class="fa fa-truck"></i>Parcours</a></li>
                                            <li class="active"><a href="/personne/login"><i class="fa fa-users"></i>Agents</a></li>
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




      </header>

      <!-- process content -->
      <div class="process-content">
        <div class="container">

         <!-- SIgn Up -->
          <div class="moti-sign">
           
            <div class="form-sec">
              <div class="process-num">
 <h1 style=" text-align: center; color: blue "><i class="fa fa-pencil"></i>Inscription</h1>
            <h6 style=" text-align: center;">Inscrivez-vous pour profiter de tous nos services</h6>
          
              </div>

              <!-- Sign Up Form -->
             {!! Form::open([
                       'route' => 'clients.store'
                       ]) !!}
                <ul class="row">
                  <div class="form-group{{ $errors->has('prenom') ? ' has-error' : '' }}">
                  <li class="col-md-6" class="form-group{{ $errors->has('prenom') ? ' has-error' : '' }}">
                    <input id="prenom" type="text" class="form-control" name="prenom" placeholder="Prénom">
                  </li>
                   @if ($errors->has('prenom'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('prenom') }}</strong>
                                    </span>
                @endif
                  <div class="form-group{{ $errors->has('nom') ? ' has-error' : '' }}">
                  <li class="col-md-6">
                    <input id="nom" type="text" class="form-control" name="nom" placeholder="Nom">
                  </li>
                   @if ($errors->has('nom'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('nom') }}</strong>
                                    </span>
                @endif
                </div>
                  <div class="form-group{{ $errors->has('cin') ? ' has-error' : '' }}">
                   <li class="col-md-6">
                    <input id="cin" type="text" class="form-control" name="cin" placeholder="CIN">
                  </li>
                   @if ($errors->has('cin'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('cin') }}</strong>
                                    </span>
                @endif
                </div>
                  <div class="form-group{{ $errors->has('Num_tel') ? ' has-error' : '' }}">
                  <li class="col-md-6">
                    <input id="Num_tel" type="text" class="form-control" name="Num_tel" placeholder="Téléphone" >
                  </li>
                   @if ($errors->has('Num_tel'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('Num_tel') }}</strong>
                                    </span>
                @endif
                </div>
                  <div class="form-group{{ $errors->has('adresse') ? ' has-error' : '' }}">
                  <li class="col-md-6">
                    <input id="adresse" type="text" class="form-control" name="adresse" placeholder="Adresse">
                  </li>
                   @if ($errors->has('adresse'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('adresse') }}</strong>
                                    </span>
                @endif
                </div>
                  <div class="form-group{{ $errors->has('region') ? ' has-error' : '' }}">
                  <li class="col-md-6">
                   
                        {!! Form::select('region', array('Ariana'=>'Ariana','Béja'=>'Béja','Ben Arous'=>'Ben Arous','Bizerte'=>'Bizerte','Gabes'=>'Gabes'
                        ,'Gafsa'=>'Gafsa','Jendouba'=>'Jendouba','kairawen'=>'kairawen','Kassrine'=>'Kassrine','Kébili'=>'Kébili','La Manouba'=>'La Manouba','Le kef '=>'Le kef '
                        ,'Mahdia'=>'Mahdia',' Médnine'=>' Médnine',' Monastir'=>' Monastir','Nabeul'=>'Nabeul','Sfax'=>'Sfax','Sidi Bouzid'=>'Sidi Bouzid','Siliana'=>'Siliana',
                        'Sousse'=>' Sousse','Tataouine'=>'Tataouine','Tozeur'=>'Tozeur','Tunis'=>'Tunis','Zaghouan'=>'Zaghouan'))!!}

                  </li>
 @if ($errors->has('region'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('region') }}</strong>
                                    </span>
                @endif
                </div>
                   <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                  <li class="col-md-12">
                    <input id="email" type="email" placeholder="Adresse éléctronique" class="form-control" name="email" >  
                  </li>
                   @if ($errors->has('email'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                  <li class="col-md-6">
                    <input id="password" type="password" placeholder="Mot de passe" class="form-control" name="password" >
                  </li>
                   @if ($errors->has('password'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif
                </div>
                  <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                  <li class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmer votre mot de passe" >
                  </li>
                   @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                @endif
                </div>
                  <li class="col-md-6">
                    <p>Vous avez déja un compte? <a href="/personne/login">connexion</a></p>
                  </li>
                   <button class="btn btn-new" type="submit">S'inscrire</button>
    {!! Form::close() !!}
                </ul>
            
            </div>
          </div>
        </div>
      </div>
     

    </div>
    <!-- end #main-wrapper -->

    <!-- Scripts -->
    <script src="{{URL::asset('js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.js')}}"></script>
    <script src="{{URL::asset('js/jquery.ba-outside-events.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery.inview.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery.responsive-tabs.js')}}"></script>
    <script src="{{URL::asset('js/jquery.tagsinput.min.js')}}"></script>
    <script src="{{URL::asset('js/owl.carousel.html')}}"></script>
    <script src="{{URL::asset('js/jquery-ui.js')}}"></script>
    <script src="{{URL::asset('js/scripts.js')}}"></script>
    <script type="text/javascript">
      $('#tags').tagsInput();
    </script>
  </body>

<!-- Mirrored from new.uouapps.com/motijobs/register-process1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Apr 2017 21:38:39 GMT -->
</html>

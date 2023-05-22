<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thevectorlab.net/flatlab/registration.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Mar 2017 22:47:16 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="{{URL::asset('shortcut icon')}}" href="{{URL::asset('img/favicon.html')}}">

    <title>page d'inscription</title>

    <!-- Bootstrap core CSS -->
    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/bootstrap-reset.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{URL::asset('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/style-responsive.css')}}" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="{{URL::asset('js/html5shiv.js')}}"></script>
    <script src="{{URL::asset('js/respond.min.js')}}"></script>
    <![endif]-->
</head>
<div class="container">
    <div class="form-signin">
        {!! Form::open([
                           'route' => 'agents.store'
                           ]) !!}
        <h2 class="form-signin-heading">Ajouter nouvel agent</h2>
        <p>S'il vous plait remplir tous les champs nécessaires</p>
        <div class="login-wrap">
            <div class="form-group{{ $errors->has('nom') ? ' has-error' : '' }}">
                <div class="col-lg-14">
                    <div class="col-lg-25" class="input-group m-bot15">
                        <input id="nom" type="text" class="form-control" name="nom" value="{{ old('nom') }}"placeholder="Nom " autofocus>
                    </div>
                </div>
                @if ($errors->has('nom'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('nom') }}</strong>
                                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('prenom') ? ' has-error' : '' }}">
                <div class="col-lg-14">
                    <div class="col-lg-25" class="input-group m-bot15">
                        <input id="prenom" type="text" class="form-control" name="prenom" value="{{ old('prenom') }}"placeholder="Prénom" autofocus>
                    </div>
                </div>
                @if ($errors->has('prenom'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('prenom') }}</strong>
                                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('Num_tel') ? ' has-error' : '' }}">
                <div class="col-lg-14">
                    <div class="col-lg-25"  class="input-group m-bot15">
                        <input id="Num_tel" type="text" class="form-control" name="Num_tel" value="{{ old('Num_tel') }}"placeholder="Numéro de téléphone" autofocus>
                    </div>
                </div>
                @if ($errors->has('Num_tel'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('Num_tel') }}</strong>
                                    </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('adresse') ? ' has-error' : '' }}">
                <div class="col-lg-14">
                    <div class="col-lg-25" class="input-group m-bot15">
                        <input id="adresse" type="text" class="form-control" name="adresse" value="{{ old('adresse') }}"placeholder="Adresse" autofocus>
                    </div>
                </div>
                @if ($errors->has('adresse'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('adresse') }}</strong>
                                    </span>
                @endif
            </div>
        
            <div class="form-group{{ $errors->has('region') ? ' has-error' : '' }}">
                        {!! Form::label('Région:') !!}
                        {!! Form::select('region', array('Ariana'=>'Ariana','Béja'=>'Béja','Ben Arous'=>'Ben Arous','Bizerte'=>'Bizerte','Gabes'=>'Gabes'
                        ,'Gafsa'=>'Gafsa','Jendouba'=>'Jendouba','kairawen'=>'kairawen','Kassrine'=>'Kassrine','Kébili'=>'Kébili','La Manouba'=>'La Manouba','Le kef '=>'Le kef '
                        ,'Mahdia'=>'Mahdia',' Médnine'=>' Médnine',' Monastir'=>' Monastir','Nabeul'=>'Nabeul','Sfax'=>'Sfax','Sidi Bouzid'=>'Sidi Bouzid','Siliana'=>'Siliana',
                        'Sousse'=>' Sousse','Tataouine'=>'Tataouine','Tozeur'=>'Tozeur','Tunis'=>'Tunis','Zaghouan'=>'Zaghouan'))!!}

                @if ($errors->has('region'))
                    <span class="help-block">
                                            <strong>{{ $errors->first('region') }}</strong>
                            </span>
                @endif
            </div>
        
            <div class="form-group">
            {!! Form::label('État:') !!}
            {!! Form::select('etat',array('0'=>'non disponible','1'=>'disponible'),'1') !!}
            </div>
        </div>
        <p>Entrez les données concernant le compte</p>
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <div class="col-lg-14">
                <div  class="input-group m-bot15">
                    <span class="input-group-addon">@</span>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"placeholder="Adresse éléctronique" autofocus>
                </div>
            </div>
            @if ($errors->has('email'))
                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
            @endif
        </div>
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <div class="col-lg-14">
                <div class="col-lg-25" class="input-group m-bot15">
                    <input id="password" type="password" class="form-control" name="password" placeholder="Mot de passe">
                </div>
            </div>
            @if ($errors->has('password'))
                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
            @endif

        </div>

        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
            <div class="col-lg-14">
                <div class="col-lg-25" class="input-group m-bot15">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmer votre mot de passe">
                </div>
            </div>
            @if ($errors->has('password_confirmation'))
                <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
            @endif
        </div>
        <form enctype="multipart/form-data" action="/show" method="POST">
            <label>Choisissez une image</label>
            <input type="file" name="agen">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <button class="btn btn-lg btn-login btn-block" type="submit">S'inscrire</button>
        </form>
        {!! Form::close() !!}
        <div class="registration">
            Vous êtes inscrit
            <a class="" href="/login">
                Connexion
            </a>

        </div>


        </form>

    </div>
</div>
</body>
    </div>
</div>


<!-- Mirrored from thevectorlab.net/flatlab/registration.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Mar 2017 22:47:16 GMT -->
</html>


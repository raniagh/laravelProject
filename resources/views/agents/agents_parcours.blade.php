@extends('base')
@section('title', 'documents')
@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <aside class="profile-nav col-lg-3">
                    <section class="panel">
                        <div class="user-heading round">
                            <a href="#">
                                <img src="/img/photos/{{$agent->agen}}" alt="">
                            </a>
                            <h1>{{$agent->nom}}{{$agent->prenom}}</h1>
                            <p>{{$agent->email}}</p>
                        </div>

                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="profile.html"> <i class="fa fa-user"></i> Profile</a></li>
                            <li><a href="profile-activity.html"> <i class="fa fa-calendar"></i> les derniers parcours<span class="label label-danger pull-right r-activity">9</span></a></li>
                            <li  class="active"><a href="{{ route('agents.edit', $agent->id_personne)}}"> <i class="fa fa-edit"></i> Modifier profile</a></li>
                        </ul>

                    </section>
                </aside>
                <aside class="profile-info col-lg-9">
                    <section class="panel">
                        <div class="bio-graph-heading">
                            La liste des parcours
                        </div>
                        <div class="panel-body bio-graph-info">
                            <h1> agent</h1>
                            <!-- page start-->
                            {!! Form::model($agent,array('route' => ['agents.update', $agent->id_personne],'method' =>'PATCH')) !!}
                            {{csrf_field() }}

                            <div class="form-group{{ $errors->has('nom') ? ' has-error' : '' }}">
                                {!! Form::label('Nom') !!}
                                {!! Form::text('nom', null, ['class' => 'form-control']) !!}
                                @if ($errors->has('nom'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nom') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('prenom') ? ' has-error' : '' }}">
                                {!! Form::label('Prénom') !!}
                                {!! Form::text('prenom', null, ['class' => 'form-control']) !!}
                                @if ($errors->has('prenom'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('prenom') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('Num_tel') ? ' has-error' : '' }}">
                                {!! Form::label('Numéro de téléphone') !!}
                                {!! Form::text('Num_tel', null, ['class' => 'form-control']) !!}
                                @if ($errors->has('Num_tel'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Num_tel') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('adresse') ? ' has-error' : '' }}">
                                {!! Form::label('Adresse') !!}
                                {!! Form::text('adresse', null, ['class' => 'form-control']) !!}
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
                           
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                {!! Form::label('email') !!}
                                {!! Form::email('email', null, ['class' => 'form-control']) !!}
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <div class="col-lg-14">
                                    <div class="col-lg-25" class="input-group m-bot15">
                                        <input id="password" type="password" class="form-control" name="password" placeholder="Mot de passe actuel">
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


                            <form enctype="multipart/form-data" action="{{ route('agents.edit', $agent->id_personne)}}" method="POST">
                                <label>Choisissez une image</label>
                                <input type="file" name="agen">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <button class="btn  btn-info " type="submit">Enregistrer modification</button>
                            </form>
                            {!! Form::close() !!}


                        </div>
                    </section>
                </aside>
            </div>
        </section>


        </aside>
        </div>
    </section>
    </section>

    <!-- page end-->
    </section>
@endsection


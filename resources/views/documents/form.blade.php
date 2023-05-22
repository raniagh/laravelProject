@extends('layout1')
@section('title', 'Créer nouveau document')
@section('content')
    <!--main content start-->

    <section id="main-content">
        <section class="wrapper">
            <!-- form start-->
            <section>
                <div class="panel panel-primary">
                    <header class="panel-heading">
                        Ajouter nouveau document
                    </header>

                    <div class="panel-body">
                        <div class="bio-row">
                <!-- page start-->

                {!! Form::open([
                   'route' => 'documents.store'
                   ]) !!}

                <div class="form-group{{ $errors->has('titre') ? ' has-error' : '' }}">
                    {!! Form::label('titre') !!}
                    {!! Form::text('titre', null, ['class' =>'form-control']) !!}
                    @if ($errors->has('titre'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('titre') }}</strong>
                                    </span>

                    @endif
                </div>
                            <div class="form-group{{ $errors->has('date_publication') ? ' has-error' : '' }}">
                    {!! Form::label('date de publication') !!}
                    {!! Form::date('date_publication', null, ['class' => 'form-control']) !!}
                    @if ($errors->has('date_publication'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('date_publication') }}</strong>
                                    </span>
                    @endif
                </div>
 

                            <div class="form-group{{ $errors->has('nom_fichier') ? ' has-error' : '' }}">
                                {!! Form::label('nom_fichier',null,['class' => 'control-label col-md-3']) !!}
                                {!! Form::file('nom_fichier', null, ['class' => 'default']) !!}
                                @if ($errors->has('nom_fichier'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nom_fichier') }}</strong>
                                    </span>
                                @endif
                            </div>
                             <div class="form-group{{ $errors->has('nom_video') ? ' has-error' : '' }}">
                                {!! Form::label('nom video',null,['class' => 'control-label col-md-3']) !!}
                                {!! Form::file('nom_video', null, ['class' => 'default']) !!}
                                @if ($errors->has('nom_video'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nom_video') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <form enctype="multipart/form-data" action="/show" method="POST">
                                <label>image</label>
                                <input type="file" name="avatar">
                                <input type="hidden" name="_token" value="{{csrf_token()}}"><br/>

                                <button class="btn btn-round btn-primary " type="submit">Ajouter document</button>


                            </form>
            {!! Form::close() !!}
            </div>
                    </div>
                    <a href="javascript:history.back()" class="btn btn-warning">
                        <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
                    </a>
                </div>

    </section>
        </section>
    </section>

@endsection


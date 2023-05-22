

@extends('layout1')

@section('title', $description->exists ? 'Editer '.$description->titre : 'Edit Page')

@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- form start-->
            <section>
                <div class="panel panel-info">
                    <header class="panel-heading">
                        Modifier une description
                    </header>

                    <div class="panel-body">
                        <div class="bio-row">
                            {!! Form::model($description,array('route' => ['descriptions.update', $description->id_description],'method' =>'PATCH')) !!}
                            {{csrf_field() }}

                            <div class="form-group{{ $errors->has('titre') ? ' has-error' : '' }}">
                                {!! Form::label('titre') !!}
                                {!! Form::text('titre', null, ['class' =>'form-control']) !!}
                                @if ($errors->has('titre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('titre') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('contenu') ? ' has-error' : '' }}">
                                {!! Form::label('contenu') !!}
                                {!! Form::textarea('contenu', null, ['class' =>'form-control']) !!}
                                @if ($errors->has('contenu'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('contenu') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="text-center">

                                {!! Form::submit('Enregistrer modification', ['class' =>  'btn btn-primary']) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>

                    </div>
                    <a href="javascript:history.back()" class="btn btn-warning">
                        <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
                    </a>
                </div>
                </div>

            </section>
        </section>
    </section>

@endsection
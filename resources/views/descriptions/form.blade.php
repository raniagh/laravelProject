@extends('layout1')
@section('title', 'Créer nouveelle description')
@section('content')
    <!--main content start-->

    <section id="main-content">
        <section class="wrapper">
            <!-- form start-->
            <section>
                <div class="panel panel-info">
                    <header class="panel-heading">
                        Ajouter une description
                    </header>

                    <div class="panel-body">
                        <div class="bio-row">


                            {!! Form::open([
                               'route' => 'descriptions.store'
                               ]) !!}
                            <h1 style="text-align:center;">{{ $Document->titre}}</h3>

                            {{ Form::hidden('id_document', $Document->id_document) }}

                            <div class="form-group{{ $errors->has('titre') ? ' has-error' : '' }}">
                                {!! Form::label('Titre') !!}
                                {!! Form::text('titre', null, ['class' => 'form-control']) !!}
                                @if ($errors->has('titre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('titre') }}</strong>
                                    </span>
                                @endif
                            </div>
                          

                            <div class="form-group{{ $errors->has('contenu') ? ' has-error' : '' }}">
                                {!! Form::label('Contenu') !!}
                                {!! Form::textarea('contenu', null, ['class' => 'form-control']) !!}
                                @if ($errors->has('contenu'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('contenu') }}</strong>
                                    </span>
                                @endif
                            </div>

    {!! Form::submit('Ajouter', ['class' => 'btn btn-primary center-block']) !!}

    {!! Form::close() !!}
                        </div>
                        </div>
                    <a href="javascript:history.back()" class="btn btn-warning">
                        <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
                    </a>
                </div>
                    </div>
                </div>
            </section>
        </section>
        </section>
    @endsection
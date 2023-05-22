

@extends('layout1')

@section('title', $Document->exists ? 'Editer '.$Document->titre : 'Edit Page')

@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- form start-->
            <section>
                <div class="panel panel-info">
                    <header class="panel-heading">
                        <h3><i class="fa fa-pencil"></i>Modifier un document</h3>
                    </header>

                    <div class="panel-body">
                        <div class="bio-row">
                            {!! Form::model($Document,array('route' => ['documents.update', $Document->id_document],'method' =>'PATCH')) !!}
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

                            <div class="form-group{{ $errors->has('date_publication') ? ' has-error' : '' }}">
                                {!! Form::label('date de publication') !!}
                                {!! Form::date('date_publication', null, ['class' =>'form-control']) !!}
                                @if ($errors->has('date_publication'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date_publication') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('nom_fichier') ? ' has-error' : '' }}">
                                {!! Form::label('nom de fichier',null,['class' => 'control-label col-md-3']) !!}
                                {!! Form::file('nom_fichier', null, ['class' => 'default']) !!}
                                @if ($errors->has('nom_fichier'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nom_fichier') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('nom_fichier') ? ' has-error' : '' }}">
                            <form enctype="multipart/form-data" action="{{ route('documents.edit', $Document->id_document)}}" method="POST">
                                <label>Image</label>
                                <input type="file" name="avatar">
                                <input type="hidden" name="_token" value="{{csrf_token()}}"><br/>
                               
                                <button class="btn  btn-info center-block " type="submit">Enregistrer modification</button>
                            </form>
                            </div>
                            {!! Form::close() !!}
                       
                    <a href="javascript:history.back()" class="btn btn-warning pull-right">
                        <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
                    </a>
                     </div>

                    </div>
                </div>
                </div>

            </section>
        </section>
    </section>

@endsection
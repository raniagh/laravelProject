@extends('layout1')
@section('title', 'Tarifs')
@section('content')
    <!--main content start-->

    <section id="main-content">
        <section class="wrapper">
            <!-- form start-->
            <section>
                <div class="panel panel-info">
                    <header class="panel-heading">
                        Calculer tarif
                    </header>

                    <div class="panel-body">
                        <div class="bio-row">
                <!-- page start-->

                {!! Form::open([
                   'route' =>[ 'services.divisertarif',$service->id_service
                   ]]) !!}
                
                <div class="form-group{{ $errors->has('titre') ? ' has-error' : '' }}">
                    {!! Form::label('Montant') !!}
                    {!! Form::text('montant', null, ['class' =>'form-control']) !!}
                    @if ($errors->has('montant'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('montant') }}</strong>
                                    </span>

                    @endif
                </div>
                            <div class="form-group{{ $errors->has('date_publication') ? ' has-error' : '' }}">
                    {!! Form::label('frais de transport') !!}
                    {!! Form::text('frais_transport', null, ['class' => 'form-control']) !!}
                    @if ($errors->has('frais_transport'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('frais_transport') }}</strong>
                                    </span>
                    @endif
                </div>
 

                                 {!! Form::submit('Calculer tarifs', ['class' => 'btn btn-primary']) !!}

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


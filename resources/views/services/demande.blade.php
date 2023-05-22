@extends('layout')

@section('title', 'affaire')
@section('title1','|Affaire')
@section('content')
    <script type="text/javascript">

    </script>
    <div id="page-content">
        <div class="container">
            <div class="page-content">
     <h1 > <i class="fa fa-file-text-o"></i>Formulaire</h1><h5 style="display:none" id="x">(Merci de renseigner tous les champs)</h5><br/>
    {!! Form::open([
       'route' => 'services.store'
       ]) !!}
                {{ Form::hidden('id_personne',  $personne->id_personne) }}
    <div class="form-group">
        <i class="fa fa-suitcase"></i>
        {!! Form::label('désignation du service') !!}
        {!! Form::select('designation', array('Papiers universitaires'=>'papiers universitaire','Colis'=>'colis','Papiers juridiques'=>'papiers juridiques','Facture'=>'facture'),null,['class' => 'form-control'])!!}
    </div>
    <div class="form-group">
       <i class="fa fa-lightbulb-o"></i>
        {!! Form::label('Déscription du service') !!}
         {!! Form::text('description', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        <i class="fa fa-map-marker"></i>
        {!! Form::label('Lieu du service') !!}
        {!! Form::text('point_depart', null, ['class' => 'form-control']) !!}
    </div>
                <div class="form-group">
                    <i class="fa fa-map-marker"></i>
                    {!! Form::label('Adresse de livraison') !!}
                    {!! Form::text( 'point_arrive', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    <i class="fa fa-calendar"></i>
                    {!! Form::label('Date échéance') !!}
                    {!! Form::date('date_echeance', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    <i class="fa fa-group"></i>/<i class="fa fa-user"></i>
                    {!! Form::label('type') !!}
                    {!! Form::select('type',array('0'=>'partagé','1'=>'individuel'),'1') !!}
                </div>

                {!! Form::submit('Déposer votre demande', ['class' => 'btn btn-default']) !!}

    {!! Form::close() !!}
            </div>

    </div>

@endsection
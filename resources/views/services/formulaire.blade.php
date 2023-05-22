@extends('layout')

@section('title', 'Agents')
@section('title1','|Agents')
@section('content')
<div id="page-content" class="job-registration full-width">
    <div class="container">
        <div class="page-content">
            <div class="table-responsive">
                <div class="form-signin">
                    {!! Form::open([
                                    'route' => 'agents.store'
                                       ]) !!}
                    <div class="form-banner-button  mt50 mb20">

                        <div class="css-table">
                            <div class="registration-detail css-table-cell">
                                <div class="agent-title">
                                    <h1 class="pull-left"><i class="fa fa-file-text-o"></i>Formulaire</h1> <h6>(Merci de renseigner tous les champs)</h6>
                                </div>
                            </div> <!-- job-details -->
                        </div> <!-- end .css-table -->
                    </div> <!-- end .form-banner-button -->

                    <!-- start main form content -->

                    <div class="job-regi-single">
                        <div class="css-table">
                            <div class="css-table-cell{{ $errors->has('designation') ? ' has-error' : '' }}">
                                <label><span>*</span>Désignation du service</label>
                            </div>
                            <div class="registration-detail css-table-cell">
                                <input id="designation" type="text" class="registration-detail css-table-cell" name="designation" value="{{ old('designation') }}">
                            </div> <!-- end .registration-detail -->
                            @if ($errors->has('designation'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('designation') }}</strong>
                                    </span>
                            @endif
                        </div> <!-- end .css-table -->
                    </div> <!-- end .job-regi-single -->

                    <div class="job-regi-single">
                        <div class="css-table">
                            <div class="css-table-cell{{ $errors->has('point_depart') ? ' has-error' : '' }}">
                                <label><span>*</span>Lieu de service</label>
                            </div>
                            <div class="registration-detail css-table-cell">
                                <input id="point_depart" type="text" class="registration-detail css-table-cell" name="point_depart" value="{{ old('point_depart') }}">
                            </div> <!-- end .registration-detail -->
                            @if ($errors->has('point_depart'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('point_depart') }}</strong>
                                    </span>
                            @endif
                        </div> <!-- end .css-table -->
                    </div> <!-- end .job-regi-single -->

                    <div class="job-regi-single">
                        <div class="css-table">
                            <div class="css-table-cell{{ $errors->has('point_arrive') ? ' has-error' : '' }}">
                                <label><span>*</span>Adresse de livraison</label>
                            </div>
                            <div class="registration-detail css-table-cell">
                                <input id="point_arrive" type="text" class="registration-detail css-table-cell" name="point_arrive" value="{{ old('point_arrive') }}">
                            </div> <!-- end .registration-detail -->
                            @if ($errors->has('point_arrive'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('point_arrive') }}</strong>
                                    </span>
                            @endif
                        </div> <!-- end .css-table -->
                    </div> <!-- end .job-regi-single -->

                    <div class="job-regi-single">
                        <div class="css-table">
                            <div class="css-table-cell{{ $errors->has('date_echeance') ? ' has-error' : '' }}">
                                <label><span>*</span>La date d'échéance</label>
                            </div>
                            <div class="registration-detail css-table-cell">
                                <input id="date_echeance" type="date" class="registration-detail css-table-cell" name="date_echeance" value="{{ old('date_echeance') }}">
                            </div> <!-- end .registration-detail -->
                            @if ($errors->has('date_echeance'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('date_echeance') }}</strong>
                                    </span>
                            @endif
                        </div> <!-- end .css-table -->
                    </div> <!-- end .job-regi-single -->
                    <div class="form-group">
                        {!! Form::label('type:') !!}
                        {!! Form::select('type',array('0'=>'partagé','1'=>'individuel'),'1') !!}
                    </div>
                    {!! Form::submit('Envoyer demande', ['class' => 'btn btn-primary']) !!}

                    {!! Form::close() !!}

                        </div> <!-- end .css-table -->
                    </div> <!-- end .job-regi-single -->

        </form>
            </div>
        </div> <!-- end .page-content -->
    </div> <!-- end .container -->
</div> <!-- end #page-content -->
    @endsection


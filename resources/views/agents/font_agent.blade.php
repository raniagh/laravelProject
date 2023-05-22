@extends('layout')

@section('title', 'Agents')
@section('title1','| Liste agents')
@section('content')
    <div id="page-content">
        <div class="container">
            <div class="page-content">
                <div class="agent-title">

        <h1 style=" text-align: center; color: blue " class="pull-left">Agents</h1>
    
     <div class="row">
                <div class="pull-right">
                        {{Form::open(array('url'=>'documents/recherche'))}}
                            <div class="form-group has-feedback">
                                <input type="text" class="form-control search" name="keyword" id="keyword" placeholder="Rechercher ici">
                            </div>
                        {!! Form::close() !!}
                    </div>
                        </div>
                        </div>
            @if($agents->isEmpty())
                <p>Il n'y a aucun agent</p>
            @else
            <div class="agents-details">
                <div class="row">
                @foreach($agents as $agent)
                @php
                $id=$agent->id_personne;
                @endphp
                        <div class="col-md-3 col-sm-5 col-xs-6">
                <div class="agent-single">
                    <a href="{{ route('agents.profile',[$id,$personne->id_personne]) }}" class="pull-right"><img alt="" class="" src="/img/profile/{{$agent->agen}}"></a><br/>

                    <ul>
                        <li><span class="title">Prénom et nom:</span><span class="title-des text-capitalize">{{$agent->prenom}} {{$agent->nom}}</span></li>
                        <li><span class="title">Tél:</span><span class="title-des">{{$agent->Num_tel}}</span></li>
                        <li><span class="title">Adresse éléctronique:</span>
                            <br/><span class="title-des">{{$agent->email}}</span></li>

                    </ul><br/>

                    <div class="view-profile">
                        @if($agent->etat)
                                <button type="button" class="btn btn-info">disponible</button>
                            @else
                                <button type="button" class="btn btn-danger">non disponible</button>
                            @endif
                    </div>
                </div> <!-- end .agent-single  -->
                        </div>

            @endforeach
            @endif
        </div>
    </div>

<div class="pagination-content clearfix">
    

    <nav>
        <div class="text-center">
                                        {!! $agents->links(); !!}
                                    </div>
    </nav>
</div>
</div>
    </div>
    </div>
    @endsection

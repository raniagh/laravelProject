@extends('layout1')
@section('title','liste documents')

@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
<div class="col-md-25">
    <ul class="vertical-menu">
        <li class="active">
            <a href="#tab_2" data-toggle="tab">
                <i class="fa fa-book"></i>
               Vos besoins
            </a>
        </li>
        @foreach($documents as $Document)
            @if($Document->nom_fichier)

            <li>
                <a href="{{ route('documents.consulter', $Document->id_document) }}" ><i class="fa fa-chevron-right"></i>{{$Document->titre}}</a>
            </li>

                    <a href="/down/{{$Document->nom_fichier}}"down="$Document-> nom_fichier">
                        <button type="button"  class="btn btn-primary"> <i class="glyphicon glyphicon-download "> Télécharger </i> </button></a>


            @else

                <li>
                    <a href="{{ route('documents.consulter', $Document->id_document) }}" ><i class="fa fa-chevron-right"></i>{{$Document->titre}}</a>
                </li>

            @endif


@endforeach
    </ul>
</div>
        </section>
    </section>
    @endsection
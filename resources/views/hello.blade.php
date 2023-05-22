@extends('base')

@section('title', 'accueil')
@section('span')
 <span class="username">
                        {{$personne->prenom  }} {{ $personne->nom}}
                        </span>
                        @endsection
@section('content')


 
    <!--main content start-->
    <section  id="main-content"  style="height: 100%; width: 200%;background-image:url(/img/photos/rose.jpg); background-repeat:no-repeat;background-attachment:nofixed;position: relative;" >
    <section  class="wrapper" >
        <h1 style=" font-family: Open Sans,sans-serif;  height: $height-mask;
  z-index: 10; "> Bienvenue   {{ $personne->prenom }} {{ $personne->nom }}</h1>
   <svg viewBox="0 0 800 600">
 
</svg>
            
    </section>
    </section>

@endsection



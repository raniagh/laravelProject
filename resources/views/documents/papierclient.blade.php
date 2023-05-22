
@extends('layout')

@section('title', 'Papiers')
@section('title1','|Papiers')
@section('content')

     
      <!-- Page Content -->

      <div id="page-content" class="page-content pt60">
        <div class="container">
          <div class="row">
            <div class="col-sm-4 page-sidebar">
              <aside>
                
                  <div class="widget sidebar-widget jobs-search-widget">
                   
                    <div class="widget-content">
                    

                     

                     
                  <div class="widget sidebar-widget jobs-filter-widget">
                    
                    <div class="widget-content">
                      

                     
                       

                       
                     

                     

                      

                     
                    </div>
                  </div>
                </div>
              </aside>
            </div> <!-- end .page-sidebar -->

            <div class="col-sm-9 page-content">
            



              <div class="view-sort clearfix mb20">
                <div class="row">

                  <div class="col-sm-5 main-title">
                    
                  </div>

                  <h1 style=" text-align: center; color: blue " class="pull-left">Papiers</h1>
    
     <div class="row">
                <div class="pull-right">
                        {{Form::open(array('url'=>'documents/recherche'))}}
                            <div class="form-group has-feedback">
                                <input type="text" class="form-control search" name="keyword" id="keyword" placeholder="Rechercher ici">
                            </div>
                        {!! Form::close() !!}
                    </div>
                        </div>
                </div> <!-- end .row -->
             
@foreach($documents as $Document)
 <audio>
              <source src="img/photos/{{$Document->nom_video}}" type="audio/mp3" />
            </audio>
              <div class="candidate-description client-description applicants-content">

                <div class="language-print client-des clearfix">
                  <div class="aplicants-pic pull-left">
                    <img alt="" class ="" src="/img/documents/{{$Document->avatar}}">
                  </div>
                  <!-- end .aplicants-pic -->
                  <div class="clearfix">
                    <div class="pull-left">
                       <h5> <a href="{{ route('documents.consulterclient',[$personne->id_personne,$Document->id_document]) }}" >{{$Document->titre}}</a>
                        
            </li></h5>
            <audio>
              <source src="img/photos/{{$Document->nom_video}}" type="audio/mp3" />
            </audio>
                      <a href="#">{{$Document->date_publication}}</a>
                    </div>


                  </div>

                 
                </div> <!-- end .language-print -->

                
 @if($Document->nom_fichier)
                <div class="row">
                <div class="pull-right">

                 <a href="/down/{{$Document->nom_fichier}}"down="$Document-> nom_fichier">
                        <button type="button"  class="btn btn-primary"> <i class="glyphicon glyphicon-download "> Télécharger </i> </button></a>
                </div> <!-- end .row -->
                </div>
@endif
                 
                

              </div> <!-- end .candidate-description -->

             
@endforeach
              </div> <!-- end .candidate-description -->
 <div class="text-center">
                            {!! $documents->links(); !!}
                        </div>

            </div> <!-- end .page-content -->
          </div>
        </div> <!-- end .container -->
      </div> <!-- end #page-content -->

   @endsection
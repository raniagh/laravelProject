

@extends('layout')

@section('title', 'Papiers')
@section('title1','|Papiers')
@section('content')
    <div id="page-content">
        <div class="container">
            <div class="page-content">
    <div id="page-content" class="candidate-profile">
        <div class="container">
            <div class="page-content mt50">

                <div class="row">
                    <div class="col-md-4">
                        <div class="motijob-sidebar">
                           
                            <div class="job-general-info">
                               

                               

                                <!-- social link -->



                            </div> <!-- end .candidate-general-info -->
                        </div>
                    </div> <!-- end .3col grid layout -->

                    <div class="col-md-8">

                            
                                <img alt="" class="" src="/img/photos/{{$Document->avatar}}">

                                <a   href="#" class="job-name">{{$Document->titre}}</a>
                            </div> <!-- end .agent-profile-picture -->

                        <div class="candidate-description">

                            <div class="candidate-details">
                                <div class="candidate-title">
                                    <h1 style="color: blue;">Détails {{$Document->titre}}</h5>
                                </div>

        @foreach($descriptions as $Description)
                          <div class="clearfix">

                    <div class="pull-left">
                      <h5>{{ $Description->titre }} 

               
                    </h5>
                     
                    </div>


                  </div>
          
                </div> <!-- end .language-print -->

                <div class="candidate-details">
 
                  <div class="toggle-content-client">
                
                

                   


                   

                    <div class="candidate-skills">

                     {{ $Description->contenu }}
 </div> <!-- end .candidate-skills -->

                  
                  </div>
                  <!-- end .toggle-content-client -->


                  <div class="toggle-details text-right">
                    <a class="btn btn-toggle" href="#">Info</a>

                  </div>
                  @endforeach
                  <!-- end .toggle-details -->
                </div> <!-- end .candidate-details -->

              </div> <!-- end .candidate-description -->

                     

 <br/>

<div class="candidate-title">
                                    <h5>Commentaires</h5>
                                </div>
    @foreach($commentaires as $commentaire)
              <div class="candidate-description client-description applicants-content">

                <div class="language-print client-des clearfix">
              
                  <div class="aplicants-pic pull-left">
                  {{$personne->prenom }}  {{$personne->nom}}
                    <img alt="" class ="" src="/img/photos/{{$personne->agen}}">

                  </div>
                  <!-- end .aplicants-pic -->
                  <div class="clearfix">
                    <div class="pull-left">
                       <h6> {{$commentaire->contenu}}
            </li></h5>
                      
                    </div>


                  </div>

                 
                </div> <!-- end .language-print -->
</div> <!-- end .candidate-description -->
@endforeach
              
                                  {!! Form::open([
                   'route' => ['commentaires.store',$personne->id_personne]
                   ]) !!}

                {{ Form::hidden('id_document',  $Document->id_document) }}
                 
    <div class="form-group">
      {!! Form::text('contenu', null, ['class' => 'form-control']) !!}
    </div>

  <button class="btn btn-new" type="submit">Commenter</button>

    {!! Form::close() !!}




      

            </div> <!-- end .page-content -->
        </div> <!-- end .container -->
    </div> <!-- end #page-content -->



</div>
        </div>
    </div>
    @endsection
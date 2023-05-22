@extends('layout')

@section('title', 'Papiers')
@section('title1','|Papiers')
@section('content')

         
     

      
      <!-- Page Content -->
<div class="col-sm-8 page-content">
              <div id="jobs-page-map" class="white-container"></div>



              <div class="view-sort clearfix mb20">
                <div class="row">

                  <div class="col-sm-5 main-title">
                    <h3 class="client-registration-title">Papiers</h3>
                  </div>

                  <div class="col-sm-7">
                    <div class="job-sort-by ml20 pull-right" id ="clients-sort-by">

                      <select>
                        <option value="#">Sort by</option>
                        <option value="#">Name</option>
                        <option value="#">Type</option>
                        <option value="#">Date</option>
                      </select>

                    </div> <!-- end .job-sort-by -->

                  </div> <!-- end .end col-sm-5 grid-layout  -->
                </div> <!-- end .row -->
              </div> <!-- end .view-sort div -->
              @foreach($documents as $Document)
              <div class="candidate-description client-description applicants-content">
                <img alt="" class ="" src="/img/documents/{{$document->document}}">
                <div class="language-print client-des clearfix">
                  <div class="aplicants-pic pull-left">
                   
                  </div>
                  <!-- end .aplicants-pic -->
                  <div class="clearfix">
                    <div class="pull-left">
                      <h5> <a href="{{ route('documents.consulter', $Document->id_document) }}" ><i class="fa fa-chevron-right"></i>{{$Document->titre}}</a>
            </li></h5>
                      <h6>{{$Document->date_publication}}</h6>
                    </div>


                  </div>

                  
                @if($Document->nom_fichier)
                <div class="candidate-details">

                 <a href="/down/{{$Document->nom_fichier}}"down="$Document-> nom_fichier">
                        <button type="button"  class="btn btn-primary"> <i class="glyphicon glyphicon-download "> Télécharger </i> </button></a>
                </div> <!-- end .row -->
@endif
@endforeach
                     

              <div class="pagination-content clearfix">
                <p>Displaying 10 out of 50 items</p>

                <nav>
                  <ul class="list-inline">
                    <li><a class="btn btn-default first" href="#">first</a></li>
                    <li><a class="btn btn-default previous" href="#">Previous</a></li>
                    <li class="active"><a class="number" href="#">1</a></li>
                    <li><a class="number" href="#">2</a></li>
                    <li><a class="number" href="#">3</a></li>
                    <li><a class="number" href="#">4</a></li>
                    <li><a class="btn btn-default next" href="#">Next</a></li>
                    <li><a class="btn btn-default last" href="#">Last</a></li>
                  </ul>
                </nav>
              </div>






            </div> <!-- end .page-content -->
          </div>
        </div> <!-- end .container -->
      </div> <!-- end #page-content -->

      <!-- Footer Start -->
      <footer id="footer">
        <div class="copyright">
          <div class="container">
            <p>2016 &copy; All rights reserved. Powered by <a href="#">UOUapps</a></p>
            <ul class="list-inline">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            </ul>
          </div>
        </div>
      </footer>
      <!-- end #footer -->

    </div>
    <!-- end #main-wrapper -->
	@endsection
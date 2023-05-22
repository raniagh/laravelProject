@extends('base')
@section('title', 'géocalisation')
@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Geocoding
                            <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                                <a href="javascript:;" class="fa fa-remove"></a>
                            </span>
                        </header>
                        <div class="panel-body">
                            <form class="form-inline" role="form">
                                <div class="form-group">
                                    <input type="text" id="gmap_geocoding_address" class=" form-control" placeholder="Address..." />
                                </div>
                                <input type="button" id="gmap_geocoding_btn" class="btn" value="Search" />
                            </form>
                            <br>
                            <div id="gmap_geocoding" class="gmaps"></div>
                        </div>
                    </section>
                </div>
            </div>
            <!-- page end-->
        </section>
    </section>
    <!--main content end-->
@endsection





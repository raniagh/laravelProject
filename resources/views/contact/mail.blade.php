@extends('base')
@section('title', 'mail')
@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <section class="panel">
                <div class="row">
<br>
<br>

<div class="beside mail -left-aside -collapse-with-sidebar -collapsible">
<div class="row">
<div class="form -dark">
<div class="col -xs-12"><h3> <i class="fa fa-pencil"></i> ghzaielrania@gmail.com</h3>
<div class="container-fluid">
<div class="form-group _margin-top-1x">

<form action="{{ url('contact')}}" method="POST">

<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="form-group _margin-top-1x">
<label for="exampleInputEmail1">Email adress</label>
<div class="container-fluid">
<div class="row">
<div class="col -xs-12">

<input class="form-control" name="email" type="email" placeholder="email ...">
@if(count($errors) >0 )
<label style="color: red"> {{ $errors->first('email') }}</label>
@endif
</div>
</div>
</div>
</div>

<div class="form-group">
<label for="exampleInputPassword1">Subject</label>
<div class="container-fluid"><div class="row">
<div class="col -xs-12">
<input type="text" class="form-control" name="subject" placeholder="subject ...." >
@if(count($errors) >0 )
<label style="color: red"> {{ $errors->first('subject') }}</label>
@endif
</div>
</div>
</div>
</div>


<div class="form-group">
<label for="exampleInputPassword1">Message</label>
<div class="container-fluid">
<div class="row">
<div class="col -xs-12">
<textarea  class="form-control" name="message" rows="3"  >
</textarea>
@if(count($errors) >0 )
<label style="color: red"> {{ $errors->first('message') }}</label>
@endif
</div>
</div>
</div>
</div>




<button type="submit" class="btn -dark -block">Send E-mail</button>
</form>


</div>
</div>
</div>
</div>
</div>


@endsection




 
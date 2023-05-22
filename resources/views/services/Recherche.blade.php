@extends('layout1')
@section('title', 'demandes')
@section('content')

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="col-sm-offset-3 col-sm-6">
              @if(Session()->has('message'))
                            <div class="alert alert-success fade in" id="y">
                                <button data-dismiss="alert" class="close close-sm" type="button">
                                    <i class="fa fa-times"></i>
                                </button>{{Session::get('message') }}</div>
                        @endif
                        
            </div>
            <section class="panel">
                @if(count($services)>0)
                <header class="panel-heading">
                    <h1>la liste des demandes en attentes</h1>
                </header>
                <table class="table table-hover p-table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Client</th>
                        <th>Agent</th>
                        <th>Désignation du service</th>
                        <th>Lieu de service</th>
                        <th>Adresse de livraison</th>
                        <th>Date d'échéance</th>
                        <th>état du service</th>
                        <th>type</th>
                        <th >Action </th>
                        <th></th>
</tr>
</thead>
<tbody>
@if($services->isEmpty())
   <tr>
       <td colspan="11" align="center"> il n'y a aucune demande</td>
   </tr>
@else
   @foreach($services as $service)
       <tr>
           <td>{{$service->id_service}}</td>
           <td>{{$service->id_personne}}</td>
           <td>{{$service->id_agent}}</td>
           <td>{{$service->designation}}</td>
           <td>{{$service->point_depart}}</td>
           <td>{{$service->point_arrive}}</td>
           <td>{{$service->date_echeance}}</td>
           <td>@if(($service->etat_service)==("en cours"))
                   <boutton class="btn btn-warning btn-xs">en cours</boutton>
               @elseif (($service->etat_service)==("terminé"))
                   <boutton class="btn btn-primary btn-xs"><i class="fa fa-check"></i>terminé</boutton>
               @elseif(($service->etat_service)==("en attente"))
                   <boutton class="btn btn-danger btn-xs">en attente</boutton>
               @endif
           </td>
           <td> @if($service->type)
                   <p>individuel</p>
               @else
                   <p> partagé</p>
               @endif
           </td>
           @if(($service->etat_service)==("en cours")or($service->etat_service)==("terminé"))
               <td></td>
           @else
           <td >
               <a href="{{ route('services.accepterdemande',$service->id_service ) }}" class="btn btn-primary btn-xs"><i class="fa fa-check" rel="tooltip" title="Accepter la demande"></i>Accepter</a></td>
               <td>
               <a href="{{ route('services.destroy', $service->id_service) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" rel="tooltip" title="Refuser la demande"></i> Refuser </a>
           </td>
           @endif
           @endforeach
           @endif

       </tr>
</tbody>
</table>
<div class="text-center">
{!! $services->links(); !!}
</div>
@else
<div class="panel-body">
   <p> service introuvable.</p>
</div>
@endif

</section>
<!-- page end-->
</section>
</section>
<!--main content end-->


@endsection
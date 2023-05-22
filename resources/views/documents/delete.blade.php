

<a href="javascript:;" class="btn btn-danger delete-btn{{$id_document}}"></a>

<div class="modal fade delete-modal{{$id_document}}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                <p>Voulez vous vraiment supprimer&hellip;</p>
            </div>
            <div class="modal-footer">
                <form action="{{url()->current().'/'.$id_document}}" id="delete-form{{$id_document}}" method="post" class="hidden">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                </form>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <input type="submit" form="delete-form{{$id_document}}" id="submit{{$id_document}}" class="btn btn-danger" value="Supprimer">
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script>
    $(document).on('click','.delete-btn{{$id_document}}',function event () {
event.preventDefault();
$('.delete-modal{{$id_document}}').modal;
    })
</script>
@extends('layouts.admin.layout')

@section('meta_title')
    Personal
@endsection

@section('page_title')
    Personal
@endsection

@section('meta_extra')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop

@section('page_action')
    
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Personal en sistema</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">

                    <table class="table table-striped table-dark table-hover dataTables-users" >
                        <thead class="thead-dark">
                        <tr>
                            <th>Descipcion</th>
                            <th>Especificación</th>
                            <th>RIC</th>
                            <th>Proyecto</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        
                            <tr class="gradeA" >
                                <td>
                                pelon
                                </td>
                                <td>
                                pelon
                                </td>
                                <td>
                                pelon
                                </td>
                                <td>
                                    pelon
                                </td>
                                <td>
                                    <a href="#" class="btn btn-outline-light">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <div class="modal inmodal fade" id="delete-modal" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">¡Atención!</h4>
                </div>
                <div class="modal-body">
                    <p>
                        <strong>
                            ¿Estás seguro de borrar el cliente?
                        </strong>
                        <br><br>
                        Se borrarán también cualquier información y registros de esta cuenta.
                        <br><br>
                        Esta acción es irreversible.
                        <br><br>
                        ¿Deseas continuar?
                        </strong>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-danger" id="delete-action-btn" data-tango="0">Borrar</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {!! HTML::script('static/admin/js/plugins/dataTables/jquery.dataTables.js') !!}
    {!! HTML::script('static/admin/js/plugins/dataTables/dataTables.bootstrap.js') !!}
    {!! HTML::script('static/admin/js/plugins/dataTables/dataTables.responsive.js') !!}
    {!! HTML::script('static/admin/js/plugins/dataTables/dataTables.tableTools.min.js') !!}
<script type="text/javascript">
    $(function(){
        $('.dataTables-users').dataTable({
            responsive: true,
        });

        $(".delete").click(function(event) {
            event.preventDefault();
            var id = $(this).data('id');
            $("#delete-action-btn").attr('data-tango',id);
            $("#delete-modal").modal();
        });

        $("#delete-action-btn").click(function(event) {
            event.preventDefault();
            var id = $(this).attr('data-tango');
            $.ajax({
                url: '{{url('cotizacion/cliente/delet')}}/'+id,
                type: 'DELETE',
                dataType: 'json',
            })
                .done(function(data) {
                    $("#item-"+id).remove();
                    $("#delete-modal").modal('hide');
                    toastr.success('Se ha eliminado la información correctamente');
                })
                .fail(function() {
                    console.log(data);
                });


        });

    });
</script>
@endpush

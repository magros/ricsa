@extends('layouts.admin.layout')

@section('meta_title')
    Cotizaciones
@endsection

@section('page_title')
    Cotizaciones
@endsection

@section('meta_extra')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop

@section('page_action')
    <a href="{{route('cotizacion.create')}}" class="btn btn-primary">+ Crear cotizacion</a>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Cotizaciones en sistema</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">

                    <table class="table table-striped table-hover table-dark" >
                        <thead class="thead-dark">
                        <tr>
                            <th>Nombre</th>
                            <th>Cliente</th>
                            <th>Complejidad</th>
                            <th>Estatus</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($rics as $ric)
                            <tr class="gradeA" id="item-{{$ric->id}}">
                                <td>
                                    {{$ric->name_proyect}}
                                </td>
                                <td>
                                    {{$ric->customer->company}}
                                </td>
                                <td>
                                   {{ $ric->complexity_name }}
                                </td>
                                <td>
                                    {{ $ric->status_name }}
                                </td>
                                <td>
                                    {{-- <a href="{{route('cotizacion.client.edit',[$ric->id])}}" class="btn btn-outline-light">
                                        <i class="fa fa-pencil-square-o"></i>
                                    </a> --}}
                                    <a href="#" class="btn btn-outline-light delete" data-id="{{$ric->id}}">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    @if($ric->complexity > 1 && $ric->status ==1)
                                        <a href="#" class="btn btn-outline-light update" data-id="{{$ric->id}}">
                                            PMO
                                        </a>
                                    @endif
                                    @if ($ric->complexity == 1 || $ric->status == 2)
                                        <a href="{{route('cotizacion.quoting',[$ric->id])}}" class="btn btn-outline-light" data-id="{{$ric->id}}">
                                            <i class="glyphicon glyphicon-plus"></i>
                                        </a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="text-center">
                        {{ $rics->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Modal para autorizar --}}
    <div class="modal inmodal fade" id="update-modal" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">¡Atención!</h4>
                </div>
                <div class="modal-body">
                    <p>
                        <strong>
                        ¿Estás seguro de aprobar la propuesta?
                        </strong>
                        <br><br>
                        La propuesta es de complejidad elevada
                        <br><br>
                        Esta acción es irreversible.
                        <br><br>
                        ¿Deseas continuar?
                        </strong>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-warning" id="update-action-btn" data-tango="0">Aceptar</button>
                </div>
            </div>
        </div>
    </div>
    {{-- Modal para eliminar --}}
    <div class="modal inmodal fade" id="delete-modal" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">¡Atención!</h4>
                </div>
                <div class="modal-body">
                    <p>
                        <strong>
                        ¿Estás seguro de borrar la propuesta?
                        </strong>
                        <br><br>
                        Se borrarán también cualquier información relacionada.
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
<script type="text/javascript">
    $(function(){
        /*
        Modal de autorizar proyecto PMO
        */
        $(".update").click(function(event) {
            event.preventDefault();
            var id = $(this).data('id');
            $("#update-action-btn").attr('data-tango',id);
            $("#update-modal").modal();
        });

        $("#update-action-btn").click(function(event) {
            event.preventDefault();
            var id = $(this).attr('data-tango');
            $.ajax({
                url: '{{url('cotizacion/autorizar')}}/'+id,
                type: 'POST',
                dataType: 'json',
            }).done(function(data) {
                $("#update-modal").modal('hide');
                toastr.success('Se ha autorizado la propuesta correctamente');
                location.reload();
            }).fail(function() {
                console.log(data);
            });
        });

        /*
        Modal de eliminar proyecto
        */
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
                url: '{{url('cotizacion/propuesta/delet')}}/'+id,
                type: 'DELETE',
                dataType: 'json',
            })
            .done(function(data) {
                $("#item-"+id).remove();
                $("#delete-modal").modal('hide');
                toastr.success('Se ha eliminado la información correctamente');
                location.reload();
            })
            .fail(function() {
                console.log(data);
            });

        });

    });
</script>
@endpush

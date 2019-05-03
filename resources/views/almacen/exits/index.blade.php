@extends('layouts.admin.layout')



@section('meta_title')
Salida de material
@endsection





@section('page_title')
Salida de material
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
                <h5>Materiales en salida</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <div class="form-group">
                    <label>Fecha: 02-05-2019</label>
                    {!! Form::select('ric_id',[null=>'---RIC---']+$rics->toArray(),old('ric_id'),[
                    'class'=>'form-control','id'=>'ric_id',
                    'data-required-error' => 'Este campo es obligatorio',
                    ]) !!}
                    <label>Folio: 1110</label>
                </div>
                <table id="material-exit" class="table table-striped table-dark table-hover dataTables-users">
                    <thead class="thead-dark">
                        <tr>
                            <th>Descipción</th>
                            <th>Unidad</th>
                            <th>Cantidad</th>
                            <th>Reporte</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($inventories as $inventory)
                        <tr class="gradeA" id="item-{{$inventory->id}}">
                            <td>
                                {{$inventory->material->description}}
                            </td>
                            <td>
                                {{$inventory->material->specification}}
                            </td>
                            <td>
                                {{$inventory->quantity}}
                            </td>
                            <td>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            <div class="ibox-content">
                <div class="row">
                    {!! Form::open(['id'=>'user-form', 'files'=>true,'data-toggle' => 'validator',])!!}
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="material_id">Descripcion:</label>
                            <div class="clearfix"></div>
                            {!!
                            Form::select('material_id',[null=>'---Selecionar---']+$materials->toArray(),old('material_id'),[
                            'class'=>'form-control','id'=>'material_id',
                            'data-required-error' => 'Este campo es obligatorio',
                            ]) !!}
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="specification">Especificación</label>
                            {!! Form::text('specification',old('specification'),[
                            'class'=>'form-control','placeholder'=>'specification',
                            'required'=>'', 'autocomplete'=>'off', 'id' => 'specification',
                            'data-required-error' => 'Este campo es obligatorio','maxlength' => '100','disabled'
                            ]) !!}
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="quantity">Cantidad:</label>
                            <div class="clearfix"></div>
                            {!! Form::text('quantity',old('quantity'),[
                            'class'=>'form-control','placeholder'=>'Cantidad',
                            'autocomplete'=>'off', 'id' => 'quantity',
                            'data-required-error' => 'Este campo es obligatorio',
                            'data-error' => 'Introduce una cantidad',
                            'maxlength' => '100',
                            ]) !!}
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="contract_id">Esp Pulg:</label>
                            <div class="clearfix"></div>
                            {!! Form::text('thickness',old('thickness'),[
                            'class'=>'form-control','placeholder'=>'thickness',
                            'required'=>'', 'autocomplete'=>'off', 'id' => 'thickness',
                            'data-required-error' => 'Este campo es obligatorio',
                            'maxlength' => '100','disabled'
                            ]) !!}
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="contract_id">Di mm:</label>
                            <div class="clearfix"></div>
                            {!! Form::text('dimension',old('dimension'),[
                            'class'=>'form-control','placeholder'=>'dimension',
                            'required'=>'', 'autocomplete'=>'off', 'id' => 'dimension',
                            'data-required-error' => 'Este campo es obligatorio', 'maxlength' => '15','disabled'
                            ]) !!}
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="contract_id">Long mm:</label>
                            <div class="clearfix"></div>
                            {!! Form::text('length',old('length'),[
                            'class'=>'form-control','placeholder'=>'length',
                            'required'=>'', 'autocomplete'=>'off', 'id' => 'length',
                            'data-required-error' => 'Este campo es obligatorio', 'maxlength' => '15','disabled'
                            ]) !!}
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="contract_id">Peso neto:</label>
                            <div class="clearfix"></div>
                            {!! Form::text('net_weight',old('net_weight'),[
                            'class'=>'form-control','placeholder'=>'net_weight',
                            'required'=>'', 'autocomplete'=>'off', 'id' => 'net_weight',
                            'data-required-error' => 'Este campo es obligatorio', 'maxlength' => '15','disabled'
                            ]) !!}
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="contract_id">Peso bruto:</label>
                            <div class="clearfix"></div>
                            {!! Form::text('gross_weight',old('gross_weight'),[
                            'class'=>'form-control','placeholder'=>'gross_weight',
                            'required'=>'', 'autocomplete'=>'off', 'id' => 'gross_weight',
                            'data-required-error' => 'Este campo es obligatorio', 'maxlength' => '15','disabled'
                            ]) !!}
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="contract_id">Precio unitario:</label>
                            <div class="clearfix"></div>
                            {!! Form::text('price',old('price'),[
                            'class'=>'form-control','placeholder'=>'price',
                            'required'=>'', 'autocomplete'=>'off', 'id' => 'price',
                            'data-required-error' => 'Este campo es obligatorio', 'maxlength' => '15','disabled'
                            ]) !!}
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>


                    <div>
                        <button id="adicionar" class="btn btn-lg btn-primary pull-right m-t-n-xs"
                            type="button"><strong>Agregar</strong></button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

    <div class="modal inmodal fade" id="delete-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                            aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
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

            // Agregar material a la tabla
            $("#material_id").change(function(){
            var idM =$("#material_id").val();
            if(idM){
                $.ajax({
                url: '{{url('almacen/salida')}}/'+idM,
                type: 'get',
                dataType: 'json',
            })
                .done(function(data) {

                    $("#specification").val(data.specification)
                    $("#thickness").val(data.thickness)
                    $("#dimension").val(data.dimension)
                    $("#length").val(data.length)
                    $("#net_weight").val(data.net_weight)
                    $("#gross_weight").val(data.gross_weight)
                    $("#price").val(data.price)
                })
                .fail(function() {
                    console.log(data);
                });
            }else{
                $("#specification").val("")
                $("#thickness").val("")
                $("#dimension").val("")
                $("#length").val("")
                $("#net_weight").val("")
                $("#gross_weight").val("")
                $("#price").val("")
            }
        });
        $('#adicionar').click(function() {
            if($("#material_id").val() && $("#quantity").val()){
                $("#contenido").empty();
                var formData = new FormData();
                formData.append('material_id', $("#material_id").val());
                formData.append('cantidad', $("#quantity").val());
                formData.append('id_ric','{{$ric}}');
                formData.append('peso',$('#gross_weight').val());
                formData.append('price',$('#price').val());
                formData.append('name','cuerpo');
                $.ajax({
                    url : '{{route('cotizacion.material.cotizador')}}',
                    type : 'POST',
                    data : formData,
                    datatype:'json',
                    processData: false,  // tell jQuery not to process the data
                    contentType: false,  // tell jQuery not to set contentType
                }).done(function(data){
                     location.reload();
                }).fail(function(data){
                    var message = data.responseJSON.errors;
                    console.log(message);
                });
            }else{
                $(".alert").removeClass("in").show();
	            $(".alert").delay(200).addClass("in").fadeOut(3000);
            }

        });
        });


    </script>


@endpush

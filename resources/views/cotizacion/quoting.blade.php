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
                <h5>Cuerpo</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <div class="row">

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="contract_id">Descripcion:</label>
                            <div class="clearfix"></div>
                            {!! Form::select('material_id',[null=>'---Seleciona un cliente---']+$materials->toArray(),old('material_id'),[
                                'class'=>'form-control','id'=>'material_id',
                                'data-required-error' => 'Este campo es obligatorio',
                            ]) !!}
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="contract_id">Especificacion Material:</label>
                            <div class="clearfix"></div>
                            {!! Form::text('specification',old('specification'),[
                                'class'=>'form-control','placeholder'=>'Espesificacion',
                                'autocomplete'=>'off', 'id' => 'specification',
                                'data-required-error' => 'Este campo es obligatorio',
                                'data-error' => 'Introduce un ric',
                                'maxlength' => '100', 'disabled'
                            ]) !!}
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="contract_id">cantidad:</label>
                            <div class="clearfix"></div>
                            {!! Form::text('ric',old('ric'),[
                                'class'=>'form-control','placeholder'=>'Propuesta',
                                'autocomplete'=>'off', 'id' => 'ric',
                                'data-required-error' => 'Este campo es obligatorio',
                                'data-error' => 'Introduce un ric',
                                'maxlength' => '100', 'disabled'
                            ]) !!}
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="contract_id">Esp Pulg:</label>
                            <div class="clearfix"></div>
                            {!! Form::text('ric',old('ric'),[
                                'class'=>'form-control','placeholder'=>'Propuesta',
                                'autocomplete'=>'off', 'id' => 'ric',
                                'data-required-error' => 'Este campo es obligatorio',
                                'data-error' => 'Introduce un ric',
                                'maxlength' => '100', 'disabled'
                            ]) !!}
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="contract_id">Di mm:</label>
                            <div class="clearfix"></div>
                            {!! Form::text('ric',old('ric'),[
                                'class'=>'form-control','placeholder'=>'Propuesta',
                                'autocomplete'=>'off', 'id' => 'ric',
                                'data-required-error' => 'Este campo es obligatorio',
                                'data-error' => 'Introduce un ric',
                                'maxlength' => '100', 'disabled'
                            ]) !!}
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="contract_id">Long mm:</label>
                            <div class="clearfix"></div>
                            {!! Form::text('ric',old('ric'),[
                                'class'=>'form-control','placeholder'=>'Propuesta',
                                'autocomplete'=>'off', 'id' => 'ric',
                                'data-required-error' => 'Este campo es obligatorio',
                                'data-error' => 'Introduce un ric',
                                'maxlength' => '100', 'disabled'
                            ]) !!}
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="contract_id">Peso neto:</label>
                            <div class="clearfix"></div>
                            {!! Form::text('ric',old('ric'),[
                                'class'=>'form-control','placeholder'=>'Propuesta',
                                'autocomplete'=>'off', 'id' => 'ric',
                                'data-required-error' => 'Este campo es obligatorio',
                                'data-error' => 'Introduce un ric',
                                'maxlength' => '100', 'disabled'
                            ]) !!}
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="contract_id">Peso bruto:</label>
                            <div class="clearfix"></div>
                            {!! Form::text('ric',old('ric'),[
                                'class'=>'form-control','placeholder'=>'Propuesta',
                                'autocomplete'=>'off', 'id' => 'ric',
                                'data-required-error' => 'Este campo es obligatorio',
                                'data-error' => 'Introduce un ric',
                                'maxlength' => '100', 'disabled'
                            ]) !!}
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="contract_id">Precio unitario:</label>
                            <div class="clearfix"></div>
                            {!! Form::text('ric',old('ric'),[
                                'class'=>'form-control','placeholder'=>'Propuesta',
                                'autocomplete'=>'off', 'id' => 'ric',
                                'data-required-error' => 'Este campo es obligatorio',
                                'data-error' => 'Introduce un ric',
                                'maxlength' => '100', 'disabled'
                            ]) !!}
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>


                    <div>
                        <button id="adicionar" class="btn btn-lg btn-primary pull-right m-t-n-xs" type="button"><strong>Guardar</strong></button>

                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <table  id="mytable" class="table table-bordered table-hover ">
                            <tr>
                                <th>Descripcion</th>
                                <th>Especificacion Material</th>
                                <th>cantidad</th>
                                <th>Di mm</th>
                                <th>Long mm:</th>
                                <th>Peso neto</th>
                                <th>Peso bruto</th>
                                <th>Precio unitario</th>
                                <th>Total</th>
                                <th>Acciones</th>

                            </tr>
                        </table>

                    </div>
                </div>

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
        $("#material_id").change(function(){
            var idM =$("#material_id").val();
            $.ajax({
                url: '{{url('cotizacion/material')}}/'+idM,
                type: 'get',
                dataType: 'json',
            })
                .done(function(data) {

                    $("#specification").val(data.specification)
                })
                .fail(function() {
                    console.log(data);
                });
        });
        $('#adicionar').click(function() {
        var contract_id = $("#contract_id").text();
        alert(contract_id);
        // var apellido = document.getElementById("apellido").value;
        // var cedula = document.getElementById("cedula").value;
        // var i = 1; //contador para asignar id al boton que borrara la fila
        // var fila = '<tr id="row' + i + '"><td>' + nombre + '</td><td>' + apellido + '</td><td>' + cedula + '</td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">Quitar</button></td></tr>'; //esto seria lo que contendria la fila

        // i++;

        // $('#mytable tr:first').after(fila);
        //     $("#adicionados").text(""); //esta instruccion limpia el div adicioandos para que no se vayan acumulando
        //     var nFilas = $("#mytable tr").length;
        //     $("#adicionados").append(nFilas - 1);
        //     //le resto 1 para no contar la fila del header
        //     document.getElementById("apellido").value ="";
        //     document.getElementById("cedula").value = "";
        //     document.getElementById("nombre").value = "";
        //     document.getElementById("nombre").focus();
        });
    });
</script>
@endpush

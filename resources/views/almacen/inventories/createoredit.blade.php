@extends('layouts.admin.layout')
@section('meta_title')
    @if(!isset($inventories))
        Agregar material
    @else
        Editando {{$inventories->material->description}}
    @endif
@endsection

@section('page_title')
    @if(!isset($inventories))
        Agregar material
    @else
        Editando {{$inventories->material->description}}
    @endif
@endsection
@section('page_action')
<a href="{{route('almacen.inventory')}}" class="btn btn-white">&lt; Regresar a materiales</a>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Información</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-sm-12">
                            @if(!isset($inventories))
                                {!! Form::open(['route'=>'almacen.inventory.store','id'=>'material-form', 'files'=>true,'data-toggle' => 'validator',]) !!}
                            @else
                                {!! Form::model($inventories, [
                                    'method' => 'patch',
                                    'route' => ['almacen.inventory.update', $inventories->id],
                                    'id'=>'material-form',
                                    'files' => true,
                                    'data-toggle' => 'validator',
                                ]) !!}
                            @endif
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="description">Material:</label>
                                    <div class="clearfix"></div>
                                    {!! Form::select('description',[null=>'---Selecionar---']+$materials->toArray(),old('description'),[
                                        'class'=>'form-control','id'=>'description',
                                        'data-required-error' => 'Este campo es obligatorio',
                                    ]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label for="ric_id">RIC al que pertenece:</label>
                                    <div class="clearfix"></div>
                                    {!! Form::select('ric_id',[null=>'---Selecionar---']+$rics->toArray(),old('ric_id'),[
                                        'class'=>'form-control','id'=>'ric_id',
                                        'data-required-error' => 'Este campo es obligatorio',
                                    ]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label for="quantity">Cantidad</label>
                                    {!! Form::text('quantity',old('quantity'),[
                            			'class'=>'form-control','placeholder'=>'quantity',
                            			'required'=>'', 'autocomplete'=>'off', 'id' => 'quantity',
                            			'data-required-error' => 'Este campo es obligatorio','maxlength' => '100'
                            		]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label for="specification">Especificación</label>
                                    {!! Form::text('material[specification]',old('material[specification]'),[
                            			'class'=>'form-control','placeholder'=>'specification',
                            			'required'=>'', 'autocomplete'=>'off', 'id' => 'material[specification]',
                            			'data-required-error' => 'Este campo es obligatorio','maxlength' => '100'
                            		]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label for="thickness">Espesor</label>
                                    {!! Form::text('material[thickness]',old('material[thickness]'),[
                            			'class'=>'form-control','placeholder'=>'thickness',
                            			'required'=>'', 'autocomplete'=>'off', 'id' => 'material[thickness]',
                            			'data-required-error' => 'Este campo es obligatorio',
                            			'data-error' => 'Introduce una dirección de correo válida',
                                        'maxlength' => '100'
                            		]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label for="dimension">Dimensión</label>
                                    {!! Form::text('material[dimension]',old('material[dimension]'),[
                            			'class'=>'form-control','placeholder'=>'dimension',
                            			'required'=>'', 'autocomplete'=>'off', 'id' => 'material[dimension]',
                            			'data-required-error' => 'Este campo es obligatorio', 'maxlength' => '15'
                            		]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="length">Longitud</label>
                                    {!! Form::text('material[length]',old('material[length]'),[
                                        'class'=>'form-control','placeholder'=>'length',
                                        'required'=>'', 'autocomplete'=>'off', 'id' => 'material[length]',
                                        'data-required-error' => 'Este campo es obligatorio', 'maxlength' => '15'
                                    ]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label for="net_weight">Peso neto</label>
                                    {!! Form::text('material[net_weight]',old('material[net_weight]'),[
                                        'class'=>'form-control','placeholder'=>'net_weight',
                                        'required'=>'', 'autocomplete'=>'off', 'id' => 'material[net_weight]',
                                        'data-required-error' => 'Este campo es obligatorio', 'maxlength' => '15'
                                    ]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label for="gross_weight">Peso bruto</label>
                                    {!! Form::text('material[gross_weight]',old('material[gross_weight]'),[
                            			'class'=>'form-control','placeholder'=>'gross_weight',
                            			'required'=>'', 'autocomplete'=>'off', 'id' => 'material[gross_weight]',
                            			'data-required-error' => 'Este campo es obligatorio', 'maxlength' => '15'
                            		]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label for="trademark">Marca</label>
                                    {!! Form::text('material[trademark]',old('material[trademark]'),[
                            			'class'=>'form-control','placeholder'=>'trademark',
                            			'required'=>'', 'autocomplete'=>'off', 'id' => 'material[trademark]',
                            			'data-required-error' => 'Este campo es obligatorio', 'maxlength' => '15'
                            		]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label for="price">Precio unitario</label>
                                    {!! Form::text('material[price]',old('material[price]'),[
                            			'class'=>'form-control','placeholder'=>'price',
                            			'required'=>'', 'autocomplete'=>'off', 'id' => 'material[price]',
                            			'data-required-error' => 'Este campo es obligatorio', 'maxlength' => '15'
                            		]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label for="material_type_id">Tipo de material:</label>
                                    <div class="clearfix"></div>
                                    {!! Form::select('material[material_type_id]',[null=>'---Selecionar---']+$material_types->toArray(),old('material[material_type_id]'),[
                                        'class'=>'form-control','id'=>'material[material_type_id]',
                                        'data-required-error' => 'Este campo es obligatorio',
                                    ]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div>
                                    <button class="btn btn-lg btn-primary pull-right m-t-n-xs" type="submit"><strong>Guardar</strong></button>
                                </div>
                            </div>

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('dyn_js')


<script type="text/javascript">
    $(function(){
        $("#description").change(function(){
            var idM =$("#description").val();
            if(idM){
                $.ajax({
                url: '{{url('almacen/inventario')}}/'+idM,
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
                    $("#trademark").val(data.trademark)
                    $("#price").val(data.price)
                    $('#material_type_id').val(data.material_type_id)
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
                $("#trademark").val("")
                $("#price").val("")
                $('#material_type_id').val("")
            }
        });
    });
</script>

@endsection

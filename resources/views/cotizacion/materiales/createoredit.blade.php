@extends('layouts.admin.layout')
@section('meta_title')
    @if(!isset($material))
        Agregar material
    @else
        Editando {{$material->description}}
    @endif
@endsection

@section('page_title')
    @if(!isset($material))
        Agregar material
    @else
        Editando {{$material->description}}
    @endif
@endsection
@section('page_action')
<a href="{{route('cotizacion.material')}}" class="btn btn-white">&lt; Regresar a materiales</a>
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
                            @if(!isset($material))
                                {!! Form::open(['route'=>'cotizacion.material.save','id'=>'user-form', 'files'=>true,'data-toggle' => 'validator',]) !!}
                            @else
                                {!! Form::model($material, [
                                    'method' => 'patch',
                                    'route' => ['cotizacion.client.update', $material->id],
                                    'id'=>'category-form',
                                    'files' => true,
                                    'data-toggle' => 'validator',
                                ]) !!}
                            @endif
                                <div class="form-group">
                                    <label for="description">Descripcion</label>
                                    {!! Form::text('description',old('description'),[
                            			'class'=>'form-control','placeholder'=>'Descripcion',
                            			 'autocomplete'=>'off', 'id' => 'description',
                            			 'data-required-error' => 'Este campo es obligatorio',
                            			 'required' => '', 'maxlength' => '100'
                            		]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label for="specification">Especificación</label>
                                    {!! Form::text('specification',old('specification'),[
                            			'class'=>'form-control','placeholder'=>'specification',
                            			'required'=>'', 'autocomplete'=>'off', 'id' => 'specification',
                            			'data-required-error' => 'Este campo es obligatorio','maxlength' => '100'
                            		]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label for="material_type_id">Tipo de material:</label>
                                    <div class="clearfix"></div>
                                    {!! Form::select('material_type_id',[null=>'---Selecionar---']+$material_types->toArray(),old('material_type_id'),[
                                        'class'=>'form-control','id'=>'material_type_id',
                                        'data-required-error' => 'Este campo es obligatorio',
                                    ]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>


                                <div class="form-group">
                                    <label for="thickness">Espesor</label>
                                    {!! Form::text('thickness',old('thickness'),[
                            			'class'=>'form-control','placeholder'=>'thickness',
                            			'required'=>'', 'autocomplete'=>'off', 'id' => 'thickness',
                            			'data-required-error' => 'Este campo es obligatorio',
                                        'maxlength' => '100'
                            		]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label for="dimension">Dimensión</label>
                                    {!! Form::text('dimension',old('dimension'),[
                            			'class'=>'form-control','placeholder'=>'dimension',
                            			'required'=>'', 'autocomplete'=>'off', 'id' => 'dimension',
                            			'data-required-error' => 'Este campo es obligatorio', 'maxlength' => '15'
                            		]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label for="length">Longitud</label>
                                    {!! Form::text('length',old('length'),[
                            			'class'=>'form-control','placeholder'=>'length',
                            			'required'=>'', 'autocomplete'=>'off', 'id' => 'length',
                            			'data-required-error' => 'Este campo es obligatorio', 'maxlength' => '15'
                            		]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label for="net_weight">Peso neto</label>
                                    {!! Form::text('net_weight',old('net_weight'),[
                            			'class'=>'form-control','placeholder'=>'net_weight',
                            			'required'=>'', 'autocomplete'=>'off', 'id' => 'net_weight',
                            			'data-required-error' => 'Este campo es obligatorio', 'maxlength' => '15'
                            		]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label for="gross_weight">Peso bruto</label>
                                    {!! Form::text('gross_weight',old('gross_weight'),[
                            			'class'=>'form-control','placeholder'=>'gross_weight',
                            			'required'=>'', 'autocomplete'=>'off', 'id' => 'gross_weight',
                            			'data-required-error' => 'Este campo es obligatorio', 'maxlength' => '15'
                            		]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label for="dimension">Marca</label>
                                    {!! Form::text('trademark',old('trademark'),[
                            			'class'=>'form-control','placeholder'=>'trademark',
                            			'required'=>'', 'autocomplete'=>'off', 'id' => 'trademark',
                            			'data-required-error' => 'Este campo es obligatorio', 'maxlength' => '15'
                            		]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label for="dimension">Precio unitario</label>
                                    {!! Form::text('price',old('price'),[
                            			'class'=>'form-control','placeholder'=>'price',
                            			'required'=>'', 'autocomplete'=>'off', 'id' => 'price',
                            			'data-required-error' => 'Este campo es obligatorio', 'maxlength' => '15'
                            		]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div>
                                    <button class="btn btn-lg btn-primary pull-right m-t-n-xs" type="submit"><strong>Guardar</strong></button>
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

    });
</script>

@endsection

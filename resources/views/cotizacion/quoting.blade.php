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
<div class="alert alert-danger fade">
    <button type="button" class="close" data-dismiss="alert">×</button>
    Llena todos los campos.
</div>
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
                    {!! Form::open(['id'=>'user-form', 'files'=>true,'data-toggle' => 'validator',])!!}
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="material_id">Descripcion:</label>
                            <div class="clearfix"></div>
                            {!! Form::select('material_id',[null=>'---Selecionar---']+$materials->toArray(),old('material_id'),[
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
                            <label for="quantity">cantidad:</label>
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
                        <button id="adicionar" class="btn btn-lg btn-primary pull-right m-t-n-xs" type="button"><strong>Guardar</strong></button>

                    </div>
                    {!! Form::close() !!}
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <table  id="tabla_cuerpo" class="table table-bordered table-hover ">
                            <thead>
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
                            </thead>
                            <tbody id="contenido">

                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Tapas</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <div class="row">
                    {!! Form::open(['id'=>'user-form', 'files'=>true,'data-toggle' => 'validator',])!!}
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="material_id">Descripcion:</label>
                            <div class="clearfix"></div>
                            {!! Form::select('material_id',[null=>'---Selecionar---']+$materials->toArray(),old('material_id'),[
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
                            <label for="quantity">cantidad:</label>
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
                        <button id="adicionar" class="btn btn-lg btn-primary pull-right m-t-n-xs" type="button"><strong>Guardar</strong></button>

                    </div>
                    {!! Form::close() !!}
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <table  id="tabla_cuerpo" class="table table-bordered table-hover ">
                            <thead>
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
                            </thead>
                            <tbody id="contenido">

                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>soportes tipo patas</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <div class="row">
                    {!! Form::open(['id'=>'user-form', 'files'=>true,'data-toggle' => 'validator',])!!}
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="material_id">Descripcion:</label>
                            <div class="clearfix"></div>
                            {!! Form::select('material_id',[null=>'---Selecionar---']+$materials->toArray(),old('material_id'),[
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
                            <label for="quantity">cantidad:</label>
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
                        <button id="adicionar" class="btn btn-lg btn-primary pull-right m-t-n-xs" type="button"><strong>Guardar</strong></button>

                    </div>
                    {!! Form::close() !!}
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <table  id="tabla_cuerpo" class="table table-bordered table-hover ">
                            <thead>
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
                            </thead>
                            <tbody id="contenido">

                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Escalera</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <div class="row">
                    {!! Form::open(['id'=>'user-form', 'files'=>true,'data-toggle' => 'validator',])!!}
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="material_id">Descripcion:</label>
                            <div class="clearfix"></div>
                            {!! Form::select('material_id',[null=>'---Selecionar---']+$materials->toArray(),old('material_id'),[
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
                            <label for="quantity">cantidad:</label>
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
                        <button id="adicionar" class="btn btn-lg btn-primary pull-right m-t-n-xs" type="button"><strong>Guardar</strong></button>

                    </div>
                    {!! Form::close() !!}
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <table  id="tabla_cuerpo" class="table table-bordered table-hover ">
                            <thead>
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
                            </thead>
                            <tbody id="contenido">

                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>registro de inspección</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <div class="row">
                    {!! Form::open(['id'=>'user-form', 'files'=>true,'data-toggle' => 'validator',])!!}
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="material_id">Descripcion:</label>
                            <div class="clearfix"></div>
                            {!! Form::select('material_id',[null=>'---Selecionar---']+$materials->toArray(),old('material_id'),[
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
                            <label for="quantity">cantidad:</label>
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
                        <button id="adicionar" class="btn btn-lg btn-primary pull-right m-t-n-xs" type="button"><strong>Guardar</strong></button>

                    </div>
                    {!! Form::close() !!}
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <table  id="tabla_cuerpo" class="table table-bordered table-hover ">
                            <thead>
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
                            </thead>
                            <tbody id="contenido">

                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>boquillas</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <div class="row">
                    {!! Form::open(['id'=>'user-form', 'files'=>true,'data-toggle' => 'validator',])!!}
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="material_id">Descripcion:</label>
                            <div class="clearfix"></div>
                            {!! Form::select('material_id',[null=>'---Selecionar---']+$materials->toArray(),old('material_id'),[
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
                            <label for="quantity">cantidad:</label>
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
                        <button id="adicionar" class="btn btn-lg btn-primary pull-right m-t-n-xs" type="button"><strong>Guardar</strong></button>

                    </div>
                    {!! Form::close() !!}
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <table  id="tabla_cuerpo" class="table table-bordered table-hover ">
                            <thead>
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
                            </thead>
                            <tbody id="contenido">

                            </tbody>
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
            if(idM){
                $.ajax({
                url: '{{url('cotizacion/material')}}/'+idM,
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
                $.ajax({
                    url : '{{route('cotizacion.material.cotizador')}}',
                    type : 'POST',
                    data : formData,
                    datatype:'json',
                    processData: false,  // tell jQuery not to process the data
                    contentType: false,  // tell jQuery not to set contentType
                }).done(function(data){
                    $.each(data, function(index, value){
                        /* Vamos agregando a nuestra tabla las filas necesarias */
                        $("#contenido").append("<tr><td>" + value.material.description + "</td><td>" + value.material.specification + "</td><td>" + value.quantity + "</td><td>" + value.material.dimension + "</td><td>"+value.material.length+"</td><td>"+value.material.net_weight+"</td><td>"+value.material.gross_weight+"</td><td>"+value.material.price+"</td><td>"+value.total+"</td></tr>");
                    });
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

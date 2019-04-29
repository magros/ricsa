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
    <div class="panel panel-default">
        <div class="panel-heading">Material</div>
        <div class="panel-body">

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
                                <button id="adicionar" class="btn btn-lg btn-primary pull-right m-t-n-xs" type="button"><strong>Agregar</strong></button>

                            </div>
                            {!! Form::close() !!}
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <table  id="tabla_cuerpo" class="table table-stripped table-dark table-hover ">
                                    <thead class="thead-dark">
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
                                        @foreach ($cuerpo as $c)
                                            <tr class="gradeA" id="item-cuerpo-{{$c->id}}">
                                                <td>{{$c->material->description}}</td>
                                                <td>{{$c->material->specification}}</td>
                                                <td>{{$c->quantity}}</td>
                                                <td>{{$c->material->dimension}}</td>
                                                <td>{{$c->material->length}}</td>
                                                <td>{{$c->material->net_weight}}</td>
                                                <td>{{$c->material->gross_weight}}</td>
                                                <td>{{$c->material->price}}</td>
                                                <td>{{$c->total}}</td>
                                                <td>
                                                    <a href="#" class="btn btn-dark deleteC" data-c="{{$c->id}}">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>

                    </div>
                </div>
                {{-- Modal para eliminar cuerpo--}}
                <div class="modal inmodal fade" id="delete-modal-cuerpo" tabindex="-1" role="dialog"  aria-hidden="true">
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
                                <button type="button" class="btn btn-danger" id="delete-action-btn-cuerpo" data-tangoC="0">Borrar</button>
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
                            {!! Form::open(['id'=>'T-user-form', 'files'=>true,'data-toggle' => 'validator',])!!}
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="T_material_id">Descripcion:</label>
                                    <div class="clearfix"></div>
                                    {!! Form::select('T_material_id',[null=>'---Selecionar---']+$materials->toArray(),old('T_material_id'),[
                                        'class'=>'form-control','id'=>'T_material_id',
                                        'data-required-error' => 'Este campo es obligatorio',
                                    ]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="T_specification">Especificación</label>
                                    {!! Form::text('T_specification',old('T_specification'),[
                                        'class'=>'form-control','placeholder'=>'T_specification',
                                        'required'=>'', 'autocomplete'=>'off', 'id' => 'T_specification',
                                        'data-required-error' => 'Este campo es obligatorio','maxlength' => '100','disabled'
                                    ]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="T_quantity">cantidad:</label>
                                    <div class="clearfix"></div>
                                    {!! Form::text('T_quantity',old('T_quantity'),[
                                        'class'=>'form-control','placeholder'=>'Cantidad',
                                        'autocomplete'=>'off', 'id' => 'T_quantity',
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
                                    {!! Form::text('T_thickness',old('T_thickness'),[
                                        'class'=>'form-control','placeholder'=>'T_thickness',
                                        'required'=>'', 'autocomplete'=>'off', 'id' => 'T_thickness',
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
                                    {!! Form::text('T_dimension',old('T_dimension'),[
                                        'class'=>'form-control','placeholder'=>'T_dimension',
                                        'required'=>'', 'autocomplete'=>'off', 'id' => 'T_dimension',
                                        'data-required-error' => 'Este campo es obligatorio', 'maxlength' => '15','disabled'
                                    ]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="contract_id">Long mm:</label>
                                    <div class="clearfix"></div>
                                    {!! Form::text('T_length',old('T_length'),[
                                        'class'=>'form-control','placeholder'=>'T_length',
                                        'required'=>'', 'autocomplete'=>'off', 'id' => 'T_length',
                                        'data-required-error' => 'Este campo es obligatorio', 'maxlength' => '15','disabled'
                                    ]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="contract_id">Peso neto:</label>
                                    <div class="clearfix"></div>
                                    {!! Form::text('T_net_weight',old('T_net_weight'),[
                                        'class'=>'form-control','placeholder'=>'T_net_weight',
                                        'required'=>'', 'autocomplete'=>'off', 'id' => 'T_net_weight',
                                        'data-required-error' => 'Este campo es obligatorio', 'maxlength' => '15','disabled'
                                    ]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="contract_id">Peso bruto:</label>
                                    <div class="clearfix"></div>
                                    {!! Form::text('T_gross_weight',old('T_gross_weight'),[
                                        'class'=>'form-control','placeholder'=>'T_gross_weight',
                                        'required'=>'', 'autocomplete'=>'off', 'id' => 'T_gross_weight',
                                        'data-required-error' => 'Este campo es obligatorio', 'maxlength' => '15','disabled'
                                    ]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="contract_id">Precio unitario:</label>
                                    <div class="clearfix"></div>
                                    {!! Form::text('T_price',old('T_price'),[
                                        'class'=>'form-control','placeholder'=>'T_price',
                                        'required'=>'', 'autocomplete'=>'off', 'id' => 'T_price',
                                        'data-required-error' => 'Este campo es obligatorio', 'maxlength' => '15','disabled'
                                    ]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>


                            <div>
                                <button id="T_adicionar" class="btn btn-lg btn-primary pull-right m-t-n-xs" type="button"><strong>Agregar</strong></button>

                            </div>
                            {!! Form::close() !!}
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <table  id="tabla_cuerpo" class="table table-striped table-dark table-hover ">
                                    <thead class="thead-dark">
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
                                    <tbody id="T_contenido">
                                        @foreach ($tapas as $t)
                                            <tr class="gradeA" id="item-tapas-{{$c->id}}">
                                                <td>{{$t->material->description}}</td>
                                                <td>{{$t->material->specification}}</td>
                                                <td>{{$t->quantity}}</td>
                                                <td>{{$t->material->dimension}}</td>
                                                <td>{{$t->material->length}}</td>
                                                <td>{{$t->material->net_weight}}</td>
                                                <td>{{$t->material->gross_weight}}</td>
                                                <td>{{$t->material->price}}</td>
                                                <td>{{$t->total}}</td>
                                                <td>  <a href="#" class="btn btn-dark deleteT" data-t="{{$t->id}}">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>

                    </div>
                </div>
                {{-- Modal para eliminar cuerpo--}}
                <div class="modal inmodal fade" id="delete-modal-tapas" tabindex="-1" role="dialog"  aria-hidden="true">
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
                                <button type="button" class="btn btn-danger" id="delete-action-btn-tapas" data-tangoT="0">Borrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Soportes</h5>
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
                                    <label for="S_material_id">Descripcion:</label>
                                    <div class="clearfix"></div>
                                    {!! Form::select('S_material_id',[null=>'---Selecionar---']+$materials->toArray(),old('S_material_id'),[
                                        'class'=>'form-control','id'=>'S_material_id',
                                        'data-required-error' => 'Este campo es obligatorio',
                                    ]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="S_specification">Especificación</label>
                                    {!! Form::text('S_specification',old('S_specification'),[
                                        'class'=>'form-control','placeholder'=>'S_specification',
                                        'required'=>'', 'autocomplete'=>'off', 'id' => 'S_specification',
                                        'data-required-error' => 'Este campo es obligatorio','maxlength' => '100','disabled'
                                    ]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="S_quantity">cantidad:</label>
                                    <div class="clearfix"></div>
                                    {!! Form::text('S_quantity',old('S_quantity'),[
                                        'class'=>'form-control','placeholder'=>'Cantidad',
                                        'autocomplete'=>'off', 'id' => 'S_quantity',
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
                                    {!! Form::text('S_thickness',old('S_thickness'),[
                                        'class'=>'form-control','placeholder'=>'S_thickness',
                                        'required'=>'', 'autocomplete'=>'off', 'id' => 'S_thickness',
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
                                    {!! Form::text('S_dimension',old('S_dimension'),[
                                        'class'=>'form-control','placeholder'=>'S_dimension',
                                        'required'=>'', 'autocomplete'=>'off', 'id' => 'S_dimension',
                                        'data-required-error' => 'Este campo es obligatorio', 'maxlength' => '15','disabled'
                                    ]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="contract_id">Long mm:</label>
                                    <div class="clearfix"></div>
                                    {!! Form::text('S_length',old('S_length'),[
                                        'class'=>'form-control','placeholder'=>'S_length',
                                        'required'=>'', 'autocomplete'=>'off', 'id' => 'S_length',
                                        'data-required-error' => 'Este campo es obligatorio', 'maxlength' => '15','disabled'
                                    ]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="contract_id">Peso neto:</label>
                                    <div class="clearfix"></div>
                                    {!! Form::text('S_net_weight',old('S_net_weight'),[
                                        'class'=>'form-control','placeholder'=>'S_net_weight',
                                        'required'=>'', 'autocomplete'=>'off', 'id' => 'S_net_weight',
                                        'data-required-error' => 'Este campo es obligatorio', 'maxlength' => '15','disabled'
                                    ]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="contract_id">Peso bruto:</label>
                                    <div class="clearfix"></div>
                                    {!! Form::text('S_gross_weight',old('S_gross_weight'),[
                                        'class'=>'form-control','placeholder'=>'S_gross_weight',
                                        'required'=>'', 'autocomplete'=>'off', 'id' => 'S_gross_weight',
                                        'data-required-error' => 'Este campo es obligatorio', 'maxlength' => '15','disabled'
                                    ]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="contract_id">Precio unitario:</label>
                                    <div class="clearfix"></div>
                                    {!! Form::text('S_price',old('S_price'),[
                                        'class'=>'form-control','placeholder'=>'S_price',
                                        'required'=>'', 'autocomplete'=>'off', 'id' => 'S_price',
                                        'data-required-error' => 'Este campo es obligatorio', 'maxlength' => '15','disabled'
                                    ]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>


                            <div>
                                <button id="S_adicionar" class="btn btn-lg btn-primary pull-right m-t-n-xs" type="button"><strong>Agregar</strong></button>

                            </div>
                            {!! Form::close() !!}
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <table  id="tabla_cuerpo" class="table table-striped table-dark table-hover ">
                                    <thead class="thead-dark">
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
                                    <tbody id="S_contenido">
                                        @foreach ($soportes as $s)
                                            <tr class="gradeA" id="item-soporte-{{$s->id}}">
                                                <td>{{$s->material->description}}</td>
                                                <td>{{$s->material->specification}}</td>
                                                <td>{{$s->quantity}}</td>
                                                <td>{{$s->material->dimension}}</td>
                                                <td>{{$s->material->length}}</td>
                                                <td>{{$s->material->net_weight}}</td>
                                                <td>{{$s->material->gross_weight}}</td>
                                                <td>{{$s->material->price}}</td>
                                                <td>{{$s->total}}</td>
                                                <td>  <a href="#" class="btn btn-dark deleteS" data-s="{{$s->id}}">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                            {{-- Modal para eliminar soportes--}}
                            <div class="modal inmodal fade" id="delete-modal-soporte" tabindex="-1" role="dialog"  aria-hidden="true">
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
                                            <button type="button" class="btn btn-danger" id="delete-action-btn-soporte" data-tangoS="0">Borrar</button>
                                        </div>
                                    </div>
                                </div>
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
                                    <label for="E_material_id">Descripcion:</label>
                                    <div class="clearfix"></div>
                                    {!! Form::select('E_material_id',[null=>'---Selecionar---']+$materials->toArray(),old('E_material_id'),[
                                        'class'=>'form-control','id'=>'E_material_id',
                                        'data-required-error' => 'Este campo es obligatorio',
                                    ]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="E_specification">Especificación</label>
                                    {!! Form::text('E_specification',old('E_specification'),[
                                        'class'=>'form-control','placeholder'=>'E_specification',
                                        'required'=>'', 'autocomplete'=>'off', 'id' => 'E_specification',
                                        'data-required-error' => 'Este campo es obligatorio','maxlength' => '100','disabled'
                                    ]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="E_quantity">cantidad:</label>
                                    <div class="clearfix"></div>
                                    {!! Form::text('E_quantity',old('E_quantity'),[
                                        'class'=>'form-control','placeholder'=>'Cantidad',
                                        'autocomplete'=>'off', 'id' => 'E_quantity',
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
                                    {!! Form::text('E_thickness',old('E_thickness'),[
                                        'class'=>'form-control','placeholder'=>'E_thickness',
                                        'required'=>'', 'autocomplete'=>'off', 'id' => 'E_thickness',
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
                                    {!! Form::text('E_dimension',old('E_dimension'),[
                                        'class'=>'form-control','placeholder'=>'E_dimension',
                                        'required'=>'', 'autocomplete'=>'off', 'id' => 'E_dimension',
                                        'data-required-error' => 'Este campo es obligatorio', 'maxlength' => '15','disabled'
                                    ]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="contract_id">Long mm:</label>
                                    <div class="clearfix"></div>
                                    {!! Form::text('E_length',old('E_length'),[
                                        'class'=>'form-control','placeholder'=>'E_length',
                                        'required'=>'', 'autocomplete'=>'off', 'id' => 'E_length',
                                        'data-required-error' => 'Este campo es obligatorio', 'maxlength' => '15','disabled'
                                    ]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="contract_id">Peso neto:</label>
                                    <div class="clearfix"></div>
                                    {!! Form::text('E_net_weight',old('E_net_weight'),[
                                        'class'=>'form-control','placeholder'=>'E_net_weight',
                                        'required'=>'', 'autocomplete'=>'off', 'id' => 'E_net_weight',
                                        'data-required-error' => 'Este campo es obligatorio', 'maxlength' => '15','disabled'
                                    ]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="contract_id">Peso bruto:</label>
                                    <div class="clearfix"></div>
                                    {!! Form::text('E_gross_weight',old('E_gross_weight'),[
                                        'class'=>'form-control','placeholder'=>'E_gross_weight',
                                        'required'=>'', 'autocomplete'=>'off', 'id' => 'E_gross_weight',
                                        'data-required-error' => 'Este campo es obligatorio', 'maxlength' => '15','disabled'
                                    ]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="contract_id">Precio unitario:</label>
                                    <div class="clearfix"></div>
                                    {!! Form::text('E_price',old('E_price'),[
                                        'class'=>'form-control','placeholder'=>'E_price',
                                        'required'=>'', 'autocomplete'=>'off', 'id' => 'E_price',
                                        'data-required-error' => 'Este campo es obligatorio', 'maxlength' => '15','disabled'
                                    ]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>


                            <div>
                                <button id="E_adicionar" class="btn btn-lg btn-primary pull-right m-t-n-xs" type="button"><strong>Agregar</strong></button>

                            </div>
                            {!! Form::close() !!}
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <table  id="tabla_cuerpo" class="table table-striped table-dark table-hover ">
                                    <thead class="thead-dark">
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
                                    <tbody id="E_contenido">
                                        @foreach ($escalera as $e)
                                            <tr class="gradeA" id="item-escalera-{{$e->id}}">
                                                <td>{{$e->material->description}}</td>
                                                <td>{{$e->material->specification}}</td>
                                                <td>{{$e->quantity}}</td>
                                                <td>{{$e->material->dimension}}</td>
                                                <td>{{$e->material->length}}</td>
                                                <td>{{$e->material->net_weight}}</td>
                                                <td>{{$e->material->gross_weight}}</td>
                                                <td>{{$e->material->price}}</td>
                                                <td>{{$e->total}}</td>
                                                <td>  <a href="#" class="btn btn-dark deleteE" data-e="{{$e->id}}">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>

                    </div>
                </div>
                {{-- Modal para eliminar escalera--}}
                <div class="modal inmodal fade" id="delete-modal-escalera" tabindex="-1" role="dialog"  aria-hidden="true">
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
                                <button type="button" class="btn btn-danger" id="delete-action-btn-escalera" data-tangoS="0">Borrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Registro de inspección</h5>
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
                                    <label for="R_material_id">Descripcion:</label>
                                    <div class="clearfix"></div>
                                    {!! Form::select('R_material_id',[null=>'---Selecionar---']+$materials->toArray(),old('R_material_id'),[
                                        'class'=>'form-control','id'=>'R_material_id',
                                        'data-required-error' => 'Este campo es obligatorio',
                                    ]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="R_specification">Especificación</label>
                                    {!! Form::text('R_specification',old('R_specification'),[
                                        'class'=>'form-control','placeholder'=>'R_specification',
                                        'required'=>'', 'autocomplete'=>'off', 'id' => 'R_specification',
                                        'data-required-error' => 'Este campo es obligatorio','maxlength' => '100','disabled'
                                    ]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="R_quantity">cantidad:</label>
                                    <div class="clearfix"></div>
                                    {!! Form::text('R_quantity',old('R_quantity'),[
                                        'class'=>'form-control','placeholder'=>'Cantidad',
                                        'autocomplete'=>'off', 'id' => 'R_quantity',
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
                                    {!! Form::text('R_thickness',old('R_thickness'),[
                                        'class'=>'form-control','placeholder'=>'R_thickness',
                                        'required'=>'', 'autocomplete'=>'off', 'id' => 'R_thickness',
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
                                    {!! Form::text('R_dimension',old('R_dimension'),[
                                        'class'=>'form-control','placeholder'=>'R_dimension',
                                        'required'=>'', 'autocomplete'=>'off', 'id' => 'R_dimension',
                                        'data-required-error' => 'Este campo es obligatorio', 'maxlength' => '15','disabled'
                                    ]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="contract_id">Long mm:</label>
                                    <div class="clearfix"></div>
                                    {!! Form::text('R_length',old('R_length'),[
                                        'class'=>'form-control','placeholder'=>'R_length',
                                        'required'=>'', 'autocomplete'=>'off', 'id' => 'R_length',
                                        'data-required-error' => 'Este campo es obligatorio', 'maxlength' => '15','disabled'
                                    ]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="contract_id">Peso neto:</label>
                                    <div class="clearfix"></div>
                                    {!! Form::text('R_net_weight',old('R_net_weight'),[
                                        'class'=>'form-control','placeholder'=>'R_net_weight',
                                        'required'=>'', 'autocomplete'=>'off', 'id' => 'R_net_weight',
                                        'data-required-error' => 'Este campo es obligatorio', 'maxlength' => '15','disabled'
                                    ]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="contract_id">Peso bruto:</label>
                                    <div class="clearfix"></div>
                                    {!! Form::text('R_gross_weight',old('R_gross_weight'),[
                                        'class'=>'form-control','placeholder'=>'R_gross_weight',
                                        'required'=>'', 'autocomplete'=>'off', 'id' => 'R_gross_weight',
                                        'data-required-error' => 'Este campo es obligatorio', 'maxlength' => '15','disabled'
                                    ]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="contract_id">Precio unitario:</label>
                                    <div class="clearfix"></div>
                                    {!! Form::text('R_price',old('R_price'),[
                                        'class'=>'form-control','placeholder'=>'R_price',
                                        'required'=>'', 'autocomplete'=>'off', 'id' => 'R_price',
                                        'data-required-error' => 'Este campo es obligatorio', 'maxlength' => '15','disabled'
                                    ]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>


                            <div>
                                <button id="R_adicionar" class="btn btn-lg btn-primary pull-right m-t-n-xs" type="button"><strong>Agregar</strong></button>

                            </div>
                            {!! Form::close() !!}
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <table  id="tabla_cuerpo" class="table table-striped table-dark table-hover ">
                                    <thead class="thead-dark">
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
                                    <tbody id="R_contenido">
                                        @foreach ($registro as $r)
                                            <tr class="gradeA" id="item-registro-{{$r->id}}">
                                                <td>{{$r->material->description}}</td>
                                                <td>{{$r->material->specification}}</td>
                                                <td>{{$r->quantity}}</td>
                                                <td>{{$r->material->dimension}}</td>
                                                <td>{{$r->material->length}}</td>
                                                <td>{{$r->material->net_weight}}</td>
                                                <td>{{$r->material->gross_weight}}</td>
                                                <td>{{$r->material->price}}</td>
                                                <td>{{$r->total}}</td>
                                                <td>  <a href="#" class="btn btn-dark deleteR" data-r="{{$r->id}}">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>

                    </div>
                </div>
                {{-- Modal para eliminar registro--}}
                <div class="modal inmodal fade" id="delete-modal-registro" tabindex="-1" role="dialog"  aria-hidden="true">
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
                                <button type="button" class="btn btn-danger" id="delete-action-btn-registro" data-tangoR="0">Borrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Boquillas</h5>
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
                                    <label for="B_material_id">Descripcion:</label>
                                    <div class="clearfix"></div>
                                    {!! Form::select('B_material_id',[null=>'---Selecionar---']+$materials->toArray(),old('B_material_id'),[
                                        'class'=>'form-control','id'=>'B_material_id',
                                        'data-required-error' => 'Este campo es obligatorio',
                                    ]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="B_specification">Especificación</label>
                                    {!! Form::text('B_specification',old('B_specification'),[
                                        'class'=>'form-control','placeholder'=>'B_specification',
                                        'required'=>'', 'autocomplete'=>'off', 'id' => 'B_specification',
                                        'data-required-error' => 'Este campo es obligatorio','maxlength' => '100','disabled'
                                    ]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="B_quantity">cantidad:</label>
                                    <div class="clearfix"></div>
                                    {!! Form::text('B_quantity',old('B_quantity'),[
                                        'class'=>'form-control','placeholder'=>'Cantidad',
                                        'autocomplete'=>'off', 'id' => 'B_quantity',
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
                                    {!! Form::text('B_thickness',old('B_thickness'),[
                                        'class'=>'form-control','placeholder'=>'B_thickness',
                                        'required'=>'', 'autocomplete'=>'off', 'id' => 'B_thickness',
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
                                    {!! Form::text('B_dimension',old('B_dimension'),[
                                        'class'=>'form-control','placeholder'=>'B_dimension',
                                        'required'=>'', 'autocomplete'=>'off', 'id' => 'B_dimension',
                                        'data-required-error' => 'Este campo es obligatorio', 'maxlength' => '15','disabled'
                                    ]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="contract_id">Long mm:</label>
                                    <div class="clearfix"></div>
                                    {!! Form::text('B_length',old('B_length'),[
                                        'class'=>'form-control','placeholder'=>'B_length',
                                        'required'=>'', 'autocomplete'=>'off', 'id' => 'B_length',
                                        'data-required-error' => 'Este campo es obligatorio', 'maxlength' => '15','disabled'
                                    ]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="contract_id">Peso neto:</label>
                                    <div class="clearfix"></div>
                                    {!! Form::text('B_net_weight',old('B_net_weight'),[
                                        'class'=>'form-control','placeholder'=>'B_net_weight',
                                        'required'=>'', 'autocomplete'=>'off', 'id' => 'B_net_weight',
                                        'data-required-error' => 'Este campo es obligatorio', 'maxlength' => '15','disabled'
                                    ]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="contract_id">Peso bruto:</label>
                                    <div class="clearfix"></div>
                                    {!! Form::text('B_gross_weight',old('B_gross_weight'),[
                                        'class'=>'form-control','placeholder'=>'B_gross_weight',
                                        'required'=>'', 'autocomplete'=>'off', 'id' => 'B_gross_weight',
                                        'data-required-error' => 'Este campo es obligatorio', 'maxlength' => '15','disabled'
                                    ]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="contract_id">Precio unitario:</label>
                                    <div class="clearfix"></div>
                                    {!! Form::text('B_price',old('B_price'),[
                                        'class'=>'form-control','placeholder'=>'B_price',
                                        'required'=>'', 'autocomplete'=>'off', 'id' => 'B_price',
                                        'data-required-error' => 'Este campo es obligatorio', 'maxlength' => '15','disabled'
                                    ]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>


                            <div>
                                <button id="B_adicionar" class="btn btn-lg btn-primary pull-right m-t-n-xs" type="button"><strong>Agregar</strong></button>

                            </div>
                            {!! Form::close() !!}
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <table  id="tabla_cuerpo" class="table table-striped table-dark table-hover ">
                                    <thead class="thead-dark">
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
                                    <tbody id="B_contenido">
                                        @foreach ($boquillas as $b)
                                            <tr class="gradeA" id="item-boquilla-{{$b->id}}">
                                                <td>{{$b->material->description}}</td>
                                                <td>{{$b->material->specification}}</td>
                                                <td>{{$b->quantity}}</td>
                                                <td>{{$b->material->dimension}}</td>
                                                <td>{{$b->material->length}}</td>
                                                <td>{{$b->material->net_weight}}</td>
                                                <td>{{$b->material->gross_weight}}</td>
                                                <td>{{$b->material->price}}</td>
                                                <td>{{$b->total}}</td>
                                                <td>  <a href="#" class="btn btn-dark deleteB" data-b="{{$b->id}}">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>

                         {{-- Modal para eliminar registro--}}
                        <div class="modal inmodal fade" id="delete-modal-boquilla" tabindex="-1" role="dialog"  aria-hidden="true">
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
                                        <button type="button" class="btn btn-danger" id="delete-action-btn-boquilla" data-tangoB="0">Borrar</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="panel-footer">
            <div class="row">
                <div class="col-sm-2">
                    <h4>Costo material</h4>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="peso_neto">Total peso neto</label>
                        <input type="text" class="form-control" name="peso_neto" id="peso_neto" placeholder="Total peso neto" value="{{($peso_neto) ? $peso_neto : 0}}" disabled>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="peso_bruto">Total peso bruto</label>
                        <input type="text" class="form-control" name="peso_bruto" id="peso_bruto" placeholder="Total peso bruto" value="{{($peso_burto) ? $peso_burto : 0}}" disabled>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="precio_kilo">Precio por kilo</label>
                        <input type="text" class="form-control" name="precio_kilo" id="precio_kilo" placeholder="Precio por kilo" value="{{($precio_kilo) ? $precio_kilo : 0}}" disabled>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="total_material">Total</label>
                        <input type="text" class="form-control" name="total_material" id="total_material" placeholder="Total" value="{{($total) ? $total : 0}}" disabled>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            Costo de mano de obra
        </div>
        <div class="panel-body">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Mano de obra</h5>
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
                                    <label for="descripcion">Descripcion:</label>
                                    <div class="clearfix"></div>
                                    <select name="description" id="description" class="form-control">
                                        <option value="">---Selecionar---</option>
                                        <option value="1">cuerpo y tapas</option>
                                        <option value="2">soportes</option>
                                        <option value="3">escaleras y barandales</option>
                                        <option value="4">boquillas</option>
                                        {{-- <option value="5">ingeniería</option> --}}
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="precio_hora">$/h</label>
                                    {!! Form::text('precio_hora',old('precio_hora'),[
                                        'class'=>'form-control','placeholder'=>'Precio por hora',
                                        'required'=>'', 'autocomplete'=>'off', 'id' => 'precio_hora',
                                        'data-required-error' => 'Este campo es obligatorio','maxlength' => '100',
                                    ]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="peso">Peso neto:</label>
                                    <div class="clearfix"></div>
                                    {!! Form::text('peso',old('peso'),[
                                        'class'=>'form-control','placeholder'=>'Peso',
                                        'autocomplete'=>'off', 'id' => 'peso',
                                        'data-required-error' => 'Este campo es obligatorio',
                                        'data-error' => 'Introduce una cantidad',
                                        'maxlength' => '100','disabled'
                                    ]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="cadencia">Cadencia:</label>
                                    <div class="clearfix"></div>
                                    {!! Form::text('cadencia',old('cadencia'),[
                                        'class'=>'form-control','placeholder'=>'Cadencia',
                                        'required'=>'', 'autocomplete'=>'off', 'id' => 'cadencia',
                                        'data-required-error' => 'Este campo es obligatorio',
                                        'maxlength' => '100'
                                    ]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div>
                                <button id="M_adicionar" class="btn btn-lg btn-primary pull-right m-t-n-xs" type="button"><strong>Agregar</strong></button>

                            </div>
                            {!! Form::close() !!}
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <table  id="tabla_cuerpo" class="table table-striped table-dark table-hover ">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Descripcion</th>
                                            <th>$/H</th>
                                            <th>Peso neto</th>
                                            <th>Cadencia</th>
                                            <th>Horas</th>
                                            <th>Porcentaje</th>
                                            <th>Total</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody id="mano_obra">
                                        @foreach ($mano_obra as $m)
                                            <tr class="gradeA" id="item-obra-{{$m->id}}">
                                                <td>{{$m->description}}</td>
                                                <td>{{$m->price_hour}}</td>
                                                <td>{{$m->net_weight}}</td>
                                                <td>{{$m->cadence}}</td>
                                                <td>{{$m->hours}}</td>
                                                <td>{{$m->costo}}</td>
                                                <td>{{$m->total}}</td>
                                                <td>
                                                    <a href="#" class="btn btn-dark deleteM" data-m="{{$m->id}}">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>

                            {{-- Modal para eliminar mano de obra--}}
                            <div class="modal inmodal fade" id="delete-modal-mano" tabindex="-1" role="dialog"  aria-hidden="true">
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
                                            <button type="button" class="btn btn-danger" id="delete-action-btn-obra" data-tangoM="0">Borrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="panel-footer">

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
        /*
        Cuerpo
        */
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
                    // $.each(data.material, function(index, value){
                    //     /* Vamos agregando a nuestra tabla las filas necesarias */
                    //     $("#contenido").append("<tr class='gradeA' id='item-cuerpo-"+value.id+"'><td>" + value.material.description + "</td><td>" + value.material.specification + "</td><td>" + value.quantity + "</td><td>" + value.material.dimension + "</td><td>"+value.material.length+"</td><td>"+value.material.net_weight+"</td><td>"+value.material.gross_weight+"</td><td>"+value.material.price+"</td><td>"+value.total+"</td><td><a href='#' class='btn btn-dark deleteC' data-c="+value.id+"><i class='fa fa-trash'></i></a></td></tr>");
                    // });
                    // $("#peso_neto").val(data.peso_neto);
                    // $("#peso_bruto").val(data.peso_burto);
                    // $("#precio_kilo").val(data.precio_kilo);
                    // $("#total_material").val(data.total);
                }).fail(function(data){
                    var message = data.responseJSON.errors;
                    console.log(message);
                });
            }else{
                $(".alert").removeClass("in").show();
	            $(".alert").delay(200).addClass("in").fadeOut(3000);
            }

        });

        /*
        Tapas
        */
        $("#T_material_id").change(function(){
            var idM =$("#T_material_id").val();
            if(idM){
                $.ajax({
                url: '{{url('cotizacion/material')}}/'+idM,
                type: 'get',
                dataType: 'json',
            })
                .done(function(data) {

                    $("#T_specification").val(data.specification)
                    $("#T_thickness").val(data.thickness)
                    $("#T_dimension").val(data.dimension)
                    $("#T_length").val(data.length)
                    $("#T_net_weight").val(data.net_weight)
                    $("#T_gross_weight").val(data.gross_weight)
                    $("#T_price").val(data.price)
                })
                .fail(function() {
                    console.log(data);
                });
            }else{
                $("#T_specification").val("")
                $("#T_thickness").val("")
                $("#T_dimension").val("")
                $("#T_length").val("")
                $("#T_net_weight").val("")
                $("#T_gross_weight").val("")
                $("#T_price").val("")
            }
        });
        $('#T_adicionar').click(function() {
            if($("#T_material_id").val() && $("#T_quantity").val()){
                $("#T_contenido").empty();
                var formData = new FormData();
                formData.append('material_id', $("#T_material_id").val());
                formData.append('cantidad', $("#T_quantity").val());
                formData.append('id_ric','{{$ric}}');
                formData.append('peso',$('#T_gross_weight').val());
                formData.append('price',$('#T_price').val());
                formData.append('name','tapas');
                $.ajax({
                    url : '{{route('cotizacion.material.cotizador')}}',
                    type : 'POST',
                    data : formData,
                    datatype:'json',
                    processData: false,  // tell jQuery not to process the data
                    contentType: false,  // tell jQuery not to set contentType
                }).done(function(data){
                    location.reload();
                    // $.each(data.material, function(index, value){
                    //     /* Vamos agregando a nuestra tabla las filas necesarias */
                    //     $("#T_contenido").append("<tr><td>" + value.material.description + "</td><td>" + value.material.specification + "</td><td>" + value.quantity + "</td><td>" + value.material.dimension + "</td><td>"+value.material.length+"</td><td>"+value.material.net_weight+"</td><td>"+value.material.gross_weight+"</td><td>"+value.material.price+"</td><td>"+value.total+"</td></tr>");
                    // });
                    // $("#peso_neto").val(data.peso_neto);
                    // $("#peso_bruto").val(data.peso_burto);
                    // $("#precio_kilo").val(data.precio_kilo);
                    // $("#total_material").val(data.total);
                }).fail(function(data){
                    var message = data.responseJSON.errors;
                    console.log(message);
                });
            }else{
                $(".alert").removeClass("in").show();
                $(".alert").delay(200).addClass("in").fadeOut(3000);
            }

        });

        /*
        Soportes
        */
        $("#S_material_id").change(function(){
            var idM =$("#S_material_id").val();
            if(idM){
                $.ajax({
                url: '{{url('cotizacion/material')}}/'+idM,
                type: 'get',
                dataType: 'json',
            })
                .done(function(data) {

                    $("#S_specification").val(data.specification)
                    $("#S_thickness").val(data.thickness)
                    $("#S_dimension").val(data.dimension)
                    $("#S_length").val(data.length)
                    $("#S_net_weight").val(data.net_weight)
                    $("#S_gross_weight").val(data.gross_weight)
                    $("#S_price").val(data.price)
                })
                .fail(function() {
                    console.log(data);
                });
            }else{
                $("#S_specification").val("")
                $("#S_thickness").val("")
                $("#S_dimension").val("")
                $("#S_length").val("")
                $("#S_net_weight").val("")
                $("#S_gross_weight").val("")
                $("#S_price").val("")
            }
        });
        $('#S_adicionar').click(function() {
            if($("#S_material_id").val() && $("#S_quantity").val()){
                $("#S_contenido").empty();
                var formData = new FormData();
                formData.append('material_id', $("#S_material_id").val());
                formData.append('cantidad', $("#S_quantity").val());
                formData.append('id_ric','{{$ric}}');
                formData.append('peso',$('#S_gross_weight').val());
                formData.append('price',$('#S_price').val());
                formData.append('name','soporte');
                $.ajax({
                    url : '{{route('cotizacion.material.cotizador')}}',
                    type : 'POST',
                    data : formData,
                    datatype:'json',
                    processData: false,  // tell jQuery not to process the data
                    contentType: false,  // tell jQuery not to set contentType
                }).done(function(data){
                    location.reload();
                    // $.each(data.material, function(index, value){
                    //     /* Vamos agregando a nuestra tabla las filas necesarias */
                    //     $("#S_contenido").append("<tr><td>" + value.material.description + "</td><td>" + value.material.specification + "</td><td>" + value.quantity + "</td><td>" + value.material.dimension + "</td><td>"+value.material.length+"</td><td>"+value.material.net_weight+"</td><td>"+value.material.gross_weight+"</td><td>"+value.material.price+"</td><td>"+value.total+"</td></tr>");
                    // });
                    // $("#peso_neto").val(data.peso_neto);
                    // $("#peso_bruto").val(data.peso_burto);
                    // $("#precio_kilo").val(data.precio_kilo);
                    // $("#total_material").val(data.total);
                }).fail(function(data){
                    var message = data.responseJSON.errors;
                    console.log(message);
                });
            }else{
                $(".alert").removeClass("in").show();
                $(".alert").delay(200).addClass("in").fadeOut(3000);
            }

        });

        /*
        Escalera
        */
        $("#E_material_id").change(function(){
            var idM =$("#E_material_id").val();
            if(idM){
                $.ajax({
                url: '{{url('cotizacion/material')}}/'+idM,
                type: 'get',
                dataType: 'json',
            })
                .done(function(data) {

                    $("#E_specification").val(data.specification)
                    $("#E_thickness").val(data.thickness)
                    $("#E_dimension").val(data.dimension)
                    $("#E_length").val(data.length)
                    $("#E_net_weight").val(data.net_weight)
                    $("#E_gross_weight").val(data.gross_weight)
                    $("#E_price").val(data.price)
                })
                .fail(function() {
                    console.log(data);
                });
            }else{
                $("#E_specification").val("")
                $("#E_thickness").val("")
                $("#E_dimension").val("")
                $("#E_length").val("")
                $("#E_net_weight").val("")
                $("#E_gross_weight").val("")
                $("#E_price").val("")
            }
        });
        $('#E_adicionar').click(function() {
            if($("#E_material_id").val() && $("#E_quantity").val()){
                $("#E_contenido").empty();
                var formData = new FormData();
                formData.append('material_id', $("#E_material_id").val());
                formData.append('cantidad', $("#E_quantity").val());
                formData.append('id_ric','{{$ric}}');
                formData.append('peso',$('#E_gross_weight').val());
                formData.append('price',$('#E_price').val());
                formData.append('name','escalera');
                $.ajax({
                    url : '{{route('cotizacion.material.cotizador')}}',
                    type : 'POST',
                    data : formData,
                    datatype:'json',
                    processData: false,  // tell jQuery not to process the data
                    contentType: false,  // tell jQuery not to set contentType
                }).done(function(data){
                    location.reload();
                    // $.each(data.material, function(index, value){
                    //     /* Vamos agregando a nuestra tabla las filas necesarias */
                    //     $("#E_contenido").append("<tr><td>" + value.material.description + "</td><td>" + value.material.specification + "</td><td>" + value.quantity + "</td><td>" + value.material.dimension + "</td><td>"+value.material.length+"</td><td>"+value.material.net_weight+"</td><td>"+value.material.gross_weight+"</td><td>"+value.material.price+"</td><td>"+value.total+"</td></tr>");
                    // });
                    // $("#peso_neto").val(data.peso_neto);
                    // $("#peso_bruto").val(data.peso_burto);
                    // $("#precio_kilo").val(data.precio_kilo);
                    // $("#total_material").val(data.total);
                }).fail(function(data){
                    var message = data.responseJSON.errors;
                    console.log(message);
                });
            }else{
                $(".alert").removeClass("in").show();
                $(".alert").delay(200).addClass("in").fadeOut(3000);
            }

        });

          /*
        registro de inspección
        */
        $("#R_material_id").change(function(){
            var idM =$("#R_material_id").val();
            if(idM){
                $.ajax({
                url: '{{url('cotizacion/material')}}/'+idM,
                type: 'get',
                dataType: 'json',
            })
                .done(function(data) {

                    $("#R_specification").val(data.specification)
                    $("#R_thickness").val(data.thickness)
                    $("#R_dimension").val(data.dimension)
                    $("#R_length").val(data.length)
                    $("#R_net_weight").val(data.net_weight)
                    $("#R_gross_weight").val(data.gross_weight)
                    $("#R_price").val(data.price)
                })
                .fail(function() {
                    console.log(data);
                });
            }else{
                $("#R_specification").val("")
                $("#R_thickness").val("")
                $("#R_dimension").val("")
                $("#R_length").val("")
                $("#R_net_weight").val("")
                $("#R_gross_weight").val("")
                $("#R_price").val("")
            }
        });
        $('#R_adicionar').click(function() {
            if($("#R_material_id").val() && $("#R_quantity").val()){
                $("#R_contenido").empty();
                var formData = new FormData();
                formData.append('material_id', $("#R_material_id").val());
                formData.append('cantidad', $("#R_quantity").val());
                formData.append('id_ric','{{$ric}}');
                formData.append('peso',$('#R_gross_weight').val());
                formData.append('price',$('#R_price').val());
                formData.append('name','registro');
                $.ajax({
                    url : '{{route('cotizacion.material.cotizador')}}',
                    type : 'POST',
                    data : formData,
                    datatype:'json',
                    processData: false,  // tell jQuery not to process the data
                    contentType: false,  // tell jQuery not to set contentType
                }).done(function(data){
                    location.reload();
                    // $.each(data.material, function(index, value){
                    //     /* Vamos agregando a nuestra tabla las filas necesarias */
                    //     $("#R_contenido").append("<tr><td>" + value.material.description + "</td><td>" + value.material.specification + "</td><td>" + value.quantity + "</td><td>" + value.material.dimension + "</td><td>"+value.material.length+"</td><td>"+value.material.net_weight+"</td><td>"+value.material.gross_weight+"</td><td>"+value.material.price+"</td><td>"+value.total+"</td></tr>");
                    // });
                    // $("#peso_neto").val(data.peso_neto);
                    // $("#peso_bruto").val(data.peso_burto);
                    // $("#precio_kilo").val(data.precio_kilo);
                    // $("#total_material").val(data.total);
                }).fail(function(data){
                    var message = data.responseJSON.errors;
                    console.log(message);
                });
            }else{
                $(".alert").removeClass("in").show();
                $(".alert").delay(200).addClass("in").fadeOut(3000);
            }

        });

        /*
        Boquillas
        */
        $("#B_material_id").change(function(){
            var idM =$("#B_material_id").val();
            if(idM){
                $.ajax({
                url: '{{url('cotizacion/material')}}/'+idM,
                type: 'get',
                dataType: 'json',
            })
                .done(function(data) {

                    $("#B_specification").val(data.specification)
                    $("#B_thickness").val(data.thickness)
                    $("#B_dimension").val(data.dimension)
                    $("#B_length").val(data.length)
                    $("#B_net_weight").val(data.net_weight)
                    $("#B_gross_weight").val(data.gross_weight)
                    $("#B_price").val(data.price)
                })
                .fail(function() {
                    console.log(data);
                });
            }else{
                $("#B_specification").val("")
                $("#B_thickness").val("")
                $("#B_dimension").val("")
                $("#B_length").val("")
                $("#B_net_weight").val("")
                $("#B_gross_weight").val("")
                $("#B_price").val("")
            }
        });
        $('#B_adicionar').click(function() {
            if($("#B_material_id").val() && $("#B_quantity").val()){
                $("#B_contenido").empty();
                var formData = new FormData();
                formData.append('material_id', $("#B_material_id").val());
                formData.append('cantidad', $("#B_quantity").val());
                formData.append('id_ric','{{$ric}}');
                formData.append('peso',$('#B_gross_weight').val());
                formData.append('price',$('#B_price').val());
                formData.append('name','boquillas');
                $.ajax({
                    url : '{{route('cotizacion.material.cotizador')}}',
                    type : 'POST',
                    data : formData,
                    datatype:'json',
                    processData: false,  // tell jQuery not to process the data
                    contentType: false,  // tell jQuery not to set contentType
                }).done(function(data){
                    location.reload();
                    // $.each(data.material, function(index, value){
                    //     /* Vamos agregando a nuestra tabla las filas necesarias */
                    //     $("#B_contenido").append("<tr><td>" + value.material.description + "</td><td>" + value.material.specification + "</td><td>" + value.quantity + "</td><td>" + value.material.dimension + "</td><td>"+value.material.length+"</td><td>"+value.material.net_weight+"</td><td>"+value.material.gross_weight+"</td><td>"+value.material.price+"</td><td>"+value.total+"</td></tr>");
                    // });
                    // $("#peso_neto").val(data.peso_neto);
                    // $("#peso_bruto").val(data.peso_burto);
                    // $("#precio_kilo").val(data.precio_kilo);
                    // $("#total_material").val(data.total);
                }).fail(function(data){
                    var message = data.responseJSON.errors;
                    console.log(message);
                });
            }else{
                $(".alert").removeClass("in").show();
                $(".alert").delay(200).addClass("in").fadeOut(3000);
            }

        });
        /*
        Mano de Obra
        */
        $("#description").change(function(){
            var formData = new FormData();
            formData.append('type', $("#description").val());
            if($("#description").val()){
                $.ajax({
                    url : '{{route('cotizacion.mano.obra')}}',
                    type : 'POST',
                    data : formData,
                    datatype:'json',
                    processData: false,  // tell jQuery not to process the data
                    contentType: false,  // tell jQuery not to set contentType
            })
                .done(function(data) {
                    $('#peso').val(data.peso_neto);
                })
                .fail(function() {
                    console.log(data);
                });
            }else{
                $("#B_specification").val("")
                $("#B_thickness").val("")
                $("#B_dimension").val("")
                $("#B_length").val("")
                $("#B_net_weight").val("")
                $("#B_gross_weight").val("")
                $("#B_price").val("")
            }
        });
        $('#M_adicionar').click(function() {
            if($("#cadencia").val() && $("#precio_hora").val()){
                var formData = new FormData();
                formData.append('description', $("#description").val());
                formData.append('precio_hora', $("#precio_hora").val());
                formData.append('id_ric','{{$ric}}');
                formData.append('peso',$('#peso').val());
                formData.append('cadencia',$('#cadencia').val());
                $.ajax({
                    url : '{{route('cotizacion.mano.obra')}}',
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

        /*
        Modal de eliminar material de cuerpo
        */
        $(".deleteC").click(function(event) {
            event.preventDefault();
            var id = $(this).data('c');
            $("#delete-action-btn-cuerpo").attr('data-tangoC',id);
            $("#delete-modal-cuerpo").modal();
        });

        $("#delete-action-btn-cuerpo").click(function(event) {
            event.preventDefault();
            var id = $(this).attr('data-tangoC');

            $.ajax({
                url: '{{url('cotizacion/delet')}}/'+id,
                type: 'DELETE',
                dataType: 'json',
            })
            .done(function(data) {
                $("#item-cuerpo-"+id).remove();
                $("#delete-modal-cuerpo").modal('hide');
                toastr.success('Se ha eliminado la información correctamente');
            })
            .fail(function() {
                console.log(data);
            });

        });

         /*
        Modal de eliminar material de tapas
        */
        $(".deleteT").click(function(event) {
            event.preventDefault();
            var id = $(this).data('t');
            $("#delete-action-btn-tapas").attr('data-tangoT',id);
            $("#delete-modal-tapas").modal();
        });

        $("#delete-action-btn-tapas").click(function(event) {
            event.preventDefault();
            var id = $(this).attr('data-tangoT');

            $.ajax({
                url: '{{url('cotizacion/delet')}}/'+id,
                type: 'DELETE',
                dataType: 'json',
            })
            .done(function(data) {
                $("#item-cuerpo-"+id).remove();
                $("#delete-modal-tapas").modal('hide');
                toastr.success('Se ha eliminado la información correctamente');
            })
            .fail(function() {
                console.log(data);
            });

        });

         /*
        Modal de eliminar material de soporte
        */
        $(".deleteS").click(function(event) {
            event.preventDefault();
            var id = $(this).data('s');
            $("#delete-action-btn-soporte").attr('data-tangoS',id);
            $("#delete-modal-soporte").modal();
        });

        $("#delete-action-btn-soporte").click(function(event) {
            event.preventDefault();
            var id = $(this).attr('data-tangoS');

            $.ajax({
                url: '{{url('cotizacion/delet')}}/'+id,
                type: 'DELETE',
                dataType: 'json',
            })
            .done(function(data) {
                $("#item-soporte-"+id).remove();
                $("#delete-modal-soporte").modal('hide');
                toastr.success('Se ha eliminado la información correctamente');
            })
            .fail(function() {
                console.log(data);
            });

        });

        /*
        Modal de eliminar material de escalera
        */
        $(".deleteE").click(function(event) {
            event.preventDefault();
            var id = $(this).data('e');
            $("#delete-action-btn-escalera").attr('data-tangoE',id);
            $("#delete-modal-escalera").modal();
        });

        $("#delete-action-btn-escalera").click(function(event) {
            event.preventDefault();
            var id = $(this).attr('data-tangoE');

            $.ajax({
                url: '{{url('cotizacion/delet')}}/'+id,
                type: 'DELETE',
                dataType: 'json',
            })
            .done(function(data) {
                $("#item-escalera-"+id).remove();
                $("#delete-modal-escalera").modal('hide');
                toastr.success('Se ha eliminado la información correctamente');
            })
            .fail(function() {
                console.log(data);
            });

        });

        /*
        Modal de eliminar material de registro
        */
        $(".deleteR").click(function(event) {
            event.preventDefault();
            var id = $(this).data('r');
            $("#delete-action-btn-registro").attr('data-tangoR',id);
            $("#delete-modal-registro").modal();
        });

        $("#delete-action-btn-registro").click(function(event) {
            event.preventDefault();
            var id = $(this).attr('data-tangoR');

            $.ajax({
                url: '{{url('cotizacion/delet')}}/'+id,
                type: 'DELETE',
                dataType: 'json',
            })
            .done(function(data) {
                $("#item-registro-"+id).remove();
                $("#delete-modal-registro").modal('hide');
                toastr.success('Se ha eliminado la información correctamente');
            })
            .fail(function() {
                console.log(data);
            });

        });

        /*
        Modal de eliminar material de boquilla
        */
        $(".deleteB").click(function(event) {
            event.preventDefault();
            var id = $(this).data('b');
            $("#delete-action-btn-boquilla").attr('data-tangoB',id);
            $("#delete-modal-boquilla").modal();
        });

        $("#delete-action-btn-boquilla").click(function(event) {
            event.preventDefault();
            var id = $(this).attr('data-tangoB');

            $.ajax({
                url: '{{url('cotizacion/delet')}}/'+id,
                type: 'DELETE',
                dataType: 'json',
            })
            .done(function(data) {
                $("#item-boquilla-"+id).remove();
                $("#delete-modal-boquilla").modal('hide');
                toastr.success('Se ha eliminado la información correctamente');
            })
            .fail(function() {
                console.log(data);
            });

        });

        /*
        Modal de eliminar mano de obra
        */
        $(".deleteM").click(function(event) {
            event.preventDefault();
            var id = $(this).data('m');
            $("#delete-action-btn-obra").attr('data-tangoM',id);
            $("#delete-modal-mano").modal();
        });

        $("#delete-action-btn-obra").click(function(event) {
            event.preventDefault();
            var id = $(this).attr('data-tangoM');

            $.ajax({
                url: '{{url('cotizacion/delet/mano')}}/'+id,
                type: 'DELETE',
                dataType: 'json',
            })
            .done(function(data) {
                console.log(data)
                $("#item-obra-"+id).remove();
                $("#delete-modal-mano").modal('hide');
                toastr.success('Se ha eliminado la información correctamente');
            })
            .fail(function() {
                console.log(data);
            });

        });


    });
</script>
@endpush

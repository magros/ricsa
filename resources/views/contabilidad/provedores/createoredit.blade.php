@extends('layouts.admin.layout')
@section('meta_title')
Editar Proveedor
@endsection

@section('page_title')
Editar Proveedor
@endsection
@section('page_action')
<a href="{{route('contabilidad.provider')}}" class="btn btn-outline-light">&lt; Regresar a Proveedor</a>
@endsection
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Editar Proveedor</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="description">Nombre</label>
                            {!! Form::text('description',old('description'),[
                            'class'=>'form-control','placeholder'=>'Nombre',
                            'autocomplete'=>'off', 'id' => 'description',
                            'data-required-error' => 'Este campo es obligatorio',
                            'required' => '', 'maxlength' => '100'
                            ]) !!}
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label for="description">Empresa</label>
                            {!! Form::text('description',old('description'),[
                            'class'=>'form-control','placeholder'=>'Empresa',
                            'autocomplete'=>'off', 'id' => 'description',
                            'data-required-error' => 'Este campo es obligatorio',
                            'required' => '', 'maxlength' => '100'
                            ]) !!}
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label for="description">Correo Electronico</label>
                            {!! Form::text('description',old('description'),[
                            'class'=>'form-control','placeholder'=>'Correo Electronico',
                            'autocomplete'=>'off', 'id' => 'description',
                            'data-required-error' => 'Este campo es obligatorio',
                            'required' => '', 'maxlength' => '100'
                            ]) !!}
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                        <label for="description">Provee</label>
                                {!! Form::select('select', ['S' => 'Acero', 'L' => 'Plomo', 'XL' => 'Cobre', '2XL'
                                => 'Niquel'], 'S', ['class' => 'form-control' ]) !!}
                                <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                        <label for="description">Calificacion</label>
                                {!! Form::select('select', ['S' => '10.00', 'L' => '9.00', 'XL' => '8.00', '2XL'
                                => '7.00', '3XL' => '6.00', '4XL' => '5.00'], 'S', ['class' => 'form-control' ]) !!}
                                <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label for="description">Costo</label>
                            {!! Form::text('description',old('description'),[
                            'class'=>'form-control','placeholder'=>'Costo',
                            'autocomplete'=>'off', 'id' => 'description',
                            'data-required-error' => 'Este campo es obligatorio',
                            'required' => '', 'maxlength' => '100'
                            ]) !!}
                            <div class="help-block with-errors"></div>
                        </div>


                        <div class="row">
                            <div class="col col-md-6 col-lg-6">
                                <button type="button" class="btn btn-info">Aceptar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('dyn_js')


<script type="text/javascript">
$(function() {

});
</script>

@endsection
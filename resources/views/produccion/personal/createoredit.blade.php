@extends('layouts.admin.layout')
@section('meta_title')
Editar Recurso
@endsection

@section('page_title')
Editar Recurso
@endsection
@section('page_action')

@endsection
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Editar Recurso</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-sm-12">
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
                            <label for="description">Categoria</label>
                            {!! Form::text('description',old('description'),[
                            'class'=>'form-control','placeholder'=>'Categoria',
                            'autocomplete'=>'off', 'id' => 'description',
                            'data-required-error' => 'Este campo es obligatorio',
                            'required' => '', 'maxlength' => '100'
                            ]) !!}
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label for="description">Correo</label>
                            {!! Form::text('description',old('description'),[
                            'class'=>'form-control','placeholder'=>'Correo',
                            'autocomplete'=>'off', 'id' => 'description',
                            'data-required-error' => 'Este campo es obligatorio',
                            'required' => '', 'maxlength' => '100'
                            ]) !!}
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label for="description">Telefono</label>
                            {!! Form::text('description',old('description'),[
                            'class'=>'form-control','placeholder'=>'Telefono',
                            'autocomplete'=>'off', 'id' => 'description',
                            'data-required-error' => 'Este campo es obligatorio',
                            'required' => '', 'maxlength' => '100'
                            ]) !!}
                            <div class="help-block with-errors"></div>
                        </div>
                        <button type="button" class="btn btn-info">Aceptar</button>
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
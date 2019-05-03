@extends('layouts.admin.layout')
@section('meta_title')
    Ver Personal
@endsection

@section('page_title')
    Ver Personal
@endsection
@section('page_action')
<a href="{{route('calidad.personal')}}" class="btn btn-outline-light">&lt; Regresar a personal</a>
@endsection
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Ver Personal</h5>
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
                            <label for="description">Horas</label>
                            {!! Form::text('description',old('description'),[
                            'class'=>'form-control','placeholder'=>'Horas',
                            'autocomplete'=>'off', 'id' => 'description',
                            'data-required-error' => 'Este campo es obligatorio',
                            'required' => '', 'maxlength' => '100'
                            ]) !!}
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label for="description">RIC</label>
                            {!! Form::text('description',old('description'),[
                            'class'=>'form-control','placeholder'=>'RIC',
                            'autocomplete'=>'off', 'id' => 'description',
                            'data-required-error' => 'Este campo es obligatorio',
                            'required' => '', 'maxlength' => '100'
                            ]) !!}
                            <div class="help-block with-errors"></div>
                        </div>


                        <div class="row justify-content-end">
                            <div class="col col-md-6 col-lg-6">
                                <button type="button" class="btn btn-danger">Guardar</button>
                            </div>
                            <div class="col col-md-6 col-lg-6">
                                <button type="button" class="btn btn-info">Cancelar</button>
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
@extends('layouts.admin.layout')
@section('meta_title')
    {{-- @if(!isset($proyect))
        Crear lista de materiales
    @else
        Editando lista de materiales - {{$proyect->name}}
    @endif
@endsection

@section('page_title')
    @if(!isset($proyect))
        Crear lista de materiales
    @else
        Editando {{$proyect->name}}
    @endif --}}
@endsection
@section('page_action')
<a href="{{route('ingenieria.proyects.index')}}" class="btn btn-white">&lt; Regresar</a>
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
                        <div class="col-4">

                        </div>
                        <div class="col-sm-8">
                            {{-- @if(!isset($material_engineering))
                                {!! Form::open(['route'=>'ingenieria.proyects.save','id'=>'user-form', 'files'=>true,'data-toggle' => 'validator',]) !!}
                            @else
                                {!! Form::model($material_engineering, [
                                    'method' => 'patch',
                                    'route' => ['ingenieria.proyects.update', $material_engineering->id],
                                    'id'=>'category-form',
                                    'files' => true,
                                    'data-toggle' => 'validator',
                                ]) !!}
                            @endif
                                <div class="form-group">
                                    <label for="name">Material</label>
                                    {!! Form::text('name',old('name'),[
                            			'class'=>'form-control','placeholder'=>'Nombre',
                            			 'autocomplete'=>'off', 'id' => 'name',
                            			 'data-required-error' => 'Este campo es obligatorio',
                            			 'required' => '', 'maxlength' => '100'
                            		]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label for="name">Catnidad</label>
                                    {!! Form::text('name',old('name'),[
                            			'class'=>'form-control','placeholder'=>'Empresa',
                            			'required'=>'', 'autocomplete'=>'off', 'id' => 'name',
                            			'data-required-error' => 'Este campo es obligatorio','maxlength' => '100'
                            		]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label for="complexity">Complejidad</label>
                                    {!! Form::email('complexity',old('complexity'),[
                            			'class'=>'form-control','placeholder'=>'E-mail de la ceunta',
                            			'required'=>'', 'autocomplete'=>'off', 'id' => 'complexity',
                            			'data-required-error' => 'Este campo es obligatorio',
                            			'data-error' => 'Introduce una dirección de correo válida',
                                        'maxlength' => '100'
                            		]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label for="phone">Teléfono</label>
                                    {!! Form::text('phone',old('phone'),[
                            			'class'=>'form-control','placeholder'=>'Teléfono',
                            			'required'=>'', 'autocomplete'=>'off', 'id' => 'phone',
                            			'data-required-error' => 'Este campo es obligatorio', 'maxlength' => '15'
                            		]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div>
                                    <button class="btn btn-lg btn-primary pull-right m-t-n-xs" type="submit"><strong>Guardar</strong></button>
                                </div>
                            {!! Form::close() !!} --}}
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

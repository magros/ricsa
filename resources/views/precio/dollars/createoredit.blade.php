@extends('layouts.admin.layout')
@section('meta_title')
    @if(!isset($dollar))
        Crear valor de la moneda
    @else
        Editando {{$dollar->name}}
    @endif
@endsection
@section('page_title')
    @if(!isset($dollar))
        Crear valor de la moneda
    @else
        Editando {{$dollar->name}}
    @endif
@endsection
@section('page_action')
<a href="{{route('precio.dollar')}}" class="btn btn-white">&lt; Regresar a monedas</a>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-8">
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
                            @if(!isset($dollar))
                                {!! Form::open(['route'=>'precio.dollar.save','id'=>'user-form', 'files'=>true,'data-toggle' => 'validator',]) !!}
                            @else
                                {!! Form::model($dollar, [
                                    'method' => 'patch',
                                    'route' => ['precio.dollar.update', $dollar->id],
                                    'id'=>'category-form',
                                    'files' => true,
                                    'data-toggle' => 'validator',
                                ]) !!}
                            @endif
                                <div class="form-group">
                                    <label for="name">Nombre</label>
                                    {!! Form::text('name',old('name'),[
                            			'class'=>'form-control','placeholder'=>'Nombre',
                            			 'autocomplete'=>'off', 'id' => 'name',
                                         'data-required-error' => 'Este campo es obligatorio',
                            			 'required' => '', 'maxlength' => '100','disabled'
                                    ]) !!}
                                    <input id="name" name="name" value="{{$dollar->name}}" class="hidden">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label for="price">Precio</label>
                                    {!! Form::text('price',old('price'),[
                            			'class'=>'form-control','placeholder'=>'Precio',
                            			'required'=>'', 'autocomplete'=>'off', 'id' => 'price',
                            			'data-required-error' => 'Este campo es obligatorio','maxlength' => '100'
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

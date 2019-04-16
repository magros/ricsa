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
                <h5>Información</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <div class="row">

                    <div class="col-sm-4">
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

                    <div class="col-sm-4">
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

                    <div class="col-sm-4">
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

                    <div class="col-sm-4">
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

                    <div class="col-sm-4">
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

                    <div class="col-sm-4">
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

                    <div class="col-sm-4">
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

                    <div class="col-sm-4">
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

                    <div class="col-sm-4">
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


    });
</script>
@endpush

@extends('layouts.admin.layout')

@section('meta_title')
Produccion Personal
@endsection

@section('page_title')
Produccion Personal
@endsection

@section('meta_extra')
<meta name="csrf-token" content="{{ csrf_token() }}">
@stop

@section('page_action')
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    + Agregar
</button>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Produccion Personal en sistema</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">

                <table class="table table-striped table-dark table-hover dataTables-users">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nombre</th>
                            <th>Categoria</th>
                            <th>Correo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr class="gradeA">
                            <td>
                                Juan
                            </td>
                            <td>
                                Soldador
                            </td>
                            <td>
                                juan@gmail.com
                            </td>
                            <td>
                                <a href="{{route('produccion.personal.create')}}" class="btn btn-outline-light">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <a href="#" class="btn btn-outline-light">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Alta Recurso</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
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
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
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
$('#myModal').modal(options)
</script>
@endpush
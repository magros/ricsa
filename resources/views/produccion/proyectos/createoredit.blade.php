@extends('layouts.admin.layout')
@section('meta_title')
Ver Recursos
@endsection

@section('page_title')
Ver Recursos
@endsection
@section('page_action')
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    + Agregar
</button>
@endsection
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Ver Recursos</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-striped table-dark table-hover dataTables-users">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Nombre</th>
                                    <th>Categoria</th>
                                    <th>Horas Asignadas</th>
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
                                        4hr
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger">Eliminar</button>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
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
                <h5 class="modal-title" id="exampleModalLabel">Agregar Recurso</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="description">Nopmbre</label>
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
                    <label for="description">RIC</label>
                    {!! Form::text('description',old('description'),[
                    'class'=>'form-control','placeholder'=>'RIC',
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
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Aceptar</button>
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

<script type="text/javascript">
$('#myModal').modal(options)
</script>

@endsection
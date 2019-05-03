@extends('layouts.admin.layout')
@section('meta_title')
Proveedores Proyectos
@endsection

@section('page_title')
Proveedores Proyectos
@endsection
@section('page_action')
<a href="{{route('calidad.personal')}}" class="btn btn-white">&lt; Regresar a materiales</a>
@endsection
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Proveedores Proyectos</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-sm-12">
                    <table class="table table-striped table-dark table-hover dataTables-users" >
                        <thead class="thead-dark">
                        <tr>
                            <th>Nombre</th>
                            <th>Empresa</th>
                            <th>Calificacion</th>
                            <th>Provee</th>
                            <th>Estatus</th>
                        </tr>
                        </thead>
                        <tbody>
                        
                            <tr class="gradeA" >
                                <td>
                                Enrique Peña
                                </td>
                                <td>
                                RICSA
                                </td>
                                <td>
                                9
                                </td>
                                <td>
                                Acero
                                </td>
                                <td>
                                <button type="button" class="btn btn-success">Pagado</button>
                                <button type="button" class="btn btn-danger">No Pagado</button>
                                </td>
                            </tr>
                        
                        </tbody>
                    </table>
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
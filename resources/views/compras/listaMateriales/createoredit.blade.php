@extends('layouts.admin.layout')
@section('meta_title')
    Agregar Material
@endsection

@section('page_title')
    Agregar Material
@endsection
@section('page_action')
<a href="{{route('compras.listmaterial')}}" class="btn btn-outline-light">&lt; Regresar a materiales</a>
@endsection
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Agregar Material</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
            <table class="table table-striped table-dark table-hover dataTables-users" >
                        <thead class="thead-dark">
                        <tr>
                            <th>Material</th>
                            <th>Cantidad</th>
                            <th>Medida</th>
                            <th>Proveedor</th>
                            <th>Fecha Estimada</th>
                        </tr>
                        </thead>
                        <tbody>
                        
                            <tr class="gradeA" >
                                <td>
                                Placas
                                </td>
                                <td>
                                6
                                </td>
                                <td>
                                3/8
                                </td>
                                <td>
                                Pedro
                                </td>
                                <td>
                                31/05/2019
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                    <a type="button" class="btn btn-info" href="#">Acepto</a>
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
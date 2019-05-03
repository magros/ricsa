@extends('layouts.admin.layout')
@section('meta_title')
    Comprar Material
@endsection

@section('page_title')
    Comprar Material
@endsection
@section('page_action')
<a href="{{route('compras.listconsumable')}}" class="btn btn-outline-light">&lt; Regresar a consumibles</a>
@endsection
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Comprar Material</h5>
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
                                Lentes
                                </td>
                                <td>
                                6
                                </td>
                                <td>
                                NA
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
                    <a type="button" class="btn btn-info" href="{{route('compras.listconsumable')}}">Acepto</a>
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
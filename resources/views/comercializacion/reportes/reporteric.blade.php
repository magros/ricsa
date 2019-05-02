@extends('layouts.admin.layout')
@section('meta_title')
Reporte de RIC
@endsection

@section('page_title')
Reporte de RIC
@endsection
@section('page_action')
<a href="{{route('calidad.personal')}}" class="btn btn-white">&lt; Regresar a materiales</a>
@endsection
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Reporte de RIC</h5>
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
                            <th>RIC</th>
                            <th>OdC</th>
                            <th>Fecha de Generacion</th>
                            <th>No Proveedor</th>
                            <th>Nombre Proveedor</th>
                            <th>Importe OdC</th>
                            <th>Fecha Financiamiento</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr class="gradeA">
                            <td>
                                RIC_N19_005
                            </td>
                            <td>
                                O_01
                            </td>
                            <td>
                                08-04-2019
                            </td>
                            <td>
                                1
                            </td>
                            <td>
                                Enrique
                            </td>
                            <td>
                                $19.00
                            </td>
                            <td>
                                08-04-2019
                            </td>
                        </tr>

                    </tbody>
                </table>


                <table class="table table-striped table-dark table-hover dataTables-users">
                    <thead class="thead-dark">
                        <tr>
                            <th>Fecha Compromiso</th>
                            <th>Fecha Replanif</th>
                            <th>Fecha Real</th>
                            <th>Dias Desv</th>
                            <th>Ctd Requisitada</th>
                            <th>Ctd Perdida</th>
                            <th>Ctd Recibida</th>
                            <th>Pendiente Liberar</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr class="gradeA">
                            <td>
                                08-04-2019
                            </td>
                            <td>
                                08-04-2019
                            </td>
                            <td>
                                08-04-2019
                            </td>
                            <td>
                                0
                            </td>
                            <td>
                                $500.00
                            </td>
                            <td>
                                $200.00
                            </td>
                            <td>
                                $200.00
                            </td>
                            <td>
                                $300.00
                            </td>
                        </tr>

                    </tbody>
                </table>

                <button type="button" class="btn btn-info">Generar</button>
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
@extends('layouts.admin.layout')
@section('meta_title')
    @if(!isset($proyect))
        Crear lista de materiales
    @else
        Editando lista de materiales
    @endif
@endsection
@section('page_title')
    @if(!isset($proyect))
        Crear lista de materiales
    @else
        Editando lista de materiales
    @endif
@endsection
@section('page_action')
<a href="{{route('ingenieria.proyect')}}" class="btn btn-white">&lt; Regresar</a>
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
                            <h2 class="text-center">Cotizado</h2>
                            <table class="table table-striped table-bordered table-hover dataTables-users" >
                                <thead>
                                <tr>
                                    <th>Materiales</th>
                                    <th>Cant</th>
                                    <th>Medida</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($material_quotation as $quotation)
                                <tr class="gradeA" id="item-{{$quotation->id}}">
                                        <td>
                                            {{$quotation->name}}
                                        </td>
                                        <td>
                                            {{$quotation->quantity}}
                                        </td>
                                        <td>
                                            {{$quotation->material->dimension}}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="col-sm-8">
                            <div class="row">
                                <h2 class="text-center">RIC_N19_005 / Equipo vertical / Cliente BPM</h2>
                            </div>
                            <table id="mytable" class="table table-striped table-bordered table-hover dataTables-users" >
                                <thead>
                                <tr>
                                    <th>Materiales</th>
                                    <th>Medida</th>
                                    <th>Inventario</th>
                                    <th>Usar</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($inventories as $inventory)
                                    <tr class="gradeA" id="item-{{$inventory->id}}">
                                        <td>
                                            {{$inventory->material->description}}
                                        </td>
                                        <td>
                                            {{$inventory->material->dimension}}
                                        </td>
                                        <td>
                                            {{$inventory->quantity}}
                                        </td>
                                        <td>
                                            <input type="checkbox" name="" value="">
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="col-sm-4">
                            <h2> Costo Estimado</h2>
                            <input placeholder="$250,000.00" disabled>
                        </div>
                        <div class="col-sm-8">
                            <h2> Costo Agregado</h2>
                            <input placeholder="$210,000.00" disabled> <br><br>
                            <div class="alert alert-danger fade">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                Llena todos los campos.
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button class="btn btn-primary" type="button">Guardar</button>
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

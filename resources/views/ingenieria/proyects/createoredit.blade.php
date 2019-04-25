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
                                            {{$quotation->material->name}}
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
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($materials as $material)
                                    <tr class="gradeA" id="item-{{$material->id}}">
                                        <td>
                                            {{$material->name}}
                                        </td>
                                        <td>
                                            {{$material->dimension}}
                                        </td>
                                        <td>
                                            {{-- {{$material->inventory->quantity}} --}}
                                        </td>
                                        <td>
                                            <input type="checkbox" name="" value="">
                                        </td>
                                        <td>

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
                        <div class="row">
                            <div class="col-sm-12">
                                <form class="form-horizontal" role="form">
                                    <div class="col-sm-6">
                                        <label>Material:</label>
                                        <input id="material" type="text" class="form-control" placeholder="Material..."><br>
                                        <label>Descripción:</label>
                                        <input id="description" type="text" class="form-control" placeholder="Descripción..."><br>
                                        <label>Marca:</label>
                                        <input id="trademark" type="text" class="form-control" placeholder="Marca..."><br>
                                        <label>Precio:</label>
                                        <input id="price" type="text" class="form-control" placeholder="Precio..."><br>
                                        <label>Magnitud:</label>
                                        <input id="magnitude" type="text" class="form-control" placeholder="Magnitud..."><br>
                                        <label>Especificacion:</label>
                                        <input id="specification" type="text" class="form-control" placeholder="Magnitud..."><br>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Tipo de recurso:</label>
                                        <input id="rc" type="text" class="form-control" placeholder="R/RC..." ><br>
                                        <label>Medida:</label>
                                        <input id="medida" type="text" class="form-control" placeholder="Medida..."> <br>
                                        <label>Peso:</label>
                                        <input id="weight" type="text" class="form-control" placeholder="Peso..." ><br>
                                        <label>Tipo de material:</label>
                                        <input id="material_type" type="text" class="form-control" placeholder="Tipo de material..." ><br>
                                        <label>Familia:</label>
                                        <input id="family" type="text" class="form-control" placeholder="Familia..." ><br>
                                        <label>Cantidad:</label>
                                        <input id="cantidad" type="text" class="form-control" placeholder="Cantidad..." ><br>
                                        <button id="adicionar" data-dismiss="alert" class="btn btn-primary" type="button">Adicionar a la tabla</button>
                                    </div>

                                </form>
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
        $('#adicionar').click(function() {
            var material = document.getElementById("material").value;
            var description = document.getElementById("description").value;
            var trademark = document.getElementById("trademark").value;
            var price = document.getElementById("price").value;
            var magnitude = document.getElementById("magnitude").value;
            var specification = document.getElementById("specification").value;
            var rc = document.getElementById("rc").value;
            var medida = document.getElementById("medida").value;
            var weight = document.getElementById("weight").value;
            var material_type = document.getElementById("material_type").value;
            var family = document.getElementById("family").value;
            var cantidad = document.getElementById("cantidad").value;
            var i = 1; //contador para asignar id al boton que borrara la fila
            var fila = '<tr id="row' + i + '"><td>' + material + '</td><td>' + medida + '</td><td>0</td><td>x</td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">Quitar</button></td></tr>'; //esto seria lo que contendria la fila
            i++;
            if(material=='' || cantidad=='' || medida==''){
                $(".alert").removeClass("in").show();
	            $(".alert").delay(200).addClass("in").fadeOut(3000);
            } else{
                $('#mytable tr:first').after(fila);
                $("#adicionados").text(""); //esta instruccion limpia el div adicioandos para que no se vayan acumulando
                var nFilas = $("#mytable tr").length;
                $("#adicionados").append(nFilas - 1);
                //le resto 1 para no contar la fila del header
                document.getElementById("cantidad").value ="";
                document.getElementById("medida").value = "";
                document.getElementById("material").value = "";
                document.getElementById("material").focus();
            }
        });
        $(document).on('click', '.btn_remove', function() {
            var button_id = $(this).attr("id");
            //cuando da click obtenemos el id del boton
            $('#row' + button_id + '').remove(); //borra la fila
            //limpia el para que vuelva a contar las filas de la tabla
            $("#adicionados").text("");
            var nFilas = $("#mytable tr").length;
            $("#adicionados").append(nFilas - 1);
        });
    });
</script>

@endsection

@extends('layouts.admin.layout')

@section('meta_title')
    Dashboard
@endsection

@section('content')

@section('meta_extra')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('meta_title')
    Crear nueva cotizacion
@endsection

@section('page_title')
    Crear nueva cotizacion
@endsection

@section('page_action')
    <a href="#" class="btn btn-white">&lt; Regresar al índice</a>
@endsection


@push('styles')
    {!! HTML::style('static/bower_components/Croppie/croppie.css') !!}
@endpush
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
                    <div class="col-sm-6">

                        <div class="form-group">
                            <label for="">cliente:</label>
                            <input type="text" class="form-control">
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label for="status">Cotizacion:</label>
                            <input type="text" class="form-control">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label for="featured">Equipo:</label>
                            <input type="text" class="form-control" name="" id="">
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label for="cropme">Fecha de presupuesto:</label>
                            <input type="date" class="form-control" name="" id="">
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label for="cropme">Elaborado Por:</label>
                            <input type="text" class="form-control" value="{{auth()->user()->full_name}}"  disabled>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="clearfix"></div>

                        {{-- <div class="form-group">
                            <button class="btn btn-sm btn-primary pull-left m-t-n-xs" type="submit"><strong>Guardar</strong></button>
                        </div> --}}

                    </div>

                    <div class="col-sm-6">

                        <div class="form-group">
                            <label for="">Numero de pedido:</label>
                            <input type="text" class="form-control">
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label for="status">Fecha de pedido:</label>
                            <input type="date" class="form-control">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label for="featured">Fecha de entrega:</label>
                            <input type="date" class="form-control" name="" id="">
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label for="cropme">Lugar de entrega:</label>
                            <input type="text" class="form-control" name="" id="">
                            <div class="help-block with-errors"></div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-body">

        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Cuerpo</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <button id="cuerpo" class="btn btn-success" type="button">+</button>
                        </div>
                    </div>
                    <div class="ibox-content">

                        <div id="c" class="row">

                            <form>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="">Descripcion:</label>
                                        <input id="desc" type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="">Especificacion material:</label>
                                        <input id="esp" type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="">Cantidad:</label>
                                        <input id="cant" type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="">Espesor pulgada:</label>
                                        <input id="espp" type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="">D.i mm:</label>
                                        <input id="di" type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="">Long mm:</label>
                                        <input id="long" type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="">Peso n. Kg:</label>
                                        <input id="peson" type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="">Peso b. Kg:</label>
                                        <input id="pesob" type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="">P.u. $/Kg:</label>
                                        <input id="pu" type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="">Total dolares:</label>
                                        <input id="total" type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            </form>
                            <div class="col-sm-12" style="border-block-start: solid">
                                <table  id="mytable" class="table table-bordered table-hover ">
                                    <tr>
                                        <th>Descripcion</th>
                                        <th>Especificacion material</th>
                                        <th>Cantidad</th>
                                        <th>Espesor pulgada</th>
                                        <th> D.i mm</th>
                                        <th>Long mm:</th>
                                        <th>Peso n. Kg:</th>
                                        <th>Peso b. Kg:</th>
                                        <th>P.u. $/Kg:</th>
                                        <th>Total dolares</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Tapas</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <button id="tapas" class="btn btn-success" type="button">+</button>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="row">

                            <form>
                            <div class="col-sm-3">
                                <div class="form-group">
                                        <label for="">Descripcion:</label>
                                        <input id="tdesc" type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="">Especificacion material:</label>
                                        <input id="tesp" type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                        <label for="">Cantidad:</label>
                                        <input id="tcant" type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                        <label for="">Espesor pulgada:</label>
                                        <input id="tespp" type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="">D.i mm:</label>
                                        <input id="tdi" type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="">Long mm:</label>
                                        <input id="tlong" type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="">Peso n. Kg:</label>
                                        <input id="tpeson" type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="">Peso b. Kg:</label>
                                        <input id="tpesob" type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="">P.u. $/Kg:</label>
                                        <input id="tpu" type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="">Total dolares:</label>
                                        <input id="ttotal" type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            </form>
                            <div class="col-sm-12" style="border-block-start: solid">
                                <table  id="tmytable" class="table table-bordered table-hover ">
                                    <tr>
                                        <th>Descripcion</th>
                                        <th>Especificacion material</th>
                                        <th>Cantidad</th>
                                        <th>Espesor pulgada</th>
                                        <th> D.i mm</th>
                                        <th>Long mm:</th>
                                        <th>Peso n. Kg:</th>
                                        <th>Peso b. Kg:</th>
                                        <th>P.u. $/Kg:</th>
                                        <th>Total dolares</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </table>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Soportes</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <button id="soportes" class="btn btn-success" type="button">+</button>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="row">

                            <form>
                            <div class="col-sm-3">
                                <div class="form-group">
                                        <label for="">Descripcion:</label>
                                        <input id="sdesc" type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="">Especificacion material:</label>
                                        <input id="sesp" type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                        <label for="">Cantidad:</label>
                                        <input id="scant" type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                        <label for="">Espesor pulgada:</label>
                                        <input id="sespp" type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="">D.i mm:</label>
                                        <input id="sdi" type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="">Long mm:</label>
                                        <input id="slong" type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="">Peso n. Kg:</label>
                                        <input id="speson" type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="">Peso b. Kg:</label>
                                        <input id="spesob" type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="">P.u. $/Kg:</label>
                                        <input id="spu" type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="">Total dolares:</label>
                                        <input id="stotal" type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            </form>
                            <div class="col-sm-12" style="border-block-start: solid">
                                <table  id="smytable" class="table table-bordered table-hover ">
                                    <tr>
                                        <th>Descripcion</th>
                                        <th>Especificacion material</th>
                                        <th>Cantidad</th>
                                        <th>Espesor pulgada</th>
                                        <th> D.i mm</th>
                                        <th>Long mm:</th>
                                        <th>Peso n. Kg:</th>
                                        <th>Peso b. Kg:</th>
                                        <th>P.u. $/Kg:</th>
                                        <th>Total dolares</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </table>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Escaleras</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <button id="escaleras" class="btn btn-success" type="button">+</button>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="row">

                            <form>
                            <div class="col-sm-3">
                                <div class="form-group">
                                        <label for="">Descripcion:</label>
                                        <input id="edesc" type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="">Especificacion material:</label>
                                        <input id="eesp" type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                        <label for="">Cantidad:</label>
                                        <input id="ecant" type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                        <label for="">Espesor pulgada:</label>
                                        <input id="eespp" type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="">D.i mm:</label>
                                        <input id="edi" type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="">Long mm:</label>
                                        <input id="elong" type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="">Peso n. Kg:</label>
                                        <input id="epeson" type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="">Peso b. Kg:</label>
                                        <input id="epesob" type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="">P.u. $/Kg:</label>
                                        <input id="epu" type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="">Total dolares:</label>
                                        <input id="etotal" type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            </form>
                            <div class="col-sm-12" style="border-block-start: solid">
                                <table  id="emytable" class="table table-bordered table-hover ">
                                    <tr>
                                        <th>Descripcion</th>
                                        <th>Especificacion material</th>
                                        <th>Cantidad</th>
                                        <th>Espesor pulgada</th>
                                        <th> D.i mm</th>
                                        <th>Long mm:</th>
                                        <th>Peso n. Kg:</th>
                                        <th>Peso b. Kg:</th>
                                        <th>P.u. $/Kg:</th>
                                        <th>Total dolares</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </table>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Registro de inspección</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <button id="registro" class="btn btn-success" type="button">+</button>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="row">

                            <form>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                            <label for="">Descripcion:</label>
                                            <input id="rdesc" type="text" class="form-control">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="">Especificacion material:</label>
                                            <input id="resp" type="text" class="form-control">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                            <label for="">Cantidad:</label>
                                            <input id="rcant" type="text" class="form-control">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                            <label for="">Espesor pulgada:</label>
                                            <input id="respp" type="text" class="form-control">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="">D.i mm:</label>
                                            <input id="rdi" type="text" class="form-control">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="">Long mm:</label>
                                            <input id="rlong" type="text" class="form-control">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="">Peso n. Kg:</label>
                                            <input id="rpeson" type="text" class="form-control">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="">Peso b. Kg:</label>
                                            <input id="rpesob" type="text" class="form-control">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="">P.u. $/Kg:</label>
                                            <input id="rpu" type="text" class="form-control">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="">Total dolares:</label>
                                            <input id="rtotal" type="text" class="form-control">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </form>
                            <div class="col-sm-12" style="border-block-start: solid">
                                <table  id="rmytable" class="table table-bordered table-hover ">
                                    <tr>
                                        <th>Descripcion</th>
                                        <th>Especificacion material</th>
                                        <th>Cantidad</th>
                                        <th>Espesor pulgada</th>
                                        <th> D.i mm</th>
                                        <th>Long mm:</th>
                                        <th>Peso n. Kg:</th>
                                        <th>Peso b. Kg:</th>
                                        <th>P.u. $/Kg:</th>
                                        <th>Total dolares</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </table>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Boquillas</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="row">

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="">Descripcion</label>
                                    <input type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="">Especificacion material:</label>
                                    <input type="text" name="" id="" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="">Cantidada:</label>
                                    <input type="text" name="" id="" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="">Esp pulg:</label>
                                    <input type="text" name="" id="" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="">D.i mm:</label>
                                    <input type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="">Long mm:</label>
                                    <input type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="">Peso n. Kg:</label>
                                    <input type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="">Peso b. Kg:</label>
                                    <input type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="">P.u. $/Kg:</label>
                                    <input type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="">Total dolares:</label>
                                    <input type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <div class="panel-footer">

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="">Costo materiales:</label>
                    <input type="text" name="" id="" class="form-control" disabled>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="panel panel-default">

    <div class="panel-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">

                    <div class="ibox-title">
                        <h5>Mano de obra</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>

                    <div class="ibox-content">
                        <div class="row">

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="">Descripcion</label>
                                    <input type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="">$/h</label>
                                    <input type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="">Peso neto</label>
                                    <input type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="">Cadencia</label>
                                    <input type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" disabled>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" disabled>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" disabled>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel-footer">

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="">Costo Mano de obra:</label>
                    <input type="text" name="" id="" class="form-control" disabled>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>


    </div>

</div>

<div class="panel panel-default">

    <div class="panel-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">

                    <div class="ibox-title">
                        <h5>Consumibles y pruebas</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>

                    <div class="ibox-content">
                        <div class="row">

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="">Descripcion</label>
                                    <input type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="">?????</label>
                                    <input type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="">Cantidad</label>
                                    <input type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" disabled>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" disabled>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" disabled>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel-footer">

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="">Costo de consumibles y pruebas:</label>
                    <input type="text" name="" id="" class="form-control" disabled>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>


    </div>

</div>

<div class="panel panel-default">

    <div class="panel-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">

                    <div class="ibox-title">
                        <h5>Costo de fabricacion</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>

                    <div class="ibox-content">
                        <div class="row">

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Descripcion</label>
                                    <input type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">%</label>
                                    <input type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" disabled>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" disabled>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel-footer">

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="">Costo de consumibles y pruebas:</label>
                    <input type="text" name="" id="" class="form-control" disabled>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>


    </div>

</div>

<div class="panel panel-default">

    <div class="panel-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">

                    <div class="ibox-title">
                        <h5>Precio de venta</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="panel-footer">

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    {{-- <label for="">Costo de consumible:</label> --}}
                    <input type="text" name="" id="" class="form-control" disabled>
                    <div class="help-block with-errors"></div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    {{-- <label for="">Costo de consumibles y pruebas:</label> --}}
                    <input type="text" name="" id="" class="form-control" disabled>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>


    </div>

</div>
@endsection

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            //obtenemos el valor de los input
            var cuerpo = [];
            var tapas = [];
            var soportes = [];
            var escaleras = [];
            var registros = [];

            $('#cuerpo').click(function() {
                var descripcion = document.getElementById("desc").value;
                var apellido = document.getElementById("esp").value;
                var cantidad = document.getElementById("cant").value;
                var espesorPulgada = document.getElementById('espp').value;
                var di = document.getElementById('di').value;
                var long = document.getElementById('long').value;
                var pesoN = document.getElementById('peson').value;
                var pesoB = document.getElementById('pesob').value;
                var pu = document.getElementById('pu').value;
                var total = document.getElementById('total').value;
                var i = 1; //contador para asignar id al boton que borrara la fila
                var fila = '<tr id="row' + i + '"><td>' + descripcion + '</td><td>' + apellido + '</td><td>' + cantidad + '</td><td>' + espesorPulgada + '</td><td>' + di + '</td><td>' + long + '</td><td>' + pesoN + '</td><td>' + pesoB + '</td><td>' + pu + '</td><td>' + total + '</td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">Quitar</button></td></tr>'; //esto seria lo que contendria la fila
                for(var z = 0; z<=10; z++){
                    switch(z){
                        case 1:
                            cuerpo[z]=descripcion
                        break
                        case 2:
                            cuerpo[z]=apellido
                        break
                        case 3:
                            cuerpo[z]=cantidad
                        break
                        case 4:
                            cuerpo[z]=espesorPulgada
                        break
                        case 5:
                            cuerpo[z]=di
                        break
                        case 6:
                            cuerpo[z]=long
                        break
                        case 7:
                            cuerpo[z]=pesoN
                        break
                        case 8:
                            cuerpo[z]=pesoB
                        break
                        case 9:
                            cuerpo[z]=pu
                        break
                        case 10:
                            cuerpo[z]=total
                        break
                    }
                }
                i++;

                $('#mytable tr:first').after(fila);
                    $("#adicionados").text(""); //esta instruccion limpia el div adicioandos para que no se vayan acumulando
                    var nFilas = $("#mytable tr").length;
                    $("#adicionados").append(nFilas - 1);
                    //le resto 1 para no contar la fila del header
                    var descripcion = document.getElementById('desc').value = "";
                    var apellido = document.getElementById('esp').value = "";
                    var cantidad = document.getElementById('cant').value = "";
                    var espesorPulgada = document.getElementById('espp').value = "";
                    var di = document.getElementById('di').value = "";
                    var long = document.getElementById('long').value = "";
                    var pesoN = document.getElementById('peson').value = "";
                    var pesoB = document.getElementById('pesob').value = "";
                    var pu = document.getElementById('pu').value = "";
                    var total = document.getElementById('total').value = "";
                        document.getElementById('desc').focus();
            });
            $(document).on('click', '.btn_remove', function() {
                var button_id = $(this).attr("id");
                for(var z=0; z<11; z++){
                    switch(z){
                        case 1:
                            var descripcion = document.getElementById("desc").value = cuerpo[z];
                        break
                        case 2:
                            var apellido = document.getElementById("esp").value = cuerpo[z];
                        break
                        case 3:
                            var cantidad = document.getElementById("cant").value = cuerpo[z];
                        break
                        case 4:
                            var cantidad = document.getElementById("espp").value = cuerpo[z];
                        break
                        case 5:
                            var cantidad = document.getElementById("di").value = cuerpo[z];
                        break
                        case 6:
                            var cantidad = document.getElementById("long").value = cuerpo[z];
                        break
                        case 7:
                            var cantidad = document.getElementById("peson").value = cuerpo[z];
                        break
                        case 8:
                            var cantidad = document.getElementById("pesob").value = cuerpo[z];
                        break
                        case 9:
                            var cantidad = document.getElementById("pu").value = cuerpo[z];
                        break
                        case 10:
                            var cantidad = document.getElementById("total").value = cuerpo[z];
                        break
                    }
                }
                //cuando da click obtenemos el id del boton
                $('#row' + button_id + '').remove(); //borra la fila
                //limpia el para que vuelva a contar las filas de la tabla
                $("#adicionados").text("");
                var nFilas = $("#mytable tr").length;
                $("#adicionados").append(nFilas - 1);
            });

            $('#tapas').click(function(){

                var descripcion = document.getElementById('tdesc').value;
                var apellido = document.getElementById('tesp').value;
                var cantidad = document.getElementById('tcant').value;
                var espesorPulgada = document.getElementById('tespp').value;
                var di = document.getElementById('tdi').value;
                var long = document.getElementById('tlong').value;
                var pesoN = document.getElementById('tpeson').value;
                var pesoB = document.getElementById('tpesob').value;
                var pu = document.getElementById('tpu').value;
                var total = document.getElementById('ttotal').value;
                var i = 1; //contador para asignar id al boton que borrara la fila
                var fila = '<tr id="trow' + i + '"><td>' + descripcion + '</td><td>' + apellido + '</td><td>' + cantidad + '</td><td>' + espesorPulgada + '</td><td>' + di + '</td><td>' + long + '</td><td>' + pesoN + '</td><td>' + pesoB + '</td><td>' + pu + '</td><td>' + total + '</td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger tbtn_remove">Quitar</button></td></tr>'; //esto seria lo que contendria la fila
                for(var z = 0; z<=10; z++){
                    switch(z){
                        case 1:
                            tapas[z]=descripcion
                        break
                        case 2:
                            tapas[z]=apellido
                        break
                        case 3:
                            tapas[z]=cantidad
                        break
                        case 4:
                            tapas[z]=espesorPulgada
                        break
                        case 5:
                            tapas[z]=di
                        break
                        case 6:
                            tapas[z]=long
                        break
                        case 7:
                            tapas[z]=pesoN
                        break
                        case 8:
                            tapas[z]=pesoB
                        break
                        case 9:
                            tapas[z]=pu
                        break
                        case 10:
                            tapas[z]=total
                        break
                    }
                }
                i++;
                $('#tmytable tr:first').after(fila);
                    $("#adicionados").text(""); //esta instruccion limpia el div adicioandos para que no se vayan acumulando
                    var nFilas = $("#tmytable tr").length;
                    $("#adicionados").append(nFilas - 1);
                    //le resto 1 para no contar la fila del header
                    var descripcion = document.getElementById('tdesc').value = "";
                    var apellido = document.getElementById('tesp').value = "";
                    var cantidad = document.getElementById('tcant').value = "";
                    var espesorPulgada = document.getElementById('tespp').value = "";
                    var di = document.getElementById('tdi').value = "";
                    var long = document.getElementById('tlong').value = "";
                    var pesoN = document.getElementById('tpeson').value = "";
                    var pesoB = document.getElementById('tpesob').value = "";
                    var pu = document.getElementById('tpu').value = "";
                    var total = document.getElementById('ttotal').value = "";
                        document.getElementById('tdesc').focus();

            });
            $(document).on('click', '.tbtn_remove', function() {
                var button_id = $(this).attr("id");
                for(var z=0; z<11; z++){
                    switch(z){
                        case 1:
                            var descripcion = document.getElementById("tdesc").value = tapas[z];
                        break
                        case 2:
                            var apellido = document.getElementById("tesp").value = tapas[z];
                        break
                        case 3:
                            var cantidad = document.getElementById("tcant").value = tapas[z];
                        break
                        case 4:
                            var cantidad = document.getElementById("tespp").value = tapas[z];
                        break
                        case 5:
                            var cantidad = document.getElementById("tdi").value = tapas[z];
                        break
                        case 6:
                            var cantidad = document.getElementById("tlong").value = tapas[z];
                        break
                        case 7:
                            var cantidad = document.getElementById("tpeson").value = tapas[z];
                        break
                        case 8:
                            var cantidad = document.getElementById("tpesob").value = tapas[z];
                        break
                        case 9:
                            var cantidad = document.getElementById("tpu").value = tapas[z];
                        break
                        case 10:
                            var cantidad = document.getElementById("ttotal").value = tapas[z];
                        break
                    }
                }
                //cuando da click obtenemos el id del boton
                $('#trow' + button_id + '').remove(); //borra la fila
                //limpia el para que vuelva a contar las filas de la tabla
                $("#adicionados").text("");
                var nFilas = $("#tmytable tr").length;
                $("#adicionados").append(nFilas - 1);
            });

            $('#soportes').click(function(){
                var descripcion = document.getElementById('sdesc').value;
                var apellido = document.getElementById('sesp').value;
                var cantidad = document.getElementById('scant').value;
                var espesorPulgada = document.getElementById('sespp').value;
                var di = document.getElementById('sdi').value;
                var long = document.getElementById('slong').value;
                var pesoN = document.getElementById('speson').value;
                var pesoB = document.getElementById('spesob').value;
                var pu = document.getElementById('spu').value;
                var total = document.getElementById('stotal').value;
                var i = 1; //contador para asignar id al boton que borrara la fila
                var fila = '<tr id="srow' + i + '"><td>' + descripcion + '</td><td>' + apellido + '</td><td>' + cantidad + '</td><td>' + espesorPulgada + '</td><td>' + di + '</td><td>' + long + '</td><td>' + pesoN + '</td><td>' + pesoB + '</td><td>' + pu + '</td><td>' + total + '</td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger sbtn_remove">Quitar</button></td></tr>'; //esto seria lo que contendria la fila
                for(var z = 0; z<=10; z++){
                    switch(z){
                        case 1:
                            soportes[z]=descripcion
                        break
                        case 2:
                            soportes[z]=apellido
                        break
                        case 3:
                            soportes[z]=cantidad
                        break
                        case 4:
                            soportes[z]=espesorPulgada
                        break
                        case 5:
                            soportes[z]=di
                        break
                        case 6:
                            soportes[z]=long
                        break
                        case 7:
                            soportes[z]=pesoN
                        break
                        case 8:
                            soportes[z]=pesoB
                        break
                        case 9:
                            soportes[z]=pu
                        break
                        case 10:
                            soportes[z]=total
                        break
                    }
                }
                i++;
                $('#smytable tr:first').after(fila);
                    $("#adicionados").text(""); //esta instruccion limpia el div adicioandos para que no se vayan acumulando
                    var nFilas = $("#smytable tr").length;
                    $("#adicionados").append(nFilas - 1);
                    //le resto 1 para no contar la fila del header
                    var descripcion = document.getElementById('sdesc').value = "";
                    var apellido = document.getElementById('sesp').value = "";
                    var cantidad = document.getElementById('scant').value = "";
                    var espesorPulgada = document.getElementById('sespp').value = "";
                    var di = document.getElementById('sdi').value = "";
                    var long = document.getElementById('slong').value = "";
                    var pesoN = document.getElementById('speson').value = "";
                    var pesoB = document.getElementById('spesob').value = "";
                    var pu = document.getElementById('spu').value = "";
                    var total = document.getElementById('stotal').value = "";
                        document.getElementById('sdesc').focus();
            });
            $(document).on('click','.sbtn_remove',function(){
                var button_id = $(this).attr("id");
                for(var z=0; z<11; z++){
                    switch(z){
                        case 1:
                            var descripcion = document.getElementById("sdesc").value = soportes[z];
                        break
                        case 2:
                            var apellido = document.getElementById("sesp").value = soportes[z];
                        break
                        case 3:
                            var cantidad = document.getElementById("scant").value = soportes[z];
                        break
                        case 4:
                            var cantidad = document.getElementById("sespp").value = soportes[z];
                        break
                        case 5:
                            var cantidad = document.getElementById("sdi").value = soportes[z];
                        break
                        case 6:
                            var cantidad = document.getElementById("slong").value = soportes[z];
                        break
                        case 7:
                            var cantidad = document.getElementById("speson").value = soportes[z];
                        break
                        case 8:
                            var cantidad = document.getElementById("spesob").value = soportes[z];
                        break
                        case 9:
                            var cantidad = document.getElementById("spu").value = soportes[z];
                        break
                        case 10:
                            var cantidad = document.getElementById("stotal").value = soportes[z];
                        break
                    }
                }
                //cuando da click obtenemos el id del boton
                $('#srow' + button_id + '').remove(); //borra la fila
                //limpia el para que vuelva a contar las filas de la tabla
                $("#adicionados").text("");
                var nFilas = $("#smytable tr").length;
                $("#adicionados").append(nFilas - 1);
            });

            $('#escaleras').click(function(){
                var descripcion = document.getElementById('edesc').value;
                var apellido = document.getElementById('eesp').value;
                var cantidad = document.getElementById('ecant').value;
                var espesorPulgada = document.getElementById('eespp').value;
                var di = document.getElementById('edi').value;
                var long = document.getElementById('elong').value;
                var pesoN = document.getElementById('epeson').value;
                var pesoB = document.getElementById('epesob').value;
                var pu = document.getElementById('epu').value;
                var total = document.getElementById('etotal').value;
                var i = 1; //contador para asignar id al boton que borrara la fila
                var fila = '<tr id="erow' + i + '"><td>' + descripcion + '</td><td>' + apellido + '</td><td>' + cantidad + '</td><td>' + espesorPulgada + '</td><td>' + di + '</td><td>' + long + '</td><td>' + pesoN + '</td><td>' + pesoB + '</td><td>' + pu + '</td><td>' + total + '</td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger ebtn_remove">Quitar</button></td></tr>'; //esto seria lo que contendria la fila
                for(var z = 0; z<=10; z++){
                    switch(z){
                        case 1:
                            escaleras[z]=descripcion
                        break
                        case 2:
                            escaleras[z]=apellido
                        break
                        case 3:
                            escaleras[z]=cantidad
                        break
                        case 4:
                            escaleras[z]=espesorPulgada
                        break
                        case 5:
                            escaleras[z]=di
                        break
                        case 6:
                            escaleras[z]=long
                        break
                        case 7:
                            escaleras[z]=pesoN
                        break
                        case 8:
                            escaleras[z]=pesoB
                        break
                        case 9:
                            escaleras[z]=pu
                        break
                        case 10:
                            escaleras[z]=total
                        break
                    }
                }
                i++;
                $('#emytable tr:first').after(fila);
                    $("#adicionados").text(""); //esta instruccion limpia el div adicioandos para que no se vayan acumulando
                    var nFilas = $("#emytable tr").length;
                    $("#adicionados").append(nFilas - 1);
                    //le resto 1 para no contar la fila del header
                    var descripcion = document.getElementById('edesc').value = "";
                    var apellido = document.getElementById('eesp').value = "";
                    var cantidad = document.getElementById('ecant').value = "";
                    var espesorPulgada = document.getElementById('eespp').value = "";
                    var di = document.getElementById('edi').value = "";
                    var long = document.getElementById('elong').value = "";
                    var pesoN = document.getElementById('epeson').value = "";
                    var pesoB = document.getElementById('epesob').value = "";
                    var pu = document.getElementById('epu').value = "";
                    var total = document.getElementById('etotal').value = "";
                        document.getElementById('edesc').focus();
            });
            $(document).on('click','.ebtn_remove',function(){
                var button_id = $(this).attr("id");
                for(var z=0; z<11; z++){
                    switch(z){
                        case 1:
                            var descripcion = document.getElementById("edesc").value = escaleras[z];
                        break
                        case 2:
                            var apellido = document.getElementById("eesp").value = escaleras[z];
                        break
                        case 3:
                            var cantidad = document.getElementById("ecant").value = escaleras[z];
                        break
                        case 4:
                            var cantidad = document.getElementById("eespp").value = escaleras[z];
                        break
                        case 5:
                            var cantidad = document.getElementById("edi").value = escaleras[z];
                        break
                        case 6:
                            var cantidad = document.getElementById("elong").value = escaleras[z];
                        break
                        case 7:
                            var cantidad = document.getElementById("epeson").value = escaleras[z];
                        break
                        case 8:
                            var cantidad = document.getElementById("epesob").value = escaleras[z];
                        break
                        case 9:
                            var cantidad = document.getElementById("epu").value = escaleras[z];
                        break
                        case 10:
                            var cantidad = document.getElementById("etotal").value = escaleras[z];
                        break
                    }
                }
                //cuando da click obtenemos el id del boton
                $('#erow' + button_id + '').remove(); //borra la fila
                //limpia el para que vuelva a contar las filas de la tabla
                $("#adicionados").text("");
                var nFilas = $("#emytable tr").length;
                $("#adicionados").append(nFilas - 1);
            });

            $('#registro').click(function(){
                var descripcion = document.getElementById('rdesc').value;
                var apellido = document.getElementById('resp').value;
                var cantidad = document.getElementById('rcant').value;
                var espesorPulgada = document.getElementById('respp').value;
                var di = document.getElementById('rdi').value;
                var long = document.getElementById('rlong').value;
                var pesoN = document.getElementById('rpeson').value;
                var pesoB = document.getElementById('rpesob').value;
                var pu = document.getElementById('rpu').value;
                var total = document.getElementById('rtotal').value;
                var i = 1; //contador para asignar id al boton que borrara la fila
                var fila = '<tr id="rrow' + i + '"><td>' + descripcion + '</td><td>' + apellido + '</td><td>' + cantidad + '</td><td>' + espesorPulgada + '</td><td>' + di + '</td><td>' + long + '</td><td>' + pesoN + '</td><td>' + pesoB + '</td><td>' + pu + '</td><td>' + total + '</td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger rbtn_remove">Quitar</button></td></tr>'; //esto seria lo que contendria la fila
                for(var z = 0; z<=10; z++){
                    switch(z){
                        case 1:
                            registros[z]=descripcion
                        break
                        case 2:
                            registros[z]=apellido
                        break
                        case 3:
                            registros[z]=cantidad
                        break
                        case 4:
                            registros[z]=espesorPulgada
                        break
                        case 5:
                            registros[z]=di
                        break
                        case 6:
                            registros[z]=long
                        break
                        case 7:
                            registros[z]=pesoN
                        break
                        case 8:
                            registros[z]=pesoB
                        break
                        case 9:
                            registros[z]=pu
                        break
                        case 10:
                            registros[z]=total
                        break
                    }
                }
                i++;
                $('#rmytable tr:first').after(fila);
                    $("#adicionados").text(""); //esta instruccion limpia el div adicioandos para que no se vayan acumulando
                    var nFilas = $("#rmytable tr").length;
                    $("#adicionados").append(nFilas - 1);
                    //le resto 1 para no contar la fila del header
                    var descripcion = document.getElementById('rdesc').value = "";
                    var apellido = document.getElementById('resp').value = "";
                    var cantidad = document.getElementById('rcant').value = "";
                    var espesorPulgada = document.getElementById('respp').value = "";
                    var di = document.getElementById('rdi').value = "";
                    var long = document.getElementById('rlong').value = "";
                    var pesoN = document.getElementById('rpeson').value = "";
                    var pesoB = document.getElementById('rpesob').value = "";
                    var pu = document.getElementById('rpu').value = "";
                    var total = document.getElementById('rtotal').value = "";
                        document.getElementById('rdesc').focus();
            });
            $(document).on('click','.rbtn_remove',function(){
                var button_id = $(this).attr("id");
                for(var z=0; z<11; z++){
                    switch(z){
                        case 1:
                            var descripcion = document.getElementById("rdesc").value = registros[z];
                        break
                        case 2:
                            var apellido = document.getElementById("resp").value = registros[z];
                        break
                        case 3:
                            var cantidad = document.getElementById("rcant").value = registros[z];
                        break
                        case 4:
                            var cantidad = document.getElementById("respp").value = registros[z];
                        break
                        case 5:
                            var cantidad = document.getElementById("rdi").value = registros[z];
                        break
                        case 6:
                            var cantidad = document.getElementById("rlong").value = registros[z];
                        break
                        case 7:
                            var cantidad = document.getElementById("rpeson").value = registros[z];
                        break
                        case 8:
                            var cantidad = document.getElementById("rpesob").value = registros[z];
                        break
                        case 9:
                            var cantidad = document.getElementById("rpu").value = registros[z];
                        break
                        case 10:
                            var cantidad = document.getElementById("rtotal").value = registros[z];
                        break
                    }
                }
                //cuando da click obtenemos el id del boton
                $('#rrow' + button_id + '').remove(); //borra la fila
                //limpia el para que vuelva a contar las filas de la tabla
                $("#adicionados").text("");
                var nFilas = $("#rmytable tr").length;
                $("#adicionados").append(nFilas - 1);
            });
        });

    </script>

@endpush


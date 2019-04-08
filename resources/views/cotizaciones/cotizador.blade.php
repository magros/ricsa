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
                            <label for="cropme">Fecha de presupuesto:</label>
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

                            <div class="form-group">
                                <label for="cropme">Fecha de presupuesto:</label>
                                <input type="text" class="form-control" value="{{auth()->user()->full_name}}"  disabled>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="clearfix"></div>

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
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="row">

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="">Descripcion:</label>
                                    <input type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="">Especificacion material:</label>
                                    <input type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="">Cantidad:</label>
                                    <input type="text" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="">Espesor pulgada:</label>
                                    <input type="text" class="form-control">
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

        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Tapas</h5>
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

        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Soportes</h5>
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

        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Escaleras</h5>
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

        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Registro de inspección</h5>
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
    <!-- Data Tables -->
    {!! HTML::script('static/admin/js/plugins/dataTables/jquery.dataTables.js') !!}
    {!! HTML::script('static/admin/js/plugins/dataTables/dataTables.bootstrap.js') !!}
    {!! HTML::script('static/admin/js/plugins/dataTables/dataTables.responsive.js') !!}
    {!! HTML::script('static/admin/js/plugins/dataTables/dataTables.tableTools.min.js') !!}

    <script type="text/javascript">

    </script>

@endpush


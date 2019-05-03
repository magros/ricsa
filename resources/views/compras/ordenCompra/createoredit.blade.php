@extends('layouts.admin.layout')
@section('meta_title')
    Ver PDF
@endsection

@section('page_title')
    Ver PDF
@endsection
@section('page_action')
<a href="{{route('compras.ordershopp')}}" class="btn btn-outline-light">&lt; Regresar a Orden de Compra</a>
@endsection
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Ver PDF</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                    <a type="button" class="btn btn-info" href="#">Imprimir</a>
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
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

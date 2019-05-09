@extends('layouts.admin.layout')

@section('meta_title')
    Cotizaciones
@endsection

@section('page_title')
    Cotizaciones
@endsection

@section('meta_extra')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop

@section('page_action')
    <a href="{{route('cotizacion.create')}}" class="btn btn-primary">+ Crear cotizacion</a>
@endsection

@section('content')

    <quoting-component :materials="{{json_encode($materials->toArray())}}" :ric-id="{{$ric}}"></quoting-component>

@endsection

@push('scripts')
@endpush

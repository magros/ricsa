@extends('layouts.admin.layout')

@section('meta_title')
    Dashboard
@endsection

@section('content')
   <h1>Bienvenido Cotizador: {{auth()->user()->full_name}}</h1>

@endsection

@push('scripts')

@endpush

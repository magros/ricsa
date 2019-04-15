@extends('layouts.admin.layout')

@section('meta_title')
    Dashboard
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Categorías en sistema</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">

                <table class="table table-striped table-bordered table-hover dataTables-contracts" >
                    <thead>
                    <tr>
                        <th>No de propuesta</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Direccion</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    {{-- <tbody>
                    @foreach($contracts as $contract)
                        <tr class="gradeA" id="item-{{$contract->id}}">
                            <td>
                                {{$contract->name}}
                            </td>
                            <td>
                                {{$contract->date}}
                            </td>
                            <td>
                                {{$contract->time}}
                            </td>
                            <td>
                                {{$contract->delivery_address}}
                            </td>
                            <td>
                                <a href="{{route('admin.contracts.edit',[$contract->id])}}" class="btn btn-white">
                                    <i class="fa fa-pencil-square-o"></i>
                                </a>
                                <a href="#" class="btn btn-white delete" data-id="{{$contract->id}}">
                                    <i class="fa fa-trash"></i>
                                </a>

                            </td>
                        </tr>
                    @endforeach
                    </tbody> --}}
                </table>

            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')

@endpush

@extends('layouts.admin.layout')

@section('meta_title')
    Clientes
@endsection

@section('page_title')
    Clientes
@endsection

@section('meta_extra')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop

@section('page_action')
    <a href="{{route('cotizacion.client.alta')}}" class="btn btn-primary">+ Crear cliente</a>
@endsection

@section('content')
<div class="row">
    <form action="route{{route('cotizacion.rics')}}" method="get">
        <div class="col-lg-4">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Buscar por clientes</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">

                    <div class="row">
                        <div class="col-md-12">
                            <input id="check-0" type="checkbox" value="all" name="c[]" class="all" {{ (is_array($clients)&&in_array('all',$clients)) ? 'checked="checked"' : '' }}>
                            <label for="check-0">Clientes</label>

                            @foreach($clients_in_system as $client)

                            <input id="check-{{$client->id}}" name="c[]" value="{{$client->id}}" type="checkbox" {{ (is_array($clients)&&in_array($client->id,$clients)) ? 'checked="checked"' : '' }}>
                            <label for="check-{{$client->id}}">{{ $client->company}}</label>
                            <br>

                            @endforeach
                        </div>
                        <div class="col-md-12">
                            <button class="panel-cancel">Cancelar</button>
                            <button class="panel-apply" type="submit">Buscar</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Buscar por estatus</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <form>
                        <label class="label-radio">Propuesta
                            <input type="radio" name='e' value="1" checked="checked"/>
                            <span class="checkmark"></span>
                        </label>
                        <br>
                        <label class="label-radio">Pendiente
                            <input type="radio" name='e' value="2" checked="checked"/>
                            <span class="checkmark"></span>
                        </label>
                        <br>
                        <label class="label-radio">Aprobado
                            <input type="radio" name='e' value="3" checked="checked"/>
                            <span class="checkmark"></span>
                        </label>
                        <br>
                        <label class="label-radio">Coizando
                            <input type="radio" name='e' value="4" checked="checked"/>
                            <span class="checkmark"></span>
                        </label>
                        <br>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Buscar por complejidad</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <form>
                        <label class="label-radio">Baja Complejidad
                            <input type="radio" name='o' value="1" checked="checked"/>
                            <span class="checkmark"></span>
                        </label>
                        <br>
                        <label class="label-radio">Mediana Complejidad
                            <input type="radio" name='o' value="2" checked="checked"/>
                            <span class="checkmark"></span>
                        </label>
                        <br>
                        <label class="label-radio">Alta Complejidad
                            <input type="radio" name='o' value="3" checked="checked"/>
                            <span class="checkmark"></span>
                        </label>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </form>

</div>

<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Cotizaciones en sistema</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">

                <table class="table table-striped table-bordered table-hover dataTables-users" >
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Cliente</th>
                        <th>Complejidad</th>
                        <th>Estatus</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($rics as $ric)
                        <tr class="gradeA" id="item-{{$ric->id}}">
                            <td>
                                {{$ric->name_proyect}}
                            </td>
                            <td>
                                {{$ric->customer->company}}
                            </td>
                            <td>
                                @if($ric->complexity == 1)
                                    Baja Complejidad
                                @endif
                                @if($ric->complexity == 2)
                                    Mediana Complejidad
                                @endif
                                @if($ric->complexity == 3)
                                    Alta Complejidad
                                @endif
                            </td>
                            <td>
                                @if($ric->status == 1)
                                    Propuesta
                                @endif
                                @if($ric->status == 2)
                                    Aprubado
                                @endif
                                @if($ric->status == 3)
                                    Ric
                                @endif
                            </td>
                            <td>
                                <a href="{{route('cotizacion.client.edit',[$ric->id])}}" class="btn btn-white">
                                    <i class="fa fa-pencil-square-o"></i>
                                </a>
                                <a href="#" class="btn btn-white delete" data-id="{{$ric->id}}">
                                    <i class="fa fa-trash"></i>
                                </a>
                                @if($ric->complexity > 1)
                                    <a href="#" class="btn btn-white delete" data-id="{{$ric->id}}">
                                        <i class="fa fa-check"></i>
                                    </a>
                                @endif
                                @if ($ric->complexity == 1 || $ric->status == 2)
                                    <a href="{{route('cotizacion.quoting',$ric->id)}}" class="btn btn-white" data-id="{{$ric->id}}">
                                        <i class="glyphicon glyphicon-plus"></i>
                                    </a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    {!! HTML::script('static/admin/js/plugins/dataTables/jquery.dataTables.js') !!}
    {!! HTML::script('static/admin/js/plugins/dataTables/dataTables.bootstrap.js') !!}
    {!! HTML::script('static/admin/js/plugins/dataTables/dataTables.responsive.js') !!}
    {!! HTML::script('static/admin/js/plugins/dataTables/dataTables.tableTools.min.js') !!}
<script type="text/javascript">
    $(function(){

    });
</script>
@endpush

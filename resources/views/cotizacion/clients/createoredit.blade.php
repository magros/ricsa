@extends('layouts.admin.layout', ['tab' => 'quotation','subtab' => 'clients'])
@section('meta_title')
    @if(!isset($client))
        Crear usuario
    @else
        Editando {{$client->name}}
    @endif
@endsection

@section('page_title')
    @if(!isset($client))
        Crear usuario
    @else
        Editando {{$client->getFullName}}
    @endif
@endsection
@section('page_action')
<a href="{{route('cotizacion.client')}}" class="btn btn-white">&lt; Regresar a clientes</a>
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
                        <div class="col-sm-12">
                            @if(!isset($client))
                                {!! Form::open(['route'=>'cotizacion.client.save','id'=>'user-form', 'files'=>true,'data-toggle' => 'validator',]) !!}
                            @else
                                {!! Form::model($client, [
                                    'method' => 'patch',
                                    'route' => ['cotizacion.client.update', $client->id],
                                    'id'=>'category-form',
                                    'files' => true,
                                    'data-toggle' => 'validator',
                                ]) !!}
                            @endif
                                <div class="form-group">
                                    <label for="name">Contacto</label>
                                    {!! Form::text('name',old('name'),[
                            			'class'=>'form-control','placeholder'=>'Contato',
                            			 'autocomplete'=>'off', 'id' => 'name',
                            			 'data-required-error' => 'Este campo es obligatorio',
                            			 'required' => '', 'maxlength' => '100'
                            		]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label for="company">Empresa</label>
                                    {!! Form::text('company',old('company'),[
                            			'class'=>'form-control','placeholder'=>'Empresa',
                            			'required'=>'', 'autocomplete'=>'off', 'id' => 'company',
                            			'data-required-error' => 'Este campo es obligatorio','maxlength' => '100'
                            		]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label for="email">E-mail</label>
                                    {!! Form::email('email',old('email'),[
                            			'class'=>'form-control','placeholder'=>'E-mail de la ceunta',
                            			'required'=>'', 'autocomplete'=>'off', 'id' => 'email',
                            			'data-required-error' => 'Este campo es obligatorio',
                            			'data-error' => 'Introduce una dirección de correo válida',
                                        'maxlength' => '100'
                            		]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label for="phone">Teléfono</label>
                                    {!! Form::text('phone',old('phone'),[
                            			'class'=>'form-control','placeholder'=>'Teléfono',
                            			'required'=>'', 'autocomplete'=>'off', 'id' => 'phone',
                            			'data-required-error' => 'Este campo es obligatorio', 'maxlength' => '15'
                            		]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label for="business_name">Razon social</label>
                                    {!! Form::text('business_name',old('business_name'),[
                            			'class'=>'form-control','placeholder'=>'Razon social',
                            			'required'=>'', 'autocomplete'=>'off', 'id' => 'business_name',
                            			'data-required-error' => 'Este campo es obligatorio','maxlength' => '100'
                            		]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label for="rfc">RFC</label>
                                    {!! Form::text('rfc',old('rfc'),[
                            			'class'=>'form-control','placeholder'=>'RFC',
                            			'required'=>'', 'autocomplete'=>'off', 'id' => 'rfc',
                            			'data-required-error' => 'Este campo es obligatorio','maxlength' => '100'
                            		]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label for="delivery_conditions">Condiciones de entrega</label>
                                    {!! Form::text('delivery_conditions',old('delivery_conditions'),[
                            			'class'=>'form-control','placeholder'=>'Condiciones de entrega',
                            			'required'=>'', 'autocomplete'=>'off', 'id' => 'delivery_conditions',
                            			'data-required-error' => 'Este campo es obligatorio','maxlength' => '100'
                            		]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label for="payment_conditions">Condiciones de pago</label>
                                    {!! Form::text('payment_conditions',old('payment_conditions'),[
                            			'class'=>'form-control','placeholder'=>'Condiciones de pago',
                            			'required'=>'', 'autocomplete'=>'off', 'id' => 'payment_conditions',
                            			'data-required-error' => 'Este campo es obligatorio','maxlength' => '100'
                            		]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label for="country">Pais</label>
                                    {!! Form::text('country',old('country'),[
                            			'class'=>'form-control','placeholder'=>'Pais',
                            			'required'=>'', 'autocomplete'=>'off', 'id' => 'country',
                            			'data-required-error' => 'Este campo es obligatorio','maxlength' => '100'
                            		]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label for="state">Estado</label>
                                    {!! Form::text('state',old('state'),[
                            			'class'=>'form-control','placeholder'=>'Estado',
                            			'required'=>'', 'autocomplete'=>'off', 'id' => 'state',
                            			'data-required-error' => 'Este campo es obligatorio','maxlength' => '100'
                            		]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label for="city">Ciudad</label>
                                    {!! Form::text('city',old('city'),[
                            			'class'=>'form-control','placeholder'=>'Condiciones de pago',
                            			'required'=>'', 'autocomplete'=>'off', 'id' => 'city',
                            			'data-required-error' => 'Este campo es obligatorio','maxlength' => '100'
                            		]) !!}
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div>
                                    <button class="btn btn-lg btn-primary pull-right m-t-n-xs" type="submit"><strong>Guardar</strong></button>
                                </div>
                            {!! Form::close() !!}
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

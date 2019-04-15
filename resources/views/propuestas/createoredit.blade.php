@extends('layouts.admin.layout')

@section('meta_title')
    Dashboard
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Datos de la cotizacion</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <form>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ibox float-e-margins">
                                <div class="col-sm-6">

                                    <div class="form-group">
                                        <label for="cropme">Cliente:</label>
                                        <select class="form-control">
                                            <option value="volvo">Volvo</option>
                                            <option value="saab">Saab</option>
                                            <option value="mercedes">Mercedes</option>
                                            <option value="audi">Audi</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group">
                                        <label for="cropme">Cotizacion No:</label>
                                        <input type="text" class="form-control" value="">
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group">
                                        <label for="cropme">Equipo:</label>
                                        <input type="text" class="form-control" value="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cropme">Fecha de presupuesto:</label>
                                        <input type="date" class="form-control" value=""">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cropme">Elaborado Por:</label>
                                        <input type="text" class="form-control" value="{{auth()->user()->full_name}}"  disabled>
                                        <div class="help-block with-errors"></div>
                                    </div>

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

                </form>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="ibox float-e-margins">

                <div class="ibox-title">
                    <h5>Datos de la cotizacion</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="row">

                        <div class="col-sm-4">

                            <div class="form-group">
                                <label for="cropme">Recursos:</label>
                                <select class="form-control" id="recursos">
                                    <option>-----Selecionar-------</option>
                                    <option value="15">Certificación estándar</option>
                                    <option value="30">Certificados en IV - LP - PM</option>
                                    <option value="60">Certificaciones especificas</option>
                                    <option value="90">Alto Grado de expertis</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="cropme">Tamaño/peso equipo:</label>
                                <select class="form-control" id="tamanoPeso">
                                    <option>-----Selecionar-------</option>
                                    <option value="15">D 0.5-4.5m / L 0.5-4m PESO < 25 Ton Min 300 Kg</option>
                                    <option value="30">D 4.5m-10m / L 4m -30m PESO 25-50 TON</option>
                                    <option value="60">D > 10 mt L > 30 mt D < 0.5 mt L < 0.5mt PESO >= 90 TON </option>
                                    <option value="90">D > 10 mt/L > 30 mt PESO >= 90 TON </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="cropme">Tipo de Material equipo:</label>
                                <select class="form-control" id="material">
                                    <option>-----Selecionar-------</option>
                                    <option value="15">Acero al carbón</option>
                                    <option value="30">Inoxidable</option>
                                    <option value="60">Aleaciones</option>
                                    <option value="90">EXÓTICO (INNOVACIÓN: Titanio, Niquel, etc.)</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="cropme">Diseño:</label>
                                <select class="form-control" id="diseño">
                                    <option>-----Selecionar-------</option>
                                    <option value="15">Tolvas / Receptores</option>
                                    <option value="30">Intercambio de Calor / UHT</option>
                                    <option value="60">Diseños complejos / Maquinados / Tolerancias cerradas</option>
                                    <option value="90">Desarrollo de Ingeniería / Diseño especializado</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="cropme">Tipo de Proceso:</label>
                                <select class="form-control" id="pro">
                                    <option>-----Selecionar-------</option>
                                    <option value="15">Flux CAW / Flux Core Arc. Welding </option>
                                    <option value="30">SAW (Semi Automático)</option>
                                    <option value="60">Gases de respaldo GTAW / GMAW (micro alambre )</option>
                                    <option value="90">Innovación</option>
                                </select>
                            </div>

                        </div>

                        <div class="col-sm-2">
                            <h3>Nivel</h3>
                            <div style="border: solid; background: grey; margin-block-end: 40%" class="form-group recursos">
                                <label></label>
                            </div>
                            <div style="border: solid; background: grey; margin-top: 20%; margin-block-end: 40%" class="form-group tamanoPeso">
                                <label></label>
                            </div>
                            <div style="border: solid; background: grey; margin-top: 20%; margin-block-end: 40%" class="form-group material">
                                <label></label>
                            </div>
                            <div style="border: solid; background: grey; margin-top: 20%; margin-block-end: 40%" class="form-group diseño">
                                <label></label>
                            </div>
                            <div style="border: solid; background: grey; margin-top: 20%; margin-block-end: 40%" class="form-group pro">
                                <label></label>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <h3>Calificación</h3>
                            <div class="form-group" style="margin-top: 70%; margin-left: 20%">
                                <h2 class="calificaion">0</h2>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <h3>Tipo proyecto</h3>
                            <div class="form-group" style="margin-top: 70%;">
                                <h2>Tipo proyecto</h2>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection

@push('scripts')
<script type="text/javascript">
    $(function(){
        var re = 0;
        var t = 0;
        var m = 0;
        var d = 0;
        var p = 0;
        $("#recursos").on('change',function(){
            var valor = $(this).val();
            if(valor == 15){
                $(".recursos").css("background", "green");
                re = 15 * 0.3;
            }else if(valor == 30){
                $(".recursos").css("background", "gold");
                re = 30 * 0.3;
            }else if(valor == 60){
                $(".recursos").css("background", "red");
                re = 60 * 0.3;
            }else if(valor == 90){
                $(".recursos").css("background", "red");
                re = 90 * 0.3;
            }else{
                $(".recursos").css("background", "grey");
            }
            promedio();
        });
        $("#tamanoPeso").on('change',function(){
            var valor = $(this).val();
            if(valor == 15){
                $(".tamanoPeso").css("background", "green");
                t = 15 * 0.25;
            }else if(valor == 30){
                $(".tamanoPeso").css("background", "gold");
                t =  30 * 0.25;
            }else if(valor == 60){
                $(".tamanoPeso").css("background", "red");
                t = 60 * 0.25;
            }else if(valor == 90){
                $(".tamanoPeso").css("background", "red");
                t = 90 * 0.25;
            }else{
                $(".recursos").css("background", "grey");
            }
            promedio();
        });
        $("#material").on('change',function(){
            var valor = $(this).val();
            if(valor == 15){
                $(".material").css("background", "green");
                m = 15 * 0.2;
            }else if(valor == 30){
                $(".material").css("background", "gold");
                m = 30 * 0.2;
            }else if(valor == 60){
                $(".material").css("background", "red");
                m = 60 * 0.2;
            }else if(valor == 90){
                $(".material").css("background", "red");
                m = 90 * 0.2;
            }else{
                $(".recursos").css("background", "grey");
            }
            promedio();
        });
        $("#diseño").on('change',function(){
            var valor = $(this).val();
            if(valor == 15){
                $(".diseño").css("background", "green");
                d = 15 * 0.15;
            }else if(valor == 30){
                $(".diseño").css("background", "gold");
                d = 30 * 0.15;
            }else if(valor == 60){
                $(".diseño").css("background", "red");
                d = 60 * 0.15;
            }else if(valor == 90){
                $(".diseño").css("background", "red");
                d = 90 * 0.15;
            }else{
                $(".recursos").css("background", "grey");
            }
            promedio();
        });
        $("#pro").on('change',function(){
            var valor = $(this).val();
            if(valor == 15){
                $(".pro").css("background", "green");
                p = 15 * 0.1;
            }else if(valor == 30){
                $(".pro").css("background", "gold");
                p = 30 * 0.1;
            }else if(valor == 60){
                $(".pro").css("background", "red");
                p = 60 * 0.1;
            }else if(valor == 90){
                $(".pro").css("background", "red");
                p = 90 * 0.1;
            }else{
                $(".recursos").css("background", "grey");
            }
            promedio();
        });
        function promedio(){
            if(re!=0 && t!=0 && m != 0 && d != 0 && p != 0){
                $(".calificaion").text(re+t+m+d+p);
            }
        }
    });
</script>
@endpush

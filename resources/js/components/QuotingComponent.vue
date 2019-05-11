<template>
    <div style="margin-bottom: 80px;">
        <div class="row">
            <div class="col-lg-9">
                <material-quoting-component :materials="materials" :ric-id="ricId"></material-quoting-component>
            </div>
            <div class="col-lg-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Total materiales</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>

                    <div class="ibox-content">
                        <div class="row">

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="peso_neto">Total peso neto</label>
                                    <input type="text" class="form-control" name="peso_neto" id="peso_neto"
                                           placeholder="Total peso neto" :value="weight" disabled>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="peso_bruto">Total peso bruto</label>
                                    <input type="text" class="form-control" name="peso_bruto" id="peso_bruto"
                                           placeholder="Total peso bruto" :value="weightRaw" disabled>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="precio_kilo">Precio por kilo</label>
                                    <input type="text" class="form-control" name="precio_kilo" id="precio_kilo"
                                           placeholder="Precio por kilo" :value="priceKg" disabled>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="total_material">Total</label>
                                    <input type="text" class="form-control" name="total_material" id="total_material"
                                           placeholder="Total" :value="total" disabled>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" >
            <div class="col-lg-9">
                <work-force-quoting-component :ric-id="ricId"></work-force-quoting-component>
            </div>
            <div class="col-lg-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Total mano de obra</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>

                    <div class="ibox-content">
                        <div class="row">

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="peso_neto_m">Total peso neto</label>
                                    <input type="text" class="form-control" name="peso_neto_m" id="peso_neto_m" placeholder="Total peso neto" :value="all.total_peso_neto_mo" disabled>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="total_candecia">Total cadencia</label>
                                    <input type="text" class="form-control" name="total_candecia" id="total_candecia" placeholder="Total peso bruto" :value="all.cadencia" disabled>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="total_horas">Total horas</label>
                                    <input type="text" class="form-control" name="total_horas" id="total_horas" placeholder="Precio por kilo" :value="all.total_horas" disabled>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="precio">Total precio</label>
                                    <input type="text" class="form-control" name="precio" id="precio" placeholder="Precio por kilo" :value="all.total_precio_mo" disabled>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="total_mano_obra">Total</label>
                                    <input type="text" class="form-control" name="total_mano_obra" id="total_mano_obra" placeholder="Total" :value="all.total_mo" disabled>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-9">
                <testing-quoting-component :ric-id="ricId"></testing-quoting-component>
            </div>

            <div class="col-lg-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Total consumibles y pruebas</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>

                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="precio_consumible">Precio unitario</label>
                                    <input type="text" class="form-control" name="precio_consumible" id="precio_consumible" placeholder="Total peso neto" :value="all.precio_consumible" disabled>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="total_consumible">Total</label>
                                    <input type="text" class="form-control" name="total_consumible" id="total_consumible" placeholder="Total peso bruto" :value="all.total_consumible" disabled>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="ibox">
                    <div class="ibox-title">
                        <h5>Costo de fabricación</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>

                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="precio_consumible">Precio unitario</label>
                                    <input type="text" class="form-control" name="precio_unitario_ric" id="precio_unitario_ric" placeholder="Total peso neto" :value="all.precio_unitario_ric" disabled>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="total_consumible">Total</label>
                                    <input type="text" class="form-control" name="total_fabricacion" id="total_fabricacion" placeholder="Total peso bruto" :value="all.total_fabricacion" disabled>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ibox">
                    <div class="ibox-title">
                        <h5>Precio de venta</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>

                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="precio_consumible">Precio unitario</label>
                                    <input type="text" class="form-control" name="precio_venta" id="precio_venta" placeholder="Total peso neto" :value="all.precio_venta" disabled>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="total_consumible">Total</label>
                                    <input type="text" class="form-control" name="total_venta" id="total_venta" placeholder="Total peso bruto" :value="all.total_venta" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


</template>

<script>
    export default {
        name: "QuotingComponent.vue",
        props: ['materials', 'ricId'],
        data: function () {
            return {
                total: '',
                priceKg: '',
                weightRaw: '',
                weight: '',
                all: {}
            };
        },
        methods: {
            recalculateMaterialPricing() {
                let url = `/cotizacion/${this.ricId}/calculate-pricing`;
                window.axios.get(url).then(response => {
                    this.all = response.data;
                    this.total = response.data.total;
                    this.priceKg = response.data.precio_kilo;
                    this.weightRaw = response.data.peso_burto;
                    this.weight = response.data.peso_neto;
                });
            }
        },
        mounted() {
            this.recalculateMaterialPricing();
        }
    }
</script>

<style scoped>

</style>
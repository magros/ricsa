<template>
    <div>
        <material-quoting-component :materials="materials" :ric-id="ricId"
                                    :type-quoting="'cuerpo'"></material-quoting-component>
        <material-quoting-component :materials="materials" :ric-id="ricId"
                                    :type-quoting="'tapas'"></material-quoting-component>
        <material-quoting-component :materials="materials" :ric-id="ricId"
                                    :type-quoting="'soporte'"></material-quoting-component>
        <material-quoting-component :materials="materials" :ric-id="ricId"
                                    :type-quoting="'escalera'"></material-quoting-component>
        <material-quoting-component :materials="materials" :ric-id="ricId"
                                    :type-quoting="'registro'"></material-quoting-component>
        <material-quoting-component :materials="materials" :ric-id="ricId"
                                    :type-quoting="'boquillas'"></material-quoting-component>

        <div class="col-lg-12 m-b-25">
            <div class="ibox float-e-margins">
                <div class="ibox-content">
                    <div class="row">

                        <div class="col-sm-12">
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="peso_neto">Total peso neto</label>
                                    <input type="text" class="form-control" name="peso_neto" id="peso_neto"
                                           placeholder="Total peso neto" :value="weight" disabled>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="peso_bruto">Total peso bruto</label>
                                    <input type="text" class="form-control" name="peso_bruto" id="peso_bruto"
                                           placeholder="Total peso bruto" :value="weightRaw" disabled>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="precio_kilo">Precio por kilo</label>
                                    <input type="text" class="form-control" name="precio_kilo" id="precio_kilo"
                                           placeholder="Precio por kilo" :value="priceKg" disabled>
                                </div>
                            </div>
                            <div class="col-sm-2">
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
                weight: ''
            };
        },
        methods: {
            recalculateMaterialPricing() {
                let url = `/cotizacion/${this.ricId}/calculate-pricing`;
                window.axios.get(url).then(response => {
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
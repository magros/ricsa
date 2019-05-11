<template>
        <div class="ibox">
            <div class="ibox-title">
                <h5 style="text-transform: uppercase">Consumibles y pruebas</h5>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <div class="clearfix"></div>
                            <label for="descripcion">Descripcion</label>
                            <input type="text"
                                   id="descripcion"
                                   name="cantidad"
                                   v-model="consumable.descripcion"
                                   class="form-control"
                                   data-required-error="Este campo es obligatorio"
                                   maxlength="100">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="cantidad">Cantidad</label>
                            <input type="number"
                                   id="cantidad"
                                   name="cantidad"
                                   v-model="consumable.cantidad"
                                   class="form-control"
                                   data-required-error="Este campo es obligatorio"
                                   maxlength="100">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="unit_price">Precio unitario</label>
                            <input type="number"
                                   id="unit_price"
                                   name="unit_price"
                                   v-model="consumable.unit_price"
                                   class="form-control"
                                   data-required-error="Este campo es obligatorio"
                                   maxlength="100">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <button class="btn btn-lg btn-primary mt-3" @click="addConsumable()" type="button"><strong>Agregar</strong></button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <hr>
                        <h3>Desglose de pruebas y consumibles</h3>
                    </div>
                </div>
                <div class="row" v-if="consumableList.length">
                    <div class="col-sm-12">
                        <table class="table table-stripped table-dark table-hover">
                            <thead class="thead-dark">
                            <tr>
                                <th>Descripción</th>
                                <th>Cantidad</th>
                                <th>Precio unitario</th>
                                <th>Total</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>
                            <tbody id="contenido">
                            <tr class="gradeA" v-for="item in consumableList">
                                <td>{{ item.description }}</td>
                                <td>{{ item.quantity }}</td>
                                <td>{{ item.unit_price }}</td>
                                <td>{{ item.total }}</td>
                                <td>
                                    <div class="btn btn-dark" @click="deleteConsumable(item.id)">
                                        <i class="fa fa-trash" ></i>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
</template>

<script>
    export default {
        name: "TestingQuotingComponent",
        props: [ 'ricId'],
        data: function () {
            return {
                consumable: {
                    descripcion: '',
                    cantidad: '',
                    unit_price: '',
                },
                consumableList: []
            }
        },
        methods: {
            getConsumableLists(){
                let url = `/cotizacion/${this.ricId}/consumables`;
                window.axios.get(url).then(response => {
                    this.consumableList = response.data;
                });
            },
            deleteConsumable(id){
                let url = `/cotizacion/delet/consumible/${id}`;
                window.axios.delete(url).then(response => {
                    this.getConsumableLists();
                    this.$parent.recalculateMaterialPricing();
                });
            },
            addConsumable(){
                let url = `/cotizacion/consumibles`;
                window.axios.post(url, Object.assign(this.consumable, {id_ric: this.ricId})).then(response => {
                    this.consumable = {descripcion: '', cantidad: '', unit_price: ''};
                    this.getConsumableLists();
                    this.$parent.recalculateMaterialPricing();
                });
            }
        },
        mounted() {
            this.getConsumableLists();
        }
    }
</script>

<style scoped>

</style>
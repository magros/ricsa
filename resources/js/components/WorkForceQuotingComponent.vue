<template>
    <div class="ibox">
        <div class="ibox-title">
            <h5 style="text-transform: uppercase">Mano de obra</h5>
        </div>
        <div class="ibox-content">
            <div class="row">
                <form>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="description">Descripcion:</label>
                            <div class="clearfix"></div>
                            <select name="description" v-model="workForce.description" id="description"
                                    class="form-control">
                                <option value="" disabled>---Selecionar---</option>
                                <option value="1">cuerpo y tapas</option>
                                <option value="2">soportes</option>
                                <option value="3">escaleras y barandales</option>
                                <option value="4">boquillas</option>
                                <option value="5">ingeniería</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="precio_hora">Precio por hora:</label>
                            <div class="clearfix"></div>
                            <input type="number"
                                   name="precio_hora"
                                   required
                                   v-model="workForce.precio_hora"
                                   id="precio_hora"
                                   class="form-control"
                                   placeholder="Especificación"
                                   data-required-error="Este campo es obligatorio"
                                   maxlength="100">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="peso">Precio neto:</label>
                            <div class="clearfix"></div>
                            <input type="number"
                                   name="peso"
                                   required
                                   v-model="workForce.peso"
                                   id="peso"
                                   class="form-control"
                                   placeholder="Especificación"
                                   data-required-error="Este campo es obligatorio"
                                   maxlength="100">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="cadencia">Cadencia: </label>
                            <div class="clearfix"></div>
                            <input type="number"
                                   name="cadencia"
                                   required
                                   v-model="workForce.cadencia"
                                   id="cadencia"
                                   class="form-control"
                                   placeholder="Especificación"
                                   data-required-error="Este campo es obligatorio"
                                   maxlength="100">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <button id="adicionar"
                                :disabled="!(workForce.description && workForce.precio_hora && workForce.peso && workForce.cadencia)"
                                @click="addWorkForce()"
                                class="btn btn-lg btn-primary" type="button">
                            <strong>Agregar mano de obra</strong>
                        </button>
                    </div>
                </form>

            </div>
            <div class="row">
                <div class="col-lg-12">
                    <hr>
                    <h3>Desglose de materiales</h3>
                </div>
            </div>
            <div class="row" v-if="workForceList.length">
                <div class="col-sm-12">
                    <table class="table table-stripped table-dark table-hover">
                        <thead class="thead-dark">
                        <tr>
                            <th>Descripción</th>
                            <th>$/H</th>
                            <th>Peso neto</th>
                            <th>Cadencia</th>
                            <th>Horas</th>
                            <th>Porcentaje</th>
                            <th>Total</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody id="contenido">
                        <tr class="gradeA" v-for="item in workForceList">
                            <td>{{ item.description_name }}</td>
                            <td>{{ item.price_hour }}</td>
                            <td>{{ item.net_weight }}</td>
                            <td>{{ item.cadence }}</td>
                            <td>{{ item.hours }}</td>
                            <td>{{ item.costo }}</td>
                            <td>{{ item.total }}</td>
                            <td>
                                <div class="btn btn-dark">
                                    <i class="fa fa-trash" @click="deleteWorkForce(item.id)"></i>
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
        name: "WorkForceQuotingComponent",
        props: ['ricId'],
        data: function () {
            return {
                precio_hora: '',
                peso: '',
                cadencia: '',
                workForce: {
                    description: '',
                    precio_hora: '',
                    id_ric: this.ricId,
                    peso: '',
                    cadencia: ''
                },
                workForceList: []
            }
        },
        methods: {
            getWorkForceList() {
                let url = `/cotizacion/${this.ricId}/work-force`;
                window.axios.get(url).then(response => {
                    this.workForceList = response.data;
                });
            },
            addWorkForce() {
                let url = `/cotizacion/mano`;
                window.axios.post(url, this.workForce).then(response => {
                    console.log(response.data);
                    this.workForce = {description: '', precio_hora: '', id_ric: this.ricId, peso: '', cadencia: ''};
                    this.getWorkForceList();
                    this.$parent.recalculateMaterialPricing();
                });
            },
            deleteWorkForce(id) {
                let url = `/cotizacion/delet/mano/${id}`;
                window.axios.delete(url).then(response => {
                    this.getWorkForceList();
                    this.$parent.recalculateMaterialPricing();
                });
            }
        },
        mounted() {
            this.getWorkForceList();
        }
    }
</script>

<style scoped>

</style>
<template>
    <div class="ibox">
        <div class="ibox-title">
            <h5 style="text-transform: uppercase">Materiales</h5>
            <div class="ibox-tools">
                <a class="collapse-link">
                    <i class="fa fa-chevron-up"></i>
                </a>
            </div>
        </div>
        <div class="ibox-content">
            <div class="row">
                <form data-toggle="validator">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="material_id">Parte:</label>
                            <div class="clearfix"></div>
                            <select id="family"
                                    data-required-error="Este campo es obligatorio"
                                    v-model="material.family"
                                    class="form-control">
                                <option disabled selected value="">Selecciona</option>
                                <option v-for="family in familyMaterials" v-bind:value="family.name">{{
                                    family.description }}
                                </option>
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="specification">Especificación:</label>
                            <div class="clearfix"></div>
                            <select id="specification"
                                    data-required-error="Este campo es obligatorio"
                                    v-model="material.specification"
                                    @change="getMaterialsBySpecification"
                                    class="form-control">
                                <option disabled selected value="">Selecciona</option>
                                <option v-for="(item, index) in materials" v-bind:value="index">{{ item }}</option>
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="description">Descripción</label>
                            <select id="description"
                                    data-required-error="Este campo es obligatorio"
                                    v-model="material.description"
                                    @change="getMaterialsBySpecification"
                                    class="form-control">
                                <option disabled selected value="">Selecciona</option>
                                <option v-for="(item, index) in materials" v-bind:value="index">{{ item }}</option>
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="quantity">cantidad:</label>
                            <div class="clearfix"></div>
                            <input type="number"
                                   name="quantity"
                                   required
                                   v-model="material.quantity"
                                   id="quantity"
                                   class="form-control"
                                   placeholder="Especificación"
                                   disabled
                                   data-required-error="Este campo es obligatorio"
                                   maxlength="100">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="thickness">Esp Pulg:</label>
                            <div class="clearfix"></div>
                            <input type="text"
                                   id="thickness"
                                   name="thickness"
                                   v-model="material.thickness"
                                   class="form-control"
                                   placeholder="Especificación"
                                   data-required-error="Este campo es obligatorio"
                                   maxlength="100"
                                   disabled>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="dimension">Di mm:</label>
                            <div class="clearfix"></div>
                            <input type="text"
                                   id="dimension"
                                   name="dimension"
                                   class="form-control"
                                   v-model="material.dimension"
                                   placeholder="Especificación"
                                   data-required-error="Este campo es obligatorio"
                                   maxlength="100">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="lenght">Long mm:</label>
                            <div class="clearfix"></div>
                            <input type="text"
                                   id="lenght"
                                   name="lenght"
                                   v-model="material.lenght"
                                   class="form-control"
                                   placeholder="Especificación"
                                   data-required-error="Este campo es obligatorio"
                                   maxlength="100">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="net_weight">Peso neto:</label>
                            <div class="clearfix"></div>
                            <input type="text"
                                   id="net_weight"
                                   name="net_weight"
                                   class="form-control"
                                   v-model="material.net_weight"
                                   placeholder="Especificación"
                                   data-required-error="Este campo es obligatorio"
                                   maxlength="100"
                                   disabled>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="gross_weight">Peso bruto:</label>
                            <div class="clearfix"></div>
                            <input type="text"
                                   id="gross_weight"
                                   name="gross_weight"
                                   v-model="material.gross_weight"
                                   class="form-control"
                                   placeholder="Especificación"
                                   data-required-error="Este campo es obligatorio"
                                   maxlength="100"
                                   disabled>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="price">Precio unitario:</label>
                            <div class="clearfix"></div>
                            <input type="text"
                                   id="price"
                                   name="price"
                                   v-model="material.price"
                                   class="form-control"
                                   placeholder="Especificación"
                                   data-required-error="Este campo es obligatorio"
                                   maxlength="100"
                                   disabled>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>


                    <div class="col-sm-6">
                        <button id="adicionar" :disabled="!(material.id && material.id && material.quantity)"
                                class="btn btn-lg btn-primary pull-right m-t-15" type="button"
                                @click="addMaterial">
                            <strong>Agregar material</strong>
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
            <div class="row" v-if="materialLists.length">
                <div class="col-sm-12">
                    <table class="table table-stripped table-dark table-hover">
                        <thead class="thead-dark">
                        <tr>
                            <th>Parte</th>
                            <th>Descripcion</th>
                            <th>Especificacion Material</th>
                            <th>cantidad</th>
                            <th>Di mm</th>
                            <th>Long mm:</th>
                            <th>Peso neto</th>
                            <th>Peso bruto</th>
                            <th>Precio unitario</th>
                            <th>Total</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody id="contenido">
                        <tr class="gradeA" v-for="item in materialLists">
                            <td>{{ item.name }}</td>
                            <td>{{ item.material.description }}</td>
                            <td>{{ item.material.specification }}</td>
                            <td>{{ item.quantity }}</td>
                            <td>{{ item.material.dimension }}</td>
                            <td>{{ item.material.length }}</td>
                            <td>{{ item.material.net_weight }}</td>
                            <td>{{ item.material.gross_weight }}</td>
                            <td>{{ item.material.price }}</td>
                            <td>{{ item.total }}</td>
                            <td>
                                <div class="btn btn-dark" @click="deleteMaterial(item.id)">
                                    <i class="fa fa-trash"></i>
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
        name: "MaterialQuotingComponent.vue",
        props: ['materials', 'ricId'],
        data: function () {
            return {
                material: {id: '', family: '', specification: '', description: ''},
                materialLists: [],
                familyMaterials: [
                    {name: 'cuerpo', description: 'Cuerpo'},
                    {name: 'tapas', description: 'Tapas'},
                    {name: 'soporte', description: 'Soportes'},
                    {name: 'escalera', description: 'Escalera'},
                    {name: 'registro', description: 'Registro de inspección'},
                    {name: 'boquillas', description: 'Boquillas'},
                ]
            }
        },
        methods: {
            getMaterialsBySpecification(){
                let url = `/cotizacion/materials?specification=${this.material.specification}`;
                window.axios.get(url).then(response => {
                    console.log(response);
                    // this.material = Object.assign({family: this.material.family}, response.data);
                });
            },
            getMaterialDetails() {
                let url = `/cotizacion/material/${this.material.id}`;
                window.axios.get(url).then(response => {
                    this.material = Object.assign({family: this.material.family}, response.data);
                });
            },
            addMaterial() {
                let url = `/cotizacion/list/material-v2`;
                window.axios.post(url, Object.assign(this.material, {
                    ricId: this.ricId,
                    name: this.material.family
                })).then(response => {
                    this.material = {id: '', family: ''};
                    this.getMaterials();
                    this.$parent.recalculateMaterialPricing();
                });
            },
            deleteMaterial(id) {
                let url = `/cotizacion/material/${id}/delete`;
                window.axios.delete(url).then(response => {
                    this.getMaterials();
                    this.$parent.recalculateMaterialPricing();
                });
            },
            getMaterials() {
                let url = `/cotizacion/${this.ricId}/materials`;
                window.axios.get(url).then(response => {
                    this.materialLists = response.data
                });
            }
        },
        mounted() {
            this.getMaterials();
        }
    }
</script>

<style scoped>

</style>

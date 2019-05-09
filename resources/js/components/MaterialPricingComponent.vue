<template>


</template>

<script>
    export default {
        name: "MaterialPricingComponent.vue",
        props: ['materials', 'ricId'],
        data: function () {
            return {};
        },
        methods: {
            recalculateMaterialPricing(){
                console.log('calculating new pricing');
            }
        }
    }
</script>

<style scoped>

</style>
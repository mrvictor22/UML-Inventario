import AppListing from '../app-components/Listing/AppListing';

Vue.component('compras-tbl-listing', {
    mixins: [AppListing],

    data() {
        return {
            showProductosFilter: false,
            productosMultiselect: {},
    
            filters: {
                producto_id: [],
            },
        }
    },
    
    watch: {
        showProductosFilter: function (newVal, oldVal) {
            this.productosMultiselect = [];
        },
        productosMultiselect: function(newVal, oldVal) {
            this.filters.productos = newVal.map(function(object) { return object['key']; });
            this.filter('producto_id', this.filters.productos);
        }
    }
});
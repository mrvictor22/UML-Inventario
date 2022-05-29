import AppListing from '../app-components/Listing/AppListing';

Vue.component('compras-tbl-listing', {
    mixins: [AppListing],

    data() {
        return {
            showProductosFilter: false,
            productosMultiselect: {},
            showProovedoresFilter: false,
            proovedoresMultiselect: {},
    
            filters: {
                producto_id: [],
                proovedor_id:[]
            },
        }
    },
    
    watch: {
        showProductosFilter: function (newVal, oldVal) {
            this.productosMultiselect = [];
        },
        showProovedoresFilter: function (newVal, oldVal) {
            this.proovedoresMultiselect = [];
        },
        productosMultiselect: function(newVal, oldVal) {
            this.filters.productos = newVal.map(function(object) { return object['key']; });
            this.filter('producto_id', this.filters.productos);
        },
        proovedoresMultiselect: function(newVal, oldVal) {
            this.filters.proovedores = newVal.map(function(object) { return object['key']; });
            this.filter('proovedor_id', this.filters.proovedores);
        }
    }
});
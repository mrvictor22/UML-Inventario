import AppForm from '../app-components/Form/AppForm';

Vue.component('producto-tbl-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                nombre:  '' ,
                prod_cod:  '' ,
                marca:  '' ,
                costo:  '' ,
                precio:  '' ,
                enabled:  false ,
                
            }
        }
    }

});
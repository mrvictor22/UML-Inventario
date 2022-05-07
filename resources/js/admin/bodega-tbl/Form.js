import AppForm from '../app-components/Form/AppForm';

Vue.component('bodega-tbl-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                nombre:  '' ,
                direccion:  '' ,
                tel:  '' ,
                
            }
        }
    }

});
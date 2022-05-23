import AppForm from '../app-components/Form/AppForm';

Vue.component('producto-bodega-tbl-form', {
    mixins: [AppForm],
    props: [
        'producto_id',
        'bodega_tbl',
        'user'
    ],
    data: function() {
        return {
            form: {
               
                bodega_id:  '' ,
                ubicacion_codigo:  '' ,
                cantidad:  '' ,
                nota:  '' ,
                producto_id:  '' ,
                bodega:  '' 

                
            }

            
        }
    }

});
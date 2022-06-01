import AppForm from '../app-components/Form/AppForm';

Vue.component('compras-tbl-form', {
    mixins: [AppForm],
    props: [
        'producto_id',
        'proovedor_id'
        
    ],
    data: function() {
        return {
            form: {
              
                producto_id:  '' ,
                proovedor_id:  '' ,
                descripcion:  '' ,
                cant:  '' ,
                fecha_pedido:  '' ,
                fecha_entregado:  '' ,
                enabled:  false ,
                
            }
        }
    }

});
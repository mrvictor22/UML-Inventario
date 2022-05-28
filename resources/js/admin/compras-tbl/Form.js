import AppForm from '../app-components/Form/AppForm';

Vue.component('compras-tbl-form', {
    mixins: [AppForm],
    props: [
        'producto_id'
        
    ],
    data: function() {
        return {
            form: {
                nombre_producto:  '' ,
                producto_id:  '' ,
                nombre_proveedor:  '' ,
                proovedor_id:  '' ,
                descripcion:  '' ,
                fecha_pedido:  '' ,
                fecha_entregado:  '' ,
                enabled:  false ,
                
            }
        }
    }

});
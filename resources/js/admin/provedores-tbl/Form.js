import AppForm from '../app-components/Form/AppForm';

Vue.component('provedores-tbl-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                nombre:  '' ,
                nombre_empresa:  '' ,
                email:  '' ,
                numer_telefono:  '' ,
                direccion:  '' ,
                ciudad:  '' ,
                pais:  '' ,
                provedor_desde:  '' ,
                enabled:  false ,
                
            }
        }
    }

});
import AppForm from '../app-components/Form/AppForm';

Vue.component('simchange-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                activated:  false ,
                tecnico:  '' ,
                nombre:  '' ,
                placa:  '' ,
                lugar:  '' ,
                simanterior:  '' ,
                simnuevo:  '' ,
                posicion:  false ,
                panico:  false ,
                cortemotor:  false ,
                otros:  '' ,
                fecha:  '' ,
                observacion:  '' ,
                usuario:  '' ,
                
            }
        }
    }

});
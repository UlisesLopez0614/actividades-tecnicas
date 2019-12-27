import AppForm from '../app-components/Form/AppForm';

Vue.component('gpstransfer-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                activated:  false ,
                tecnico:  '' ,
                nombre:  '' ,
                placaanterior:  '' ,
                placanueva:  '' ,
                lugar:  '' ,
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
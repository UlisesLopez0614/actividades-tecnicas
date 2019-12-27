import AppForm from '../app-components/Form/AppForm';

Vue.component('revision-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                activated:  false ,
                tecnico:  '' ,
                equipo:  '' ,
                placa:  '' ,
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
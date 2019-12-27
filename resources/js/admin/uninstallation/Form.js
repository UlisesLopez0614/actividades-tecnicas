import AppForm from '../app-components/Form/AppForm';

Vue.component('uninstallation-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                activated:  false ,
                tecnico:  '' ,
                nombre:  '' ,
                placa:  '' ,
                lugar:  '' ,
                fecha:  '' ,
                observacion:  '' ,
                usuario:  '' ,
                
            }
        }
    }

});
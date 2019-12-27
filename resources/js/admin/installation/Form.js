import AppForm from '../app-components/Form/AppForm';

Vue.component('installation-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                activated:  false ,
                tecnico:  '' ,
                equipo:  '' ,
                placa:  '' ,
                idgps:  '' ,
                serie:  '' ,
                imei:  '' ,
                sim:  '' ,
                ip:  '' ,
                telefono:  '' ,
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
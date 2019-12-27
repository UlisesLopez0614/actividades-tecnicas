import AppForm from '../app-components/Form/AppForm';

Vue.component('gpschange-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                activated:  false ,
                tecnico:  '' ,
                nombre:  '' ,
                placa:  '' ,
                lugar:  '' ,
                idgpsanterior:  '' ,
                seriegpsanterior:  '' ,
                tipogpsanterior:  '' ,
                idgpsnuevo:  '' ,
                seriegpsnuevo:  '' ,
                imeigpsnuevo:  '' ,
                ipgpsnuevo:  '' ,
                simgpsnuevo:  '' ,
                telefonogpsnuevo:  '' ,
                tipogpsnuevo:  '' ,
                posicion:  false ,
                panico:  false ,
                cortemotor:  false ,
                otros:  '' ,
                fecha:  '' ,
                observacion:  '' ,
                
            }
        }
    }

});
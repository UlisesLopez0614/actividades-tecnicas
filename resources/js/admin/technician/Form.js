import AppForm from '../app-components/Form/AppForm';

Vue.component('technician-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                nombre:  '' ,
                apellido:  '' ,
                
            }
        }
    }

});
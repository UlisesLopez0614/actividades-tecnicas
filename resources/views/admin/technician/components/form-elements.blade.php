<div class="form-group row align-items-center" :class="{'has-danger': errors.has('nombre'), 'has-success': fields.nombre && fields.nombre.valid }">
    <label for="nombre" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.technician.columns.nombre') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.nombre" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('nombre'), 'form-control-success': fields.nombre && fields.nombre.valid}" id="nombre" name="nombre" placeholder="{{ trans('admin.technician.columns.nombre') }}">
        <div v-if="errors.has('nombre')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('nombre') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('apellido'), 'has-success': fields.apellido && fields.apellido.valid }">
    <label for="apellido" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.technician.columns.apellido') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.apellido" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('apellido'), 'form-control-success': fields.apellido && fields.apellido.valid}" id="apellido" name="apellido" placeholder="{{ trans('admin.technician.columns.apellido') }}">
        <div v-if="errors.has('apellido')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('apellido') }}</div>
    </div>
</div>



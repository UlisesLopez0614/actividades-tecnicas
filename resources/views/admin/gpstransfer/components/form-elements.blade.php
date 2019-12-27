<div class="form-check row" :class="{'has-danger': errors.has('activated'), 'has-success': fields.activated && fields.activated.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="activated" type="checkbox" v-model="form.activated" v-validate="''" data-vv-name="activated"  name="activated_fake_element">
        <label class="form-check-label" for="activated">
            {{ trans('admin.gpstransfer.columns.activated') }}
        </label>
        <input type="hidden" name="activated" :value="form.activated">
        <div v-if="errors.has('activated')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('activated') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('tecnico'), 'has-success': fields.tecnico && fields.tecnico.valid }">
    <label for="tecnico" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.gpstransfer.columns.tecnico') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.tecnico" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('tecnico'), 'form-control-success': fields.tecnico && fields.tecnico.valid}" id="tecnico" name="tecnico" placeholder="{{ trans('admin.gpstransfer.columns.tecnico') }}">
        <div v-if="errors.has('tecnico')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('tecnico') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('nombre'), 'has-success': fields.nombre && fields.nombre.valid }">
    <label for="nombre" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.gpstransfer.columns.nombre') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.nombre" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('nombre'), 'form-control-success': fields.nombre && fields.nombre.valid}" id="nombre" name="nombre" placeholder="{{ trans('admin.gpstransfer.columns.nombre') }}">
        <div v-if="errors.has('nombre')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('nombre') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('placaanterior'), 'has-success': fields.placaanterior && fields.placaanterior.valid }">
    <label for="placaanterior" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.gpstransfer.columns.placaanterior') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.placaanterior" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('placaanterior'), 'form-control-success': fields.placaanterior && fields.placaanterior.valid}" id="placaanterior" name="placaanterior" placeholder="{{ trans('admin.gpstransfer.columns.placaanterior') }}">
        <div v-if="errors.has('placaanterior')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('placaanterior') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('placanueva'), 'has-success': fields.placanueva && fields.placanueva.valid }">
    <label for="placanueva" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.gpstransfer.columns.placanueva') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.placanueva" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('placanueva'), 'form-control-success': fields.placanueva && fields.placanueva.valid}" id="placanueva" name="placanueva" placeholder="{{ trans('admin.gpstransfer.columns.placanueva') }}">
        <div v-if="errors.has('placanueva')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('placanueva') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('lugar'), 'has-success': fields.lugar && fields.lugar.valid }">
    <label for="lugar" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.gpstransfer.columns.lugar') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.lugar" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('lugar'), 'form-control-success': fields.lugar && fields.lugar.valid}" id="lugar" name="lugar" placeholder="{{ trans('admin.gpstransfer.columns.lugar') }}">
        <div v-if="errors.has('lugar')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('lugar') }}</div>
    </div>
</div>

<div class="form-check row" :class="{'has-danger': errors.has('posicion'), 'has-success': fields.posicion && fields.posicion.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="posicion" type="checkbox" v-model="form.posicion" v-validate="''" data-vv-name="posicion"  name="posicion_fake_element">
        <label class="form-check-label" for="posicion">
            {{ trans('admin.gpstransfer.columns.posicion') }}
        </label>
        <input type="hidden" name="posicion" :value="form.posicion">
        <div v-if="errors.has('posicion')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('posicion') }}</div>
    </div>
</div>

<div class="form-check row" :class="{'has-danger': errors.has('panico'), 'has-success': fields.panico && fields.panico.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="panico" type="checkbox" v-model="form.panico" v-validate="''" data-vv-name="panico"  name="panico_fake_element">
        <label class="form-check-label" for="panico">
            {{ trans('admin.gpstransfer.columns.panico') }}
        </label>
        <input type="hidden" name="panico" :value="form.panico">
        <div v-if="errors.has('panico')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('panico') }}</div>
    </div>
</div>

<div class="form-check row" :class="{'has-danger': errors.has('cortemotor'), 'has-success': fields.cortemotor && fields.cortemotor.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="cortemotor" type="checkbox" v-model="form.cortemotor" v-validate="''" data-vv-name="cortemotor"  name="cortemotor_fake_element">
        <label class="form-check-label" for="cortemotor">
            {{ trans('admin.gpstransfer.columns.cortemotor') }}
        </label>
        <input type="hidden" name="cortemotor" :value="form.cortemotor">
        <div v-if="errors.has('cortemotor')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('cortemotor') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('otros'), 'has-success': fields.otros && fields.otros.valid }">
    <label for="otros" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.gpstransfer.columns.otros') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.otros" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('otros'), 'form-control-success': fields.otros && fields.otros.valid}" id="otros" name="otros" placeholder="{{ trans('admin.gpstransfer.columns.otros') }}">
        <div v-if="errors.has('otros')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('otros') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('fecha'), 'has-success': fields.fecha && fields.fecha.valid }">
    <label for="fecha" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.gpstransfer.columns.fecha') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.fecha" :config="datePickerConfig" v-validate="'required|date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('fecha'), 'form-control-success': fields.fecha && fields.fecha.valid}" id="fecha" name="fecha" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
        </div>
        <div v-if="errors.has('fecha')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('fecha') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('observacion'), 'has-success': fields.observacion && fields.observacion.valid }">
    <label for="observacion" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.gpstransfer.columns.observacion') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <wysiwyg v-model="form.observacion" v-validate="''" id="observacion" name="observacion" :config="mediaWysiwygConfig"></wysiwyg>
        </div>
        <div v-if="errors.has('observacion')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('observacion') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('usuario'), 'has-success': fields.usuario && fields.usuario.valid }">
    <label for="usuario" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.gpstransfer.columns.usuario') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.usuario" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('usuario'), 'form-control-success': fields.usuario && fields.usuario.valid}" id="usuario" name="usuario" placeholder="{{ trans('admin.gpstransfer.columns.usuario') }}">
        <div v-if="errors.has('usuario')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('usuario') }}</div>
    </div>
</div>



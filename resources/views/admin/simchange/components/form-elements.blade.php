<div class="form-check row" :class="{'has-danger': errors.has('activated'), 'has-success': fields.activated && fields.activated.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="activated" type="checkbox" v-model="form.activated" v-validate="''" data-vv-name="activated"  name="activated_fake_element">
        <label class="form-check-label" for="activated">
            {{ trans('admin.simchange.columns.activated') }}
        </label>
        <input type="hidden" name="activated" :value="form.activated">
        <div v-if="errors.has('activated')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('activated') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('tecnico'), 'has-success': fields.tecnico && fields.tecnico.valid }">
    <label for="tecnico" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.simchange.columns.tecnico') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.tecnico" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('tecnico'), 'form-control-success': fields.tecnico && fields.tecnico.valid}" id="tecnico" name="tecnico" placeholder="{{ trans('admin.simchange.columns.tecnico') }}">
        <div v-if="errors.has('tecnico')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('tecnico') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('nombre'), 'has-success': fields.nombre && fields.nombre.valid }">
    <label for="nombre" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.simchange.columns.nombre') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.nombre" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('nombre'), 'form-control-success': fields.nombre && fields.nombre.valid}" id="nombre" name="nombre" placeholder="{{ trans('admin.simchange.columns.nombre') }}">
        <div v-if="errors.has('nombre')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('nombre') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('placa'), 'has-success': fields.placa && fields.placa.valid }">
    <label for="placa" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.simchange.columns.placa') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.placa" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('placa'), 'form-control-success': fields.placa && fields.placa.valid}" id="placa" name="placa" placeholder="{{ trans('admin.simchange.columns.placa') }}">
        <div v-if="errors.has('placa')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('placa') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('lugar'), 'has-success': fields.lugar && fields.lugar.valid }">
    <label for="lugar" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.simchange.columns.lugar') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.lugar" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('lugar'), 'form-control-success': fields.lugar && fields.lugar.valid}" id="lugar" name="lugar" placeholder="{{ trans('admin.simchange.columns.lugar') }}">
        <div v-if="errors.has('lugar')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('lugar') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('simanterior'), 'has-success': fields.simanterior && fields.simanterior.valid }">
    <label for="simanterior" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.simchange.columns.simanterior') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.simanterior" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('simanterior'), 'form-control-success': fields.simanterior && fields.simanterior.valid}" id="simanterior" name="simanterior" placeholder="{{ trans('admin.simchange.columns.simanterior') }}">
        <div v-if="errors.has('simanterior')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('simanterior') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('simnuevo'), 'has-success': fields.simnuevo && fields.simnuevo.valid }">
    <label for="simnuevo" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.simchange.columns.simnuevo') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.simnuevo" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('simnuevo'), 'form-control-success': fields.simnuevo && fields.simnuevo.valid}" id="simnuevo" name="simnuevo" placeholder="{{ trans('admin.simchange.columns.simnuevo') }}">
        <div v-if="errors.has('simnuevo')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('simnuevo') }}</div>
    </div>
</div>

<div class="form-check row" :class="{'has-danger': errors.has('posicion'), 'has-success': fields.posicion && fields.posicion.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="posicion" type="checkbox" v-model="form.posicion" v-validate="''" data-vv-name="posicion"  name="posicion_fake_element">
        <label class="form-check-label" for="posicion">
            {{ trans('admin.simchange.columns.posicion') }}
        </label>
        <input type="hidden" name="posicion" :value="form.posicion">
        <div v-if="errors.has('posicion')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('posicion') }}</div>
    </div>
</div>

<div class="form-check row" :class="{'has-danger': errors.has('panico'), 'has-success': fields.panico && fields.panico.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="panico" type="checkbox" v-model="form.panico" v-validate="''" data-vv-name="panico"  name="panico_fake_element">
        <label class="form-check-label" for="panico">
            {{ trans('admin.simchange.columns.panico') }}
        </label>
        <input type="hidden" name="panico" :value="form.panico">
        <div v-if="errors.has('panico')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('panico') }}</div>
    </div>
</div>

<div class="form-check row" :class="{'has-danger': errors.has('cortemotor'), 'has-success': fields.cortemotor && fields.cortemotor.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="cortemotor" type="checkbox" v-model="form.cortemotor" v-validate="''" data-vv-name="cortemotor"  name="cortemotor_fake_element">
        <label class="form-check-label" for="cortemotor">
            {{ trans('admin.simchange.columns.cortemotor') }}
        </label>
        <input type="hidden" name="cortemotor" :value="form.cortemotor">
        <div v-if="errors.has('cortemotor')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('cortemotor') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('otros'), 'has-success': fields.otros && fields.otros.valid }">
    <label for="otros" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.simchange.columns.otros') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.otros" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('otros'), 'form-control-success': fields.otros && fields.otros.valid}" id="otros" name="otros" placeholder="{{ trans('admin.simchange.columns.otros') }}">
        <div v-if="errors.has('otros')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('otros') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('fecha'), 'has-success': fields.fecha && fields.fecha.valid }">
    <label for="fecha" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.simchange.columns.fecha') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.fecha" :config="datePickerConfig" v-validate="'required|date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('fecha'), 'form-control-success': fields.fecha && fields.fecha.valid}" id="fecha" name="fecha" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
        </div>
        <div v-if="errors.has('fecha')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('fecha') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('observacion'), 'has-success': fields.observacion && fields.observacion.valid }">
    <label for="observacion" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.simchange.columns.observacion') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <wysiwyg v-model="form.observacion" v-validate="''" id="observacion" name="observacion" :config="mediaWysiwygConfig"></wysiwyg>
        </div>
        <div v-if="errors.has('observacion')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('observacion') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('usuario'), 'has-success': fields.usuario && fields.usuario.valid }">
    <label for="usuario" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.simchange.columns.usuario') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.usuario" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('usuario'), 'form-control-success': fields.usuario && fields.usuario.valid}" id="usuario" name="usuario" placeholder="{{ trans('admin.simchange.columns.usuario') }}">
        <div v-if="errors.has('usuario')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('usuario') }}</div>
    </div>
</div>



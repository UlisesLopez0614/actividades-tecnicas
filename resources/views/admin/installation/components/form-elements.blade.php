<div class="form-group row align-items-center" :class="{'has-danger': errors.has('tecnico'), 'has-success': fields.tecnico && fields.tecnico.valid }">
    <label for="tecnico" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.installation.columns.tecnico') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.tecnico" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('tecnico'), 'form-control-success': fields.tecnico && fields.tecnico.valid}" id="tecnico" name="tecnico" placeholder="{{ trans('admin.installation.columns.tecnico') }}">
        <div v-if="errors.has('tecnico')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('tecnico') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('lugar'), 'has-success': fields.lugar && fields.lugar.valid }">
    <label for="lugar" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.installation.columns.lugar') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.lugar" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('lugar'), 'form-control-success': fields.lugar && fields.lugar.valid}" id="lugar" name="lugar" placeholder="{{ trans('admin.installation.columns.lugar') }}">
        <div v-if="errors.has('lugar')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('lugar') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('observacion'), 'has-success': fields.observacion && fields.observacion.valid }">
    <label for="observacion" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.installation.columns.observacion') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <wysiwyg v-model="form.observacion" v-validate="''" id="observacion" name="observacion" :config="mediaWysiwygConfig"></wysiwyg>
        </div>
        <div v-if="errors.has('observacion')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('observacion') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('fecha'), 'has-success': fields.fecha && fields.fecha.valid }">
    <label for="fecha" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.installation.columns.fecha') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.fecha" :config="datePickerConfig" v-validate="'required|date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('fecha'), 'form-control-success': fields.fecha && fields.fecha.valid}" id="fecha" name="fecha" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
        </div>
        <div v-if="errors.has('fecha')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('fecha') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('otros'), 'has-success': fields.otros && fields.otros.valid }">
    <label for="otros" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.installation.columns.otros') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.otros" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('otros'), 'form-control-success': fields.otros && fields.otros.valid}" id="otros" name="otros" placeholder="{{ trans('admin.installation.columns.otros') }}">
        <div v-if="errors.has('otros')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('otros') }}</div>
    </div>
</div>

<div class="form-check row" :class="{'has-danger': errors.has('cortemotor'), 'has-success': fields.cortemotor && fields.cortemotor.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="cortemotor" type="checkbox" v-model="form.cortemotor" v-validate="''" data-vv-name="cortemotor"  name="cortemotor_fake_element">
        <label class="form-check-label" for="cortemotor">
            {{ trans('admin.installation.columns.cortemotor') }}
        </label>
        <input type="hidden" name="cortemotor" :value="form.cortemotor">
        <div v-if="errors.has('cortemotor')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('cortemotor') }}</div>
    </div>
</div>

<div class="form-check row" :class="{'has-danger': errors.has('panico'), 'has-success': fields.panico && fields.panico.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="panico" type="checkbox" v-model="form.panico" v-validate="''" data-vv-name="panico"  name="panico_fake_element">
        <label class="form-check-label" for="panico">
            {{ trans('admin.installation.columns.panico') }}
        </label>
        <input type="hidden" name="panico" :value="form.panico">
        <div v-if="errors.has('panico')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('panico') }}</div>
    </div>
</div>

<div class="form-check row" :class="{'has-danger': errors.has('posicion'), 'has-success': fields.posicion && fields.posicion.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="posicion" type="checkbox" v-model="form.posicion" v-validate="''" data-vv-name="posicion"  name="posicion_fake_element">
        <label class="form-check-label" for="posicion">
            {{ trans('admin.installation.columns.posicion') }}
        </label>
        <input type="hidden" name="posicion" :value="form.posicion">
        <div v-if="errors.has('posicion')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('posicion') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('telefono'), 'has-success': fields.telefono && fields.telefono.valid }">
    <label for="telefono" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.installation.columns.telefono') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.telefono" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('telefono'), 'form-control-success': fields.telefono && fields.telefono.valid}" id="telefono" name="telefono" placeholder="{{ trans('admin.installation.columns.telefono') }}">
        <div v-if="errors.has('telefono')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('telefono') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('equipo'), 'has-success': fields.equipo && fields.equipo.valid }">
    <label for="equipo" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.installation.columns.equipo') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.equipo" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('equipo'), 'form-control-success': fields.equipo && fields.equipo.valid}" id="equipo" name="equipo" placeholder="{{ trans('admin.installation.columns.equipo') }}">
        <div v-if="errors.has('equipo')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('equipo') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('ip'), 'has-success': fields.ip && fields.ip.valid }">
    <label for="ip" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.installation.columns.ip') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.ip" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('ip'), 'form-control-success': fields.ip && fields.ip.valid}" id="ip" name="ip" placeholder="{{ trans('admin.installation.columns.ip') }}">
        <div v-if="errors.has('ip')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('ip') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('sim'), 'has-success': fields.sim && fields.sim.valid }">
    <label for="sim" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.installation.columns.sim') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.sim" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('sim'), 'form-control-success': fields.sim && fields.sim.valid}" id="sim" name="sim" placeholder="{{ trans('admin.installation.columns.sim') }}">
        <div v-if="errors.has('sim')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('sim') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('imei'), 'has-success': fields.imei && fields.imei.valid }">
    <label for="imei" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.installation.columns.imei') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.imei" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('imei'), 'form-control-success': fields.imei && fields.imei.valid}" id="imei" name="imei" placeholder="{{ trans('admin.installation.columns.imei') }}">
        <div v-if="errors.has('imei')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('imei') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('serie'), 'has-success': fields.serie && fields.serie.valid }">
    <label for="serie" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.installation.columns.serie') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.serie" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('serie'), 'form-control-success': fields.serie && fields.serie.valid}" id="serie" name="serie" placeholder="{{ trans('admin.installation.columns.serie') }}">
        <div v-if="errors.has('serie')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('serie') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('idgps'), 'has-success': fields.idgps && fields.idgps.valid }">
    <label for="idgps" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.installation.columns.idgps') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.idgps" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('idgps'), 'form-control-success': fields.idgps && fields.idgps.valid}" id="idgps" name="idgps" placeholder="{{ trans('admin.installation.columns.idgps') }}">
        <div v-if="errors.has('idgps')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('idgps') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('placa'), 'has-success': fields.placa && fields.placa.valid }">
    <label for="placa" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.installation.columns.placa') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.placa" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('placa'), 'form-control-success': fields.placa && fields.placa.valid}" id="placa" name="placa" placeholder="{{ trans('admin.installation.columns.placa') }}">
        <div v-if="errors.has('placa')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('placa') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('usuario'), 'has-success': fields.usuario && fields.usuario.valid }">
    <label for="usuario" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.installation.columns.usuario') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.usuario" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('usuario'), 'form-control-success': fields.usuario && fields.usuario.valid}" id="usuario" name="usuario" placeholder="{{ trans('admin.installation.columns.usuario') }}">
        <div v-if="errors.has('usuario')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('usuario') }}</div>
    </div>
</div>



<div class="form-group row align-items-center" :class="{'has-danger': errors.has('simgpsnuevo'), 'has-success': fields.simgpsnuevo && fields.simgpsnuevo.valid }">
    <label for="simgpsnuevo" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.gpschange.columns.simgpsnuevo') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.simgpsnuevo" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('simgpsnuevo'), 'form-control-success': fields.simgpsnuevo && fields.simgpsnuevo.valid}" id="simgpsnuevo" name="simgpsnuevo" placeholder="{{ trans('admin.gpschange.columns.simgpsnuevo') }}">
        <div v-if="errors.has('simgpsnuevo')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('simgpsnuevo') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('observacion'), 'has-success': fields.observacion && fields.observacion.valid }">
    <label for="observacion" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.gpschange.columns.observacion') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <wysiwyg v-model="form.observacion" v-validate="''" id="observacion" name="observacion" :config="mediaWysiwygConfig"></wysiwyg>
        </div>
        <div v-if="errors.has('observacion')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('observacion') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('fecha'), 'has-success': fields.fecha && fields.fecha.valid }">
    <label for="fecha" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.gpschange.columns.fecha') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.fecha" :config="datePickerConfig" v-validate="'required|date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('fecha'), 'form-control-success': fields.fecha && fields.fecha.valid}" id="fecha" name="fecha" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
        </div>
        <div v-if="errors.has('fecha')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('fecha') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('otros'), 'has-success': fields.otros && fields.otros.valid }">
    <label for="otros" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.gpschange.columns.otros') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.otros" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('otros'), 'form-control-success': fields.otros && fields.otros.valid}" id="otros" name="otros" placeholder="{{ trans('admin.gpschange.columns.otros') }}">
        <div v-if="errors.has('otros')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('otros') }}</div>
    </div>
</div>

<div class="form-check row" :class="{'has-danger': errors.has('cortemotor'), 'has-success': fields.cortemotor && fields.cortemotor.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="cortemotor" type="checkbox" v-model="form.cortemotor" v-validate="''" data-vv-name="cortemotor"  name="cortemotor_fake_element">
        <label class="form-check-label" for="cortemotor">
            {{ trans('admin.gpschange.columns.cortemotor') }}
        </label>
        <input type="hidden" name="cortemotor" :value="form.cortemotor">
        <div v-if="errors.has('cortemotor')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('cortemotor') }}</div>
    </div>
</div>

<div class="form-check row" :class="{'has-danger': errors.has('panico'), 'has-success': fields.panico && fields.panico.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="panico" type="checkbox" v-model="form.panico" v-validate="''" data-vv-name="panico"  name="panico_fake_element">
        <label class="form-check-label" for="panico">
            {{ trans('admin.gpschange.columns.panico') }}
        </label>
        <input type="hidden" name="panico" :value="form.panico">
        <div v-if="errors.has('panico')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('panico') }}</div>
    </div>
</div>

<div class="form-check row" :class="{'has-danger': errors.has('posicion'), 'has-success': fields.posicion && fields.posicion.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="posicion" type="checkbox" v-model="form.posicion" v-validate="''" data-vv-name="posicion"  name="posicion_fake_element">
        <label class="form-check-label" for="posicion">
            {{ trans('admin.gpschange.columns.posicion') }}
        </label>
        <input type="hidden" name="posicion" :value="form.posicion">
        <div v-if="errors.has('posicion')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('posicion') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('tipogpsnuevo'), 'has-success': fields.tipogpsnuevo && fields.tipogpsnuevo.valid }">
    <label for="tipogpsnuevo" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.gpschange.columns.tipogpsnuevo') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.tipogpsnuevo" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('tipogpsnuevo'), 'form-control-success': fields.tipogpsnuevo && fields.tipogpsnuevo.valid}" id="tipogpsnuevo" name="tipogpsnuevo" placeholder="{{ trans('admin.gpschange.columns.tipogpsnuevo') }}">
        <div v-if="errors.has('tipogpsnuevo')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('tipogpsnuevo') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('telefonogpsnuevo'), 'has-success': fields.telefonogpsnuevo && fields.telefonogpsnuevo.valid }">
    <label for="telefonogpsnuevo" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.gpschange.columns.telefonogpsnuevo') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.telefonogpsnuevo" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('telefonogpsnuevo'), 'form-control-success': fields.telefonogpsnuevo && fields.telefonogpsnuevo.valid}" id="telefonogpsnuevo" name="telefonogpsnuevo" placeholder="{{ trans('admin.gpschange.columns.telefonogpsnuevo') }}">
        <div v-if="errors.has('telefonogpsnuevo')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('telefonogpsnuevo') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('ipgpsnuevo'), 'has-success': fields.ipgpsnuevo && fields.ipgpsnuevo.valid }">
    <label for="ipgpsnuevo" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.gpschange.columns.ipgpsnuevo') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.ipgpsnuevo" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('ipgpsnuevo'), 'form-control-success': fields.ipgpsnuevo && fields.ipgpsnuevo.valid}" id="ipgpsnuevo" name="ipgpsnuevo" placeholder="{{ trans('admin.gpschange.columns.ipgpsnuevo') }}">
        <div v-if="errors.has('ipgpsnuevo')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('ipgpsnuevo') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('tecnico'), 'has-success': fields.tecnico && fields.tecnico.valid }">
    <label for="tecnico" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.gpschange.columns.tecnico') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.tecnico" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('tecnico'), 'form-control-success': fields.tecnico && fields.tecnico.valid}" id="tecnico" name="tecnico" placeholder="{{ trans('admin.gpschange.columns.tecnico') }}">
        <div v-if="errors.has('tecnico')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('tecnico') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('imeigpsnuevo'), 'has-success': fields.imeigpsnuevo && fields.imeigpsnuevo.valid }">
    <label for="imeigpsnuevo" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.gpschange.columns.imeigpsnuevo') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.imeigpsnuevo" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('imeigpsnuevo'), 'form-control-success': fields.imeigpsnuevo && fields.imeigpsnuevo.valid}" id="imeigpsnuevo" name="imeigpsnuevo" placeholder="{{ trans('admin.gpschange.columns.imeigpsnuevo') }}">
        <div v-if="errors.has('imeigpsnuevo')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('imeigpsnuevo') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('seriegpsnuevo'), 'has-success': fields.seriegpsnuevo && fields.seriegpsnuevo.valid }">
    <label for="seriegpsnuevo" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.gpschange.columns.seriegpsnuevo') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.seriegpsnuevo" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('seriegpsnuevo'), 'form-control-success': fields.seriegpsnuevo && fields.seriegpsnuevo.valid}" id="seriegpsnuevo" name="seriegpsnuevo" placeholder="{{ trans('admin.gpschange.columns.seriegpsnuevo') }}">
        <div v-if="errors.has('seriegpsnuevo')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('seriegpsnuevo') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('idgpsnuevo'), 'has-success': fields.idgpsnuevo && fields.idgpsnuevo.valid }">
    <label for="idgpsnuevo" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.gpschange.columns.idgpsnuevo') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.idgpsnuevo" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('idgpsnuevo'), 'form-control-success': fields.idgpsnuevo && fields.idgpsnuevo.valid}" id="idgpsnuevo" name="idgpsnuevo" placeholder="{{ trans('admin.gpschange.columns.idgpsnuevo') }}">
        <div v-if="errors.has('idgpsnuevo')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('idgpsnuevo') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('tipogpsanterior'), 'has-success': fields.tipogpsanterior && fields.tipogpsanterior.valid }">
    <label for="tipogpsanterior" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.gpschange.columns.tipogpsanterior') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.tipogpsanterior" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('tipogpsanterior'), 'form-control-success': fields.tipogpsanterior && fields.tipogpsanterior.valid}" id="tipogpsanterior" name="tipogpsanterior" placeholder="{{ trans('admin.gpschange.columns.tipogpsanterior') }}">
        <div v-if="errors.has('tipogpsanterior')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('tipogpsanterior') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('seriegpsanterior'), 'has-success': fields.seriegpsanterior && fields.seriegpsanterior.valid }">
    <label for="seriegpsanterior" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.gpschange.columns.seriegpsanterior') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.seriegpsanterior" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('seriegpsanterior'), 'form-control-success': fields.seriegpsanterior && fields.seriegpsanterior.valid}" id="seriegpsanterior" name="seriegpsanterior" placeholder="{{ trans('admin.gpschange.columns.seriegpsanterior') }}">
        <div v-if="errors.has('seriegpsanterior')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('seriegpsanterior') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('idgpsanterior'), 'has-success': fields.idgpsanterior && fields.idgpsanterior.valid }">
    <label for="idgpsanterior" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.gpschange.columns.idgpsanterior') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.idgpsanterior" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('idgpsanterior'), 'form-control-success': fields.idgpsanterior && fields.idgpsanterior.valid}" id="idgpsanterior" name="idgpsanterior" placeholder="{{ trans('admin.gpschange.columns.idgpsanterior') }}">
        <div v-if="errors.has('idgpsanterior')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('idgpsanterior') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('lugar'), 'has-success': fields.lugar && fields.lugar.valid }">
    <label for="lugar" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.gpschange.columns.lugar') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.lugar" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('lugar'), 'form-control-success': fields.lugar && fields.lugar.valid}" id="lugar" name="lugar" placeholder="{{ trans('admin.gpschange.columns.lugar') }}">
        <div v-if="errors.has('lugar')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('lugar') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('placa'), 'has-success': fields.placa && fields.placa.valid }">
    <label for="placa" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.gpschange.columns.placa') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.placa" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('placa'), 'form-control-success': fields.placa && fields.placa.valid}" id="placa" name="placa" placeholder="{{ trans('admin.gpschange.columns.placa') }}">
        <div v-if="errors.has('placa')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('placa') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('nombre'), 'has-success': fields.nombre && fields.nombre.valid }">
    <label for="nombre" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.gpschange.columns.nombre') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.nombre" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('nombre'), 'form-control-success': fields.nombre && fields.nombre.valid}" id="nombre" name="nombre" placeholder="{{ trans('admin.gpschange.columns.nombre') }}">
        <div v-if="errors.has('nombre')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('nombre') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('usuario'), 'has-success': fields.usuario && fields.usuario.valid }">
    <label for="usuario" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.gpschange.columns.usuario') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.usuario" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('usuario'), 'form-control-success': fields.usuario && fields.usuario.valid}" id="usuario" name="usuario" placeholder="{{ trans('admin.gpschange.columns.usuario') }}">
        <div v-if="errors.has('usuario')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('usuario') }}</div>
    </div>
</div>

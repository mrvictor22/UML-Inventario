<div class="form-group row align-items-center" :class="{'has-danger': errors.has('nombre'), 'has-success': fields.nombre && fields.nombre.valid }">
    <label for="nombre" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.provedores-tbl.columns.nombre') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.nombre" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('nombre'), 'form-control-success': fields.nombre && fields.nombre.valid}" id="nombre" name="nombre" placeholder="{{ trans('admin.provedores-tbl.columns.nombre') }}">
        <div v-if="errors.has('nombre')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('nombre') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('nombre_empresa'), 'has-success': fields.nombre_empresa && fields.nombre_empresa.valid }">
    <label for="nombre_empresa" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.provedores-tbl.columns.nombre_empresa') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.nombre_empresa" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('nombre_empresa'), 'form-control-success': fields.nombre_empresa && fields.nombre_empresa.valid}" id="nombre_empresa" name="nombre_empresa" placeholder="{{ trans('admin.provedores-tbl.columns.nombre_empresa') }}">
        <div v-if="errors.has('nombre_empresa')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('nombre_empresa') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('email'), 'has-success': fields.email && fields.email.valid }">
    <label for="email" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.provedores-tbl.columns.email') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.email" v-validate="'required|email'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('email'), 'form-control-success': fields.email && fields.email.valid}" id="email" name="email" placeholder="{{ trans('admin.provedores-tbl.columns.email') }}">
        <div v-if="errors.has('email')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('email') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('numer_telefono'), 'has-success': fields.numer_telefono && fields.numer_telefono.valid }">
    <label for="numer_telefono" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.provedores-tbl.columns.numer_telefono') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.numer_telefono" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('numer_telefono'), 'form-control-success': fields.numer_telefono && fields.numer_telefono.valid}" id="numer_telefono" name="numer_telefono" placeholder="{{ trans('admin.provedores-tbl.columns.numer_telefono') }}">
        <div v-if="errors.has('numer_telefono')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('numer_telefono') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('direccion'), 'has-success': fields.direccion && fields.direccion.valid }">
    <label for="direccion" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.provedores-tbl.columns.direccion') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.direccion" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('direccion'), 'form-control-success': fields.direccion && fields.direccion.valid}" id="direccion" name="direccion" placeholder="{{ trans('admin.provedores-tbl.columns.direccion') }}">
        <div v-if="errors.has('direccion')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('direccion') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('ciudad'), 'has-success': fields.ciudad && fields.ciudad.valid }">
    <label for="ciudad" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.provedores-tbl.columns.ciudad') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.ciudad" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('ciudad'), 'form-control-success': fields.ciudad && fields.ciudad.valid}" id="ciudad" name="ciudad" placeholder="{{ trans('admin.provedores-tbl.columns.ciudad') }}">
        <div v-if="errors.has('ciudad')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('ciudad') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('pais'), 'has-success': fields.pais && fields.pais.valid }">
    <label for="pais" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.provedores-tbl.columns.pais') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.pais" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('pais'), 'form-control-success': fields.pais && fields.pais.valid}" id="pais" name="pais" placeholder="{{ trans('admin.provedores-tbl.columns.pais') }}">
        <div v-if="errors.has('pais')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('pais') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('provedor_desde'), 'has-success': fields.provedor_desde && fields.provedor_desde.valid }">
    <label for="provedor_desde" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.provedores-tbl.columns.provedor_desde') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.provedor_desde" :config="datePickerConfig" v-validate="'date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('provedor_desde'), 'form-control-success': fields.provedor_desde && fields.provedor_desde.valid}" id="provedor_desde" name="provedor_desde" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
        </div>
        <div v-if="errors.has('provedor_desde')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('provedor_desde') }}</div>
    </div>
</div>

<div class="form-check row" :class="{'has-danger': errors.has('enabled'), 'has-success': fields.enabled && fields.enabled.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="enabled" type="checkbox" v-model="form.enabled" v-validate="''" data-vv-name="enabled"  name="enabled_fake_element">
        <label class="form-check-label" for="enabled">
            {{ trans('admin.provedores-tbl.columns.enabled') }}
        </label>
        <input type="hidden" name="enabled" :value="form.enabled">
        <div v-if="errors.has('enabled')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('enabled') }}</div>
    </div>
</div>



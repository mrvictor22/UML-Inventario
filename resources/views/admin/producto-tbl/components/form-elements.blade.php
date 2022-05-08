<div class="form-group row align-items-center" :class="{'has-danger': errors.has('nombre'), 'has-success': fields.nombre && fields.nombre.valid }">
    <label for="nombre" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.producto-tbl.columns.nombre') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.nombre" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('nombre'), 'form-control-success': fields.nombre && fields.nombre.valid}" id="nombre" name="nombre" placeholder="{{ trans('admin.producto-tbl.columns.nombre') }}">
        <div v-if="errors.has('nombre')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('nombre') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('prod_cod'), 'has-success': fields.prod_cod && fields.prod_cod.valid }">
    <label for="prod_cod" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.producto-tbl.columns.prod_cod') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.prod_cod" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('prod_cod'), 'form-control-success': fields.prod_cod && fields.prod_cod.valid}" id="prod_cod" name="prod_cod" placeholder="{{ trans('admin.producto-tbl.columns.prod_cod') }}">
        <div v-if="errors.has('prod_cod')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('prod_cod') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('marca'), 'has-success': fields.marca && fields.marca.valid }">
    <label for="marca" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.producto-tbl.columns.marca') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.marca" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('marca'), 'form-control-success': fields.marca && fields.marca.valid}" id="marca" name="marca" placeholder="{{ trans('admin.producto-tbl.columns.marca') }}">
        <div v-if="errors.has('marca')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('marca') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('costo'), 'has-success': fields.costo && fields.costo.valid }">
    <label for="costo" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.producto-tbl.columns.costo') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.costo" v-validate="'required|decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('costo'), 'form-control-success': fields.costo && fields.costo.valid}" id="costo" name="costo" placeholder="{{ trans('admin.producto-tbl.columns.costo') }}">
        <div v-if="errors.has('costo')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('costo') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('precio'), 'has-success': fields.precio && fields.precio.valid }">
    <label for="precio" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.producto-tbl.columns.precio') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.precio" v-validate="'required|decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('precio'), 'form-control-success': fields.precio && fields.precio.valid}" id="precio" name="precio" placeholder="{{ trans('admin.producto-tbl.columns.precio') }}">
        <div v-if="errors.has('precio')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('precio') }}</div>
    </div>
</div>

<div class="form-check row" :class="{'has-danger': errors.has('enabled'), 'has-success': fields.enabled && fields.enabled.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="enabled" type="checkbox" v-model="form.enabled" v-validate="''" data-vv-name="enabled"  name="enabled_fake_element">
        <label class="form-check-label" for="enabled">
            {{ trans('admin.producto-tbl.columns.enabled') }}
        </label>
        <input type="hidden" name="enabled" :value="form.enabled">
        <div v-if="errors.has('enabled')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('enabled') }}</div>
    </div>
</div>



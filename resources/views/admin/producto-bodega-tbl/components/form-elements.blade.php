{{-- <div hidden class="form-group row align-items-center" :class="{'has-danger': errors.has('producto_id'), 'has-success': fields.producto_id && fields.producto_id.valid }">
    <label for="producto_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.producto-bodega-tbl.columns.producto_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.producto_id" v-validate="'integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('producto_id'), 'form-control-success': fields.producto_id && fields.producto_id.valid}" id="producto_id" name="producto_id" placeholder="{{ trans('admin.producto-bodega-tbl.columns.producto_id') }}">
        <div v-if="errors.has('producto_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('producto_id') }}</div>
    </div>
</div> --}}

<div class="form-group row align-items-center"
     :class="{'has-danger': errors.has('producto_id'), 'has-success': this.fields.producto_id && this.fields.producto_id.valid }">
    <label for="producto_id"
    class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">Producto</label>
           <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">

        <multiselect
            v-model="form.producto_id"
            :options="producto_id"
            :multiple="false"
            track-by="id"
            label="nombre"
            tag-placeholder="{{ __('Seleccionar productos') }}"
            placeholder="{{ __('Productos') }}">
        </multiselect>

        <div v-if="errors.has('producto_id')" class="form-control-feedback form-text" v-cloak>@{{
            errors.first('producto_id') }}
        </div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('bodega_id'), 'has-success': fields.bodega_id && fields.bodega_id.valid }">
    <label for="bodega_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.producto-bodega-tbl.columns.bodega_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.bodega_id" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('bodega_id'), 'form-control-success': fields.bodega_id && fields.bodega_id.valid}" id="bodega_id" name="bodega_id" placeholder="{{ trans('admin.producto-bodega-tbl.columns.bodega_id') }}">
        <div v-if="errors.has('bodega_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('bodega_id') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('ubicacion_codigo'), 'has-success': fields.ubicacion_codigo && fields.ubicacion_codigo.valid }">
    <label for="ubicacion_codigo" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.producto-bodega-tbl.columns.ubicacion_codigo') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.ubicacion_codigo" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('ubicacion_codigo'), 'form-control-success': fields.ubicacion_codigo && fields.ubicacion_codigo.valid}" id="ubicacion_codigo" name="ubicacion_codigo" placeholder="{{ trans('admin.producto-bodega-tbl.columns.ubicacion_codigo') }}">
        <div v-if="errors.has('ubicacion_codigo')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('ubicacion_codigo') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('cantidad'), 'has-success': fields.cantidad && fields.cantidad.valid }">
    <label for="cantidad" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.producto-bodega-tbl.columns.cantidad') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.cantidad" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('cantidad'), 'form-control-success': fields.cantidad && fields.cantidad.valid}" id="cantidad" name="cantidad" placeholder="{{ trans('admin.producto-bodega-tbl.columns.cantidad') }}">
        <div v-if="errors.has('cantidad')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('cantidad') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('nota'), 'has-success': fields.nota && fields.nota.valid }">
    <label for="nota" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.producto-bodega-tbl.columns.nota') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea class="form-control" v-model="form.nota" v-validate="''" id="nota" name="nota"></textarea>
        </div>
        <div v-if="errors.has('nota')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('nota') }}</div>
    </div>
</div>



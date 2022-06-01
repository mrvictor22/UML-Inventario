{{-- <div class="form-group row align-items-center" :class="{'has-danger': errors.has('nombre_producto'), 'has-success': fields.nombre_producto && fields.nombre_producto.valid }">
    <label for="nombre_producto" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.compras-tbl.columns.nombre_producto') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.nombre_producto" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('nombre_producto'), 'form-control-success': fields.nombre_producto && fields.nombre_producto.valid}" id="nombre_producto" name="nombre_producto" placeholder="{{ trans('admin.compras-tbl.columns.nombre_producto') }}">
        <div v-if="errors.has('nombre_producto')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('nombre_producto') }}</div>
    </div>
</div> --}}

{{-- <div class="form-group row align-items-center" :class="{'has-danger': errors.has('producto_id'), 'has-success': fields.producto_id && fields.producto_id.valid }">
    <label for="producto_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.compras-tbl.columns.producto_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.producto_id" v-validate="'integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('producto_id'), 'form-control-success': fields.producto_id && fields.producto_id.valid}" id="producto_id" name="producto_id" placeholder="{{ trans('admin.compras-tbl.columns.producto_id') }}">
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

{{-- <div class="form-group row align-items-center" :class="{'has-danger': errors.has('nombre_proveedor'), 'has-success': fields.nombre_proveedor && fields.nombre_proveedor.valid }">
    <label for="nombre_proveedor" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.compras-tbl.columns.nombre_proveedor') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.nombre_proveedor" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('nombre_proveedor'), 'form-control-success': fields.nombre_proveedor && fields.nombre_proveedor.valid}" id="nombre_proveedor" name="nombre_proveedor" placeholder="{{ trans('admin.compras-tbl.columns.nombre_proveedor') }}">
        <div v-if="errors.has('nombre_proveedor')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('nombre_proveedor') }}</div>
    </div>
</div> --}}

{{-- <div class="form-group row align-items-center" :class="{'has-danger': errors.has('proovedor_id'), 'has-success': fields.proovedor_id && fields.proovedor_id.valid }">
    <label for="proovedor_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.compras-tbl.columns.proovedor_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.proovedor_id" v-validate="'integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('proovedor_id'), 'form-control-success': fields.proovedor_id && fields.proovedor_id.valid}" id="proovedor_id" name="proovedor_id" placeholder="{{ trans('admin.compras-tbl.columns.proovedor_id') }}">
        <div v-if="errors.has('proovedor_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('proovedor_id') }}</div>
    </div>
</div> --}}

<div class="form-group row align-items-center"
     :class="{'has-danger': errors.has('proovedor_id'), 'has-success': this.fields.proovedor_id && this.fields.proovedor_id.valid }">
    <label for="proovedor_id"
    class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">Proovedor</label>
           <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">

        <multiselect
            v-model="form.proovedor_id"
            :options="proovedor_id"
            :multiple="false"
            track-by="id"
            label="nombre"
            tag-placeholder="{{ __('Seleccionar proovedor') }}"
            placeholder="{{ __('Proovedor') }}">
        </multiselect>

        <div v-if="errors.has('proovedor_id')" class="form-control-feedback form-text" v-cloak>@{{
            errors.first('proovedor_id') }}
        </div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('descripcion'), 'has-success': fields.descripcion && fields.descripcion.valid }">
    <label for="descripcion" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.compras-tbl.columns.descripcion') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea class="form-control" v-model="form.descripcion" v-validate="''" id="descripcion" name="descripcion"></textarea>
        </div>
        <div v-if="errors.has('descripcion')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('descripcion') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('cant'), 'has-success': fields.cant && fields.cant.valid }">
    <label for="cant" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">Cantidad</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.cant" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('cant'), 'form-control-success': fields.cant && fields.cant.valid}" id="cant" name="cant" placeholder="{{ trans('admin.producto-bodega-tbl.columns.cant') }}">
        <div v-if="errors.has('cant')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('cant') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('fecha_pedido'), 'has-success': fields.fecha_pedido && fields.fecha_pedido.valid }">
    <label for="fecha_pedido" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.compras-tbl.columns.fecha_pedido') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.fecha_pedido" :config="datePickerConfig" v-validate="'date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('fecha_pedido'), 'form-control-success': fields.fecha_pedido && fields.fecha_pedido.valid}" id="fecha_pedido" name="fecha_pedido" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
        </div>
        <div v-if="errors.has('fecha_pedido')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('fecha_pedido') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('fecha_entregado'), 'has-success': fields.fecha_entregado && fields.fecha_entregado.valid }">
    <label for="fecha_entregado" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.compras-tbl.columns.fecha_entregado') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.fecha_entregado" :config="datePickerConfig" v-validate="'date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('fecha_entregado'), 'form-control-success': fields.fecha_entregado && fields.fecha_entregado.valid}" id="fecha_entregado" name="fecha_entregado" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
        </div>
        <div v-if="errors.has('fecha_entregado')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('fecha_entregado') }}</div>
    </div>
</div>

<div class="form-check row" :class="{'has-danger': errors.has('enabled'), 'has-success': fields.enabled && fields.enabled.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="enabled" type="checkbox" v-model="form.enabled" v-validate="''" data-vv-name="enabled"  name="enabled_fake_element">
        <label class="form-check-label" for="enabled">
            {{ trans('admin.compras-tbl.columns.enabled') }}
        </label>
        <input type="hidden" name="enabled" :value="form.enabled">
        <div v-if="errors.has('enabled')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('enabled') }}</div>
    </div>
</div>



<div class="form-group row align-items-center" :class="{'has-danger': errors.has('date_devolucion'), 'has-success': fields.date_devolucion && fields.date_devolucion.valid }">
    <label for="date_devolucion" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">Fecha de devolucion</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.date_devolucion" :config="datePickerConfig" v-validate="'date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('date_devolucion'), 'form-control-success': fields.date_devolucion && fields.date_devolucion.valid}" id="date_devolucion" name="date_devolucion" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
        </div>
        <div v-if="errors.has('date_devolucion')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('date_devolucion') }}</div>
    </div>
</div>



<div class="form-group row align-items-center" :class="{'has-danger': errors.has('cantidad_devolucion'), 'has-success': fields.cantidad_devolucion && fields.cantidad_devolucion.valid }">
    <label for="cantidad_devolucion" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">Cantidad de producto devuelto</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.cantidad_devolucion" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('cantidad_devolucion'), 'form-control-success': fields.cantidad_devolucion && fields.cantidad_devolucion.valid}" id="cantidad_devolucion" name="cantidad_devolucion" placeholder="Cantidad a devolver">
        <div v-if="errors.has('cantidad_devolucion')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('cantidad_devolucion') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('nota_devolucion'), 'has-success': fields.nota_devolucion && fields.nota_devolucion.valid }">
    <label for="nota_devolucion" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">Nota devoluciones</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea class="form-control" v-model="form.nota_devolucion" v-validate="''" id="nota_devolucion" name="nota_devolucion"></textarea>
        </div>
        <div v-if="errors.has('nota_devolucion')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('nota_devolucion') }}</div>
    </div>
</div>



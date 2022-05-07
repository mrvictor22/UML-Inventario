@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.bodega-tbl.actions.edit', ['name' => $bodegaTbl->id]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <bodega-tbl-form
                :action="'{{ $bodegaTbl->resource_url }}'"
                :data="{{ $bodegaTbl->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.bodega-tbl.actions.edit', ['name' => $bodegaTbl->id]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.bodega-tbl.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </bodega-tbl-form>

        </div>
    
</div>

@endsection
@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.compras-tbl.actions.edit', ['name' => $comprasTbl->id]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <compras-tbl-form
                :action="'{{ $comprasTbl->resource_url }}'"
                :data="{{ $comprasTbl->toJson() }}"
                :producto_id="{{$producto_tbl->toJson()}}"
                :proovedor_id="{{$provedores_tbl->toJson()}}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.compras-tbl.actions.edit', ['name' => $comprasTbl->id]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.compras-tbl.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </compras-tbl-form>

        </div>
    
</div>

@endsection
@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.producto-tbl.actions.edit', ['name' => $productoTbl->id]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <producto-tbl-form
                :action="'{{ $productoTbl->resource_url }}'"
                :data="{{ $productoTbl->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.producto-tbl.actions.edit', ['name' => $productoTbl->id]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.producto-tbl.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </producto-tbl-form>

        </div>
    
</div>

@endsection
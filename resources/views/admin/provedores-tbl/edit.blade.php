@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.provedores-tbl.actions.edit', ['name' => $provedoresTbl->email]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <provedores-tbl-form
                :action="'{{ $provedoresTbl->resource_url }}'"
                :data="{{ $provedoresTbl->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.provedores-tbl.actions.edit', ['name' => $provedoresTbl->email]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.provedores-tbl.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </provedores-tbl-form>

        </div>
    
</div>

@endsection
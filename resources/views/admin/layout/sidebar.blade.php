<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.content') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/bodega-tbls') }}"><i class="nav-icon icon-location-pin"></i> {{ trans('admin.bodega-tbl.title') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/provedores-tbls') }}"><i class="nav-icon icon-user-following"></i> {{ trans('admin.provedores-tbl.title') }}</a></li>
           
          
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/producto-tbls') }}"><i class="nav-icon icon-bag"></i> {{ trans('admin.producto-tbl.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/producto-bodega-tbls') }}"><i class="nav-icon icon-flag"></i> {{ trans('admin.producto-bodega-tbl.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/compras-tbls') }}"><i class="nav-icon icon-book-open"></i> {{ trans('admin.compras-tbl.title') }}</a></li>
           {{-- Do not delete me :) I'm used for auto-generation menu items --}}

            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.settings') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/admin-users') }}"><i class="nav-icon icon-user"></i> {{ __('Manage access') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/roles') }}"><i class="nav-icon icon-energy"></i> {{ trans('admin.role.title') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/translations') }}"><i class="nav-icon icon-location-pin"></i> {{ __('Translations') }}</a></li>
            {{-- Do not delete me :) I'm also used for auto-generation menu items --}}
            {{--<li class="nav-item"><a class="nav-link" href="{{ url('admin/configuration') }}"><i class="nav-icon icon-settings"></i> {{ __('Configuration') }}</a></li>--}}
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>

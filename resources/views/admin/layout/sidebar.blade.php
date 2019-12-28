<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.content') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/technicians') }}"><i class="nav-icon icon-magnet"></i> {{ trans('admin.technician.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/installations') }}"><i class="nav-icon icon-puzzle"></i> {{ trans('admin.installation.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/revisions') }}"><i class="nav-icon icon-magnet"></i> {{ trans('admin.revision.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/gpschanges') }}"><i class="nav-icon icon-diamond"></i> {{ trans('admin.gpschange.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/simchanges') }}"><i class="nav-icon icon-umbrella"></i> {{ trans('admin.simchange.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/uninstallations') }}"><i class="nav-icon icon-diamond"></i> {{ trans('admin.uninstallation.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/gpstransfers') }}"><i class="nav-icon icon-flag"></i> {{ trans('admin.gpstransfer.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/homologations') }}"><i class="nav-icon icon-plane"></i> {{ trans('admin.homologation.title') }}</a></li>
           {{-- Do not delete me :) I'm used for auto-generation menu items --}}

            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.settings') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/admin-users') }}"><i class="nav-icon icon-user"></i> {{ __('Manage access') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/translations') }}"><i class="nav-icon icon-location-pin"></i> {{ __('Translations') }}</a></li>
            {{-- Do not delete me :) I'm also used for auto-generation menu items --}}
            {{--<li class="nav-item"><a class="nav-link" href="{{ url('admin/configuration') }}"><i class="nav-icon icon-settings"></i> {{ __('Configuration') }}</a></li>--}}
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>

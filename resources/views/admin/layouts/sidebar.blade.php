<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('admin.main.index') }}" class="brand-link d-flex align-items-center">
        <div class="brand-image img-circle"><i class="fas fa-school"></i></div>
        <span class="brand-text font-weight-light">{{ config('app.name') }}_student</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('admin.layouts.menu')
            </ul>
        </nav>
    </div>

</aside>

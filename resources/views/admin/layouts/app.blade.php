<x-laravel-ui-adminlte::adminlte-layout>

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <!-- Main Header -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                                class="fas fa-bars"></i></a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="{{ route('admin.main.index') }}" class="nav-link">Главная</a>
                    </li>
                </ul>

                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item d-flex align-items-center">
                        <a class="nav-link" href="/admin/users/{{ Auth::user()->id }}" role="button">
                            <i class="fas fa-user"></i> {{ Auth::user()->name }}
                        </a>
                    </li>
                    <li class="nav-item d-flex align-items-center">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <input type="submit" value="Выход" class="btn btn-xs btn-success">
                        </form>
                    </li>
                </ul>
            </nav>

            <!-- Left side column. contains the logo and sidebar -->
            @include('admin.layouts.sidebar')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                @yield('content')
            </div>

            <!-- Main Footer -->
            <footer class="main-footer">
                <div class="float-right d-none d-sm-block">
                    <b>Version</b> 3.1.0
                </div>
                <span><a href="https://adminlte.io/themes/v3/">Live Preview</a></span>
            </footer>
        </div>
    </body>
    <style>
        .custom-file-input:lang(en)~.custom-file-label::after{  content: '...'; }
    </style>
    <script type="text/javascript">
        const showFile = (input) => {
            let file = input.files[0];
            var node = input.parentNode.querySelector('.custom-file-label');
            if (node) {
                node.textContent = `${file.name} - ${formatBytes(file.size)}`;
            }
        }

        const formatBytes = (bytes, decimals = 2) => {
            if (!+bytes) return '0 Bytes';
            const k = 1024;
            const dm = decimals < 0 ? 0 : decimals;
            const sizes = ['Bytes', 'KiB', 'MiB', 'GiB', 'TiB', 'PiB', 'EiB', 'ZiB', 'YiB'];
            const i = Math.floor(Math.log(bytes) / Math.log(k));
            return `${parseFloat((bytes / Math.pow(k, i)).toFixed(dm))} ${sizes[i]}`;
        }
    </script>
</x-laravel-ui-adminlte::adminlte-layout>

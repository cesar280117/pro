<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sistema NOM</title>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/plantilla.js') }}"></script>


    <!-- Styles -->
    <link href="{{ asset('css/plantilla.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @livewireStyles
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div id="app">
        <div class="wrapper">

            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                    </li>
                </ul>


                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">

                   @auth         

                        <li class="nav-item d-none d-sm-inline-block dropdown">
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                                    <strong class="text-uppercase"
                                        style="font-size: 18px">{{ Auth::user()->nombre }}</strong> <span></span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    
                                    @livewire('login.logout')

                                </div>

                            </div>

                        </li>


                        <li class="nav-item d-block d-sm-none dropdown">
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-cogs"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    @livewire('login.logout')

                                </div>

                            </div>

                        </li>



                        <li class="nav-item nav-item d-sm-inline-block dropdown">
                            <a title="Modificar datos de usuario" class="nav-link" href="{{ route('usuarios.edit',Auth::user()->id) }}">
                                <i style="font-size: 18px" class="fa fa-user"></i>
                            </a>
                        </li>


                    @endauth

                </ul>
            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->

                @auth
                    
                    <a href="{{ url('/empresas') }}" class="brand-link">
                        <img style="width: 60px;height:60px" src="{{ asset('storage/' . Auth::user()->foto) }}" alt="logo"
                            class="img-circle elevation-3" style="opacity: .8">
                        <span class="brand-text font-weight-light">{{ Auth::user()->nombre }}</span>
                    </a>
                @endauth


                <!-- Sidebar -->
                <div class="sidebar">

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">

                            @auth
                            <li class="nav-item">
                                <a href="/inicio/usuarios"
                                    class="{{ Request::path() === 'inicio/usuarios' ? 'nav-link active' : 'nav-link' }}">
                                    <i class="nav-icon fas fa-home"></i>
                                    <p>Inicio</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="/usuarios"
                                    class="{{ Request::path() === 'usuarios' ? 'nav-link active' : 'nav-link' }}">
                                    <i class="nav-icon fa fa-user"></i>
                                    <p>Usuarios</p>
                                    <?php $total_usuarios = DB::connection('mysql2')
                                    ->table('users')
                                    ->count(); ?>
                                    <p class="badge badge-pill badge-danger float-right">{{ $total_usuarios }} </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="/empresas"
                                    class="{{ Request::path() === 'empresas' ? 'nav-link active' : 'nav-link' }}">
                                    <i class="nav-icon fas fa-building"></i>
                                    <p>
                                        <?php $total_empresas = DB::connection('mysql2')
                                        ->table('empresas')
                                        ->count(); ?>
                                        Empresas <p class="badge badge-pill badge-danger float-right">
                                            {{ $total_empresas }}</p>
                                    </p>
                                </a>
                            </li>



                            {{-- <li class="nav-item">
                                <a href="/sucursales"
                                    class="{{ Request::path() === 'sucursales' ? 'nav-link active' : 'nav-link' }}">
                                    <i class="nav-icon fas fa-warehouse"></i>
                                    <p>
                                        <?php //$total_sucurales = DB::connection('mysql2')
                                        //->table('sucursales')
                                        //->count(); ?>
                                        Sucursales <p class="badge badge-pill badge-danger float-right">
                                            {{ $total_sucurales }}</p>
                                    </p>
                                </a>
                            </li> --}}


                            @endauth

                           

                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">

                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <section class="content">
                    @yield('content')

                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <!-- NO QUITAR -->
                <strong>Sistema administrativo NOM
                    <div class="float-right d-none d-sm-inline-block">
                        <b>Version</b> 1.0
                    </div>
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
    </div>

    @livewireScripts
</body>

</html>

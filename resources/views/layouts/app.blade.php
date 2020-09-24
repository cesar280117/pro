<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sistema NOM</title>



    <!-- Styles -->
    <link href="{{ asset('css/plantilla.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/plantilla.js') }}"></script>

    @livewireStyles
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div>
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
                    @if (Auth::user()->nombre_empresa)
                        @auth('empresas')
                            <li class="nav-item d-block d-sm-none dropdown">
                                <div class="dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                                        <i class="fa fa-cogs"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                        <a href="{{ route('empresas.update-datos', Auth::user()->id) }}"
                                            title="Modificar datos personales de la empresa" class="dropdown-item"><i
                                                class="fa fa-edit"></i> Modificar información
                                        </a>
                                        <a href="{{ route('empresas.show-datos', Auth::user()->id) }}"
                                            title="Vér los datos personales de la empresa tanto como las sucursales registradas de la empresa"
                                            class="dropdown-item"><i class="fas fa-eye"></i> Vér informarción
                                        </a>
                                        @livewire('login.logout-empresas')

                                    </div>

                                </div>

                            </li>
                        @endif
                    @endauth


                    @if (Auth::user()->nombre_sucursal)
                        @auth('sucursales')
                            <li class="nav-item d-block d-sm-none dropdown">
                                <div class="dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                                        <i class="fa fa-cogs"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                        <a href="{{ route('empresas.show-datos', Auth::user()->id) }}"
                                            title="Vér los datos personales de la empresa tanto como las sucursales registradas de la empresa"
                                            class="dropdown-item"><i class="fas fa-eye"></i> Vér informarción
                                        </a>
                                        @livewire('login.logout-sucursales')

                                    </div>

                                </div>

                            </li>
                        @endif
                    @endauth


                 



                    <li class="nav-item d-none d-sm-inline-block  dropdown">
                        <div class="dropdown">

                            @if (Auth::user()->nombre_empresa)
                                @auth('empresas')
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                                        <strong class="text-uppercase"
                                            style="font-size: 18px">{{ Auth::user()->nombre_empresa }}</strong>
                                        <span>({{ Auth::user()->rfc }})</span>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a href="{{ route('empresas.update-datos', Auth::user()->id) }}"
                                            title="Modificar datos personales de la empresa" class="dropdown-item"><i
                                                class="fa fa-edit"></i> Modificar información
                                        </a>
                                        <a href="{{ route('empresas.show-datos', Auth::user()->id) }}"
                                            title="Vér los datos personales de la empresa tanto como las sucursales registradas de la empresa"
                                            class="dropdown-item"><i class="fas fa-eye"></i> Vér informarción
                                        </a>
                                        @livewire('login.logout-empresas')

                                    </div>
                                @endauth
                            @endif

                            @if (Auth::user()->nombre_sucursal)
                                @auth('sucursales')
                                    <a class="nav-link dropdown-toggle text-uppercase text-uppercase" data-toggle="dropdown"
                                        href="#">
                                        <strong class="text-uppercase"
                                            style="font-size: 18px">{{ Auth::user()->nombre_sucursal }}({{ Auth::user()->domicilio }})</strong>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a href="{{ route('sucursales.show-datos', Auth::user()->id) }}"
                                            class="dropdown-item"><i class="fas fa-eye"></i> Vér informarción
                                        </a>
                                        @livewire('login.logout-sucursales')

                                    </div>
                                @endauth
                            @endif



                              {{-- información del portal para el empleado --}}
                              @if (Auth::guard('empleados')->check())
                              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                                  <strong class="text-uppercase"
                                      style="font-size: 18px">{{ Auth::user()->primer_nombre.' '.Auth::user()->segundo_nombre.' '.Auth::user()->apellido_paterno }}</strong>
                                  <span>({{ Auth::user()->id }})</span>
                              </a>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  
                                  @livewire('login.logout-empleados')

                          @endif




                        </div>

                    </li>

                    @auth('empresas')
                        <li class="nav-item nav-item d-sm-inline-block dropdown">

                            <a title="cambiar de centro de trabajo" class="nav-link" href="{{ route('login.seleccion') }}">
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

                @if (Auth::user()->nombre_empresa)
                    @auth('empresas')
                        <a href="#" class="brand-link">
                            <img style="width: 60px;height:60px" src="{{ asset('storage/' . Auth::user()->logo_empresa) }}"
                                alt="logo" class="img-circle elevation-3" style="opacity: .8">
                            <span style="font-size:12px"
                                class="brand-text text-uppercase font-weight-light"><i class="fa fa-circle text-success"></i> {{ Auth::user()->nombre_empresa }}</span>

                        </a>
                    @endauth
                @endif


                @if (Auth::user()->nombre_sucursal)
                    @auth('sucursales')
                        <a href="#" class="brand-link">
                            <img style="width: 60px;height:60px" src="{{ asset('storage/' . Auth::user()->logo_sucursal) }}"
                                alt="logo" class="img-circle elevation-3" style="opacity: .8">
                            <span style="font-size:12px" class="brand-text font-weight-light"><i class="fa fa-circle text-success"></i> {{ Auth::user()->nombre_sucursal }}</span>

                        </a>
                    @endauth
                @endif


                @if (Auth::guard('empleados')->check())
                <a href="#" class="brand-link">
                    <img style="width: 60px;height:60px" src="{{ asset('storage/' . Auth::user()->foto_empleado) }}"
                        alt="logo" class="img-circle elevation-3" style="opacity: .8">
                    <span style="font-size:12px" class="brand-text font-weight-light text-uppercase"> <i class="fa fa-circle text-success"></i> {{ Auth::user()->primer_nombre.' '.Auth::user()->apellido_paterno}} </span><br>

                </a>
                @endif


                <!-- Sidebar -->
                <div class="sidebar">

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">

                            @if (Auth::guard('empresas')->check() || Auth::guard('sucursales')->check())
                                <li class="nav-item">
                                    <a href="/inicio"
                                        class="{{ Request::path() === 'inicio' ? 'nav-link active' : 'nav-link' }}">
                                        <i class="nav-icon fas fa-home"></i>
                                        <p>Inicio</p>
                                    </a>
                                </li>



                                @if (Auth::user()->nombre_empresa)
                                <li class="nav-item">
                                    <a href="/sucursales"
                                        class="{{ Request::path() === 'sucursales' ? 'nav-link active' : 'nav-link' }}">
                                        <i class="nav-icon fas fa-warehouse"></i>
                                        <p>
                                            <?php $total_sucurales = DB::connection('mysql2')
                                            ->table('sucursales')
                                            ->where('id_empresa', Auth::user()->id)
                                            ->count(); ?>
                                            Sucursales <p class="badge badge-pill badge-danger float-right">
                                                {{ $total_sucurales }}</p>
                                        </p>
                                    </a>
                                </li>
                        @endif





                        <li class="nav-item">
                            <a href="/empleados"
                                class="{{ Request::path() === 'empleados' ? 'nav-link active' : 'nav-link' }}">
                                <i class="nav-icon fa fa-user"></i>
                                <p>
                                    <?php $total_empleados = DB::connection('mysql')
                                    ->table('empleados')
                                    ->where('id_empresa', Auth::user()->id)
                                    ->count(); ?>
                                    Empleados <p class="badge  badge-danger float-right">
                                        {{ $total_empleados }}</p>
                                </p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="/jornadas"
                                class="{{ Request::path() === 'jornadas' ? 'nav-link active' : 'nav-link' }}">
                                <i class="nav-icon fa fa-calendar"></i>
                                <p>
                                    <?php $total_jornadas = DB::connection('mysql')
                                    ->table('jornadas')
                                    ->where('id_empresa', Auth::user()->id)
                                    ->count(); ?>

                                    Jornadas <p class="badge  badge-danger float-right">
                                        {{ $total_jornadas }}</p>
                                </p>
                            </a>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-file"></i>
                                <p>Guías<i class="fas fa-angle-left right"></i></p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/guias/No1"
                                        class="{{ Request::path() === 'guias/No1' ? 'nav-link active' : 'nav-link' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Guía #1</p>
                                        <p class="badge badge-pill badge-danger float-right">
                                            Empleados 1-15</p>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/guias/No2"
                                        class="{{ Request::path() === 'guias/No2' ? 'nav-link active' : 'nav-link' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Guía #2</p>
                                        <p class="badge badge-pill badge-danger float-right">
                                            Empleados 16-50</p>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/guias/No3"
                                        class="{{ Request::path() === 'guias/No3' ? 'nav-link active' : 'nav-link' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Guía #3</p>
                                        <p class="badge badge-pill badge-danger float-right">
                                            Empleados +50</p>
                                        </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="#"
                                        class="{{ Request::path() === 'notas/archivadas' ? 'nav-link active' : 'nav-link' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Guía COVID-19</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                            @endif

                            {{-- menu de secciones para el portal de los empleados --}}
                            @if (Auth::guard('empleados')->check())
                            <li class="nav-item">
                                <a href="/inicio/empleados"
                                    class="{{ Request::path() === 'inicio/empleados' ? 'nav-link active' : 'nav-link' }}">
                                    <i class="nav-icon fas fa-home"></i>
                                    <p>Inicio</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="/empleados/portal/datos"
                                    class="{{ Request::path() === 'empleados/portal/datos' ? 'nav-link active' : 'nav-link' }}">
                                    <i class="nav-icon fas fa-user"></i>
                                    <p>Mis datos</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="/empleados/portal/guias"
                                    class="{{ Request::path() === 'empleados/portal/guias' ? 'nav-link active' : 'nav-link' }}">
                                    <i class="nav-icon fas fa-file"></i>
                                    <p>Guías</p>
                                </a>
                            </li>
                            @endif


                         

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

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agencia APP - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="{{ asset('assets/panel/vendor/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/panel/css/sb-admin-2.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/panel/css/botones.css')}}">

    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

        @yield('styles')
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
                <div class="sidebar-brand-icon">
                <img src="https://i.ibb.co/0tBchLL/logo-2.png" style="width: 40px; height: 40px;" alt="Logo">
                </div>
                <div class="sidebar-brand-text mx-3">Agencia APP</div>
            </a>
            
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('home')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            @if (Auth::user()->rol == 'Admin'|| Auth::user()->rol == 'sig')
            <!-- Heading -->
            <div class="sidebar-heading">
            Gestión del SIG
            </div>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#expediente"
                    aria-expanded="true" aria-controls="expediente">
                    <i class='fas fa-map-marked'></i>
                    <span>Expediente geográfico</span>
                </a>
                <div id="expediente" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Opciones:</h6>
                        <a class="collapse-item" href="{{route('SIG.lista') }}">Ver todo</a>
                        <a class="collapse-item" href="{{route('SIG.create') }}">Registrar expediente</a>
                    </div>
                </div>
            </li>
            @endif
            
            @if (Auth::user()->rol == 'Admin'|| Auth::user()->rol == 'comunicaciones')
            <!-- Heading -->
            <div class="sidebar-heading">
            Sala de prensa
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#medios"
                    aria-expanded="true" aria-controls="medios">
                    <i class='fas fa-newspaper'></i>
                    <span>App en medios</span></a>
                </a>
                <div id="medios" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Opciones:</h6>
                        <a class="collapse-item" href="{{route('medios.lista') }}">Ver todo</a>
                        <a class="collapse-item" href="{{route('medios.create') }}">Registrar noticia</a>
                    </div>
                </div>
                
            </li> 
            @endif

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->
 
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">                   

                    @include('includes.panel.userOptions')
                        
                    </ul>

                </nav>
                <!-- End of Topbar -->
              
                <!-- Begin Page Content -->
                <div class="container-fluid">
                @yield('content')                
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

          

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    @yield('scripts')
    
        <!-- Bootstrap core JavaScript-->
        <script src="{{ asset('assets/panel/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{ asset('assets/panel/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('assets/panel/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
        <script src="{{ asset('assets/panel/js/sb-admin-2.min.js')}}"></script>
        <script src="{{ asset('assets/panel/vendor/chart.js/Chart.min.js')}}"></script>
        <script src="{{ asset('assets/panel/js/demo/chart-area-demo.js')}}"></script>
        <script src="{{ asset('assets/panel/js/demo/chart-pie-demo.js')}}"></script>
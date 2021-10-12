<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>

    @include('includes.admin.style')

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@x.x.x/dist/select2-bootstrap4.min.css">


    <title>SIM PKM UII</title>


    @yield('styles')


</head>

<body id="page-top">
    <nav class="navbar navbar-expand navbar-dark static-top shadow" style="background-color: #093697">
        <a class="navbar-brand mr-1" href="">
            <img src="https://kemahasiswaan.uii.ac.id/wp-content/uploads/2020/12/logo-web-dpk-2.png"
                style="width: 200px;  alt="">
        </a>
        {{-- <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
            <i class="fas fa-bars" style="color:#093697"></i>
        </button> --}}

        <!-- Navbar Search -->
        <form class=" d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            </form>

            <!-- Navbar -->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <span style="color: #F3CF08">
                            {{ Auth::user()->name }} <i class="fas fa-sign-out-alt"></i>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            {{ __('Keluar') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
    </nav>

    <!-- Page Wrapper -->
    <div id="wrapper">
        <div class="d-flex flex-column" style="width: 25%; background-color: #F8F9FC;">
            @include('includes.admin.sidebar')
        </div>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                {{-- @include('includes.navbar') --}}

                @yield('content')

            </div>

            <!-- End of Main Content -->


            <!-- Footer -->
            {{-- @include('includes.admin.footer') --}}
            <!-- End of Footer -->

        </div>

        <!-- End of Content Wrapper -->

    </div>

    <footer class="sticky-footer" style="background-color: #093697;">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span style="color:#F3CF08;">Copyright &copy; Direktorat Pembinaan Kemahasiswaan UII © 2021</span>
            </div>
        </div>
    </footer>
   
    @stack('scripts')
</body>

</html>
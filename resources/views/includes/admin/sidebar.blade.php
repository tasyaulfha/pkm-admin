

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
                <a class = "sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard')}}">
                    <!-- <div class="sidebar-brand-text mx-3">
                    KEMAHASISWAAN UII 
                </div> -->
                <img src="{{url('backend/img/logo-kemahasiswaan.png')}}" alt="LOGO KEMAHASISWAAN" class="brand-image-xs logo-xl" style="max-width:200px; margin-top: -7px;">
                </a>
                
                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('dashboard')}}">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">
          

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-clipboard"></i>
                        <span>Usulan</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="{{ route('internal.index') }}">Seleksi Internal</a>
                            <a class="collapse-item" href="{{ route('camp.index') }}">PKM CAMP</a>
                            <a class="collapse-item" href="{{ route('idea.index') }}">PKM Idea Challange</a>
                        </div>
                    </div>
                </li>

               
               

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    DATA
                </div>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('skema.index')}}">
                    <i class="fa fa-list-alt" aria-hidden="true"></i>
                        <span>Skema PKM</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('dosen.index')}}">
                    <i class="fa fa-list-alt" aria-hidden="true"></i>
                        <span>Data Dosen</span></a>
                </li>

               
                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>



        </ul>
        <!-- End of Sidebar -->

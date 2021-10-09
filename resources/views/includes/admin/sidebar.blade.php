<div class="container-fluid p-4">

    <div class="card">
        <div class="card-body">
            <ul class="sidebar navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>

                    </a>
                </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    
                <li class="nav-item dropdown">
                    
                    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-fw fa-clipboard-list"></i>
                        <span>Usulan</span>
                    </a>
                   
                   
                    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                        <a class="dropdown-item" href="{{ route('idea.index') }}">
                            PKM Idea Challenge</a>

                        <a class="dropdown-item" href="{{ route('camp.index') }}">
                            PKM Camp</a>

                        <a class="dropdown-item" href="{{ route('internal.index') }}">
                            Seleksi Internal</a>

                        
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
        </ul>

        </div>


    </div>
</div>

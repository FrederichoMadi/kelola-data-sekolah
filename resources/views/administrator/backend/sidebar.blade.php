<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
<!-- Sidebar -->
<div class="sidebar">
    <!-- SidebarSearch Form -->
    <div class="form-inline">
    <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
        <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
        </button>
        </div>
    </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="{{ route('school') }}" class="nav-link">
            <i class="fa fa-school nav-icon"></i>
            <p>Data Sekolah</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('guru/dashboard') }}" class="nav-link">
            <i class="fas fa-user nav-icon"></i>
            <p>Data Guru</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('journal') }}" class="nav-link">
            <i class="far fa-newspaper nav-icon"></i>
            <p>Data Berita Sekolah</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('tool') }}" class="nav-link">
            <i class="fas fa-tools nav-icon"></i>
            <p>Data Peralatan</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('course') }}" class="nav-link">
            <i class="fas fa-book-open nav-icon"></i>
            <p>Data Mata Pelajaran</p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
             <i class="fas fa-sign-out-alt nav-icon"></i>
             <p>{{  __('Logout') }}</p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>
        </li>

        
    </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>


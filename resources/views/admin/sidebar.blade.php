  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-1">
      <!-- Brand Logo -->
      <a class="brand-link">
        <img src="/logo.png" alt="DeScience Logo" class="img-fluid py-4" >
        <span class="brand-text font-weight-light"></span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar"><br><br>
        <!-- Sidebar user panel (optional) -->
        {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Yofa</a>
          </div>
        </div> --}}

        <!-- Sidebar Menu -->
        <nav class="sidebar px-0 ">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->

            <li class="nav-item py-2">
              <a href="{{ route('guru.index')}}" class="nav-link">
                <i class="nav-icon fas fa-chalkboard-teacher" style="color:#464255"></i>
                <p class="text-gray-500 ">
                  Guru
                </p>
              </a>
            </li>
            <li class="nav-item py-2">
              <a href="{{ route('kelas.index')}}" class="nav-link">
                <i class="nav-icon fas fa-users" style="color:#464255"></i>
                <p class="text-gray-500">
                  Kelas
                </p>
              </a>
            </li>
            <li class="nav-item py-2">
              <a href="{{ route('siswa.index')}}" class="nav-link">
                <i class="nav-icon fas fa-book-reader" style="color:#464255"></i>
                <p class="text-gray-500">
                  Siswa
                </p>
              </a>
            </li>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
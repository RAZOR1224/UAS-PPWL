<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="{{ asset('assets/dist/img/LOGO.jpg') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Perusahaan Kayaraya</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Main Menu Header -->
        <li class="nav-header">Main Menu</li>
        <li class="nav-item">
          <a href="home" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>Dashboard</p>
          </a>
        </li>
        
        <!-- Management Header -->
        <li class="nav-header">Management</li>

        <!-- Manage Permission -->
        <li class="nav-item">
          @canany(['create-role', 'edit-role', 'delete-role'])
          <a href="{{ route('permission') }}" class="nav-link">
            <i class="nav-icon fa fa-list-alt"></i>
            <p>Manage Permission</p>
          </a>
          @endcanany
        </li>

        <!-- Manage Roles -->
        <li class="nav-item">
          @canany(['create-role', 'edit-role', 'delete-role'])
          <a href="{{ route('roles.index') }}" class="nav-link">
            <i class="nav-icon fa fa-list-alt"></i>
            <p>Manage Jabatan</p>
          </a>
          @endcanany
        </li>

        <!-- Manage Users -->
        <li class="nav-item">
          @canany(['create-user', 'edit-user', 'delete-user'])
          <a href="{{ route('users.index') }}" class="nav-link">
            <i class="nav-icon fa fa-list-alt"></i>
            <p>Manage User</p>
          </a>
          @endcanany
        </li>

        <!-- Manage Products -->
        <li class="nav-item">
          @canany(['create-product', 'edit-product', 'delete-product'])
          <a href="{{ route('products.index') }}" class="nav-link">
            <i class="nav-icon fa fa-list-alt"></i>
            <p>Manage Product</p>
          </a>
          @endcanany
        </li>

        <!-- Manage Karyawan -->
        <li class="nav-item">
          @canany(['create-karyawan', 'edit-karyawan', 'delete-karyawan', 'show-karyawan'])
          <a href="{{ route('mahasiswa.index') }}" class="nav-link">
            <i class="nav-icon fa fa-list-alt"></i>
            <p>Manage Karyawan</p>
          </a>
          @endcanany
        </li>

        <!-- Exit -->
        <li class="nav-header">Exit</li>
        <li class="nav-item">
          <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>Logout</p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

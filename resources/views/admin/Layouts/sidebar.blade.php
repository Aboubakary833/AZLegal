<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('logo.png') }}" alt="AdminLTE Logo" class="brand-image">
      <span class="brand-text font-weight-light">Tableau de bord</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('admin.home') }}" class="nav-link" data-path="admin">
              <i class="nav-icon fas fa-envelope"></i>
              <p>Boîte de messagerie</p>
              </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('blog.index') }}" class="nav-link" data-path="admin/blog">
              <i class="nav-icon fas fa-blog"></i>
              <p>Blog</p>
              </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
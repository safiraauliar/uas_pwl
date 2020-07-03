<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="../../index3.html" class="brand-link">
    <img src="<?= base_url(); ?>/lte/dist/img/konohalogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Desa Konohagakure </span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?= base_url('admin_photo/' . session()->get('photo')); ?>" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?= session()->get('fullname') ?> </a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="<?= base_url('dashboard'); ?>" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('admin'); ?>" class="nav-link">
            <i class="nav-icon fas fa-fw fa-user"></i>
            <p>Users</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('penduduk'); ?>" class="nav-link">
            <i class="far fa-user nav-icon"></i>
            <p>Kelola Penduduk</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('berita'); ?>" class="nav-link">
            <i class="fas fa-table nav-icon"></i>
            <p>Kelola Berita</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('laporan') ?>" class="nav-link">
            <i class="far fa-file nav-icon"></i>
            <p>Kelola Laporan</p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Kelola Surat
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">

            <li class="nav-item">
              <a href="<?= base_url('surat/surat_masuk') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Surat Masuk</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('files') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Template Surat</p>
              </a>
            </li>


          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
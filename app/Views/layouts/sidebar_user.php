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
          <a href="<?= base_url('dashboarduser'); ?>" class="nav-link">
            <i class="nav-icon fas fa-fw fa-user"></i>
            <p>Profile</p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Surat
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">

            <li class="nav-item">
              <a href="<?= base_url('surat') ?>" class="nav-link">
                <i class="far fa-file nav-icon"></i>
                <p>Pengajuan Surat</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('files/download_surat') ?>" class="nav-link">
                <i class="fa fa-download nav-icon"></i>
                <p>Download Surat</p>
              </a>
            </li>


          </ul>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('laporan/user/'); ?>" class="nav-link">
            <i class="nav-icon fas fa-fw fa-file"></i>
            <p>Pengajuan Laporan</p>
          </a>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
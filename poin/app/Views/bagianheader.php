<?php
$request = \Config\Services::request();
//$request->uri->getsegment(1)
?>
<div class="dashboard-header">
  <nav class="navbar navbar-expand-lg bg-white fixed-top">
    <a class="navbar-brand" href="<?php echo base_url('') ?>">SPK Point</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto navbar-right-top">
        <li class="nav-item dropdown nav-user">
          <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url('/assets/images/avatar-1.jpg') ?>" alt="" class="user-avatar-md rounded-circle"></a>
          <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
            <div class="nav-user-info">
              <h5 class="mb-0 text-white nav-user-name">Nama</h5>
            </div>
            <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Kelola Profil</a>
            <a class="dropdown-item" href="<?php echo base_url('logout') ?>"><i class="fas fa-power-off mr-2"></i>Log Out</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
</div>
<div class="nav-left-sidebar sidebar-dark">
  <div class="menu-list">
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="d-xl-none d-lg-none" href="<?php echo base_url('') ?>">Dashboard</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav flex-column">
          <a class="nav-link active" href="<?php echo base_url('') ?>"><i class="fa fa-fw fa-user-circle"></i>Dashboard </a>
          <li class="nav-divider">
            Data Master
          </li>
          <a class="nav-link" href="<?php echo base_url('sanksi') ?>"><i class="fa fa-fw fa-user-circle"></i>Data Sanksi</a>
          <a class="nav-link" href="<?php echo base_url('siswa') ?>"><i class="fa fa-fw fa-user-circle"></i>Data Siswa</a>

          <li class="nav-divider">
            Data Analisa
          </li>
          <a class="nav-link" href="<?php echo base_url('kriteria') ?>"><i class="fa fa-fw fa-user-circle"></i>Data Kriteria</a>
          <a class="nav-link" href="<?php echo base_url('indikator') ?>"><i class="fa fa-fw fa-user-circle"></i>Data Indikator</a>

          <li class="nav-divider">
            Proses Analisa
          </li>
          <a class="nav-link" href="<?php echo base_url('proses') ?>"><i class="fa fa-fw fa-user-circle"></i>Cek Poin</a>
          <a class="nav-link" href="<?php echo base_url('') ?>"><i class="fa fa-fw fa-user-circle"></i>Riwayat Poin</a>
        </ul>
      </div>
    </nav>
  </div>
</div>
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
          <a class="nav-link" href="<?php echo base_url('') ?>"><i class="fa fa-fw fa-table"></i>Dashboard </a>
          <li class="nav-divider">
            Data Master
          </li>
          <a class="nav-link" href="<?php echo base_url('siswa') ?>"><i class="fa fa-fw fa-user-circle"></i>Data Siswa</a>
          <a class="nav-link" href="<?php echo base_url('sanksi') ?>"><i class="fa fa-fw fa-tag"></i>Data Jenis Sanksi</a>
          <li class="nav-divider">
            Data Analisa
          </li>
          <a class="nav-link" href="<?php echo base_url('kriteria') ?>"><i class="fa fa-fw fa-recycle"></i>Data Kriteria</a>
          <a class="nav-link" href="<?php echo base_url('indikator') ?>"><i class="fa fa-fw fa-window-restore"></i>Data Indikator</a>
          <li class="nav-divider">
            Proses Analisa
          </li>
          <a class="nav-link" href="<?php echo base_url('proses') ?>"><i class="fa fa-fw fa-tasks"></i>Input Pelanggaran</a>
          <a class="nav-link" href="<?php echo base_url('riwayat') ?>"><i class="fa fa-fw fa-address-book"></i>Riwayat Analisis</a>
          <li class="nav-divider">
            Profil
          </li>
          <a class="nav-link" href="<?php echo base_url('profil') ?>"><i class="fa fa-fw fa-cogs"></i>Kelola Profil</a>
          <a class="nav-link" href="<?php echo base_url('logout') ?>"><i class="fa fa-fw fa-power-off"></i>Log Out</a>
        </ul>
      </div>
    </nav>
  </div>
</div>
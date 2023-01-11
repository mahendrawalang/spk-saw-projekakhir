<!DOCTYPE html>
<html lang="en">
<head>
  <?php echo view('bagianhead') ?>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/vendor/datatables/css/dataTables.bootstrap4.css') ?>">
</head>
<body>
  <div class="dashboard-main-wrapper">
    <?php echo view('bagianheader') ?>
    <div class="dashboard-wrapper">
      <div class="container-fluid dashboard-content">
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
              <h2 class="pageheader-title">Master Data Siswa</h2>
              <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('') ?>" class="breadcrumb-link">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url('riwayat') ?>" class="breadcrumb-link">Riwayat Analisis</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detail Analisis <?php echo $siswa['nama'] ?></li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped table-bordered first">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Waktu</th>
                        <th>Jenis Sanksi</th>
                        <th>Poin</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if(count($data) > 0){ ?>
                        <?php
                        $n = 0;
                        foreach ($data as $d) {
                          $n++;
                          ?>
                          <tr>
                            <td><?php echo $n ?></td>
                            <td><?php echo date('d/m/Y H:i:s', strtotime($d['waktu'])) ?></td>
                            <td><?php echo $d['hasil'] ?></td>
                            <td><?php echo (int)$d['na'] ?></td>
                          </tr>
                        <?php } ?>
                      <?php }else{ ?>
                        <tr>
                          <td colspan="6" align="center">Belum ada data...</td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php echo view('bagianscript') ?>
  <script src="<?php echo base_url('/assets/vendor/slimscroll/jquery.slimscroll.js') ?>"></script>
  <script src="<?php echo base_url('/assets/vendor/multi-select/js/jquery.multi-select.js') ?>"></script>
  <script src="<?php echo base_url('/assets/libs/js/main-js.js') ?>"></script>
  <script src="<?php echo base_url('/assets/js/jquery.dataTables.min.js') ?>"></script>
  <script src="<?php echo base_url('/assets/vendor/datatables/js/dataTables.bootstrap4.min.js') ?>"></script>
  <script src="<?php echo base_url('/assets/js/dataTables.buttons.min.js') ?>"></script>
  <script src="<?php echo base_url('/assets/vendor/datatables/js/buttons.bootstrap4.min.js') ?>"></script>
  <script src="<?php echo base_url('/assets/vendor/datatables/js/data-table.js') ?>"></script>
  <script src="<?php echo base_url('/assets/js/dataTables.rowGroup.min.js') ?>"></script>
  <script src="<?php echo base_url('/assets/js/dataTables.select.min.js') ?>"></script>
  <script src="<?php echo base_url('/assets/js/dataTables.fixedHeader.min.js') ?>"></script>
</body>
</html>
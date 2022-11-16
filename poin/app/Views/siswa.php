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
                    <li class="breadcrumb-item active" aria-current="page">Data Siswa</li>
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
                <a href="<?php echo base_url('siswa/baru') ?>" class="btn btn-space btn-primary btn-sm" style="float: right;">Tambah Data</a>
                <p>Pilih <code>Tambah Data</code> untuk menambahkan data baru, Pilih <code>Edit</code> untuk mengubah data</p>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped table-bordered first">
                    <thead>
                      <tr>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Kelas</th>
                        <th>Alamat</th>
                        <th>**</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if(count($data) > 0){ ?>
                        <?php foreach ($data as $d) {?>
                          <tr>
                            <td><?php echo $d['nis'] ?></td>
                            <td><?php echo $d['nama'] ?></td>
                            <td><?php echo $d['jekel'] ?></td>
                            <td><?php echo $d['kelas'] ?></td>
                            <td><?php echo $d['alamat'] ?></td>
                            <td><a href="<?php echo base_url('siswa/detail/'.$d['idsiswa']) ?>" class="btn btn-space btn-warning btn-xs">Detail</a></td>
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
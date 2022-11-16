<!DOCTYPE html>
<html lang="en">
<head>
  <?php echo view('bagianhead') ?>
</head>
<body>
  <div class="dashboard-main-wrapper">
    <?php echo view('bagianheader') ?>
    <div class="dashboard-wrapper">
      <div class="container-fluid dashboard-content">
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
              <h2 class="pageheader-title">Master Jenis / Kategori Sanksi Pelanggaran</h2>
              <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('') ?>" class="breadcrumb-link">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url('sanksi') ?>" class="breadcrumb-link">Data Sanksi</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
              <form action="<?php echo base_url('sanksi/simpan') ?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputSmall" class="col-form-label">Sanksi</label>
                    <textarea class="form-control form-control-sm" name="sanksi" placeholder="Jenis atau Kategori Sanksi Pelanggaran" rows="3" style="resize: none;" required></textarea>
                  </div>
                  <div class="form-group">
                    <label for="inputSmall" class="col-form-label">Poin</label>
                    <input type="number" name="poin" class="form-control form-control-sm" min="1" max="100" value="1" placeholder="Batas Maksimal Poin Pelanggaran" required>
                  </div>
                </div>
                <div class="card-footer">
                  <a href="<?php echo base_url('sanksi') ?>" class="btn btn-primary btn-xs">Kembali</a>
                  <button type="submit" class="btn btn-success btn-xs" style="float: right;">Simpan Data</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php echo view('bagianscript') ?>
</body>
</html>
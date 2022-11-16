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
              <h2 class="pageheader-title">Master Data Indikator</h2>
              <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('') ?>" class="breadcrumb-link">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url('indikator') ?>" class="breadcrumb-link">Data Indikator</a></li>
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
              <form action="<?php echo base_url('indikator/simpan') ?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputSmall" class="col-form-label">Indikator</label>
                    <input type="text" name="indikator" class="form-control form-control-sm" placeholder="Nama Indikator" required>
                  </div>
                  <div class="form-group">
                    <label for="inputSmall" class="col-form-label">Kriteria</label>
                    <select class="form-control form-control-sm" name="kriteria" required>
                      <?php foreach ($kriteria as $k) {?>
                        <option value="<?php echo $k['idkriteria'] ?>"><?php echo $k['kriteria']." (".$k['kategori'].")" ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="inputSmall" class="col-form-label">Nilai</label>
                    <input type="number" name="nilai" class="form-control form-control-sm" min="1" max="100" value="1" placeholder="Nilai Indikator" required>
                  </div>
                </div>
                <div class="card-footer">
                  <a href="<?php echo base_url('indikator') ?>" class="btn btn-primary btn-xs">Kembali</a>
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
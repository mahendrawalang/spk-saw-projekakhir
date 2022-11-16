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
              <h2 class="pageheader-title">Master Data Kriteria</h2>
              <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('') ?>" class="breadcrumb-link">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url('kriteria') ?>" class="breadcrumb-link">Data Kriteria</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detail Data</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
              <form action="<?php echo base_url('kriteria/ubah') ?>" method="post">
                <input type="hidden" name="id" value="<?php echo $data['idkriteria'] ?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputSmall" class="col-form-label">Kriteria</label>
                    <input type="text" name="kriteria" class="form-control form-control-sm" placeholder="Nama Kriteria" required value="<?php echo $data['kriteria'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="inputSmall" class="col-form-label">Kategori</label>
                    <select class="form-control form-control-sm" name="kategori" required>
                      <option <?php if($data['kategori'] == 'Cost'){echo "selected";} ?>>Cost</option>
                      <option <?php if($data['kategori'] == 'Benefit'){echo "selected";} ?>>Benefit</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="inputSmall" class="col-form-label">Bobot</label>
                    <input type="number" name="bobot" class="form-control form-control-sm" min="1" max="100" value="<?php echo $data['bobot'] ?>" placeholder="Bobot Kriteria" required>
                  </div>
                </div>
                <div class="card-footer">
                  <a href="<?php echo base_url('kriteria') ?>" class="btn btn-primary btn-xs">Kembali</a>
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
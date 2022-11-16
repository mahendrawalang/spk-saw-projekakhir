<?php $db = db_connect(); ?>
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
              <h2 class="pageheader-title">Cek Poin Pelanggaran</h2>
              <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('') ?>" class="breadcrumb-link">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Cek Poin</li>
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
                    <label for="inputSmall" class="col-form-label">Siswa</label>
                    <select class="form-control form-control-sm" name="siswa" required>
                      <?php foreach ($siswa as $s) {?>
                        <option value="<?php echo $s['idsiswa'] ?>"><?php echo $s['nis']." (".$s['nama'].")" ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <hr>
                  <h5>Pilih Indikator Penilaian</h5>
                  <?php
                  foreach ($kriteria as $k) {
                    $indikator = $db->query("select * from indikator where idkriteria = '".$k['idkriteria']."' order by nilai asc")->getResultArray();
                    ?>
                    <div class="form-group">
                      <label for="inputSmall" class="col-form-label">Kriteria <?php echo $k['kriteria']." [".$k['kategori']."]" ?></label>
                      <select class="form-control form-control-sm" name="<?php echo "k".$k['idkriteria'] ?>" required>
                        <?php foreach ($indikator as $i) {?>
                          <option value="<?php echo $i['nilai'] ?>"><?php echo $i['indikator'] ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  <?php } ?>
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
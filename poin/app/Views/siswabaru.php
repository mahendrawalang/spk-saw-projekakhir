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
              <h2 class="pageheader-title">Master Data Siswa</h2>
              <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('') ?>" class="breadcrumb-link">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url('siswa') ?>" class="breadcrumb-link">Data Siswa</a></li>
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
              <form action="<?php echo base_url('siswa/simpan') ?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputSmall" class="col-form-label">NIS</label>
                    <input type="text" name="nis" class="form-control form-control-sm" placeholder="Nomor Induk Siswa (NIS)" required>
                  </div>
                  <div class="form-group">
                    <label for="inputSmall" class="col-form-label">Nama</label>
                    <input type="text" name="nama" class="form-control form-control-sm" placeholder="Nama Lengkap" required>
                  </div>
                  <div class="form-group">
                    <label for="inputSmall" class="col-form-label">Jenis Kelamin</label>
                    <select class="form-control form-control-sm" name="jekel" required>
                      <option>Pria</option>
                      <option>Wanita</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="inputSmall" class="col-form-label">Kelas</label>
                    <input type="text" name="kelas" class="form-control form-control-sm" placeholder="Kelas" list="daftarkelas" required>
                    <datalist id="daftarkelas">
                      <?php foreach ($kelas as $k) {?>
                        <option><?php echo $k['kelas'] ?></option>
                      <?php } ?>
                    </datalist>
                  </div>
                  <div class="form-group">
                    <label for="inputSmall" class="col-form-label">Alamat</label>
                    <textarea class="form-control form-control-sm" name="alamat" rows="3" style="resize: none;" required></textarea>
                  </div>
                </div>
                <div class="card-footer">
                  <a href="<?php echo base_url('siswa') ?>" class="btn btn-primary btn-xs">Kembali</a>
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
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
              <h2 class="pageheader-title">Kelola Profil Akun</h2>
              <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('') ?>" class="breadcrumb-link">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Profil Akun</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
              <form action="<?php echo base_url('ubahprofil') ?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputSmall" class="col-form-label">Username</label>
                    <input type="text" name="username" class="form-control form-control-sm" placeholder="Username Akses Log In" value="<?php echo $data['username'] ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="inputSmall" class="col-form-label">Password</label>
                    <input type="password" name="password" class="form-control form-control-sm" placeholder="Password Akses Log In (kosongkan jika tidak diubah)">
                  </div>
                </div>
                <div class="card-footer">
                  <div class="clearfix">
                    <button type="submit" class="btn btn-success btn-xs" style="float: right;">Simpan Perubahan</button>
                  </div>
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
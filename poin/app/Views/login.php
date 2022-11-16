<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SPK Point</title>
  <link rel="stylesheet" href="<?php echo base_url('/assets/vendor/bootstrap/css/bootstrap.min.css') ?>">
  <link href="<?php echo base_url('/assets/vendor/fonts/circular-std/style.css') ?>" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url('/assets/libs/css/style.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/vendor/fonts/fontawesome/css/fontawesome-all.css') ?>">
  <style>
    html,
    body {
      height: 100%;
    }

    body {
      display: -ms-flexbox;
      display: flex;
      -ms-flex-align: center;
      align-items: center;
      padding-top: 40px;
      padding-bottom: 40px;
    }
  </style>
</head>
<body>
  <div class="splash-container">
    <div class="card ">
      <div class="card-header text-center"><span class="splash-description">Masukkan Akses Log In Sistem</span></div>
      <div class="card-body">
        <form action="<?php echo base_url('login') ?>" method="post">
          <div class="form-group">
            <input class="form-control form-control-lg" type="text" placeholder="Username Akses" name="username" required autofocus>
          </div>
          <div class="form-group">
            <input class="form-control form-control-lg" type="password" placeholder="Password Akses" name="password" required>
          </div>
          <?php if(session()->getFlashData('gagal')){ ?>
            <div class="form-group text-center" style="color:red;">
              <?php echo session()->getFlashData('gagal'); ?>
            </div>
          <?php } ?>
          <button type="submit" class="btn btn-primary btn-lg btn-block">Akses Akun</button>
        </form>
      </div>
    </div>
  </div>
  <script src="<?php echo base_url('/assets/vendor/jquery/jquery-3.3.1.min.js') ?>"></script>
  <script src="<?php echo base_url('/assets/vendor/bootstrap/js/bootstrap.bundle.js') ?>"></script>
</body>
</html>
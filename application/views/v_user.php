<!DOCTYPE html>
<html>
<head>
 <!-- Load file CSS Bootstrap offline -->
<link rel="stylesheet" href="<?php echo base_url()?>/assets/bootstrap/css/bootstrap.min.css">
  <script src="<?php echo base_url()?>/assets/bootstrap/js/jquery-3.3.1.min.js"></script>
</head>
<body>
<div class="jumbotron text-center">
  <h1>Selamat Datang di Halaman User</h1>
  <h4>Halaman ini hanya dapat diakses setelah login</h4>
    <p>Nama : <?php echo $nama; ?></p>
    <p>Username : <?php echo $username; ?></p>
    <p>Email : <?php echo $email; ?></p>
    <a href="<?php echo base_url()?>/login/logout_proses" class="btn btn-warning" role="button">Logout</a>
</div>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Pemilwa Sistem Informasi</title>
    <!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?= base_url()?>/assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url()?>/assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url()?>/assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="<?= base_url()?>/assets/vendor/chartist/css/chartist-custom.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/home.css">
    <!-- ADD CSS -->
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/login.css">
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container-fluid bg-atas">
        <img src="<?= base_url()?>/assets/img/bglogin-atas.png" style="position: absolute; right: 0;">
    </div>
    <div class="container-fluid bg-bawah">
        <img src="<?= base_url()?>/assets/img/bglogin-bawah.png">
    </div>
    <div class="container">
        <div class="kotak">
            <h2>Sudah siap vote?</h2>
            <p>Yuk login!</p>
            <form action="<?php base_url()?>dash/login" method="POST" role="form" class=formStyle>
                <div class="form-group">
                    <input type="text" name="nim" id="input" class="form-control"  title="" placeholder="NIM">
                   <input type="text" name="pass" id="input" class="form-control"  title="" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-lg btn-primary btn-block text-uppercase">Login</button>
            </form>
        </div>
    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>
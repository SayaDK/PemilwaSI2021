<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?= base_url()?>/assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url()?>/assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url()?>/assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="<?= base_url()?>/assets/vendor/chartist/css/chartist-custom.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/home.css">
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400&display=swap" rel="stylesheet">
</head>
<body>
    <!--       navbar          -->
    <nav class="navbar-custom navbar navbar-expand-lg navbar-light">
        <div class="container container-navbar">
            <a class="navbar-brand" href="<?php base_url()?>">
                <img src="<?= base_url()?>/assets/img/logo 1.png" width="68" height="68" class="d-inline-block align-top" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav ml-auto mt-2 mt-sm-0 nav-menu">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php base_url()?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php base_url()?>profil">Profile Calon</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php base_url('')?>vote">Vote</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="hero">
        <div class="head">
            <div class="container">
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">

                </div>
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 header">
                <h2><b>Pemilwa SI 2021</b></h2>
                <p><b>Keluarga Besar Mahasiswa Sistem Informasi Universitas Brawijaya (KBMSI UB)</b> adalah wadah bagi mahasiswa Sistem Informasi Universitas Brawijaya dalam mengembangkan segala potensi yang ada dalam diri mereka dengan semangat kekeluargaan yang erat.</p>                                        
                <a href="<?php base_url()?>vote" class="btn btn-lg btn-primary vote"><b>Lakukan Voting</b></a>                        
                </div>
            </div>    
        </div>
    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Vote-Pemilwa Sistem Informasi</title>
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?= base_url()?>/assets/vendor/bootstrap/css/bootstrap.min.css">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="<?= base_url()?>/assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/vendor/linearicons/style.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/vendor/chartist/css/chartist-custom.css"> 
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/home.css">
    <!-- ADD CSS -->
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/vote.css">
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400&display=swap" rel="stylesheet">
   
</head>

<body>
    <h2 class="vote-judul text-center"><?=$judul?></h2>
    <div class="container-lg">      
      <?php $no; if ($emsi){?>
      <div class="row">
      <?php  foreach ($calon as $c) : ?>
      <div class="col-12 col-md-6 mb-5">
          <div class="card card-emsi mx-auto" style="width: 25rem;">
          <img src="<?= base_url()?>/assets/img/<?=$c->foto?>" alt="...">
            <div class="card-body" style="padding: 0.5rem;">
            <?php $no=$c->no_urut?>
            <p class="card-text"><?= $c->nama?></p>
              <button type="button" class="btn btn-lg btn-primary text-uppercase" data-toggle="modal" data-target="#validate">Vote</button>
            </div>
          </div>
      </div>
        <?php endforeach; } else if(!$emsi){?>
        <div class="row row-cols-2 row-cols-md-4">
        <?php  foreach ($calon as $c) : ?>
        <div class="col mb-5">
            <div class="card card-bpmsi mx-auto">
            <img src="<?= base_url()?>/assets/img/<?=$c->foto?>" alt="...">
              <div class="card-body" style="padding: 0.5rem;">
              <?php $no=$c->no_urut?>
              <p class="card-text"><?= $c->nama?></p>
                <button type="button" class="btn btn-lg btn-primary text-uppercase" data-toggle="modal" data-target="#validate">Vote</button>
              </div>
            </div>
        </div>
        <?php endforeach;}?>
        <div class="col mb-5">
            <div class="card card-emsi mx-auto">
              <img src="<?= base_url()?>/assets/img/lumbung-kosong-bpmsi.png" alt="...">
                <div class="card-body" style="padding: 0.5rem;">
                  <p class="card-text">Lumbung Kosong</p>
                  <button type="button" class="btn btn-lg btn-primary text-uppercase" data-toggle="modal" data-target="#validate">Vote</button>
                </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="validate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body text-center">
            <h4>Yakin ini pilihanmu?</h4>
          </div>
          <div class="modal-footer">
            <form action="<?php base_url()?>save/<?=$no?>" method="post">
            <button type="submit" class="btn btn-primary">Ya!</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal">Tidak</button>
            </form>
          </div>
        </div>
      </div>
    </div>        

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>

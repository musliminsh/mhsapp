<!doctype html>
<html lang="en">
 <head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-tofit=no">
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" type="text/css"
href="<?php echo base_url('asset/css/bootstrap.min.css') ?> "
integrity="sha384-
Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JX
m" crossorigin="anonymous">
 <title><?php echo $judul; ?></title>
 </head>
 <body>
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
 <a class="navbar-brand" href="#">MHSapp</a>
 <button class="navbar-toggler" type="button" data-toggle="collapse" datatarget="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" ariaexpanded="false" aria-label="Toggle navigation">
 <span class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
 <div class="navbar-nav">
 <a class="nav-item nav-link active" href="<?= base_url(); ?>">Home <span class="sr-only"></span></a>
 <a class="nav-item nav-link" href="<?= base_url(); ?>mahasiswa">Mahasiswa</a>
 <!-- mahasiswa -> controller Mahasiswa.php-->
 <a class="nav-item nav-link" href="#">tentang</a>
 <a class="nav-item nav-link disabled" href="#">Disabled</a>
 </div>
 </div>
</nav>
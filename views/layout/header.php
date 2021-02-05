<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Turismo</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?=base_url?>assets/img/Escudo.png" rel="icon">
  <link href="<?=base_url?>assets/img/Escudo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=base_url?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=base_url?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?=base_url?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?=base_url?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?=base_url?>assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?=base_url?>assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?=base_url?>assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?=base_url?>assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="<?=base_url ?>"><span>Turismo Sucre</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="<?=base_url?>">Home</a></li>
          <li><a href="<?=base_url?>LugaresTuristicos/lista">Lugares Turisticos</a></li>
          <!-- <li><a href="services.html">Services</a></li> -->
          <!-- <li><a href="portfolio.html">Portfolio</a></li> -->
          <!-- <li><a href="team.html">Team</a></li> -->
          <li><a href="<?=base_url?>Blog/index">Blog</a></li>
          <li><a href="<?=base_url?>Contactanos/index">Contactanos</a></li>

          <?php
            if (isset($_SESSION['identity'])) {
          ?>
              <li><a href="<?=base_url?>Usuario/registro"><?=$_SESSION['identity']->nombre?></a></li>
              <li><a href="<?=base_url?>Usuario/logout">Serrar Sesión</a></li>
          <?php
            }else{
          ?>
              <li><a href="<?=base_url?>Usuario/registro">Iniciar Sesión</a></li>
          <?php
            }if (isset($_SESSION['admin'])) {
          ?>
              <li><a href="<?=base_url?>Usuario/administracion">Administracion</a></li>
          <?php
            }
          ?>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?=base_url?>assets/adminlte/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url?>assets/adminlte/css/adminlte.min.css">
  <!-- style -->
  <link rel="stylesheet" href="<?=base_url?>assets/adminlte/css/style.css">

  <!-- include CKEditor library -->
  <script src="<?=base_url?>assets/ckeditor/ckeditor.js" charset="utf-8"></script>

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?=base_url?>" class="nav-link">Home</a>
      </li>
    </ul>
    <br><br><br>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">

        <div class="info">
          <a href="#" class="d-block">BIENVENIDO  <?=$_SESSION['identity']->nombre?> <?=$_SESSION['identity']->apellidos?></a>
        </div>
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?=base_url?>Blog/misPublicaciones" class="nav-link">
              <i class="nav-icon fa fa-folder-open"></i>
              <p>
                Mis publicaciones
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=base_url?>Usuario/miPerfil" class="nav-link">
              <i class="nav-icon fa fa-user-circle"></i>
              <p>
                Mi perfil
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=base_url?>Usuario/administracion" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Usuarios
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=base_url?>LugaresTuristicos/administracion" class="nav-link">
              <i class="nav-icon fa fa-cubes"></i>
              <p>
                Lugares Turisticos
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=base_url?>Suscriptores/administrar" class="nav-link">
              <i class="nav-icon fa fa-address-book"></i>
              <p>
                Suscriptores
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=base_url?>Usuario/logout" class="nav-link">
              <i class="nav-icon fa fa-window-close"></i>
              <p>
                Salir
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

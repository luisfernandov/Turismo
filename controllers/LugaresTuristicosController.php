<?php

require_once 'models/LugarTuristico.php';
class LugaresTuristicosController{

  public function index(){
    require_once 'views/lugar/index.php';
  }

  public function lista(){
    require_once 'views/lugar/lugaresTur.php';
  }

  public function vista(){
    require_once 'views/lugar/vista.php';
  }

  public function administracion(){
    Utils::isAdmin();

    $luagarTuristico = new LugarTuristico();
    $luagarTuristico = $luagarTuristico->getAll();
    require_once 'views/administracion/lugaresTuristicos.php';
  }

  public function agregar(){
    Utils::isAdmin();
    require_once 'views/administracion/agregarLugarTuristico.php';
  }

  public function save(){
    Utils::isAdmin();

    if (isset($_POST)) {
      $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
      $descripcion_corta = isset($_POST['descripcion_corta']) ? $_POST['descripcion_corta'] : false;
      $descripcion_larga = isset($_POST['descripcion_larga']) ? $_POST['descripcion_larga'] : false;
      $direccion = isset($_POST['direccion']) ? $_POST['direccion'] : false;
      $ubicacion = isset($_POST['ubicacion']) ? $_POST['ubicacion'] : false;
      $usuario_id = $_SESSION['identity']->id;
      $token = strtr($nombre, " ", "_");
      // $imagen = isset($_POST['imagen']) ? $_POST['imagen'] : false;

      if ($nombre && $descripcion_corta && $descripcion_larga && $direccion && $ubicacion) {
        $lugarTuristico = new LugarTuristico();
        $lugarTuristico->setNombre($nombre);
        $lugarTuristico->setDescripcion_corta($descripcion_corta);
        $lugarTuristico->setDescripcion_larga($descripcion_larga);
        $lugarTuristico->setDireccion($direccion);
        $lugarTuristico->setUbicacion($ubicacion);
        $lugarTuristico->setUsuario_id($usuario_id);
        $lugarTuristico->setToken($token);

        // Guardar la imagen
        if (isset($_FILES['imagen'])) {

          $file = $_FILES['imagen'];
          $filename = $file['name'];
          $mimetype = $file['type'];

          if ($mimetype == "image/jpg" || $mimetype == "image/jpeg" || $mimetype == "image/png" || $mimetype == "image/gif") {

            if (!is_dir('uploads/images/lugaresTuristicos')) {
              mkdir('uploads/images/lugaresTuristicos', 0777, true);
            }

            move_uploaded_file($file['tmp_name'], 'uploads/images/lugaresTuristicos/'.$filename);
            $lugarTuristico->setImagen($filename);
          }

        }

        if (isset($_GET['id'])) {
          $id = $_GET['id'];
          $lugarTuristico->setId($id);
          $save = $lugarTuristico->edit();
        }else {
          $save = $lugarTuristico->save();
        }

        if ($save) {
          $_SESSION['producto'] = "complete";
        }else {
          $_SESSION['producto'] = "failed";
        }
      }else {
        $_SESSION['producto'] = "failed";
      }
    }else {
      $_SESSION['producto'] = "failed";
    }

    header('location: '.base_url.'LugaresTuristicos/administracion');

  }

  public function editarLugarTuristico(){
    Utils::isAdmin();

    if (isset($_GET['id'])) {

      $id = $_GET['id'];
      $edit = true;

      $lugarTuristico = new LugarTuristico();
      $lugarTuristico->setId($id);

      $lt = $lugarTuristico->getOne();

      require_once 'views/administracion/agregarLugarTuristico.php';
    }else {
      header('location: '.base_url.'Producto/gestion');
    }
  }

  public function desactivarLugarTuristico() {
    Utils::isAdmin();

    if (isset($_GET['id'])) {
      $id = $_GET['id'];

      $lugarTuristico = new LugarTuristico();
      $lugarTuristico->setId($id);
      $lugarTuristico->desactivarLugarTuristico();
    }
    header('location: '.base_url.'LugaresTuristicos/administracion');
  }

  public function activarLugarTuristico() {
    Utils::isAdmin();

    if (isset($_GET['id'])) {
      $id = $_GET['id'];

      $lugarTuristico = new LugarTuristico();
      $lugarTuristico->setId($id);
      $lugarTuristico->activarLugarTuristico();
    }
    header('location: '.base_url.'LugaresTuristicos/administracion');
  }


}

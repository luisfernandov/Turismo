<?php
require_once 'models/Usuario.php';
class UsuarioController{

  public function registro(){
    require_once 'views/usuario/registro.php';
  }

  public function save(){

    if (isset($_POST)) {
      $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
      $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
      $email = isset($_POST['email']) ? $_POST['email'] : false;
      $password = isset($_POST['password']) ? $_POST['password'] : false;

      if ($nombre && $apellidos && $email && $password) {

        $usuario = new Usuario();

        $emailExistente = $usuario->verfityEmail($email);
        if ($emailExistente) {
          $_SESSION['datosRegistro'] = array(
            "nombre" => $nombre,
            "apellidos" => $apellidos,
            "email" => $email
          );
          $_SESSION['register'] = 'errorEmail';
        }else {

          $usuario->setNombre($_POST['nombre']);
          $usuario->setApellidos($_POST['apellidos']);
          $usuario->setEmail($_POST['email']);
          $usuario->setPassword($_POST['password']);

          $save = $usuario->save();
          if ($save) {
            $_SESSION['register'] = 'Complete';
          }else {
            $_SESSION['register'] = 'Failed';
          }
        }
      }else {
        $_SESSION['register'] = 'Failed';
      }
    }else {
      $_SESSION['register'] = 'Failed';
    }
    header("location: ".base_url.'Usuario/registro');

  }

  public function login(){

    if (isset($_POST)) {

      $email = isset($_POST['email']) ? $_POST['email'] : false;
      $password = isset($_POST['password']) ? $_POST['password'] : false;

      if ($email && $password) {
        $usuario = new Usuario();
        $usuario->setEmail($_POST['email']);
        $usuario->setPassword($_POST['password']);

        $identity = $usuario->login();

        if ($identity && is_object($identity)) {
          $_SESSION['identity'] = $identity;

          // var_dump($identity);
          // die();

          if ($identity->rol == 'admin') {
            $_SESSION['admin'] = true;
          }
        }else {
          $_SESSION['error_login'] = 'Identificacion fallida';
        }
      }
    }
    header('location: '.base_url);
  }

  public function logout() {
    if (isset($_SESSION['identity'])) {
      unset($_SESSION['identity']);
    }

    if (isset($_SESSION['admin'])) {
      unset($_SESSION['admin']);
    }

    header('location: '.base_url);

  }

  public function administracion(){
    Utils::isAdmin();

    $usuario = new Usuario();
    $usuario = $usuario->getAll();
    require_once 'views/administracion/usuarios.php';
  }

  public function editarUsuario(){
    Utils::isAdmin();
    if (isset($_GET['id'])) {

      $id = $_GET['id'];

      $usuario = new Usuario();
      $usuario->setId($id);

      $user = $usuario->getOne();
    }

    require_once 'views/administracion/editarUsuario.php';
  }

  public function edit(){
    Utils::isAdmin();
    if (isset($_POST)) {
      $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
      $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
      $rol = isset($_POST['rol']) ? $_POST['rol'] : false;
      // $email = isset($_POST['email']) ? $_POST['email'] : false;
      $id = isset($_POST['id']) ? $_POST['id'] : false;

      if ($nombre && $apellidos && $id) {

        $usuario = new Usuario();

        $usuario->setNombre($nombre);
        $usuario->setApellidos($apellidos);
        $usuario->setRol($rol);
        // $usuario->setEmail($_POST['email']);
        $usuario->setId($id);

        $save = $usuario->edit();
        if ($save) {
          $_SESSION['register'] = 'Complete';
        }else {
          $_SESSION['register'] = 'Failed';
        }
      }else {
        $_SESSION['register'] = 'Failed';
      }
    }else {
      $_SESSION['register'] = 'Failed';
    }
    header("location: ".base_url.'Usuario/administracion');
  }

  public function bloquearUsuario() {
    Utils::isAdmin();

    if (isset($_GET['id'])) {
      $id = $_GET['id'];

      $usuario = new Usuario();
      $usuario->setId($id);
      $usuario->bloquearUsuario();
    }
    header('location: '.base_url.'Usuario/administracion');
  }

  public function desbloquearUsuario() {
    Utils::isAdmin();

    if (isset($_GET['id'])) {
      $id = $_GET['id'];

      $usuario = new Usuario();
      $usuario->setId($id);
      $usuario->desbloquearUsuario();
    }
    header('location: '.base_url.'Usuario/administracion');
  }



}

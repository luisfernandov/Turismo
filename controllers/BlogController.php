<?php
require_once 'models/Blog.php';

class BlogController{

  public function index(){
    $blog = new Blog();
    $blog = $blog->getAll();
    require_once 'views/blog/home.php';
  }

  public function vista(){
    if (isset($_GET['token'])) {

      $token = $_GET['token'];

      $blog = new Blog();
      $blog->setToken($token);

      $blog = $blog->getOne($token);

      $post = new Blog();
      $post = $post->getAll();

      require_once 'views/blog/vista.php';
    }else {
      header('location: '.base_url.'Blog/index');
    }

  }

  public function misPublicaciones(){
    $usuario_id = $_SESSION['identity']->id;
    $blog = new Blog();
    $blog->setUsuario_id($usuario_id);
    $blog = $blog->getAllId();
    require_once 'views/administracion/misPublicaciones.php';
  }

  public function crear(){
    require_once 'views/administracion/crearPost.php';
  }

  public function save(){
    Utils::isIdentity();

    if (isset($_POST)) {
      $titulo = isset($_POST['titulo']) ? $_POST['titulo'] : false;
      $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : false;
      $categoria_id = isset($_POST['categoria']) ? $_POST['categoria'] : false;
      $usuario_id = $_SESSION['identity']->id;
      $token = strtr($titulo, " ", "_");
      // $imagen = isset($_POST['imagen']) ? $_POST['imagen'] : false;

      if ($titulo && $descripcion) {
        $blog = new Blog();
        $blog->setUsuario_id($usuario_id);
        $blog->setCategoria_id($categoria_id);
        $blog->setTitulo($titulo);
        $blog->setDescripcion($descripcion);
        $blog->setToken($token);

        // Guardar la imagen
        if (isset($_FILES['imagen'])) {

          $file = $_FILES['imagen'];
          $filename = $file['name'];
          $mimetype = $file['type'];

          if ($mimetype == "image/jpg" || $mimetype == "image/jpeg" || $mimetype == "image/png" || $mimetype == "image/gif") {

            if (!is_dir('uploads/images/blog')) {
              mkdir('uploads/images/blog', 0777, true);
            }

            move_uploaded_file($file['tmp_name'], 'uploads/images/blog/'.$filename);
            $blog->setImagen($filename);
          }

        }

        if (isset($_GET['id'])) {
          $id = $_GET['id'];
          $blog->setId($id);
          $save = $blog->edit();
        }else {
          $save = $blog->save();
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

    header('location: '.base_url.'Blog/misPublicaciones');

  }

  public function editarBlog(){
    Utils::isIdentity();
    if (isset($_GET['token'])) {

      $token = $_GET['token'];
      $edit = true;

      $blog = new Blog();
      $blog->setToken($token);

      $blog = $blog->getOne();

      require_once 'views/administracion/crearPost.php';
    }else {
      header('location: '.base_url.'Blog/misPublicaciones');
    }
  }


}

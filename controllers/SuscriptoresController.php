<?php
require_once 'models/Suscriptores.php';

class SuscriptoresController{

  public function administrar(){
    Utils::isAdmin();

    $suscriptor = new Suscriptores();
    $suscriptor = $suscriptor->getAll();
    require_once 'views/administracion/suscriptores.php';
  }

  public function save(){
    if (isset($_POST)) {
      $email = isset($_POST['email']) ? $_POST['email'] : false;

      if($email){
        $suscriptor = new Suscriptores();
        $suscriptor->setEmail($_POST['email']);
        $suscriptor = $suscriptor->save();
      }

      header("location: ".base_url);
    }
  }

}

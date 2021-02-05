<?php
require_once 'models/Comentario.php';
require_once 'models/LugarTuristico.php';
class ComentarioController{

  public function save(){
    Utils::isIdentity();
    if (isset($_POST)) {
      $comentario = isset($_POST['comentario']) ? $_POST['comentario'] : false;
      $id_lugar_turistico = isset($_POST['id_lugar_turistico']) ? $_POST['id_lugar_turistico'] : false;
      $id_usuario = $_SESSION['identity']->id;
      // echo "</br></br></br></br>";
      // var_dump($comentario);
      // var_dump($id_lugar_turistico);
      // var_dump($id_usuario);
      // die();

      // if ($comenatario && $id_lugar_turistico) {
        // echo "</br></br></br></br>";
        // echo "hola";
        // die();
        $coment = new Comentario();
        $coment->setComentario($comentario);
        $coment->setlugares_turisticos_id($id_lugar_turistico);
        $coment->setUsuario_id($id_usuario);
        $coment = $coment->save();

        $lugarTuristico = new LugarTuristico();
        $lugarTuristico->setId($id_lugar_turistico);

        $lt = $lugarTuristico->getOne();
      // }
    }
    header('location: '.base_url.'LugaresTuristicos/vista&token='.$lt->token);
  }


}

<?php

class Comentario{
  private $id;
  private $usuario_id;
  private $lugares_turisticos_id;
  private $comentario;
  private $fecha;
  private $estado;

  private $db;

  public function __construct() {
    $this->db = DataBase::connect();
  }

  function getId() {
    return $this->id;
  }

  function getUsuario_id() {
    return $this->usuario_id;
  }

  function getLugares_turisticos_id() {
    return $this->lugares_turisticos_id;
  }

  function getComentario() {
    return $this->comentario;
  }

  function getFecha() {
    return $this->fecha;
  }

  function getEstado() {
    return $this->estado;
  }

  function setId($id) {
    $this->id = $id;
  }

  function setUsuario_id($usuario_id) {
    $this->usuario_id = $usuario_id;
  }

  function setlugares_turisticos_id($lugares_turisticos_id) {
    $this->lugares_turisticos_id = $lugares_turisticos_id;
  }

  function setComentario($comentario) {
    $this->comentario = $this->db->real_escape_string($comentario);
  }

  function setEstado($estado) {
    $this->estado = $this->db->real_escape_string($estado);
  }

  public function save() {
    $sql = "INSERT INTO comentarios_lugares_turisticos VALUES(NULL, '{$this->getUsuario_id()}', '{$this->getLugares_turisticos_id()}', '{$this->getComentario()}', NOW(), 1)";

    $save = $this->db->query($sql);

    $result = false;
    if ($save) {
      $result = true;
    }

    return $result;
  }

  public function getAll($token) {
    $sql = "SELECT clt.id, clt.comentario, clt.fecha, clt.estado, clt.lugares_turisticos_id, u.nombre, lt.token
            FROM comentarios_lugares_turisticos as clt
            INNER JOIN lugares_turisticos as lt
            ON clt.lugares_turisticos_id = lt.id
            INNER JOIN usuarios as u
            ON clt.usuario_id = u.id
            WHERE lt.token = '$token' ";
    $comentario = $this->db->query($sql);

    return $comentario;
  }

  public function count($token){
    $sql = "SELECT COUNT(*) as cantidad FROM comentarios_lugares_turisticos as clt
            INNER JOIN lugares_turisticos as lt
            ON clt.lugares_turisticos_id = lt.id
            WHERE lt.token = '$token'
            AND clt.estado = 1";

    $comentario = $this->db->query($sql);

    return $comentario->fetch_object();
  }

  public function bloquearComentario(){
    $sql = "UPDATE comentarios_lugares_turisticos SET estado = '0'";
    $sql .= "WHERE id = {$this->getId()}";

    $save = $this->db->query($sql);

    $result = false;
    if ($save) {
      $result = true;
    }

    return $result;
  }

  public function desbloquearComentario() {
    $sql = "UPDATE comentarios_lugares_turisticos SET estado = '1'";
    $sql .= "WHERE id = {$this->getId()}";

    $save = $this->db->query($sql);

    $result = false;
    if ($save) {
      $result = true;
    }

    return $result;
  }

}

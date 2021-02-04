<?php

class LugarTuristico{
  private $id;
  private $usuario_id;
  private $nombre;
  private $direccion;
  private $descripcion_corta;
  private $descripcion_larga;
  private $ubicacion;
  private $imagen;
  private $token;
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

  function getNombre() {
    return $this->nombre;
  }

  function getDireccion() {
    return $this->direccion;
  }

  function getDescripcion_corta() {
    return $this->descripcion_corta;
  }

  function getDescripcion_larga() {
    return $this->descripcion_larga;
  }

  function getUbicacion() {
    return $this->ubicacion;
  }

  function getImagen() {
    return $this->imagen;
  }

  function getToken() {
    return $this->token;
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

  function setNombre($nombre) {
    $this->nombre = $this->db->real_escape_string($nombre);
  }

  function setDireccion($direccion) {
    $this->direccion = $this->db->real_escape_string($direccion);
  }

  function setDescripcion_corta($descripcion_corta) {
    $this->descripcion_corta = $this->db->real_escape_string($descripcion_corta);
  }

  function setDescripcion_larga($descripcion_larga) {
    $this->descripcion_larga = $this->db->real_escape_string($descripcion_larga);
  }

  function setUbicacion($ubicacion) {
    $this->ubicacion = $this->db->real_escape_string($ubicacion);
  }

  function setImagen($imagen) {
    $this->imagen = $imagen;
  }

  function setToken($token) {
    $this->token = $token;
  }

  function setFecha($fecha) {
    $this->fecha = $fecha;
  }

  function setEstado($estado) {
    $this->estado = $estado;
  }


  public function save() {
    $sql = "INSERT INTO lugares_turisticos VALUES(NULL,
                                        '{$this->getUsuario_id()}',
                                        '{$this->getNombre()}',
                                        '{$this->getDireccion()}',
                                        '{$this->getDescripcion_corta()}',
                                        '{$this->getDescripcion_larga()}',
                                        '{$this->getUbicacion()}',
                                        '{$this->getImagen()}',
                                        '{$this->getToken()}',
                                        CURDATE(),
                                        '1')";

    $save = $this->db->query($sql);

    $result = false;
    if ($save) {
      $result = true;
    }

    return $result;
  }

  public function edit() {
    $sql = "UPDATE lugares_turisticos SET usuario_id = '{$this->getUsuario_id()}',
                                 nombre = '{$this->getNombre()}',
                                 descripcion_corta = '{$this->getDescripcion_corta()}',
                                 descripcion_larga = '{$this->getDescripcion_larga()}',
                                 direccion = '{$this->getDireccion()}',
                                 ubicacion = '{$this->getUbicacion()}'";
    if ($this->getImagen() != null) {
      $sql .= ", imagen = '{$this->getImagen()}'";
    }

    $sql .= "WHERE id = {$this->id}";

    $save = $this->db->query($sql);

    $result = false;
    if ($save) {
      $result = true;
    }

    return $result;
  }

  public function getAll() {
    $sql = "SELECT * FROM lugares_turisticos ORDER BY fecha DESC";
    $luagar_turistico = $this->db->query($sql);

    return $luagar_turistico;
  }

  public function getOne() {
    $sql = "SELECT * FROM lugares_turisticos WHERE id = {$this->getId()}";
    $luagar_turistico = $this->db->query($sql);

    return $luagar_turistico->fetch_object();
  }

  public function desactivarLugarTuristico(){
    $sql = "UPDATE lugares_turisticos SET estado = '0'";
    $sql .= "WHERE id = '{$this->getId()}'";

    $save = $this->db->query($sql);

    $result = false;
    if ($save) {
      $result = true;
    }

    return $result;
  }

  public function activarLugarTuristico(){
    $sql = "UPDATE lugares_turisticos SET estado = '1'";
    $sql .= "WHERE id = '{$this->getId()}'";

    $save = $this->db->query($sql);

    $result = false;
    if ($save) {
      $result = true;
    }

    return $result;
  }

}

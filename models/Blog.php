<?php

class Blog{
  private $id;
  private $usuario_id;
  private $categoria_id;
  private $titulo;
  private $descripcion;
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

  function getCategoria_id() {
    return $this->categoria_id;
  }

  function getTitulo() {
    return $this->titulo;
  }

  function getDescripcion() {
    return $this->descripcion;
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

  function setCategoria_id($categoria_id) {
    $this->categoria_id = $categoria_id;
  }

  function setTitulo($titulo) {
    $this->titulo = $this->db->real_escape_string($titulo);
  }

  function setDescripcion($descripcion) {
    $this->descripcion = $this->db->real_escape_string($descripcion);
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
    $sql = "INSERT INTO blog VALUES(NULL,
                                    '{$this->getUsuario_id()}',
                                    '{$this->getCategoria_id()}',
                                    '{$this->getTitulo()}',
                                    '{$this->getDescripcion()}',
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
    $sql = "UPDATE blog SET titulo = '{$this->getTitulo()}',
                            descripcion = '{$this->getDescripcion()}',
                            categoria_id = '{$this->getCategoria_id()}'";
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

  public function getAllId() {
    $sql = "SELECT * FROM blog WHERE usuario_id = '{$this->getUsuario_id()}'";
    $blog = $this->db->query($sql);

    return $blog;
  }

  public function getAll() {
    $sql = "SELECT * FROM blog as bg
            INNER JOIN usuarios as us
            ON bg.usuario_id = us.id
            ORDER BY fecha DESC";
    $blog = $this->db->query($sql);

    return $blog;
  }

  public function getOne(){
    $sql = "SELECT * FROM blog as bg
            INNER JOIN usuarios as us
            ON bg.usuario_id = us.id
            WHERE token = '{$this->getToken()}'";
    $blog = $this->db->query($sql);

    return $blog->fetch_object();
  }


}

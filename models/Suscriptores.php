<?php

class Suscriptores{

  private $id;
  private $email;
  private $db;

  public function __construct() {
    $this->db = DataBase::connect();
  }

  function getId() {
    return $this->id;
  }

  function getEmail() {
    return $this->email;
  }

  function setId($id) {
    $this->id = $id;
  }

  function setEmail($email) {
    $this->email = $this->db->real_escape_string($email);
  }

  public function save() {
    $sql = "INSERT INTO suscriptores VALUES(NULL, '{$this->getEmail()}', CURDATE())";

    $save = $this->db->query($sql);

    $result = false;
    if ($save) {
      $result = true;
    }

    return $result;
  }

  public function getAll() {
    $sql = "SELECT * FROM suscriptores ORDER BY id DESC";
    $productos = $this->db->query($sql);

    return $productos;
  }
}

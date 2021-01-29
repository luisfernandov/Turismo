<?php

class DataBase{
  public static function connect() {
    $db = new mysqli('localhost', 'root', '', 'db_turismo');
    $db -> query("SET NAMES 'utf8'");

    return $db;
  }
}

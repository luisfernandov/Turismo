<?php
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
}

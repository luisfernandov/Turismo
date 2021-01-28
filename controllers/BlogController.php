<?php
class BlogController{

  public function index(){
    require_once 'views/blog/home.php';
  }

  public function vista(){
    require_once 'views/blog/vista.php';
  }
}

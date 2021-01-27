<?php

function controllers_Autoload($classname) {
  include 'controllers/'.$classname.'.php';
}

spl_autoload_register('controllers_Autoload');

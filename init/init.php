<?php

include('Routes.php');
include('')

function __autoload($class_name) {
     echo $class_name;
      if (file_exists('classes/'.$class_name.'.php')) {

    	require_once'classes/'.$class_name.'.php';

    } else if(file_exists('Controllers/'.$class_name.'.php')) {

    	require_once'Controllers/'.$class_name.'.php';
    	
    }
  }
?>
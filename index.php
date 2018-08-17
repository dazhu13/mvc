<?php

include('init/init.php');

include('Routes.php');

$url = $_SERVER['REQUEST_URI'];

Route::useRoute($url)
?>

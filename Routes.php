<?php
 //require_once('classes/Route.php');

Route::set('/', 'Sample@test');

Route::set('/sample', 'Sample@index');

Route::set('/contact-us','addSample@sample') ;

Route::set('/home', 'Sample@test');

?>
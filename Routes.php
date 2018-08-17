<?php
 //require_once('classes/Route.php');

Route::set('index.php', function() {
	Index::CreateView('index');

});

Route::set('sample', function() {
	Sample::CreateView('Sample');
	

});

Route::set('contact-us', function() {
	echo "contact-us";
});

Route::set('home', function() {
	echo "home";
});

?>
<?php


class Controller extends Database {

	public static function CreateView($viewName){
		echo "sample"
           	require('partials/header.php');
           	require("Views/$viewName.php");
           	require('partials/footer.php');
        
			//$this->load->partials('header')
	}


}

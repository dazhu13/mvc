<?php


class Controller extends Database {

	public function __construct (){

		echo "sample";
        //$this->load->partials('header')
	}

	public function view($viewname){
		include('Views/partials/header.php');
		include("./Views/$viewname.php");
		include('Views/partials/footer.php');
	}

}

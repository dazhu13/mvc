<?php

class Sample extends Controller {

	public $users = [];

	public function test() {
		parent::view("Sample") ;
	}

	public function index() {
		parent::view("index") ;
	}

}

?>
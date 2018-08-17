<?php

class Sample extends Controller {

	public $users = array();

	public static function test() {

		$users = self::query("SELECT * from users");
		self::query("SELECT * from users");

		var_dump($users);

		foreach ($users as $key => $value) {
			echo $value;
		}
	}

}

?>
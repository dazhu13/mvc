<?php

/**
 * 
 */
class Route {


	public static $validRoutes = [];

	public static function set($route, $function){

		// Push to registered routes
		//array_push(self::$validRoutes, $route);

		self::$validRoutes[$route] = $function;
	}

	public function useRoute($Routename){
		echo $Routename."<br>";

		$controller = '';
		$useFunction = '';
		foreach (self::$validRoutes as $key => $value){
			if($key == $Routename){
				echo "inside if <br>";
				$function = explode('@',$value,2);
				$controller = $function[0];
				$useFunction = $function[1];
			}	
		}
		$control = new $controller;
		$control->$useFunction();
	}
	
	
}

?>
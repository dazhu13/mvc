<?php

/**
 * 
 */
class Route {


	public static $validRoutes = array();

	public static function set($route, $function){

		//self::$validRoutes[] = $route;
		array_push(self::$validRoutes, $route);
		//echo $_GET['url']."<br />";

		//$finalRoutes = array_unique(self::$validRoutes);
		//print_r(self::$validRoutes);
		/*if($_GET['url'] === $route){
			
echo "string1";
			$function->__invoke();
		}
		else if($_GET['url'] !== $route) {
			echo "string2";
		}*/

		foreach (self::$validRoutes as $key => $value) {
			echo $key." ".$value."<br />";
		}

		
	}
	
	
}

?>
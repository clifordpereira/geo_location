<?php 
/**
 * 
 */
class Route
{
	private $routes = array();

	public static function resource()
	{
		// <GET CONTROLLER & ACTION from url
		if (!empty($_SERVER['PATH_INFO'])) {
			$path_array = explode('/', substr($_SERVER['PATH_INFO'], 1));
			$controller = !empty($path_array[0]) ? $path_array[0] : "pages";
			$action = !empty($path_array[1]) ? $path_array[1] : "index";
			$GLOBALS['argument'] = !empty($path_array[2]) ? $path_array[2] : "";
		} else {
			$controller = "pages";
			// $action = "index"; // change to this later
			$action = "home";
		}
		// GET CONTROLLER & ACTION>
		
		self::call_action($controller, $action);

		return $controller;

	}#endof setAction()


	public static function call_action($controller, $action) {
		require_once("../utilities/connection.php");

		$name = ucfirst($controller) . "Controller";

		require_once($name . ".php");

		$name = ucfirst($controller) . "Controller";
		$controller = new $name($conn);
		call_user_func(array($controller, $action));
	}//endof get_page()

}#endof class Route{}
?>
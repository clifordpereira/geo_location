<?php
require_once("I_Controller.php");
/**
 * 
 */
abstract class CP_Controller implements I_Controller
{
	protected $conn; 
	
	function __construct($conn)
	{
		$this->conn = $conn;
	}

	abstract public function index();

	abstract public function create();

	abstract public function store();

	abstract public function show();

	abstract public function edit();

	abstract public function update();

	abstract public function destroy();


}#endof class CP_Controller{}
?>
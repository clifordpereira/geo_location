<?php 
require_once("DBAbstraction.php");
require_once("I_Model.php");
/**
 * Model
 */
abstract class CP_Model implements I_Model
{
	use DBAbstraction;

	// PRIVATE VARIABLES
	protected $conn; // db connection object
	protected $tablename;
	
	function __construct($conn, $tablename)
	{
		$this->conn = $conn;
		$this->tablename = $tablename;
	}//endof __construct

}//endof class Model
?>
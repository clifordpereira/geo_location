<?php 
require_once("../utilities/CP_Model.php");
/**
 *
 */
class Location extends CP_Model
{
	
	function __construct($conn)
	{
		parent::__construct($conn, 'locations');
	}


	public function create($postArray)
	{
		extract($postArray);
		$sql = "INSERT INTO locations (location_name, address, latitude, longitude) VALUES('$location_name', '$address', $latitude, $longitude);";
		if ($this->runQuery($sql)) {
			append_success("location registered successfully");
		} else {
			append_error("location registration failed: <br>" . $this->conn->error);
		}
	}


	public function update($postArray)
	{
		extract($postArray);
		$sql = "UPDATE locations SET location_name='$location_name', address='$address', latitude=$latitude, longitude=$longitude WHERE id=$id;";
		if ($this->runQuery($sql)) {
			append_success("location updated successfully");
		} else {
			append_error("location updation failed: <br>" . $this->conn->error);
		}
	}

}#endof class Location{}
?>
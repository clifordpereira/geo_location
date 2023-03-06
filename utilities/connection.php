<?php 
$conn = new mysqli("localhost", "root", "", "geo_location");

// check connection
if ($conn->connect_error) {
	die("connection failed: " . $conn->connect_error);
}//end-if
?>
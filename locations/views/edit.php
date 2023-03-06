<?php
require_once("../header.php");
extract($data);
?>

<h3>Location Registration</h3>

<form name="add_location_frm" method="post" action="update.php">
	<input type="hidden" name="id" value="<?= $location->id;?>">
	
	<label for="location_name">Location Name: </label> <br>
	<input type="text" name="location_name" value="<?= $location->location_name;?>"> <br> <br>
	<label for="address">Address: </label> <br>
	<input type="text" name="address" value="<?= $location->address;?>"> <br> <br>
	<label for="latitude">Latitude: </label> <br>
	<input type="text" name="latitude" value="<?= $location->latitude;?>"> <br> <br>
	<label for="longitude">Longitude: </label> <br>
	<input type="text" name="longitude" value="<?= $location->longitude;?>"> <br> <br>

	<input type="submit" name="add_location" value="Add Location">
</form>

<?php require_once("../footer.php"); ?>
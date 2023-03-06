<?php require_once("../header.php"); ?>

<h3>Add Location Details</h3>

<form name="add_location_frm" method="post" action="store.php">
	<label for="location_name">Location Name: </label> <br>
	<input type="text" name="location_name"> <br> <br>
	<label for="address">Address: </label> <br>
	<input type="text" name="address"> <br> <br>
	<label for="latitude">Latitude: </label> <br>
	<input type="text" name="latitude"> <br> <br>
	<label for="longitude">Longitude: </label> <br>
	<input type="text" name="longitude"> <br> <br>

	<input type="submit" name="add_location" value="Add Location">
</form>

<?php require_once("../footer.php"); ?>
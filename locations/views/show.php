<?php
require_once("../header.php");
extract($data);
?>

<h3>Location Profile</h3>

<p><a href="edit.php?id=<?= $location->id ; ?>">Edit Location</a></p>

<table border="1" border-colapse>
	<tr><td>Id</td><td><?= $location->id ; ?></td></tr>
	<tr><td>Location Name</td><td><?= $location->location_name ; ?></td></tr>
	<tr><td>address</td><td><?= $location->address ; ?></td></tr>
	<tr><td>latitude</td><td><?= $location->latitude ; ?></td></tr>
	<tr><td>longitude</td><td><?= $location->longitude ; ?></td></tr>
</table>

<p><a href="destroy.php?id=<?= $location->id ; ?>">Delete Location</a></p>

<?php require_once("../footer.php"); ?>
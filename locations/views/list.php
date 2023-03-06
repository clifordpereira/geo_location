<?php
require_once("../header.php");
extract($data);
?>

<h3>List of Locations</h3>

<p><a href="create.php">Add Location</a></p>

<div class="locationlist">	
	<table border="1" border-colapse>
		<tr><th>Id</th><th>Location Name</th><th>Address</th><th>Latitude</th><th>Longitude</th><th>Edit</th><th>Delete</th></tr>

		<?php foreach ($locations as $location): ?>
		<tr>
			<td><?= $location->id ; ?></td>
			<td><a href="show.php?id=<?= $location->id ; ?>"><?= $location->location_name ; ?></a></td>
			<td><?= $location->address ; ?></td>
			<td><?= $location->latitude ; ?></td>
			<td><?= $location->longitude ; ?></td>
			<td><a href="edit.php?id=<?= $location->id ; ?>">Edit</a></td>
			<td><a href="destroy.php?id=<?= $location->id ; ?>">Delete</a></td>
		</tr>	
		<?php endforeach; ?>

	</table>
</div>


<!--The div element for the map -->
<div id="map"></div>

<!-- Async script executes immediately and must be after any DOM elements used in callback. -->
<script
  src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=initMap&libraries=&v=weekly"
  async
></script>

<script src="https://unpkg.com/@googlemaps/markerclustererplus/dist/index.min.js"></script>


<?php require_once("../footer.php"); ?>
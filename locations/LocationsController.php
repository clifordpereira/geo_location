<?php
require_once("../utilities/functions.php");
require_once("../utilities/CP_Controller.php");

require_once("Location.php");
/**
 * 
 */
class LocationsController extends CP_Controller
{
	
	public function index()
	{
		$location = new Location($this->conn);
		$locations = $location->all();

		view('list', compact("locations"));
	}

	public function create()
	{
		view('add');
	}

	public function store()
	{
		$location = new Location($this->conn);
		$location->create(validate($_POST));

		view('message');
	}

	public function show()
	{
		$id = test_input($_GET['id']); // validation

		$location = new Location($this->conn);
		$location = $location->find($id);

		view('show', compact("location"));
	}

	public function edit()
	{
		$id = test_input($_GET['id']); // validation

		$location = new Location($this->conn);
		$location = $location->find($id);

		view('edit', compact("location"));
	}

	public function update()
	{
		$location = new Location($this->conn);
		$location->update(validate($_POST));

		view('message');
	}

	public function destroy()
	{
		$id = test_input($_GET['id']); // validation

		$location = new Location($this->conn);
		$location = $location->delete($id);

		view('message');
	}


}#endof class CP_Controller{}
?>
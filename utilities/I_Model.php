<?php 
interface I_Model {
	public function create($postArray); // Create a row

	// Read row(s)
	public function all(); //return all rows from a db table
	public function find($id); // return corresponding row
	public function where($key, $value); // return row(s) with a condition

	public function update($postArray); // Update a row
	public function delete($id); // Delete a row
}
?>
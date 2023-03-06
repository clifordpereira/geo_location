<?php 
/**
 * DBAbstraction
 */

trait DBAbstraction
// class DBAbstraction
{

	///////////////////////////////////
	/////////// DB METHODS ////////////
	///////////////////////////////////

	// run CRUD queries except Read
	public function runQuery($sql, $return_insert_id=false)
	{
		if ($this->conn->query($sql) === TRUE) {
			if ($return_insert_id === TRUE) {
		  		return $this->conn->insert_id; // return with insert_id (only for insert query)
			} else {
				return true; //return without insert_id
			}#end inner if-else
		} else {
			return false; //if query failed
		}#end outer if-else
	}//enfof runQuery()


	// run multiple insert quries
	public function multiQuery($sql)
	{
		if ($this->conn->multi_query($sql) !== TRUE) {
			echo "Error: " . $sql . "<br>" . $this->conn_error;
		}//end-if
	}//endof multiQuery()


	// delete a row from table
	public function delete($id)
	{
		$sql = "DELETE FROM $this->tablename WHERE id = $id";
		if ($this->runQuery($sql)) {
			append_success("Row Deleted successfully");
		} else {
			append_error("Deletion failed: <br>" . $this->conn->error);
		}
	}

	
	// run Read queries
	public function runSelect($sql, $one_row_only = false)
	{
		if ($result = $this->conn->query($sql)) {
			if ($one_row_only === TRUE) {
				$row = $result->fetch_object();
				return $row; //for find($id, true)
			} else {
				$rows = array();
				while ($row = $result->fetch_object()) {
					array_push($rows, $row);
				}
				return $rows; //for all()
			}#end inner if-else
		} else {
			return false; //if query failed
		}#end outer if-else
	}//endof runSelect()


	// used for selecting datalist or selectlist
	public function getDataList($field_name)
	{
		$sql = "select id, $field_name from $this->tablename";
		return $this->runSelect($sql);
	}

	/////////////////////////////////////



	/////////////////////////////////////
	///////// MIMICKING LARAVEL /////////
	/////////////////////////////////////

	// Alias for findAll, but used in laravel
	public function all()
	{	
		$sql = "select * from $this->tablename";
		return $this->runSelect($sql);
	}//endof selectAll()


	// find ONE ROW FROM DATABASE
	public function find($id)
	{
		// return $this->getRow($id);
		$sql = "select * from $this->tablename where id = $id";
		return $this->runSelect($sql, TRUE);
	}//endof find()


	// SELECT with where condition
	public function where($key, $value)
	{
		// return $this->getRow($id);
		$sql = "select * from $this->tablename where $key = $value";
		return $this->runSelect($sql);
	}//endof find()

	/////// #END MIMICKING LARAVEL //////



	/////////////////////////////////////
	///////// MIMICKING CODEIGNITER /////
	/////////////////////////////////////

	// SELECT ALL COLUMNS AND ROWS FROM DATABASE
	public function findAll()
	{	
		$sql = "select * from $this->tablename";
		return $this->runSelect($sql);
	}//endof selectAll()

	//// #END MIMICKING CODEIGNITER /////


}//endof class
?>
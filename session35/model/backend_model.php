<?php 
include 'config/database.php';
class BackendModel extends DatabaseConnect {

	function getListUser() {
		$sql = "SELECT * FROM users";
		return mysqli_query($this->connect(), $sql);
	}
	
}

?>
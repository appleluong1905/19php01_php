<?php 
include 'config/database.php';
class BackendModel extends DatabaseConnect {

	function getListUser() {
		$sql = "SELECT * FROM users";
		return mysqli_query($this->connect(), $sql);
	}
	
	function addProductCategory($name) {
		$sql = "INSERT INTO product_categories(name) VALUES('$name')";
		return mysqli_query($this->connect(), $sql);	
	}

	function getCategory() {
		$sql = "SELECT * FROM product_categories";
		return mysqli_query($this->connect(), $sql);
	}

	function addProduct($name, $price, $description, $product_category_id, $image) {
		$created = date('Y-m-d h:i:s');
		$sql = "INSERT INTO products(name, price, description, product_category_id, image, created) VALUES('$name', '$price', '$description', $product_category_id, '$image', '$created')";
		return mysqli_query($this->connect(), $sql);
	}

}

?>
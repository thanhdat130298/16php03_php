<?php 
	include "connect/database.php";
	/**
	 * 
	 */
	class Model extends ConnectDB
	{
		
		function list() {
			$sql = "SELECT * FROM products";
			return mysqli_query($this->connect(), $sql);
			# code...
		}
		function add($name,$decription,$img,$id_category) {
			
			$sql = "INSERT INTO products (title, decription, IMG, idCATEGORY) VALUES ('$name', '$decription', '$img', '$id_category')";
			//var_dump($sql); exit();
			return  mysqli_query($this->connect(), $sql);
		}
		function getCategory() {
			$sql = "SELECT * FROM category";
			return  mysqli_query($this->connect(), $sql);
		}
		function deleteProduct($id) {
			$sql = "DELETE FROM products WHERE id = $id";
			return mysqli_query($this->connect(), $sql);
		}
		function deleteCate($id) {
			$sql = "DELETE FROM category WHERE idCATEGORY = $id";
			return mysqli_query($this->connect(), $sql);
		}
		function addCate($name) {
			$sql = "INSERT INTO category (TenDM) VALUES ('$name')";
			return mysqli_query($this->connect(),$sql);
		}
	}
?>
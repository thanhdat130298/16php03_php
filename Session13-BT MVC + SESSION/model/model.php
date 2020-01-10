<?php 
	include "connect/database.php";
	/**
	 * 
	 */
	class Model extends ConnectDB
	{
		function listUsers() {
			$sql = "SELECT * FROM users";
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
		function register($user, $pass) {
			$sql = "INSERT INTO users (username, password) VALUES ('$user', '$pass')";
			return mysqli_query($this->connect(), $sql);

		}
		function login($user, $pass) {
			$sql = "SELECT * FROM users WHERE (username = '$user') AND (password= '$pass')";
			return mysqli_query($this->connect(), $sql);

		}
		function getOldUser($user) {
			$sql = "SELECT * FROM users"; 
			return mysqli_query($this->connect(),$sql);
		}
		function getProduct($name) {
			$sql = "SELECT * FROM products"; 
			return mysqli_query($this->connect(),$sql);
		}
		function getOldProduct($id) {
			$sql = "SELECT * FROM products WHERE id = $id"; 
			return mysqli_query($this->connect(),$sql);
		}
		function listALL() {
			$sql = "SELECT * FROM products INNER JOIN category ON category.idCATEGORY = products.idCATEGORY"; 
			return mysqli_query($this->connect(),$sql);
		}
		function editProduct($id, $name, $decription, $imgName) {
			$sql = "UPDATE products SET title = '$name', decription = '$decription', IMG ='$imgName' WHERE id = $id";
			return mysqli_query($this->connect(),$sql);
		}
		function editCate($id, $TenDM) {
			$sql = "UPDATE category SET  TenDM = '$TenDM' WHERE idCATEGORY = $id";
			return mysqli_query($this->connect(),$sql);
		}

	}
?>
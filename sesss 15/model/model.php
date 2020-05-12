<?php 
	include 'config/database.php';
	class Model extends ConnectDB {

		function getHomepage() {
			$homepageData = "Thong tin trang chu tai day";
			return $homepageData;
		}

		function getAbout() {
			$aboutData = "Thong tin trang about";
			return $aboutData;
		}

		function getNews() {
			$sql = "SELECT * FROM news";
			return mysqli_query($this->connect(), $sql);
		}

		function delete($id) {
			$sql = "DELETE FROM news WHERE id = $id";
			return mysqli_query($this->connect(), $sql);
		}
		function addDetail($title, $description, $image) {
			$sql = "INSERT INTO news(title, description, image) VALUES ('$title', '$description','$image')";
			return mysqli_query($this->connect(), $sql);
		}
		function edit($id,$title, $description, $image) {
			$sql = "UPDATE news SET title = '$title', description = '$description', image = '$image' WHERE id = $id";
			return mysqli_query($this->connect(), $sql);
		}
		function getById($id) {
			$sql = "SELECT * FROM news WHERE id = $id";
			return mysqli_query($this->connect(), $sql);
		}
		function register($user, $pass) {
			$sql = "INSERT INTO users (username, password) VALUES ('$user', '$pass')";
			return mysqli_query($this->connect(), $sql);

		}
		function login($user, $pass) {
			$sql = "SELECT * FROM users WHERE (username = '$user') AND (password= '$pass')";
			return mysqli_query($this->connect(), $sql);

		}
		
	}
?>
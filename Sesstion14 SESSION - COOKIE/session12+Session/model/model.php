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

		function deleteNews($id) {
			$sql = "DELETE FROM news WHERE id = $id";
			return mysqli_query($this->connect(), $sql);
		}
		function addNews($title, $description) {
			$sql = "INSERT INTO news(title, description) VALUES ('$title', '$description')";
			return mysqli_query($this->connect(), $sql);
		}
		function editNews($id,$title, $description) {
			$sql = "UPDATE news SET title = '$title', description = '$description' WHERE id = $id";
			return mysqli_query($this->connect(), $sql);
		}
		function getDetailId($id) {
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
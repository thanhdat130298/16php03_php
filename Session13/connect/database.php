<?php 
	class ConnectDB {

		function connect() {
			$connect = mysqli_connect('localhost', 'root', '', 'product');
			mysqli_set_charset($connect,"utf8");
			return $connect;
		}
	}
?>
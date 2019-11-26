<?php
	$connect = mysqli_connect('localhost', 'root', '', 'rank');
		if ($connect->connect_error) {
			echo "error connect";
	    die("Connection failed: " . $connect->connect_error);
	}
	mysqli_set_charset($connect,"utf-8");
?>
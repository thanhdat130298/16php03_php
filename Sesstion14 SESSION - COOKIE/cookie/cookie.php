<?php 
	// Khoi tao cookie
	setcookie('name', '19PHP03', time() + 10);

	// Su dung cookie
	echo $_COOKIE['name'];

	// Loai bo cookie
	setcookie('name', '', time() - 10);
?>
<!DOCTYPE html>
<html>
<head>
	<title>MVC</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>My shop</h1>
	<ul>
		<a href="index.php?action=home"><li>HOME</li></a>
		<a href="index.php?action=about"><li>ABOUT</li></a>
		<a href="index.php?action=news"><li>NEWS</li></a>
		<a href="index.php?action=contact"><li>CONTACT</li></a>
	</ul>
	<?php 
		include "controller.php";
		$controller = new Controller;
		$controller->handleRequest();
	?>
</body>
</html>
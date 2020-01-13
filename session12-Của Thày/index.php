<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<h1>
		<a href="index.php">My shop</a>
	</h1>
	<ul>
		<li><a href="index.php?action=home">Home</a></li>
		<li><a href="index.php?action=about">About</a></li>
		<li><a href="index.php?action=news">News</a></li>
		<li><a href="index.php?action=contact">Contact</a></li>
	</ul>
	<?php
	echo "ok"; 
		include 'controller/controller.php';
		$controller = new Controller;
		$controller->handleRequest();
	?>
</body>
</html>
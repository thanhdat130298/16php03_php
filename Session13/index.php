<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Production</title>
</head>
<body>
	<ul>
		<a href="index.php?action=add_product"><li>ADD PRODUCT</li></a>
		<a href="index.php?action=list_product"><li>LIST PRODUCT</li></a>
		<a href="index.php?action=list_category"><li>CATEGORY</li></a>
	</ul>
	<?php 
		include "controller/controller.php";
		$controller = new Controller;
		$controller->Request();
	?>
</body>
</html>
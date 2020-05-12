<!DOCTYPE html>
<html>
<head>
	<title>Home</title>

</head>
<body>
	<div>
		<ul >
			<a href="index.php?action=home"><li>HOME</li></a>
			<a href="index.php?action=list"><li>LIST</li></a>
			<a href="index.php?action=add"><li class="a">ADD</li></a>
		</ul>
	</div>
	<?php 
		include 'controller/controller.php';
		$controller = new Controller;
		$controller->handleRequest();
	?>
</body>
</html>
<style type="text/css">
	* {
		margin: 0;
		padding: 0;
	}
	ul {
		width:100%;
		margin: 0 auto;
	}
	a {
		text-decoration: none !important;
	}
	li:hover {
		background-color: #28cbd4;
	}
	li {
		height: 50px;
		line-height: 50px;
		display: block;
		background-color: #f1f1f1;
		text-decoration: none;

		text-align: center;
		float: left;
		width: 33%;
		list-style: none;
	}
</style>
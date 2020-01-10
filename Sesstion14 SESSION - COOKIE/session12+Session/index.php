<?php
	ob_start();
	session_start(); ?>
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
		<?php 
			if(!isset($_SESSION['login'])) {?>
				<li><a href="index.php?action=register">Register</a></li>
				<li><a href="index.php?action=login">Login</a></li>
			<?php }
			else {?>
				<li>Hi, <?php echo $_SESSION['login']; ?></li>
				<li><a href="index.php?action=logout">Logout</a></li>
			<?php }
		?>
	</ul>
	<?php 
		include 'controller/controller.php';
		$controller = new Controller;
		$controller->handleRequest();
	?>
</body>
</html>
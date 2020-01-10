<?php
	ob_start();
 	session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Production</title>
</head>
<body>
	<ul>
		<a href="index.php?action=home"><li>HOME</li></a>
		<?php if(isset($_SESSION['login'])){ ?>
			<a href="index.php?action=add_product"><li>ADD PRODUCT</li></a>
		<?php }?>
		<a href="index.php?action=list_product"><li>LIST PRODUCT</li></a>
		<a href="index.php?action=list_category"><li>CATEGORY</li></a>
		<?php if(!isset($_SESSION['login'])) {?>
			<a href="index.php?action=register"><li>REGISTER</li></a>
			<a href="index.php?action=login"><li>LOGIN</li></a>
		<?php }
		else {?>
			<li>Hi, <?php echo $_SESSION['login'];?></li>
			<a href="index.php?action=logout"><li>LOGOUT</li></a>
			<a href="index.php?action=list_users"><li>USERS</li></a>
		<?php }?>

	</ul>
	<?php 
		include "controller/controller.php";
		$controller = new Controller;
		$controller->Request();
	?>
</body>
</html>
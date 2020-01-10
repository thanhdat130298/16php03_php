<?php session_start(); ?>

<!-- Khoi tao session -->
<?php 
	$_SESSION['name'] = '19PHP03 SDC';
	$_SESSION['login'] = 'demo';
?>

<!-- Su dung session -->
<?php 
	echo $_SESSION['name'];
	$a = "Hello ".$_SESSION['name'];
	echo "<br>";
	echo $a;
?>

<!-- Huy bo session -->
<?php 
	unset($_SESSION['name']);
?>

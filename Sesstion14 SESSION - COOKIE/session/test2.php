<?php session_start(); ?>
<!-- Su dung session -->
<?php 
	echo $_SESSION['login'];
	$a = "Hello ".$_SESSION['name'];
	echo "<br>";
	echo $a;
?>
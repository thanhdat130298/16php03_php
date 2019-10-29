<?php
	$num1 = $num2 ='';
	$err1 = $err2 ='';
	$check = true;
	if(isset($_POST['sum'])){
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];
		if ($num1=='') {
			$err1 = 'Input your number 1';
			$check = false;
			# code...
		}
		if ($num2=='') {
			$err2 = 'Input your number 2';
			$check = false;
			# code...
		}
		if ($check) {
			$sum=$num1+$num2;
			echo $sum;
		}
	}
?>
<h1>Calculator</h1>
<form method="Post">
	<input type="number" name="num1" value="<?php echo $num1; ?>"><br>
	<span class="err1"><?php echo $err1;?></span>
	<input type="number" name="num2" value="<?php echo $num2; ?>"><br>
	<span class="err2"><?php echo $err2;?></span>
	<input type="submit" name="sum" value="Sum">
</form>
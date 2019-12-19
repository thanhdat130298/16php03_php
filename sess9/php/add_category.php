<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<title>ADD Category</title>
</head>
<body>

	<?php
	include "connect.php"; ?>
	<?php
		$cate = $errCate = '';
		$check = true;
		if (isset($_POST['up'])) {
			$cate = $_POST['cate'];
			if ($cate =='') {
				$errCate = 'Please type category';
				$check = false;
			}
			if ($check) {
				$sqlInsertCate = "INSERT INTO category(TenDM)  VALUES('$cate')";
				# code...
				$connect->query($sqlInsertCate); 
				header('Location: category.php');

			}
			# code...
			
		}
	?>
	<form method="POST" enctype="multipart/form-data" class="form1">

		<H1>ADD CATEGORY</H1>
		<input type="text" name="cate" class="title"><br>
		<input type="submit" name="up" class="add" value="ADD"><br>
		<span><?php echo "$errCate"?></span>
	</form>
</body>
</html>
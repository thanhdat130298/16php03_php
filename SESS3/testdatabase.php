<!DOCTYPE html>
<html>
<head>
	<title>PRODUCT</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" type="text/css" href="css.css">
	<meta name="keywords" content="PHP, mysql">
	<meta name="decription" content="This is register form">

</head>
<body>
	<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "product";
	$port = "8080";
	// Create connection
	$connect = new mysqli($servername, $username, $password, $db);
	// Check connection
	if ($connect->connect_error) {
	    die("Connection failed: " . $connect->connect_error);
	}
		$name = $decription = $price = $product = $dateUp = $dateOut = $file = '';
		$errName = $errPrice = $errDec = $errFile = $errProduct = $errDateUp = $errDate = $errDateOut = '';
		$arrProduct = array('stone' => 'Cục đá', 'paper' => 'Miếng giấy', 'wood' => 'Khúc gỗ');
		$check = true;
		if(isset($_POST['submit'])){
			$name = $_POST['name'];
			$price = $_POST['price'];
			$product = $_POST['product'];
			$decription = $_POST['decription'];
			$dateUp = $_POST['dateUp'];
			$dateOut = $_POST['dateOut'];
			$fileName = '';
			if($name == ''){
				$errName = 'Nhập tên sản phẩm!';
				$check = false;
			}
			if($price == ''){
				$errPrice = 'Nhập giá sản phẩm!';
				$check = false;
			}
			else if(!is_numeric($price)) {
				$errPrice = 'Phải là só!';
				$check = false;
			}
			if($product == ''){
				$errProduct = 'Nhập tên sản phẩm!';
				$check = false;
				}
			if($decription == ''){
				$errDec = 'Nhập mô tả sản phẩm!';
				$check = false;
			}
			if($dateUp == ''){
				$errDateUp = 'Nhập ngày đăng sản phẩm!';
				$check = false;
			}
			if($dateOut == ''){
				$errDateOut = 'Nhập hết hạn sản phẩm!';
				$check = false;
			}
			if($dateOut<$dateUp) {
				$errDate = 'Nhap sai ngay!';
				$check = false;
			}
			$upload = $_FILES['img'];
			if(isset($upload)){
				if ($upload['error'] > 0){
					$errFile = "File lỗi!";
					$check=false;
				}
				else if ($upload['error']==0){
					$fileName = $upload['name'];
					$file = $_FILES['img']['name'];
					move_uploaded_file($upload['tmp_name'], 'uploads/'.$fileName);
				}
			}
			else $errFile = "Bạn chưa chọn file!";
			if($check){
				echo "<div>";
				echo "Tên sản phẩm : $name<br>";
				echo "Mô tả: $decription<br>";
				echo "Giá: $price<br>";
				echo "<img src='uploads/$fileName'><br>";
				echo "Ngày đăng: $dateUp<br>";
				echo "Ngày hết hạn: $dateOut<br>";
				echo "Sản phẩm: $arrProduct[$product]<br>";	
				echo "</div>";
				$sql = "INSERT INTO products (NAME, DECRIPTION, COST, IMG, DAYUP, DATEOUT, CATEGORY) VALUES ('$name', '$decription', '$price', '$fileName', '$dateUp', '$dateOut', '$product')";
				
			        echo "<span> Thêm dữ liệu thành công</span>";

				
			}
		}
	$connect->close();
	?>
	<form method="POST" enctype="multipart/form-data">
		<label>Tên sản phẩm: </label><br>
		<input type="text" name="name" class="input" value="<?php echo $name; ?>"><br>
		<span><?php echo $errName;?></span>	<br>

		<label>Mô tả: </label><br>
		<textarea placeholder="Nhập mô tả..." name="decription"><?php echo $decription?></textarea><br>
		<span><?php echo $errDec;?></span>	<br>

		<label>Giá: </label><br>
		<input type="text" class="input" name="price" value="<?php echo $price; ?>"><br>
		<span><?php echo $errPrice;?></span>	<br>

		<label>Hình ảnh:</label><br>
		<input type="file" name="img"  ><br>
		<span><?php echo $errFile; ?></span><br>

		<label>Ngày đăng:  </label><br>
		<input type="date" class="input" name="dateUp" value="<?php echo $dateUp; ?>"><br>
		<span><?php echo $errDateUp;?></span>	<br>
		<label>Ngày hết hạn:  </label><br>

		<input type="date" class="input" name="dateOut" value="<?php echo $dateOut; ?>"><br>
		<span><?php echo $errDateOut;?></span>	<br>
		<span><?php echo $errDate ?></span><br>
		<label>Sản Phẩm: </label><br>

		<select name="product">
			<option value="">Danh mục sản phẩm---</option>
			<option value="stone" <?php echo $product == 'stone'?'selected':'' ?>>Cục đá</option>
			<option value="wood" <?php echo $product == 'wood'?'selected':'' ?>>Khúc gỗ</option>
			<option value="paper" <?php echo $product == 'paper'?'selected':'' ?>>Miếng giấy</option>
		</select><br>
		<span><?php echo $errProduct?></span><br>
		<input class="but" type="submit" name="submit" value="SUBMIT">
	</form>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>REGISTER</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="icon_24h.ico">
	<link rel="stylesheet" type="text/css" href="css.css">
	<meta name="keywords" content="PHP, mysql">
	<meta name="decription" content="This is register form">

</head>
<body>
	

<?php
	$name = $email = $Mchecked = $Fchecked = $select =  '';  

	$errName = $errEmail = $errDate = $errGender = $errSelect = '';
	$check = true;
	if(isset($_POST['submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$date = $_POST['date'];
		$select =$_POST['select'];
	
		if ($name=='') {
			$errName = 'Nhập tên!';
			$check =  false;
			# code...
		}
		if ($email=='') {
			$errEmail = 'Nhập Mail!';
			$check =  false;
			# code...
		}
		if ($date=='') {
			$errDate = 'Nhap Ngay!';
			$check =  false;
			# code...
		}
		if ($select=='null') {
			$errSelect = 'Chon dia chi!';
			$check =  false;
			# code...	
		}
		if (!isset($_POST['gender'])) {
			$errGender = 'Chon gioi tinh!';
			$check =  false;
			# code...
		}
		else {
			$gender=$_POST['gender'];
			if ($gender == "Male"){
            	$Mchecked = "checked";
       		}
        	else if ($gender == "Female"){
            	$Fchecked = "checked";
        	}
		}
		if($check){

			echo "<b>Bạn đã đăng kí thành công</b><br>";
			echo "<b>Tên: </b>";
			echo $name;	 echo '<br>';
			echo "<b>Giới tính:  </b>";
			echo $gender;	echo '<br>';
			echo "<b>Địa chỉ:  </b>";
			echo $select;	echo '<br>';
			echo "<b>Emai:  </b>";
			echo $email;	echo '<br>';
			echo "<b>Ngày sinh:  </b>";
			echo $date;	
		}

	}
	if(isset($_POST['reset'])){
			echo $name='';	 echo '<br>';
			echo $gender="";	echo '<br>';
			echo $select="";	echo '<br>';
			echo $email="";	echo '<br>';
			echo $date="";	
	}

?>
	<form method="POST">
			<label>Họ và tên: </label><br>
			<input type="text" name="name" class="input" value="<?php echo $name; ?>"><br>
			<span><?php echo $errName;?></span>	<br>
			
			<label>Giới tính :</label><br>
			<input type="radio" name="gender" value="Male" <?php if($gender="Male") echo "checked"  ?>>
			<label class="radio">Male</label>	<br>
			<input type="radio" name="gender" value="Female"  <?php if($gender="Female") echo "checked"  ?>>
			<label class="radio">Female</label><br>	<br>
			<span><?php echo $errGender;?></span>	<br>

			<label>Địa chỉ: </label><br>
			<label class="a">Tỉnh/TP:</label><select name="select" >
			<option value="null">--Chọn Tỉnh...</option>
			<?php
				include"connect.php";
				$sql = "SELECT * FROM address";
				$query = $conn->prepare($sql);
				$query->execute();
				$result = $query->fetchAll(PDO::FETCH_ASSOC);
				foreach ($resule as $row ) {
					echo '<option value = "">--Chọn Tỉnh...</option>';

					# code...
				}
		</select><br>
		<span><?php echo $errSelect;?></span>	<br>
		<label class="a">Quận/Huyện:	</label>
		<select name="district" id="">
			<option value="" class=""></option>
		</select><br>

		<label>Email: </label><br>
		<input type="text" class="input" name="email" value="<?php echo $email; ?>"><br>
		<span><?php echo $errEmail;?></span>	<br>

		<label>Ngày sinh: </label><br>
		<input type="date" class="input" name="date" data-date-format="DD MMMM YYYY" value="<?php echo $date; ?>"><br>
		<span><?php echo $errDate;?></span>	<br>

		<input class="but" type="submit" name="submit" value="SUBMIT">
		<input class="but" type="reset" name="reset" value="Reset" >
	</form>
	<script src="js.js"></script>
</body>
</html>
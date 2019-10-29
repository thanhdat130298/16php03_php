
<style type="text/css">
	form {
		border: 1px solid red;
		width: 500px;
		margin: 0 auto;
		text-align: center;

	}
	label {
		font-size: 30px;
	}
	span {
		color: red;
		font-size: 18px;
	}
	input {
		outline: none;
		font-size: 20px;
	}
	select {
		width: 400px;
		height: 50px;
		font-size: 25px;
	}
	option {
		font-size: 25px;
	}
	.input {
		text-align: center;
		width: 400px;
		height: 50px;
	}
	.but {
		margin-top: 20px;
		margin-bottom: 20px;
		background-color: #8d82d6;
		color: white;
		border: none;
		width: 100px;
		height: 50px;
	}
</style>
<?php
	$name=$email=$Mchecked=$Fchecked='';  

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
		<input type="radio" name="gender" value="Male" <?php if($gender="Male") echo $Mchecked  ?>>
		<label class="radio">Male</label>	<br>
		<input type="radio" name="gender" value="Female"  <?php if($gender="Female") echo $Fchecked  ?>>
		<label class="radio">Female</label><br>	<br>
		<span><?php echo $errGender;?></span>	<br>

		<label>Địa chỉ: </label><br>
	<select name="select"  ><br>
		<option value="null">--Chọn đi em...</option>

   		<option value="Đà Nẵng"<?php if($select=="Đà Nẵng") echo "selected"?>>Đà Nẵng</option>
   		<option value="Quảng Nam"<?php if($select=="Quảng Nam") echo " selected"?>>Quảng Nam</option>
	</select><br>
	<span><?php echo $errSelect;?></span>	<br>

	<label>Email: </label><br>
	<input type="text" class="input" name="email" value="<?php echo $email; ?>"><br>
	<span><?php echo $errEmail;?></span>	<br>

	<label>Ngày sinh: </label><br>
	<input type="date" class="input" name="date" data-date-format="DD MMMM YYYY" value="<?php echo $date; ?>"><br>
	<span><?php echo $errDate;?></span>	<br>

	<input class="but" type="submit" name="submit" value="SUBMIT">
	<input class="but" type="reset" name="reset" value="Reset" >
</form>
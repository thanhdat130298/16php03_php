<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ADD NEWS</title>
	<link rel="stylesheet" type="text/css" href="..\css\style.css">
</head>
<body>
	
	<?php include 'connect.php';?>
	<?php
		$decription = $title = $upload = $content = $dayUp = '';
		$errDec = $errTitle = $errUp = $errCon= $errDayUp = '';
		$check = true;

		if(isset($_POST['upload'])){
			$decription = $_POST['decription'];
			$title = $_POST['title'];
			$dayUp = $_POST['day'];
			$content = $_POST['content'];
		    $sqlTitle = "SELECT ID FROM products WHERE TITLE = '$title'";
		    $draw = mysqli_query($connect, $sqlTitle);
			$title_exist = mysqli_num_rows($draw); //total records
		    if($title_exist) {
		        $errTitle = 'Trùng tên' ;
		        $check = false;
		    }else{
		         $check = true;
		    }

		    if ($content == ''){
		    	$errCon = 'Please type product`s decription!';
				$check=false;
		    }
			if($decription == '') {
				# code...
				$errDec = 'Please type product`s decription!';
				$check=false;
			}
			if($title == '') {
				# code...
				$errTitle = 'Please type product`s title!';
				$check=false;
			}
			if ($dayUp =='') {
				$errDayUp = 'Choose day upload product';
				$check = false;
			}
			$up = $_FILES['image'];
			if ($up['error'] > 0){
				$errUp = 'Upload your image!';
				$check=false;
			}
			else if ($up['error']==0){
				$upload = $up['name'];
				$file = $_FILES['image']['name'];
				move_uploaded_file($up['tmp_name'], '../uploads/'.$upload);
			}

				
			if($check){
				$sqlInsert = "INSERT INTO products(TITLE, DECRIPTION, CONTENT, dayUp, IMG) VALUES ('$title', '$decription', '$content',  '$dayUp', '$file')";
				if ($connect->query($sqlInsert) === TRUE) {
			        $decription = $title = '';		
						header('Location: ..\show.php');
			    } 
			    else {
			        echo "Error: " . $sql . "<br>" . $connect->error;
			    }
			}
		}
	?>
		
	<form method="POST" enctype="multipart/form-data" class="form1">
	<h1>Upload NEWS</h1>
		<p>
			<label class="space">Title: </label><br>
			<input type="text" class="title" name="title" value="<?php echo $title; ?>"><br>
			<span><?php echo $errTitle;?></span>
		</p>
		<p>
			<label class="dec">Decription: </label><br>
			<textarea name="decription"><?php echo $decription; ?></textarea><br>
			<span><?php echo $errDec;?></span>
		</p>
		<p>
			<label class="space">Content: </label><br>
			<textarea name="content"><?php echo $content; ?></textarea><br>
			<span><?php echo $errCon;?></span>
		</p>
		
		<p>
			<label class="dayUp">Day Upload:</label><br>
			<input type="date" name="day" value="<?php echo $dayUp; ?>">
			<span><?php echo $errDayUp ?></span>
		</p>

		<p>
			<label class="pic">Picture : </label><br>
			<input type="file" name="image"  ><br>
			<span><?php echo $errUp; ?></span>
		</p>
		<p>
			<input type="submit" value="Upload" class="upload" name="upload">
		</p>
		<p>
			<a href='../show.php'><input type="button" class="upload"  value="List"></a>
		</p>
	</form>
</body>
</html>
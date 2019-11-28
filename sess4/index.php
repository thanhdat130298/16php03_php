<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SQL</title>
	<link rel="stylesheet" type="text/css" href="css\style.css">
</head>
<body>
	
	<?php include 'php\connect.php';?>
	<?php
		$decription = $title = $upload = '';
		$errDec = $errTitle = $errUp = '';
		$check = true;

		

		if(isset($_POST['upload'])){
			$decription = $_POST['decription'];
			$title = $_POST['title'];
		    $sqlTitle = "SELECT ID FROM news WHERE TITLE = '$title'";
		    $draw = mysqli_query($connect, $sqlTitle);

   			$title_exist = mysqli_num_rows($draw); //total records

		    if($title_exist) {
		        $errTitle = 'Trùng tên' ;
		        $check = false;
		    }else{
		         $check = true;
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
			$up = $_FILES['image'];
			if ($up['error'] > 0){
				$errUp = 'Upload your image!';
				$check=false;
			}
			else if ($up['error']==0){
				$upload = $up['name'];
				$file = $_FILES['image']['name'];
				move_uploaded_file($up['tmp_name'], 'uploads/'.$upload);
			}

			
			if($check){
				$sqlInsert = "INSERT INTO news(TITLE, DECRIPTION, Image) VALUES ('$title', '$decription', '$file')";
				if ($connect->query($sqlInsert) === TRUE) {
			        $decription = $title = '';		
						header('Location: php\show.php');
			    } 
			    else {
			        echo "Error: " . $sql . "<br>" . $connect->error;
			    }
			}
		}
	?>
		
	<form method="POST" enctype="multipart/form-data" class="form1">
	<h1>Upload product</h1>
		<p>
			<label class="space">Title: </label>
			<input type="text" class="title" name="title" value="<?php echo $title; ?>"><br>
			<span><?php echo $errTitle;?></span>
		</p>
		<p>
			<label class="dec">Decription: </label>
			<textarea name="decription"><?php echo $decription; ?></textarea><br>
			<span><?php echo $errDec;?></span>
		</p>
		
		<p>
			<label class="pic">Picture : </label>
			<input type="file" name="image" ><br>
			<span><?php echo $errUp;?></span>
		</p>
		<p>
			<input type="submit" value="Upload" class="upload" name="upload">
		</p>
	</form>
</body>
</html>
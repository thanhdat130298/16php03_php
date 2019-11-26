<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SQL</title>
	<style type="text/css">
		img {
			width: 100px;
		}
		span {
			color: red;
		}
	</style>
</head>
<body>
	
	<?php include 'connect.php';?>
	<?php
		$decription = $title = $upload = '';
		$errDec = $errTitle = $errUp = '';
		$check = true;
		$idEdit = $_GET['ID'];
		
		$sqlEdit = "SELECT * FROM news WHERE ID = $idEdit";
		$dataEdit = mysqli_query($connect, $sqlEdit);
		$edit = $dataEdit->fetch_assoc();

		

		if(isset($_POST['edit'])){
			$decription = $_POST['decription'];
			$title = $_POST['title'];
		    $sqlTitle = "SELECT ID FROM news WHERE TITLE = '$title'";
		    $draw = mysqli_query($connect, $sqlTitle);

    //return total count
   			$title_exist = mysqli_num_rows($draw); //total records

    //if value is more than 0, username is not available
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
				move_uploaded_file($up['tmp_name'], '../uploads/'.$upload);
			}

			
			if($check){
				$sqlInsert = "UPDATE news SET TITLE = '$title', DECRIPTION = '$decription', Image = '$file' WHERE ID ='$idEdit'";
				if ($connect->query($sqlInsert) === TRUE) {
			        $decription = $title = '';		
							// chuyen trang
						header('Location: show.php');
			    } 
			    else {
			        echo "Error: " . $sql . "<br>" . $connect->error;
			    }
			}
		}
	?>
		
	<form method="POST" enctype="multipart/form-data" class="form1">
	<h1>Edit product</h1>
		<p>
			<label class="space">Title: </label>
			<input type="text" class="title" name="title" value="<?php echo $edit['TITLE'];?>"><br>
			<span><?php echo $errTitle;?></span>
		</p>
		<p>
			<label class="dec">Decription: </label>
			<textarea name="decription"><?php echo $edit['DECRIPTION']; ?></textarea><br>
			<span><?php echo $errDec;?></span>
		</p>
		
		<p>
			<label class="pic">Picture : </label>
			<input type="file" name="image" ><br>
			<img src="../uploads/<?php echo $edit['Image'];?>">
			<span><?php echo $errUp;?></span>
		</p>
		<p>
			<input type="submit" value="Edit" class="edit" name="edit">
		</p>
	</form>
</body>
</html>
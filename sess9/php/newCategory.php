<?php include 'connect.php';?>
<?php 
 	$idcate = $_GET['Category'];
 	echo $idcate;
 	$sqlNEW = "SELECT * FROM category WHERE idCATEGORY = $idcate";
 	if (mysqli_query($connect, $sqlNEW) === TRUE) {
 		echo "string";
 	}
 	$decription = $title = $dayUp = $content = $img ='';
 	$decription = $_POST['decription'];
	$title = $_POST['title'];
	$dayUp = $_POST['day'];
	$content = $_POST['content'];
	$dayUp = $_POST['day'];
	$img = $_POST['image'];

 	$sqlInsert = "INSERT INTO products (TITLE,DECRIPTION,CONTENT,IMG,DAYUP) VALUES ('$title','$decription','$content','$img','$dayUp')";
 	

 ?> 
 <form method="POST" enctype="multipart/form-data" class="form1">
	<h1>Edit product</h1>
		<p>
			<label class="space">Title: </label>
			<input type="text" class="title" name="title" ><br>
			
		</p>
		<p>
			<label class="dec">Decription: </label>
			<textarea name="decription"></textarea><br>
			
		</p>
		<p>
			<label class="dec">cONTENT: </label>
			<textarea name="content"></textarea><br>
			
		</p>

		<p>
			<label class="dayUp">Day Upload:</label>
			<input type="date" name="day"  >
			
		</p>
		
		<p>
			<label class="pic">Picture : </label>
			<input type="file" name="image" ><br>
			
		</p>
		<p>
			<input type="submit" value="Edit" class="edit" name="edit">
		</p>
	</form>
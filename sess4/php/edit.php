<?php include 'connect.php';?>
<?php 
 	$id = $_GET['ID'];
 	if(isset($_POST['edit'])){
		$decription = $_POST['decription'];
		$title = $_POST['title'];	
		$up = $_FILES['image'];
		$upload = $up['name'];
		$file = $_FILES['image']['name'];
		move_uploaded_file($up['tmp_name'], '../uploads/'.$upload);
	 	$sqlEdit = "UPDATE news SET TITLE = '$title', DECRIPTION = '$decription', Image = '$file' WHERE ID = $id";
		if (mysqli_query($connect, $sqlEdit) === TRUE) {
		// chuyen trang
		header('Location: show.php');
 	}
 }
 ?>
 <form method="POST" enctype="multipart/form-data">
 	<h1>Edit product</h1>
		<p>
			<label>Title:</label>
			<input type="text" name="title"><br>
		</p>
		<p>
			<label>Decription: </label>
			<textarea name="decription"></textarea><br>
		</p>
		
		<p>
			<label>Picture : </label>
			<input type="file" name="image" class="img"><br>
		</p>
		<p>
			<input type="submit" value="EDIT"  name="edit">
		</p>
 	
 </form> 
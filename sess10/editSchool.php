<?php include 'connect.php';?>
<?php 
 	$id = $_GET['id'];
 	$sqlGET = "SELECT nameSC from school where id = $id";
 	$getOldName = mysqli_query($connect, $sqlGET);

 	$row = $getOldName->fetch_assoc();
 	if (isset($_POST['up'])){
	 	$name = $_POST['name'];
	 	$sqlUpdate = "UPDATE school SET nameSC = '$name' where id = $id";
 		if ($connect->query($sqlUpdate)===TRUE) 
 			header('Location: index.php');
}
 ?> 
 <form method="POST" action="#">
 	<input type="text" name="name" class="add" value="<?php echo $row['nameSC']; ?>">
 	<input type="submit" name="up">
 	
 </form>
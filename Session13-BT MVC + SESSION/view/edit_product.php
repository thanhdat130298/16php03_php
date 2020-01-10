
<form method="POST" action="index.php?action=edit_pro&id=<?php echo $id; ?>" enctype="multipart/form-data">
	
	<p>
		Name: <input type="text" name="name" value="<?php echo $edit['title'];?>"> 
		<?php echo $errName;?>

	</p>
	<p>
		Decription: <input type="text" name="decription" value="<?php echo $edit['decription'];?>"> 
		<?php echo $errDec;?>

	</p>
	<p>
		Image: <input type="file" name="image" ><br>
		<img src="./uploads/<?php echo $edit['IMG'];?>">
		<?php echo $errImg;?>
	</p>
	<p>
		<input type="submit" name="submit">
	</p>
</form>
<?php

?>
<form method="POST" action="index.php?action=add_product" enctype="multipart/form-data">
	<p>
		Name: <input type="text" name="name">
		<?php echo $errName;?>
	</p>
	<p>
		Decription: <input type="text" name="decription">
		<?php echo $errDec;?> 
	</p>
	<p>
		Image: <input type="file" name="image">
		<?php echo $errImg;?>
	</p>
	<p>Category:
		<?php
			echo "<select name = 'idCATEGORY'>";
			while ($row = $getCategory->fetch_assoc()) {
						echo "<option value='".$row['idCATEGORY']."'>".$row['TenDM']."</option>";}
			echo "</select>";
					# code...
		?>
	</p>
	<p>
		<input type="submit" name="submit">
	</p>
</form>
<form method="POST" action="index.php?action=edit_cate&id=<?php echo $id; ?>" >
	<p>
		Category Name: <input type="text" name="TenDM" value="<?php echo $edit['TenDM'];?>">
		<?php echo $errName;?>
	</p>
	<p>
		<input type="submit" name="submit">
	</p>
</form>
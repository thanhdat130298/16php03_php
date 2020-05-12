<!DOCTYPE html>
<html>
<head>
	<title>EDIT</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<?php 
	$item = $data->fetch_assoc();
 ?>
	<h1 class="container-fluid">Add News</h1>
	<form action="index.php?action=edit&id=<?php echo $id; ?>"   enctype="multipart/form-data" method="POST">
	<div class="form-group">
		<label>Title</label>
		<input  class="form-control" type="text" value="<?php echo $item['title']; ?>" name="title">
	</div>
	<div class="form-group">
		<label>Decription</label>
		<input type="text" class="form-control" value="<?php echo $item['description']; ?>" name="decription">
	</div>
	<div class="form-group">
		<label>Image</label>
		<input type="file" class="form-control" value="<?php echo $item['image']; ?>" name="image">
	</div>
	<button type="submit" class="btn btn-primary" name="edit">Submit</button>
	</form>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>EDIT</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style type="text/css">
		form {
			width: 60% !important;
		}
		h1 {
			text-align: center;
		}
	</style>
</head>
<body>
	<h1 class="container-fluid">Add News</h1>
	<form class="container-fluid"  action="index.php?action=add"  enctype="multipart/form-data" method="POST">
	<div class="form-group">
		<label>Title</label>
		<input  class="form-control" type="text"  name="title">
	</div>
	<div class="form-group">
		<label>Decription</label>
		<input type="text" class="form-control" name="decription">

	</div>
	<div class="form-group">
		<label>Image</label>
		<input type="file" class="form-control" name="image">
	</div>
		<input type="submit" class="btn btn-primary" name="submit">
	</form>

</body>
</html>
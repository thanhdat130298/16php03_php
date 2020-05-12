<!DOCTYPE html>
<html>
<head>
	<title>List</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style type="text/css">
  .table {
    width: 90%;
    margin: 0 auto;
    border: 2px solid #28cbd4;
  }
</style>
</head>
<body>
	<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Decription</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
		<?php 
    while ($row = $olddata->fetch_assoc()) {
      $id = $row['id'];
      echo "<tr>";
      echo "<td>".$row['id']."</td>";
      echo "<td>".$row['title']."</td>";
      echo "<td>".$row['description']."</td>";
      echo "<td>".$row['image']."</td>";
      echo "<td><a href='index.php?action=delete&id=".$id."''>Delete</a> | <a href='index.php?action=edit&id=".$id."''>Edit</a></td>";

      echo "</tr>";
    }
  ?>
  </tbody>
</table>
</body>
</html>
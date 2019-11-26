<!DOCTYPE html>
<html>
<head>
	<title>RANK FIFA</title>
	<style type="text/css">
		body{
			margin: 0 ;
			width: 100%;
		}
		th {
			background-color: #ff1;
		}
		h1 {
			text-align: center;
		}
		table {
			margin: 0 auto;
			width: 70%;
		}
		
	 	tr, th, td {

	 		text-align: center;
	 		border: 1px solid black;
	 	}
	 	form {
	 		width: 100%;
	 	}
	 	.sort {

	 		font-size: 20px;
	 		width: 70px;
	 		height: 30px;
			background-color: red;
	 	}
	 	.div {
	 		width: 70px; margin: 0 auto;
	 		margin-top: 100px;
	 	}
	</style>
</head>
<body>
	<?php include 'connect.php';?>
	<?php 
	$country = '';
	$match = $win = $draw = $lose = $goal = $conceded = $difference = $point ='';

		if(isset($_POST['sort'])){
				$sqlInsert = "INSERT INTO input(country, match, win, draw, lose, goal, conceded) VALUES ('$country', '$match', '$win', '$draw', '$lose', $goal, '$conceded')";
				$result = mysqli_query($connect, $sqlInsert);
				if(!$result){
					echo "error result";
				}
			}
			else echo "error sort";
	?>
	<h1>Bảng G</h1>
	<form method="POST" enctype="multipart/form-data" class="form1">
		<table>
			<tr>
				<th>Quốc gia</th>
				<th>Số trận</th>
				<th>Thắng</th>
				<th>Hòa</th>
				<th>Thua</th>
				<th>Bàn thắng</th>
				<th>Bàn thua</th><!-- 
				<th>Hiệu số</th>
				<th>Điểm</th> -->
			</tr>
			<tr>
				<td><input type="text" name="country"></td>
				<td><input type="number" name="match"></td>
				<td><input type="number" name="win"></td>
				<td><input type="number" name="draw"></td>
				<td><input type="number" name="lose"></td>
				<td><input type="number" name="goal"></td>
				<td><input type="number" name="conceded"></td><!-- 
				<td><input type="number" name="difference" ></td>
				<td><input type="number" name="point" ></td> -->
			</tr>
		
		</table><div class="div">
			<input type="submit" name="sort" value="OK" class="sort">
		</div>
		
	</form>
</body>
</html> 
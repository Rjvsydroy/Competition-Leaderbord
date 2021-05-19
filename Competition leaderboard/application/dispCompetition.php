

<?php
	include("db.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>	
	
	<style type="text/css">
	table{
		border:1px solid black;
		border-collapse: collapse;
	} 
	
	td{
		border:1px solid black;
		padding: 10px;
	}
	
	</style>
</head>
<body>
<table>

<tr>

<?php
$sel = "SELECT * FROM `competition`";
$qrydisplay = mysqli_query($connect, $sel);
while($row = mysqli_fetch_array($qrydisplay)){
	$id = $row['id'];
	$name = $row['name'];
	$max_athletes = $row['max_athletes'];
	$num_of_events = $row['num_of_events'];
	$competition_year = $row['competition_year'];
	$address = $row['address'];
	$start = $row['start'];
	$end = $row['end'];


	
	echo "<tr><td>".$id."</td><td>".$name."</td><td>".$max_athletes."</td><td>".$num_of_events."</
		td><td>".$competition_year."</td><td>".$address."</td><td>".$start."</td><td>".$end."</td>
		</tr>";
	
}

?>

</tr>
</table>
<form action="index.php" method="POST">
				<br><input type="submit" name="back" class="blueb" value="back"></br>
		</form>
</body>
</html>
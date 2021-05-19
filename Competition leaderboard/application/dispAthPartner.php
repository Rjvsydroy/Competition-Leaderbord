

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
$sel = "SELECT * FROM `athlete`";
$qrydisplay = mysqli_query($connect, $sel);
while($row = mysqli_fetch_array($qrydisplay)){
	$id = $row['id'];
	$name = $row['name'];
	$email = $row['email'];
	$date_of_birth = $row['date_of_birth'];
	$identified_gender = $row['identified_gender'];

	
	echo "<tr><td>".$id."</td><td>".$name."</td><td>".$email."</td><td>".$date_of_birth."
		</td><td>".$identified_gender."</td><td><a href='addToCompetition.php?add=$id' >Add to competition</a></td></tr>";
	
}

?>

</tr>
</table>
<form action="user_page.php" method="POST">
				<br><input type="submit" name="back" class="blueb" value="back"></br>
		</form>
</body>
</html>
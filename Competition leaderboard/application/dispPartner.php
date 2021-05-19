

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
$sel = "SELECT * FROM `partner`";
$qrydisplay = mysqli_query($connect, $sel);
while($row = mysqli_fetch_array($qrydisplay)){
	$id = $row['id'];
	$name = $row['name'];
	$phone = $row['phone'];
	$email = $row['email'];
	$address = $row['address'];

	
	echo "<tr><td>".$id."</td><td>".$name."</td><td>".$phone."</td><td>".$email."
		</td><td>".$address."<td><a href='editPartner.php?edit=$id' >Edit</a></td><td><a href='deletePartner.php?deleteid=$id' >Delete</a></td></tr>";
	
}

?>

</tr>
</table>
<form action="index.php" method="POST">
				<br><input type="submit" name="back" class="blueb" value="back"></br>
		</form>
</body>
</html>
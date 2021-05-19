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
$getid = $_GET['dispEvent'];

$seledittwo = "SELECT *FROM `event` WHERE `competition_id`= '$getid'";

$qrydisplay = mysqli_query($connect, $seledittwo);
while($row = mysqli_fetch_array($qrydisplay)){
	$id = $row['id'];
	$competition_id = $row['competition_id'];
	$name = $row['name'];
	$score = $row['score'];
	$time = $row['time'];
	$tie_breaker = $row['tie_breaker'];
	
	echo "<tr><td>".$id."</td><td>".$competition_id."</td><td>".$name."</td><td>".$score."</td><td>".$time."</
		td><td>".$tie_breaker."</td><td><a href='editEvent.php?editEvent=$id' >Edit</a></td><td><a href='deleteEvent.php?deleteid=$id' >Delete</a></td></tr>";
	
}

?>

</tr>
</table>
<form action="indexPartner.php" method="POST">
				<br><input type="submit" name="back" class="blueb" value="back"></br>
		</form>
</body>
</html>

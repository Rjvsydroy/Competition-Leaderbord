<?php
include("db.php");

$getid = $_GET['editEvent'];

$seledittwo = "SELECT *FROM `event` WHERE `id`= '$getid'";


$qry = mysqli_query($connect, $seledittwo);

$selassoc = mysqli_fetch_assoc($qry);

$id = $selassoc['id'];
$competition_id = $selassoc['competition_id'];
$name = $selassoc['name'];
$score = $selassoc['score'];
$time = $selassoc['time'];
$tie_breaker = $selassoc['tie_breaker'];

if(isset($_POST['updateedit'])){
	$upid = $_POST['upid'];
	$upcompetition_id = $_POST['upcompetition_id'];
	$upname = $_POST['upname'];
	$upscore = $_POST['upscore'];
	$uptime = $_POST['uptime'];
	$uptie_breaker = $_POST['uptie_breaker'];	
	
	$seleditt = "UPDATE `event` SET `competition_id`='$upcompetition_id', `name`='$upname' , `score` = '$upscore', `time`='$uptime', `tie_breaker`='$uptie_breaker' WHERE `id` = '$upid'";
	$qry = mysqli_query($connect,$seleditt);
	
	if($qry){
		header("location: dispEvent.php");
	}
		
}

?>




<!DOCTYPE html>
<html>
<head>
	<title></title>	
</head>
<body>

<form method="POST" action="">
	<tr><td>Id</td><br><input type="text" name="upid" value="<?php echo $id;?>"><br><br>
	<tr><td>Competion Id</td><br><input type="text" name="upcompetition_id" value="<?php echo $competition_id;?>"><br><br>
	<tr><td>Name</td><br><input type="text" name="upname" value="<?php echo $name;?>"><br><br>
	<tr><td>Score</td><br><input type="text" name="upscore" value="<?php echo $score;?>"><br><br>
	<tr><td>Time</td><br><input type="time" name="uptime" value="<?php echo $time;?>"><br><br>
	<tr><td>Tie breaker</td><br><input type="time" name="uptie_breaker" value="<?php echo $tie_breaker;?>"><br><br>
	<input type="submit" name="updateedit" value="Update">


</form>
</body>
</html>




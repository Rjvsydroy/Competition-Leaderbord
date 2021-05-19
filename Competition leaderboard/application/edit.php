<?php
include("db.php");

$getid = $_GET['edit'];

$seledittwo = "SELECT *FROM `competition` WHERE `id`= '$getid'";


$qry = mysqli_query($connect, $seledittwo);

$selassoc = mysqli_fetch_assoc($qry);

$id = $selassoc['id'];
$name = $selassoc['name'];
$max_athletes = $selassoc['max_athletes'];
$num_of_events = $selassoc['num_of_events'];
$competition_year = $selassoc['competition_year'];
$address = $selassoc['address'];
$start = $selassoc['start'];
$end = $selassoc['end'];


if(isset($_POST['updateedit'])){
	$upid = $_POST['upid'];
	$upname = $_POST['upname'];
	$upmax_athletes = $_POST['upmax_athletes'];
	$upnum_of_events = $_POST['upnum_of_events'];
	$upcompetition_year = $_POST['upcompetition_year'];	
	$upaddress = $_POST['upaddress'];
	$upstart = $_POST['upstart'];
	$upend = $_POST['upend'];
	

	$seleditt = "UPDATE `competition` SET `name`='$upname' , `max_athletes` = '$upmax_athletes', `num_of_events`='$upnum_of_events', `competition_year`='$upcompetition_year', `address`='$upaddress', `start`='$upstart', `end`='$upend' WHERE `id` = '$upid'";
	$qry = mysqli_query($connect,$seleditt);
	
	if($qry){
		header("location: indexPartner.php");
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
	<tr><td>Name</td><br><input type="text" name="upname" value="<?php echo $name;?>"><br><br>
	<tr><td>Number max of athletes</td><br><input type="text" name="upmax_athletes" value="<?php echo $max_athletes;?>"><br><br>
	<tr><td>Number of events</td><br><input type="text" name="upnum_of_events" value="<?php echo $num_of_events;?>"><br><br>
	<tr><td>Year of competition</td><br><input type="text" name="upcompetition_year" value="<?php echo $competition_year;?>"><br><br>
	<tr><td>Address</td><br><input type="text" name="upaddress" value="<?php echo $address;?>"><br><br>
	<tr><td>Start</td><br><input type="date" name="upstart" value="<?php echo $start;?>"><br><br>
	<tr><td>End</td><br><input type="date" name="upend" value="<?php echo $end;?>"><br><br>
	<input type="submit" name="updateedit" value="Update">


</form>
</body>
</html>




<?php
include("db.php");

$getid = $_GET['select'];
$getid2 = $_GET['add'];

$seledittwo = "INSERT INTO `register`(`athlete_id`, `competition_id`) 
		VALUES ('$getid2','$getid')";


$qry = mysqli_query($connect, $seledittwo);

	if($qry){
		header("location: dispAthPartner.php");
	}
		


?>





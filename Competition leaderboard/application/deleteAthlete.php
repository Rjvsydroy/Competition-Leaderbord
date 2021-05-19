<?php
include("db.php");

echo $getid =  $_GET['deleteid'];

$sel = "DELETE FROM `athlete` WHERE `id` = '$getid'";
$qry = mysqli_query($connect, $sel);

if($qry){
	header("location: dispAthlete.php ");
}
?>
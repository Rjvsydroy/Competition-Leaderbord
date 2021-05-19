<?php
include("db.php");

echo $getid =  $_GET['deleteid'];

$sel = "DELETE FROM `competition` WHERE `id` = '$getid'";
$qry = mysqli_query($connect, $sel);

if($qry){
	header("location: indexPartner.php ");
}
?>
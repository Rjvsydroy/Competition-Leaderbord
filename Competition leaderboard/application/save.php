<?php

		
$name=$_POST['name'];
$max_athletes=$_POST['max_athletes'];
$num_of_events=$_POST['num_of_events'];
$competition_year=$_POST['competition_year'];
$address=$_POST['address'];
$start_date=$_POST['start'];
$end_date=$_POST['end'];
$contact_phone_number=$_POST['contact_phone_number'];

$dbconnect = mysqli_connect('localhost', 'postgres', 'Origine96', 'TestSql');
if(mysqli_connect_errno($connect)){
	echo "Failed to connect";
}
else
{
	echo "Connection succesfull";
}
	
/*
$sql = "INSERT INTO competitions(start_date, end_date, competition_year, max_athletes, num_of_events, address, contact_phone_number, name) VALUES ('$start_date', '$end_date', '$competition_year', '$max_athletes', '$num_of_events', '$address', '$contact_phone_number', '$name')";
*/


?>
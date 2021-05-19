<?php
	include("db.php");
	if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$max_athletes = $_POST['max_athletes'];
	$num_of_events = $_POST['num_of_events'];
	$competition_year = $_POST['competition_year'];
	$address = $_POST['address'];
	$start = $_POST['start'];
	$end = $_POST['end'];
if(!empty($name) && !empty($max_athletes) && !empty($num_of_events)){
	

	$sql = "INSERT INTO `competition`(`name`, `max_athletes`, `num_of_events`, `competition_year`, `address`, `start`, `end`) 
		VALUES ('$name','$max_athletes','$num_of_events','$competition_year','$address','$start','$end')";
$qry = mysqli_query($connect, $sql);
if($qry){
	echo "inserted succesfully";
}
}else{
	echo "all fields must be filled";

}
}
?>

<! page CompetitionMaker>
<!DOCTYPE html>
<html>
    <head>
        <title>MeFit - Create Competition</title>
    </head>
    <body>
        <form method="POST" action="">
		<table>
            <tr><td>Name</td><td><input type="text" name="name"></td></tr>
			<tr><td>Max Number of Athletes</td><td><input type="text" name="max_athletes"></td></tr>
			<tr><td>Number of events</td><td><input type="text" name="num_of_events"></td></tr>
			<tr><td>Competition year</td><td><input type="text" name="competition_year"></td></tr>
			<tr><td>Address</td><td><input type="text" name="address"></td></tr>
			<tr><td>Start date </td><td> 
				<input type="date" id="start" name="start">
			<tr><td>End date </td><td> 
				<input type="date" id="end" name="end">
			<tr><td>Contact Phone</td><td><input type="text" name="contact_phone_number"></td></tr>
			<tr><td><input type="submit" name="submit" value="submit"></td></tr>
			</table>
        </form>
		<form action="user_page.php" method="POST">
				<br><input type="submit" name="back" class="blueb" value="back"></br>
		</form>
    </body>
</html>


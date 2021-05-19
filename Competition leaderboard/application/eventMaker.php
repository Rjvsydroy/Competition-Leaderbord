<?php
	include("db.php");
	$getid = $_GET['addEvent'];
	if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$score = $_POST['score'];
	$time = $_POST['time'];
	$tie_breaker = $_POST['tie_breaker'];
if(!empty($name) && !empty($score) && !empty($time)){
	

	$sql = "INSERT INTO `event`(`competition_id`, `name`, `score`, `time`, `tie_breaker`) 
		VALUES ('$getid', '$name', '$score', '$time', '$tie_breaker')";
$qry = mysqli_query($connect, $sql);
if($qry){
	echo "inserted succesfully";
}
}else{
	echo "all fields must be filled";

}
}
?>

<! page eventMaker>
<!DOCTYPE html>
<html>
    <head>
        <title>MeFit - Create Events</title>
    </head>
    <body>
        <form method="POST" action="">
		<table>
            <tr><td>Name</td><td><input type="text" name="name"></td></tr>
			<tr><td>Score</td><td><input type="text" name="score"></td></tr>
			<tr><td>Time</td><td><input type="time" name="time"></td></tr>
			<tr><td>Tie breaker</td><td><input type="time" name="tie_breaker"></td></tr>
			<tr><td><input type="submit" name="submit" value="submit"></td></tr>
			</table>
        </form>
		<form action="indexPartner.php" method="POST">
				<br><input type="submit" name="back" class="blueb" value="back"></br>
		</form>
    </body>
</html>






<?php
	include("db.php");
	if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$date_of_birth = $_POST['date_of_birth'];
	$identified_gender = $_POST['identified_gender'];
	
if(!empty($name) && !empty($email) && !empty($date_of_birth) && !empty($identified_gender)&& !empty($identified_gender)){
	

	$sql = "INSERT INTO `athlete`(`name`, `email`, `date_of_birth`, `identified_gender`) 
		VALUES ('$name','$email','$date_of_birth','$identified_gender')";
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
        <title>MeFit - Add Athletes</title>
		
    </head>
    <body>
        <form method="POST" action="">
		<table>
            <tr><td>Name</td><td><input type="text" name="name"></td></tr>
			<tr><td>Email</td><td><input type="text" name="email"></td></tr>
			<tr><td>Date of birth</td><td><input type="date" name="date_of_birth"></td></tr>
			<tr><td>Identified gender</td><td><input type="text" name="identified_gender"></td></tr>
</table>
			<tr><td><input type="submit" name="submit" value="submit"></td></tr>
			</table>
        </form>
		<form action="user_page.php" method="POST">
				<br><input type="submit" name="back" class="blueb" value="back"></br><br>
		</form>
    </body>
</html>


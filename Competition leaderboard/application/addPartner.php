<?php
	include("db.php");
	if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$access_code = $_POST['access_code'];
if(!empty($name) && !empty($phone) && !empty($email) && !empty($address) && !empty($access_code)){
	

	$sql = "INSERT INTO `partner`(`name`, `phone`, `email`, `address`, `access_code`) 
		VALUES ('$name','$phone','$email','$address', '$access_code')";
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
			<tr><td>Phone</td><td><input type="text" name="phone"></td></tr>
			<tr><td>Email</td><td><input type="text" name="email"></td></tr>
			<tr><td>Address</td><td><input type="text" name="address"></td></tr>
			<tr><td>Access code</td><td><input type="text" name="access_code"></td></tr>

			<tr><td><input type="submit" name="submit" value="submit"></td></tr>
			</table>
        </form>
		<form action="index.php" method="POST">
				<br><input type="submit" name="back" class="blueb" value="back"></br>
		</form>
    </body>
</html>


<?php
include("db.php");

$getid = $_GET['edit'];

$seledittwo = "SELECT *FROM `athlete` WHERE `id`= '$getid'";


$qry = mysqli_query($connect, $seledittwo);

$selassoc = mysqli_fetch_assoc($qry);

$id = $selassoc['id'];
$name = $selassoc['name'];
$email = $selassoc['email'];
$date_of_birth = $selassoc['date_of_birth'];
$identified_gender = $selassoc['identified_gender'];


if(isset($_POST['updateedit'])){
	$upid = $_POST['upid'];
	$upname = $_POST['upname'];
	$upemail = $_POST['upemail'];
	$update_of_birth = $_POST['update_of_birth'];
	$upidentified_gender = $_POST['upidentified_gender'];	
	
	$seleditt = "UPDATE `athlete` SET `name`='$upname' , `email` = '$upemail', `date_of_birth`='$update_of_birth', `identified_gender`='$upidentified_gender' WHERE `id` = '$upid'";
	$qry = mysqli_query($connect,$seleditt);
	
	if($qry){
		header("location: dispAthlete.php");
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
	<tr><td>Email</td><br><input type="text" name="upemail" value="<?php echo $email;?>"><br><br>
	<tr><td>Date of birth</td><br><input type="date" name="update_of_birth" value="<?php echo $date_of_birth;?>"><br><br>
	<tr><td>Identified gender</td><br><input type="text" name="upidentified_gender" value="<?php echo $identified_gender;?>"><br><br>
	<input type="submit" name="updateedit" value="Update">


</form>
</body>
</html>




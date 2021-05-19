<?php
include("db.php");

$getid = $_GET['edit'];

$seledittwo = "SELECT *FROM `partner` WHERE `id`= '$getid'";


$qry = mysqli_query($connect, $seledittwo);

$selassoc = mysqli_fetch_assoc($qry);

$id = $selassoc['id'];
$name = $selassoc['name'];
$phone = $selassoc['phone'];
$email = $selassoc['email'];
$address = $selassoc['address'];


if(isset($_POST['updateedit'])){
	$upid = $_POST['upid'];
	$upname = $_POST['upname'];
	$upphone = $_POST['upphone'];
	$upemail = $_POST['upemail'];
	$upaddress = $_POST['upaddress'];
	
	$seleditt = "UPDATE `partner` SET `name`='$upname' , `phone`='$upphone' ,`email` = '$upemail',`address`='$upaddress' WHERE `id` = '$upid'";
	$qry = mysqli_query($connect,$seleditt);
	
	if($qry){
		header("location: dispPartner.php");
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
	<tr><td>Phone</td><br><input type="text" name="upphone" value="<?php echo $phone;?>"><br><br>
	<tr><td>Email</td><br><input type="text" name="upemail" value="<?php echo $email;?>"><br><br>
	<tr><td>Address</td><br><input type="text" name="upaddress" value="<?php echo $address;?>"><br><br>
	<input type="submit" name="updateedit" value="Update">


</form>
</body>
</html>




<?php
	include("PGSQLconnect.php");
	include("account.php");
?>

<! page Login/Signup>
<!DOCTYPE html>
<html>

<head>
	<title> MeFit </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<center>
		<h1>Bienvenue sur MeFit!</h1> 
		
		<! text et boutton>
		<form action="start.php" method="POST">
		<center><br><input type="text" name="name" placeholder="Username"></br>
		<br><input type="password" name="password" placeholder="Password"></br>
		<br><select name = "type" class="dropdown">
				<option value = "user">Partner</option>
				<option value = "admin">Admin</option>
			</select></br>
		<br><input type="submit" name="login" class="blueb" value="Login"></br>
		<br><input type="submit" name="signup" class="blueb" value="SignUp"></br>
		</form>
		
		

		<?php
			$object = new Account;
			//lorsque login est clicker, redirige a la bonne page
			if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['login'])) {
					$logged = $object->checkLogin($_POST["name"],$_POST["password"],$_POST["type"]);
					
					if ($logged == 'admin') {
						header("Location: index.php");
					}
					else if ($logged == 'user') {
						header("Location: user_page.php");
					}
					else {
						echo "<script>alert('Account not found');</script>";
					}
			}	
			//losque signup est clicker, cree le nouveau account
			if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['signup']) and $_POST["name"] != "" and $_POST["password"] != "") {
					$object->SignUp($_POST["name"],$_POST["password"],$_POST["type"]);
			}		
		?>
	</center>
</body>
</html>
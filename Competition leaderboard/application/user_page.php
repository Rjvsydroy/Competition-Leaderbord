<! page du user>
<!DOCTYPE html>
<html>

	<head>
		<title> MeFit - Partner Display </title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>
		<center>
			<h1>Partner</h1>

			<form action="competitionMaker.php" method="POST">
				<br><input type="submit" name="create competition" class="blueb" value="Create competition"></br>
			</form>
			<form action="indexPartner.php" method="POST">
				<br><input type="submit" name="list of competition" class="blueb" value="List of competition"></br>
		</form>
		<form action="addAthlete.php" method="POST">
				<br><input type="submit" id = "addAthlete" name="addAthlete" class="blueb" value="New Athlete"></br>
			</form>
		<form action="dispAthPartner.php" method="POST">
				<br><input type="submit" name="list of athletes" class="blueb" value="List of athletes"></br>
		</form>
		</form>
			<form action="start.php" method="POST">
				<br><input type="submit" name="log out" class="blueb" value="Log out"></br>
		</form>
		</center>
	</body>
</html>
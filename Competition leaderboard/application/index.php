

<?php
	include("db.php");
?>

<!DOCTYPE html>
<html>

	<head>
	<center>
		<h1>MeFit</h1>
		<h2>Leaderboard</h2>
		<link rel="stylesheet" type="text/css" href="mystyle.css">
		<center>
	</head>

	<body>
		<center>
			
			<form action="dispAthlete.php" method="POST">
				<br><input type="submit" name="list_of_athletes" class="blueb" value="List of athletes"></br>
			</form>
			<form action="dispCompetition.php" method="POST">
				<br><input type="submit" name="list_of_competitions" class="blueb" value="List of competition"></br>
			</form>
			<form action="addPartner.php" method="POST">
				<br><input type="submit" name="addPartner" class="blueb" value="Add Partner"></br>
			</form> 
			<form action="dispPartner.php" method="POST">
				<br><input type="submit" name="list_of_partner" class="blueb" value="List of Partner"></br>
			</form> 
			<form action="start.php" method="POST">
				<br><input type="submit" name="back" class="blueb" value="Log out"></br>
			</form>
		</center>
		
	</body>
</html>
<?php

//extends PGSQL pour connecter a la database
class Competition extends Pgsql {

	//check si une essaye de login est bonne
	public function submit($start_date, $end_date, $competition_year, $max_athletes, $num_of_events, $address, $contact_phone_number, $name) {
		try {
			$stmt = $this->connect()->prepare("INSERT INTO competitions(start_date,end_date,competition_year, max_athletes, num_of_events, address, contact_phone_number, name) VALUES(:start_date, :end_date, :competition_year, :max_athletes, :num_of_events, :address, :contact_phone_number, :name)");
			if ($stmt->execute()) { 
				// it worked
				echo "<script>alert('it worked');</script>";
			} else {
				// it didn't
				echo "<script>alert('Not worked');</script>";
			}
		} catch(Exception $e) {
			echo "<script>alert('Invalid Input');</script>";
		}
		
	}
}
?>


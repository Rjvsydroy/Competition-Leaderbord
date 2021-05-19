<?php


//extends PGSQL pour connecter a la database
class Tables extends PGSQL {
	public function showAthletesTable(){ //Affiche la table athletes
		//fait le query voulu
		$stmt = $this->connect()->query("SELECT * FROM athletes");
		//creer la table avec les tuples
		echo "<h3>Athletes Table</h3>";
		echo "<table><tr><td>" . "id" . "</td><td>" . "name" . "</td><td>" . "identified_gender" . "</td><td>" . "email" . "</td><td>" . "date_of_birth" . "</td></tr>";
		while ($row = $stmt->fetch()) {
			echo "<tr><td>" . $row['id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['identified_gender'] . "</td><td>" . $row['email'] . "</td><td>" . $row['date_of_birth'] . "</td></tr>"; 
		}
		echo "</table>";
	}

	public function showCompetitionTable() {//Affiche la table competition
		$stmt = $this->connect()->query("SELECT * FROM competitions");
		echo "<h3>Competitions Table</h3>";
		echo "<table><tr><td>" . "id" . "</td><td>" . "competition_year" . "</td><td>" . "max_athletes" . "</td><td>" . "num_of_events" . "</td><td>" . "address" . "</td><td>" . "contact_phone_number" . "</td><td>" . "start_date" . "</td><td>" . "end_date" . "</td></tr>";
		while ($row = $stmt->fetch()) {
			echo "<tr><td>" . $row['id'] . "</td><td>" . $row['competition_year'] . "</td><td>" . $row['max_athletes'] . "</td><td>" . $row['num_of_events'] . "</td><td>" . $row['address'] . "</td><td>" . $row['contact_phone_number'] . "</td><td>" . $row['start_date'] . "</td><td>" . $row['end_date'] . "</td></tr>"; 
		}
		echo "</table>";
	}

	public function showRegistersTable() {//Affiche la table registre
		$stmt = $this->connect()->query("SELECT * FROM registers");
		echo "<h3>Registers Table</h3>";
		echo "<table><tr><td>" . "athlete_id" . "</td><td>" . "competition_id" . "</td></tr>";
		while ($row = $stmt->fetch()) {
			echo "<tr><td>" . $row['athlete_id'] . "</td><td>" . $row['competition_id'] . "</td></tr>"; 
		}
		echo "</table>";
	}
	
	public function showPartnersTable() {//Affiche la table partenaire
		$stmt = $this->connect()->query("SELECT * FROM partner");
		echo "<h3>Partner Table</h3>";
		echo "<table><tr><td>" . "name" . "</td><td>" . "company_address" . "</td><td>" . "contact_phone_number" . "</td></tr>";
		while ($row = $stmt->fetch()) {
			echo "<tr><td>" . $row['name'] . "</td><td>" . $row['company_address'] . "</td><td>" . $row['contact_phone_number'] . "</td></tr>"; 
		}
		echo "</table>";
	}
	
	public function showContactPersonsTable() {//Affiche la table Contact Person
		$stmt = $this->connect()->query("SELECT * FROM contact_person");
		echo "<h3>Contact Person Table</h3>";
		echo "<table><tr><td>" . "phone_number" . "</td><td>" . "email" . "</td></tr>";
		while ($row = $stmt->fetch()) {
			echo "<tr><td>" . $row['phone_number'] . "</td><td>" . $row['email'] . "</td></tr>"; 
		}
		echo "</table>";
	}
	
	public function showEventsTable() {//Affiche la table Event
		$stmt = $this->connect()->query("SELECT * FROM event");
		echo "<h3>Event Table</h3>";
		echo "<table><tr><td>" . "id" . "</td><td>" . "competition_id" . "</td><td>" . "name" . "</td><td>" . "score" . "</td><td>" . "time" . "</td><td>" . "tie_break" . "</td></tr>";
		while ($row = $stmt->fetch()) {
			echo "<tr><td>" . $row['id'] . "</td><td>" . $row['competition_id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['score'] . "</td><td>" . $row['time'] . "</td><td>" . $row['tie_break'] . "</td></tr>"; 
		}
		echo "</table>";
	}
	

}
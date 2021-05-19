<?php 

//class pgsql utiliser pour connecter a la database
class Pgsql {
	
	function connect() {
		try {
			//changer les attributs dbname, utilisateur et password pout votre database 
			$myPDO = new PDO("pgsql:host=localhost;dbname=TestSql","postgres","Origine96");
			$myPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			echo "Connected to PostgreSQL with PDO";
			return $myPDO;
		} catch(PDOException $e) {
			//Execetption si la connection faillie
			echo "Connection failed: ".$e->getMessage();
		}	
	}	
}

?>
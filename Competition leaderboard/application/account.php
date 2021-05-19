<?php

//extends PGSQL pour connecter a la database
class Account extends PGSQL {

	//check si une essaye de login est bonne
	public function checkLogin($username, $password, $type) {
		$stmt = $this->connect()->prepare("SELECT COUNT(*) FROM account WHERE username =? AND password=? AND type=?");
		$stmt->execute([$username,$password,$type]);
		if ($row = $stmt->fetch()) {
			if ($type == 'admin' AND $row['count'] == 1) {
				return 'admin';
			}
			else if ($type == 'user' AND $row['count'] == 1) {
				return 'user';
			}
			else {
				return '';
			}
		}
	}

	//creer un nouveau account dans la database
	public function SignUp($username, $password, $type){
		try {
			$stmt = $this->connect()->prepare("INSERT INTO account(username,password,type) VALUES(:username, :password, :type)");
			$stmt->execute([$username,$password,$type]);
		} catch(Exception $e) {
			echo "<script>alert('Invalid SignUp');</script>";
		}
	}
}
<?php
//DATABASE
include("database.php");

//GET OR SET ALL THE OTHER VALUES FROM THE FORM
$sUsername = $_POST['inputUsername'];
$sFirstname = $_POST['inputFirstname'];
$sLastname = $_POST['inputLastname'];
$sEmail = $_POST['inputEmail'];
$iRole = '0';
$sPassword = $_POST['inputPassword'];

//CHECK IF USERNAME, PASSWORD OR EMAIL IS NOT NULL
if($sUsername==!null && $sPassword==!null && $sEmail==!null){
	
	// CREATE HASH FOR THE PASSWORD
	$hash = password_hash($sPassword, PASSWORD_DEFAULT, ['cost' => 12]);

	//CHECK IF USERNAME EXISTS
	$sth = $conn->prepare("SELECT username FROM users WHERE username=:username");
	$sth->bindParam(':username',$sUsername);
	$sth->execute();
	$result = $sth->fetchAll(PDO::FETCH_ASSOC);
	
	//IF USERNAME DOES NOT EXIST:
	if($result[0]["username"] ==null){

		//INSERT FORM DATA AND HASH TO DATABASE
		$query = $conn->prepare("INSERT INTO users (username, email, firstname, lastname, role, password) VALUES (:username, :email,:firstname,:lastname,:role,:password)");
		$query->bindParam(':username',$sUsername);
		$query->bindParam(':email',$sEmail);
		$query->bindParam(':firstname',$sFirstname);
		$query->bindParam(':lastname',$sLastname);
		$query->bindParam(':role',$iRole);
		$query->bindParam(':password',$hash);
		$query->execute();

		echo "succes, user created"; //SUCCES

	}else{
		echo "username taken - no user created"; //FAIL
	}
	
}else{
	echo "you need to fill out the whole form - no user created"; //FAIL
}

?>
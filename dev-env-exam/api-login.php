<?php 
//START SESSION
session_start();


	//DATABASE CONNECTION
	include("database.php");

	//GET LOGIN DETAILS FROM INPUT FIELDS
	$sUserName = filter_var($_POST['inputUsername'], FILTER_SANITIZE_STRING);
	$sPassword = filter_var($_POST['inputPassword'], FILTER_SANITIZE_STRING);

	//FIND ROWS WITH USERNAME
	$query=$conn->prepare("select * from users where username=:username");
	$query->bindParam(':username', $sUserName);
	$query->execute();

	//STORE THE USER
	$result = $query->fetchAll(PDO::FETCH_ASSOC);

	//GET HASHED PASSWORD AND ID FROM THE STORED USER
	$hash = $result[0]["password"];
	$user = $result[0]["id"];

	//VERIFY THE INPUT PASSWORD WITH THE STORED HASH
	if (password_verify($sPassword, $hash)) {
		
		//CREATE SESSION KEY VALUE WITH THE ID
		$_SESSION["login"]=$user;
		echo true;

	} else {
		echo 'Error in login'; // FAIL
	}

?>
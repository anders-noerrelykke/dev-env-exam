<?php 
//START SESSION
//session_start();


	//DATABASE CONNECTION
	include("database.php");

	//FETCH ROWS WITH WAREHOUSES
	$query=$conn->prepare("select * FROM warehouse");
	$query->execute();

	//STORE THE ARRAY IN A VAR
    $result = $query->fetchAll(PDO::FETCH_ASSOC); 
    
    //STRINGIGY
    $sResult = JSON_encode($result);

    echo $sResult;


?>
<?php 
//START SESSION
//session_start();


	//DATABASE CONNECTION
	include("database.php");

	$tableName = $_REQUEST['table'];

	//FETCH ROWS WITH WAREHOUSES
	$query=$conn->prepare("select * FROM ".$tableName);
	$query->execute();

	//STORE THE ARRAY IN A VAR
    $result = $query->fetchAll(PDO::FETCH_ASSOC); 
    
    //STRINGIGY
    $sResult = JSON_encode($result);

    echo $sResult;


?>
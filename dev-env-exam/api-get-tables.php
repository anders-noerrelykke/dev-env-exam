<?php 

	//DATABASE CONNECTION
	include("database.php");

	//GET VALUE FROM POST
	$table = $_POST["table"];

	//FETCH ROWS WITH WAREHOUSES
	$query=$conn->prepare("select * FROM ".$table);
	$query->execute();

	//STORE THE ARRAY IN A VAR
    $result = $query->fetchAll(PDO::FETCH_ASSOC); 
    
    //STRINGIGY
    $sResult = JSON_encode($result);

    echo $sResult;


?>
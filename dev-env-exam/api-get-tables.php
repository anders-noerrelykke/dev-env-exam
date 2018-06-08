<?php 

	//DATABASE CONNECTION
	include("database.php");

<<<<<<< HEAD:dev-env-exam/api-get-tables.php
	//GET VALUE FROM POST
	$table = $_POST["table"];

	//FETCH ROWS WITH WAREHOUSES
	$query=$conn->prepare("select * FROM ".$table);
=======
	$tableName = $_REQUEST['table'];

	//FETCH ROWS WITH WAREHOUSES
	$query=$conn->prepare("select * FROM ".$tableName);
>>>>>>> 5c6909b3d82870961e995ef83dc6344b9fe79aa0:dev-env-exam/api-get-warehouses.php
	$query->execute();

	//STORE THE ARRAY IN A VAR
    $result = $query->fetchAll(PDO::FETCH_ASSOC); 
    
    //STRINGIGY
    $sResult = JSON_encode($result);

    echo $sResult;


?>
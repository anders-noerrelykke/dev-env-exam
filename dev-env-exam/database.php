<?php 
ini_set('display_errors', 0);
error_reporting(E_ERROR | E_WARNING | E_PARSE);

//database details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "websec"; //'"schema"

//create new connection using details
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password); //connect


// set the PDO error mode to exception - this will make it easier to see where it went wrong
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
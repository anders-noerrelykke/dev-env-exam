<?php 

ini_set('display_errors', 0);
error_reporting(E_ERROR | E_WARNING | E_PARSE);

session_start();

		if(!isset($_SESSION['login'])){

			echo false;

		}else{
			
			echo $_SESSION['login'];

		} 

?>	
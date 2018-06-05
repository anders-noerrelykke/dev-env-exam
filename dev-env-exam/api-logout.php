<?php 
ini_set('display_errors', 0);
error_reporting(E_ERROR | E_WARNING | E_PARSE);

session_start();

$_SESSION['login'] = false;

session_unset();
session_destroy();


    if($_SESSION == false) {
        echo true;
    } else {
        echo "you are still logged in";
    }

?>
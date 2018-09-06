<?php  

if(!isset($_SESSION)){
	session_start();
}

$dsn = "mysql:host=localhost;dbname=neef_form";
$username = "root";
$password = "";

// $dsn = "mysql:host=codestudio.com.pk;dbname=codestud_neef";
// $username = "codestud_neefU";
// $password = "Neef@123_";

 ?>
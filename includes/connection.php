<?php 

if(!isset($_SESSION)){
	session_start();
}

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "neef_form";

$servername = "codestudio.com.pk";
$username = "codestud_neef";
$password = "Neef@123_";
$dbname = "codestud_neef";

// Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} ?>


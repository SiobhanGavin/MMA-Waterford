<?php
$servername = "localhost";
$username = "sgavinx1";
$password = "Morgan0512";
$dbname = "sgavinx1_mmaw";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//create connection
if ($conn->connect_error) {
	die ("connection failed: " . $conn->connect_error);
}
?>
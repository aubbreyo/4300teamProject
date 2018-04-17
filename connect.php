<?php
header('Access-Control-Allow-Origin: *');
error_reporting(E_ALL);

$servername = "localhost";
$username = "root";
$password = "new_password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn->select_db("Assns");
?>

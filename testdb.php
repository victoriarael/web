<?php
$servername = "localhost";
$username = "root";
$password = "student";  // Change this to your real password
$database = "web";
$port = 3307;

// Create connection
$conn = new mysqli($servername, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die(" Connection failed: " . $conn->connect_error);
}
echo " Connected successfully to the database!";
?>

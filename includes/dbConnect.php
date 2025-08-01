<?php
$servername = "localhost";
$username = "root";
$password = "student";
$database = "web";
$port = 3307;

$conn = new mysqli($servername, $username, $password, $database, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>

<?php
$servername = "localhost";
$username = "root";
$password = "student";  // your password
$database = "web";
$port = 3307;

// Create connection
$conn = new mysqli($servername, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Escape and collect form data
$name = $conn->real_escape_string($_POST['name'] ?? '');
$email = $conn->real_escape_string($_POST['email'] ?? '');
$subject = $conn->real_escape_string($_POST['subject'] ?? '');
$message = $conn->real_escape_string($_POST['message'] ?? '');

// Check if all required fields are filled
if (empty($name) || empty($email) || empty($subject) || empty($message)) {
    die("All fields are required.");
}

// Insert into contacts table
$sql = "INSERT INTO contacts (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

if ($conn->query($sql) === TRUE) {
    header("Location: contacts.php?success=1");
    exit();
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>

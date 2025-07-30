<?php
// Step 1: Connect to the database
$host = 'localhost';
$user = 'root';
$password = 'student'; 
$database = 'web';
$port = 3307; //  MySQL is running on port 3307

$conn = new mysqli($host, $user, $password, $database, $port);

// Step 2: Check if connection works
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 3: Get data from the form
$fullname = $conn->real_escape_string($_POST['fullname']);
$email = $conn->real_escape_string($_POST['email']);
$message = $conn->real_escape_string($_POST['message']);

// Step 4: Save data to messages table
$sql = "INSERT INTO messages (fullname, email, message)
        VALUES ('$fullname', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Message sent successfully!";
} else {
    echo "Error: " . $conn->error;
}

// Step 5: Close connection
$conn->close();
?>

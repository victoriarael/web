<?php
require_once('includes/dbConnect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = trim($_POST['fullname']);
    $email = trim($_POST['email']);
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    // Server-side validation
    if (
        empty($fullname) || !preg_match("/^[a-zA-Z\s]+$/", $fullname) ||
        empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL) ||
        empty($dob) || strtotime($dob) >= time() ||
        empty($gender) || !in_array($gender, ['female', 'male', 'other']) ||
        strlen($password) < 6 || $password !== $confirmPassword
    ) {
        die('Invalid input. Please go back and correct your form.');
    }

    // Hash the password
    $hashedPassword = hash('sha256', $password); // You can use password_hash() if preferred

    // Insert into DB
    $stmt = $conn->prepare("INSERT INTO signups (fullname, email, dob, gender, password) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $fullname, $email, $dob, $gender, $hashedPassword);

    if ($stmt->execute()) {
        header("Location: signin.php?signup=success");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request.";
}
?>

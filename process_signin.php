<?php
session_start();

// Include DB connection
require_once('includes/dbConnect.php');

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    // Validate inputs
    if (empty($username) || empty($password)) {
        $_SESSION['error'] = "Please fill in both username and password.";
        header("Location: signin.php");
        exit();
    }

    // Prepare SQL query
    $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);

    if ($stmt->execute()) {
        $stmt->store_result();

        if ($stmt->num_rows === 1) {
            $stmt->bind_result($user_id, $stored_hash);
            $stmt->fetch();

            // Compare entered password with stored hash
            if (hash('sha256', $password) === $stored_hash) {
                // Login success
                $_SESSION["user_id"] = $user_id;
                $_SESSION["username"] = $username;
                header("Location: dashboard.php"); // Adjust as needed
                exit();
            } else {
                $_SESSION['error'] = "Incorrect password.";
                header("Location: signin.php");
                exit();
            }
        } else {
            $_SESSION['error'] = "User not found.";
            header("Location: signin.php");
            exit();
        }
    } else {
        $_SESSION['error'] = "Database error. Please try again.";
        header("Location: signin.php");
        exit();
    }

    $stmt->close();
    $conn->close();
} else {
    header("Location: signin.php");
    exit();
}
?>

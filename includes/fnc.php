<?php
session_start();

// Function to check if the user is logged in
function checkUserLoggedIn() {
    if (!isset($_SESSION['consort'])) {
        header("Location: signin.php?error=not_logged_in");
        exit;
    }
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function SendMail($to, $subject, $message) {
    require '../plugins/PHPMailer/vendor/autoload.php';

    $mail = new PHPMailer(true);

    try {
        // SMTP settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'bbitalex@gmail.com'; // Replace with your email
        $mail->Password   = 'lbxd hxbb sgde aknq'; // Use app password, not raw password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        // Email headers
        $mail->setFrom('bbitalex@gmail.com', 'Alex Okama');
        $mail->addAddress($to);

        // Email body
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $message;

        $mail->send();
        echo "<p style='color: green;'>Message sent successfully!</p>";
    } catch (Exception $e) {
        echo "<p style='color: red;'>Mailer Error: {$mail->ErrorInfo}</p>";
    }
}

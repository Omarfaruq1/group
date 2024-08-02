<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer autoloader
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

// Connect to database
$pdo = new PDO('mysql:host=localhost;dbname=library7', 'root', '');

// Retrieve email address from form
$email = $_POST['email'];

// Check if email address is registered
$stmt = $pdo->prepare('select id from users u where u.email= ?');
$stmt->execute([$email]);
$user = $stmt->fetch();

if (!$user) {
    // If email address is not registered, redirect back to forgot_password.php with an error message
    header('Location: forgot-password.php?error=Email address not found');
    exit;
}

// Generate random code and store it in the database
$reset_code = bin2hex(random_bytes(3));
$stmt = $pdo->prepare('UPDATE users SET password = ? WHERE id = ?');
$stmt->execute([$reset_code, $user['id']]);

// Send reset code to user's email address using Gmail SMTP
$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'ayuuby62@gmail.com';
    $mail->Password = 'pltcwvfqvjgwrlvm';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    //tmph
    //qofka
    $mail->setFrom('ayuuby62@gmail.com', 'ONLINE LIBRARY MANAGEMENT SYSTEM');
    $mail->addAddress($email);

    //waxa la diraayo
    $mail->isHTML(true);
    $mail->Subject = 'Password Reset Code';
    $mail->Body = 'Your password reset code is: ' . $reset_code;

    $mail->send();

    // reset password geey an email has been sent
    header('Location: reset_password.php?email=' . urlencode($email));
    exit;
} catch (Exception $e) {
    // haddi la diri waayo ku soo celi forgot_password.php with an error message
    header('Location: forgot-password.php?error=' . urlencode('Email failed to send: ' . $mail->ErrorInfo));
    exit;
}

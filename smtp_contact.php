<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer library files
require 'path_to/PHPMailer/src/Exception.php';
require 'path_to/PHPMailer/src/PHPMailer.php';
require 'path_to/PHPMailer/src/SMTP.php';

// Create an instance of PHPMailer
$mail = new PHPMailer();

// SMTP configuration
$mail->isSMTP();
$mail->Host     = 'smtp.gmail.com';  // Set SMTP server (e.g., smtp.gmail.com for Gmail)
$mail->SMTPAuth = true;
$mail->Username = 'your_email@gmail.com';  // Your Gmail address
$mail->Password = 'your_password';  // Your Gmail password (or app-specific password if 2FA is enabled)
$mail->SMTPSecure = 'tls';
$mail->Port     = 587;

// Email settings
$mail->setFrom('your_email@gmail.com', 'Your Name');
$mail->addAddress('recipient_email@example.com');  // Recipient's email address
$mail->Subject = 'Contact Form Submission';
$mail->Body    = 'This is a test email sent via SMTP using PHPMailer.';

// Send email
if($mail->send()){
    echo 'Message has been sent';
}else{
    echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
}
?>

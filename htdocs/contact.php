<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/config.php';
require __DIR__ . '/mailer/Exception.php';
require __DIR__ . '/mailer/PHPMailer.php';
require __DIR__ . '/mailer/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    exit;
}

$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');

if ($name === '' || $email === '' || $message === '') {
    header('Location: index.php?error=1');
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: index.php?error=1');
    exit;
}

$mail = new PHPMailer(true);

try {
    // SMTP config
    $mail->isSMTP();
    $mail->Host       = SMTP_HOST;
    $mail->SMTPAuth   = true;
    $mail->Username   = SMTP_USER;
    $mail->Password   = SMTP_PASS;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = SMTP_PORT;

    // Mail setup
    $mail->setFrom(SMTP_USER, 'Portfolio Contact');
    $mail->addAddress(SMTP_USER);
    $mail->addReplyTo($email, $name);

    // Message
    $mail->isHTML(false);
    $mail->Subject = "New Contact Message from $name";
    $mail->Body =
        "Name: $name\n" .
        "Email: $email\n\n" .
        "Message:\n$message\n";

    $mail->send();

    header('Location: index.php?success=1');
    exit;
} catch (Exception $e) {
    header('Location: index.php?error=1');
    exit;
}

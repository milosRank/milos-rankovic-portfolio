<?php

require '../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;

// Load .env variables
$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

// Server validation
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $full_name = filter_input(INPUT_POST, 'full_name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email     = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $message   = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if (!$full_name || !$email || !$message) {
        // http_response_code(400);
        // echo "Sva polja su obavezna i moraju biti ispravno popunjena.";
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        // SMTP settings from .env file
        $mail->isSMTP();
        $mail->Host       = $_ENV['MAIL_HOST'];
        $mail->SMTPAuth   = true;
        $mail->Username   = $_ENV['MAIL_USERNAME'];
        $mail->Password   = $_ENV['MAIL_PASSWORD'];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = $_ENV['MAIL_PORT'];

        $mail->setFrom($_ENV['MAIL_FROM_ADDRESS'], $_ENV['MAIL_FROM_NAME']);
        $mail->addReplyTo($email, $full_name);
        $mail->addAddress($_ENV['MAIL_TO']);

        $mail->isHTML(false);
        $mail->Subject = "Upit sa kontakt forme";
        $mail->Body    = "Ime: $full_name\nEmail: $email\n\nPoruka:\n$message";

        $mail->send();
        echo "Hvala vam na poruci! Vaš upit je uspešno primljen. Možete očekivati odgovor u najkraćem mogućem roku.";
    } catch (Exception $e) {
        http_response_code(500);
        echo "Došlo je do greške pri slanju poruke: {$mail->ErrorInfo}. Molimo pokušajte ponovo.";
    }
} else {
    http_response_code(405);
    echo "Nedozvoljena metoda zahteva.";
}

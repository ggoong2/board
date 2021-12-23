<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require "PHPMailer/src/PHPMailer.php";

require "PHPMailer/src/SMTP.php";

require "PHPMailer/src/Exception.php";


// Load Composer's autoloader
// require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

// Instantiation and passing `true` enables exceptions

// function send_mail($addresses, $subject, $body) {
    $mail = new PHPMailer(true);
    
    try {
        //Server settings
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.naver.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'ukwon7';                     // SMTP username
        $mail->Password   = 'wnsgur123';                               // SMTP password
        $mail->CharSet = 'utf-8'; 
        $mail->Encoding = "base64";
        $mail->SMTPSecure = 'tls';          
        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom('ukwon7@naver.com');
        $mail->addAddress('ukwon7@gmail.com');     // Add a recipient

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'sdfsdf';
        $mail->Body    = 'sdfsdfdsfa';

        $mail->send();
        echo 'Message has been sent';
        return true;
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        return false;
    }
// }
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

const USER	= 'ukwon7@naver.com'; //보내는 사람 이메일
const PASSWORD = 'wnsgur123'; //비밀번호


// $NAME		= $_POST['name'];
// $MAIL		= $_POST['email'];
// $PHONE      = $_POST['phone'];
// $SUBJECT    = $_POST['subject'];
// $MESSAGE    = $_POST['message'];

// $HELP_EMAIL = 'help@thermoeye.co.kr';


$mail = new PHPMailer(true);

//Enable SMTP debugging.
$mail->SMTPDebug = 1;                               
//Set PHPMailer to use SMTP.
$mail->isSMTP();            
//Set SMTP host name                          
// $mail->Host = "smtp.daum.net";
// $mail->SMTPSecure = "ssl";
// $mail->Port = 465;

//smtp 설정이 중요합니다. 테스트결과, 다음은 위처럼, 네이버는 아래처럼 해야하더군요

$mail->Host = "smtp.naver.com";
$mail->SMTPSecure = "tls";
$mail->Port = 587;

//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = USER;                 
$mail->Password = PASSWORD;

$mail->CharSet = "utf-8"; //이거 설정해야 한글 안깨짐

//If SMTP requires TLS encryption then set it

$mail->From = USER;
$mail->FromName = "kjh";

$mail->addAddress("ukwon7@naver.com", "Recepient Name"); //받는 사람
// $mail->addAddress($HELP_EMAIL, '');
// 테스트 끝나면 받는 주소 바꿔놓기

$mail->isHTML(true);

$mail->Subject = "sub";
$mail->Body = "bodt";

$mail->AltBody = "";

try {
    $mail->send();
    echo "Message has been sent successfully";
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
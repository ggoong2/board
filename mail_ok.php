<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

const USER	= 'ukwon7@gmail.com'; //보내는 사람 이메일
const PASSWORD = ''; //비밀번호


$NAME		= $_POST['name'];
$MAIL		= $_POST['email'];
$PHONE      = $_POST['phone1'].$_POST['phone2'].$_POST['phone3'];
$SUBJECT    = $_POST['gubun'];
$MESSAGE    = $_POST['content'];

// $HELP_EMAIL = 'help@thermoeye.co.kr';


$mail = new PHPMailer(true);

//Enable SMTP debugging.
$mail->SMTPDebug = 2;                               
//Set PHPMailer to use SMTP.
$mail->isSMTP();            
//Set SMTP host name                          
$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = "ssl";
$mail->Port = 465;

//smtp 설정이 중요합니다. 테스트결과, 다음은 위처럼, 네이버는 아래처럼 해야하더군요

// $mail->Host = "smtp.naver.com";
// $mail->SMTPSecure = "tls";
// $mail->Port = 587;

//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = USER;                 
$mail->Password = PASSWORD;
$mail->CharSet = "utf-8"; //이거 설정해야 한글 안깨짐

//If SMTP requires TLS encryption then set it

$mail->From = USER;
$mail->FromName = "$NAME";

$mail->addAddress("ggoong@frwks.com", "Recepient Name"); //받는 사람
// $mail->addAddress($HELP_EMAIL, '');
// 테스트 끝나면 받는 주소 바꿔놓기

$mail->isHTML(true);

$mail->Subject = "$NAME-$SUBJECT";
$mail->Body = "$MESSAGE";

$mail->AltBody = "";

try {
    $mail->send();
    echo "<script> alert('문의를 보냈습니다');
    location.href='contactus.php';</script>";
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
    echo "<script> alert('문의사항을 확인하세요');</script>";
}

?>


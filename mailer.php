<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Include the PHPMailer library
//$mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // You can also try port 465 for SSL
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl'; // You can use 'ssl' for port 465
$mail->Username = 'kimanipaul263@gmail.com'; // Your Gmail email address
$mail->Password = 'znnq lcxh lzhi cpix'; // Your Gmail password

$mail->isHtml(true);

return $mail;
?>

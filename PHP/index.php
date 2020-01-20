<?php

//require 'class.phpmailer.php';
//
//require 'class.smtp.php';
//$mail = new PHPMailer;
//$mail->isSMTP();
//$mail->Host='smtp.gmail.com';
//$mail->Port=8080;
//$mail->SMTPAuth=true;
//$mail->SMTPSecure='tls';
//
//$mail->Username='sanjaypa70@gmail.com';
//$mail->Password='srp14131211';
//
//$mail->setFrom('sanjaypa70@gmail.com','JayYogershwar');
//$mail->addAddress('sanjaypa70@gmail.com');
//$mail->addReplyTo('kanadpa31@gmail.com');
//
//$mail->isHTML();
//$mail->Subject='php mailer';
//$mail->Body='<h1 align=center>Success!</h1>';
//if(!$mail->send())
//{
//	echo "lol";
//}
//else
//{
//	echo "success!";
//}
//?>

<?php
require 'PHPMailerAutoload.php';
$mail = new PHPMailer;

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port=465;
$mail->SMTPAuth = true;
$mail->Username = 'sanjaypa70@gmail.com';
$mail->Password = 'srp14131211';
$mail->SMTPSecure = 'ssl';

$mail->SMTPDebug = 2;

$mail->From = 'sanjaypa70@gmail.com';
$mail->FromName = 'sanjay';
$mail->addAddress('sanjaypa70@gmail.com', 'srp14131211');

$mail->addReplyTo('kanadpa31@gmail.com', 'boy');

$mail->WordWrap = 50;
$mail->isHTML(true);

$mail->Subject = 'Using PHPMailer';
$mail->Body    = 'Hi Iam using PHPMailer library to sent SMTP mail from localhost';

if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

echo 'Message has been sent';

?>
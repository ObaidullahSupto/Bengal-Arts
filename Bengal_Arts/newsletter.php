<?php
$name=$_POST['name'];
$occupation=$_POST['occupation'];
$email=$_POST['email'];
$phone=$_POST['phone'];
require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer();

$mail->isSmtp();
$mail->SMTPDebug = 1;
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;
$mail->IsHTML(true);
$mail->Username = '';
$mail->Password = '';
$mail->setFrom('');




$mail->Subject = 'Sign Up For News Letter';
$mail->Body =$name.'</br>'.$occupation.'</br>'.$email.'</br>'.$phone;
$mail->addAddress('');

if (!$mail->send()){
    echo "Mail not sent";
}else{
	echo "mail sent";
}
?>
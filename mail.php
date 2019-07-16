<?php
if(isset($_POST['submit'])){
require 'PHPMailerAutoload.php';
require 'credential.php';


$mail = new PHPMailer;

$mail->SMTPSecure= 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->isSMTP();
$mail->isHTML();
$mail->Username = EMAIL;
$mail->Password = PASS;
$mail-> SMTPSecure ='tls';
$mail-> Port = 587;
$mail->SetFrom('EMAIL');
$mail -> AddAddress($_POST['email']);
$mail->Subject = 'please find the records';
$mail->Body = 'Hello User, Smoke Detected!!! Please have a Check. Ae Yedya!!!! ';
//$mail->AddAddress('pkundeshwar@gmail.com');
if($mail->Send())
	echo "Mail sent";
else
	echo "Mail not sent";

?>
}
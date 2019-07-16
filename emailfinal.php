<form method = "post" enctype= "multipart/form-data">
<p>
Send to:
<input type ="text" name="receiver" id= "receiver"/>
</p>
<p>
Subject:
<input type="text " name ="subject" id= "subject"/>
</p>
<p>
Message:
<textarea name = "message"></textarea>
</p>
<p>
Select file:
<input type="file" name = "file" id= "file"/>
</p>
<input type="submit" name ="submit" id= "submit" value ="send Mail"/>
</form>

<?php

if (isset ($_POST["submit"])) {
	
	require "php-mailer-master/PHPMailerAutoload.php";

	$mail = new PHPMailer;
	$sender= "laddupappa1008@gmail.com";
$mail->SMTPSecure = 'ssl';                           
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;  
$mail->isSMTP();  
$mail->Port = '465'; 
$mail->isHTML();                                       
$mail->Username = "laddupappa1008@gmail.com";             
$mail->Password = "junnu081295"; 
$mail->SetFrom('laddupappa1008@gmail.com');     
$mail->setFrom($sender, 'Mailer');
$mail->addAddress($_POST["receiver"]);  

$file_name = $_FILES["file"]["name"];
move_uploaded_file($_FILES["file"]["tmp_name"], $file_name);        
$mail->addAttachment($file_name);         
$mail->isHTML(true);                                  

$mail->Subject = $_POST["subject"];
$mail->Body    = $_POST["message"] ;


if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

}

?>

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
$sender= "publicrequest@cityofhuntington.com";
$mail->SMTPSecure = 'ssl';                         
$mail->Host = 'mail.cityofhuntington.com';
$mail->SMTPAuth = true;  
$mail->isSMTP();  
$mail->Port = '587'; 
$mail->isHTML();                                       
$mail->Username = "publicrequest@cityofhuntington.com";             
$mail->Password = "4L4akvKW"; 
$mail->SetFrom('noreply@cityofhuntington.com');     
$mail->setFrom('noreply@cityofhuntington.com', 'Mailer');
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
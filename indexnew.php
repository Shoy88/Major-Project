<?php
// Please specify your Mail Server - Example: mail.yourdomain.com.
ini_set("SMTP","mail.YourDomain.com");

// Please specify an SMTP Number 25 and 8889 are valid SMTP Ports.
ini_set("smtp_port","465");

// Please specify the return address to use
ini_set('sendmail_from', 'ValidEmailAccount@YourDomain.com');
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_FILES) && (bool) $_FILES) {
	$allowedExtensions = array("pdf", "png", "docx", "jpeg", "txt");

global $files;
$files = array();
foreach ($_FILES as $name => $file) {

	$file_name = $file ['name'];
	$temp_name = $file ['tmp_name'];
	$file_type = $file ['type'];
	$path_parts = pathinfo($file_name);
	$ext = $path_parts['extension'];
	if(!in_array($ext, $allowedExtensions)) {

		die("File $file_name has the extensions $ext which is not allowed");
	}
	array_push($files, $file);
}
$to = $_POST['em'];
$from = "shoy8@gmail.com";
$subject = "Today's Files";
$message = $_POST['msg'];
$headers = "From: $from";

$semi_rand = md5(time());
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

$headers .="\nMIME-Version:1.0\n" . "Content-Type : multipart/mixed;\n"."boundary=\"{$mime_boundary}\"";
$message = "This is a multipart message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type:text/plain; charset=\"iso-8859-1\"\n". "Content-Transfer_Encoding:7bit\n\n" . $message. "\n\n";
$message .= "--{$mime_boundary}\n";

//attachments
for($x=0;$x< count($files); $x++){
	$file= fopen($files[$x]['tmp_name'],"rb");
	$data = fread($file,filesize($file[$x]['tmp_name']));
	fclose($file);
	$data = chunk_split(base64_encode($data));
	$name= $files[$x]['name'];
	$message .="Content-Type:{\application/octet-stream\"};\n" . "name=\"$name\"\n" . " Content-Disposition:attachment;\n" . "filename= \"$name\"\n" . "Content-Transfer_Encoding: base64\n\n" . $data . "\n\n";
	$message.= "--{$mime_boundary}\n";
}

$ok = mail($to,$subject, $message, $headers);
if($ok) {
	echo "<p> You email has been sent to $to!</p>";
}
else{
	echo "<p> Your email could not be sent! Please try again!</p>";
}

}


?>





<?php
$subject = "From: ".$_POST["subject"];
$ToEmail = 'ruchip731@gmail.com';

$mailheader = "From: ".$_POST["email"]."\r\n";
$mailheader .= "Reply-To: ".$_POST["email"]."\r\n";
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";
$MESSAGE_BODY = "Name: ".$_POST["name"]."\r\n";
$MESSAGE_BODY .= "Email: ".$_POST["email"]."\r\n";
$MESSAGE_BODY .= "Comment: ".nl2br($_POST["message"])."\r\n";
mail($ToEmail, $subject, $MESSAGE_BODY, $mailheader);
 $message = "Email sent successfully";
echo "<script type='text/javascript'>alert('$message'); window.location='contact.php'</script>";



?>

<?php
$to = "name@domain.com";
$subject = "Test mail";
$message = "Hello! This is a simple email message.";
$from = "name@domain.com";
$headers = "From:" . $from;
if(mail($to,$subject,$message,$headers))
echo "Mail Sent.";
else echo "Failed";
?>
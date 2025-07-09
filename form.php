<?php
$name= $_POST['name'];
$visitor_email= $_POST['email'];
$subject= $_POST['subject'];
$message= $_POST['message'];

$email_from = 'info@yourwebsite.com';

$email_subject = 'New Form submission';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n". 
               "subject: $subject.\n".
               "user message: $message.\n";

 $to = 'andrewyohana08@gmail.com';
 
 $headers = "From: $email_from \r\n";

 $headers .= "Replay-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body, $headers);

headers("Location: contact.html");



?>
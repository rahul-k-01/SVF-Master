<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$Message = $_POST['message'];

$email_from = 'rahulkariyappa11@gmail.com';

$email_subject = 'New from submission';

$email_body = "user Name: $name.\n".
              "user Email: $visitor_email.\n".   
              "subject: $subject.\n".
              "user message: $message.\n";         
$to = 'creativeaxis21@gmail.com'
$headers = "from: $email_from \r\n";
$headers .= "reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");

?>
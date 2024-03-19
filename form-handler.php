<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from ='info@yourwebsite.com';

$email_body ='new form submission';

$email_body ="user name: $name.\n".
              "user email: $visitor_email.\n".
              "subject: $subject.\n".
              "user message: $message.\n".;

$to ='avinash625@gmail.com';

$headers ="from:$email_from \r\n";

$headers .="reply_to:$visitor_email\r\n";

mail($to,$email_subject,$headers,$email_body);

header("location:contact.html");

?>
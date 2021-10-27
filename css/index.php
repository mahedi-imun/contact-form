<?php 
$name =$_post['name'];
$visitor_email = $_post['email'];
$message =$_post['message'];


$email_form = 'mahedianik4@gmail.com';

$email_subject = "new form submission";

$email_body = "user Name: $name.\n".
              "User Email: visitor_email.\n".
              "User Massage: $message.\n";

$to = "mahedianik4@gmail.com";

$headers = "form: $email_form\r\n";

$headers = "replay-to: $visitor_email\r\n";

mail($to,$email_subject,$email_body,$headers);
header("location: index.html");







?>
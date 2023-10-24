<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$file = $_POST['file'];
$message = $_POST['message'];

$email_from = 'random@people.com';
$email_subject = 'New Form Submission';
$email_body = "User Name: $name.\n".
				"User Email: $visitor_email.\n".
				"User file: $file.\n".
				"User Message: $message.\n".
$to = 'abdulahadkashem@gmail.com';

$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location: index.html");
?>
<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'random@people.com';
$email_subject = 'New Form Submission';
$email_body = "User Name: $name.\n".
		"User Email: $visitor_email.\n".
		"User Message: $message.\n";
$to = 'abdulahadkashem@gmail.com';

$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

if (mail($to, $email_subject, $email_body, $headers)) {
            header("Location: index.html");
            exit();
        } else {
            echo "Email could not be sent. Please try again later.";
        }
    } else {
        echo "Invalid email address. Please provide a valid email.";
    }
}
?>

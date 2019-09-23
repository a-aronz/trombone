<?php 
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$email_from = 'aaron@aaronzalkind.com';

	$email_subject = $subject;

	$email_body = "User Name: $name. \n User Email: $visitor_email. \n User Subject: $subject.\n User Message: $message.\n";

	$to = "sarah.gage@gmail.com";

	$headers = "From: $email_from \r\n Reply: $visitor_email \r\n";

	mail($to,$email_subject, $email_body, $headers)

	header("Location: contact.html")
?>
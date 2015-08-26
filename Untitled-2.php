<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subsub = $_POST['Subject1'];
$formcontent="From: $name \n Email: $email \n Message: $message";
$recipient = "lbusson@deakin.edu.au";
$subject = "Email Enquiry";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Sorry, your message could not be sent at this time");

echo $name

?>
<?php
$to = "joanne.ramadani@gmail.com";
$subject = "You have new mail!";
$message = "You have a new signup!\r\n\r\n";
$message .= "Name: $name \r\n";
$message .= "Email: $email \r\n";
$message .= "Commission: $commission\r\n";
$message .= "Deadline: $deadline\r\n";
$message .= "Comments: $specs\r\n";
$headers = "From:newuser@localhost\r\n";
mail($to, $subject, $message, $headers);
?>
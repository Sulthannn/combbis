<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = "Contact form submission";
$to = "sulthanizza11@gmail.com";

$body = "From: $name\n E-Mail: $email\n Message:\n $message";

if (mail($to, $subject, $body)) {
    echo("<p>Message successfully sent!</p>");
   } else {
    echo("<p>Message delivery failed...</p>");
   }

?>



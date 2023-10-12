<?php
$to_mail = "abhinav69596959@gmail.com";
$subject = "Welcome to Accenture";
$body = "Hi, Congratulations for getting placed in accenture.";
$headers = "Content-Type: text/html; charset=utf-8";

if(mail($to_mail, $subject, $body, $headers)) {
    echo "Email sent successfully to $to_mail";
} else {
    echo "Email sending failed";
}
?>
<?php
if(isset($_POST['submit'])) {
    $to = $_POST['to'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // $headers = "Content-Type: text/html; charset=utf-8";
    $headers = "From: kumarashish97713@gmail.com";

    if(mail($to, $name, $subject, $message, $headers)) {
        echo "Email sent successfully."; 
    } else {
        echo "Email sending failed.";
    }
}

?>.
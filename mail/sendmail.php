<?php
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "abhinav69596959@gmail.com";
    $subject = "Contact from ".$name;
    $message = "<h2>Contact Query from the user</h2>
                <h4>Name: ".$name."</h4>
                <h4>Email: ".$email."</h4>
                <h4>Message: ".$message."</h4>
    ";
    $headers = "Content-Type: text/html; charset=utf-8";

    if(mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully."; 
    } else {
        echo "Email sending failed.";
    }
}

?>
<!DOCTYPE html>
<html>

<form method="POST">
NAME : <input type="text" name="name" />
EMAIL :<input type="text" name="email" />
<input type="submit">
</form>

</html>
<?php
if($_SERVER["REQUEST_METHOD"]==="POST"){
$name=sanitizeInput($_POST["name"]);
$email=sanitizeEmail($_POST["email"]);
echo "Final name: ".$name."<br>";
echo "Final Email: ".$email."<br>";

}

function sanitizeInput($name){
$name =trim($name);
$name = filter_var($name,FILTER_SANITIZE_STRING);
return $name;
}

function sanitizeEmail($email){
$email = trim($email);
$email= filter_var($email, FILTER_SANITIZE_EMAIL);
return $email;
}

?>
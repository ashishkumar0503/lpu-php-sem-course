<form method="post">
Name: <input type="text" name="name" placeholder="Enter name">
Email: <input type="email" name="email" placeholder="Enter email">
<input type="submit" name="submit" value="Submit">
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['submit'])) {
        $name = sanitizeName($_POST['name']);
        $email = sanitizeEmail($_POST['email']);
        
        if(empty($name)) {
            echo "Name is required";
        } elseif(empty($email)) {
            echo "Email is required";
        } else {
            echo "Name is " . $name. " and Email is " . $email;
        }
    }
}
    function sanitizeName($name) {
        $name = trim($name);
        $name = filter_var($name, FILTER_SANITIZE_STRING);
        return $name;
    }
    function sanitizeEmail($email) {
        $email = trim($email);
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        return $email;
    }
?>
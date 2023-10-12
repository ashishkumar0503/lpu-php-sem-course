<form method="post">
    <input type="text" placeholder="Enter your name" name="name"/>
    <input type="text" name="value" placeholder="Enter value" />
    <button type="submit" name="set">Set</button>
    <button type="submit" name="del">Del</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["set"])) {
        $name = $_POST["name"];
        $value = $_POST["value"];
        setcookie($name, $value, time() + 5);
        echo "Cookie '". $name . "' has been set<br>";
        echo "Value is: ". $value; // Display the value immediately
    } elseif (isset($_POST["del"])) {
        if (!empty($_POST["name"])) {
            $name = $_POST["name"];
            // To delete a cookie, you can set its expiration time to a time in the past.
            setcookie($name, "", time() - 5);
            echo "Cookie '". $name . "' has been deleted";
        } else {
            echo "Please enter a valid cookie name to delete.";
        }
    }
}
?>

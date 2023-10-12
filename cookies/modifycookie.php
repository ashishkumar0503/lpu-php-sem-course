<?php
$cookie_name = "user";
$cookie_value = "Ashish";
setcookie($cookie_name, $cookie_value, time() + 5);
// setcookie($cookie_name, $cookie_value, time() + 5000);

if (isset($_COOKIE[$cookie_name])) {
    echo "Cookie '". $cookie_name . "' has been set<br>";
    echo "Value is: ". $_COOKIE[$cookie_name];
} else {
    echo "Cookie '". $cookie_name . "' is not set";
}

?>
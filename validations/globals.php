<?php
$global_variable = "Hello, I'm a global variable.";

function access_global_variable() {
    // Accessing the global variable using the $GLOBALS array
    echo $GLOBALS['global_variable'];
    echo "<br>";
}

function modify_global_variable() {
    // Modifying the global variable using the $GLOBALS array
    $GLOBALS['global_variable'] = "Global variable has been modified.";
}

access_global_variable(); // Output: Hello, I'm a global variable.
modify_global_variable();
access_global_variable(); // Output: Global variable has been modified.
?>
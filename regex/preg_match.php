<?php
// $subject = "Hello World";
// $pattern = "/Hello/";

// if (preg_match($pattern, $subject)) {
//     echo "Pattern found in the string.";
// } else {
//     echo "Pattern not found in the string.";
// }

$pattern = "/cs[kf]e/";
$text = "He was eating cake in the cafe.";

if (preg_match($pattern, $text)) {
    echo "Pattern found in the string.";
} else {
    echo "Pattern not found in the string."; 
}
?>
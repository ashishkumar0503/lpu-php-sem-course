<?php

function calculateSum($numbers) {
    $sum = 0;
    $numberArray = explode(",", $numbers);
        
    foreach ($numberArray as $number) {
        $sum += intval($number);
    }
    
    return $sum;
}

$inputNumbers = $_POST["numbers"];
$totalSum = calculateSum($inputNumbers);
echo "The sum of the numbers is: $totalSum";

?>
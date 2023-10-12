<?php 

function grade($marks) {
    $grade = intval($marks);
    if($grade >= 0 && $grade < 30) {
        echo "Fail";
    } else if($grade >= 30 && $grade < 60) {
        echo "B";
    } else if($grade >= 60 && $grade < 90) {
        echo "A";
    } else if($grade >= 90 && $grade <= 100) {
        echo "Tomper";
    } else {
        echo "Invalid...";
    }
}

$marks = $_POST["text"];
grade($marks);

?>
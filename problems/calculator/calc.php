<form method="POST">
    <input type="text" name="num1" id="" placeholder="Enter num 1" />
    <input type="text" name="num2" id="" placeholder="Enter num 2" />
    <button>Submit</button>
</form>

<?php

if ($_POST) {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    echo "The addition is " . ($num1 + $num2) . "</br>";
    echo "The subtraction is " . ($num1 - $num2) . "</br>";
    echo "The multiplication is " . ($num1 * $num2) . "</br>";
    if ($num2 == 0) {
        echo "Division by zero not possible...";
    } else {
        echo "The division is " . ($num1 / $num2) . "</br>";
    }
}

?>
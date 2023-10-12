<?php
function isPrime($num) {
    if ($num <= 1)
        return false;
    
    for ($i = 2; $i <= $num / 2; $i++)
        if ($num % $i == 0)
            return false;
  
    return true;
}

for ($i = 1; $i <= 100; $i++) {
    if (isPrime($i)) {
        echo $i . " ";
    }
}


?>
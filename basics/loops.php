<?php 
$i = 1;
while ($i <= 10) {
    echo $i++."<br>";
}
$j = 1;
for ($j = 1; $j <= 5; $j++) {
    echo $j."<br>";
}

// for-each loop
$colors = array("Red", "Green", "Blue");
foreach($colors as $value) {
echo $value."<br>";
}

<form method="POST">
    <input type="text" name="country" id="" placeholder="Enter your country" />
    <input type="text" name="num" id="" placeholder="Enter your age" />
    <button>Submit</button>
</form>

<?php

if ($_POST) {
    $country = $_POST["country"];
    $age = $_POST["num"];

    if ($age < 18 && $country == "India") {
        echo "You are indian but not eligble to vote due to age less than 18";
    } else if($age < 18 && $country != "India") {
        echo "You are not Indian. Hence, not eligible to vote";
    } else if($age >= 18 && $country != "India") {
        echo "You are not Indian. Hence, not eligible to vote";
    } else if($age >= 18 && $country == "India") {
        echo "You are indian. Hence, eligible to vote due to age > 18";
    }
}

?>
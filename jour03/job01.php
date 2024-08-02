<?php
$numbers = [200, 204, 173, 98, 171, 404, 459];
foreach ($numbers as $number) {
    if ($number % 2 == 0) {
        echo "$number is an even number <br/>";
    } else {
        echo "$number is an odd number <br/>";
    }
}
?>

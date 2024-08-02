<?php

$speed_offenses = array(45, 55, 60, 70, 40 );

$test_value = $speed_offenses[2]; 

$average_speed = $test_value;

$average_speed = array_sum($speed_offenses) / count($speed_offenses);

if ($average_speed > 50) {
    echo "Speed limit tickets are above 50 km/h. Average speed: " . number_format($average_speed, 2) . "km/h";
}

else {
    echo "Congratulations! No speed limit tickets above 50 km/h";
}

?>

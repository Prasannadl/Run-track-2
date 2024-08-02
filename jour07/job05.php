<?php
function occurrences($str, $char) {
    $count = 0;
    for ($i = 0; $i < strlen($str); $i++) {
       if ($str[$i] == $char) {
        $count++ ;
       }
    }

    return $count;
}

$str = "bonjour";
$char = 'o';
echo "The number of occurrences of '$char' in '$str' is: ".occurrences($str, $char);
?>

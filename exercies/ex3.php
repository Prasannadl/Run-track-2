<?php
$student = $_GET["name"];
$pc= 0;
$croissant=0;
$brioche=0;
if($student == "walid") {
    $pc=7;
    $croissant=3;
$brioche=2;
    echo ($pc);
    echo ($croissant);
    echo ($brioche);
}
if($student=="theo") {
    $pc=3;
    $croissant=0;
    $brioche=2;
    echo($pc);
    echo($croissant);
    echo($brioche);
}



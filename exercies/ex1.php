<?php
$score = $_GET['score'];
echo ($score);
if( $score<10 ){
    echo "loose";
} else {
    echo "win";
}
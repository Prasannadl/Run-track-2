<?php


function degreAlcool ($quantité, $alcool)
{
    $degreAlcool= ($alcool/$quantité)*100;

    return $degreAlcool ;
}




$bouteille1= "whiskey";
$quantité1= 75 ;
$alcool1= 28;


$bouteille2= "Huitsix";
$quantité2= 50 ;
$alcool2= 9;

$bouteille3= "vin";
$quantité3=75 ;
$alcool3= 11;

function afficher ($bouteille, $degreAlcool){
    echo $degreAlcool, $bouteille;
}


$degreAlcool1 = degreAlcool ($quantité1, $alcool1);
afficher ($degreAlcool1, $bouteille1);
echo "<br/>";


$degreAlcool2 = degreAlcool ($quantité2, $alcool2);
afficher ($degreAlcool2, $bouteille2);
echo "<br/>";

$degreAlcool3 = degreAlcool ($quantité3, $alcool3);
afficher ($degreAlcool3, $bouteille3);
echo "<br/>";
<?php
function presenterponeys($prenom, $nom, $couleur, $age, $taille, $poids, $robe, $des_ailes, $herbivore) {
    $ailes = $des_ailes ? 'oui' : 'non';
    $regime = $herbivore ? 'oui' : 'non';
    $presentation = "Voici mon poney. Il s'appelle $prenom $nom, il est de couleur $couleur, il a $age ans, il mesure $taille cm, pèse $poids kg, sa robe est $robe, a-t-il des ailes? $ailes, est-il herbivore? $regime.";

    return $presentation;
}

$prenom1 = "petit";
$nom1 = "Eclair";
$couleur1 = "Brun";
$age1 = 5;
$taille1 = 120;
$poids1 = 300;
$robe1 = "alezan";
$des_ailes1 = false;
$herbivore1 = true;

echo presenterponeys($prenom1, $nom1, $couleur1, $age1, $taille1, $poids1, $robe1, $des_ailes1, $herbivore1);
echo "\n\n";

$prenom2 = "grand";
$nom2 = "Tonnerre";
$couleur2 = "Noir";
$age2 = 7;
$taille2 = 130;
$poids2 = 350;
$robe2 = "noir";
$des_ailes2 = true;
$herbivore2 = true;

echo presenterponeys($prenom2, $nom2, $couleur2, $age2, $taille2, $poids2, $robe2, $des_ailes2, $herbivore2);
?>

<?php
$largeur = 20;  
$hauteur = 10;  


for ($ligne = 0; $ligne < $largeur; $ligne++) {
    echo " _";
}
echo "<br/>";


for ($colonne = 0; $colonne < $hauteur  +1; $colonne++) {
    echo "|"; 
    for ($ligne = 0; $ligne < $largeur +1; $ligne++) {
        echo " "; 
    }
    echo "|<br/>"; 
}


for ($ligne = 0; $ligne < $largeur; $ligne++) {
    echo " _";
}
?>

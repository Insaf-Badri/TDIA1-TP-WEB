<?php


$nombreN =rand(100, 999);
$essais = 0;
$tirage =0;


while ($tirage != $nombreN) {
    $tirage = rand(100, 999); // Tirage aléatoire d'un nombre à trois chiffres
    $essais++; 
}

echo "Le nombre $nombreN a été réobtenu après $essais essais.";

?>

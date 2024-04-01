<?php

echo" les nombres d'armstrong sont : \n";
echo "<ul>\n";
for ($i = 1; $i < 1000; $i++) {
    $nombre = $i;
    $somme = 0;
    $longueur = strlen((string)$nombre);

   
    while ($nombre != 0) {
        $chiffre = $nombre % 10;
        $somme += pow($chiffre, $longueur);
        $nombre = (int)($nombre / 10);
    }

    
    if ($somme == $i) {
        echo "<li>$i</li>\n";
    }
}

echo "</ul>\n";

?>

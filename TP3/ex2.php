<?php

function tirage() {
    return rand(1, 100); 
}

do {
    $nombre1 = tirage();
    $nombre2 = tirage();
    $nombre3 = tirage();

    
} while ($nombre1 % 2 != 0 || $nombre2 % 2 != 0 || $nombre3 % 2 == 0);

echo "Suite obtenue est la suivante : $nombre1, $nombre2, $nombre3";

?>

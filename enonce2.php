<?php
    echo "Entrez un nombre entier : ";
    $nombre = trim(fgets(STDIN));

    if(!filter_var($nombre, FILTER_VALIDATE_INT)) {
        echo "Vieullez rentrer un nombre entier";
        exit;
    }

    for($i = 1; $i <= 10; $i++) {
        echo "$nombre x $i = " . $nombre * $i . "\n"; 
    }
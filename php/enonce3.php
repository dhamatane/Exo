<?php
    /*
        Ecrire un script qui utilise une boucle "while" pour afficher les nombres impairs de 1 a 20
    */

    $i = 1;

    while($i <= 20) {
        if($i % 2 != 0) {
            echo $i . "\n";
        }
        $i++;
    }
?>
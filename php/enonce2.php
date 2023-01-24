<?php
    /*
        Ecrire un script qui demande a l'utilisateur de saisir un nombre entier
        et qui affiche la table de multiplication ce nombre en utilisant la boucle "for"
        echo "Entrez un nombre entier : ";
    */

    // On demande a l'utilisateur de saisir un nombre entier
    echo "Veuillez entrer un nombre entier: ";
    $nombre = trim(fgets(STDIN));
    
    // On verifie si le nombre saisi est bien un entier
    if(!filter_var($nombre, FILTER_VALIDATE_INT)) {
        echo "Entrez un nombre entier valide";
        exit;
    }

    // Affiche la table de multiplicateur
    for($i = 1; $i <= 10; $i++) {
        echo "$nombre x $i = " . $nombre * $i . "\n";
    }
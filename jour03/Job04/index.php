<?php

// Création de la variable $str
$str = "Dans l'espace, personne ne vous entend crier";

// Initialiser le compteur de caractères à 0
$charCount = 0;

// Parcourir la chaîne $str
for($i = 0; isset($str[$i]); $i++){
    // Augmenter le compteur de caractères de 1
    $charCount++;
}

// Afficher le nombre de caractères
echo "Nombre de caractères: " . $charCount;

?>

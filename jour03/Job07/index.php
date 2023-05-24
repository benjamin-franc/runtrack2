<?php

// Création de la variable $str
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

// Calculer la longueur de la chaîne
$length = 0;
while(isset($str[$length])) {
    $length++;
}

// Création d'une nouvelle chaîne pour stocker le résultat
$newStr = "";

// Parcourir la chaîne
for($i = 0; $i < $length; $i++) {
    if ($i == $length - 1) {
        // Remplacer le dernier caractère par le premier
        $newStr .= $str[0];
    } else {
        // Remplacer le caractère actuel par le suivant
        $newStr .= $str[$i + 1];
    }
}

// Afficher la nouvelle chaîne
echo $newStr;

?>

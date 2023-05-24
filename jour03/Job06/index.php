<?php

// Création de la variable $str
$str = "Les choses que l'on possede finissent par nous posseder.";

// Calculer la longueur de la chaîne
$length = 0;
while(isset($str[$length])) {
    $length++;
}

// Parcourir et afficher la chaîne à l'envers
for($i = $length - 1; $i >= 0; $i--) {
    echo $str[$i];
}

?>

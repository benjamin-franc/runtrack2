<?php

// Création de la variable $str
$str = "I'm sorry Dave I'm afraid I can't do that";

// Parcourir la chaîne $str
for($i = 0; isset($str[$i]); $i++){
    $char = $str[$i];
    // Vérification si le caractère est une voyelle
    if($char == 'a' || $char == 'e' || $char == 'i' || $char == 'o' || $char == 'u' || $char == 'y' || $char == 'A' || $char == 'E' || $char == 'I' || $char == 'O' || $char == 'U' || $char == 'Y' ){
        echo $char;
    }
}

?>
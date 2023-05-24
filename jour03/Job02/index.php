<?php

// Création de la variable $str
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

// Parcourir la chaîne $str
for($i = 0; isset($str[$i]); $i+=2){
    echo $str[$i];
}

?>

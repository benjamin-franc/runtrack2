<?php

// Création du tableau
$numbers = array(200, 204, 173, 98, 171, 404, 459);

// Parcourir le tableau
foreach($numbers as $num){
    // Vérification si le nombre est pair ou impair sans utiliser de fonction système (autre que isset)
    if($num % 2 == 0){
        echo $num . " est paire<br />";
    }else{
        echo $num . " est impaire<br />";
    }
}
?>

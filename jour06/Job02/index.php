<?php
function bonjour($jour) {
    if ($jour){
        echo "Bonjour";
    } else {
        echo "Bonsoir";
    }
}

bonjour(true);  // Cela affiche "Bonjour"
bonjour(false); // Cela affiche "Bonsoir"
?>
<?php

// Création de la variable $str
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";

// Création du tableau $dic
$dic = array(
    "consonnes" => 0,
    "voyelles" => 0,
);

// Parcourir la chaîne $str
for($i = 0; isset($str[$i]); $i++){
    $char = strtolower($str[$i]);
    // Vérification si le caractère est une voyelle ou une consonne
    if($char == 'a' || $char == 'e' || $char == 'i' || $char == 'o' || $char == 'u'){
        $dic["voyelles"]++;
    } elseif($char >= 'a' && $char <= 'z') {
        $dic["consonnes"]++;
    }
}

// Affichage des résultats dans un tableau HTML
echo "<table>";
echo "<thead>";
echo "<tr>";
echo "<th>Voyelles</th>";
echo "<th>Consonnes</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";
echo "<tr>";
echo "<td>" . $dic["voyelles"] . "</td>";
echo "<td>" . $dic["consonnes"] . "</td>";
echo "</tr>";
echo "</tbody>";
echo "</table>";

?>

<!DOCTYPE html>
<html>
<body>

<form method="get" action="">
  Largeur: <input type="text" name="largeur"><br>
  Hauteur: <input type="text" name="hauteur"><br>
  <input type="submit" value="Construire la maison">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["largeur"]) && isset($_GET["hauteur"])) {
    $largeur = intval($_GET["largeur"]);
    $hauteur = intval($_GET["hauteur"]);

    // Dessiner le toit de la maison
    for ($i = 0; $i < $hauteur; $i++) {
        for ($j = 0; $j < $largeur - $i; $j++) {
            echo "&nbsp;";
        }
        echo "/";
        for ($j = 0; $j < 2*$i; $j++) {
            echo "&nbsp;";
        }
        echo "\\";
        echo "<br>";
    }

    // Dessiner le corps de la maison
    for ($i = 0; $i < $hauteur; $i++) {
        echo "|";
        for ($j = 1; $j < $largeur; $j++) {
            echo "&nbsp;";
        }
        echo "|";
        echo "<br>";
    }

    // Dessiner le sol de la maison
    echo "&nbsp;";
    for ($i = 0; $i < $largeur; $i++) {
        echo "_";
    }
    echo "&nbsp;";
    echo "<br>";
}
?>

</body>
</html>

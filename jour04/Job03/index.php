<!DOCTYPE html>
<html>
<body>

<form method="post" action="">
  Prénom: <input type="text" name="prenom"><br>
  Nom: <input type="text" name="nom"><br>
  <input type="submit" value="Envoyer">
</form>

<?php
// Vérifie si $_GET est vide
if ($_GET) {
    echo '<table border="1">';
    echo '<tr><th>Argument</th><th>Valeur</th></tr>';

    // Parcourir $_GET
    foreach ($_GET as $key => $value) {
        // Crée les lignes de tableau
        echo '<tr>';
        echo '<td>' . $key . '</td>';
        echo '<td>' . $value . '</td>';
        echo '</tr>';
    }
    echo '</table>';
}
?>

</body>
</html>


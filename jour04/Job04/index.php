<!DOCTYPE html>
<html>
<body>

<form method="post" action="">
  Prénom: <input type="text" name="prenom"><br>
  Nom: <input type="text" name="nom"><br>
  <input type="submit" value="Envoyer">
</form>

<?php
// Vérifie si $ est vide
if ($_POST) {
    echo '<table border="1">';
    echo '<tr><th>Argument</th><th>Valeur</th></tr>';

    // Parcourir $
    foreach ($_POST as $key => $value) {
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

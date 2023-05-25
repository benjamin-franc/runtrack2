<!DOCTYPE html>
<html>
<body>

<form method="post" action="">
  Prénom: <input type="text" name="prenom"><br>
  Nom: <input type="text" name="nom"><br>
  <input type="submit" value="Envoyer">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prenom = $_POST["prenom"];
    $nom = $_POST["nom"];
  
    if ($prenom === "John" && $nom === "Rambo") {
        echo "C'est pas ma guerre";
    } else {
        echo "Votre pire cauchemar";
    }
}
?>

</body>
</html>

<?php
// Démarrage ou reprise de la session
session_start();

// Si le bouton reset a été appuyé
if(isset($_POST['reset'])) {
  // Réinitialiser la variable de session "prenoms"
  $_SESSION['prenoms'] = array();
} 
// Si le formulaire a été soumis avec un prénom
else if(!empty($_POST['prenom'])) {
  // Si la variable de session "prenoms" existe déjà
  if(isset($_SESSION['prenoms'])) {
    // Ajouter le nouveau prénom à la liste des prénoms
    $_SESSION['prenoms'][] = $_POST['prenom'];
  } else {
    // Sinon, initialiser la variable de session "prenoms" avec le prénom soumis
    $_SESSION['prenoms'] = array($_POST['prenom']);
  }
}
?>

<!DOCTYPE html>
<html>
<body>

<form method="post">
  <label for="prenom">Prénom:</label><br>
  <input type="text" id="prenom" name="prenom"><br>
  <input type="submit" value="Submit">
</form>

<form method="post">
  <input type="submit" name="reset" value="Reset">
</form>

<p>Liste des prénoms :</p>
<?php
if(!empty($_SESSION['prenoms'])) {
  echo implode(', ', $_SESSION['prenoms']);
}
?>

</body>
</html>

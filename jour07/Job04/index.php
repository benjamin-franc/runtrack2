<?php
// Si le bouton "deco" a été appuyé
if(isset($_POST['deco'])) {
  // Supprimer le cookie "prenom"
  setcookie('prenom', '', time() - 3600, "/");
} 
// Si le formulaire a été soumis avec un prénom
else if(!empty($_POST['prenom'])) {
  // Ajouter le prénom au cookie
  setcookie('prenom', $_POST['prenom'], time() + (86400 * 30), "/"); // Ce cookie expirera après 30 jours
}
?>

<!DOCTYPE html>
<html>
<body>

<?php
// Si le cookie "prenom" existe, dire bonjour et afficher le bouton de déconnexion
if(!empty($_COOKIE['prenom'])) {
?>
  <p>Bonjour <?php echo $_COOKIE['prenom']; ?> !</p>
  
  <form method="post">
    <input type="submit" name="deco" value="Déconnexion">
  </form>
<?php
} else {
  // Sinon, afficher le formulaire de connexion
?>
  <form method="post">
    <label for="prenom">Prénom:</label><br>
    <input type="text" id="prenom" name="prenom"><br>
    <input type="submit" value="Connexion">
  </form>
<?php
}
?>

</body>
</html>

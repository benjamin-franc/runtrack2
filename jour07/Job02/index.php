<?php
// Vérifier si le cookie "nbvisites" existe déjà
if(isset($_COOKIE['nbvisites'])) {
  // Si le bouton reset a été appuyé
  if(isset($_POST['reset'])) {
    setcookie('nbvisites', 0, time() + (86400 * 30), "/"); // Réinitialiser le cookie
  } else {
    // Incrémenter la valeur du cookie "nbvisites"
    $visits = $_COOKIE['nbvisites'] + 1;
    setcookie('nbvisites', $visits, time() + (86400 * 30), "/");
  }
} else {
  // Sinon, initialiser le cookie "nbvisites"
  setcookie('nbvisites', 1, time() + (86400 * 30), "/"); // Ce cookie expirera après 30 jours
}
?>

<!DOCTYPE html>
<html>
<body>

<p>Cette page a été visitée <?php if(isset($_COOKIE['nbvisites'])) echo $_COOKIE['nbvisites']; else echo '1'; ?> fois.</p>

<form method="post">
  <input type="submit" name="reset" value="reset">
</form>

</body>
</html>

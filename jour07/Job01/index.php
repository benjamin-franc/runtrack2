<?php
// Démarrage ou reprise de la session
session_start();

// Si le bouton reset a été appuyé
if(isset($_POST['reset'])) {
  $_SESSION['nbvisites'] = 0;
} 
// Si la variable de session "nbvisites" existe déjà
else if(isset($_SESSION['nbvisites'])) {
  // Incrémenter la variable de session "nbvisites"
  $_SESSION['nbvisites']++;
} 
else {
  // Sinon, initialiser la variable de session "nbvisites"
  $_SESSION['nbvisites'] = 1;
}
?>

<!DOCTYPE html>
<html>
<body>

<p>Cette page a été visitée <?php echo $_SESSION['nbvisites']; ?> fois.</p>

<form method="post">
  <input type="submit" name="reset" value="reset">
</form>

</body>
</html>

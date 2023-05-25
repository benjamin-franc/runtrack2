<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="verification.php" method="GET">
 <h1>Connexion</h1>
 
 <label><b>Prenom </b></label>
 <input type="text" placeholder="Entrer le prenom" name="prenom" required>

 <label><b>Nom</b></label>
 <input type="text" placeholder="Entrer le nom" name="nom" required>

 <input type="submit" id='submit' value='ENVOYER' >
 <?php

 if(isset($_GET['erreur'])){
 $err = $_GET['erreur'];
 if($err==1 || $err==2)
 echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
 }
 
 ?>
 </form>
 </div>
 </body>
</html>
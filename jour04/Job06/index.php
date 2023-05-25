<!DOCTYPE html>
<html>
<body>

<form method="get" action="">
  Nombre: <input type="text" name="nombre"><br>
  <input type="submit" value="Envoyer">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["nombre"])) {
    $nombre = $_GET["nombre"];
  
    if ($nombre % 2 == 0) {
        echo "Nombre pair";
    } else {
        echo "Nombre impair";
    }
}
?>

</body>
</html>

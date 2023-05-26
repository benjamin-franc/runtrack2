<!DOCTYPE html>
<html>
<head>
    <title>feuilles CSS</title>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $style = $_POST["style"];
            echo "<link rel='stylesheet' type='text/css' href='$style.css'>";
        }
    ?>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <label for="style">Choisissez un style :</label>
        <select name="style" id="style">
            <option value="">Sélectionnez un style</option>
            <option value="style1">style1</option>
            <option value="style2">style2</option>
            <option value="style3">style3</option>
        </select>
        <input type="submit" value="Valider">
    </form>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Compter les occurrences</title>
</head>
<body>
    <?php
    function occurrences($str, $char) {
        if (!isset($str, $char)) {
            return "Erreur : Les paramètres sont manquants";
        }

        $count = 0;
        for ($i = 0; $i < strlen($str); $i++) {
            if ($str[$i] == $char) {
                $count++;
            }
        }

        return $count;
    }

    echo "Le nombre d'occurrences de 'o' dans 'Bonjour' est : ";
    echo occurrences("Bonjour", "o");  // Affiche 2
    ?>
</body>
</html>

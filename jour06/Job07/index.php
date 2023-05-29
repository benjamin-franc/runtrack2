<!DOCTYPE html>
<html>
<head>
    <title>Forme de transformation</title>
</head>
<body>
    <form method="post" action="">
        <label for="str">Chaîne :</label>
        <input type="text" id="str" name="str">

        <label for="fonction">Fonction :</label>
        <select id="fonction" name="fonction">
            <option value="gras">gras</option>
            <option value="cesar">cesar</option>
            <option value="plateforme">plateforme</option>
        </select>

        <input type="submit" value="Transformer">
    </form>

    <?php
    function gras($str) {
        // Mettre en gras les mots commençant par une lettre majuscule
        return preg_replace('/\b([A-Z][a-z]*)\b/', '<strong>$1</strong>', $str);
    }

    function cesar($str, $shift = 2) {
        // Décaler chaque caractère d’un nombre égal au nombre passé en paramètre
        $result = '';
        for ($i = 0; $i < strlen($str); $i++) {
            $ascii = ord($str[$i]);
            if ($ascii >= 65 && $ascii <= 90) { // Majuscules
                $result .= chr((($ascii - 65 + $shift) % 26) + 65);
            } elseif ($ascii >= 97 && $ascii <= 122) { // Minuscules
                $result .= chr((($ascii - 97 + $shift) % 26) + 97);
            } else {
                $result .= $str[$i];
            }
        }
        return $result;
    }

    function plateforme($str) {
        // Ajouter un “_” aux mots finissant par “me”
        return preg_replace('/\b(\w*me)\b/', '$1_', $str);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $str = $_POST["str"];
        $fonction = $_POST["fonction"];

        switch ($fonction) {
            case 'gras':
                echo gras($str);
                break;
            case 'cesar':
                echo cesar($str);
                break;
            case 'plateforme':
                echo plateforme($str);
                break;
        }
    }
    ?>
</body>
</html>

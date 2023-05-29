<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
function leetSpeak($str) {
    if (!isset($str)) {
        return "Erreur : Le paramètre est manquant";
    }

    $result = "";
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        switch ($char) {
            case 'A': case 'a':
                $result .= '4';
                break;
            case 'B': case 'b':
                $result .= '8';
                break;
            case 'E': case 'e':
                $result .= '3';
                break;
            case 'G': case 'g':
                $result .= '6';
                break;
            case 'L': case 'l':
                $result .= '1';
                break;
            case 'S': case 's':
                $result .= '5';
                break;
            case 'T': case 't':
                $result .= '7';
                break;
            default:
                $result .= $char;
                break;
        }
    }
    return $result;
}
echo leetSpeak("LeetSpeak");  // Affiche "13375p34k"
?>
</body>
</html>
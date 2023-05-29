<?php
function calcule($num1, $operation, $num2) {
    if (!isset($num1, $operation, $num2)) {
        return "Erreur : Les paramètres sont manquants";
    }

    switch ($operation) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            if ($num2 != 0) {
                return $num1 / $num2;
            } else {
                return "Erreur : Division par zéro";
            }
        case '%':
            if ($num2 != 0) {
                return $num1 % $num2;
            } else {
                return "Erreur : Division par zéro";
            }
        default:
            return "Erreur : Opération non valide";
    }
}
echo calcule(5, '+', 3) . "<br>";
echo calcule(5, '-', 3) . "<br>";
echo calcule(5, '*', 3) . "<br>";
echo calcule(5, '/', 3) . "<br>";

?>
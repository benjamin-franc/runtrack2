<?php
// Création des variables avec différents types
$booleanVar = true;
$integerVar = 42;
$stringVar = "Hello";
$floatVar = 3.14;

// Tableau des variables et de leurs informations
$variables = array(
    array("boolean", "booleanVar", $booleanVar),
    array("integer", "integerVar", $integerVar),
    array("string", "stringVar", $stringVar),
    array("float", "floatVar", $floatVar)
);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Variables Information</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
    </style>
</head>
<body>
    <h1>Variables Information</h1>
    <table>
        <thead>
            <tr>
                <th>Type</th>
                <th>Nom</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($variables as $variable) {
                echo "<tr>";
                echo "<td>" . $variable[0] . "</td>";
                echo "<td>" . $variable[1] . "</td>";
                echo "<td>" . $variable[2] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>

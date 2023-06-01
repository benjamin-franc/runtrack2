<?php
$serveur = 'localhost';
$nomUtilisateur = 'pma';
$motDePasse = 'admin';
$nomBaseDeDonnees = 'jour08';

try {
    $bdd = new PDO("mysql:host=$serveur;dbname=$nomBaseDeDonnees;charset=utf8", $nomUtilisateur, $motDePasse);

    // Modifier la requête pour obtenir les étudiants nés entre 1998 et 2018
    $requete = "SELECT Prénom, Nom, Naissance FROM étudiants WHERE YEAR(Naissance) BETWEEN 1998 AND 2018"; 
    $resultat = $bdd->query($requete);

    echo "<table border='1'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Prénom</th>";
    echo "<th>Nom</th>";
    echo "<th>Date de Naissance</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    while ($ligne = $resultat->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $ligne['Prénom'] . "</td>";
        echo "<td>" . $ligne['Nom'] . "</td>";
        echo "<td>" . $ligne['Naissance'] . "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";

    $resultat->closeCursor();
    $bdd = null;
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>


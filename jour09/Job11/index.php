<?php
$serveur = 'localhost';
$nomUtilisateur = 'pma';
$motDePasse = 'admin';
$nomBaseDeDonnees = 'jour08';

try {
    $bdd = new PDO("mysql:host=$serveur;dbname=$nomBaseDeDonnees;charset=utf8", $nomUtilisateur, $motDePasse);

    // Modifier la requête pour obtenir la capacité moyenne des salles
    $requete = "SELECT AVG(Capacité) AS Capacité_moyenne FROM Salles"; 
    $resultat = $bdd->query($requete);

    echo "<table border='1'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Capacité Moyenne des Salles</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    while ($ligne = $resultat->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . round($ligne['Capacité_moyenne'], 2) . "</td>";
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

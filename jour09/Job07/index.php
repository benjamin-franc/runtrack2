<?php
$serveur = 'localhost';
$nomUtilisateur = 'pma';
$motDePasse = 'admin';
$nomBaseDeDonnees = 'jour08';

try {
    $bdd = new PDO("mysql:host=$serveur;dbname=$nomBaseDeDonnees;charset=utf8", $nomUtilisateur, $motDePasse);

    // Modifiez la requête pour obtenir la superficie totale des étages
    // Cela suppose que vous avez une colonne 'Superficie' dans votre table 'etages'
    $requete = "SELECT SUM(Superficie) AS Superficie_totale FROM Etage"; 
    $resultat = $bdd->query($requete);

    echo "<table border='1'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Superficie Totale des Etages</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    while ($ligne = $resultat->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $ligne['Superficie_totale'] . "</td>";
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

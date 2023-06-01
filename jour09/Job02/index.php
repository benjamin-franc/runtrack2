<?php
$serveur = 'localhost';
$nomUtilisateur = 'pma';
$motDePasse = 'admin';
$nomBaseDeDonnees = 'jour08';

try {
    $bdd = new PDO("mysql:host=$serveur;dbname=$nomBaseDeDonnees;charset=utf8", $nomUtilisateur, $motDePasse);

    $requete = "SELECT Nom, Capacité FROM Salles"; 
    $resultat = $bdd->query($requete);

    echo "<table border='1'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Nom</th>";
    echo "<th>Capacite</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    while ($ligne = $resultat->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $ligne['Nom'] . "</td>";
        echo "<td>" . $ligne['Capacité'] . "</td>";
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

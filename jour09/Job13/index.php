<?php
$serveur = 'localhost';
$nomUtilisateur = 'pma';
$motDePasse = 'admin';
$nomBaseDeDonnees = 'jour08';

try {
    $bdd = new PDO("mysql:host=$serveur;dbname=$nomBaseDeDonnees;charset=utf8", $nomUtilisateur, $motDePasse);

    // Modifier la requête pour obtenir le nom des salles et le nom de leur étage
    $requete = "SELECT salles.nom AS Nom_Salles, Etage.nom AS Nom_Etage FROM Salles INNER JOIN Etage ON Salles.id_Etage = Etage.id"; 
    $resultat = $bdd->query($requete);

    echo "<table border='1'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Nom de la salle</th>";
    echo "<th>Nom de l'étage</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    while ($ligne = $resultat->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $ligne['Nom_Salles'] . "</td>";
        echo "<td>" . $ligne['Nom_Etage'] . "</td>";
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

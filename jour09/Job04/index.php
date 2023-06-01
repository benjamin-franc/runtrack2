<?php
$serveur = 'localhost';
$nomUtilisateur = 'pma';
$motDePasse = 'admin';
$nomBaseDeDonnees = 'jour08';

try {
    $bdd = new PDO("mysql:host=$serveur;dbname=$nomBaseDeDonnees;charset=utf8", $nomUtilisateur, $motDePasse);

    // Modifiez la requête pour filtrer les prénoms commençant par 'T'
    $requete = "SELECT * FROM étudiants WHERE Prénom LIKE 'T%'"; 
    $resultat = $bdd->query($requete);

    echo "<table border='1'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Prénom</th>";
    echo "<th>Nom</th>";
    echo "<th>Naissance</th>";
    echo "<th>Sexe</th>";
    echo "<th>Email</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    while ($ligne = $resultat->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $ligne['ID'] . "</td>";
        echo "<td>" . $ligne['Prénom'] . "</td>";
        echo "<td>" . $ligne['Nom'] . "</td>";
        echo "<td>" . $ligne['Naissance'] . "</td>";
        echo "<td>" . $ligne['Sexe'] . "</td>";
        echo "<td>" . $ligne['Email'] . "</td>";
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

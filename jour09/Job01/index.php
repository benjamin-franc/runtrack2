<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
<?php
$serveur = 'localhost';
$nomUtilisateur = 'pma';
$motDePasse = 'admin';
$nomBaseDeDonnees = 'jour08';

try {
    // Connexion à la base de données avec PDO
    $bdd = new PDO("mysql:host=$serveur;dbname=$nomBaseDeDonnees;charset=utf8", $nomUtilisateur, $motDePasse);

    // Requête SQL pour récupérer les informations de la table étudiants
    $requete = "SELECT * FROM étudiants";
    $resultat = $bdd->query($requete);
// Affichage du résultat dans un tableau HTML
    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Prenom</th>";
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

    // Fermeture de la connexion à la base de données
    $resultat->closeCursor();
    $bdd = null;
} catch (PDOException $e) {
    // En cas d'erreur, afficher le message d'erreur
    echo "Erreur : " . $e->getMessage();
}
?>
</body>
</html>
SELECT Salles.nom AS nom_salle, Etage.nom AS nom_etage
FROM Salles
JOIN Etage ON Salles.id_etage = Etage.id;

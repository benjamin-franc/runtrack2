SELECT Etage.nom AS Etage, Salles.nom AS "Biggest Room", Salles.Capacité AS Capacité 
FROM Salles 
JOIN Etage ON Salles.id_etage = Etage.id 
ORDER BY Salles.Capacité 
DESC LIMIT 1;
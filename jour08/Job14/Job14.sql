SELECT Prénom, Nom, Naissance
FROM étudiants
WHERE YEAR(Naissance) BETWEEN 1998 AND 2018;
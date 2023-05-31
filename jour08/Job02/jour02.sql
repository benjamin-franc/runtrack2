-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mer. 31 mai 2023 à 09:41
-- Version du serveur : 5.7.39
-- Version de PHP : 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `jour08`
--

-- --------------------------------------------------------

--
-- Structure de la table `Etage`
--

CREATE TABLE `Etage` (
  `ID` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Numero` int(11) NOT NULL,
  `Superficie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Etage`
--

INSERT INTO `Etage` (`ID`, `Nom`, `Numero`, `Superficie`) VALUES
(1, 'RDC', 0, 500),
(2, 'R+1', 1, 500);

-- --------------------------------------------------------

--
-- Structure de la table `Salles`
--

CREATE TABLE `Salles` (
  `ID` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `ID_etage` int(11) NOT NULL,
  `Capacité` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Salles`
--

INSERT INTO `Salles` (`ID`, `Nom`, `ID_etage`, `Capacité`) VALUES
(1, 'Lounge', 1, 100),
(2, 'Lounge', 1, 100),
(3, 'Studio Son', 1, 5),
(4, 'Studio Son', 1, 5),
(5, 'Broadcasting', 2, 50),
(6, 'Broadcasting', 2, 50),
(7, 'Bocal Peda', 2, 4),
(8, 'Bocal Peda', 2, 4),
(9, 'Coworking', 2, 80),
(10, 'Coworking', 2, 80),
(11, 'Studio Video', 2, 5),
(12, 'Studio Video', 2, 5);

-- --------------------------------------------------------

--
-- Structure de la table `étudiants`
--

CREATE TABLE `étudiants` (
  `ID` int(11) NOT NULL,
  `Prénom` varchar(255) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Naissance` date NOT NULL,
  `Sexe` varchar(25) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `étudiants`
--

INSERT INTO `étudiants` (`ID`, `Prénom`, `Nom`, `Naissance`, `Sexe`, `Email`) VALUES
(1, 'Cyril', 'Zimmermann', '1989-01-02', 'Homme', 'Cyril@laplateforme.io'),
(2, 'Jessica', 'Soriano', '1995-09-08', 'Femme', 'jessica@laplateforme.io'),
(3, 'Roxan', 'Roumégas', '2016-09-08', 'Homme', 'roxan@laplateforme.io'),
(4, 'Pascal', 'Assens', '1999-12-31', 'Homme', 'pascal@laplateforme.io'),
(5, 'Pascal', 'Assens', '1999-12-31', 'Homme', 'pascal@laplateforme.io'),
(6, 'Terry', 'Cristinelli', '2005-02-01', 'Homme', 'terry@laplateforme.io'),
(7, 'Terry', 'Cristinelli', '2005-02-01', 'Homme', 'terry@laplateforme.io'),
(8, 'Ruben', 'Habib', '1993-05-26', 'Homme', 'ruben@laplateforme.io'),
(9, 'Toto', 'Dupont', '2019-11-07', 'Homme', 'toto@laplateforme.io'),
(10, 'Ruben', 'Habib', '1993-05-26', 'Homme', 'ruben@laplateforme.io'),
(11, 'Toto', 'Dupont', '2019-11-07', 'Homme', 'toto@laplateforme.io');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Etage`
--
ALTER TABLE `Etage`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `Salles`
--
ALTER TABLE `Salles`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `étudiants`
--
ALTER TABLE `étudiants`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Etage`
--
ALTER TABLE `Etage`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `Salles`
--
ALTER TABLE `Salles`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `étudiants`
--
ALTER TABLE `étudiants`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

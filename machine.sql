-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 26 jan. 2018 à 16:20
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `machine`
--

-- --------------------------------------------------------

--
-- Structure de la table `association`
--

DROP TABLE IF EXISTS `association`;
CREATE TABLE IF NOT EXISTS `association` (
  `Drinks_ID` char(3) NOT NULL,
  `Ingredients_ID` int(11) NOT NULL,
  `Dose` int(11) NOT NULL,
  PRIMARY KEY (`Drinks_ID`,`Ingredients_ID`),
  KEY `fk_Drinks_has_Ingredients_Ingredients1_idx` (`Ingredients_ID`),
  KEY `fk_Drinks_has_Ingredients_Drinks_idx` (`Drinks_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `association`
--

INSERT INTO `association` (`Drinks_ID`, `Ingredients_ID`, `Dose`) VALUES
('CAF', 1, 1),
('CAF', 2, 1),
('CHO', 2, 2),
('CHO', 5, 1),
('CHO', 6, 1),
('LAT', 1, 1),
('LAT', 2, 2),
('LAT', 6, 1),
('THE', 2, 2),
('THE', 4, 1);

-- --------------------------------------------------------

--
-- Structure de la table `drinks`
--

DROP TABLE IF EXISTS `drinks`;
CREATE TABLE IF NOT EXISTS `drinks` (
  `ID` char(3) NOT NULL,
  `NAME` varchar(40) NOT NULL,
  `PRICE` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `drinks`
--

INSERT INTO `drinks` (`ID`, `NAME`, `PRICE`) VALUES
('CAF', 'Café', 160),
('CAL', 'Café au Lait', 260),
('CHO', 'Chocolat', 260),
('LAT', 'Latte', 210),
('THE', 'Thé', 160);

-- --------------------------------------------------------

--
-- Structure de la table `ingredients`
--

DROP TABLE IF EXISTS `ingredients`;
CREATE TABLE IF NOT EXISTS `ingredients` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME_ING` varchar(8) NOT NULL,
  `QteStock` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ingredients`
--

INSERT INTO `ingredients` (`ID`, `NAME_ING`, `QteStock`) VALUES
(1, 'Café', 100),
(2, 'eau', 600),
(3, 'sucre', 880),
(4, 'the', 150),
(5, 'cacao', 150),
(6, 'lait', 150),
(7, 'Vodka', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `sale`
--

DROP TABLE IF EXISTS `sale`;
CREATE TABLE IF NOT EXISTS `sale` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Drinks_ID` char(3) NOT NULL,
  `DATE` datetime NOT NULL,
  `Qte_Sugar` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`,`Drinks_ID`),
  KEY `fk_Drinks_has_Ingredients_Drinks1_idx` (`Drinks_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sale`
--

INSERT INTO `sale` (`ID`, `Drinks_ID`, `DATE`, `Qte_Sugar`) VALUES
(1, 'CAF', '2018-01-05 00:00:00', 2),
(2, 'LAT', '2018-01-05 00:00:00', 1),
(3, 'THE', '2018-01-04 00:00:00', 0),
(4, 'CHO', '2018-01-02 00:00:00', 3),
(5, 'CHO', '2018-01-08 08:14:36', 2),
(8, 'CAF', '2018-01-08 16:23:05', 2);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `association`
--
ALTER TABLE `association`
  ADD CONSTRAINT `fk_Drinks_has_Ingredients_Drinks` FOREIGN KEY (`Drinks_ID`) REFERENCES `drinks` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Drinks_has_Ingredients_Ingredients1` FOREIGN KEY (`Ingredients_ID`) REFERENCES `ingredients` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `sale`
--
ALTER TABLE `sale`
  ADD CONSTRAINT `fk_Drinks_has_Ingredients_Drinks1` FOREIGN KEY (`Drinks_ID`) REFERENCES `drinks` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

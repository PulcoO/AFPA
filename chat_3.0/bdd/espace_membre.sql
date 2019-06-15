-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 29 mai 2019 à 23:05
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `espace_membre`
--

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

DROP TABLE IF EXISTS `membres`;
CREATE TABLE IF NOT EXISTS `membres` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `motdepasse` text NOT NULL,
  `avatar` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=85 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`ID`, `pseudo`, `mail`, `motdepasse`, `avatar`) VALUES
(84, 'Floriana', 'la@la', '3efd4c0fe185135dd2c584b9698f506803cfaf81', '84.jpg'),
(83, 'Florian', '123@123', '48c6ad1c026f182b8e4f969fdf61b59bc68f6402', '83.jpg'),
(82, '1234', '1234@1234', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '82.jpg'),
(81, 'admin2', 'admin2@admin2', '315f166c5aca63a157f7d41007675cb44a948b33', '81.jpg'),
(79, 'admin', 'florian@gmail.com', '48c6ad1c026f182b8e4f969fdf61b59bc68f6402', '1.jpg'),
(80, 'kikoo', 'kikoo@gmail.com', '48c6ad1c026f182b8e4f969fdf61b59bc68f6402', '80.jpg'),
(78, 'Florian', 'floufi@gmail.com', '48c6ad1c026f182b8e4f969fdf61b59bc68f6402', '1.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

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
-- Base de données :  `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `alpha`
--

DROP TABLE IF EXISTS `alpha`;
CREATE TABLE IF NOT EXISTS `alpha` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Pseudo` varchar(255) NOT NULL,
  `Message` varchar(255) NOT NULL,
  `La_Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `alpha`
--

INSERT INTO `alpha` (`ID`, `Pseudo`, `Message`, `La_Date`) VALUES
(1, 'Florian', 'Test', '2019-05-17 17:48:21'),
(2, 'Florian', 'Test date', '2019-05-17 18:36:31'),
(3, 'Tidus', 'TEST 1 2 3', '2019-05-17 18:39:34'),
(4, 'Cloclo', 'Poire', '2019-05-17 18:42:20'),
(5, 'Cloclo', 'TEST 1 2 3', '2019-05-17 19:12:55'),
(6, 'Floufi', 'test', '2019-05-17 23:01:28'),
(7, 'Florian', 'TEST 1 2 3', '2019-05-17 23:18:54'),
(8, 'Tidus', 'TEST 1 2 3', '2019-05-17 23:55:00'),
(9, '', 'Poire', '2019-05-17 23:59:59');

-- --------------------------------------------------------

--
-- Structure de la table `beta`
--

DROP TABLE IF EXISTS `beta`;
CREATE TABLE IF NOT EXISTS `beta` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Pseudal` varchar(255) NOT NULL,
  `Message` varchar(255) NOT NULL,
  `La_Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `avatar` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=303 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `beta`
--

INSERT INTO `beta` (`ID`, `Pseudal`, `Message`, `La_Date`, `avatar`) VALUES
(302, 'Floriana', 'Oui oui', '2019-05-29 23:04:11', '84.jpg'),
(300, 'Florian', 'ça marche toujours ? ', '2019-05-29 22:47:44', '1.png'),
(301, 'Florian', 'Bah oui', '2019-05-29 22:48:09', '83.jpg'),
(299, 'admin2', 'Oui ça marche ', '2019-05-29 22:47:00', '81.jpg'),
(298, '1234', 'ça marche ', '2019-05-29 22:46:31', '82.jpg'),
(297, '1234', 'Coucou', '2019-05-29 22:46:24', '82.jpg'),
(295, 'Coucou2', 'TEST', '2019-05-29 22:13:41', '76.jpg'),
(294, 'Coucou2', 'Hey Salut ! ', '2019-05-29 21:59:45', '76.jpg'),
(296, '1234', 'Salut ', '2019-05-29 22:46:01', '82.jpg'),
(292, 'admin', 'Coucou', '2019-05-29 21:48:31', '73.png'),
(291, 'admin', 'Coucou', '2019-05-29 20:45:38', '73.png');

-- --------------------------------------------------------

--
-- Structure de la table `billets`
--

DROP TABLE IF EXISTS `billets`;
CREATE TABLE IF NOT EXISTS `billets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `creation_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `billets`
--

INSERT INTO `billets` (`id`, `title`, `content`, `creation_date`) VALUES
(1, 'Bienvenue sur mon blog !', 'Je vous souhaite à toutes et à tous la bienvenue sur mon blog qui parlera de... PHP bien sûr !', '2010-03-25 16:28:41'),
(2, 'Le PHP à la conquête du monde !', 'C\'est officiel, l\'éléPHPant a annoncé à la radio hier soir \"J\'ai l\'intention de conquérir le monde !\".\r\nIl a en outre précisé que le monde serait à sa botte en moins de temps qu\'il n\'en fallait pour dire \"éléPHPant\". Pas dur, ceci dit entre nous...', '2010-03-27 18:31:11');

-- --------------------------------------------------------

--
-- Structure de la table `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_billet` int(11) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `commentaire` text NOT NULL,
  `date_commentaire` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `id_billet`, `auteur`, `commentaire`, `date_commentaire`) VALUES
(1, 1, 'M@teo21', 'Un peu court ce billet !', '2010-03-25 16:49:53'),
(2, 1, 'Maxime', 'Oui, ça commence pas très fort ce blog...', '2010-03-25 16:57:16'),
(3, 1, 'MultiKiller', '+1 !', '2010-03-25 17:12:52'),
(4, 2, 'John', 'Preum\'s !', '2010-03-27 18:59:49'),
(5, 2, 'Maxime', 'Excellente analyse de la situation !\r\nIl y arrivera plus tôt qu\'on ne le pense !', '2010-03-27 22:02:13');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `comment_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `eleves`
--

DROP TABLE IF EXISTS `eleves`;
CREATE TABLE IF NOT EXISTS `eleves` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Prenom` varchar(255) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `PROJET_1` float NOT NULL,
  `PROJET_2` float NOT NULL,
  `PROJET_3` float NOT NULL,
  `PROJET_4` float NOT NULL,
  `PROJET_5` float NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `eleves`
--

INSERT INTO `eleves` (`ID`, `Prenom`, `Nom`, `PROJET_1`, `PROJET_2`, `PROJET_3`, `PROJET_4`, `PROJET_5`) VALUES
(30, 'Martin', 'Gérard', 15.5, 10, 15, 14, 19),
(31, 'Florian', 'Nave', 12, 15, 14, 19, 2),
(32, 'Matin', 'Martin', 14, 15, 20, 3, 4),
(33, 'Florian', 'booba', 14, 15, 14, 14, 4);

-- --------------------------------------------------------

--
-- Structure de la table `jeux_video`
--

DROP TABLE IF EXISTS `jeux_video`;
CREATE TABLE IF NOT EXISTS `jeux_video` (
  `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `possesseur` varchar(255) NOT NULL,
  `console` varchar(255) NOT NULL,
  `prix` double NOT NULL DEFAULT '0',
  `nbre_joueurs_max` int(11) NOT NULL DEFAULT '0',
  `commentaires` text NOT NULL,
  KEY `ID` (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `jeux_video`
--

INSERT INTO `jeux_video` (`ID`, `nom`, `possesseur`, `console`, `prix`, `nbre_joueurs_max`, `commentaires`) VALUES
(1, 'Super Mario Bros', 'Florent', 'NES', 4, 1, 'Un jeu d\'anthologie !'),
(2, 'Sonic', 'Patrick', 'Megadrive', 2, 1, 'Pour moi, le meilleur jeu du monde !'),
(3, 'Zelda : ocarina of time', 'Florent', 'Nintendo 64', 15, 1, 'Un jeu grand, beau et complet comme on en voit rarement de nos jours'),
(4, 'Mario Kart 64', 'Florent', 'Nintendo 64', 25, 4, 'Un excellent jeu de kart !'),
(5, 'Super Smash Bros Melee', 'Michel', 'GameCube', 55, 4, 'Un jeu de baston délirant !'),
(6, 'Dead or Alive', 'Patrick', 'Xbox', 60, 4, 'Le plus beau jeu de baston jamais créé'),
(7, 'Dead or Alive Xtreme Beach Volley Ball', 'Patrick', 'Xbox', 60, 4, 'Un jeu de beach volley de toute beauté o_O'),
(8, 'Enter the Matrix', 'Michel', 'PC', 45, 1, 'Plutôt bof comme jeu, mais ça complète bien le film'),
(9, 'Max Payne 2', 'Michel', 'PC', 50, 1, 'Très réaliste, une sorte de film noir sur fond d\'histoire d\'amour. A essayer !'),
(10, 'Yoshi\'s Island', 'Florent', 'SuperNES', 6, 1, 'Le paradis des Yoshis :o)'),
(11, 'Commandos 3', 'Florent', 'PC', 44, 12, 'Un bon jeu d\'action où on dirige un commando pendant la 2ème guerre mondiale !'),
(12, 'Final Fantasy X', 'Patrick', 'PS2', 40, 1, 'Encore un Final Fantasy mais celui la est encore plus beau !'),
(13, 'Pokemon Rubis', 'Florent', 'GBA', 44, 4, 'Pika-Pika-chu !!!'),
(14, 'Starcraft', 'Michel', 'PC', 19, 8, 'Le meilleur jeux pc de tout les temps !'),
(15, 'Grand Theft Auto 3', 'Michel', 'PS2', 30, 1, 'Comme dans les autres Gta on ecrase tout le monde :) .'),
(16, 'Homeworld 2', 'Michel', 'PC', 45, 6, 'Superbe ! o_O'),
(17, 'Aladin', 'Patrick', 'SuperNES', 10, 1, 'Comme le dessin Animé !'),
(18, 'Super Mario Bros 3', 'Michel', 'SuperNES', 10, 2, 'Le meilleur Mario selon moi.'),
(19, 'SSX 3', 'Florent', 'Xbox', 56, 2, 'Un très bon jeu de snow !'),
(20, 'Star Wars : Jedi outcast', 'Patrick', 'Xbox', 33, 1, 'Encore un jeu sur star-wars où on se prend pour Luke Skywalker !'),
(21, 'Actua Soccer 3', 'Patrick', 'PS', 30, 2, 'Un jeu de foot assez bof ...'),
(22, 'Time Crisis 3', 'Florent', 'PS2', 40, 1, 'Un troisième volet efficace mais pas vraiment surprenant'),
(23, 'X-FILES', 'Patrick', 'PS', 25, 1, 'Un jeu censé ressembler a la série mais assez raté ...'),
(24, 'Soul Calibur 2', 'Patrick', 'Xbox', 54, 1, 'Un jeu bien axé sur le combat'),
(25, 'Diablo', 'Florent', 'PS', 20, 1, 'Comme sur PC mais la c\'est sur un ecran de télé :) !'),
(26, 'Street Fighter 2', 'Patrick', 'Megadrive', 10, 2, 'Le célèbre jeu de combat !'),
(27, 'Gundam Battle Assault 2', 'Florent', 'PS', 29, 1, 'Jeu japonais dont le gameplay est un peu limité. Peu de robots malheureusement'),
(28, 'Spider-Man', 'Florent', 'Megadrive', 15, 1, 'Vivez l\'aventure de l\'homme araignée'),
(29, 'Midtown Madness 3', 'Michel', 'Xbox', 59, 6, 'Dans la suite des autres versions de Midtown Madness'),
(30, 'Tetris', 'Florent', 'Gameboy', 5, 1, 'Qui ne connait pas ? '),
(31, 'The Rocketeer', 'Michel', 'NES', 2, 1, 'Un super un film et un jeu de m*rde ...'),
(32, 'Pro Evolution Soccer 3', 'Patrick', 'PS2', 59, 2, 'Un petit jeu de foot sur PS2'),
(33, 'Ice Hockey', 'Michel', 'NES', 7, 2, 'Jamais joué mais a mon avis ca parle de hockey sur glace ... =)'),
(34, 'Sydney 2000', 'Florent', 'Dreamcast', 15, 2, 'Les JO de Sydney dans votre salon !'),
(35, 'NBA 2k', 'Patrick', 'Dreamcast', 12, 2, 'A votre avis :p ?'),
(36, 'Aliens Versus Predator : Extinction', 'Michel', 'PS2', 20, 2, 'Un shoot\'em up pour pc'),
(37, 'Crazy Taxi', 'Florent', 'Dreamcast', 11, 1, 'Conduite de taxi en folie !'),
(38, 'Le Maillon Faible', 'Mathieu', 'PS2', 10, 1, 'Le jeu de l\'émission'),
(39, 'FIFA 64', 'Michel', 'Nintendo 64', 25, 2, 'Le premier jeu de foot sur la N64 =) !'),
(40, 'Qui Veut Gagner Des Millions', 'Florent', 'PS2', 10, 1, 'Le jeu de l\'émission'),
(41, 'Monopoly', 'Sebastien', 'Nintendo 64', 21, 4, 'Bheuuu le monopoly sur N64 !'),
(42, 'Taxi 3', 'Corentin', 'PS2', 19, 4, 'Un jeu de voiture sur le film'),
(43, 'Indiana Jones Et Le Tombeau De L\'Empereur', 'Florent', 'PS2', 25, 1, 'Notre aventurier préféré est de retour !!!'),
(44, 'F-ZERO', 'Mathieu', 'GBA', 25, 4, 'Un super jeu de course futuriste !'),
(45, 'Harry Potter Et La Chambre Des Secrets', 'Mathieu', 'Xbox', 30, 1, 'Abracadabra !! Le célebre magicien est de retour !'),
(46, 'Half-Life', 'Corentin', 'PC', 15, 32, 'L\'autre meilleur jeu de tout les temps (surtout ses mods).'),
(47, 'Myst III Exile', 'Sébastien', 'Xbox', 49, 1, 'Un jeu de réflexion'),
(48, 'Wario World', 'Sebastien', 'Gamecube', 40, 4, 'Wario vs Mario ! Qui gagnera ! ?'),
(49, 'Rollercoaster Tycoon', 'Florent', 'Xbox', 29, 1, 'Jeu de gestion d\'un parc d\'attraction'),
(50, 'Splinter Cell', 'Patrick', 'Xbox', 53, 1, 'Jeu magnifique !');

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

DROP TABLE IF EXISTS `membres`;
CREATE TABLE IF NOT EXISTS `membres` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `motdepasse` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`ID`, `pseudo`, `mail`, `motdepasse`, `avatar`) VALUES
(1, 'Florian', 'florian@florian', '123', 'Je suis l\'avatar de Florian'),
(2, 'CC', 'cc@cc.cc', 'ccc', 'Je suis l\'avatar de CC'),
(3, 'TEST', 'TEST@test', 'test', 'Je suis l\'avatar de TEST');

-- --------------------------------------------------------

--
-- Structure de la table `minitchat`
--

DROP TABLE IF EXISTS `minitchat`;
CREATE TABLE IF NOT EXISTS `minitchat` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `login` varchar(30) NOT NULL,
  `comment` text NOT NULL,
  `date_comment` date NOT NULL,
  `heure_comment` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `minitchat`
--

INSERT INTO `minitchat` (`id`, `login`, `comment`, `date_comment`, `heure_comment`) VALUES
(1, 'Florian', 'Coucou\r\n', '2019-05-18', '15:31:35'),
(2, 'POpopo', 'mlmfdlfs', '2019-05-18', '15:31:44'),
(3, 'Florian', 'dfgdfgd', '2019-05-18', '15:31:57'),
(4, 'azeazeae', 'aze', '2019-05-18', '15:32:00'),
(5, 'Florian', '&lt;p&gt; Florian &lt;/p&gt;', '2019-05-18', '15:33:05');

-- --------------------------------------------------------

--
-- Structure de la table `mini_chat`
--

DROP TABLE IF EXISTS `mini_chat`;
CREATE TABLE IF NOT EXISTS `mini_chat` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Pseudo` varchar(255) NOT NULL,
  `Message` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `mini_chat`
--

INSERT INTO `mini_chat` (`ID`, `Pseudo`, `Message`) VALUES
(47, 'Test final', 'Bonjour tout le monde'),
(48, 'REUSSI', 'Bonjour tout le monde'),
(49, 'Florian', 'ça marche toujours ? '),
(50, 'Test final', 'J\'AI REUSSSIIIII PUTAIN'),
(51, 'Test final', 'Coucou'),
(52, 'Test', 'ça marche toujours ? '),
(53, 'lkjlkj', 'hjljhkjhkjh');

-- --------------------------------------------------------

--
-- Structure de la table `musique`
--

DROP TABLE IF EXISTS `musique`;
CREATE TABLE IF NOT EXISTS `musique` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Musique` longblob NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `news` (`id`, `titre`, `contenu`) VALUES
(1, 'Première news', 'Vous êtes sur ma première news.'),
(2, 'Une autre news', 'Une autre news'),
(3, 'encore une news', 'Encore une');

-- --------------------------------------------------------

--
-- Structure de la table `tab_minichat`
--

DROP TABLE IF EXISTS `tab_minichat`;
CREATE TABLE IF NOT EXISTS `tab_minichat` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date_message` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tab_minichat`
--

INSERT INTO `tab_minichat` (`id`, `nom`, `message`, `date_message`) VALUES
(1, 'jéremy', 'salut tout le monde!', '2019-05-18 04:37:17'),
(2, 'Coucou', 'zizi', '2019-05-18 15:37:19'),
(3, 'Coucou', 'aaaz', '2019-05-18 15:37:22'),
(4, 'erzer', 'zizi', '2019-05-18 15:37:27'),
(5, 'erzer', '<p> FLORIAN </p>', '2019-05-18 15:37:42'),
(6, '<p>ccccccc</p>', '<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>5', '2019-05-18 15:38:05'),
(7, '<p>ccccccc</p>', 'y', '2019-05-18 15:38:12'),
(8, '<br> coucouc', 'zzz', '2019-05-18 15:38:23');

-- --------------------------------------------------------

--
-- Structure de la table `t_msg`
--

DROP TABLE IF EXISTS `t_msg`;
CREATE TABLE IF NOT EXISTS `t_msg` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `dat` datetime NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_msg`
--

INSERT INTO `t_msg` (`ID`, `pseudo`, `message`, `dat`) VALUES
(20, 'Mukwaya', 'ok', '2019-05-17 18:47:58'),
(21, 'Jonathan ', 'merci', '2019-05-17 18:53:55'),
(22, 'Mukwaya', 'je suis un cours d\'informatique sur open source', '2019-05-17 18:57:42'),
(23, 'Jonathan ', 'tas bien raison de faire un metier qui te plait ', '2019-05-17 19:03:01'),
(24, 'Jonathan ', 'REPOND ', '2019-05-17 20:56:15'),
(25, 'Mukwaya', 'je suis occupÃ©', '2019-05-17 20:56:38'),
(26, 'Mukwaya', 'zizi', '2019-05-18 15:25:19'),
(27, 'Mo', 'aaaz', '2019-05-18 15:25:30'),
(28, 'Mo', '&lt;p&gt; FLORIAN &lt;/p&gt;', '2019-05-18 15:26:49');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

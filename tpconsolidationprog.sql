-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 29 nov. 2022 à 17:50
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tpconsolidationprog`
--

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

DROP TABLE IF EXISTS `cours`;
CREATE TABLE IF NOT EXISTS `cours` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `nomCours` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `trigramme` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`id`, `code`, `nomCours`, `trigramme`, `description`) VALUES
(1, 'AD9', 'Consolidation des comp&#233;tences syst&#232;me (Linux)', 'SFA', 'Dans ce cours on travaille les bases de l\'administration syst&#232;me avec Linux (config serveur apache en ligne de commande etc)'),
(2, 'D42', 'Consolidation des comp&#233;tences en programmation', 'JRI', 'Dans ce cours il est question de reprendre les bases de la programmation (en PHP essentiellement).'),
(3, 'D12', 'Consolidation des comp&#233;tences en programmation', 'JHA', 'Dans ce cours nous revoyons les bases de l\'int&#233;gration web (int&#233;gration d\'une maquette papier sur page web, responsive design, animations etc)'),
(4, 'D41', 'Consolidation des comp&#233;tences r&#233;seaux', 'MBE', 'Dans ce cours il est question de reprendre les bases des notions de r&#233;seau (adresses ip, DHCP etc...)');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(155) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `role`, `adresse`, `telephone`) VALUES
(1, 'Fabien', 'Simon', 'Consolidation des comp&#233;tences syst&#232;me (Linux)', 'Charpennes, 69001, Villeurbanne', '0606870684'),
(2, 'Ribeiro ', 'Julio', 'Consolidation des comp&#233;tences en programmation', 'Place Charles Hernu, 69001, Villeurbanne ', '0699000000'),
(3, 'Haddad', 'Jihane ', 'Consolidation des comp&#233;tences en int&#233;gration web (html, css, ux)', 'Rue du bois, 69000, Lyon', '0707070707'),
(4, 'Berger', 'Martial', 'Consolidation des comp&#233;tences r&#233;seau', '4 Rue des peupliers, 42000, Saint Etienne', '0645787878');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

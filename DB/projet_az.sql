-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 12 mai 2021 à 18:25
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `arti`
--

CREATE TABLE `arti` (
  `CIN` int(11) NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `Age` int(11) NOT NULL,
  `Email` varchar(78) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `arti`
--

INSERT INTO `arti` (`CIN`, `FullName`, `Age`, `Email`) VALUES
(1, 'aziz zarkaoui', 34, 'mohamedaziz.zarkaoui@esprit.tn'),
(1133, 'aziz zarkaoui', 44, 'mohamedaziz.zarkaoui@esprit.tn'),
(1199, 'aziz zarkaoui', 23, 'mohamedaziz.zarkaoui@esprit.tn'),
(1211, 'aziz zarkaoui', 99, 'daziz.zarkaoui@esprit.tn'),
(1230, 'aziz zarkaoui', 19, 'mohamedaziz.zarkaoui@esprit.tn'),
(1234, 'aziz zarkaoui', 44, 'mohamedaziz.zarkaoui@esprit.tn'),
(1250, 'aziz zarkaoui', 23, 'mohkaoui@esprit.tn'),
(1255, 'aziz zarkaoui', 45, 'mohamedaziz.zarkaoui@esprit.tn'),
(1277, 'aziz zarkaoui', 22, 'mohamedaziz.zarkaoui@esprit.tn'),
(2111, 'rre', 23, 'aze@te.qs'),
(2145, 'aziz zarkaoui', 44, 'mohamedazikaoui@esprit.tn'),
(2200, 'nono', 22, 'mohamedaziz.zarkaoui@esprit.tn'),
(2220, 'aziz zarkaoui', 19, 'mohamedazoui@esprit.tn'),
(2222, 'aziz zarkaoui', 34, 'mohamedaziz.zarkaoui@esprit.tn'),
(2229, 'aziz zarkaoui', 19, 'mohamedaziz.zarkaoui@esprit.tn'),
(2233, 'rkaoui', 33, 'm@esprit.tn'),
(2256, 'nono', 22, 'mohamedaziz.zarkaoui@esprit.tn'),
(2290, 'aziz zarkaoui', 23, 'mohamedaziz.zarkaoui@esprit.tn'),
(2322, 'rre', 23, 'aze@te.qs'),
(2333, 'aziz zarkaoui', 23, 'mohamedaziz.zarkaoui@esprit.tn'),
(2345, 'eetrr', 24, 'mohaaziz.zarkaoui@esprit.tn'),
(3333, 'aziz zarkaoui', 56, 'mohamedaziz.zarkaoui@esprit.tn'),
(3399, 'aziz zarkaoui', 67, 'iz.zarkaoui@esp.tn'),
(3400, 'aziz zarkaoui', 67, 'iz.zarkaoui@esp.tn'),
(3456, 'aziz zarkaoui', 45, 'mohamedaziz.zarkaoui@esprit.tn'),
(4400, 'az', 34, 'mohamedaziz.zarkaoui@esprit.tn'),
(5678, 'aziz zarkaoui', 55, 'mohamedaziz.zarkaoui@esprit.tn'),
(6611, 'aziz zarkaoui', 34, 'mohamedaziz.zarkaoui@esprit.tn'),
(7777, 'azi', 66, 'zarkaoui@esprit.tn'),
(7890, 'rre', 23, 'aze@te.qs'),
(9111, 'aziz zarkaoui', 34, 'mohamedaziz.zarkaoui@esprit.tn'),
(9811, 'qqss', 88, 'moi@esprit.tn'),
(9998, 'zezez', 23, 'mohamedaziz.zarkaoui@es.tn');

-- --------------------------------------------------------

--
-- Structure de la table `comm`
--

CREATE TABLE `comm` (
  `rate` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `text` varchar(100) NOT NULL,
  `CIN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `comm`
--

INSERT INTO `comm` (`rate`, `title`, `text`, `CIN`) VALUES
(8, 'aaa', 'bonjour', 2220),
(10, 'aziz', 'qsqs', 2333);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `arti`
--
ALTER TABLE `arti`
  ADD PRIMARY KEY (`CIN`);

--
-- Index pour la table `comm`
--
ALTER TABLE `comm`
  ADD PRIMARY KEY (`CIN`),
  ADD KEY `CIN` (`CIN`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comm`
--
ALTER TABLE `comm`
  ADD CONSTRAINT `foreign` FOREIGN KEY (`CIN`) REFERENCES `arti` (`CIN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

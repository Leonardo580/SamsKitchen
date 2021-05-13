-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 08 mai 2021 à 15:57
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.4.15

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
-- Structure de la table `commandes`
--

CREATE TABLE `commandes` (
  `RefC` int(11) NOT NULL,
  `nomC` varchar(30) NOT NULL,
  `quantiteC` int(11) NOT NULL,
  `prixC` int(11) NOT NULL,
  `typeC` varchar(30) NOT NULL,
  `IdLivr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commandes`
--

INSERT INTO `commandes` (`RefC`, `nomC`, `quantiteC`, `prixC`, `typeC`, `IdLivr`) VALUES
(1123, 'saladeVerte', 2, 10000, 'salade', 1223),
(1223, 'JusFraise', 2, 15000, 'Jus', 1133);

-- --------------------------------------------------------

--
-- Structure de la table `livreur`
--

CREATE TABLE `livreur` (
  `IdLivr` int(11) NOT NULL,
  `nomL` varchar(30) NOT NULL,
  `prenomL` varchar(30) NOT NULL,
  `tel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `livreur`
--

INSERT INTO `livreur` (`IdLivr`, `nomL`, `prenomL`, `tel`) VALUES
(1133, 'Ali', 'Saif', 44444444),
(1223, 'Amami', 'Syrine', 24797757),
(2231, 'Nasri', 'Ali', 22356984);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`RefC`),
  ADD KEY `IdLivr` (`IdLivr`);

--
-- Index pour la table `livreur`
--
ALTER TABLE `livreur`
  ADD PRIMARY KEY (`IdLivr`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD CONSTRAINT `FK_relation` FOREIGN KEY (`IdLivr`) REFERENCES `livreur` (`IdLivr`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

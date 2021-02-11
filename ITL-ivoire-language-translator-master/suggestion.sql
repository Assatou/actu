-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 10 août 2020 à 16:16
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.7

SET SQL_MODE
= "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone
= "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ilt`
--

-- --------------------------------------------------------

--
-- Structure de la table `suggestion`
--

CREATE TABLE `suggestion`
(
  `id` int
(11) NOT NULL,
  `texte1` varchar
(255) NOT NULL,
  `langue_start` varchar
(255) NOT NULL,
  `texte2` varchar
(255) NOT NULL,
  `langue_end` varchar
(255) NOT NULL,
  `audio` varchar
(255) NOT NULL,
  `datec` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `suggestion`
--

INSERT INTO `suggestion` (`
id`,
`texte1
`, `langue_start`, `texte2`, `langue_end`, `audio`, `datec`) VALUES
(1, 'femme', 'Français', 'debbo', 'Français', 'daudios/viens manger.m4a', '0000-00-00 00:00:00'),
(2, 'femme', 'Français', 'debbo', 'Français', 'daudios/viens manger.m4a', '0000-00-00 00:00:00'),
(3, 'femme', 'Français', 'debbo', 'dioula', 'daudios/ma maman.m4a', '2020-08-06 01:15:53');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `suggestion`
--
ALTER TABLE `suggestion`
ADD PRIMARY KEY
(`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `suggestion`
--
ALTER TABLE `suggestion`
  MODIFY `id` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

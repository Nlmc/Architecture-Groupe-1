-- phpMyAdmin SQL Dump
-- version 4.6.5.1
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Mer 17 Mai 2017 à 14:14
-- Version du serveur :  5.6.34
-- Version de PHP :  7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `testphp`
--

-- --------------------------------------------------------

--
-- Structure de la table `archi`
--

CREATE TABLE `archi` (
  `id` int(255) NOT NULL,
  `num` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `annee` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `archi`
--

INSERT INTO `archi` (`id`, `num`, `annee`, `region`, `image`) VALUES
(4, '167', '2016', 'gros pd', 'cheming.jpg'),
(5, '12314', '1231', 'jhziuhq', 'iauha'),
(6, '4323', '4324', 'zuriauzfyiu', 'iuyaraez');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `archi`
--
ALTER TABLE `archi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `archi`
--
ALTER TABLE `archi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

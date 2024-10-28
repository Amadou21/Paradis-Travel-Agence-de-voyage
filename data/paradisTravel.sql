-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 27 oct. 2022 à 02:36
-- Version du serveur :  8.0.30-0ubuntu0.20.04.2
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `paradisTravel`
--

-- --------------------------------------------------------

--
-- Structure de la table `action`
--

CREATE TABLE `action` (
  `idAction` int NOT NULL,
  `contenue` text NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `action`
--

INSERT INTO `action` (`idAction`, `contenue`, `date`) VALUES
(1, 'df\r\nsg\r\nseh\r\n', '2022-10-27 02:29:18');

-- --------------------------------------------------------

--
-- Structure de la table `infoSystem`
--

CREATE TABLE `infoSystem` (
  `idInfoSystem` int NOT NULL,
  `email` varchar(60) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `instagram` varchar(100) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `snapchat` varchar(100) DEFAULT NULL,
  `whatsapp` varchar(30) DEFAULT NULL,
  `lieu` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `infoSystem`
--

INSERT INTO `infoSystem` (`idInfoSystem`, `email`, `tel`, `instagram`, `facebook`, `snapchat`, `whatsapp`, `lieu`) VALUES
(1, 'bore.younous59@gmail.com', '66738165', '6565', '64', NULL, '654', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `idMessage` int NOT NULL,
  `contenue` text NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_messageSender` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`idMessage`, `contenue`, `date`, `id_messageSender`) VALUES
(1, 'vkbnxdf\r\nfgj\r\ndfgb', '2022-10-27 02:20:32', 1);

-- --------------------------------------------------------

--
-- Structure de la table `messageSender`
--

CREATE TABLE `messageSender` (
  `idMessageSender` int NOT NULL,
  `nom` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `tel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `messageSender`
--

INSERT INTO `messageSender` (`idMessageSender`, `nom`, `email`, `tel`) VALUES
(1, 'bore', 'bore.younous59@gmail.com', '66738165');

-- --------------------------------------------------------

--
-- Structure de la table `statistique`
--

CREATE TABLE `statistique` (
  `idStatistique` int NOT NULL,
  `nombreVisite` int DEFAULT NULL,
  `nombreInteraction` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `statistique`
--

INSERT INTO `statistique` (`idStatistique`, `nombreVisite`, `nombreInteraction`) VALUES
(1, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `idUser` int NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `login` varchar(60) NOT NULL,
  `motDePasse` varchar(60) NOT NULL,
  `role` varchar(60) NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`idUser`, `nom`, `prenom`, `login`, `motDePasse`, `role`) VALUES
(1, 'bore', 'Younouss', 'bore.younous59@gmail.com', '123456', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `visite`
--

CREATE TABLE `visite` (
  `idVisite` int NOT NULL,
  `nomPage` varchar(60) NOT NULL,
  `nombreVisite` int NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `visite`
--

INSERT INTO `visite` (`idVisite`, `nomPage`, `nombreVisite`) VALUES
(1, 'acceuil', 5),
(2, 'profil', 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `action`
--
ALTER TABLE `action`
  ADD PRIMARY KEY (`idAction`);

--
-- Index pour la table `infoSystem`
--
ALTER TABLE `infoSystem`
  ADD PRIMARY KEY (`idInfoSystem`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`idMessage`),
  ADD KEY `produit_du_message` (`id_messageSender`);

--
-- Index pour la table `messageSender`
--
ALTER TABLE `messageSender`
  ADD PRIMARY KEY (`idMessageSender`);

--
-- Index pour la table `statistique`
--
ALTER TABLE `statistique`
  ADD PRIMARY KEY (`idStatistique`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- Index pour la table `visite`
--
ALTER TABLE `visite`
  ADD PRIMARY KEY (`idVisite`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `action`
--
ALTER TABLE `action`
  MODIFY `idAction` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `infoSystem`
--
ALTER TABLE `infoSystem`
  MODIFY `idInfoSystem` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `idMessage` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `messageSender`
--
ALTER TABLE `messageSender`
  MODIFY `idMessageSender` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `statistique`
--
ALTER TABLE `statistique`
  MODIFY `idStatistique` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `visite`
--
ALTER TABLE `visite`
  MODIFY `idVisite` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `produit_du_message` FOREIGN KEY (`id_messageSender`) REFERENCES `messageSender` (`idMessageSender`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

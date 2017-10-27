-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 28 oct. 2017 à 01:21
-- Version du serveur :  5.7.17
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `warten`
--
CREATE DATABASE IF NOT EXISTS `warten` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `warten`;

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `articles_id` int(11) NOT NULL,
  `articles_auteurPK` int(11) DEFAULT NULL,
  `articles_datecreation` date NOT NULL,
  `articles_datemodification` date DEFAULT NULL,
  `articles_titre` text NOT NULL,
  `articles_description` text NOT NULL,
  `articles_articlehtml` text NOT NULL,
  `articles_traductionPK` int(11) DEFAULT NULL,
  `articles_publication` tinyint(1) NOT NULL DEFAULT '0',
  `articles_priorite` int(11) NOT NULL DEFAULT '2',
  `articles_recherche` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `commentaire_id` int(11) NOT NULL,
  `commentaire_proprietairePK` int(11) DEFAULT NULL,
  `commentaire_destinatairePK` int(11) DEFAULT NULL,
  `commentaire_message` text NOT NULL,
  `commentaire_creation` date DEFAULT NULL,
  `commentaire_modification` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `droit`
--

CREATE TABLE `droit` (
  `droit_id` int(11) NOT NULL,
  `droit_nom` varchar(255) NOT NULL,
  `droit_priorite` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `lien`
--

CREATE TABLE `lien` (
  `lien_id` int(11) NOT NULL,
  `lien_nom` varchar(255) NOT NULL,
  `lien_adresse` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `message_id` int(11) NOT NULL,
  `message_proprietairePK` int(11) NOT NULL,
  `message_destinatairePK` int(11) NOT NULL,
  `message_envoie` date NOT NULL,
  `message_reception` date DEFAULT NULL,
  `message_modif` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `parametre`
--

CREATE TABLE `parametre` (
  `parametre_id` int(11) NOT NULL,
  `parametre_datecreation` date NOT NULL,
  `parametre_desactivation` tinyint(1) NOT NULL,
  `parametre_verification` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `profil`
--

CREATE TABLE `profil` (
  `profil_id` int(11) NOT NULL,
  `profil_sexe` varchar(255) NOT NULL,
  `profil_datenaissance` date NOT NULL,
  `profil_bio` text NOT NULL,
  `profil_imageprofil` text NOT NULL,
  `profil_profiljoueurPK` int(11) DEFAULT NULL,
  `profil_lienPK` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `profiljoueur`
--

CREATE TABLE `profiljoueur` (
  `profiljoueur_id` int(11) NOT NULL,
  `profiljoueur_jeux` text NOT NULL,
  `profiljoueur_plateforme` varchar(255) NOT NULL,
  `profiljoueur_tempsjeux` int(11) NOT NULL,
  `profiljoueur_preferences` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `traduction`
--

CREATE TABLE `traduction` (
  `traduction_id` int(11) NOT NULL,
  `traduction_langue` varchar(5) NOT NULL,
  `traduction_text` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_pseudo` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_mail` varchar(255) NOT NULL,
  `user_droitPK` int(11) DEFAULT NULL,
  `user_profilPK` int(11) DEFAULT NULL,
  `user_parametrePK` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`articles_id`);

--
-- Index pour la table `droit`
--
ALTER TABLE `droit`
  ADD PRIMARY KEY (`droit_id`);

--
-- Index pour la table `lien`
--
ALTER TABLE `lien`
  ADD PRIMARY KEY (`lien_id`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

--
-- Index pour la table `parametre`
--
ALTER TABLE `parametre`
  ADD PRIMARY KEY (`parametre_id`);

--
-- Index pour la table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`profil_id`);

--
-- Index pour la table `profiljoueur`
--
ALTER TABLE `profiljoueur`
  ADD PRIMARY KEY (`profiljoueur_id`);

--
-- Index pour la table `traduction`
--
ALTER TABLE `traduction`
  ADD PRIMARY KEY (`traduction_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `articles_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `droit`
--
ALTER TABLE `droit`
  MODIFY `droit_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `lien`
--
ALTER TABLE `lien`
  MODIFY `lien_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `parametre`
--
ALTER TABLE `parametre`
  MODIFY `parametre_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `profil`
--
ALTER TABLE `profil`
  MODIFY `profil_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `profiljoueur`
--
ALTER TABLE `profiljoueur`
  MODIFY `profiljoueur_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `traduction`
--
ALTER TABLE `traduction`
  MODIFY `traduction_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Métadonnées
--
USE `phpmyadmin`;

--
-- Métadonnées pour la table articles
--

--
-- Métadonnées pour la table commentaire
--

--
-- Métadonnées pour la table droit
--

--
-- Métadonnées pour la table lien
--

--
-- Métadonnées pour la table message
--

--
-- Métadonnées pour la table parametre
--

--
-- Métadonnées pour la table profil
--

--
-- Métadonnées pour la table profiljoueur
--

--
-- Métadonnées pour la table traduction
--

--
-- Métadonnées pour la table user
--

--
-- Métadonnées pour la base de données warten
--

--
-- Déchargement des données de la table `pma__relation`
--

INSERT INTO `pma__relation` (`master_db`, `master_table`, `master_field`, `foreign_db`, `foreign_table`, `foreign_field`) VALUES
('warten', 'articles', 'articles_auteurPK', 'warten', 'user', 'user_id'),
('warten', 'articles', 'articles_traductionPK', 'warten', 'traduction', 'traduction_id'),
('warten', 'commentaire', 'commentaire_destinatairePK', 'warten', 'user', 'user_id'),
('warten', 'commentaire', 'commentaire_proprietairePK', 'warten', 'user', 'user_id'),
('warten', 'message', 'message_destinatairePK', 'warten', 'user', 'user_id'),
('warten', 'message', 'message_proprietairePK', 'warten', 'user', 'user_id'),
('warten', 'profil', 'profil_lienPK', 'warten', 'lien', 'lien_id'),
('warten', 'profil', 'profil_profiljoueurPK', 'warten', 'profiljoueur', 'profiljoueur_id'),
('warten', 'user', 'user_droitPK', 'warten', 'droit', 'droit_id'),
('warten', 'user', 'user_parametrePK', 'warten', 'parametre', 'parametre_id'),
('warten', 'user', 'user_profilPK', 'warten', 'profil', 'profil_id');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

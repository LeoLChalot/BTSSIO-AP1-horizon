-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 11 jan. 2023 à 11:11
-- Version du serveur : 8.0.27
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `horizon`
--

-- --------------------------------------------------------

--
-- Structure de la table `forfait`
--

DROP TABLE IF EXISTS `forfait`;
CREATE TABLE IF NOT EXISTS `forfait` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(70) NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `prix_min` int NOT NULL,
  `prix_max` int NOT NULL,
  `id_service` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_service` (`id_service`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `forfait`
--

INSERT INTO `forfait` (`id`, `name`, `description`, `prix_min`, `prix_max`, `id_service`) VALUES
(1, 'Forfait \"Basique\"', 'Ce forfait est destiné aux petits projets ou aux budgets limités. Il comprend la création d\'un site internet de base, avec une page d\'accueil, une page \"à propos\" et une page de contact. Le design du site sera simple et personnalisé, mais ne comprendra pas de fonctionnalités avancées.', 500, 2000, 1),
(2, 'Forfait \"Standard\"', 'Ce forfait est adapté aux projets de moyenne envergure. Il comprend la création d\'un site internet plus complet, avec plusieurs pages et sections, ainsi que des fonctionnalités telles qu\'un formulaire de contact avancé, un système de gestion de contenu (CMS) et une galerie de photos. Le design sera plus travaillé et personnalisé.', 2000, 5000, 1),
(3, 'Forfait \"Premium\"', 'Ce forfait est destiné aux projets les plus ambitieux. Il comprend la création d\'un site internet haut de gamme, avec un design sur mesure, des fonctionnalités avancées telles qu\'un système de paiement en ligne et un espace membre.', 5000, 10000, 1),
(4, 'Abonnement \"Basique\"', 'Cet abonnement est destiné aux petits projets ou aux budgets limités. Il comprend la création d\'un site internet de base, avec une page d\'accueil, une page \"à propos\" et une page de contact. Le design du site sera simple et personnalisé, mais ne comprendra pas de fonctionnalités avancées.', 50, 250, 2),
(5, 'Abonnement \"Avancé\"', 'En plus des services inclus dans l\'abonnement de base, ce forfait peut inclure l\'ajout de nouvelles fonctionnalités au site, la création de pages et de contenus supplémentaires, la gestion de réseaux sociaux et la création de campagnes publicitaires en ligne.', 250, 500, 2),
(6, 'Abonnement \"sur mesure\"', 'Ce forfait est adapté aux besoins spécifiques de chaque client et peut inclure tous les services proposés dans les forfaits de base et avancé, ainsi que d\'autres services personnalisés en fonction des besoins de l\'entreprise.', 500, 1000, 2),
(7, 'Hébergement \"Basique\"', 'Ce forfait est adapté aux sites web à faible trafic et propose un espace de stockage limité, une bande passante limitée et un support technique de base.', 5, 25, 3),
(8, 'Hébergement \"Intermédiaire\"', 'Ce forfait est adapté aux sites web à moyen trafic et propose un espace de stockage et une bande passante supérieurs à ceux du forfait de base, ainsi qu\'un support technique étendu.', 25, 50, 3),
(9, 'Hébergement \"Premium\"', 'Ce forfait est adapté aux sites web à fort trafic et propose un espace de stockage et une bande passante illimités, ainsi qu\'un support technique de niveau expert.', 50, 300, 3);

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name_services` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `services_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id`, `name_services`, `services_url`) VALUES
(1, 'Développement Web', 'services-developpement.php'),
(2, 'Maintenance', 'services-maintenance.php'),
(3, 'Hébergement', 'services-hebergement.php');

-- --------------------------------------------------------

--
-- Structure de la table `workteam`
--

DROP TABLE IF EXISTS `workteam`;
CREATE TABLE IF NOT EXISTS `workteam` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `poste` varchar(255) NOT NULL,
  `photo_profil` varchar(255) NOT NULL,
  `date_entree` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `workteam`
--

INSERT INTO `workteam` (`id`, `nom`, `prenom`, `poste`, `photo_profil`, `date_entree`) VALUES
(1, 'Martineau', 'Erwan', 'Pole Juridique et Administratif', 'Erwan_MARTINEAU.jpg', '2023-01-02'),
(2, 'Bernier', 'Florent', 'Vice président / Développeur', 'Florent_BERNIER.jpg', '2023-01-02'),
(3, 'Larou-Chalot', 'Léo', 'Président / Lead Développeur', 'Leo_LAROU-CHALOT.jpg', '2023-01-02');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

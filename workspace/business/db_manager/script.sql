-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 07, 2021 at 02:59 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `unique_cooki`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrateur`
--

CREATE TABLE `administrateur` (
  `idAdministrateur` int(11) NOT NULL,
  `nom` varchar(45) DEFAULT NULL,
  `prenom` varchar(245) DEFAULT NULL,
  `pseudo` varchar(45) DEFAULT NULL,
  `mot_de_passe` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `administrateur`
--

INSERT INTO `administrateur` (`idAdministrateur`, `nom`, `prenom`, `pseudo`, `mot_de_passe`) VALUES
(9872456, 'Super', 'Admin', 'Admin', 'admin'),
(87334603, 'SORO', 'Yves', 'ysoro', 'admin'),
(258446572, 'Konan', 'Alain', 'OKonan', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `annonceur`
--

CREATE TABLE `annonceur` (
  `idannonceur` int(11) NOT NULL,
  `nom` varchar(45) DEFAULT NULL,
  `prenom` varchar(245) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `mot_de_passe` text,
  `statut` varchar(45) DEFAULT NULL,
  `added_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `annonceur`
--

INSERT INTO `annonceur` (`idannonceur`, `nom`, `prenom`, `email`, `mot_de_passe`, `statut`, `added_at`) VALUES
(443958004, 'Annonceur', 'Test', 'test@gmail.com', 'admin', '1', '2020-01-03 14:15:45');

-- --------------------------------------------------------

--
-- Table structure for table `carburant`
--

CREATE TABLE `carburant` (
  `idcarburant` int(11) NOT NULL,
  `libelle` varchar(45) DEFAULT NULL,
  `added_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `idAdministrateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `carburant`
--

INSERT INTO `carburant` (`idcarburant`, `libelle`, `added_at`, `idAdministrateur`) VALUES
(26194749, 'Diesel', '2020-01-03 15:54:11', 9872456),
(250236056, 'Super', '2020-01-03 15:54:01', 9872456);

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `idcategorie` int(11) NOT NULL,
  `libelle` varchar(45) DEFAULT NULL,
  `photo` text,
  `statut` int(11) NOT NULL DEFAULT '1',
  `added_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `idAdministrateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`idcategorie`, `libelle`, `photo`, `statut`, `added_at`, `idAdministrateur`) VALUES
(28164830, 'Pièces moteur', '1608300418.jpg', 1, '2020-12-18 14:06:57', 9872456),
(47666582, 'Moteur', '1598614018.jpg', 0, '2020-08-28 11:26:57', 9872456),
(156374282, 'Pneus et chaines', '1598614083.jpg', 0, '2020-08-28 11:28:03', 9872456),
(293903174, 'Accessoires Auto', '1598614196.jpg', 0, '2020-08-28 11:29:56', 9872456),
(475566219, 'Huiles moteur', '1598614116.jpg', 0, '2020-08-28 11:28:35', 9872456),
(599173138, 'Moteur', NULL, 0, '2020-01-03 15:04:17', 9872456),
(709731189, 'Electricité', '1608300460.jpg', 1, '2020-12-18 14:07:39', 9872456),
(802787322, 'Electronique', '1598613924.png', 0, '2020-08-28 11:25:24', 9872456),
(888681018, 'Electronique', NULL, 0, '2020-01-03 15:03:27', 9872456),
(950325839, 'Electronique', '', 0, '2020-08-28 11:24:17', 9872456);

-- --------------------------------------------------------

--
-- Table structure for table `commande`
--

CREATE TABLE `commande` (
  `idcommande` int(11) NOT NULL,
  `quantite` int(11) DEFAULT NULL,
  `lieu_livraison` varchar(45) DEFAULT NULL,
  `statut` varchar(45) DEFAULT NULL,
  `added_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `idutilisateur` int(11) NOT NULL,
  `idproduit` int(11) NOT NULL,
  `idmoyenPaiement` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `etatProduit`
--

CREATE TABLE `etatProduit` (
  `idetatProduit` int(11) NOT NULL,
  `libelle` varchar(45) DEFAULT NULL,
  `added_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `idAdministrateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `etatProduit`
--

INSERT INTO `etatProduit` (`idetatProduit`, `libelle`, `added_at`, `idAdministrateur`) VALUES
(298852955, 'Bon état', '2020-01-03 15:18:09', 9872456),
(393023957, 'Neuf', '2020-01-03 15:19:44', 9872456),
(552667735, 'Etat correct', '2020-01-03 15:18:25', 9872456),
(718311118, 'Comme neuf', '2020-01-03 15:17:50', 9872456),
(848108673, 'Très bon état', '2020-01-03 15:18:00', 9872456);

-- --------------------------------------------------------

--
-- Table structure for table `fabricant`
--

CREATE TABLE `fabricant` (
  `idfabricant` int(11) NOT NULL,
  `libelle` varchar(45) DEFAULT NULL,
  `added_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `idAdministrateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fabricant`
--

INSERT INTO `fabricant` (`idfabricant`, `libelle`, `added_at`, `idAdministrateur`) VALUES
(46487078, 'Clean Car', '2020-01-03 15:31:25', 9872456),
(164914978, 'Honda', '2020-01-03 15:31:32', 9872456);

-- --------------------------------------------------------

--
-- Table structure for table `marque`
--

CREATE TABLE `marque` (
  `idmarque` int(11) NOT NULL,
  `libelle` varchar(45) DEFAULT NULL,
  `photo` text,
  `statut` int(11) DEFAULT '1',
  `added_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `idAdministrateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `marque`
--

INSERT INTO `marque` (`idmarque`, `libelle`, `photo`, `statut`, `added_at`, `idAdministrateur`) VALUES
(166176407, 'Audi', '1598614198.jpg', 1, '2020-01-03 14:45:57', 9872456),
(320341364, 'Alpha Roméo', '1598614199.jpg', 1, '2020-01-03 14:47:16', 9872456),
(529791209, 'Hyundai', NULL, 1, '2020-02-23 11:29:25', 9872456);

-- --------------------------------------------------------

--
-- Table structure for table `modele`
--

CREATE TABLE `modele` (
  `idmodele` int(11) NOT NULL,
  `libelle` varchar(45) DEFAULT NULL,
  `photo` varchar(45) DEFAULT NULL,
  `annee` varchar(45) DEFAULT NULL,
  `added_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `idAdministrateur` int(11) NOT NULL,
  `idmarque` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `modele`
--

INSERT INTO `modele` (`idmodele`, `libelle`, `photo`, `annee`, `added_at`, `idAdministrateur`, `idmarque`) VALUES
(239270916, 'i10 2019', '1582457594.jpg', '2019', '2020-02-23 11:33:13', 9872456, 529791209),
(550506243, 'Giulia 2019', '398378_2020_Alfa_Romeo_Giulia.jpg', '2019', '2020-01-03 17:34:12', 9872456, 320341364);

-- --------------------------------------------------------

--
-- Table structure for table `moyenPaiement`
--

CREATE TABLE `moyenPaiement` (
  `idmoyenPaiement` int(11) NOT NULL,
  `libelle` varchar(45) DEFAULT NULL,
  `added_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `moyenPaiement`
--

INSERT INTO `moyenPaiement` (`idmoyenPaiement`, `libelle`, `added_at`) VALUES
(85928368, 'MTN Mobile Money', '2020-01-03 15:42:21'),
(299507198, 'Espèces', '2020-01-03 15:42:44'),
(414967859, 'Flooz', '2020-01-03 15:42:27'),
(594732957, 'Orange Money', '2020-01-03 15:42:11');

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `idphoto` int(11) NOT NULL,
  `libelle` varchar(45) DEFAULT NULL,
  `added_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `idproduit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE `produit` (
  `idproduit` int(11) NOT NULL,
  `designation` varchar(45) DEFAULT NULL,
  `description` text,
  `reference` varchar(45) DEFAULT NULL,
  `prix` int(11) DEFAULT NULL,
  `poids` varchar(45) DEFAULT NULL,
  `photo` varchar(45) DEFAULT NULL,
  `statut` varchar(45) DEFAULT '2',
  `commentaire` text,
  `added_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `idtypeProduit` int(11) NOT NULL,
  `idmodele` int(11) NOT NULL,
  `idcarburant` int(11) NOT NULL,
  `idetatProduit` int(11) NOT NULL,
  `idmarque` int(11) NOT NULL,
  `idfabricant` int(11) NOT NULL,
  `idannonceur` int(11) DEFAULT NULL,
  `idversion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`idproduit`, `designation`, `description`, `reference`, `prix`, `poids`, `photo`, `statut`, `commentaire`, `added_at`, `idtypeProduit`, `idmodele`, `idcarburant`, `idetatProduit`, `idmarque`, `idfabricant`, `idannonceur`, `idversion`) VALUES
(117587029, 'ok', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'JHGFD', 20, '70g', '1600100309.png', '2', '', '2020-09-14 16:18:29', 271670967, 550506243, 26194749, 298852955, 320341364, 46487078, NULL, 264998652),
(379003889, 'Ecran LCD', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'REF-0980', 60000, '1kg', '1598888922.png', '1', '', '2020-08-31 15:48:41', 923976707, 239270916, 250236056, 393023957, 529791209, 164914978, 443958004, 489573638),
(661988437, 'Filtre à huile', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'REF-0987', 15000, '300g', '1598888629.png', '1', '', '2020-08-31 15:43:49', 621890821, 550506243, 26194749, 393023957, 320341364, 46487078, 443958004, 264998652),
(803694183, 'Relais alarme', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'REF-0990', 50000, '10g', '1582466334.jpg', '1', '', '2020-02-23 13:58:53', 271670967, 239270916, 250236056, 298852955, 529791209, 46487078, 443958004, 489573638);

-- --------------------------------------------------------

--
-- Table structure for table `typeProduit`
--

CREATE TABLE `typeProduit` (
  `idtypeProduit` int(11) NOT NULL,
  `libelle` varchar(45) DEFAULT NULL,
  `added_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `idAdministrateur` int(11) NOT NULL,
  `idcategorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `typeProduit`
--

INSERT INTO `typeProduit` (`idtypeProduit`, `libelle`, `added_at`, `idAdministrateur`, `idcategorie`) VALUES
(271670967, 'Alarme', '2020-01-03 16:22:05', 9872456, 888681018),
(621890821, 'Huiles moteur', '2020-01-03 16:23:02', 9872456, 599173138),
(923976707, 'Accessoires Auto', '2020-08-31 15:53:43', 9872456, 293903174);

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `idutilisateur` int(11) NOT NULL,
  `nom` varchar(45) DEFAULT NULL,
  `prenom` varchar(245) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `mot_de_passe` text,
  `statut` varchar(45) DEFAULT '1',
  `added_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`idutilisateur`, `nom`, `prenom`, `phone`, `email`, `mot_de_passe`, `statut`, `added_at`) VALUES
(491921706, 'SORO', 'Yves', '09090909', 'sorofyves@hotmail.fr', 'Admin', '1', '2020-09-14 15:25:39');

-- --------------------------------------------------------

--
-- Table structure for table `vehicule`
--

CREATE TABLE `vehicule` (
  `idvehicule` int(11) NOT NULL,
  `immatriculation` varchar(245) DEFAULT NULL,
  `vin` varchar(245) DEFAULT NULL,
  `mise_en_circulation` varchar(45) NOT NULL,
  `statut` int(11) DEFAULT '1',
  `added_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `idversion` int(11) NOT NULL,
  `idmodele` int(11) NOT NULL,
  `idcarburant` int(11) NOT NULL,
  `idmarque` int(11) NOT NULL,
  `idutilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vehicule`
--

INSERT INTO `vehicule` (`idvehicule`, `immatriculation`, `vin`, `mise_en_circulation`, `statut`, `added_at`, `idversion`, `idmodele`, `idcarburant`, `idmarque`, `idutilisateur`) VALUES
(754554513, '7654KJ09', 'IUYT56789', '', 1, '2020-09-15 09:05:11', 264998652, 550506243, 26194749, 320341364, 491921706);

-- --------------------------------------------------------

--
-- Table structure for table `version`
--

CREATE TABLE `version` (
  `idversion` int(11) NOT NULL,
  `libelle` varchar(45) DEFAULT NULL,
  `nbre_porte` int(11) DEFAULT NULL,
  `couleur` varchar(45) DEFAULT NULL,
  `added_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `idAdministrateur` int(11) NOT NULL,
  `idmodele` int(11) NOT NULL,
  `idcarburant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `version`
--

INSERT INTO `version` (`idversion`, `libelle`, `nbre_porte`, `couleur`, `added_at`, `idAdministrateur`, `idmodele`, `idcarburant`) VALUES
(264998652, 'Giulia Sport', 5, 'Rouge', '2020-02-23 11:27:06', 9872456, 550506243, 26194749),
(489573638, 'Intuitive', 5, 'Bleu', '2020-02-23 11:35:34', 9872456, 239270916, 26194749);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`idAdministrateur`);

--
-- Indexes for table `annonceur`
--
ALTER TABLE `annonceur`
  ADD PRIMARY KEY (`idannonceur`);

--
-- Indexes for table `carburant`
--
ALTER TABLE `carburant`
  ADD PRIMARY KEY (`idcarburant`),
  ADD KEY `fk_carburant_administrateur1_idx` (`idAdministrateur`);

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`idcategorie`),
  ADD KEY `fk_categorie_administrateur1_idx` (`idAdministrateur`);

--
-- Indexes for table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`idcommande`),
  ADD KEY `fk_commande_utilisateur1_idx` (`idutilisateur`),
  ADD KEY `fk_commande_produit1_idx` (`idproduit`),
  ADD KEY `fk_commande_moyenPaiement1_idx` (`idmoyenPaiement`);

--
-- Indexes for table `etatProduit`
--
ALTER TABLE `etatProduit`
  ADD PRIMARY KEY (`idetatProduit`),
  ADD KEY `fk_etatProduit_administrateur1_idx` (`idAdministrateur`);

--
-- Indexes for table `fabricant`
--
ALTER TABLE `fabricant`
  ADD PRIMARY KEY (`idfabricant`),
  ADD KEY `fk_fabricant_administrateur1_idx` (`idAdministrateur`);

--
-- Indexes for table `marque`
--
ALTER TABLE `marque`
  ADD PRIMARY KEY (`idmarque`),
  ADD KEY `fk_marque_administrateur1_idx` (`idAdministrateur`);

--
-- Indexes for table `modele`
--
ALTER TABLE `modele`
  ADD PRIMARY KEY (`idmodele`),
  ADD KEY `fk_modele_administrateur1_idx` (`idAdministrateur`),
  ADD KEY `fk_modele_marque1_idx` (`idmarque`);

--
-- Indexes for table `moyenPaiement`
--
ALTER TABLE `moyenPaiement`
  ADD PRIMARY KEY (`idmoyenPaiement`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`idphoto`),
  ADD KEY `fk_images_produit1_idx` (`idproduit`);

--
-- Indexes for table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`idproduit`),
  ADD KEY `fk_produit_typeProduit_idx` (`idtypeProduit`),
  ADD KEY `fk_produit_modele1_idx` (`idmodele`),
  ADD KEY `fk_produit_carburant1_idx` (`idcarburant`),
  ADD KEY `fk_produit_etatProduit1_idx` (`idetatProduit`),
  ADD KEY `fk_produit_marque1_idx` (`idmarque`),
  ADD KEY `fk_produit_fabricant1_idx` (`idfabricant`),
  ADD KEY `fk_produit_annonceur1_idx` (`idannonceur`),
  ADD KEY `fk_produit_version1_idx` (`idversion`);

--
-- Indexes for table `typeProduit`
--
ALTER TABLE `typeProduit`
  ADD PRIMARY KEY (`idtypeProduit`),
  ADD KEY `fk_typeProduit_administrateur1_idx` (`idAdministrateur`),
  ADD KEY `fk_typeProduit_categorie1_idx` (`idcategorie`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`idutilisateur`);

--
-- Indexes for table `vehicule`
--
ALTER TABLE `vehicule`
  ADD PRIMARY KEY (`idvehicule`),
  ADD KEY `fk_vehicule_version1_idx` (`idversion`),
  ADD KEY `fk_vehicule_modele1_idx` (`idmodele`),
  ADD KEY `fk_vehicule_carburant1_idx` (`idcarburant`),
  ADD KEY `fk_vehicule_marque1_idx` (`idmarque`),
  ADD KEY `fk_vehicule_utilisateur1_idx` (`idutilisateur`);

--
-- Indexes for table `version`
--
ALTER TABLE `version`
  ADD PRIMARY KEY (`idversion`),
  ADD KEY `fk_version_administrateur1_idx` (`idAdministrateur`),
  ADD KEY `fk_version_modele1_idx` (`idmodele`),
  ADD KEY `fk_version_carburant1_idx` (`idcarburant`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carburant`
--
ALTER TABLE `carburant`
  ADD CONSTRAINT `fk_carburant_administrateur1` FOREIGN KEY (`idAdministrateur`) REFERENCES `administrateur` (`idAdministrateur`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `categorie`
--
ALTER TABLE `categorie`
  ADD CONSTRAINT `fk_categorie_administrateur1` FOREIGN KEY (`idAdministrateur`) REFERENCES `administrateur` (`idAdministrateur`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `fk_commande_moyenPaiement1` FOREIGN KEY (`idmoyenPaiement`) REFERENCES `moyenPaiement` (`idmoyenPaiement`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_commande_produit1` FOREIGN KEY (`idproduit`) REFERENCES `produit` (`idproduit`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_commande_utilisateur1` FOREIGN KEY (`idutilisateur`) REFERENCES `utilisateur` (`idutilisateur`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `etatProduit`
--
ALTER TABLE `etatProduit`
  ADD CONSTRAINT `fk_etatProduit_administrateur1` FOREIGN KEY (`idAdministrateur`) REFERENCES `administrateur` (`idAdministrateur`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `fabricant`
--
ALTER TABLE `fabricant`
  ADD CONSTRAINT `fk_fabricant_administrateur1` FOREIGN KEY (`idAdministrateur`) REFERENCES `administrateur` (`idAdministrateur`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `marque`
--
ALTER TABLE `marque`
  ADD CONSTRAINT `fk_marque_administrateur1` FOREIGN KEY (`idAdministrateur`) REFERENCES `administrateur` (`idAdministrateur`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `modele`
--
ALTER TABLE `modele`
  ADD CONSTRAINT `fk_modele_administrateur1` FOREIGN KEY (`idAdministrateur`) REFERENCES `administrateur` (`idAdministrateur`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_modele_marque1` FOREIGN KEY (`idmarque`) REFERENCES `marque` (`idmarque`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `photo`
--
ALTER TABLE `photo`
  ADD CONSTRAINT `fk_images_produit1` FOREIGN KEY (`idproduit`) REFERENCES `produit` (`idproduit`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `fk_produit_annonceur1` FOREIGN KEY (`idannonceur`) REFERENCES `annonceur` (`idannonceur`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_produit_carburant1` FOREIGN KEY (`idcarburant`) REFERENCES `carburant` (`idcarburant`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_produit_etatProduit1` FOREIGN KEY (`idetatProduit`) REFERENCES `etatProduit` (`idetatProduit`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_produit_fabricant1` FOREIGN KEY (`idfabricant`) REFERENCES `fabricant` (`idfabricant`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_produit_marque1` FOREIGN KEY (`idmarque`) REFERENCES `marque` (`idmarque`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_produit_modele1` FOREIGN KEY (`idmodele`) REFERENCES `modele` (`idmodele`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_produit_typeProduit` FOREIGN KEY (`idtypeProduit`) REFERENCES `typeProduit` (`idtypeProduit`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_produit_version1` FOREIGN KEY (`idversion`) REFERENCES `version` (`idversion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `typeProduit`
--
ALTER TABLE `typeProduit`
  ADD CONSTRAINT `fk_typeProduit_administrateur1` FOREIGN KEY (`idAdministrateur`) REFERENCES `administrateur` (`idAdministrateur`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_typeProduit_categorie1` FOREIGN KEY (`idcategorie`) REFERENCES `categorie` (`idcategorie`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `vehicule`
--
ALTER TABLE `vehicule`
  ADD CONSTRAINT `fk_vehicule_carburant1` FOREIGN KEY (`idcarburant`) REFERENCES `carburant` (`idcarburant`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_vehicule_marque1` FOREIGN KEY (`idmarque`) REFERENCES `marque` (`idmarque`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_vehicule_modele1` FOREIGN KEY (`idmodele`) REFERENCES `modele` (`idmodele`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_vehicule_utilisateur1` FOREIGN KEY (`idutilisateur`) REFERENCES `utilisateur` (`idutilisateur`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_vehicule_version1` FOREIGN KEY (`idversion`) REFERENCES `version` (`idversion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `version`
--
ALTER TABLE `version`
  ADD CONSTRAINT `fk_version_administrateur1` FOREIGN KEY (`idAdministrateur`) REFERENCES `administrateur` (`idAdministrateur`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_version_carburant1` FOREIGN KEY (`idcarburant`) REFERENCES `carburant` (`idcarburant`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_version_modele1` FOREIGN KEY (`idmodele`) REFERENCES `modele` (`idmodele`) ON DELETE NO ACTION ON UPDATE NO ACTION;

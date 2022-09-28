-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 26 oct. 2022 à 11:25
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `balance`
--

-- --------------------------------------------------------

--
-- Structure de la table `accounting`
--

CREATE TABLE `accounting` (
  `id_account` int(11) NOT NULL,
  `id_cat` int(11) NOT NULL,
  `id_company` int(11) NOT NULL,
  `reference_account` varchar(50) NOT NULL,
  `designation_account` varchar(50) NOT NULL,
  `amount_account` varchar(50) NOT NULL,
  `date_account` date NOT NULL,
  `hour_account` time NOT NULL,
  `status_account` int(11) NOT NULL,
  `type_account` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `accounting`
--

INSERT INTO `accounting` (`id_account`, `id_cat`, `id_company`, `reference_account`, `designation_account`, `amount_account`, `date_account`, `hour_account`, `status_account`, `type_account`) VALUES
(8, 1, 1, 'UN7Z0G2B', 'Ordinateur Portable', '200000', '2022-10-11', '03:01:27', 0, '1'),
(12, 1, 1, 'E2IQYZMQ', 'Imprimante', '200000', '2022-10-20', '16:25:32', 0, '2'),
(14, 1, 1, 'U44M02MG', 'Serveur', '10000', '2022-10-20', '16:35:07', 0, '1'),
(15, 1, 1, 'DMDWMO5U', 'Mac Book Air', '500', '2022-10-20', '16:36:56', 0, '2');

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `id_user`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id_cat` int(11) NOT NULL,
  `reference_cat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id_cat`, `reference_cat`) VALUES
(1, 'Materiel de bureau'),
(2, 'Loyer '),
(3, 'Produit de netoyage'),
(4, 'Materiel de sécurité'),
(5, 'Salaire employés');

-- --------------------------------------------------------

--
-- Structure de la table `companies`
--

CREATE TABLE `companies` (
  `id_company` int(11) NOT NULL,
  `name_company` varchar(50) NOT NULL,
  `address_company` varchar(50) NOT NULL,
  `contact_company` int(11) NOT NULL,
  `email_company` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `companies`
--

INSERT INTO `companies` (`id_company`, `name_company`, `address_company`, `contact_company`, `email_company`) VALUES
(1, 'MytechGabon', 'Awendje', 65099497, 'mytechgabon@tech.com');

-- --------------------------------------------------------

--
-- Structure de la table `department`
--

CREATE TABLE `department` (
  `id_department` int(11) NOT NULL,
  `id_company` int(11) NOT NULL,
  `name_department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `department`
--

INSERT INTO `department` (`id_department`, `id_company`, `name_department`) VALUES
(1, 1, 'DSI');

-- --------------------------------------------------------

--
-- Structure de la table `finances`
--

CREATE TABLE `finances` (
  `id_finance` int(11) NOT NULL,
  `id_account` int(11) NOT NULL,
  `reference_finance` varchar(50) NOT NULL,
  `basic_balance` int(11) NOT NULL,
  `balance_finance` int(11) NOT NULL,
  `date_finance` date NOT NULL,
  `hour_finance` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `funds`
--

CREATE TABLE `funds` (
  `id_fund` int(11) NOT NULL,
  `id_company` int(11) NOT NULL,
  `balance_fund` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `funds`
--

INSERT INTO `funds` (`id_fund`, `id_company`, `balance_fund`) VALUES
(1, 1, 1000000);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `adresse_user` varchar(11) NOT NULL,
  `phone_user` int(11) NOT NULL,
  `password_user` varchar(255) NOT NULL,
  `role_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `first_name`, `last_name`, `email_user`, `adresse_user`, `phone_user`, `password_user`, `role_user`) VALUES
(1, 'CREDE', 'PAMBO', 'credefarel@outlook.com', 'PK7', 2147483647, '85568b20c3315286c4dfebb330b25146f92bed66', 1),
(2, 'CREDE-FAREL', 'PAMBO-KOMBI', 'credechrome@gmail.com', 'Pk7', 2147483647, '123456', 2),
(3, 'CREDE-FAREL', 'PAMBO-KOMBI', 'credechrome@gmail.com', 'Pk7', 2147483647, '9cd371050d89eed07a240fe0e9764bb7976a7152', 1),
(4, 'Ao', 'Bayos', 'aobayos@gmail.com', 'Charbonnage', 2147483647, '631b3d92db091b3ffa853efc3b0283c0286712ad', 1);

-- --------------------------------------------------------

--
-- Structure de la table `user_department`
--

CREATE TABLE `user_department` (
  `id_user` int(11) NOT NULL,
  `id_department` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user_department`
--

INSERT INTO `user_department` (`id_user`, `id_department`) VALUES
(1, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `accounting`
--
ALTER TABLE `accounting`
  ADD PRIMARY KEY (`id_account`),
  ADD KEY `id_company` (`id_company`),
  ADD KEY `id_cat` (`id_cat`);

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_cat`);

--
-- Index pour la table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id_company`);

--
-- Index pour la table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id_department`),
  ADD KEY `id_company` (`id_company`);

--
-- Index pour la table `finances`
--
ALTER TABLE `finances`
  ADD PRIMARY KEY (`id_finance`),
  ADD KEY `id_account` (`id_account`);

--
-- Index pour la table `funds`
--
ALTER TABLE `funds`
  ADD PRIMARY KEY (`id_fund`),
  ADD KEY `id_company` (`id_company`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Index pour la table `user_department`
--
ALTER TABLE `user_department`
  ADD KEY `id_user` (`id_user`),
  ADD KEY `user_company_ibfk_2` (`id_department`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `accounting`
--
ALTER TABLE `accounting`
  MODIFY `id_account` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `companies`
--
ALTER TABLE `companies`
  MODIFY `id_company` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `department`
--
ALTER TABLE `department`
  MODIFY `id_department` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `finances`
--
ALTER TABLE `finances`
  MODIFY `id_finance` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `funds`
--
ALTER TABLE `funds`
  MODIFY `id_fund` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `accounting`
--
ALTER TABLE `accounting`
  ADD CONSTRAINT `accounting_ibfk_1` FOREIGN KEY (`id_company`) REFERENCES `companies` (`id_company`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `accounting_ibfk_2` FOREIGN KEY (`id_cat`) REFERENCES `categories` (`id_cat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `department_ibfk_1` FOREIGN KEY (`id_company`) REFERENCES `companies` (`id_company`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `finances`
--
ALTER TABLE `finances`
  ADD CONSTRAINT `finances_ibfk_1` FOREIGN KEY (`id_account`) REFERENCES `accounting` (`id_account`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `funds`
--
ALTER TABLE `funds`
  ADD CONSTRAINT `funds_ibfk_1` FOREIGN KEY (`id_company`) REFERENCES `companies` (`id_company`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `user_department`
--
ALTER TABLE `user_department`
  ADD CONSTRAINT `user_department_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_department_ibfk_2` FOREIGN KEY (`id_department`) REFERENCES `department` (`id_department`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

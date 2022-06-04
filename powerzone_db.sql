-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 05 juin 2022 à 00:58
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de données : `powerzone_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `assiduity`
--

CREATE TABLE `assiduity` (
  `id_assiduity` bigint(19) NOT NULL,
  `start_session_assiduity` datetime DEFAULT current_timestamp(),
  `end_session_assiduity` datetime DEFAULT NULL,
  `subscription_assiduity` bigint(19) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `assiduity`
--

INSERT INTO `assiduity` (`id_assiduity`, `start_session_assiduity`, `end_session_assiduity`, `subscription_assiduity`) VALUES
(13, '2022-05-15 16:20:45', NULL, 0),
(2, '2022-05-10 16:32:55', '2022-05-16 14:12:14', 0),
(3, '2022-05-10 16:33:32', NULL, 0),
(4, '2022-05-10 16:38:25', NULL, 0),
(5, '2022-05-10 16:39:00', NULL, 0),
(6, '2022-05-10 16:40:30', '0000-00-00 00:00:00', 0),
(7, '2022-05-10 16:41:10', NULL, 0),
(8, '2022-05-15 13:46:07', NULL, 0),
(9, '2022-05-15 13:50:13', NULL, 0),
(10, '2022-05-15 13:50:39', NULL, 0),
(11, '2022-05-15 13:50:43', NULL, 0),
(12, '2022-05-15 14:20:10', NULL, 0),
(14, '2022-05-16 09:49:55', NULL, 0),
(15, '2022-05-24 16:15:07', NULL, 0),
(16, '2022-05-26 14:37:17', NULL, 0),
(20, '2022-06-02 13:20:56', '2022-06-02 15:31:37', 0),
(18, '2022-05-31 18:50:05', NULL, 0),
(19, '2022-06-01 13:20:36', '2022-06-01 14:20:36', 0),
(21, '2022-06-02 14:05:27', '2022-06-02 15:32:21', 0),
(22, '2022-06-02 23:05:32', '2022-06-02 23:05:41', 0),
(23, '2022-06-03 11:45:28', '2022-06-03 11:46:17', 0),
(24, '2022-06-04 23:17:19', NULL, 0),
(25, '2022-06-05 00:07:23', NULL, 0),
(26, '2022-06-05 00:13:43', NULL, 0),
(27, '2022-06-05 00:26:06', NULL, 32);

-- --------------------------------------------------------

--
-- Structure de la table `contract`
--

CREATE TABLE `contract` (
  `id_contract` bigint(19) NOT NULL,
  `number_contract` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `salary_contract` bigint(19) DEFAULT NULL,
  `evaluation_contract` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_begining_contract` date DEFAULT NULL,
  `date_ending_contract` date DEFAULT NULL,
  `add_date_contract` datetime DEFAULT current_timestamp(),
  `type_contract` tinyint(4) DEFAULT NULL,
  `gym_contract` bigint(19) DEFAULT NULL,
  `worker_contract` bigint(19) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `contract`
--

INSERT INTO `contract` (`id_contract`, `number_contract`, `salary_contract`, `evaluation_contract`, `date_begining_contract`, `date_ending_contract`, `add_date_contract`, `type_contract`, `gym_contract`, `worker_contract`) VALUES
(24, '52bfc9db', 0, '', '0000-00-00', '0000-00-00', '2022-06-04 17:42:01', 0, 105, 6),
(21, '10378bb6', 2000, 'GOOD', '2022-01-02', '2022-09-02', '2022-06-04 17:26:52', 2, 0, 0),
(7, '08c88139', 1000, '', '2022-05-26', '2022-05-26', NULL, 0, 0, 0),
(8, 'f9d313d5', 1000, '', '2022-05-26', '2022-05-26', NULL, 0, 0, 0),
(9, 'e6244bc2', 1000, '', '2022-05-26', '2022-05-26', '2022-05-26 14:52:45', 0, 0, 0),
(10, '240a961b', 1000, '', '2022-05-26', '2022-05-26', '2022-05-26 14:53:41', 0, 0, 0),
(11, '88e8afc3', 1000, '', '2022-05-26', '2022-05-26', '2022-05-26 15:01:34', 0, 0, 0),
(12, '61bc7951', 1000, '', '2022-05-26', '2022-05-26', '2022-05-26 15:06:45', 0, 0, 0),
(13, '59ce796e', 1000, '', '2022-05-26', '0000-00-00', '2022-05-26 15:09:30', 0, 0, 0),
(14, 'e223be6c', 1000, '', '2022-05-26', '0000-00-00', '2022-05-26 15:10:19', 0, 0, 0),
(15, 'd6bd1588', 30000, 'bad worker full of shit', '2022-06-24', '0000-00-00', '2022-05-26 15:11:35', 1, 0, 0),
(16, 'd59bdf26', 30000, 'bad worker full of shit', '2022-06-24', '0000-00-00', '2022-05-26 15:12:35', 1, 0, 0),
(17, '69d1dc5a', 30000, 'bad worker full of shit', '2022-06-24', '0000-00-00', '2022-05-26 15:13:27', 1, 0, 0),
(18, '72c7fc2c', 10000000, 'GOOD ', '2022-02-11', '0000-00-00', '2022-05-26 15:13:53', 0, 0, 0),
(19, '3ecfd86c', 10000000, 'GOOD ', '2022-02-11', '0000-00-00', '2022-05-26 15:15:03', 0, 0, 0),
(20, '09bffae1', 50, 'OKEy', '2022-02-02', '0000-00-00', '2022-05-26 15:15:43', 1, 0, 0),
(22, '84a8e0e1', 222222, 'GOOD', '2022-01-11', '2022-11-11', '2022-06-04 17:29:10', 1, 0, 0),
(23, 'c41f9abf', 10000, 'BAD', '2022-01-01', '2022-01-10', '2022-06-04 17:33:44', 2, 105, 3);

-- --------------------------------------------------------

--
-- Structure de la table `group`
--

CREATE TABLE `group` (
  `id_group` bigint(19) NOT NULL,
  `number_group` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `training_sessions_group` tinyint(4) DEFAULT NULL,
  `limit_number_group` tinyint(4) DEFAULT NULL,
  `link_workout_group` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video_workout_group` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `type_group` tinyint(4) DEFAULT NULL,
  `state_group` tinyint(4) DEFAULT NULL,
  `gym_group` bigint(19) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `group`
--

INSERT INTO `group` (`id_group`, `number_group`, `training_sessions_group`, `limit_number_group`, `link_workout_group`, `video_workout_group`, `type_group`, `state_group`, `gym_group`) VALUES
(14, '6198c137', 0, 3, '3', '4', 4, 1, 105),
(2, '85b87605', 2, 3, '4', '5', 1, 1, 13);

-- --------------------------------------------------------

--
-- Structure de la table `gym`
--

CREATE TABLE `gym` (
  `id_gym` bigint(19) NOT NULL,
  `access_number_gym` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_gym` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cover_gym` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'default_cover.jpg',
  `logo_gym` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'default_logo.jpg',
  `description_gym` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_gym` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fax_gym` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_gym` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `postal_code_gym` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `map_gym` longtext COLLATE utf8_unicode_ci DEFAULT '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
  `mobile_gym` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_gym` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nrc_gym` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tin_gym` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sin_gym` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ai_gym` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bsi_gym` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type_gym` tinyint(4) DEFAULT NULL,
  `add_date_gym` datetime DEFAULT current_timestamp(),
  `state_gym` tinyint(4) DEFAULT 0,
  `manager_gym` bigint(19) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `gym`
--

INSERT INTO `gym` (`id_gym`, `access_number_gym`, `name_gym`, `cover_gym`, `logo_gym`, `description_gym`, `phone_gym`, `fax_gym`, `address_gym`, `postal_code_gym`, `map_gym`, `mobile_gym`, `email_gym`, `nrc_gym`, `tin_gym`, `sin_gym`, `ai_gym`, `bsi_gym`, `type_gym`, `add_date_gym`, `state_gym`, `manager_gym`) VALUES
(105, '448a8f0b', 'first edit', 'default_cover.jpg', 'default_logo4.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '2022-06-03 20:28:18', 0, 6),
(106, '5c3d38e1', 'Oxygen', '', 'default_logo6.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '2022-06-04 19:14:05', 0, 8),
(9, '74139299', 'Facilisi Corp.', 'default_cover.jpg', 'default_logo.jpg', 'gravida. Aliquam tincidunt, nunc ac mattis ornare, lectus ante dictum mi, ac mattis velit justo nec ante. Maecenas mi felis,', '08 75 03 36 53', '04 57 51 04 41', '961-2030 Auctor Rd.', '21058-6854', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '06 18 86 18 26', 'ut.molestie@yahoo.edu', '434364426', '315085306', '356028872', '497421241', '418943866', 1, '2022-05-23 16:15:26', 0, 73),
(10, '41876794', 'Euismod Ac Fermentum Foundation', 'default_cover.jpg', 'default_logo.jpg', 'sem eget massa. Suspendisse eleifend. Cras sed leo. Cras vehicula aliquet libero. Integer in magna. Phasellus dolor elit, pellentesque a,', '01 71 51 07 38', '06 73 41 24 76', '4195 Nec, Rd.', '31994', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '06 31 63 68 94', 'in.nec@aol.edu', '189767579', '371802401', '339388164', '352615390', '277492555', 1, '2022-05-23 16:15:26', 0, 24),
(11, '309022343', 'Non Sapien Ltd', 'default_cover.jpg', 'default_logo.jpg', 'Nunc ullamcorper, velit in aliquet lobortis, nisi nibh lacinia orci, consectetuer euismod est arcu ac orci. Ut semper pretium neque.', '07 41 30 56 61', '08 21 18 26 61', 'Ap #810-8743 Sagittis St.', '414752', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '04 58 23 96 70', 'nullam.suscipit.est@aol.edu', '132144060', '181713259', '481473926', '445305065', '285374073', 1, '2022-05-23 16:15:26', 0, 10),
(12, '103405041', 'Aptent Taciti PC', 'default_cover.jpg', 'default_logo.jpg', 'quis diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce aliquet magna a neque.', '02 78 28 18 57', '02 65 72 77 28', 'Ap #449-6368 Est St.', '498522', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '03 30 63 16 47', 'vestibulum.ante@hotmail.couk', '19519372K', '287508727', '67803566', '175999299', '25553764', 1, '2022-05-23 16:15:26', 0, 68),
(13, '486566027', 'Faucibus Ut Nulla Limited', 'default_cover.jpg', 'default_logo.jpg', 'Cras pellentesque. Sed dictum. Proin eget odio. Aliquam vulputate ullamcorper magna. Sed eu eros. Nam consequat dolor vitae dolor. Donec', '01 31 51 03 65', '07 72 55 15 65', '4408 Ac Av.', '1551', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '02 56 22 17 86', 'ultrices.sit.amet@protonmail.couk', '207521086', '6381105K', '267671354', '23414066', '305081477', 1, '2022-05-23 16:15:26', 1, 78),
(14, '259339081', 'Molestie us LLP', '', '', 'turpis nec mauris blandit mattis. Cras eget nisi dictum augue malesuada malesuada. Integer id magna et ipsum cursus vestibulum. Mauris', '', '', '229-1388 Dictum Avenue', '12324', '<iframe src=', '', 'metus.aenean@aol.edu', '262858189', '274185686', '381817121', '31482377K', '215873854', 0, '2022-05-23 16:15:26', 1, 36),
(15, '232926988', 'A Limited', 'default_cover.jpg', 'default_logo.jpg', 'eu, ultrices sit amet, risus. Donec nibh enim, gravida sit amet, dapibus id, blandit at, nisi. Cum sociis natoque penatibus', '02 53 13 65 52', '05 38 66 76 88', '5772 Nulla St.', '17861', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '08 78 35 44 67', 'lorem@yahoo.com', '13221197', '15318848', '158653427', '25672961K', '155672781', 1, '2022-05-23 16:15:26', 1, 54),
(16, '91635348', 'Accumsan Convallis Corp.', 'default_cover.jpg', 'default_logo.jpg', 'Phasellus ornare. Fusce mollis. Duis sit amet diam eu dolor egestas rhoncus. Proin nisl sem, consequat nec, mollis vitae, posuere', '03 24 71 62 84', '04 68 86 62 06', '8348 Vivamus St.', '8734', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '07 11 63 90 41', 'lacinia.vitae.sodales@outlook.couk', '286129498', '186404262', '447154390', '203706855', '28949596', 1, '2022-05-23 16:15:26', 0, 26),
(17, '198687138', 'Arcu Curabitur Ltd', 'default_cover.jpg', 'default_logo.jpg', 'bibendum fermentum metus. Aenean sed pede nec ante blandit viverra. Donec tempus, lorem fringilla ornare placerat, orci lacus vestibulum lorem,', '06 01 28 20 54', '05 42 17 36 32', 'P.O. Box 150, 6276 Arcu. St.', 'G42 8WI', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '05 74 72 98 39', 'lorem@outlook.org', '222319870', '61624988', '282699680', '209008416', '10618517', 1, '2022-05-23 16:15:26', 1, 17),
(18, '24647757', 'Semper Nam Corp.', 'default_cover.jpg', 'default_logo.jpg', 'Proin nisl sem, consequat nec, mollis vitae, posuere at, velit. Cras lorem lorem, luctus ut, pellentesque eget, dictum placerat, augue.', '01 48 10 71 33', '04 17 84 56 45', 'Ap #959-4674 In Av.', '5611', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '04 97 83 51 49', 'viverra.donec.tempus@google.com', '104033466', '467655949', '154863796', '228933643', '305906395', 1, '2022-05-23 16:15:26', 1, 28),
(19, '446526626', 'Ligula Institute', 'default_cover.jpg', 'default_logo.jpg', 'non, luctus sit amet, faucibus ut, nulla. Cras eu tellus eu augue porttitor interdum. Sed auctor odio a purus. Duis', '04 54 09 82 73', '01 48 32 63 07', 'Ap #440-6037 Parturient St.', '54374', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '04 75 72 54 88', 'donec@icloud.com', '169832188', '254628379', '336038715', '414714935', '345979042', 1, '2022-05-23 16:15:26', 0, 11),
(20, '339574375', 'Aliquet Proin Ltd', 'default_cover.jpg', 'default_logo.jpg', 'posuere at, velit. Cras lorem lorem, luctus ut, pellentesque eget, dictum placerat, augue. Sed molestie. Sed id risus quis diam', '02 24 36 64 74', '08 05 39 20 03', 'Ap #607-4447 Tellus. Ave', '666757', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '01 12 10 74 32', 'tellus@outlook.ca', '193655556', '377448219', '395624318', '184787245', '436057172', 1, '2022-05-23 16:15:26', 0, 79),
(21, '251733074', 'Lacus Cras Associates', 'default_cover.jpg', 'default_logo.jpg', 'urna, nec luctus felis purus ac tellus. Suspendisse sed dolor. Fusce mi lorem, vehicula et, rutrum eu, ultrices sit amet,', '03 85 83 46 29', '03 48 07 86 31', 'Ap #775-2834 A, St.', '57565', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '08 56 51 55 68', 'laoreet.lectus.quis@yahoo.org', '495628175', '30281810', '375226871', '497956935', '205841024', 1, '2022-05-23 16:15:26', 0, 23),
(22, '59149636', 'Vulputate Ullamcorper Corporation', 'default_cover.jpg', 'default_logo.jpg', 'Integer tincidunt aliquam arcu. Aliquam ultrices iaculis odio. Nam interdum enim non nisi. Aenean eget metus. In nec orci. Donec', '02 13 32 51 56', '05 85 58 74 34', '420-5150 Nullam Road', 'T4A 7G1', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '08 77 59 62 68', 'et.malesuada.fames@icloud.ca', '151701531', '284438140', '13202486', '234835688', '502802704', 1, '2022-05-23 16:15:26', 0, 16),
(23, '172587151', 'Enim Associates', 'default_cover.jpg', 'default_logo.jpg', 'Suspendisse sed dolor. Fusce mi lorem, vehicula et, rutrum eu, ultrices sit amet, risus. Donec nibh enim, gravida sit amet,', '01 28 79 82 47', '02 23 25 54 07', '4715 Mauris Street', '74028', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '02 06 31 55 22', 'urna.justo@protonmail.net', '388391367', '452457024', '494752980', '34978867', '20565489', 1, '2022-05-23 16:15:26', 1, 66),
(24, '464531327', 'Mauris Rhoncus PC', 'default_cover.jpg', 'default_logo.jpg', 'gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede ac', '06 73 13 45 15', '08 67 19 11 12', '3469 Egestas Street', '12-389', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '05 41 40 86 44', 'ultrices.vivamus@aol.edu', '337591841', '4861339K', '372435062', '438556745', '235231271', 1, '2022-05-23 16:15:26', 0, 2),
(25, '165224671', 'Ultricies Ornare LLC', 'default_cover.jpg', 'default_logo.jpg', 'sed dolor. Fusce mi lorem, vehicula et, rutrum eu, ultrices sit amet, risus. Donec nibh enim, gravida sit amet, dapibus', '08 82 14 67 87', '08 71 98 60 82', 'Ap #660-263 Volutpat Rd.', '85263', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '01 88 65 94 21', 'ornare.sagittis@aol.ca', '14413821K', '501458643', '10487729K', '27961738K', '357852307', 1, '2022-05-23 16:15:26', 1, 51),
(26, '102703111', 'Diam Corp.', 'default_cover.jpg', 'default_logo.jpg', 'Nunc sollicitudin commodo ipsum. Suspendisse non leo. Vivamus nibh dolor, nonummy ac, feugiat non, lobortis quis, pede. Suspendisse dui. Fusce', '06 61 18 38 80', '03 74 55 68 41', '1503 Tristique Ave', '5292', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '07 36 93 02 22', 'lorem.vehicula@google.net', '256941929', '485477357', '48107095', '145871921', '274317612', 1, '2022-05-23 16:15:26', 1, 50),
(27, '456973728', 'Ridiculus Mus Donec Company', 'default_cover.jpg', 'default_logo.jpg', 'Fusce dolor quam, elementum at, egestas a, scelerisque sed, sapien. Nunc pulvinar arcu et pede. Nunc sed orci lobortis augue', '03 74 30 41 44', '03 36 99 20 60', '302 Ligula Ave', '6824-2748', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '08 60 61 43 74', 'morbi@aol.org', '307294036', '24446646K', '392965963', '382094174', '15241330', 1, '2022-05-23 16:15:26', 1, 25),
(28, '384793940', 'Sit Amet Orci Ltd', 'default_cover.jpg', 'default_logo.jpg', 'vulputate dui, nec tempus mauris erat eget ipsum. Suspendisse sagittis. Nullam vitae diam. Proin dolor. Nulla semper tellus id nunc', '09 22 95 27 85', '06 65 26 85 80', '216-2270 Nunc Rd.', '8475', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '03 52 78 86 12', 'auctor.mauris.vel@yahoo.net', '8362777', '11750767K', '37829897', '316696368', '281601008', 1, '2022-05-23 16:15:26', 0, 52),
(29, '386251614', 'Parturient Montes Nascetur Limited', 'default_cover.jpg', 'default_logo.jpg', 'a tortor. Nunc commodo auctor velit. Aliquam nisl. Nulla eu neque pellentesque massa lobortis ultrices. Vivamus rhoncus. Donec est. Nunc', '07 54 31 60 78', '07 26 48 32 17', 'P.O. Box 958, 2949 Nam Ave', '315716', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '03 60 23 07 49', 'ultricies@yahoo.edu', '197863536', '11925464', '17482911K', '388844418', '7459866', 1, '2022-05-23 16:15:26', 1, 56),
(30, '291944620', 'Rutrum Fusce Dolor Corporation', 'default_cover.jpg', 'default_logo.jpg', 'aliquet molestie tellus. Aenean egestas hendrerit neque. In ornare sagittis felis. Donec tempor, est ac mattis semper, dui lectus rutrum', '03 34 85 17 71', '04 11 40 26 40', '242-605 Ut Street', '81840', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '03 21 15 64 35', 'non.egestas.a@outlook.couk', '138981452', '225547254', '95834655', '142742764', '7816197', 1, '2022-05-23 16:15:26', 1, 26),
(31, '98547940', 'Duis Cursus Diam Associates', 'default_cover.jpg', 'default_logo.jpg', 'Maecenas ornare egestas ligula. Nullam feugiat placerat velit. Quisque varius. Nam porttitor scelerisque neque. Nullam nisl. Maecenas malesuada fringilla est.', '06 00 42 61 84', '07 88 84 64 84', '943-5978 Urna. Street', '36761-7292', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '04 33 92 76 81', 'elementum.purus.accumsan@outlook.edu', '463405018', '451939432', '388682655', '448905659', '321354637', 1, '2022-05-23 16:15:26', 1, 22),
(32, '166188369', 'Sollicitudin Adipiscing Foundation', 'default_cover.jpg', 'default_logo.jpg', 'sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Mauris ut quam vel sapien imperdiet ornare. In faucibus. Morbi', '07 41 16 82 76', '02 18 00 24 72', 'Ap #822-8642 Sociis St.', '6122', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '07 56 08 85 58', 'et.pede@aol.com', '119643813', '148842930', '46636473', '241679438', '321642225', 1, '2022-05-23 16:15:26', 0, 2),
(34, '28407947', 'Tincidunt Tempus Limited', 'default_cover.jpg', 'default_logo.jpg', 'eget lacus. Mauris non dui nec urna suscipit nonummy. Fusce fermentum fermentum arcu. Vestibulum ante ipsum primis in faucibus orci', '03 94 34 45 81', '07 23 07 71 75', 'Ap #666-4200 Suscipit Rd.', '467453', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '04 31 52 05 12', 'turpis.non.enim@aol.net', '413605059', '174148007', '146974023', '158429381', '14112529', 1, '2022-05-23 16:15:26', 0, 77),
(35, '96165218', 'Magna Phasellus Dolor LLP', 'default_cover.jpg', 'default_logo.jpg', 'enim mi tempor lorem, eget mollis lectus pede et risus. Quisque libero lacus, varius et, euismod et, commodo at, libero.', '03 38 57 75 05', '06 01 05 34 98', '854-802 Velit. Road', '666354', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '05 64 04 26 82', 'sed@yahoo.net', '10243734', '2514709K', '102649370', '307743159', '507691994', 1, '2022-05-23 16:15:26', 1, 64),
(36, '171645697', 'Fringilla Cursus Limited', 'default_cover.jpg', 'default_logo.jpg', 'felis. Nulla tempor augue ac ipsum. Phasellus vitae mauris sit amet lorem semper auctor. Mauris vel turpis. Aliquam adipiscing lobortis', '06 38 62 68 53', '02 88 34 52 41', 'P.O. Box 390, 1442 Aptent Avenue', 'UD8L 6LF', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '04 41 55 31 78', 'magnis.dis@icloud.edu', '453452506', '425552651', '455904145', '31938449', '18249790', 1, '2022-05-23 16:15:26', 1, 74),
(37, '301354924', 'Tempor Diam LLC', 'default_cover.jpg', 'default_logo.jpg', 'feugiat metus sit amet ante. Vivamus non lorem vitae odio sagittis semper. Nam tempor diam dictum sapien. Aenean massa. Integer', '07 81 07 85 38', '05 47 52 43 58', 'Ap #408-7130 Porttitor Road', 'F5 8KJ', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '09 95 21 89 78', 'parturient.montes@hotmail.org', '91498332', '187933927', '234671820', '127638381', '432204952', 1, '2022-05-23 16:15:26', 0, 68),
(38, '212986860', 'Lectus Nullam Inc.', 'default_cover.jpg', 'default_logo.jpg', 'convallis in, cursus et, eros. Proin ultrices. Duis volutpat nunc sit amet metus. Aliquam erat volutpat. Nulla facilisis. Suspendisse commodo', '07 76 97 82 34', '02 28 56 17 18', '821-8361 Dis Avenue', '21813', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '01 31 19 81 24', 'condimentum.eget.volutpat@hotmail.ca', '156988928', '337376428', '16215031', '387929576', '148154864', 1, '2022-05-23 16:15:26', 1, 67),
(39, '369549731', 'Curabitur Ut Odio LLC', 'default_cover.jpg', 'default_logo.jpg', 'lorem, sit amet ultricies sem magna nec quam. Curabitur vel lectus. Cum sociis natoque penatibus et magnis dis parturient montes,', '07 22 94 80 04', '03 16 76 73 47', 'Ap #564-8256 Tortor. Rd.', '5273-5626', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '05 18 48 53 87', 'tristique.senectus@aol.edu', '2319449K', '345592008', '338193297', '327512110', '81686750', 1, '2022-05-23 16:15:26', 1, 81),
(40, '15646225K', 'Magna Associates', 'default_cover.jpg', 'default_logo.jpg', 'penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec dignissim magna a tortor. Nunc commodo auctor velit. Aliquam nisl.', '04 88 12 23 10', '08 84 82 52 21', '664-7269 Sed Rd.', '8153', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '06 77 10 84 86', 'tempus.lorem@aol.net', '16324456K', '367621931', '147244843', '411208400', '141198408', 1, '2022-05-23 16:15:26', 0, 22),
(41, '25706753K', 'Natoque Penatibus Et PC', 'default_cover.jpg', 'default_logo.jpg', 'neque. Morbi quis urna. Nunc quis arcu vel quam dignissim pharetra. Nam ac nulla. In tincidunt congue turpis. In condimentum.', '06 35 08 73 56', '07 21 71 55 02', 'Ap #256-5747 Natoque Rd.', '1457 NC', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '08 23 88 67 71', 'nulla.aliquet@google.com', '42271863K', '96901135', '65718642', '355765040', '105339143', 1, '2022-05-23 16:15:26', 1, 78),
(42, '13834539', 'Non LLP', 'default_cover.jpg', 'default_logo.jpg', 'tortor at risus. Nunc ac sem ut dolor dapibus gravida. Aliquam tincidunt, nunc ac mattis ornare, lectus ante dictum mi,', '02 16 39 05 58', '08 52 81 67 95', '912-142 Erat, Ave', '35688', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '08 50 78 13 26', 'proin.vel@protonmail.org', '373955981', '101626245', '345947299', '407342712', '25325079', 1, '2022-05-23 16:15:26', 0, 91),
(43, '244685870', 'Laoreet Ipsum LLP', 'default_cover.jpg', 'default_logo.jpg', 'Donec vitae erat vel pede blandit congue. In scelerisque scelerisque dui. Suspendisse ac metus vitae velit egestas lacinia. Sed congue,', '06 57 04 12 15', '07 31 31 46 79', '2473 Nec Rd.', '75741-790', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '04 48 73 02 96', 'dolor.dolor.tempus@outlook.couk', '344298548', '119376459', '393552085', '358800', '254973319', 1, '2022-05-23 16:15:26', 0, 25),
(44, '212832421', 'Aliquam Eu Institute', 'default_cover.jpg', 'default_logo.jpg', 'felis. Donec tempor, est ac mattis semper, dui lectus rutrum urna, nec luctus felis purus ac tellus. Suspendisse sed dolor.', '03 24 38 16 30', '02 73 86 99 21', 'P.O. Box 818, 2219 Mollis. Road', '380740', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '05 56 32 45 12', 'sollicitudin@aol.org', '374903837', '382029704', '279939859', '275581909', '119275466', 1, '2022-05-23 16:15:26', 1, 22),
(45, '66288919', 'Nunc Mauris Corporation', 'default_cover.jpg', 'default_logo.jpg', 'vel est tempor bibendum. Donec felis orci, adipiscing non, luctus sit amet, faucibus ut, nulla. Cras eu tellus eu augue', '02 42 08 57 74', '01 40 33 12 35', '444-1169 Sed Avenue', '85-35', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '07 49 55 27 24', 'libero.proin@hotmail.org', '174231036', '237106172', '47152901K', '1495364', '124692903', 1, '2022-05-23 16:15:26', 0, 14),
(46, '403879185', 'Dictum Consulting', 'default_cover.jpg', 'default_logo.jpg', 'tincidunt, nunc ac mattis ornare, lectus ante dictum mi, ac mattis velit justo nec ante. Maecenas mi felis, adipiscing fringilla,', '07 91 21 10 26', '07 17 03 07 02', '526-7156 Luctus Rd.', '339501', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '02 34 85 85 74', 'malesuada.vel@google.org', '287982518', '9774742', '405776871', '25308530', '47247446', 1, '2022-05-23 16:15:26', 1, 6),
(47, '25806875', 'Purus Gravida LLP', 'default_cover.jpg', 'default_logo.jpg', 'Donec non justo. Proin non massa non ante bibendum ullamcorper. Duis cursus, diam at pretium aliquet, metus urna convallis erat,', '02 36 18 72 78', '03 47 35 59 58', 'P.O. Box 750, 3968 Facilisis Street', '28011', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '07 48 87 72 12', 'diam.eu@yahoo.ca', '294349618', '39320799K', '306683187', '118531906', '464733698', 1, '2022-05-23 16:15:26', 0, 91),
(48, '362454638', 'Ullamcorper Viverra Corp.', 'default_cover.jpg', 'default_logo.jpg', 'sem semper erat, in consectetuer ipsum nunc id enim. Curabitur massa. Vestibulum accumsan neque et nunc. Quisque ornare tortor at', '02 46 87 29 43', '03 75 19 90 19', 'P.O. Box 940, 8026 Eleifend Street', '1986', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '02 35 64 64 77', 'sit@yahoo.ca', '8454930', '348404431', '167962521', '397129209', '407977726', 1, '2022-05-23 16:15:26', 0, 81),
(49, '19341321', 'Suspendisse Non Corp.', 'default_cover.jpg', 'default_logo.jpg', 'imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna.', '05 48 38 34 65', '08 75 25 38 55', 'P.O. Box 246, 9464 Id Ave', '361578', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '03 92 62 32 89', 'risus@aol.net', '175943552', '43689088', '158989905', '409466834', '156571180', 1, '2022-05-23 16:15:26', 1, 15),
(50, '122589420', 'Mauris Morbi Non Corp.', 'default_cover.jpg', 'default_logo.jpg', 'mauris eu elit. Nulla facilisi. Sed neque. Sed eget lacus. Mauris non dui nec urna suscipit nonummy. Fusce fermentum fermentum', '04 67 26 05 16', '08 06 17 30 47', '740-3028 Eros St.', '410795', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '04 12 59 34 14', 'massa.non@google.couk', '284555163', '448793621', '15220430', '186026616', '479735328', 1, '2022-05-23 16:15:26', 0, 66),
(51, '32488986', 'Donec Tempor Incorporated', 'default_cover.jpg', 'default_logo.jpg', 'vehicula et, rutrum eu, ultrices sit amet, risus. Donec nibh enim, gravida sit amet, dapibus id, blandit at, nisi. Cum', '06 98 34 48 17', '07 17 58 57 28', 'Ap #845-6876 Sociis Street', '61413', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '08 23 35 27 79', 'interdum@outlook.net', '122088227', '43389238', '485554254', '29632545', '40918124', 1, '2022-05-23 16:15:26', 0, 98),
(52, '421559066', 'Ultrices Inc.', 'default_cover.jpg', 'default_logo.jpg', 'sem magna nec quam. Curabitur vel lectus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec', '01 87 93 62 05', '04 00 17 64 84', 'P.O. Box 523, 602 Risus. Street', '8127-7794', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '08 48 80 36 86', 'et@hotmail.org', '168767471', '29603790', '47465141K', '25316509', '301742444', 1, '2022-05-23 16:15:26', 0, 87),
(53, '252798641', 'Vel Sapien Imperdiet Associates', 'default_cover.jpg', 'default_logo.jpg', 'erat, in consectetuer ipsum nunc id enim. Curabitur massa. Vestibulum accumsan neque et nunc. Quisque ornare tortor at risus. Nunc', '05 16 20 34 74', '03 12 13 16 45', 'Ap #986-2567 Tincidunt. Road', '442303', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '03 23 83 38 13', 'aenean.eget@hotmail.ca', '35886923', '442431671', '334647730', '40232559', '452881853', 1, '2022-05-23 16:15:26', 0, 45),
(54, '2273654K', 'Dignissim Ltd', 'default_cover.jpg', 'default_logo.jpg', 'augue, eu tempor erat neque non quam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.', '06 54 98 18 72', '07 02 76 11 33', 'P.O. Box 426, 7626 Dapibus Rd.', '96511', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '05 06 20 69 31', 'at@aol.ca', '14744878', '31151489K', '332363778', '256646943', '295898348', 1, '2022-05-23 16:15:26', 0, 80),
(55, '427221474', 'Lacus Pede PC', 'default_cover.jpg', 'default_logo.jpg', 'ante dictum mi, ac mattis velit justo nec ante. Maecenas mi felis, adipiscing fringilla, porttitor vulputate, posuere vulputate, lacus. Cras', '07 51 04 37 51', '04 06 32 84 04', '739-4542 Non Avenue', '128824', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '07 12 84 67 59', 'nulla.facilisis@hotmail.com', '209273500', '334207927', '82453431', '248531010', '255655086', 1, '2022-05-23 16:15:26', 1, 95),
(56, '9223363', 'Convallis Convallis Ltd', 'default_cover.jpg', 'default_logo.jpg', 'mi eleifend egestas. Sed pharetra, felis eget varius ultrices, mauris ipsum porta elit, a feugiat tellus lorem eu metus. In', '07 13 83 04 82', '07 64 69 11 82', '382-7996 Egestas Rd.', '1751', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '05 63 06 33 51', 'facilisis.magna@hotmail.couk', '264404126', '6649893K', '2365162', '49647256K', '35866566', 1, '2022-05-23 16:15:26', 0, 84),
(57, '299816095', 'Diam Proin Company', 'default_cover.jpg', 'default_logo.jpg', 'blandit at, nisi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin vel nisl. Quisque fringilla', '06 68 34 63 39', '03 64 21 66 47', '604-1905 Eu, Av.', '1874', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '06 00 37 72 51', 'consectetuer.mauris@aol.ca', '205696253', '485113037', '375119684', '38436120', '227397241', 1, '2022-05-23 16:15:26', 0, 39),
(58, '36883022', 'Enim Nisl Elementum Foundation', 'default_cover.jpg', 'default_logo.jpg', 'metus. In nec orci. Donec nibh. Quisque nonummy ipsum non arcu. Vivamus sit amet risus. Donec egestas. Aliquam nec enim.', '08 16 25 96 57', '08 15 72 72 52', '166-7344 Elit Ave', '9731', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '06 80 62 42 75', 'erat@google.ca', '11977766', '237478835', '28699508K', '421093385', '23376474', 1, '2022-05-23 16:15:26', 1, 6),
(59, '442683298', 'Tincidunt Adipiscing Incorporated', 'default_cover.jpg', 'default_logo.jpg', 'quis turpis vitae purus gravida sagittis. Duis gravida. Praesent eu nulla at sem molestie sodales. Mauris blandit enim consequat purus.', '07 58 06 57 81', '04 74 72 83 12', 'Ap #904-8620 Ultrices Rd.', '4171', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '04 67 83 72 65', 'gravida.non@hotmail.net', '363187706', '222487528', '219258615', '287388365', '64942174', 1, '2022-05-23 16:15:26', 1, 51),
(60, '114024880', 'Sed Institute', 'default_cover.jpg', 'default_logo.jpg', 'convallis dolor. Quisque tincidunt pede ac urna. Ut tincidunt vehicula risus. Nulla eget metus eu erat semper rutrum. Fusce dolor', '06 84 08 27 15', '03 24 22 61 27', '3495 Quis St.', '2575', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '01 85 63 54 72', 'sagittis@icloud.ca', '426446294', '29270112', '361189973', '66696987', '184183781', 1, '2022-05-23 16:15:26', 1, 68),
(61, '72942191', 'Habitant Morbi Corp.', 'default_cover.jpg', 'default_logo.jpg', 'magna. Suspendisse tristique neque venenatis lacus. Etiam bibendum fermentum metus. Aenean sed pede nec ante blandit viverra. Donec tempus, lorem', '02 28 27 11 27', '02 86 05 84 15', 'Ap #751-8666 In Ave', '93953', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '06 03 04 83 65', 'ornare@google.org', '595679K', '278313638', '267499489', '19189783', '437553769', 1, '2022-05-23 16:15:26', 0, 95),
(62, '383569826', 'Sagittis Corporation', 'default_cover.jpg', 'default_logo.jpg', 'porttitor scelerisque neque. Nullam nisl. Maecenas malesuada fringilla est. Mauris eu turpis. Nulla aliquet. Proin velit. Sed malesuada augue ut', '05 21 18 70 35', '01 53 23 25 72', '117-9528 Magna Av.', '321494', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '01 64 88 72 03', 'dui.lectus@aol.edu', '273291210', '219653964', '40799389', '334663213', '278565238', 1, '2022-05-23 16:15:26', 0, 62),
(63, '46889584', 'Fusce Feugiat PC', 'default_cover.jpg', 'default_logo.jpg', 'imperdiet nec, leo. Morbi neque tellus, imperdiet non, vestibulum nec, euismod in, dolor. Fusce feugiat. Lorem ipsum dolor sit amet,', '03 27 88 51 26', '04 85 76 63 68', 'Ap #328-4260 Euismod Road', 'A7K 1J4', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '08 52 88 67 85', 'nec.ligula.consectetuer@hotmail.com', '1030876', '31894743', '45455777', '18491176', '255049305', 1, '2022-05-23 16:15:26', 0, 84),
(64, '277337568', 'Est Inc.', 'default_cover.jpg', 'default_logo.jpg', 'Donec consectetuer mauris id sapien. Cras dolor dolor, tempus non, lacinia at, iaculis quis, pede. Praesent eu dui. Cum sociis', '04 59 99 81 76', '02 38 19 11 98', 'P.O. Box 851, 1678 Sodales Av.', '43577', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '04 57 32 25 76', 'auctor.quis@yahoo.com', '242306678', '35131298K', '3966216', '419132470', '45935744', 1, '2022-05-23 16:15:26', 0, 65),
(65, '398033183', 'Etiam Imperdiet Dictum Industries', 'default_cover.jpg', 'default_logo.jpg', 'Nullam suscipit, est ac facilisis facilisis, magna tellus faucibus leo, in lobortis tellus justo sit amet nulla. Donec non justo.', '05 10 57 33 56', '07 84 56 26 12', 'Ap #704-2525 Nibh. Ave', '951636', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '01 23 72 51 89', 'per.conubia.nostra@aol.org', '333484854', '464683690', '20360906K', '368039241', '207248606', 1, '2022-05-23 16:15:26', 1, 55);
INSERT INTO `gym` (`id_gym`, `access_number_gym`, `name_gym`, `cover_gym`, `logo_gym`, `description_gym`, `phone_gym`, `fax_gym`, `address_gym`, `postal_code_gym`, `map_gym`, `mobile_gym`, `email_gym`, `nrc_gym`, `tin_gym`, `sin_gym`, `ai_gym`, `bsi_gym`, `type_gym`, `add_date_gym`, `state_gym`, `manager_gym`) VALUES
(66, '346379030', 'Dui Cras LLC', 'default_cover.jpg', 'default_logo.jpg', 'facilisis, magna tellus faucibus leo, in lobortis tellus justo sit amet nulla. Donec non justo. Proin non massa non ante', '06 26 64 97 68', '06 66 86 34 53', 'P.O. Box 835, 1843 Hendrerit. Ave', '7455-7563', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '04 17 75 14 13', 'sodales.mauris@icloud.couk', '28892101', '191943376', '226309500', '1024663', '31926888K', 1, '2022-05-23 16:15:26', 0, 85),
(67, '22215183', 'Aliquam Nec Consulting', 'default_cover.jpg', 'default_logo.jpg', 'ante dictum cursus. Nunc mauris elit, dictum eu, eleifend nec, malesuada ut, sem. Nulla interdum. Curabitur dictum. Phasellus in felis.', '07 61 68 18 98', '02 18 83 86 95', 'Ap #449-1356 Et, Road', '41104-7867', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '06 34 13 11 81', 'egestas.lacinia.sed@aol.ca', '448956717', '178289330', '426476851', '224176651', '473024144', 1, '2022-05-23 16:15:26', 1, 74),
(68, '413119944', 'Blandit Mattis Cras LLC', 'default_cover.jpg', 'default_logo.jpg', 'risus. Morbi metus. Vivamus euismod urna. Nullam lobortis quam a felis ullamcorper viverra. Maecenas iaculis aliquet diam. Sed diam lorem,', '05 11 60 26 24', '01 45 50 10 76', '465-4118 Arcu. Av.', '835551', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '08 44 18 57 62', 'cras@outlook.net', '307577488', '402659688', '28946104', '245752857', '399041414', 1, '2022-05-23 16:15:26', 1, 55),
(69, '14948643', 'Nam Ac Nulla Foundation', 'default_cover.jpg', 'default_logo.jpg', 'sit amet, risus. Donec nibh enim, gravida sit amet, dapibus id, blandit at, nisi. Cum sociis natoque penatibus et magnis', '01 85 39 73 53', '02 22 48 20 84', '209-3353 Varius Ave', '332955', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '04 95 31 65 30', 'vel.venenatis@outlook.org', '459895574', '305369896', '145921201', '167243851', '385151268', 1, '2022-05-23 16:15:26', 0, 36),
(70, '322069162', 'Sed Eget Associates', 'default_cover.jpg', 'default_logo.jpg', 'sit amet, consectetuer adipiscing elit. Etiam laoreet, libero et tristique pellentesque, tellus sem mollis dui, in sodales elit erat vitae', '07 75 76 55 63', '04 74 88 48 02', '8001 Quis Road', '12365', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '03 84 27 42 55', 'nec.tempus@hotmail.couk', '216411862', '115727966', '213156004', '461658628', '475949919', 1, '2022-05-23 16:15:26', 1, 67),
(71, '266891415', 'Id Corp.', 'default_cover.jpg', 'default_logo.jpg', 'In nec orci. Donec nibh. Quisque nonummy ipsum non arcu. Vivamus sit amet risus. Donec egestas. Aliquam nec enim. Nunc', '05 60 57 24 74', '05 20 23 29 36', 'Ap #950-6292 Rutrum Road', '845513', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '05 71 53 52 95', 'gravida@yahoo.couk', '201062047', '91026074', '427589757', '26198296K', '391196796', 1, '2022-05-23 16:15:26', 0, 89),
(72, '194956231', 'Dui Cras Pellentesque Limited', 'default_cover.jpg', 'default_logo.jpg', 'iaculis quis, pede. Praesent eu dui. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eget', '03 62 86 37 73', '06 21 89 36 98', '7816 Nunc Rd.', 'UH2 8RN', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '07 23 97 73 15', 'dolor@icloud.net', '259668530', '143569136', '708526', '391682879', '318521166', 1, '2022-05-23 16:15:26', 1, 11),
(73, '28731906', 'Lobortis Ultrices Foundation', 'default_cover.jpg', 'default_logo.jpg', 'sapien molestie orci tincidunt adipiscing. Mauris molestie pharetra nibh. Aliquam ornare, libero at auctor ullamcorper, nisl arcu iaculis enim, sit', '05 52 23 63 16', '03 47 64 51 71', '397-6757 Suspendisse Ave', '33570', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '04 69 50 24 00', 'mollis.lectus@hotmail.ca', '74142850', '229572393', '283903109', '167681832', '136255843', 1, '2022-05-23 16:15:26', 1, 44),
(74, '279658582', 'Massa Vestibulum Corp.', 'default_cover.jpg', 'default_logo.jpg', 'a nunc. In at pede. Cras vulputate velit eu sem. Pellentesque ut ipsum ac mi eleifend egestas. Sed pharetra, felis', '01 86 85 47 99', '07 70 68 05 13', '303-9637 Dictum Ave', '10332', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '03 69 87 63 45', 'ut@google.ca', '335226046', '178975781', '274718145', '372864028', '274152125', 1, '2022-05-23 16:15:26', 0, 91),
(75, '362094968', 'Vitae Diam Ltd', 'default_cover.jpg', 'default_logo.jpg', 'Nulla eu neque pellentesque massa lobortis ultrices. Vivamus rhoncus. Donec est. Nunc ullamcorper, velit in aliquet lobortis, nisi nibh lacinia', '06 42 34 58 84', '08 56 44 49 46', '937-2020 Duis Rd.', '54192', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '06 76 21 78 28', 'pretium.aliquet@hotmail.couk', '28764855', '211269960', '178999613', '39949490', '214192926', 1, '2022-05-23 16:15:26', 1, 31),
(76, '211502746', 'Amet Limited', 'default_cover.jpg', 'default_logo.jpg', 'sodales purus, in molestie tortor nibh sit amet orci. Ut sagittis lobortis mauris. Suspendisse aliquet molestie tellus. Aenean egestas hendrerit', '05 92 75 88 86', '03 55 80 65 34', 'Ap #771-1963 Fames Rd.', '5432', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '05 06 45 54 91', 'mauris@yahoo.org', '38226567K', '2249516K', '99474173', '322682220', '488422030', 1, '2022-05-23 16:15:26', 1, 52),
(77, '22573195', 'Aliquam Limited', 'default_cover.jpg', 'default_logo.jpg', 'purus ac tellus. Suspendisse sed dolor. Fusce mi lorem, vehicula et, rutrum eu, ultrices sit amet, risus. Donec nibh enim,', '07 38 48 84 78', '06 55 61 56 69', 'P.O. Box 946, 1664 Pulvinar Rd.', '971871', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '09 84 37 31 14', 'natoque.penatibus@hotmail.edu', '501139688', '3290549', '40714731', '30382927K', '121753545', 1, '2022-05-23 16:15:26', 0, 14),
(78, '5411415K', 'Urna Convallis LLC', 'default_cover.jpg', 'default_logo.jpg', 'quam a felis ullamcorper viverra. Maecenas iaculis aliquet diam. Sed diam lorem, auctor quis, tristique ac, eleifend vitae, erat. Vivamus', '05 83 54 96 57', '02 17 13 21 05', 'Ap #705-731 Mattis St.', '7861', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '07 49 39 44 41', 'sit@protonmail.ca', '155156554', '363929206', '453407896', '42174940K', '29881243', 1, '2022-05-23 16:15:26', 0, 65),
(79, '37284750', 'Lectus Corporation', 'default_cover.jpg', 'default_logo.jpg', 'fermentum metus. Aenean sed pede nec ante blandit viverra. Donec tempus, lorem fringilla ornare placerat, orci lacus vestibulum lorem, sit', '04 52 43 47 22', '02 54 58 08 77', 'Ap #630-5049 Ut St.', '8151', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '05 11 86 40 51', 'ipsum.primis@icloud.org', '351967366', '332348558', '71115933', '221982665', '83797703', 1, '2022-05-23 16:15:26', 0, 91),
(80, '35226990', 'Placerat Eget Venenatis Inc.', 'default_cover.jpg', 'default_logo.jpg', 'ornare sagittis felis. Donec tempor, est ac mattis semper, dui lectus rutrum urna, nec luctus felis purus ac tellus. Suspendisse', '07 61 41 06 31', '07 87 16 81 83', '878-6221 Amet, Avenue', 'WK3 2PC', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '01 20 63 32 15', 'augue.malesuada.malesuada@aol.com', '30142616K', '4052570K', '445358029', '41702896K', '468376105', 1, '2022-05-23 16:15:26', 1, 82),
(81, '276514962', 'Vivamus Inc.', 'default_cover.jpg', 'default_logo.jpg', 'nec, eleifend non, dapibus rutrum, justo. Praesent luctus. Curabitur egestas nunc sed libero. Proin sed turpis nec mauris blandit mattis.', '06 36 73 88 48', '07 70 46 53 72', '1897 Erat, Rd.', '175646', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '05 84 62 53 31', 'donec@hotmail.edu', '371661395', '438221050', '417661921', '46595246', '289944397', 1, '2022-05-23 16:15:26', 0, 15),
(82, '426325683', 'Nulla Eget Foundation', 'default_cover.jpg', 'default_logo.jpg', 'quis turpis vitae purus gravida sagittis. Duis gravida. Praesent eu nulla at sem molestie sodales. Mauris blandit enim consequat purus.', '04 68 28 99 55', '03 60 37 75 14', '1735 Dolor. St.', '23737', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '05 72 43 77 47', 'facilisis@hotmail.edu', '27978409K', '473308223', '355296350', '84319236', '269492139', 1, '2022-05-23 16:15:26', 1, 39),
(83, '121809745', 'Natoque Penatibus Consulting', 'default_cover.jpg', 'default_logo.jpg', 'arcu. Sed et libero. Proin mi. Aliquam gravida mauris ut mi. Duis risus odio, auctor vitae, aliquet nec, imperdiet nec,', '01 36 10 71 51', '03 62 04 22 75', 'Ap #373-166 Lorem, Avenue', '07774', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '07 67 11 11 80', 'enim@icloud.org', '34908117', '20644343K', '214041235', '24498469K', '296864226', 1, '2022-05-23 16:15:26', 1, 91),
(84, '366766537', 'Nulla Semper Inc.', 'default_cover.jpg', 'default_logo.jpg', 'diam nunc, ullamcorper eu, euismod ac, fermentum vel, mauris. Integer sem elit, pharetra ut, pharetra sed, hendrerit a, arcu. Sed', '02 25 40 60 52', '08 47 95 39 32', '305-7094 Purus. Ave', '34182', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '03 84 87 04 54', 'ullamcorper.velit.in@aol.net', '144572963', '166862191', '23149524K', '147594224', '509666083', 1, '2022-05-23 16:15:26', 1, 94),
(85, '263204271', 'Gravida Molestie Inc.', 'default_cover.jpg', 'default_logo.jpg', 'Phasellus at augue id ante dictum cursus. Nunc mauris elit, dictum eu, eleifend nec, malesuada ut, sem. Nulla interdum. Curabitur', '02 20 37 87 02', '02 52 49 51 71', 'Ap #984-6184 Condimentum. Avenue', '08484-1802', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '09 15 52 83 81', 'in.dolor@aol.ca', '43112470K', '222939275', '19698645', '173304285', '244415369', 1, '2022-05-23 16:15:26', 0, 2),
(86, '31388712K', 'Scelerisque PC', 'default_cover.jpg', 'default_logo.jpg', 'non, hendrerit id, ante. Nunc mauris sapien, cursus in, hendrerit consectetuer, cursus et, magna. Praesent interdum ligula eu enim. Etiam', '08 93 84 85 75', '08 65 39 24 82', 'P.O. Box 645, 4650 Et, St.', '675276', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '07 41 18 44 26', 'mi.aliquam@aol.edu', '372462418', '225936463', '141747657', '115069985', '366156690', 1, '2022-05-23 16:15:26', 1, 81),
(87, '235889080', 'Non Bibendum Company', 'default_cover.jpg', 'default_logo.jpg', 'malesuada augue ut lacus. Nulla tincidunt, neque vitae semper egestas, urna justo faucibus lectus, a sollicitudin orci sem eget massa.', '01 85 44 18 62', '06 77 33 34 83', 'Ap #461-9890 Erat Av.', '89527', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '04 58 76 37 53', 'velit@protonmail.edu', '322118252', '426304473', '161679593', '451976605', '3157512', 1, '2022-05-23 16:15:26', 0, 37),
(88, '291294952', 'Ut Erat Sed Corporation', 'default_cover.jpg', 'default_logo.jpg', 'malesuada augue ut lacus. Nulla tincidunt, neque vitae semper egestas, urna justo faucibus lectus, a sollicitudin orci sem eget massa.', '06 83 88 65 75', '04 38 90 31 87', 'P.O. Box 160, 2402 Ut St.', '801723', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '08 55 81 33 13', 'tempor.lorem@outlook.org', '176647892', '29432902', '37424560', '17378449K', '397649091', 1, '2022-05-23 16:15:26', 0, 93),
(89, '379986064', 'Cursus Diam PC', 'default_cover.jpg', 'default_logo.jpg', 'sollicitudin orci sem eget massa. Suspendisse eleifend. Cras sed leo. Cras vehicula aliquet libero. Integer in magna. Phasellus dolor elit,', '04 42 63 62 07', '02 33 98 56 43', 'Ap #289-2868 Vel, St.', '14-44', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '02 33 72 22 77', 'feugiat.placerat@google.com', '444112220', '509668493', '1073974', '229647725', '289301526', 1, '2022-05-23 16:15:26', 1, 97),
(90, '5650763', 'Donec Fringilla Associates', 'default_cover.jpg', 'default_logo.jpg', 'Nunc lectus pede, ultrices a, auctor non, feugiat nec, diam. Duis mi enim, condimentum eget, volutpat ornare, facilisis eget, ipsum.', '04 74 79 42 37', '09 54 80 41 17', '3980 Lacus. Avenue', '58055-7329', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '06 84 81 87 21', 'condimentum.eget@aol.com', '19293742', '439242264', '175941991', '99714786', '499864094', 1, '2022-05-23 16:15:26', 0, 96),
(91, '139871820', 'Arcu PC', 'default_cover.jpg', 'default_logo.jpg', 'lacus. Nulla tincidunt, neque vitae semper egestas, urna justo faucibus lectus, a sollicitudin orci sem eget massa. Suspendisse eleifend. Cras', '09 50 30 23 50', '07 28 11 73 37', 'Ap #980-9977 Facilisis, Rd.', '469657', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '03 24 57 21 33', 'ullamcorper.eu@outlook.edu', '288096147', '138054861', '86734281', '49343506K', '125513794', 1, '2022-05-23 16:15:26', 0, 49),
(92, '405449668', 'Odio Nam Company', 'default_cover.jpg', 'default_logo.jpg', 'sit amet, consectetuer adipiscing elit. Aliquam auctor, velit eget laoreet posuere, enim nisl elementum purus, accumsan interdum libero dui nec', '03 31 55 60 15', '02 17 58 13 37', '973-4056 Dictum Rd.', '39047', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '07 13 37 41 71', 'id.magna@google.ca', '16882925', '56756779', '171343844', '396133687', '20101326', 1, '2022-05-23 16:15:26', 1, 86),
(93, '30506871', 'Metus Eu Inc.', 'default_cover.jpg', 'default_logo.jpg', 'torquent per conubia nostra, per inceptos hymenaeos. Mauris ut quam vel sapien imperdiet ornare. In faucibus. Morbi vehicula. Pellentesque tincidunt', '05 55 77 20 75', '01 62 62 00 66', '949-1815 Egestas Ave', '8435 WE', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '08 22 75 00 63', 'est.mauris@google.net', '418068035', '508276109', '348321579', '228746053', '96774877', 1, '2022-05-23 16:15:26', 1, 95),
(94, '1454005', 'Eget Lacus Mauris Foundation', 'default_cover.jpg', 'default_logo.jpg', 'mollis. Integer tincidunt aliquam arcu. Aliquam ultrices iaculis odio. Nam interdum enim non nisi. Aenean eget metus. In nec orci.', '05 75 65 24 04', '07 26 48 73 15', 'P.O. Box 998, 7610 Amet, St.', '7113 WS', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '09 64 68 40 42', 'tincidunt.orci.quis@outlook.com', '444612452', '61696830', '126497660', '117978842', '3789043K', 1, '2022-05-23 16:15:26', 0, 99),
(95, '443604898', 'A Foundation', 'default_cover.jpg', 'default_logo.jpg', 'eget massa. Suspendisse eleifend. Cras sed leo. Cras vehicula aliquet libero. Integer in magna. Phasellus dolor elit, pellentesque a, facilisis', '09 96 96 37 57', '03 27 54 67 15', 'Ap #571-681 Accumsan Avenue', '673238', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '05 90 32 04 42', 'id@aol.org', '7809204', '122232646', '492271748', '495843556', '34567506K', 1, '2022-05-23 16:15:26', 1, 9),
(96, '257113736', 'Aenean Sed Corporation', 'default_cover.jpg', 'default_logo.jpg', 'dictum placerat, augue. Sed molestie. Sed id risus quis diam luctus lobortis. Class aptent taciti sociosqu ad litora torquent per', '06 35 74 47 28', '04 89 44 71 41', '508-932 Tincidunt St.', 'S6M 7K2', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '03 72 05 43 53', 'laoreet.lectus@yahoo.org', '2772884', '78482931', '213783572', '415485697', '205593179', 1, '2022-05-23 16:15:26', 1, 95),
(97, '412553071', 'Tincidunt Aliquam Arcu PC', 'default_cover.jpg', 'default_logo.jpg', 'habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam fringilla cursus purus. Nullam scelerisque neque sed', '09 68 12 42 70', '06 28 91 36 08', 'Ap #942-9034 Egestas. Rd.', 'EM23 4GC', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '04 13 44 41 28', 'convallis@aol.net', '109508756', '178002570', '502481479', '143729591', '63934038', 1, '2022-05-23 16:15:26', 1, 63),
(98, '16937223', 'Facilisis Lorem Tristique Institute', 'default_cover.jpg', 'default_logo.jpg', 'nunc sit amet metus. Aliquam erat volutpat. Nulla facilisis. Suspendisse commodo tincidunt nibh. Phasellus nulla. Integer vulputate, risus a ultricies', '02 56 12 33 71', '05 27 64 51 41', '5531 Adipiscing Rd.', '3991', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '06 11 13 33 87', 'ipsum.dolor@protonmail.com', '87191885', '47223679', '257692132', '94807816', '163832054', 1, '2022-05-23 16:15:26', 0, 20),
(99, '297794035', 'Tincidunt Corporation', 'default_cover.jpg', 'default_logo.jpg', 'vitae, posuere at, velit. Cras lorem lorem, luctus ut, pellentesque eget, dictum placerat, augue. Sed molestie. Sed id risus quis', '04 86 16 40 83', '01 62 38 28 12', '5282 Luctus, Rd.', '1561-3226', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '08 35 46 04 82', 'lectus@outlook.edu', '20875933', '302629617', '452871483', '233918008', '243139554', 1, '2022-05-23 16:15:26', 1, 75),
(100, '30311787', 'Dictum Phasellus Incorporated', 'default_cover.jpg', 'default_logo.jpg', 'Proin sed turpis nec mauris blandit mattis. Cras eget nisi dictum augue malesuada malesuada. Integer id magna et ipsum cursus', '05 64 69 86 77', '02 51 53 44 16', 'Ap #911-8395 Euismod Street', '96755', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3048010026873!2d7.71587526144589!3d36.81406215439563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f009d6cf18ddf1%3A0x941ecc1171205b62!2sAmphi%2012%20%3A%20Bloc%20Informatique%20UBMA!5e1!3m2!1sfr!2sdz!4v1653314013284!5m2!1sfr!2sdz\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '07 72 64 80 22', 'massa@aol.com', '109134104', '373191973', '424456438', '39753961K', '324061282', 1, '2022-05-23 16:15:26', 0, 25),
(101, 'd35aaa4a', 'olompia', 'pic', 'logo', 'welcome to hell', '065749394', '04485849', 'ADRRESS', '23232323', 'MAP', '0674784848', 'email@email.com', '999', '888', '777', '666', '555', 1, '2022-05-26 15:39:54', 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `payment`
--

CREATE TABLE `payment` (
  `id_payment` bigint(19) NOT NULL,
  `number_payment` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `note_payment` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `amount_payment` bigint(10) DEFAULT NULL,
  `deposit_payment` bigint(19) DEFAULT NULL,
  `rest_payment` bigint(19) DEFAULT NULL,
  `add_date_payment` datetime DEFAULT current_timestamp(),
  `complet_date_payment` datetime DEFAULT NULL,
  `type_payment` tinyint(4) DEFAULT NULL,
  `contract_payment` bigint(19) DEFAULT NULL,
  `subscription_payment` bigint(19) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `payment`
--

INSERT INTO `payment` (`id_payment`, `number_payment`, `note_payment`, `amount_payment`, `deposit_payment`, `rest_payment`, `add_date_payment`, `complet_date_payment`, `type_payment`, `contract_payment`, `subscription_payment`) VALUES
(9, 'a2bea60e', 'C que pour tester : a2bea60e', 2000, 1500, 500, '2022-06-04 14:49:52', '2022-06-04 00:00:00', 0, 6, 0),
(4, '4564645', 'ras', 2000, 2000, 0, '2022-06-03 19:03:18', '0000-00-00 00:00:00', 0, 0, 2),
(10, '29270704', 'TEST', 123456, 1000, 122456, '2022-06-04 17:34:45', '2022-07-01 00:00:00', 2, 0, 0),
(8, '808cfda3', 'C que pour tester : 2cb896c8', 2000, 1500, 500, '2022-06-04 14:45:40', '2022-06-04 00:00:00', 0, 0, 0),
(6, 'bb244239', 'FINISHED', 2000, 2000, 0, '2022-05-26 15:49:13', '2022-05-26 00:00:00', 1, 0, 32),
(7, 'b1d3acfc', 'FINISHED', 2000, 2000, 0, '2022-05-31 18:44:14', '2022-05-31 00:00:00', 1, 0, 35),
(11, 'd62346f3', 'TESTTEST', 200000, 1, 199999, '2022-06-04 18:09:34', '0000-00-00 00:00:00', 1, 23, 0);

-- --------------------------------------------------------

--
-- Structure de la table `person`
--

CREATE TABLE `person` (
  `id_person` bigint(19) NOT NULL,
  `access_number_person` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name_person` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name_person` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo_person` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birthday_person` date DEFAULT NULL,
  `mobile_person` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_person` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_person` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `postal_code_person` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender_person` tinyint(4) DEFAULT NULL,
  `username_person` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_person` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `add_date_person` datetime DEFAULT NULL,
  `type_person` tinyint(4) DEFAULT NULL,
  `state_person` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `person`
--

INSERT INTO `person` (`id_person`, `access_number_person`, `first_name_person`, `last_name_person`, `photo_person`, `birthday_person`, `mobile_person`, `email_person`, `address_person`, `postal_code_person`, `gender_person`, `username_person`, `password_person`, `add_date_person`, `type_person`, `state_person`) VALUES
(8, 'b0f032d1', 'Alta&iuml;r', 'IbnLaAhad', 'default_profile.jpg', NULL, '', '', '', '', 0, '111', '111', NULL, 2, 1),
(14, '01717a43', 'Chems eddien', 'Dih', 'default_profile.jpg', NULL, '0675495649', 'dih.chemseddien@yahoo.com', 'annaba', '123456', 1, 'YUJIRO', '123456', NULL, 5, 1),
(6, '949cb993', 'ezio', 'Auditore', 'default_profile0.jpg', NULL, '', '', '', '', 0, '222', '222', NULL, 2, 1),
(7, '74750f6c', 'Connor', '', 'default_profile3.jpg', NULL, '', '', '', '', 0, '333', '333', NULL, 1, 1),
(9, '2cf75146', 'Edward Kenway', '', 'default_profile0.jpg', NULL, '', '', '', '', 0, '555', '555', NULL, 1, 1),
(10, '09ba3316', 'test', 'test', 'default_profile.jpg', '1111-11-11', '1111111', '11111', '&1111', '1111111', 1, '1111111', '1111111', NULL, 2, 0),
(11, 'b2f83fb9', 'new', 'new', 'default_profile.jpg', '2222-02-22', 'new', 'new', 'new', 'new', 1, 'new', 'new', NULL, 2, 1),
(23, '939bfffd', '', '', '', '0000-00-00', '', '', '', '', 0, '55555', '55555', NULL, 1, 1),
(16, 'f5ec781b', '', '', '', '2022-05-26', '', '', '', '', 0, '', '', NULL, 1, 1),
(17, '13e98978', '', '', '', '2022-05-26', '', '', '', '', 0, '', '', NULL, 1, 1),
(18, '5dcce948', '', '', '', '2022-05-26', '', '', '', '', 0, '', '', NULL, 1, 1),
(19, '6300973f', '', '', '', '2022-05-26', '', '', '', '', 0, '', '', NULL, 1, 1),
(20, 'e1266637', '', '', 'default_profile.jpg', '0000-00-00', '', '', '', '', 0, '', '', NULL, 1, 1),
(21, '6442ffa3', '', '', 'default_profile.jpg', '0000-00-00', '', '', '', '', 0, '', '', NULL, 1, 1),
(22, '81d0fb85', 'Arthur', 'Morgan', '', '1970-08-15', '0673695349', 'michoudih@gmail.com', 'home', '232323', 1, 'RDR', 'RDR', NULL, 1, 1),
(25, '86a19cee', '', '', '', '0000-00-00', '', '', '', '', 0, '08023e014c760c078af3680f7935a6b3', 'b662f6cfbc7457c57a2512bb9a2b7c06', NULL, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `subscription`
--

CREATE TABLE `subscription` (
  `id_subscription` bigint(19) NOT NULL,
  `number_subscription` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `period_subscription` tinyint(4) DEFAULT NULL,
  `front_idcard_subscription` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `back_idcard_subscription` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `medical_form_subscription` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parental_authorization_subscription` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tutor_subscription` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_tutor_subscription` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_begining_subscription` date DEFAULT NULL,
  `date_ending_subscription` date DEFAULT NULL,
  `add_date_subscription` datetime DEFAULT current_timestamp(),
  `member_subscription` bigint(19) DEFAULT NULL,
  `group_subscription` bigint(19) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `subscription`
--

INSERT INTO `subscription` (`id_subscription`, `number_subscription`, `period_subscription`, `front_idcard_subscription`, `back_idcard_subscription`, `medical_form_subscription`, `parental_authorization_subscription`, `tutor_subscription`, `phone_tutor_subscription`, `date_begining_subscription`, `date_ending_subscription`, `add_date_subscription`, `member_subscription`, `group_subscription`) VALUES
(2, 'ae0f8f5d', NULL, '', '', '', NULL, '', '', '2022-05-16', '0000-00-00', NULL, NULL, 14),
(3, 'aad58409', 0, '', '', '', NULL, '', NULL, '2022-05-17', '0000-00-00', NULL, NULL, 0),
(4, '3a230bb3', 0, '', '', '', NULL, '', NULL, '2022-05-17', '0000-00-00', NULL, NULL, 0),
(5, 'e0f6d9be', 0, '', '', '', NULL, '', NULL, '2022-05-17', '0000-00-00', NULL, NULL, 0),
(6, '436bb3a2', 0, '', '', '', NULL, '', NULL, '2022-05-17', '0000-00-00', NULL, NULL, 0),
(21, 'ecd0c0d7', 3, 'qfdds', 'dsfds', 'dsfds', 'sfsdfd', 'dsfesd', '11', '3232-02-23', '3233-02-23', '2022-06-02 15:40:25', 0, 0),
(8, 'cf0a8a9a', 0, 'front', 'back', 'mediczl', NULL, 'non', NULL, '2022-06-24', '2022-05-24', '2022-05-26 15:58:59', NULL, 0),
(9, 'a945678b', 0, 'front', 'back', 'mediczl', '', 'non', '86868585', '2022-06-24', '2022-05-24', '2022-05-26 16:02:40', 0, 0),
(10, 'ccc461cd', 0, 'front', 'back', '', '', '', '', '0000-00-00', '0000-00-00', '2022-05-26 16:03:00', 0, 0),
(11, 'e565095b', 0, 'front', 'back', 'mediczl', '', 'non', '5', '2021-01-11', '2021-02-11', '2022-05-26 16:03:53', 0, 0),
(12, '756dedf3', 0, 'front', 'back', 'mediczl', '', 'non', '5', '2021-01-11', '2021-02-11', '2022-05-26 16:06:07', 0, 0),
(13, '501ec071', 0, 'F', 'B', 'M', '', 'T', '1', '1111-11-11', '2222-02-22', '2022-05-26 16:06:48', 0, 0),
(14, '0584358d', 0, 'F', 'B', 'M', '', 'T', '1', '1111-11-11', '2222-02-22', '2022-05-26 16:09:34', 0, 0),
(15, '0907305d', 0, 'F', 'B', 'M', '', 'T', '1', '0000-00-00', '0000-00-00', '2022-05-26 16:11:42', 0, 0),
(16, 'e7289c7c', 1, 'F', 'B', 'M', '', 'T', '1', '0000-00-00', '0000-00-00', '2022-05-26 16:13:22', 0, 0),
(17, 'ee00bcd6', 1, 'F', 'B', 'M', '', 'T', '1', '1111-11-11', '2222-02-22', '2022-05-26 16:15:00', 0, 0),
(18, 'd432734c', 0, '', '', '', '', '', '', '0000-00-00', '0000-00-00', '2022-05-26 16:15:15', 0, 0),
(19, 'e8781a09', 0, '', '', '', 'FFF', '', '', '0000-00-00', '0000-00-00', '2022-05-26 16:16:19', 0, 0),
(20, 'a6b46404', 3, 'my', 'my', 'my', 'my', 'tt', '-99988797', '4567-04-24', '0000-00-00', '2022-05-31 18:47:38', 0, 0),
(22, 'a6c65a7d', 0, '', '', '', '', '', '', '2022-06-22', '1999-06-24', '2022-06-02 16:06:28', 0, 0),
(23, '99016978', 0, '', '', '', '', '', '', '2022-06-24', '1999-06-24', '2022-06-02 16:08:59', 0, 0),
(24, '913682d7', NULL, '', '', '', NULL, '', NULL, '2022-06-02', '1999-06-24', '2022-06-02 16:10:46', NULL, 0),
(25, '4d210b7c', NULL, '', '', '', NULL, '', '', '2022-06-02', '1999-06-24', '2022-06-02 16:11:43', NULL, 0),
(26, '76cc14bb', NULL, '', '', '', NULL, '', '', '2022-06-02', '1999-06-24', '2022-06-02 16:13:39', NULL, 0),
(27, '3b4cb18a', NULL, '', '', '', NULL, '', '', '2022-06-02', '1999-06-24', '2022-06-02 16:16:51', NULL, 0),
(28, '524afccf', NULL, '', '', '', NULL, '', '', '2022-01-01', '2022-10-01', '2022-06-02 16:20:57', NULL, 0),
(29, 'ff0e6adb', NULL, '', '', '', NULL, '', '', '2022-01-01', '2022-10-01', '2022-06-02 16:21:19', NULL, 0),
(30, '5f527ec3', NULL, '', '', '', NULL, '', '', '0000-00-00', '0000-00-00', '2022-06-02 23:06:56', NULL, 0),
(31, '50104fed', NULL, '', '', '', NULL, '', '', '2022-06-03', '0000-00-00', '2022-06-03 15:22:17', NULL, 0),
(32, '159874522', 1, 'default_front_idcard.jpg', 'default_back_idcard.jpg', 'default_medical_form.jpg', NULL, NULL, NULL, '2022-06-03', '2022-07-03', '2022-06-03 16:28:12', 8, 2),
(33, '5c897671', NULL, '', '', '', NULL, '', '', '2022-07-03', '2022-08-03', '2022-06-03 17:38:51', 8, 2),
(34, '6177943d', NULL, '', '', '', NULL, '', '', '2022-08-05', '2022-09-05', '2022-06-03 17:59:03', 8, 2),
(35, 'cc4e99e7', NULL, '', '', '', NULL, '', '', '2022-01-20', '2022-06-01', '2022-06-03 19:30:31', 6, 2);

-- --------------------------------------------------------

--
-- Structure de la table `worker`
--

CREATE TABLE `worker` (
  `id_worker` bigint(19) NOT NULL,
  `access_number_worker` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name_worker` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name_worker` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo_worker` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birthday_worker` date DEFAULT NULL,
  `mobile_worker` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_worker` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_worker` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `postal_code_worker` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ssn_worker` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender_worker` tinyint(4) DEFAULT NULL,
  `username_worker` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_worker` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `add_date_worker` datetime DEFAULT NULL,
  `type_worker` tinyint(4) DEFAULT NULL,
  `state_worker` tinyint(4) DEFAULT NULL,
  `idg` bigint(19) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `worker`
--

INSERT INTO `worker` (`id_worker`, `access_number_worker`, `first_name_worker`, `last_name_worker`, `photo_worker`, `birthday_worker`, `mobile_worker`, `email_worker`, `address_worker`, `postal_code_worker`, `ssn_worker`, `gender_worker`, `username_worker`, `password_worker`, `add_date_worker`, `type_worker`, `state_worker`, `idg`) VALUES
(3, '', 'altai', 'ibnlaahd', 'default_profile9.jpg', NULL, '', '', '', '', NULL, 1, 'ac', 'ac', NULL, 3, 1, 105),
(7, 'a933c1c3', 'Worker', '6', 'default_profile.jpg', '0000-00-00', '', '', '', '', NULL, 0, '', '', NULL, 3, 1, 105),
(12, '0369fe69', 'me', 'me', 'default_profile9.jpg', '1999-06-24', '00555', '', '', '', NULL, 3, '000', '000', NULL, 4, 1, 105),
(11, '07db0071', '', '', '', '0000-00-00', '', '', '', '', NULL, 0, 'YUJIRO', '123456', NULL, 0, 1, 105),
(8, 'a5512589', '', '', 'default_profile.jpg', '0000-00-00', '', '', '', '', NULL, 0, '', '', NULL, 0, 1, 105),
(9, '74ab647d', 'name', '', '', '0000-00-00', '', '', '', '', NULL, 0, '', '', NULL, 0, 1, 105),
(10, '3bbf4aa0', 'firstname', 'lastname', 'default_logo.jpg', '1111-11-11', '1111111', 'email@email.com', '123456', '12345', NULL, 2, '232323', '232323', NULL, 0, 1, 10);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `assiduity`
--
ALTER TABLE `assiduity`
  ADD PRIMARY KEY (`id_assiduity`),
  ADD KEY `FK_subscription_has_assiduities` (`subscription_assiduity`);

--
-- Index pour la table `contract`
--
ALTER TABLE `contract`
  ADD PRIMARY KEY (`id_contract`),
  ADD KEY `FK_gym_has_contracts` (`gym_contract`),
  ADD KEY `FK_worker_has_contract` (`worker_contract`);

--
-- Index pour la table `group`
--
ALTER TABLE `group`
  ADD PRIMARY KEY (`id_group`),
  ADD KEY `FK_gym_has_groups` (`gym_group`);

--
-- Index pour la table `gym`
--
ALTER TABLE `gym`
  ADD PRIMARY KEY (`id_gym`),
  ADD KEY `FK_manager_has_gyms` (`manager_gym`);

--
-- Index pour la table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id_payment`),
  ADD KEY `FK_subscription_has_payments` (`subscription_payment`),
  ADD KEY `FK_contract_has_payments` (`contract_payment`);

--
-- Index pour la table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id_person`);

--
-- Index pour la table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`id_subscription`),
  ADD KEY `FK_member_has_subscriptions` (`member_subscription`),
  ADD KEY `FK_group_has_subscriptions` (`group_subscription`);

--
-- Index pour la table `worker`
--
ALTER TABLE `worker`
  ADD PRIMARY KEY (`id_worker`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `assiduity`
--
ALTER TABLE `assiduity`
  MODIFY `id_assiduity` bigint(19) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `contract`
--
ALTER TABLE `contract`
  MODIFY `id_contract` bigint(19) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `group`
--
ALTER TABLE `group`
  MODIFY `id_group` bigint(19) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `gym`
--
ALTER TABLE `gym`
  MODIFY `id_gym` bigint(19) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT pour la table `payment`
--
ALTER TABLE `payment`
  MODIFY `id_payment` bigint(19) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `person`
--
ALTER TABLE `person`
  MODIFY `id_person` bigint(19) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `id_subscription` bigint(19) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT pour la table `worker`
--
ALTER TABLE `worker`
  MODIFY `id_worker` bigint(19) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

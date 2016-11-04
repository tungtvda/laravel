-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 04 Novembre 2016 à 11:12
-- Version du serveur :  10.1.9-MariaDB
-- Version de PHP :  5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `laravel`
--

-- --------------------------------------------------------

--
-- Structure de la table `cates`
--

CREATE TABLE `cates` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `keywords` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `cates`
--

INSERT INTO `cates` (`id`, `name`, `alias`, `order`, `parent_id`, `keywords`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Giày', 'GT', 1, 0, 'giay', 'giay', '2016-07-27 01:00:00', NULL),
(2, 'Dép', 'DP', 2, 1, 'fdas', 'ádf', NULL, NULL),
(3, 'Quần âu', 'QA', 3, 1, 'quan', 'quan', NULL, NULL),
(4, 'Quần', 'Q', 4, 0, NULL, NULL, NULL, NULL),
(5, 'Quần bò', 'QB', 5, 0, NULL, NULL, NULL, NULL),
(6, 'sdsdaf', 'sdf', 0, 0, 'sadf', 'sadf', NULL, NULL),
(7, '123', '123', 0, 0, '123', '123', NULL, NULL),
(8, 'Dep nhua', 'sfda', 0, 0, NULL, NULL, NULL, NULL),
(9, 'test', '12', 0, 2, NULL, NULL, NULL, NULL),
(10, 'Test2', 'test2', 0, 9, NULL, NULL, NULL, NULL),
(11, 'Test3', 'test3', 0, 9, NULL, NULL, NULL, NULL),
(12, 'Test4', 'test5', 0, 9, NULL, NULL, NULL, NULL),
(13, 'gfhdfgh', NULL, 0, 0, NULL, NULL, NULL, NULL),
(33, 'dfh', NULL, 0, 0, NULL, NULL, NULL, NULL),
(35, 'ddsgfdfh', NULL, 0, 0, NULL, NULL, NULL, NULL),
(37, 'cdfdfh', NULL, 0, 0, NULL, NULL, NULL, NULL),
(40, 'cdfdfhasfsadf', NULL, 0, 0, NULL, NULL, NULL, NULL),
(45, 'cdfdfhasfasdfasdfsadf', NULL, 0, 0, NULL, NULL, NULL, NULL),
(48, 'cdfdfhasdsffasdfasdfsadf', NULL, 0, 0, NULL, NULL, NULL, NULL),
(51, 'cdfdfhasdsffasdfasdsadffsadf', NULL, 0, 0, NULL, NULL, NULL, NULL),
(53, 'sdafasf', NULL, 0, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_07_04_033153_create_model_nude_table', 1),
('2016_07_04_033256_create_model_image_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `model_image`
--

CREATE TABLE `model_image` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `model_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `model_image`
--

INSERT INTO `model_image` (`id`, `name`, `image`, `model_id`, `created_at`) VALUES
(1, 'test', 'test.jpg', 1, NULL),
(2, 'test2', 'test2.jpg', 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `model_nude`
--

CREATE TABLE `model_nude` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `round_brest` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `waist_size` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `round_hip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dress_size` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shore_size` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hair_color` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `eye_color` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `height` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `model_nude`
--

INSERT INTO `model_nude` (`id`, `name`, `email`, `password`, `address`, `phone`, `avatar`, `round_brest`, `waist_size`, `round_hip`, `dress_size`, `shore_size`, `hair_color`, `eye_color`, `height`, `created_at`) VALUES
(1, 'fsdf', 'sdaf', 'dsaf', 'fasfasdd', 'sad', 'asdfsdfsd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'fsdf', 'erbcdfh', 'dsaf', 'fasfasdd', 'sad', 'asdfsdfsd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'fsdf', 'erbcdfhsdfasd', 'dsaf', 'fasfasdd', 'sad', 'asdfsdfsd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'fsdf', 'erbcdfhsdfasdqwdf', 'dsaf', 'fasfasdd', 'saddfg', 'asdfsdfsd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` int(11) NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `gender`, `phone`, `address`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Trần Văn Tùng', 'tungtv.soict@gmail.com', '$2y$10$ozXFtuZMNxCPBkVFLQZPt.wTNcTVg.8YFWMA63cM9yL5hUraL2mE2', 'Aq1Yq0JoUHP7hUkfyZjFIA2FkoYCYlmjrJGHBAaUTbe6mEuS4TjmekOR0npS', 0, '01676331802', 'Vân Nội, Đông Anh, Hà Nội', 1, '2016-07-12 01:38:18', '2016-07-12 02:07:15'),
(4, 'Trần Thanh Tuyền', 'tuyen@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 'Aq1Yq0JoUHP7hUkfyZjFIA2FkoYCYlmjrJGHBAaUTbe6mEuS4TjmekOR0npSs', 1, NULL, NULL, 0, '2016-11-03 17:00:00', '2016-11-03 17:00:00');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `cates`
--
ALTER TABLE `cates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cates_name_unique` (`name`);

--
-- Index pour la table `model_image`
--
ALTER TABLE `model_image`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `model_image_image_unique` (`image`),
  ADD KEY `model_image_model_id_foreign` (`model_id`);

--
-- Index pour la table `model_nude`
--
ALTER TABLE `model_nude`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `model_nude_email_unique` (`email`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `cates`
--
ALTER TABLE `cates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT pour la table `model_image`
--
ALTER TABLE `model_image`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `model_nude`
--
ALTER TABLE `model_nude`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `model_image`
--
ALTER TABLE `model_image`
  ADD CONSTRAINT `model_image_model_id_foreign` FOREIGN KEY (`model_id`) REFERENCES `model_nude` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

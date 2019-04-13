-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2019 at 04:39 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mobile` varchar(50) NOT NULL,
  `isdelete` tinyint(1) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `logo` varchar(500) DEFAULT NULL,
  `details` text,
  `tel` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `mobile`, `isdelete`, `created_at`, `updated_at`, `user_id`, `logo`, `details`, `tel`) VALUES
(16, 'Lama', 'lama1997banna@gmail.com', 'wwww', 0, '2018-06-05 17:30:42', '2018-06-05 17:30:42', 82, '30d7c736-c545-45d7-8fa6-80e4412bbc62.jpeg', NULL, 'wwwww'),
(18, 'malak', 'malak.2000banna@gmail.com', '0592684956', 0, '2018-06-26 07:43:39', '2018-06-26 07:43:39', 85, '58f9dbb7-5c11-4661-8225-491dc9c4379d.PNG', 'rrrrrrrrrrrrrrrrr', '78654333'),
(19, 'Entesar', 'malak.2000banna@gmail.com', '000000', 0, '2018-08-02 14:56:48', '2018-08-02 14:56:48', 87, NULL, NULL, 'eeeeeeeeeeeee'),
(20, 'Entesar', 'entesar.2000banna@gmail.com', 'eeeeeeeeeee', 0, '2018-08-02 14:59:08', '2018-08-02 14:59:08', 88, NULL, NULL, 'eeeeeeeeeeeee'),
(21, 'Entesar', 'lama1997banna@gmail.com', 'nn', 0, '2018-08-05 13:14:41', '2018-08-05 13:14:41', 89, NULL, 'wwwwwwwwww', 'eeeeeeeeeeeee'),
(22, 'Entesar', 'kkn@gmail.com', '000000', 0, '2018-08-05 13:59:47', '2018-08-05 13:59:47', 90, NULL, 'vg', 'eeeeeeeeeeeee'),
(23, 'lllllll', 'enotesar.2000banna@gmail.com', 'nn', 0, '2018-08-07 07:32:41', '2018-08-07 07:32:41', 91, '74a3c05a-8ca6-44a8-9e24-5e3277d50941.PNG', 'eeeeeeeeee', 'eeeeeeeeeeeee'),
(24, 'mama ElBanna', 'mama.2000banna@gmail.com', '0592684950', 0, '2018-09-15 03:30:15', '2018-09-15 03:30:15', 92, NULL, 'rrrrrrrrrrr', '0592684950'),
(25, 'nono', 'sara.2000banna@gmail.com', '9999999', 0, '2019-01-31 12:47:28', '2019-01-31 12:47:28', 93, NULL, 'ggggggggg', '555555'),
(26, 'new', 'saranew.2000banna@gmail.com', '0592684956', 0, '2019-02-04 01:58:37', '2019-02-04 01:58:37', 94, 'b0b2c3e7-d1c7-4a3f-ba95-d952699eda0c.PNG', 'ffffffffffffffffg', '555555'),
(27, '0592684956', 'rawandnew.2000banna@gmail.com', '0592684956', 0, '2019-02-04 02:37:35', '2019-02-04 02:37:35', 95, NULL, 'iiiiiiiiiii', '0592684956'),
(28, '0592684956', 'saraii.2000banna@gmail.com', '0592684956', 0, '2019-02-04 02:47:01', '2019-02-04 02:47:01', 96, NULL, NULL, '0592684956'),
(29, 'oo', 'rawandt.2000banna@gmail.com', 'gg', 0, '2019-02-04 03:24:25', '2019-02-04 03:24:25', 97, NULL, NULL, 'ggg');

-- --------------------------------------------------------

--
-- Table structure for table `admin_link`
--

CREATE TABLE `admin_link` (
  `admin_id` int(11) NOT NULL,
  `link_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `link`
--

CREATE TABLE `link` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `showinmenu` tinyint(1) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `link_type`
--

CREATE TABLE `link_type` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `link_type`
--

INSERT INTO `link_type` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'company'),
(3, 'seeker');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 2),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 2),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 2),
(6, '2016_06_01_000004_create_oauth_clients_table', 2),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `names`
--

CREATE TABLE `names` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `isdelete` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mobile` varchar(50) NOT NULL,
  `logo` varchar(50) DEFAULT NULL,
  `details` text,
  `tel` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `names`
--

INSERT INTO `names` (`id`, `name`, `isdelete`, `created_at`, `updated_at`, `email`, `mobile`, `logo`, `details`, `tel`) VALUES
(17, ',,,,,,,,,', 0, '2018-05-21 00:20:20', '2018-05-21 00:40:35', 'rl@gmail.com', ',,,,,,,,,', '63c660c1-51f9-4a0b-8880-f6ea8b4ac90b.png', 'mmmmmmmm', ',,,,,,,,,,,'),
(18, 'kkkkkkkkk', 0, '2018-05-21 05:51:14', '2018-06-05 15:13:59', 'fgbv@gmail.com', 'ppppppppp', 'edbef7b4-a320-489f-bfe5-3e4ea5ead1e2.jpeg', NULL, '[[[[[[[[[['),
(22, 'kkkk', 0, '2018-06-04 17:56:42', '2018-06-04 17:56:42', 'wwooww@gmail.com', 'wwww', '5ab3d7a9-d2b8-44f2-99c8-1fdc2e6e6c4b.jpeg', 'wwwwww', 'wwwwwwwwww'),
(26, 'iiiiii', 0, '2019-02-04 03:01:16', '2019-02-04 03:01:16', 'info@info.ps', '88888', NULL, NULL, 'iiiiii');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `client_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('a9d5538ff2a5f30c6e669a1a6a3746193f321c616125fcc787a3fbf8bde7fcdd5db224a24693b72f', 92, 2, NULL, '[]', 0, '2018-09-15 00:58:43', '2018-09-15 00:58:43', '2019-09-15 03:58:43');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'php artisan passport:client', 'uG902MQeF3ulfXkMUqPIKObCs9H0Jy4DQEmbeTnE', 'http://localhost', 0, 1, 0, '2018-09-15 00:51:38', '2018-09-15 00:51:38'),
(2, 92, 'mama', 'vYxrYaZoVkL6odaPI49vNDRExXCgUOiuRqq3XrYc', '/index', 0, 1, 0, '2018-09-15 00:52:20', '2018-09-15 00:52:20');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_refresh_tokens`
--

INSERT INTO `oauth_refresh_tokens` (`id`, `access_token_id`, `revoked`, `expires_at`) VALUES
('d968de5b92d1bd696df14655aeca65a790560bbb41c518d98874b010e409244aaae8da3c327db702', 'a9d5538ff2a5f30c6e669a1a6a3746193f321c616125fcc787a3fbf8bde7fcdd5db224a24693b72f', 0, '2019-09-15 03:58:43');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('yaser@gmail.com', '$2y$10$.PTOse2pTk3rJdEvN74CJemwA10DNlSl7uL1e5mAD4Iydgzmgj8pS', '2018-05-09 11:28:11'),
('mhd@aa.com', '$2y$10$iu8L9mfCMhgczaHrW2NyyOIExyjlQVfQChGY5SPyFS/88hxGEYTGi', '2018-05-13 11:41:24'),
('nono.2000banna@gmail.com', '$2y$10$LIDTXGA/zfuQsP.plCoTJefb63XL71Yui0Cys.IsRoEyRGoWFgJui', '2018-05-19 22:29:43'),
('entesar.2000banna@gmail.com', '$2y$10$EPboS67S4EaFRwmmwlW0k.thcwbSPMCUeJ5nuDkWIYBNrTGA5BlMu', '2018-09-22 04:59:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `api_token` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `api_token`, `mobile`, `logo`) VALUES
(87, 'Entesar', 'malak.2000banna@gmail.com', '$2y$10$c7rijmiZbpGTTglw7MbJFOJGEe431wxFHzdz5SYdR5fMTcfNWpUfm', 'U5axxuopuPpmzBkGhcxRq0NMdZ19E6U4jRZalzkOLVXkA6Jg8ebn38fh7uZy', '2018-08-02 11:56:47', '2018-08-02 11:56:47', NULL, NULL, NULL),
(88, 'Entesar', 'entesar.2000banna@gmail.com', '$2y$10$fE.cS8FPKcgx784c35/f8eGyGIXX9kz7bMGJq1Hmu5ko1sBFR2mVK', 'I6qiHdpz6bqPyqWFtoaS1DbQQ17dQDdge2sXbH9rNdYxtT4uA0Q3SbzahMJV', '2018-08-02 11:59:07', '2018-08-06 02:43:45', NULL, NULL, NULL),
(89, 'Entesar', 'lama1997banna@gmail.com', '$2y$10$MXufGym6pKiLuiQy4F4VluZ89tTJUGgd1.o1lN/NMZB2/UcJExyAK', NULL, '2018-08-05 10:14:41', '2018-08-05 10:14:41', NULL, NULL, NULL),
(90, 'Entesar', 'kkn@gmail.com', '$2y$10$N4rEpXHleLITWGhf6IwSDu/MjhzuS2keKkpMIXnmR.vXiibTc7DTS', NULL, '2018-08-05 10:59:47', '2018-08-05 10:59:47', NULL, NULL, NULL),
(91, 'lllllll', 'enotesar.2000banna@gmail.com', '$2y$10$OVNVjgB1fj/L.5WWpWRuBOuTUR6vrmHX2Vbw2/gSiRfrZBdQVFQMS', 'dWfbOH2H9ezfG8yRVxTaMYRA8496FJ5SUAjKZWjmAaUFbyqLF56SI6G6XI4w', '2018-08-07 04:32:41', '2018-08-07 04:32:41', NULL, NULL, NULL),
(92, 'mama ElBanna', 'mama.2000banna@gmail.com', '$2y$10$N7qrbhQqmZWk.buGEdvXi.TOXaUF9ueQD72n2Iy4V3VnO2I9w6K.e', 'ME6RTBjbTOgVr0Gml9THZ8thojmk76fkVnQ2IB8MyZ87l1Tu9cqGxZMxOi9p', '2018-09-15 00:30:14', '2018-09-15 00:30:14', NULL, NULL, NULL),
(93, 'nono', 'sara.2000banna@gmail.com', '$2y$10$bIGJ2kaOcFlzELcscPBUUuhbCa.ISsxppHJoyuwS7h.8PO2F8FWgS', NULL, '2019-01-31 10:47:28', '2019-01-31 10:47:28', NULL, NULL, NULL),
(94, 'new', 'saranew.2000banna@gmail.com', '$2y$10$b0QMxQSVTWFBr0ffQrkTfuAx2fhdJwwDwkZeV6NiD4omW8/CdjmMq', 'hd0i1BBIKfT6FkxHSimYc5djlV4Q6OcmQdDbXwa7wT24lTGPSHOXTWRNgeui', '2019-02-03 23:58:37', '2019-02-03 23:58:37', NULL, NULL, NULL),
(95, '0592684956', 'rawandnew.2000banna@gmail.com', '$2y$10$2jnpubsBnkCQxenMNuIVe.C.Vb46RRqWzwn5yTe8IhLBOLYj/A6u2', 'TjtSQ8WeBOs0jGZlXsCcXP8lOaymBDiTbnCZd6QnJtAyAAoenH919anqVDz3', '2019-02-04 00:37:34', '2019-02-04 00:37:34', NULL, NULL, NULL),
(96, '0592684956', 'saraii.2000banna@gmail.com', '$2y$10$7uLyi6CVmEwI87qZhkHFDuMUkJ7/HKiRw8PIJNhsD2oxOy9L9n5d6', '2LRjP9tffzqbLu1Ug3O8yIe6MjiZQJWf80I2AVM9bf8YuiM1zGJ7XdTIeCRR', '2019-02-04 00:47:01', '2019-02-04 00:47:01', NULL, NULL, NULL),
(97, 'oo', 'rawandt.2000banna@gmail.com', '$2y$10$9F2.7TnE0Y/VsQFnSOQPUO.odwRVp96RuaP2iFUwnEvsGECprUwoK', NULL, '2019-02-04 01:24:25', '2019-02-04 01:24:25', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_link`
--
ALTER TABLE `admin_link`
  ADD PRIMARY KEY (`admin_id`,`link_id`);

--
-- Indexes for table `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `link_type`
--
ALTER TABLE `link_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `names`
--
ALTER TABLE `names`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `link`
--
ALTER TABLE `link`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `link_type`
--
ALTER TABLE `link_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `names`
--
ALTER TABLE `names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

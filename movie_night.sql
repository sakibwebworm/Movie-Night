-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2016 at 12:04 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie_night`
--

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_07_19_185933_create_sliders_table', 1),
('2016_07_19_204019_create_cards_table', 1),
('2016_07_20_205737_create_roles_table', 1),
('2016_07_20_205946_create_role_user_pivot_table', 1),
('2016_07_25_210246_create_movies_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(10) UNSIGNED NOT NULL,
  `original_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `overview` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `poster_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `original_title`, `overview`, `poster_path`, `video`, `created_at`, `updated_at`, `user_id`) VALUES
(5, 'Easy A', 'After a little white lie about losing her virginity gets out, a clean cut high school girl sees her life paralleling Hester Prynne''s in "The Scarlet Letter," which she is currently studying in school - until she decides to use the rumor mill to advance he', 'https://image.tmdb.org/t/p/w185//1pgPO3OfSm2inpODMqg2RNmLW90.jpg', 'https://laracasts.com/series/search-as-a-service/episodes/1', '2016-08-03 18:08:10', '2016-08-03 18:08:10', 0),
(6, 'Easy A', 'After a little white lie about losing her virginity gets out, a clean cut high school girl sees her life paralleling Hester Prynne''s in "The Scarlet Letter," which she is currently studying in school - until she decides to use the rumor mill to advance he', 'https://image.tmdb.org/t/p/w185//1pgPO3OfSm2inpODMqg2RNmLW90.jpg', 'https://laracasts.com/discuss/channels/laravel/typeahead-not-working-with-laravel-51', '2016-08-03 20:26:31', '2016-08-03 20:26:31', 0),
(7, '12 Years a Slave', 'In the pre-Civil War United States, Solomon Northup, a free black man from upstate New York, is abducted and sold into slavery. Facing cruelty as well as unexpected kindnesses Solomon struggles not only to stay alive, but to retain his dignity. In the twe', 'https://image.tmdb.org/t/p/w185//kb3X943WMIJYVg4SOAyK0pmWL5D.jpg', 'https://laracasts.com/discuss/channels/laravel/typeahead-not-working-with-laravel-51', '2016-08-03 20:26:41', '2016-08-03 20:26:41', 0),
(8, 'A Clockwork Orange', 'The head of a gang of toughs, in an insensitive futuristic society, is conditioned to become physically ill at sex and violence during a prison sentence. When he is released, he''s brutally beaten by all of his old adversaries.', 'https://image.tmdb.org/t/p/w185//hJYwfHxh9O7lyF7hTIT7ZoP8FYQ.jpg', 'https://laracasts.com/discuss/channels/laravel/typeahead-not-working-with-laravel-51', '2016-08-03 20:26:51', '2016-08-03 20:26:51', 0),
(9, 'Aashiq', 'Pooja and Chander Kapoor have a heart-to-heart conversation on the telephone. When they finally meet and all is reveal they both fell in love with each other; Chander lives with his advocate dad Dilip Dev Kapoor while Pooja lives a wealthy but stressful f', 'https://image.tmdb.org/t/p/w185//7YYes5UB2fLwHZ9xwIawE72VhkW.jpg', 'https://laracasts.com/discuss/channels/laravel/typeahead-not-working-with-laravel-51', '2016-08-03 20:27:05', '2016-08-03 20:27:05', 0),
(10, 'Q', 'When growing up in a community where gang violence is a way of life and Basketball is a way to escape it.', 'https://image.tmdb.org/t/p/w185//tkTw4vgCWKmw8uYj3q6iP4PKId0.jpg', 'https://laracasts.com/discuss/channels/laravel/typeahead-not-working-with-laravel-51', '2016-08-03 20:27:21', '2016-08-03 20:27:21', 0),
(11, 'Z for Zachariah', 'In the wake of a nuclear war, a young woman survives on her own, fearing she may actually be the proverbial last woman on earth, until she discovers the most astonishing sight of her life: another human being. A distraught scientist, he’s nearly been driv', 'https://image.tmdb.org/t/p/w185//xrwxzShNKYs8l0ISnfjFVfUD0CW.jpg', 'https://laracasts.com/discuss/channels/laravel/typeahead-not-working-with-laravel-51', '2016-08-03 20:27:31', '2016-08-03 20:27:31', 0),
(12, 'O', 'Four friends are on a hiking trip into the deep midst of a forest. While filming the trip they accidentally lose one of their cell phones. In search of the lost phone they discover a mysterious black hole in the ground. Curious and puzzled by this newly d', 'https://image.tmdb.org/t/p/w185//gHerKmJFM9PaQWbhyTVXuLXfyJ1.jpg', 'https://laracasts.com/discuss/channels/laravel/typeahead-not-working-with-laravel-51', '2016-08-03 20:27:43', '2016-08-03 20:27:43', 0),
(13, 'Power', 'Ravi Teja plays a young man desperate to become a police officer, who becomes embroiled in a plot to pose as his lookalike in order to re-capture an infamous thug from rogue cops. The film revolves around two similar looking people, Baldev Sahay - a corru', 'https://image.tmdb.org/t/p/w185//3mzJK0KcDeSwcMYH2hqVA7jSDP9.jpg', 'https://laracasts.com/discuss/channels/laravel/typeahead-not-working-with-laravel-51', '2016-08-03 20:28:01', '2016-08-03 20:28:01', 0);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'user', '2016-08-03 21:00:00', '2016-08-04 21:00:00'),
(2, 'admin', '2016-08-12 21:00:00', '2016-08-24 21:00:00'),
(3, 'owner', '2016-08-12 21:00:00', '2016-08-24 21:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 2, '2016-08-02 07:43:20', '2016-08-02 07:43:20');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `poster` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `linked` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `poster`, `linked`, `created_at`, `updated_at`) VALUES
(1, '/image/Poster1.jpg', 'https://cdnjs.com/libraries/corejs-typeahead', '2016-08-03 18:33:14', '2016-08-03 18:33:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Sakib hossain', 'sakibwebworm@gmail.com', '$2y$10$NYcjUPgeoPXWuKikx/v5q.wGiadWPqJKKk1CIvl7sNaS86q8Nz3o6', '7lFbk9rtRLPaWj8azU4wW3Gu7MSfZPtcFQ9ye1EiAJXqOHSbKgj1Z2zE14UO', '2016-08-02 07:43:20', '2016-08-03 23:36:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movies_user_id_index` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`role_id`,`user_id`),
  ADD KEY `role_user_role_id_index` (`role_id`),
  ADD KEY `role_user_user_id_index` (`user_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

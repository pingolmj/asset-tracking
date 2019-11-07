-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2019 at 06:24 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chis`
--

-- --------------------------------------------------------

--
-- Table structure for table `components`
--

CREATE TABLE `components` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `components`
--

INSERT INTO `components` (`id`, `name`, `description`, `model_number`, `created_at`, `updated_at`, `location`, `quantity1`, `category`) VALUES
(4, 'Lorem Ipsum 1', 'Faulty ram OS not bootings', '643364346', '2019-03-27 17:43:09', '2019-11-03 04:22:14', 'LB466', '51', 'Processing Devices'),
(6, 'Lorem Ipsum 2', 'Booting issues and slow copy speeds', '354633', '2019-09-24 15:12:29', '2019-10-31 06:26:11', 'LB465', '23', 'Storage Devices'),
(7, 'test', 'test1', '35423', '2019-10-05 23:50:06', '2019-11-03 04:26:32', 'LB469', '22', 'Processing Devices'),
(10, 'Wacom Drawing Tablet', 'broken pen and not responding', 'FREW45', '2019-10-31 06:27:17', '2019-10-31 06:27:17', 'LB423', '1', 'I/O Devices'),
(11, 'A4Tech Keyboard', 'broken keys a, y, n and x', 'FREW45', '2019-11-02 16:17:23', '2019-11-02 16:17:23', 'LB445', '22', 'I/O Devices');

-- --------------------------------------------------------

--
-- Table structure for table `hardwares`
--

CREATE TABLE `hardwares` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` mediumtext COLLATE utf8mb4_unicode_ci,
  `model_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hardwares`
--

INSERT INTO `hardwares` (`id`, `name`, `description`, `image`, `model_number`, `location`, `status`, `created_at`, `updated_at`, `category`) VALUES
(1, 'Kingston Ram 8GB', '8GB RAM', '1572734990.jpg', '9648564', 'LB445', 'ACTIVE', '2019-10-31 05:56:13', '2019-11-03 03:08:10', 'Processing Devices'),
(2, 'NZXT PC Case', 'Lorum Ipsum test', '1572734999.jpg', '35423', 'LB467', 'ACTIVE', '2019-10-31 06:28:30', '2019-11-02 14:49:59', 'Processing Devices'),
(3, 'Wacom Intuos S', 'A paragraph', '1572561649.jpg', '986642', 'LB467', 'ACTIVE', '2019-10-31 14:40:49', '2019-10-31 18:13:16', 'Processing Devices'),
(4, 'Intel Core i5-3570K Quad-Core Processor 3.4 GHz', 'Model: Intel Core i5 Processor i5-3570K Clock Speed: 3.4 GHz DMI: 5 GT/s Intel Smart Cache: 6 MB Lithography: 22 nm', '1572762353.jpg', 'BX80637I53570K', 'LB445', 'ACTIVE', '2019-11-02 22:25:53', '2019-11-02 22:25:53', 'Processing Devices'),
(5, 'A4tech KD-600L LED Illuminated Laser Engraved Keys Backlight Keyboard', 'Interface: USB Hot keys function: multimedia Features: backlit', '1572762565.jpg', 'KD-600L', 'LB445', 'ACTIVE', '2019-11-02 22:29:25', '2019-11-05 20:53:30', 'Processing Devices');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2018_12_09_104158_create_components_table', 1),
(10, '2019_03_27_153154_create_hardwares_table', 2),
(11, '2019_10_06_072120_add_location_to_hardwares_table', 3),
(12, '2019_10_31_134939_create_hardwares_table', 4),
(13, '2019_10_31_141121_add_category_to_hardwares_table', 5),
(14, '2019_10_31_223747_add_category_to_hardwares_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('mhiehiecon@gmail.com', '$2y$10$fnugmZGDKxk4.ihb0RhfQeJUZBcqkB/7m.Lx3SKJ7qWbVWF9Hu596', '2019-11-01 17:16:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', 'john@test.me', NULL, '$2y$10$SmPYjn5UUYh9jX/VkXF7iOxjThoz7.HBCIaVyi84E1x8.sqCpDJGa', 'R7HSPDteIfr5PHrvvvEVRDQz0jB1pwHgyBNl4p76qc0dbT96MOJ0nWeZ7qVF', '2019-03-26 05:49:25', '2019-03-26 05:49:25'),
(2, 'admin', 'admin@test.me', NULL, '$2y$10$ajuwO3I3h2F97YNwvzcSBOwmSHtKE6Hqnez1qncF4P/vheZyV5Ro2', 'ujvxgwYoKgOUDTNo6x2BkooAbA4GU2Xl2Rmu4IuKtwr9AfbRV20uxa818Wda', '2019-04-15 22:44:35', '2019-04-15 22:44:35'),
(3, 'Working Student', 'workingstudent@test.me', NULL, '$2y$10$AZ8kDKG17jHuvUNQek30CuzgR2FhDUyewY.Snaqr4r1vNsK2RieZS', NULL, '2019-04-15 23:15:06', '2019-04-15 23:15:06'),
(4, 'William Sam', 'mhiehiecon2@gmail.com', NULL, '$2y$10$c2q1dIAKJEuGYgnkZwFxv.TlUcvhcw.qYt89ONXdNVzvir5LWTq6K', '3Uv8cW0R7KlY5KfQn7ng7E7KwQyAFHciMrJtOxwOuzT0kzUV81e7xERY9ZpS', '2019-09-21 22:32:59', '2019-09-21 22:32:59'),
(5, 'John Doe', 'test@gmail.com', NULL, '$2y$10$j0R6Wr4eb.7RaIWZE2sOz.zPLE5RmDYkI0M9V3rtt3IvN2ZpNeWlC', 'lZ62dXKJoZ33GW0GtAmNEuU8wEz7OwwUjZAUjEhsKROcHNwAVpoPAmxXtbWM', '2019-09-24 15:11:27', '2019-09-24 15:11:27'),
(6, 'Manuel Pingol', 'mhiehiecon@gmail.com', NULL, '$2y$10$m53vCYJKKmWXCwTR/2Jxxe/CgwgQ3AxHUWA1X5Ya.zZ5xjpunYz62', 'kkyikoZX88KGEv4sc4zlpYzFZtC8imXWRfQ7l6O2WVhsu6HtBihwFB03Z8KP', '2019-11-01 17:00:08', '2019-11-01 17:00:08'),
(7, 'John Smith', 'john1@test.me', NULL, '$2y$10$fWQOx9ISqdF4Yv78AwVPwuMcDFJO5L6KU8Sam5tFe30mwflwh8R4G', '3sIBFZwD2h8WylEnQEqJc7OOWa6h7GAQNCIkEFYvkUumWFmw422agBuBG8zs', '2019-11-02 16:00:06', '2019-11-02 16:00:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `components`
--
ALTER TABLE `components`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hardwares`
--
ALTER TABLE `hardwares`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `components`
--
ALTER TABLE `components`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `hardwares`
--
ALTER TABLE `hardwares`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

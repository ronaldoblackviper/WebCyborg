-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2019 at 09:24 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cyborgweb`
--
CREATE DATABASE IF NOT EXISTS `cyborgweb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cyborgweb`;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
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
(3, '2019_07_17_045949_create_products_table', 2),
(6, '2019_07_29_135118_create_products_table', 3),
(7, '2019_07_29_141553_create_users_table', 3),
(8, '2019_08_01_014106_create_orders_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `cart` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `created_at`, `updated_at`, `user_id`, `cart`, `address`, `name`, `payment_id`) VALUES
(2, '2019-07-31 19:32:57', '2019-07-31 19:32:57', 1, 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:1:{i:1;a:3:{s:3:\"qty\";i:1;s:5:\"price\";i:100000;s:4:\"item\";O:11:\"App\\Product\":26:{s:11:\"\0*\0fillable\";a:4:{i:0;s:9:\"imagePath\";i:1;s:5:\"title\";i:2;s:11:\"description\";i:3;s:5:\"price\";}s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:8:\"products\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:7:{s:2:\"id\";i:1;s:10:\"created_at\";s:19:\"2019-07-29 16:06:24\";s:10:\"updated_at\";s:19:\"2019-07-29 16:06:24\";s:9:\"imagePath\";s:116:\"https://images.pexels.com/photos/67636/rose-blue-flower-rose-blooms-67636.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500\";s:5:\"title\";s:11:\"Apps Cyborg\";s:11:\"description\";s:211:\"Kami merupakan solusi kebutuhan IT Anda. Dengan komunikasi yang baik dengan client, kami yakin setiap sistem yang kami buat dapat berjalan dengan maksimal dan pastinya membantu mempermudah Anda dalam segala hal.\";s:5:\"price\";i:100000;}s:11:\"\0*\0original\";a:7:{s:2:\"id\";i:1;s:10:\"created_at\";s:19:\"2019-07-29 16:06:24\";s:10:\"updated_at\";s:19:\"2019-07-29 16:06:24\";s:9:\"imagePath\";s:116:\"https://images.pexels.com/photos/67636/rose-blue-flower-rose-blooms-67636.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500\";s:5:\"title\";s:11:\"Apps Cyborg\";s:11:\"description\";s:211:\"Kami merupakan solusi kebutuhan IT Anda. Dengan komunikasi yang baik dengan client, kami yakin setiap sistem yang kami buat dapat berjalan dengan maksimal dan pastinya membantu mempermudah Anda dalam segala hal.\";s:5:\"price\";i:100000;}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}}s:8:\"totalQty\";i:1;s:10:\"totalprice\";i:100000;}', 'Palembang', 'Ronaldo', '2'),
(4, '2019-08-02 10:41:40', '2019-08-02 10:41:40', 3, 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:1:{i:1;a:3:{s:3:\"qty\";i:1;s:5:\"price\";i:100000;s:4:\"item\";O:11:\"App\\Product\":26:{s:11:\"\0*\0fillable\";a:4:{i:0;s:9:\"imagePath\";i:1;s:5:\"title\";i:2;s:11:\"description\";i:3;s:5:\"price\";}s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:8:\"products\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:7:{s:2:\"id\";i:1;s:10:\"created_at\";s:19:\"2019-07-29 16:06:24\";s:10:\"updated_at\";s:19:\"2019-07-29 16:06:24\";s:9:\"imagePath\";s:24:\"assets/img/imageapps.jpg\";s:5:\"title\";s:24:\"Cyborg Management System\";s:11:\"description\";s:211:\"Kami merupakan solusi kebutuhan IT Anda. Dengan komunikasi yang baik dengan client, kami yakin setiap sistem yang kami buat dapat berjalan dengan maksimal dan pastinya membantu mempermudah Anda dalam segala hal.\";s:5:\"price\";i:100000;}s:11:\"\0*\0original\";a:7:{s:2:\"id\";i:1;s:10:\"created_at\";s:19:\"2019-07-29 16:06:24\";s:10:\"updated_at\";s:19:\"2019-07-29 16:06:24\";s:9:\"imagePath\";s:24:\"assets/img/imageapps.jpg\";s:5:\"title\";s:24:\"Cyborg Management System\";s:11:\"description\";s:211:\"Kami merupakan solusi kebutuhan IT Anda. Dengan komunikasi yang baik dengan client, kami yakin setiap sistem yang kami buat dapat berjalan dengan maksimal dan pastinya membantu mempermudah Anda dalam segala hal.\";s:5:\"price\";i:100000;}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}}s:8:\"totalQty\";i:1;s:10:\"totalprice\";i:100000;}', 'Lampung', 'Ravi', '2'),
(5, '2019-08-04 08:43:20', '2019-08-04 08:43:20', 1, 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:1:{i:16;a:3:{s:3:\"qty\";i:2;s:5:\"price\";i:200000;s:4:\"item\";O:11:\"App\\Product\":26:{s:11:\"\0*\0fillable\";a:4:{i:0;s:9:\"imagePath\";i:1;s:5:\"title\";i:2;s:11:\"description\";i:3;s:5:\"price\";}s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:8:\"products\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:7:{s:2:\"id\";i:16;s:10:\"created_at\";s:19:\"2019-08-04 00:33:32\";s:10:\"updated_at\";s:19:\"2019-08-04 00:33:32\";s:9:\"imagePath\";s:23:\"uploads/php79CE.tmp.JPG\";s:5:\"title\";s:24:\"Cyborg Management System\";s:11:\"description\";s:211:\"Kami merupakan solusi kebutuhan IT Anda. Dengan komunikasi yang baik dengan client, kami yakin setiap sistem yang kami buat dapat berjalan dengan maksimal dan pastinya membantu mempermudah Anda dalam segala hal.\";s:5:\"price\";i:100000;}s:11:\"\0*\0original\";a:7:{s:2:\"id\";i:16;s:10:\"created_at\";s:19:\"2019-08-04 00:33:32\";s:10:\"updated_at\";s:19:\"2019-08-04 00:33:32\";s:9:\"imagePath\";s:23:\"uploads/php79CE.tmp.JPG\";s:5:\"title\";s:24:\"Cyborg Management System\";s:11:\"description\";s:211:\"Kami merupakan solusi kebutuhan IT Anda. Dengan komunikasi yang baik dengan client, kami yakin setiap sistem yang kami buat dapat berjalan dengan maksimal dan pastinya membantu mempermudah Anda dalam segala hal.\";s:5:\"price\";i:100000;}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}}s:8:\"totalQty\";i:2;s:10:\"totalprice\";i:200000;}', 'Sembawa', 'Amanda Brownies', '4');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `imagePath` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `docPath` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `created_at`, `updated_at`, `imagePath`, `docPath`, `title`, `description`, `price`) VALUES
(1, '2019-08-05 20:27:16', '2019-08-06 02:25:56', 'uploads/image/vHJZEc.jpg', 'uploads/document/Algoritma-Diffie-Hellman-(2018).pdf', 'Cyborg Management System II', 'Kami merupakan solusi kebutuhan IT Anda. Dengan komunikasi yang baik dengan client, kami yakin setiap sistem yang kami buat dapat berjalan dengan maksimal dan pastinya membantu mempermudah Anda dalam segala hal.', 10000),
(2, '2019-08-05 23:07:42', '2019-08-06 02:44:05', 'uploads/image/cover.png', 'uploads/document/matriks penilaian KWU.pdf', 'Algoritma SPA', 'vssdjhbvslhk adsjlcnsdjv dsljnvjdv lsdijnvjndldxj lsdivjnsldjfvn lidsvnsldjkvnl', 35000),
(3, '2019-08-06 02:09:13', '2019-08-07 00:17:48', 'uploads/image/imageapps.JPG', 'uploads/document/CyborgManagementSystem.pdf', 'Cyborg Management System', 'Kami merupakan solusi kebutuhan IT Anda. Dengan komunikasi yang baik dengan client, kami yakin setiap sistem yang kami buat dapat berjalan dengan maksimal dan pastinya membantu mempermudah Anda dalam segala hal.', 250000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `created_at`, `updated_at`, `name`, `email`, `password`, `remember_token`) VALUES
(1, '2019-07-31 19:07:40', '2019-08-03 08:19:23', 'Ronaldo', 'ronaldoblackviper@gmail.com', '$2y$10$fXRIA06LhJPm922MCBXLourpKBFN0/3aP0r3XMm9xZMTkZqez87IS', NULL),
(3, '2019-08-04 08:40:06', '2019-08-04 08:40:06', 'elygea', 'elygea@gmail.com', '$2y$10$vM6GYE7rilawNX4jIBPhPuMx4G1GoMeEew2V/FU3NqPRoQQfdBxtq', NULL),
(4, '2019-08-04 08:44:47', '2019-08-04 08:44:47', 'Ravi', 'ravi1997@gmail.com', '$2y$10$vraQ/8t3l0qy5bE3Pfp5pu5prE8Vk7qlj58JxhKEemshruxUAIPlS', NULL),
(5, '2019-08-04 10:20:39', '2019-08-04 10:20:39', 'Cyborg It Center', 'cyborgitweb@gmail.com', '$2y$10$0tJ36Se44L/R6AWGt/iIm.engPBt9QQzA9Yv5jJs5JWvL6f8JKJa.', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2024 at 03:08 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lemme_fs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'admin',
  `status` varchar(255) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `token`, `photo`, `phone`, `address`, `role`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$12$SfNRmdkyxTCp0ZJOTorZ.eJ8I2En03AgjT8obSIwvspbKX87xOrWm', NULL, '1725584998.jpg', '0907197357', '58 Duong Thieu Tuoc', 'admin', '1', NULL, '2024-09-05 02:16:35', '2024-09-13 00:02:38');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_slug` varchar(255) NOT NULL,
  `category_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_slug`, `category_image`, `created_at`, `updated_at`) VALUES
(4, 'Áo thun', 'Áo-thun', 'upload/category/1810640566363463.jpg', '2024-09-19 08:56:44', '2024-09-19 08:56:44'),
(5, 'Đầm váy', 'Đầm-váy', 'upload/category/1810681395046317.jpg', '2024-09-19 19:45:41', '2024-09-19 19:45:41'),
(6, 'Quần', 'quần', 'upload/category/1810682428001821.jpg', '2024-09-19 20:02:07', '2024-09-19 20:02:07');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'client',
  `status` varchar(255) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) DEFAULT NULL,
  `collection_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `mime_type` varchar(255) DEFAULT NULL,
  `disk` varchar(255) NOT NULL,
  `conversions_disk` varchar(255) DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`manipulations`)),
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`custom_properties`)),
  `generated_conversions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`generated_conversions`)),
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`responsive_images`)),
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(19, '0001_01_01_000000_create_users_table', 1),
(20, '0001_01_01_000001_create_cache_table', 1),
(21, '0001_01_01_000002_create_jobs_table', 1),
(22, '2024_08_20_024130_create_admins_table', 1),
(23, '2024_08_23_023555_create_clients_table', 1),
(24, '2024_09_05_082637_create_categories_table', 1),
(25, '2024_09_05_102547_create_categories_table', 2),
(26, '2024_09_14_014434_create_sliders_table', 3),
(27, '2024_09_19_125043_create_categories_table', 4),
(28, '2024_09_20_011858_create_sub_categories_table', 5),
(29, '2024_09_20_075745_create_products_table', 6),
(30, '2024_09_20_122323_create_multi_imgs_table', 7),
(31, '2024_10_13_050949_create_media_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `multi_imgs`
--

CREATE TABLE `multi_imgs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `photo_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `multi_imgs`
--

INSERT INTO `multi_imgs` (`id`, `product_id`, `photo_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'upload/products/multi-image/1811156353964448.jpg', '2024-09-25 01:34:57', NULL),
(2, 1, 'upload/products/multi-image/1811156354148848.jpg', '2024-09-25 01:34:58', NULL),
(3, 1, 'upload/products/multi-image/1811156354345962.jpg', '2024-09-25 01:34:58', NULL),
(4, 2, 'upload/products/multi-image/1811156607523675.jpg', '2024-09-25 01:38:59', NULL),
(5, 2, 'upload/products/multi-image/1811156607669848.jpg', '2024-09-25 01:38:59', NULL),
(6, 2, 'upload/products/multi-image/1811156607816290.jpg', '2024-09-25 01:39:00', NULL),
(7, 3, 'upload/products/multi-image/1811156622400657.jpg', '2024-09-25 01:39:13', NULL),
(8, 3, 'upload/products/multi-image/1811156622554356.jpg', '2024-09-25 01:39:14', NULL),
(9, 3, 'upload/products/multi-image/1811156622754019.jpg', '2024-09-25 01:39:14', NULL),
(10, 4, 'upload/products/multi-image/1811160156221659.jpg', '2024-09-25 02:35:24', NULL),
(11, 4, 'upload/products/multi-image/1811160156418349.jpg', '2024-09-25 02:35:24', NULL),
(12, 4, 'upload/products/multi-image/1811160156569593.jpg', '2024-09-25 02:35:24', NULL),
(13, 4, 'upload/products/multi-image/1811160156719422.jpg', '2024-09-25 02:35:24', NULL),
(14, 5, 'upload/products/multi-image/1811160186519636.jpg', '2024-09-25 02:35:52', NULL),
(15, 5, 'upload/products/multi-image/1811160186671637.jpg', '2024-09-25 02:35:53', NULL),
(16, 5, 'upload/products/multi-image/1811160186870757.jpg', '2024-09-25 02:35:53', NULL),
(17, 5, 'upload/products/multi-image/1811160187063291.jpg', '2024-09-25 02:35:53', NULL),
(18, 6, 'upload/products/multi-image/1811179529905052.jpg', '2024-09-25 07:43:20', NULL),
(19, 6, 'upload/products/multi-image/1811179530134557.jpg', '2024-09-25 07:43:20', NULL),
(20, 6, 'upload/products/multi-image/1811179530518467.jpg', '2024-09-25 07:43:20', NULL),
(21, 6, 'upload/products/multi-image/1811179530728435.jpg', '2024-09-25 07:43:21', NULL),
(22, 7, 'upload/products/multi-image/1811182421459551.jpg', '2024-09-25 08:29:17', NULL),
(23, 7, 'upload/products/multi-image/1811182421609632.jpg', '2024-09-25 08:29:18', NULL),
(24, 7, 'upload/products/multi-image/1811182421839667.jpg', '2024-09-25 08:29:18', NULL),
(25, 7, 'upload/products/multi-image/1811182422030760.jpg', '2024-09-25 08:29:18', NULL),
(26, 8, 'upload/products/multi-image/1811182533089233.jpg', '2024-09-25 08:31:04', NULL),
(27, 8, 'upload/products/multi-image/1811182533607576.jpg', '2024-09-25 08:31:04', NULL),
(28, 8, 'upload/products/multi-image/1811182533869254.jpg', '2024-09-25 08:31:05', NULL),
(29, 8, 'upload/products/multi-image/1811182534481946.jpg', '2024-09-25 08:31:05', NULL),
(30, 9, 'upload/products/multi-image/1811221117266015.jpg', '2024-09-25 18:44:21', NULL),
(31, 9, 'upload/products/multi-image/1811221117470047.jpg', '2024-09-25 18:44:21', NULL),
(32, 9, 'upload/products/multi-image/1811221117618282.jpg', '2024-09-25 18:44:21', NULL),
(33, 9, 'upload/products/multi-image/1811221117801951.jpg', '2024-09-25 18:44:21', NULL),
(34, 9, 'upload/products/multi-image/1811221118307433.jpg', '2024-09-25 18:44:22', NULL),
(35, 9, 'upload/products/multi-image/1811221118773194.jpg', '2024-09-25 18:44:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `option_values`
--

CREATE TABLE `option_values` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `option_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `label` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_slug` varchar(255) NOT NULL,
  `product_code` varchar(255) DEFAULT NULL,
  `product_qty` varchar(255) NOT NULL,
  `product_size` varchar(255) DEFAULT NULL,
  `product_color` varchar(255) NOT NULL,
  `selling_price` varchar(255) NOT NULL,
  `discount_price` varchar(255) DEFAULT NULL,
  `short_descp` varchar(255) NOT NULL,
  `long_descp` longtext NOT NULL,
  `product_thambnail_1` varchar(255) NOT NULL,
  `product_thambnail_2` varchar(255) NOT NULL,
  `hot_deals` int(11) DEFAULT NULL,
  `featured` int(11) DEFAULT NULL,
  `special_offer` int(11) DEFAULT NULL,
  `special_deals` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `subcategory_id`, `product_name`, `product_slug`, `product_code`, `product_qty`, `product_size`, `product_color`, `selling_price`, `discount_price`, `short_descp`, `long_descp`, `product_thambnail_1`, `product_thambnail_2`, `hot_deals`, `featured`, `special_offer`, `special_deals`, `status`, `created_at`, `updated_at`) VALUES
(2, 6, 4, 'Sản phẩm đẹp', 'san-pham-dep', NULL, '50', 'M', 'Đỏ', '300', '201', 'Sản phẩm đẹp', '<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"/storage/photos/product_images/b8399c6006e5809e86457d61d48dc635.jpg\" alt=\"dam-so-mi-dep\" width=\"720\" height=\"1005\"></p>', 'upload/product/thambnail1811156607075443.jpg', 'upload/product/thambnail/1811156607306075.jpg', NULL, NULL, NULL, NULL, 1, '2024-09-25 01:38:59', NULL),
(3, 6, 4, 'Sản phẩm đẹp', 'san-pham-dep-1', NULL, '50', 'M', 'Đỏ', '300', '201', 'Sản phẩm đẹp', '<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"/storage/photos/product_images/b8399c6006e5809e86457d61d48dc635.jpg\" alt=\"dam-so-mi-dep\" width=\"720\" height=\"1005\"></p>', 'upload/product/thambnail1811156621861092.jpg', 'upload/product/thambnail/1811156622149184.jpg', NULL, NULL, NULL, NULL, 1, '2024-09-25 01:39:13', NULL),
(4, 5, 3, 'Mỹ phẩm', 'dam-so-mi-xep-ly', NULL, '123', 'M', 'Đỏ', '300', '10', 'Đầm đẹp', '<p>Then, the&nbsp;<code>insertGetId()</code> method is used to get the ID of the new record.</p>', 'upload/product/thambnail1811160155908285.jpg', 'upload/product/thambnail/1811160156070620.jpg', NULL, NULL, NULL, NULL, 1, '2024-09-25 02:35:23', NULL),
(5, 5, 3, 'Mỹ phẩm', 'dam-so-mi', NULL, '123', 'M', 'Đỏ', '300', '10', 'Đầm đẹp', '<p>Then, the&nbsp;<code>insertGetId()</code> method is used to get the ID of the new record.</p>', 'upload/product/thambnail1811160186194480.jpg', 'upload/product/thambnail/1811160186360406.jpg', NULL, NULL, NULL, NULL, 1, '2024-09-25 02:35:52', NULL),
(6, 5, 3, 'Đầm sơ mi', 'Đầm-sơ-mi', NULL, '50', 'M', 'Đỏ', '100000', '10', 'Liêu Hà vợ yêu', '<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"/storage/photos/product_images/b8399c6006e5809e86457d61d48dc635.jpg\" alt=\"\" width=\"720\" height=\"1005\"></p>', 'upload/products/thambnail1811179529261854.jpg', 'upload/products/thambnail/1811179529628912.jpg', NULL, NULL, NULL, NULL, 1, '2024-09-25 07:43:20', NULL),
(7, 5, 3, 'Đầm sơ mi', 'Đầm-sơ-mi', NULL, '123', 'M', 'Đỏ', '100', '200', 'Đầm sơ mi đẹp', '<p>Đầm sơ mi đẹp</p>', 'upload/products/thambnail1811182420559928.jpg', 'upload/products/thambnail/1811182420990690.jpg', NULL, NULL, NULL, NULL, 1, '2024-09-25 08:29:17', NULL),
(8, 5, 3, 'Đầm cổ đan tôn', 'Đầm-cổ-đan-tôn', NULL, '123', 'M', 'Đỏ', '100000', '200', 'Đầm cổ đan tôn', '<p>Đầm cổ đan t&ocirc;n</p>', 'upload/products/thambnail1811182532382937.jpg', 'upload/products/thambnail/1811182532791876.jpg', NULL, NULL, NULL, NULL, 1, '2024-09-25 08:31:04', NULL),
(9, 4, 1, 'Áo thun in hình thiên nhiên', 'Áo-thun-in-hình-thiên-nhiên', NULL, '100', 'XL', 'Đen', '300', '200', 'Áo thun in hình thiên nhiên', '<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"/storage/photos/product_images/b8399c6006e5809e86457d61d48dc635.jpg\" alt=\"dam-so-mi-dep\" width=\"720\" height=\"1005\"></p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"/storage/photos/product_images/dam-do-1.jpg\" alt=\"dam-do-dep\" width=\"720\" height=\"1005\"></p>', 'upload/products/thambnail1811221116561622.jpg', 'upload/products/thambnail/1811221116781400.jpg', NULL, NULL, NULL, NULL, 1, '2024-09-25 18:44:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('2Pwin3gjosVQFw6k2RrAYNBk99RIZ0gUxSFxpu2K', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVUxCaU5ja2Vxd1poN09sMXJMeUpyeWI3OWZiZTZLbzRKSjZCQ3g2VSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1727528766),
('6O9qjFVNGJ4nx8tCWPjtzC24Q34phJLm2vRXY4w6', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiSGdOZlhrOVN2ejlSeVBUcVlMYVBiTDVvRHZGTTFQQ0hvWVNkWmwzTyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Njc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9kdWN0L2RldGFpbHMvNy8lQzQlOTAlRTElQkElQTdtLXMlQzYlQTEtbWkiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUyOiJsb2dpbl9hZG1pbl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czo0OiJjYXJ0IjthOjE6e2k6ODthOjU6e3M6MjoiaWQiO3M6MToiOCI7czo0OiJuYW1lIjtzOjIxOiLEkOG6p20gY+G7lSDEkWFuIHTDtG4iO3M6NzoiaW1hZ2VfMSI7czo0NToidXBsb2FkL3Byb2R1Y3RzL3RoYW1ibmFpbDE4MTExODI1MzIzODI5MzcuanBnIjtzOjU6InByaWNlIjtzOjM6IjIwMCI7czoxMToicHJvZHVjdF9xdHkiO2k6MTt9fX0=', 1727688228),
('BkOIb2abaUBJM3ZY8P47ml0donPXBdOG4QqLhetQ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiMHBRUE1jbWdIdmliekI5T3l1U3lwbmdoVWtSbjFiaEd2eDVHOEhKYyI7czo0OiJjYXJ0IjthOjE6e2k6ODthOjU6e3M6MjoiaWQiO3M6MToiOCI7czo0OiJuYW1lIjtzOjIxOiLEkOG6p20gY+G7lSDEkWFuIHTDtG4iO3M6NzoiaW1hZ2VfMSI7czo0NToidXBsb2FkL3Byb2R1Y3RzL3RoYW1ibmFpbDE4MTExODI1MzIzODI5MzcuanBnIjtzOjU6InByaWNlIjtzOjM6IjIwMCI7czoxMToicHJvZHVjdF9xdHkiO2k6MTt9fXM6NjoiX2ZsYXNoIjthOjI6e3M6MzoibmV3IjthOjA6e31zOjM6Im9sZCI7YTowOnt9fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjIxOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAiO319', 1727602730),
('cDKszX0YsERE0rz9fhuslmh1nZixJglWXujVZDQc', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZXFTUEY5VkZIajVqWTFvRHVMbzdaZEpEdHNFNWR1SnJTdXBzVU55OCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1727519812),
('dQK6mrwJZUs6yFYSDqAFdPjFJ0FSgQtRLDrTUb1X', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVVhVYmc2YjJHbEJrNjg4YUUzT0pwQ1RCV2RCT3FWcXlTM3lsdUNjZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1727766290),
('FyHzonAc6OuXqEwF3UJhqNU4eNbzXDF4SYzIIwR7', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZ1ZyN2xFa2luNHZhaDQweGFHaG9Lc2tCN2ZjNWczbGFmZVZISUFNViI7czo0OiJjYXJ0IjthOjE6e2k6NzthOjU6e3M6MjoiaWQiO3M6MToiNyI7czo0OiJuYW1lIjtzOjEzOiLEkOG6p20gc8ahIG1pIjtzOjc6ImltYWdlXzEiO3M6NDU6InVwbG9hZC9wcm9kdWN0cy90aGFtYm5haWwxODExMTgyNDIwNTU5OTI4LmpwZyI7czo1OiJwcmljZSI7czozOiIyMDAiO3M6MTE6InByb2R1Y3RfcXR5IjtpOjE7fX1zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1727519138),
('hpaWY8lcJRTcv7uIj3IuZzX5wxzUX6chCPQ7aBST', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMHA2T1o3S1BLNXR1TVVUOGg4UHE5d0FlajFweTdDQlMyNEtkcE5TbyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1727684803),
('iHT1jnnw6uOt43DbRUKXkNhOLUAPSHend3QsK0ru', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoialZRZHc4aEVKUEVzdWlEalJKQVA4UWxzNXdqd1g4d3JSWVU2U2lwcSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NDoiY2FydCI7YToyOntpOjc7YTo1OntzOjI6ImlkIjtzOjE6IjciO3M6NDoibmFtZSI7czoxMzoixJDhuqdtIHPGoSBtaSI7czo3OiJpbWFnZV8xIjtzOjQ1OiJ1cGxvYWQvcHJvZHVjdHMvdGhhbWJuYWlsMTgxMTE4MjQyMDU1OTkyOC5qcGciO3M6NToicHJpY2UiO3M6MzoiMjAwIjtzOjExOiJwcm9kdWN0X3F0eSI7aTozO31pOjY7YTo1OntzOjI6ImlkIjtzOjE6IjYiO3M6NDoibmFtZSI7czoxMzoixJDhuqdtIHPGoSBtaSI7czo3OiJpbWFnZV8xIjtzOjQ1OiJ1cGxvYWQvcHJvZHVjdHMvdGhhbWJuYWlsMTgxMTE3OTUyOTI2MTg1NC5qcGciO3M6NToicHJpY2UiO3M6MjoiMTAiO3M6MTE6InByb2R1Y3RfcXR5IjtpOjE7fX19', 1727507854),
('JwLTF82FkNZUSB2GpNNo4bjgfmpYg7n2TTiEs3pE', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNTJyVDBCZ2JXMTFtbmhxaTVaMWNCdjgwOVB2NHRKMGpTdHVSS0FabSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1727747105),
('OmpXtPspzcEanAgNIApGAPlxswWLEVtlgr0Fmehj', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVng4eVlhb2ZzOFlvemRETnRsd09DTnFMTk5RQm9udUZLT3M1VzBOMCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1727577066),
('qPjtyovEqZxDi7MG5hN04ac3VRGhwPuY6XCJqFP0', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiejRmeGRIcGpKSkVreU9ZY3FTR3kwM0xOV0d6T00ycHdJT3NPUFlabiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NDoiY2FydCI7YTozOntpOjc7YTo1OntzOjI6ImlkIjtzOjE6IjciO3M6NDoibmFtZSI7czoxMzoixJDhuqdtIHPGoSBtaSI7czo3OiJpbWFnZV8xIjtzOjQ1OiJ1cGxvYWQvcHJvZHVjdHMvdGhhbWJuYWlsMTgxMTE4MjQyMDU1OTkyOC5qcGciO3M6NToicHJpY2UiO3M6MzoiMjAwIjtzOjExOiJwcm9kdWN0X3F0eSI7aToyO31pOjY7YTo1OntzOjI6ImlkIjtzOjE6IjYiO3M6NDoibmFtZSI7czoxMzoixJDhuqdtIHPGoSBtaSI7czo3OiJpbWFnZV8xIjtzOjQ1OiJ1cGxvYWQvcHJvZHVjdHMvdGhhbWJuYWlsMTgxMTE3OTUyOTI2MTg1NC5qcGciO3M6NToicHJpY2UiO3M6MjoiMTAiO3M6MTE6InByb2R1Y3RfcXR5IjtpOjI7fWk6ODthOjU6e3M6MjoiaWQiO3M6MToiOCI7czo0OiJuYW1lIjtzOjIxOiLEkOG6p20gY+G7lSDEkWFuIHTDtG4iO3M6NzoiaW1hZ2VfMSI7czo0NToidXBsb2FkL3Byb2R1Y3RzL3RoYW1ibmFpbDE4MTExODI1MzIzODI5MzcuanBnIjtzOjU6InByaWNlIjtzOjM6IjIwMCI7czoxMToicHJvZHVjdF9xdHkiO2k6Mzt9fX0=', 1727534115),
('UESeANLUyXe3VRbAyKskyZ04XcxXuUpu0tJhW8dB', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoic2FxRVJOMWRtZkg3RjNHeXlKSUhsemtPTk5HamFyY2wwV2puS1h0aSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9kdWN0L2RldGFpbHMvOS9wcm9kdWN0LWRldGFpbC5odG1sIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MjoibG9naW5fYWRtaW5fNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6NDoiY2FydCI7YToxOntpOjc7YTo1OntzOjI6ImlkIjtzOjE6IjciO3M6NDoibmFtZSI7czoxMzoixJDhuqdtIHPGoSBtaSI7czo3OiJpbWFnZV8xIjtzOjQ1OiJ1cGxvYWQvcHJvZHVjdHMvdGhhbWJuYWlsMTgxMTE4MjQyMDU1OTkyOC5qcGciO3M6NToicHJpY2UiO3M6MzoiMjAwIjtzOjExOiJwcm9kdWN0X3F0eSI7aToxO319fQ==', 1728804931),
('wFozxYZQlfgFq65gicfSgbabl5TsM499jFGCziUw', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZmVTMnFwektaUDI2cjRJQkFsOWtwZWw3OU01S203RmpUZkdIVzFTQiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1727619882),
('Y545tbwQAfhCJgB7rZ0CCTbAEtAhVKxvTC8mosFS', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUnpSSkRHU0xTZTdxT1cyVHNBbG4yZ2ltSUwyMFJZT0hSZDRVQ2ZtTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1727577079),
('Z84JGrZLA8EXQ37sctWSCXTGmFKcQggs8lIHdSyx', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiTVNmOXROa3NPVE01QVh6Y1ZXZ3VTdGg4eXlxZzhwOHN3ZFVSdU51SyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Njc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9kdWN0L2RldGFpbHMvNi8lQzQlOTAlRTElQkElQTdtLXMlQzYlQTEtbWkiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUyOiJsb2dpbl9hZG1pbl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1727752496),
('z9pIbF351iz2tvpxfjorIUk1X1ebFRjg1KxFXQbY', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNmZvbzdQS0lxSnFwM2d3amNrSm03Z0lwdFFhYWhBMVJCMG5tWjZZMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9kdWN0L2RldGFpbHMvOC9wcm9kdWN0LWRldGFpbC5odG1sIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1728722786),
('ZU4UF06Y814GyBXBrscjw4Jkqne9RkoLvLsVakqZ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMmRoZmtKWThiQW1sVWI3T25ldnlWYmdmSVlRVXRUc2xNZGFDUDNoRSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Njc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9kdWN0L2RldGFpbHMvNy8lQzQlOTAlRTElQkElQTdtLXMlQzYlQTEtbWkiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1727520035),
('zz5xuwJI9tLb6fovRlVij6w4fkKJyRSWy34EgV4i', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTDhqSnVWeWRFN0FPbWh5UlFtc0VaNVBHUGl3cGdIVWQ4TmE1T1hVUyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1727509678);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_title` varchar(255) NOT NULL,
  `short_title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `slider_link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_title`, `short_title`, `image`, `slider_link`, `created_at`, `updated_at`) VALUES
(7, 'Chất liệu cotton thoáng mát', 'Mẫu mã đẹp', 'upload/slider/1810176795742841.jpg', 'https://lemme.vn/bai-viet/tia-cuc-tim-tai-ha-noi-o-muc-nguy-hiem-20.html', '2024-09-14 06:05:18', '2024-09-14 06:05:18'),
(8, 'Bộ sưu tập mới', 'Hàng chất lượng', 'upload/slider/1810176876812233.png', 'https://lemme.vn/bai-viet/tia-cuc-tim-tai-ha-noi-o-muc-nguy-hiem-20.html', '2024-09-14 06:06:38', '2024-09-14 06:06:38'),
(10, 'Bộ sưu tập thu đông', 'Vải chất lượng', 'upload/slider/1810269344019910.jpg', 'https://www.w3schools.com/howto/howto_css_transition_hover.asp', '2024-09-15 06:36:21', '2024-09-15 06:36:21');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_name` varchar(255) NOT NULL,
  `subcategory_slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `subcategory_name`, `subcategory_slug`, `created_at`, `updated_at`) VALUES
(1, 4, 'Áo thun in hình', '', '2024-09-19 19:19:23', '2024-09-19 19:19:23'),
(2, 4, 'Áo thun trơn', '', '2024-09-19 19:19:43', '2024-09-19 19:19:43'),
(3, 5, 'Đầm sơ mi', '', '2024-09-19 20:01:23', '2024-09-19 20:01:23'),
(4, 6, 'Quần dài', '', '2024-09-19 20:02:20', '2024-09-19 20:02:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `status` varchar(255) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clients_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_uuid_unique` (`uuid`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`),
  ADD KEY `media_order_column_index` (`order_column`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `multi_imgs`
--
ALTER TABLE `multi_imgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `option_values`
--
ALTER TABLE `option_values`
  ADD PRIMARY KEY (`id`),
  ADD KEY `option_values_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `multi_imgs`
--
ALTER TABLE `multi_imgs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `option_values`
--
ALTER TABLE `option_values`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `option_values`
--
ALTER TABLE `option_values`
  ADD CONSTRAINT `option_values_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

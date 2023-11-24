-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2023 at 05:25 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sugara`
--

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_id` char(36) DEFAULT NULL,
  `model_type` varchar(255) NOT NULL,
  `uuid` char(36) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `model_id`, `model_type`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `generated_conversions`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(1, 'dc770674-ebda-4f24-94ed-f52d95a178ac', 'App\\Models\\Event', '34062a50-da74-49cc-856a-e3e5d7ef330b', 'images', 'peresmian1', 'peresmian1.png', 'image/png', 'public', 'public', 475996, '[]', '[]', '[]', '[]', 1, '2023-11-23 21:23:09', '2023-11-23 21:23:09'),
(2, 'dc770674-ebda-4f24-94ed-f52d95a178ac', 'App\\Models\\Event', '0b734668-e1f1-4d20-aab7-a946dcb9d305', 'images', 'peresmian2', 'peresmian2.png', 'image/png', 'public', 'public', 470834, '[]', '[]', '[]', '[]', 2, '2023-11-23 21:23:09', '2023-11-23 21:23:09'),
(3, 'dc770674-ebda-4f24-94ed-f52d95a178ac', 'App\\Models\\Event', 'e9dfb7fd-ff88-40ef-95ff-3b48f521cb99', 'images', 'peresmian3', 'peresmian3.png', 'image/png', 'public', 'public', 473077, '[]', '[]', '[]', '[]', 3, '2023-11-23 21:23:09', '2023-11-23 21:23:09'),
(4, '510ac018-ea15-4a53-a5f3-7e31697f8da4', 'App\\Models\\Event', '480c7df6-2cef-43cc-9934-1a5578d04125', 'images', 'kebun1', 'kebun1.png', 'image/png', 'public', 'public', 466376, '[]', '[]', '[]', '[]', 1, '2023-11-23 21:23:23', '2023-11-23 21:23:23'),
(5, '510ac018-ea15-4a53-a5f3-7e31697f8da4', 'App\\Models\\Event', '2d467ae3-468d-4061-8040-9a8255a1b23a', 'images', 'kebun2', 'kebun2.png', 'image/png', 'public', 'public', 482160, '[]', '[]', '[]', '[]', 2, '2023-11-23 21:23:23', '2023-11-23 21:23:23'),
(6, '510ac018-ea15-4a53-a5f3-7e31697f8da4', 'App\\Models\\Event', 'a8034446-d7f5-4bd2-a1a7-2f21eeb0974a', 'images', 'kebun3', 'kebun3.png', 'image/png', 'public', 'public', 495364, '[]', '[]', '[]', '[]', 3, '2023-11-23 21:23:23', '2023-11-23 21:23:23'),
(7, '510ac018-ea15-4a53-a5f3-7e31697f8da4', 'App\\Models\\Event', '6dcd5914-b15d-488f-bb10-5c196b0320e3', 'images', 'kebun4', 'kebun4.png', 'image/png', 'public', 'public', 344790, '[]', '[]', '[]', '[]', 4, '2023-11-23 21:23:23', '2023-11-23 21:23:23'),
(8, '510ac018-ea15-4a53-a5f3-7e31697f8da4', 'App\\Models\\Event', '397ebfd3-5751-4555-8dba-591a169948ab', 'images', 'kebun5', 'kebun5.png', 'image/png', 'public', 'public', 298915, '[]', '[]', '[]', '[]', 5, '2023-11-23 21:23:23', '2023-11-23 21:23:23'),
(9, '5c344c46-bfb3-4982-9e60-e294e840bdbe', 'App\\Models\\Event', '7e8c55fd-f448-41b5-968e-d1357034d0a0', 'images', 'rambang1', 'rambang1.png', 'image/png', 'public', 'public', 232470, '[]', '[]', '[]', '[]', 1, '2023-11-23 21:23:33', '2023-11-23 21:23:33'),
(10, '5c344c46-bfb3-4982-9e60-e294e840bdbe', 'App\\Models\\Event', '6e55d2bd-070b-4181-803a-217c000ecbd8', 'images', 'rambang2', 'rambang2.png', 'image/png', 'public', 'public', 307180, '[]', '[]', '[]', '[]', 2, '2023-11-23 21:23:33', '2023-11-23 21:23:33'),
(11, '5c344c46-bfb3-4982-9e60-e294e840bdbe', 'App\\Models\\Event', 'fa1c87c5-1d5e-4bb3-b240-5e192d9f50b1', 'images', 'rambang3', 'rambang3.png', 'image/png', 'public', 'public', 294533, '[]', '[]', '[]', '[]', 3, '2023-11-23 21:23:33', '2023-11-23 21:23:33'),
(12, '5c344c46-bfb3-4982-9e60-e294e840bdbe', 'App\\Models\\Event', '89d9391e-69be-4e57-abe1-44543ccd6024', 'images', 'rambang4', 'rambang4.png', 'image/png', 'public', 'public', 261986, '[]', '[]', '[]', '[]', 4, '2023-11-23 21:23:33', '2023-11-23 21:23:33'),
(13, '5c344c46-bfb3-4982-9e60-e294e840bdbe', 'App\\Models\\Event', '8663970a-91fa-4aad-ae45-0cccb3234661', 'images', 'rambang5', 'rambang5.png', 'image/png', 'public', 'public', 362446, '[]', '[]', '[]', '[]', 5, '2023-11-23 21:23:33', '2023-11-23 21:23:33'),
(14, '5c344c46-bfb3-4982-9e60-e294e840bdbe', 'App\\Models\\Event', 'c99fadcf-f95c-4a13-a84d-2068098d567c', 'images', 'rambang6', 'rambang6.png', 'image/png', 'public', 'public', 290912, '[]', '[]', '[]', '[]', 6, '2023-11-23 21:23:33', '2023-11-23 21:23:33'),
(15, 'ec8baaaa-de84-429c-9745-640fb4df6710', 'App\\Models\\Event', '789a4308-e277-419c-9c61-d8721a61f4aa', 'images', 'green1', 'green1.png', 'image/png', 'public', 'public', 357230, '[]', '[]', '[]', '[]', 1, '2023-11-23 21:23:45', '2023-11-23 21:23:45'),
(16, 'ec8baaaa-de84-429c-9745-640fb4df6710', 'App\\Models\\Event', '89e97607-034f-40ad-a374-830c3036b23f', 'images', 'green2', 'green2.png', 'image/png', 'public', 'public', 400939, '[]', '[]', '[]', '[]', 2, '2023-11-23 21:23:45', '2023-11-23 21:23:45'),
(17, 'ec8baaaa-de84-429c-9745-640fb4df6710', 'App\\Models\\Event', 'f9c7e1e0-b1cb-4cc8-a220-1040d208d731', 'images', 'green3', 'green3.png', 'image/png', 'public', 'public', 491554, '[]', '[]', '[]', '[]', 3, '2023-11-23 21:23:45', '2023-11-23 21:23:45'),
(18, 'ec8baaaa-de84-429c-9745-640fb4df6710', 'App\\Models\\Event', '70c673d7-18bc-4034-9df6-f7e90ffecca8', 'images', 'green4', 'green4.png', 'image/png', 'public', 'public', 242191, '[]', '[]', '[]', '[]', 4, '2023-11-23 21:23:45', '2023-11-23 21:23:45'),
(19, '8aa62784-8404-44a2-a96e-238e0a94ae2b', 'App\\Models\\Event', '5195249b-dd2c-43bb-a4cf-963f5b295ab7', 'images', 'roasting1', 'roasting1.png', 'image/png', 'public', 'public', 327361, '[]', '[]', '[]', '[]', 1, '2023-11-23 21:23:56', '2023-11-23 21:23:56'),
(20, '8aa62784-8404-44a2-a96e-238e0a94ae2b', 'App\\Models\\Event', 'b10e455f-4970-47b5-ad98-8b9252e59870', 'images', 'roasting2', 'roasting2.png', 'image/png', 'public', 'public', 291197, '[]', '[]', '[]', '[]', 2, '2023-11-23 21:23:56', '2023-11-23 21:23:56'),
(21, '8aa62784-8404-44a2-a96e-238e0a94ae2b', 'App\\Models\\Event', 'a7da8946-f9b6-4881-8abf-4c3d98f9775c', 'images', 'roasting3', 'roasting3.png', 'image/png', 'public', 'public', 382890, '[]', '[]', '[]', '[]', 3, '2023-11-23 21:23:56', '2023-11-23 21:23:56'),
(22, '8aa62784-8404-44a2-a96e-238e0a94ae2b', 'App\\Models\\Event', '078ee036-213d-480e-ad50-65fbcd343d85', 'images', 'roasting4', 'roasting4.png', 'image/png', 'public', 'public', 282647, '[]', '[]', '[]', '[]', 4, '2023-11-23 21:23:56', '2023-11-23 21:23:56'),
(23, '7eb4861f-ccaa-4559-a7d5-593dd2c08357', 'App\\Models\\Event', '03bc5125-c72d-43df-a5f2-04474e039695', 'images', 'public1', 'public1.png', 'image/png', 'public', 'public', 370845, '[]', '[]', '[]', '[]', 1, '2023-11-23 21:24:07', '2023-11-23 21:24:07'),
(24, '7eb4861f-ccaa-4559-a7d5-593dd2c08357', 'App\\Models\\Event', '67a582af-a5f7-44d0-965d-90420ead4f74', 'images', 'public2', 'public2.png', 'image/png', 'public', 'public', 407628, '[]', '[]', '[]', '[]', 2, '2023-11-23 21:24:07', '2023-11-23 21:24:07'),
(25, '7eb4861f-ccaa-4559-a7d5-593dd2c08357', 'App\\Models\\Event', 'f860388c-1668-4a8b-a1d5-83478403f307', 'images', 'public3', 'public3.png', 'image/png', 'public', 'public', 405235, '[]', '[]', '[]', '[]', 3, '2023-11-23 21:24:07', '2023-11-23 21:24:07'),
(26, '7eb4861f-ccaa-4559-a7d5-593dd2c08357', 'App\\Models\\Event', '2064d41c-e5c6-4594-8a3d-8b171b1fb51a', 'images', 'public4', 'public4.png', 'image/png', 'public', 'public', 407814, '[]', '[]', '[]', '[]', 4, '2023-11-23 21:24:07', '2023-11-23 21:24:07'),
(27, '7eb4861f-ccaa-4559-a7d5-593dd2c08357', 'App\\Models\\Event', 'f6d98d3f-bdaa-4ad7-adae-a058d0e10721', 'images', 'public5', 'public5.png', 'image/png', 'public', 'public', 405148, '[]', '[]', '[]', '[]', 5, '2023-11-23 21:24:07', '2023-11-23 21:24:07'),
(28, '7eb4861f-ccaa-4559-a7d5-593dd2c08357', 'App\\Models\\Event', '372299cb-2664-4c07-a081-73972fba0de0', 'images', 'public6', 'public6.png', 'image/png', 'public', 'public', 391888, '[]', '[]', '[]', '[]', 6, '2023-11-23 21:24:07', '2023-11-23 21:24:07'),
(29, '9e795065-d6aa-4c27-9528-1dde8fb73ec5', 'App\\Models\\Event', 'fa003b7e-6749-4dc6-b71a-703035a41a52', 'images', 'kedai1', 'kedai1.png', 'image/png', 'public', 'public', 329647, '[]', '[]', '[]', '[]', 1, '2023-11-23 21:24:17', '2023-11-23 21:24:17'),
(30, '9e795065-d6aa-4c27-9528-1dde8fb73ec5', 'App\\Models\\Event', '728e0191-04e7-4640-9c01-15491ec0d6bb', 'images', 'kedai2', 'kedai2.png', 'image/png', 'public', 'public', 296565, '[]', '[]', '[]', '[]', 2, '2023-11-23 21:24:17', '2023-11-23 21:24:17'),
(31, '9e795065-d6aa-4c27-9528-1dde8fb73ec5', 'App\\Models\\Event', '70e10c6b-a426-4124-a424-8cb4d3a32820', 'images', 'kedai3', 'kedai3.png', 'image/png', 'public', 'public', 309270, '[]', '[]', '[]', '[]', 3, '2023-11-23 21:24:17', '2023-11-23 21:24:17'),
(32, '9e795065-d6aa-4c27-9528-1dde8fb73ec5', 'App\\Models\\Event', '867899a0-d414-4f1e-8bb0-8235d0fc29a3', 'images', 'kedai4', 'kedai4.png', 'image/png', 'public', 'public', 317877, '[]', '[]', '[]', '[]', 4, '2023-11-23 21:24:17', '2023-11-23 21:24:17'),
(33, '9e795065-d6aa-4c27-9528-1dde8fb73ec5', 'App\\Models\\Event', 'f496d8c0-2e80-46e7-a576-998c6c06a8f9', 'images', 'kedai5', 'kedai5.png', 'image/png', 'public', 'public', 283644, '[]', '[]', '[]', '[]', 5, '2023-11-23 21:24:17', '2023-11-23 21:24:17'),
(34, '9e795065-d6aa-4c27-9528-1dde8fb73ec5', 'App\\Models\\Event', '387c700c-bf0b-4957-bdf0-480271ed2b79', 'images', 'kedai6', 'kedai6.png', 'image/png', 'public', 'public', 310035, '[]', '[]', '[]', '[]', 6, '2023-11-23 21:24:17', '2023-11-23 21:24:17'),
(35, '9e795065-d6aa-4c27-9528-1dde8fb73ec5', 'App\\Models\\Event', '13938450-addc-4ee7-b206-ac8ef0b0d8b5', 'images', 'kedai7', 'kedai7.png', 'image/png', 'public', 'public', 305199, '[]', '[]', '[]', '[]', 7, '2023-11-23 21:24:17', '2023-11-23 21:24:17'),
(36, '9e795065-d6aa-4c27-9528-1dde8fb73ec5', 'App\\Models\\Event', '06621c4b-9da7-4ca8-a24f-efca60d5ccf9', 'images', 'kedai8', 'kedai8.png', 'image/png', 'public', 'public', 311599, '[]', '[]', '[]', '[]', 8, '2023-11-23 21:24:17', '2023-11-23 21:24:17'),
(37, '9e795065-d6aa-4c27-9528-1dde8fb73ec5', 'App\\Models\\Event', '57042524-c95e-42b3-a27a-0e4a559bf47e', 'images', 'kedai9', 'kedai9.png', 'image/png', 'public', 'public', 304394, '[]', '[]', '[]', '[]', 9, '2023-11-23 21:24:17', '2023-11-23 21:24:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_uuid_unique` (`uuid`),
  ADD KEY `media_order_column_index` (`order_column`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

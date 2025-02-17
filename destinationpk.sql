-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2024 at 10:12 AM
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
-- Database: `destinationpk`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `bg_image` varchar(255) DEFAULT NULL,
  `isActive` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `bg_image`, `isActive`, `created_at`, `updated_at`) VALUES
(1, 'City Tour', 'Faisal-Mosque-Islamabad.webp', 1, '2023-11-10 14:42:05', '2023-11-10 14:42:07'),
(2, 'Culture & Adventure Tours', 'Atabad_Lake.webp', 1, '2023-11-11 13:46:24', '2023-11-11 13:46:25'),
(3, 'Bike Trips', 'bike_trip.jpg', 1, '2023-11-11 13:47:05', '2023-11-11 13:47:06'),
(4, 'Sikh Pilgrims', 'kartarpur_corridor.jpg', 1, '2024-06-04 04:27:15', '2024-06-04 04:27:26'),
(5, 'Festivals', NULL, 1, '2024-06-04 04:27:31', '2024-06-04 04:27:40'),
(6, 'Trekking Trips', 'naltar.jpg', 1, '2024-06-04 04:27:47', '2024-06-04 04:27:52');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media_gallery`
--

CREATE TABLE `media_gallery` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trip_id` bigint(20) UNSIGNED NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `media_gallery`
--

INSERT INTO `media_gallery` (`id`, `trip_id`, `image_path`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'destination_pakistan_1700401372_Karakoram_Highway.jpg.webp', '2023-11-19 08:42:54', '2023-11-19 08:42:54', NULL),
(2, 1, 'destination_pakistan_1700401435_Pakistan_traditional_bus_Karakoram_highway.jpg.webp', '2023-11-19 08:43:58', '2023-11-19 08:43:58', NULL),
(3, 1, 'destination_pakistan_1700401468_Fairy_Meadows_Nanga_Parbat_Pakistan.jpg.webp', '2023-11-19 08:44:30', '2023-11-25 03:11:18', '2023-11-25 03:11:18'),
(4, 1, 'destination_pakistan_1700401558_04.jpg.webp', '2023-11-19 08:46:00', '2023-11-19 08:46:00', NULL),
(5, 4, 'destination_pakistan_1700665243_Copy_of__LUK8203xcbxcbf.jpg.webp', '2023-11-22 10:00:46', '2023-11-22 10:00:46', NULL),
(6, 4, 'destination_pakistan_1700665277_Copy_of_bhkg.jpg.webp', '2023-11-22 10:01:20', '2023-11-22 10:01:20', NULL),
(7, 4, 'destination_pakistan_1700665338_Copy_of_DJI_0404-ghgg.jpg.webp', '2023-11-22 10:02:21', '2023-11-22 10:02:21', NULL),
(8, 4, 'destination_pakistan_1700665392_Copy_of_DJI_0491-Panofhh.jpg.webp', '2023-11-22 10:03:15', '2023-11-22 10:03:15', NULL),
(9, 4, 'destination_pakistan_1700665440_Copy_of_E2963494-2583-4457-9336-60FBFFFB6767.jpg.webp', '2023-11-22 10:04:01', '2023-11-22 10:04:01', NULL),
(10, 4, 'destination_pakistan_1700665467_Copy_of_Now_u_got_3_weathers_on_a_same_place.jpg.webp', '2023-11-22 10:04:29', '2023-11-22 10:04:29', NULL),
(11, 4, 'destination_pakistan_1700665535_Copy_of_IMG_7829.jpg.webp', '2023-11-22 10:05:38', '2023-11-22 10:05:38', NULL),
(12, 4, 'destination_pakistan_1700665603_Altit_Fort_Hunza_City_GB_Pakistan.jpg.webp', '2023-11-22 10:06:45', '2023-11-22 10:06:45', NULL),
(13, 4, 'destination_pakistan_1700665623_Hussaini_Bridge_Gojal_Valley_Pakistan.jpg.webp', '2023-11-22 10:07:05', '2023-11-22 10:07:05', NULL),
(14, 4, 'destination_pakistan_1700665657_Hunza_Valley_Pakistan.jpg.webp', '2023-11-22 10:07:39', '2023-11-22 10:07:39', NULL),
(15, 4, 'destination_pakistan_1700665685_Selfie_Time_at_Nanga_Parbat_Peak_Pakistan.jpg.webp', '2023-11-22 10:08:06', '2023-11-22 10:08:06', NULL),
(16, 4, 'destination_pakistan_1700665706_Fairy_meadows_Nanga_parbat_peak-Pakistan.jpg.webp', '2023-11-22 10:08:28', '2023-11-22 10:08:28', NULL),
(17, 1, 'destination_pakistan_1700899951_Pakistan_Truck_Art_and_Passu_Cones.jpg.webp', '2023-11-25 03:12:34', '2023-11-25 03:12:34', NULL),
(18, 1, 'destination_pakistan_1700900015_Faisal_Masjid_Islamabad.jpg.webp', '2023-11-25 03:13:43', '2023-11-25 03:13:43', NULL),
(19, 1, 'destination_pakistan_1700900071_Hunza.jpg.webp', '2023-11-25 03:14:35', '2023-11-25 03:14:35', NULL),
(20, 2, 'destination_pakistan_1700900513__B8V0088-Panond.jpg.webp', '2023-11-25 03:21:56', '2023-11-25 03:21:56', NULL),
(21, 2, 'destination_pakistan_1700900582_Tiger_Peak_Naran.jpg.webp', '2023-11-25 03:23:04', '2023-11-25 03:23:04', NULL),
(22, 2, 'destination_pakistan_1700900662_Faisal_Masjid_Islamabad.jpg.webp', '2023-11-25 03:24:30', '2023-11-25 03:24:30', NULL),
(23, 2, 'destination_pakistan_1700900711_Hunza_Skardu.jpg.webp', '2023-11-25 03:25:14', '2023-11-25 03:25:14', NULL),
(24, 2, 'destination_pakistan_1700900827_Attabad_Lake.jpg.webp', '2023-11-25 03:27:09', '2023-11-25 03:27:09', NULL),
(25, 2, 'destination_pakistan_1700900870_Cold_Desert_Skardu.jpg.webp', '2023-11-25 03:27:53', '2023-11-25 03:27:53', NULL),
(26, 2, 'destination_pakistan_1700900911_Lake_Saif_ul_Malook.jpg.webp', '2023-11-25 03:28:33', '2023-11-25 03:28:33', NULL),
(27, 2, 'destination_pakistan_1700900948_Karakoram_Highway.jpg.webp', '2023-11-25 03:29:10', '2023-11-25 03:29:10', NULL),
(28, 2, 'destination_pakistan_1700901073_Rakaposhi_Hunza_Pakistan.jpg.webp', '2023-11-25 03:31:15', '2023-11-25 03:31:15', NULL),
(29, 10, 'destination_pakistan_1701596072_Faisal_Masjid_Islamabad_(2).jpg.webp', '2023-12-03 04:34:35', '2023-12-03 04:34:35', NULL),
(30, 10, 'destination_pakistan_1701596154_Faisal_Masjid_Islamabad.jpg.webp', '2023-12-03 04:36:02', '2023-12-03 04:36:02', NULL),
(31, 10, 'destination_pakistan_1701596206_Fairy_Meadows_Pakistan.jpg.webp', '2023-12-03 04:36:49', '2023-12-03 04:36:49', NULL),
(32, 10, 'destination_pakistan_1701596248_Fairy_meadows_Pakistan_2.jpg.webp', '2023-12-03 04:37:32', '2023-12-03 04:37:32', NULL),
(33, 10, 'destination_pakistan_1701596700_hunza_Autumn.jpg.webp', '2023-12-03 04:45:03', '2023-12-03 04:45:03', NULL),
(34, 10, 'destination_pakistan_1701596778_Hunza_Landscape.jpg.webp', '2023-12-03 04:46:21', '2023-12-03 04:46:21', NULL),
(35, 10, 'destination_pakistan_1701596801_Attabad_Lake.jpg.webp', '2023-12-03 04:46:43', '2023-12-03 04:46:43', NULL),
(36, 10, 'destination_pakistan_1701596829_Attabad_Lake_2.jpg.webp', '2023-12-03 04:47:11', '2023-12-03 04:47:11', NULL),
(37, 10, 'destination_pakistan_1701596926_Katpana_Desert_Skrdu.jpg.webp', '2023-12-03 04:48:50', '2023-12-03 04:48:50', NULL),
(38, 10, 'destination_pakistan_1701597028_WB8V0092xcbfxv.jpg.webp', '2023-12-03 04:50:31', '2023-12-03 04:50:31', NULL),
(39, 10, 'destination_pakistan_1701597138_Attabad_Lake_3.JPG.webp', '2023-12-03 04:52:21', '2023-12-03 04:52:21', NULL),
(40, 10, 'destination_pakistan_1701597178_Cold_Desert_Skardu.jpg.webp', '2023-12-03 04:53:00', '2023-12-03 04:53:00', NULL),
(41, 1, 'destination_pakistan_1701597622_WB8V0169cxbf_(1).jpg.webp', '2023-12-03 05:00:25', '2023-12-03 05:00:25', NULL),
(42, 1, 'destination_pakistan_1701597791_DJI_0404-ghgg.jpg.webp', '2023-12-03 05:03:14', '2023-12-03 05:03:14', NULL),
(43, 1, 'destination_pakistan_1701597831_Skardu.jpg.webp', '2023-12-03 05:03:54', '2023-12-03 05:03:54', NULL),
(44, 3, 'destination_pakistan_1701597898_Fairy_Meadows_Pakistan.jpg.webp', '2023-12-03 05:05:01', '2023-12-03 05:05:01', NULL),
(45, 3, 'destination_pakistan_1701599232_Fairy_meadows_Pakistan_2.jpg.webp', '2023-12-03 05:27:15', '2023-12-03 05:27:15', NULL),
(46, 3, 'destination_pakistan_1701599260_DJI_0491-Panofhh.jpg.webp', '2023-12-03 05:27:43', '2023-12-03 05:27:43', NULL),
(47, 3, 'destination_pakistan_1701599282__B8V0088-Panond.jpg.webp', '2023-12-03 05:28:05', '2023-12-03 05:28:05', NULL),
(48, 3, 'destination_pakistan_1701599946_Attabad_Lake_2.jpg.webp', '2023-12-03 05:39:08', '2023-12-03 05:39:08', NULL),
(49, 3, 'destination_pakistan_1701600173_Rakaposhi_Hunza_Pakistan.jpg.webp', '2023-12-03 05:42:55', '2023-12-03 05:42:55', NULL),
(50, 3, 'destination_pakistan_1701600225_Attabad_Lake.jpg.webp', '2023-12-03 05:43:48', '2023-12-03 05:43:48', NULL),
(51, 3, 'destination_pakistan_1701600291_Hunza_Landscape.jpg.webp', '2023-12-03 05:44:54', '2023-12-03 05:44:54', NULL),
(52, 3, 'destination_pakistan_1701600395_IMG_7755-Pano.jpg.webp', '2023-12-03 05:46:41', '2023-12-03 05:46:41', NULL),
(53, 3, 'destination_pakistan_1701600745_Skardu.jpg.webp', '2023-12-03 05:52:28', '2023-12-03 05:52:28', NULL),
(54, 4, 'destination_pakistan_1701602039_China_Border_Khunjerab_Pass.jpg.webp', '2023-12-03 06:14:02', '2023-12-03 06:14:02', NULL),
(55, 8, 'destination_pakistan_1701602056_Attabad_Lake_2.jpg.webp', '2023-12-03 06:14:18', '2023-12-03 06:14:18', NULL),
(56, 8, 'destination_pakistan_1701602099_Autumn_in_Khaplu_City.jpg.webp', '2023-12-03 06:15:03', '2023-12-03 06:15:03', NULL),
(57, 8, 'destination_pakistan_1701602133_Karakoram_Highway.jpg.webp', '2023-12-03 06:15:35', '2023-12-03 06:15:35', NULL),
(58, 8, 'destination_pakistan_1701602202_Hussaini_Bridge.jpg.webp', '2023-12-03 06:16:47', '2023-12-03 06:16:47', NULL),
(59, 8, 'destination_pakistan_1701602236_Hunza.jpg.webp', '2023-12-03 06:17:19', '2023-12-03 06:17:19', NULL),
(60, 8, 'destination_pakistan_1701602272_China_Border_Khunjerab_Pass.jpg.webp', '2023-12-03 06:17:55', '2023-12-03 06:17:55', NULL),
(61, 8, 'destination_pakistan_1701602301_Hunza_Landscape.jpg.webp', '2023-12-03 06:18:24', '2023-12-03 06:18:24', NULL),
(62, 8, 'destination_pakistan_1701602327_Maclu_-_Heldi_cones_.jpg.webp', '2023-12-03 06:18:49', '2023-12-03 06:18:49', NULL),
(63, 8, 'destination_pakistan_1701602355_Skardu.jpg.webp', '2023-12-03 06:19:18', '2023-12-03 06:19:18', NULL),
(64, 9, 'destination_pakistan_1701603106_China_Border_Khunjerab_Pass.jpg.webp', '2023-12-03 06:31:49', '2023-12-03 06:31:49', NULL),
(65, 9, 'destination_pakistan_1701603144_Faisal_Masjid_Islamabad.jpg.webp', '2023-12-03 06:32:32', '2023-12-03 06:32:32', NULL),
(66, 9, 'destination_pakistan_1701603180_hunza_Autumn.jpg.webp', '2023-12-03 06:33:02', '2023-12-03 06:33:02', NULL),
(67, 9, 'destination_pakistan_1701603204_WB8V0092xcbfxv.jpg.webp', '2023-12-03 06:33:27', '2023-12-03 06:33:27', NULL),
(68, 9, 'destination_pakistan_1701603228_WB8V0124xcb.jpg.webp', '2023-12-03 06:33:52', '2023-12-03 06:33:52', NULL),
(69, 9, 'destination_pakistan_1701603260_Rakaposhi_Mountain.JPG.webp', '2023-12-03 06:34:23', '2023-12-03 06:34:23', NULL),
(70, 9, 'destination_pakistan_1701603296_Pakistan_Truck_Art_and_Passu_Cones.jpg.webp', '2023-12-03 06:34:59', '2023-12-03 06:34:59', NULL),
(71, 9, 'destination_pakistan_1701603348_Hunza_Landscape.jpg.webp', '2023-12-03 06:35:50', '2023-12-03 06:35:50', NULL),
(72, 9, 'destination_pakistan_1701603371_Now_u_got_3_weathers_on_a_same_place.jpg.webp', '2023-12-03 06:36:13', '2023-12-03 06:36:13', NULL),
(73, 11, 'destination_pakistan_1710872921_WhatsApp_Image_2024-03-19_at_23.22.26_aefe5fbb.jpg.webp', '2024-03-19 13:28:42', '2024-05-19 06:43:03', '2024-05-19 06:43:03'),
(74, 11, 'destination_pakistan_1710872939_WhatsApp_Image_2024-03-19_at_23.22.25_ebe0438b.jpg.webp', '2024-03-19 13:29:01', '2024-05-19 06:43:00', '2024-05-19 06:43:00'),
(75, 11, 'destination_pakistan_1710872956_WhatsApp_Image_2024-03-19_at_23.22.25_4e21609c.jpg.webp', '2024-03-19 13:29:18', '2024-05-19 06:43:06', '2024-05-19 06:43:06'),
(76, 11, 'destination_pakistan_1710873012_WhatsApp_Image_2024-03-19_at_23.22.24_9ae12c16.jpg.webp', '2024-03-19 13:30:13', '2024-05-19 06:43:09', '2024-05-19 06:43:09'),
(77, 12, 'destination_pakistan_1716117680__B8V0088-Panond.jpg.webp', '2024-05-19 06:21:23', '2024-05-19 06:21:23', NULL),
(78, 12, 'destination_pakistan_1716117725_CDD6526E-8C8C-47EF-8B93-49ABF91DB58C.jpg.webp', '2024-05-19 06:22:06', '2024-05-19 06:22:06', NULL),
(79, 12, 'destination_pakistan_1716117773_IMG_3109x.jpg.webp', '2024-05-19 06:22:56', '2024-05-19 06:22:56', NULL),
(80, 12, 'destination_pakistan_1716117840_WB8V0169cxbf_(1).jpg.webp', '2024-05-19 06:24:03', '2024-05-19 06:24:03', NULL),
(81, 12, 'destination_pakistan_1716117884_Karakoram_Highway.jpg.webp', '2024-05-19 06:24:47', '2024-05-19 06:24:47', NULL),
(82, 12, 'destination_pakistan_1716117920_Passu_Cones.jpg.webp', '2024-05-19 06:25:23', '2024-05-19 06:25:23', NULL),
(83, 12, 'destination_pakistan_1716118108_9A228177-F7EA-4A29-8468-867C4BF484E4.jpg.webp', '2024-05-19 06:28:30', '2024-05-19 06:28:30', NULL),
(84, 12, 'destination_pakistan_1716118157_DJI_0022-Pano.jpg.webp', '2024-05-19 06:29:20', '2024-05-19 06:29:20', NULL),
(85, 12, 'destination_pakistan_1716118192_IMG_3088.jpg.webp', '2024-05-19 06:29:55', '2024-05-19 06:29:55', NULL),
(86, 11, 'destination_pakistan_1716119001_Now_(1).jpg.webp', '2024-05-19 06:43:23', '2024-05-19 06:43:23', NULL),
(87, 11, 'destination_pakistan_1716119064_Karakoram_Highway_2.jpg.webp', '2024-05-19 06:44:27', '2024-05-19 06:44:27', NULL),
(88, 11, 'destination_pakistan_1716119120_IMG_7656-HDR.jpg.webp', '2024-05-19 06:45:23', '2024-05-19 06:45:23', NULL),
(89, 11, 'destination_pakistan_1716119151_DJI_0584-Panogh.jpg.webp', '2024-05-19 06:45:53', '2024-05-19 06:45:53', NULL),
(90, 11, 'destination_pakistan_1716119184_DJI_0219-Panodfff.jpg.webp', '2024-05-19 06:46:26', '2024-05-19 06:46:26', NULL),
(91, 11, 'destination_pakistan_1716119226_CDD6526E-8C8C-47EF-8B93-49ABF91DB58C.jpg.webp', '2024-05-19 06:47:08', '2024-05-19 06:47:08', NULL),
(92, 11, 'destination_pakistan_1716119527_IMG_2865-Pano.jpg.webp', '2024-05-19 06:52:11', '2024-05-19 06:52:11', NULL),
(93, 11, 'destination_pakistan_1716119604_IMG_3088.jpg.webp', '2024-05-19 06:53:27', '2024-05-19 06:53:27', NULL),
(94, 11, 'destination_pakistan_1716119659_WB8V0092xcbfxv.jpg.webp', '2024-05-19 06:54:22', '2024-05-19 06:54:22', NULL),
(95, 11, 'destination_pakistan_1716119715_Passu_Cones.jpg.webp', '2024-05-19 06:55:18', '2024-05-19 06:55:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_10_185732_create_categories_table', 1),
(6, '2023_11_11_125541_create_trips_table', 1),
(7, '2023_11_11_125850_create_locations_table', 1),
(8, '2023_11_18_140138_create_media_gallery_table', 1),
(9, '2023_11_19_092615_create_newsletter_subscriptions_table', 1),
(10, '2024_05_31_043841_create_trip_destinations_table', 2),
(11, '2024_05_31_043923_create_trip_itineraries_table', 2),
(12, '2024_06_03_153010_create_trip_schedules_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter_subscriptions`
--

CREATE TABLE `newsletter_subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newsletter_subscriptions`
--

INSERT INTO `newsletter_subscriptions` (`id`, `email`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'rafianltvc@gmail.com', NULL, '2024-06-06 06:17:53', '2024-06-06 06:17:53');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

CREATE TABLE `trips` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trip_title` varchar(255) NOT NULL,
  `title_slug` varchar(255) NOT NULL,
  `trip_destinations` varchar(255) DEFAULT NULL,
  `trip_category` int(11) NOT NULL,
  `trip_image` varchar(255) NOT NULL,
  `trip_duration` varchar(255) NOT NULL,
  `trip_description` text NOT NULL,
  `trip_overview` text DEFAULT NULL,
  `trip_includes` text NOT NULL,
  `trip_excludes` text NOT NULL,
  `trip_itinerary` text DEFAULT NULL,
  `trip_price` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`id`, `trip_title`, `title_slug`, `trip_destinations`, `trip_category`, `trip_image`, `trip_duration`, `trip_description`, `trip_overview`, `trip_includes`, `trip_excludes`, `trip_itinerary`, `trip_price`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Northern Pakistan Trip 2024- 2025', 'northern-pakistan-trip-2023', 'Lahore, Islamabad, Hunza, Skardu & Swat', 2, '1700401250_02.webp', '15', '<p>Pakistan is incredibly blessed with a diverse landscape. The country has numerous sites of historical and cultural significance, including areas of natural beauty. The 15 Days itinerary begins with a pick up from the airport. The trip would cover main tourist spot like Hunza, Skardu &amp; Swat</p>', NULL, '<ul><li>Airport pickup and drop-off</li><li>Transport from Airport - Airport &nbsp;</li><li>Breakfast 🥞&nbsp;</li><li>Accommodation in Hotels and traditional guest houses &nbsp;</li><li>4/4 Jeeps wherever required during the Trip&nbsp;</li><li>Toll/Taxes/Fuel&nbsp;</li><li>Driver Expenses&nbsp;</li><li>Certified first-aid mountaineering captains</li><li>Destination Pakistan welcome gift pack to our adventurers</li><li>Letter of invitation (if required)&nbsp;</li><li>Visa application assistance (if required)</li></ul><p>&nbsp;</p>', '<ul><li>International airline tickets&nbsp;</li><li>Lunch &nbsp;</li><li>Personal expenses including buying personal gear, snacks or extra food and drinks</li><li>Entry tickets&nbsp;of&nbsp;any&nbsp;kind</li></ul>', '<h3><strong>Day&nbsp;1: (Lahore)</strong></h3><ul><li>Pick up from Lahore Airport</li><li>Check in at Hotel</li><li>Brace yourself to experience Lahore’s unique food experience</li><li>Check in at hotel after first day experience</li></ul><p>&nbsp;</p><h3><strong>Day&nbsp;02: (Visit to Lahore’s Historical Places)</strong></h3><ul><li>Time for Lahore’s traditional breakfast</li><li>Visit Historical Walled City of Lahore</li><li>Visit 16th Century Badshah Masjid</li><li>Visit 15th Century Lahore Fort</li><li>Visit 16th Century Masjid Wazir Khan</li><li>Visit Wagha Border in the evening to experience<br>flag hosting parade between India &amp; Pakistan</li><li>Traditional Dinner at Haveli Restaurant Anarkali.</li><li>Night Stay at Lahore</li></ul><p>&nbsp;</p><h3><strong>Day&nbsp;03: (Drive to Islamabad)</strong></h3><ul><li>Early morning breakfast</li><li>Leave for Islamabad (Comfortable 4 hours drive from Motorway)</li><li>short stops along the way</li><li>Reach Islamabad &amp; Visit Faisal Masjid</li><li>Visit Margalla Hills &amp; Dam ne Koh</li><li>Dinner at Islamabad’s scenic Monal Restaurant that<br>oversees entire Islamabad</li></ul><p>&nbsp;</p><h3><strong>Day&nbsp;04: (Enroute to Chillas)</strong></h3><ul><li>Early Morning breakfast and timely departure to Chillas</li><li>Travel towards chillas (8-9 hours of travelling on Karakoram<br>highway (Highest paved road in the world)</li><li>Visit Besham</li><li>Short stays along the way.</li><li>Reach Chillas &amp; Dinner.</li><li>Night stay at the hotel.</li></ul><p>&nbsp;</p><h3><strong>Day&nbsp;05: (Experience World’s highest Peaks)</strong></h3><ul><li>Early Morning Breakfast</li><li>Visit Nanga Parbat view point (9th Highest mountain in&nbsp;<br>the world – Elevation 8126m)</li><li>Visit Junction point of three highest mountain ranges in<br>the world (Karakoram, Himalaya &amp; Hindukush)</li><li>Lunch break at Rakaposhi viewpoint (27th highest in the world)</li><li>Visit Karimabad Market (Popular for traditional &amp; Cultural&nbsp;<br>Handicrafts)&nbsp;</li><li>Visit Café de Hunza (Famous for Walnut Cake)</li><li>Visit Baltit fort</li><li>Night Stay at Karimabad Hunza</li></ul><p>&nbsp;</p><h3><strong>Day&nbsp;6: (Explore Hunza’s vicinity)&nbsp;</strong></h3><ul><li>Early Morning BreakfastVisit Historical 11th Century Altit and Royal gardens</li><li>Visit stunning Blue colored Attabad Lake</li><li>Visit Passu cones&nbsp;</li><li>Visit Passu yak Grill Café</li><li>Visit World’s longest hanging bridge – Hussaini Bridge</li><li>Dinner, Bonfire &amp; night stay at Passu.<br>&nbsp;</li></ul><h3><strong>Day&nbsp;7: (Travel to Stunning Skardu)</strong></h3><ul><li>Early Morning Breakfast</li><li>Travel to Skardu (6 hours journey on Karakoram highway)</li><li>Visit mesmerizing Upper Kachura &amp; Lower Kachura</li><li>Visit Soq Valley</li><li>Night Stay in Skardu</li><li>&nbsp;</li></ul><h3><strong>Day&nbsp;8: (Travel to Basho valley)</strong></h3><ul><li>Early morning breakfast</li><li>Shift to 4/4 jeeps for a visit to Basho Valleys &amp; meadows&nbsp;<br>(One of the stunning places in Skardu)</li><li>Back to Skardu for the night stay</li></ul><p>&nbsp;</p><h3><strong>Day&nbsp;09: (Explore Shigar &amp; Cold Desert)</strong></h3><ul><li>Early Morning Breakfast</li><li>Visit Shigar valley and visit the 17th Century Shigar Fort</li><li>Visit Bab-e- Shigar&nbsp;</li><li>Visit Katpana Desert aka cold desert – High altitude cold desert</li><li>Night stay in Shigar</li><li>&nbsp;</li></ul><h3><strong>Day&nbsp;10: (Explore Khaplu &amp;&nbsp; Manthoka waterfall)</strong></h3><ul><li>Early Morning breakfast</li><li>Visit Manthoka Waterfall which usually freezes in winter time</li><li>Visit Khaplu Valley(This is the starting point for mountaineers<br>who want to go for mountaineer to &nbsp;Masherbrum, K6, K7 &amp; Choglisa)</li><li>Visit Khaplu Masjid (700 years old)</li><li>Visit Thoqseekhar (highest point of Skardu)</li></ul><p>&nbsp;</p><h3><strong>Day&nbsp;11: (Travel to Swat)</strong></h3><ul><li>Early Morning Breakfast</li><li>Travel towards Beshaam</li><li>Few Stops along the way</li><li>Visit Chillas in the evening</li><li>Night stay at Cillas</li></ul><p>&nbsp;</p><h3><strong>Day&nbsp;12: (Visit Switzerland of Asia)</strong></h3><ul><li>Early Morning Breakfast</li><li>Travel towards Swat Valley</li><li>Visit Behrain Mall and Kalam Bazaar</li><li>Visit Beautiful Ushu Forest</li><li>Night stay at Kalam</li></ul><p>&nbsp;</p><h3><strong>Day&nbsp;13: (Experience Swat)</strong></h3><ul><li>Early Morning Breakfast</li><li>Move to 4/4 Jeeps</li><li>Visit Palonga Village &amp; Mahudand Lake</li><li>Night stay at Fizzaghat Swat</li></ul><p>&nbsp;</p><h3><strong>Day&nbsp;14: (Experience Mahudand Lake)</strong></h3><ul><li>Early Morning Breakfast</li><li>Visit Malam Jabba Ski resort which looks stunning during winters</li><li>Enjoy Cable car &amp; Skiing activities.</li><li>Travel back to Islamabad via Hazara Motorway</li></ul><p>&nbsp;</p><h3><strong>Day&nbsp;15: (Islamabad - Airport)</strong></h3><ul><li>Early Morning Breakfast</li><li>Dropoff Service members at the airport</li><li>End of Services</li></ul>', 1500.00, '2023-11-19 08:40:50', '2024-06-06 02:24:07', NULL),
(2, 'Northern Pakistan Adventure & Trek Trip 2024 - 2025', 'northern-pakistan-adventure-trek-trip-2023', 'Lahore, Islamabad, Hunza, Fairy Meadows', 2, '1700403173_01.webp', '13', '<p>Embark on a 13-day odyssey through the diverse landscapes of Pakistan, where each day unfolds a new chapter of history, culture, and natural wonders. From the hustle and bustle of Lahore to the serenity of Fairy Meadows and the majesty of Hunza Valley, this adventure promises an unforgettable exploration.</p><p><br>&nbsp;</p>', NULL, '<ul><li>Airport pickup and drop-off</li><li>Transport from Airport - Airport &nbsp;</li><li>Breakfast 🥞&nbsp;</li><li>Accommodation in Hotels and traditional guest houses &nbsp;</li><li>4/4 Jeeps wherever required during the Trip&nbsp;</li><li>Toll/Taxes/Fuel&nbsp;</li><li>Driver Expenses&nbsp;</li><li>Certified first-aid mountaineering captains</li><li>Destination Pakistan welcome gift pack to our adventurers</li><li>Letter of invitation (if required)&nbsp;</li><li>visa application assistance (if required)<br>&nbsp;</li></ul>', '<ul><li>Intl airline tickets&nbsp;</li><li>Lunch &nbsp;</li><li>Personal expenses including buying personal gear, snacks or extra food and drinks</li><li>Entry tickets&nbsp;of&nbsp;any&nbsp;kind</li></ul>', '<h3><strong>Day&nbsp;1: (Lahore)</strong></h3><ul><li>Pick up from Lahore Airport</li><li>Check in at Hotel</li><li>Brace yourself to experience Lahore’s unique food experience</li><li>Check in at hotel after first day experience</li></ul><p>&nbsp;</p><h3><strong>Day&nbsp;02: (Visit to Lahore’s Historical Places)</strong></h3><ul><li>Time for Lahore’s traditional breakfast</li><li>Visit Historical Walled City of Lahore</li><li>Visit 16th Century Badshah Masjid</li><li>Visit 15th Century Lahore Fort</li><li>Visit 16th Century Masjid Wazir Khan</li><li>Visit Wagha Border in the evening to experience<br>flag hosting parade between India &amp; Pakistan</li><li>Traditional Dinner at Haveli Restaurant Anarkali.</li><li>Night Stay at Lahore</li></ul><p>&nbsp;</p><h3><strong>Day&nbsp;03: (Drive to Islamabad)</strong></h3><ul><li>Early morning breakfast</li><li>Leave for Islamabad (Comfortable 4 hours drive from Motorway)</li><li>short stops along the way</li><li>Reach Islamabad &amp; Visit Faisal Masjid</li><li>Visit Margalla Hills &amp; Dam ne Koh</li><li>Dinner at Islamabad’s scenic Monal Restaurant that<br>oversees entire Islamabad</li></ul><p>&nbsp;</p><h3><strong>Day&nbsp;04: (Enroute to Chillas)</strong></h3><ul><li>Early Morning breakfast and timely departure to Chillas</li><li>Travel towards chillas (8-9 hours of travelling on Karakoram<br>highway (Highest paved road in the world)</li><li>Visit Kiwai Waterfall</li><li>Visit Naran valley, Batakundi &amp; Babusar top</li><li>Reach Chillas &amp; Dinner.</li><li>Night stay at the hotel.</li></ul><p>&nbsp;</p><h3><strong>Day&nbsp;05: (Experience the Fairy Meadows ride)</strong></h3><ul><li>Early Morning breakfast</li><li>Travel towards Fairy Meadows (From fairy meadow, you can have a&nbsp;<br>view of Nanga Parbat- 9th highest mountain in the world.</li><li>Reach Raikot and shift to Jeeps 4/4 (3 hours ride)</li><li>Reach jeep point and hike towards fairy meadows (3-4 hours)</li><li>Dinner, Bonfire &amp; night stay in Fairy Meadow&nbsp;<br>(World’s top destination for Adventure seekers)</li></ul><p>&nbsp;</p><h3><strong>Day&nbsp;06: (Trek to Nanga Parbat basecamp)</strong></h3><ul><li>Early Morning breakfast</li><li>Brace yourself to hike towards Nanga Parbat basecamp&nbsp;<br>&amp; bayal camp.</li><li>Reach Nanga Parbat basecamp in 4-5 hours and night stay&nbsp;<br>at Bayal Camp</li><li>Dinner, Bonfire and night stay at Bayal camp.</li></ul><p>&nbsp;</p><h3><strong>Day&nbsp;07: (Travel to Gilgit)</strong></h3><ul><li>&nbsp;Early Morning breakfast</li><li>Trek back to Bayal camp of Fairy meadows and hike to Jeep point</li><li>Shift to 4/4 jeeps &amp; reach raikot and Gilgit.</li><li>Dinner &amp; night stay at Gilgit</li></ul><h3>&nbsp;</h3><h3><strong>Day&nbsp;08: (Experience World’s highest Peaks)</strong></h3><ul><li>Early Morning Breakfast</li><li>Visit Nanga Parbat view point (9th Highest mountain in&nbsp;<br>the world – Elevation 8126m)</li><li>Visit Junction point of three highest mountain ranges in<br>the world (Karakoram, Himalaya &amp; Hindukush)</li><li>Lunch break at Rakaposhi viewpoint (27th highest in the world)</li><li>Visit Karimabad Market (Popular for traditional &amp; Cultural&nbsp;<br>Handicrafts)&nbsp;</li><li>Visit Café de Hunza (Famous for Walnut Cake)</li><li>Visit Baltit fort</li><li>Night Stay at Karimabad Hunza</li></ul><p>&nbsp;</p><h3><strong>Day&nbsp;9: (Explore Hunza’s vicinity)&nbsp;</strong></h3><ul><li>Early Morning Breakfast</li><li>Visit Historical 11th Century Altit and Royal gardens</li><li>Visit stunning Blue colored Attabad Lake</li><li>Visit Passu cones&nbsp;</li><li>Visit Passu yak Grill Café</li><li>Visit World’s longest hanging bridge – Hussaini Bridge</li><li>Dinner, Bonfire &amp; night stay at Passu.</li></ul><h3>&nbsp;</h3><h3><strong>Day&nbsp;10: (Travel to Khunjerab National Park)</strong></h3><ul><li>Early Morning Breakfast</li><li>Visit Khunjerab national park &amp; Khunjerab border (Between Pakistan – China)<br>which is the highest international border at&nbsp;15,397 ft.</li><li>Travel back to passu village &amp; night stay at Passu</li><li>Visit Passu Village &amp; night stay at Passu</li><li>Visit Passu walnut café &amp; Yak grill café to try local and desi food</li><li>&nbsp;</li></ul><h3><strong>Day&nbsp;11: (Eagle nest)</strong></h3><ul><li>Early morning breakfast</li><li>Visit Eagle’s nest ( you can have view of entire Hunza city<br>&amp; a view of different mountains peak include Nagar valley<br>&amp; Rakaposhi mountain)</li><li>Travel towards Naran &amp; night stay in Naran</li><li>&nbsp;</li></ul><h3><strong>Day&nbsp;12: (Travel to Islamabad)</strong></h3><ul><li>Breakfast</li><li>Reach Islamabad after 4 hours drive</li><li>Rest day in Islamabad (Can be used to visit Malls and Shopping)</li><li>&nbsp;</li></ul><h3><strong>Day&nbsp;13: (Departure &amp; memories)</strong></h3><ul><li>Breakfast</li><li>Drop off members at international airport at per the scheduled flights</li></ul><p>&nbsp;</p><p>&nbsp;</p>', 1450.00, '2023-11-19 09:12:54', '2024-06-06 02:21:22', NULL),
(3, 'Fairy Meadows & Rakaposhi Adventure Trip 2023-2024 Updated', '11-days-fairy-meadows-rakaposhi-adventure-trip', 'Islamabad, Fairy Meadows, Rakaposhi, & Hunza', 2, '1700404014_Pakistan_traditional_bus_Karakoram_highway.webp', '10', '<p>Embark on a 10-day adventure through Pakistan\'s majestic landscapes:<br>Begin in Islamabad, departing for Chillas via the Karakoram Highway, visiting Kiwai Waterfall and Naran Valley. Experience the breathtaking Fairy Meadows with a Jeep ride and a hike offering views of Nanga Parbat, the 9th highest mountain. Trek to Nanga Parbat Basecamp, then travel to Gilgit, exploring the world\'s highest peaks, including Nanga Parbat and Rakaposhi. Head to Hunza, visiting historic sites, Attabad Lake, and the iconic Hussaini Bridge. Continue to Khunjerab National Park, the world\'s highest international border. Return through Naran, concluding the journey in Islamabad with a restful day for shopping and relaxation.</p>', NULL, '<ul><li>Airport pickup and drop-off</li><li>Transport from Airport - Airport &nbsp;</li><li>Breakfast 🥞&nbsp;</li><li>Accommodation in Hotels and traditional guest houses &nbsp;</li><li>4/4 Jeeps wherever required during the Trip&nbsp;</li><li>Toll/Taxes/Fuel&nbsp;</li><li>Driver Expenses&nbsp;</li><li>Certified first-aid mountaineering captains</li><li>Destination Pakistan welcome gift pack to our adventurers</li><li>Letter of invitation (if required)&nbsp;</li><li>visa application assistance (if required)<br>&nbsp;</li></ul>', '<ul><li>Intl airline tickets&nbsp;</li><li>Lunch &nbsp;</li><li>Personal expenses including buying personal gear, snacks or extra food and drinks</li><li>Entry tickets&nbsp;of&nbsp;any&nbsp;kind</li></ul>', '<p><strong>Day 01: Departure from Islamabad</strong></p><p>Embark on an unforgettable journey as you depart from the capital city, Islamabad, and set forth on the mesmerizing Karakoram Highway, the highest paved road in the world. Marvel at the picturesque landscapes during the 8-9 hours drive to Chillas, making a stop to witness the captivating Kiwai Waterfall. Traverse through Naran Valley, Batakundi, and Babusar Top, each unveiling its unique charm. Arrive in Chillas, where a sumptuous dinner awaits, followed by a comfortable night\'s stay at the hotel.<br>&nbsp;</p><p><strong>Day 02: Experience the Fairy Meadows Ride</strong></p><p>As the sun rises, indulge in a hearty breakfast before heading to Raikot. Transfer to 4x4 jeeps for a thrilling 3-hour ride, culminating in the enchanting Fairy Meadows. This world-renowned destination for adventure seekers provides a panoramic view of Nanga Parbat, the 9th highest mountain globally. The evening is filled with a delectable dinner, a crackling bonfire, and a night stay in the ethereal Fairy Meadows.<br>&nbsp;</p><p><strong>Day 03: Trek to Nanga Parbat Basecamp</strong></p><p>With an early breakfast, gear up for an exhilarating trek to Nanga Parbat Basecamp and Bayal Camp. The 4-5 hours hike leads to the awe-inspiring Nanga Parbat Basecamp, where a night at Bayal Camp is nothing short of magical. Dinner is served against the backdrop of a blazing bonfire, making the night at Bayal Camp truly memorable.<br>&nbsp;</p><p><strong>Day 04: Travel to Gilgit</strong></p><p>After a refreshing breakfast, retrace your steps to Fairy Meadows\' Bayal Camp and embark on a jeep ride back to Raikot. Continue the journey to Gilgit City, where a delicious dinner and a night\'s stay await, providing a perfect blend of comfort and adventure.<br>&nbsp;</p><p><strong>Day 05: Experience World’s Highest Peaks</strong></p><p>Begin your day with a nourishing breakfast before a brief stop at the Rakaposhi viewpoint, the 27th highest peak globally. Brace yourself for a challenging yet rewarding 4-5 hour hike to Rakaposhi Basecamp, an experience that offers breathtaking vistas. The night at Rakaposhi Basecamp is adorned with dinner, a bonfire, and the majestic presence of one of the world\'s highest peaks.<br>&nbsp;</p><p><strong>Day 6: Hunza Valley Tour</strong></p><p>Rise to a delightful breakfast before descending from Rakaposhi or traveling from Minapin to Hunza. Explore the vibrant Karimabad Bazaar, visit the iconic Eagle Nest Peak during sunset, and settle in for a serene night\'s stay in the enchanting Hunza Valley.<br>&nbsp;</p><p><strong>Day 7: Explore Hunza’s Vicinity</strong></p><p>Immerse yourself in the rich cultural tapestry of Karimabad Market, savor the famous Walnut Cake at Café de Hunza, and delve into the history of Baltit Fort and 11th-century Altit with its royal gardens. Visit the stunning blue-hued Attabad Lake, marvel at the Passu Cones, and cross the world\'s longest hanging bridge – the Hussaini Bridge. The night in Passu Gojal is complemented by dinner, a bonfire, and the enchanting beauty of your surroundings.<br>&nbsp;</p><p><strong>Day 8: Travel to Khunjerab National Park</strong></p><p>After a nourishing breakfast, journey to Khunjerab National Park and the Pakistan-China border at Khunjerab, the highest international border at 15,397 ft. Optionally, indulge in local and desi food at Passu Walnut Café and Yak Grill Café. Your night in Passu Gojal is sure to be filled with awe and wonder.<br>&nbsp;</p><p><strong>Day 9: Travel Back to Chillas</strong></p><p>Kickstart your day with breakfast and visit Baskochi Top and Hopar Glacier before making your way back to Chillas. Enjoy the night amidst the serene surroundings of Chillas.<br>&nbsp;</p><p><strong>Day 10: Travel to Islamabad</strong></p><p>Savor a final breakfast and make short stops along the way as you journey back to Islamabad. Whether opting for a night stay in the capital or a drop-off at the airport, your adventure concludes with a treasure trove of memories from the unparalleled landscapes of Pakistan.</p>', 1250.00, '2023-11-19 09:26:55', '2023-11-25 02:51:41', NULL),
(4, 'Explore Pakistan with Nora: The Ultimate Adventure Expedition', 'northern-pakistan-adventure-trip-to-nanga-parbat-basecamp-hunza-valley-aka-shangri-la-of-asia', 'Islamabad, Hunza, Nanga Parbat Base Camp', 2, '1700664838_Nanga_Parbat.webp', '11', '<p><strong>Join </strong><a href=\"https://www.instagram.com/noratheexplorahh/\"><strong>Nora the Explorahh</strong></a><strong> and Fellow Travel Enthusiasts on an Epic Adventure in Pakistan!</strong></p><p>Are you ready for the journey of a lifetime? Join our exclusive group trip led by renowned travel influencer @noratheexplorahh and explore the breathtaking landscapes of Pakistan.</p><p>Nora and her followers will embark on this adventure from 20th to 30th June 2024.</p><p>Elevations:<br>- Fairy Meadows: Approx. 3,300 meters (10,827 feet)<br>- Bayal Camp: 3550m&nbsp;<br>- Nanga Parbat Basecamp: Approx. 3,900 meters (12,795 feet)<br>- Passu Cones: 2,438 meters (7,999 feet)<br>- Baskochi Top: 3,900m (12,795 ft)<br>- Hopar Glacier: 2,438m (8,000 ft)&nbsp;</p><p>&nbsp;</p><p><strong>To book, secure your spot with a $300 deposit. Contact us for payment plan options and further details.</strong></p><p>&nbsp;</p>', NULL, '<ul><li>Airport pickup and drop-off</li><li>Accommodation as per itinerary</li><li>Meals (Breakfast &amp; Dinner)&nbsp;</li><li>Transportation</li><li>Certified mountaineering captains</li><li>Welcome gift pack</li><li>Visa assistance (if required)</li><li>Tourist Invitation Letter</li></ul>', '<ul><li>International airline tickets</li><li>Lunch</li><li>Personal expenses</li><li>Entry tickets</li><li>Travel Insurances</li><li>Unforeseen circumstances&nbsp;</li></ul>', '<p><strong>Day 01: Arrival in Islamabad - Unveiling the Journey</strong></p><p>Your adventure with Destination Pakistan begins with a seamless pickup from Islamabad Airport, whisking you away to a carefully chosen guest house where comfort meets sophistication. As the sun sets over the capital city, relish a delightful dinner, laying the foundation for the enchanting days ahead.<br>&nbsp;</p><p><strong>Day 02: Journey Towards Chillas - Karakoram Odyssey</strong></p><p>Awaken to the promise of a new day with an early morning breakfast, signaling the start of an exhilarating journey towards Chillas via the iconic Karakoram Highway. Along the way, be captivated by the mesmerizing Kiwai Waterfall and the awe-inspiring beauty of Naran Valley, Batakundi, and Babusar Top. The day concludes in Chillas, where dinner and a night of tranquility at the hotel await.<br>&nbsp;</p><p><strong>Day 03: Fairy Meadows Ride - A Trek to Enchantment</strong></p><p>Embrace the magic of Fairy Meadows on day three, commencing with an early morning breakfast. A thrilling 3-hour Jeep ride from Raikot sets the stage for a captivating 3-4 hour hike to Fairy Meadows. As night falls, indulge in a hearty dinner by a mesmerizing bonfire, with Nanga Parbat, the 9th highest mountain, casting its majestic presence over the enchanting meadows.<br>&nbsp;</p><p><strong>Day 04: Trek to Nanga Parbat Basecamp - Dance with the Giants</strong></p><p>As dawn breaks, fuel your spirits with an early morning breakfast, preparing for an exhilarating trek towards Nanga Parbat Basecamp and Bayal Camp. The 4-5 hour hike reveals the awe-inspiring grandeur of the 9th highest mountain. The night at Bayal Camp is a symphony of dinner, a bonfire, and the celestial beauty of the surroundings.<br><br><strong>Day 05: A Magical Retreat in Fairy Meadows&nbsp;</strong><br>Imagine waking up in our cozy hut, surrounded by breathtaking morning views that seem almost otherworldly. Our day will be filled with Instagram-worthy moments as we venture to Reflection Lake to capture the stunning scenery that begs to be shared. Connecting with the locals will add a touch of authenticity to our journey, providing insights into the rich culture of the region. As the day unfolds, we\'ll indulge in a delightful barbecue, followed by a magical night of music and a warm bonfire.&nbsp;<br><br>&nbsp;</p><p><strong>Day 06: Journey to Hunza - Where Peaks Touch the Sky</strong></p><p>Embark on a new adventure with an early morning breakfast, retracing your steps to Bayal Camp and descending to Jeep Point. Board rugged 4x4 Jeeps, journeying towards the captivating Hunza Valley. The day concludes with a delightful dinner and a night immersed in the cultural tapestry of Hunza.<br>&nbsp;</p><p><strong>Day 07: Shangri-la of Asia - Karimabad\'s Charms</strong></p><p>As the sun graces the sky, indulge in a scrumptious breakfast before venturing into the heart of Karimabad. Explore the bustling Karimabad Market, savor the delights of Café de Hunza, and delve into the rich history of Baltit Fort. If time allows, witness a breathtaking sunset from the iconic Eagle Nest Peak, setting the stage for a night of culinary delights and relaxation in Hunza.<br>&nbsp;</p><p><strong>Day 08: Hunza Valley Tour - Embracing Nature\'s Wonders</strong></p><p>Begin the day with a delicious breakfast, setting the tone for an immersive tour of Hunza Valley. Visit the historic Altit Fort and Royal Gardens, explore the mesmerizing Attabad Lake, marvel at the iconic Passu Cones, and brave the adventure of crossing the World\'s Longest Hanging Bridge – the Hussaini Bridge. The night at Passu is a celebration of experiences, with dinner, a bonfire, and a serene night\'s stay.<br>&nbsp;</p><p><strong>Day 09: Top of Attabad Lake - Heights of Tranquility</strong></p><p>Awaken to a day of heights and exploration with an early morning breakfast. Venture to Baskochi Top, a hiking point offering panoramic views, and explore the awe-inspiring Hopar Glacier. Journey back to Gilgit, where an exploration of the bustling Gilgit Bazaar and a night of rest await, accompanied by a dinner infused with local flavors.<br>&nbsp;</p><p><strong>Day 10: Journey Back to Islamabad - A Tapestry of Memories</strong></p><p>Fuel up with breakfast as you embark on a scenic journey back to Islamabad, punctuated by short stops that unveil the beauty of the landscape. As the sun sets, reach Islamabad, reflecting on the incredible experiences that have unfolded.<br>&nbsp;</p><p><strong>Day 11: Rest Day in Islamabad - A Soothing Finale</strong></p><p>Savor a day of relaxation in Islamabad, with the option to explore its vibrant malls and indulge in some retail therapy. The day concludes with a drop-off at the airport, bidding farewell to the tapestry of memories woven during this unforgettable journey with Destination Pakistan.</p>', 1399.00, '2023-11-22 09:54:02', '2023-12-14 07:37:38', NULL),
(5, 'Discover Walled City Lahore', 'historical-lahore', 'Lahore', 1, 'destination_pakistan_1700750246_mosque.webp', '3', '<p>Embark on a captivating 3-day journey through Lahore, where history, culture, and culinary delights converge. Immerse yourself in the city\'s rich heritage, from the Lahore Fort to the vibrant Walled City markets.&nbsp;</p>', NULL, '<ul><li>Private transportation</li><li>Deluxe Accommodation in Lahore</li><li>Daily breakfast</li><li>Dinner (Unique food experiences in Lahore)</li><li>Entrance Tickets</li><li>All tax &amp; service charges</li><li>Hotel Pick &amp; Drop</li><li>English Speaking Tour Guide</li></ul>', '<ul><li>Lunch</li><li>Personal expenses</li></ul>', '<p><strong>Day 1: Historical Marvels and Culinary Delights</strong><br>&nbsp;</p><p><strong>Lahore Fort and Badshahi Mosque:</strong> Begin your journey with a visit to the Lahore Fort, a UNESCO World Heritage Site, showcasing Mughal architecture at its finest. Adjacent to it, explore the iconic Badshahi Mosque, a symbol of grandeur and spiritual elegance.</p><p><strong>Delhi Gate and Gali Surjan Singh:</strong> Stroll through the historic Delhi Gate, an entry point to the Walled City of Lahore, and venture into Gali Surjan Singh, a narrow alley brimming with local charm and centuries-old stories.</p><p><strong>Wazir Khan Mosque:</strong> Immerse yourself in the mesmerizing beauty of the 17th-century Wazir Khan Mosque, renowned for its intricate tile work and stunning architecture, reflecting the artistic brilliance of Mughal craftsmanship.</p><p><strong>Dinner at Food Street Haveli Restaurant:</strong> Conclude your day with a culinary adventure at Food Street Haveli Restaurant, nestled within the culturally rich ambiance of Lahore\'s old city. Indulge in local delicacies amid the historic surroundings.<br>&nbsp;</p><p><strong>Day 2: Cultural Immersion and Modern Charms</strong><br>&nbsp;</p><p><strong>Lahore Museum of Science and Technology:</strong> Kick off the day with a visit to the Lahore Museum of Science and Technology, an institution that beautifully combines history and technology, offering a glimpse into Pakistan\'s scientific achievements.</p><p><strong>Emporium Mall:</strong> Indulge in a shopping spree at Emporium Mall, one of Lahore\'s premier shopping destinations, featuring a plethora of international and local brands to satisfy every shopper\'s desire.</p><p><strong>National Parade at Wagah Border:</strong> Experience the fervor of the daily National Parade at the Wagah Border, a vibrant ceremony symbolizing the border closing between Pakistan and India. Feel the patriotic spirit and witness the impressive display of military precision.</p><p><strong>Dinner at Mall Road or Gulberg:</strong> As the day concludes, choose between the bustling Mall Road or the trendy Gulberg district for dinner. Both areas offer a diverse range of restaurants, blending modernity with the city\'s historic charm.<br>&nbsp;</p><p><strong>Day 3: Spiritual Exploration and Shopping Extravaganza</strong><br>&nbsp;</p><p><strong>Data Ganj Baksh Shrine:</strong> Begin your day with spiritual enlightenment at the Data Ganj Baksh Shrine, the final resting place of the revered Sufi saint, Hazrat Ali Bin Usman (Data Ganj Baksh). Experience the peaceful ambiance and spiritual fervor.</p><p><strong>Hazuri Bagh and Ranjit Singh Samadhi:</strong> Explore the enchanting Hazuri Bagh, a garden housing the stunning Baradari of Ranjit Singh and the marble Ranjit Singh Samadhi, dedicated to the founder of the Sikh Empire.</p><p><strong>Quaid-e-Azam Library:</strong> Immerse yourself in knowledge at the Quaid-e-Azam Library, named after Muhammad Ali Jinnah, the founder of Pakistan. This historic library holds a vast collection of books and documents.</p><p><strong>Local Markets for Shopping:</strong> Dive into the vibrant local markets of Lahore for a shopping extravaganza. Whether it\'s the intricate handicrafts of Anarkali Bazaar or the bustling Liberty Market, each offers a unique shopping experience.</p><p><strong>Farewell Dinner at a Chai Cafe in Lahore:</strong> Conclude your Lahore sojourn with a farewell dinner at a charming Chai Cafe, savoring the rich flavors of Pakistani tea and desserts amidst a cozy, cultural setting. Reflect on the memories created in the heart of Lahore\'s history and hospitality.</p>', 600.00, '2023-11-23 08:14:01', '2024-06-06 02:59:47', NULL),
(6, 'Discover Islamabad with Destination Pakistan', 'discover-islamabad-with-destination-pakistan', 'islamabad', 1, '1700748861_isb_fasal.webp', '3', '<p>This 3-day itinerary provides a blend of cultural exploration, natural beauty, and historical insights, allowing you to experience the diverse facets of Islamabad.</p>', NULL, '<ul><li>Private transportation</li><li>Deluxe Accommodation in Lahore</li><li>Daily breakfast</li><li>Dinner - Unique food experiences in Lahore</li><li>Entrance Tickets</li><li>All tax &amp; service charges</li><li>Hotel Pick &amp; Drop</li><li>English Speaking Tour Guide</li></ul>', '<ul><li>Lunch</li><li>Personal expenses</li></ul>', '<ul><li><strong>Day 1: Discovering Islamabad\'s Cultural Tapestry</strong><br>&nbsp;</li></ul><p><strong>Faisal Mosque:</strong> Embrace the divine serenity of Faisal Mosque, an architectural masterpiece framed against the majestic Margalla Hills, offering a spiritual sanctuary and awe-inspiring vistas.</p><p><strong>Daman-e-Koh:</strong> Wander through Daman-e-Koh, a vantage point that unveils a breathtaking panorama of Islamabad, providing a tranquil escape and the perfect spot to capture the city\'s beauty.</p><p><strong>Pakistan Monument:</strong> Immerse yourself in the captivating history and design of the Pakistan Monument, a symbol of national unity, adorned with intricate artwork that tells the story of the nation\'s rich heritage.</p><p><strong>Shakarparian Park:</strong> Find solace in the lush greenery of Shakarparian Park, a peaceful oasis featuring manicured lawns and shaded pathways, offering a delightful escape from the urban bustle.</p><p><strong>Lunch at a Local Restaurant:</strong> Indulge in a culinary journey at a local restaurant, where the flavors of Pakistani cuisine come alive, tantalizing taste buds with a diverse array of aromatic dishes.</p><p><strong>Rawal Lake Viewpoint:</strong> Conclude the day with a scenic drive to Rawal Lake Viewpoint, where the shimmering waters and the city lights create a picturesque evening backdrop.</p><p><strong>Dinner at Blue Area:</strong> Relish the evening at Blue Area, a bustling commercial hub, and savor delectable dishes amidst the vibrant energy of the city.<br>&nbsp;</p><p><strong>Day 2: Nature and History Unveiled</strong><br>&nbsp;</p><p><strong>Hike at Trail 3, Margalla Hills National Park:</strong> Embark on an invigorating hike along Trail 3 in the Margalla Hills National Park, offering not just exercise but breathtaking views that reward every step.</p><p><strong>Lok Virsa Museum:</strong> Delve into the heart of Pakistan\'s diverse cultural heritage at Lok Virsa Museum, where artifacts and exhibits paint a vivid picture of the nation\'s traditions and customs.</p><p><strong>Lunch at Pir Sohawa Viewpoint:</strong> Enjoy a delightful lunch at Pir Sohawa, perched atop the Margalla Hills, providing a culinary experience paired with panoramic views of Islamabad.</p><p><strong>Saidpur Village:</strong> Step back in time as you explore Saidpur Village, a cultural haven with cobbled streets, ancient architecture, and local artisans, offering a unique blend of history and charm.</p><p><strong>Shopping Time at Centaurus Mall:</strong> Unleash your inner shopaholic at Centaurus Mall, a modern retail haven featuring both international and local brands, ensuring a satisfying retail therapy experience.</p><p><strong>Dinner at a Local Eatery:</strong> Relish the evening at a local eatery, where the fusion of flavors captures the essence of Pakistani cuisine in a cozy and authentic setting.<br>&nbsp;</p><p><strong>Day 3: Architectural Splendors and Relaxation</strong><br>&nbsp;</p><p><strong>Pakistan National Museum:</strong> Embark on a journey through time at the Pakistan National Museum, where artifacts and exhibits narrate the nation\'s narrative, creating a visual odyssey of history.</p><p><strong>Lunch at a Popular Eatery:</strong> Savor a delicious lunch at a popular eatery, immersing yourself in the local culinary scene and enjoying the diverse flavors that Islamabad has to offer.</p><p><strong>Stroll in Fatima Jinnah Park:</strong> Revel in the tranquility of Fatima Jinnah Park, one of the largest urban parks, providing a serene space for a leisurely stroll and moments of peaceful reflection.</p><p><strong>Shopping Time at Raja Bazaar, Rawalpindi:</strong> Dive into the vibrant chaos of Raja Bazaar in Rawalpindi, a bustling market where traditional craftsmanship, fabrics, and local delights await discerning shoppers.</p><p><strong>Dinner at a Local Spot:</strong> Conclude your Islamabad adventure with a delightful dinner at a local spot, where the flavors and hospitality encapsulate the warmth of Pakistani culture<br>&nbsp;</p>', 600.00, '2023-11-23 09:14:22', '2024-06-06 03:05:47', NULL),
(7, 'Discover Lahore & Islamabad', 'discover-lahore-islamabad', 'Lahore, Islamabad', 1, 'destination_pakistan_1700758162_Lahore-1.webp', '4', '<p>Embark on a captivating 4-day adventure through the cultural gems of Lahore and the architectural wonders of Islamabad. This meticulously crafted journey promises an immersive experience, combining historical marvels, culinary delights, cultural immersion, and modern charms.</p>', NULL, '<ul><li>Private Toyota Corolla Car</li><li>Toll, Taxes</li><li>Accommodation (4 Nights)</li><li>Daily Breakfast &amp; Dinner</li><li>Entry Tickets</li><li>Pickup and Drop-off from Hotel</li><li>English Speaking Tour Guide</li><li>Photography<br>&nbsp;</li></ul>', '<ul><li>Lunch</li><li>Personal Expenses</li><li>Travel Insurance</li></ul>', '<p><strong>Day 1: Lahore\'s Historical Marvels and Culinary Delights</strong></p><p><strong>Lahore Fort and Badshahi Mosque:</strong> Your journey begins with the awe-inspiring Lahore Fort, a UNESCO World Heritage Site showcasing Mughal architecture. Adjacent to it stands the iconic Badshahi Mosque, a symbol of grandeur and spiritual elegance.</p><p><strong>Delhi Gate and Gali Surjan Singh:</strong> Stroll through the historic Delhi Gate, an entry point to the Walled City of Lahore, and venture into Gali Surjan Singh, a narrow alley brimming with local charm and centuries-old stories.</p><p><strong>Wazir Khan Mosque:</strong> Immerse yourself in the mesmerizing beauty of the 17th-century Wazir Khan Mosque, renowned for its intricate tile work and stunning architecture, reflecting the artistic brilliance of Mughal craftsmanship.</p><p><strong>Dinner at Food Street Haveli Restaurant:</strong> Conclude your day with a culinary adventure at Food Street Haveli Restaurant, nestled within the culturally rich ambiance of Lahore\'s old city. Indulge in local delicacies amid the historic surroundings.<br>&nbsp;</p><p><strong>Day 2: Lahore\'s Cultural Immersion and Modern Charms</strong></p><p><strong>Lahore Museum of Science and Technology:</strong> Kick off the day with a visit to the Lahore Museum of Science and Technology, an institution beautifully combining history and technology, offering a glimpse into Pakistan\'s scientific achievements.</p><p><strong>Emporium Mall:</strong> Indulge in a shopping spree at Emporium Mall, one of Lahore\'s premier shopping destinations, featuring a plethora of international and local brands to satisfy every shopper\'s desire.</p><p><strong>National Parade at Wagah Border:</strong> Experience the fervor of the daily National Parade at the Wagah Border, a vibrant ceremony symbolizing the border closing between Pakistan and India. Feel the patriotic spirit and witness the impressive display of military precision.</p><p><strong>Dinner at Mall Road or Gulberg:</strong> As the day concludes, choose between the bustling Mall Road or the trendy Gulberg district for dinner. Both areas offer a diverse range of restaurants, blending modernity with the city\'s historic charm.<br>&nbsp;</p><ul><li><strong>Day 3: Discovering Islamabad\'s Cultural Tapestry</strong><br><strong>Drive:</strong> Drive to Islamabad via M-1 (Highway) and Reach Islamabad in 5 Hours time.<br><strong>Faisal Mosque: </strong>Embrace the divine serenity of Faisal Mosque, an architectural masterpiece framed against the majestic Margalla Hills, offering a spiritual sanctuary and awe-inspiring vistas.</li></ul><p><strong>Daman-e-Koh:</strong> Wander through Daman-e-Koh, a vantage point that unveils a breathtaking panorama of Islamabad, providing a tranquil escape and the perfect spot to capture the city\'s beauty.<br><strong>Dinner at Blue Area:</strong> Relish the evening at Blue Area, a bustling commercial hub, and savor delectable dishes amidst the vibrant energy of the city.</p><p>&nbsp;</p><p>&nbsp;</p><p><strong>Day 4: Nature and History Unveiled</strong></p><p><strong>Hike at Trail 3, Margalla Hills National Park:</strong> Embark on an invigorating hike along Trail 3 in the Margalla Hills National Park, offering not just exercise but breathtaking views that reward every step.</p><p><strong>Lok Virsa Museum:</strong> Delve into the heart of Pakistan\'s diverse cultural heritage at Lok Virsa Museum, where artifacts and exhibits paint a vivid picture of the nation\'s traditions and customs.</p><p><strong>Lunch at Pir Sohawa Viewpoint:</strong> Enjoy a delightful lunch at Pir Sohawa, perched atop the Margalla Hills, providing a culinary experience paired with panoramic views of Islamabad.</p><p><strong>Saidpur Village:</strong> Step back in time as you explore Saidpur Village, a cultural haven with cobbled streets, ancient architecture, and local artisans, offering a unique blend of history and charm.</p><p><strong>Shopping Time at Centaurus Mall:</strong> Unleash your inner shopaholic at Centaurus Mall, a modern retail haven featuring both international and local brands, ensuring a satisfying retail therapy experience.</p><p><strong>Dinner at a Local Eatery:</strong> Relish the evening at a local eatery, where the fusion of flavors captures the essence of Pakistani cuisine in a cozy and authentic setting.</p>', 850.00, '2023-11-23 10:18:12', '2024-06-06 03:19:31', NULL),
(8, '10 Days Trip to Pakistan\'s Winter Wonderland', '10-days-trip-to-pakistan-s-winter-wonderland', 'Islamabad, Hunza, Skardu', 1, '1700899579_WB8V0118xzvxzv.webp', '10', '<p>Embark on a 10-day journey through Pakistan\'s northern gems, Hunza and Skardu, as they transform into a winter wonderland under a pristine blanket of snow. Marvel at the majestic peaks, explore ancient forts, and savor local flavors against the backdrop of frozen lakes. This winter expedition promises a seamless blend of cultural richness and breathtaking vistas, offering an unforgettable escape into the enchanting allure of Pakistan\'s snow-kissed northern areas.</p>', '<p>10 Days Winter Trip (Nov-May) - Detailed Itinerary with Additional Insights:</p>', '<p>Nothing Included</p>', '<p>Airport pickup and drop-off</p><p>Transport from Airport - Airport &nbsp;</p><p>Breakfast 🥞&nbsp;</p><p>Accommodation in Hotels and traditional guest houses &nbsp;</p><p>4/4 Jeeps wherever required during the Trip&nbsp;</p><p>Toll/Taxes/Fuel&nbsp;</p><p>Driver Expenses&nbsp;</p><p>Certified first-aid mountaineering captains</p><p>Destination Pakistan welcome gift pack to our adventurers</p><p>Letter of invitation (if required)&nbsp;</p><p>visa application assistance (if required)</p>', '<p>intl airline tickets&nbsp;</p><p>lunch &nbsp;</p><p>Personal expenses including buying personal gear, snacks or extra food and drinks</p><p>entry tickets&nbsp;of&nbsp;any&nbsp;kind</p>', 1000.00, '2023-11-25 03:06:22', '2024-06-06 05:28:38', NULL),
(9, '8 Days Pakistan trip (Islamabad + Hunza)', 'pure-pakistan', 'Lahore, Islamabad & Hunza Valley', 2, 'destination_pakistan_1701164753_9A228177-F7EA-4A29-8468-867C4BF484E4.webp', '8', '<p>Pakistan is incredibly blessed with a diverse landscape. The country has numerous sites of historical and cultural significance, including areas of natural beauty. The 9 Days itinerary begins with a pick up from the airport. The trip would cover main tourist spot like Lahore, islamabad &amp; Hunza Valley</p><p><br>&nbsp;</p>', NULL, '<ul><li>Airport pickup and drop-off</li><li>Transport from Airport - Airport &nbsp;</li><li>Breakfast 🥞&nbsp;</li><li>Accommodation in Hotels and traditional guest houses &nbsp;</li><li>Toll/Taxes/Fuel&nbsp;</li><li>Driver Expenses&nbsp;</li><li>Certified first-aid mountaineering captains</li><li>Letter of invitation (if required)&nbsp;</li><li>visa application assistance (if required)</li></ul>', '<ul><li>intl airline tickets&nbsp;</li><li>lunch &nbsp;</li><li>Personal expenses including buying personal gear, snacks or extra food and drinks</li><li>entry tickets&nbsp;of&nbsp;any&nbsp;kind</li></ul>', '<h3><strong>Day&nbsp;1: (Lahore)</strong></h3><ul><li>Pick up from Lahore Airport</li><li>Check in at Hotel</li><li>Brace yourself to experience Lahore’s unique food experience</li><li>Check in at hotel after first day experience</li></ul><p>&nbsp;</p><h3><strong>Day&nbsp;02: (Visit to Lahore’s Historical Places)</strong></h3><ul><li>Time for Lahore’s traditional breakfast</li><li>Visit Historical Walled City of Lahore</li><li>Visit 16th Century Badshah Masjid</li><li>Visit 15th Century Lahore Fort</li><li>Visit 16th Century Masjid Wazir Khan</li><li>Visit Wagha Border in the evening to experience<br>flag hosting parade between India &amp; Pakistan</li><li>Traditional Dinner at Haveli Restaurant Anarkali.</li><li>Night Stay at Lahore</li></ul><p>&nbsp;</p><h3><strong>Day&nbsp;03: (Drive to Islamabad)</strong></h3><ul><li>Early morning breakfast</li><li>Leave for Islamabad (Comfortable 4 hours drive from Motorway)</li><li>short stops along the way</li><li>Reach Islamabad &amp; Visit Faisal Masjid</li><li>Visit Margalla Hills &amp; Dam ne Koh</li><li>Dinner at Islamabad’s scenic Monal Restaurant that oversees entire Islamabad<br>Night Stay in islamabad</li></ul><p>&nbsp;</p><h3><strong>Day&nbsp;04: (Enroute to Chillas)</strong></h3><ul><li>Early Morning breakfast and timely departure to Chillas</li><li>Travel towards chillas (8-9 hours of travelling on Karakoram<br>highway (Highest paved road in the world)</li><li>Visit Besham</li><li>Short stays along the way.</li><li>Reach Chillas &amp; Dinner.</li><li>Night stay at the hotel.</li></ul><p>&nbsp;</p><h3><strong>Day&nbsp;05: (Experience World’s highest Peaks)</strong></h3><ul><li>Early Morning Breakfast</li><li>Visit Nanga Parbat view point (9th Highest mountain in&nbsp;<br>the world – Elevation 8126m)</li><li>Visit Junction point of three highest mountain ranges in<br>the world (Karakoram, Himalaya &amp; Hindukush)</li><li>Lunch break at Rakaposhi viewpoint (27th highest in the world)</li><li>Visit Karimabad Market (Popular for traditional &amp; Cultural&nbsp;<br>Handicrafts)&nbsp;</li><li>Visit Café de Hunza (Famous for Walnut Cake)</li><li>Visit Baltit fort</li><li>Night Stay at Karimabad Hunza</li></ul><p>&nbsp;</p><h3><strong>Day&nbsp;6: (Explore Hunza’s vicinity)&nbsp;</strong></h3><ul><li>Early Morning Breakfast<br>Visit Historical 11th Century Altit and Royal gardens</li><li>Visit stunning Blue colored Attabad Lake</li><li>Visit Passu cones&nbsp;</li><li>Visit Passu yak Grill Café</li><li>Visit World’s longest hanging bridge – Hussaini Bridge</li><li>Dinner, Bonfire &amp; night stay at Passu.<br><br><strong>Day 7: (Travel Back to Chillas)</strong></li></ul><p>Kickstart your day with breakfast and visit Baskochi Top and Hopar Glacier before making your way back to Chillas. Enjoy the night amidst the serene surroundings of Chillas.<br><br><strong>Day 8: (Travel to Islamabad)</strong></p><p>Savor a final breakfast and make short stops along the way as you journey back to Islamabad. Whether opting for a night stay in the capital or a drop-off at the airport, your adventure concludes with a treasure trove of memories from the unparalleled landscapes of Pakistan.<br>&nbsp;</p>', 1000.00, '2023-11-28 04:42:34', '2023-12-14 07:43:39', NULL);
INSERT INTO `trips` (`id`, `trip_title`, `title_slug`, `trip_destinations`, `trip_category`, `trip_image`, `trip_duration`, `trip_description`, `trip_overview`, `trip_includes`, `trip_excludes`, `trip_itinerary`, `trip_price`, `created_at`, `updated_at`, `deleted_at`) VALUES
(10, 'A Luxurious Expedition through Cultural Marvels and Alpine Splendors', 'a-luxurious-expedition-through-cultural-marvels-and-alpine-splendors', 'Lahore, Islamabad, Hunza, Skardu and Swat', 2, '1701198133_DJI_0489_Pano.webp', '13', '<p>Embark on an extraordinary 13-day luxury tour across Pakistan, immersing yourself in a seamless blend of opulence, cultural exploration, and stunning landscapes. The journey begins with a lavish pickup from Lahore International Airport, whisking you away to the distinguished Nishat Hotel Lahore. After settling in, prepare for a gastronomic adventure, savoring Lahore\'s unique culinary treasures.</p>', NULL, '<ul><li>Airport pickup and drop-off</li><li>Transport from Airport - Airport &nbsp;</li><li>Breakfast &amp; Dinner</li><li>Accommodation in Hotels and traditional guest houses &nbsp;</li><li>Toll/Taxes/Fuel&nbsp;</li><li>Driver Expenses&nbsp;</li><li>Certified first-aid mountaineering captains</li><li>Letter of invitation (if required)&nbsp;</li><li>visa application assistance (if required)</li></ul>', '<ul><li>intl airline tickets&nbsp;</li><li>lunch &nbsp;</li><li>Personal expenses including buying personal gear, snacks or extra food and drinks</li><li>entry tickets&nbsp;of&nbsp;any&nbsp;kind</li></ul>', '<p><strong>Day 1: Lahore Indulgence</strong><br>Unwind in the comfort of Nishat Hotel Lahore, setting the stage for an indulgent exploration of Lahore\'s culinary delights, offering a taste of the city\'s rich and diverse food scene.<br>&nbsp;</p><p><strong>Day 2: Walled City Marvels</strong>&nbsp;<br>Embark on a cultural odyssey through Lahore\'s Walled City, marveling at iconic landmarks like the Badshahi Mosque and Lahore Fort. The evening crescendos with the spectacle of the National Flag Parade at Wahga Border, followed by a traditional dinner at Haveli Restaurant Anarkali.<br>&nbsp;</p><p><strong>Day 3: Islamabad Extravaganza</strong>&nbsp;<br>Journey towards Islamabad, punctuating the drive with scenic stops. Revel in the architectural splendor of the Faisal Mosque and the natural beauty of Margalla Hills and Dam-ne-Koh. The day concludes with a delectable dinner at the panoramic Monal Restaurant, and a luxurious night\'s stay at Serena or Marriott Islamabad.<br>&nbsp;</p><p><strong>Day 4: Mountainous Tranquility</strong><br>&nbsp;Embark on an 8-9 hour drive to Chillas, making captivating stops along the way. Enjoy the serene ambiance of Shangrila, where a night of tranquility awaits amidst the breathtaking landscape.<br>&nbsp;</p><p><strong>Day 5: Majestic Peaks and Cultural Treasures</strong>&nbsp;<br>Explore Nanga Parbat View Point and the Junction Point of Three Mountain Ranges. Immerse yourself in the cultural tapestry of Karimabad Market, sip coffee at Cafe De Hunza, and visit the historic Baltit Fort. The day culminates in a night of luxury at Hunza Luxus.<br>&nbsp;</p><p><strong>Day 6: Hunza Wonders</strong><br>&nbsp;Discover Altit Fort, marvel at the miraculous Attabad Lake, cross the iconic Hussaini Bridge, and witness the surreal Passu Cones. Conclude the day with dinner, a bonfire, and a night of opulence at Luxus Hunza.</p><p><strong>Day 7: Skardu Serenity</strong> Journey to Skardu, exploring Upper and Lower Kachura, and finding solace at the enchanting Shangrila Resort. Enjoy dinner and a night of luxurious tranquility at Katpana Glamp.</p><p><strong>Day 8: Bashoo Valley Exploration</strong> Embark on 4x4 jeeps to explore the stunning Bashoo Valley and Meadows, one of Skardu\'s hidden gems. Return to Skardu and continue the journey to Shigar Valley, with a night of cultural immersion and comfort at Khoj Resorts Shigar.</p><p><strong>Day 9: Shigar\'s Heritage</strong> Delve into the cultural richness of Shigar Valley, visiting Bab-e-Shigar, the Cold Desert, and the historic Shigar Fort. Revel in a night of serene luxury at Shigar Khoj Resort.</p><p><strong>Day 10: Natural Wonders and Return to Chillas</strong> Visit the captivating Manthoka Waterfall before traveling back to Chillas for a night of relaxation.</p><p><strong>Day 11: Swat Valley Arrival</strong> Embark on a scenic journey to Swat, making stops along the way, and conclude the day at the picturesque Malamjabba PC for a night of luxury.</p><p><strong>Day 12: Return to Islamabad</strong> Continue the journey to Islamabad, making short stops, and spend the night in opulence at Serena or Marriott Islamabad.</p><p><strong>Day 13: Departure from Lahore</strong> After a leisurely breakfast and free time for shopping, travel back to Lahore, concluding the journey with dinner and a night\'s stay at Nishat Hotel before dropping off members at the airport.</p>', 2000.00, '2023-11-28 14:02:17', '2023-11-28 14:02:17', NULL),
(11, 'Scenic Bike Trip through Towering mountains of Northern Pakistan', 'scenic-bike-trip-through-towering-mountains-of-northern-pakistan', 'Hunza, Skardu', 3, 'destination_pakistan_1716118933_Now.webp', '11', '<p>Embark on a thrilling 11-day motorcycle expedition through Northern Pakistan with Destination Pakistan. This adventure begins with a flight from Islamabad to Skardu, where your motorcycle journey will kick off. Ride through the rugged and stunning landscapes of Skardu, explore the serene beauty of Hunza, and conquer majestic mountain passes. This expedition is designed for motorcycle enthusiasts seeking an exhilarating journey through some of the most breathtaking terrains in the world.<br><br><strong>To book, secure your spot with a $600 deposit. Contact us for payment plan options and further details.</strong></p>', NULL, '<ol><li>Airport pickup and drop-off<br>Domestic Airline Tickets</li></ol><ul><li>Accommodation as per itinerary</li><li>Meals (Breakfast &amp; Dinner)&nbsp;</li><li>Adventure Motorbike with Fuel</li><li>Certified mountaineering captains</li><li>Welcome gift pack</li><li>Visa assistance (if required)</li><li>Tourist Invitation Letter</li></ul>', '<ul><li>International airline tickets</li><li>Lunch</li><li>Personal expenses</li><li>Entry tickets</li><li>Travel Insurances</li><li>Unforeseen circumstances&nbsp;<br>&nbsp;</li></ul>', '<h4><strong>Detailed Itinerary</strong><br>&nbsp;</h4><p><strong>Day 1: Arrival in Islamabad</strong></p><ul><li>Arrival at Islamabad International Airport.</li><li>Transfer to hotel for rest and expedition briefing.</li><li>Meet your fellow riders and guide.</li><li>Overnight stay in Islamabad.<br>&nbsp;</li></ul><p><strong>Day 2: Flight to Skardu</strong></p><ul><li>Morning flight from Islamabad to Skardu.</li><li>Transfer to the hotel and check-in.</li><li>Afternoon bike allocation and briefing session.</li><li>Short ride around Skardu to get familiar with the bikes.</li><li>Overnight stay in Skardu.<br>&nbsp;</li></ul><p><strong>Day 3: Skardu to Khaplu</strong></p><ul><li>Ride from Skardu to the picturesque Khaplu Valley.</li><li>Visit Khaplu Palace, a historical fort and palace.</li><li>Explore the local culture and enjoy the stunning scenery.</li><li>Overnight stay in Khaplu.<br>&nbsp;</li></ul><p><strong>Day 4: Khaplu to Shigar Valley</strong></p><ul><li>Ride from Khaplu to Shigar Valley.</li><li>Visit the Shigar Fort (Fong-Khar), a 400-year-old fort that has been transformed into a museum and hotel.</li><li>Explore the beautiful Shigar Valley.</li><li>Overnight stay in Shigar.<br>&nbsp;</li></ul><p><strong>Day 5: Skardu to Gilgit</strong></p><ul><li>Ride from Skardu to Gilgit via the scenic JSR route.</li><li>Stop at viewpoints along the way for photography.</li><li>Arrive in Gilgit, check-in at the hotel.</li><li>Evening at leisure to explore Local Market.</li><li>Overnight stay in Gilgit.<br>&nbsp;</li></ul><ol><li><strong>Day 6: Gilgit to Hunza Valley Exploration</strong><br>Ride from Gilgit to Hunza<br>Visit Baltit Fort and Altit Fort, historical landmarks offering stunning views.</li><li>Ride to Eagle’s Nest for panoramic views of the Hunza Valley.</li><li>Overnight stay in Hunza.<br>&nbsp;</li><li><strong>Day 7: Rest Day in Hunza Valley</strong><br>Explore local markets and interact with the friendly locals.</li><li>Overnight stay in Passu Hunza.<br>&nbsp;</li></ol><p><strong>Day 8: Day Trip to Khunjerab Pass</strong></p><ul><li>Early morning departure for a day trip to Khunjerab Pass, the highest paved international border crossing in the world (weather permitting).</li><li>Enjoy breathtaking views and wildlife sightings in the Khunjerab National Park.</li><li>Return to Passu Gojal in the evening.</li><li>Overnight stay in Passu Hunza.<br>&nbsp;</li></ul><p><strong>Day 9: Hunza to Gilgit&nbsp;</strong></p><ul><li>Morning ride from Hunza to Gilgit.</li><li>Visit the picturesque Naltar Valley on 4/4 jeeps en route if time permits<br>Overnight stay in Gilgit<br>&nbsp;</li></ul><ol><li><strong>Day 10: Flight to Islamabad</strong><br>Catch an afternoon flight from Gilgit to Islamabad.</li><li>Transfer to the hotel upon arrival in Islamabad.</li><li>Evening at leisure for a city tour or rest.</li><li>Overnight stay in Islamabad.<br><br>Dat 11: <strong>Departure from Islamabad</strong></li></ol><ul><li>Transfer to Islamabad International Airport for departure flight back to Home.</li></ul>', 2000.00, '2024-03-19 13:28:20', '2024-06-06 05:35:19', NULL),
(12, '8-Day Itinerary for Hunza and Skardu from Islamabad 2024/2025', '9-day-itinerary-for-hunza-and-skardu-from-islamabad-2024-2025', 'islamabad, Skardu and Hunza Valley', 2, '1716035252_GP.webp', '9', '<p>This 9-day journey takes you through some of Pakistan\'s most breathtaking landscapes, from the bustling capital city of Islamabad to the serene valleys of Hunza and Skardu. Starting with a day of rest in Islamabad, you will then fly to Skardu and drive to Hunza, where you will spend four days exploring its natural beauty and rich history. Following this, you will travel to Skardu for another three days, visiting its stunning lakes and national parks. The trip concludes with a flight back to Islamabad, where you will have an optional visit with the Spanish Ambassador before your departure.</p>', NULL, '<ul><li>Airport pickup and drop-off<br>Domestic Airline Tickets</li><li>Accommodation as per itinerary</li><li>Meals (Breakfast &amp; Dinner)&nbsp;</li><li>Transportation</li><li>Certified mountaineering captains</li><li>Welcome gift pack</li><li>Visa assistance (if required)</li><li>Tourist Invitation Letter</li></ul>', '<ul><li>International airline tickets</li><li>Lunch</li><li>Personal expenses</li><li>Entry tickets</li><li>Travel Insurances</li><li>Unforeseen circumstances&nbsp;</li></ul>', '<h3>&nbsp;</h3><p><strong>Day 1: Arrival in Islamabad</strong></p><ul><li>Arrival at Islamabad International Airport from Spain.</li><li>Transfer to hotel for rest and relaxation after the long flight.</li><li>Overnight stay in Islamabad.<br>&nbsp;</li></ul><p><strong>Day 2: Flight to Skardu and Drive to Hunza</strong></p><ul><li>Morning flight from Islamabad to Skardu.</li><li>Upon arrival in Skardu, drive directly to Hunza (approximately 6-7 hours).</li><li>Enjoy the scenic journey through the Karakoram Highway.</li><li>Check-in at the hotel in Hunza.</li><li>Overnight stay in Hunza.<br>&nbsp;</li></ul><p><strong>Day 3: Hunza Valley Exploration</strong></p><ul><li>Visit Karimabad, the main town of Hunza.</li><li>Explore Baltit Fort and Altit Fort, historical landmarks offering stunning views.</li><li>Walk around Karimabad Bazaar for local shopping.</li><li>Overnight stay in Hunza.<br>&nbsp;</li></ul><p><strong>Day 4: Day Trip to Khunjerab Pass</strong></p><ul><li>Early morning departure for a day trip to Khunjerab Pass, the highest paved international border crossing in the world (weather permitting).</li><li>Enjoy breathtaking views and wildlife sightings in the Khunjerab National Park.</li><li>Return to Hunza in the evening.</li><li>Overnight stay in Hunza.<br>&nbsp;</li></ul><p><strong>Day 5: Visit to Passu and Attabad Lake</strong></p><ul><li>Drive to Passu and see the iconic Passu Cones.</li><li>Visit Attabad Lake, famous for its turquoise waters.</li><li>Enjoy a boat ride on Attabad Lake.</li><li>Return to Hunza for the night.</li><li>Overnight stay in Hunza.<br>&nbsp;</li></ul><p><strong>Day 6: Travel from Hunza to Skardu</strong></p><ul><li>Morning departure from Hunza to Skardu (approximately 6-7 hours drive).</li><li>Check-in at the hotel in Skardu.</li><li>Relax and unwind after the journey.</li><li>Overnight stay in Skardu.<br>&nbsp;</li></ul><p><strong>Day 7: Skardu Sightseeing</strong></p><ul><li>Visit Shangrila Resort (Lower Kachura Lake), known as \"Heaven on Earth\".</li><li>Explore Upper Kachura Lake.</li><li>Visit the ancient Skardu Fort (Kharpocho Fort).</li><li>Overnight stay in Skardu.<br>&nbsp;</li></ul><p><strong>Day 8: Excursion to Deosai National Park&nbsp;</strong></p><ul><li>Full-day excursion to Deosai National Park, known as the \"Land of Giants\".</li><li>Enjoy the stunning landscapes, flora, and fauna.</li><li>Return to Skardu in the evening.</li><li>Overnight stay in Skardu.<br>&nbsp;</li></ul><p><strong>Day 9: Flight to Islamabad and Departure</strong></p><ul><li>Morning flight from Skardu to Islamabad.</li><li>Depending on the flight schedule, either explore Islamabad briefly or transfer directly to the airport for the departure flight back to Spain.<br>&nbsp;</li><li><br><i><strong>Adventure Tour Preparation</strong></i><br>Please be advised that this is an adventure tour to Pakistan offered by Girls Wander Co. and is designed to provide participants with thrilling and adventurous experiences in diverse and sometimes challenging environments. As such, we kindly request all participants to prepare accordingly and understand the following:<br><br><strong>Physical Fitness</strong>: This adventure tour involves activities such as trekking, hiking, and Jeep rides in rugged terrain. Participants should ensure they are in good physical condition and capable of undertaking such activities.<br><br><strong>Weather Conditions</strong>: Pakistan\'s weather can be unpredictable, especially in mountainous regions. Participants should be prepared for varying weather conditions, including rain, wind, and temperature fluctuations, by bringing appropriate clothing and gear.<br><br><strong>Health Considerations</strong>: It is advisable for participants to consult with their healthcare provider prior to the trip to ensure they are up to date on vaccinations and medications. Additionally, all participants should be prepared for potential altitude sickness in high-altitude areas.<br><br><strong>Safety Measures:</strong> While our team takes every precaution to ensure the safety of participants, adventure travel inherently involves risks. Participants should adhere to safety guidelines provided by our experienced guides, follow instructions from guides, stay within designated areas, and respect local customs and regulations.</li></ul>', 1150.00, '2024-05-18 07:27:33', '2024-06-06 05:48:16', NULL),
(13, 'Sikh Pilgrimages (2024-25) – 10 Days', 'sikh-pilgrimages-2024-25-10-days', 'Islamabad, Lahore, Wagha Border, Birthplace of Guru Nanak, Kartarpur, Hassan Abdal, Nankana Sahib', 4, '1716724918_KP.webp', '10', '<p>Dive into a world of spiritual devotion and profound historical significance as you journey to the sacred Sikh sites scattered across Punjab and Pakistan. This extraordinary adventure offers a unique opportunity to connect with the very roots of Sikhism. Walk in the footsteps of the founders, immersing yourself in the vibrant cultural heritage of the region. Get ready to experience an awe-inspiring pilgrimage like no other!</p><p>&nbsp;</p><p><strong>Places to Cover:</strong></p><p>&nbsp;</p><ul><li>Sightseeing in Islamabad</li><li>Faisal Masjid</li><li>Lahore Museum</li><li>Lahore Fort</li><li>Shrines &amp; Masjids, Wagha Border.</li><li>Visit Badshahi Masjid</li><li>Sikh Pilgrim Circuit</li><li>Birthplace of Guru Nanank Ji</li><li>Visit Nankana Sahib</li><li>Daman e Koh</li><li>Pakistan cusine &amp; a lot more.</li></ul>', NULL, '<ul><li>Licensed professional guide (government requirement)</li><li>Airport transfer on the first and last day in Lahore</li><li>All domestic road transfers</li><li>All hotel accommodations (twin-sharing rooms)</li><li>All hotel meals (breakfast, lunch, and dinner)</li></ul>', '<ul><li>Travel insurance (recommendations can be requested)</li><li>Visa to Pakistan (not required)</li><li>International airfare for overseas Pakistani</li><li>Personal equipment (warm clothes, boots, etc)</li><li>Tips for guides, porters, staff, etc</li><li>Miscellaneous (drinks, phone calls, laundry, souvenirs, etc.)</li></ul>', '<p>&nbsp;</p><h3><strong>Itinerary –&nbsp;Sikh Pilgrimages</strong></h3><p>&nbsp;</p><p><strong>Day 1: Arrive at Allama Iqbal Airport</strong></p><ul><li>Pick up from the Airport and travel to the hotel.</li></ul><p>&nbsp;</p><p><strong>Day 2: Drive to Kartarpur, Narowal</strong></p><p>On day 2, we shall travel to Kartarpur, Narowal.</p><p>Following shall be the key highlights:</p><ul><li>Drive to Kartarpur, Narowal ( Which is 2 hours 40 mins ride from Lahore)&nbsp;<br>We shall travel via Lahore – Mureedke road from Lahore. This shall be full day excursion.</li><li>Travel back to Lahore in the evening.</li></ul><p>&nbsp;</p><p><strong>Day 3: Drive to Islamabad</strong></p><p>On day 3, we shall travel to Islamabad.</p><p>Following shall be the key highlights:</p><ul><li>Travel to Islamabad vi Lahore – Islamabad motorway. The Journey shall take over 5 hours approximately.</li><li>We shall cross Salt range after crossing through countryside.</li><li>Visit Hassan Abdal Panja Sahib</li><li>Transfer to Hotel in Islamabad</li><li>Dinner at Daman e Koh in Margalla Hills which is the foothills of Himalaya.</li></ul><p>&nbsp;</p><p><strong>Day 4: Drive back to Lahore</strong></p><p>On day 4, we shall travel to Lahore; however, we will pass through Gujranwala- The city of Pehalwans.</p><p>Following shall be the key highlights:</p><ul><li>Early Morning departure</li><li>Drive back to Lahore.</li><li>Drive through Gujranwala</li><li>Travel to Aimanabad to see Bhai Lalu Di Khoi, Chaki Sahib &amp; Rohri Sahib Gurdwaras.</li><li>Later, we travel back to Lahore.</li></ul><p>&nbsp;</p><p><strong>Day 5: Explore Lahore &amp; Drive to Faisalabad.</strong></p><p>On day 5, we shall explore the city of Lahore before departing for Faisalabad in the evening.</p><p>Following shall be the key highlights:</p><ul><li>Early morning drive to Baba Guru Nanak Ji’s residence in Nankana Sahib</li><li>Pay visit to Janamastan Baba Satguru ji at the Gurudwara Patti Sahaib.</li><li>Visit Bal lila sahaib, Tambu Sahai, 6th Padshahi, Malji Sahai, and Kaira Sahai</li><li>Visit Choorkana’s Gurdwara Sacha Sauda in Farooqabadand drive to Faisalabad in the afternoon.</li></ul><p>&nbsp;</p><p><strong>Day 6: Drive to Nankana Sahib</strong></p><p>On day 6, we shall drive to Nankana Sahib.</p><p>Following shall be the key highlights:</p><ul><li>Drive to Nankana Sahib.</li><li>Full day excursion at Baba Satguru Nanak Dev Jee Maharaj.</li><li>Drive to Faisalabad in the evening.</li></ul><p>&nbsp;</p><p><strong>Day 7: Visit Lahore &amp; Anarkali Bazaar</strong></p><p>On day 7, we shall drive to Nankana Sahib &amp; visit Lahore’s famous Anarkali Bazaar.</p><p>Following shall be the key highlights:</p><ul><li>Travel from Faisalabad to Lahore</li><li>Visit Lahore Museum</li><li>Visit Anarkali Bazaar for shopping.</li><li>Check in the hotel in the afternoon.</li></ul><p>&nbsp;</p><p><strong>Day 8: Explore Lahore Lahore aey.</strong></p><p>On day 8, we shall visit the remaining cultural and heritage places.</p><p>Following shall be the key highlights:</p><ul><li>Visit Lahore Fort &amp; Sikh Museum in Lahore fort.</li><li>Visit Badshahi Masjid, &amp; Mughal Structures.</li><li>Visit Samadhi of Mahraja Ranjit Singh</li><li>Visit Gurdwara Dera Sahib (Guru Arjun Dev ji)</li><li>Later Travel to Delhi Gate to explore walled city of Lahore</li><li>Visit Gurdwara Chuna Mandi</li><li>Visit Shalimar Gardens</li><li>Visit Gurdwara Sheed Ganj in the afternoon.</li><li>Grand Farewell Dinner.</li></ul><p>&nbsp;</p><p><strong>Day 9: Shopping &amp; Relax.</strong></p><p>On day 9, we shall visit Wagha Border Parade Ceremony &amp; light activities in the morning.</p><p>&nbsp;</p><p><strong>Day 10: Fly to Home Country:</strong></p><p>That’s a wrap. Farewell &amp; Airport Transfer</p>', 1399.00, '2024-05-26 07:01:59', '2024-06-10 00:47:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trip_destinations`
--

CREATE TABLE `trip_destinations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trip_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `latitude` varchar(55) NOT NULL,
  `longitude` varchar(55) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trip_destinations`
--

INSERT INTO `trip_destinations` (`id`, `trip_id`, `name`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(1, 1, 'Lahore, Pakistan', '31.5203696', '74.35874729999999', '2024-06-05 21:24:07', '2024-06-05 21:24:07'),
(2, 1, 'Islamabad, Pakistan', '33.6995086', '73.0362897', '2024-06-05 21:24:07', '2024-06-05 21:24:07'),
(3, 1, 'Hunza valley, Hunza, Karimabad', '36.31925299999999', '74.6668712', '2024-06-05 21:24:07', '2024-06-05 21:24:07'),
(4, 1, 'Skardu', '35.3247102', '75.55096019999999', '2024-06-05 21:24:07', '2024-06-05 21:24:07'),
(5, 1, 'Swat, Pakistan', '34.8065135', '72.35479149999999', '2024-06-05 21:24:07', '2024-06-05 21:24:07'),
(6, 2, 'Lahore, Pakistan', '31.5203696', '74.35874729999999', '2024-06-05 21:21:22', '2024-06-05 21:21:22'),
(7, 2, 'Islamabad, Pakistan', '33.6995086', '73.0362897', '2024-06-05 21:21:22', '2024-06-05 21:21:22'),
(8, 2, 'Hunza valley, Hunza, Karimabad', '36.31925299999999', '74.6668712', '2024-06-05 21:21:22', '2024-06-05 21:21:22'),
(9, 2, 'Fairy Meadows, Islamabad, Pakistan', '33.7483452', '73.13777639999999', '2024-06-05 21:21:22', '2024-06-05 21:21:22'),
(10, 3, 'Islamabad, Pakistan', '33.6995086', '73.0362897', '2024-06-05 21:33:47', '2024-06-05 21:33:47'),
(11, 3, 'Fairy Meadows', '35.3873191', '74.5785485', '2024-06-05 21:33:47', '2024-06-05 21:33:47'),
(12, 3, 'Rakaposhi', '36.1433269', '74.4898568', '2024-06-05 21:33:47', '2024-06-05 21:33:47'),
(13, 3, 'Hunza valley, Hunza, Karimabad', '36.31925299999999', '74.6668712', '2024-06-05 21:33:47', '2024-06-05 21:33:47'),
(14, 4, 'Islamabad, Pakistan', '33.6995086', '73.0362897', '2024-06-05 21:43:56', '2024-06-05 21:43:56'),
(15, 4, 'Hunza valley, Hunza, Karimabad', '36.31925299999999', '74.6668712', '2024-06-05 21:43:56', '2024-06-05 21:43:56'),
(16, 4, 'Nanga Parbat Base Camp, Nanga Parbat Base Camp Trail', '35.3199083', '74.58501249999999', '2024-06-05 21:43:56', '2024-06-05 21:43:56'),
(17, 5, 'Lahore, Pakistan', '31.5203696', '74.35874729999999', '2024-06-05 21:59:47', '2024-06-05 21:59:47'),
(18, 5, 'Badshahi Mosque, Fort Road, Walled City of Lahore, Lahore, Pakistan', '31.587939', '74.3094357', '2024-06-05 21:59:47', '2024-06-05 21:59:47'),
(19, 6, 'Islamabad, Pakistan', '33.6995086', '73.0362897', '2024-06-05 22:05:47', '2024-06-05 22:05:47'),
(20, 6, 'Islamabad, Pakistan', '33.6995086', '73.0362897', '2024-06-05 22:05:47', '2024-06-05 22:05:47'),
(21, 7, 'Lahore, Pakistan', '31.5203696', '74.35874729999999', '2024-06-05 22:19:31', '2024-06-05 22:19:31'),
(22, 7, 'Islamabad, Pakistan', '33.6995086', '73.0362897', '2024-06-05 22:19:31', '2024-06-05 22:19:31'),
(23, 8, 'Islamabad, Pakistan', '33.6995086', '73.0362897', '2024-06-06 00:28:38', '2024-06-06 00:28:38'),
(24, 8, 'Hunza valley, Hunza, Karimabad', '36.31925299999999', '74.6668712', '2024-06-06 00:28:38', '2024-06-06 00:28:38'),
(25, 8, 'Skardu', '35.3247102', '75.55096019999999', '2024-06-06 00:28:38', '2024-06-06 00:28:38'),
(26, 9, 'Lahore, Pakistan', '31.5203696', '74.35874729999999', '2024-06-06 00:14:39', '2024-06-06 00:14:39'),
(27, 9, 'Islamabad, Pakistan', '33.6995086', '73.0362897', '2024-06-06 00:14:39', '2024-06-06 00:14:39'),
(28, 9, 'Hunza valley, Hunza, Karimabad', '36.31925299999999', '74.6668712', '2024-06-06 00:14:39', '2024-06-06 00:14:39'),
(29, 10, 'Lahore, Pakistan', '31.5203696', '74.35874729999999', '2024-06-06 00:25:48', '2024-06-06 00:25:48'),
(30, 10, 'Islamabad, Pakistan', '33.6995086', '73.0362897', '2024-06-06 00:25:48', '2024-06-06 00:25:48'),
(31, 10, 'Hunza valley, Hunza, Karimabad', '36.31925299999999', '74.6668712', '2024-06-06 00:25:48', '2024-06-06 00:25:48'),
(32, 10, 'Skardu', '35.3247102', '75.55096019999999', '2024-06-06 00:25:48', '2024-06-06 00:25:48'),
(33, 10, 'Swat, Pakistan', '34.8065135', '72.35479149999999', '2024-06-06 00:25:48', '2024-06-06 00:25:48'),
(34, 11, 'Hunza valley, Hunza, Karimabad', '36.31925299999999', '74.6668712', '2024-06-06 00:35:19', '2024-06-06 00:35:19'),
(35, 11, 'Skardu', '35.3247102', '75.55096019999999', '2024-06-06 00:35:19', '2024-06-06 00:35:19'),
(36, 12, 'Islamabad, Pakistan', '33.6995086', '73.0362897', '2024-06-06 00:48:16', '2024-06-06 00:48:16'),
(37, 12, 'Skardu', '35.3247102', '75.55096019999999', '2024-06-06 00:48:16', '2024-06-06 00:48:16'),
(38, 12, 'Hunza valley, Hunza, Karimabad', '36.31925299999999', '74.6668712', '2024-06-06 00:48:16', '2024-06-06 00:48:16'),
(46, 13, 'Islamabad, Pakistan', '33.6995086', '73.0362897', '2024-06-10 00:47:12', '2024-06-10 00:47:12'),
(47, 13, 'Lahore, Pakistan', '31.5203696', '74.35874729999999', '2024-06-10 00:47:12', '2024-06-10 00:47:12'),
(48, 13, 'Wahga Border Pakistan, Wagah Wahga, Pakistan', '31.6049483', '74.5723246', '2024-06-10 00:47:12', '2024-06-10 00:47:12'),
(49, 13, 'Guru Nanak Ji Road, Nankana Sahib, Pakistan', '31.4445339', '73.6967397', '2024-06-10 00:47:12', '2024-06-10 00:47:12'),
(50, 13, 'Kartarpur, Pakistan', '32.0879424', '75.0151127', '2024-06-10 00:47:12', '2024-06-10 00:47:12'),
(51, 13, 'Hassan Abdal, Pakistan', '33.8210214', '72.6800204', '2024-06-10 00:47:12', '2024-06-10 00:47:12'),
(52, 13, 'Nankana Sahib, Pakistan', '31.449151', '73.712479', '2024-06-10 00:47:12', '2024-06-10 00:47:12');

-- --------------------------------------------------------

--
-- Table structure for table `trip_itineraries`
--

CREATE TABLE `trip_itineraries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trip_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `day` int(11) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `detail` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trip_itineraries`
--

INSERT INTO `trip_itineraries` (`id`, `trip_id`, `title`, `day`, `image`, `detail`, `created_at`, `updated_at`) VALUES
(1, 1, 'Lahore', 1, '', '<ul><li>Pick up from Lahore Airport</li><li>Check in at Hotel</li><li>Brace yourself to experience Lahore’s unique food experience</li><li>Check in at hotel after first day experience</li></ul>', '2024-06-05 21:24:07', '2024-06-05 21:24:07'),
(2, 1, 'Visit to Lahore’s Historical Places', 2, '1717486382_lahore.webp', '<ul><li>Time for Lahore’s traditional breakfast</li><li>Visit Historical Walled City of Lahore</li><li>Visit 16th Century Badshah Masjid</li><li>Visit 15th Century Lahore Fort</li><li>Visit 16th Century Masjid Wazir Khan</li><li>Visit Wagha Border in the evening to experience<br>flag hosting parade between India &amp; Pakistan</li><li>Traditional Dinner at Haveli Restaurant Anarkali.</li><li>Night Stay at Lahore</li></ul>', '2024-06-05 21:24:07', '2024-06-05 21:24:07'),
(3, 1, 'Drive to Islamabad', 3, '', '<ul><li>Early morning breakfast</li><li>Leave for Islamabad (Comfortable 4 hours drive from Motorway)</li><li>short stops along the way</li><li>Reach Islamabad &amp; Visit Faisal Masjid</li><li>Visit Margalla Hills &amp; Dam ne Koh</li><li>Dinner at Islamabad’s scenic Monal Restaurant that<br>oversees entire Islamabad</li></ul>', '2024-06-05 21:24:07', '2024-06-05 21:24:07'),
(4, 1, 'Enroute to Chillas', 4, '', '<ul><li>Early Morning breakfast and timely departure to Chillas</li><li>Travel towards chillas (8-9 hours of travelling on Karakoram<br>highway (Highest paved road in the world)</li><li>Visit Besham</li><li>Short stays along the way.</li><li>Reach Chillas &amp; Dinner.</li><li>Night stay at the hotel.</li></ul>', '2024-06-05 21:24:07', '2024-06-05 21:24:07'),
(5, 1, 'Experience World’s highest Peaks', 5, '', '<ul><li>Early Morning Breakfast</li><li>Visit Nanga Parbat view point (9th Highest mountain in&nbsp;<br>the world – Elevation 8126m)</li><li>Visit Junction point of three highest mountain ranges in<br>the world (Karakoram, Himalaya &amp; Hindukush)</li><li>Lunch break at Rakaposhi viewpoint (27th highest in the world)</li><li>Visit Karimabad Market (Popular for traditional &amp; Cultural&nbsp;<br>Handicrafts)&nbsp;</li><li>Visit Café de Hunza (Famous for Walnut Cake)</li><li>Visit Baltit fort</li><li>Night Stay at Karimabad Hunza</li></ul>', '2024-06-05 21:24:07', '2024-06-05 21:24:07'),
(6, 1, 'Explore Hunza’s vicinity', 6, '', '<ul><li>Early Morning BreakfastVisit Historical 11th Century Altit and Royal gardens</li><li>Visit stunning Blue colored Attabad Lake</li><li>Visit Passu cones&nbsp;</li><li>Visit Passu yak Grill Café</li><li>Visit World’s longest hanging bridge – Hussaini Bridge</li><li>Dinner, Bonfire &amp; night stay at Passu.</li></ul>', '2024-06-05 21:24:07', '2024-06-05 21:24:07'),
(7, 1, 'Travel to Stunning Skardu', 7, '', '<ul><li>Early Morning Breakfast</li><li>Travel to Skardu (6 hours journey on Karakoram highway)</li><li>Visit mesmerizing Upper Kachura &amp; Lower Kachura</li><li>Visit Soq Valley</li><li>Night Stay in Skardu</li></ul>', '2024-06-05 21:24:07', '2024-06-05 21:24:07'),
(8, 1, 'Travel to Basho valley', 8, '', '<ul><li>Early morning breakfast</li><li>Shift to 4/4 jeeps for a visit to Basho Valleys &amp; meadows&nbsp;<br>(One of the stunning places in Skardu)</li><li>Back to Skardu for the night stay</li></ul>', '2024-06-05 21:24:07', '2024-06-05 21:24:07'),
(9, 1, 'Explore Shigar & Cold Desert', 9, '', '<ul><li>Early Morning Breakfast</li><li>Visit Shigar valley and visit the 17th Century Shigar Fort</li><li>Visit Bab-e- Shigar&nbsp;</li><li>Visit Katpana Desert aka cold desert – High altitude cold desert</li><li>Night stay in Shigar</li></ul>', '2024-06-05 21:24:07', '2024-06-05 21:24:07'),
(10, 1, 'Explore Khaplu &  Manthoka waterfall', 10, '', '<ul><li>Early Morning breakfast</li><li>Visit Manthoka Waterfall which usually freezes in winter time</li><li>Visit Khaplu Valley(This is the starting point for mountaineers<br>who want to go for mountaineer to &nbsp;Masherbrum, K6, K7 &amp; Choglisa)</li><li>Visit Khaplu Masjid (700 years old)</li><li>Visit Thoqseekhar (highest point of Skardu)</li></ul>', '2024-06-05 21:24:07', '2024-06-05 21:24:07'),
(11, 1, 'Travel to Swat', 11, '', '<ul><li>Early Morning Breakfast</li><li>Travel towards Beshaam</li><li>Few Stops along the way</li><li>Visit Chillas in the evening</li><li>Night stay at Cillas</li></ul>', '2024-06-05 21:24:07', '2024-06-05 21:24:07'),
(12, 1, 'Visit Switzerland of Asia', 12, '', '<ul><li>Early Morning Breakfast</li><li>Travel towards Swat Valley</li><li>Visit Behrain Mall and Kalam Bazaar</li><li>Visit Beautiful Ushu Forest</li><li>Night stay at Kalam</li></ul>', '2024-06-05 21:24:07', '2024-06-05 21:24:07'),
(13, 1, 'Experience Swat', 13, '', '<ul><li>Early Morning Breakfast</li><li>Move to 4/4 Jeeps</li><li>Visit Palonga Village &amp; Mahudand Lake</li><li>Night stay at Fizzaghat Swat</li></ul>', '2024-06-05 21:24:07', '2024-06-05 21:24:07'),
(14, 1, 'Experience Mahudand Lake', 14, '', '<ul><li>Early Morning Breakfast</li><li>Visit Malam Jabba Ski resort which looks stunning during winters</li><li>Enjoy Cable car &amp; Skiing activities.</li><li>Travel back to Islamabad via Hazara Motorway</li></ul><p>&nbsp;</p>', '2024-06-05 21:24:07', '2024-06-05 21:24:07'),
(15, 1, 'Islamabad - Airport', 15, '', '<ul><li>Early Morning Breakfast</li><li>Dropoff Service members at the airport</li><li>End of Services</li></ul>', '2024-06-05 21:24:07', '2024-06-05 21:24:07'),
(16, 2, 'Lahore', 1, '', '<ul><li>Pick up from Lahore Airport</li><li>Check in at Hotel</li><li>Brace yourself to experience Lahore’s unique food experience</li><li>Check in at hotel after first day experience</li></ul>', '2024-06-05 21:21:22', '2024-06-05 21:21:22'),
(17, 2, 'Visit to Lahore’s Historical Places', 2, '', '<ul><li>Time for Lahore’s traditional breakfast</li><li>Visit Historical Walled City of Lahore</li><li>Visit 16th Century Badshah Masjid</li><li>Visit 15th Century Lahore Fort</li><li>Visit 16th Century Masjid Wazir Khan</li><li>Visit Wagha Border in the evening to experience<br>flag hosting parade between India &amp; Pakistan</li><li>Traditional Dinner at Haveli Restaurant Anarkali.</li><li>Night Stay at Lahore</li></ul>', '2024-06-05 21:21:22', '2024-06-05 21:21:22'),
(18, 2, 'Drive to Islamabad', 3, '', '<ul><li>Early morning breakfast</li><li>Leave for Islamabad (Comfortable 4 hours drive from Motorway)</li><li>short stops along the way</li><li>Reach Islamabad &amp; Visit Faisal Masjid</li><li>Visit Margalla Hills &amp; Dam ne Koh</li><li>Dinner at Islamabad’s scenic Monal Restaurant that<br>oversees entire Islamabad</li></ul>', '2024-06-05 21:21:22', '2024-06-05 21:21:22'),
(19, 2, 'Enroute to Chillas', 4, '', '<ul><li>Early Morning breakfast and timely departure to Chillas</li><li>Travel towards chillas (8-9 hours of travelling on Karakoram<br>highway (Highest paved road in the world)</li><li>Visit Kiwai Waterfall</li><li>Visit Naran valley, Batakundi &amp; Babusar top</li><li>Reach Chillas &amp; Dinner.</li><li>Night stay at the hotel.</li></ul>', '2024-06-05 21:21:22', '2024-06-05 21:21:22'),
(20, 2, 'Experience the Fairy Meadows ride', 5, '', '<ul><li>Early Morning breakfast</li><li>Travel towards Fairy Meadows (From fairy meadow, you can have a&nbsp;<br>view of Nanga Parbat- 9th highest mountain in the world.</li><li>Reach Raikot and shift to Jeeps 4/4 (3 hours ride)</li><li>Reach jeep point and hike towards fairy meadows (3-4 hours)</li><li>Dinner, Bonfire &amp; night stay in Fairy Meadow&nbsp;<br>(World’s top destination for Adventure seekers)</li></ul>', '2024-06-05 21:21:22', '2024-06-05 21:21:22'),
(21, 2, 'Trek to Nanga Parbat basecamp', 6, '', '<ul><li>Early Morning breakfast</li><li>Brace yourself to hike towards Nanga Parbat basecamp&nbsp;<br>&amp; bayal camp.</li><li>Reach Nanga Parbat basecamp in 4-5 hours and night stay&nbsp;<br>at Bayal Camp</li><li>Dinner, Bonfire and night stay at Bayal camp.</li></ul>', '2024-06-05 21:21:22', '2024-06-05 21:21:22'),
(22, 2, 'Travel to Gilgit', 7, '', '<ul><li>Early Morning breakfast</li><li>Trek back to Bayal camp of Fairy meadows and hike to Jeep point</li><li>Shift to 4/4 jeeps &amp; reach raikot and Gilgit.</li><li>Dinner &amp; night stay at Gilgit</li></ul>', '2024-06-05 21:21:22', '2024-06-05 21:21:22'),
(23, 2, 'Experience World’s highest Peaks', 8, '', '<ul><li>Early Morning Breakfast</li><li>Visit Nanga Parbat view point (9th Highest mountain in&nbsp;<br>the world – Elevation 8126m)</li><li>Visit Junction point of three highest mountain ranges in<br>the world (Karakoram, Himalaya &amp; Hindukush)</li><li>Lunch break at Rakaposhi viewpoint (27th highest in the world)</li><li>Visit Karimabad Market (Popular for traditional &amp; Cultural&nbsp;<br>Handicrafts)&nbsp;</li><li>Visit Café de Hunza (Famous for Walnut Cake)</li><li>Visit Baltit fort</li><li>Night Stay at Karimabad Hunza</li></ul>', '2024-06-05 21:21:22', '2024-06-05 21:21:22'),
(24, 2, 'Explore Hunza’s vicinity', 9, '', '<ul><li>Early Morning Breakfast</li><li>Visit Historical 11th Century Altit and Royal gardens</li><li>Visit stunning Blue colored Attabad Lake</li><li>Visit Passu cones&nbsp;</li><li>Visit Passu yak Grill Café</li><li>Visit World’s longest hanging bridge – Hussaini Bridge</li><li>Dinner, Bonfire &amp; night stay at Passu.</li></ul>', '2024-06-05 21:21:22', '2024-06-05 21:21:22'),
(25, 2, 'Travel to Khunjerab National Park', 10, '', '<ul><li>Early Morning Breakfast</li><li>Visit Khunjerab national park &amp; Khunjerab border (Between Pakistan – China)<br>which is the highest international border at&nbsp;15,397 ft.</li><li>Travel back to passu village &amp; night stay at Passu</li><li>Visit Passu Village &amp; night stay at Passu</li><li>Visit Passu walnut café &amp; Yak grill café to try local and desi food</li></ul>', '2024-06-05 21:21:22', '2024-06-05 21:21:22'),
(26, 2, 'Eagle nest', 11, '', '<ul><li>Early morning breakfast</li><li>Visit Eagle’s nest ( you can have view of entire Hunza city<br>&amp; a view of different mountains peak include Nagar valley<br>&amp; Rakaposhi mountain)</li><li>Travel towards Naran &amp; night stay in Naran</li></ul>', '2024-06-05 21:21:22', '2024-06-05 21:21:22'),
(27, 2, 'Travel to Islamabad', 12, '', '<ul><li>Breakfast</li><li>Reach Islamabad after 4 hours drive</li><li>Rest day in Islamabad (Can be used to visit Malls and Shopping)</li></ul>', '2024-06-05 21:21:22', '2024-06-05 21:21:22'),
(28, 2, 'Departure & memories', 13, '', '<ul><li>Breakfast</li><li>Drop off members at international airport at per the scheduled flights</li></ul>', '2024-06-05 21:21:22', '2024-06-05 21:21:22'),
(29, 3, 'Departure from Islamabad', 1, '', '<p>Embark on an unforgettable journey as you depart from the capital city, Islamabad, and set forth on the mesmerizing Karakoram Highway, the highest paved road in the world. Marvel at the picturesque landscapes during the 8-9 hours drive to Chillas, making a stop to witness the captivating Kiwai Waterfall. Traverse through Naran Valley, Batakundi, and Babusar Top, each unveiling its unique charm. Arrive in Chillas, where a sumptuous dinner awaits, followed by a comfortable night\'s stay at the hotel.</p>', '2024-06-05 21:33:47', '2024-06-05 21:33:47'),
(30, 3, 'Experience the Fairy Meadows Ride', 2, '', '<p>As the sun rises, indulge in a hearty breakfast before heading to Raikot. Transfer to 4x4 jeeps for a thrilling 3-hour ride, culminating in the enchanting Fairy Meadows. This world-renowned destination for adventure seekers provides a panoramic view of Nanga Parbat, the 9th highest mountain globally. The evening is filled with a delectable dinner, a crackling bonfire, and a night stay in the ethereal Fairy Meadows.</p>', '2024-06-05 21:33:47', '2024-06-05 21:33:47'),
(31, 3, 'Trek to Nanga Parbat Basecamp', 3, '', '<p>With an early breakfast, gear up for an exhilarating trek to Nanga Parbat Basecamp and Bayal Camp. The 4-5 hours hike leads to the awe-inspiring Nanga Parbat Basecamp, where a night at Bayal Camp is nothing short of magical. Dinner is served against the backdrop of a blazing bonfire, making the night at Bayal Camp truly memorable.</p>', '2024-06-05 21:33:47', '2024-06-05 21:33:47'),
(32, 3, 'Travel to Gilgit', 4, '', '<p>After a refreshing breakfast, retrace your steps to Fairy Meadows\' Bayal Camp and embark on a jeep ride back to Raikot. Continue the journey to Gilgit City, where a delicious dinner and a night\'s stay await, providing a perfect blend of comfort and adventure.</p>', '2024-06-05 21:33:47', '2024-06-05 21:33:47'),
(33, 3, 'Experience World’s Highest Peaks', 5, '', '<p>Begin your day with a nourishing breakfast before a brief stop at the Rakaposhi viewpoint, the 27th highest peak globally. Brace yourself for a challenging yet rewarding 4-5 hour hike to Rakaposhi Basecamp, an experience that offers breathtaking vistas. The night at Rakaposhi Basecamp is adorned with dinner, a bonfire, and the majestic presence of one of the world\'s highest peaks.</p>', '2024-06-05 21:33:47', '2024-06-05 21:33:47'),
(34, 3, 'Hunza Valley Tour', 6, '', '<p>Rise to a delightful breakfast before descending from Rakaposhi or traveling from Minapin to Hunza. Explore the vibrant Karimabad Bazaar, visit the iconic Eagle Nest Peak during sunset, and settle in for a serene night\'s stay in the enchanting Hunza Valley.</p>', '2024-06-05 21:33:47', '2024-06-05 21:33:47'),
(35, 3, 'Explore Hunza’s Vicinity', 7, '', '<p>Immerse yourself in the rich cultural tapestry of Karimabad Market, savor the famous Walnut Cake at Café de Hunza, and delve into the history of Baltit Fort and 11th-century Altit with its royal gardens. Visit the stunning blue-hued Attabad Lake, marvel at the Passu Cones, and cross the world\'s longest hanging bridge – the Hussaini Bridge. The night in Passu Gojal is complemented by dinner, a bonfire, and the enchanting beauty of your surroundings.</p>', '2024-06-05 21:33:47', '2024-06-05 21:33:47'),
(36, 3, 'Travel to Khunjerab National Park', 8, '', '<p>After a nourishing breakfast, journey to Khunjerab National Park and the Pakistan-China border at Khunjerab, the highest international border at 15,397 ft. Optionally, indulge in local and desi food at Passu Walnut Café and Yak Grill Café. Your night in Passu Gojal is sure to be filled with awe and wonder.</p>', '2024-06-05 21:33:47', '2024-06-05 21:33:47'),
(37, 3, 'Travel Back to Chillas', 9, '', '<p>Kickstart your day with breakfast and visit Baskochi Top and Hopar Glacier before making your way back to Chillas. Enjoy the night amidst the serene surroundings of Chillas.</p>', '2024-06-05 21:33:47', '2024-06-05 21:33:47'),
(38, 3, 'Travel to Islamabad', 10, '', '<p>Savor a final breakfast and make short stops along the way as you journey back to Islamabad. Whether opting for a night stay in the capital or a drop-off at the airport, your adventure concludes with a treasure trove of memories from the unparalleled landscapes of Pakistan.</p>', '2024-06-05 21:33:47', '2024-06-05 21:33:47'),
(39, 4, 'Arrival in Islamabad - Unveiling the Journey', 1, '', '<p>Your adventure with Destination Pakistan begins with a seamless pickup from Islamabad Airport, whisking you away to a carefully chosen guest house where comfort meets sophistication. As the sun sets over the capital city, relish a delightful dinner, laying the foundation for the enchanting days ahead.</p>', '2024-06-05 21:43:56', '2024-06-05 21:43:56'),
(40, 4, 'Journey Towards Chillas - Karakoram Odyssey', 2, '', '<p>Awaken to the promise of a new day with an early morning breakfast, signaling the start of an exhilarating journey towards Chillas via the iconic Karakoram Highway. Along the way, be captivated by the mesmerizing Kiwai Waterfall and the awe-inspiring beauty of Naran Valley, Batakundi, and Babusar Top. The day concludes in Chillas, where dinner and a night of tranquility at the hotel await.</p>', '2024-06-05 21:43:56', '2024-06-05 21:43:56'),
(41, 4, 'Fairy Meadows Ride - A Trek to Enchantment', 3, '', '<p>Embrace the magic of Fairy Meadows on day three, commencing with an early morning breakfast. A thrilling 3-hour Jeep ride from Raikot sets the stage for a captivating 3-4 hour hike to Fairy Meadows. As night falls, indulge in a hearty dinner by a mesmerizing bonfire, with Nanga Parbat, the 9th highest mountain, casting its majestic presence over the enchanting meadows.</p>', '2024-06-05 21:43:56', '2024-06-05 21:43:56'),
(42, 4, 'Trek to Nanga Parbat Basecamp - Dance with the Giants', 4, '', '<p>As dawn breaks, fuel your spirits with an early morning breakfast, preparing for an exhilarating trek towards Nanga Parbat Basecamp and Bayal Camp. The 4-5 hour hike reveals the awe-inspiring grandeur of the 9th highest mountain. The night at Bayal Camp is a symphony of dinner, a bonfire, and the celestial beauty of the surroundings.</p>', '2024-06-05 21:43:56', '2024-06-05 21:43:56'),
(43, 4, 'A Magical Retreat in Fairy Meadows', 5, '', '<p>Imagine waking up in our cozy hut, surrounded by breathtaking morning views that seem almost otherworldly. Our day will be filled with Instagram-worthy moments as we venture to Reflection Lake to capture the stunning scenery that begs to be shared. Connecting with the locals will add a touch of authenticity to our journey, providing insights into the rich culture of the region. As the day unfolds, we\'ll indulge in a delightful barbecue, followed by a magical night of music and a warm bonfire.&nbsp;</p>', '2024-06-05 21:43:56', '2024-06-05 21:43:56'),
(44, 4, 'Journey to Hunza - Where Peaks Touch the Sky', 6, '', '<p>Embark on a new adventure with an early morning breakfast, retracing your steps to Bayal Camp and descending to Jeep Point. Board rugged 4x4 Jeeps, journeying towards the captivating Hunza Valley. The day concludes with a delightful dinner and a night immersed in the cultural tapestry of Hunza.</p>', '2024-06-05 21:43:56', '2024-06-05 21:43:56'),
(45, 4, 'Shangri-la of Asia - Karimabad\'s Charms', 7, '', '<p>As the sun graces the sky, indulge in a scrumptious breakfast before venturing into the heart of Karimabad. Explore the bustling Karimabad Market, savor the delights of Café de Hunza, and delve into the rich history of Baltit Fort. If time allows, witness a breathtaking sunset from the iconic Eagle Nest Peak, setting the stage for a night of culinary delights and relaxation in Hunza.</p>', '2024-06-05 21:43:56', '2024-06-05 21:43:56'),
(46, 4, 'Hunza Valley Tour - Embracing Nature\'s Wonders', 8, '', '<p>Begin the day with a delicious breakfast, setting the tone for an immersive tour of Hunza Valley. Visit the historic Altit Fort and Royal Gardens, explore the mesmerizing Attabad Lake, marvel at the iconic Passu Cones, and brave the adventure of crossing the World\'s Longest Hanging Bridge – the Hussaini Bridge. The night at Passu is a celebration of experiences, with dinner, a bonfire, and a serene night\'s stay.</p>', '2024-06-05 21:43:56', '2024-06-05 21:43:56'),
(47, 4, 'Top of Attabad Lake - Heights of Tranquility', 9, '', '<p>Awaken to a day of heights and exploration with an early morning breakfast. Venture to Baskochi Top, a hiking point offering panoramic views, and explore the awe-inspiring Hopar Glacier. Journey back to Gilgit, where an exploration of the bustling Gilgit Bazaar and a night of rest await, accompanied by a dinner infused with local flavors.</p>', '2024-06-05 21:43:56', '2024-06-05 21:43:56'),
(48, 4, 'Journey Back to Islamabad - A Tapestry of Memories', 10, '', '<p>Fuel up with breakfast as you embark on a scenic journey back to Islamabad, punctuated by short stops that unveil the beauty of the landscape. As the sun sets, reach Islamabad, reflecting on the incredible experiences that have unfolded.</p>', '2024-06-05 21:43:56', '2024-06-05 21:43:56'),
(49, 4, 'Rest Day in Islamabad - A Soothing Finale', 11, '', '<p>Savor a day of relaxation in Islamabad, with the option to explore its vibrant malls and indulge in some retail therapy. The day concludes with a drop-off at the airport, bidding farewell to the tapestry of memories woven during this unforgettable journey with Destination Pakistan.</p>', '2024-06-05 21:43:56', '2024-06-05 21:43:56'),
(50, 5, 'Historical Marvels and Culinary Delights', 1, '', '<p><strong>Lahore Fort and Badshahi Mosque:</strong> Begin your journey with a visit to the Lahore Fort, a UNESCO World Heritage Site, showcasing Mughal architecture at its finest. Adjacent to it, explore the iconic Badshahi Mosque, a symbol of grandeur and spiritual elegance.</p><p><strong>Delhi Gate and Gali Surjan Singh:</strong> Stroll through the historic Delhi Gate, an entry point to the Walled City of Lahore, and venture into Gali Surjan Singh, a narrow alley brimming with local charm and centuries-old stories.</p><p><strong>Wazir Khan Mosque:</strong> Immerse yourself in the mesmerizing beauty of the 17th-century Wazir Khan Mosque, renowned for its intricate tile work and stunning architecture, reflecting the artistic brilliance of Mughal craftsmanship.</p><p><strong>Dinner at Food Street Haveli Restaurant:</strong> Conclude your day with a culinary adventure at Food Street Haveli Restaurant, nestled within the culturally rich ambiance of Lahore\'s old city. Indulge in local delicacies amid the historic surroundings.</p>', '2024-06-05 21:59:47', '2024-06-05 21:59:47'),
(51, 5, 'Cultural Immersion and Modern Charms', 2, '', '<p><strong>Lahore Museum of Science and Technology:</strong> Kick off the day with a visit to the Lahore Museum of Science and Technology, an institution that beautifully combines history and technology, offering a glimpse into Pakistan\'s scientific achievements.</p><p><strong>Emporium Mall:</strong> Indulge in a shopping spree at Emporium Mall, one of Lahore\'s premier shopping destinations, featuring a plethora of international and local brands to satisfy every shopper\'s desire.</p><p><strong>National Parade at Wagah Border:</strong> Experience the fervor of the daily National Parade at the Wagah Border, a vibrant ceremony symbolizing the border closing between Pakistan and India. Feel the patriotic spirit and witness the impressive display of military precision.</p><p><strong>Dinner at Mall Road or Gulberg:</strong> As the day concludes, choose between the bustling Mall Road or the trendy Gulberg district for dinner. Both areas offer a diverse range of restaurants, blending modernity with the city\'s historic charm.</p>', '2024-06-05 21:59:47', '2024-06-05 21:59:47'),
(52, 5, 'Spiritual Exploration and Shopping Extravaganza', 3, '', '<p><strong>Data Ganj Baksh Shrine:</strong> Begin your day with spiritual enlightenment at the Data Ganj Baksh Shrine, the final resting place of the revered Sufi saint, Hazrat Ali Bin Usman (Data Ganj Baksh). Experience the peaceful ambiance and spiritual fervor.</p><p><strong>Hazuri Bagh and Ranjit Singh Samadhi:</strong> Explore the enchanting Hazuri Bagh, a garden housing the stunning Baradari of Ranjit Singh and the marble Ranjit Singh Samadhi, dedicated to the founder of the Sikh Empire.</p><p><strong>Quaid-e-Azam Library:</strong> Immerse yourself in knowledge at the Quaid-e-Azam Library, named after Muhammad Ali Jinnah, the founder of Pakistan. This historic library holds a vast collection of books and documents.</p><p><strong>Local Markets for Shopping:</strong> Dive into the vibrant local markets of Lahore for a shopping extravaganza. Whether it\'s the intricate handicrafts of Anarkali Bazaar or the bustling Liberty Market, each offers a unique shopping experience.</p><p><strong>Farewell Dinner at a Chai Cafe in Lahore:</strong> Conclude your Lahore sojourn with a farewell dinner at a charming Chai Cafe, savoring the rich flavors of Pakistani tea and desserts amidst a cozy, cultural setting. Reflect on the memories created in the heart of Lahore\'s history and hospitality.</p>', '2024-06-05 21:59:47', '2024-06-05 21:59:47'),
(53, 6, 'Discovering Islamabad\'s Cultural Tapestry', 1, '', '<p><strong>Faisal Mosque:</strong> Embrace the divine serenity of Faisal Mosque, an architectural masterpiece framed against the majestic Margalla Hills, offering a spiritual sanctuary and awe-inspiring vistas.</p><p><strong>Daman-e-Koh:</strong> Wander through Daman-e-Koh, a vantage point that unveils a breathtaking panorama of Islamabad, providing a tranquil escape and the perfect spot to capture the city\'s beauty.</p><p><strong>Pakistan Monument:</strong> Immerse yourself in the captivating history and design of the Pakistan Monument, a symbol of national unity, adorned with intricate artwork that tells the story of the nation\'s rich heritage.</p><p><strong>Shakarparian Park:</strong> Find solace in the lush greenery of Shakarparian Park, a peaceful oasis featuring manicured lawns and shaded pathways, offering a delightful escape from the urban bustle.</p><p><strong>Lunch at a Local Restaurant:</strong> Indulge in a culinary journey at a local restaurant, where the flavors of Pakistani cuisine come alive, tantalizing taste buds with a diverse array of aromatic dishes.</p><p><strong>Rawal Lake Viewpoint:</strong> Conclude the day with a scenic drive to Rawal Lake Viewpoint, where the shimmering waters and the city lights create a picturesque evening backdrop.</p><p><strong>Dinner at Blue Area:</strong> Relish the evening at Blue Area, a bustling commercial hub, and savor delectable dishes amidst the vibrant energy of the city.</p>', '2024-06-05 22:05:47', '2024-06-05 22:05:47'),
(54, 6, 'Nature and History Unveiled', 2, '', '<p><strong>Hike at Trail 3, Margalla Hills National Park:</strong> Embark on an invigorating hike along Trail 3 in the Margalla Hills National Park, offering not just exercise but breathtaking views that reward every step.</p><p><strong>Lok Virsa Museum:</strong> Delve into the heart of Pakistan\'s diverse cultural heritage at Lok Virsa Museum, where artifacts and exhibits paint a vivid picture of the nation\'s traditions and customs.</p><p><strong>Lunch at Pir Sohawa Viewpoint:</strong> Enjoy a delightful lunch at Pir Sohawa, perched atop the Margalla Hills, providing a culinary experience paired with panoramic views of Islamabad.</p><p><strong>Saidpur Village:</strong> Step back in time as you explore Saidpur Village, a cultural haven with cobbled streets, ancient architecture, and local artisans, offering a unique blend of history and charm.</p><p><strong>Shopping Time at Centaurus Mall:</strong> Unleash your inner shopaholic at Centaurus Mall, a modern retail haven featuring both international and local brands, ensuring a satisfying retail therapy experience.</p><p><strong>Dinner at a Local Eatery:</strong> Relish the evening at a local eatery, where the fusion of flavors captures the essence of Pakistani cuisine in a cozy and authentic setting.</p>', '2024-06-05 22:05:47', '2024-06-05 22:05:47'),
(55, 6, 'Architectural Splendors and Relaxation', 3, '', '<p><strong>Pakistan National Museum:</strong> Embark on a journey through time at the Pakistan National Museum, where artifacts and exhibits narrate the nation\'s narrative, creating a visual odyssey of history.</p><p><strong>Lunch at a Popular Eatery:</strong> Savor a delicious lunch at a popular eatery, immersing yourself in the local culinary scene and enjoying the diverse flavors that Islamabad has to offer.</p><p><strong>Stroll in Fatima Jinnah Park:</strong> Revel in the tranquility of Fatima Jinnah Park, one of the largest urban parks, providing a serene space for a leisurely stroll and moments of peaceful reflection.</p><p><strong>Shopping Time at Raja Bazaar, Rawalpindi:</strong> Dive into the vibrant chaos of Raja Bazaar in Rawalpindi, a bustling market where traditional craftsmanship, fabrics, and local delights await discerning shoppers.</p><p><strong>Dinner at a Local Spot:</strong> Conclude your Islamabad adventure with a delightful dinner at a local spot, where the flavors and hospitality encapsulate the warmth of Pakistani culture</p>', '2024-06-05 22:05:47', '2024-06-05 22:05:47'),
(56, 7, 'Lahore\'s Historical Marvels and Culinary Delights', 1, '', '<p><strong>Lahore Fort and Badshahi Mosque:</strong> Your journey begins with the awe-inspiring Lahore Fort, a UNESCO World Heritage Site showcasing Mughal architecture. Adjacent to it stands the iconic Badshahi Mosque, a symbol of grandeur and spiritual elegance.</p><p><strong>Delhi Gate and Gali Surjan Singh:</strong> Stroll through the historic Delhi Gate, an entry point to the Walled City of Lahore, and venture into Gali Surjan Singh, a narrow alley brimming with local charm and centuries-old stories.</p><p><strong>Wazir Khan Mosque:</strong> Immerse yourself in the mesmerizing beauty of the 17th-century Wazir Khan Mosque, renowned for its intricate tile work and stunning architecture, reflecting the artistic brilliance of Mughal craftsmanship.</p><p><strong>Dinner at Food Street Haveli Restaurant:</strong> Conclude your day with a culinary adventure at Food Street Haveli Restaurant, nestled within the culturally rich ambiance of Lahore\'s old city. Indulge in local delicacies amid the historic surroundings.</p>', '2024-06-05 22:19:31', '2024-06-05 22:19:31'),
(57, 7, 'Lahore\'s Cultural Immersion and Modern Charms', 2, '', '<p><strong>Lahore Museum of Science and Technology:</strong> Kick off the day with a visit to the Lahore Museum of Science and Technology, an institution beautifully combining history and technology, offering a glimpse into Pakistan\'s scientific achievements.</p><p><strong>Emporium Mall:</strong> Indulge in a shopping spree at Emporium Mall, one of Lahore\'s premier shopping destinations, featuring a plethora of international and local brands to satisfy every shopper\'s desire.</p><p><strong>National Parade at Wagah Border:</strong> Experience the fervor of the daily National Parade at the Wagah Border, a vibrant ceremony symbolizing the border closing between Pakistan and India. Feel the patriotic spirit and witness the impressive display of military precision.</p><p><strong>Dinner at Mall Road or Gulberg:</strong> As the day concludes, choose between the bustling Mall Road or the trendy Gulberg district for dinner. Both areas offer a diverse range of restaurants, blending modernity with the city\'s historic charm.</p>', '2024-06-05 22:19:31', '2024-06-05 22:19:31'),
(58, 7, 'Discovering Islamabad\'s Cultural Tapestry', 3, '', '<ul><li><strong>Drive:</strong> Drive to Islamabad via M-1 (Highway) and Reach Islamabad in 5 Hours time.<br><strong>Faisal Mosque: </strong>Embrace the divine serenity of Faisal Mosque, an architectural masterpiece framed against the majestic Margalla Hills, offering a spiritual sanctuary and awe-inspiring vistas.</li></ul><p><strong>Daman-e-Koh:</strong> Wander through Daman-e-Koh, a vantage point that unveils a breathtaking panorama of Islamabad, providing a tranquil escape and the perfect spot to capture the city\'s beauty.<br><strong>Dinner at Blue Area:</strong> Relish the evening at Blue Area, a bustling commercial hub, and savor delectable dishes amidst the vibrant energy of the city.</p>', '2024-06-05 22:19:31', '2024-06-05 22:19:31'),
(59, 7, 'Nature and History Unveiled', 4, '', '<p><strong>Hike at Trail 3, Margalla Hills National Park:</strong> Embark on an invigorating hike along Trail 3 in the Margalla Hills National Park, offering not just exercise but breathtaking views that reward every step.</p><p><strong>Lok Virsa Museum:</strong> Delve into the heart of Pakistan\'s diverse cultural heritage at Lok Virsa Museum, where artifacts and exhibits paint a vivid picture of the nation\'s traditions and customs.</p><p><strong>Lunch at Pir Sohawa Viewpoint:</strong> Enjoy a delightful lunch at Pir Sohawa, perched atop the Margalla Hills, providing a culinary experience paired with panoramic views of Islamabad.</p><p><strong>Saidpur Village:</strong> Step back in time as you explore Saidpur Village, a cultural haven with cobbled streets, ancient architecture, and local artisans, offering a unique blend of history and charm.</p><p><strong>Shopping Time at Centaurus Mall:</strong> Unleash your inner shopaholic at Centaurus Mall, a modern retail haven featuring both international and local brands, ensuring a satisfying retail therapy experience.</p><p><strong>Dinner at a Local Eatery:</strong> Relish the evening at a local eatery, where the fusion of flavors captures the essence of Pakistani cuisine in a cozy and authentic setting.</p>', '2024-06-05 22:19:31', '2024-06-05 22:19:31'),
(60, 8, 'Arrival in Islamabad', 1, '', '<p>Take a scenic flight to Islamabad, a city known for its rich cultural heritage and vibrant markets.<br>Enjoy a warm welcome with pickup from the airport, followed by check-in at the hotel in Islamabad.<br>Delight in a Welcome Dinner at Monal Restaurant, perched atop the Margalla Hills, offering panoramic views of the city lights.<br>Immerse yourself in the capital\'s diverse culture before a comfortable night\'s stay.</p>', '2024-06-06 00:28:38', '2024-06-06 00:28:38'),
(61, 8, 'Islamabad to Chillas', 2, '', '<p>Embark on an early morning departure, winding through the iconic Karakoram Highway, often dubbed the \"Eighth Wonder of the World.\"<br>Savor breakfast at Besham Ramada, a popular stopover with picturesque views of the surrounding hills.<br>Make short but memorable stops at Dassu and the colossal Bhasha Dam, marveling at one of the world\'s highest dams.<br>Indulge in a delicious dinner and unwind for the night in Chillas, surrounded by the grandeur of the Karakoram Range.</p>', '2024-06-06 00:28:38', '2024-06-06 00:28:38'),
(62, 8, 'Chillas to Karimabad Hunza', 3, '', '<p>Start the day with a hearty breakfast before setting out to witness the awe-inspiring Nanga Parbat View Point, the world\'s ninth-highest mountain.<br>Explore the convergence of the Karakoram, Himalayas, and Hindukush mountain ranges, a unique geographical marvel.<br>Enjoy lunch with a view at the Rakaposhi Viewpoint, another of the world\'s highest peaks.<br>Immerse yourself in the rich cultural tapestry of Karimabad Market, home to traditional handicrafts and souvenirs.<br>Experience the delightful Cafe De Hunza, renowned for its delectable Walnut Cake.<br>Conclude the day with a visit to the historic Baltit Fort before a comfortable night in Karimabad Hunza.</p>', '2024-06-06 00:28:38', '2024-06-06 00:28:38'),
(63, 8, 'Exploring Hunza', 4, '', '<p>Begin the day with breakfast and a visit to Altit Fort &amp; Royal Gardens, bearing witness to centuries of history.<br>Discover the enchanting hues of the Miraculous Attabad Lake, formed after a landslide in 2010.<br>Traverse the iconic Hussaini Bridge and marvel at the surreal Passu Cones.<br>Relish the warmth of a bonfire, delicious dinner, and a cozy night\'s stay at the Passu Wood Land Resort, surrounded by breathtaking views.</p>', '2024-06-06 00:28:38', '2024-06-06 00:28:38'),
(64, 8, 'Journey to Skardu', 5, '', '<p>After breakfast, embark on a picturesque journey to Skardu, a mesmerizing six-hour drive through snow-draped landscapes.<br>Visit the ethereal Upper Kachura &amp; Lower Kachura, known for their frozen beauty.<br>Explore the pristine Soq Valley before settling in for dinner and a restful night in Skardu.</p>', '2024-06-06 00:28:38', '2024-06-06 00:28:38'),
(65, 8, 'Bashoo Valley & Meadows in Skardu', 6, '', '<p>Enjoy a delightful breakfast in Skardu before an adventurous shift to 4/4 jeeps.<br>Explore the enchanting Bashoo Valley &amp; Meadows, renowned as one of Skardu\'s most captivating destinations.<br>Return to Skardu for the night, sharing stories and experiences around a warm bonfire.</p>', '2024-06-06 00:28:38', '2024-06-06 00:28:38'),
(66, 8, 'Shigar Valley Exploration', 7, '', '<p>Start the day with a delicious breakfast in Skardu.<br>Embark on an exploration of Shigar Valley, home to the historic Bab-e-Shigar and the mesmerizing Cold Desert.<br>Discover the rich heritage of Shigar Fort, a stunning architectural marvel.<br>Conclude the day with a comfortable night\'s stay in Shigar.</p>', '2024-06-06 00:28:38', '2024-06-06 00:28:38'),
(67, 8, 'Khaplu Adventure', 8, '', '<p>Savor a hearty breakfast in Shigar before a day of adventure.<br>Witness the majestic Manthoka Waterfall, a powerful natural wonder.<br>Explore the picturesque Khaplu Valley, visiting the iconic Khaplu Mosque and Fort.<br>Reach the highest point of Khaplu, Thoqseekhar, for breathtaking panoramic views.<br>Choose between a night stay in Khaplu or Skardu, surrounded by the tranquility of the mountains.</p>', '2024-06-06 00:28:38', '2024-06-06 00:28:38'),
(68, 8, 'Return Journey to Chillas/Besham', 9, '', '<p>Enjoy a leisurely breakfast in Khaplu or Skardu.<br>Begin the return journey towards Chillas/Besham, making a few stops along the scenic route.<br>Arrive in Chillas in the evening for a peaceful night\'s stay, reminiscing about the unforgettable journey.</p>', '2024-06-06 00:28:38', '2024-06-06 00:28:38'),
(69, 8, 'Return to Islamabad', 10, '', '<p>Start the day with a final breakfast in Chillas or Besham.<br>Travel back to Islamabad, absorbing the mesmerizing landscapes once more.<br>Safely drop off members at the airport, concluding the 10-day winter adventure through the stunning northern regions of Pakistan.</p><p>This itinerary promises an immersive experience, combining natural wonders, cultural exploration, and adventure in the snow-clad beauty of Hunza and Skardu.</p>', '2024-06-06 00:28:38', '2024-06-06 00:28:38'),
(70, 9, 'Lahore', 1, '', '<ul><li>Pick up from Lahore Airport</li><li>Check in at Hotel</li><li>Brace yourself to experience Lahore’s unique food experience</li><li>Check in at hotel after first day experience</li></ul>', '2024-06-06 00:14:39', '2024-06-06 00:14:39'),
(71, 9, 'Visit to Lahore’s Historical Places', 2, '', '<ul><li>Time for Lahore’s traditional breakfast</li><li>Visit Historical Walled City of Lahore</li><li>Visit 16th Century Badshah Masjid</li><li>Visit 15th Century Lahore Fort</li><li>Visit 16th Century Masjid Wazir Khan</li><li>Visit Wagha Border in the evening to experience<br>flag hosting parade between India &amp; Pakistan</li><li>Traditional Dinner at Haveli Restaurant Anarkali.</li><li>Night Stay at Lahore</li></ul>', '2024-06-06 00:14:39', '2024-06-06 00:14:39'),
(72, 9, 'Drive to Islamabad', 3, '', '<ul><li>Early morning breakfast</li><li>Leave for Islamabad (Comfortable 4 hours drive from Motorway)</li><li>short stops along the way</li><li>Reach Islamabad &amp; Visit Faisal Masjid</li><li>Visit Margalla Hills &amp; Dam ne Koh</li><li>Dinner at Islamabad’s scenic Monal Restaurant that oversees entire Islamabad<br>Night Stay in islamabad</li></ul>', '2024-06-06 00:14:39', '2024-06-06 00:14:39'),
(73, 9, 'Enroute to Chillas', 4, '', '<ul><li>Early Morning breakfast and timely departure to Chillas</li><li>Travel towards chillas (8-9 hours of travelling on Karakoram<br>highway (Highest paved road in the world)</li><li>Visit Besham</li><li>Short stays along the way.</li><li>Reach Chillas &amp; Dinner.</li><li>Night stay at the hotel.</li></ul>', '2024-06-06 00:14:39', '2024-06-06 00:14:39'),
(74, 9, 'Experience World’s highest Peaks', 5, '', '<ul><li>Early Morning Breakfast</li><li>Visit Nanga Parbat view point (9th Highest mountain in&nbsp;<br>the world – Elevation 8126m)</li><li>Visit Junction point of three highest mountain ranges in<br>the world (Karakoram, Himalaya &amp; Hindukush)</li><li>Lunch break at Rakaposhi viewpoint (27th highest in the world)</li><li>Visit Karimabad Market (Popular for traditional &amp; Cultural&nbsp;<br>Handicrafts)&nbsp;</li><li>Visit Café de Hunza (Famous for Walnut Cake)</li><li>Visit Baltit fort</li><li>Night Stay at Karimabad Hunza</li></ul>', '2024-06-06 00:14:39', '2024-06-06 00:14:39'),
(75, 9, 'Explore Hunza’s vicinity', 6, '', '<ul><li>Early Morning Breakfast<br>Visit Historical 11th Century Altit and Royal gardens</li><li>Visit stunning Blue colored Attabad Lake</li><li>Visit Passu cones&nbsp;</li><li>Visit Passu yak Grill Café</li><li>Visit World’s longest hanging bridge – Hussaini Bridge</li><li>Dinner, Bonfire &amp; night stay at Passu.</li></ul>', '2024-06-06 00:14:39', '2024-06-06 00:14:39'),
(76, 9, 'Travel Back to Chillas', 7, '', '<p>Kickstart your day with breakfast and visit Baskochi Top and Hopar Glacier before making your way back to Chillas. Enjoy the night amidst the serene surroundings of Chillas.</p>', '2024-06-06 00:14:39', '2024-06-06 00:14:39'),
(77, 9, 'Travel to Islamabad', 8, '', '<p>Savor a final breakfast and make short stops along the way as you journey back to Islamabad. Whether opting for a night stay in the capital or a drop-off at the airport, your adventure concludes with a treasure trove of memories from the unparalleled landscapes of Pakistan.</p>', '2024-06-06 00:14:39', '2024-06-06 00:14:39'),
(78, 10, 'Lahore Indulgence', 1, '', '<p>Unwind in the comfort of Nishat Hotel Lahore, setting the stage for an indulgent exploration of Lahore\'s culinary delights, offering a taste of the city\'s rich and diverse food scene.</p>', '2024-06-06 00:25:48', '2024-06-06 00:25:48'),
(79, 10, 'Walled City Marvels', 2, '', '<p>Embark on a cultural odyssey through Lahore\'s Walled City, marveling at iconic landmarks like the Badshahi Mosque and Lahore Fort. The evening crescendos with the spectacle of the National Flag Parade at Wahga Border, followed by a traditional dinner at Haveli Restaurant Anarkali.</p>', '2024-06-06 00:25:48', '2024-06-06 00:25:48'),
(80, 10, 'Islamabad Extravaganza', 3, '', '<p>Journey towards Islamabad, punctuating the drive with scenic stops. Revel in the architectural splendor of the Faisal Mosque and the natural beauty of Margalla Hills and Dam-ne-Koh. The day concludes with a delectable dinner at the panoramic Monal Restaurant, and a luxurious night\'s stay at Serena or Marriott Islamabad.</p>', '2024-06-06 00:25:48', '2024-06-06 00:25:48'),
(81, 10, 'Mountainous Tranquility', 4, '', '<p>&nbsp;Embark on an 8-9 hour drive to Chillas, making captivating stops along the way. Enjoy the serene ambiance of Shangrila, where a night of tranquility awaits amidst the breathtaking landscape.</p>', '2024-06-06 00:25:48', '2024-06-06 00:25:48'),
(82, 10, 'Majestic Peaks and Cultural Treasures', 5, '', '<p>Explore Nanga Parbat View Point and the Junction Point of Three Mountain Ranges. Immerse yourself in the cultural tapestry of Karimabad Market, sip coffee at Cafe De Hunza, and visit the historic Baltit Fort. The day culminates in a night of luxury at Hunza Luxus.</p>', '2024-06-06 00:25:48', '2024-06-06 00:25:48'),
(83, 10, 'Hunza Wonders', 6, '', '<p>&nbsp;Discover Altit Fort, marvel at the miraculous Attabad Lake, cross the iconic Hussaini Bridge, and witness the surreal Passu Cones. Conclude the day with dinner, a bonfire, and a night of opulence at Luxus Hunza.</p>', '2024-06-06 00:25:48', '2024-06-06 00:25:48'),
(84, 10, 'Skardu Serenity', 7, '', '<p>Journey to Skardu, exploring Upper and Lower Kachura, and finding solace at the enchanting Shangrila Resort. Enjoy dinner and a night of luxurious tranquility at Katpana Glamp.</p>', '2024-06-06 00:25:48', '2024-06-06 00:25:48'),
(85, 10, 'Bashoo Valley Exploration', 8, '', '<p>Embark on 4x4 jeeps to explore the stunning Bashoo Valley and Meadows, one of Skardu\'s hidden gems. Return to Skardu and continue the journey to Shigar Valley, with a night of cultural immersion and comfort at Khoj Resorts Shigar.</p>', '2024-06-06 00:25:48', '2024-06-06 00:25:48'),
(86, 10, 'Shigar\'s Heritage', 9, '', '<p>Delve into the cultural richness of Shigar Valley, visiting Bab-e-Shigar, the Cold Desert, and the historic Shigar Fort. Revel in a night of serene luxury at Shigar Khoj Resort.</p>', '2024-06-06 00:25:48', '2024-06-06 00:25:48'),
(87, 10, 'Natural Wonders and Return to Chillas', 10, '', '<p>Visit the captivating Manthoka Waterfall before traveling back to Chillas for a night of relaxation.</p>', '2024-06-06 00:25:48', '2024-06-06 00:25:48'),
(88, 10, 'Swat Valley Arrival', 11, '', '<p>Embark on a scenic journey to Swat, making stops along the way, and conclude the day at the picturesque Malamjabba PC for a night of luxury.</p>', '2024-06-06 00:25:48', '2024-06-06 00:25:48'),
(89, 10, 'Return to Islamabad', 12, '', '<p>Continue the journey to Islamabad, making short stops, and spend the night in opulence at Serena or Marriott Islamabad.</p>', '2024-06-06 00:25:48', '2024-06-06 00:25:48'),
(90, 10, 'Departure from Lahore', 13, '', '<p>After a leisurely breakfast and free time for shopping, travel back to Lahore, concluding the journey with dinner and a night\'s stay at Nishat Hotel before dropping off members at the airport.</p>', '2024-06-06 00:25:48', '2024-06-06 00:25:48'),
(91, 11, 'Arrival in Islamabad', 1, '', '<ul><li>Arrival at Islamabad International Airport.</li><li>Transfer to hotel for rest and expedition briefing.</li><li>Meet your fellow riders and guide.</li><li>Overnight stay in Islamabad.</li></ul>', '2024-06-06 00:35:19', '2024-06-06 00:35:19'),
(92, 11, 'Flight to Skardu', 2, '', '<ul><li>Morning flight from Islamabad to Skardu.</li><li>Transfer to the hotel and check-in.</li><li>Afternoon bike allocation and briefing session.</li><li>Short ride around Skardu to get familiar with the bikes.</li><li>Overnight stay in Skardu.</li></ul>', '2024-06-06 00:35:19', '2024-06-06 00:35:19'),
(93, 11, 'Skardu to Khaplu', 3, '', '<ul><li>Ride from Skardu to the picturesque Khaplu Valley.</li><li>Visit Khaplu Palace, a historical fort and palace.</li><li>Explore the local culture and enjoy the stunning scenery.</li><li>Overnight stay in Khaplu.</li></ul>', '2024-06-06 00:35:19', '2024-06-06 00:35:19'),
(94, 11, 'Khaplu to Shigar Valley', 4, '', '<ul><li>Ride from Khaplu to Shigar Valley.</li><li>Visit the Shigar Fort (Fong-Khar), a 400-year-old fort that has been transformed into a museum and hotel.</li><li>Explore the beautiful Shigar Valley.</li><li>Overnight stay in Shigar.</li></ul>', '2024-06-06 00:35:19', '2024-06-06 00:35:19'),
(95, 11, 'Skardu to Gilgit', 5, '', '<ul><li>Ride from Skardu to Gilgit via the scenic JSR route.</li><li>Stop at viewpoints along the way for photography.</li><li>Arrive in Gilgit, check-in at the hotel.</li><li>Evening at leisure to explore Local Market.</li><li>Overnight stay in Gilgit.</li></ul>', '2024-06-06 00:35:19', '2024-06-06 00:35:19'),
(96, 11, 'Gilgit to Hunza Valley Exploration', 6, '', '<ol><li>Ride from Gilgit to Hunza<br>Visit Baltit Fort and Altit Fort, historical landmarks offering stunning views.</li><li>Ride to Eagle’s Nest for panoramic views of the Hunza Valley.</li><li>Overnight stay in Hunza.</li></ol>', '2024-06-06 00:35:19', '2024-06-06 00:35:19'),
(97, 11, 'Rest Day in Hunza Valley', 7, '', '<ol><li>Explore local markets and interact with the friendly locals.</li><li>Overnight stay in Passu Hunza.</li></ol>', '2024-06-06 00:35:19', '2024-06-06 00:35:19'),
(98, 11, 'Day Trip to Khunjerab Pass', 8, '', '<ul><li>Early morning departure for a day trip to Khunjerab Pass, the highest paved international border crossing in the world (weather permitting).</li><li>Enjoy breathtaking views and wildlife sightings in the Khunjerab National Park.</li><li>Return to Passu Gojal in the evening.</li><li>Overnight stay in Passu Hunza.</li></ul>', '2024-06-06 00:35:19', '2024-06-06 00:35:19'),
(99, 11, 'Hunza to Gilgit', 9, '', '<ul><li>Morning ride from Hunza to Gilgit.</li><li>Visit the picturesque Naltar Valley on 4/4 jeeps en route if time permits<br>Overnight stay in Gilgit</li></ul>', '2024-06-06 00:35:19', '2024-06-06 00:35:19'),
(100, 11, 'Flight to Islamabad', 10, '', '<ol><li>Catch an afternoon flight from Gilgit to Islamabad.</li><li>Transfer to the hotel upon arrival in Islamabad.</li><li>Evening at leisure for a city tour or rest.</li><li>Overnight stay in Islamabad.</li></ol>', '2024-06-06 00:35:19', '2024-06-06 00:35:19'),
(101, 11, 'Departure from Islamabad', 11, '', '<ul><li>Transfer to Islamabad International Airport for departure flight back to Home.</li></ul>', '2024-06-06 00:35:19', '2024-06-06 00:35:19'),
(102, 12, 'Flight to Skardu and Drive to Hunza', 1, '', '<ul><li>Morning flight from Islamabad to Skardu.</li><li>Upon arrival in Skardu, drive directly to Hunza (approximately 6-7 hours).</li><li>Enjoy the scenic journey through the Karakoram Highway.</li><li>Check-in at the hotel in Hunza.</li><li>Overnight stay in Hunza.</li></ul>', '2024-06-06 00:48:16', '2024-06-06 00:48:16'),
(103, 12, 'Hunza Valley Exploration', 2, '', '<ul><li>Visit Karimabad, the main town of Hunza.</li><li>Explore Baltit Fort and Altit Fort, historical landmarks offering stunning views.</li><li>Walk around Karimabad Bazaar for local shopping.</li><li>Overnight stay in Hunza.</li></ul>', '2024-06-06 00:48:16', '2024-06-06 00:48:16'),
(104, 12, 'Day Trip to Khunjerab Pass', 3, '', '<ul><li>Early morning departure for a day trip to Khunjerab Pass, the highest paved international border crossing in the world (weather permitting).</li><li>Enjoy breathtaking views and wildlife sightings in the Khunjerab National Park.</li><li>Return to Hunza in the evening.</li><li>Overnight stay in Hunza.</li></ul>', '2024-06-06 00:48:16', '2024-06-06 00:48:16'),
(105, 12, 'Visit to Passu and Attabad Lake', 4, '', '<ul><li>Drive to Passu and see the iconic Passu Cones.</li><li>Visit Attabad Lake, famous for its turquoise waters.</li><li>Enjoy a boat ride on Attabad Lake.</li><li>Return to Hunza for the night.</li><li>Overnight stay in Hunza.</li></ul>', '2024-06-06 00:48:16', '2024-06-06 00:48:16'),
(106, 12, 'Travel from Hunza to Skardu', 5, '', '<ul><li>Morning departure from Hunza to Skardu (approximately 6-7 hours drive).</li><li>Check-in at the hotel in Skardu.</li><li>Relax and unwind after the journey.</li><li>Overnight stay in Skardu.</li></ul>', '2024-06-06 00:48:16', '2024-06-06 00:48:16');
INSERT INTO `trip_itineraries` (`id`, `trip_id`, `title`, `day`, `image`, `detail`, `created_at`, `updated_at`) VALUES
(107, 12, 'Skardu Sightseeing', 6, '', '<ul><li>Visit Shangrila Resort (Lower Kachura Lake), known as \"Heaven on Earth\".</li><li>Explore Upper Kachura Lake.</li><li>Visit the ancient Skardu Fort (Kharpocho Fort).</li><li>Overnight stay in Skardu.</li></ul>', '2024-06-06 00:48:16', '2024-06-06 00:48:16'),
(108, 12, 'Excursion to Deosai National Park', 7, '', '<ul><li>Full-day excursion to Deosai National Park, known as the \"Land of Giants\".</li><li>Enjoy the stunning landscapes, flora, and fauna.</li><li>Return to Skardu in the evening.</li><li>Overnight stay in Skardu.</li></ul>', '2024-06-06 00:48:16', '2024-06-06 00:48:16'),
(109, 12, 'Flight to Islamabad and Departure', 8, '', '<ul><li>Morning flight from Skardu to Islamabad.</li><li>Depending on the flight schedule, either explore Islamabad briefly or transfer directly to the airport for the departure flight back home<br>&nbsp;</li><li><br><i><strong>Adventure Tour Preparation</strong></i><br>Please be advised that this is an adventure tour to Pakistan offered by DESTINATION PAKISTAN. and is designed to provide participants with thrilling and adventurous experiences in diverse and sometimes challenging environments. As such, we kindly request all participants to prepare accordingly and understand the following:<br><br><strong>Physical Fitness</strong>: This adventure tour involves activities such as trekking, hiking, and Jeep rides in rugged terrain. Participants should ensure they are in good physical condition and capable of undertaking such activities.<br><br><strong>Weather Conditions</strong>: Pakistan\'s weather can be unpredictable, especially in mountainous regions. Participants should be prepared for varying weather conditions, including rain, wind, and temperature fluctuations, by bringing appropriate clothing and gear.<br><br><strong>Health Considerations</strong>: It is advisable for participants to consult with their healthcare provider prior to the trip to ensure they are up to date on vaccinations and medications. Additionally, all participants should be prepared for potential altitude sickness in high-altitude areas.<br><br><strong>Safety Measures:</strong> While our team takes every precaution to ensure the safety of participants, adventure travel inherently involves risks. Participants should adhere to safety guidelines provided by our experienced guides, follow instructions from guides, stay within designated areas, and respect local customs and regulations.</li></ul>', '2024-06-06 00:48:16', '2024-06-06 00:48:16'),
(120, 13, 'Arrive at Allama Iqbal Airport', 1, '', '<ul><li>Pick up from the Airport and travel to the hotel.</li></ul>', '2024-06-10 00:47:12', '2024-06-10 00:47:12'),
(121, 13, 'Drive to Kartarpur, Narowal', 2, '', '<p>On day 2, we shall travel to Kartarpur, Narowal.</p><p>Following shall be the key highlights:</p><ul><li>Drive to Kartarpur, Narowal ( Which is 2 hours 40 mins ride from Lahore)&nbsp;<br>We shall travel via Lahore – Mureedke road from Lahore. This shall be full day excursion.</li><li>Travel back to Lahore in the evening.</li></ul>', '2024-06-10 00:47:12', '2024-06-10 00:47:12'),
(122, 13, 'Drive to Islamabad', 3, '', '<p>On day 3, we shall travel to Islamabad.</p><p>Following shall be the key highlights:</p><ul><li>Travel to Islamabad vi Lahore – Islamabad motorway. The Journey shall take over 5 hours approximately.</li><li>We shall cross Salt range after crossing through countryside.</li><li>Visit Hassan Abdal Panja Sahib</li><li>Transfer to Hotel in Islamabad</li><li>Dinner at Daman e Koh in Margalla Hills which is the foothills of Himalaya.</li></ul>', '2024-06-10 00:47:12', '2024-06-10 00:47:12'),
(123, 13, 'Drive back to Lahore', 4, '', '<p>On day 4, we shall travel to Lahore; however, we will pass through Gujranwala- The city of Pehalwans.</p><p>Following shall be the key highlights:</p><ul><li>Early Morning departure</li><li>Drive back to Lahore.</li><li>Drive through Gujranwala</li><li>Travel to Aimanabad to see Bhai Lalu Di Khoi, Chaki Sahib &amp; Rohri Sahib Gurdwaras.</li><li>Later, we travel back to Lahore.</li></ul>', '2024-06-10 00:47:12', '2024-06-10 00:47:12'),
(124, 13, 'Explore Lahore & Drive to Faisalabad.', 5, '', '<p>On day 5, we shall explore the city of Lahore before departing for Faisalabad in the evening.</p><p>Following shall be the key highlights:</p><ul><li>Early morning drive to Baba Guru Nanak Ji’s residence in Nankana Sahib</li><li>Pay visit to Janamastan Baba Satguru ji at the Gurudwara Patti Sahaib.</li><li>Visit Bal lila sahaib, Tambu Sahai, 6th Padshahi, Malji Sahai, and Kaira Sahai</li><li>Visit Choorkana’s Gurdwara Sacha Sauda in Farooqabadand drive to Faisalabad in the afternoon.</li></ul>', '2024-06-10 00:47:12', '2024-06-10 00:47:12'),
(125, 13, 'Drive to Nankana Sahib', 6, '', '<p>On day 6, we shall drive to Nankana Sahib.</p><p>Following shall be the key highlights:</p><ul><li>Drive to Nankana Sahib.</li><li>Full day excursion at Baba Satguru Nanak Dev Jee Maharaj.</li><li>Drive to Faisalabad in the evening.</li></ul>', '2024-06-10 00:47:12', '2024-06-10 00:47:12'),
(126, 13, 'Visit Lahore & Anarkali Bazaar', 7, '', '<p>On day 7, we shall drive to Nankana Sahib &amp; visit Lahore’s famous Anarkali Bazaar.</p><p>Following shall be the key highlights:</p><ul><li>Travel from Faisalabad to Lahore</li><li>Visit Lahore Museum</li><li>Visit Anarkali Bazaar for shopping.</li><li>Check in the hotel in the afternoon.</li></ul>', '2024-06-10 00:47:12', '2024-06-10 00:47:12'),
(127, 13, 'Explore Lahore Lahore aey.', 8, '', '<p>On day 8, we shall visit the remaining cultural and heritage places.</p><p>Following shall be the key highlights:</p><ul><li>Visit Lahore Fort &amp; Sikh Museum in Lahore fort.</li><li>Visit Badshahi Masjid, &amp; Mughal Structures.</li><li>Visit Samadhi of Mahraja Ranjit Singh</li><li>Visit Gurdwara Dera Sahib (Guru Arjun Dev ji)</li><li>Later Travel to Delhi Gate to explore walled city of Lahore</li><li>Visit Gurdwara Chuna Mandi</li><li>Visit Shalimar Gardens</li><li>Visit Gurdwara Sheed Ganj in the afternoon.</li><li>Grand Farewell Dinner.</li></ul>', '2024-06-10 00:47:12', '2024-06-10 00:47:12'),
(128, 13, 'Shopping & Relax.', 9, '', '<p>On day 9, we shall visit Wagha Border Parade Ceremony &amp; light activities in the morning.</p>', '2024-06-10 00:47:12', '2024-06-10 00:47:12'),
(129, 13, 'Fly to Home Country:', 10, '', '<p>That’s a wrap. Farewell &amp; Airport Transfer</p>', '2024-06-10 00:47:12', '2024-06-10 00:47:12');

-- --------------------------------------------------------

--
-- Table structure for table `trip_schedules`
--

CREATE TABLE `trip_schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trip_id` bigint(20) UNSIGNED NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trip_schedules`
--

INSERT INTO `trip_schedules` (`id`, `trip_id`, `month`, `year`, `start_date`, `end_date`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 'June', 2024, '2024-06-15', '2024-06-30', 10000.00, '2024-06-05 21:24:07', '2024-06-05 21:24:07'),
(2, 2, 'June', 2024, '2024-06-15', '2024-06-22', 1450.00, '2024-06-05 21:21:22', '2024-06-05 21:21:22'),
(3, 3, 'June', 2024, '2024-06-15', '2024-06-22', 1250.00, '2024-06-05 21:33:47', '2024-06-05 21:33:47'),
(4, 4, 'June', 2024, '2024-06-15', '2024-06-22', 1399.00, '2024-06-05 21:43:56', '2024-06-05 21:43:56'),
(5, 5, 'June', 2024, '2024-06-15', '2024-06-22', 600.00, '2024-06-05 21:59:47', '2024-06-05 21:59:47'),
(6, 6, 'June', 2024, '2024-06-15', '2024-06-22', 600.00, '2024-06-05 22:05:47', '2024-06-05 22:05:47'),
(7, 7, 'June', 2024, '2024-06-15', '2024-06-22', 850.00, '2024-06-05 22:19:31', '2024-06-05 22:19:31'),
(8, 8, 'June', 2024, '2024-06-15', '2024-06-22', 1000.00, '2024-06-06 00:28:38', '2024-06-06 00:28:38'),
(9, 9, 'June', 2024, '2024-06-15', '2024-06-22', 1000.00, '2024-06-06 00:14:39', '2024-06-06 00:14:39'),
(10, 10, 'June', 2024, '2024-06-15', '2024-06-22', 2000.00, '2024-06-06 00:25:48', '2024-06-06 00:25:48'),
(11, 11, 'June', 2024, '2024-06-15', '2024-06-22', 2000.00, '2024-06-06 00:35:19', '2024-06-06 00:35:19'),
(12, 12, 'June', 2024, '2024-06-15', '2024-06-22', 1150.00, '2024-06-06 00:48:16', '2024-06-06 00:48:16'),
(14, 13, 'June', 2024, '2024-06-15', '2024-06-22', 1399.00, '2024-06-10 00:47:12', '2024-06-10 00:47:12');

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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'bilal', 'bilalwarrior@gmail.com', NULL, '$2y$10$ebtQhWvrWjqnI4vg/bpYt.KAH710DJBD9uMAXyfEyi/M5swXV70Ga', 'q3a0136AqA6pmNaezZQpsaWkptrwfvwZzDziJVP7fQzdymSl0DfIt7vonuJk', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media_gallery`
--
ALTER TABLE `media_gallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_gallery_trip_id_foreign` (`trip_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter_subscriptions`
--
ALTER TABLE `newsletter_subscriptions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `newsletter_subscriptions_email_unique` (`email`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trip_destinations`
--
ALTER TABLE `trip_destinations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trip_destinations_trip_id_foreign` (`trip_id`);

--
-- Indexes for table `trip_itineraries`
--
ALTER TABLE `trip_itineraries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trip_itineraries_trip_id_foreign` (`trip_id`);

--
-- Indexes for table `trip_schedules`
--
ALTER TABLE `trip_schedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trip_schedules_trip_id_foreign` (`trip_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media_gallery`
--
ALTER TABLE `media_gallery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `newsletter_subscriptions`
--
ALTER TABLE `newsletter_subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trips`
--
ALTER TABLE `trips`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `trip_destinations`
--
ALTER TABLE `trip_destinations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `trip_itineraries`
--
ALTER TABLE `trip_itineraries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `trip_schedules`
--
ALTER TABLE `trip_schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `media_gallery`
--
ALTER TABLE `media_gallery`
  ADD CONSTRAINT `media_gallery_trip_id_foreign` FOREIGN KEY (`trip_id`) REFERENCES `trips` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `trip_destinations`
--
ALTER TABLE `trip_destinations`
  ADD CONSTRAINT `trip_destinations_trip_id_foreign` FOREIGN KEY (`trip_id`) REFERENCES `trips` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `trip_itineraries`
--
ALTER TABLE `trip_itineraries`
  ADD CONSTRAINT `trip_itineraries_trip_id_foreign` FOREIGN KEY (`trip_id`) REFERENCES `trips` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `trip_schedules`
--
ALTER TABLE `trip_schedules`
  ADD CONSTRAINT `trip_schedules_trip_id_foreign` FOREIGN KEY (`trip_id`) REFERENCES `trips` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

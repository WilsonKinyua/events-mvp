-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 11, 2021 at 11:10 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvp`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `headquarters` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `industry` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `about`, `website`, `headquarters`, `type`, `industry`, `facebook`, `twitter`, `instagram`, `linkedin`, `youtube`, `phone`, `email`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Irene Orr', NULL, 'https://www.butuhygekucuca.org.uk', 'In est officia aut', 'Eligendi reiciendis', 'Laborum fugit velit', 'Voluptatibus rem nob', 'Dolores ipsam animi', 'Assumenda recusandae', 'Et consectetur quia', 'Excepteur iure dolor', '+1 (356) 509-1667', 'xyhowe@mailinator.com', '2021-08-11 17:44:21', '2021-08-11 17:44:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `event_settings`
--

CREATE TABLE `event_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_start` date DEFAULT NULL,
  `event_end` date DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_settings`
--

INSERT INTO `event_settings` (`id`, `event_name`, `about`, `event_start`, `event_end`, `facebook`, `twitter`, `linkedin`, `instagram`, `youtube`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Mvp Name', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non elit nisl. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean luctus, justo id pellentesque imperdiet, augue metus ornare quam, in pulvinar massa erat nec dui. Nam at facilisis nulla.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non elit nisl. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean luctus, justo id pellentesque imperdiet, augue metus ornare quam, in pulvinar massa erat nec dui. Nam at facilisis nulla.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non elit nisl. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean luctus, justo id pellentesque imperdiet, augue metus ornare quam, in pulvinar massa erat nec dui. Nam at facilisis nulla.</p>', '2021-08-11', '2021-08-21', NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11 07:19:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `interests`
--

CREATE TABLE `interests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `interests`
--

INSERT INTO `interests` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Interest 1', '2021-08-11 17:36:47', '2021-08-11 17:36:47', NULL),
(2, 'Interest 2', '2021-08-11 17:36:52', '2021-08-11 17:36:52', NULL),
(3, 'Interest 3', '2021-08-11 17:36:56', '2021-08-11 17:36:56', NULL),
(4, 'Interest 5', '2021-08-11 17:37:00', '2021-08-11 17:37:00', NULL),
(5, 'Interest 4', '2021-08-11 17:37:05', '2021-08-11 17:37:05', NULL),
(6, 'Interest 6', '2021-08-11 17:37:11', '2021-08-11 17:37:11', NULL),
(7, 'Interest 7', '2021-08-11 17:37:21', '2021-08-11 17:37:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `interest_user`
--

CREATE TABLE `interest_user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `interest_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `interest_user`
--

INSERT INTO `interest_user` (`user_id`, `interest_id`) VALUES
(4, 1),
(4, 2),
(4, 3),
(4, 4),
(4, 5),
(4, 6),
(4, 7),
(5, 2),
(5, 3),
(5, 4),
(5, 5),
(5, 6),
(6, 1),
(6, 2),
(6, 3),
(6, 4),
(6, 5),
(6, 6),
(6, 7),
(7, 2),
(7, 3),
(7, 7),
(8, 5),
(9, 2),
(9, 3),
(9, 5),
(9, 6);

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`manipulations`)),
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`custom_properties`)),
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`responsive_images`)),
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\EventSetting', 1, '4d4aa304-7ad9-47d0-a35e-d819012c8b18', 'event_logo', '6113a42db4061_1596_9068_763672001621839178', '6113a42db4061_1596_9068_763672001621839178.jpg', 'image/jpeg', 'public', 'public', 14118, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 1, '2021-08-11 07:19:27', '2021-08-11 07:19:28'),
(2, 'App\\Models\\User', 4, 'c2ddf6ef-286a-4ce0-90aa-809d6f5987a9', 'avatar', '6114353a9117b_4354_8505_372574001623164824', '6114353a9117b_4354_8505_372574001623164824.jpeg', 'image/jpeg', 'public', 'public', 32671, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 2, '2021-08-11 17:38:25', '2021-08-11 17:38:26'),
(3, 'App\\Models\\User', 5, '19a9a0b6-1852-4114-881e-a9c212f918e5', 'avatar', '6114356e4b082_3404_7136_332234001623648205', '6114356e4b082_3404_7136_332234001623648205.jpeg', 'image/jpeg', 'public', 'public', 20985, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 3, '2021-08-11 17:39:13', '2021-08-11 17:39:13'),
(4, 'App\\Models\\User', 6, 'f0c7e8fe-e77f-41c2-a07a-3205ffb3bc2c', 'avatar', '611435945a173_5258415675_1624520348524', '611435945a173_5258415675_1624520348524.jpeg', 'image/jpeg', 'public', 'public', 14038, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 4, '2021-08-11 17:39:59', '2021-08-11 17:40:00'),
(5, 'App\\Models\\Company', 1, '4a47fd4e-3dc7-4b5f-ac88-09bb15f0afe5', 'logo', '611436a377627_1596_9068_763672001621839178', '611436a377627_1596_9068_763672001621839178.jpg', 'image/jpeg', 'public', 'public', 14118, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 5, '2021-08-11 17:44:21', '2021-08-11 17:44:21'),
(6, 'App\\Models\\User', 7, 'b62addde-0bd0-42d7-bfef-f0221763a944', 'avatar', '611436c7dde8c_65366942', '611436c7dde8c_65366942.jpeg', 'image/jpeg', 'public', 'public', 13152, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 6, '2021-08-11 17:45:19', '2021-08-11 17:45:19'),
(7, 'App\\Models\\User', 8, '9c254ebe-17a4-4634-8db4-470e266a7c81', 'avatar', '611436ef7cc05_profilepicture', '611436ef7cc05_profilepicture.png', 'image/png', 'public', 'public', 98374, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 7, '2021-08-11 17:45:43', '2021-08-11 17:45:43'),
(8, 'App\\Models\\User', 9, '10f68b5b-ada8-48b0-89dd-110426590dba', 'avatar', '61143706843fc_1276_9463_752357001623324165', '61143706843fc_1276_9463_752357001623324165.jpeg', 'image/jpeg', 'public', 'public', 26060, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 8, '2021-08-11 17:46:01', '2021-08-11 17:46:01');

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2021_08_09_000001_create_media_table', 1),
(4, '2021_08_09_000002_create_permissions_table', 1),
(5, '2021_08_09_000003_create_interests_table', 1),
(6, '2021_08_09_000004_create_companies_table', 1),
(7, '2021_08_09_000005_create_event_settings_table', 1),
(8, '2021_08_09_000006_create_user_alerts_table', 1),
(9, '2021_08_09_000007_create_tasks_table', 1),
(10, '2021_08_09_000008_create_task_tags_table', 1),
(11, '2021_08_09_000009_create_users_table', 1),
(12, '2021_08_09_000010_create_task_statuses_table', 1),
(13, '2021_08_09_000011_create_roles_table', 1),
(14, '2021_08_09_000012_create_role_user_pivot_table', 1),
(15, '2021_08_09_000013_create_task_task_tag_pivot_table', 1),
(16, '2021_08_09_000014_create_interest_user_pivot_table', 1),
(17, '2021_08_09_000015_create_user_user_alert_pivot_table', 1),
(18, '2021_08_09_000016_create_permission_role_pivot_table', 1),
(19, '2021_08_09_000017_add_relationship_fields_to_tasks_table', 1),
(20, '2021_08_09_000018_create_qa_topics_table', 1),
(21, '2021_08_09_000019_create_qa_messages_table', 1),
(22, '2021_08_11_000004_create_comments_table', 1),
(23, '2021_08_11_000006_create_posts_table', 1),
(24, '2021_08_11_000020_add_relationship_fields_to_posts_table', 1),
(25, '2021_08_11_000021_add_relationship_fields_to_comments_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'user_management_access', NULL, NULL, NULL),
(2, 'permission_create', NULL, NULL, NULL),
(3, 'permission_edit', NULL, NULL, NULL),
(4, 'permission_show', NULL, NULL, NULL),
(5, 'permission_delete', NULL, NULL, NULL),
(6, 'permission_access', NULL, NULL, NULL),
(7, 'role_create', NULL, NULL, NULL),
(8, 'role_edit', NULL, NULL, NULL),
(9, 'role_show', NULL, NULL, NULL),
(10, 'role_delete', NULL, NULL, NULL),
(11, 'role_access', NULL, NULL, NULL),
(12, 'user_create', NULL, NULL, NULL),
(13, 'user_edit', NULL, NULL, NULL),
(14, 'user_show', NULL, NULL, NULL),
(15, 'user_delete', NULL, NULL, NULL),
(16, 'user_access', NULL, NULL, NULL),
(17, 'task_management_access', NULL, NULL, NULL),
(18, 'task_status_create', NULL, NULL, NULL),
(19, 'task_status_edit', NULL, NULL, NULL),
(20, 'task_status_show', NULL, NULL, NULL),
(21, 'task_status_delete', NULL, NULL, NULL),
(22, 'task_status_access', NULL, NULL, NULL),
(23, 'task_tag_create', NULL, NULL, NULL),
(24, 'task_tag_edit', NULL, NULL, NULL),
(25, 'task_tag_show', NULL, NULL, NULL),
(26, 'task_tag_delete', NULL, NULL, NULL),
(27, 'task_tag_access', NULL, NULL, NULL),
(28, 'task_create', NULL, NULL, NULL),
(29, 'task_edit', NULL, NULL, NULL),
(30, 'task_show', NULL, NULL, NULL),
(31, 'task_delete', NULL, NULL, NULL),
(32, 'task_access', NULL, NULL, NULL),
(33, 'tasks_calendar_access', NULL, NULL, NULL),
(34, 'user_alert_create', NULL, NULL, NULL),
(35, 'user_alert_show', NULL, NULL, NULL),
(36, 'user_alert_delete', NULL, NULL, NULL),
(37, 'user_alert_access', NULL, NULL, NULL),
(38, 'events_management_access', NULL, NULL, NULL),
(39, 'event_setting_create', NULL, NULL, NULL),
(40, 'event_setting_edit', NULL, NULL, NULL),
(41, 'event_setting_show', NULL, NULL, NULL),
(42, 'event_setting_delete', NULL, NULL, NULL),
(43, 'event_setting_access', NULL, NULL, NULL),
(44, 'company_create', NULL, NULL, NULL),
(45, 'company_edit', NULL, NULL, NULL),
(46, 'company_show', NULL, NULL, NULL),
(47, 'company_delete', NULL, NULL, NULL),
(48, 'company_access', NULL, NULL, NULL),
(49, 'interest_create', NULL, NULL, NULL),
(50, 'interest_edit', NULL, NULL, NULL),
(51, 'interest_show', NULL, NULL, NULL),
(52, 'interest_delete', NULL, NULL, NULL),
(53, 'interest_access', NULL, NULL, NULL),
(54, 'post_create', NULL, NULL, NULL),
(55, 'post_edit', NULL, NULL, NULL),
(56, 'post_show', NULL, NULL, NULL),
(57, 'post_delete', NULL, NULL, NULL),
(58, 'post_access', NULL, NULL, NULL),
(59, 'comment_create', NULL, NULL, NULL),
(60, 'comment_edit', NULL, NULL, NULL),
(61, 'comment_show', NULL, NULL, NULL),
(62, 'comment_delete', NULL, NULL, NULL),
(63, 'comment_access', NULL, NULL, NULL),
(64, 'profile_password_edit', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 19),
(1, 20),
(1, 21),
(1, 22),
(1, 23),
(1, 24),
(1, 25),
(1, 26),
(1, 27),
(1, 28),
(1, 29),
(1, 30),
(1, 31),
(1, 32),
(1, 33),
(1, 34),
(1, 35),
(1, 36),
(1, 37),
(1, 38),
(1, 39),
(1, 40),
(1, 41),
(1, 42),
(1, 43),
(1, 44),
(1, 45),
(1, 46),
(1, 47),
(1, 48),
(1, 49),
(1, 50),
(1, 51),
(1, 52),
(1, 53),
(1, 54),
(1, 55),
(1, 56),
(1, 57),
(1, 58),
(1, 59),
(1, 60),
(1, 61),
(1, 62),
(1, 63),
(1, 64),
(2, 17),
(2, 18),
(2, 19),
(2, 20),
(2, 21),
(2, 22),
(2, 23),
(2, 24),
(2, 25),
(2, 26),
(2, 27),
(2, 28),
(2, 29),
(2, 30),
(2, 31),
(2, 32),
(2, 33),
(2, 38),
(2, 39),
(2, 40),
(2, 41),
(2, 42),
(2, 43),
(2, 44),
(2, 45),
(2, 46),
(2, 47),
(2, 48),
(2, 49),
(2, 50),
(2, 51),
(2, 52),
(2, 53),
(2, 54),
(2, 55),
(2, 56),
(2, 57),
(2, 58),
(2, 59),
(2, 60),
(2, 61),
(2, 62),
(2, 63),
(2, 64);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created_at`, `updated_at`, `deleted_at`, `created_by_id`) VALUES
(5, NULL, '<p>Good evening, everyone. Thanks for being here!Did you know?Bridging the digital divide is a problem that requires solutions for accessibility and affordability.We need you, the game changers, to get creative in how we engage the most vulnerable&mdash;giving voices to those that would otherwise not have the same opportunity that you have.Please join us here:&nbsp;<a href=\"https://redirect.hubilo.com/?source=community&amp;url=aHR0cHM6Ly90YWxlbnRvc211bHRpcGx1cy5ibG9nc3BvdC5jb20vMjAyMS8wNi9icmlkZ2luZy1kaWdpdGFsLWRpdmlkZS1ieS1zb2ZvbmllLWRhbGEuaHRtbA==\" target=\"_blank\">https://talentosmultiplus.blogspot.com/2021/06/bridging-digital-divide-by-sofonie-dala.html</a></p>\r\n\r\n<p></p>', '2021-08-11 06:57:37', '2021-08-11 06:57:37', NULL, 1),
(6, NULL, '<p>&nbsp;</p>\r\n\r\n<p>This year&#39;s winner of the Premium Committee of the Year Award at this year&#39;s Fair Ngoma Awards is Oserian Development Company Limited!Congratulations Oserian Development Company Limited🏆#FairtradeAfrica#ProducersLead#AfricaFairtradeConvention#FairNgomaAwards</p>', '2021-08-11 07:07:36', '2021-08-11 07:07:36', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `qa_messages`
--

CREATE TABLE `qa_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `topic_id` bigint(20) UNSIGNED NOT NULL,
  `sender_id` bigint(20) UNSIGNED NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `qa_topics`
--

CREATE TABLE `qa_topics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `creator_id` bigint(20) UNSIGNED NOT NULL,
  `receiver_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', NULL, NULL, NULL),
(2, 'User', NULL, NULL, NULL),
(3, 'Speaker', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(4, 3),
(5, 3),
(6, 3),
(7, 2),
(8, 2),
(9, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status_id` bigint(20) UNSIGNED DEFAULT NULL,
  `assigned_to_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `task_statuses`
--

CREATE TABLE `task_statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `task_statuses`
--

INSERT INTO `task_statuses` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Open', NULL, NULL, NULL),
(2, 'In progress', NULL, NULL, NULL),
(3, 'Closed', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `task_tags`
--

CREATE TABLE `task_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `task_task_tag`
--

CREATE TABLE `task_task_tag` (
  `task_id` bigint(20) UNSIGNED NOT NULL,
  `task_tag_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `organisation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_town` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `industry` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `gender`, `designation`, `organisation`, `state`, `city_town`, `website`, `facebook`, `instagram`, `linkedin`, `twitter`, `country`, `industry`, `about`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'John Doe', 'admin@admin.com', NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$JXI8Q7K33xkmkcwqqVgN/u1AWeeWpxANfLjTYahWKA5z5Tx4PRyGy', NULL, NULL, NULL, NULL),
(4, 'Sophia Rogers', 'rasyw@mailinator.com', 'Female', 'Investment Manager, INCOFIN Investment Management', 'INCOFIN', 'Ullam quam rerum cor', 'Tempor voluptatem P', 'https://www.qewixabyqelovo.me.uk', NULL, NULL, NULL, NULL, 'Kenya', 'Advertising &Public Relations', 'Dianah has worked in the investment field for over 7 years with experience in investment banking in the research side and in impact investing. Dianah is currently an Investment Manager at Incofin IM, a Belgian impact investor focused on the Financial Services and Agricultural sectors across Sub Saharan Africa, Latin America and Asia. Prior to Incofin she worked as a Senior Associate with AlphaMundi Group a Swiss Impact Investor where she closed transactions in the agro value chain and renewable energy sectors. Dianah holds an MSc in Banking & Finance from Università Catolica del Sacro Cuore in Milan, and Bachelor of Commerce in Finance and Economics from the University of Western Australia in Perth, Australia. Dianah is passionate about Agriculture in Africa and is committed to addressing the main challenges in the sector, particularly access to capital, in order to unlock the full potential of agribusinesses in Africa and ensure food safety & security across the continent.', NULL, '$2y$10$um7shkrd0ixrHGKxNwa0Bux1FBCoVH1RPgejY0OWfFUSb/USQc6tG', NULL, '2021-08-11 17:38:23', '2021-08-11 17:38:23', NULL),
(5, 'Bradley Dennis', 'vyzohidak@mailinator.com', 'Male', 'Odio temporibus aut', 'Fleming and ', 'Corporis quis quis h', 'Voluptatem velit c', 'https://www.havy.org.uk', NULL, NULL, NULL, NULL, 'Kenya', 'Advertising &Public Relations', 'Norman Misheck Kativhu is a Board member, Fairtrade Africa and Certification and compliance officer for organic Africa holdings Zimbabwe since 2012.  He holds in Bachelor degree in education from Bindura university of science education and Master in Business Administration from University of Zimbabwe  \r\n\r\nHe is a social scientist and loves working with rural farming communities having experienced both the urban and rural life and seeing many opportunities in rural areas. He is passionate and more skewed to rural livelihoods, and love to see rural people lives changing through agriculture and other resources that they are endowed with. Currently, works with farmers practising organic and Fairtrade Rosella production in Binga. He wants to explore more avenues to better the lives of people in Zimbabwe and Africa at large as well as the participation of youth in the one of the oldest industry, which is agriculture.', NULL, '$2y$10$Q7rgV0Zb9eZQY2s1TOFjMOfyrdHqAImmvB4Qg3yskqAtKHLEp39c2', NULL, '2021-08-11 17:39:12', '2021-08-11 17:39:12', NULL),
(6, 'Buffy Justice', 'wygysij@mailinator.com', 'Male', 'Sapiente exercitatio', 'Rosario and Cooper LLC', 'Autem reprehenderit', 'Repellendus Porro t', 'https://www.zoh.co.uk', NULL, NULL, NULL, NULL, 'Kenya', 'Advertising &Public Relations', 'Olav Boenders has been working in the floricultural Industry his whole professional career for over 25 years now in Africa. He first worked for Deliflor in Kenya for 5 years. He set up for them a chrysanthemum propagation unit of 9 hectares, from which chrysanthemum cuttings were exported to Deliflor in the Netherlands. After that he became a shareholder in Wagagai Ltd based in Uganda. That has now developed into one of the largest propagation farms in the world. From there they export annually over 500 million plant cuttings all over the world. They do this for their two clients, the Beekenkamp group from Holland and Selecta One from Germany. For 10 years, he is also the CEO of Wagagai. Wagagai has always from the start had a keen interest in CSR and even during the time the farm was loss-making they already ran a baby-house and a complete health Centre to name just a few.', NULL, '$2y$10$WJWZgcy6pEryGx.44boqbOied6OVap/SvJuW3HrAs23dARlOfwGt6', NULL, '2021-08-11 17:39:58', '2021-08-11 17:39:58', NULL),
(7, 'Emery Briggs', 'seqozas@mailinator.com', 'Female', 'Aliquip illo volupta', 'James Joseph Associates', 'Cum dolore odio dolo', 'Aute mollitia enim l', 'https://www.muwofodeviri.net', NULL, NULL, NULL, NULL, 'Kenya', 'Advertising &Public Relations', 'Set the direction of flex items in a flex container with direction utilities. In most cases you can omit the horizontal class here as the browser default is row. However, you may encounter situations where you needed to explicitly set this value (like responsive layouts).\r\n\r\nUse .flex-row to set a horizontal direction (the browser default), or .flex-row-reverse to start the horizontal direction from the opposite side.\r\nSet the direction of flex items in a flex container with direction utilities. In most cases you can omit the horizontal class here as the browser default is row. However, you may encounter situations where you needed to explicitly set this value (like responsive layouts).\r\n\r\nUse .flex-row to set a horizontal direction (the browser default), or .flex-row-reverse to start the horizontal direction from the opposite side.', NULL, '$2y$10$YhG7i50WR9zDOnj.F5RRPuS3uuB7r91ORDZtF3n7a5mpS4YNsM1dy', NULL, '2021-08-11 17:45:18', '2021-08-11 17:45:18', NULL),
(8, 'Juliet Oneil', 'lakuduze@mailinator.com', 'Male', 'Molestiae est tempor', 'Love Gordon Plc', 'Commodo quis irure c', 'Praesentium Nam quis', 'https://www.kuqatoxavagymag.ca', NULL, NULL, NULL, NULL, 'Kenya', 'Advertising &Public Relations', 'Flex\r\nQuickly manage the layout, alignment, and sizing of grid columns, navigation, components, and more with a full suite of responsive flexbox utilities. For more complex implementations, custom CSS may be necessary.\r\n\r\nOn this page\r\nEnable flex behaviors\r\nDirection\r\nJustify content\r\nAlign items\r\nAlign self\r\nFill\r\nGrow and shrink\r\nAuto margins\r\nWith align-items\r\nWrap\r\nOrder\r\nAlign content\r\nMedia object\r\nSass\r\nUtilities API\r\nEnable flex behaviors\r\nApply display utilities to create a flexbox container and transform direct children elements into flex items. Flex containers and items are able to be modified further with additional flex properties.', NULL, '$2y$10$fRaqYtxwysok8T/CXxRBkevWxyd1tyfSdXpBiuoBo8rwUmPYJbU0C', NULL, '2021-08-11 17:45:42', '2021-08-11 17:45:42', NULL),
(9, 'Kai Tyler', 'daniqidad@mailinator.com', 'Male', 'Dolorem et cumque en', 'Greene and Forbes Associates', 'Quia voluptas beatae', 'Nisi laborum Corrup', 'https://www.kepaduj.info', NULL, NULL, NULL, NULL, 'Kenya', 'Advertising &Public Relations', 'Flex\r\nQuickly manage the layout, alignment, and sizing of grid columns, navigation, components, and more with a full suite of responsive flexbox utilities. For more complex implementations, custom CSS may be necessary.\r\n\r\nOn this page\r\nEnable flex behaviors\r\nDirection\r\nJustify content\r\nAlign items\r\nAlign self\r\nFill\r\nGrow and shrink\r\nAuto margins\r\nWith align-items\r\nWrap\r\nOrder\r\nAlign content\r\nMedia object\r\nSass\r\nUtilities API\r\nEnable flex behaviors\r\nApply display utilities to create a flexbox container and transform direct children elements into flex items. Flex containers and items are able to be modified further with additional flex properties.Flex\r\nQuickly manage the layout, alignment, and sizing of grid columns, navigation, components, and more with a full suite of responsive flexbox utilities. For more complex implementations, custom CSS may be necessary.\r\n\r\nOn this page\r\nEnable flex behaviors\r\nDirection\r\nJustify content\r\nAlign items\r\nAlign self\r\nFill\r\nGrow and shrink\r\nAuto margins\r\nWith align-items\r\nWrap\r\nOrder\r\nAlign content\r\nMedia object\r\nSass\r\nUtilities API\r\nEnable flex behaviors\r\nApply display utilities to create a flexbox container and transform direct children elements into flex items. Flex containers and items are able to be modified further with additional flex properties.', NULL, '$2y$10$mQaHI8TmHyGbtQOo0wG0KOLdwq3aSpY3tFre0mNHa7jZUbZJjg9ZW', NULL, '2021-08-11 17:46:01', '2021-08-11 17:46:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_alerts`
--

CREATE TABLE `user_alerts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `alert_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alert_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_user_alert`
--

CREATE TABLE `user_user_alert` (
  `user_alert_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `read` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by_fk_4586343` (`created_by_id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_settings`
--
ALTER TABLE `event_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interests`
--
ALTER TABLE `interests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interest_user`
--
ALTER TABLE `interest_user`
  ADD KEY `user_id_fk_4567689` (`user_id`),
  ADD KEY `interest_id_fk_4567689` (`interest_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`);

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD KEY `role_id_fk_4475427` (`role_id`),
  ADD KEY `permission_id_fk_4475427` (`permission_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by_fk_4586337` (`created_by_id`);

--
-- Indexes for table `qa_messages`
--
ALTER TABLE `qa_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `qa_messages_topic_id_foreign` (`topic_id`),
  ADD KEY `qa_messages_sender_id_foreign` (`sender_id`);

--
-- Indexes for table `qa_topics`
--
ALTER TABLE `qa_topics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `qa_topics_creator_id_foreign` (`creator_id`),
  ADD KEY `qa_topics_receiver_id_foreign` (`receiver_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `user_id_fk_4475436` (`user_id`),
  ADD KEY `role_id_fk_4475436` (`role_id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status_fk_4475482` (`status_id`),
  ADD KEY `assigned_to_fk_4475486` (`assigned_to_id`);

--
-- Indexes for table `task_statuses`
--
ALTER TABLE `task_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task_tags`
--
ALTER TABLE `task_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task_task_tag`
--
ALTER TABLE `task_task_tag`
  ADD KEY `task_id_fk_4475483` (`task_id`),
  ADD KEY `task_tag_id_fk_4475483` (`task_tag_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_alerts`
--
ALTER TABLE `user_alerts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_user_alert`
--
ALTER TABLE `user_user_alert`
  ADD KEY `user_alert_id_fk_4481753` (`user_alert_id`),
  ADD KEY `user_id_fk_4481753` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `event_settings`
--
ALTER TABLE `event_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `interests`
--
ALTER TABLE `interests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `qa_messages`
--
ALTER TABLE `qa_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `qa_topics`
--
ALTER TABLE `qa_topics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `task_statuses`
--
ALTER TABLE `task_statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `task_tags`
--
ALTER TABLE `task_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_alerts`
--
ALTER TABLE `user_alerts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `created_by_fk_4586343` FOREIGN KEY (`created_by_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `interest_user`
--
ALTER TABLE `interest_user`
  ADD CONSTRAINT `interest_id_fk_4567689` FOREIGN KEY (`interest_id`) REFERENCES `interests` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_id_fk_4567689` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_id_fk_4475427` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_id_fk_4475427` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `created_by_fk_4586337` FOREIGN KEY (`created_by_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `qa_messages`
--
ALTER TABLE `qa_messages`
  ADD CONSTRAINT `qa_messages_sender_id_foreign` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `qa_messages_topic_id_foreign` FOREIGN KEY (`topic_id`) REFERENCES `qa_topics` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `qa_topics`
--
ALTER TABLE `qa_topics`
  ADD CONSTRAINT `qa_topics_creator_id_foreign` FOREIGN KEY (`creator_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `qa_topics_receiver_id_foreign` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_id_fk_4475436` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_id_fk_4475436` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `assigned_to_fk_4475486` FOREIGN KEY (`assigned_to_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `status_fk_4475482` FOREIGN KEY (`status_id`) REFERENCES `task_statuses` (`id`);

--
-- Constraints for table `task_task_tag`
--
ALTER TABLE `task_task_tag`
  ADD CONSTRAINT `task_id_fk_4475483` FOREIGN KEY (`task_id`) REFERENCES `tasks` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `task_tag_id_fk_4475483` FOREIGN KEY (`task_tag_id`) REFERENCES `task_tags` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_user_alert`
--
ALTER TABLE `user_user_alert`
  ADD CONSTRAINT `user_alert_id_fk_4481753` FOREIGN KEY (`user_alert_id`) REFERENCES `user_alerts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_id_fk_4481753` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

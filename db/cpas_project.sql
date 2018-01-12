-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 12, 2018 at 03:40 PM
-- Server version: 5.5.58-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cpas_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2018_01_06_133516_create_items_table', 1),
('2018_01_06_133530_entrust_setup_tables', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `main_image` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `publish_date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `title`, `text`, `datetime`, `main_image`, `publish_date`, `created_at`, `updated_at`) VALUES
(1, 'النظم والتقنيات المتقدمة فى صيانة المنشات وسلامة الاصول', 'النظم والتقنيات المتقدمة فى صيانة المنشات وسلامة الاصول', '2018-01-07 13:00:35', 'blue-532e8aefcb1515330035.jpg', '2018-01-10', '2018-01-07 11:00:35', '2018-01-07 11:00:35'),
(3, 'النظم والتقنيات المتقدمة فى صيانة المنشات وسلامة الاصول', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><img src="/Cpas_project/public/Uploads/images_upload/blue-532e8aefcb.jpg" alt="" width="333" height="333" /></p>\r\n</body>\r\n</html>', '2018-01-07 17:30:14', '601463_551116948238802_1859989570_n1515346214.jpg', '2018-01-13', '2018-01-07 13:57:11', '2018-01-07 15:30:14'),
(4, 'النظم والتقنيات المتقدمة فى صيانة المنشات وسلامة الاصول', '<!DOCTYPE html>\n<html>\n<head>\n</head>\n<body>\n<p><img src="http://localhost/Cpas_project/publicUploads/images_upload/7359alsh3er.jpg" alt="" width="432" height="650" /></p>\n</body>\n</html>', '2018-01-07 16:09:34', '3ed al-fter al-sa3ed with 19 inch1515341326.jpg', '0000-00-00', '2018-01-07 14:08:46', '2018-01-07 14:08:46'),
(5, 'النظم والتقنيات المتقدمة فى صيانة المنشات وسلامة الاصول', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><img src="http://localhost/Cpas_project/publicUploads/images_upload/blue-532e8aefcb.jpg" alt="" width="333" height="333" /></p>\r\n</body>\r\n</html>', '2018-01-07 16:14:06', 'blue-532e8aefcb1515341646.jpg', '2018-01-17', '2018-01-07 14:14:06', '2018-01-07 14:14:06'),
(6, 'النظم والتقنيات المتقدمة فى صيانة المنشات وسلامة الاصول', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><img src="/Cpas_project/public/Uploads/images_upload/blue-532e8aefcb.jpg" alt="" width="333" height="333" /></p>\r\n</body>\r\n</html>', '2018-01-07 16:17:19', '7359alsh3er1515341839.jpg', '2018-01-09', '2018-01-07 14:17:19', '2018-01-07 14:17:19');

-- --------------------------------------------------------

--
-- Table structure for table `news_images`
--

CREATE TABLE IF NOT EXISTS `news_images` (
  `news_images_id` int(11) NOT NULL AUTO_INCREMENT,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `news_id` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`news_images_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Dumping data for table `news_images`
--

INSERT INTO `news_images` (`news_images_id`, `image`, `news_id`, `updated_at`, `created_at`) VALUES
(1, 'images (7)_1515330036.jpg', 1, '2018-01-07 11:00:36', '2018-01-07 11:00:36'),
(2, '601463_551116948238802_1859989570_n_1515330036.jpg', 1, '2018-01-07 11:00:36', '2018-01-07 11:00:36'),
(3, 'images (6)_1515330036.jpg', 1, '2018-01-07 11:00:36', '2018-01-07 11:00:36'),
(5, '601463_551116948238802_1859989570_n_1515335389.jpg', 2, '2018-01-07 12:29:49', '2018-01-07 12:29:49'),
(15, 'images (7)_1515346214.jpg', 3, '2018-01-07 15:30:14', '2018-01-07 15:30:14'),
(16, '601463_551116948238802_1859989570_n_1515346214.jpg', 3, '2018-01-07 15:30:14', '2018-01-07 15:30:14'),
(17, 'images (6)_1515346214.jpg', 3, '2018-01-07 15:30:14', '2018-01-07 15:30:14');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=22 ;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'Display Role Listing', 'See only Listing Of Role', '2018-01-06 12:21:35', '2018-01-06 12:21:35'),
(2, 'role-create', 'Create Role', 'Create New Role', '2018-01-06 12:21:35', '2018-01-06 12:21:35'),
(3, 'role-edit', 'Edit Role', 'Edit Role', '2018-01-06 12:21:35', '2018-01-06 12:21:35'),
(4, 'role-delete', 'Delete Role', 'Delete Role', '2018-01-06 12:21:35', '2018-01-06 12:21:35'),
(5, 'item-list', 'Display Item Listing', 'See only Listing Of Item', '2018-01-06 12:21:35', '2018-01-06 12:21:35'),
(6, 'item-create', 'Create Item', 'Create New Item', '2018-01-06 12:21:35', '2018-01-06 12:21:35'),
(7, 'item-edit', 'Edit Item', 'Edit Item', '2018-01-06 12:21:35', '2018-01-06 12:21:35'),
(8, 'item-delete', 'Delete Item', 'Delete Item', '2018-01-06 12:21:35', '2018-01-06 12:21:35'),
(10, 'news-list', 'Display News Listing', 'See only News Of Role', NULL, NULL),
(11, 'news-create', 'Create News', 'Create New News', NULL, NULL),
(12, 'news-edit', 'Edit News', 'Edit News', NULL, NULL),
(13, 'news-delete', 'Delete News', 'Delete News', NULL, NULL),
(14, 'projectCategory-list', 'List  Project Category', 'List  Project Category', NULL, NULL),
(15, 'projectCategory-create', 'Add New  Project Category', 'Add New  Project Category', NULL, NULL),
(16, 'projectCategory-edit', 'Update  Project Category', 'Update  Project Category', NULL, NULL),
(17, 'projectCategory-delete', 'Delete Project Category', 'Delete  Project Category', NULL, NULL),
(18, 'projects-list', 'Projects List ', 'Projects List ', NULL, NULL),
(19, 'projects-create', 'Projects Create ', 'Projects Create ', NULL, NULL),
(20, 'projects-edit', 'Projects Update ', NULL, NULL, NULL),
(21, 'projects-delete', 'Projects Delete', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE IF NOT EXISTS `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_role_id_foreign` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(1, 2),
(2, 2),
(3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `projects_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `projects_category_id` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `lat` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `long` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `main_image` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`projects_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`projects_id`, `title`, `projects_category_id`, `description`, `lat`, `long`, `main_image`, `created_at`, `updated_at`) VALUES
(1, 'النظم والتقنيات المتقدمة فى صيانة المنشات وسلامة الاصول', 0, '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>النظم والتقنيات المتقدمة فى صيانة المنشات وسلامة الاصولالنظم والتقنيات المتقدمة فى صيانة المنشات وسلامة الاصول</p>\r\n</body>\r\n</html>', '', '', '00001-367x3671515356909.jpg', '2018-01-07 20:41:17', '2018-01-07 18:41:17'),
(2, 'النظم والتقنيات المتقدمة فى صيانة المنشات وسلامة الاصول', 0, '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>النظم والتقنيات المتقدمة فى صيانة المنشات وسلامة الاصول</p>\r\n</body>\r\n</html>', '30.22', '30.22', '00001-367x3671515356950.jpg', '2018-01-10 21:36:13', '2018-01-10 19:36:13');

-- --------------------------------------------------------

--
-- Table structure for table `projects_category`
--

CREATE TABLE IF NOT EXISTS `projects_category` (
  `projects_category_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`projects_category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `projects_category`
--

INSERT INTO `projects_category` (`projects_category_id`, `title`, `created_at`, `updated_at`) VALUES
(1, ' الدراسات الاستثمارية', '2018-01-07 18:42:27', '2018-01-07 16:42:27'),
(2, 'مشروعات التخطيط العمراني', '2018-01-07 16:38:01', '2018-01-07 16:38:01');

-- --------------------------------------------------------

--
-- Table structure for table `projects_images`
--

CREATE TABLE IF NOT EXISTS `projects_images` (
  `projects_images_id` int(11) NOT NULL AUTO_INCREMENT,
  `projects_id` int(11) NOT NULL,
  `image` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`projects_images_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `projects_images`
--

INSERT INTO `projects_images` (`projects_images_id`, `projects_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 2, '00001-367x367_1515356950.jpg', '2018-01-07 18:29:10', '2018-01-07 18:29:10'),
(2, 1, 'blue-532e8aefcb_1515357334.jpg', '2018-01-07 18:35:34', '2018-01-07 18:35:34'),
(3, 1, 'blue-532e8aefcb_1515357335.jpg', '2018-01-07 18:35:35', '2018-01-07 18:35:35'),
(6, 1, '7359alsh3er_1515357677.jpg', '2018-01-07 18:41:17', '2018-01-07 18:41:17'),
(7, 1, '3ed al-fter al-sa3ed with 19 inch_1515357677.jpg', '2018-01-07 18:41:17', '2018-01-07 18:41:17'),
(8, 3, 'images (4)_1515357712.jpg', '2018-01-07 18:41:52', '2018-01-07 18:41:52');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'adminstration', 'adminstration', 'adminstration', NULL, NULL),
(2, 'Sales', 'Sales', 'Sales', '2017-03-09 18:25:57', '2017-03-09 18:25:57');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE IF NOT EXISTS `role_user` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `role_user_role_id_foreign` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'reham ali', 'engreham.ali2011@gmail.com', '$2y$10$NX09nJlwmEtnXbhhGUBI9O/YqfOTkLl/vFPddAmxWcktQNVFvUXJe', NULL, '2018-01-06 12:25:15', '2018-01-06 12:25:15');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2019 at 10:52 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dlmh`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cate_id` int(11) UNSIGNED NOT NULL,
  `cate_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cate_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cate_poster` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cate_featured` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cate_id`, `cate_name`, `cate_slug`, `cate_poster`, `cate_featured`, `created_at`, `updated_at`) VALUES
(1, 'Leo núi', 'leo-nui', 'leo-nui.jpg', 1, '2019-04-14 02:49:04', '2019-04-15 02:51:13'),
(2, 'Lặn', 'lan', 'tour-lan-bien-ngam-san-ho-nha-trang1.jpg', 1, '2019-04-14 02:49:47', '2019-04-15 02:51:25'),
(3, 'Nhảy dù', 'nhay-du', 'NhảyDùSkydive-GreatOceanRoadSummer19.jpg', 1, '2019-04-14 02:49:59', '2019-04-15 02:51:37'),
(4, 'Khám phá hang động', 'kham-pha-hang-dong', 'Transfer-Hue-To-Phong-Nha-By-Private-Car.jpg', 1, '2019-04-14 02:50:09', '2019-04-15 02:51:51'),
(5, 'Cưỡi voi', 'cuoi-voi', 'dlcv_wsbc.jpg', 1, '2019-04-14 02:50:19', '2019-04-15 02:52:02');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `cmt_id` int(11) UNSIGNED NOT NULL,
  `cmt_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cmt_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cmt_content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cmt_score` int(11) NOT NULL,
  `cmt_tour` int(11) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `detail_place`
--

CREATE TABLE `detail_place` (
  `depl_id` int(11) UNSIGNED NOT NULL,
  `depl_place` int(11) UNSIGNED NOT NULL,
  `depl_tour` int(11) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_04_12_154007_tour', 2),
(4, '2019_04_12_154149_category', 2),
(5, '2019_04_12_154406_picture_tour', 2),
(6, '2019_04_12_154548_schedule', 2),
(7, '2019_04_12_154643_place', 2),
(8, '2019_04_12_154712_detail_place', 2),
(9, '2019_04_12_154741_ticket', 2),
(10, '2019_04_12_154811_comment', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `picture_tour`
--

CREATE TABLE `picture_tour` (
  `pic_id` int(11) UNSIGNED NOT NULL,
  `pic_tour` int(11) UNSIGNED NOT NULL,
  `pic_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `picture_tour`
--

INSERT INTO `picture_tour` (`pic_id`, `pic_tour`, `pic_name`, `created_at`, `updated_at`) VALUES
(1, 9, 'NhảyDùSkydive-GreatOceanRoadSummer19.jpg', '2019-04-15 14:40:04', '2019-04-15 14:40:04'),
(2, 9, 'tour-lan-bien-ngam-san-ho-nha-trang1.jpg', '2019-04-15 14:40:04', '2019-04-15 14:40:04'),
(3, 9, 'Transfer-Hue-To-Phong-Nha-By-Private-Car.jpg', '2019-04-15 14:40:04', '2019-04-15 14:40:04');

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `place_id` int(11) UNSIGNED NOT NULL,
  `place_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `place_country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `place_province` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `schedule_id` int(11) UNSIGNED NOT NULL,
  `schedule_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `schedule_content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `schedule_tour` int(11) UNSIGNED NOT NULL,
  `schedule_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `schedule_day` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`schedule_id`, `schedule_title`, `schedule_content`, `schedule_tour`, `schedule_image`, `schedule_day`, `created_at`, `updated_at`) VALUES
(8, 'đi chợ spa', 'lịch 1', 9, 'dlcv_wsbc.jpg', 1, '2019-04-15 14:40:04', '2019-04-15 14:40:04'),
(9, 'đi ngủ', 'lịch 2', 9, 'leo-nui.jpg', 2, '2019-04-15 14:40:04', '2019-04-15 14:40:04');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `ticket_id` int(11) UNSIGNED NOT NULL,
  `ticket_cus_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ticket_cus_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ticket_cus_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ticket_number_of_adults` int(11) NOT NULL,
  `ticket_number_of_children` int(11) NOT NULL,
  `ticket_status` int(11) NOT NULL,
  `ticket_tour` int(11) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`ticket_id`, `ticket_cus_name`, `ticket_cus_phone`, `ticket_cus_email`, `ticket_number_of_adults`, `ticket_number_of_children`, `ticket_status`, `ticket_tour`, `created_at`, `updated_at`) VALUES
(2, 'doublfeel', '0123456789', 'thanglong2098@gmail.com', 2, 1, 123456789, 9, '2019-04-16 08:28:38', '2019-04-16 08:28:38');

--
-- Triggers `ticket`
--
DELIMITER $$
CREATE TRIGGER `delete_number_checkout_tour` AFTER DELETE ON `ticket` FOR EACH ROW BEGIN
	DECLARE total INT;
    DECLARE quantity_purchased INT;
    
    SELECT tour.tour_quantity_purchased INTO quantity_purchased FROM tour WHERE tour.tour_id = OLD.ticket_tour;
    
    SET total = quantity_purchased - (OLD.ticket_number_of_adults + OLD.ticket_number_of_children);
    
    UPDATE tour SET tour.tour_quantity_purchased = total WHERE tour.tour_id = OLD.ticket_tour;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insert_number_checkout_tour` AFTER INSERT ON `ticket` FOR EACH ROW BEGIN
	DECLARE total INT;
    DECLARE quantity_purchased INT;
    
    SELECT tour.tour_quantity_purchased INTO quantity_purchased FROM tour WHERE tour.tour_id = NEW.ticket_tour;
    
    SET total = quantity_purchased +
    (NEW.ticket_number_of_adults + NEW.ticket_number_of_children);
    
    UPDATE tour SET tour.tour_quantity_purchased = total WHERE tour.tour_id = NEW.ticket_tour;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_number_checkout_tour` AFTER UPDATE ON `ticket` FOR EACH ROW BEGIN
	DECLARE total INT;
    DECLARE quantity_purchased INT;
    
    SELECT tour.tour_quantity_purchased INTO quantity_purchased FROM tour WHERE tour.tour_id = NEW.ticket_tour;
    
    SET total = quantity_purchased - (OLD.ticket_number_of_adults + OLD.ticket_number_of_children) +
    (NEW.ticket_number_of_adults + NEW.ticket_number_of_children);
    
    UPDATE tour SET tour.tour_number_of_blank = total WHERE tour.tour_id = NEW.ticket_tour;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE `tour` (
  `tour_id` int(11) UNSIGNED NOT NULL,
  `tour_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tour_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tour_cate` int(11) UNSIGNED NOT NULL,
  `tour_quantity` int(11) NOT NULL,
  `tour_quantity_purchased` int(11) NOT NULL DEFAULT '0',
  `tour_departure_date` date NOT NULL,
  `tour_return_date` date NOT NULL,
  `tour_introduction` text COLLATE utf8_unicode_ci NOT NULL,
  `tour_price` double NOT NULL,
  `tour_poster` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tour_user_post` int(11) UNSIGNED NOT NULL,
  `tour_new` tinyint(4) NOT NULL,
  `tour_featured` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tour`
--

INSERT INTO `tour` (`tour_id`, `tour_name`, `tour_slug`, `tour_cate`, `tour_quantity`, `tour_quantity_purchased`, `tour_departure_date`, `tour_return_date`, `tour_introduction`, `tour_price`, `tour_poster`, `tour_user_post`, `tour_new`, `tour_featured`, `created_at`, `updated_at`) VALUES
(9, 'Leo núi Gia Lào', 'leo-nui-gia-lao', 1, 20, 3, '2019-04-16', '2019-04-17', 'đi chơi vui vẻ', 99999, 'leo-nui.jpg', 1, 1, 1, '2019-04-15 14:40:04', '2019-04-15 14:40:04');

--
-- Triggers `tour`
--
DELIMITER $$
CREATE TRIGGER `update_tour_featured` BEFORE UPDATE ON `tour` FOR EACH ROW BEGIN
	DECLARE percent FLOAT;
    SET percent = NEW.tour_quantity / NEW.tour_quantity_purchased;
    IF percent > 0.5 THEN
    	SET NEW.tour_featured = true;
    ELSE
    	SET NEW.tour_featured = false;
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` tinyint(4) NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `level`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Thăng', 'admin_dlmh@gmail.com', '$2y$10$lT/JBapfQt0LdVNnjVax1exxL/QxE3etpABXvhQfE/IOSOb4jVdfC', 0, '41063154_292601207997638_6636202665388802048_n.jpg', 'uVdOGgHqsW4aBx06ENNqQoj0lnfKNmBmSBSmeXTg9uFRZHldC6mWyneXUi5Q', NULL, NULL),
(2, 'staff', 'staff_dlmh@gmail.com', '$2y$10$nrM4Sxb7fvIWR.oPBlRv6OH4TKizql.saxYaExidsJFCKG0WGu/0y', 1, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`cmt_id`),
  ADD KEY `id_tour` (`cmt_tour`);

--
-- Indexes for table `detail_place`
--
ALTER TABLE `detail_place`
  ADD PRIMARY KEY (`depl_id`),
  ADD KEY `id_tour` (`depl_tour`),
  ADD KEY `id_place` (`depl_place`);

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
-- Indexes for table `picture_tour`
--
ALTER TABLE `picture_tour`
  ADD PRIMARY KEY (`pic_id`),
  ADD KEY `id_tour` (`pic_tour`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`schedule_id`),
  ADD KEY `id_tour` (`schedule_tour`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ticket_id`),
  ADD KEY `id_tour` (`ticket_tour`);

--
-- Indexes for table `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`tour_id`),
  ADD KEY `user_post` (`tour_user_post`),
  ADD KEY `id_cate` (`tour_cate`);

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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cate_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `cmt_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detail_place`
--
ALTER TABLE `detail_place`
  MODIFY `depl_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `picture_tour`
--
ALTER TABLE `picture_tour`
  MODIFY `pic_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `place_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `schedule_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ticket_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tour`
--
ALTER TABLE `tour`
  MODIFY `tour_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`cmt_tour`) REFERENCES `tour` (`tour_id`);

--
-- Constraints for table `detail_place`
--
ALTER TABLE `detail_place`
  ADD CONSTRAINT `detail_place_ibfk_1` FOREIGN KEY (`depl_place`) REFERENCES `place` (`place_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `detail_place_ibfk_2` FOREIGN KEY (`depl_tour`) REFERENCES `tour` (`tour_id`) ON DELETE CASCADE;

--
-- Constraints for table `picture_tour`
--
ALTER TABLE `picture_tour`
  ADD CONSTRAINT `picture_tour_ibfk_1` FOREIGN KEY (`pic_tour`) REFERENCES `tour` (`tour_id`) ON DELETE CASCADE;

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`schedule_tour`) REFERENCES `tour` (`tour_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

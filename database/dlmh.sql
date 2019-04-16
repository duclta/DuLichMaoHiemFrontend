-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2019 at 04:16 PM
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
  `cmt_content` text COLLATE utf8_unicode_ci NOT NULL,
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
(3, 9, 'Transfer-Hue-To-Phong-Nha-By-Private-Car.jpg', '2019-04-15 14:40:04', '2019-04-15 14:40:04'),
(18, 13, 'hangen_2.jpg', '2019-04-16 10:01:26', '2019-04-16 10:01:26'),
(19, 13, 'hangen_3.jpg', '2019-04-16 10:01:26', '2019-04-16 10:01:26'),
(20, 13, 'hangen_4.jpg', '2019-04-16 10:01:26', '2019-04-16 10:01:26'),
(21, 13, 'hangen_5.jpg', '2019-04-16 10:01:26', '2019-04-16 10:01:26'),
(22, 13, 'hangen_6.jpg', '2019-04-16 10:01:26', '2019-04-16 10:01:26'),
(23, 13, 'hangen_7.jpg', '2019-04-16 10:01:26', '2019-04-16 10:01:26'),
(24, 14, 'sd2.jpg', '2019-04-16 10:14:42', '2019-04-16 10:14:42'),
(25, 14, 'sd3.jpg', '2019-04-16 10:14:42', '2019-04-16 10:14:42'),
(26, 14, 'sd4.jpg', '2019-04-16 10:14:42', '2019-04-16 10:14:42'),
(27, 14, 'sd5.jpg', '2019-04-16 10:14:42', '2019-04-16 10:14:42'),
(28, 14, 'sd6.jpg', '2019-04-16 10:14:42', '2019-04-16 10:14:42'),
(29, 14, 'sd7.jpg', '2019-04-16 10:14:42', '2019-04-16 10:14:42'),
(30, 14, 'sd8.jpg', '2019-04-16 10:14:42', '2019-04-16 10:14:42'),
(31, 15, 'tl2.jpg', '2019-04-16 10:19:26', '2019-04-16 10:19:26'),
(32, 15, 'tl3.jpg', '2019-04-16 10:19:26', '2019-04-16 10:19:26'),
(33, 15, 'tl4.jpg', '2019-04-16 10:19:26', '2019-04-16 10:19:26'),
(34, 15, 'tl5.jpg', '2019-04-16 10:19:26', '2019-04-16 10:19:26'),
(35, 15, 'tl6.jpg', '2019-04-16 10:19:26', '2019-04-16 10:19:26'),
(36, 15, 'tl7.jpg', '2019-04-16 10:19:26', '2019-04-16 10:19:26'),
(37, 15, 'tl8.jpg', '2019-04-16 10:19:26', '2019-04-16 10:19:26'),
(38, 17, 'bd2.jpg', '2019-04-16 10:33:46', '2019-04-16 10:33:46'),
(39, 18, 'lan2.jpg', '2019-04-16 10:41:14', '2019-04-16 10:41:14'),
(40, 18, 'lan3.jpg', '2019-04-16 10:41:14', '2019-04-16 10:41:14'),
(41, 18, 'lan4.jpg', '2019-04-16 10:41:14', '2019-04-16 10:41:14'),
(42, 18, 'lan5.jpg', '2019-04-16 10:41:14', '2019-04-16 10:41:14'),
(43, 18, 'lan2.jpg', '2019-04-16 10:45:14', '2019-04-16 10:45:14'),
(44, 18, 'lan3.jpg', '2019-04-16 10:45:14', '2019-04-16 10:45:14'),
(45, 18, 'lan4.jpg', '2019-04-16 10:45:14', '2019-04-16 10:45:14'),
(46, 18, 'lan5.jpg', '2019-04-16 10:45:14', '2019-04-16 10:45:14'),
(47, 18, 'lan6.jpg', '2019-04-16 10:45:14', '2019-04-16 10:45:14'),
(48, 20, 'langbiang2.jpg', '2019-04-16 10:50:17', '2019-04-16 10:50:17'),
(49, 20, 'langbiang3.jpg', '2019-04-16 10:50:17', '2019-04-16 10:50:17'),
(50, 20, 'langbiang4.jpg', '2019-04-16 10:50:17', '2019-04-16 10:50:17'),
(51, 20, 'langbiang5.jpg', '2019-04-16 10:50:17', '2019-04-16 10:50:17');

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
  `schedule_title` text COLLATE utf8_unicode_ci NOT NULL,
  `schedule_content` text COLLATE utf8_unicode_ci NOT NULL,
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
(9, 'đi ngủ', 'lịch 2', 9, 'leo-nui.jpg', 2, '2019-04-15 14:40:04', '2019-04-15 14:40:04'),
(16, 'Phong Nha - Bản Đoòng - Hang Én', 'Chúng tôi sẽ đón bạn tại khách sạn mà bạn đã đăng ký trước trong khu vực Phong Nha – Kẻ Bàng trong khoảng thời gian từ 8:00 – 8:30 sáng, và điểm đến sẽ là trụ sở chính của công ty Oxalis. Sau khi tìm hiểu tất cả thông tin về tính an toàn của chuyến đi, ký vào Phiếu miễn trừ trách nhiệm và hoàn thành công tác thu xếp hành lý, xe sẽ đưa mọi người băng qua đường mòn để đến với điểm xuất phát của cuộc hành trình. Vào khoảng 10 giờ sáng, cuộc hành trình sẽ chính thức bắt đầu, để lại sau lưng những con đường để tiến vào chinh phục rừng sâu.\r\n\r\nBắt đầu bằng việc đổ dốc khoảng 1.5km, mọi người sẽ băng qua một dòng suối lớn ở phía dưới chân núi. Đi sâu vào trong khu rừng nguyên sinh, bản Đoòng sẽ chào đón bạn với một tách trà nóng. Đoàn sẽ dừng chân và ăn trưa tại bên suối vào khoảng 12:30 – 1:00 chiều. Sau đó trở lại vào rừng, vượt sông, và đi qua các thung lũng đến khi thấy cửa Hang Én lấp ló ở đường chân trời.\r\n\r\nĐoàn sẽ đến được Hang Én vào tầm 3h chiều. Hãy nghỉ ngơi một chút tại bãi cắm trại đã được chuẩn bị tươm tất bởi đội phục vụ. Đoàn sẽ di chuyển lên cửa sau của Hang Én để chiêm ngưỡng cảnh tượng hùng vĩ và tuyệt vời đã từng được chọn quay trong bộ phim Peter Pan. Đoàn sẽ đi qua một lối đi khô và có cơ hội được ngắm nhìn những hóa thạch lên đến 300 triệu năm tuổi trước khi quay trở về bãi cắm trại. Bạn sẽ muốn nghỉ ngơi, bơi lội và tận hưởng khoảng thời gian này trước khi thưởng thức bữa tối BBQ tuyệt vời được chuẩn bị bởi đội ngũ đầu bếp chuyên nghiệp. Ngày phám phá đầu tiên sẽ kết thúc với những ly rượu gạo thơm lừng trong hang.', 13, 'hangen_3.jpg', 1, '2019-04-16 10:01:26', '2019-04-16 10:01:26'),
(17, 'Hang Én - Phong Nha', 'Ngày mới sẽ bắt đầu bằng một bữa sáng thịnh soạn vào khoảng 8 giờ sáng được chuẩn bị bởi các đầu bếp và đội phục vụ. Khoảng 9 giờ sáng, đoàn rời Hang Én, tiếp tục hành trình vào băng rừng, lội suối.\r\n\r\nVào khoảng 12 giờ, bữa trưa sẽ được chuẩn bị sẵn sàng trước khi bạn lên đường để quay trở về. Đoàn sẽ tiếp tục chuyến đi bằng việc trek dưới bóng cây , dọc theo những con suối uốn lượn trong thung lũng. Đoàn sẽ bắt đầu leo dốc vào khoảng 2 giờ chiều để lên đến đỉnh đồi – nơi lái xe của chúng tôi đang chờ đón. Xe sẽ chở đoàn về lại Phong Nha vào khoảng 4:30 đến 5:30 chiều. Kết thúc một chuyến đi đầy trải nghiệm và kỳ thú!', 13, 'hangen_6.jpg', 2, '2019-04-16 10:01:26', '2019-04-16 10:01:26'),
(18, 'Phong Nha – Bản Đoòng – Hang Én', 'Đoàn ăn sáng tại khách sạn lúc 8:00. Hướng dẫn viên và xe sẽ đón đoàn tại khách sạn lúc 9:00 và bắt đầu cho chuyến thám hiểm 4 ngày 3 đêm. Hành lý cá nhân và các đồ giá trị không mang theo trong tour sẽ được ký gửi tại Văn phòng Oxalis trước khi xuất phát.\r\n\r\n \r\n\r\nĐoàn sẽ mất khoảng 45 phút dọc theo đường 20 Quyết Thắng – thuộc đường mòn Hồ Chí Minh đến điểm đi bộ. Từ đây, mọi người bắt đầu khoảng 1 giờ đi bộ xuống dốc núi. Thêm nửa giờ đi bộ dọc theo con suối dưới chân dốc núi, đoàn sẽ dừng chân tại Bản Đoòng – bản dân tộc thiểu số người Bru Vân Kiều sống tách biệt trong rừng sâu, một điểm nhấn không thể bỏ qua trong chuyến hành trình. Ở đây bạn sẽ có cơ hội tìm hiểu và khám phá những nét đặc sắc, độc đáo trong đời sống văn hoá của họ trong thời gian nghỉ ngơi và thưởng thức bữa trưa ngay bên trong bản.\r\n\r\nSau khi ăn trưa và nghỉ ngơi, bạn sẽ tiếp tục đi bộ dọc theo con suối thêm khoảng 2 giờ đồng hồ dưới ánh nắng buổi trưa với rất ít bóng râm. Bạn sẽ có nhiều lần phải lội qua suối do đó hãy chuẩn bị tinh thần cho việc giày và quần bị ướt suốt cả ngày. Vào mùa hè, nước suối sẽ ngập đến đầu gối. Bạn không nên đi những loại giày chống thấm (ví dụ như các giày hiệu hiệu Goretex) vì nó sẽ giữ nước và ẩm bên trong giày gây cảm giác khó chịu.\r\n\r\nĐi dọc theo hết con suối bạn sẽ đến cửa Hang Én, nơi cư trú của hàng vạn con chim én. Tại đây, bạn sẽ được cung cấp đèn đội đầu, và tiếp tục đi bộ khoảng 20 – 30 phút vượt qua các khối đá để đến điểm cắm trại đầu tiên bên trong lòng Hang Én. Đoàn sẽ tập kết tại điểm cắm trại khoảng 3-4 giờ chiều và có thể bạn sẽ thích thú với việc tắm suối, bơi lội tại dòng sông ngầm chảy qua Hang Én. Sau bữa tối đầu tiên cùng với đoàn, bạn sẽ có cơ hội chụp lại những bức ảnh tuyệt vời tại khu cắm trại có một không hai trong lòng hang động này.\r\n\r\nBất cứ du khách nào không thể hoàn thành một trong các chặng trong ngày đầu tiên một cách dễ dàng sẽ phải quay lại Phong Nha và không được phép tiếp tục tham gia chuyến đi. Đội ngũ dẫn tour sẽ là người đưa ra quyết định để đảm bảo an toàn cho cá nhân bạn và cho đoàn. Mọi chi phí đã trả cho tour sẽ không được hoàn lại.\r\n\r\nLưu ý: lộ trình chỉ áp dụng với tour Thám hiểm Sơn Đoòng 2019', 14, 'sd1.jpg', 1, '2019-04-16 10:14:42', '2019-04-16 10:14:42'),
(19, 'Hang Én – Lối vào Hang Sơn Đoòng – Khối Bàn Chân Chó – Bãi cắm trại số 1 – Hành lang hóa thạch', 'Bạn sẽ bắt đầu ngày mới bằng một bữa sáng đầy đủ dưỡng chất được chuẩn bị bởi các đầu bếp lúc 8 giờ. Ngày hôm nay sẽ là một ngày nhiều thử thách và khó khăn nên bạn hãy cố gắng ăn thật no để có thể đảm bảo năng lượng cho bản thân mình.\r\n\r\nĐoàn sẽ khởi hành vào khoảng 9 giờ sáng bằng việc đi bộ xuyên qua Hang Én trong khoảng 30 phút để đến cửa ra, địa điểm yêu thích của các nhiếp ảnh gia bởi cảnh tượng hùng vĩ tuyệt vời. Đoàn sẽ đổ dốc ra khỏi cửa hang và băng qua sông ngay sau đó. Hãy chuẩn bị tinh thần để cùng đôi giày của bạn băng qua nhiều sông suối trong ngày hôm nay và đây cũng chính là điều làm cuộc hành trình của bạn trở nên kì thú hơn!\r\n\r\nChuyến hành trình sẽ được tiếp tục bằng việc leo lên 1 con dốc trong khoảng 45 phút, bắt đầu với nhiều phần núi đá lởm chởm. Lên đến đỉnh đồi, bữa trưa đang chờ đợi bạn với nhiều món ăn hấp dẫn. Sau bữa trưa, đoàn sẽ được phổ biến quy tắc an toàn một lần nữa và được hỗ trợ mang các thiết bị an toàn, chuẩn bị cho chuyến phiêu lưu thực sự vào lòng đất. Đoàn sẽ bắt đầu leo xuống dốc để tiến vào cửa hang Sơn Đoòng.\r\n\r\nCùng dây đai chuyên dụng và các thiết bị an toàn cùng sự hỗ trợ tối đa từ đội ngũ hướng dẫn & chuyên gia hang động, bạn sẽ bắt đầu trèo xuống vào khoảng 80m sâu trong hang. Chuyến thám hiểm này sẽ không bao gồm việc đu dây ở bất kì điểm nào. Đoàn tiếp tục trèo qua các tảng đá lớn tiến gần hơn đến dòng sông ngầm thứ nhất và thứ hai trong hang với mực nước dao động từ khoảng đầu gối đến ngang hông tùy theo thời điểm. Bạn nên tranh thủ tắm rửa tại đây vì đây chính là nơi cuối cùng trong ngày bạn có thể tắm.\r\n\r\nTrên đường tiến đến bãi cắm trại đầu tiên trong Hang Sơn Đoòng bạn nên cẩn thận hơn vì có nhiều khối đá lớn, và phải trườn theo con đường mòn đầy đá.  Khối thạch nhũ khổng lồ được đặt tên gọi “Bàn Chân Chó” (Hand of Dog) sẽ chào đón bạn kết hợp cùng ánh sáng ban ngày chiếu xuyên qua hang thông qua giếng trời thứ nhất (Doline 1) sẽ tạo thành một cảnh tượng ngoạn mục, là món quà đầu tiên thiên nhiên ban tặng bạn sau những thử thách suốt cả ngày.  Đoàn sẽ men lối đi để đến với khu cắm trại vào khoảng 3 – 4 giờ chiều, thưởng thức một tách trà/cà-phê nóng và tiếp tục đi vào khám phá các hóa thạch cổ đại. Bạn có thể bơi lội một chút tại đây trước khi trở về bãi cắm trại nghỉ ngơi và thưởng thức một bữa tối thịnh soạn được chuẩn bị sẵn sàng, cùng ngắm nhìn khung cảnh kỳ vĩ xung quanh mình.\r\n\r\nXin lưu ý rằng sẽ không có chỗ tắm rửa tại điểm cắm trại này.\r\n\r\nLưu ý: lộ trình chỉ áp dụng với tour Thám hiểm Sơn Đoòng 2019', 14, 'sd4.jpg', 2, '2019-04-16 10:14:42', '2019-04-16 10:14:42'),
(20, 'Bãi cắm trại thứ nhất – Vọng khủng long – Vườn Địa Đàng – Bãi cắm trại thứ hai', 'Đoàn sẽ được tiếp đãi một bữa sáng đầy dưỡng chất trước khi lên đường vào khoảng 9 giờ sang, hành trình đến bãi cắm trại thứ hai trong Hang Sơn Đoòng. Bạn sẽ bắt đầu bằng việc leo qua nhiều tảng đá với nhiều đoạn khá dốc để đến với khu rừng nguyên sinh đầu tiên trong hang được biết đến với tên gọi: Vọng Khủng Long. Bạn sẽ mất khoảng 1 giờ rưỡi để di chuyển từ Bãi cắm trại thứ nhất đến đây.\r\n\r\nĐoàn sẽ dành thời gian để chụp hình trước khi di chuyển nhanh xuống những dốc đá, tiến đến những “vách bồn trũng” khổng lồ được tạo thành do canxi kết tủa, đây chính là một món quà tuyệt vời khác mà thiên nhiên ban tặng bạn trong chuyến đi này với khung cảnh đẹp đến kinh ngạc và cũng là nơi bạn sẽ dễ dàng chụp được nhiều tấm hình tuyệt đẹp. Còn gì thú vị hơn thưởng thức bữa trưa nhẹ trong một khung cảnh tuyệt vời từ giếng trời đầu tiên của hang Sơn Đoòng? Nếu may mắn, bạn có thể có cơ hội nhìn thấy những tia nắng (sunbeam) từ hố sụt một, tạo nên những bức hình thật sự ấn tượng.\r\n\r\nChuyến hành trình sẽ tiếp tục bằng việc băng qua những khối thạch nhũ khổng lồ và bãi ngọc trai hang động tuyệt đẹp, đi về hướng giếng trời thứ hai cùng khu rừng nguyên sinh chính của hang. Đi dọc theo con đường mòn là cả rừng dương xỉ xanh tươi hướng về không gian hố sụt thứ 2, khu rừng nguyên sinh dưới lòng đất. Đây là một trải nghiệm tuyệt vời mà bạn không thể tìm ra được ở bất cứ nơi đâu trên thế giới này. Sau khi băng rừng trong khoảng 30 phút, bạn sẽ vượt qua các con dốc trơn trượt để vào đến được bãi cắm trại thứ hai trong hang Sơn Đoòng vào lúc 2 – 3 giờ chiều.\r\n\r\nSau ít phút nghỉ ngơi tại đây, đoàn sẽ tiếp tục cuộc hành trình khám phá sâu hơn trong hang. Bạn sẽ băng qua một lối đi rất lớn với nhiều khối thạch nhũ tuyệt đẹp, từ đây ngoảnh lại nhìn toàn cảnh giếng trời thứ hai với cảnh sắc hùng tráng đến kì lạ sẽ có thể làm xiêu lòng bất kì ai. Nhiều động vật không xương sống lạ được phát hiện trong khu vực này như nhện trắng, cá, mối, các loài tôm… nên hãy cẩn trọng khi di chuyển. Đây cũng chính là một điểm tiềm năng để chụp được những tấm hình đẹp giá trị.\r\n\r\nĐoàn sẽ quay trở lại bãi cắm trại vào khoảng 5 giờ chiều, nghỉ ngơi và tận hưởng một bữa tối thịnh soạn nhiều dinh dưỡng được chế biến bởi đội ngũ porter. Đừng quên tham gia giao lưu với mọi người, cùng tận hưởng cảnh sắc tuyệt đẹp của bãi cắm trại được mệnh danh là đẹp nhất thế giới.\r\n\r\nMẹo nhỏ: bạn có thể dùng một đôi giày khô ráo trong suốt ngày hôm nay. Ngoài phần đầm lầy chứa đầy bùn nhão thì không có đoạn lội suối nào. Ngoài ra, tại điểm cắm trại của ngày thứ 3 này không có chỗ để bạn tắm rửa.\r\n\r\n \r\n\r\nLưu ý: lộ trình chỉ áp dụng với tour Thám hiểm Sơn Đoòng 2019', 14, 'sd7.jpg', 3, '2019-04-16 10:14:42', '2019-04-16 10:14:42'),
(21, 'Bãi cắm trại thứ 2 – Bức Tường Việt Nam – Cửa ra Hang Sơn Đoòng – Chày Lập Farmstay', 'Bữa sáng sẽ tiếp đầy năng lượng cho bạn để bắt đầu một ngày dài khám phá tiến về Bức tường Việt Nam. Bạn sẽ leo lên phía trên của Bức tường Việt Nam bằng thang kết hợp dây an toàn dưới sự giám sát của đội ngũ hướng dẫn. Sau khi lên đến nơi, bạn sẽ gặp ngay ánh sáng đến từ cửa ra của hang và tận hưởng bữa trưa hấp dẫn tại đây. Sau bữa trưa, đoàn sẽ đi băng qua các khối thạch nhũ và bãi ngọc hang động để ngắm nhìn các hóa thạch cổ của động vật. Một lối đi nhỏ gồ ghề sẽ dẫn bạn xuống chân đồi để tiếp tục đi bộ một quãng ngắn trở ra đường chính. Các thức uống mát lạnh đã đợi bạn trên đỉnh đồi trước khi xe đón bạn, di chuyển khoảng 45 phút về đến khu nghỉ dưỡng Chày Lập Farmstay http://chaylapfarmstay.com/, nơi hồ bơi mát lạnh đang chờ đón bạn trở về. Bạn sẽ có một buổi chiều nghỉ ngơi, thư giãn tại đây. Tiệc Gala buổi tối được tổ chức lúc 6:30 với sự tham gia của các thành viên trong đoàn, đội ngũ chuyên gia và Hướng dẫn viên.\r\n\r\n \r\n\r\nVui lòng thông báo nhân viên kinh doanh của chúng tôi giờ đi của các bạn sau tour để chúng tôi tiện chuẩn bị và sắp xếp xe đưa về sân bay hoặc ga tàu. Nếu bạn muốn ở lại thêm tại Phong Nha, vui lòng cho chúng tôi biết để tiện hỗ trợ bạn đặt phòng tại Chày Lập Farmstay.\r\n\r\n \r\n\r\nLưu ý: lộ trình chỉ áp dụng với tour Thám hiểm Sơn Đoòng 2019', 14, 'sd8.jpg', 4, '2019-04-16 10:14:42', '2019-04-16 10:14:42'),
(22, 'Phong Nha - Tân Hóa - Hang Chuột - Tú Làn', 'Chúng tôi sẽ đón bạn tại khách sạn mà bạn đã đăng ký trước trong khu vực Phong Nha Kẻ Bàng trong khoảng thời gian từ 7h30 đến 8h00 sáng, và điểm đến sẽ là văn phòng của công ty Oxalis tại Tân Hóa. Sau khi tìm hiểu tất cả thông tin về tính an toàn của chuyến đi, ký vào Phiếu miễn trừ trách nhiệm và hoàn thành công tác thu xếp hành lý, mọi người sẽ bắt đầu cuộc hành trình với việc đi bộ băng qua những cánh đồng ngô và đậu phộng dài 2.5km.\r\n\r\nVượt một đường dốc đá nhỏ để khám phá hang Chuột. Hang này có độ dài 300m với những măng đá có cấu trúc tuyệt đẹp. Sau đó, mọi người sẽ di chuyển thẳng tới thung lũng La Ken, nơi bữa trưa bên cạnh dòng sông thơ mộng đã được chuẩn bị sẵn. Sau bữa trưa, hãy chuẩn bị tinh thần để đối mặt với 2 ngọn núi (núi Lồm Cồm và núi Xoài) đang đợi bạn phía trước. Cảnh đẹp từ trên cao nhìn xuống sẽ làm bạn phải trầm trồ thán phục. Đoàn sẽ tiếp tục băng rừng để đến với thung lũng Tú Làn (2km). Kết thúc ngày thứ nhất với việc thả mình trên dòng suối nhỏ và thưởng thức bữa tối BBQ tuyệt vời, cùng nhau hát hò và quyện mình với khung cảnh thiên nhiên về đêm.', 15, 'tl2.jpg', 1, '2019-04-16 10:19:26', '2019-04-16 10:19:26'),
(23, 'Hang Ken – Tú Làn – Hang Kim – Tổ Mộ', 'Ngày thứ hai chào đón bạn với nhiều thử thách và mạo hiểm. Sau bữa sáng, bạn sẽ bơi thẳng tới hang Ken, và khám phá hang động dài nhất hệ thống hang động Tú Làn. Quay trở lại khu cắm trại và trải nghiệm cảm giác hòa mình dưới dòng thác đổ, nghỉ ngơi và thưởng thức bữa trưa ngay tại đó. Sau bữa trưa, mọi người lại bơi khoảng 200m ngược trở lại hang Tú Làn để di chuyển tới hang Kim, nơi bạn sẽ tiếp tục có cơ hội để bơi lội trước khi đoàn di chuyển đến thung lũng Tổ Mộ. Đây là địa điểm cắm trại thứ hai trong cuộc hành trình. Mội buổi tối tuyệt vời nữa bên cạnh dòng thác nhỏ sẽ là nơi lý tưởng để bạn nghỉ ngơi sau một ngày khám phá dài.', 15, 'tl6.jpg', 2, '2019-04-16 10:19:26', '2019-04-16 10:19:26'),
(24, 'Tổ Mộ - Hang Sơng Oxalis - Hung Ton - Tân Hóa - Phong Nha', 'Mức độ mạo hiểm của ngày cuối cùng nhẹ nhàng hơn những ngày trước và có sự cân bằng giữa đi bộ, leo núi và bơi trong hang. Sau bữa sáng, vào khoảng 8 giờ sáng, bạn sẽ lên đường khám phá hang Sơng Oxalis, một hang động đẹp tráng lệ của Tú Làn. Đoàn sẽ trở về bãi cắm trại vào khoảng 11 giờ, ăn nhẹ trước khi bơi ngược dòng khoảng tầm 100m, băng qua thác nước để đến hang Hung Ton thông qua cửa ra của hang. Bạn cần phải leo một cái thang 15m để chiêm ngưỡng vẻ đẹp của lối vào.\r\n\r\nVào buổi chiều, đoàn trở về trên con đường nhỏ băng qua sông Rào Nan và những cánh đồng nhỏ, cuộc hành trình sẽ kết thúc tại văn phòng Oxalis Tân Hóa. Tại đây, mọi người có thể thư giãn nghỉ ngơi với nhiều thức uống lạnh. Văn phòng cũng có nhà vệ sinh riêng nếu mọi người muốn tắm rửa và thay đồ trước khi quay trở lại Phong Nha tầm 5h30 chiều.', 15, 'tl7.jpg', 3, '2019-04-16 10:19:26', '2019-04-16 10:19:26'),
(25, 'Hà Nội - Lào Cai.', 'Khởi hành lúc 9:00 sáng từ thị trấn Sa Pa du khách đi bằng ô tô đến đèo Trạm Tôn (có độ cao 1.945m) - Nơi xuất phát tuyến trekking. Du khách bắt đầu đi bộ đến độ cao 1.980m thì dừng lại ngắm cảnh và nghe tiếng suối reo hòa cùng với tiếng chim hót, tại đây quý khách dừng chân nghỉ ngơi để lấy sức rồi leo đến độ cao 2.219m thì dừng lại ăn trưa. Dọc đường đi từ độ cao 1.980 - 2.219m, du khách được ngắm hệ sinh thái núi rừng. Tại nơi nghỉ trưa có rất nhiều loại Phong Lan khác nhau mọc trên sườn đá. Đi tiếp đến độ cao 2.780m, du khách dừng chân và quan sát phong cảnh của núi non, khu rừng trúc xen kẽ với Đỗ Quyên. Tại đây có nhiều phong cảnh đẹp, du khách có thể chụp ảnh lưu niệm. Chặng đường tiếp theo du khách đi tiếp đến độ cao 2.930m, đoạn đường này đi lại rất khó khăn và mất nhiều sức nhưng đây là đểm dựng lều ngủ của đêm thứ nhất (thời gian vào lúc 5 giờ chiều). Tại đây du khách có thể nghỉ ngơi, đi dạo ngắm cảnh, chụp ảnh.', 16, 'psp1.jpg', 1, '2019-04-16 10:25:52', '2019-04-16 10:25:52'),
(26, 'Fan Si Pan', 'Xuất phát từ lúc 7giờ 30 sáng, du khách đi xuống tận chân khe của đỉnh Fan Si Pan và chuẩn bị leo lên đỉnh. Đi qua lòng khe, phong cảnh ở đây khá đẹp vì có nhiều Trúc Lùn xen kẽ với Đỗ Quyên cổ thụ. Đi trên sườn của thung lũng này ta có thể ngắm cảnh núi non hùng vĩ và đỉnh sét đánh với độ cao 2.900m và đỉnh Fan Si Pan. Đi tiếp khoảng 1 giờ nữa là du khách đặt chân lên đỉnh Fan Si Pan, một đỉnh cao là mơ ước chinh phục, khám phá của biết bao người. Quý khách sẽ cảm nhận được cảm giác thật tự hào khi đã chinh phục được nóc nhà của Đông Dương. Tại đoạn cao này đoàn vận động viên leo núi của Nga và Đức đặt một hộp hình chóp nhọn bằng inox năm 1984; khối kim loại này cao chừng 70cm, đáy hình vuông mỗi cạnh 50cm. Từ đỉnh Fan Si Pan, phóng tầm mắt ra xa, một bên là phần đất của xã Mường Khoa và xã Thân Thuộc huyện Than Uyên tỉnh Lai Châu, một bên là thị trấn Sa Pa thấp thoáng trong màn sương. Một điều đặc biệt là chúng ta có thể ngắm đường lên chân trời, một cảm giác thật lạ khi tận hưởng được những vẻ đẹp của thiên nhiên. Sau khi nghỉ ngơi, khoảng 9giờ - 9giờ30 du khách tiếp tục cuộc hành trình đi xuống độ cao 2.910m để nghỉ ngơi, ăn trưa sau đó đi xuống độ cao 2.300m trên đoạn đường này quý khách sẽ thấy dược những nét độc đáo của hệ sinh thái rừng trên núi cao, với những cây Tùng cổ kính, rêu phong đã có hàng trăm tuổi. Độ cao 2.300m là điểm nghỉ qua đêm thứ 2 trong cuộc hành trình chinh phục đỉnh Fan Si Pan. Đi tiếp khoảng 3 giờ đồng hồ du khách có thể đến nơi ngắm cảnh xung quanh với hệ sinh thái rừng ven suối; tại điểm này có nhiều hoa và cây cổ thụ.', 16, 'psp2.jpg', 2, '2019-04-16 10:25:52', '2019-04-16 10:25:52'),
(27, 'Sín Chải - Sa Pa - Hà Nội', 'Buổi sáng xuất phát từ 8 giờ đi xuống đường Sín Chải , đoạn này tuy hơi dốc và tương đối nguy hiểm nhưng tạo cho ta cảm giác khác lạ, trên đường qua nhiều hệ sinh thái rừng khác nhau, với nhiều loại hoa như Đỗ Quyên, Phong Lan... Trên tuyến đường này du khách có thể ngắm các loài chim (cả chim di cư), gà lôi. Những đoàn ít người đi dài ngày có thể bắt gặp một số loài thú lớn như Sơn Dương, Cầy, Gấu. Xuống đến Sín Chải du khách có thể dừng chân tìm hiểu những nét văn hóa truyền thống của người Mông và tham quan mô hình du lịch cộng đồng sau đó trở về thị trấn Sa Pa vào khoảng 12 giờ trưa, kết thúc cuộc hành trình chinh phục đỉnh Fan Si Pan. Trở về khách sạn tắm rửa, nghỉ ngơi thư giãn 17h:00 xe Bus đưa quý khách tới Ga Lào Cai, đợi chuyến tàu SP8 trở về Hà Nội khoảng 5h:00', 16, 'psp3.jpg', 3, '2019-04-16 10:25:52', '2019-04-16 10:25:52'),
(28, 'TP. HCM - ĐẮK NÔNG - THÁC LƯU LY - THIỀN VIỆN TRÚC LÂM ĐẠO NGUYÊN (sáng, trưa, tối)', 'Quý khách tập trung tại Vietravel (190 Pasteur, Phường 06, Quận 3, TP. HCM), khởi hành đi Đắk Nông qua các địa danh nổi tiếng như sóc Bom Bo, Bù Đăng, ngắm nhìn quang cảnh núi rừng hùng vĩ dọc hai bên đường.\r\nĐến thị xã Gia Nghĩa (Đắk Nông), dùng cơm trưa tại nhà hàng. Nhận phòng khách sạn nghỉ ngơi.\r\nBuổi chiều, xe đưa đoàn tham quan:\r\n- Khu bảo tồn thiên nhiên Nâm Nung khám phá ngọn thác Lưu Ly hùng vĩ - đắm mình trong vẻ đẹp sơn thủy của núi rừng, nghe âm thanh thác đổ hòa quyện cùng bản hòa ca từ muôn tiếng chim rừng.\r\n- Tĩnh tâm tại Thiền Viện Trúc Lâm Đạo Nguyên - một công trình đang từng bước hoàn thiện trên vùng đất Nâm Nung huyền thoại. Nằm ẩn mình giữa rừng thông bát ngát, thiền viện mang nét kiến trúc văn hóa truyền thống dân tộc hài hòa với không gian thờ tự thanh tịnh giữa chốn núi rừng.\r\nTrở về trung tâm. Quý khách dùng bữa tối và tự do đi dạo khám phá thị xã Gia Nghĩa về đêm. Nghỉ đêm tại Đắk Nông.', 17, 'cv1.jpg', 1, '2019-04-16 10:33:46', '2019-04-16 10:33:46'),
(29, 'HỒ TÀ ĐÙNG - BẢO LỘC	(sáng, trưa, tối)', 'Quý khách trả phòng, dùng điểm tâm sáng, khởi hành đến khu bảo tồn thiên nhiên Tà Đùng, vùng đất được kiến tạo bởi đất đỏ bazan với sức hút lạ kì từ những con đường đèo dài nối tiếp những khúc cua ôm trọn khung cảnh núi rừng hoang vu cùng những đồi cà phê, tiêu bạt ngàn phủ xanh núi đồi dọc hai bên cung đường. Đoàn dừng chân ham quan:\r\n- Vườn ổi Quảng Khê - nhà vườn đầu tiên thực hiện theo quy trình “sạch” được áp dụng công nghệ cao hoàn chỉnh trong chuỗi quy trình canh tác tại Đắk Nông. Quý khách thưởng thức những trái ổi giòn thơm với hương vị dịu ngọt lan tỏa khắp vườn.\r\n- Thưởng ngoạn hồ Tà Đùng, một cảnh quan thiên nhiên hùng vĩ – tuyệt tác hồ Tà Đùng hiện ra như một bức tranh, đẹp đến ngỡ ngàng. Giữa mênh mông biển nước, những quả đồi sừng sững như những hòn đảo nhỏ được kiến tạo từ đất đỏ bazan, nhìn xa xa giống như những chiếc thuyền khiến du khách cứ ngỡ lạc giữa chốn mê cung trên cao nguyên với khung cảnh nên thơ\r\n- Từ Tà Đùng Topview, thưởng thức ly cà phê nguyên chất hoặc ly kem mát lạnh cạnh hồ bơi vô cực, phóng tầm nhìn ôm trọn cảnh sắc tuyệt đẹp của cao nguyên hùng vĩ. Một nét đẹp nguyên sơ hòa với sự hùng vĩ của thiên nhiên làm thoả mãn cả những khách lữ hành khó tính. Nơi đây không có gì tuyệt mỹ hơn với cảnh trời mây, sông nước, núi non, thiên nhiên hòa quyện, làm nền cho nhau tạo thành một bức tranh như thực như mơ, bãng lãng sương phủ và xanh biếc nước trời.\r\n- Đoàn xuống thuyền lướt nhẹ trên mặt hồ Tà Đùng khám phá những hoang đảo được ví von như “Hạ Long giữa lòng Tây Nguyên”, Quý khách được dịp tìm hiểu về đời sống, sinh hoạt của ngư dân cùng những chiếc vó đánh cá ẩn hiện giữa rừng cây xanh thẳm, nước biếc.\r\nĐoàn khởi hành đi Bảo Lộc. Sau bữa tối, Quý khách tự do dạo mát quanh vòng hồ Đồng Nai tự mình thưởng thức những tách trà, cà phê thật ấm áp… bên quán nhỏ ven hồ trong tiết trời se se lạnh của thành phố trẻ. Nghỉ đêm tại Bảo Lộc.', 17, 'cv2.jpg', 2, '2019-04-16 10:33:46', '2019-04-16 10:33:46'),
(30, 'BẢO LỘC - ĐỒI CHÈ TÂM CHÂU - KHU DU LỊCH ĐAMB’RI - TP. HCM	(sáng, trưa)', 'Quý khách trả phòng, dùng điểm tâm sáng, khởi hành tham quan:\r\n- Đồi Chè Tâm Châu - du khách thỏa sức ngắm nhìn, chụp hình trên những đồi chè thẳng tắp tạo nên những lối quanh co đẹp mắt với diện tích hàng trăm ha.\r\n- Khu du lịch Đamb\'ri - được coi là ngọn thác lớn nhất vùng đất Lâm Đồng với chiều cao 60 m tạo thành 2 dòng chảy cao thấp rất hùng vĩ. Khu du lịch thác Đamb\'ri còn là một quần thể du lịch bao gồm khu vui chơi, hồ, thác và rừng nguyên sinh rộng hàng trăm hecta với khí hậu trong mát của rừng nguyên sinh Nam Tây Nguyên.\r\nRời Bảo Lộc, đoàn khởi hành về TP. Hồ Chí Minh. Xe đưa Quý khách về điểm đón ban đầu. Chia tay Quý khách và kết thúc chương trình du lịch.', 17, 'cv3.jpg', 3, '2019-04-16 10:33:46', '2019-04-16 10:33:46'),
(31, 'LỊCH TRÌNH TOUR', '7h:30 Sau khi ăn sáng HDV của GOODMORNING TRAVEL đón quý khách tại khách sạn khởi hành Tour lặn biển Nha Trang đến cảng Cầu Đá bắt đầu chuyến du ngoạn biển đảo và lặn ngắm san hô tại khu bảo tồn Hòn Mun - Thiên đường sinh vật biển tại vịnh Nha Trang.\r\nĐiều đặc biệt nhất khi đi Tour Lặn Biển Nha Trang là Quý khách được các chuyên viên hướng dẫn cách bơi ngắm san hô, cách dùng áo phao, kính bơi chuyên dụng để ngắm san hô được rõ hơn, ống thở và quý khách nào không biết bơi sẽ được HDV của GOODMORNING TRAVEL hướng dẫn tận tình.\r\nSau đó Quý khách tự do tắm biển, thoả thích lặn khám phá những rạng san hô, cá và sinh vật biển đủ màu sắc dưới làn nước trong xanh của đảo Hòn Mun Nha Trang.\r\nTrong chương trình Tour Lặn biển Nha Trang quý khách sẽ được sử dụng dịch vụ lặn biển khám phá đáy đại dương bằng bình dưỡng khí, có chuyên viên đi kèm, nếu không biết bơi bạn vẫn có thể lặn được.\r\nCác chuyên viên trong Tour lặn biển Nha Trang sẽ hướng dẫn tận tình quý khách cách thở, cách giao tiếp dưới nước với chuyên viên đi kèm, cách sử dụng bình dưỡng khí, và mắt kính.\r\nQuý khách hãy yên tâm và tự tin là mình sẽ có những trải nghiệm tuyệt vời nhất dưới lòng đại dương đầy màu sắc, mở ra 1 thế giới mới kỳ thú và hấp dẫn.\r\n10h30: Kết thúc lần lặn thứ nhất. Quý khách sẽ được nghỉ ngơi trên tàu, thư giãn, dùng trà, cafe, trái cây (hoàn toàn miễn phí). Những khách nào đăng ký lặn 2 lần thì sẽ được tiếp tục lặn tại điểm thứ 2, còn khách chỉ đăng ký 1 lần thì sẽ được cung cấp đồ bơi (snorkeling) miễn phí.\r\n11h00: Tour lặn biển Nha Trang sẽ lặn tại 2 địa điểm đẹp nhất của Hòn Mun.\r\n\r\nLặn lần 2. Đây là điểm lặn thứ 2 tại Hòn Mun dành cho những khách đăng ký lặn 2 lần. Điểm lặn này có rất nhiều cá và san hô đẹp và nơi đây chắc chắn sẽ làm hài lòng những vị khách khó tính nhất bởi thế giới dưới lòng đại dương đa dạng và phong phú sinh vật biển, làm mãn nhãn quý khách.\r\n12h30 Quý khách sẽ dùng cơm trưa trên tàu với các món ăn trong chương trình Tour lặn biển Nha Trang gồm: Cá chiên sốt cà , mực nướng , thịt nướng , khoai tây chiên , trứng chiên , canh tôm cải ... (thực đơn có thể thay đổi theo ngày)\r\n13h00: Kết thúc Tour lặn biển Nha TrangTàu cập lại cảng Cầu Đá, HDV đưa quý khách trở về lại điểm đón. Nhiều kỉ niệm vui bên nhau hẹn gặp lại quý khách! Cảm ơn quý khách đã tin tưởng và lựa chọn chúng tôi!', 18, 'lan6.jpg', 1, '2019-04-16 10:41:14', '2019-04-16 10:41:14'),
(32, 'LỊCH TRÌNH TOUR', '7h30 – 7h45 : Xe và hướng dẫn viên sẽ đón quý khách tại khách sạn hoặc điểm hẹn ở Nha Trang đến cảng Cầu Đá.\r\n\r\n8h00 : Tàu lặn đưa quý khách đi Hòn Mun -  Khu bảo tồn biển đầu tiên tại Việt Nam. Có gần 350 loài san hô và 350 loài cá biển phong phú.\r\n\r\nTrên tàu, huấn luyện viên (HLV) sẽ hướng dẫn cho quý khách cách sử dụng bình hơi và những kỹ năng lặn biển.\r\n\r\n9h00 : Đến điểm lặn thứ 1, mỗi quý khách sẽ được một HDV lặn chuyên nghiệp có bằng cấp quốc tế hướng dẫn lặn, một người kèm một người, khám phá những vẻ đẹp muôn màu trong lòng đại dương.\r\n\r\n11h00 : Đến điểm lặn thứ 2, quý khách sẽ được bơi ngắm sinh vật biển, san hô miễn phí hoặc đăng ký lặn lần 2.=\r\n\r\n12h30 : Tàu đưa quý khách đến nhà hàng trên đảo Hòn Một. Cơm trưa được phục vụ với các món ăn đặc sản biển, trái cây tráng miệng. Quý khách thư giãn trên những chiếc ghế bố thoáng mát và thưởng thức hương vị trong lành của biển cả.\r\n\r\n14h-15h00 : Tàu sẽ đưa quý khách về cảng Cầu Đá, xe đưa quý khách về lại khách sạn. Kết thúc chuyến thám hiểm đầy thú vị.\r\n\r\nĐặc biệt :  DÀNH CHO NHỮNG NGƯỜI KHÔNG CẦN BIẾT BƠI', 18, 'lan3.jpg', 1, '2019-04-16 10:45:14', '2019-04-16 10:45:14'),
(33, 'LỊCH TRÌNH TOUR', 'Buổi sáng, 8:00 xe và hướng dẫn viên sẽ đón bạn tại điểm hẹn xuất phát về chân núi Langbiang. Tại đây hướng dẫn viên sẽ giới thiệu chi tiêt về lịch trình leo núi và những thông tin cần thiết. Sau đó bạn sẽ tiến hành leo núi Langbiang cùng hướng dẫn viên với đoạn đường hơn 6km đường đồi dốc, băng qua những cánh rừng thông và rừng nguyên sinh gần đỉnh Langbiang cao 2167m. Từ trên đỉnh núi, nếu những ngày đẹp trời các bạn có thể nhìn thấy biển Ninh Chữ, Phan Rang cách thành phố Đà Lạt 100km.\r\nNếu thời tiết không thuận lợi, chương trình sẽ linh động chuyển sang chỉnh phục đỉnh Radar cao 1950m nơi quân đội Mỹ từng xây dựng một căn cứ trực thăng tại đây. \r\n\r\nSau khi chinh phục thành công đỉnh Langbiang, quý khách sẽ dùng bữa trưa dạng Picnic tại đỉnh núi và nghỉ ngơi. Sau khi nghĩ ngơi xong quý khách sẽ di chuyển xuống chân núi và đến thăm xã Lát một buôn làng của người dân tộc K\'Ho Lạch ở chân núi Langbiang.quý khách sẽ được tham quan dệt thổ cẩm, thưởng thức rượu cần và nghe già làng kể về sự tích núi Langbiang.\r\n\r\nSau khi tham quan Xã Lát, xe và hướng dẫn viên sẽ đưa bạn về khách sạn và kết thúc chương trình tham quan.', 20, 'langbiang1.jpg', 1, '2019-04-16 10:50:17', '2019-04-16 10:50:17');

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
  `tour_number_day` int(11) NOT NULL,
  `tour_number_night` int(11) NOT NULL,
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

INSERT INTO `tour` (`tour_id`, `tour_name`, `tour_slug`, `tour_cate`, `tour_quantity`, `tour_quantity_purchased`, `tour_number_day`, `tour_number_night`, `tour_introduction`, `tour_price`, `tour_poster`, `tour_user_post`, `tour_new`, `tour_featured`, `created_at`, `updated_at`) VALUES
(9, 'Leo núi Gia Lào', 'leo-nui-gia-lao', 1, 20, 3, 3, 2, 'đi chơi vui vẻ', 99999, 'leo-nui.jpg', 1, 1, 1, '2019-04-15 14:40:04', '2019-04-15 14:40:04'),
(13, 'KHÁM PHÁ HANG ÉN 2N1Đ', 'kham-pha-hang-en-2n1d', 4, 16, 0, 4, 3, 'Hang Én là hang động lớn thứ 3 trên thế giới và đã nhanh chóng trở thành một trong những kỳ quan thiên nhiên phải đến ở Việt Nam. Chúng tôi gần như không cần bất kỳ từ ngữ nào để diễn tả được vẻ đẹp của Hang Én. Bạn sẽ có cơ hội cắm trại bên cạnh dòng sông thơ mộng uốn lượn bên trong hang động. Hơn thế nữa, bạn còn có cơ hội chiêm ngưỡng tận mắt nhiều hóa thạch với niên đại trên 300 triệu năm tuổi. Hãy để tâm trí bạn sẵn sàng trải nghiệm và bị lôi cuốn bởi vẻ đẹp kỳ vĩ từ mẹ thiên nhiên.\r\n\r\nTrong chuyến đi 2 ngày này, đoàn sẽ đi sâu vào trong khu rừng nguyên sinh, băng qua nhiều đoạn đường hiểm trở. Nhưng đừng để lo lắng làm chùn bước chân, với đội ngũ nhân viên khuân vác thân thiện, bạn sẽ được trải nghiệm cuộc sống của một người thám hiểm rừng sâu thực thụ. Với Bản Đoòng là điểm dừng chân không thể thiếu, bạn sẽ có cơ hội tham quan và tìm hiểu sâu hơn về cuộc sống của một trong những số ít dân tộc thiểu số ở Việt Nam.\r\n\r\nHang Én-một trong những nơi ấn tượng nhất Việt Nam, đã từng được giới thiệu trên các tờ báo nổi tiếng trên thế giới như National Geographic, The New York Times, Lonely Planet, Daily Mail UK, hay trong chương trình truyền hình trực tiếp nổi tiếng Good Morning American ở Mỹ với hơn 6 triệu khán giả đợt tháng 4 vừa qua; và gần đây nhất  chính là trong bộ phim bom tấn Pan (2015) của Hollywood.\r\n\r\nChuyến đi 2 ngày một đêm chinh phục Hang Én này sẽ là một trải nghiệm không thể nào quên trong cuộc đời bạn!\r\n\r\nHãy xách balo lên và đến với chúng tôi để thưởng ngoạn sự ấn tượng và khác biệt làm mê hoặc lòng người của một Hang Én huyền diệu ẩn mình giữa núi rừng bao la.\r\n\r\nVì lý do an toàn và bảo tồn hang động, chính quyền tỉnh Quảng Bình chỉ cho phép Oxalis là công ty duy nhất được phép dẫn du khách vào Hang Én và Hang Sơn Đoòng. Quyết định số 47/VPUBND-VX (ngày 9 tháng 1 năm 2015) của UBND tỉnh Quảng Bình.\r\n\r\nLưu ý: Lộ trình có thể thay đổi vì điều kiện thời tiết', 7600000, 'hangen_1.jpg', 1, 1, 0, '2019-04-16 10:01:26', '2019-04-16 10:01:26'),
(14, 'THÁM HIỂM SƠN ĐOÒNG 4N3Đ', 'tham-hiem-son-doong-4n3d', 4, 10, 0, 2, 1, 'Bạn sẽ được tham gia tour thám hiểu độc đáo bậc nhất trong vòng 4 ngày 3 đêm: đi xuyên hang lớn nhất thế giới – Hang Sơn Đoòng bằng cách chinh phục Bức tường Việt Nam. Chuyến đi đưa bạn sâu vào Vườn Quốc gia Phong Nha – Kẻ Bàng để thám hiểm những điều ẩn giấu đầy kì bí của thiên nhiên.', 69800000, 'sd1.jpg', 1, 1, 0, '2019-04-16 10:14:42', '2019-04-16 10:14:42'),
(15, 'KHÁM PHÁ TÚ LÀN 3N2Đ', 'kham-pha-tu-lan-3n2d', 4, 10, 0, 4, 3, 'Tour du lịch mạo hiểm này cung cấp sự cân bằng hoàn hảo giữa đi bộ, khám phá hang động, leo núi và bơi lội. Và 3 ngày 2 đêm là khoảng thời gian vừa phải để thưởng thức những trải nghiệm thú vị trong rừng.', 8000000, 'tl1.jpg', 1, 1, 0, '2019-04-16 10:19:26', '2019-04-16 10:19:26'),
(16, 'CHINH PHỤC FANSIPAN - 3 NGÀY 2 ĐÊM', 'chinh-phuc-fansipan-3-ngay-2-dem', 1, 8, 0, 5, 4, 'Được ví như \"Nóc nhà Đông Dương\" đỉnh Phan Xi Păng không chỉ là niềm ao ước chinh phục của các nhà leo núi chuyên nghiệp, các vận động viên thể thao mà còn là điểm khám phá hấp dẫn và vô cùng độc đáo của du khách khi đến Sa Pa nói riêng và Lào Cai nói chung. Trong chặng đường chinh phục đỉnh Phan Xi Păng, du khách sẽ lạc vào chốn bồng lai tiên cảnh, ngợp dưới trời hoa đỗ quyên, rừng Vân Sam cổ thụ, khám phá vẻ đẹp của thác Vàng, thác Tình yêu, của bạt ngàn rừng trúc phất trần. . Ở mỗi độ cao, du khách sẽ được tận hưởng một không gian rất riêng với những cảm giác kỳ thú, hứng khởi, thậm chí cả sợ hãi mà hiếm có loại hình du lịch nào có được.', 2415000, 'psp.jpg', 1, 1, 0, '2019-04-16 10:25:52', '2019-04-16 10:25:52'),
(17, 'Ban Mê Thuột - Thác Daynur - Cưỡi Voi Bản Đôn', 'ban-me-thuot-thac-daynur-cuoi-voi-ban-don', 5, 25, 0, 6, 5, 'Trong không khí mát lành của phố núi Cao Nguyên, du khách có thể tản bộ trên các con phố để tham quan các địa điểm nổi tiếng như: nhà đày Buôn Ma Thuột, Bảo tàng các dân tộc Việt Nam; Biệt thự vua Bảo Đại; Toà Giám mục tại Đắk Lắk;...Bên cạnh đó, du khách cũng có thể đi tham quan các huyện và tham gia các trò chơi cảm giác mạnh như: cưỡi voi bản Đôn; chèo thuyền độc mộc trên hồ Lak; ngắm cảnh đẹp hùng vĩ của thác Dray Sáp; khu bảo tồn thiên nhiên Ea Sô - Ea Kar….', 3900000, 'bd1.jpg', 1, 1, 0, '2019-04-16 10:33:46', '2019-04-16 10:33:46'),
(18, 'TOUR LẶN BIỂN NHA TRANG', 'tour-lan-bien-nha-trang', 2, 20, 0, 5, 6, 'Tour lặn biển Nha Trang quý khách có thể tắm, lặn ngắm san hô trên vịnh được xem là đẹp nhất Việt Nam, khu bảo tồn sinh vật biển Hòn Mun.Nơi đây có nhiều điểm lặn, san hô tập trung và có mặt hầu như đủ các loại san hô trên thế giới.', 890000, 'lan1.jpg', 1, 1, 0, '2019-04-16 10:41:14', '2019-04-16 10:41:14'),
(19, 'TOUR LẶN BIỂN NHA TRANG', 'tour-lan-bien-nha-trang', 2, 15, 0, 3, 4, 'Tour lặn biển Nha Trang giá rẻ uy tín khởi hành hằng ngày', 600000, 'lan1.jpg', 1, 1, 0, '2019-04-16 10:45:14', '2019-04-16 10:45:14'),
(20, 'Tour leo núi Langbiang - Đà Lạt', 'tour-leo-nui-langbiang-da-lat', 1, 5, 0, 2, 3, 'Đây là chương trình dành cho những bạn đam mê khám phá thiên nhiên và thử thác bản thân', 600000, 'langbiang1.jpg', 1, 1, 0, '2019-04-16 10:50:17', '2019-04-16 10:50:17');

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
  MODIFY `pic_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `place_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `schedule_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ticket_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tour`
--
ALTER TABLE `tour`
  MODIFY `tour_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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

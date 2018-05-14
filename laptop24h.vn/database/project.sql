-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2018 at 07:28 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` tinyint(4) NOT NULL,
  `published` tinyint(4) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `permissions` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `fullname`, `email`, `level`, `published`, `remember_token`, `created_at`, `updated_at`, `permissions`) VALUES
(1, 'admin', '$2y$10$cOhfUx5CyIkbQ9UXAzEAN.Fonl.mZNfYvAPnAU/UjrriJF3SqOeTy', 'admin', 'admin@gmail.com', 1, 1, 'h0kLdQdGlj3x14669DXHXpwe7rT8le7BFm8vSaFK', '2018-01-31 10:15:57', '2018-05-13 22:21:44', '');

-- --------------------------------------------------------

--
-- Table structure for table `cates`
--

CREATE TABLE `cates` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cates`
--

INSERT INTO `cates` (`id`, `name`, `alias`, `order`, `parent_id`, `keywords`, `description`, `published`, `created_at`, `updated_at`) VALUES
(1, 'LAPTOP', 'laptop', '1', 0, '1', '1', 1, '2018-01-31 10:18:13', '2018-01-31 10:18:13'),
(2, 'PHỤ KIỆN', 'phu-kien', '1', 0, '1', '1', 1, '2018-01-31 10:18:29', '2018-01-31 10:18:29'),
(3, 'ASUS', 'asus', '1', 1, '1', '1', 1, '2018-01-31 10:18:46', '2018-01-31 10:18:46'),
(4, 'DELL', 'dell', '1', 1, '1', '1', 1, '2018-01-31 10:18:57', '2018-01-31 10:18:57'),
(5, 'Apple Macbook', 'apple-macbook', '1', 1, '1', '1', 1, '2018-01-31 10:19:17', '2018-01-31 10:19:17'),
(6, 'MSI', 'msi', '1', 1, '1', '1', 1, '2018-01-31 10:19:33', '2018-01-31 10:19:33'),
(7, 'HP', 'hp', '1', 1, '1', '1', 1, '2018-01-31 10:19:45', '2018-01-31 10:19:45'),
(8, 'Bàn phím', 'ban-phim', '1', 2, '1', '1', 1, '2018-01-31 10:20:27', '2018-01-31 10:20:27'),
(9, 'Ổ CỨNG', 'o-cung', '1', 2, '1', '1', 1, '2018-01-31 10:20:41', '2018-01-31 10:20:41'),
(10, 'Chuột', 'chuot', '1', 2, '1', '1', 1, '2018-01-31 10:21:01', '2018-01-31 10:21:01'),
(11, 'CABLE KẾT NỐI', 'cable-ket-noi', '1', 2, '1', '1', 1, '2018-02-01 00:29:40', '2018-02-01 00:29:40'),
(12, 'Tai Nghe', 'tai-nghe', '1', 2, '1', '1', 1, '2018-02-01 01:03:42', '2018-02-01 01:03:42'),
(13, 'USB', 'usb', '1', 2, '1', '1', 1, '2018-02-01 02:09:45', '2018-02-01 02:09:45'),
(14, 'LENOVO', 'lenovo', '1', 1, '1', '1', 1, '2018-02-01 08:40:08', '2018-02-01 08:40:08');

-- --------------------------------------------------------

--
-- Table structure for table `chitetdonhangs`
--

CREATE TABLE `chitetdonhangs` (
  `id` int(10) UNSIGNED NOT NULL,
  `transaction_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chitetdonhangs`
--

INSERT INTO `chitetdonhangs` (`id`, `transaction_id`, `product_id`, `product_image`, `product_name`, `soluong`, `total`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '1517421008.MNYL2_Z_1.jpg', 'New macbook 12 MNYF2 Space Gray- Model 2017', 1, 28690000, 0, '2018-01-31 21:41:24', '2018-01-31 21:41:24'),
(2, 2, 20, '1517476695.bp1.jpg', 'Bàn phím chơi game Logitech G310 Atlas Dawn Đen', 5, 12450000, 1, '2018-02-01 20:37:36', '2018-02-01 20:38:26'),
(3, 3, 16, '1517474358.msi-ge72_2101d40ebeaa458b923a6aa59171fb90.jpg', 'MSI GE62 7RE Apache Pro (411XVN)', 1, 31700000, 0, '2018-02-06 02:31:00', '2018-02-06 02:31:00'),
(4, 3, 4, 'hp_envy_-_13-gold_351fd80a5f9f4133aad9d2c9a9cd6caa.png', 'HP Envy 13-ad138TU 3CH45PA ALU Vàng', 2, 39140000, 0, '2018-02-06 02:31:01', '2018-02-06 02:31:01'),
(5, 3, 11, '1517473139.mpxq2.jpg', 'MacBook Pro 13in MPXQ2 Space Gray- Model 2017', 5, 143450000, 0, '2018-02-06 02:31:01', '2018-02-06 02:31:01'),
(6, 4, 2, '1517448779.100000_laptop-asus-x541ua-go1372-00.jpg', 'Laptop ASUS X441NA-GA070T Đen (Hàng chính hãng)', 4, 30000000, 0, '2018-02-06 03:02:57', '2018-02-06 03:02:57'),
(7, 4, 17, '1517476267.ixpand_mini_ix40_5bc94294f002484ebfc2c1bdf7d9fa2d.jpg', '64GB USB SanDisk iXpand mini IX40', 1, 1352000, 0, '2018-02-06 03:02:57', '2018-02-06 03:02:57'),
(8, 5, 1, '1517421008.MNYL2_Z_1.jpg', 'New macbook 12 MNYF2 Space Gray- Model 2017', 1, 28690000, 0, '2018-02-07 07:51:08', '2018-02-07 07:51:08'),
(9, 5, 14, '1517473971.dell_inspiron_15_5570.png', 'Dell Inspiron 15 5570 244YV1 Silver', 4, 77040000, 0, '2018-02-07 07:51:08', '2018-02-07 07:51:08');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Hà Nội', NULL, NULL),
(2, 'Nam Định', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `citi_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `name`, `citi_id`, `created_at`, `updated_at`) VALUES
(1, 'Cầu Giấy', 1, NULL, NULL),
(2, 'Giao Thủy', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `name`, `image`, `link`, `published`, `created_at`, `updated_at`) VALUES
(1, 'ASUS', '1517419797.1515383900.icons-grey-08_1449038709.png', '1', 1, '2018-01-31 10:29:57', '2018-01-31 10:29:57'),
(2, 'MSI', '1517419810.1515383921.icons-grey-10_1449038618.png', '2', 1, '2018-01-31 10:30:10', '2018-01-31 10:30:10'),
(3, 'DELL', '1517419821.1515383861.icons-grey-04_1449038652.png', '1', 1, '2018-01-31 10:30:21', '2018-01-31 10:30:21'),
(4, 'HP', '1517419836.1515428840.icons-grey-02_1449038698.png', '1', 1, '2018-01-31 10:30:36', '2018-01-31 10:30:36'),
(5, 'THINKPAD', '1517419854.1515383848.icons-grey-03_1449038641.png', '1', 1, '2018-01-31 10:30:54', '2018-01-31 10:30:54'),
(6, 'Apple Macbook', '1517419868.1515383818.apple-icon_1454579568.png', '1', 1, '2018-01-31 10:31:08', '2018-01-31 10:31:08'),
(7, 'GAMING', '1517419893.1515383873.icons-grey-06_1449038598.png', '1', 1, '2018-01-31 10:31:33', '2018-01-31 10:31:33'),
(8, 'LENOVO', '1517419905.1515383887.icons-grey-07_1449038681.png', '1', 1, '2018-01-31 10:31:45', '2018-01-31 10:31:45');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_12_27_154018_create_cates_table', 1),
(4, '2017_12_27_154100_create_products_table', 1),
(5, '2017_12_27_154826_create_pro_images_table', 1),
(6, '2018_01_04_093130_create_slides_table', 1),
(7, '2018_01_07_090121_create_logos_table', 1),
(8, '2018_01_09_030151_create_tintucs_table', 1),
(9, '2018_01_17_024248_create_transactions_table', 1),
(10, '2018_01_17_024458_create_chitetdonhangs_table', 1),
(11, '2018_01_20_150757_create_cities_table', 1),
(12, '2018_01_20_151031_create_districts_table', 1),
(13, '2018_01_30_015253_create_socails_table', 1),
(14, '2018_01_31_084030_create_admins_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `price_new` int(11) NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kichthuoc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trongluong` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manhinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dophangiai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ocung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cacdohoa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diaquang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conggiaotiep` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `webcam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hedieuhanh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `baohanh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tinhtrang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `intro` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `published` int(11) NOT NULL,
  `stt` int(11) NOT NULL,
  `cate_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `alias`, `masp`, `price`, `price_new`, `color`, `kichthuoc`, `trongluong`, `manhinh`, `dophangiai`, `pin`, `ram`, `cpu`, `ocung`, `cacdohoa`, `diaquang`, `conggiaotiep`, `webcam`, `hedieuhanh`, `baohanh`, `tinhtrang`, `intro`, `content`, `image`, `keywords`, `description`, `published`, `stt`, `cate_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'New macbook 12 MNYF2 Space Gray- Model 2017', 'new-macbook-12-mnyf2-space-gray-model-2017', 'mac01', 28690000, 0, 'Ro', '282 x 197 x 15 mm', '0.9kg', '12-inch (diagonal) LED-backlit display with IPS technology', 'Retina FHD (1920 x1080)', 'About 9 hours', '8', 'Intel® Core™ i5-7300HQ Processor (6M Cache up to 3.50 GHz)', '256GB SSD', 'Intel HD Graphics 615', 'Không', '3.5 mm headphone jack , USB 3.1 Gen 1 (up to 5 Gbps)', '480p FaceTime camera', 'MacOS Sierra', '12 tháng', '', '<p>TApple cập nhật to&agrave;n bộ d&ograve;ng MacBook của h&atilde;ng l&ecirc;n hệ phần cứng sử dụng chip Kaby Lake của Intel.</p>', '<p>Tiết kiệm hơn khi mua online nhập m&atilde; giảm gi&aacute;.</p>\r\n\r\n<p>Nhập m&atilde;&nbsp;TET200&nbsp;gi&aacute; chỉ c&ograve;n&nbsp;28.490.000đ.</p>\r\n\r\n<p>(M&atilde; giảm gi&aacute; chỉ &aacute;p dụng cho mua h&agrave;ng trực tuyến tr&ecirc;n&nbsp;<a href=\"https://nama.vn/\">nama.vn</a>, kh&ocirc;ng &aacute;p dụng cho mua h&agrave;ng trực tiếp tại hệ thống Nam &Aacute; Store)</p>', '1517421008.MNYL2_Z_1.jpg', '1', '<p>Apple cập nhật to&agrave;n bộ d&ograve;ng MacBook của h&atilde;ng l&ecirc;n hệ phần cứng sử dụng chip Kaby Lake của Intel.<strong>&nbsp;</strong>MacBook 12 (2017) cũng kh&ocirc;ng l&agrave; ngoại lệ khi được thiết kế&nbsp;bộ vi xử l&yacute; Intel Core m3, i5 v&agrave; i7 thế hệ thứ 7 với c&ocirc;ng nghệ xử l&yacute; 14 nanomet.&nbsp;Điều n&agrave;y cho ph&eacute;p MacBook kết hợp hiệu quả năng lượng với hiệu suất cần thiết để thực hiện tất cả c&aacute;c loại nhiệm vụ.</p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000190192/file/macbook-10_grande.jpg\" /></p>\r\n\r\n<p><strong>M&agrave;n h&igrave;nh Retina&nbsp;</strong></p>\r\n\r\n<p>M&agrave;n h&igrave;nh Retina 12 inch tuyệt đẹp tr&ecirc;n MacBook thực sự l&agrave; điều cần quan t&acirc;m.&nbsp;Với hơn 3 triệu điểm ảnh v&agrave; kh&ocirc;ng viền m&agrave;n h&igrave;nh, mỗi bức ảnh đều nhảy ra khỏi m&agrave;n h&igrave;nh với chi tiết phong ph&uacute;, rực rỡ.&nbsp;Tất cả tr&ecirc;n một m&agrave;n h&igrave;nh Retina mỏng đ&aacute;ng kinh ngạc.</p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000190192/file/macbook-1024x576_grande.jpg\" /></p>\r\n\r\n<p><strong>Kiến tr&uacute;c kh&ocirc;ng quạt</strong></p>\r\n\r\n<p>MacBook được x&acirc;y dựng để c&aacute;c thao t&aacute;c gần như kh&ocirc;ng g&acirc;y ra tiếng ồn.&nbsp;Bộ xử l&yacute; của n&oacute; chạy chỉ với 5 watt điện, tạo ra &iacute;t nhiệt hơn v&agrave; loại bỏ sự cần thiết phải c&oacute; một quạt để l&agrave;m m&aacute;t m&aacute;y t&iacute;nh.&nbsp;Thay v&agrave;o đ&oacute;, bảng logic nằm tr&ecirc;n một tấm graphite dị hướng gi&uacute;p giải t&aacute;n bất kỳ nhiệt n&agrave;o.&nbsp;V&igrave; vậy, bạn sẽ kh&ocirc;ng nghe thấy một tiếng ồn n&agrave;o trong khi MacBook của bạn l&agrave; kh&oacute; l&agrave;m việc.</p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000190192/file/2_grande.jpg\" /></p>\r\n\r\n<p><strong>Lưu trữ v&agrave; bộ nhớ</strong></p>\r\n\r\n<p>Mặc d&ugrave; c&aacute;c th&agrave;nh phần của n&oacute; rất nhỏ, MacBook c&oacute; khả năng ấn tượng để lưu trữ c&aacute;c tệp tin v&agrave; chạy c&aacute;c ứng dụng m&agrave; bạn cần mỗi ng&agrave;y.&nbsp;Với tối đa 16GB bộ nhớ trong LPDDR3 1866MHz v&agrave; bộ nhớ SSD 512GB, bạn sẽ c&oacute; được chiếc notebook mỏng v&agrave; nhẹ với hiệu năng cao.</p>\r\n\r\n<p><strong>Ắc quy</strong></p>\r\n\r\n<p>Để đạt được tuổi thọ pin cả ng&agrave;y 10h sử dụng li&ecirc;n tục, Macbook 12 inch cần phải sử dụng mỗi milimet kh&ocirc;ng gian b&ecirc;n trong.&nbsp;V&igrave; vậy, Macbook 12 inch sở hữu một tế b&agrave;o pin ti&ecirc;n tiến, được tạo h&igrave;nh ph&ugrave; hợp với đường viền cụ thể của v&aacute;ch ngăn.&nbsp;Kết quả l&agrave; năng lượng pin của pin hơn 35% so với trước đ&acirc;y.</p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000190192/file/1_grande.jpg\" /></p>\r\n\r\n<p><strong>Cải tiến cơ chế b&agrave;n ph&iacute;m butterfly thế hệ thứ 2, ch&igrave;a kh&oacute;a b&agrave;n ph&iacute;m</strong></p>\r\n\r\n<p>Với cơ chế bướm thế hệ thứ hai của Macbook 12 inch, trải nghiệm b&agrave;n ph&iacute;m được tinh chế để tạo sự thoải m&aacute;i v&agrave; đ&aacute;p ứng tốt hơn.&nbsp;V&igrave; vậy, khi ng&oacute;n tay của bạn nhấn ph&iacute;m, n&oacute; sẽ trượt xuống v&agrave; bật l&ecirc;n trở lại tạo cảm gi&aacute;c như bạn lướt tr&ecirc;n c&aacute;c ph&iacute;m với một chuyển động sắc n&eacute;t m&agrave; bạn sẽ đ&aacute;nh gi&aacute; cao ngay khi bạn bắt đầu nhập.</p>\r\n\r\n<p><strong>C&aacute;c lực Touch trackpad nhấn một ch&uacute;t s&acirc;u hơn, l&agrave;m nhiều hơn</strong></p>\r\n\r\n<p>Khả năng cảm ứng &aacute;p lực của trackpad Force Touch cho ph&eacute;p bạn n&oacute;i với MacBook của m&igrave;nh những g&igrave; bạn muốn n&oacute; l&agrave;m dựa tr&ecirc;n những kh&aacute;c biệt tinh tế về &aacute;p suất.&nbsp;Nhấp v&agrave;o bất cứ nơi n&agrave;o để thực hiện nhiều t&aacute;c vụ trong c&aacute;c ứng dụng kh&aacute;c nhau, tất cả đều tr&ecirc;n c&ugrave;ng một bề mặt m&agrave; kh&ocirc;ng cần ng&oacute;n tay.&nbsp;V&agrave; C&ocirc;ng cụ Taptic cung cấp phản hồi haptic cho biết cảm gi&aacute;c li&ecirc;n lạc với những g&igrave; bạn thấy tr&ecirc;n m&agrave;n h&igrave;nh.</p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000190192/file/macbook-rosa-1_grande.jpg\" /></p>\r\n\r\n<p>C&aacute;c cử chỉ Đa chạm gi&uacute;p bạn dễ d&agrave;ng v&agrave; trực quan để tương t&aacute;c với MacBook của bạn.&nbsp;Cuộn qua bất kỳ hướng n&agrave;o, vuốt qua c&aacute;c trang web, chụm, xoay hoặc nhấn Force để mở kh&oacute;a c&aacute;c t&iacute;nh năng hữu &iacute;ch kh&aacute;c.</p>\r\n\r\n<p><strong>Kết nối với mọi thứ bạn y&ecirc;u th&iacute;ch bất cứ nơi n&agrave;o bạn đi</strong></p>\r\n\r\n<p>Với c&ocirc;ng nghệ mạnh mẽ trong một vỏ bao nhỏ gọn cực kỳ, MacBook được thiết kế để ph&ugrave; hợp ho&agrave;n hảo v&agrave;o một thế giới m&agrave; chỉ l&agrave; về bất cứ điều g&igrave; bạn l&agrave;m với một m&aacute;y t&iacute;nh x&aacute;ch tay c&oacute; thể được thực hiện qua kh&ocirc;ng kh&iacute;.&nbsp;Đối với những khoảnh khắc khi bạn cần phải cắm, USB-C g&oacute;i một tấn năng lực v&agrave;o một trong những c&aacute;p chuyển đổi nhỏ v&agrave; thuận tiện.</p>\r\n\r\n<p>&nbsp;<img src=\"https://file.hstatic.net/1000169499/file/acd_grande.jpg\" /></p>', 1, 1, 5, 1, '2018-01-31 10:50:08', '2018-01-31 10:50:08'),
(2, 'Laptop ASUS X441NA-GA070T Đen (Hàng chính hãng)', 'laptop-asus-x441naga070t-den-hang-chinh-hang', 'as22', 7500000, 0, 'Black', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '121', '1', '<p>1</p>', '<p>1</p>', '1517448779.100000_laptop-asus-x541ua-go1372-00.jpg', '1', '<p>1</p>', 1, 1, 3, 1, '2018-01-31 18:32:59', '2018-02-01 01:49:35'),
(3, 'Cáp kết nối', 'cap-ket-noi', 'cap01', 80000, 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '<p>1</p>', '<p>11</p>', '1517451074.41zCSe59-4L._US500_.jpg', '1', '<p>1</p>', 1, 1, 11, 2, '2018-01-31 19:11:14', '2018-02-07 08:02:34'),
(4, 'HP Envy 13-ad138TU 3CH45PA ALU Vàng', 'hp-envy-13ad138tu-3ch45pa-alu-vang', 'hp01', 19570000, 0, 'Gold', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '<p>1</p>', '<p>1</p>', 'hp_envy_-_13-gold_351fd80a5f9f4133aad9d2c9a9cd6caa.png', '1', '<p>1</p>', 1, 1, 7, 1, '2018-01-31 19:11:52', '2018-02-01 01:50:33'),
(5, 'Asus Vivobook S510UA-BQ111T Gold (Hàng chính hãng)', 'asus-vivobook-s510uabq111t-gold-hang-chinh-hang', 'as1', 12440000, 0, 'Rose Gold', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '<p>1</p>', '<p><em><strong>Chuột quang USB + T&uacute;i m&aacute;y t&iacute;nh x&aacute;ch tay</strong></em></p>', 's510ua.jpg', '1', '<p>1</p>', 1, 1, 3, 1, '2018-01-31 19:12:25', '2018-02-01 01:45:30'),
(6, 'Macbook Air 13-inch MQD32- Model 2017 (Hàng chính hãng)', 'macbook-air-13inch-mqd32-model-2017-hang-chinh-hang', 'mac04', 19190000, 0, 'Silver', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '<p>Apple Macbook Air 2017 c&oacute; thiết kế tối giản nhưng lại v&ocirc; c&ugrave;ng sang trọng</p>', '<p>Tiết kiệm hơn khi mua online nhập m&atilde; giảm gi&aacute;.</p>\r\n\r\n<p>Nhập m&atilde;&nbsp;TET200&nbsp;gi&aacute; chỉ c&ograve;n&nbsp;18.990.000đ.</p>', '1517452420.1.u5395.d20170717.t090632.158758.jpg', '1', '<p><strong>Thiết kế tinh tế v&agrave; hiện đại</strong></p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000169499/file/145285269401_3781319.jpg\" /></p>\r\n\r\n<p>Apple Macbook Air 2017 c&oacute; thiết kế tối giản nhưng lại v&ocirc; c&ugrave;ng sang trọng. To&agrave;n th&acirc;n m&aacute;y được gia c&ocirc;ng từ nh&ocirc;m nguy&ecirc;n khối một c&aacute;ch tỉ mỉ v&agrave; ch&iacute;nh x&aacute;c, tạo n&ecirc;n vẻ liền lạc v&agrave; chắc chắn lại vừa thanh tho&aacute;t, sang trọng. N&uacute;t Power khởi động m&aacute;y được t&iacute;ch hợp lu&ocirc;n v&agrave;o g&oacute;c tr&ecirc;n b&ecirc;n phải của b&agrave;n ph&iacute;m, vừa gọn vừa thẩm mỹ. Cả phần m&agrave;n h&igrave;nh cũng được gia c&ocirc;ng kiểu Unibody hợp kim nh&ocirc;m nguy&ecirc;n khối, c&aacute;c cạnh được bo tr&ograve;n v&agrave; d&aacute;t mỏng tạo n&ecirc;n tổng thể m&aacute;y một thiết kế tuyệt mỹ, c&oacute; thể n&oacute;i l&agrave; đẹp nhất trong c&aacute;c d&ograve;ng Ultrabook.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Cấu h&igrave;nh mạnh mẽ, hiệu năng ổn định</strong></p>\r\n\r\n<p><strong><img src=\"https://file.hstatic.net/1000169499/file/1452852709674_9789822.jpg\" /></strong></p>\r\n\r\n<p>Apple Macbook Air 2017 MQD32 được trang bị bộ vi xử l&yacute; Intel Core i5 dual-core 1.8GHz, đạt tối đa 2.9GHz, Cache 3MB, RAM 8GB 1600MHz, card đồ họa Intel HD Graphics 6000 gi&uacute;p m&aacute;y c&oacute; thể xử l&yacute; nhanh ch&oacute;ng v&agrave; mượt m&agrave; c&aacute;c t&aacute;c vụ của người d&ugrave;ng như soạn thảo văn bản, chơi game, lướt web, nghe nhạc, Autocad, Photoshop&hellip; Ngo&agrave;i ra, m&aacute;y c&ograve;n được trang bị ổ cứng 128GB SSD cung cấp cho người d&ugrave;ng kh&ocirc;ng gian rộng r&atilde;i để lưu trữ dữ liệu hay những bộ phim y&ecirc;u th&iacute;ch.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Kết nối nhanh ch&oacute;ng với Thunderbolt 2 v&agrave; USB 3.0</strong></p>\r\n\r\n<p><strong><img src=\"https://file.hstatic.net/1000169499/file/1452852746191_5329133.jpg\" /></strong></p>\r\n\r\n<p>M&aacute;y sử dụng hệ điều h&agrave;nh macOS Sierra c&oacute; giao diện đẹp, bố cục được sắp xếp gọn g&agrave;ng. Thiết bị c&ograve;n cho ph&eacute;p đồng bộ dữ liệu giữa Mac v&agrave; c&aacute;c thiết bị chạy iOS, hỗ trợ nhiều ứng dụng chuy&ecirc;n biệt. Hơn nữa, thiết bị trang bị 1 cổng Thunderbolt độc quyền c&oacute; tốc độ truyền tải dữ liệu nhanh gấp 2 lần USB 3.0 hiện nay, 2 cổng USB 3.0 n&ecirc;n bạn c&oacute; thể chuyển đổi dễ d&agrave;ng từ cổng Thunderbolt th&ocirc;ng qua c&aacute;p chuyển đổi.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Cảm ứng Multi-Touch v&agrave; hơn thế nữa</strong></p>\r\n\r\n<p><strong><img src=\"https://file.hstatic.net/1000169499/file/1452852768622_5430779.jpg\" /></strong></p>\r\n\r\n<p>C&aacute;c động t&aacute;c của Multi-Touch trong macOS Sierra l&agrave;m cho tất cả mọi thứ bạn l&agrave;m tr&ecirc;n MacBook Air trực quan hơn, trực tiếp, v&agrave; vui vẻ. V&agrave; Multi-Touch trackpad rộng r&atilde;i được thiết kế ho&agrave;n hảo cho họ, cho d&ugrave; đ&oacute; l&agrave; một swipe ba ng&oacute;n tay để k&iacute;ch hoạt Mission Control hoặc một nh&uacute;m bốn ng&oacute;n tay để xem tất cả c&aacute;c ứng dụng của bạn trong Launchpad. Phản ứng cử chỉ được mịn m&agrave;ng v&agrave; thực tế.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>B&agrave;n ph&iacute;m Backlight nổi bật</strong></p>\r\n\r\n<p><strong><img src=\"https://file.hstatic.net/1000169499/file/1452852945827_2752910.jpg\" /></strong></p>\r\n\r\n<p>V&agrave; b&agrave;n ph&iacute;m l&agrave; backlit, do đ&oacute; bạn c&oacute; thể g&otilde; trong điều kiện &aacute;nh s&aacute;ng yếu một c&aacute;ch dễ d&agrave;ng. Một cảm biến t&iacute;ch hợp trong ph&aacute;t hiện những thay đổi trong &aacute;nh s&aacute;ng m&ocirc;i trường xung quanh v&agrave; điều chỉnh độ s&aacute;ng b&agrave;n ph&iacute;m v&agrave; m&agrave;n h&igrave;nh tự động, đem lại cho bạn sự chiếu s&aacute;ng ho&agrave;n hảo trong bất kỳ m&ocirc;i trường.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Th&ocirc;ng số kỹ thuật:</strong></p>\r\n\r\n<p>- 13.3-inch LED-backlit widescreen display with a 1440 x 960 pixels</p>\r\n\r\n<p>- 1.8GHz dual-core Intel Core i5, Turbo Boost up to 2.9GHz</p>\r\n\r\n<p>- 8GB 1600MHz</p>\r\n\r\n<p>- Intel HD Graphics 6000</p>\r\n\r\n<p>- 128GB PCIe flash memory</p>\r\n\r\n<p>- 720p FaceTime HD camera</p>\r\n\r\n<p>- 802.11ac Wi-Fi, IEEE 802.11a / b / g / n Compliant</p>\r\n\r\n<p>- Bluetooth 4.0<br />\r\n2 USB 3.0, Thunderbolt and MagSafe 2 2 sockets</p>\r\n\r\n<p>- SDXC memory card slot</p>\r\n\r\n<p>- 3.5 mm headphone jack. Support for Apple iPhone headset with remote control</p>\r\n\r\n<p>- Stereo speakers and two built-in microphone</p>\r\n\r\n<p>- Full-size backlit keyboard ambient light sensor</p>\r\n\r\n<p>- Multi-touch trackpad<br />\r\n54 Wh lithium polymer battery, for up to 12 hours wireless web browsing and up to 30 days standby time</p>\r\n\r\n<p>- Mid 2017 -malliversio</p>', 1, 1, 5, 1, '2018-01-31 19:33:40', '2018-02-01 01:42:16'),
(7, 'Apple Magic Keyboard- MLA22', 'apple-magic-keyboard-mla22', 'bp01', 2650000, 0, 'White', '*Height: 0.16–0.43 inch (0.41–1.09 cm) * Width: 10.98 inches (27.9 cm) * Depth: 4.52 inches (11.49 cm)', '0.51 pound (0.231 kg)*', '', '', '', 'Null', '', '', '', '', 'Bluetooth * Lightning port * Wireless - System Requirements:  * Bluetooth-enabled Mac computer with OS X 10.11 or later iOS devices with iOS 9.1 or later', '', '', '', '', '<p>1</p>', '<p>1</p>', '1517469956.mla22.jpg', '1', '<p>1</p>', 1, 1, 8, 1, '2018-02-01 00:25:56', '2018-02-01 00:25:56'),
(8, 'LIGHTNING To USB Cable MD818', 'lightning-to-usb-cable-md818', 'cap02', 590000, 0, 'White', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '', '<p>* D&agrave;nh cho&nbsp;iPhone, iPad, iPod&nbsp;<br />\r\n* Thiết kế: Kiểu d&aacute;ng đẹp, nhỏ, gọn<br />\r\n* Thuận tiện khi di chuyển, mang theo<br />\r\n* Kết nối cổng Lighning, USB&nbsp;</p>', '<p>1</p>', '1517472142.lightning_to_usb_cable_md819zma_83ca65cce65249a2872814023563ae5b.jpg', '1', '<p>1</p>', 1, 1, 11, 1, '2018-02-01 01:02:22', '2018-02-01 01:02:22'),
(9, 'Tai nghe Airpods MMEF2', 'tai-nghe-airpods-mmef2', 'tn01', 4660000, 0, 'White', '', 'Charging Case: 1.34 ounces (38 g), AirPods (each): 0.14 ounces (4 g)', '', '', '5h', 'Null', '', '', '', '', '', '', '', '', '', '<p>* Tai nghe kh&ocirc;ng d&acirc;y kết nối BlueTooth<br />\r\n* Hỗ trợ&nbsp;để tắt/mở nhạc, trả lời/ngắt điện thoại<br />\r\n* Chất liệu nhựa b&oacute;ng cao cấp<br />\r\n* Kết nối: Lightning&nbsp;to USB Cable</p>', '<p>1</p>', '1517472507.airpods.jpg', '111', '<p><strong>Cảm nhận về kiểu d&aacute;ng AirPods</strong><br />\r\n<br />\r\nAirPods c&oacute; h&igrave;nh d&aacute;ng giống tai nghe EarPods cũ nhưng lại kh&ocirc;ng d&acirc;y, v&igrave; thế người d&ugrave;ng sẽ kh&ocirc;ng dễ nhận ra cảm gi&aacute;c m&igrave;nh đang đeo tai nghe nếu như kh&ocirc;ng nh&igrave;n v&agrave;o gương. Khi nh&igrave;n từ một ph&iacute;a, AirPods tr&ocirc;ng giống như chiếc tai nghe Bluetooth đến từ tương lai, c&ograve;n khi nh&igrave;n cả hai b&ecirc;n th&igrave; mang hơi hướm b&ocirc;ng tai phong c&aacute;ch Hipster, hoặc tẩu thuốc hay trang sức trong film khoa học giả tưởng, thậm ch&iacute; tệ hơn.</p>\r\n\r\n<p><img src=\"https://store.storeimages.cdn-apple.com/4974/as-images.apple.com/is/image/AppleInc/aos/published/images/M/ME/MMEF2/MMEF2?wid=572&amp;hei=572&amp;fmt=jpeg&amp;qlt=95&amp;op_sharpen=0&amp;resMode=bicub&amp;op_usm=0.5,0.5,0,0&amp;iccEmbed=0&amp;layer=comp&amp;.v=1473705678057\" /></p>\r\n\r\n<p><strong>Đ&aacute;nh gi&aacute; về chất &acirc;m</strong><br />\r\n<br />\r\nChất lượng &acirc;m thanh AirPods kh&aacute; ổn, t&ocirc;i thực sự th&iacute;ch nghe nhạc với n&oacute;. T&ocirc;i dần nhận ra m&igrave;nh th&iacute;ch d&ugrave;ng AirPods hơn tai nghe d&acirc;y truyền thống bởi sự thoải m&aacute;i linh hoạt. Dĩ nhi&ecirc;n, AirPods cũng tạo ra một số tiếng ồn khi đi bộ v&agrave; thỉnh thoảng th&igrave; nhạc tự tắt ngo&agrave;i mong muốn.<br />\r\n<br />\r\nThời lượng pin 5 giờ cũng kh&ocirc;ng thật sự ấn tượng tuy nhi&ecirc;n n&oacute; kh&aacute; ổn đối với một tai nghe c&oacute; thiết kế nhỏ như vậy. Bộ sạc thoạt nh&igrave;n tr&ocirc;ng kh&aacute; giống hộp chỉ nha khoa, n&oacute; kh&ocirc;ng chỉ cung cấp đủ điện năng cho 24h sử dụng m&agrave; c&ograve;n trang bị t&iacute;nh năng sạc nhanh cho n&ecirc;n t&ocirc;i hầu như kh&ocirc;ng bao giờ phải lo lắng tai nghe hết pin trong cả ng&agrave;y. Khi n&agrave;o kh&ocirc;ng cần d&ugrave;ng, bạn chỉ cần đặt tai nghe v&agrave;o hộp v&agrave; AirPods sẽ sẵn s&agrave;ng cho lần d&ugrave;ng kế tiếp.</p>\r\n\r\n<p><img src=\"https://c.slashgear.com/wp-content/uploads/2016/09/i-B9zzTVk-X3-980x420.jpg\" style=\"height:254px; width:593px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>AirPods c&oacute; tương th&iacute;ch với thiết bị Bluetooth kh&aacute;c?</strong><br />\r\n<br />\r\nAirPods hoạt động tốt với c&aacute;c Smartphone, tablet, computer v&agrave; c&aacute;c thiết bị kh&ocirc;ng d&acirc;y kh&aacute;c. T&ocirc;i thử kết nối n&oacute; với Galaxy S7 Edge v&agrave; tai nghe hoạt động tốt với t&iacute;nh năng điều khiển nhạc cũng như nghe gọi. Nhưng khi bạn kết nối tai nghe với thiết bị Apple, bạn nhận được c&aacute;c t&iacute;nh năng đặc biệt như auto-pairing. Ngo&agrave;i ra, khi d&ugrave;ng với thiết bị kh&aacute;c Apple, AirPods sẽ kh&ocirc;ng tự tắt/mở khi bạn th&aacute;o tai nghe khỏi tai.</p>\r\n\r\n<p><img src=\"https://www.popsci.com/sites/popsci.com/files/styles/large_1x_/public/images/2016/09/airpods.jpg?itok=U9LL1sLt&amp;fc=50,50\" style=\"height:248px; width:611px\" /><br />\r\n<br />\r\n<strong>Auto-Pairing hoạt động như thế n&agrave;o?</strong><br />\r\n<br />\r\nAirPods trang bị c&aacute;c t&iacute;nh năng m&agrave; hầu hết c&aacute;c Bluetooth Headphones (ngoại trừ c&aacute;c model mới của Beats) kh&ocirc;ng c&oacute;: tự động kết nối với thiết bị Apple iOS 10 hoặc MacOs Sierra.</p>\r\n\r\n<p>T&ocirc;i d&ugrave;ng t&iacute;nh năng n&agrave;y kh&aacute; nhiều lần trong ng&agrave;y. Đế kết nối với Apple device lần đầu, ta chỉ việc mở hộp đựng AirPod v&agrave; iPhone sẽ hỏi bạn c&oacute; muốn kết nối hay kh&ocirc;ng. Tr&ecirc;n iPhone 7 v&agrave; 7 Plus, auto pairing tự động kết nối. Sau khi kết nối, headphones sẽ hoạt động với tất cả thiết bị tương th&iacute;ch Apple th&ocirc;ng qua iCloud. Nhưng để d&ugrave;ng những thiết bị n&agrave;y, bạn cần chọn nguồn &acirc;m thanh. T&iacute;nh năng n&agrave;y rất c&oacute; &iacute;ch nếu như bạn cũng đang sở hữu Apple watch.</p>\r\n\r\n<p><img src=\"https://static5.businessinsider.com/image/57d41e36077dcc39128b4b62-2400/img_0554.jpg\" style=\"height:450px; width:600px\" /></p>\r\n\r\n<p><strong>V&igrave; sao Apple Watch v&agrave; AirPods l&agrave; cặp đ&ocirc;i ho&agrave;n hảo?</strong><br />\r\n<br />\r\nAirPods tự động kết nối với iPhone v&agrave; Apple v&agrave; đ&oacute;ng vai tr&ograve; kết nối cho cả hai thiết bị, ở kh&iacute;a cạnh n&agrave;y, AiPods dường như đ&oacute;ng vai tr&ograve; l&agrave; thiết bị mở rộng cho điện thoại v&agrave; đồng hồ Apple. Kết nối tự động tạo n&ecirc;n cảm gi&aacute;c liền mạch cho người d&ugrave;ng ngay chỉ với bộ đ&ocirc;i Apple watch v&agrave; AirPods.<br />\r\n<br />\r\nSự kết hợp giữa Apple Watch v&agrave; AirPods thật sự ho&agrave;n hảo khi giải quyết hạn chế của Apple Watch bằng chế độ đ&agrave;m thoại rảnh tay v&igrave; khi kết hợp Apple Watch với headphones kh&aacute;c, Apple Watch sẽ giữ lu&ocirc;n vai tr&ograve; điện thoại thay cho headphones.<br />\r\n<br />\r\nThỉnh thoảng c&oacute; tiếng Click, v&agrave; t&ocirc;i nhận ra AirPods đ&atilde; kết nối với những thiết bị kh&aacute;c của m&igrave;nh. Đ&ocirc;i khi chế độ thoại rảnh tay handoff thực hiện chậm v&agrave; t&ocirc;i bị nhỡ cuộc gọi. Nhưng khả năng trả lời cuộc gọi bằng AirPods đ&atilde; gi&uacute;p Apple Watch trở th&agrave;nh thiết bị li&ecirc;n lạc thực sự.</p>\r\n\r\n<p><img src=\"https://webrazzi.com/wp-content/uploads/2016/09/Apple-watch-series-2-Airpods.jpg\" style=\"height:341px; width:620px\" /></p>\r\n\r\n<p><strong>Vậy tại sao lại cần mua Apple AirPods?</strong><br />\r\n<br />\r\nR&otilde; r&agrave;ng l&agrave; c&oacute; v&ocirc; số lựa chọn tr&ecirc;n thị trường bởi c&aacute;c Bluetooth headphones đang kh&aacute; phổ biến. AirPods c&oacute; chất &acirc;m tốt, v&agrave; hiện tai chưa thể cho đ&aacute;nh gi&aacute; bởi cần phải so s&aacute;nh trực tiếp với c&aacute;c đối thủ. AirPods c&oacute; gi&aacute; cạnh tranh so với Beats X v&agrave; Bose SoundSport Wireless. L&yacute; do hợp l&yacute; nhất lựa chọn AirPods l&agrave; tiện lợi để gọi điện thoại v&agrave; microphones giảm ồn ở cả 2 b&ecirc;n. AirPods l&agrave;m việc tốt mặc d&ugrave; thỉnh thoảng t&ocirc;i được bảo rằng tiếng n&oacute;i hơi digitized hoặc fuzzy. Ở g&oacute;c nh&igrave;n kh&aacute;c, AirPods nh&igrave;n kh&aacute; gọn v&agrave; c&oacute; thể đổi lẫn nhau v&agrave; mỗi bud kết nối độc lập.</p>\r\n\r\n<p><img src=\"https://store.storeimages.cdn-apple.com/4974/as-images.apple.com/is/image/AppleInc/aos/published/images/M/ME/MMEF2/MMEF2_AV5?wid=1000&amp;hei=1000&amp;fmt=jpeg&amp;qlt=95&amp;op_sharpen=0&amp;resMode=bicub&amp;op_usm=0.5,0.5,0,0&amp;iccEmbed=0&amp;layer=comp&amp;.v=1472255313106\" style=\"height:500px; width:500px\" /></p>', 1, 1, 12, 1, '2018-02-01 01:08:27', '2018-02-01 01:08:27'),
(10, 'Beats solo3 wireless on-ear MNEP2 (Gloss White)', 'beats-solo3-wireless-onear-mnep2-gloss-white', 'tn02', 4990000, 0, 'White', '1', '1', '', '', '', 'Null', '', '', '', '', '', '', '', '', '', '<p>* Tai nghe kh&ocirc;ng d&acirc;y kết nối BlueTooth<br />\r\n* Thời lượng Pin l&ecirc;n đến 40g khi nghe li&ecirc;n tục<br />\r\n* Kiểu d&aacute;ng đẹp, thời trang c&oacute; thể gập lại mang đi khắp nơi<br />\r\n* N&uacute;t điều chỉnh được sắp xếp hợp l&yacute;, tiện &iacute;ch<br />\r\n* Nhận cuộc gọi, điều khiển &acirc;m nhạc<br />\r\n* K&iacute;ch hoạt Siri với c&aacute;c điều khiển đa chức năng</p>', '<p>1</p>', '1517472660.beats_solo3_wireless_on-ear_headphones-_white.jpg', '123', '<p>Beats solo3 wireless on ear headphones&nbsp;đ&atilde; được Beats v&agrave; Apple thiết kế đưa sản phẩm n&agrave;y v&agrave;o kỷ nguy&ecirc;n c&ocirc;ng nghệ kh&ocirc;ng d&acirc;y. Với h&agrave;ng loạt c&aacute;c t&iacute;nh năng vượt trội như: chuẩn kết nối tối ưu, bộ tinh chỉnh &acirc;m thanh sắp xếp hợp l&yacute;. C&ugrave;ng với cộng nghệ chống ồn tối ưu gi&uacute;p bạn giảm những tạp &acirc;m nhiễm từ b&ecirc;n ngo&agrave;i.&nbsp;</p>\r\n\r\n<p>&Acirc;m thanh trong, mượt kết hợp với &acirc;m bass trầm ho&agrave;n hảo cho ph&eacute;p bạn thưởng thức những b&agrave;i h&aacute;t y&ecirc;u th&iacute;ch bất cứ l&uacute;c n&agrave;o với&nbsp;thời lượng pin đ&aacute;ng kinh ngạc l&ecirc;n đến 40h nghe li&ecirc;n tục. B&ecirc;n cạnh đ&oacute; c&aacute;c n&uacute;t điều chỉnh được sắp xếp hợp l&yacute;, tiện &iacute;ch. Bạn c&oacute; thể nhận cuộc gọi, điều khiển &acirc;m nhạc theo &iacute; m&igrave;nh th&iacute;ch hoặc k&iacute;ch hoạt Siri với c&aacute;c điều khiển đa chức năng.</p>\r\n\r\n<p>Kiểu d&aacute;ng thời trang, c&oacute; thể gập co gọn lại gi&uacute;p bạn mang n&oacute; đi bất cứ đ&acirc;u bạn th&iacute;ch.&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://store.storeimages.cdn-apple.com/4662/as-images.apple.com/is/image/AppleInc/aos/published/images/M/NE/MNEP2/MNEP2_AV4?wid=1000&amp;hei=1000&amp;fmt=jpeg&amp;qlt=95&amp;op_sharpen=0&amp;resMode=bicub&amp;op_usm=0.5,0.5,0,0&amp;iccEmbed=0&amp;layer=comp&amp;.v=1483642689970\" style=\"height:500px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://images.store.hmv.com/app_/responsive/HMVStore/media/product/1136/02-1136.jpg?w=500\" style=\"height:500px; width:500px\" /></p>', 1, 1, 12, 1, '2018-02-01 01:11:00', '2018-02-01 01:11:00'),
(11, 'MacBook Pro 13in MPXQ2 Space Gray- Model 2017', 'macbook-pro-13in-mpxq2-space-gray-model-2017', 'mac03', 28690000, 0, 'Dark Grey', '* Height: 0.59 inch (1.49 cm) * Width: 11.97 inches (30.41 cm) * Depth: 8.36 inches (21.24 cm)', '1.37 kg', '13', 'Full HD', '8h', '8', '2.3GHz dual-core Intel Core i5, Turbo Boost up to 3.6GHz, with 64MB of eDRAM', '128GB PCIe-based onboard SSD Configurable to 256GB, 512GB, or 1TB SSD', 'Intel Iris Plus Graphics 640', 'Không', 'Charging * DisplayPort * Thunderbolt (up to 40 Gbps) * USB 3.1 Gen 2 (up to 10 Gbps) Keyboard and Trackpad: 	* Full-size backlit keyboard with: - 78 (U.S.) or 79 (ISO) keys including 12 function keys and 4 arrow keys', 'HD webcam', 'MacOS Sierra', '12 tháng', '', '<h2><span style=\"font-size:14px\">Apple Macbook Pro 2017 l&agrave; d&ograve;ng sản phẩm cao cấp với thiết kế kim loại nguy&ecirc;n khối, chip i5 thế hệ thứ 7 v&agrave; d&ugrave;ng ổ SSD dung lượng 128 GB mang đến sự bền bỉ v&agrave; mạnh mẽ khi sử dụng.</span></h2>', '<p>Tiết kiệm hơn khi mua online nhập m&atilde; giảm gi&aacute;.</p>\r\n\r\n<p>Nhập m&atilde;&nbsp;TET200&nbsp;gi&aacute; chỉ c&ograve;n&nbsp;28.490.000đ.</p>\r\n\r\n<p>(M&atilde; giảm gi&aacute; chỉ &aacute;p dụng cho mua h&agrave;ng trực tuyến tr&ecirc;n&nbsp;<a href=\"https://nama.vn/\">nama.vn</a>, kh&ocirc;ng &aacute;p dụng cho mua h&agrave;ng trực tiếp tại hệ thống Nam &Aacute; Store)</p>', '1517473139.mpxq2.jpg', '1', '<h2><strong>Apple Macbook Pro 2017 l&agrave; d&ograve;ng sản phẩm cao cấp với thiết kế kim loại nguy&ecirc;n khối, chip i5 thế hệ thứ 7 v&agrave; d&ugrave;ng ổ SSD dung lượng 128 GB mang đến sự bền bỉ v&agrave; mạnh mẽ khi sử dụng.</strong></h2>\r\n\r\n<h3><strong>Thiết kế đặc trưng Unibody từ Apple</strong></h3>\r\n\r\n<p><strong><img src=\"https://file.hstatic.net/1000169499/file/1_08ec4713bcb34ee8a7faf9079b89b66c.jpg\" /></strong></p>\r\n\r\n<p>Laptop Apple Macbook Pro 2017 được trang bị lớp vỏ nh&ocirc;m nguy&ecirc;n khối Unibody rất đẹp v&agrave; chắc chắn. Thiết kế mỏng, nhẹ v&agrave; cực gọn g&agrave;ng chỉ 1.49 cm, trọng lượng l&agrave; 1.37 kg rất tiện lợi khi di chuyển.</p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000169499/file/2_acfd0de2b785463d9649b8fee94cd5f7.jpg\" /></p>\r\n\r\n<p>Apple Macbook Pro 2017 mang trong m&igrave;nh một sự sang trọng v&agrave; đẳng cấp vượt trội đ&uacute;ng nghĩa của từ &quot;Pro&quot; so với phần c&ograve;n lại.</p>\r\n\r\n<h3><strong>Đ&egrave;n nền b&agrave;n ph&iacute;m</strong></h3>\r\n\r\n<p>Đ&egrave;n LED nền đẹp mắt tr&ecirc;n b&agrave;n ph&iacute;m gi&uacute;p tăng độ ch&iacute;nh x&aacute;c khi d&ugrave;ng ph&iacute;m nhất l&agrave; v&agrave;o ban đ&ecirc;m, ngo&agrave;i ra đ&egrave;n ph&iacute;m c&ograve;n tạo điểm nhấn kh&aacute;c biệt v&agrave; đầy sang trọng gi&uacute;p chiếc Macbook Pro 2017 c&agrave;ng long lanh hơn.</p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000169499/file/3_cfc77ba0df27492bb8f9400cde141640.jpg\" /></p>\r\n\r\n<h3><strong>Hiệu năng mượt m&agrave;</strong></h3>\r\n\r\n<p>Macbook Pro 2017 c&oacute; bộ xử l&yacute; Intel Core i5 Kabylake tốc độ 2.30 GHz, card đồ họa t&iacute;ch hợp Intel&reg; Iris&trade; Graphics 640, bộ nhớ RAM 8 GB, c&ugrave;ng ổ cứng lưu trữ SSD 128 GB gi&uacute;p m&aacute;y chạy mượt m&agrave; c&aacute;c thao t&aacute;c sử dụng.</p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000169499/file/4_90ac3903fce24d5f96a1f961b9af560e.jpg\" /></p>\r\n\r\n<h3><strong>Chuột cảm ứng lực</strong></h3>\r\n\r\n<p>Apple Macbook Pro 2017 được trang bị th&ecirc;m chuột cảm ứng lực (Force Touch) mới, gi&uacute;p đem lại cho người d&ugrave;ng một cảm gi&aacute;c si&ecirc;u mượt m&agrave; v&agrave; cực tiện lợi để xem th&ocirc;ng tin nhanh khi sử dụng nữa.</p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000169499/file/5_6ff1db8ddf364863891a524a443eaad3.jpg\" /></p>\r\n\r\n<h3><strong>Cổng Thunderbolt hiện đại, truyền tải dữ liệu nhanh ch&oacute;ng</strong></h3>\r\n\r\n<p><strong><img src=\"https://file.hstatic.net/1000169499/file/6_1988dd1347134fbba7f6a2b26878d7ae.jpg\" /></strong></p>\r\n\r\n<p>Macbook Pro 2017 trang bị tận 2 cổng Thunderbolt 3 sử dụng dạng cổng USB-C để truyền t&iacute;n hiệu. Thunderbolt 3 cho ph&eacute;p truyền dữ liệu l&ecirc;n tới 40 Gbps, cao gấp đ&ocirc;i so với Thunderbolt 2 chỉ 20 Gbs trong khi điện năng ti&ecirc;u thụ th&igrave; chỉ bằng ph&acirc;n nửa.</p>\r\n\r\n<h3><strong>M&agrave;n h&igrave;nh nhỏ gọn nhưng sắc n&eacute;t</strong></h3>\r\n\r\n<p><strong><img src=\"https://file.hstatic.net/1000169499/file/8_2c67413cad55459c959a5d8e47384f13.jpg\" /></strong></p>\r\n\r\n<p>Apple Macbook Pro 2017 c&oacute; m&agrave;n h&igrave;nh rộng 13.3 inch, độ ph&acirc;n giải l&agrave; Retina (2560 x 1600) sử dụng c&ocirc;ng nghệ m&agrave;n h&igrave;nh IPS v&agrave; LED Backlit cho h&igrave;nh ảnh hiển thị kh&aacute; chất lượng, tươi s&aacute;ng.</p>\r\n\r\n<h3><strong>Thời lượng pin l&ecirc;n đến 10 giờ sử dụng</strong></h3>\r\n\r\n<p>Vấn đề pin với Apple Macbook Pro 2017 kh&aacute; đơn giản, kh&ocirc;ng phải lo &acirc;u nhiều khi m&agrave; thời gian khoảng 10 tiếng sử dụng sau một lần sạc đầy l&agrave; một ưu điểm rất xứng đ&aacute;ng để người d&ugrave;ng lựa chọn.</p>', 1, 1, 5, 1, '2018-02-01 01:18:59', '2018-02-01 01:18:59'),
(12, 'Chuột không dây Logitech M221 SILENT Đen', 'chuot-khong-day-logitech-m221-silent-den', 'ch01', 309000, 0, 'Black', '', '', '', '', '', 'Null', '', '', '', '', '', '', '', '', '', '<p>Kh&ocirc;ng g&acirc;y tiếng ồn khi click chuột như c&aacute;c loại th&ocirc;ng thường</p>', '<p><strong>Bảo h&agrave;nh 3 năm</strong><br />\r\n- Kh&ocirc;ng g&acirc;y tiếng ồn khi click chuột như c&aacute;c loại th&ocirc;ng thường<br />\r\n- C&ocirc;ng nghệ kết nối kh&ocirc;ng d&acirc;y 2.4GHz<br />\r\n- Độ ph&acirc;n giải cao l&ecirc;n đến 1000dpi<br />\r\n- Thiết kế nhỏ gọn, độc đ&aacute;o</p>', '1517473360.1_b14bb4f331c84a4cb9a2ca377e3ac2a4.jpg', '1', '<p>1</p>', 1, 1, 10, 1, '2018-02-01 01:22:40', '2018-02-01 01:22:40'),
(13, 'Dell Inspiron 15 3567 70119158 Black', 'dell-inspiron-15-3567-70119158-black', 'dell01', 14200000, 0, 'Black', '282 x 197 x 15 mm', '2 kg', '15', '', '4', '4', 'Intel® Core™ i5-7200U Processor (3M Cache, up to 3.10 GHz)', '500 GB', '2GB AMD Radeon', 'DVDRW', 'USB 2.0, USB 3.0 * 1 HDMI * 1 RJ45; * 1 headphone-out/microphone-in combo', 'Webcam & Microphone, BlueTooth', 'Win 10 Home SL', '', '', '<p>1</p>', '<p><strong><em>Tặng: Chuột quang USB + T&uacute;i m&aacute;y t&iacute;nh x&aacute;ch tay</em></strong></p>', '1517473793.3567_e77b5c963f7949e7b9bd69e852a2172f.jpg', '1', '<p>1</p>', 1, 1, 4, 1, '2018-02-01 01:29:53', '2018-02-01 01:29:53'),
(14, 'Dell Inspiron 15 5570 244YV1 Silver', 'dell-inspiron-15-5570-244yv1-silver', 'dell02', 19260000, 0, 'Dark Grey', '1', '1', '1', '1', '1', '11', '1', '1', '1', '1', '1', '1', '1', '12 tháng', '', '<p>1</p>', '<p><em><strong>Tặng:</strong>&nbsp;<strong>Chuột quang USB + T&uacute;i m&aacute;y t&iacute;nh x&aacute;ch tay</strong></em></p>', '1517473971.dell_inspiron_15_5570.png', '1', '<p>1</p>', 1, 1, 4, 1, '2018-02-01 01:32:51', '2018-02-01 01:32:51'),
(15, 'MSI GT72VR 6RD Dominator Tobii (231XVN)', 'msi-gt72vr-6rd-dominator-tobii-231xvn', 'msi01', 50400000, 0, 'Black', '1', '1', '1', '1', '1', '1', '1', '', '', '', '', '', '', '', '', '<p>1</p>', '<p><em><strong>Tặng:</strong>&nbsp;<strong>Chuột quang USB + T&uacute;i m&aacute;y t&iacute;nh x&aacute;ch tay</strong></em></p>', '1517474179.msi_gt73vr_7rf_titan_pro_42c1ac4c4f154998b5f46a123eda3546.jpg', '1', '<p>1</p>', 1, 1, 6, 1, '2018-02-01 01:36:19', '2018-02-01 01:36:19'),
(16, 'MSI GE62 7RE Apache Pro (411XVN)', 'msi-ge62-7re-apache-pro-411xvn', 'msi02', 31700000, 0, 'Black', '', '', '', '', '', 'Null', '', '', '', '', '', '', '', '', '', '<p>1</p>', '<p>1</p>', '1517474358.msi-ge72_2101d40ebeaa458b923a6aa59171fb90.jpg', '1', '<p>1</p>', 1, 1, 6, 1, '2018-02-01 01:39:18', '2018-02-01 01:39:18'),
(17, '64GB USB SanDisk iXpand mini IX40', '64gb-usb-sandisk-ixpand-mini-ix40', 'usb1', 1352000, 0, 'Dark Grey', '1', '1', '1', '1', '1', '1', '1', '1', '', '', '', '', '', '', '', '<p>1</p>', '<p>1</p>', '1517476267.ixpand_mini_ix40_5bc94294f002484ebfc2c1bdf7d9fa2d.jpg', '1', '<p>1</p>', 1, 1, 13, 1, '2018-02-01 02:11:07', '2018-02-01 02:11:07'),
(18, '32GB USB SanDdisk Dual Drive TypeC - USB DDC2', '32gb-usb-sanddisk-dual-drive-typec--usb-ddc2', 'usb2', 489000, 0, 'Dark Grey', '', '', '', '', '', 'Null', '', '', '', '', '', '', '', '', '', '<p>1</p>', '<p>1</p>', '1517476398.sdddc2_f1d3f16c18c94bee8e92a058b1727fe8.jpg', '1', '<p>1</p>', 1, 1, 13, 1, '2018-02-01 02:13:18', '2018-02-01 02:13:18'),
(19, 'Bàn Phím Game Ensoho E-G121KR', 'ban-phim-game-ensoho-eg121kr', 'bp02', 286000, 0, 'Black', '', '', '', '', '', 'Null', '', '', '', '', '', '', '', '', '', '<p>1</p>', '<p>1</p>', '1517476575.1_65dbae4fd9bc453b9689eb6bda7bf718.jpg', '1', '<p>1</p>', 1, 1, 8, 1, '2018-02-01 02:16:15', '2018-02-01 02:16:15'),
(20, 'Bàn phím chơi game Logitech G310 Atlas Dawn Đen', 'ban-phim-choi-game-logitech-g310-atlas-dawn-den', 'bp03', 2490000, 0, 'Black', '', '', '', '', '', 'Null', '', '', '', '', '', '', '', '', '', '<p>1</p>', '<p>1</p>', '1517476695.bp1.jpg', '1', '<p>1</p>', 1, 1, 8, 1, '2018-02-01 02:18:15', '2018-02-01 02:18:15'),
(21, 'fdsfsd', 'fdsfsd', 'sdfd', 1, 1, '1', '1', '1', '1', '1', '1', '1', '1', '', '', '', '', '', '', '', '1', '<p>1</p>', '<p>1</p>', '1517627018.studio-g3-x2_1504954578.png', '1', '<p>1</p>', 0, 2, 7, 1, '2018-02-02 20:03:38', '2018-02-07 08:07:20');

-- --------------------------------------------------------

--
-- Table structure for table `pro_images`
--

CREATE TABLE `pro_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pro_images`
--

INSERT INTO `pro_images` (`id`, `image`, `product_id`, `created_at`, `updated_at`) VALUES
(1, '1517421008.100000_laptop-macbook-12-1020x550-0.jpg', 1, '2018-01-31 10:50:08', '2018-01-31 10:50:08'),
(2, '1517421008.100000_laptop-macbook-12-1020x550-5.jpg', 1, '2018-01-31 10:50:08', '2018-01-31 10:50:08'),
(3, '1517448779.100000_laptop-asus-x541ua-go1372-man-hinh.jpg', 2, '2018-01-31 18:32:59', '2018-01-31 18:32:59'),
(4, '1517473361.2_f9b66b3ef31c4bf3b89d957172aac799.jpg', 12, '2018-02-01 01:22:41', '2018-02-01 01:22:41'),
(5, '1517476695.bp2.jpg', 20, '2018-02-01 02:18:15', '2018-02-01 02:18:15'),
(6, '1517476695.bp3.jpg', 20, '2018-02-01 02:18:15', '2018-02-01 02:18:15');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `name`, `image`, `link`, `published`, `created_at`, `updated_at`) VALUES
(1, 'sl1', '15160946333611.jpg', '1', 1, '2018-01-31 10:23:48', '2018-02-04 09:44:32'),
(2, 'sl2', 'collections_banner_it_2.png', '1', 0, '2018-01-31 10:24:15', '2018-02-04 08:01:43'),
(3, 'sl3', '15166371722236.jpg', '1', 0, '2018-01-31 10:24:47', '2018-02-04 20:07:42'),
(4, 'sl4', '15127993652991.jpg', '1', 1, '2018-01-31 10:25:03', '2018-02-04 20:07:44'),
(5, 'sl5', '15166155903558.jpg', '2', 1, '2018-01-31 10:25:17', '2018-02-04 08:01:07');

-- --------------------------------------------------------

--
-- Table structure for table `socails`
--

CREATE TABLE `socails` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `provider_user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socails`
--

INSERT INTO `socails` (`id`, `user_id`, `provider_user_id`, `provider`, `created_at`, `updated_at`) VALUES
(1, 1, '946521692163695', 'facebook', '2018-01-31 10:13:44', '2018-01-31 10:13:44'),
(2, 2, '114054415992618545119', 'google', '2018-02-06 19:04:40', '2018-02-06 19:04:40');

-- --------------------------------------------------------

--
-- Table structure for table `tintucs`
--

CREATE TABLE `tintucs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `intro` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tintucs`
--

INSERT INTO `tintucs` (`id`, `name`, `alias`, `intro`, `content`, `image`, `description`, `published`, `created_at`, `updated_at`) VALUES
(1, 'Tin 1', 'tin-1', 'ádf', '<p>fdsfsd</p>', 'slider_index_4.png', '<p>dfsdfd</p>', 0, '2018-01-31 10:26:22', '2018-02-04 08:03:57'),
(2, 'Tin 2', 'tin-2', 'safdfds', '<p>sdfd</p>', '15166404294211.jpg', '<p>fdsfs</p>', 1, '2018-01-31 10:26:42', '2018-02-04 08:04:06'),
(3, '1', '1', 'f', '<p>d</p>', '15166404155945.jpg', '<p>d</p>', 1, '2018-01-31 10:37:42', '2018-02-04 08:03:55');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(10) UNSIGNED NOT NULL,
  `userdk_id` int(11) NOT NULL,
  `namekh` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailkh` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonekh` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_info` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghichu` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `security` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_username_unique` (`username`);

--
-- Indexes for table `cates`
--
ALTER TABLE `cates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chitetdonhangs`
--
ALTER TABLE `chitetdonhangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`),
  ADD KEY `products_cate_id_foreign` (`cate_id`);

--
-- Indexes for table `pro_images`
--
ALTER TABLE `pro_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pro_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socails`
--
ALTER TABLE `socails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tintucs`
--
ALTER TABLE `tintucs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tintucs_name_unique` (`name`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cates`
--
ALTER TABLE `cates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `chitetdonhangs`
--
ALTER TABLE `chitetdonhangs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `pro_images`
--
ALTER TABLE `pro_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `socails`
--
ALTER TABLE `socails`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tintucs`
--
ALTER TABLE `tintucs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_cate_id_foreign` FOREIGN KEY (`cate_id`) REFERENCES `cates` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pro_images`
--
ALTER TABLE `pro_images`
  ADD CONSTRAINT `pro_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 17, 2018 at 07:50 AM
-- Server version: 10.1.26-MariaDB-0+deb9u1
-- PHP Version: 7.0.30-1~dotdeb+8.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `car_id` int(11) NOT NULL,
  `car_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `car_image` int(11) DEFAULT NULL,
  `car_content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `car_hang` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `car_gia` int(100) DEFAULT NULL,
  `car_color` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `car_loai` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `view` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`car_id`, `car_name`, `car_image`, `car_content`, `car_hang`, `car_gia`, `car_color`, `car_loai`, `view`) VALUES
(1, 'Toyota mini', 1, 'Xe có màu xanh lam, sản xuất 2011 , xe 2000 mã lực', 'TYT', 529000000, 'Màu xanh lam', 'Du lịch', 5),
(2, 'Toyota vios', 2, 'TOYOTA VIOS 2013 ,Đây là mẫu xe hạng nhỏ dành cho cá nhân và gia đình của Toyota', 'TYT', 612000000, 'Màu đỏ', 'Du lịch', 9),
(3, 'Toyota altis', 3, 'Altis là một trong các mẫu xe có độ tin cậy tốt nhất, giá bán lại cao và sự ưa chuộng đặc biệt của người tiêu dùng Việt Nam.', 'TYT', 914000000, 'Màu kem', 'Thể thao', 1),
(4, 'Toyota camry', 4, 'Toyota Camry Với thiết kế thanh lịch, hiện đại và thể thao, nội thất sang trọng cùng khả năng vận hành mạnh mẽ, và tiết kiệm nhiên liệu tối đa.', 'TYT', 1292000000, 'Màu xanh', 'Thể thao', 0),
(5, 'Toyota yaris', 5, 'Toyota Yaris 2013-2014 Phiên bản mới nhất,Toyota Việt Nam chính thức phân phối Toyota Yaris tại Việt Nam mẫu xe cỡ nhỏ tiện lợi.', 'TYT', 661000000, 'Màu đen', 'Du lịch', 0),
(6, 'Toyota innova', 6, 'Là dòng xe thống trị phân khúc đa dụng nhiều năm liền, Toyota Innova , là \"quả bom tấn\" của Toyota.', 'TYT', 814000000, 'Màu xanh dương', 'Thể thao', 0),
(7, 'Toyota fortuner', 7, 'Mẫu xe SUV địa hình việt dã luôn chiếm thị phần thống trị (trên 50%) của Toyota được ra mắt lần đầu năm 2007.', 'TYT', 1056000000, 'Màu vàng', ' Du lịch', 0),
(8, 'Toyota Landcruiser prado', 8, 'Mẫu xe nhập khẩu nguyên chiếc từ Nhật Bản với 07 chiếc.', 'TYT', 2071000000, 'Màu hồng', 'Du lịch', 0),
(9, 'Hyundai Starex', 9, 'Mẫu xe nhập khẩu nguyên chiếc từ Nhật Bản với 07 chỗ, động cơ 2.7 VVT-i, máy xăng, 2 cầu 4 bánh chủ động toàn thời gian.', 'HYD', 529000000, 'Màu kem', 'Du lịch', 10),
(10, 'Hyundai Santafe', 10, 'Huyndai i20 trang bị Hệ thống âm thanh 4 loa. chơi nhạc CD/MP3/Radio. Cửa sổ trời, đèn sương mù, tay lái trợ lực, gương kính chỉnh điện, vô lăng tích hợp', 'HYD', 2071000000, 'Màu trắng', 'Du lịch', 6),
(11, 'Hyundai Avante', 11, 'Hyundai Avante là sự kết hợp hoàn hảo giữa vẻ thời trang và mạnh mẽ. Sở hữu động cơ 1.6, Hyundai Avante vận hành êm ái, tiện nghi và tiết kiệm nhiên liệu.', 'HYD', 1056000000, 'Màu trắng', 'Xe tải', 0),
(12, 'Hyundai Elantra GLS', 12, 'Hyundai Elantra ra mắt vào khoảng năm 2011 để trở thành một trong những chiếc xe bán chạy nhất và compact tốt nhất tại thị trường Mỹ.', 'HYD', 814000000, 'Màu xanh', 'Xe tải', 0),
(13, 'Hyundai Elantra', 13, 'Với hình dáng mới mẫu xe Hyundai Elantra 2014 càng trở lên sắc sảo, góc cạnh và thể thao hơn. Hyundai Elantra 2014 là sự lựa chọn hàng đầu trong năm', 'HYD', 612000000, 'Màu đen', 'Thể thao', 2),
(14, 'Hyundai HD 72', 14, 'Với phân khúc xe tải nhẹ cùng với chất lượng Đạt tiêu chuẩn EURO III, Kiểu dáng xe tải hyundai hd72 và chủng loại phong phú giá cả hợp lý', 'HYD', 1292000000, 'Màu vàng', 'Xe tải', 1),
(15, 'Huyndai i20', 15, 'Hyundai Eon 2013, mới 100%. Xe nhập khẩu nguyên chiếc. Dung tích xi lanh 0.8 lít.', 'HYD', 814000000, 'Màu đen', 'Du lịch', 0),
(16, 'Hyundai i30 ', 16, 'Hyundai Starex 2013. .Túi khí cho lái xe, Hệ thống chống bó cứng phanh ABS', 'HYD', 1056000000, 'Màu đỏ', 'Du lịch', 0),
(17, 'Lamborghini Jalpa', 17, 'Siêu xe mới của Lambo được trang bị V12 6,5L?công suất 650 mã lực, mô men xoắn cực đại 660Nm vòng tua máy 6.000 vòng/phút. Theo hãng sản xuất xe hơi Italy, chiếc xe này có khả năng tăng tốc t...', 'LBN', 1292000000, 'Màu đen', 'Xe đua', 5),
(18, 'Lamborghini Diablo', 18, 'Đời 2011 Lamborghini Murcielago , hệ thống đảm bảo phanh xe giúp bánh không bị trượt, hệ thống OnStar®, kiểm soát hành trình, dây an toàn', 'LBN', 1292000000, 'Màu xanh', 'Thể thao', 0),
(19, 'Lamborghini contrao', 19, 'Siêu xe mới của Lambo được trang bị động cơ V12 6,5L công suất 650 mã lực, mô men xoắn cực đại 660Nm, vòng tua máy 6.000 vòng/phút.', 'LBN', 1056000000, 'Màu đen', 'Xe đua', 0),
(20, 'Lamborghini inova', 20, '2012, động cơ 5.2 V10, số lượng giới hạn 20 chiếc, tốc độ tối đa 352 km/h.', 'LBN', 1056000000, 'Màu xanh', 'Thể thao', 0),
(21, 'Lamborghini Murcielago', 21, '2013, chỉ có 3 chiếc coupe và 9 chiếc roadster. Động cơ 6.5 V12, tốc độ tối đa 354 km/h.', 'LBN', 1056000000, 'Màu đỏ', 'Thể thao', 0),
(22, 'Lamborghini baio', 22, '1981-1988, động cơ 3,5 lít V8, tốc độ tối đa 234 km/h.', 'LBN', 2071000000, 'Màu vàng', 'Du lịch', 0),
(23, 'Lamborghini Reventon Roadster', 23, '1986-1993, động cơ 5,17 lít V12, tốc độ tối đa 210 km/h.', 'LBN', 814000000, 'Xanh dương', 'Du lịch', 1),
(24, 'Lamborghini Gallardo', 24, '2012, động cơ 5.2 V10, số lượng giới hạn 20 chiếc, tốc độ tối đa 352 km/h.', 'LBN', 814000000, 'Màu kem', 'Du lịch', 0),
(25, 'Huyndai Sonata', 29, 'Hyundai Sonata đã từng chinh phục mọi ánh mắt ngay từ cái nhìn đầu tiên. Năm 2011 là một năm thực sự đáng nhớ và đầy ngạc nhiên cho những người yêu', 'HYD', 105000000, 'Trắng', 'Du lịch', 5),
(26, 'Toyota Camry 2013', 28, 'Toyota Camry 2013 được trang bị full Options với động cơ 2.5L Dual VVT-I màn hình DVD', 'TYT', 1292000000, 'Đen', 'Du lịch', 8),
(27, 'KKK', 50, '<p>TTTT</p>', 'HYD', 300000, 'LLL', 'LAMBO', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `cm_id` int(11) NOT NULL,
  `cm_content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `cm_date` varchar(100) DEFAULT NULL,
  `cm_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `cm_car_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`cm_id`, `cm_content`, `cm_date`, `cm_name`, `cm_car_id`) VALUES
(36, 'afdfd', '2/1/2014', 'asd', 17),
(37, 'afdfd', '2/1/2014', 'asd', 17),
(44, '<p>xe n&agrave;y đẹp v&agrave; <strong>sang trong</strong></p>', '2/1/2014', 'hoang', 14),
(45, '<p><em>xe k đẹp</em></p>', '2/1/2014', 'toan', 14),
(46, '<p><strong>t&ocirc;i kh&ocirc;ng th&iacute;ch xe n&agrave;y</strong></p>', '2/1/2014', 'dung', 14),
(47, '<p><strong>dep</strong></p>', '2/1/2014', 'hihi', 14),
(48, '<p><strong>toi la toi</strong></p>', '3/1/2014', 'tam', 12),
(49, '<p>xe nay k dep</p>', '3/1/2014', 'hoang', 25),
(50, '<p>xe cui mia</p>', '3/1/2014', 'duang', 25),
(51, '<p>ngu nhu con bo</p>', '3/1/2014', 'thang', 25),
(52, '<p>thay cung dc ma ban</p>', '3/1/2014', 'toan', 25),
(53, '<p>xe nay lam gi ta</p>', '4/1/2014', '', 11),
(54, '<p>buoi sang</p>', '5/1/2014', 'hiep', 2),
(55, '<p>buoii safd</p>', '5/1/2014', 'hoang', 2),
(56, '<p>astdryftugih</p>', '5/1/2014', 'awsretrdyt', 2),
(57, '<p>buoi sang nek</p>', '5/1/2014', 'tam', 2),
(58, '<p>dffg</p>', '5/1/2014', 'tam', 2),
(59, '<p>fgvd</p>', '7/1/2014', 'admin', 26),
(60, '<p>toi la toi</p>', '7/1/2014', 'admin', 26),
(61, '<p>xe cui qua</p>', '7/1/2014', 'admin', 26),
(62, '<p>cung dc</p>', '7/1/2014', 'admin', 26),
(63, '<p>xe ngon</p>', '7/1/2014', 'hoang', 13),
(64, '<p>xe cui qua</p>', '7/1/2014', 'hiep', 1),
(65, '<p>Hello larvel</p>', '17/7/2018', 'dongtp', 10),
(66, '<p>Hello larvel</p>', '17/7/2018', 'dongtp', 10),
(67, '<p>Hello larvel</p>', '17/7/2018', 'dongtp', 10);

-- --------------------------------------------------------

--
-- Table structure for table `dat_hang`
--

CREATE TABLE `dat_hang` (
  `dh_ma` int(11) NOT NULL,
  `dh_user` int(11) DEFAULT NULL,
  `dh_car_id` int(11) DEFAULT NULL,
  `dh_so_luong` int(11) DEFAULT NULL,
  `dh_ngay_dat` date DEFAULT NULL,
  `dh_tinh_trang` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hang_xe`
--

CREATE TABLE `hang_xe` (
  `hang_id` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hang_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hang_xe`
--

INSERT INTO `hang_xe` (`hang_id`, `hang_name`) VALUES
('HYD', 'Hyundai'),
('LBN', 'Lamborghini'),
('TYT', 'Toyota');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `im_ma` int(11) NOT NULL,
  `im_url` varchar(1024) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `im_hang` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`im_ma`, `im_url`, `im_hang`) VALUES
(1, '/images/tyt1.jpg', 'TYT'),
(2, '/images/tyt2.jpg', 'TYT'),
(3, '/images/tyt3.jpg', 'TYT'),
(4, '/images/tyt4.jpg', 'TYT'),
(5, '/images/tyt5.jpg', 'TYT'),
(6, '/images/tyt6.jpg', 'TYT'),
(7, '/images/tyt7.jpg', 'TYT'),
(8, '/images/tyt8.jpg', 'TYT'),
(9, '/images/hyd1.jpg', 'HYD'),
(10, '/images/hyd2.jpg', 'HYD'),
(11, '/images/hyd3.jpg', 'HYD'),
(12, '/images/hyd4.jpg', 'HYD'),
(13, '/images/hyd5.jpg', 'HYD'),
(14, '/images/hyd6.jpg', 'HYD'),
(15, '/images/hyd7.jpg', 'HYD'),
(16, '/images/hyd8.jpg', 'HYD'),
(17, '/images/lbn1.jpg', 'LBN'),
(18, '/images/lbn2.jpg', 'LBN'),
(19, '/images/lbn3.jpg', 'LBN'),
(20, '/images/lbn4.jpg', 'LBN'),
(21, '/images/lbn5.jpg', 'LBN'),
(22, '/images/lbn6.jpg', 'LBN'),
(23, '/images/lbn7.jpg', 'LBN'),
(24, '/images/lbn8.jpg', 'LBN'),
(25, '/images/sw_1.jpg', NULL),
(26, '/images/sw_2.jpg', NULL),
(27, '/images/sw_3.jpg', NULL),
(28, '/images/tyt9.jpg', 'TYT'),
(29, '/images/hyd9.jpg', 'HYD'),
(30, '/images/hai.jpg', NULL),
(31, '/images/hiep.jpg', NULL),
(32, '/images/dong.jpg', NULL),
(33, NULL, NULL),
(34, NULL, NULL),
(35, NULL, NULL),
(36, NULL, NULL),
(37, NULL, NULL),
(38, NULL, NULL),
(39, NULL, NULL),
(40, NULL, NULL),
(41, NULL, NULL),
(42, NULL, NULL),
(43, NULL, NULL),
(44, '/images/hiep.jpg', NULL),
(45, '/images/hai.jpg', NULL),
(46, '/images/mai2.jpg', NULL),
(47, '/images/1531301245414.JPEG', NULL),
(48, '/images/1531301245414.JPEG', NULL),
(49, '/images/1531301245414.JPEG', NULL),
(50, '/images/1531301245414.JPEG', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slide_show`
--

CREATE TABLE `slide_show` (
  `sl_id` int(11) NOT NULL,
  `image_url` int(11) DEFAULT NULL,
  `sl_url` varchar(1024) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `sl_title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `sl_order` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slide_show`
--

INSERT INTO `slide_show` (`sl_id`, `image_url`, `sl_url`, `sl_title`, `sl_order`) VALUES
(1, 25, '/xe/17', 'Xe 1', 1),
(2, 26, '/xe/25', 'Xe 2', 2),
(3, 27, '/xe/26', 'Xe 3', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_image` int(10) DEFAULT NULL,
  `user_email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_sdt` varchar(100) DEFAULT NULL,
  `user_gioithieu` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `user_ntns` varchar(100) DEFAULT NULL,
  `user_diachi` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_role` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `user_image`, `user_email`, `user_sdt`, `user_gioithieu`, `user_ntns`, `user_diachi`, `user_role`, `remember_token`) VALUES
(1, 'admin', '$2y$12$lTn9xsUReWKcC475Q2fzd.VrKWKlkR..lDxRFN1AncgTPiXIEQaye', 30, 'hoangminhhiep1992@gmail.com', '6895372334', '<p>dfghj546.56</p>', '12/11/1992', '5467/456/456', 'ADM', 'QWT6e6rS6uTG52St3mu5jbI0xYytGTkePAD9pgIyexhR0JY0WYB0PxvOEvMV'),
(15, 'hiep', '$2y$12$lTn9xsUReWKcC475Q2fzd.VrKWKlkR..lDxRFN1AncgTPiXIEQaye', 43, 'congacon@gmail.com', '1234567890', '<p>Toi la hiep hhsdf</p>', '09/08/1992', '135B', 'MOD2', NULL),
(16, 'hai', '$2y$12$lTn9xsUReWKcC475Q2fzd.VrKWKlkR..lDxRFN1AncgTPiXIEQaye', 45, 'con@.com', '01213455789', '<p>wertg</p>', '23456', '123456', 'MEM', NULL),
(18, 'dongtp', '$2y$12$QJx8v/jNHaabzmb5j0B.geKwltG5CxFFPhRPayrxJS7wpGnU8QhCu', 44, 'conga@gmail.com', '01213455789', '<p>T&ocirc;i l&agrave; đ&ocirc;ng</p>', '09/08/1992', '135B', 'MEM', '2ubgZsPTxObvMCn7SquUY1tRXJCxvav0UEytyklRBcKpKbSYXYmvXqT7zwsy'),
(19, 'haipt', '$2y$10$6feNUb3zbVNiE5qfv/i9he874/1OmXTYK/CV6160a/p3Xi7RBIozC', 46, 'haipt@dfm-engineering.com', '01232302302', NULL, NULL, 'hcm', 'MEM', 'UtE78VGVovbcsSsyUYx0Hza0Io5aqkkwRlK0y41Efb7kZDZVnPSNkQurfubG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`car_id`),
  ADD KEY `fk_hang_car_idx` (`car_hang`),
  ADD KEY `fk_image_car_idx` (`car_image`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`cm_id`),
  ADD KEY `cm_car_id` (`cm_car_id`);

--
-- Indexes for table `dat_hang`
--
ALTER TABLE `dat_hang`
  ADD PRIMARY KEY (`dh_ma`),
  ADD KEY `fk_user_dh_idx` (`dh_user`),
  ADD KEY `fk_car_dh_idx` (`dh_car_id`);

--
-- Indexes for table `hang_xe`
--
ALTER TABLE `hang_xe`
  ADD PRIMARY KEY (`hang_id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`im_ma`),
  ADD KEY `im_hang` (`im_hang`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide_show`
--
ALTER TABLE `slide_show`
  ADD PRIMARY KEY (`sl_id`),
  ADD KEY `fk_sl_image_idx` (`image_url`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_image` (`user_image`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `cm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `dat_hang`
--
ALTER TABLE `dat_hang`
  MODIFY `dh_ma` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `im_ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `slide_show`
--
ALTER TABLE `slide_show`
  MODIFY `sl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `car`
--
ALTER TABLE `car`
  ADD CONSTRAINT `car_ibfk_1` FOREIGN KEY (`car_hang`) REFERENCES `hang_xe` (`hang_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `car_ibfk_2` FOREIGN KEY (`car_image`) REFERENCES `image` (`im_ma`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`cm_car_id`) REFERENCES `car` (`car_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dat_hang`
--
ALTER TABLE `dat_hang`
  ADD CONSTRAINT `fk_car_dh` FOREIGN KEY (`dh_car_id`) REFERENCES `car` (`car_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user_dh` FOREIGN KEY (`dh_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`im_hang`) REFERENCES `hang_xe` (`hang_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `slide_show`
--
ALTER TABLE `slide_show`
  ADD CONSTRAINT `fk_sl_image` FOREIGN KEY (`image_url`) REFERENCES `image` (`im_ma`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_user_image` FOREIGN KEY (`user_image`) REFERENCES `image` (`im_ma`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

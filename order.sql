-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 09, 2020 lúc 03:57 PM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `order`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dong_bill`
--

CREATE TABLE `dong_bill` (
  `bill_id` int(11) NOT NULL,
  `bill_code` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `bill_name` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `bill_phone` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `bill_address` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `bill_note` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `bill_user` int(11) NOT NULL,
  `bill_user_process` int(11) NOT NULL,
  `bill_total_money` int(11) NOT NULL,
  `bill_status` int(11) NOT NULL DEFAULT '0',
  `bill_time_status_1` datetime DEFAULT NULL,
  `bill_time_status_2` datetime DEFAULT NULL,
  `bill_time_status_3` datetime DEFAULT NULL,
  `bill_time_status_4` datetime DEFAULT NULL,
  `bill_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dong_bill_product`
--

CREATE TABLE `dong_bill_product` (
  `bill_product_id` int(11) NOT NULL,
  `bill_product_bill` int(11) NOT NULL,
  `bill_product_product` int(11) NOT NULL,
  `bill_product_size` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `bill_product_color` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `bill_product_quantity` int(11) NOT NULL,
  `bill_product_price` int(11) NOT NULL,
  `bill_product_total_price` int(11) NOT NULL,
  `bill_product_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dong_category`
--

CREATE TABLE `dong_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `category_url` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `category_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `category_parent` int(11) NOT NULL,
  `category_user` int(11) NOT NULL,
  `category_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dong_category`
--

INSERT INTO `dong_category` (`category_id`, `category_name`, `category_url`, `category_type`, `category_parent`, `category_user`, `category_time`) VALUES
(1, 'Bàn ghế quán Cafe', 'ban-ghe-quan-cafe', 'shop', 0, 0, 1583763409),
(2, 'Bàn Cafe', 'ban-cafe', 'shop', 1, 0, 1583763440),
(3, 'Ghế Cafe', 'ghe-cafe', 'shop', 1, 0, 1583763452),
(4, 'Bàn ghế cafe gỗ', 'ban-ghe-cafe-go', 'shop', 0, 0, 1583763480),
(5, 'Bàn ghế cafe khung sắt', 'ban-ghe-cafe-khung-sat', 'shop', 0, 0, 1583763493),
(6, 'Bàn ghế cafe ngoài trời', 'ban-ghe-cafe-ngoai-troi', 'shop', 0, 0, 1583763501);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dong_media`
--

CREATE TABLE `dong_media` (
  `media_id` int(11) NOT NULL,
  `media_type` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `media_store` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `media_name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `media_source` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `media_user` int(11) NOT NULL,
  `media_parent` int(11) NOT NULL,
  `media_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dong_metadata`
--

CREATE TABLE `dong_metadata` (
  `metadata_id` int(11) NOT NULL,
  `metadata_type` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `metadata_suorce` int(11) NOT NULL,
  `metadata_value` int(11) NOT NULL,
  `metadata_user` int(11) NOT NULL,
  `metadata_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `dong_metadata`
--

INSERT INTO `dong_metadata` (`metadata_id`, `metadata_type`, `metadata_suorce`, `metadata_value`, `metadata_user`, `metadata_time`) VALUES
(1, 'category_product', 1, 1, 1, 1544200956),
(2, 'category_product', 2, 2, 1, 1544241213),
(3, 'category_product', 2, 3, 1, 1544241213),
(4, 'category_product', 3, 3, 1, 1544667521),
(14, 'category_product', 4, 2, 1, 1544771753),
(42, 'category_product', 5, 2, 1, 1544782887),
(43, 'category_product', 5, 3, 1, 1544782887),
(44, 'category_product', 6, 2, 1, 1544783498),
(45, 'category_product', 1, 2, 1, 1545030538),
(46, 'category_product', 2, 2, 1, 1545640740),
(47, 'category_product', 2, 3, 1, 1545640740),
(48, 'category_product', 3, 3, 1, 1545646935),
(49, 'category_product', 4, 2, 1, 1545703536),
(50, 'category_product', 5, 13, 1, 1545731465),
(51, 'category_product', 6, 2, 1, 1546166382),
(52, 'category_product', 7, 2, 1, 1546166723),
(53, 'category_product', 7, 3, 1, 1546166723),
(54, 'category_product', 8, 2, 1, 1546167008),
(55, 'category_product', 8, 13, 1, 1546167008),
(56, 'category_product', 9, 1, 1, 1546227599),
(57, 'category_product', 10, 1, 1, 1546228737),
(59, 'category_product', 11, 24, 1, 1546499561),
(60, 'category_product', 11, 25, 1, 1546499561),
(61, 'category_product', 11, 26, 1, 1546499561),
(62, 'category_product', 11, 27, 1, 1546499561),
(63, 'category_product', 11, 28, 1, 1546499561),
(64, 'category_product', 12, 24, 1, 1546500606),
(65, 'category_product', 13, 22, 1, 1546501578),
(66, 'category_product', 14, 33, 1, 1546501823),
(67, 'category_product', 15, 22, 1, 1546502051),
(68, 'category_product', 16, 2, 1, 1546619340),
(69, 'category_product', 17, 2, 1, 1547051002);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dong_payment`
--

CREATE TABLE `dong_payment` (
  `payment_id` int(11) NOT NULL,
  `payment_bill` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `payment_method` int(11) NOT NULL,
  `payment_money` int(11) NOT NULL,
  `payment_user` int(11) NOT NULL,
  `payment_note` text COLLATE utf8_unicode_ci NOT NULL,
  `payment_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dong_product`
--

CREATE TABLE `dong_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `product_content` text COLLATE utf8_unicode_ci,
  `product_category` int(11) DEFAULT NULL,
  `product_url` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_user` int(11) NOT NULL,
  `product_status` int(11) NOT NULL,
  `product_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dong_user`
--

CREATE TABLE `dong_user` (
  `user_id` int(11) NOT NULL,
  `user_login` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `user_address` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `user_avatar` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `user_role` int(11) NOT NULL DEFAULT '0',
  `user_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_status` int(2) NOT NULL,
  `user_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dong_user`
--

INSERT INTO `dong_user` (`user_id`, `user_login`, `user_password`, `user_name`, `user_phone`, `user_address`, `user_avatar`, `user_role`, `user_email`, `user_status`, `user_time`) VALUES
(1, 'dongnv', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Văn Đông', '0966624292', 'Do Hạ, Tiền Phong, Mê Linh, Hà Nội', '', 35, 'nguyenvandong242@gmail.com', 1, 1537365374),
(2, 'test', 'e10adc3949ba59abbe56e057f20f883e', 'đông', '0362576909', '', '', 38, 'dongkinh92@gmail.com', 1, 1553867413),
(3, 'dongnv2', 'e10adc3949ba59abbe56e057f20f883e', 'đông', '0969392114', '', '', 38, 'dongkinh92@gmail.comf', 1, 1553868402),
(4, 'dongnv3', '25d55ad283aa400af464c76d713c07ad', 'đông', '966624293', 'tien phong\r\nme linh', '', 38, 'dongkinh9e2@gmail.com', 1, 1553868481),
(5, 'dongnv4', '25f9e794323b453885f5181f1b624d0b', 'đông 4', '0969392115', 'tien phong\r\nme linh\r\n!@#$%^&*\':\"?/>.<M', '', 35, 'dongkinhf92@gmail.com', 1, 1553871356);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dong_bill`
--
ALTER TABLE `dong_bill`
  ADD PRIMARY KEY (`bill_id`),
  ADD UNIQUE KEY `bill_code` (`bill_code`);

--
-- Chỉ mục cho bảng `dong_bill_product`
--
ALTER TABLE `dong_bill_product`
  ADD PRIMARY KEY (`bill_product_id`);

--
-- Chỉ mục cho bảng `dong_category`
--
ALTER TABLE `dong_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `dong_media`
--
ALTER TABLE `dong_media`
  ADD PRIMARY KEY (`media_id`);

--
-- Chỉ mục cho bảng `dong_metadata`
--
ALTER TABLE `dong_metadata`
  ADD PRIMARY KEY (`metadata_id`);

--
-- Chỉ mục cho bảng `dong_payment`
--
ALTER TABLE `dong_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Chỉ mục cho bảng `dong_product`
--
ALTER TABLE `dong_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Chỉ mục cho bảng `dong_user`
--
ALTER TABLE `dong_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `dong_bill`
--
ALTER TABLE `dong_bill`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `dong_bill_product`
--
ALTER TABLE `dong_bill_product`
  MODIFY `bill_product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `dong_category`
--
ALTER TABLE `dong_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `dong_media`
--
ALTER TABLE `dong_media`
  MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `dong_metadata`
--
ALTER TABLE `dong_metadata`
  MODIFY `metadata_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT cho bảng `dong_payment`
--
ALTER TABLE `dong_payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `dong_product`
--
ALTER TABLE `dong_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `dong_user`
--
ALTER TABLE `dong_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

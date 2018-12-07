-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 07, 2018 lúc 05:52 PM
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
(1, 'Giày - Dép', 'giay-dep', 'shop', 0, 0, 0),
(2, 'Giày thể thao', 'giay-the-thao', 'shop', 1, 0, 0),
(3, 'Giày thường', 'giay-thuong', 'shop', 1, 0, 0),
(4, 'ADIDAS', 'adidas', 'brand', 0, 0, 0),
(5, 'PLAYBOY', 'playboy', 'brand', 0, 0, 0),
(6, 'Hàng chính hãng', 'hang-chinh-hang', 'quality', 0, 0, 0),
(7, 'Không rõ nguồn gốc', 'khong-ro-nguon-goc', 'quality', 0, 0, 0),
(8, 'Super Fake', 'super-fake', 'quality', 0, 0, 0),
(9, 'Fake 1', 'fake-1', 'quality', 0, 0, 0),
(10, 'Việt Nam Xuất Khẩu', 'viet-nam-xuat-khau', 'quality', 0, 0, 0);

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

--
-- Đang đổ dữ liệu cho bảng `dong_media`
--

INSERT INTO `dong_media` (`media_id`, `media_type`, `media_store`, `media_name`, `media_source`, `media_user`, `media_parent`, `media_time`) VALUES
(1, 'images_product', 'remote', 'TB2Iltdb4YaK1RjSZFnXXa80pXa_!!917312802-0-item_pic.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i3/917312802/TB2Iltdb4YaK1RjSZFnXXa80pXa_!!917312802-0-item_pic.jpg_500x500q90.jpg', 1, 1, 1544200956),
(2, 'images_product', 'local', 'TB2Iltdb4YaK1RjSZFnXXa80pXa_!!917312802-0-item_pic.jpg_500x500q90.jpg', 'assets/images/products/TB2Iltdb4YaK1RjSZFnXXa80pXa_!!917312802-0-item_pic.jpg_500x500q90.jpg', 1, 1, 1544200956),
(3, 'images_product', 'remote', 'TB2xpVtXNjaK1RjSZKzXXXVwXXa_!!917312802.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i3/917312802/TB2xpVtXNjaK1RjSZKzXXXVwXXa_!!917312802.jpg_500x500q90.jpg', 1, 1, 1544200956),
(4, 'images_product', 'local', 'TB2xpVtXNjaK1RjSZKzXXXVwXXa_!!917312802.jpg_500x500q90.jpg', 'assets/images/products/TB2xpVtXNjaK1RjSZKzXXXVwXXa_!!917312802.jpg_500x500q90.jpg', 1, 1, 1544200956),
(5, 'images_product', 'remote', 'TB2TQRXXMHqK1RjSZFEXXcGMXXa_!!917312802-0-item_pic.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i1/917312802/TB2TQRXXMHqK1RjSZFEXXcGMXXa_!!917312802-0-item_pic.jpg_500x500q90.jpg', 1, 1, 1544200956),
(6, 'images_product', 'local', 'TB2TQRXXMHqK1RjSZFEXXcGMXXa_!!917312802-0-item_pic.jpg_500x500q90.jpg', 'assets/images/products/TB2TQRXXMHqK1RjSZFEXXcGMXXa_!!917312802-0-item_pic.jpg_500x500q90.jpg', 1, 1, 1544200956),
(7, 'images_product', 'remote', 'TB26j8aXRLoK1RjSZFuXXXn0XXa_!!917312802.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i1/917312802/TB26j8aXRLoK1RjSZFuXXXn0XXa_!!917312802.jpg_500x500q90.jpg', 1, 1, 1544200956),
(8, 'images_product', 'local', 'TB26j8aXRLoK1RjSZFuXXXn0XXa_!!917312802.jpg_500x500q90.jpg', 'assets/images/products/TB26j8aXRLoK1RjSZFuXXXn0XXa_!!917312802.jpg_500x500q90.jpg', 1, 1, 1544200956),
(9, 'images_product', 'remote', 'TB2h6pbXHvpK1RjSZFqXXcXUVXa_!!917312802.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i3/917312802/TB2h6pbXHvpK1RjSZFqXXcXUVXa_!!917312802.jpg_500x500q90.jpg', 1, 1, 1544200956),
(10, 'images_product', 'local', 'TB2h6pbXHvpK1RjSZFqXXcXUVXa_!!917312802.jpg_500x500q90.jpg', 'assets/images/products/TB2h6pbXHvpK1RjSZFqXXcXUVXa_!!917312802.jpg_500x500q90.jpg', 1, 1, 1544200956);

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
(1, 'category_product', 1, 1, 1, 1544200956);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dong_product`
--

CREATE TABLE `dong_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `product_content` text COLLATE utf8_unicode_ci,
  `product_suorce` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_brand` int(11) DEFAULT NULL,
  `product_quality` int(11) DEFAULT NULL,
  `product_price_default` int(11) DEFAULT NULL,
  `product_price_promotion` int(11) DEFAULT NULL,
  `product_sale` int(5) DEFAULT NULL,
  `product_price_vn` int(11) NOT NULL,
  `product_size` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_color` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_user` int(11) NOT NULL,
  `product_status` int(11) NOT NULL,
  `product_show` int(11) DEFAULT '1',
  `product_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dong_product`
--

INSERT INTO `dong_product` (`product_id`, `product_name`, `product_content`, `product_suorce`, `product_brand`, `product_quality`, `product_price_default`, `product_price_promotion`, `product_sale`, `product_price_vn`, `product_size`, `product_color`, `product_user`, `product_status`, `product_show`, `product_time`) VALUES
(1, 'test', '', 'https://detail.tmall.com/item.htm?id=577399054350', 0, 0, 138, 58, 43, 203000, 'a:6:{i:0;s:2:\"39\";i:1;s:2:\"40\";i:2;s:2:\"41\";i:3;s:2:\"42\";i:4;s:2:\"43\";i:5;s:2:\"44\";}', 'a:0:{}', 1, 0, 1, 1544200956);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dong_user`
--

CREATE TABLE `dong_user` (
  `user_id` int(11) NOT NULL,
  `user_login` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_avatar` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `user_role` int(11) NOT NULL DEFAULT '0',
  `user_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_status` int(2) NOT NULL,
  `user_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dong_user`
--

INSERT INTO `dong_user` (`user_id`, `user_login`, `user_password`, `user_name`, `user_avatar`, `user_role`, `user_email`, `user_status`, `user_time`) VALUES
(1, 'dongnv', 'e10adc3949ba59abbe56e057f20f883e', 'Đông Nguyễn', '', 0, 'nguyenvandong242@gmail.com', 1, 1537365374);

--
-- Chỉ mục cho các bảng đã đổ
--

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
-- AUTO_INCREMENT cho bảng `dong_category`
--
ALTER TABLE `dong_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `dong_media`
--
ALTER TABLE `dong_media`
  MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `dong_metadata`
--
ALTER TABLE `dong_metadata`
  MODIFY `metadata_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `dong_product`
--
ALTER TABLE `dong_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `dong_user`
--
ALTER TABLE `dong_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

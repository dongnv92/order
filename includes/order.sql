-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 01, 2019 lúc 11:27 AM
-- Phiên bản máy phục vụ: 10.1.35-MariaDB
-- Phiên bản PHP: 7.2.9

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
  `bill_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `dong_bill`
--

INSERT INTO `dong_bill` (`bill_id`, `bill_code`, `bill_name`, `bill_phone`, `bill_address`, `bill_note`, `bill_user`, `bill_user_process`, `bill_total_money`, `bill_status`, `bill_time`) VALUES
(1, 'AWVT', 'egdsg', '966624292', 'Viet Nam', 'dsfsf', 0, 0, 6933500, 0, '2019-01-31 15:42:58'),
(2, 'QRX8', 'Nguyễn Văn Đông', '966624292', 'Mê Linh, Hà Nội', 'Màu xanh', 1, 0, 3524500, 0, '2019-02-01 15:59:19'),
(3, 'ArrayMFEX', 'Nguyễn Văn Đông', '966624292', 'Do Hạ, Tiền Phong, Mê Linh, Hà Nội', '233555361', 1, 0, 1561000, 0, '2019-02-28 16:56:47'),
(4, 'ArrayE1PB', 'Nguyễn Văn Đông', '966624292', 'Do Hạ, Tiền Phong, Mê Linh, Hà Nội', 'dgsdgsg', 1, 0, 2229500, 0, '2019-02-28 22:19:01'),
(5, '400RV6', 'dfhfdh', '966624292', 'dfhdfhdfhdfh', 'dfhdhfdh', 0, 0, 1529500, 0, '2019-03-01 09:12:26'),
(6, 'ArrayWGP5', 'Nguyễn Văn Đông', '966624292', 'Do Hạ, Tiền Phong, Mê Linh, Hà Nội', 'sdgsgsdgdsg', 1, 0, 1529500, 0, '2019-03-01 09:13:45'),
(7, '4Z90V', 'Nguyễn Văn Đông', '966624292', 'Do Hạ, Tiền Phong, Mê Linh, Hà Nội', 'dsfdsfdsf', 1, 0, 1358000, 0, '2019-03-01 09:28:50'),
(8, 'YH8C6', 'TEst', '326576909', 'sàasfsafas', 'àasf', 0, 0, 3759000, 0, '2019-03-01 11:53:13');

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

--
-- Đang đổ dữ liệu cho bảng `dong_bill_product`
--

INSERT INTO `dong_bill_product` (`bill_product_id`, `bill_product_bill`, `bill_product_product`, `bill_product_size`, `bill_product_color`, `bill_product_quantity`, `bill_product_price`, `bill_product_total_price`, `bill_product_time`) VALUES
(1, 1, 17, '', '', 1, 871500, 871500, '2019-01-31 15:42:58'),
(2, 1, 16, '', '', 1, 2446500, 2446500, '2019-01-31 15:42:58'),
(3, 1, 15, '', '', 1, 486500, 486500, '2019-01-31 15:42:58'),
(4, 1, 10, '34', 'http://order.xoidua.com/assets/images/products_color/TB2hqtdXH9YBuNjy0FgXXcxcXXa_!!2786693231.jpg_500x500q90.jpg', 3, 521500, 1564500, '2019-01-31 15:42:58'),
(5, 1, 10, '35', 'http://order.xoidua.com/assets/images/products_color/TB245LmXcIrBKNjSZK9XXagoVXa_!!2786693231.jpg_500x500q90.jpg', 3, 521500, 1564500, '2019-01-31 15:42:58'),
(6, 2, 17, '', '', 1, 871500, 871500, '2019-02-01 15:59:19'),
(7, 2, 16, '45', 'http://order.xoidua.com/assets/images/products_color/TB2bzsJoOAnBKNjSZFvXXaTKXXa-446338500.jpg_500x500q90.jpg', 1, 2446500, 2446500, '2019-02-01 15:59:19'),
(8, 2, 4, '42', 'http://order.xoidua.com/assets/images/products_color/O1CN012HhrXTrwn4Du6ig_!!2081299183.jpg_500x500q90.jpg', 1, 206500, 206500, '2019-02-01 15:59:19'),
(9, 3, 12, '', '', 1, 588000, 588000, '2019-02-28 16:56:47'),
(10, 3, 15, '', '', 2, 486500, 973000, '2019-02-28 16:56:47'),
(11, 4, 14, '', '', 1, 486500, 486500, '2019-02-28 22:19:01'),
(12, 4, 9, '', '', 1, 871500, 871500, '2019-02-28 22:19:01'),
(13, 4, 17, '', '', 1, 871500, 871500, '2019-02-28 22:19:01'),
(14, 5, 13, '', '', 1, 486500, 486500, '2019-03-01 09:12:26'),
(15, 5, 11, '', '', 1, 1043000, 1043000, '2019-03-01 09:12:26'),
(16, 6, 11, '', '', 1, 1043000, 1043000, '2019-03-01 09:13:45'),
(17, 6, 14, '', '', 1, 486500, 486500, '2019-03-01 09:13:45'),
(18, 7, 13, '', '', 1, 486500, 486500, '2019-03-01 09:28:50'),
(19, 7, 17, '', '', 1, 871500, 871500, '2019-03-01 09:28:50'),
(20, 8, 9, '', '', 1, 871500, 871500, '2019-03-01 11:53:13'),
(21, 8, 13, '', '', 1, 486500, 486500, '2019-03-01 11:53:13'),
(22, 8, 11, '', '', 1, 1043000, 1043000, '2019-03-01 11:53:13'),
(23, 8, 17, '', '', 1, 871500, 871500, '2019-03-01 11:53:13'),
(24, 8, 14, '32', 'http://localhost/dong/order/assets/images/products_color/TB2Vg9wIuOSBuNjy0FdXXbDnVXa_!!1923029750.jpg_500x500q90.jpg', 1, 486500, 486500, '2019-03-01 11:53:13');

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
(10, 'Việt Nam Xuất Khẩu', 'viet-nam-xuat-khau', 'quality', 0, 0, 0),
(11, 'XTEP', 'xtep', 'brand', 0, 0, 1544425982),
(12, 'Starling', 'starling', 'brand', 0, 0, 1544667679),
(13, 'Giày vải', 'giay-vai', 'shop', 1, 0, 1545730967),
(14, 'ZARA', 'zara', 'brand', 0, 0, 1546166645),
(15, 'ZSuo', 'zsuo', 'brand', 0, 0, 1546166908),
(16, 'Josiny', 'josiny', 'brand', 0, 0, 1546227498),
(17, 'Quần Áo', 'quan-ao', 'shop', 0, 0, 1546422323),
(18, 'Giày Tây', 'giay-tay', 'shop', 1, 0, 1546490912),
(19, 'Giày Sneakers', 'giay-sneakers', 'shop', 1, 0, 1546490928),
(20, 'Giày Sandals', 'giay-sandals', 'shop', 1, 0, 1546490952),
(21, 'Giày Lười', 'giay-luoi', 'shop', 1, 0, 1546490978),
(22, 'Áo Thun', 'ao-thun', 'shop', 17, 0, 1546491053),
(23, 'Áo Sơ Mi', 'ao-so-mi', 'shop', 17, 0, 1546491065),
(24, 'Áo Khoác', 'ao-khoac', 'shop', 17, 0, 1546491078),
(25, 'Áo Nỉ - Áo Len', 'ao-ni-ao-len', 'shop', 17, 0, 1546491105),
(26, 'Quần Short', 'quan-short', 'shop', 17, 0, 1546491138),
(27, 'Quần Jean', 'quan-jean', 'shop', 17, 0, 1546491155),
(28, 'Quần Kaki', 'quan-kaki', 'shop', 17, 0, 1546491161),
(29, 'Giày cao gót', 'giay-cao-got', 'shop', 1, 0, 1546491223),
(30, 'Giầy đế bằng', 'giay-de-bang', 'shop', 1, 0, 1546491233),
(31, 'Bốt', 'bot', 'shop', 1, 0, 1546491253),
(32, 'Enjeolon', 'enjeolon', 'brand', 0, 0, 1546499543),
(33, 'Quần vải', 'quan-vai', 'shop', 17, 0, 1546501719),
(34, 'LI-NING', 'lining', 'brand', 0, 0, 1547050841),
(35, 'Quản trị viên', 'quan-tri-vien', 'role', 0, 0, 1548992637),
(36, 'Biên tập viên', 'bien-tap-vien', 'role', 0, 0, 1548992896),
(37, 'Cộng tác viên', 'cong-tac-vien', 'role', 0, 0, 1548992912),
(38, 'Khách hàng', 'khach-hang', 'role', 0, 0, 1548992947),
(39, 'Chuyển khoản', 'chuyen-khoan', 'payment_method', 0, 0, 1551413601),
(40, 'Tiền mặt', 'tien-mat', 'payment_method', 0, 0, 1551413610),
(41, 'COD', 'cod', 'payment_method', 0, 0, 1551413658);

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
(1, 'images_product', 'remote', 'TB2FBEQv_mWBKNjSZFBXXXxUFXa_!!469256589-0-item_pic.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i4/469256589/TB2FBEQv_mWBKNjSZFBXXXxUFXa_!!469256589-0-item_pic.jpg_500x500q90.jpg', 1, 1, 1545030538),
(2, 'images_product', 'local', 'TB2FBEQv_mWBKNjSZFBXXXxUFXa_!!469256589-0-item_pic.jpg_500x500q90.jpg', 'assets/images/products/TB2FBEQv_mWBKNjSZFBXXXxUFXa_!!469256589-0-item_pic.jpg_500x500q90.jpg', 1, 1, 1545030538),
(3, 'images_product', 'remote', 'TB21UlYvFooBKNjSZPhXXc2CXXa_!!469256589.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i4/469256589/TB21UlYvFooBKNjSZPhXXc2CXXa_!!469256589.jpg_500x500q90.jpg', 1, 1, 1545030538),
(4, 'images_product', 'local', 'TB21UlYvFooBKNjSZPhXXc2CXXa_!!469256589.jpg_500x500q90.jpg', 'assets/images/products/TB21UlYvFooBKNjSZPhXXc2CXXa_!!469256589.jpg_500x500q90.jpg', 1, 1, 1545030538),
(5, 'images_product', 'remote', 'TB2U4.4vFooBKNjSZFPXXXa2XXa_!!469256589.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i1/469256589/TB2U4.4vFooBKNjSZFPXXXa2XXa_!!469256589.jpg_500x500q90.jpg', 1, 1, 1545030538),
(6, 'images_product', 'local', 'TB2U4.4vFooBKNjSZFPXXXa2XXa_!!469256589.jpg_500x500q90.jpg', 'assets/images/products/TB2U4.4vFooBKNjSZFPXXXa2XXa_!!469256589.jpg_500x500q90.jpg', 1, 1, 1545030538),
(7, 'images_product', 'remote', 'TB28SpLvIUrBKNjSZPxXXX00pXa_!!469256589.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i2/469256589/TB28SpLvIUrBKNjSZPxXXX00pXa_!!469256589.jpg_500x500q90.jpg', 1, 1, 1545030538),
(8, 'images_product', 'local', 'TB28SpLvIUrBKNjSZPxXXX00pXa_!!469256589.jpg_500x500q90.jpg', 'assets/images/products/TB28SpLvIUrBKNjSZPxXXX00pXa_!!469256589.jpg_500x500q90.jpg', 1, 1, 1545030538),
(9, 'images_product', 'remote', 'TB2jWkLvRsmBKNjSZFsXXaXSVXa_!!469256589.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i2/469256589/TB2jWkLvRsmBKNjSZFsXXaXSVXa_!!469256589.jpg_500x500q90.jpg', 1, 1, 1545030538),
(10, 'images_product', 'local', 'TB2jWkLvRsmBKNjSZFsXXaXSVXa_!!469256589.jpg_500x500q90.jpg', 'assets/images/products/TB2jWkLvRsmBKNjSZFsXXaXSVXa_!!469256589.jpg_500x500q90.jpg', 1, 1, 1545030538),
(11, 'images_product', 'remote', 'O1CN01elol4Y1CsKLf2YGRJ_!!0-item_pic.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i1/2211760136/O1CN01elol4Y1CsKLf2YGRJ_!!0-item_pic.jpg_500x500q90.jpg', 1, 2, 1545640740),
(12, 'images_product', 'local', 'O1CN01elol4Y1CsKLf2YGRJ_!!0-item_pic.jpg_500x500q90.jpg', 'assets/images/products/O1CN01elol4Y1CsKLf2YGRJ_!!0-item_pic.jpg_500x500q90.jpg', 1, 2, 1545640740),
(13, 'images_product', 'remote', 'O1CN01K00k7m1CsKLYBvdVA_!!2211760136.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i1/2211760136/O1CN01K00k7m1CsKLYBvdVA_!!2211760136.jpg_500x500q90.jpg', 1, 2, 1545640740),
(14, 'images_product', 'local', 'O1CN01K00k7m1CsKLYBvdVA_!!2211760136.jpg_500x500q90.jpg', 'assets/images/products/O1CN01K00k7m1CsKLYBvdVA_!!2211760136.jpg_500x500q90.jpg', 1, 2, 1545640740),
(15, 'images_product', 'remote', 'TB2yuC8i63z9KJjy0FmXXXiwXXa_!!2211760136.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i3/2211760136/TB2yuC8i63z9KJjy0FmXXXiwXXa_!!2211760136.jpg_500x500q90.jpg', 1, 2, 1545640740),
(16, 'images_product', 'local', 'TB2yuC8i63z9KJjy0FmXXXiwXXa_!!2211760136.jpg_500x500q90.jpg', 'assets/images/products/TB2yuC8i63z9KJjy0FmXXXiwXXa_!!2211760136.jpg_500x500q90.jpg', 1, 2, 1545640740),
(17, 'images_product', 'remote', 'O1CN011CsKKQ8vNens7Tr_!!2211760136.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i1/2211760136/O1CN011CsKKQ8vNens7Tr_!!2211760136.jpg_500x500q90.jpg', 1, 2, 1545640740),
(18, 'images_product', 'local', 'O1CN011CsKKQ8vNens7Tr_!!2211760136.jpg_500x500q90.jpg', 'assets/images/products/O1CN011CsKKQ8vNens7Tr_!!2211760136.jpg_500x500q90.jpg', 1, 2, 1545640740),
(19, 'images_product', 'remote', 'O1CN01cF3P0Y1CsKLdna1Vr_!!2211760136.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i3/2211760136/O1CN01cF3P0Y1CsKLdna1Vr_!!2211760136.jpg_500x500q90.jpg', 1, 2, 1545640740),
(20, 'images_product', 'local', 'O1CN01cF3P0Y1CsKLdna1Vr_!!2211760136.jpg_500x500q90.jpg', 'assets/images/products/O1CN01cF3P0Y1CsKLdna1Vr_!!2211760136.jpg_500x500q90.jpg', 1, 2, 1545640740),
(21, 'images_product', 'remote', 'O1CN014wk2pu225eH06C6yn_!!738517069.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/https://img.alicdn.com/imgextra/i3/738517069/O1CN014wk2pu225eH06C6yn_!!738517069.jpg_500x500q90.jpg', 1, 3, 1545646935),
(22, 'images_product', 'local', 'O1CN014wk2pu225eH06C6yn_!!738517069.jpg_500x500q90.jpg', 'assets/images/products/O1CN014wk2pu225eH06C6yn_!!738517069.jpg_500x500q90.jpg', 1, 3, 1545646935),
(23, 'images_product', 'remote', 'O1CN01fDF14z225eH1U7Nva_!!738517069.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/https://img.alicdn.com/imgextra/i1/738517069/O1CN01fDF14z225eH1U7Nva_!!738517069.jpg_500x500q90.jpg', 1, 3, 1545646935),
(24, 'images_product', 'local', 'O1CN01fDF14z225eH1U7Nva_!!738517069.jpg_500x500q90.jpg', 'assets/images/products/O1CN01fDF14z225eH1U7Nva_!!738517069.jpg_500x500q90.jpg', 1, 3, 1545646935),
(25, 'images_product', 'remote', 'TB24bqgqNGYBuNjy0FnXXX5lpXa_!!738517069.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/https://img.alicdn.com/imgextra/i3/738517069/TB24bqgqNGYBuNjy0FnXXX5lpXa_!!738517069.jpg_500x500q90.jpg', 1, 3, 1545646935),
(27, 'images_product', 'remote', 'O1CN01d5hZD1225eGVDSt80_!!738517069.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/https://img.alicdn.com/imgextra/i4/738517069/O1CN01d5hZD1225eGVDSt80_!!738517069.jpg_500x500q90.jpg', 1, 3, 1545646935),
(28, 'images_product', 'local', 'O1CN01d5hZD1225eGVDSt80_!!738517069.jpg_500x500q90.jpg', 'assets/images/products/O1CN01d5hZD1225eGVDSt80_!!738517069.jpg_500x500q90.jpg', 1, 3, 1545646935),
(29, 'images_product', 'remote', 'TB2IsxZqNSYBuNjSspjXXX73VXa_!!738517069.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/https://img.alicdn.com/imgextra/i4/738517069/TB2IsxZqNSYBuNjSspjXXX73VXa_!!738517069.jpg_500x500q90.jpg', 1, 3, 1545646935),
(31, 'images_product', 'remote', 'TB2RXcjAVuWBuNjSszbXXcS7FXa_!!2081299183-0-item_pic.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i2/2081299183/TB2RXcjAVuWBuNjSszbXXcS7FXa_!!2081299183-0-item_pic.jpg_500x500q90.jpg', 1, 4, 1545703536),
(32, 'images_product', 'local', 'TB2RXcjAVuWBuNjSszbXXcS7FXa_!!2081299183-0-item_pic.jpg_500x500q90.jpg', 'assets/images/products/TB2RXcjAVuWBuNjSszbXXcS7FXa_!!2081299183-0-item_pic.jpg_500x500q90.jpg', 1, 4, 1545703536),
(33, 'images_product', 'remote', 'TB2EUBZviCYBuNkSnaVXXcMsVXa_!!2081299183-0-item_pic.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i1/2081299183/TB2EUBZviCYBuNkSnaVXXcMsVXa_!!2081299183-0-item_pic.jpg_500x500q90.jpg', 1, 4, 1545703536),
(34, 'images_product', 'local', 'TB2EUBZviCYBuNkSnaVXXcMsVXa_!!2081299183-0-item_pic.jpg_500x500q90.jpg', 'assets/images/products/TB2EUBZviCYBuNkSnaVXXcMsVXa_!!2081299183-0-item_pic.jpg_500x500q90.jpg', 1, 4, 1545703536),
(35, 'images_product', 'remote', 'TB2ehMgsS8YBeNkSnb4XXaevFXa_!!2081299183.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i3/2081299183/TB2ehMgsS8YBeNkSnb4XXaevFXa_!!2081299183.jpg_500x500q90.jpg', 1, 4, 1545703536),
(36, 'images_product', 'local', 'TB2ehMgsS8YBeNkSnb4XXaevFXa_!!2081299183.jpg_500x500q90.jpg', 'assets/images/products/TB2ehMgsS8YBeNkSnb4XXaevFXa_!!2081299183.jpg_500x500q90.jpg', 1, 4, 1545703536),
(37, 'images_product', 'remote', 'TB2PmhcBmBYBeNjy0FeXXbnmFXa_!!2081299183.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i2/2081299183/TB2PmhcBmBYBeNjy0FeXXbnmFXa_!!2081299183.jpg_500x500q90.jpg', 1, 4, 1545703536),
(38, 'images_product', 'local', 'TB2PmhcBmBYBeNjy0FeXXbnmFXa_!!2081299183.jpg_500x500q90.jpg', 'assets/images/products/TB2PmhcBmBYBeNjy0FeXXbnmFXa_!!2081299183.jpg_500x500q90.jpg', 1, 4, 1545703536),
(39, 'images_product', 'remote', 'TB2j20bAyCYBuNkHFCcXXcHtVXa_!!2081299183.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i2/2081299183/TB2j20bAyCYBuNkHFCcXXcHtVXa_!!2081299183.jpg_500x500q90.jpg', 1, 4, 1545703536),
(40, 'images_product', 'local', 'TB2j20bAyCYBuNkHFCcXXcHtVXa_!!2081299183.jpg_500x500q90.jpg', 'assets/images/products/TB2j20bAyCYBuNkHFCcXXcHtVXa_!!2081299183.jpg_500x500q90.jpg', 1, 4, 1545703536),
(41, 'images_product', 'remote', 'O1CN011V3vRknqxg0fNRX_!!0-item_pic.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i2/2401152598/O1CN011V3vRknqxg0fNRX_!!0-item_pic.jpg_500x500q90.jpg', 1, 5, 1545731465),
(42, 'images_product', 'local', 'O1CN011V3vRknqxg0fNRX_!!0-item_pic.jpg_500x500q90.jpg', 'assets/images/products/O1CN011V3vRknqxg0fNRX_!!0-item_pic.jpg_500x500q90.jpg', 1, 5, 1545731465),
(43, 'images_product', 'remote', 'O1CN011V3vRl2fddT3uAn_!!2401152598.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i1/2401152598/O1CN011V3vRl2fddT3uAn_!!2401152598.jpg_500x500q90.jpg', 1, 5, 1545731465),
(44, 'images_product', 'local', 'O1CN011V3vRl2fddT3uAn_!!2401152598.jpg_500x500q90.jpg', 'assets/images/products/O1CN011V3vRl2fddT3uAn_!!2401152598.jpg_500x500q90.jpg', 1, 5, 1545731465),
(45, 'images_product', 'remote', 'TB2Hx0kuz7nBKNjSZLeXXbxCFXa_!!2401152598-0-item_pic.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i4/2401152598/TB2Hx0kuz7nBKNjSZLeXXbxCFXa_!!2401152598-0-item_pic.jpg_500x500q90.jpg', 1, 5, 1545731465),
(46, 'images_product', 'local', 'TB2Hx0kuz7nBKNjSZLeXXbxCFXa_!!2401152598-0-item_pic.jpg_500x500q90.jpg', 'assets/images/products/TB2Hx0kuz7nBKNjSZLeXXbxCFXa_!!2401152598-0-item_pic.jpg_500x500q90.jpg', 1, 5, 1545731465),
(47, 'images_product', 'remote', 'TB2ITQfupkoBKNjSZFEXXbrEVXa_!!2401152598.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i3/2401152598/TB2ITQfupkoBKNjSZFEXXbrEVXa_!!2401152598.jpg_500x500q90.jpg', 1, 5, 1545731465),
(48, 'images_product', 'local', 'TB2ITQfupkoBKNjSZFEXXbrEVXa_!!2401152598.jpg_500x500q90.jpg', 'assets/images/products/TB2ITQfupkoBKNjSZFEXXbrEVXa_!!2401152598.jpg_500x500q90.jpg', 1, 5, 1545731465),
(49, 'images_product', 'remote', 'TB2IY8HwYZnBKNjSZFrXXaRLFXa_!!2401152598.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i2/2401152598/TB2IY8HwYZnBKNjSZFrXXaRLFXa_!!2401152598.jpg_500x500q90.jpg', 1, 5, 1545731465),
(50, 'images_product', 'local', 'TB2IY8HwYZnBKNjSZFrXXaRLFXa_!!2401152598.jpg_500x500q90.jpg', 'assets/images/products/TB2IY8HwYZnBKNjSZFrXXaRLFXa_!!2401152598.jpg_500x500q90.jpg', 1, 5, 1545731465),
(51, 'images_product', 'remote', 'TB1qXcDcljTBKNjSZFNXXasFXXa_!!0-item_pic.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i3/1016704866/TB1qXcDcljTBKNjSZFNXXasFXXa_!!0-item_pic.jpg_500x500q90.jpg', 1, 6, 1546166382),
(52, 'images_product', 'local', 'TB1qXcDcljTBKNjSZFNXXasFXXa_!!0-item_pic.jpg_500x500q90.jpg', 'assets/images/products/TB1qXcDcljTBKNjSZFNXXasFXXa_!!0-item_pic.jpg_500x500q90.jpg', 1, 6, 1546166382),
(53, 'images_product', 'remote', 'TB20WfimrSYBuNjSspfXXcZCpXa_!!1016704866.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i1/1016704866/TB20WfimrSYBuNjSspfXXcZCpXa_!!1016704866.jpg_500x500q90.jpg', 1, 6, 1546166382),
(54, 'images_product', 'local', 'TB20WfimrSYBuNjSspfXXcZCpXa_!!1016704866.jpg_500x500q90.jpg', 'assets/images/products/TB20WfimrSYBuNjSspfXXcZCpXa_!!1016704866.jpg_500x500q90.jpg', 1, 6, 1546166382),
(55, 'images_product', 'remote', 'TB2ddx6iQOWBuNjSsppXXXPgpXa_!!1016704866.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i3/1016704866/TB2ddx6iQOWBuNjSsppXXXPgpXa_!!1016704866.jpg_500x500q90.jpg', 1, 6, 1546166382),
(56, 'images_product', 'local', 'TB2ddx6iQOWBuNjSsppXXXPgpXa_!!1016704866.jpg_500x500q90.jpg', 'assets/images/products/TB2ddx6iQOWBuNjSsppXXXPgpXa_!!1016704866.jpg_500x500q90.jpg', 1, 6, 1546166382),
(57, 'images_product', 'remote', 'TB2u9AOhCBYBeNjy0FeXXbnmFXa_!!1016704866.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i2/1016704866/TB2u9AOhCBYBeNjy0FeXXbnmFXa_!!1016704866.jpg_500x500q90.jpg', 1, 6, 1546166382),
(58, 'images_product', 'local', 'TB2u9AOhCBYBeNjy0FeXXbnmFXa_!!1016704866.jpg_500x500q90.jpg', 'assets/images/products/TB2u9AOhCBYBeNjy0FeXXbnmFXa_!!1016704866.jpg_500x500q90.jpg', 1, 6, 1546166382),
(59, 'images_product', 'remote', 'TB2FW1viH1YBuNjSszhXXcUsFXa_!!1016704866.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i2/1016704866/TB2FW1viH1YBuNjSszhXXcUsFXa_!!1016704866.jpg_500x500q90.jpg', 1, 6, 1546166382),
(60, 'images_product', 'local', 'TB2FW1viH1YBuNjSszhXXcUsFXa_!!1016704866.jpg_500x500q90.jpg', 'assets/images/products/TB2FW1viH1YBuNjSszhXXcUsFXa_!!1016704866.jpg_500x500q90.jpg', 1, 6, 1546166382),
(61, 'images_product', 'remote', 'O1CN01FtMMiL1POdgXubVFk_!!0-item_pic.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i3/2228361831/O1CN01FtMMiL1POdgXubVFk_!!0-item_pic.jpg_500x500q90.jpg', 1, 7, 1546166723),
(62, 'images_product', 'local', 'O1CN01FtMMiL1POdgXubVFk_!!0-item_pic.jpg_500x500q90.jpg', 'assets/images/products/O1CN01FtMMiL1POdgXubVFk_!!0-item_pic.jpg_500x500q90.jpg', 1, 7, 1546166723),
(63, 'images_product', 'remote', 'TB2JU0klborBKNjSZFjXXc_SpXa_!!2228361831.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i3/2228361831/TB2JU0klborBKNjSZFjXXc_SpXa_!!2228361831.jpg_500x500q90.jpg', 1, 7, 1546166723),
(64, 'images_product', 'local', 'TB2JU0klborBKNjSZFjXXc_SpXa_!!2228361831.jpg_500x500q90.jpg', 'assets/images/products/TB2JU0klborBKNjSZFjXXc_SpXa_!!2228361831.jpg_500x500q90.jpg', 1, 7, 1546166723),
(65, 'images_product', 'remote', 'TB2pUyBEN9YBuNjy0FfXXXIsVXa_!!2228361831.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i3/2228361831/TB2pUyBEN9YBuNjy0FfXXXIsVXa_!!2228361831.jpg_500x500q90.jpg', 1, 7, 1546166723),
(66, 'images_product', 'local', 'TB2pUyBEN9YBuNjy0FfXXXIsVXa_!!2228361831.jpg_500x500q90.jpg', 'assets/images/products/TB2pUyBEN9YBuNjy0FfXXXIsVXa_!!2228361831.jpg_500x500q90.jpg', 1, 7, 1546166723),
(67, 'images_product', 'remote', 'TB2nZNxEMmTBuNjy1XbXXaMrVXa_!!2228361831.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i2/2228361831/TB2nZNxEMmTBuNjy1XbXXaMrVXa_!!2228361831.jpg_500x500q90.jpg', 1, 7, 1546166723),
(68, 'images_product', 'local', 'TB2nZNxEMmTBuNjy1XbXXaMrVXa_!!2228361831.jpg_500x500q90.jpg', 'assets/images/products/TB2nZNxEMmTBuNjy1XbXXaMrVXa_!!2228361831.jpg_500x500q90.jpg', 1, 7, 1546166723),
(69, 'images_product', 'remote', 'TB2evQTwfiSBuNkSnhJXXbDcpXa_!!2228361831.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i3/2228361831/TB2evQTwfiSBuNkSnhJXXbDcpXa_!!2228361831.jpg_500x500q90.jpg', 1, 7, 1546166723),
(70, 'images_product', 'local', 'TB2evQTwfiSBuNkSnhJXXbDcpXa_!!2228361831.jpg_500x500q90.jpg', 'assets/images/products/TB2evQTwfiSBuNkSnhJXXbDcpXa_!!2228361831.jpg_500x500q90.jpg', 1, 7, 1546166723),
(71, 'images_product', 'remote', 'O1CN01gaNn601syTWoT2zb5_!!0-item_pic.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i2/1017595835/O1CN01gaNn601syTWoT2zb5_!!0-item_pic.jpg_500x500q90.jpg', 1, 8, 1546167008),
(72, 'images_product', 'local', 'O1CN01gaNn601syTWoT2zb5_!!0-item_pic.jpg_500x500q90.jpg', 'assets/images/products/O1CN01gaNn601syTWoT2zb5_!!0-item_pic.jpg_500x500q90.jpg', 1, 8, 1546167008),
(73, 'images_product', 'remote', 'O1CN016DMRX31syTWBo5M2n_!!1017595835.png_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i3/1017595835/O1CN016DMRX31syTWBo5M2n_!!1017595835.png_500x500q90.jpg', 1, 8, 1546167008),
(74, 'images_product', 'local', 'O1CN016DMRX31syTWBo5M2n_!!1017595835.png_500x500q90.jpg', 'assets/images/products/O1CN016DMRX31syTWBo5M2n_!!1017595835.png_500x500q90.jpg', 1, 8, 1546167008),
(75, 'images_product', 'remote', 'O1CN01o2mg3l1syTWwxVfME_!!1017595835.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i2/1017595835/O1CN01o2mg3l1syTWwxVfME_!!1017595835.jpg_500x500q90.jpg', 1, 8, 1546167008),
(76, 'images_product', 'local', 'O1CN01o2mg3l1syTWwxVfME_!!1017595835.jpg_500x500q90.jpg', 'assets/images/products/O1CN01o2mg3l1syTWwxVfME_!!1017595835.jpg_500x500q90.jpg', 1, 8, 1546167008),
(77, 'images_product', 'remote', 'O1CN01CvSmVf1syTWBo6d4I_!!1017595835.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i4/1017595835/O1CN01CvSmVf1syTWBo6d4I_!!1017595835.jpg_500x500q90.jpg', 1, 8, 1546167008),
(78, 'images_product', 'local', 'O1CN01CvSmVf1syTWBo6d4I_!!1017595835.jpg_500x500q90.jpg', 'assets/images/products/O1CN01CvSmVf1syTWBo6d4I_!!1017595835.jpg_500x500q90.jpg', 1, 8, 1546167008),
(79, 'images_product', 'remote', 'O1CN01xi4MFx1syTWo0RDWb_!!1017595835.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i1/1017595835/O1CN01xi4MFx1syTWo0RDWb_!!1017595835.jpg_500x500q90.jpg', 1, 8, 1546167008),
(80, 'images_product', 'local', 'O1CN01xi4MFx1syTWo0RDWb_!!1017595835.jpg_500x500q90.jpg', 'assets/images/products/O1CN01xi4MFx1syTWo0RDWb_!!1017595835.jpg_500x500q90.jpg', 1, 8, 1546167008),
(81, 'images_product', 'remote', 'O1CN018bncoY1yGrVpKZpW2_!!467426552.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/https://img.alicdn.com/bao/uploaded/i1/467426552/O1CN018bncoY1yGrVpKZpW2_!!467426552.jpg_500x500q90.jpg', 1, 9, 1546227599),
(82, 'images_product', 'local', 'O1CN018bncoY1yGrVpKZpW2_!!467426552.jpg_500x500q90.jpg', 'assets/images/products/O1CN018bncoY1yGrVpKZpW2_!!467426552.jpg_500x500q90.jpg', 1, 9, 1546227599),
(83, 'images_product', 'remote', 'O1CN011yGrUXNDZnKkdZI_!!467426552.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/https://img.alicdn.com/imgextra/i4/467426552/O1CN011yGrUXNDZnKkdZI_!!467426552.jpg_500x500q90.jpg', 1, 9, 1546227599),
(84, 'images_product', 'local', 'O1CN011yGrUXNDZnKkdZI_!!467426552.jpg_500x500q90.jpg', 'assets/images/products/O1CN011yGrUXNDZnKkdZI_!!467426552.jpg_500x500q90.jpg', 1, 9, 1546227599),
(85, 'images_product', 'remote', 'O1CN011yGrUWpCPJYdtke_!!467426552.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/https://img.alicdn.com/imgextra/i4/467426552/O1CN011yGrUWpCPJYdtke_!!467426552.jpg_500x500q90.jpg', 1, 9, 1546227599),
(86, 'images_product', 'local', 'O1CN011yGrUWpCPJYdtke_!!467426552.jpg_500x500q90.jpg', 'assets/images/products/O1CN011yGrUWpCPJYdtke_!!467426552.jpg_500x500q90.jpg', 1, 9, 1546227599),
(87, 'images_product', 'remote', 'O1CN011yGrUWpAOVB2ztV_!!467426552.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/https://img.alicdn.com/imgextra/i1/467426552/O1CN011yGrUWpAOVB2ztV_!!467426552.jpg_500x500q90.jpg', 1, 9, 1546227599),
(88, 'images_product', 'local', 'O1CN011yGrUWpAOVB2ztV_!!467426552.jpg_500x500q90.jpg', 'assets/images/products/O1CN011yGrUWpAOVB2ztV_!!467426552.jpg_500x500q90.jpg', 1, 9, 1546227599),
(89, 'images_product', 'remote', 'O1CN011yGrUVM3M3F9TUq_!!467426552.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/https://img.alicdn.com/imgextra/i2/467426552/O1CN011yGrUVM3M3F9TUq_!!467426552.jpg_500x500q90.jpg', 1, 9, 1546227599),
(90, 'images_product', 'local', 'O1CN011yGrUVM3M3F9TUq_!!467426552.jpg_500x500q90.jpg', 'assets/images/products/O1CN011yGrUVM3M3F9TUq_!!467426552.jpg_500x500q90.jpg', 1, 9, 1546227599),
(91, 'images_product', 'remote', 'TB1MKJ1XGSWBuNjSsrbXXa0mVXa_!!0-item_pic.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i4/2786693231/TB1MKJ1XGSWBuNjSsrbXXa0mVXa_!!0-item_pic.jpg_500x500q90.jpg', 1, 10, 1546228737),
(92, 'images_product', 'local', 'TB1MKJ1XGSWBuNjSsrbXXa0mVXa_!!0-item_pic.jpg_500x500q90.jpg', 'assets/images/products/TB1MKJ1XGSWBuNjSsrbXXa0mVXa_!!0-item_pic.jpg_500x500q90.jpg', 1, 10, 1546228737),
(93, 'images_product', 'remote', 'TB2mgSUXStYBeNjSspaXXaOOFXa_!!2786693231.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i2/2786693231/TB2mgSUXStYBeNjSspaXXaOOFXa_!!2786693231.jpg_500x500q90.jpg', 1, 10, 1546228737),
(94, 'images_product', 'local', 'TB2mgSUXStYBeNjSspaXXaOOFXa_!!2786693231.jpg_500x500q90.jpg', 'assets/images/products/TB2mgSUXStYBeNjSspaXXaOOFXa_!!2786693231.jpg_500x500q90.jpg', 1, 10, 1546228737),
(95, 'images_product', 'remote', 'TB2I1LyXljTBKNjSZFuXXb0HFXa_!!2786693231.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i4/2786693231/TB2I1LyXljTBKNjSZFuXXb0HFXa_!!2786693231.jpg_500x500q90.jpg', 1, 10, 1546228737),
(96, 'images_product', 'local', 'TB2I1LyXljTBKNjSZFuXXb0HFXa_!!2786693231.jpg_500x500q90.jpg', 'assets/images/products/TB2I1LyXljTBKNjSZFuXXb0HFXa_!!2786693231.jpg_500x500q90.jpg', 1, 10, 1546228737),
(97, 'images_product', 'remote', 'TB2QxGUXStYBeNjSspkXXbU8VXa_!!2786693231.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i4/2786693231/TB2QxGUXStYBeNjSspkXXbU8VXa_!!2786693231.jpg_500x500q90.jpg', 1, 10, 1546228737),
(98, 'images_product', 'local', 'TB2QxGUXStYBeNjSspkXXbU8VXa_!!2786693231.jpg_500x500q90.jpg', 'assets/images/products/TB2QxGUXStYBeNjSspkXXbU8VXa_!!2786693231.jpg_500x500q90.jpg', 1, 10, 1546228737),
(99, 'images_product', 'remote', 'TB2em4dXL1TBuNjy0FjXXajyXXa_!!2786693231.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i3/2786693231/TB2em4dXL1TBuNjy0FjXXajyXXa_!!2786693231.jpg_500x500q90.jpg', 1, 10, 1546228737),
(100, 'images_product', 'local', 'TB2em4dXL1TBuNjy0FjXXajyXXa_!!2786693231.jpg_500x500q90.jpg', 'assets/images/products/TB2em4dXL1TBuNjy0FjXXajyXXa_!!2786693231.jpg_500x500q90.jpg', 1, 10, 1546228737),
(101, 'images_product', 'remote', 'O1CN01Ubmrcd1IcC5tZCvj7_!!0-item_pic.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i1/1860270913/O1CN01Ubmrcd1IcC5tZCvj7_!!0-item_pic.jpg_500x500q90.jpg', 1, 11, 1546499506),
(102, 'images_product', 'local', 'O1CN01Ubmrcd1IcC5tZCvj7_!!0-item_pic.jpg_500x500q90.jpg', 'assets/images/products/O1CN01Ubmrcd1IcC5tZCvj7_!!0-item_pic.jpg_500x500q90.jpg', 1, 11, 1546499506),
(103, 'images_product', 'remote', 'O1CN01sYoPp21IcC5tZBJbm_!!0-item_pic.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i4/1860270913/O1CN01sYoPp21IcC5tZBJbm_!!0-item_pic.jpg_500x500q90.jpg', 1, 11, 1546499506),
(104, 'images_product', 'local', 'O1CN01sYoPp21IcC5tZBJbm_!!0-item_pic.jpg_500x500q90.jpg', 'assets/images/products/O1CN01sYoPp21IcC5tZBJbm_!!0-item_pic.jpg_500x500q90.jpg', 1, 11, 1546499506),
(105, 'images_product', 'remote', 'O1CN01wF7hNu1IcC5Yz6Qx8_!!0-item_pic.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i4/1860270913/O1CN01wF7hNu1IcC5Yz6Qx8_!!0-item_pic.jpg_500x500q90.jpg', 1, 11, 1546499506),
(106, 'images_product', 'local', 'O1CN01wF7hNu1IcC5Yz6Qx8_!!0-item_pic.jpg_500x500q90.jpg', 'assets/images/products/O1CN01wF7hNu1IcC5Yz6Qx8_!!0-item_pic.jpg_500x500q90.jpg', 1, 11, 1546499506),
(107, 'images_product', 'remote', 'O1CN011IcC4FFA95dI8oT_!!1860270913.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i4/1860270913/O1CN011IcC4FFA95dI8oT_!!1860270913.jpg_500x500q90.jpg', 1, 11, 1546499506),
(108, 'images_product', 'local', 'O1CN011IcC4FFA95dI8oT_!!1860270913.jpg_500x500q90.jpg', 'assets/images/products/O1CN011IcC4FFA95dI8oT_!!1860270913.jpg_500x500q90.jpg', 1, 11, 1546499506),
(109, 'images_product', 'remote', 'O1CN011IcC4E12uT1LEKB_!!1860270913.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i3/1860270913/O1CN011IcC4E12uT1LEKB_!!1860270913.jpg_500x500q90.jpg', 1, 11, 1546499506),
(110, 'images_product', 'local', 'O1CN011IcC4E12uT1LEKB_!!1860270913.jpg_500x500q90.jpg', 'assets/images/products/O1CN011IcC4E12uT1LEKB_!!1860270913.jpg_500x500q90.jpg', 1, 11, 1546499506),
(111, 'images_product', 'remote', 'O1CN01pElVWL1IcC5zZ1Om6_!!0-item_pic.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i2/1860270913/O1CN01pElVWL1IcC5zZ1Om6_!!0-item_pic.jpg_500x500q90.jpg', 1, 12, 1546500606),
(112, 'images_product', 'local', 'O1CN01pElVWL1IcC5zZ1Om6_!!0-item_pic.jpg_500x500q90.jpg', 'assets/images/products/O1CN01pElVWL1IcC5zZ1Om6_!!0-item_pic.jpg_500x500q90.jpg', 1, 12, 1546500606),
(113, 'images_product', 'remote', 'O1CN011IcC4HizDjllHy9_!!1860270913.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i3/1860270913/O1CN011IcC4HizDjllHy9_!!1860270913.jpg_500x500q90.jpg', 1, 12, 1546500606),
(114, 'images_product', 'local', 'O1CN011IcC4HizDjllHy9_!!1860270913.jpg_500x500q90.jpg', 'assets/images/products/O1CN011IcC4HizDjllHy9_!!1860270913.jpg_500x500q90.jpg', 1, 12, 1546500606),
(115, 'images_product', 'remote', 'O1CN011IcC4IBPeOhHnCQ_!!1860270913.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i3/1860270913/O1CN011IcC4IBPeOhHnCQ_!!1860270913.jpg_500x500q90.jpg', 1, 12, 1546500606),
(116, 'images_product', 'local', 'O1CN011IcC4IBPeOhHnCQ_!!1860270913.jpg_500x500q90.jpg', 'assets/images/products/O1CN011IcC4IBPeOhHnCQ_!!1860270913.jpg_500x500q90.jpg', 1, 12, 1546500606),
(117, 'images_product', 'remote', 'O1CN011IcC4I2BvNZoL5B_!!1860270913.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i4/1860270913/O1CN011IcC4I2BvNZoL5B_!!1860270913.jpg_500x500q90.jpg', 1, 12, 1546500606),
(118, 'images_product', 'local', 'O1CN011IcC4I2BvNZoL5B_!!1860270913.jpg_500x500q90.jpg', 'assets/images/products/O1CN011IcC4I2BvNZoL5B_!!1860270913.jpg_500x500q90.jpg', 1, 12, 1546500606),
(119, 'images_product', 'remote', 'O1CN011IcC4IixgIMDjZX_!!1860270913.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i1/1860270913/O1CN011IcC4IixgIMDjZX_!!1860270913.jpg_500x500q90.jpg', 1, 12, 1546500606),
(120, 'images_product', 'local', 'O1CN011IcC4IixgIMDjZX_!!1860270913.jpg_500x500q90.jpg', 'assets/images/products/O1CN011IcC4IixgIMDjZX_!!1860270913.jpg_500x500q90.jpg', 1, 12, 1546500606),
(121, 'images_product', 'remote', 'O1CN012LtY77aJcOFltjs_!!0-item_pic.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i2/1923029750/O1CN012LtY77aJcOFltjs_!!0-item_pic.jpg_500x500q90.jpg', 1, 13, 1546501578),
(122, 'images_product', 'local', 'O1CN012LtY77aJcOFltjs_!!0-item_pic.jpg_500x500q90.jpg', 'assets/images/products/O1CN012LtY77aJcOFltjs_!!0-item_pic.jpg_500x500q90.jpg', 1, 13, 1546501578),
(123, 'images_product', 'remote', 'TB2DS8nbCrqK1RjSZK9XXXyypXa_!!1923029750.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i4/1923029750/TB2DS8nbCrqK1RjSZK9XXXyypXa_!!1923029750.jpg_500x500q90.jpg', 1, 13, 1546501578),
(124, 'images_product', 'local', 'TB2DS8nbCrqK1RjSZK9XXXyypXa_!!1923029750.jpg_500x500q90.jpg', 'assets/images/products/TB2DS8nbCrqK1RjSZK9XXXyypXa_!!1923029750.jpg_500x500q90.jpg', 1, 13, 1546501578),
(125, 'images_product', 'remote', 'TB2wutpbwHqK1RjSZFPXXcwapXa_!!1923029750.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i3/1923029750/TB2wutpbwHqK1RjSZFPXXcwapXa_!!1923029750.jpg_500x500q90.jpg', 1, 13, 1546501578),
(126, 'images_product', 'local', 'TB2wutpbwHqK1RjSZFPXXcwapXa_!!1923029750.jpg_500x500q90.jpg', 'assets/images/products/TB2wutpbwHqK1RjSZFPXXcwapXa_!!1923029750.jpg_500x500q90.jpg', 1, 13, 1546501578),
(127, 'images_product', 'remote', 'TB2ftpqbpYqK1RjSZLeXXbXppXa_!!1923029750.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i4/1923029750/TB2ftpqbpYqK1RjSZLeXXbXppXa_!!1923029750.jpg_500x500q90.jpg', 1, 13, 1546501578),
(128, 'images_product', 'local', 'TB2ftpqbpYqK1RjSZLeXXbXppXa_!!1923029750.jpg_500x500q90.jpg', 'assets/images/products/TB2ftpqbpYqK1RjSZLeXXbXppXa_!!1923029750.jpg_500x500q90.jpg', 1, 13, 1546501578),
(129, 'images_product', 'remote', 'O1CN012LtY7BnCCxigW4m_!!1923029750.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i4/1923029750/O1CN012LtY7BnCCxigW4m_!!1923029750.jpg_500x500q90.jpg', 1, 13, 1546501578),
(130, 'images_product', 'local', 'O1CN012LtY7BnCCxigW4m_!!1923029750.jpg_500x500q90.jpg', 'assets/images/products/O1CN012LtY7BnCCxigW4m_!!1923029750.jpg_500x500q90.jpg', 1, 13, 1546501578),
(131, 'images_product', 'remote', 'O1CN012LtY7IH7Xv568ZR_!!0-item_pic.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i1/1923029750/O1CN012LtY7IH7Xv568ZR_!!0-item_pic.jpg_500x500q90.jpg', 1, 14, 1546501823),
(132, 'images_product', 'local', 'O1CN012LtY7IH7Xv568ZR_!!0-item_pic.jpg_500x500q90.jpg', 'assets/images/products/O1CN012LtY7IH7Xv568ZR_!!0-item_pic.jpg_500x500q90.jpg', 1, 14, 1546501823),
(133, 'images_product', 'remote', 'TB2KbldIpmWBuNjSspdXXbugXXa_!!1923029750.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i2/1923029750/TB2KbldIpmWBuNjSspdXXbugXXa_!!1923029750.jpg_500x500q90.jpg', 1, 14, 1546501823),
(134, 'images_product', 'local', 'TB2KbldIpmWBuNjSspdXXbugXXa_!!1923029750.jpg_500x500q90.jpg', 'assets/images/products/TB2KbldIpmWBuNjSspdXXbugXXa_!!1923029750.jpg_500x500q90.jpg', 1, 14, 1546501823),
(135, 'images_product', 'remote', 'TB2MBzKdwZC2uNjSZFnXXaxZpXa_!!1923029750.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i1/1923029750/TB2MBzKdwZC2uNjSZFnXXaxZpXa_!!1923029750.jpg_500x500q90.jpg', 1, 14, 1546501823),
(136, 'images_product', 'local', 'TB2MBzKdwZC2uNjSZFnXXaxZpXa_!!1923029750.jpg_500x500q90.jpg', 'assets/images/products/TB2MBzKdwZC2uNjSZFnXXaxZpXa_!!1923029750.jpg_500x500q90.jpg', 1, 14, 1546501823),
(137, 'images_product', 'remote', 'TB2EB3rxASWBuNjSszdXXbeSpXa_!!1923029750.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i2/1923029750/TB2EB3rxASWBuNjSszdXXbeSpXa_!!1923029750.jpg_500x500q90.jpg', 1, 14, 1546501823),
(138, 'images_product', 'local', 'TB2EB3rxASWBuNjSszdXXbeSpXa_!!1923029750.jpg_500x500q90.jpg', 'assets/images/products/TB2EB3rxASWBuNjSszdXXbeSpXa_!!1923029750.jpg_500x500q90.jpg', 1, 14, 1546501823),
(139, 'images_product', 'remote', 'O1CN012LtY77lVxpuPKCt_!!1923029750.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i4/1923029750/O1CN012LtY77lVxpuPKCt_!!1923029750.jpg_500x500q90.jpg', 1, 14, 1546501823),
(140, 'images_product', 'local', 'O1CN012LtY77lVxpuPKCt_!!1923029750.jpg_500x500q90.jpg', 'assets/images/products/O1CN012LtY77lVxpuPKCt_!!1923029750.jpg_500x500q90.jpg', 1, 14, 1546501823),
(141, 'images_product', 'remote', 'O1CN01nGqwPu2LtY7HAKgPj_!!0-item_pic.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i3/1923029750/O1CN01nGqwPu2LtY7HAKgPj_!!0-item_pic.jpg_500x500q90.jpg', 1, 15, 1546502051),
(142, 'images_product', 'local', 'O1CN01nGqwPu2LtY7HAKgPj_!!0-item_pic.jpg_500x500q90.jpg', 'assets/images/products/O1CN01nGqwPu2LtY7HAKgPj_!!0-item_pic.jpg_500x500q90.jpg', 1, 15, 1546502051),
(143, 'images_product', 'remote', 'TB2DUcYbjDpK1RjSZFrXXa78VXa_!!1923029750.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i1/1923029750/TB2DUcYbjDpK1RjSZFrXXa78VXa_!!1923029750.jpg_500x500q90.jpg', 1, 15, 1546502051),
(144, 'images_product', 'local', 'TB2DUcYbjDpK1RjSZFrXXa78VXa_!!1923029750.jpg_500x500q90.jpg', 'assets/images/products/TB2DUcYbjDpK1RjSZFrXXa78VXa_!!1923029750.jpg_500x500q90.jpg', 1, 15, 1546502051),
(145, 'images_product', 'remote', 'TB2qX31bhTpK1RjSZFMXXbG_VXa_!!1923029750.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i1/1923029750/TB2qX31bhTpK1RjSZFMXXbG_VXa_!!1923029750.jpg_500x500q90.jpg', 1, 15, 1546502051),
(146, 'images_product', 'local', 'TB2qX31bhTpK1RjSZFMXXbG_VXa_!!1923029750.jpg_500x500q90.jpg', 'assets/images/products/TB2qX31bhTpK1RjSZFMXXbG_VXa_!!1923029750.jpg_500x500q90.jpg', 1, 15, 1546502051),
(147, 'images_product', 'remote', 'TB2uNZZbmzqK1RjSZFHXXb3CpXa_!!1923029750.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i1/1923029750/TB2uNZZbmzqK1RjSZFHXXb3CpXa_!!1923029750.jpg_500x500q90.jpg', 1, 15, 1546502051),
(148, 'images_product', 'local', 'TB2uNZZbmzqK1RjSZFHXXb3CpXa_!!1923029750.jpg_500x500q90.jpg', 'assets/images/products/TB2uNZZbmzqK1RjSZFHXXb3CpXa_!!1923029750.jpg_500x500q90.jpg', 1, 15, 1546502051),
(149, 'images_product', 'remote', 'TB2OrM0ba6qK1RjSZFmXXX0PFXa_!!1923029750.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i2/1923029750/TB2OrM0ba6qK1RjSZFmXXX0PFXa_!!1923029750.jpg_500x500q90.jpg', 1, 15, 1546502051),
(150, 'images_product', 'local', 'TB2OrM0ba6qK1RjSZFmXXX0PFXa_!!1923029750.jpg_500x500q90.jpg', 'assets/images/products/TB2OrM0ba6qK1RjSZFmXXX0PFXa_!!1923029750.jpg_500x500q90.jpg', 1, 15, 1546502051),
(151, 'images_product', 'remote', 'O1CN012Cf31bOk8LnGq99_!!0-item_pic.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i1/446338500/O1CN012Cf31bOk8LnGq99_!!0-item_pic.jpg_500x500q90.jpg', 1, 16, 1546619340),
(152, 'images_product', 'local', 'O1CN012Cf31bOk8LnGq99_!!0-item_pic.jpg_500x500q90.jpg', 'assets/images/products/O1CN012Cf31bOk8LnGq99_!!0-item_pic.jpg_500x500q90.jpg', 1, 16, 1546619340),
(153, 'images_product', 'remote', 'O1CN012Cf31UM4XUu1cto_!!446338500.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i3/446338500/O1CN012Cf31UM4XUu1cto_!!446338500.jpg_500x500q90.jpg', 1, 16, 1546619340),
(154, 'images_product', 'local', 'O1CN012Cf31UM4XUu1cto_!!446338500.jpg_500x500q90.jpg', 'assets/images/products/O1CN012Cf31UM4XUu1cto_!!446338500.jpg_500x500q90.jpg', 1, 16, 1546619340),
(155, 'images_product', 'remote', 'O1CN012Cf31cDEgy1jK09_!!446338500.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i3/446338500/O1CN012Cf31cDEgy1jK09_!!446338500.jpg_500x500q90.jpg', 1, 16, 1546619340),
(156, 'images_product', 'local', 'O1CN012Cf31cDEgy1jK09_!!446338500.jpg_500x500q90.jpg', 'assets/images/products/O1CN012Cf31cDEgy1jK09_!!446338500.jpg_500x500q90.jpg', 1, 16, 1546619340),
(157, 'images_product', 'remote', 'O1CN012Cf31acGiQoDiPB_!!446338500.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i3/446338500/O1CN012Cf31acGiQoDiPB_!!446338500.jpg_500x500q90.jpg', 1, 16, 1546619340),
(158, 'images_product', 'local', 'O1CN012Cf31acGiQoDiPB_!!446338500.jpg_500x500q90.jpg', 'assets/images/products/O1CN012Cf31acGiQoDiPB_!!446338500.jpg_500x500q90.jpg', 1, 16, 1546619340),
(159, 'images_product', 'remote', 'O1CN012Cf31YiM1R4vQ8J_!!446338500.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i4/446338500/O1CN012Cf31YiM1R4vQ8J_!!446338500.jpg_500x500q90.jpg', 1, 16, 1546619340),
(160, 'images_product', 'local', 'O1CN012Cf31YiM1R4vQ8J_!!446338500.jpg_500x500q90.jpg', 'assets/images/products/O1CN012Cf31YiM1R4vQ8J_!!446338500.jpg_500x500q90.jpg', 1, 16, 1546619340),
(161, 'images_product', 'remote', 'O1CN01yAr1Sf2CKREE1oqSp_!!92688455.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/https://img.alicdn.com/bao/uploaded/i1/92688455/O1CN01yAr1Sf2CKREE1oqSp_!!92688455.jpg_500x500q90.jpg', 1, 17, 1547051002),
(162, 'images_product', 'local', 'O1CN01yAr1Sf2CKREE1oqSp_!!92688455.jpg_500x500q90.jpg', 'assets/images/products/O1CN01yAr1Sf2CKREE1oqSp_!!92688455.jpg_500x500q90.jpg', 1, 17, 1547051002),
(163, 'images_product', 'remote', 'O1CN012CKRCYku0UFzlUE_!!92688455.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/https://img.alicdn.com/bao/uploaded/i4/92688455/O1CN012CKRCYku0UFzlUE_!!92688455.jpg_500x500q90.jpg', 1, 17, 1547051002),
(164, 'images_product', 'local', 'O1CN012CKRCYku0UFzlUE_!!92688455.jpg_500x500q90.jpg', 'assets/images/products/O1CN012CKRCYku0UFzlUE_!!92688455.jpg_500x500q90.jpg', 1, 17, 1547051002),
(165, 'images_product', 'remote', 'O1CN012CKRCZ5Jk9J2dcP_!!92688455.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/https://img.alicdn.com/imgextra/i3/92688455/O1CN012CKRCZ5Jk9J2dcP_!!92688455.jpg_500x500q90.jpg', 1, 17, 1547051002),
(166, 'images_product', 'local', 'O1CN012CKRCZ5Jk9J2dcP_!!92688455.jpg_500x500q90.jpg', 'assets/images/products/O1CN012CKRCZ5Jk9J2dcP_!!92688455.jpg_500x500q90.jpg', 1, 17, 1547051002),
(167, 'images_product', 'remote', 'O1CN012CKRCZOAAip5SYy_!!92688455.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/https://img.alicdn.com/imgextra/i4/92688455/O1CN012CKRCZOAAip5SYy_!!92688455.jpg_500x500q90.jpg', 1, 17, 1547051002),
(168, 'images_product', 'local', 'O1CN012CKRCZOAAip5SYy_!!92688455.jpg_500x500q90.jpg', 'assets/images/products/O1CN012CKRCZOAAip5SYy_!!92688455.jpg_500x500q90.jpg', 1, 17, 1547051002),
(169, 'images_product', 'remote', 'O1CN012CKRCYWh48jr7Hy_!!92688455.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/https://img.alicdn.com/imgextra/i4/92688455/O1CN012CKRCYWh48jr7Hy_!!92688455.jpg_500x500q90.jpg', 1, 17, 1547051002),
(170, 'images_product', 'local', 'O1CN012CKRCYWh48jr7Hy_!!92688455.jpg_500x500q90.jpg', 'assets/images/products/O1CN012CKRCYWh48jr7Hy_!!92688455.jpg_500x500q90.jpg', 1, 17, 1547051002);

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
  `product_suorce` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_brand` int(11) DEFAULT NULL,
  `product_quality` int(11) DEFAULT NULL,
  `product_price_default` int(11) DEFAULT NULL,
  `product_price_promotion` int(11) DEFAULT NULL,
  `product_sale` int(5) DEFAULT NULL,
  `product_price_vn` int(11) NOT NULL,
  `product_size` text COLLATE utf8_unicode_ci,
  `product_color` text COLLATE utf8_unicode_ci,
  `product_gender` int(1) NOT NULL DEFAULT '3',
  `product_user` int(11) NOT NULL,
  `product_status` int(11) NOT NULL,
  `product_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dong_product`
--

INSERT INTO `dong_product` (`product_id`, `product_name`, `product_content`, `product_category`, `product_url`, `product_suorce`, `product_brand`, `product_quality`, `product_price_default`, `product_price_promotion`, `product_sale`, `product_price_vn`, `product_size`, `product_color`, `product_gender`, `product_user`, `product_status`, `product_time`) VALUES
(1, 'Giày nam Starling giày mùa đông nam phiên bản Hàn Quốc', '<ul id=\"J_AttrUL\">\r\n<li id=\"J_attrBrandName\" title=\"&nbsp;Starling\"><span data-spm-anchor-id=\"a220o.1000855.0.i0.43743d313srXjl\">Thương hiệu: Starling</span></li>\r\n<li title=\"&nbsp;Tho&aacute;ng kh&iacute;\">Chức năng: Thở</li>\r\n<li title=\"&nbsp;Ren\">C&aacute;ch k&iacute;n: buộc</li>\r\n<li title=\"&nbsp;39 40 41 42 43 44\">K&iacute;ch thước: 39 40 41 42 43 44</li>\r\n<li title=\"&nbsp;M&agrave;u đặc\">Hoa văn: m&agrave;u đặc</li>\r\n<li title=\"&nbsp;Giải tr&iacute;\">Phong c&aacute;ch: Giải tr&iacute;</li>\r\n<li title=\"&nbsp;Giải tr&iacute; h&agrave;ng ng&agrave;y\">Ph&acirc;n khu theo phong c&aacute;ch: giải tr&iacute; h&agrave;ng ng&agrave;y</li>\r\n<li title=\"&nbsp;Chỉ may\">C&aacute;c yếu tố phổ biến: chỉ may</li>\r\n<li title=\"&nbsp;G&oacute;t thấp (1-3cm)\">Chiều cao g&oacute;t: g&oacute;t thấp (1-3cm)</li>\r\n<li title=\"&nbsp;[Trắng] [Trắng x&aacute;m] [Đen] [Đen v&agrave; Trắng] [Đỏ]\">Ph&acirc;n loại m&agrave;u sắc: 【Trắng】 【Trắng x&aacute;m】 【Đen】 【Đen v&agrave; Trắng】 【Đỏ】</li>\r\n<li title=\"&nbsp;ODXB18531\">Mục số: ODXB18531</li>\r\n<li title=\"&nbsp;Gi&agrave;y thể thao\" data-spm-anchor-id=\"a220o.1000855.0.i1.43743d313srXjl\">T&ecirc;n gi&agrave;y thấp: gi&agrave;y</li>\r\n</ul>', 2, 'giay-nam-starling-giay-mua-dong-nam-phien-ban-han-quoc', 'https://detail.tmall.com/item.htm?id=576705289049', 12, 6, 309, 119, 39, 416500, 'a:6:{i:0;s:2:\"39\";i:1;s:2:\"40\";i:2;s:2:\"41\";i:3;s:2:\"42\";i:4;s:2:\"43\";i:5;s:2:\"44\";}', 'a:5:{i:0;s:81:\"assets/images/products_color/O1CN011yXo95mV5oo62Rw_!!469256589.jpg_500x500q90.jpg\";i:1;s:81:\"assets/images/products_color/O1CN011yXo9DnPaa0PcXD_!!469256589.jpg_500x500q90.jpg\";i:2;s:81:\"assets/images/products_color/O1CN011yXo9DnSsQWZcRG_!!469256589.jpg_500x500q90.jpg\";i:3;s:81:\"assets/images/products_color/O1CN011yXo9AZeBRnVR6Z_!!469256589.jpg_500x500q90.jpg\";i:4;s:83:\"assets/images/products_color/O1CN01tT3EO41yXo9sJpo7I_!!469256589.jpg_500x500q90.jpg\";}', 1, 1, 0, 1547192760),
(2, 'Giày thể thao SHANGCATS ', '', 2, 'giay-the-thao-shangcats-', 'https://detail.tmall.com/item.htm?id=560594695949', 0, 6, 258, 88, 35, 308000, 'a:9:{i:0;s:2:\"36\";i:1;s:2:\"37\";i:2;s:2:\"38\";i:3;s:2:\"39\";i:4;s:2:\"40\";i:5;s:2:\"41\";i:6;s:2:\"42\";i:7;s:2:\"43\";i:8;s:2:\"44\";}', 'a:48:{i:0;s:88:\"assets/images/products_color/TB2_K1GbjTpK1RjSZKPXXa3UpXa_!!2211760136.jpg_500x500q90.jpg\";i:1;s:88:\"assets/images/products_color/TB2NZSVbfv85uJjSZFxXXal4XXa_!!2211760136.jpg_500x500q90.jpg\";i:2;s:88:\"assets/images/products_color/TB2BPPmq3oQMeJjy0FoXXcShVXa_!!2211760136.jpg_500x500q90.jpg\";i:3;s:82:\"assets/images/products_color/O1CN011CsKKOKq47XM3Ju_!!2211760136.jpg_500x500q90.jpg\";i:4;s:88:\"assets/images/products_color/TB2amnwdOLaK1RjSZFxXXamPFXa_!!2211760136.jpg_500x500q90.jpg\";i:5;s:88:\"assets/images/products_color/TB2IvaZdNTpK1RjSZFMXXbG_VXa_!!2211760136.jpg_500x500q90.jpg\";i:6;s:71:\"assets/images/products_color/TB1pl14jKOSBuNjy0FdL6TDnVXa_500x500q90.jpg\";i:7;s:71:\"assets/images/products_color/TB1XQWIjQ9WBuNjSspeL6Sz5VXa_500x500q90.jpg\";i:8;s:88:\"assets/images/products_color/TB21HQmaNnaK1RjSZFBXXcW7VXa_!!2211760136.jpg_500x500q90.jpg\";i:9;s:88:\"assets/images/products_color/TB2CZj8aHPpK1RjSZFFXXa5PpXa_!!2211760136.jpg_500x500q90.jpg\";i:10;s:89:\"assets/images/products_color/TB2gRf7aHPpK1RjSZFFXXa5PpXa_!!2211760136.jpeg_500x500q90.jpg\";i:11;s:89:\"assets/images/products_color/TB2Bw_6aMHqK1RjSZFEXXcGMXXa_!!2211760136.jpeg_500x500q90.jpg\";i:12;s:82:\"assets/images/products_color/O1CN011CsKKMlumGpyXZg_!!2211760136.jpg_500x500q90.jpg\";i:13;s:82:\"assets/images/products_color/O1CN011CsKKOuWGnfpt2i_!!2211760136.jpg_500x500q90.jpg\";i:14;s:71:\"assets/images/products_color/TB1h2h.eqmWBuNkHFJHL6SatVXa_500x500q90.jpg\";i:15;s:71:\"assets/images/products_color/TB1TRSbeyOYBuNjSsD4L6TSkFXa_500x500q90.jpg\";i:16;s:71:\"assets/images/products_color/TB1TJvDmH1YBuNjSszhL6UUsFXa_500x500q90.jpg\";i:17;s:88:\"assets/images/products_color/TB2rqPVaNTpK1RjSZFGXXcHqFXa_!!2211760136.jpg_500x500q90.jpg\";i:18;s:88:\"assets/images/products_color/TB2pSDVaFzqK1RjSZFvXXcB7VXa_!!2211760136.jpg_500x500q90.jpg\";i:19;s:88:\"assets/images/products_color/TB2fdzVaQvoK1RjSZFNXXcxMVXa_!!2211760136.jpg_500x500q90.jpg\";i:20;s:88:\"assets/images/products_color/TB2ZNkPcHSYBuNjSspfXXcZCpXa_!!2211760136.jpg_500x500q90.jpg\";i:21;s:88:\"assets/images/products_color/TB2d7Kbc9BYBeNjy0FeXXbnmFXa_!!2211760136.jpg_500x500q90.jpg\";i:22;s:88:\"assets/images/products_color/TB2U87JcKuSBuNjSsziXXbq8pXa_!!2211760136.jpg_500x500q90.jpg\";i:23;s:88:\"assets/images/products_color/TB2uXv6aHvpK1RjSZFqXXcXUVXa_!!2211760136.jpg_500x500q90.jpg\";i:24;s:88:\"assets/images/products_color/TB29h23aSzqK1RjSZPxXXc4tVXa_!!2211760136.jpg_500x500q90.jpg\";i:25;s:88:\"assets/images/products_color/TB235ElaOLaK1RjSZFxXXamPFXa_!!2211760136.jpg_500x500q90.jpg\";i:26;s:71:\"assets/images/products_color/TB16m1CiFmWBuNjSspdL6TugXXa_500x500q90.jpg\";i:27;s:71:\"assets/images/products_color/TB1DL_wiNWYBuNjy1zkL6RGGpXa_500x500q90.jpg\";i:28;s:82:\"assets/images/products_color/O1CN011CsKKUsejeV7QDC_!!2211760136.jpg_500x500q90.jpg\";i:29;s:82:\"assets/images/products_color/O1CN011CsKKXaiq7zCPdc_!!2211760136.jpg_500x500q90.jpg\";i:30;s:82:\"assets/images/products_color/O1CN011CsKKW56dv6wWHp_!!2211760136.jpg_500x500q90.jpg\";i:31;s:88:\"assets/images/products_color/TB2cUiSdMHqK1RjSZJnXXbNLpXa_!!2211760136.jpg_500x500q90.jpg\";i:32;s:88:\"assets/images/products_color/TB2GpGWdFzqK1RjSZSgXXcpAVXa_!!2211760136.jpg_500x500q90.jpg\";i:33;s:88:\"assets/images/products_color/TB2hiaTdSrqK1RjSZK9XXXyypXa_!!2211760136.jpg_500x500q90.jpg\";i:34;s:88:\"assets/images/products_color/TB2cxqUdNTpK1RjSZFKXXa2wXXa_!!2211760136.jpg_500x500q90.jpg\";i:35;s:88:\"assets/images/products_color/TB2aV5VdNTpK1RjSZFGXXcHqFXa_!!2211760136.jpg_500x500q90.jpg\";i:36;s:88:\"assets/images/products_color/TB2wbuRdSzqK1RjSZPcXXbTepXa_!!2211760136.jpg_500x500q90.jpg\";i:37;s:88:\"assets/images/products_color/TB2kv3xcFGWBuNjy0FbXXb4sXXa_!!2211760136.jpg_500x500q90.jpg\";i:38;s:88:\"assets/images/products_color/TB2aUoycH1YBuNjSszeXXablFXa_!!2211760136.jpg_500x500q90.jpg\";i:39;s:88:\"assets/images/products_color/TB2m7IPcHSYBuNjSspfXXcZCpXa_!!2211760136.jpg_500x500q90.jpg\";i:40;s:88:\"assets/images/products_color/TB26ckvcHuWBuNjSszgXXb8jVXa_!!2211760136.jpg_500x500q90.jpg\";i:41;s:88:\"assets/images/products_color/TB2AePdghPI8KJjSspfXXcCFXXa_!!2211760136.jpg_500x500q90.jpg\";i:42;s:88:\"assets/images/products_color/TB2PhyWgcjI8KJjSsppXXXbyVXa_!!2211760136.jpg_500x500q90.jpg\";i:43;s:88:\"assets/images/products_color/TB2hXQbbkfb_uJkSne1XXbE4XXa_!!2211760136.jpg_500x500q90.jpg\";i:44;s:82:\"assets/images/products_color/O1CN011CsKKolBmHXf9Ru_!!2211760136.jpg_500x500q90.jpg\";i:45;s:82:\"assets/images/products_color/O1CN011CsKKcUzH40vEcx_!!2211760136.jpg_500x500q90.jpg\";i:46;s:82:\"assets/images/products_color/O1CN011CsKKkERYs2oQyg_!!2211760136.jpg_500x500q90.jpg\";i:47;s:82:\"assets/images/products_color/O1CN011CsKKcUxGJX4XAY_!!2211760136.jpg_500x500q90.jpg\";}', 1, 1, 2, 1547192744),
(3, 'Giày vải Jeansie', '<ul id=\"J_AttrUL\">\r\n<li id=\"J_attrBrandName\" title=\"&nbsp;Quần jean / Jingxi\">Thương hiệu: Jeansie / Jing Xi</li>\r\n<li title=\"&nbsp;Chống m&agrave;i m&ograve;n\">Chức năng: chống m&agrave;i m&ograve;n</li>\r\n<li title=\"&nbsp;Ren\">C&aacute;ch k&iacute;n: buộc</li>\r\n<li title=\"&nbsp;37 38 39 40 41 42 43 44 45\">K&iacute;ch thước: 37 38 39 40 41 42 43 44 45</li>\r\n<li title=\"&nbsp;M&agrave;u đặc\">Hoa văn: m&agrave;u đặc</li>\r\n<li title=\"&nbsp;Phi&ecirc;n bản tiếng h&agrave;n\">Phong c&aacute;ch: phi&ecirc;n bản tiếng h&agrave;n</li>\r\n<li title=\"&nbsp;Chỉ may\">C&aacute;c yếu tố phổ biến: chỉ may</li>\r\n<li title=\"&nbsp;Đen qu&acirc;n xanh xanh đỏ x&aacute;m c&aacute;t\" data-spm-anchor-id=\"a220o.1000855.0.i2.6af3de75WZDsef\">Ph&acirc;n loại m&agrave;u: Black Army Green Blue Red Grey Sand</li>\r\n</ul>', 13, 'giay-vai-jeansie', 'https://detail.tmall.com/item.htm?id=19087572568', 0, 6, 230, 128, 56, 448000, 'a:9:{i:0;s:2:\"37\";i:1;s:2:\"38\";i:2;s:2:\"39\";i:3;s:2:\"40\";i:4;s:2:\"41\";i:5;s:2:\"42\";i:6;s:2:\"43\";i:7;s:2:\"44\";i:8;s:2:\"45\";}', 'a:7:{i:0;s:87:\"assets/images/products_color/TB2OdJQapXXXXbRXXXXXXXXXXXX_!!738517069.jpg_500x500q90.jpg\";i:1;s:87:\"assets/images/products_color/TB2UemHg9FjpuFjSspbXXXagVXa_!!738517069.jpg_500x500q90.jpg\";i:2;s:87:\"assets/images/products_color/TB2eflPapXXXXcvXXXXXXXXXXXX_!!738517069.jpg_500x500q90.jpg\";i:3;s:87:\"assets/images/products_color/TB2nDkxXVXXXXaXXXXXXXXXXXXX_!!738517069.jpg_500x500q90.jpg\";i:4;s:87:\"assets/images/products_color/TB25dUOXWi5V1BjSspiXXXGBFXa_!!738517069.jpg_500x500q90.jpg\";i:5;s:87:\"assets/images/products_color/TB2H2RNapXXXXc8XXXXXXXXXXXX_!!738517069.jpg_500x500q90.jpg\";i:6;s:87:\"assets/images/products_color/TB2oaRRapXXXXauXXXXXXXXXXXX_!!738517069.jpg_500x500q90.jpg\";}', 1, 1, 2, 1547192731),
(4, 'Giày thể thao HILLGLOBAL', '<div id=\"J_BrandAttr\" class=\"tm-clear tb-hidden tm_brandAttr\">\r\n<div class=\"name\">T&ecirc;n thương hiệu:&nbsp;<strong class=\"J_EbrandLogo\" data-spm-anchor-id=\"a220o.1000855.0.i2.3ed5d3c8BVDasq\">HILLGLOBAL / Xi Ge</strong></div>\r\n</div>\r\n<p class=\"attr-list-hd tm-clear\"><em>Th&ocirc;ng số sản phẩm:</em></p>\r\n<ul id=\"J_AttrUL\" data-spm-anchor-id=\"a220o.1000855.0.i3.3ed5d3c8BVDasq\">\r\n<li title=\"&nbsp;H&egrave; 2018\">M&ugrave;a ni&ecirc;m yết: M&ugrave;a h&egrave; 2018</li>\r\n<li title=\"&nbsp;Thương mại điện tử thuần t&uacute;y (chỉ c&oacute; sẵn trực tuyến)\">Loại k&ecirc;nh b&aacute;n h&agrave;ng: thương mại điện tử thuần t&uacute;y (chỉ b&aacute;n h&agrave;ng trực tuyến)</li>\r\n<li title=\"&nbsp;Đầu tr&ograve;n\">Kiểu ng&oacute;n ch&acirc;n: đầu tr&ograve;n</li>\r\n<li title=\"&nbsp;Ren\">C&aacute;ch k&iacute;n: buộc</li>\r\n<li title=\"&nbsp;Tpu\">Chất liệu duy nhất: tpu</li>\r\n<li title=\"&nbsp;Lưới\">Vật liệu tr&ecirc;n: lưới</li>\r\n<li title=\"&nbsp;B&ocirc;ng\">Chất liệu l&oacute;t tr&ecirc;n: cotton</li>\r\n<li title=\"&nbsp;Gi&agrave;y d&iacute;nh\">Quy tr&igrave;nh l&agrave;m gi&agrave;y: gi&agrave;y d&iacute;nh</li>\r\n<li title=\"&nbsp;G&oacute;t ch&acirc;n phẳng\">Với kiểu d&aacute;ng dưới: phẳng với</li>\r\n<li title=\"&nbsp;M&agrave;u đặc\">Hoa văn: m&agrave;u đặc</li>\r\n<li title=\"&nbsp;M&igrave; thường\">C&aacute;c yếu tố phổ biến: m&igrave; thường</li>\r\n<li title=\"&nbsp;Giải tr&iacute;\">Phong c&aacute;ch: Giải tr&iacute;</li>\r\n<li title=\"&nbsp;Thể thao v&agrave; giải tr&iacute;\">Ph&acirc;n khu theo phong c&aacute;ch: thể thao v&agrave; giải tr&iacute;</li>\r\n<li title=\"&nbsp;Thể thao v&agrave; giải tr&iacute;\">Nh&acirc;n dịp: Thể thao v&agrave; giải tr&iacute;</li>\r\n<li title=\"&nbsp;M&ugrave;a đ&ocirc;ng\">M&ugrave;a: m&ugrave;a đ&ocirc;ng</li>\r\n<li title=\"&nbsp;Gi&agrave;y ngo&agrave;i trời\">Phong c&aacute;ch: gi&agrave;y thường ngo&agrave;i trời</li>\r\n<li title=\"&nbsp;Giữ ấm\">Chức năng: Giữ ấm</li>\r\n<li title=\"&nbsp;Vải\">Chất liệu đế: vải</li>\r\n<li title=\"&nbsp;G&oacute;t thấp (1-3cm)\">Chiều cao g&oacute;t: g&oacute;t thấp (1-3cm)</li>\r\n<li title=\"&nbsp;Thanh ni&ecirc;n (18-40 tuổi)\">&Aacute;p dụng cho: Thanh ni&ecirc;n (18-40 tuổi)</li>\r\n<li title=\"&nbsp;Gi&agrave;y thể thao ngo&agrave;i trời\">T&ecirc;n gi&agrave;y thấp: gi&agrave;y thể thao ngo&agrave;i trời</li>\r\n<li title=\"&nbsp;36 37 38 39 40 41 42 43 44 45\">K&iacute;ch thước: 36 37 38 39 40 41 42 43 44 45</li>\r\n<li id=\"J_attrBrandName\" title=\"&nbsp;HILLGLOBAL / Xi Ge\">Thương hiệu: HILLGLOBAL / Xi Ge</li>\r\n<li title=\"&nbsp;X-7057\">Mục số: X-7057</li>\r\n<li title=\"&nbsp;7057 (đen v&agrave; trắng) 7057 (tất cả đen) 7057-1 cotton (đen v&agrave; trắng) 7057-1 cotton (tất cả đen) 7057-1 cotton (x&aacute;m) 9005 (v&agrave;ng đen) 9005 (đen v&agrave; trắng) 9005 (đen v&agrave; đỏ) 9005 (đen v&agrave; xanh) 9005 -1 cotton (v&agrave;ng đen) 9005-1 cotton (đen v&agrave; trắng) 9005-1 cotton (đen v&agrave; đỏ) 9006 (v&agrave;ng đen) 9006 (tất cả đen) 9006-1 cotton (v&agrave;ng đen) J056 (đen) J056 (xanh) J056 (khaki) J056-1 cotton (đen) J056-1 cotton (xanh dương) J056-1 cotton (khaki) 979 (đen v&agrave; trắng) 979 (đen v&agrave; đỏ) 979 (đen v&agrave; xanh) 980 cotton (đen v&agrave; trắng) 980 cotton (đen v&agrave; đỏ) 980 cotton (đen v&agrave; đỏ) Xanh đen) 981 (v&agrave;ng đen) 981 (đen v&agrave; trắng) 981 (x&aacute;m) 982 cotton (v&agrave;ng đen) 982 cotton (đen v&agrave; trắng) 982 cotton (x&aacute;m) J063 (v&agrave;ng đen) J063 (tất cả đen) 1817 (đen v&agrave; trắng) 1817 (v&agrave;ng đen) Đen) 7056 (đen) 7065 (đen) 7065 (xanh) 7065 (khaki) 7057 (x&aacute;m) 9006 (x&aacute;m) 7056 (x&aacute;m) 7057 (đỏ) J063 (đỏ) 7057 (trắng) 7056 (trắng)\" data-spm-anchor-id=\"a220o.1000855.0.i4.3ed5d3c8BVDasq\"><span data-spm-anchor-id=\"a220o.1000855.0.i5.3ed5d3c8BVDasq\">Ph&acirc;n loại m&agrave;u: 7057 (Đen v&agrave; Trắng) 7057 (tất&nbsp;</span></li>\r\n</ul>', 2, 'giay-the-thao-hillglobal', 'https://detail.tmall.com/item.htm?id=572724078309', 0, 6, 258, 59, 23, 206500, 'a:10:{i:0;s:2:\"36\";i:1;s:2:\"37\";i:2;s:2:\"38\";i:3;s:2:\"39\";i:4;s:2:\"40\";i:5;s:2:\"41\";i:6;s:2:\"42\";i:7;s:2:\"43\";i:8;s:2:\"44\";i:9;s:2:\"45\";}', 'a:49:{i:0;s:88:\"assets/images/products_color/TB2P3aGBntYBeNjy1XdXXXXyVXa_!!2081299183.jpg_500x500q90.jpg\";i:1;s:88:\"assets/images/products_color/TB2e6CHsNuTBuNkHFNRXXc9qpXa_!!2081299183.jpg_500x500q90.jpg\";i:2;s:82:\"assets/images/products_color/O1CN012HhrXZsmvPRW2tV_!!2081299183.jpg_500x500q90.jpg\";i:3;s:82:\"assets/images/products_color/O1CN012HhrXZYiedXz45k_!!2081299183.jpg_500x500q90.jpg\";i:4;s:82:\"assets/images/products_color/O1CN012HhrXbPXToHeHjM_!!2081299183.jpg_500x500q90.jpg\";i:5;s:88:\"assets/images/products_color/TB2t.2QsMKTBuNkSne1XXaJoXXa_!!2081299183.jpg_500x500q90.jpg\";i:6;s:88:\"assets/images/products_color/TB2R_QlAYGYBuNjy0FoXXciBFXa_!!2081299183.jpg_500x500q90.jpg\";i:7;s:88:\"assets/images/products_color/TB2m6UwA1SSBuNjy0FlXXbBpVXa_!!2081299183.jpg_500x500q90.jpg\";i:8;s:88:\"assets/images/products_color/TB2PiF7cPfguuRjy1zeXXb0KFXa_!!2081299183.jpg_500x500q90.jpg\";i:9;s:82:\"assets/images/products_color/O1CN012HhrXbPYDcARypG_!!2081299183.jpg_500x500q90.jpg\";i:10;s:82:\"assets/images/products_color/O1CN012HhrXbpIPgCA21h_!!2081299183.jpg_500x500q90.jpg\";i:11;s:82:\"assets/images/products_color/O1CN012HhrXaQdQx2VAL5_!!2081299183.jpg_500x500q90.jpg\";i:12;s:88:\"assets/images/products_color/TB2SJ06BmtYBeNjSspkXXbU8VXa_!!2081299183.jpg_500x500q90.jpg\";i:13;s:88:\"assets/images/products_color/TB2jZsQA1uSBuNjSsziXXbq8pXa_!!2081299183.jpg_500x500q90.jpg\";i:14;s:82:\"assets/images/products_color/O1CN012HhrXZ43GZ20yGe_!!2081299183.jpg_500x500q90.jpg\";i:15;s:82:\"assets/images/products_color/O1CN012HhrXY4fc0AnLUh_!!2081299183.jpg_500x500q90.jpg\";i:16;s:82:\"assets/images/products_color/O1CN012HhrXZ3rFJneVd2_!!2081299183.jpg_500x500q90.jpg\";i:17;s:82:\"assets/images/products_color/O1CN012HhrXakfPRf95Mk_!!2081299183.jpg_500x500q90.jpg\";i:18;s:82:\"assets/images/products_color/O1CN012HhrXTruyjtKP9C_!!2081299183.jpg_500x500q90.jpg\";i:19;s:82:\"assets/images/products_color/O1CN012HhrXTrvaABcaav_!!2081299183.jpg_500x500q90.jpg\";i:20;s:82:\"assets/images/products_color/O1CN012HhrXak7yrSDxAT_!!2081299183.jpg_500x500q90.jpg\";i:21;s:82:\"assets/images/products_color/O1CN012HhrXNWOjO48R2f_!!2081299183.jpg_500x500q90.jpg\";i:22;s:82:\"assets/images/products_color/O1CN012HhrXNKpKKLwLnS_!!2081299183.jpg_500x500q90.jpg\";i:23;s:82:\"assets/images/products_color/O1CN012HhrXMvhbd8ubMu_!!2081299183.jpg_500x500q90.jpg\";i:24;s:82:\"assets/images/products_color/O1CN012HhrXakrlMDRzGz_!!2081299183.jpg_500x500q90.jpg\";i:25;s:82:\"assets/images/products_color/O1CN012HhrXTrwn4Du6ig_!!2081299183.jpg_500x500q90.jpg\";i:26;s:82:\"assets/images/products_color/O1CN012HhrXbonfHtj3hC_!!2081299183.jpg_500x500q90.jpg\";i:27;s:82:\"assets/images/products_color/O1CN012HhrXY4liceF302_!!2081299183.jpg_500x500q90.jpg\";i:28;s:82:\"assets/images/products_color/O1CN012HhrXaPNf64YxaW_!!2081299183.jpg_500x500q90.jpg\";i:29;s:82:\"assets/images/products_color/O1CN012HhrXYdcRUh43Ds_!!2081299183.jpg_500x500q90.jpg\";i:30;s:82:\"assets/images/products_color/O1CN012HhrXY4syJeKRcw_!!2081299183.jpg_500x500q90.jpg\";i:31;s:82:\"assets/images/products_color/O1CN012HhrXYdmmRucjeb_!!2081299183.jpg_500x500q90.jpg\";i:32;s:82:\"assets/images/products_color/O1CN012HhrXbPvmgEVD8B_!!2081299183.jpg_500x500q90.jpg\";i:33;s:82:\"assets/images/products_color/O1CN012HhrY1unrYUyMip_!!2081299183.jpg_500x500q90.jpg\";i:34;s:84:\"assets/images/products_color/O1CN01P4SDBp2HhrXu5ZYH1_!!2081299183.jpg_500x500q90.jpg\";i:35;s:88:\"assets/images/products_color/TB2h85BjOMnBKNjSZFoXXbOSFXa_!!2081299183.jpg_500x500q90.jpg\";i:36;s:88:\"assets/images/products_color/TB2W0HgsIuYBuNkSmRyXXcA3pXa_!!2081299183.jpg_500x500q90.jpg\";i:37;s:88:\"assets/images/products_color/TB2ag7OA25TBuNjSspmXXaDRVXa_!!2081299183.jpg_500x500q90.jpg\";i:38;s:88:\"assets/images/products_color/TB2xAwoA1OSBuNjy0FdXXbDnVXa_!!2081299183.jpg_500x500q90.jpg\";i:39;s:84:\"assets/images/products_color/O1CN012OnpM12HhrYIMW25c_!!2081299183.jpg_500x500q90.jpg\";i:40;s:84:\"assets/images/products_color/O1CN01aKsnIW2HhrYJeFYUS_!!2081299183.jpg_500x500q90.jpg\";i:41;s:84:\"assets/images/products_color/O1CN01HHRFJp2HhrYI6FeEZ_!!2081299183.jpg_500x500q90.jpg\";i:42;s:88:\"assets/images/products_color/TB2czsGA41YBuNjy1zcXXbNcXXa_!!2081299183.jpg_500x500q90.jpg\";i:43;s:88:\"assets/images/products_color/TB26XejBamWBuNjy1XaXXXCbXXa_!!2081299183.jpg_500x500q90.jpg\";i:44;s:88:\"assets/images/products_color/TB2jsKIsNuTBuNkHFNRXXc9qpXa_!!2081299183.jpg_500x500q90.jpg\";i:45;s:88:\"assets/images/products_color/TB2072BsOOYBuNjSsD4XXbSkFXa_!!2081299183.jpg_500x500q90.jpg\";i:46;s:84:\"assets/images/products_color/O1CN01e3VSJC2HhrY0Hf531_!!2081299183.jpg_500x500q90.jpg\";i:47;s:88:\"assets/images/products_color/TB2Nd65A29TBuNjy0FcXXbeiFXa_!!2081299183.jpg_500x500q90.jpg\";i:48;s:88:\"assets/images/products_color/TB2bDrRsTXYBeNkHFrdXXciuVXa_!!2081299183.jpg_500x500q90.jpg\";}', 1, 1, 2, 1547192711),
(5, 'Giày vải Jiadi', '<div id=\"J_BrandAttr\" class=\"tm-clear tb-hidden tm_brandAttr\" data-spm-anchor-id=\"a220o.1000855.0.i0.656f25381c3Ss9\">\r\n<div class=\"name\">T&ecirc;n thương hiệu:&nbsp;<strong class=\"J_EbrandLogo\">Jiadi</strong></div>\r\n</div>\r\n<p class=\"attr-list-hd tm-clear\"><em>Th&ocirc;ng số sản phẩm:</em></p>\r\n<ul id=\"J_AttrUL\">\r\n<li id=\"J_attrBrandName\" title=\"&nbsp;Gia Chi\">Thương hiệu:</li>\r\n<li title=\"&nbsp;Giữ ấm\">Chức năng: Giữ ấm</li>\r\n<li title=\"&nbsp;Ren\">C&aacute;ch k&iacute;n: buộc</li>\r\n<li title=\"&nbsp;35 36 37 38 39 40 41 42 43 44\">K&iacute;ch thước: 35 36 37 38 39 40 41 42 43 44</li>\r\n<li title=\"&nbsp;Phối m&agrave;u\">Hoa văn: phối m&agrave;u</li>\r\n<li title=\"&nbsp;Phi&ecirc;n bản tiếng h&agrave;n\">Phong c&aacute;ch: phi&ecirc;n bản tiếng h&agrave;n</li>\r\n<li title=\"&nbsp;M&igrave; thường\">C&aacute;c yếu tố phổ biến: m&igrave; thường</li>\r\n<li title=\"&nbsp;1818-1 đen v&agrave; trắng (cộng nhung) 1818-1 đen (cộng nhung) 1818-1 trắng (cộng nhung) 1817-1 đen (cộng nhung) 1817-1 trắng (cộng nhung) 1817-1 đỏ (cộng nhung) 621- 1 đen (cộng nhung) 621-1 trắng (cộng nhung) 621-1 đỏ (cộng nhung) 1785-1 đen (cộng nhung) 1785-1 đỏ (cộng nhung) 1785-1 trắng (cộng nhung) 621-đen (cộng nhung) Gi&agrave;y đơn) 621-trắng (gi&agrave;y đơn) 621-đỏ (gi&agrave;y đơn) 1817-đen (gi&agrave;y đơn) 1817-trắng (gi&agrave;y đơn) 1817-đỏ (gi&agrave;y đơn) 1785-đen (gi&agrave;y đơn) 1785-trắng (đơn) Gi&agrave;y) 1785-đỏ (gi&agrave;y đơn) 1818-đen (gi&agrave;y đơn) 1818-đen v&agrave; trắng (gi&agrave;y đơn) 1818-trắng (gi&agrave;y đơn)\">Ph&acirc;n loại m&agrave;u: 1818-1 đen v&agrave; trắng (cộng nhung) 1818-1 đen (cộng nhung) 1818-1 trắng (cộng nhung) 1817-1 đen (cộng nhung) 1817-1 trắng (cộng nhung) 1817-1 đỏ (cộng nhung 621-1 đen (cộng nhung) 621-1 trắng (cộng nhung) 621-1 đỏ (cộng nhung) 1785-1 đen (cộng nhung) 1785-1 đỏ (cộng nhung) 1785-1 trắng (cộng nhung) 621 - Đen (gi&agrave;y đơn) 621-Trắng (gi&agrave;y đơn) 621-Đỏ (gi&agrave;y đơn) 1817-Đen (gi&agrave;y đơn) 1817-Trắng (gi&agrave;y đơn) 1817-Đỏ (gi&agrave;y đơn) 1785-Đen (gi&agrave;y đơn) 1785- Trắng (gi&agrave;y đơn) 1785-đỏ (gi&agrave;y đơn) 1818-đen (gi&agrave;y đơn) 1818-đen v&agrave; trắng (gi&agrave;y đơn) 1818-trắng (gi&agrave;y đơn)</li>\r\n<li title=\"&nbsp;621\" data-spm-anchor-id=\"a220o.1000855.0.i1.656f25381c3Ss9\">Mục số: 621</li>\r\n</ul>', 3, 'giay-vai-jiadi', 'https://detail.tmall.com/item.htm?id=538933587416', 0, 6, 268, 78, 30, 273000, 'a:10:{i:0;s:2:\"35\";i:1;s:2:\"36\";i:2;s:2:\"37\";i:3;s:2:\"38\";i:4;s:2:\"39\";i:5;s:2:\"40\";i:6;s:2:\"41\";i:7;s:2:\"42\";i:8;s:2:\"43\";i:9;s:2:\"44\";}', 'a:24:{i:0;s:82:\"assets/images/products_color/O1CN011V3vRij0oU3Ompy_!!2401152598.jpg_500x500q90.jpg\";i:1;s:82:\"assets/images/products_color/O1CN011V3vRji1VZyxu6h_!!2401152598.jpg_500x500q90.jpg\";i:2;s:82:\"assets/images/products_color/O1CN011V3vRkjIvNxUXiM_!!2401152598.jpg_500x500q90.jpg\";i:3;s:82:\"assets/images/products_color/O1CN011V3vReUkKP9X0j6_!!2401152598.jpg_500x500q90.jpg\";i:4;s:82:\"assets/images/products_color/O1CN011V3vRkBcy5Xp78r_!!2401152598.jpg_500x500q90.jpg\";i:5;s:82:\"assets/images/products_color/O1CN011V3vRkj0vvFMn9v_!!2401152598.jpg_500x500q90.jpg\";i:6;s:82:\"assets/images/products_color/O1CN011V3vRlNntZegOI3_!!2401152598.jpg_500x500q90.jpg\";i:7;s:82:\"assets/images/products_color/O1CN011V3vRkkE3VdeEDd_!!2401152598.jpg_500x500q90.jpg\";i:8;s:82:\"assets/images/products_color/O1CN011V3vRjHp3IekZ5t_!!2401152598.jpg_500x500q90.jpg\";i:9;s:82:\"assets/images/products_color/O1CN011V3vRkUJmaAQFby_!!2401152598.jpg_500x500q90.jpg\";i:10;s:82:\"assets/images/products_color/O1CN011V3vRl2KYdVIo1G_!!2401152598.jpg_500x500q90.jpg\";i:11;s:82:\"assets/images/products_color/O1CN011V3vReVbV4H0hvS_!!2401152598.jpg_500x500q90.jpg\";i:12;s:88:\"assets/images/products_color/TB2p6WXnHsTMeJjSszhXXcGCFXa_!!2401152598.jpg_500x500q90.jpg\";i:13;s:88:\"assets/images/products_color/TB2LxCHam69F1JjSZPiXXXfCXXa_!!2401152598.jpg_500x500q90.jpg\";i:14;s:88:\"assets/images/products_color/TB27ifWjzihSKJjy0FeXXbJtpXa_!!2401152598.jpg_500x500q90.jpg\";i:15;s:88:\"assets/images/products_color/TB2qSj5uDqWBKNjSZFAXXanSpXa_!!2401152598.jpg_500x500q90.jpg\";i:16;s:88:\"assets/images/products_color/TB2HtgwuDqWBKNjSZFxXXcpLpXa_!!2401152598.jpg_500x500q90.jpg\";i:17;s:88:\"assets/images/products_color/TB2UXcfupkoBKNjSZFEXXbrEVXa_!!2401152598.jpg_500x500q90.jpg\";i:18;s:88:\"assets/images/products_color/TB26gdsupooBKNjSZPhXXc2CXXa_!!2401152598.jpg_500x500q90.jpg\";i:19;s:88:\"assets/images/products_color/TB2SIMfupkoBKNjSZFEXXbrEVXa_!!2401152598.jpg_500x500q90.jpg\";i:20;s:88:\"assets/images/products_color/TB2S17iuvImBKNjSZFlXXc43FXa_!!2401152598.jpg_500x500q90.jpg\";i:21;s:82:\"assets/images/products_color/O1CN011V3vRkmh3ocS1F1_!!2401152598.jpg_500x500q90.jpg\";i:22;s:82:\"assets/images/products_color/O1CN011V3vReUfYpJkvOM_!!2401152598.jpg_500x500q90.jpg\";i:23;s:82:\"assets/images/products_color/O1CN011V3vRl2TSY1gAAm_!!2401152598.jpg_500x500q90.jpg\";}', 1, 1, 2, 1547192694),
(6, 'Giày PLAYBOY', '<ul id=\"J_AttrUL\">\r\n<li id=\"J_attrBrandName\" title=\"&nbsp;CHƠI TR&Ograve; CHƠI / Playboy\">Thương hiệu: PLAYBOY / Playboy</li>\r\n<li title=\"&nbsp;Tho&aacute;ng kh&iacute;\">Chức năng: Thở</li>\r\n<li title=\"&nbsp;Ren\" data-spm-anchor-id=\"a220o.1000855.0.i1.6dac3d2bUPsdfg\">C&aacute;ch k&iacute;n: buộc</li>\r\n<li title=\"&nbsp;38 39 40 41 42 43 44\">K&iacute;ch thước: 38 39 40 41 42 43 44</li>\r\n<li title=\"&nbsp;M&agrave;u đặc\">Hoa văn: m&agrave;u đặc</li>\r\n<li title=\"&nbsp;Giải tr&iacute;\">Phong c&aacute;ch: Giải tr&iacute;</li>\r\n<li title=\"&nbsp;Giải tr&iacute; h&agrave;ng ng&agrave;y\">Ph&acirc;n khu theo phong c&aacute;ch: giải tr&iacute; h&agrave;ng ng&agrave;y</li>\r\n<li title=\"&nbsp;M&igrave; thường\">C&aacute;c yếu tố phổ biến: m&igrave; thường</li>\r\n<li title=\"&nbsp;G&oacute;t thấp (1-3cm)\">Chiều cao g&oacute;t: g&oacute;t thấp (1-3cm)</li>\r\n<li title=\"&nbsp;Đen xanh nhạt rượu vang cam đỏ\">Ph&acirc;n loại m&agrave;u: Đen Xanh nhạt X&aacute;m X&aacute;m Rượu vang đỏ</li>\r\n<li title=\"&nbsp;Cx39804\">Mục số: cx39804</li>\r\n<li title=\"&nbsp;Gi&agrave;y lưới\" data-spm-anchor-id=\"a220o.1000855.0.i2.6dac3d2bUPsdfg\">T&ecirc;n gi&agrave;y thấp: gi&agrave;y lưới</li>\r\n</ul>', 2, 'giay-playboy', 'https://detail.tmall.com/item.htm?id=565018806532', 5, 6, 468, 198, 43, 693000, 'a:7:{i:0;s:2:\"38\";i:1;s:2:\"39\";i:2;s:2:\"40\";i:3;s:2:\"41\";i:4;s:2:\"42\";i:5;s:2:\"43\";i:6;s:2:\"44\";}', 'a:5:{i:0;s:88:\"assets/images/products_color/TB2v3R8fQOWBuNjSsppXXXPgpXa_!!1016704866.jpg_500x500q90.jpg\";i:1;s:88:\"assets/images/products_color/TB2EwydbsuYBuNkSmRyXXcA3pXa_!!1016704866.jpg_500x500q90.jpg\";i:2;s:88:\"assets/images/products_color/TB2N8tLfHSYBuNjSspiXXXNzpXa_!!1016704866.jpg_500x500q90.jpg\";i:3;s:88:\"assets/images/products_color/TB2yxCwbDqWBKNjSZFxXXcpLpXa_!!1016704866.jpg_500x500q90.jpg\";i:4;s:88:\"assets/images/products_color/TB2AuenfH5YBuNjSspoXXbeNFXa_!!1016704866.jpg_500x500q90.jpg\";}', 1, 1, 2, 1547192611),
(7, 'Giày Nam ZARA', '<ul id=\"J_AttrUL\" data-spm-anchor-id=\"a312a.7700718.0.i2.7aaa1ec5kMJtDH\">\r\n<li title=\"&nbsp;M&ugrave;a thu 2018\">M&ugrave;a ni&ecirc;m yết: M&ugrave;a thu 2018</li>\r\n<li title=\"&nbsp;15319302001-23\">Mục số: 15319302001-23</li>\r\n<li title=\"&nbsp;C&ugrave;ng một đoạn trong trung t&acirc;m thương mại (cả trực tuyến v&agrave; ngoại tuyến)\">Loại k&ecirc;nh b&aacute;n h&agrave;ng: C&ugrave;ng một đoạn trong trung t&acirc;m thương mại (cả trực tuyến v&agrave; ngoại tuyến)</li>\r\n<li title=\"&nbsp;PU\" data-spm-anchor-id=\"a312a.7700718.0.i0.7aaa1ec5kMJtDH\">Chất liệu đế: PU</li>\r\n<li title=\"&nbsp;G&oacute;t thấp (1-3cm)\">Chiều cao g&oacute;t: g&oacute;t thấp (1-3cm)</li>\r\n<li id=\"J_attrBrandName\" title=\"&nbsp;ZARA\">Thương hiệu: ZARA</li>\r\n<li title=\"&nbsp;Đầu tr&ograve;n\">Kiểu ng&oacute;n ch&acirc;n: đầu tr&ograve;n</li>\r\n<li title=\"&nbsp;Ren\">C&aacute;ch k&iacute;n: buộc</li>\r\n<li title=\"&nbsp;Cao su\">Chất liệu duy nhất: cao su</li>\r\n<li title=\"&nbsp;Nhiều vật liệu kh&acirc;u\">Vật liệu tr&ecirc;n: kh&acirc;u nhiều vật liệu</li>\r\n<li title=\"&nbsp;Vải\">Chất liệu l&oacute;t tr&ecirc;n: vải</li>\r\n<li title=\"&nbsp;G&oacute;t ch&acirc;n phẳng\">Với kiểu d&aacute;ng dưới: phẳng với</li>\r\n<li title=\"&nbsp;Phối m&agrave;u\">Hoa văn: phối m&agrave;u</li>\r\n<li title=\"&nbsp;Xu hướng tuổi trẻ\">Phong c&aacute;ch: xu hướng giới trẻ</li>\r\n<li title=\"&nbsp;Ch&acirc;u &acirc;u v&agrave; mỹ\">Ph&acirc;n khu theo phong c&aacute;ch: Ch&acirc;u &Acirc;u v&agrave; Ch&acirc;u Mỹ</li>\r\n<li title=\"&nbsp;Thể thao v&agrave; giải tr&iacute;\">Nh&acirc;n dịp: Thể thao v&agrave; giải tr&iacute;</li>\r\n<li title=\"&nbsp;M&ugrave;a xu&acirc;n v&agrave; m&ugrave;a thu\">M&ugrave;a: Xu&acirc;n thu</li>\r\n<li title=\"&nbsp;Trắng\" data-spm-anchor-id=\"a312a.7700718.0.i1.7aaa1ec5kMJtDH\">Ph&acirc;n loại m&agrave;u: trắng</li>\r\n<li title=\"&nbsp;39 (255/93) 40 (260/94) 41 (265/95) 42 (270/96) 43 (275/97) 44 (285/98) 45 (290/99) 46 (295/100) 47 ( 305/101)\">K&iacute;ch thước: 39 (255/93) 40 (260/94) 41 (265/95) 42 (270/96) 43 (275/97) 44 (285/98) 45 (290/99) 46 (295/100) 47 (305/101)</li>\r\n<li title=\"&nbsp;Gi&agrave;y thể thao\">Phong c&aacute;ch: gi&agrave;y thể thao</li>\r\n<li title=\"&nbsp;Thanh ni&ecirc;n (18-40 tuổi)\">&Aacute;p dụng cho: Thanh ni&ecirc;n (18-40 tuổi)</li>\r\n<li title=\"&nbsp;Gi&agrave;y thể thao ngo&agrave;i trời\">T&ecirc;n gi&agrave;y thấp: gi&agrave;y thể thao ngo&agrave;i trời</li>\r\n</ul>', 13, 'giay-nam-zara', 'https://detail.tmall.com/item.htm?id=573866542794', 14, 6, 179, 99, 56, 346500, 'a:9:{i:0;s:11:\"39 (255/93)\";i:1;s:11:\"40 (260/94)\";i:2;s:11:\"41 (265/95)\";i:3;s:11:\"42 (270/96)\";i:4;s:11:\"43 (275/97)\";i:5;s:11:\"44 (285/98)\";i:6;s:11:\"45 (290/99)\";i:7;s:12:\"46 (295/100)\";i:8;s:12:\"47 (305/101)\";}', 'a:1:{i:0;s:88:\"assets/images/products_color/TB2JLdBlbZnBKNjSZFGXXbt3FXa_!!2228361831.jpg_500x500q90.jpg\";}', 1, 1, 2, 1547192649),
(8, 'Giày Nam Zsuo', '<p class=\"attr-list-hd tm-clear\"><em>Th&ocirc;ng số sản phẩm:</em></p>\r\n<ul id=\"J_AttrUL\" data-spm-anchor-id=\"a220o.1000855.0.i1.25b34243A2NX1o\">\r\n<li id=\"J_attrBrandName\" title=\"&nbsp;Z.  Suo / đi bộ\">Thương hiệu: Z.&nbsp;Suo / đi bộ</li>\r\n<li title=\"&nbsp;Chống m&agrave;i m&ograve;n\">Chức năng: chống m&agrave;i m&ograve;n</li>\r\n<li title=\"&nbsp;Ren\">C&aacute;ch k&iacute;n: buộc</li>\r\n<li title=\"&nbsp;38 39 40 41 42 43 44\">K&iacute;ch thước: 38 39 40 41 42 43 44</li>\r\n<li title=\"&nbsp;M&agrave;u đặc\">Hoa văn: m&agrave;u đặc</li>\r\n<li title=\"&nbsp;Giải tr&iacute;\">Phong c&aacute;ch: Giải tr&iacute;</li>\r\n<li title=\"&nbsp;Giải tr&iacute; h&agrave;ng ng&agrave;y\">Ph&acirc;n khu theo phong c&aacute;ch: giải tr&iacute; h&agrave;ng ng&agrave;y</li>\r\n<li title=\"&nbsp;M&igrave; thường\" data-spm-anchor-id=\"a220o.1000855.0.i2.25b34243A2NX1o\">C&aacute;c yếu tố phổ biến: m&igrave; thường</li>\r\n<li title=\"&nbsp;G&oacute;t thấp (1-3cm)\">Chiều cao g&oacute;t: g&oacute;t thấp (1-3cm)</li>\r\n<li title=\"&nbsp;Đừng bắn!  !  Nếu t&igrave;m thấy (ngồi xổm mở ch&acirc;n cao su bị hỏng phần m&agrave;i ch&acirc;n) ho&agrave;n trả đầy đủ!  Cộng với m&agrave;u c&aacute;t nhung cộng với m&agrave;u nhung nhung m&agrave;u x&aacute;m x&aacute;m\">Ph&acirc;n loại m&agrave;u: Đừng bắn!&nbsp;!&nbsp;Nếu t&igrave;m thấy (ngồi xổm mở ch&acirc;n cao su bị hỏng phần m&agrave;i ch&acirc;n) ho&agrave;n trả đầy đủ!&nbsp;Cộng với m&agrave;u c&aacute;t nhung cộng với m&agrave;u nhung nhung m&agrave;u x&aacute;m x&aacute;m</li>\r\n<li title=\"&nbsp;ZS888-10\">Mục số: ZS888-10</li>\r\n<li title=\"&nbsp;Gi&agrave;y thể thao\">T&ecirc;n gi&agrave;y thấp: gi&agrave;y</li>\r\n<li title=\"&nbsp;M&ugrave;a đ&ocirc;ng\">M&ugrave;a: m&ugrave;a đ&ocirc;ng</li>\r\n<li title=\"&nbsp;M&ugrave;a đ&ocirc;ng năm 2018\">M&ugrave;a ni&ecirc;m yết: M&ugrave;a đ&ocirc;ng 2018</li>\r\n<li title=\"&nbsp;Đầu tr&ograve;n\">Kiểu ng&oacute;n ch&acirc;n: đầu tr&ograve;n</li>\r\n<li title=\"&nbsp;Mỗi ng&agrave;y\">Nh&acirc;n dịp: H&agrave;ng ng&agrave;y</li>\r\n<li title=\"&nbsp;G&oacute;t ch&acirc;n phẳng\">Với kiểu d&aacute;ng dưới: phẳng với</li>\r\n<li title=\"&nbsp;Cao su\">Chất liệu duy nhất: cao su</li>\r\n<li title=\"&nbsp;Da lợn lớp đầu ti&ecirc;n\">Chất liệu l&oacute;t tr&ecirc;n: da heo lớp một</li>\r\n<li title=\"&nbsp;Thanh ni&ecirc;n (18-40 tuổi)\">&Aacute;p dụng cho: Thanh ni&ecirc;n (18-40 tuổi)</li>\r\n<li title=\"&nbsp;Da lộn\">Qu&aacute; tr&igrave;nh chất liệu da: da lộn</li>\r\n<li title=\"&nbsp;Gi&agrave;y d&iacute;nh\">Quy tr&igrave;nh l&agrave;m gi&agrave;y: gi&agrave;y d&iacute;nh</li>\r\n<li title=\"&nbsp;Da lợn lớp hai\">Chất liệu tr&ecirc;n: hai lớp da heo</li>\r\n<li title=\"&nbsp;Da lợn lớp đầu ti&ecirc;n\">Chất liệu đế: da heo lớp một</li>\r\n<li title=\"&nbsp;Gi&agrave;y thể thao\">Phong c&aacute;ch: gi&agrave;y</li>\r\n<li title=\"&nbsp;Thương mại điện tử thuần t&uacute;y (chỉ c&oacute; sẵn trực tuyến)\">Loại k&ecirc;nh b&aacute;n h&agrave;ng: thương mại điện tử thuần t&uacute;</li>\r\n</ul>', 13, 'giay-nam-zsuo', 'https://detail.tmall.com/item.htm?id=581990919221', 15, 6, 718, 328, 46, 1148000, 'a:7:{i:0;s:2:\"38\";i:1;s:2:\"39\";i:2;s:2:\"40\";i:3;s:2:\"41\";i:4;s:2:\"42\";i:5;s:2:\"43\";i:6;s:2:\"44\";}', 'a:5:{i:0;s:84:\"assets/images/products_color/O1CN01mcHWg31syTWOLGqfS_!!1017595835.jpg_500x500q90.jpg\";i:1;s:84:\"assets/images/products_color/O1CN01qCuL2L1syTWTM5I8Z_!!1017595835.jpg_500x500q90.jpg\";i:2;s:84:\"assets/images/products_color/O1CN01VLSbHI1syTWTsKTz5_!!1017595835.jpg_500x500q90.jpg\";i:3;s:84:\"assets/images/products_color/O1CN01RmObDf1syTWFDwePd_!!1017595835.jpg_500x500q90.jpg\";i:4;s:84:\"assets/images/products_color/O1CN01deEX721syTWF2Kxrs_!!1017595835.jpg_500x500q90.jpg\";}', 1, 1, 2, 1547192661),
(9, 'Giày Josiny', '', 29, 'giay-josiny', 'https://detail.tmall.com/item.htm?id=575623904444', 16, 6, 569, 249, 44, 871500, 'a:6:{i:0;s:2:\"34\";i:1;s:2:\"35\";i:2;s:2:\"36\";i:3;s:2:\"37\";i:4;s:2:\"38\";i:5;s:2:\"39\";}', 'a:2:{i:0;s:87:\"assets/images/products_color/TB2Kq7tqQ7mBKNjSZFyXXbydFXa_!!467426552.jpg_500x500q90.jpg\";i:1;s:87:\"assets/images/products_color/TB2WXoEqH3nBKNjSZFMXXaUSFXa_!!467426552.jpg_500x500q90.jpg\";}', 2, 1, 2, 1547192589),
(10, 'Giày nữ ONDUL', '<div id=\"J_BrandAttr\" class=\"tm-clear tb-hidden tm_brandAttr\">\r\n<div class=\"name\">T&ecirc;n thương hiệu:&nbsp;<strong class=\"J_EbrandLogo\">ONDUL / V&ograve;ng</strong></div>\r\n</div>\r\n<p class=\"attr-list-hd tm-clear\"><em>Th&ocirc;ng số sản phẩm:</em></p>\r\n<ul id=\"J_AttrUL\" data-spm-anchor-id=\"a220o.1000855.0.i0.121244f4qCF6JZ\">\r\n<li id=\"J_attrBrandName\" title=\"&nbsp;ONDUL /\">Thương hiệu: ONDUL / v&ograve;ng</li>\r\n<li title=\"&nbsp;1018101840\">Số h&agrave;ng: 1018101840</li>\r\n<li title=\"&nbsp;Xu&acirc;n 2018\">M&ugrave;a ni&ecirc;m yết: Xu&acirc;n 2018</li>\r\n<li title=\"&nbsp;Thanh lịch\">Phong c&aacute;ch: thanh lịch</li>\r\n<li title=\"&nbsp;Vải\">Gi&uacute;p vật liệu bề mặt: vải</li>\r\n<li title=\"&nbsp;PU\">Chất liệu b&ecirc;n trong: PU</li>\r\n<li title=\"&nbsp;Cao su\">Chất liệu duy nhất: cao su</li>\r\n<li title=\"&nbsp;Miệng n&ocirc;ng\">Độ s&acirc;u mở: miệng n&ocirc;ng</li>\r\n<li title=\"&nbsp;Chỉ\">Kiểu ng&oacute;n ch&acirc;n: nhọn</li>\r\n<li title=\"&nbsp;Gi&agrave;y cao g&oacute;t (5-8cm)\">Chiều cao g&oacute;t: g&oacute;t cao (5-8cm)</li>\r\n<li title=\"&nbsp;G&oacute;t ch&acirc;n tốt\">Với phong c&aacute;ch dưới c&ugrave;ng: tốt với</li>\r\n<li title=\"&nbsp;Miệng n&ocirc;ng\" data-spm-anchor-id=\"a220o.1000855.0.i1.121244f4qCF6JZ\">Yếu tố phổ biến: miệng n&ocirc;ng</li>\r\n<li title=\"&nbsp;Đặt ch&acirc;n\">C&aacute;ch k&iacute;n: đặt ch&acirc;n</li>\r\n<li title=\"&nbsp;Gi&agrave;y d&iacute;nh\">Quy tr&igrave;nh l&agrave;m gi&agrave;y: gi&agrave;y d&iacute;nh</li>\r\n<li title=\"&nbsp;Sọc\">Hoa văn: sọc</li>\r\n<li title=\"&nbsp;PU\">Chất liệu đế: PU</li>\r\n<li title=\"&nbsp;Gi&agrave;y đơn\">Phong c&aacute;ch: gi&agrave;y đơn</li>\r\n<li title=\"&nbsp;Thanh ni&ecirc;n (18-40 tuổi)\">&Aacute;p dụng cho: Thanh ni&ecirc;n (18-40 tuổi)</li>\r\n<li title=\"&nbsp;Trang phục ch&iacute;nh thức\">Cảnh &aacute;p dụng: trang phục ch&iacute;nh thức</li>\r\n<li title=\"&nbsp;Chỉ\">Kiểu ng&oacute;n ch&acirc;n: nhọn</li>\r\n<li title=\"&nbsp;34 35 36 37 38 39 40\">K&iacute;ch thước: 34 35 36 37 38 39 40</li>\r\n<li title=\"&nbsp;M&agrave;u xanh nhạt, t&iacute;m nhạt, t&ocirc;ng m&agrave;u da\">Ph&acirc;n loại m&agrave;u: m&agrave;u xanh nhạt &aacute;nh s&aacute;ng m&agrave;</li>\r\n</ul>', 29, 'giay-nu-ondul', 'https://detail.tmall.com/item.htm?id=564864574190', 0, 6, 319, 149, 47, 521500, 'a:7:{i:0;s:2:\"34\";i:1;s:2:\"35\";i:2;s:2:\"36\";i:3;s:2:\"37\";i:4;s:2:\"38\";i:5;s:2:\"39\";i:6;s:2:\"40\";}', 'a:3:{i:0;s:88:\"assets/images/products_color/TB2hqtdXH9YBuNjy0FgXXcxcXXa_!!2786693231.jpg_500x500q90.jpg\";i:1;s:88:\"assets/images/products_color/TB245LmXcIrBKNjSZK9XXagoVXa_!!2786693231.jpg_500x500q90.jpg\";i:2;s:88:\"assets/images/products_color/TB2kWj9XcuYBuNkSmRyXXcA3pXa_!!2786693231.jpg_500x500q90.jpg\";}', 2, 1, 2, 1547192572),
(11, 'Áo khoác Enjeolon', '<div id=\"J_BrandAttr\" class=\"tm-clear tb-hidden tm_brandAttr\">\r\n<div class=\"name\">T&ecirc;n thương hiệu:&nbsp;<strong class=\"J_EbrandLogo\" data-spm-anchor-id=\"a220o.1000855.0.i0.4dc05576GOiyVJ\">Enjeolon / British Grand Mercure</strong></div>\r\n</div>\r\n<p class=\"attr-list-hd tm-clear\"><a class=\"ui-more-nbg tm-MRswitchAttrs\" href=\"https://detail.tmall.com/item.htm?id=577758210678&amp;spm=875.7931836/B.2017077.3.66144265eKhcJi&amp;scm=1007.12144.81309.73263_0_0&amp;pvid=0fc0c037-7992-4f63-9316-d0f6af4d6dc0&amp;utparam={%22x_hestia_source%22:%2273263%22,%22x_object_type%22:%22item%22,%22x_mt%22:0,%22x_src%22:%2273263%22,%22x_pos%22:2,%22x_pvid%22:%220fc0c037-7992-4f63-9316-d0f6af4d6dc0%22,%22x_object_id%22:577758210678}#J_Attrs\">Th&ecirc;m th&ocirc;ng số</a><em>Th&ocirc;ng số sản phẩm:</em></p>\r\n<ul id=\"J_AttrUL\" data-spm-anchor-id=\"a220o.1000855.0.i4.4dc05576GOiyVJ\">\r\n<li title=\"&nbsp;M&ugrave;a đ&ocirc;ng năm 2018\">M&ugrave;a ni&ecirc;m yết: M&ugrave;a đ&ocirc;ng 2018</li>\r\n<li title=\"&nbsp;Thương mại điện tử thuần t&uacute;y (chỉ c&oacute; sẵn trực tuyến)\" data-spm-anchor-id=\"a220o.1000855.0.i3.4dc05576GOiyVJ\">Loại k&ecirc;nh b&aacute;n h&agrave;ng: thương mại điện tử thuần t&uacute;y (chỉ b&aacute;n h&agrave;ng trực tuyến)</li>\r\n<li title=\"&nbsp;D&agrave;y\">Độ d&agrave;y: d&agrave;y</li>\r\n<li title=\"&nbsp;Tuổi trẻ\">Phong c&aacute;ch cơ bản: giới trẻ pop</li>\r\n<li id=\"J_attrBrandName\" title=\"&nbsp;Enjeolon / British Grand Mercure\" data-spm-anchor-id=\"a220o.1000855.0.i2.4dc05576GOiyVJ\">Thương hiệu: Enjeolon / British Grand Mercure</li>\r\n<li title=\"&nbsp;MFH0062\">Mục số: MFH0062</li>\r\n<li title=\"&nbsp;Polyester 100%\">Th&agrave;nh phần vật liệu: Polyester 100%</li>\r\n</ul>', 24, 'ao-khoac-enjeolon', 'https://detail.tmall.com/item.htm?id=577758210678', 32, 6, 298, 298, 100, 1043000, 'a:5:{i:0;s:5:\"170/M\";i:1;s:5:\"175/L\";i:2;s:6:\"180/XL\";i:3;s:7:\"185/XXL\";i:4;s:8:\"190/XXXL\";}', 'a:2:{i:0;s:88:\"assets/images/products_color/TB2tR4lbirpK1RjSZFhXXXSdXXa_!!1860270913.jpg_500x500q90.jpg\";i:1;s:88:\"assets/images/products_color/TB2J_NlbkvoK1RjSZFwXXciCFXa_!!1860270913.jpg_500x500q90.jpg\";}', 1, 1, 2, 1547192338),
(12, 'Áo khoác Enjeolon', '<table class=\"tm-tableAttr\">\r\n<thead>\r\n<tr>\r\n<td colspan=\"2\">Th&ocirc;ng số kỹ thuật</td>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr class=\"tm-tableAttrSub\">\r\n<th colspan=\"2\">Phi&ecirc;n bản phong c&aacute;ch</th>\r\n</tr>\r\n<tr>\r\n<th>Chiều d&agrave;i</th>\r\n<td>&nbsp;Th&ocirc;ng thường</td>\r\n</tr>\r\n<tr>\r\n<th>Phi&ecirc;n bản</th>\r\n<td>&nbsp;Ti&ecirc;u chuẩn</td>\r\n</tr>\r\n<tr>\r\n<th>Kiểu cổ &aacute;o</th>\r\n<td>&nbsp;Tr&ugrave;m đầu</td>\r\n</tr>\r\n<tr>\r\n<th>Ngưỡng</th>\r\n<td>&nbsp;D&acirc;y k&eacute;o</td>\r\n</tr>\r\n<tr>\r\n<th>Chi tiết phong c&aacute;ch</th>\r\n<td>&nbsp;Trang tr&iacute;</td>\r\n</tr>\r\n<tr>\r\n<th>Thiết kế viền</th>\r\n<td>&nbsp;Ben vải hem</td>\r\n</tr>\r\n<tr>\r\n<th>Quần &aacute;o kiểu t&uacute;i</th>\r\n<td>&nbsp;T&uacute;i đường may b&ecirc;n</td>\r\n</tr>\r\n<tr class=\"tm-tableAttrSub\">\r\n<th colspan=\"2\">Thủ c&ocirc;ng / phổ biến</th>\r\n</tr>\r\n<tr>\r\n<th>Ph&acirc;n khu</th>\r\n<td>&nbsp;Đơn giản ch&acirc;u &Acirc;u v&agrave; Mỹ</td>\r\n</tr>\r\n<tr>\r\n<th>Hoa văn</th>\r\n<td>&nbsp;M&agrave;u đặc</td>\r\n</tr>\r\n<tr>\r\n<th>C&ocirc;ng nghệ vật liệu</th>\r\n<td>&nbsp;Kh&ocirc;ng xử l&yacute; sắt</td>\r\n</tr>\r\n<tr class=\"tm-tableAttrSub\">\r\n<th colspan=\"2\">Th&ocirc;ng tin ch&iacute;nh</th>\r\n</tr>\r\n<tr>\r\n<th>M&ugrave;a ni&ecirc;m yết</th>\r\n<td>&nbsp;M&ugrave;a đ&ocirc;ng năm 2018</td>\r\n</tr>\r\n<tr>\r\n<th>Loại k&ecirc;nh b&aacute;n h&agrave;ng</th>\r\n<td>&nbsp;Thương mại điện tử thuần t&uacute;y (chỉ c&oacute; sẵn trực tuyến)</td>\r\n</tr>\r\n<tr>\r\n<th>Độ d&agrave;y</th>\r\n<td>&nbsp;D&agrave;y</td>\r\n</tr>\r\n<tr>\r\n<th>Phong c&aacute;ch cơ bản</th>\r\n<td>&nbsp;Th&agrave;nh phố thời trang</td>\r\n</tr>\r\n<tr>\r\n<th>Thương hiệu</th>\r\n<td>&nbsp;Enjeolon / British Grand Mercure</td>\r\n</tr>\r\n<tr>\r\n<th>Số mặt h&agrave;ng</th>\r\n<td>&nbsp;MFH0634</td>\r\n</tr>\r\n<tr>\r\n<th>Th&agrave;nh phần vật liệu</th>\r\n<td>&nbsp;Sợi polyester 62,6% sợi polyamide (nylon) 37,4%</td>\r\n</tr>\r\n<tr class=\"tm-tableAttrSub\">\r\n<th colspan=\"2\">Kh&aacute;c</th>\r\n</tr>\r\n<tr>\r\n<th>Cảnh &aacute;p dụng</th>\r\n<td>&nbsp;Giải tr&iacute; kh&aacute;c</td>\r\n</tr>\r\n<tr>\r\n<th>Đối tượng &aacute;p dụng</th>\r\n<td data-spm-anchor-id=\"a220o.1000855.0.i3.17d92d42QxbjWC\">&nbsp;Tuổi trẻ</td>\r\n</tr>\r\n</tbody>\r\n</table>', 24, 'ao-khoac-enjeolont43h', 'https://detail.tmall.com/item.htm?id=578053882508', 32, 6, 298, 168, 57, 588000, 'a:5:{i:0;s:5:\"170/M\";i:1;s:5:\"175/L\";i:2;s:6:\"180/XL\";i:3;s:7:\"185/XXL\";i:4;s:8:\"190/XXXL\";}', 'a:2:{i:0;s:88:\"assets/images/products_color/TB2GnWgcpzqK1RjSZSgXXcpAVXa_!!1860270913.jpg_500x500q90.jpg\";i:1;s:88:\"assets/images/products_color/TB2EgGjcxTpK1RjSZFMXXbG_VXa_!!1860270913.jpg_500x500q90.jpg\";}', 1, 1, 2, 1547192318),
(13, 'Áo phông nam', '<table class=\"tm-tableAttr\">\r\n<thead>\r\n<tr>\r\n<td colspan=\"2\" data-spm-anchor-id=\"a220o.1000855.0.i1.3fa67d49xhom1t\">Th&ocirc;ng số kỹ thuật</td>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr class=\"tm-tableAttrSub\">\r\n<th colspan=\"2\">Phi&ecirc;n bản phong c&aacute;ch</th>\r\n</tr>\r\n<tr>\r\n<th>Kiểu cổ &aacute;o</th>\r\n<td>&nbsp;Cổ tr&ograve;n</td>\r\n</tr>\r\n<tr>\r\n<th>Kiểu tay &aacute;o</th>\r\n<td>&nbsp;Th&ocirc;ng thường</td>\r\n</tr>\r\n<tr>\r\n<th>Chiều d&agrave;i tay &aacute;o</th>\r\n<td data-spm-anchor-id=\"a220o.1000855.0.i0.3fa67d49xhom1t\">&nbsp;Tay &aacute;o d&agrave;i</td>\r\n</tr>\r\n<tr>\r\n<th>Phi&ecirc;n bản</th>\r\n<td>&nbsp;Ph&ugrave; hợp với mỏng</td>\r\n</tr>\r\n<tr>\r\n<th>Chi tiết phong c&aacute;ch</th>\r\n<td>&nbsp;Kh&aacute;c</td>\r\n</tr>\r\n<tr class=\"tm-tableAttrSub\">\r\n<th colspan=\"2\">Thủ c&ocirc;ng / phổ biến</th>\r\n</tr>\r\n<tr>\r\n<th>Mẫu hoa</th>\r\n<td>&nbsp;M&agrave;u đặc</td>\r\n</tr>\r\n<tr>\r\n<th>Ph&acirc;n khu</th>\r\n<td>&nbsp;Thủy triều</td>\r\n</tr>\r\n<tr>\r\n<th>Quần &aacute;o thủ c&ocirc;ng</th>\r\n<td>&nbsp;Kh&ocirc;ng xử l&yacute; sắt</td>\r\n</tr>\r\n<tr>\r\n<th>In chủ đề</th>\r\n<td>&nbsp;Logo thương hiệu</td>\r\n</tr>\r\n<tr class=\"tm-tableAttrSub\">\r\n<th colspan=\"2\">Th&ocirc;ng tin ch&iacute;nh</th>\r\n</tr>\r\n<tr>\r\n<th>Thương hiệu</th>\r\n<td>&nbsp;CHƠI TR&Ograve; CHƠI / Playboy</td>\r\n</tr>\r\n<tr>\r\n<th>Số mặt h&agrave;ng</th>\r\n<td>&nbsp;QT-SY20172A-AAC</td>\r\n</tr>\r\n<tr>\r\n<th>Phong c&aacute;ch cơ bản</th>\r\n<td>&nbsp;Tuổi trẻ</td>\r\n</tr>\r\n<tr>\r\n<th>M&ugrave;a ni&ecirc;m yết</th>\r\n<td>&nbsp;M&ugrave;a thu 2018</td>\r\n</tr>\r\n<tr>\r\n<th>Độ d&agrave;y</th>\r\n<td>&nbsp;Th&ocirc;ng thường</td>\r\n</tr>\r\n<tr>\r\n<th>Loại k&ecirc;nh b&aacute;n h&agrave;ng</th>\r\n<td>&nbsp;Thương mại điện tử thuần t&uacute;y (chỉ c&oacute; sẵn trực tuyến)</td>\r\n</tr>\r\n<tr>\r\n<th>Th&agrave;nh phần vật liệu</th>\r\n<td>&nbsp;Sợi polyester 95% Polyurethane (Spandex) 5%</td>\r\n</tr>\r\n<tr class=\"tm-tableAttrSub\">\r\n<th colspan=\"2\">Kh&aacute;c</th>\r\n</tr>\r\n<tr>\r\n<th>Cảnh &aacute;p dụng</th>\r\n<td>&nbsp;Giải tr&iacute; kh&aacute;c</td>\r\n</tr>\r\n<tr>\r\n<th>Đối tượng &aacute;p dụng</th>\r\n<td>&nbsp;Tuổi trẻ</td>\r\n</tr>\r\n</tbody>\r\n</table>', 22, 'ao-phong-nam', 'https://detail.tmall.com/item.htm?id=577528048153', 5, 6, 189, 139, 74, 486500, 'a:6:{i:0;s:1:\"M\";i:1;s:1:\"L\";i:2;s:2:\"XL\";i:3;s:3:\"2XL\";i:4;s:3:\"3XL\";i:5;s:3:\"4XL\";}', 'a:24:{i:0;s:84:\"assets/images/products_color/O1CN011r7VsE2LtY804ZpY9_!!1923029750.jpg_500x500q90.jpg\";i:1;s:84:\"assets/images/products_color/O1CN01MTIfq42LtY7zOxiQm_!!1923029750.jpg_500x500q90.jpg\";i:2;s:82:\"assets/images/products_color/O1CN012LtY6d9ma76HMEx_!!1923029750.jpg_500x500q90.jpg\";i:3;s:82:\"assets/images/products_color/O1CN012LtY6fryCiJFZGr_!!1923029750.jpg_500x500q90.jpg\";i:4;s:84:\"assets/images/products_color/O1CN01WNBPSQ2LtY804b2XI_!!1923029750.jpg_500x500q90.jpg\";i:5;s:84:\"assets/images/products_color/O1CN01Z6thAJ2LtY82h0twf_!!1923029750.jpg_500x500q90.jpg\";i:6;s:84:\"assets/images/products_color/O1CN01qdfNgw2LtY7z07qg2_!!1923029750.jpg_500x500q90.jpg\";i:7;s:84:\"assets/images/products_color/O1CN01cCs1c12LtY80mdSXy_!!1923029750.jpg_500x500q90.jpg\";i:8;s:82:\"assets/images/products_color/O1CN012LtY6d9nNziYsif_!!1923029750.jpg_500x500q90.jpg\";i:9;s:82:\"assets/images/products_color/O1CN012LtY6d9orRpbij3_!!1923029750.jpg_500x500q90.jpg\";i:10;s:82:\"assets/images/products_color/O1CN012LtY6cmdiJ6lmTj_!!1923029750.jpg_500x500q90.jpg\";i:11;s:82:\"assets/images/products_color/O1CN012LtY6eakdB2xZnq_!!1923029750.jpg_500x500q90.jpg\";i:12;s:82:\"assets/images/products_color/O1CN012LtY6x13G0MAoHH_!!1923029750.jpg_500x500q90.jpg\";i:13;s:82:\"assets/images/products_color/O1CN012LtY6u1cmMBpBTE_!!1923029750.jpg_500x500q90.jpg\";i:14;s:82:\"assets/images/products_color/O1CN012LtY6vnRUPSZbxz_!!1923029750.jpg_500x500q90.jpg\";i:15;s:82:\"assets/images/products_color/O1CN012LtY6vnSpc1VCGB_!!1923029750.jpg_500x500q90.jpg\";i:16;s:82:\"assets/images/products_color/O1CN012LtY6woHTEFjszf_!!1923029750.jpg_500x500q90.jpg\";i:17;s:82:\"assets/images/products_color/O1CN012LtY6w88iqilBx0_!!1923029750.jpg_500x500q90.jpg\";i:18;s:82:\"assets/images/products_color/O1CN012LtY6u1cJMLofP1_!!1923029750.jpg_500x500q90.jpg\";i:19;s:82:\"assets/images/products_color/O1CN012LtY6x14Sx3TxoL_!!1923029750.jpg_500x500q90.jpg\";i:20;s:82:\"assets/images/products_color/O1CN012LtY6vo4SGLdpJL_!!1923029750.jpg_500x500q90.jpg\";i:21;s:82:\"assets/images/products_color/O1CN012LtY6vGbmSMDKxj_!!1923029750.jpg_500x500q90.jpg\";i:22;s:82:\"assets/images/products_color/O1CN012LtY6xDuoiAkP5K_!!1923029750.jpg_500x500q90.jpg\";i:23;s:82:\"assets/images/products_color/O1CN012LtY6vnUF5QFRwT_!!1923029750.jpg_500x500q90.jpg\";}', 1, 1, 2, 1547192306),
(14, 'Quần vải Playboy', '<table class=\"tm-tableAttr\">\r\n<tbody>\r\n<tr class=\"tm-tableAttrSub\">\r\n<th colspan=\"2\"><span data-spm-anchor-id=\"a220o.1000855.0.i1.6cf66a67AAY2h1\">Phi&ecirc;n bản phong c&aacute;ch</span></th>\r\n</tr>\r\n<tr>\r\n<th>Chiều d&agrave;i quần</th>\r\n<td>&nbsp;Quần t&acirc;y</td>\r\n</tr>\r\n<tr>\r\n<th>Kiểu eo</th>\r\n<td data-spm-anchor-id=\"a220o.1000855.0.i0.6cf66a67AAY2h1\">&nbsp;Eo thấp</td>\r\n</tr>\r\n<tr>\r\n<th>Phi&ecirc;n bản quần &aacute;o</th>\r\n<td>&nbsp;Ph&ugrave; hợp với mỏng</td>\r\n</tr>\r\n<tr>\r\n<th>Kiểu quần</th>\r\n<td>&nbsp;Thẳng</td>\r\n</tr>\r\n<tr class=\"tm-tableAttrSub\">\r\n<th colspan=\"2\">Thủ c&ocirc;ng / phổ biến</th>\r\n</tr>\r\n<tr>\r\n<th>Quy tr&igrave;nh</th>\r\n<td>&nbsp;Kh&ocirc;ng xử l&yacute; sắt</td>\r\n</tr>\r\n<tr>\r\n<th>Ph&acirc;n khu</th>\r\n<td>&nbsp;Kinh doanh giải tr&iacute;</td>\r\n</tr>\r\n<tr>\r\n<th>Hoa văn</th>\r\n<td>&nbsp;M&agrave;u đặc</td>\r\n</tr>\r\n<tr class=\"tm-tableAttrSub\">\r\n<th colspan=\"2\">Th&ocirc;ng tin ch&iacute;nh</th>\r\n</tr>\r\n<tr>\r\n<th>M&ugrave;a ni&ecirc;m yết</th>\r\n<td>&nbsp;H&egrave; 2018</td>\r\n</tr>\r\n<tr>\r\n<th>Loại k&ecirc;nh b&aacute;n h&agrave;ng</th>\r\n<td>&nbsp;Thương mại điện tử thuần t&uacute;y (chỉ c&oacute; sẵn trực tuyến)</td>\r\n</tr>\r\n<tr>\r\n<th>Độ co gi&atilde;n</th>\r\n<td>&nbsp;Vi đ&agrave;n hồi</td>\r\n</tr>\r\n<tr>\r\n<th>Độ d&agrave;y</th>\r\n<td>&nbsp;Th&ocirc;ng thường</td>\r\n</tr>\r\n<tr>\r\n<th>Phong c&aacute;ch cơ bản</th>\r\n<td>&nbsp;Th&agrave;nh phố thời trang</td>\r\n</tr>\r\n<tr>\r\n<th>Thương hiệu</th>\r\n<td>&nbsp;CHƠI TR&Ograve; CHƠI / Playboy</td>\r\n</tr>\r\n<tr>\r\n<th>Số mặt h&agrave;ng</th>\r\n<td>&nbsp;QT-SBL666-AC</td>\r\n</tr>\r\n<tr>\r\n<th>Th&agrave;nh phần vật liệu</th>\r\n<td>&nbsp;Cotton 97% sợi đ&agrave;n hồi polyurethane (spandex) 3%</td>\r\n</tr>\r\n</tbody>\r\n</table>', 33, 'quan-vai-playboy', 'https://detail.tmall.com/item.htm?id=571656082314', 5, 6, 189, 139, 74, 486500, 'a:10:{i:0;s:2:\"29\";i:1;s:2:\"30\";i:2;s:2:\"31\";i:3;s:2:\"32\";i:4;s:2:\"33\";i:5;s:2:\"34\";i:6;s:2:\"35\";i:7;s:2:\"36\";i:8;s:2:\"38\";i:9;s:2:\"40\";}', 'a:6:{i:0;s:88:\"assets/images/products_color/TB2pbQWIaSWBuNjSsrbXXa0mVXa_!!1923029750.jpg_500x500q90.jpg\";i:1;s:88:\"assets/images/products_color/TB2Ju8YAiOYBuNjSsD4XXbSkFXa_!!1923029750.jpg_500x500q90.jpg\";i:2;s:88:\"assets/images/products_color/TB2Vg9wIuOSBuNjy0FdXXbDnVXa_!!1923029750.jpg_500x500q90.jpg\";i:3;s:88:\"assets/images/products_color/TB2lXj4IxGYBuNjy0FnXXX5lpXa_!!1923029750.jpg_500x500q90.jpg\";i:4;s:88:\"assets/images/products_color/TB20BYjIACWBuNjy0FaXXXUlXXa_!!1923029750.jpg_500x500q90.jpg\";i:5;s:88:\"assets/images/products_color/TB2tlVwAcyYBuNkSnfoXXcWgVXa_!!1923029750.jpg_500x500q90.jpg\";}', 1, 1, 2, 1547192287);
INSERT INTO `dong_product` (`product_id`, `product_name`, `product_content`, `product_category`, `product_url`, `product_suorce`, `product_brand`, `product_quality`, `product_price_default`, `product_price_promotion`, `product_sale`, `product_price_vn`, `product_size`, `product_color`, `product_gender`, `product_user`, `product_status`, `product_time`) VALUES
(15, 'Áo Phông Playboy', '<table class=\"tm-tableAttr\">\r\n<thead>\r\n<tr>\r\n<td colspan=\"2\"><span data-spm-anchor-id=\"a220o.1000855.0.i1.4e9e53448mSLjn\">Th&ocirc;ng số kỹ thuật</span></td>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr class=\"tm-tableAttrSub\">\r\n<th colspan=\"2\">Phi&ecirc;n bản phong c&aacute;ch</th>\r\n</tr>\r\n<tr>\r\n<th>Kiểu cổ &aacute;o</th>\r\n<td>&nbsp;Cổ tr&ograve;n</td>\r\n</tr>\r\n<tr>\r\n<th>Kiểu tay &aacute;o</th>\r\n<td>&nbsp;Th&ocirc;ng thường</td>\r\n</tr>\r\n<tr>\r\n<th>Chiều d&agrave;i tay &aacute;o</th>\r\n<td>&nbsp;Tay &aacute;o d&agrave;i</td>\r\n</tr>\r\n<tr>\r\n<th>Phi&ecirc;n bản</th>\r\n<td>&nbsp;Ph&ugrave; hợp với mỏng</td>\r\n</tr>\r\n<tr>\r\n<th>Chi tiết phong c&aacute;ch</th>\r\n<td data-spm-anchor-id=\"a220o.1000855.0.i0.4e9e53448mSLjn\">&nbsp;In ấn</td>\r\n</tr>\r\n<tr class=\"tm-tableAttrSub\">\r\n<th colspan=\"2\">Thủ c&ocirc;ng / phổ biến</th>\r\n</tr>\r\n<tr>\r\n<th>Mẫu hoa</th>\r\n<td>&nbsp;M&agrave;u đặc</td>\r\n</tr>\r\n<tr>\r\n<th>Ph&acirc;n khu</th>\r\n<td>&nbsp;Sức sống trẻ trung</td>\r\n</tr>\r\n<tr>\r\n<th>Quần &aacute;o thủ c&ocirc;ng</th>\r\n<td>&nbsp;Kh&ocirc;ng xử l&yacute; sắt</td>\r\n</tr>\r\n<tr>\r\n<th>In chủ đề</th>\r\n<td>&nbsp;Logo thương hiệu</td>\r\n</tr>\r\n<tr class=\"tm-tableAttrSub\">\r\n<th colspan=\"2\">Th&ocirc;ng tin ch&iacute;nh</th>\r\n</tr>\r\n<tr>\r\n<th>Thương hiệu</th>\r\n<td>&nbsp;CHƠI TR&Ograve; CHƠI / Playboy</td>\r\n</tr>\r\n<tr>\r\n<th>Số mặt h&agrave;ng</th>\r\n<td>&nbsp;Z1234SYA</td>\r\n</tr>\r\n<tr>\r\n<th>Phong c&aacute;ch cơ bản</th>\r\n<td>&nbsp;Tuổi trẻ</td>\r\n</tr>\r\n<tr>\r\n<th>M&ugrave;a ni&ecirc;m yết</th>\r\n<td>&nbsp;H&egrave; 2018</td>\r\n</tr>\r\n<tr>\r\n<th>Độ d&agrave;y</th>\r\n<td>&nbsp;Th&ocirc;ng thường</td>\r\n</tr>\r\n<tr>\r\n<th>Loại k&ecirc;nh b&aacute;n h&agrave;ng</th>\r\n<td>&nbsp;Thương mại điện tử thuần t&uacute;y (chỉ c&oacute; sẵn trực tuyến)</td>\r\n</tr>\r\n<tr>\r\n<th>Th&agrave;nh phần vật liệu</th>\r\n<td>&nbsp;Chất liệu cotton co gi&atilde;n 95% polyurethane (spandex) 5%</td>\r\n</tr>\r\n<tr class=\"tm-tableAttrSub\">\r\n<th colspan=\"2\">Kh&aacute;c</th>\r\n</tr>\r\n<tr>\r\n<th>Cảnh &aacute;p dụng</th>\r\n<td>&nbsp;Mỗi ng&agrave;y</td>\r\n</tr>\r\n<tr>\r\n<th>Đối tượng &aacute;p dụng</th>\r\n<td>&nbsp;Tuổi trẻ</td>\r\n</tr>\r\n</tbody>\r\n</table>', 22, 'ao-phong-playboy', 'https://detail.tmall.com/item.htm?id=568891416185', 5, 6, 189, 139, 74, 486500, 'a:6:{i:0;s:1:\"M\";i:1;s:1:\"L\";i:2;s:2:\"XL\";i:3;s:3:\"2XL\";i:4;s:3:\"3XL\";i:5;s:3:\"4XL\";}', 'a:4:{i:0;s:88:\"assets/images/products_color/TB2WVMWbhTpK1RjSZR0XXbEwXXa_!!1923029750.jpg_500x500q90.jpg\";i:1;s:88:\"assets/images/products_color/TB2FOkUbhTpK1RjSZFKXXa2wXXa_!!1923029750.jpg_500x500q90.jpg\";i:2;s:82:\"assets/images/products_color/O1CN012LtY6YQqAlUZRdg_!!1923029750.jpg_500x500q90.jpg\";i:3;s:82:\"assets/images/products_color/O1CN012LtY6fDpv1rKSRB_!!1923029750.jpg_500x500q90.jpg\";}', 1, 1, 2, 1547192260),
(16, 'Giầy Adidas', '', 2, 'giay-adidas', 'https://detail.tmall.com/item.htm?id=575490601839', 0, 6, 799, 699, 88, 2446500, 'a:10:{i:0;s:2:\"45\";i:1;s:2:\"43\";i:2;s:4:\"40.5\";i:3;s:2:\"41\";i:4;s:2:\"44\";i:5;s:4:\"44.5\";i:6;s:2:\"42\";i:7;s:2:\"46\";i:8;s:2:\"40\";i:9;s:4:\"42.5\";}', 'a:2:{i:0;s:85:\"assets/images/products_color/TB2ACRSoHwrBKNjSZPcXXXpapXa-446338500.jpg_500x500q90.jpg\";i:1;s:85:\"assets/images/products_color/TB2bzsJoOAnBKNjSZFvXXaTKXXa-446338500.jpg_500x500q90.jpg\";}', 1, 1, 1, 1549119229),
(17, 'Giày LI-NING ARHN207', '<p><img class=\"img-ks-lazyload\" src=\"https://img.alicdn.com/imgextra/i2/92688455/O1CN01ZTGps92CKRDOb22PW-92688455.jpg\" align=\"absmiddle\" /><img class=\"img-ks-lazyload\" src=\"https://img.alicdn.com/imgextra/i2/92688455/O1CN0121y2xg2CKRDPokZN6-92688455.jpg\" align=\"absmiddle\" /><img class=\"img-ks-lazyload\" src=\"https://img.alicdn.com/imgextra/i4/92688455/O1CN01hqYyHD2CKRDNu9ZhG-92688455.jpg\" align=\"absmiddle\" /><img class=\"img-ks-lazyload\" src=\"https://img.alicdn.com/imgextra/i3/92688455/O1CN0150IGX82CKRDNKLAAV-92688455.jpg\" align=\"absmiddle\" /><img class=\"img-ks-lazyload\" src=\"https://img.alicdn.com/imgextra/i2/92688455/O1CN01YiOAZp2CKRDHQPp0J-92688455.jpg\" align=\"absmiddle\" /><img class=\"img-ks-lazyload\" src=\"https://img.alicdn.com/imgextra/i2/92688455/O1CN01Ms0Y1j2CKRDMKMeIP-92688455.jpg\" align=\"absmiddle\" /><img class=\"img-ks-lazyload\" src=\"https://img.alicdn.com/imgextra/i4/92688455/O1CN01nk4BLz2CKRDMlAhOL-92688455.jpg\" align=\"absmiddle\" /><img class=\"img-ks-lazyload\" src=\"https://img.alicdn.com/imgextra/i1/92688455/O1CN01RzphFc2CKRDOMg2qC-92688455.jpg\" align=\"absmiddle\" /><img class=\"img-ks-lazyload\" src=\"https://img.alicdn.com/imgextra/i3/92688455/O1CN01qsDzmO2CKRDPdr3WZ-92688455.jpg\" align=\"absmiddle\" /><img class=\"img-ks-lazyload\" src=\"https://img.alicdn.com/imgextra/i1/92688455/O1CN01GkkpId2CKRDNu9dru-92688455.jpg\" align=\"absmiddle\" /><img class=\"img-ks-lazyload\" src=\"https://img.alicdn.com/imgextra/i1/92688455/O1CN01kPX7HU2CKRDLjC7mq-92688455.jpg\" align=\"absmiddle\" /><img class=\"img-ks-lazyload\" src=\"https://img.alicdn.com/imgextra/i1/92688455/O1CN017NDE4E2CKRDMlAlZk-92688455.jpg\" align=\"absmiddle\" /><img class=\"img-ks-lazyload\" src=\"https://img.alicdn.com/imgextra/i4/92688455/O1CN01VyONh42CKRDPdpmYv-92688455.jpg\" align=\"absmiddle\" /><img class=\"img-ks-lazyload\" src=\"https://img.alicdn.com/imgextra/i4/92688455/O1CN01OaIg0t2CKRDOy8plg-92688455.jpg\" align=\"absmiddle\" /><img class=\"img-ks-lazyload\" src=\"https://img.alicdn.com/imgextra/i3/92688455/O1CN01V0fV3a2CKRDOb3yzL-92688455.jpg\" align=\"absmiddle\" /><img class=\"img-ks-lazyload\" src=\"https://img.alicdn.com/imgextra/i4/92688455/O1CN01jp35dn2CKRDOb2i28-92688455.jpg\" align=\"absmiddle\" /><img class=\"img-ks-lazyload\" src=\"https://img.alicdn.com/imgextra/i4/92688455/O1CN01vWE1Zo2CKRDHQQMHw-92688455.jpg\" align=\"absmiddle\" /><img class=\"img-ks-lazyload\" src=\"https://img.alicdn.com/imgextra/i3/92688455/O1CN01ClRqbl2CKRDNyfb1O-92688455.jpg\" align=\"absmiddle\" data-spm-anchor-id=\"a220o.1000855.0.i3.7cfd62ca98fuRj\" /></p>', 2, 'giay-li-ning-arhn207', 'https://detail.tmall.com/item.htm?id=569619719750', 34, 6, 399, 249, 63, 871500, 'a:11:{i:0;s:4:\"41.5\";i:1;s:4:\"43.5\";i:2;s:2:\"42\";i:3;s:2:\"46\";i:4;s:2:\"41\";i:5;s:2:\"44\";i:6;s:4:\"39.5\";i:7;s:2:\"39\";i:8;s:2:\"45\";i:9;s:2:\"43\";i:10;s:2:\"40\";}', 'a:4:{i:0;s:71:\"assets/images/products_color/TB1qmnbisuYBuNkSmRyL6UA3pXa_500x500q90.jpg\";i:1;s:82:\"assets/images/products_color/TB1cjX6CTlYBeNjSszcgsDwhFXa_105337.jpg_500x500q90.jpg\";i:2;s:71:\"assets/images/products_color/TB1I6K.fDCWBKNjSZFtL6SC3FXa_500x500q90.jpg\";i:3;s:71:\"assets/images/products_color/TB1llIJqL5TBuNjSspmL6SDRVXa_500x500q90.jpg\";}', 1, 1, 2, 1547191823);

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
(1, 'dongnv', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Văn Đông', '0966624292', 'Do Hạ, Tiền Phong, Mê Linh, Hà Nội', '', 35, 'nguyenvandong242@gmail.com', 1, 1537365374);

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
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `dong_bill_product`
--
ALTER TABLE `dong_bill_product`
  MODIFY `bill_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `dong_category`
--
ALTER TABLE `dong_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `dong_media`
--
ALTER TABLE `dong_media`
  MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

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
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `dong_user`
--
ALTER TABLE `dong_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

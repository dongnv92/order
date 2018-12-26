-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 25, 2018 lúc 11:00 AM
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
(13, 'Giày vải', 'giay-vai', 'shop', 1, 0, 1545730967);

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
(26, 'images_product', 'local', 'TB24bqgqNGYBuNjy0FnXXX5lpXa_!!738517069.jpg_500x500q90.jpg', 'assets/images/products/TB24bqgqNGYBuNjy0FnXXX5lpXa_!!738517069.jpg_500x500q90.jpg', 1, 3, 1545646935),
(27, 'images_product', 'remote', 'O1CN01d5hZD1225eGVDSt80_!!738517069.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/https://img.alicdn.com/imgextra/i4/738517069/O1CN01d5hZD1225eGVDSt80_!!738517069.jpg_500x500q90.jpg', 1, 3, 1545646935),
(28, 'images_product', 'local', 'O1CN01d5hZD1225eGVDSt80_!!738517069.jpg_500x500q90.jpg', 'assets/images/products/O1CN01d5hZD1225eGVDSt80_!!738517069.jpg_500x500q90.jpg', 1, 3, 1545646935),
(29, 'images_product', 'remote', 'TB2IsxZqNSYBuNjSspjXXX73VXa_!!738517069.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/https://img.alicdn.com/imgextra/i4/738517069/TB2IsxZqNSYBuNjSspjXXX73VXa_!!738517069.jpg_500x500q90.jpg', 1, 3, 1545646935),
(30, 'images_product', 'local', 'TB2IsxZqNSYBuNjSspjXXX73VXa_!!738517069.jpg_500x500q90.jpg', 'assets/images/products/TB2IsxZqNSYBuNjSspjXXX73VXa_!!738517069.jpg_500x500q90.jpg', 1, 3, 1545646935),
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
(50, 'images_product', 'local', 'TB2IY8HwYZnBKNjSZFrXXaRLFXa_!!2401152598.jpg_500x500q90.jpg', 'assets/images/products/TB2IY8HwYZnBKNjSZFrXXaRLFXa_!!2401152598.jpg_500x500q90.jpg', 1, 5, 1545731465);

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
(50, 'category_product', 5, 13, 1, 1545731465);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dong_product`
--

CREATE TABLE `dong_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `product_content` text COLLATE utf8_unicode_ci,
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

INSERT INTO `dong_product` (`product_id`, `product_name`, `product_content`, `product_url`, `product_suorce`, `product_brand`, `product_quality`, `product_price_default`, `product_price_promotion`, `product_sale`, `product_price_vn`, `product_size`, `product_color`, `product_gender`, `product_user`, `product_status`, `product_time`) VALUES
(1, 'Giày nam Starling giày mùa đông nam phiên bản Hàn Quốc', '<ul id=\"J_AttrUL\">\r\n<li id=\"J_attrBrandName\" title=\"&nbsp;Starling\"><span data-spm-anchor-id=\"a220o.1000855.0.i0.43743d313srXjl\">Thương hiệu: Starling</span></li>\r\n<li title=\"&nbsp;Tho&aacute;ng kh&iacute;\">Chức năng: Thở</li>\r\n<li title=\"&nbsp;Ren\">C&aacute;ch k&iacute;n: buộc</li>\r\n<li title=\"&nbsp;39 40 41 42 43 44\">K&iacute;ch thước: 39 40 41 42 43 44</li>\r\n<li title=\"&nbsp;M&agrave;u đặc\">Hoa văn: m&agrave;u đặc</li>\r\n<li title=\"&nbsp;Giải tr&iacute;\">Phong c&aacute;ch: Giải tr&iacute;</li>\r\n<li title=\"&nbsp;Giải tr&iacute; h&agrave;ng ng&agrave;y\">Ph&acirc;n khu theo phong c&aacute;ch: giải tr&iacute; h&agrave;ng ng&agrave;y</li>\r\n<li title=\"&nbsp;Chỉ may\">C&aacute;c yếu tố phổ biến: chỉ may</li>\r\n<li title=\"&nbsp;G&oacute;t thấp (1-3cm)\">Chiều cao g&oacute;t: g&oacute;t thấp (1-3cm)</li>\r\n<li title=\"&nbsp;[Trắng] [Trắng x&aacute;m] [Đen] [Đen v&agrave; Trắng] [Đỏ]\">Ph&acirc;n loại m&agrave;u sắc: 【Trắng】 【Trắng x&aacute;m】 【Đen】 【Đen v&agrave; Trắng】 【Đỏ】</li>\r\n<li title=\"&nbsp;ODXB18531\">Mục số: ODXB18531</li>\r\n<li title=\"&nbsp;Gi&agrave;y thể thao\" data-spm-anchor-id=\"a220o.1000855.0.i1.43743d313srXjl\">T&ecirc;n gi&agrave;y thấp: gi&agrave;y</li>\r\n</ul>', 'giay-nam-starling-giay-mua-dong-nam-phien-ban-han-quoc', 'https://detail.tmall.com/item.htm?id=576705289049', 12, 6, 309, 119, 39, 416500, 'a:6:{i:0;s:2:\"39\";i:1;s:2:\"40\";i:2;s:2:\"41\";i:3;s:2:\"42\";i:4;s:2:\"43\";i:5;s:2:\"44\";}', 'a:5:{i:0;s:81:\"assets/images/products_color/O1CN011yXo95mV5oo62Rw_!!469256589.jpg_500x500q90.jpg\";i:1;s:81:\"assets/images/products_color/O1CN011yXo9DnPaa0PcXD_!!469256589.jpg_500x500q90.jpg\";i:2;s:81:\"assets/images/products_color/O1CN011yXo9DnSsQWZcRG_!!469256589.jpg_500x500q90.jpg\";i:3;s:81:\"assets/images/products_color/O1CN011yXo9AZeBRnVR6Z_!!469256589.jpg_500x500q90.jpg\";i:4;s:83:\"assets/images/products_color/O1CN01tT3EO41yXo9sJpo7I_!!469256589.jpg_500x500q90.jpg\";}', 1, 1, 1, 1545030538),
(2, 'Giày thể thao SHANGCATS ', '', 'giay-the-thao-shangcats-', 'https://detail.tmall.com/item.htm?id=560594695949', 0, 6, 258, 88, 35, 308000, 'a:9:{i:0;s:2:\"36\";i:1;s:2:\"37\";i:2;s:2:\"38\";i:3;s:2:\"39\";i:4;s:2:\"40\";i:5;s:2:\"41\";i:6;s:2:\"42\";i:7;s:2:\"43\";i:8;s:2:\"44\";}', 'a:48:{i:0;s:88:\"assets/images/products_color/TB2_K1GbjTpK1RjSZKPXXa3UpXa_!!2211760136.jpg_500x500q90.jpg\";i:1;s:88:\"assets/images/products_color/TB2NZSVbfv85uJjSZFxXXal4XXa_!!2211760136.jpg_500x500q90.jpg\";i:2;s:88:\"assets/images/products_color/TB2BPPmq3oQMeJjy0FoXXcShVXa_!!2211760136.jpg_500x500q90.jpg\";i:3;s:82:\"assets/images/products_color/O1CN011CsKKOKq47XM3Ju_!!2211760136.jpg_500x500q90.jpg\";i:4;s:88:\"assets/images/products_color/TB2amnwdOLaK1RjSZFxXXamPFXa_!!2211760136.jpg_500x500q90.jpg\";i:5;s:88:\"assets/images/products_color/TB2IvaZdNTpK1RjSZFMXXbG_VXa_!!2211760136.jpg_500x500q90.jpg\";i:6;s:71:\"assets/images/products_color/TB1pl14jKOSBuNjy0FdL6TDnVXa_500x500q90.jpg\";i:7;s:71:\"assets/images/products_color/TB1XQWIjQ9WBuNjSspeL6Sz5VXa_500x500q90.jpg\";i:8;s:88:\"assets/images/products_color/TB21HQmaNnaK1RjSZFBXXcW7VXa_!!2211760136.jpg_500x500q90.jpg\";i:9;s:88:\"assets/images/products_color/TB2CZj8aHPpK1RjSZFFXXa5PpXa_!!2211760136.jpg_500x500q90.jpg\";i:10;s:89:\"assets/images/products_color/TB2gRf7aHPpK1RjSZFFXXa5PpXa_!!2211760136.jpeg_500x500q90.jpg\";i:11;s:89:\"assets/images/products_color/TB2Bw_6aMHqK1RjSZFEXXcGMXXa_!!2211760136.jpeg_500x500q90.jpg\";i:12;s:82:\"assets/images/products_color/O1CN011CsKKMlumGpyXZg_!!2211760136.jpg_500x500q90.jpg\";i:13;s:82:\"assets/images/products_color/O1CN011CsKKOuWGnfpt2i_!!2211760136.jpg_500x500q90.jpg\";i:14;s:71:\"assets/images/products_color/TB1h2h.eqmWBuNkHFJHL6SatVXa_500x500q90.jpg\";i:15;s:71:\"assets/images/products_color/TB1TRSbeyOYBuNjSsD4L6TSkFXa_500x500q90.jpg\";i:16;s:71:\"assets/images/products_color/TB1TJvDmH1YBuNjSszhL6UUsFXa_500x500q90.jpg\";i:17;s:88:\"assets/images/products_color/TB2rqPVaNTpK1RjSZFGXXcHqFXa_!!2211760136.jpg_500x500q90.jpg\";i:18;s:88:\"assets/images/products_color/TB2pSDVaFzqK1RjSZFvXXcB7VXa_!!2211760136.jpg_500x500q90.jpg\";i:19;s:88:\"assets/images/products_color/TB2fdzVaQvoK1RjSZFNXXcxMVXa_!!2211760136.jpg_500x500q90.jpg\";i:20;s:88:\"assets/images/products_color/TB2ZNkPcHSYBuNjSspfXXcZCpXa_!!2211760136.jpg_500x500q90.jpg\";i:21;s:88:\"assets/images/products_color/TB2d7Kbc9BYBeNjy0FeXXbnmFXa_!!2211760136.jpg_500x500q90.jpg\";i:22;s:88:\"assets/images/products_color/TB2U87JcKuSBuNjSsziXXbq8pXa_!!2211760136.jpg_500x500q90.jpg\";i:23;s:88:\"assets/images/products_color/TB2uXv6aHvpK1RjSZFqXXcXUVXa_!!2211760136.jpg_500x500q90.jpg\";i:24;s:88:\"assets/images/products_color/TB29h23aSzqK1RjSZPxXXc4tVXa_!!2211760136.jpg_500x500q90.jpg\";i:25;s:88:\"assets/images/products_color/TB235ElaOLaK1RjSZFxXXamPFXa_!!2211760136.jpg_500x500q90.jpg\";i:26;s:71:\"assets/images/products_color/TB16m1CiFmWBuNjSspdL6TugXXa_500x500q90.jpg\";i:27;s:71:\"assets/images/products_color/TB1DL_wiNWYBuNjy1zkL6RGGpXa_500x500q90.jpg\";i:28;s:82:\"assets/images/products_color/O1CN011CsKKUsejeV7QDC_!!2211760136.jpg_500x500q90.jpg\";i:29;s:82:\"assets/images/products_color/O1CN011CsKKXaiq7zCPdc_!!2211760136.jpg_500x500q90.jpg\";i:30;s:82:\"assets/images/products_color/O1CN011CsKKW56dv6wWHp_!!2211760136.jpg_500x500q90.jpg\";i:31;s:88:\"assets/images/products_color/TB2cUiSdMHqK1RjSZJnXXbNLpXa_!!2211760136.jpg_500x500q90.jpg\";i:32;s:88:\"assets/images/products_color/TB2GpGWdFzqK1RjSZSgXXcpAVXa_!!2211760136.jpg_500x500q90.jpg\";i:33;s:88:\"assets/images/products_color/TB2hiaTdSrqK1RjSZK9XXXyypXa_!!2211760136.jpg_500x500q90.jpg\";i:34;s:88:\"assets/images/products_color/TB2cxqUdNTpK1RjSZFKXXa2wXXa_!!2211760136.jpg_500x500q90.jpg\";i:35;s:88:\"assets/images/products_color/TB2aV5VdNTpK1RjSZFGXXcHqFXa_!!2211760136.jpg_500x500q90.jpg\";i:36;s:88:\"assets/images/products_color/TB2wbuRdSzqK1RjSZPcXXbTepXa_!!2211760136.jpg_500x500q90.jpg\";i:37;s:88:\"assets/images/products_color/TB2kv3xcFGWBuNjy0FbXXb4sXXa_!!2211760136.jpg_500x500q90.jpg\";i:38;s:88:\"assets/images/products_color/TB2aUoycH1YBuNjSszeXXablFXa_!!2211760136.jpg_500x500q90.jpg\";i:39;s:88:\"assets/images/products_color/TB2m7IPcHSYBuNjSspfXXcZCpXa_!!2211760136.jpg_500x500q90.jpg\";i:40;s:88:\"assets/images/products_color/TB26ckvcHuWBuNjSszgXXb8jVXa_!!2211760136.jpg_500x500q90.jpg\";i:41;s:88:\"assets/images/products_color/TB2AePdghPI8KJjSspfXXcCFXXa_!!2211760136.jpg_500x500q90.jpg\";i:42;s:88:\"assets/images/products_color/TB2PhyWgcjI8KJjSsppXXXbyVXa_!!2211760136.jpg_500x500q90.jpg\";i:43;s:88:\"assets/images/products_color/TB2hXQbbkfb_uJkSne1XXbE4XXa_!!2211760136.jpg_500x500q90.jpg\";i:44;s:82:\"assets/images/products_color/O1CN011CsKKolBmHXf9Ru_!!2211760136.jpg_500x500q90.jpg\";i:45;s:82:\"assets/images/products_color/O1CN011CsKKcUzH40vEcx_!!2211760136.jpg_500x500q90.jpg\";i:46;s:82:\"assets/images/products_color/O1CN011CsKKkERYs2oQyg_!!2211760136.jpg_500x500q90.jpg\";i:47;s:82:\"assets/images/products_color/O1CN011CsKKcUxGJX4XAY_!!2211760136.jpg_500x500q90.jpg\";}', 1, 1, 1, 1545640740),
(3, 'Giày vải Jeansie', '<ul id=\"J_AttrUL\">\r\n<li id=\"J_attrBrandName\" title=\"&nbsp;Quần jean / Jingxi\">Thương hiệu: Jeansie / Jing Xi</li>\r\n<li title=\"&nbsp;Chống m&agrave;i m&ograve;n\">Chức năng: chống m&agrave;i m&ograve;n</li>\r\n<li title=\"&nbsp;Ren\">C&aacute;ch k&iacute;n: buộc</li>\r\n<li title=\"&nbsp;37 38 39 40 41 42 43 44 45\">K&iacute;ch thước: 37 38 39 40 41 42 43 44 45</li>\r\n<li title=\"&nbsp;M&agrave;u đặc\">Hoa văn: m&agrave;u đặc</li>\r\n<li title=\"&nbsp;Phi&ecirc;n bản tiếng h&agrave;n\">Phong c&aacute;ch: phi&ecirc;n bản tiếng h&agrave;n</li>\r\n<li title=\"&nbsp;Chỉ may\">C&aacute;c yếu tố phổ biến: chỉ may</li>\r\n<li title=\"&nbsp;Đen qu&acirc;n xanh xanh đỏ x&aacute;m c&aacute;t\" data-spm-anchor-id=\"a220o.1000855.0.i2.6af3de75WZDsef\">Ph&acirc;n loại m&agrave;u: Black Army Green Blue Red Grey Sand</li>\r\n</ul>', 'giay-vai-jeansie', 'https://detail.tmall.com/item.htm?id=19087572568', 0, 6, 230, 128, 56, 448000, 'a:9:{i:0;s:2:\"37\";i:1;s:2:\"38\";i:2;s:2:\"39\";i:3;s:2:\"40\";i:4;s:2:\"41\";i:5;s:2:\"42\";i:6;s:2:\"43\";i:7;s:2:\"44\";i:8;s:2:\"45\";}', 'a:7:{i:0;s:87:\"assets/images/products_color/TB2OdJQapXXXXbRXXXXXXXXXXXX_!!738517069.jpg_500x500q90.jpg\";i:1;s:87:\"assets/images/products_color/TB2UemHg9FjpuFjSspbXXXagVXa_!!738517069.jpg_500x500q90.jpg\";i:2;s:87:\"assets/images/products_color/TB2eflPapXXXXcvXXXXXXXXXXXX_!!738517069.jpg_500x500q90.jpg\";i:3;s:87:\"assets/images/products_color/TB2nDkxXVXXXXaXXXXXXXXXXXXX_!!738517069.jpg_500x500q90.jpg\";i:4;s:87:\"assets/images/products_color/TB25dUOXWi5V1BjSspiXXXGBFXa_!!738517069.jpg_500x500q90.jpg\";i:5;s:87:\"assets/images/products_color/TB2H2RNapXXXXc8XXXXXXXXXXXX_!!738517069.jpg_500x500q90.jpg\";i:6;s:87:\"assets/images/products_color/TB2oaRRapXXXXauXXXXXXXXXXXX_!!738517069.jpg_500x500q90.jpg\";}', 1, 1, 1, 1545646935),
(4, 'Giày thể thao HILLGLOBAL', '<div id=\"J_BrandAttr\" class=\"tm-clear tb-hidden tm_brandAttr\">\r\n<div class=\"name\">T&ecirc;n thương hiệu:&nbsp;<strong class=\"J_EbrandLogo\" data-spm-anchor-id=\"a220o.1000855.0.i2.3ed5d3c8BVDasq\">HILLGLOBAL / Xi Ge</strong></div>\r\n</div>\r\n<p class=\"attr-list-hd tm-clear\"><em>Th&ocirc;ng số sản phẩm:</em></p>\r\n<ul id=\"J_AttrUL\" data-spm-anchor-id=\"a220o.1000855.0.i3.3ed5d3c8BVDasq\">\r\n<li title=\"&nbsp;H&egrave; 2018\">M&ugrave;a ni&ecirc;m yết: M&ugrave;a h&egrave; 2018</li>\r\n<li title=\"&nbsp;Thương mại điện tử thuần t&uacute;y (chỉ c&oacute; sẵn trực tuyến)\">Loại k&ecirc;nh b&aacute;n h&agrave;ng: thương mại điện tử thuần t&uacute;y (chỉ b&aacute;n h&agrave;ng trực tuyến)</li>\r\n<li title=\"&nbsp;Đầu tr&ograve;n\">Kiểu ng&oacute;n ch&acirc;n: đầu tr&ograve;n</li>\r\n<li title=\"&nbsp;Ren\">C&aacute;ch k&iacute;n: buộc</li>\r\n<li title=\"&nbsp;Tpu\">Chất liệu duy nhất: tpu</li>\r\n<li title=\"&nbsp;Lưới\">Vật liệu tr&ecirc;n: lưới</li>\r\n<li title=\"&nbsp;B&ocirc;ng\">Chất liệu l&oacute;t tr&ecirc;n: cotton</li>\r\n<li title=\"&nbsp;Gi&agrave;y d&iacute;nh\">Quy tr&igrave;nh l&agrave;m gi&agrave;y: gi&agrave;y d&iacute;nh</li>\r\n<li title=\"&nbsp;G&oacute;t ch&acirc;n phẳng\">Với kiểu d&aacute;ng dưới: phẳng với</li>\r\n<li title=\"&nbsp;M&agrave;u đặc\">Hoa văn: m&agrave;u đặc</li>\r\n<li title=\"&nbsp;M&igrave; thường\">C&aacute;c yếu tố phổ biến: m&igrave; thường</li>\r\n<li title=\"&nbsp;Giải tr&iacute;\">Phong c&aacute;ch: Giải tr&iacute;</li>\r\n<li title=\"&nbsp;Thể thao v&agrave; giải tr&iacute;\">Ph&acirc;n khu theo phong c&aacute;ch: thể thao v&agrave; giải tr&iacute;</li>\r\n<li title=\"&nbsp;Thể thao v&agrave; giải tr&iacute;\">Nh&acirc;n dịp: Thể thao v&agrave; giải tr&iacute;</li>\r\n<li title=\"&nbsp;M&ugrave;a đ&ocirc;ng\">M&ugrave;a: m&ugrave;a đ&ocirc;ng</li>\r\n<li title=\"&nbsp;Gi&agrave;y ngo&agrave;i trời\">Phong c&aacute;ch: gi&agrave;y thường ngo&agrave;i trời</li>\r\n<li title=\"&nbsp;Giữ ấm\">Chức năng: Giữ ấm</li>\r\n<li title=\"&nbsp;Vải\">Chất liệu đế: vải</li>\r\n<li title=\"&nbsp;G&oacute;t thấp (1-3cm)\">Chiều cao g&oacute;t: g&oacute;t thấp (1-3cm)</li>\r\n<li title=\"&nbsp;Thanh ni&ecirc;n (18-40 tuổi)\">&Aacute;p dụng cho: Thanh ni&ecirc;n (18-40 tuổi)</li>\r\n<li title=\"&nbsp;Gi&agrave;y thể thao ngo&agrave;i trời\">T&ecirc;n gi&agrave;y thấp: gi&agrave;y thể thao ngo&agrave;i trời</li>\r\n<li title=\"&nbsp;36 37 38 39 40 41 42 43 44 45\">K&iacute;ch thước: 36 37 38 39 40 41 42 43 44 45</li>\r\n<li id=\"J_attrBrandName\" title=\"&nbsp;HILLGLOBAL / Xi Ge\">Thương hiệu: HILLGLOBAL / Xi Ge</li>\r\n<li title=\"&nbsp;X-7057\">Mục số: X-7057</li>\r\n<li title=\"&nbsp;7057 (đen v&agrave; trắng) 7057 (tất cả đen) 7057-1 cotton (đen v&agrave; trắng) 7057-1 cotton (tất cả đen) 7057-1 cotton (x&aacute;m) 9005 (v&agrave;ng đen) 9005 (đen v&agrave; trắng) 9005 (đen v&agrave; đỏ) 9005 (đen v&agrave; xanh) 9005 -1 cotton (v&agrave;ng đen) 9005-1 cotton (đen v&agrave; trắng) 9005-1 cotton (đen v&agrave; đỏ) 9006 (v&agrave;ng đen) 9006 (tất cả đen) 9006-1 cotton (v&agrave;ng đen) J056 (đen) J056 (xanh) J056 (khaki) J056-1 cotton (đen) J056-1 cotton (xanh dương) J056-1 cotton (khaki) 979 (đen v&agrave; trắng) 979 (đen v&agrave; đỏ) 979 (đen v&agrave; xanh) 980 cotton (đen v&agrave; trắng) 980 cotton (đen v&agrave; đỏ) 980 cotton (đen v&agrave; đỏ) Xanh đen) 981 (v&agrave;ng đen) 981 (đen v&agrave; trắng) 981 (x&aacute;m) 982 cotton (v&agrave;ng đen) 982 cotton (đen v&agrave; trắng) 982 cotton (x&aacute;m) J063 (v&agrave;ng đen) J063 (tất cả đen) 1817 (đen v&agrave; trắng) 1817 (v&agrave;ng đen) Đen) 7056 (đen) 7065 (đen) 7065 (xanh) 7065 (khaki) 7057 (x&aacute;m) 9006 (x&aacute;m) 7056 (x&aacute;m) 7057 (đỏ) J063 (đỏ) 7057 (trắng) 7056 (trắng)\" data-spm-anchor-id=\"a220o.1000855.0.i4.3ed5d3c8BVDasq\"><span data-spm-anchor-id=\"a220o.1000855.0.i5.3ed5d3c8BVDasq\">Ph&acirc;n loại m&agrave;u: 7057 (Đen v&agrave; Trắng) 7057 (tất&nbsp;</span></li>\r\n</ul>', 'giay-the-thao-hillglobal', 'https://detail.tmall.com/item.htm?id=572724078309', 0, 6, 258, 59, 23, 206500, 'a:10:{i:0;s:2:\"36\";i:1;s:2:\"37\";i:2;s:2:\"38\";i:3;s:2:\"39\";i:4;s:2:\"40\";i:5;s:2:\"41\";i:6;s:2:\"42\";i:7;s:2:\"43\";i:8;s:2:\"44\";i:9;s:2:\"45\";}', 'a:49:{i:0;s:88:\"assets/images/products_color/TB2P3aGBntYBeNjy1XdXXXXyVXa_!!2081299183.jpg_500x500q90.jpg\";i:1;s:88:\"assets/images/products_color/TB2e6CHsNuTBuNkHFNRXXc9qpXa_!!2081299183.jpg_500x500q90.jpg\";i:2;s:82:\"assets/images/products_color/O1CN012HhrXZsmvPRW2tV_!!2081299183.jpg_500x500q90.jpg\";i:3;s:82:\"assets/images/products_color/O1CN012HhrXZYiedXz45k_!!2081299183.jpg_500x500q90.jpg\";i:4;s:82:\"assets/images/products_color/O1CN012HhrXbPXToHeHjM_!!2081299183.jpg_500x500q90.jpg\";i:5;s:88:\"assets/images/products_color/TB2t.2QsMKTBuNkSne1XXaJoXXa_!!2081299183.jpg_500x500q90.jpg\";i:6;s:88:\"assets/images/products_color/TB2R_QlAYGYBuNjy0FoXXciBFXa_!!2081299183.jpg_500x500q90.jpg\";i:7;s:88:\"assets/images/products_color/TB2m6UwA1SSBuNjy0FlXXbBpVXa_!!2081299183.jpg_500x500q90.jpg\";i:8;s:88:\"assets/images/products_color/TB2PiF7cPfguuRjy1zeXXb0KFXa_!!2081299183.jpg_500x500q90.jpg\";i:9;s:82:\"assets/images/products_color/O1CN012HhrXbPYDcARypG_!!2081299183.jpg_500x500q90.jpg\";i:10;s:82:\"assets/images/products_color/O1CN012HhrXbpIPgCA21h_!!2081299183.jpg_500x500q90.jpg\";i:11;s:82:\"assets/images/products_color/O1CN012HhrXaQdQx2VAL5_!!2081299183.jpg_500x500q90.jpg\";i:12;s:88:\"assets/images/products_color/TB2SJ06BmtYBeNjSspkXXbU8VXa_!!2081299183.jpg_500x500q90.jpg\";i:13;s:88:\"assets/images/products_color/TB2jZsQA1uSBuNjSsziXXbq8pXa_!!2081299183.jpg_500x500q90.jpg\";i:14;s:82:\"assets/images/products_color/O1CN012HhrXZ43GZ20yGe_!!2081299183.jpg_500x500q90.jpg\";i:15;s:82:\"assets/images/products_color/O1CN012HhrXY4fc0AnLUh_!!2081299183.jpg_500x500q90.jpg\";i:16;s:82:\"assets/images/products_color/O1CN012HhrXZ3rFJneVd2_!!2081299183.jpg_500x500q90.jpg\";i:17;s:82:\"assets/images/products_color/O1CN012HhrXakfPRf95Mk_!!2081299183.jpg_500x500q90.jpg\";i:18;s:82:\"assets/images/products_color/O1CN012HhrXTruyjtKP9C_!!2081299183.jpg_500x500q90.jpg\";i:19;s:82:\"assets/images/products_color/O1CN012HhrXTrvaABcaav_!!2081299183.jpg_500x500q90.jpg\";i:20;s:82:\"assets/images/products_color/O1CN012HhrXak7yrSDxAT_!!2081299183.jpg_500x500q90.jpg\";i:21;s:82:\"assets/images/products_color/O1CN012HhrXNWOjO48R2f_!!2081299183.jpg_500x500q90.jpg\";i:22;s:82:\"assets/images/products_color/O1CN012HhrXNKpKKLwLnS_!!2081299183.jpg_500x500q90.jpg\";i:23;s:82:\"assets/images/products_color/O1CN012HhrXMvhbd8ubMu_!!2081299183.jpg_500x500q90.jpg\";i:24;s:82:\"assets/images/products_color/O1CN012HhrXakrlMDRzGz_!!2081299183.jpg_500x500q90.jpg\";i:25;s:82:\"assets/images/products_color/O1CN012HhrXTrwn4Du6ig_!!2081299183.jpg_500x500q90.jpg\";i:26;s:82:\"assets/images/products_color/O1CN012HhrXbonfHtj3hC_!!2081299183.jpg_500x500q90.jpg\";i:27;s:82:\"assets/images/products_color/O1CN012HhrXY4liceF302_!!2081299183.jpg_500x500q90.jpg\";i:28;s:82:\"assets/images/products_color/O1CN012HhrXaPNf64YxaW_!!2081299183.jpg_500x500q90.jpg\";i:29;s:82:\"assets/images/products_color/O1CN012HhrXYdcRUh43Ds_!!2081299183.jpg_500x500q90.jpg\";i:30;s:82:\"assets/images/products_color/O1CN012HhrXY4syJeKRcw_!!2081299183.jpg_500x500q90.jpg\";i:31;s:82:\"assets/images/products_color/O1CN012HhrXYdmmRucjeb_!!2081299183.jpg_500x500q90.jpg\";i:32;s:82:\"assets/images/products_color/O1CN012HhrXbPvmgEVD8B_!!2081299183.jpg_500x500q90.jpg\";i:33;s:82:\"assets/images/products_color/O1CN012HhrY1unrYUyMip_!!2081299183.jpg_500x500q90.jpg\";i:34;s:84:\"assets/images/products_color/O1CN01P4SDBp2HhrXu5ZYH1_!!2081299183.jpg_500x500q90.jpg\";i:35;s:88:\"assets/images/products_color/TB2h85BjOMnBKNjSZFoXXbOSFXa_!!2081299183.jpg_500x500q90.jpg\";i:36;s:88:\"assets/images/products_color/TB2W0HgsIuYBuNkSmRyXXcA3pXa_!!2081299183.jpg_500x500q90.jpg\";i:37;s:88:\"assets/images/products_color/TB2ag7OA25TBuNjSspmXXaDRVXa_!!2081299183.jpg_500x500q90.jpg\";i:38;s:88:\"assets/images/products_color/TB2xAwoA1OSBuNjy0FdXXbDnVXa_!!2081299183.jpg_500x500q90.jpg\";i:39;s:84:\"assets/images/products_color/O1CN012OnpM12HhrYIMW25c_!!2081299183.jpg_500x500q90.jpg\";i:40;s:84:\"assets/images/products_color/O1CN01aKsnIW2HhrYJeFYUS_!!2081299183.jpg_500x500q90.jpg\";i:41;s:84:\"assets/images/products_color/O1CN01HHRFJp2HhrYI6FeEZ_!!2081299183.jpg_500x500q90.jpg\";i:42;s:88:\"assets/images/products_color/TB2czsGA41YBuNjy1zcXXbNcXXa_!!2081299183.jpg_500x500q90.jpg\";i:43;s:88:\"assets/images/products_color/TB26XejBamWBuNjy1XaXXXCbXXa_!!2081299183.jpg_500x500q90.jpg\";i:44;s:88:\"assets/images/products_color/TB2jsKIsNuTBuNkHFNRXXc9qpXa_!!2081299183.jpg_500x500q90.jpg\";i:45;s:88:\"assets/images/products_color/TB2072BsOOYBuNjSsD4XXbSkFXa_!!2081299183.jpg_500x500q90.jpg\";i:46;s:84:\"assets/images/products_color/O1CN01e3VSJC2HhrY0Hf531_!!2081299183.jpg_500x500q90.jpg\";i:47;s:88:\"assets/images/products_color/TB2Nd65A29TBuNjy0FcXXbeiFXa_!!2081299183.jpg_500x500q90.jpg\";i:48;s:88:\"assets/images/products_color/TB2bDrRsTXYBeNkHFrdXXciuVXa_!!2081299183.jpg_500x500q90.jpg\";}', 1, 1, 1, 1545703536),
(5, 'Giày vài Jiadi', '<div id=\"J_BrandAttr\" class=\"tm-clear tb-hidden tm_brandAttr\" data-spm-anchor-id=\"a220o.1000855.0.i0.656f25381c3Ss9\">\r\n<div class=\"name\">T&ecirc;n thương hiệu:&nbsp;<strong class=\"J_EbrandLogo\">Jiadi</strong></div>\r\n</div>\r\n<p class=\"attr-list-hd tm-clear\"><em>Th&ocirc;ng số sản phẩm:</em></p>\r\n<ul id=\"J_AttrUL\">\r\n<li id=\"J_attrBrandName\" title=\"&nbsp;Gia Chi\">Thương hiệu:</li>\r\n<li title=\"&nbsp;Giữ ấm\">Chức năng: Giữ ấm</li>\r\n<li title=\"&nbsp;Ren\">C&aacute;ch k&iacute;n: buộc</li>\r\n<li title=\"&nbsp;35 36 37 38 39 40 41 42 43 44\">K&iacute;ch thước: 35 36 37 38 39 40 41 42 43 44</li>\r\n<li title=\"&nbsp;Phối m&agrave;u\">Hoa văn: phối m&agrave;u</li>\r\n<li title=\"&nbsp;Phi&ecirc;n bản tiếng h&agrave;n\">Phong c&aacute;ch: phi&ecirc;n bản tiếng h&agrave;n</li>\r\n<li title=\"&nbsp;M&igrave; thường\">C&aacute;c yếu tố phổ biến: m&igrave; thường</li>\r\n<li title=\"&nbsp;1818-1 đen v&agrave; trắng (cộng nhung) 1818-1 đen (cộng nhung) 1818-1 trắng (cộng nhung) 1817-1 đen (cộng nhung) 1817-1 trắng (cộng nhung) 1817-1 đỏ (cộng nhung) 621- 1 đen (cộng nhung) 621-1 trắng (cộng nhung) 621-1 đỏ (cộng nhung) 1785-1 đen (cộng nhung) 1785-1 đỏ (cộng nhung) 1785-1 trắng (cộng nhung) 621-đen (cộng nhung) Gi&agrave;y đơn) 621-trắng (gi&agrave;y đơn) 621-đỏ (gi&agrave;y đơn) 1817-đen (gi&agrave;y đơn) 1817-trắng (gi&agrave;y đơn) 1817-đỏ (gi&agrave;y đơn) 1785-đen (gi&agrave;y đơn) 1785-trắng (đơn) Gi&agrave;y) 1785-đỏ (gi&agrave;y đơn) 1818-đen (gi&agrave;y đơn) 1818-đen v&agrave; trắng (gi&agrave;y đơn) 1818-trắng (gi&agrave;y đơn)\">Ph&acirc;n loại m&agrave;u: 1818-1 đen v&agrave; trắng (cộng nhung) 1818-1 đen (cộng nhung) 1818-1 trắng (cộng nhung) 1817-1 đen (cộng nhung) 1817-1 trắng (cộng nhung) 1817-1 đỏ (cộng nhung 621-1 đen (cộng nhung) 621-1 trắng (cộng nhung) 621-1 đỏ (cộng nhung) 1785-1 đen (cộng nhung) 1785-1 đỏ (cộng nhung) 1785-1 trắng (cộng nhung) 621 - Đen (gi&agrave;y đơn) 621-Trắng (gi&agrave;y đơn) 621-Đỏ (gi&agrave;y đơn) 1817-Đen (gi&agrave;y đơn) 1817-Trắng (gi&agrave;y đơn) 1817-Đỏ (gi&agrave;y đơn) 1785-Đen (gi&agrave;y đơn) 1785- Trắng (gi&agrave;y đơn) 1785-đỏ (gi&agrave;y đơn) 1818-đen (gi&agrave;y đơn) 1818-đen v&agrave; trắng (gi&agrave;y đơn) 1818-trắng (gi&agrave;y đơn)</li>\r\n<li title=\"&nbsp;621\" data-spm-anchor-id=\"a220o.1000855.0.i1.656f25381c3Ss9\">Mục số: 621</li>\r\n</ul>', 'giay-vai-jiadi', 'https://detail.tmall.com/item.htm?id=538933587416', 0, 6, 268, 78, 30, 273000, 'a:10:{i:0;s:2:\"35\";i:1;s:2:\"36\";i:2;s:2:\"37\";i:3;s:2:\"38\";i:4;s:2:\"39\";i:5;s:2:\"40\";i:6;s:2:\"41\";i:7;s:2:\"42\";i:8;s:2:\"43\";i:9;s:2:\"44\";}', 'a:24:{i:0;s:82:\"assets/images/products_color/O1CN011V3vRij0oU3Ompy_!!2401152598.jpg_500x500q90.jpg\";i:1;s:82:\"assets/images/products_color/O1CN011V3vRji1VZyxu6h_!!2401152598.jpg_500x500q90.jpg\";i:2;s:82:\"assets/images/products_color/O1CN011V3vRkjIvNxUXiM_!!2401152598.jpg_500x500q90.jpg\";i:3;s:82:\"assets/images/products_color/O1CN011V3vReUkKP9X0j6_!!2401152598.jpg_500x500q90.jpg\";i:4;s:82:\"assets/images/products_color/O1CN011V3vRkBcy5Xp78r_!!2401152598.jpg_500x500q90.jpg\";i:5;s:82:\"assets/images/products_color/O1CN011V3vRkj0vvFMn9v_!!2401152598.jpg_500x500q90.jpg\";i:6;s:82:\"assets/images/products_color/O1CN011V3vRlNntZegOI3_!!2401152598.jpg_500x500q90.jpg\";i:7;s:82:\"assets/images/products_color/O1CN011V3vRkkE3VdeEDd_!!2401152598.jpg_500x500q90.jpg\";i:8;s:82:\"assets/images/products_color/O1CN011V3vRjHp3IekZ5t_!!2401152598.jpg_500x500q90.jpg\";i:9;s:82:\"assets/images/products_color/O1CN011V3vRkUJmaAQFby_!!2401152598.jpg_500x500q90.jpg\";i:10;s:82:\"assets/images/products_color/O1CN011V3vRl2KYdVIo1G_!!2401152598.jpg_500x500q90.jpg\";i:11;s:82:\"assets/images/products_color/O1CN011V3vReVbV4H0hvS_!!2401152598.jpg_500x500q90.jpg\";i:12;s:88:\"assets/images/products_color/TB2p6WXnHsTMeJjSszhXXcGCFXa_!!2401152598.jpg_500x500q90.jpg\";i:13;s:88:\"assets/images/products_color/TB2LxCHam69F1JjSZPiXXXfCXXa_!!2401152598.jpg_500x500q90.jpg\";i:14;s:88:\"assets/images/products_color/TB27ifWjzihSKJjy0FeXXbJtpXa_!!2401152598.jpg_500x500q90.jpg\";i:15;s:88:\"assets/images/products_color/TB2qSj5uDqWBKNjSZFAXXanSpXa_!!2401152598.jpg_500x500q90.jpg\";i:16;s:88:\"assets/images/products_color/TB2HtgwuDqWBKNjSZFxXXcpLpXa_!!2401152598.jpg_500x500q90.jpg\";i:17;s:88:\"assets/images/products_color/TB2UXcfupkoBKNjSZFEXXbrEVXa_!!2401152598.jpg_500x500q90.jpg\";i:18;s:88:\"assets/images/products_color/TB26gdsupooBKNjSZPhXXc2CXXa_!!2401152598.jpg_500x500q90.jpg\";i:19;s:88:\"assets/images/products_color/TB2SIMfupkoBKNjSZFEXXbrEVXa_!!2401152598.jpg_500x500q90.jpg\";i:20;s:88:\"assets/images/products_color/TB2S17iuvImBKNjSZFlXXc43FXa_!!2401152598.jpg_500x500q90.jpg\";i:21;s:82:\"assets/images/products_color/O1CN011V3vRkmh3ocS1F1_!!2401152598.jpg_500x500q90.jpg\";i:22;s:82:\"assets/images/products_color/O1CN011V3vReUfYpJkvOM_!!2401152598.jpg_500x500q90.jpg\";i:23;s:82:\"assets/images/products_color/O1CN011V3vRl2TSY1gAAm_!!2401152598.jpg_500x500q90.jpg\";}', 1, 1, 1, 1545731465);

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
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `dong_media`
--
ALTER TABLE `dong_media`
  MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `dong_metadata`
--
ALTER TABLE `dong_metadata`
  MODIFY `metadata_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `dong_product`
--
ALTER TABLE `dong_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `dong_user`
--
ALTER TABLE `dong_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

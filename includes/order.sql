-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 24, 2018 lúc 11:23 AM
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
(12, 'Starling', 'starling', 'brand', 0, 0, 1544667679);

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
(30, 'images_product', 'local', 'TB2IsxZqNSYBuNjSspjXXX73VXa_!!738517069.jpg_500x500q90.jpg', 'assets/images/products/TB2IsxZqNSYBuNjSspjXXX73VXa_!!738517069.jpg_500x500q90.jpg', 1, 3, 1545646935);

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
(48, 'category_product', 3, 3, 1, 1545646935);

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
(3, 'Giày vải Jeansie', '<ul id=\"J_AttrUL\">\r\n<li id=\"J_attrBrandName\" title=\"&nbsp;Quần jean / Jingxi\">Thương hiệu: Jeansie / Jing Xi</li>\r\n<li title=\"&nbsp;Chống m&agrave;i m&ograve;n\">Chức năng: chống m&agrave;i m&ograve;n</li>\r\n<li title=\"&nbsp;Ren\">C&aacute;ch k&iacute;n: buộc</li>\r\n<li title=\"&nbsp;37 38 39 40 41 42 43 44 45\">K&iacute;ch thước: 37 38 39 40 41 42 43 44 45</li>\r\n<li title=\"&nbsp;M&agrave;u đặc\">Hoa văn: m&agrave;u đặc</li>\r\n<li title=\"&nbsp;Phi&ecirc;n bản tiếng h&agrave;n\">Phong c&aacute;ch: phi&ecirc;n bản tiếng h&agrave;n</li>\r\n<li title=\"&nbsp;Chỉ may\">C&aacute;c yếu tố phổ biến: chỉ may</li>\r\n<li title=\"&nbsp;Đen qu&acirc;n xanh xanh đỏ x&aacute;m c&aacute;t\" data-spm-anchor-id=\"a220o.1000855.0.i2.6af3de75WZDsef\">Ph&acirc;n loại m&agrave;u: Black Army Green Blue Red Grey Sand</li>\r\n</ul>', 'giay-vai-jeansie', 'https://detail.tmall.com/item.htm?id=19087572568', 0, 6, 230, 128, 56, 448000, 'a:9:{i:0;s:2:\"37\";i:1;s:2:\"38\";i:2;s:2:\"39\";i:3;s:2:\"40\";i:4;s:2:\"41\";i:5;s:2:\"42\";i:6;s:2:\"43\";i:7;s:2:\"44\";i:8;s:2:\"45\";}', 'a:7:{i:0;s:87:\"assets/images/products_color/TB2OdJQapXXXXbRXXXXXXXXXXXX_!!738517069.jpg_500x500q90.jpg\";i:1;s:87:\"assets/images/products_color/TB2UemHg9FjpuFjSspbXXXagVXa_!!738517069.jpg_500x500q90.jpg\";i:2;s:87:\"assets/images/products_color/TB2eflPapXXXXcvXXXXXXXXXXXX_!!738517069.jpg_500x500q90.jpg\";i:3;s:87:\"assets/images/products_color/TB2nDkxXVXXXXaXXXXXXXXXXXXX_!!738517069.jpg_500x500q90.jpg\";i:4;s:87:\"assets/images/products_color/TB25dUOXWi5V1BjSspiXXXGBFXa_!!738517069.jpg_500x500q90.jpg\";i:5;s:87:\"assets/images/products_color/TB2H2RNapXXXXc8XXXXXXXXXXXX_!!738517069.jpg_500x500q90.jpg\";i:6;s:87:\"assets/images/products_color/TB2oaRRapXXXXauXXXXXXXXXXXX_!!738517069.jpg_500x500q90.jpg\";}', 1, 1, 1, 1545646935);

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
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `dong_media`
--
ALTER TABLE `dong_media`
  MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `dong_metadata`
--
ALTER TABLE `dong_metadata`
  MODIFY `metadata_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT cho bảng `dong_product`
--
ALTER TABLE `dong_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `dong_user`
--
ALTER TABLE `dong_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

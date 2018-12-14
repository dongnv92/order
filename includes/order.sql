-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 14, 2018 lúc 11:33 AM
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
(1, 'images_product', 'remote', 'TB2Iltdb4YaK1RjSZFnXXa80pXa_!!917312802-0-item_pic.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i3/917312802/TB2Iltdb4YaK1RjSZFnXXa80pXa_!!917312802-0-item_pic.jpg_500x500q90.jpg', 1, 1, 1544200956),
(2, 'images_product', 'local', 'TB2Iltdb4YaK1RjSZFnXXa80pXa_!!917312802-0-item_pic.jpg_500x500q90.jpg', 'assets/images/products/TB2Iltdb4YaK1RjSZFnXXa80pXa_!!917312802-0-item_pic.jpg_500x500q90.jpg', 1, 1, 1544200956),
(3, 'images_product', 'remote', 'TB2xpVtXNjaK1RjSZKzXXXVwXXa_!!917312802.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i3/917312802/TB2xpVtXNjaK1RjSZKzXXXVwXXa_!!917312802.jpg_500x500q90.jpg', 1, 1, 1544200956),
(4, 'images_product', 'local', 'TB2xpVtXNjaK1RjSZKzXXXVwXXa_!!917312802.jpg_500x500q90.jpg', 'assets/images/products/TB2xpVtXNjaK1RjSZKzXXXVwXXa_!!917312802.jpg_500x500q90.jpg', 1, 1, 1544200956),
(5, 'images_product', 'remote', 'TB2TQRXXMHqK1RjSZFEXXcGMXXa_!!917312802-0-item_pic.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i1/917312802/TB2TQRXXMHqK1RjSZFEXXcGMXXa_!!917312802-0-item_pic.jpg_500x500q90.jpg', 1, 1, 1544200956),
(6, 'images_product', 'local', 'TB2TQRXXMHqK1RjSZFEXXcGMXXa_!!917312802-0-item_pic.jpg_500x500q90.jpg', 'assets/images/products/TB2TQRXXMHqK1RjSZFEXXcGMXXa_!!917312802-0-item_pic.jpg_500x500q90.jpg', 1, 1, 1544200956),
(7, 'images_product', 'remote', 'TB26j8aXRLoK1RjSZFuXXXn0XXa_!!917312802.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i1/917312802/TB26j8aXRLoK1RjSZFuXXXn0XXa_!!917312802.jpg_500x500q90.jpg', 1, 1, 1544200956),
(8, 'images_product', 'local', 'TB26j8aXRLoK1RjSZFuXXXn0XXa_!!917312802.jpg_500x500q90.jpg', 'assets/images/products/TB26j8aXRLoK1RjSZFuXXXn0XXa_!!917312802.jpg_500x500q90.jpg', 1, 1, 1544200956),
(9, 'images_product', 'remote', 'TB2h6pbXHvpK1RjSZFqXXcXUVXa_!!917312802.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i3/917312802/TB2h6pbXHvpK1RjSZFqXXcXUVXa_!!917312802.jpg_500x500q90.jpg', 1, 1, 1544200956),
(10, 'images_product', 'local', 'TB2h6pbXHvpK1RjSZFqXXcXUVXa_!!917312802.jpg_500x500q90.jpg', 'assets/images/products/TB2h6pbXHvpK1RjSZFqXXcXUVXa_!!917312802.jpg_500x500q90.jpg', 1, 1, 1544200956),
(11, 'images_product', 'remote', 'O1CN011mt59aIDCaLAX9Y_!!0-item_pic.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i4/1664555011/O1CN011mt59aIDCaLAX9Y_!!0-item_pic.jpg_500x500q90.jpg', 1, 2, 1544241213),
(12, 'images_product', 'local', 'O1CN011mt59aIDCaLAX9Y_!!0-item_pic.jpg_500x500q90.jpg', 'assets/images/products/O1CN011mt59aIDCaLAX9Y_!!0-item_pic.jpg_500x500q90.jpg', 1, 2, 1544241213),
(13, 'images_product', 'remote', 'TB2vHEVuA7mBKNjSZFyXXbydFXa_!!1664555011.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i1/1664555011/TB2vHEVuA7mBKNjSZFyXXbydFXa_!!1664555011.jpg_500x500q90.jpg', 1, 2, 1544241213),
(14, 'images_product', 'local', 'TB2vHEVuA7mBKNjSZFyXXbydFXa_!!1664555011.jpg_500x500q90.jpg', 'assets/images/products/TB2vHEVuA7mBKNjSZFyXXbydFXa_!!1664555011.jpg_500x500q90.jpg', 1, 2, 1544241213),
(15, 'images_product', 'remote', 'TB2eDNYuCYTBKNjSZKbXXXJ8pXa_!!1664555011.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i1/1664555011/TB2eDNYuCYTBKNjSZKbXXXJ8pXa_!!1664555011.jpg_500x500q90.jpg', 1, 2, 1544241213),
(16, 'images_product', 'local', 'TB2eDNYuCYTBKNjSZKbXXXJ8pXa_!!1664555011.jpg_500x500q90.jpg', 'assets/images/products/TB2eDNYuCYTBKNjSZKbXXXJ8pXa_!!1664555011.jpg_500x500q90.jpg', 1, 2, 1544241213),
(17, 'images_product', 'remote', 'TB2_JuWX9zqK1RjSZFjXXblCFXa_!!1664555011.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i1/1664555011/TB2_JuWX9zqK1RjSZFjXXblCFXa_!!1664555011.jpg_500x500q90.jpg', 1, 2, 1544241213),
(18, 'images_product', 'local', 'TB2_JuWX9zqK1RjSZFjXXblCFXa_!!1664555011.jpg_500x500q90.jpg', 'assets/images/products/TB2_JuWX9zqK1RjSZFjXXblCFXa_!!1664555011.jpg_500x500q90.jpg', 1, 2, 1544241213),
(19, 'images_product', 'remote', 'TB2Z_aWXVzqK1RjSZFCXXbbxVXa_!!1664555011.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i4/1664555011/TB2Z_aWXVzqK1RjSZFCXXbbxVXa_!!1664555011.jpg_500x500q90.jpg', 1, 2, 1544241213),
(20, 'images_product', 'local', 'TB2Z_aWXVzqK1RjSZFCXXbbxVXa_!!1664555011.jpg_500x500q90.jpg', 'assets/images/products/TB2Z_aWXVzqK1RjSZFCXXbbxVXa_!!1664555011.jpg_500x500q90.jpg', 1, 2, 1544241213),
(21, 'images_product', 'remote', 'TB2FBEQv_mWBKNjSZFBXXXxUFXa_!!469256589-0-item_pic.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i4/469256589/TB2FBEQv_mWBKNjSZFBXXXxUFXa_!!469256589-0-item_pic.jpg_500x500q90.jpg', 1, 3, 1544667521),
(22, 'images_product', 'local', 'TB2FBEQv_mWBKNjSZFBXXXxUFXa_!!469256589-0-item_pic.jpg_500x500q90.jpg', 'assets/images/products/TB2FBEQv_mWBKNjSZFBXXXxUFXa_!!469256589-0-item_pic.jpg_500x500q90.jpg', 1, 3, 1544667521),
(23, 'images_product', 'remote', 'TB21UlYvFooBKNjSZPhXXc2CXXa_!!469256589.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i4/469256589/TB21UlYvFooBKNjSZPhXXc2CXXa_!!469256589.jpg_500x500q90.jpg', 1, 3, 1544667521),
(24, 'images_product', 'local', 'TB21UlYvFooBKNjSZPhXXc2CXXa_!!469256589.jpg_500x500q90.jpg', 'assets/images/products/TB21UlYvFooBKNjSZPhXXc2CXXa_!!469256589.jpg_500x500q90.jpg', 1, 3, 1544667521),
(25, 'images_product', 'remote', 'TB2U4.4vFooBKNjSZFPXXXa2XXa_!!469256589.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i1/469256589/TB2U4.4vFooBKNjSZFPXXXa2XXa_!!469256589.jpg_500x500q90.jpg', 1, 3, 1544667521),
(26, 'images_product', 'local', 'TB2U4.4vFooBKNjSZFPXXXa2XXa_!!469256589.jpg_500x500q90.jpg', 'assets/images/products/TB2U4.4vFooBKNjSZFPXXXa2XXa_!!469256589.jpg_500x500q90.jpg', 1, 3, 1544667521),
(27, 'images_product', 'remote', 'TB28SpLvIUrBKNjSZPxXXX00pXa_!!469256589.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i2/469256589/TB28SpLvIUrBKNjSZPxXXX00pXa_!!469256589.jpg_500x500q90.jpg', 1, 3, 1544667521),
(28, 'images_product', 'local', 'TB28SpLvIUrBKNjSZPxXXX00pXa_!!469256589.jpg_500x500q90.jpg', 'assets/images/products/TB28SpLvIUrBKNjSZPxXXX00pXa_!!469256589.jpg_500x500q90.jpg', 1, 3, 1544667521),
(29, 'images_product', 'remote', 'TB2jWkLvRsmBKNjSZFsXXaXSVXa_!!469256589.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i2/469256589/TB2jWkLvRsmBKNjSZFsXXaXSVXa_!!469256589.jpg_500x500q90.jpg', 1, 3, 1544667521),
(30, 'images_product', 'local', 'TB2jWkLvRsmBKNjSZFsXXaXSVXa_!!469256589.jpg_500x500q90.jpg', 'assets/images/products/TB2jWkLvRsmBKNjSZFsXXaXSVXa_!!469256589.jpg_500x500q90.jpg', 1, 3, 1544667521),
(31, 'images_product', 'remote', 'O1CN01ZsgiTz1CsKLkVYHt7_!!2211760136.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i2/2211760136/O1CN01ZsgiTz1CsKLkVYHt7_!!2211760136.jpg_500x500q90.jpg', 1, 4, 1544771753),
(32, 'images_product', 'local', 'O1CN01ZsgiTz1CsKLkVYHt7_!!2211760136.jpg_500x500q90.jpg', 'assets/images/products/O1CN01ZsgiTz1CsKLkVYHt7_!!2211760136.jpg_500x500q90.jpg', 1, 4, 1544771753),
(33, 'images_product', 'remote', 'O1CN01K00k7m1CsKLYBvdVA_!!2211760136.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i1/2211760136/O1CN01K00k7m1CsKLYBvdVA_!!2211760136.jpg_500x500q90.jpg', 1, 4, 1544771753),
(34, 'images_product', 'local', 'O1CN01K00k7m1CsKLYBvdVA_!!2211760136.jpg_500x500q90.jpg', 'assets/images/products/O1CN01K00k7m1CsKLYBvdVA_!!2211760136.jpg_500x500q90.jpg', 1, 4, 1544771753),
(35, 'images_product', 'remote', 'TB2yuC8i63z9KJjy0FmXXXiwXXa_!!2211760136.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i3/2211760136/TB2yuC8i63z9KJjy0FmXXXiwXXa_!!2211760136.jpg_500x500q90.jpg', 1, 4, 1544771753),
(36, 'images_product', 'local', 'TB2yuC8i63z9KJjy0FmXXXiwXXa_!!2211760136.jpg_500x500q90.jpg', 'assets/images/products/TB2yuC8i63z9KJjy0FmXXXiwXXa_!!2211760136.jpg_500x500q90.jpg', 1, 4, 1544771753),
(37, 'images_product', 'remote', 'O1CN011CsKKQ8vNens7Tr_!!2211760136.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i1/2211760136/O1CN011CsKKQ8vNens7Tr_!!2211760136.jpg_500x500q90.jpg', 1, 4, 1544771753),
(38, 'images_product', 'local', 'O1CN011CsKKQ8vNens7Tr_!!2211760136.jpg_500x500q90.jpg', 'assets/images/products/O1CN011CsKKQ8vNens7Tr_!!2211760136.jpg_500x500q90.jpg', 1, 4, 1544771753),
(39, 'images_product', 'remote', 'O1CN01cF3P0Y1CsKLdna1Vr_!!2211760136.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i3/2211760136/O1CN01cF3P0Y1CsKLdna1Vr_!!2211760136.jpg_500x500q90.jpg', 1, 4, 1544771753),
(40, 'images_product', 'local', 'O1CN01cF3P0Y1CsKLdna1Vr_!!2211760136.jpg_500x500q90.jpg', 'assets/images/products/O1CN01cF3P0Y1CsKLdna1Vr_!!2211760136.jpg_500x500q90.jpg', 1, 4, 1544771753),
(41, 'images_product', 'remote', 'TB1cgrGtZIrBKNjSZK9XXagoVXa_!!0-item_pic.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i1/1969829451/TB1cgrGtZIrBKNjSZK9XXagoVXa_!!0-item_pic.jpg_500x500q90.jpg', 1, 5, 1544774694),
(42, 'images_product', 'local', 'TB1cgrGtZIrBKNjSZK9XXagoVXa_!!0-item_pic.jpg_500x500q90.jpg', 'assets/images/products/TB1cgrGtZIrBKNjSZK9XXagoVXa_!!0-item_pic.jpg_500x500q90.jpg', 1, 5, 1544774694),
(43, 'images_product', 'remote', 'TB224kZwf9TBuNjy0FcXXbeiFXa_!!1969829451.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i3/1969829451/TB224kZwf9TBuNjy0FcXXbeiFXa_!!1969829451.jpg_500x500q90.jpg', 1, 5, 1544774694),
(45, 'images_product', 'remote', 'TB2tFizwv1TBuNjy0FjXXajyXXa_!!1969829451.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i3/1969829451/TB2tFizwv1TBuNjy0FjXXajyXXa_!!1969829451.jpg_500x500q90.jpg', 1, 5, 1544774694),
(47, 'images_product', 'remote', 'O1CN012JgbgQYDBkgMAQd_!!1969829451.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i3/1969829451/O1CN012JgbgQYDBkgMAQd_!!1969829451.jpg_500x500q90.jpg', 1, 5, 1544774694),
(48, 'images_product', 'local', 'O1CN012JgbgQYDBkgMAQd_!!1969829451.jpg_500x500q90.jpg', 'assets/images/products/O1CN012JgbgQYDBkgMAQd_!!1969829451.jpg_500x500q90.jpg', 1, 5, 1544774694),
(49, 'images_product', 'remote', 'O1CN012JgbgTTLLGAj3Ey_!!1969829451.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i4/1969829451/O1CN012JgbgTTLLGAj3Ey_!!1969829451.jpg_500x500q90.jpg', 1, 5, 1544774694),
(51, 'images_product', 'local', 'XZ9wyCqaFp.jpg', 'assets/images/products/XZ9wyCqaFp.jpg', 1, 5, 1544782887),
(52, 'images_product', 'remote', 'O1CN011xmAxCqYkkb8xrg_!!0-item_pic.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i1/2227986485/O1CN011xmAxCqYkkb8xrg_!!0-item_pic.jpg_500x500q90.jpg', 1, 6, 1544783498),
(53, 'images_product', 'local', 'O1CN011xmAxCqYkkb8xrg_!!0-item_pic.jpg_500x500q90.jpg', 'assets/images/products/O1CN011xmAxCqYkkb8xrg_!!0-item_pic.jpg_500x500q90.jpg', 1, 6, 1544783498),
(54, 'images_product', 'remote', 'TB22SDbDpOWBuNjy0FiXXXFxVXa_!!2227986485.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i1/2227986485/TB22SDbDpOWBuNjy0FiXXXFxVXa_!!2227986485.jpg_500x500q90.jpg', 1, 6, 1544783498),
(55, 'images_product', 'local', 'TB22SDbDpOWBuNjy0FiXXXFxVXa_!!2227986485.jpg_500x500q90.jpg', 'assets/images/products/TB22SDbDpOWBuNjy0FiXXXFxVXa_!!2227986485.jpg_500x500q90.jpg', 1, 6, 1544783498),
(56, 'images_product', 'remote', 'O1CN011xmAwm5ID08n5UH_!!0-item_pic.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i1/2227986485/O1CN011xmAwm5ID08n5UH_!!0-item_pic.jpg_500x500q90.jpg', 1, 6, 1544783498),
(57, 'images_product', 'local', 'O1CN011xmAwm5ID08n5UH_!!0-item_pic.jpg_500x500q90.jpg', 'assets/images/products/O1CN011xmAwm5ID08n5UH_!!0-item_pic.jpg_500x500q90.jpg', 1, 6, 1544783498),
(58, 'images_product', 'remote', 'TB1gSWOeYSYBuNjSspiYXFNzpXa_M2.SS2_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i4/TB1gSWOeYSYBuNjSspiYXFNzpXa_M2.SS2_500x500q90.jpg', 1, 6, 1544783498),
(59, 'images_product', 'local', 'TB1gSWOeYSYBuNjSspiYXFNzpXa_M2.SS2_500x500q90.jpg', 'assets/images/products/TB1gSWOeYSYBuNjSspiYXFNzpXa_M2.SS2_500x500q90.jpg', 1, 6, 1544783498),
(60, 'images_product', 'remote', 'O1CN011xmAwqj2QsRxJun_!!2227986485.jpg_500x500q90.jpg', 'https://img.alicdn.com/imgextra/i4/2227986485/O1CN011xmAwqj2QsRxJun_!!2227986485.jpg_500x500q90.jpg', 1, 6, 1544783498),
(61, 'images_product', 'local', 'O1CN011xmAwqj2QsRxJun_!!2227986485.jpg_500x500q90.jpg', 'assets/images/products/O1CN011xmAwqj2QsRxJun_!!2227986485.jpg_500x500q90.jpg', 1, 6, 1544783498),
(62, 'images_product', 'local', 'TM8a7yIbDu.jpg', 'assets/images/products/TM8a7yIbDu.jpg', 1, 6, 1544783498);

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
(44, 'category_product', 6, 2, 1, 1544783498);

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
  `product_size` text COLLATE utf8_unicode_ci,
  `product_color` text COLLATE utf8_unicode_ci,
  `product_user` int(11) NOT NULL,
  `product_status` int(11) NOT NULL,
  `product_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dong_product`
--

INSERT INTO `dong_product` (`product_id`, `product_name`, `product_content`, `product_suorce`, `product_brand`, `product_quality`, `product_price_default`, `product_price_promotion`, `product_sale`, `product_price_vn`, `product_size`, `product_color`, `product_user`, `product_status`, `product_time`) VALUES
(1, 'test', '', 'https://detail.tmall.com/item.htm?id=577399054350', 0, 0, 138, 58, 43, 203000, 'a:6:{i:0;s:2:\"39\";i:1;s:2:\"40\";i:2;s:2:\"41\";i:3;s:2:\"42\";i:4;s:2:\"43\";i:5;s:2:\"44\";}', 'a:0:{}', 1, 0, 1544200956),
(2, 'Áo test', '<p>Test</p>', 'https://detail.tmall.com/item.htm?id=576586722639', 4, 6, 395, 159, 41, 556500, 's:90:\"a:6:{i:0;s:3:\"160\";i:1;s:3:\"165\";i:2;s:3:\"170\";i:3;s:3:\"175\";i:4;s:3:\"180\";i:5;s:3:\"185\";}\";', 's:588:\"a:6:{i:0;s:88:\"assets/images/products_color/TB23rPlpMZC2uNjSZFnXXaxZpXa_!!1664555011.jpg_500x500q90.jpg\";i:1;s:88:\"assets/images/products_color/TB2wptfkNtnkeRjSZSgXXXAuXXa_!!1664555011.jpg_500x500q90.jpg\";i:2;s:88:\"assets/images/products_color/TB2ucblpMZC2uNjSZFnXXaxZpXa_!!1664555011.jpg_500x500q90.jpg\";i:3;s:82:\"assets/images/products_color/O1CN011mt59WzH1szGTYz_!!1664555011.jpg_500x500q90.jpg\";i:4;s:82:\"assets/images/products_color/O1CN011mt59ZIELv7tIBj_!!1664555011.jpg_500x500q90.jpg\";i:5;s:82:\"assets/images/products_color/O1CN011mt59YS6PeyZskr_!!1664555011.jpg_500x500q90.jpg\";}\";', 1, 0, 1544770584),
(3, 'Giày nam Starling giày mùa đông nam phiên bản Hàn Quốc', '<p class=\"attr-list-hd tm-clear\" data-spm-anchor-id=\"a220o.1000855.0.i0.72463d31C9JcZ2\"><em><span data-spm-anchor-id=\"a220o.1000855.0.i4.72463d31C9JcZ2\">Th&ocirc;ng số sản phẩm:</span></em></p>\r\n<ul id=\"J_AttrUL\" data-spm-anchor-id=\"a220o.1000855.0.i3.72463d31C9JcZ2\">\r\n<li id=\"J_attrBrandName\" title=\"&nbsp;Starling\"><span data-spm-anchor-id=\"a220o.1000855.0.i1.72463d31C9JcZ2\">Thương hiệu: Starling</span></li>\r\n<li title=\"&nbsp;Tho&aacute;ng kh&iacute;\">Chức năng: Thở</li>\r\n<li title=\"&nbsp;Ren\">C&aacute;ch k&iacute;n: buộc</li>\r\n<li title=\"&nbsp;39 40 41 42 43 44\">K&iacute;ch thước: 39 40 41 42 43 44</li>\r\n<li title=\"&nbsp;M&agrave;u đặc\">Hoa văn: m&agrave;u đặc</li>\r\n<li title=\"&nbsp;Giải tr&iacute;\">Phong c&aacute;ch: Giải tr&iacute;</li>\r\n<li title=\"&nbsp;Giải tr&iacute; h&agrave;ng ng&agrave;y\">Ph&acirc;n khu theo phong c&aacute;ch: giải tr&iacute; h&agrave;ng ng&agrave;y</li>\r\n<li title=\"&nbsp;Chỉ may\">C&aacute;c yếu tố phổ biến: chỉ may</li>\r\n<li title=\"&nbsp;G&oacute;t thấp (1-3cm)\">Chiều cao g&oacute;t: g&oacute;t thấp (1-3cm)</li>\r\n<li title=\"&nbsp;[Trắng] [Trắng x&aacute;m] [Đen] [Đen v&agrave; Trắng] [Đỏ]\">Ph&acirc;n loại m&agrave;u sắc: 【Trắng】 【Trắng x&aacute;m】 【Đen】 【Đen v&agrave; Trắng】 【Đỏ】</li>\r\n<li title=\"&nbsp;ODXB18531\">Mục số: ODXB18531</li>\r\n<li title=\"&nbsp;Gi&agrave;y thể thao\"><span data-spm-anchor-id=\"a220o.1000855.0.i2.72463d31C9JcZ2\">T&ecirc;n gi&agrave;y thấp: gi&agrave;y</span></li>\r\n<li title=\"&nbsp;M&ugrave;a xu&acirc;n v&agrave; m&ugrave;a thu\">M&ugrave;a: Xu&acirc;n thu</li>\r\n<li title=\"&nbsp;M&ugrave;a thu 2018\">M&ugrave;a ni&ecirc;m yết: M&ugrave;a thu 2018</li>\r\n<li title=\"&nbsp;Đầu tr&ograve;n\">Kiểu ng&oacute;n ch&acirc;n: đầu tr&ograve;n</li>\r\n<li title=\"&nbsp;Mỗi ng&agrave;y\">Nh&acirc;n dịp: H&agrave;ng ng&agrave;y</li>\r\n<li title=\"&nbsp;G&oacute;t ch&acirc;n phẳng\">Với kiểu d&aacute;ng dưới: phẳng với</li>\r\n<li title=\"&nbsp;Cao su\">Chất liệu duy nhất: cao su</li>\r\n<li title=\"&nbsp;Vải\">Chất liệu l&oacute;t tr&ecirc;n: vải</li>\r\n<li title=\"&nbsp;Thanh ni&ecirc;n (18-40 tuổi)\">&Aacute;p dụng cho: Thanh ni&ecirc;n (18-40 tuổi)</li>\r\n<li title=\"&nbsp;Da hạt\">Quy tr&igrave;nh chất liệu da: da hạt</li>\r\n<li title=\"&nbsp;Gi&agrave;y d&iacute;nh\">Quy tr&igrave;nh l&agrave;m gi&agrave;y: gi&agrave;y d&iacute;nh</li>\r\n<li title=\"&nbsp;Sợi nhỏ\">Vật liệu tr&ecirc;n: Microfiber</li>\r\n<li title=\"&nbsp;Vải\" data-spm-anchor-id=\"a220o.1000855.0.i5.72463d31C9JcZ2\">Chất liệu đế: vải</li>\r\n</ul>', 'https://detail.tmall.com/item.htm?id=576705289049', 0, 6, 309, 119, 39, 416500, 'a:6:{i:0;s:2:\"39\";i:1;s:2:\"40\";i:2;s:2:\"41\";i:3;s:2:\"42\";i:4;s:2:\"43\";i:5;s:2:\"44\";}', 'N;', 1, 0, 1544770200),
(4, 'Giày nam mùa đông cho nam', '<ul id=\"J_AttrUL\" data-spm-anchor-id=\"a220o.1000855.0.i7.72c445a41xPixN\">\r\n<li id=\"J_attrBrandName\" title=\"&nbsp;THAY ĐỔI / Thương Mao\"><span data-spm-anchor-id=\"a220o.1000855.0.i6.72c445a41xPixN\">Thương hiệu: SHANGCATS / Thương Mao</span></li>\r\n<li title=\"&nbsp;Tăng\">Chức năng: Tăng</li>\r\n<li title=\"&nbsp;Ren\">C&aacute;ch k&iacute;n: buộc</li>\r\n<li title=\"&nbsp;36 37 38 39 40 41 42 43 44\">K&iacute;ch thước: 36 37 38 39 40 41 42 43 44</li>\r\n<li title=\"&nbsp;Phối m&agrave;u\">Hoa văn: phối m&agrave;u</li>\r\n<li title=\"&nbsp;Giải tr&iacute;\">Phong c&aacute;ch: Giải tr&iacute;</li>\r\n<li title=\"&nbsp;Thể thao v&agrave; giải tr&iacute;\">Ph&acirc;n khu theo phong c&aacute;ch: thể thao v&agrave; giải tr&iacute;</li>\r\n<li title=\"&nbsp;Bi&ecirc;n soạn\" data-spm-anchor-id=\"a220o.1000855.0.i3.72c445a41xPixN\">C&aacute;c yếu tố phổ biến: bi&ecirc;n soạn</li>\r\n<li title=\"&nbsp;G&oacute;t thấp (1-3cm)\" data-spm-anchor-id=\"a220o.1000855.0.i10.72c445a41xPixN\">Chiều cao g&oacute;t: g&oacute;t thấp (1-3cm)</li>\r\n</ul>', 'https://detail.tmall.com/item.htm?id=560594695949', 0, 6, 258, 78, 31, 273000, 'a:9:{i:0;s:2:\"36\";i:1;s:2:\"37\";i:2;s:2:\"38\";i:3;s:2:\"39\";i:4;s:2:\"40\";i:5;s:2:\"41\";i:6;s:2:\"42\";i:7;s:2:\"43\";i:8;s:2:\"44\";}', 'a:48:{i:0;s:88:\"assets/images/products_color/TB2_K1GbjTpK1RjSZKPXXa3UpXa_!!2211760136.jpg_500x500q90.jpg\";i:1;s:88:\"assets/images/products_color/TB2NZSVbfv85uJjSZFxXXal4XXa_!!2211760136.jpg_500x500q90.jpg\";i:2;s:88:\"assets/images/products_color/TB2BPPmq3oQMeJjy0FoXXcShVXa_!!2211760136.jpg_500x500q90.jpg\";i:3;s:82:\"assets/images/products_color/O1CN011CsKKOKq47XM3Ju_!!2211760136.jpg_500x500q90.jpg\";i:4;s:88:\"assets/images/products_color/TB2amnwdOLaK1RjSZFxXXamPFXa_!!2211760136.jpg_500x500q90.jpg\";i:5;s:88:\"assets/images/products_color/TB2IvaZdNTpK1RjSZFMXXbG_VXa_!!2211760136.jpg_500x500q90.jpg\";i:6;s:71:\"assets/images/products_color/TB1pl14jKOSBuNjy0FdL6TDnVXa_500x500q90.jpg\";i:7;s:71:\"assets/images/products_color/TB1XQWIjQ9WBuNjSspeL6Sz5VXa_500x500q90.jpg\";i:8;s:88:\"assets/images/products_color/TB21HQmaNnaK1RjSZFBXXcW7VXa_!!2211760136.jpg_500x500q90.jpg\";i:9;s:88:\"assets/images/products_color/TB2CZj8aHPpK1RjSZFFXXa5PpXa_!!2211760136.jpg_500x500q90.jpg\";i:10;s:89:\"assets/images/products_color/TB2gRf7aHPpK1RjSZFFXXa5PpXa_!!2211760136.jpeg_500x500q90.jpg\";i:11;s:89:\"assets/images/products_color/TB2Bw_6aMHqK1RjSZFEXXcGMXXa_!!2211760136.jpeg_500x500q90.jpg\";i:12;s:82:\"assets/images/products_color/O1CN011CsKKMlumGpyXZg_!!2211760136.jpg_500x500q90.jpg\";i:13;s:82:\"assets/images/products_color/O1CN011CsKKOuWGnfpt2i_!!2211760136.jpg_500x500q90.jpg\";i:14;s:71:\"assets/images/products_color/TB1h2h.eqmWBuNkHFJHL6SatVXa_500x500q90.jpg\";i:15;s:71:\"assets/images/products_color/TB1TRSbeyOYBuNjSsD4L6TSkFXa_500x500q90.jpg\";i:16;s:71:\"assets/images/products_color/TB1TJvDmH1YBuNjSszhL6UUsFXa_500x500q90.jpg\";i:17;s:88:\"assets/images/products_color/TB2rqPVaNTpK1RjSZFGXXcHqFXa_!!2211760136.jpg_500x500q90.jpg\";i:18;s:88:\"assets/images/products_color/TB2pSDVaFzqK1RjSZFvXXcB7VXa_!!2211760136.jpg_500x500q90.jpg\";i:19;s:88:\"assets/images/products_color/TB2fdzVaQvoK1RjSZFNXXcxMVXa_!!2211760136.jpg_500x500q90.jpg\";i:20;s:88:\"assets/images/products_color/TB2ZNkPcHSYBuNjSspfXXcZCpXa_!!2211760136.jpg_', 1, 0, 1544771753),
(5, 'Giày thể thao Warrior cho nam', '<p class=\"attr-list-hd tm-clear\" data-spm-anchor-id=\"a220o.1000855.0.i4.41a72da8vNioxw\"><em>Th&ocirc;ng số sản phẩm:</em></p>\r\n<ul id=\"J_AttrUL\" data-spm-anchor-id=\"a220o.1000855.0.i5.41a72da8vNioxw\">\r\n<li id=\"J_attrBrandName\" title=\"&nbsp;Chiến binh / Chiến binh\">Thương hiệu: Warrior&nbsp;</li>\r\n<li title=\"&nbsp;Ren\">C&aacute;ch k&iacute;n: buộc</li>\r\n<li title=\"&nbsp;35 36 37 38 39 40 41 42 43 44\">K&iacute;ch thước: 35 36 37 38 39 40 41 42 43 44</li>\r\n<li title=\"&nbsp;M&agrave;u đặc\">Hoa văn: m&agrave;u đặc</li>\r\n<li title=\"&nbsp;Xu hướng tuổi trẻ\">Phong c&aacute;ch: xu hướng giới trẻ</li>\r\n<li title=\"&nbsp;Anh\">Ph&acirc;n khu kiểu: Anh</li>\r\n<li title=\"&nbsp;Rỗng\">C&aacute;c yếu tố phổ biến: rỗng</li>\r\n<li title=\"&nbsp;G&oacute;t thấp (1-3cm)\" data-spm-anchor-id=\"a220o.1000855.0.i6.41a72da8vNioxw\">Chiều cao g&oacute;t: g&oacute;t thấp (1-3cm)</li>\r\n</ul>', 'https://detail.tmall.com/item.htm?id=568824719348', 0, 0, 168, 69, 42, 241500, 'a:10:{i:0;s:2:\"35\";i:1;s:2:\"36\";i:2;s:2:\"37\";i:3;s:2:\"38\";i:4;s:2:\"39\";i:5;s:2:\"40\";i:6;s:2:\"41\";i:7;s:2:\"42\";i:8;s:2:\"43\";i:9;s:2:\"44\";}', 'a:19:{i:0;s:71:\"assets/images/products_color/TB1Fs2kv1uSBuNjSsziL6Tq8pXa_500x500q90.jpg\";i:1;s:71:\"assets/images/products_color/TB1YcpQnRyWBuNkSmFPL6RguVXa_500x500q90.jpg\";i:2;s:71:\"assets/images/products_color/TB1IoePv4SYBuNjSsphL6TGvVXa_500x500q90.jpg\";i:3;s:71:\"assets/images/products_color/TB1Q6TghSMmBKNjSZTEL6SsKpXa_500x500q90.jpg\";i:4;s:88:\"assets/images/products_color/TB2HbpjtyCYBuNkSnaVXXcMsVXa_!!1969829451.jpg_500x500q90.jpg\";i:5;s:88:\"assets/images/products_color/TB2f0pxtviSBuNkSnhJXXbDcpXa_!!1969829451.jpg_500x500q90.jpg\";i:6;s:88:\"assets/images/products_color/TB2mddKBwaTBuNjSszfXXXgfpXa_!!1969829451.jpg_500x500q90.jpg\";i:7;s:88:\"assets/images/products_color/TB2KM7eDeySBuNjy1zdXXXPxFXa_!!1969829451.jpg_500x500q90.jpg\";i:8;s:88:\"assets/images/products_color/TB25WCMIbuWBuNjSszgXXb8jVXa_!!1969829451.jpg_500x500q90.jpg\";i:9;s:88:\"assets/images/products_color/TB27lh4z2uSBuNkHFqDXXXfhVXa_!!1969829451.jpg_500x500q90.jpg\";i:10;s:71:\"assets/images/products_color/TB1u5eVgfiSBuNkSnhJL6TDcpXa_500x500q90.jpg\";i:11;s:84:\"assets/images/products_color/O1CN01cVoScP2JgbgvVrwm9_!!1969829451.jpg_500x500q90.jpg\";i:12;s:82:\"assets/images/products_color/O1CN012JgbgQyF2DT8Sl9_!!1969829451.jpg_500x500q90.jpg\";i:13;s:82:\"assets/images/products_color/O1CN012JgbgQ9QY0VIPsW_!!1969829451.jpg_500x500q90.jpg\";i:14;s:82:\"assets/images/products_color/O1CN012Jgbh0RvDSBD4lP_!!1969829451.jpg_500x500q90.jpg\";i:15;s:82:\"assets/images/products_color/O1CN012Jgbh2uhNR6gpKs_!!1969829451.jpg_500x500q90.jpg\";i:16;s:82:\"assets/images/products_color/O1CN012JgbgRStgbGxM9Y_!!1969829451.jpg_500x500q90.jpg\";i:17;s:82:\"assets/images/products_color/O1CN012JgbgRki7TG4d61_!!1969829451.jpg_500x500q90.jpg\";i:18;s:82:\"assets/images/products_color/O1CN012Jgbh3dcza3wEEF_!!1969829451.jpg_500x500q90.jpg\";}', 1, 1, 1544782887),
(6, 'gdfsgb', '<p>fdgbfdbfdb</p>', 'https://detail.tmall.com/item.htm?id=546858072475', 0, 0, 199, 99, 50, 346500, 'a:7:{i:0;s:2:\"39\";i:1;s:2:\"40\";i:2;s:2:\"41\";i:3;s:2:\"42\";i:4;s:2:\"43\";i:5;s:2:\"44\";i:6;s:2:\"45\";}', 'a:27:{i:0;s:82:\"assets/images/products_color/O1CN011xmAwxuL392H2fw_!!2227986485.jpg_500x500q90.jpg\";i:1;s:82:\"assets/images/products_color/O1CN011xmAwyhUQVFHERJ_!!2227986485.jpg_500x500q90.jpg\";i:2;s:82:\"assets/images/products_color/O1CN011xmAwzGNUAmwU7t_!!2227986485.jpg_500x500q90.jpg\";i:3;s:82:\"assets/images/products_color/O1CN011xmAwyOXVGpwLAn_!!2227986485.jpg_500x500q90.jpg\";i:4;s:82:\"assets/images/products_color/O1CN011xmAwzWlaZ2NgWw_!!2227986485.jpg_500x500q90.jpg\";i:5;s:82:\"assets/images/products_color/O1CN011xmAwxuN415Y9aI_!!2227986485.jpg_500x500q90.jpg\";i:6;s:82:\"assets/images/products_color/O1CN011xmAwsmEVIPcBZE_!!2227986485.jpg_500x500q90.jpg\";i:7;s:82:\"assets/images/products_color/O1CN011xmAx0YX5LYbHKo_!!2227986485.jpg_500x500q90.jpg\";i:8;s:82:\"assets/images/products_color/O1CN011xmAwzm0RsYTuIw_!!2227986485.jpg_500x500q90.jpg\";i:9;s:82:\"assets/images/products_color/O1CN011xmAwyOa3J5iOQH_!!2227986485.jpg_500x500q90.jpg\";i:10;s:82:\"assets/images/products_color/O1CN011xmAwxU7rB2WcwW_!!2227986485.jpg_500x500q90.jpg\";i:11;s:82:\"assets/images/products_color/O1CN011xmAx0At41D01Yi_!!2227986485.jpg_500x500q90.jpg\";i:12;s:82:\"assets/images/products_color/O1CN011xmAx0As7s5ADzH_!!2227986485.jpg_500x500q90.jpg\";i:13;s:82:\"assets/images/products_color/O1CN011xmAwxU8nO1Unrn_!!2227986485.jpg_500x500q90.jpg\";i:14;s:82:\"assets/images/products_color/O1CN011xmAwzXZngjqmoA_!!2227986485.jpg_500x500q90.jpg\";i:15;s:82:\"assets/images/products_color/O1CN011xmAwyhYzVDy7QD_!!2227986485.jpg_500x500q90.jpg\";i:16;s:82:\"assets/images/products_color/O1CN011xmAwzCCyzjpkjJ_!!2227986485.jpg_500x500q90.jpg\";i:17;s:82:\"assets/images/products_color/O1CN011xmAwzGSmwFE1CM_!!2227986485.jpg_500x500q90.jpg\";i:18;s:82:\"assets/images/products_color/O1CN011xmAwz2FOltkQzK_!!2227986485.jpg_500x500q90.jpg\";i:19;s:82:\"assets/images/products_color/O1CN011xmAwzCFrmfmBXy_!!2227986485.jpg_500x500q90.jpg\";i:20;s:82:\"assets/images/products_color/O1CN011xmAwsnIy4ejkq2_!!2227986485.jpg_500x500q90.jpg\";i:21;s:82:\"assets/images/products_color/O1CN011xmAwyvPmAtXwtk_!!2227986485.jpg_500x500q90.jpg\";i:22;s:82:\"assets/images/products_color/O1CN011xmAwxvUDErHsPL_!!2227986485.jpg_500x500q90.jpg\";i:23;s:82:\"assets/images/products_color/O1CN011xmAx0NozSlbcdc_!!2227986485.jpg_500x500q90.jpg\";i:24;s:82:\"assets/images/products_color/O1CN011xmAx0NqbBDsfX5_!!2227986485.jpg_500x500q90.jpg\";i:25;s:82:\"assets/images/products_color/O1CN011xmAx0C25pq1sbU_!!2227986485.jpg_500x500q90.jpg\";i:26;s:82:\"assets/images/products_color/O1CN011xmAwyPktbG7GhR_!!2227986485.jpg_500x500q90.jpg\";}', 1, 1, 1544783498);

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
  MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT cho bảng `dong_metadata`
--
ALTER TABLE `dong_metadata`
  MODIFY `metadata_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `dong_product`
--
ALTER TABLE `dong_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `dong_user`
--
ALTER TABLE `dong_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

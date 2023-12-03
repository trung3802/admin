-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 03, 2023 lúc 06:26 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webbansacsh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=FIXED;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `user_id`, `qty`) VALUES
(34, 18, 2, 1),
(35, 22, 2, 1),
(77, 22, 5, 1),
(76, 22, 5, 1),
(89, 27, 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT 1,
  `date` date DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `quantity`, `date`, `name`, `address`, `phone`, `status`) VALUES
(6, 1, 28, 5, '2023-11-30', '123', '2121', '33232', 1),
(10, 1, 28, 3, '2023-11-30', 'abc', '123', '123', 1),
(11, 1, 28, 2, '2023-11-30', '123', '123', '123', 1),
(15, 1, 28, 2, '2023-11-30', 'test', '123', '123', 1),
(17, 1, 26, 3, '2023-12-01', 'trung', 'hà nội', '0364365434', 1),
(18, 1, 23, 2, '2023-12-01', 'klnk', 'k', '12121', 1),
(19, 1, 23, 1, '2023-12-01', 'Áo Oversize mẫu mới nhất năm 2023', 'hn', '12121', 1),
(21, 1, 26, 7, '2023-12-01', 'gbf', 'hà nội', '03643234234', 1),
(22, 1, 23, 1, '2023-12-01', 'gbf', 'hà nội', '03643234234', 1),
(23, 1, 23, 1, '2023-12-01', 'trung', 'hà nội', '0364365434', 1),
(25, 1, 26, 1, '2023-12-01', 'trung', 'hà nội', '0364365434', 1),
(27, 1, 22, 2, '2023-12-03', 'Nguyễn Văn B', 'Đội 5 - Xã Tân Tiến - Huyện Gia Lộc - Tỉnh Hải Dương', '0936846270', 1),
(28, 1, 22, 4, '2023-12-03', 'Nguyễn Thành Trung', 'Đội 5 - Xã Tân Tiến - Huyện Gia Lộc - Tỉnh Hải Dương', '09786364411', 1),
(32, 1, 22, 2, '2023-12-03', 'm1nhz', 'gialoc', '0936846270', 1),
(33, 1, 23, 1, '2023-12-02', 'm1nhz', 'gialoc', '0936846270', 1),
(34, 1, 22, 2, '2023-12-03', 'Nguyễn Thành Trung sdadad', 'Đội 5 - Xã Tân Tiến - Huyện Gia Lộc - Tỉnh Hải Dương', '12323232312323', 1),
(40, 1, 22, 3, '2023-12-03', NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `created_at` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `product_id`, `content`, `created_at`) VALUES
(20, 18, 'moi', '2023-11-19'),
(21, 18, 'moi', '2023-11-19'),
(22, 18, 'moi', '2023-11-19'),
(23, 18, 'moi', '2023-11-19'),
(62, 0, '5555', '2023-12-03'),
(74, 22, '2', '2023-12-03'),
(73, 26, '1', '2023-12-03'),
(72, 23, '124', '2023-12-03'),
(71, 22, 'okok\r\n', '2023-12-03'),
(70, 22, '12', '2023-12-03'),
(69, 0, 'trung', '2023-12-03'),
(68, 0, '12', '2023-12-03'),
(67, 0, '12', '2023-12-03'),
(75, 22, 'trungoke', '2023-12-03'),
(76, 23, '12424', '2023-12-03'),
(77, 22, 'fdfdfdfdf', '2023-12-03'),
(78, 22, 'feff', '2023-12-03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `home` tinyint(1) NOT NULL DEFAULT 0,
  `stt` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`, `home`, `stt`) VALUES
(15, 'sách', 0, 0),
(30, 'sách giáo khoa', 0, 0),
(32, 'truyện', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `idGioHang` int(11) NOT NULL,
  `idTaiKhoan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `trangthai` varchar(255) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `order_items`
--

INSERT INTO `order_items` (`id`, `user_id`, `product_id`, `order_id`, `quantity`, `date`, `name`, `address`, `phone`, `trangthai`) VALUES
(1, 1, 22, 1, 1, '2023-12-03', 'trung', 'gl', '123144', '3'),
(2, 1, 23, 2, 1, '2023-12-03', 'r', 'r', '343535', '3');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `view` int(11) NOT NULL DEFAULT 0,
  `mota` text NOT NULL,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `view`, `mota`, `iddm`) VALUES
(22, 'conan', 200000, 'img_7523.jpg', 10, 'cũ', 32),
(23, 'sách', 100000, 'image_195509_1_22278.jpg', 0, '', 15),
(26, 'văn', 20000, '9780099590088.jpg', 0, 'cu', 32);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(1, 'test', '123', 'test@gmail.com', 'adfaefwweaf', '0132456789', 0),
(2, 'admin', '123', 'admin@gmail.com', 'test', '123', 1),
(3, '123', '123', NULL, NULL, NULL, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`idGioHang`) USING BTREE,
  ADD UNIQUE KEY `idTaiKhoan` (`idTaiKhoan`) USING BTREE;

--
-- Chỉ mục cho bảng `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `ik_sanpham_danhmuc` (`iddm`) USING BTREE;

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `idGioHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `fk_giohang_taikhoan` FOREIGN KEY (`idTaiKhoan`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `ik_sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 06, 2017 lúc 12:34 CH
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `admin_strict`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` int(10) NOT NULL,
  `anh` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id`, `anh`, `title`, `description`) VALUES
(17, 'banner2.jpg', 'Strict 1', 'Strict is a reponsible theme with a clean and minimal look'),
(19, 'banner3.jpg', 'Strict 2', 'Strict is a reponsible theme with a clean and minimal look'),
(21, 'banner.jpg', 'Strict 3', 'Strict is a reponsible theme with a clean and minimal look');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(3, 'vinh', 'mrchuoivip@yahoo.com', 'qwdasdad'),
(4, 'wdfs', 'vinhvinh2121995@gmail.com', 'fvvvvvvvvvvvvvvvvvvvvv'),
(5, 'haaaaaaaaaaaloooo', 'goooglee@gmail.com', 'Stay with us\r\nWe ansure quality & support'),
(6, 'wfsdfd', 'hiiiiiiiiii@gmail.com', 'uhduiscausdbcyf'),
(7, 'wfsdfd', 'hiiiiiiiiii@gmail.com', 'uhduiscausdbcyf'),
(8, 'gfhff', 'vinhvinh2121995@gmail.com', 'efdgdfgsdfg'),
(10, 'dfgdfg', 'mrchuoivip@yahoo.com', 'dfsgdfgdf');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `icon`
--

CREATE TABLE `icon` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `icon`
--

INSERT INTO `icon` (`id`, `name`, `link`) VALUES
(1, 'Facebook', 'https://www.youtube.com/watch?v=Qs-XcmaxaLw'),
(2, 'Twitter', 'http://chiasenhac.vn/nhac-hot/here-with-you~lost-frequencies-netsky~tsvdr7csqmatv4.html'),
(3, 'Google', 'http://mp3.zing.vn/'),
(4, 'Linkin', 'https://www.google.com.vn/?gws_rd=ssl');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `member`
--

CREATE TABLE `member` (
  `id` int(10) NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `member`
--

INSERT INTO `member` (`id`, `user`, `pass`) VALUES
(1, 'vinh', '1995');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `showcase`
--

CREATE TABLE `showcase` (
  `id` int(10) NOT NULL,
  `anh` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `showcase`
--

INSERT INTO `showcase` (`id`, `anh`, `title`, `description`) VALUES
(4, 'pic2.jpg', 'dsfsdfsdf', 'https://www.w3schools.com/jsref/jsref_fontcolor.asp'),
(5, 'pic3.jpg', 'fghfg', 'fgh'),
(7, 'pic4.jpg', 'ẻgdfgdf', 'gsdfgsdfg'),
(8, 'pic1.jpg', '4', '4'),
(9, 'pic5.jpg', '5', '5'),
(10, 'pic6.jpg', '6', '6');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `simple`
--

CREATE TABLE `simple` (
  `id` int(10) NOT NULL,
  `anh` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `simple`
--

INSERT INTO `simple` (`id`, `anh`, `title`, `description`) VALUES
(15, 'icon1.jpg', 'Optimized for all divices', 'STRICT has been designed to be fully reponsive all devices.'),
(16, 'icon2.jpg', 'Clean & Minimal Design', 'his multipurpose theme especially created to be used for diffrent projects.'),
(17, 'icon3.jpg', 'Font Awesome Icon', 'This multipurpose theme especially created to be used for diffrent projects.');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `icon`
--
ALTER TABLE `icon`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `showcase`
--
ALTER TABLE `showcase`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `simple`
--
ALTER TABLE `simple`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT cho bảng `icon`
--
ALTER TABLE `icon`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `member`
--
ALTER TABLE `member`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `showcase`
--
ALTER TABLE `showcase`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT cho bảng `simple`
--
ALTER TABLE `simple`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

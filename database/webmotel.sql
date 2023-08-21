-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 20, 2023 lúc 12:17 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webmotel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `maphong` int(11) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phongtro`
--

CREATE TABLE `phongtro` (
  `ma_phong` int(16) NOT NULL,
  `idcard` varchar(20) NOT NULL,
  `title` varchar(200) NOT NULL,
  `loai_phong` varchar(50) NOT NULL,
  `kieu_phong` varchar(50) NOT NULL,
  `sonha` varchar(50) NOT NULL,
  `duong` varchar(100) NOT NULL,
  `phuong` varchar(100) NOT NULL,
  `huyen` varchar(100) NOT NULL,
  `tinh` varchar(100) NOT NULL,
  `dientich` varchar(20) NOT NULL,
  `so_nguoi` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `mota` varchar(500) NOT NULL,
  `tinhtrang` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thue_phong`
--

CREATE TABLE `thue_phong` (
  `ma_phong` int(16) NOT NULL,
  `ho_ten` varchar(30) NOT NULL,
  `dienthoai` char(10) NOT NULL,
  `giatri` int(12) NOT NULL,
  `tien_coc` int(11) NOT NULL,
  `bill` varchar(100) NOT NULL,
  `ngaythue` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `idcard` varchar(16) NOT NULL,
  `password` varchar(50) NOT NULL,
  `ten` varchar(30) NOT NULL,
  `sonha` varchar(100) NOT NULL,
  `duong` varchar(100) NOT NULL,
  `phuong` varchar(100) NOT NULL,
  `huyen` varchar(100) NOT NULL,
  `tinh` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `pay` int(30) NOT NULL,
  `status` int(11) NOT NULL,
  `permission` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phongtro`
--
ALTER TABLE `phongtro`
  ADD PRIMARY KEY (`ma_phong`);

--
-- Chỉ mục cho bảng `thue_phong`
--
ALTER TABLE `thue_phong`
  ADD PRIMARY KEY (`ma_phong`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idcard`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `phongtro`
--
ALTER TABLE `phongtro`
  MODIFY `ma_phong` int(16) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

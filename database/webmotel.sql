-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 22, 2023 lúc 09:40 AM
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

--
-- Đang đổ dữ liệu cho bảng `image`
--

INSERT INTO `image` (`id`, `maphong`, `image`) VALUES
(12, 18, 'anh1.jpeg'),
(13, 18, 'anh2.jpg'),
(14, 18, 'anh3.jpg');

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

--
-- Đang đổ dữ liệu cho bảng `phongtro`
--

INSERT INTO `phongtro` (`ma_phong`, `idcard`, `title`, `loai_phong`, `kieu_phong`, `sonha`, `duong`, `phuong`, `huyen`, `tinh`, `dientich`, `so_nguoi`, `gia`, `avatar`, `mota`, `tinhtrang`) VALUES
(18, '040202024214', 'Cho thuê phòng trọ khép kín gần bệnh viện Tp.Vinh', 'Khép kín', 'Nhà cấp 4', '7', 'Nguyễn Viết Xuân', 'Phường Đông Vĩnh', 'Thành phố Vinh', 'Nghệ An', '9', 2, 1200000, 'anh3.jpg', 'Cho thuê phòng trọ khép kín , thích hợp cho hộ gia đình ở lâu dài. Phòng rộng, thoáng mát, an ninh tốt, lối đi riêng, điện nước riêng. Gần chợ, trường học, bệnh viện, công viên.', 0),
(19, '040202024214', 'Cho thuê phòng trọ gia đình ở thành phố Vinh', 'Khép kín', 'Nhà cấp 4', 'Số 3', 'Nguyễn Trường Tộ', 'Phường Đông Vĩnh', 'Thành phố Vinh', 'Nghệ An', '5', 2, 1850000, 'anh2.jpg', '- Cho thuê phòng trọ 2 gác lửng, Diện tích sử dụng = 40m2.\r\n\r\n- Gồm Có 2 phòng ngủ + 1 phòng khách + 1 bếp + 1 vệ sinh.\r\n\r\n- Hành lang rộng thoáng, an ninh, trật tự tốt, văn minh.\r\n\r\n- Có camera giám sát sân cổng, Wifi miễn phí.\r\n\r\n- Đối tượng cho thuê là: Người đã lập gia đình.\r\n\r\n- Giá điện = 2700 đ/ 1 số; Nước 10.000 đ/ 1 số.', 0),
(21, '040202024214', 'Phòng trọ cho thuê khép kín, đầy đủ nóng lạnh, điều hòa', 'Khép kín', 'Nhà cấp 4', '05', 'Đường Phượng Hoàng', 'Phường Đông Vĩnh', 'Thành phố Vinh', 'Nghệ An', '30', 3, 2000000, 'anh1.jpeg', '- phòng được thiết kế theo tiêu chuẩn chung cư. có đầy đủ điều hòa, nóng lạnh, khu vệ sinh, ban công đón gió, khu vực nấu ăn.\r\n- hệ thống điện, nước trong phòng được thiết kế tối ưu cho nhu cầu sử dụng. Phòng ở trong tổ hợp nhà chung cư mini tại số 8, ngõ 15, đường nguyễn văn trỗi. \r\n- Khu nhà có sân vườn rộng rãi, ga ra để xe có camera giám sát an toàn và các dịch vụ tiện ích phục vụ cho sinh hoạt chung miễn phí', 0),
(23, '040202024214', 'Phòng trọ khép kín cho sinh viên', 'Khép kín', 'Nhà trọ', 'Số55', 'Cao Huy Đỉnh', 'Phường Hà Huy Tập', 'Thành phố Vinh', 'Nghệ An', '20', 3, 800000, 'phongtro1.png', '- Phòng rộng rãi thoáng mát.\r\n- Không chung cổng chủ.\r\n- Sạch sẽ ', 0),
(24, '040202024214', 'Phòng trọ giá rẻ', 'Không khép kín', 'Nhà trọ', 'Số 5', 'Đường Văn Đông', 'Phường Hưng Dũng', 'Thành phố Vinh', 'Nghệ An', '15', 2, 500000, 'phongtro2.jpg', '- Sạch sẽ, có điều hòa\r\n- Gần trường Sư Phạm Kỹ Thuật Vinh', 0),
(25, '040202024214', 'Phòng mới  xây ưu tiên sinh viên', 'Khép kín', 'Nhà cấp 4', 'số 32', 'Trường Chinh', 'Phường Trường Thi', 'Thành phố Vinh', 'Nghệ An', '32', 2, 700000, 'phongtro3.jpg', '- Gần trung tâm thành phố\r\n- Gần các trường đại học', 0);

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
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`idcard`, `password`, `ten`, `sonha`, `duong`, `phuong`, `huyen`, `tinh`, `phone`, `pay`, `status`, `permission`) VALUES
('040202024212', '202cb962ac59075b964b07152d234b70', 'Lê Văn Phong', '', '', '', '', '', '0379250675', 0, 0, 2),
('040202024214', '2b10351253eed030812674e8aa18a5ab', 'Trần Lê Minh Quang', 'Số 7', 'Nguyễn Viết Xuân', 'Hưng Dũng', 'Thành Phố Vinh', 'Nghệ An', '0333443564', 0, 0, 1),
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '', '', '', '', '', '0', 0, 1, 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `phongtro`
--
ALTER TABLE `phongtro`
  MODIFY `ma_phong` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

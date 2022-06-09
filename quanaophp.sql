-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 09, 2022 lúc 10:56 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanaophp`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `acckhach`
--

CREATE TABLE `acckhach` (
  `ID` int(11) NOT NULL,
  `TaiKhoan` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Anh` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `MaKH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `acckhach`
--

INSERT INTO `acckhach` (`ID`, `TaiKhoan`, `MatKhau`, `Anh`, `MaKH`) VALUES
(1, 'khach1', '50d25ceee6f203926768fe7450f924a7', 'public/img/user/brand_7.jpg', 2),
(4, 'khach2', '496e396cb50410a33d6fd2a464e2d009', 'public/img/user/brand_6.jpg', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cthoadon`
--

CREATE TABLE `cthoadon` (
  `MaHD` int(11) NOT NULL,
  `Mahh` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cthoadon`
--

INSERT INTO `cthoadon` (`MaHD`, `Mahh`, `SoLuong`) VALUES
(6, 3, 2),
(6, 4, 1),
(21, 1, 1),
(21, 21, 1),
(22, 3, 1),
(22, 17, 1),
(24, 21, 1),
(30, 21, 2),
(32, 21, 1),
(33, 1, 1),
(34, 21, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHD` int(11) NOT NULL,
  `MaNV` int(11) NOT NULL,
  `MaKH` int(11) NOT NULL,
  `NgayHD` date NOT NULL,
  `TongTien` float NOT NULL,
  `TrangThai` varchar(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`MaHD`, `MaNV`, `MaKH`, `NgayHD`, `TongTien`, `TrangThai`) VALUES
(6, 2, 2, '2022-02-10', 123123, 'No'),
(14, 2, 2, '2022-02-27', 250000, 'Yes'),
(15, 2, 2, '2022-02-27', 250000, 'Yes'),
(16, 2, 2, '2022-02-27', 250000, 'Yes'),
(17, 2, 2, '2022-02-27', 250000, 'Yes'),
(20, 2, 2, '2022-02-27', 370000, 'Yes'),
(21, 2, 2, '2022-02-27', 370000, 'Yes'),
(22, 2, 2, '2022-02-27', 470000, 'Yes'),
(23, 2, 2, '2022-02-27', 470000, 'Yes'),
(24, 2, 2, '2022-02-27', 120000, 'Yes'),
(30, 2, 3, '2022-02-28', 240000, 'Yes'),
(31, 2, 3, '2022-02-28', 240000, 'Yes'),
(32, 2, 3, '2022-02-28', 120000, 'Yes'),
(33, 2, 3, '2022-02-28', 250000, 'Yes'),
(34, 2, 3, '2022-02-28', 120000, 'Yes');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKH` int(11) NOT NULL,
  `TenKH` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `TenKH`, `SDT`) VALUES
(2, 'Khách lẻ', 326691468),
(3, 'aaaa', 123123);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisp`
--

CREATE TABLE `loaisp` (
  `ID` int(11) NOT NULL,
  `TenLoai` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `TrangThai` int(11) NOT NULL,
  `Anh` varchar(5000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisp`
--

INSERT INTO `loaisp` (`ID`, `TenLoai`, `TrangThai`, `Anh`) VALUES
(2, 'moi', 1, 'public/img/loaisp/carehot5.jpg'),
(3, 'random sale', 1, 'public/img/loaisp/cbp13.jpg'),
(4, 'wibu', 1, 'public/img/loaisp/brand_1.jpg'),
(5, 'game', 1, 'public/img/loaisp/brand_3.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `ID` int(11) NOT NULL,
  `TaiKhoan` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `AccRole` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Anh` varchar(5000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`ID`, `TaiKhoan`, `MatKhau`, `AccRole`, `Anh`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'nhanvien', 'public/img/user/brand_7.jpg'),
(3, 'khach1', '50d25ceee6f203926768fe7450f924a7', 'khach', 'public/img/user/brand_8.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MaNV` int(11) NOT NULL,
  `TenNV` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `GioiTinh` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `QueQuan` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` int(11) NOT NULL,
  `ChucVu` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `HSL` float NOT NULL,
  `Anh` varchar(5000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`MaNV`, `TenNV`, `GioiTinh`, `QueQuan`, `SDT`, `ChucVu`, `HSL`, `Anh`) VALUES
(2, 'Nguyễn Văn A', 'Nam', 'Hà Nội', 222222222, 'NV', 1, 'public/img/nhanvien/brand_6.jpg'),
(3, 'longngu', 'Nam', 'aa', 555555555, 'NV', 2, 'public/img/nhanvien/banner5.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quanao`
--

CREATE TABLE `quanao` (
  `Mahh` int(11) NOT NULL,
  `Tenhh` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `ID` int(11) NOT NULL,
  `DongGia` float NOT NULL,
  `DongGiaSale` float NOT NULL,
  `Producer` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `NSX` date NOT NULL,
  `Anh` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `Anhmini1` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `Anhmini2` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `Mota` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quanao`
--

INSERT INTO `quanao` (`Mahh`, `Tenhh`, `ID`, `DongGia`, `DongGiaSale`, `Producer`, `NSX`, `Anh`, `Anhmini1`, `Anhmini2`, `Mota`) VALUES
(1, 'Áo thun Burn It All Down Worlds 2021', 2, 250000, 100000, 'rytry', '2022-02-23', 'public/img/quanao/home-product1.jpg', '', '', 'Mô tả sịn sò'),
(3, 'Áo thun dài tay Chạy đi T-Rex', 3, 220000, 100000, '12432', '2022-02-25', 'public/img/quanao/banner5.jpg', '', '', 'MÔ TẢ CHUNG Áo dài tay nam cổ tròn dòng Active Casual sử dụng vải dệt French Terry (kiểu dệt da cá với mặt ngoài mịn, mặt trong dệt xù kiểu vảy cá) được làm từ chất liệu Cotton kết hợp sợi tổng hợp cao cấp, mang đến một sản phẩm đầy đủ đặc tính: - Mềm mại, xốp, nhẹ - Không nhăn nhàu - Lưu thông khí tốt - Tăng khả năng giữ ấm cơ thể - Thiết kế đơn giản, kiểu dáng khỏe khoắn với đường may tinh tế, tạo phong cách thể thao, năng động Sản phẩm đem đến cho người mặc cảm giác dễ chịu, thoải mái khi mặc nhà cũng như tham gia các hoạt động ngoài trời.  CHẤT LIỆU 55% Cotton 45% Polyester'),
(4, 'Áo thun Bộ 3 Ace-Luffy-Sabo', 4, 220000, 50000, 'bbbbbbb', '2022-02-04', 'public/img/quanao/wibu_img1.jpg', '', '', 'Mô tả ĐINK COUNT'),
(16, 'Sweater Kaio Ken - Dragon Ball', 4, 220000, 120000, '????', '2022-02-19', 'public/img/quanao/wibu-img2.jpg', '', '', '123'),
(17, 'Áo thun Loki-Back To The Sacred Timeline', 3, 250000, 0, 'aaa', '2022-02-23', 'public/img/quanao/homeproduct9.jpg', '', '', 'MÔ TẢ CHUNG Áo dài tay nam cổ tròn '),
(18, 'Áo thun Sonic Thư Giãn Tí', 5, 250000, 0, '12432', '2022-02-09', 'public/img/quanao/new_shirt2.jpg', '', '', 'Mô tả như cức'),
(19, 'Áo thun Loki-Back To The Sacred Timeline', 5, 250000, 0, 'zzxzxc', '2022-02-23', 'public/img/quanao/home-product8.jpg', '', '', 'Mô tả đéo ra j'),
(20, 'Áo thun Elden Ring Chibi', 5, 220000, 0, 'Bruhh', '2022-02-25', 'public/img/quanao/game_shirt1.jpg', '', '', 'Mô tả ảo lòi'),
(21, 'Áo thun Sonic Thư Giãn Tí', 2, 120000, 0, 'Bruhh', '2022-02-23', 'public/img/quanao/wibu6.jpg', '', '', 'Mô tả đéo ra j'),
(22, 'Áo thun Miss Minutes - Loki', 2, 250000, 0, '123', '2022-06-09', 'public/img/quanao/new_shirt3.jpg', '', '', 'MÔ TẢ CHUNG Áo dài tay nam cổ tròn '),
(23, 'Áo thun The Next Level', 2, 220000, 0, 'zzxzxc', '2022-06-02', 'public/img/quanao/new_shirt5.jpg', '', '', 'MÔ TẢ CHUNG Áo dài tay nam cổ tròn '),
(24, 'Áo thun dài tay Yasuo & Yone', 2, 120000, 0, 'nhà sản xuất nào đó', '2022-06-11', 'public/img/quanao/banner3.jpg', '', '', 'MÔ TẢ CHUNG Áo dài tay nam cổ tròn '),
(25, 'Áo thun Burn It All Down Worlds 2021', 3, 220000, 500000, 'gì gì đó', '2022-07-03', 'public/img/quanao/pokemon12.jpg', '', '', 'MÔ TẢ CHUNG Áo dài tay nam cổ tròn dòng Active Casual sử dụng vải dệt French Terry (kiểu dệt da cá với mặt ngoài mịn, mặt trong dệt xù kiểu vảy cá) được làm từ chất liệu Cotton kết hợp sợi tổng hợp cao cấp, mang đến một sản phẩm đầy đủ đặc tính: - Mềm mại, xốp, nhẹ - Không nhăn nhàu - Lưu thông khí tốt - Tăng khả năng giữ ấm cơ thể - Thiết kế đơn giản, kiểu dáng khỏe khoắn với đường may tinh tế, tạo phong cách thể thao, năng động Sản phẩm đem đến cho người mặc cảm giác dễ chịu, thoải mái khi mặc nhà cũng như tham gia các hoạt động ngoài trời.  CHẤT LIỆU 55% Cotton 45% Polyester'),
(26, 'Áo thun Burn It All Down Worlds 2021', 3, 220000, 50000, 'rytry', '2022-06-09', 'public/img/quanao/game_shirt2jpg.jpg', '', '', 'MÔ TẢ CHUNG Áo dài tay nam cổ tròn '),
(27, 'Áo thun Loki-Back To The Sacred Timeline', 3, 120000, 500000, 'zzxzxc', '2022-06-06', 'public/img/quanao/carehot2.jpg', '', '', 'MÔ TẢ CHUNG Áo dài tay nam cổ tròn '),
(28, 'Áo thun Wibu', 4, 220000, 50000, '12432', '2022-06-11', 'public/img/quanao/wibu2.jpg', '', '', 'yyyyyy'),
(29, 'Áo thun Sonic Thư Giãn Tí', 5, 220000, 10000, 'rytry', '2022-06-09', 'public/img/quanao/homeproduct10.jpg', '', '', 'MÔ TẢ CHUNG Áo dài tay nam cổ tròn dòng Active Casual sử dụng vải dệt French Terry (kiểu dệt da cá với mặt ngoài mịn, mặt trong dệt xù kiểu vảy cá) được làm từ chất liệu Cotton kết hợp sợi tổng hợp cao cấp, mang đến một sản phẩm đầy đủ đặc tính: - Mềm mại, xốp, nhẹ - Không nhăn nhàu - Lưu thông khí tốt - Tăng khả năng giữ ấm cơ thể - Thiết kế đơn giản, kiểu dáng khỏe khoắn với đường may tinh tế, tạo phong cách thể thao, năng động Sản phẩm đem đến cho người mặc cảm giác dễ chịu, thoải mái khi mặc nhà cũng như tham gia các hoạt động ngoài trời.  CHẤT LIỆU 55% Cotton 45% Polyester'),
(30, 'Áo thun Burn It All Down Worlds 2021', 5, 220000, 10000, 'zzxzxc', '2022-06-11', 'public/img/quanao/cbp3.jpg', '', '', 'MÔ TẢ CHUNG Áo dài tay nam cổ tròn dòng Active Casual sử dụng vải dệt French Terry (kiểu dệt da cá với mặt ngoài mịn, mặt trong dệt xù kiểu vảy cá) được làm từ chất liệu Cotton kết hợp sợi tổng hợp cao cấp, mang đến một sản phẩm đầy đủ đặc tính: - Mềm mại, xốp, nhẹ - Không nhăn nhàu - Lưu thông khí tốt - Tăng khả năng giữ ấm cơ thể - Thiết kế đơn giản, kiểu dáng khỏe khoắn với đường may tinh tế, tạo phong cách thể thao, năng động Sản phẩm đem đến cho người mặc cảm giác dễ chịu, thoải mái khi mặc nhà cũng như tham gia các hoạt động ngoài trời.  CHẤT LIỆU 55% Cotton 45% Polyester');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `acckhach`
--
ALTER TABLE `acckhach`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `MaKH` (`MaKH`);

--
-- Chỉ mục cho bảng `cthoadon`
--
ALTER TABLE `cthoadon`
  ADD PRIMARY KEY (`MaHD`,`Mahh`),
  ADD KEY `cthoadon_ibfk_1` (`Mahh`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHD`),
  ADD KEY `MaNV` (`MaNV`),
  ADD KEY `MaKH` (`MaKH`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKH`);

--
-- Chỉ mục cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MaNV`);

--
-- Chỉ mục cho bảng `quanao`
--
ALTER TABLE `quanao`
  ADD PRIMARY KEY (`Mahh`),
  ADD KEY `ID` (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `acckhach`
--
ALTER TABLE `acckhach`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `MaHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MaKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `MaNV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `quanao`
--
ALTER TABLE `quanao`
  MODIFY `Mahh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `acckhach`
--
ALTER TABLE `acckhach`
  ADD CONSTRAINT `acckhach_ibfk_1` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`);

--
-- Các ràng buộc cho bảng `cthoadon`
--
ALTER TABLE `cthoadon`
  ADD CONSTRAINT `cthoadon_ibfk_1` FOREIGN KEY (`Mahh`) REFERENCES `quanao` (`Mahh`),
  ADD CONSTRAINT `cthoadon_ibfk_2` FOREIGN KEY (`MaHD`) REFERENCES `hoadon` (`MaHD`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_2` FOREIGN KEY (`MaNV`) REFERENCES `nhanvien` (`MaNV`),
  ADD CONSTRAINT `hoadon_ibfk_3` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`);

--
-- Các ràng buộc cho bảng `quanao`
--
ALTER TABLE `quanao`
  ADD CONSTRAINT `quanao_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `loaisp` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

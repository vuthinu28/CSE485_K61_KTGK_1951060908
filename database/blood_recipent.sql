-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 21, 2021 lúc 06:34 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `project`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blood_recipent`
--

CREATE TABLE `blood_recipent` (
  `reci_id` int(10) UNSIGNED NOT NULL,
  `reci_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reci_age` int(10) UNSIGNED DEFAULT NULL,
  `reci_bgrp` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reci_bqnty` int(20) DEFAULT NULL,
  `reci_sex` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reci_reg_date` date NOT NULL,
  `reci_phno` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blood_recipent`
--

INSERT INTO `blood_recipent` (`reci_id`, `reci_name`, `reci_age`, `reci_bgrp`, `reci_bqnty`, `reci_sex`, `reci_reg_date`, `reci_phno`) VALUES
(0, 'vũ thị nụ', 22001, 'O', 201, 'nữ', '2021-12-01', 334495434),
(1, 'Vũ Thị Nụ', 2001, 'O', 120, 'Nữ', '2021-10-20', 334495434),
(2, 'Vũ Thị Lan', 2002, 'A', 150, 'Nữ', '2021-10-19', 334558434),
(14, 'Phạm Xuân Tân', 1999, 'B', 350, 'Nam', '2021-09-25', 989183945),
(20, 'Lê Xuân Linh', 1998, 'A', 300, 'Nam', '2021-09-16', 926656565);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `blood_recipent`
--
ALTER TABLE `blood_recipent`
  ADD PRIMARY KEY (`reci_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

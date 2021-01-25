-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-12-07 22:11:22
-- 伺服器版本： 10.4.14-MariaDB
-- PHP 版本： 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `db09`
--

--
-- 資料表結構 `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `acc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pw` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表索引 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

--
-- 資料表結構 `tb1`
--

CREATE TABLE `tb1` (
  `id` int(11) UNSIGNED ZEROFILL NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表索引 `tb1`
--
ALTER TABLE `tb1`
  ADD PRIMARY KEY (`id`);
  
--
-- 使用資料表自動遞增(AUTO_INCREMENT) `tb1`
--
ALTER TABLE `tb1`
  MODIFY `id` int(11) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
  
--
-- 資料表結構 `tb2`
--

CREATE TABLE `tb2` (
  `id` int(11) UNSIGNED ZEROFILL NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text4` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表索引 `tb2`
--
ALTER TABLE `tb2`
  ADD PRIMARY KEY (`id`);
  
--
-- 使用資料表自動遞增(AUTO_INCREMENT) `tb2`
--
ALTER TABLE `tb2`
  MODIFY `id` int(11) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
  
  --
-- 資料表結構 `tb3`
--

CREATE TABLE `tb3` (
  `id` int(11) UNSIGNED ZEROFILL NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表索引 `tb3`
--
ALTER TABLE `tb3`
  ADD PRIMARY KEY (`id`);
  
--
-- 使用資料表自動遞增(AUTO_INCREMENT) `tb3`
--
ALTER TABLE `tb3`
  MODIFY `id` int(11) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
  
--
-- 資料表結構 `tb4`
--

CREATE TABLE `tb4` (
  `id` int(11) UNSIGNED ZEROFILL NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表索引 `tb4`
--
ALTER TABLE `tb4`
  ADD PRIMARY KEY (`id`);
  
--
-- 使用資料表自動遞增(AUTO_INCREMENT) `tb4`
--
ALTER TABLE `tb4`
  MODIFY `id` int(11) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
  
--
-- 資料表結構 `tb5`
--

CREATE TABLE `tb5` (
  `id` int(11) UNSIGNED ZEROFILL NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表索引 `tb5`
--
ALTER TABLE `tb5`
  ADD PRIMARY KEY (`id`);
  
--
-- 使用資料表自動遞增(AUTO_INCREMENT) `tb5`
--
ALTER TABLE `tb5`
  MODIFY `id` int(11) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
  
--
-- 資料表結構 `tb6`
--

CREATE TABLE `tb6` (
  `id` int(11) UNSIGNED ZEROFILL NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表索引 `tb6`
--
ALTER TABLE `tb6`
  ADD PRIMARY KEY (`id`);
  
--
-- 使用資料表自動遞增(AUTO_INCREMENT) `tb6`
--
ALTER TABLE `tb6`
  MODIFY `id` int(11) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;




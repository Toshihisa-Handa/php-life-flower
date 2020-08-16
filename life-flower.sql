-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:3306
-- 生成日時: 2020 年 7 月 26 日 11:58
-- サーバのバージョン： 5.7.26
-- PHP のバージョン: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `life-flower`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `flower_table`
--

CREATE TABLE `flower_table` (
  `fid` int(100) NOT NULL,
  `fname` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fmonth` int(2) DEFAULT NULL,
  `fprice` int(100) DEFAULT NULL,
  `fimg` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shopid` int(100) NOT NULL,
  `shopname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `flower_table`
--

INSERT INTO `flower_table` (`fid`, `fname`, `fmonth`, `fprice`, `fimg`, `shopid`, `shopname`, `location`, `indate`) VALUES
(4, '5', 5, 55, '20200725124139d41d8cd98f00b204e9800998ecf8427e.jpg', 0, 'はなや', '群馬県', '2020-07-25 21:41:39'),
(5, '1', 1, 11, '20200725124914d41d8cd98f00b204e9800998ecf8427e.jpg', 0, 'はなや', '群馬県', '2020-07-25 21:49:14'),
(6, '2', 2, 22, '20200725125023d41d8cd98f00b204e9800998ecf8427e.jpg', 0, 'はなや', '群馬県', '2020-07-25 21:50:23'),
(7, 'a', 1, 1111, '20200726085857d41d8cd98f00b204e9800998ecf8427e.png', 3, 'あらい', '群馬', '2020-07-26 17:58:57'),
(8, '33', 33, 33, '20200726085951d41d8cd98f00b204e9800998ecf8427e.jpg', 3, 'あらい', '群馬', '2020-07-26 17:59:51'),
(9, 'gg', 1, 112, '20200726090953d41d8cd98f00b204e9800998ecf8427e.jpg', 4, 'imai', '群馬県', '2020-07-26 18:09:53'),
(10, '66', 66, 66, '20200726091008d41d8cd98f00b204e9800998ecf8427e.jpg', 4, 'imai', '群馬県', '2020-07-26 18:10:08');

-- --------------------------------------------------------

--
-- テーブルの構造 `shops_table`
--

CREATE TABLE `shops_table` (
  `id` int(12) NOT NULL,
  `shopname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tell` int(15) NOT NULL,
  `location` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `kanri_flg` int(1) NOT NULL,
  `life_flg` int(1) NOT NULL,
  `pass` int(12) NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `shops_table`
--

INSERT INTO `shops_table` (`id`, `shopname`, `name`, `email`, `tell`, `location`, `kanri_flg`, `life_flg`, `pass`, `indate`) VALUES
(1, '花のあらい', 'a', 'ao@ao', 12345678, '群馬県', 1, 0, 0, '2020-07-25 05:29:18'),
(2, 'はなや1', '1おは', 'ao@ao1', 123456781, '群馬県1', 1, 0, 222221, '2020-07-25 13:53:22'),
(3, 'あらい', 'あらい', 'arai', 123, '群馬', 1, 0, 123, '2020-07-26 17:27:29'),
(4, 'imai', 'imai', 'imai', 123, '群馬県', 1, 0, 123, '2020-07-26 18:05:54');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `flower_table`
--
ALTER TABLE `flower_table`
  ADD PRIMARY KEY (`fid`);

--
-- テーブルのインデックス `shops_table`
--
ALTER TABLE `shops_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `flower_table`
--
ALTER TABLE `flower_table`
  MODIFY `fid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- テーブルのAUTO_INCREMENT `shops_table`
--
ALTER TABLE `shops_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

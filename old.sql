-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 09 مارس 2019 الساعة 20:05
-- إصدار الخادم: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `old`
--

-- --------------------------------------------------------

--
-- بنية الجدول `college`
--

CREATE TABLE `college` (
  `id_col` int(11) NOT NULL,
  `name_col` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `college`
--

INSERT INTO `college` (`id_col`, `name_col`, `create_at`, `updated`) VALUES
(1, 'التربيه', '2019-02-19 06:49:52', '0000-00-00 00:00:00'),
(2, 'العلوم ', '2019-02-19 06:49:52', '0000-00-00 00:00:00'),
(3, 'الخفجي', '2019-03-07 10:20:53', '0000-00-00 00:00:00'),
(4, 'الخفجي', '2019-03-07 10:21:26', '0000-00-00 00:00:00'),
(5, 'القبول و التسجيل ', '2019-03-07 21:43:25', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- بنية الجدول `date_term`
--

CREATE TABLE `date_term` (
  `id_det` int(11) NOT NULL,
  `id_stu` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `id_ter` int(11) NOT NULL,
  `datesum` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `create_by` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `date_term`
--

INSERT INTO `date_term` (`id_det`, `id_stu`, `id_ter`, `datesum`, `create_at`, `create_by`) VALUES
(36, '1111111111', 2, '9909', '2019-03-01 19:34:21', ''),
(41, '1111111111', 1, '99099', '2019-03-04 18:56:32', ''),
(42, '1111111111', 4, '999033', '2019-03-04 21:25:05', '');

-- --------------------------------------------------------

--
-- بنية الجدول `info`
--

CREATE TABLE `info` (
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `id_col` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `info`
--

INSERT INTO `info` (`email`, `name`, `id_col`, `create_at`, `update_at`) VALUES
('a@a.a', 'a', 1, '2019-02-19 06:50:17', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- بنية الجدول `majer`
--

CREATE TABLE `majer` (
  `id_m` int(11) NOT NULL,
  `id_col` int(11) NOT NULL,
  `majer_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `majer`
--

INSERT INTO `majer` (`id_m`, `id_col`, `majer_name`, `create_at`, `update_at`) VALUES
(4, 1, 'rr', '2019-02-19 08:28:43', '0000-00-00 00:00:00'),
(5, 1, 'uuuu', '2019-02-19 08:29:39', '0000-00-00 00:00:00'),
(6, 1, 'kk', '2019-02-19 08:29:54', '0000-00-00 00:00:00'),
(7, 1, 'kk', '2019-02-19 08:35:11', '0000-00-00 00:00:00'),
(8, 1, 'kk', '2019-02-19 08:36:14', '0000-00-00 00:00:00'),
(9, 1, 'kk', '2019-02-19 08:36:18', '0000-00-00 00:00:00'),
(10, 1, 'kk', '2019-02-19 08:36:21', '0000-00-00 00:00:00'),
(11, 1, 'rrr', '2019-02-19 08:36:57', '0000-00-00 00:00:00'),
(12, 1, 'sss', '2019-02-19 08:37:56', '0000-00-00 00:00:00'),
(13, 1, 'تاريخ', '2019-02-20 07:55:41', '0000-00-00 00:00:00'),
(14, 1, 'جغرافيا ', '2019-02-20 19:16:14', '0000-00-00 00:00:00'),
(15, 1, 'iii', '2019-03-03 06:22:19', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- بنية الجدول `mark`
--

CREATE TABLE `mark` (
  `id_da` int(11) NOT NULL,
  `id_gov` int(11) NOT NULL,
  `id_sub` int(11) NOT NULL,
  `mak` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `mark`
--

INSERT INTO `mark` (`id_da`, `id_gov`, `id_sub`, `mak`, `create_at`, `update_at`) VALUES
(1, 1111111111, 5, 45, '2019-02-28 23:53:41', '0000-00-00 00:00:00'),
(1, 1111111111, 13, 3, '2019-02-28 23:53:41', '0000-00-00 00:00:00'),
(1, 1111111111, 5, 443, '2019-02-28 23:59:17', '0000-00-00 00:00:00'),
(1, 1111111111, 13, 33, '2019-02-28 23:59:17', '0000-00-00 00:00:00'),
(1, 1111111111, 6, 33, '2019-03-01 00:10:32', '0000-00-00 00:00:00'),
(1, 1111111111, 14, 66, '2019-03-01 16:26:20', '0000-00-00 00:00:00'),
(1, 1111111111, 14, 90, '2019-03-01 16:28:25', '0000-00-00 00:00:00'),
(7, 1111111111, 6, 99, '2019-03-01 19:34:21', '0000-00-00 00:00:00'),
(38, 1111111111, 5, 11, '2019-03-01 21:54:40', '0000-00-00 00:00:00'),
(38, 1111111111, 13, 12, '2019-03-01 21:54:40', '0000-00-00 00:00:00'),
(39, 1111111111, 5, 2, '2019-03-04 18:54:03', '0000-00-00 00:00:00'),
(39, 1111111111, 13, 2, '2019-03-04 18:54:03', '0000-00-00 00:00:00'),
(40, 1111111111, 5, 33, '2019-03-04 18:54:09', '0000-00-00 00:00:00'),
(40, 1111111111, 13, 33, '2019-03-04 18:54:09', '0000-00-00 00:00:00'),
(41, 1111111111, 5, 2, '2019-03-04 18:56:32', '0000-00-00 00:00:00'),
(41, 1111111111, 13, 2, '2019-03-04 18:56:32', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- بنية الجدول `permission`
--

CREATE TABLE `permission` (
  `id_per` int(11) NOT NULL,
  `title` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `role`
--

INSERT INTO `role` (`role_id`, `role_name`, `create_at`, `update_at`) VALUES
(1, 'head', '2019-02-19 06:25:51', '0000-00-00 00:00:00'),
(2, 'user', '2019-02-19 06:25:51', '0000-00-00 00:00:00'),
(3, 'user 3', '2019-03-07 21:46:14', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- بنية الجدول `student`
--

CREATE TABLE `student` (
  `id_gov` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `id_col` int(11) NOT NULL,
  `id_maj` int(11) NOT NULL,
  `start` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `end` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `student`
--

INSERT INTO `student` (`id_gov`, `name`, `id_col`, `id_maj`, `start`, `end`, `create_at`, `update_at`) VALUES
('111111111', 'sssss', 1, 12, '', '', '2019-02-19 09:07:26', '0000-00-00 00:00:00'),
('1111111111', 'مها', 1, 13, '', '', '2019-02-20 07:56:23', '0000-00-00 00:00:00'),
('66666', 'iiii', 1, 8, '', '', '2019-02-19 19:04:51', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- بنية الجدول `subject`
--

CREATE TABLE `subject` (
  `id_sub` int(11) NOT NULL,
  `id_maj` int(11) NOT NULL,
  `id_trm` int(11) NOT NULL,
  `hours` int(11) NOT NULL,
  `sub_name` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `subject`
--

INSERT INTO `subject` (`id_sub`, `id_maj`, `id_trm`, `hours`, `sub_name`, `create_at`, `update_at`) VALUES
(1, 4, 1, 4, 'm', '2019-02-19 18:46:41', '0000-00-00 00:00:00'),
(2, 4, 1, 4, 'm', '2019-02-19 18:51:05', '0000-00-00 00:00:00'),
(3, 4, 4, 6, 'kk', '2019-02-19 18:51:19', '0000-00-00 00:00:00'),
(4, 4, 5, 9, 'k', '2019-02-19 18:55:01', '0000-00-00 00:00:00'),
(5, 13, 1, 0, 'تاريخ ١', '2019-02-20 07:55:56', '0000-00-00 00:00:00'),
(6, 13, 2, 0, 'تاريخ ٢', '2019-02-20 07:56:06', '0000-00-00 00:00:00'),
(10, 14, 1, 0, 'جغرافيا ٢', '2019-02-20 19:17:57', '0000-00-00 00:00:00'),
(11, 14, 1, 0, 'جغرافيا ١', '2019-02-20 19:18:12', '0000-00-00 00:00:00'),
(12, 14, 3, 0, 'جغرافيا ٣', '2019-02-20 19:18:33', '0000-00-00 00:00:00'),
(13, 13, 1, 0, 'تاريخ السعوديه ', '2019-02-20 19:18:55', '0000-00-00 00:00:00'),
(14, 13, 5, 0, 'تاريخ العالم الاسلامي ', '2019-02-20 19:19:07', '0000-00-00 00:00:00'),
(15, 13, 6, 8, 'pq', '2019-03-01 16:25:31', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- بنية الجدول `term`
--

CREATE TABLE `term` (
  `id_trm` int(11) NOT NULL,
  `name_ter` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `term`
--

INSERT INTO `term` (`id_trm`, `name_ter`, `create_at`, `update_at`) VALUES
(1, 'المستوى الاول', '2019-02-19 18:17:29', '0000-00-00 00:00:00'),
(2, 'المستوى الثاني ', '2019-02-19 18:17:29', '0000-00-00 00:00:00'),
(3, 'المستوى الثالث', '2019-02-19 18:18:14', '0000-00-00 00:00:00'),
(4, 'المستوى الرابع', '2019-02-19 18:18:14', '0000-00-00 00:00:00'),
(5, 'المستوى الخامس', '2019-02-19 18:18:40', '0000-00-00 00:00:00'),
(6, 'المستوى السادس', '2019-02-19 18:18:40', '0000-00-00 00:00:00'),
(7, 'االمستوى السابع', '2019-02-19 18:19:05', '0000-00-00 00:00:00'),
(8, 'المستوى الثامن ', '2019-02-19 18:19:05', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- بنية الجدول `user`
--

CREATE TABLE `user` (
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `permission` text COLLATE utf8_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `user`
--

INSERT INTO `user` (`email`, `password`, `role`, `permission`, `create_at`, `updated`) VALUES
('a@a.a', '123', 2, '', '2019-02-19 06:26:18', '0000-00-00 00:00:00'),
('aa@aa.m', '123', 1, '', '2019-03-07 21:37:52', '0000-00-00 00:00:00'),
('j@s.k', '123', 1, '', '2019-03-07 21:33:56', '0000-00-00 00:00:00'),
('q@qqqq.q', '123', 3, '', '2019-03-07 21:46:39', '0000-00-00 00:00:00'),
('test@t.t', '123', 2, '', '2019-03-07 21:40:01', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`id_col`);

--
-- Indexes for table `date_term`
--
ALTER TABLE `date_term`
  ADD PRIMARY KEY (`id_det`),
  ADD KEY `id_ter` (`id_ter`),
  ADD KEY `id_stu` (`id_stu`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`email`),
  ADD KEY `id_col` (`id_col`);

--
-- Indexes for table `majer`
--
ALTER TABLE `majer`
  ADD PRIMARY KEY (`id_m`),
  ADD KEY `id_col` (`id_col`);

--
-- Indexes for table `mark`
--
ALTER TABLE `mark`
  ADD KEY `id_da` (`id_da`),
  ADD KEY `id_gov` (`id_gov`),
  ADD KEY `id_sub` (`id_sub`);

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`id_per`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id_gov`),
  ADD KEY `id_col` (`id_col`),
  ADD KEY `id_maj` (`id_maj`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id_sub`),
  ADD KEY `id_maj` (`id_maj`),
  ADD KEY `id` (`id_trm`);

--
-- Indexes for table `term`
--
ALTER TABLE `term`
  ADD PRIMARY KEY (`id_trm`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`),
  ADD KEY `role` (`role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `id_col` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `date_term`
--
ALTER TABLE `date_term`
  MODIFY `id_det` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `majer`
--
ALTER TABLE `majer`
  MODIFY `id_m` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `id_per` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id_sub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `term`
--
ALTER TABLE `term`
  MODIFY `id_trm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- قيود الجداول المحفوظة
--

--
-- القيود للجدول `date_term`
--
ALTER TABLE `date_term`
  ADD CONSTRAINT `date_term_ibfk_1` FOREIGN KEY (`id_ter`) REFERENCES `term` (`id_trm`) ON UPDATE CASCADE,
  ADD CONSTRAINT `date_term_ibfk_2` FOREIGN KEY (`id_stu`) REFERENCES `student` (`id_gov`) ON UPDATE CASCADE;

--
-- القيود للجدول `info`
--
ALTER TABLE `info`
  ADD CONSTRAINT `info_ibfk_1` FOREIGN KEY (`id_col`) REFERENCES `college` (`id_col`) ON UPDATE CASCADE;

--
-- القيود للجدول `majer`
--
ALTER TABLE `majer`
  ADD CONSTRAINT `majer_ibfk_1` FOREIGN KEY (`id_col`) REFERENCES `college` (`id_col`) ON UPDATE CASCADE;

--
-- القيود للجدول `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`id_col`) REFERENCES `college` (`id_col`),
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`id_maj`) REFERENCES `majer` (`id_m`);

--
-- القيود للجدول `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `subject_ibfk_1` FOREIGN KEY (`id_maj`) REFERENCES `majer` (`id_m`) ON UPDATE CASCADE;

--
-- القيود للجدول `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role`) REFERENCES `role` (`role_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

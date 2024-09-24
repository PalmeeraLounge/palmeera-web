-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2024 at 02:06 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `palmeera`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_news`
--

CREATE TABLE `category_news` (
  `id_category` int(11) NOT NULL,
  `name_category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category_news`
--

INSERT INTO `category_news` (`id_category`, `name_category`) VALUES
(1, 'Oprational'),
(2, 'Partnership');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `description`) VALUES
(1, '66e8cd29e3514.jpg', 'PHA+UHJlbWl1bSBMb3VuZ2U8L3A+'),
(2, '66e8ef321ecb4.jpg', 'PHA+UHJlbWl1bSBMb3VuZ2U8L3A+'),
(3, '66e8ef3ef402b.jpg', 'PHA+UHJlbWl1bSBMb3VuZ2U8L3A+'),
(4, '66e8efcc21cac.jpg', 'PHA+UHJlbWl1bSBMb3VuZ2U8L3A+'),
(5, '66e8efd44ea4c.jpg', 'PHA+UHJlbWl1bSBMb3VuZ2U8L3A+');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(20) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `image`, `category`, `content`, `date`) VALUES
(23, 'Palmeera Lounge Kini Hadir dengan Fasilitas Lebih Lengkap dan Nyaman untuk Pengunjung', '', 'Operasional', 'PHA+UGFsbWVlcmEgTG91bmdlIGRlbmdhbiBiYW5nZ2EgbWVuZ3VtdW1rYW4gcGVtYmFydWFuIGxheWFuYW4gZGFuIGZhc2lsaXRhcyB5YW5nIHNlbWFraW4gbWVtYW5qYWthbiBwYXJhIHBlbmd1bmp1bmcuIE5pa21hdGkgc3Vhc2FuYSBtZXdhaCB5YW5nIHRlbmFuZywgbGVuZ2thcCBkZW5nYW4gYWtzZXMgV2lGaSBncmF0aXMsIGJlcmFnYW0gcGlsaWhhbiBtZW51IGlzdGltZXdhLCBzZXJ0YSBhcmVhIGJlcnNhbnRhaSB5YW5nIG55YW1hbi4mbmJzcDs8L3A+', '2024-09-16'),
(24, 'Bergabunglah Bersama Kami: Kemitraan Strategis dengan Palmeera Lounge', '', 'Partnership', 'UGFsbWVlcmEgTG91bmdlIG1lbWJ1a2Ega2VzZW1wYXRhbiBiYWdpIG1pdHJhIHN0cmF0ZWdpcyB5YW5nIGluZ2luIGJlcmtvbGFib3Jhc2kgZGFsYW0gbWVuY2lwdGFrYW4gcGVuZ2FsYW1hbiBsYXlhbmFuIHByZW1pdW0gYmFnaSBwZWxhbmdnYW4ga2FtaS4gQmVyc2FtYSwga2l0YSBkYXBhdCBtZW1wZXJsdWFzIGphbmdrYXVhbiwgbWVuZ2hhZGlya2FuIGlub3Zhc2ksIGRhbiBtZW1iZXJpa2FuIG5pbGFpIHRhbWJhaCB5YW5nIGJlcmtlbGFuanV0YW4uJm5ic3A7PHA+PC9wPg==', '2024-09-16');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `partnership`
--

CREATE TABLE `partnership` (
  `id` int(255) NOT NULL,
  `agency_name` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `business_type` varchar(255) NOT NULL,
  `industry_registration_type` varchar(255) NOT NULL,
  `industry_registration_number` int(255) NOT NULL,
  `contact_person` varchar(255) NOT NULL,
  `phone_number` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `registration_date` date NOT NULL,
  `company_logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'it.palmeeralounge@gmail.com', 'e52db4efe8f226a0eea3611f652212e9'),
(2, 'tes@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_news`
--
ALTER TABLE `category_news`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partnership`
--
ALTER TABLE `partnership`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_news`
--
ALTER TABLE `category_news`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `partnership`
--
ALTER TABLE `partnership`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

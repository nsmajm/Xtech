-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2019 at 10:33 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sambd`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `clientId` int(11) NOT NULL,
  `userId` varchar(50) NOT NULL,
  `phoneNumber` varchar(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`clientId`, `userId`, `phoneNumber`, `name`, `price`) VALUES
(1, 'user1', '01750638163', 'Nasim', 100),
(2, 'user2', '01752252522', 'Test', 50);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contactId` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(20) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `packageName` varchar(100) DEFAULT NULL,
  `message` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contactId`, `name`, `email`, `phone`, `subject`, `packageName`, `message`, `status`, `created_at`, `updated_at`) VALUES
(27, 'tt', 't@gmal.com', '02515', '1', 'test 3', 'test', 1, '2018-12-22 10:57:42', '2018-12-31 14:05:22'),
(28, 'test', 'test', 'test', '2', 'test 2', 'test', 1, '2018-12-22 12:22:03', '2018-12-26 11:30:23'),
(29, 'atiq', 'djatiq31416@gmail.com', '01521454684', '1', 'test 6', 'ukjghk', 1, '2018-12-23 04:08:37', '2018-12-26 11:30:15'),
(30, 'Nasim', 'nsmajm@gmail.com', '01750638163', '2', 'test 2', 'Wow', 1, '2018-12-31 14:12:04', '2018-12-31 14:12:19');

-- --------------------------------------------------------

--
-- Table structure for table `maps`
--

CREATE TABLE `maps` (
  `mapId` int(11) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `langitude` varchar(100) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_status` varchar(100) NOT NULL,
  `currency` varchar(100) NOT NULL,
  `grand_total` varchar(100) NOT NULL,
  `phoneNumber` varchar(20) DEFAULT NULL,
  `userId` varchar(50) NOT NULL,
  `PaymentDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_status`, `currency`, `grand_total`, `phoneNumber`, `userId`, `PaymentDate`) VALUES
(24, 'Processing', 'BDT', '100', '01750638163', 'user1', '2019-01-02'),
(25, 'Failed', 'BDT', '100', '01750638163', 'user1', '2019-01-06');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `packageId` int(11) NOT NULL,
  `packageName` varchar(100) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `speed` varchar(100) DEFAULT NULL,
  `packageType` int(11) DEFAULT NULL,
  `normalSpeed` varchar(100) DEFAULT NULL,
  `youtubeSpeed` varchar(100) DEFAULT NULL,
  `ftpSpeed` varchar(100) DEFAULT NULL,
  `liveTv` varchar(100) DEFAULT NULL,
  `localSpeed` varchar(100) DEFAULT NULL,
  `realIp` tinyint(1) NOT NULL,
  `homepage` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`packageId`, `packageName`, `price`, `speed`, `packageType`, `normalSpeed`, `youtubeSpeed`, `ftpSpeed`, `liveTv`, `localSpeed`, `realIp`, `homepage`, `created_at`, `updated_at`) VALUES
(27, 'Package-1', 700, '10mb', 1, '4mb', '100mb', '100mb', '7 Channel', 'BDIX, JagoBD', 0, 0, '2019-02-11 08:17:44', '2019-02-11 02:17:44'),
(28, 'Package-2', 800, '20mb', 1, '8mb', '100mb', '100mb', '7 Channels', 'BDIX, JagoBD', 0, 0, '2019-02-11 08:10:53', '2019-02-11 02:10:53'),
(29, 'Package-3', 1000, '30mb', 1, '12mb', '100mb', '100mb', '7 Channels', 'BDIX, JagoBD', 0, 1, '2019-02-11 08:17:55', '2019-02-11 02:17:55'),
(30, 'Package-4', 1200, '40mb', 1, '14mb', '100mb', '100mb', '7 Channels', 'BDIX, JagoBD', 0, 1, '2019-02-11 08:17:58', '2019-02-11 02:17:58'),
(31, 'Package 5', 1500, '50mb', 1, '18mb', '100mb', '100mb', '7 Channels', 'BDIX, FTP', 0, 1, '2019-02-11 08:18:02', '2019-02-11 02:18:02'),
(32, 'Package 6', 2000, '60mb', 1, '25mb', '100mb', '100mb', '7 Channel', 'BDIX, Youtube, Facebook', 0, 1, '2019-02-11 08:18:04', '2019-02-11 02:18:04'),
(33, 'Package 7', 2500, '100mb', 1, '30mb', '100mb', '100mb', '7 Channel', 'BDIX, Youtube, Facebook', 0, 0, '2019-02-11 08:13:04', '2019-02-11 02:13:04');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `sliderId` int(11) NOT NULL,
  `imagePath` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`sliderId`, `imagePath`, `status`) VALUES
(8, '1-2358.jpg', 1),
(9, '1-7607.jpg', 1),
(10, '1-2702.jpg', 1),
(11, '1-3073.jpg', 1),
(12, '1-8942.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Xbit Studio', 'wecare@xbit.com.bd', '$2y$10$t1kq5EVI9bsE/./zs16glezwWtHDBqpikIqbpL2pWcvTF56FQ/zZe', 'htoK2qk28RnP4Fk7bWXQ1g0X2rZGNI2bliZohkQujzWY2HBueS6sZZQvu84H', '2018-12-14 12:16:55', '2018-12-14 12:16:55'),
(2, 'Salam', 'salam@sambd.net', '$2y$10$uHFFLIfjzKmDGSZLb0WfOe/Q7X8SoyAelUiaReIH3hR3AUhRxABj6', 'ysY1rOZKkHBWyjlXBr9lx5pFmMdiQkarzeHUzhVOu0p2athGGtIdDBSWNR4q', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`clientId`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contactId`);

--
-- Indexes for table `maps`
--
ALTER TABLE `maps`
  ADD PRIMARY KEY (`mapId`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD UNIQUE KEY `order_id` (`order_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`packageId`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`sliderId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `clientId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contactId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `maps`
--
ALTER TABLE `maps`
  MODIFY `mapId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `packageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `sliderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

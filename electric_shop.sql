-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2024 at 10:30 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electric_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `cartId` int(11) NOT NULL,
  `product` varchar(250) DEFAULT NULL,
  `price` int(5) DEFAULT NULL,
  `quatity` int(5) DEFAULT NULL,
  `cartStatus` varchar(250) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `productId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerId` int(11) NOT NULL,
  `customerName` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `pass` varchar(250) DEFAULT NULL,
  `phone` varchar(250) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `role` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerId`, `customerName`, `email`, `pass`, `phone`, `address`, `role`) VALUES
(1, 'Ahmed Elmasry', 'www.ahmed@gmail.com', '12345', '01064907346', 'Cairo', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `emailId` int(11) NOT NULL,
  `email` varchar(250) DEFAULT NULL,
  `subject` varchar(250) DEFAULT NULL,
  `message` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`emailId`, `email`, `subject`, `message`) VALUES
(2, 'www.ahmed@gmail.com', 'Subject 1', 'This is subject 1');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productId` int(11) NOT NULL,
  `productName` varchar(250) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `price` int(5) DEFAULT NULL,
  `descraption` varchar(250) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `productDate` varchar(200) DEFAULT NULL,
  `productLeft` varchar(250) DEFAULT NULL,
  `author` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productId`, `productName`, `title`, `price`, `descraption`, `image`, `productDate`, `productLeft`, `author`) VALUES
(1, 'MOBILE', 'I PHONE 12', 15000, '     It is apple usa company with water resistance ...', '../uploads_files/iphone12.jpg', '12-12-2015', NULL, 'bhabishya'),
(2, 'KEYBOARD', 'LOKIA', 25000, 'It is a cheap backlit gaming keyboard with 120keys ...', '../uploads_files/lokia.png', '14-10-2020', NULL, 'bhabishya'),
(3, 'MOUSA', 'L 12 TRI', 15000, '   Mouse of tri-lateral button, having 3500dpi with anti-slip  technology.', '../uploads_files/l12tri.jpg', '12-2-2016', NULL, 'bhabishya'),
(4, 'LAPTOP', 'HB INTEL 11', 15000, '   Mouse of tri-lateral button, having 3500dpi with anti-slip  technology.', '../uploads_files/hbinteil11.jpg', '2-5-2019', NULL, 'bhabishya'),
(5, 'LAPTOP', 'HR 77GT INIEL I5', 25000, ' It has 4gb ram with 256gb ssd and having 3gb HUD ...', '../uploads_files/HR77GTINIELI5.jpg', '10-5-2020', NULL, 'bhabishya'),
(6, 'KEYBOARD', 'GEFORE KEYBOARD', 15000, 'Gaming keyboard and has backlit with water resistence features along and suspension...', '../uploads_files/GEFOREKEYBOARD.jpg', '5-12-2015', NULL, 'bhabishya'),
(7, 'MOBILE', 'I PHONE 12', 15000, '     It is apple usa company with water resistance ...', '../uploads_files/iphone12.jpg', '12-12-2015', NULL, 'bhabishya'),
(8, 'KEYBOARD', 'LOKIA', 25000, 'It is a cheap backlit gaming keyboard with 120keys ...', '../uploads_files/lokia.png', '14-10-2020', NULL, 'bhabishya'),
(9, 'MOUSA', 'L 12 TRI', 15000, '   Mouse of tri-lateral button, having 3500dpi with anti-slip  technology.', '../uploads_files/l12tri.jpg', '12-2-2016', NULL, 'bhabishya'),
(10, 'LAPTOP', 'HB INTEL 11', 15000, '   Mouse of tri-lateral button, having 3500dpi with anti-slip  technology.', '../uploads_files/hbinteil11.jpg', '2-5-2019', NULL, 'bhabishya'),
(11, 'LAPTOP', 'HR 77GT INIEL I5', 25000, ' It has 4gb ram with 256gb ssd and having 3gb HUD ...', '../uploads_files/HR77GTINIELI5.jpg', '10-5-2020', NULL, 'bhabishya'),
(12, 'KEYBOARD', 'GEFORE KEYBOARD', 15000, 'Gaming keyboard and has backlit with water resistence features along and suspension...', '../uploads_files/GEFOREKEYBOARD.jpg', '5-12-2015', NULL, 'bhabishya'),
(13, 'MOUSA', 'L 12 TRI', 15000, '   Mouse of tri-lateral button, having 3500dpi with anti-slip  technology.', '../uploads_files/l12tri.jpg', '12-2-2016', NULL, 'bhabishya'),
(14, 'LAPTOP', 'HB INTEL 11', 15000, '   Mouse of tri-lateral button, having 3500dpi with anti-slip  technology.', '../uploads_files/hbinteil11.jpg', '2-5-2019', NULL, 'bhabishya'),
(15, 'LAPTOP', 'HR 77GT INIEL I5', 25000, ' It has 4gb ram with 256gb ssd and having 3gb HUD ...', '../uploads_files/HR77GTINIELI5.jpg', '10-5-2020', NULL, 'bhabishya'),
(16, 'KEYBOARD', 'GEFORE KEYBOARD', 15000, 'Gaming keyboard and has backlit with water resistence features along and suspension...', '../uploads_files/GEFOREKEYBOARD.jpg', '5-12-2015', NULL, 'bhabishya'),
(17, 'MOBILE', 'I PHONE 12', 15000, '     It is apple usa company with water resistance ...', '../uploads_files/iphone12.jpg', '12-12-2015', NULL, 'bhabishya'),
(18, 'MOBILE', 'I PHONE 12', 15000, '     It is apple usa company with water resistance ...', '../uploads_files/iphone12.jpg', '12-12-2015', NULL, 'bhabishya'),
(19, 'KEYBOARD', 'LOKIA', 25000, 'It is a cheap backlit gaming keyboard with 120keys ...', '../uploads_files/lokia.png', '14-10-2020', NULL, 'bhabishya'),
(20, 'KEYBOARD', 'LOKIA', 25000, 'It is a cheap backlit gaming keyboard with 120keys ...', '../uploads_files/lokia.png', '14-10-2020', NULL, 'bhabishya');

-- --------------------------------------------------------

--
-- Table structure for table `repairs`
--

CREATE TABLE `repairs` (
  `repairId` int(11) NOT NULL,
  `catogary` varchar(250) DEFAULT NULL,
  `damageType` varchar(250) DEFAULT NULL,
  `uuid` varchar(250) DEFAULT NULL,
  `advancedAmt` varchar(250) DEFAULT NULL,
  `due` varchar(250) DEFAULT NULL,
  `repairStatus` varchar(250) DEFAULT NULL,
  `bookedDate` date DEFAULT NULL,
  `returnDate` date DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `productId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `servicesstatus`
--

CREATE TABLE `servicesstatus` (
  `serviceId` int(11) NOT NULL,
  `discount` int(5) DEFAULT NULL,
  `status` varchar(250) DEFAULT NULL,
  `uuid` varchar(250) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `productId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `settingId` int(11) NOT NULL,
  `websiteName` varchar(250) DEFAULT NULL,
  `websiteLogo` varchar(250) DEFAULT NULL,
  `websitFooter` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `soldproducts`
--

CREATE TABLE `soldproducts` (
  `soldId` int(11) NOT NULL,
  `quatity` int(5) DEFAULT NULL,
  `price` int(5) DEFAULT NULL,
  `soldDate` date DEFAULT NULL,
  `soldStatus` varchar(250) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `productId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`cartId`),
  ADD KEY `carts_emails` (`userId`),
  ADD KEY `carts_products` (`productId`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerId`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`emailId`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productId`);

--
-- Indexes for table `repairs`
--
ALTER TABLE `repairs`
  ADD PRIMARY KEY (`repairId`),
  ADD KEY `repairs_emails` (`userId`),
  ADD KEY `repairs_products` (`productId`);

--
-- Indexes for table `servicesstatus`
--
ALTER TABLE `servicesstatus`
  ADD PRIMARY KEY (`serviceId`),
  ADD KEY `servicesStatus_emails` (`userId`),
  ADD KEY `servicesStatus_products` (`productId`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`settingId`);

--
-- Indexes for table `soldproducts`
--
ALTER TABLE `soldproducts`
  ADD PRIMARY KEY (`soldId`),
  ADD KEY `soldProducts_emails` (`userId`),
  ADD KEY `soldProducts_products` (`productId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `cartId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `emailId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `repairs`
--
ALTER TABLE `repairs`
  MODIFY `repairId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `servicesstatus`
--
ALTER TABLE `servicesstatus`
  MODIFY `serviceId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `settingId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `soldproducts`
--
ALTER TABLE `soldproducts`
  MODIFY `soldId` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_emails` FOREIGN KEY (`userId`) REFERENCES `emails` (`emailId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `carts_products` FOREIGN KEY (`productId`) REFERENCES `products` (`productId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `repairs`
--
ALTER TABLE `repairs`
  ADD CONSTRAINT `repairs_emails` FOREIGN KEY (`userId`) REFERENCES `emails` (`emailId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `repairs_products` FOREIGN KEY (`productId`) REFERENCES `products` (`productId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `servicesstatus`
--
ALTER TABLE `servicesstatus`
  ADD CONSTRAINT `servicesStatus_emails` FOREIGN KEY (`userId`) REFERENCES `emails` (`emailId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `servicesStatus_products` FOREIGN KEY (`productId`) REFERENCES `products` (`productId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `soldproducts`
--
ALTER TABLE `soldproducts`
  ADD CONSTRAINT `soldProducts_emails` FOREIGN KEY (`userId`) REFERENCES `emails` (`emailId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `soldProducts_products` FOREIGN KEY (`productId`) REFERENCES `products` (`productId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2021 at 01:17 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bossbburgers`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `EMP_ID` varchar(100) NOT NULL,
  `EMP_FNAME` varchar(100) NOT NULL,
  `EMP_LNAME` varchar(100) NOT NULL,
  `EMP_MI` char(60) NOT NULL,
  `EMP_CONTACTNUM` int(11) NOT NULL,
  `POSITION` varchar(100) NOT NULL,
  `EMP_UNAME` varchar(100) NOT NULL,
  `EMP_PASS` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`EMP_ID`, `EMP_FNAME`, `EMP_LNAME`, `EMP_MI`, `EMP_CONTACTNUM`, `POSITION`, `EMP_UNAME`, `EMP_PASS`) VALUES
('1', 'ran', 'roxas', 'x', 123123123, 'admin', 'rroxas', 'rroxas123');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `C_ID` int(60) NOT NULL,
  `C_FNAME` varchar(100) NOT NULL,
  `C_MID` varchar(60) NOT NULL,
  `C_LNAME` varchar(100) NOT NULL,
  `C_CONTACTNUM` int(11) NOT NULL,
  `EMAILADD` varchar(100) NOT NULL,
  `ADDRESS` varchar(100) NOT NULL,
  `C_UNAME` varchar(100) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`C_ID`, `C_FNAME`, `C_MID`, `C_LNAME`, `C_CONTACTNUM`, `EMAILADD`, `ADDRESS`, `C_UNAME`, `PASSWORD`) VALUES
(1, 'albert', 'r', 'rufino', 912345678, 'ewfsfsfcs@gmail.com', 'dfdvcx', 'user1', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `PROD_ID` varchar(100) NOT NULL,
  `IMAGE` varchar(60) NOT NULL,
  `PROD_NAME` varchar(100) NOT NULL,
  `AVAILABILITY` varchar(20) NOT NULL,
  `PRICE` int(11) NOT NULL,
  `CATEGORY` char(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`PROD_ID`, `IMAGE`, `PROD_NAME`, `AVAILABILITY`, `PRICE`, `CATEGORY`) VALUES
('ble Patty618d17eccaf22', 'burger.jpg', 'Double Patty', 'Available', 130, 'Burgers'),
('ese burger618e1aa3bb10f', 'burger.jpg', 'cheese burger', 'Available', 150, 'Burgers'),
('ium Burger618d1704e8880', 'burger.jpg', 'Medium Burger', 'Available', 200, 'Burgers'),
('nt burger618e24a86b1b2', 'burger.jpg', 'Giant burger', 'Available', 190, 'Burgers'),
('ular Burger61868e0432374', 'burger.jpg', 'Regular Burger', 'Available', 75, 'Burgers');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `ID` int(11) NOT NULL,
  `ORDER_ID` varchar(100) NOT NULL,
  `C_ID` int(100) NOT NULL,
  `PROD_ID` varchar(100) NOT NULL,
  `QTY` int(11) NOT NULL,
  `PRICE` int(11) NOT NULL,
  `SUB_TOTAL` int(11) NOT NULL,
  `CATEGORY` varchar(100) NOT NULL,
  `TRANSDATE` varchar(100) NOT NULL,
  `STATUS` varchar(100) NOT NULL,
  `PROCESSBY` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`EMP_ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`C_ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`PROD_ID`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `C_ID` (`C_ID`),
  ADD KEY `PROD_ID` (`PROD_ID`),
  ADD KEY `PROCESSBY` (`PROCESSBY`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `C_ID` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_ibfk_2` FOREIGN KEY (`PROD_ID`) REFERENCES `products` (`PROD_ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `sales_ibfk_3` FOREIGN KEY (`PROCESSBY`) REFERENCES `admin` (`EMP_ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `sales_ibfk_4` FOREIGN KEY (`C_ID`) REFERENCES `customer` (`C_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

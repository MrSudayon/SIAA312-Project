-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2022 at 04:02 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `audit_log`
--

CREATE TABLE `audit_log` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `position` varchar(60) NOT NULL,
  `action` varchar(200) NOT NULL,
  `timedate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audit_log`
--

INSERT INTO `audit_log` (`id`, `name`, `position`, `action`, `timedate`) VALUES
(1, 'kiko', 'EMPLOYEE', 'LOGIN IN SYSTEM AT', '0000-00-00 00:00:00'),
(2, 'kiko', 'EMPLOYEE', 'LOGIN IN SYSTEM AT', '0000-00-00 00:00:00'),
(3, 'kiko', 'EMPLOYEE', 'LOGIN IN SYSTEM AT', '0000-00-00 00:00:00'),
(4, 'kiko', 'EMPLOYEE', 'LOGIN IN SYSTEM AT', '0000-00-00 00:00:00'),
(5, 'kiko', 'EMPLOYEE', 'LOGIN IN SYSTEM AT', '2022-06-06 13:50:46'),
(6, 'fernando', 'admin', 'LOGIN IN SYSTEM AT', '2022-06-06 13:51:45'),
(7, 'fernando', 'customer', 'LOGIN IN SYSTEM AT', '2022-06-06 13:52:51'),
(8, '', '', 'LOGGED OUT IN SYSTEM AT', '2022-06-06 13:53:37'),
(9, 'fernando', 'customer', 'LOGIN IN SYSTEM AT', '2022-06-06 13:55:00'),
(10, '', '', 'LOGGED OUT IN SYSTEM AT', '2022-06-06 13:55:03'),
(11, 'fernando', 'customer', 'LOGIN IN SYSTEM AT', '2022-06-06 13:55:30'),
(12, '1', '', 'LOGGED OUT IN SYSTEM AT', '2022-06-06 13:59:47'),
(13, 'fernando', 'customer', 'LOGIN IN SYSTEM AT', '2022-06-06 14:00:59'),
(14, '', '', 'LOGGED OUT IN SYSTEM AT', '2022-06-06 14:01:00'),
(15, 'kiko', 'EMPLOYEE', 'LOGIN IN SYSTEM AT', '2022-06-06 14:01:57'),
(16, 'kiko', 'EMPLOYEE', 'LOGGED OUT IN SYSTEM AT', '2022-06-06 14:02:01');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `ID` int(11) NOT NULL,
  `C_ID` int(11) NOT NULL,
  `PROD_ID` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `date_added` varchar(100) NOT NULL,
  `mop` varchar(60) NOT NULL,
  `status` varchar(100) NOT NULL,
  `ordercode` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `Cust_Notes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`ID`, `C_ID`, `PROD_ID`, `qty`, `total`, `date_added`, `mop`, `status`, `ordercode`, `price`, `Cust_Notes`) VALUES
(57, 2, 'Giant burger', 1, '255.00', '2022-01-07', '0', 'declined', '202201078755', 255, ''),
(58, 2, 'Giant burger', 1, '255.00', '2022-01-07', '0', 'declined', '202201073189', 255, ''),
(59, 2, 'Spicy Buffalo Wings', 1, '120.00', '2022-01-07', '0', 'declined', '202201073189', 120, ''),
(60, 2, 'Spaghetti', 1, '185.00', '2022-01-07', '0', 'declined', '202201073189', 185, ''),
(61, 2, 'Reg buffalo wings', 1, '200.00', '2022-01-07', '0', 'declined', '202201077430', 200, ''),
(62, 2, 'Giant burger', 1, '255.00', '2022-01-07', '0', 'declined', '202201077430', 255, ''),
(63, 2, 'Iced tea', 1, '20.00', '2022-01-07', '0', 'declined', '202201077430', 20, ''),
(64, 1, 'Bulwawo masalap', 1, '140.00', '2022-01-07', '0', 'Completed', '202201077452', 140, ''),
(65, 2, 'Spicy Buffalo Wings', 1, '120.00', '2022-01-07', '0', 'Completed', '202201075271', 120, ''),
(66, 2, 'Iced tea', 1, '20.00', '2022-01-07', '0', 'Completed', '202201075271', 20, ''),
(77, 2, 'Giant burger', 3, '765.00', '2022-01-09', '0', 'Completed', '202201097037', 255, ''),
(78, 2, 'Iced tea', 1, '20.00', '2022-01-09', '0', 'Completed', '202201097037', 20, ''),
(79, 2, 'Spaghetti', 1, '185.00', '2022-01-09', '0', 'Completed', '202201099904', 185, ''),
(80, 2, 'Giant burger', 20, '5100.00', '2022-01-09', '0', 'Completed', '202201099273', 255, ''),
(81, 2, 'Bulwawo masalap', 1, '140.00', '2022-01-09', '0', 'Completed', '202201093841', 140, ''),
(82, 2, 'Giant burger', 5, '1275.00', '2022-01-09', '0', 'Completed', '202201097956', 255, ''),
(83, 2, 'Spicy Buffalo Wings', 1, '120.00', '2022-01-09', '0', 'Completed', '202201097956', 120, ''),
(86, 2, 'Spicy Buffalo Wings', 1, '120.00', '2022-01-09', '0', 'Completed', '202201092801', 120, ''),
(87, 2, 'Iced Tea p4', 4, '300.00', '2022-01-09', '0', 'Completed', '202201092801', 75, ''),
(88, 2, 'pasta', 1, '300.00', '2022-01-09', '0', 'Completed', '202201092801', 300, ''),
(89, 2, 'Bulwawo masalap', 1, '140.00', '2022-01-09', '0', 'Completed', '202201092801', 140, ''),
(90, 1003, 'Bacon Mushroom Melt', 1, '120.00', '2022-01-10', '0', 'Completed', '202201109081', 120, ''),
(91, 1005, 'Bake Mac', 2, '420.00', '2022-01-10', 'GCash Payment', 'declined', '20220511227 ', 90, ''),
(92, 1003, 'Pansit Malabon', 1, '120.00', '2022-01-10', '0', 'Completed', '202201106074', 120, ''),
(93, 1003, 'Bake Mac', 1, '90.00', '2022-01-10', '0', 'Completed', '202201104804', 90, ''),
(94, 1003, 'Pansit Malabon', 2, '240.00', '2022-01-10', '0', 'Completed', '202201104804', 120, ''),
(95, 1003, 'Bake Mac', 1, '90.00', '2022-01-10', '0', 'Pending', '', 90, ''),
(96, 1003, 'Pork Asado', 1, '40.00', '2022-01-10', '0', 'Pending', '', 40, ''),
(97, 1003, 'Fish Fillet', 1, '135.00', '2022-01-10', '0', 'Pending', '', 135, ''),
(98, 1003, 'Big Boss', 1, '240.00', '2022-01-10', '0', 'Pending', '', 240, ''),
(99, 1005, 'Big Boss', 2, '420.00', '2022-02-15', 'GCash Payment', 'declined', '20220511227 ', 240, ''),
(100, 1005, 'Bake Mac', 2, '420.00', '2022-02-15', 'GCash Payment', 'declined', '20220511227 ', 90, ''),
(101, 1005, 'Big Boss', 2, '420.00', '2022-02-15', 'GCash Payment', 'declined', '20220511227 ', 240, ''),
(102, 1005, 'Big Boss', 2, '420.00', '2022-02-18', 'GCash Payment', 'declined', '20220511227 ', 240, ''),
(103, 1005, 'Burger Steak', 2, '420.00', '2022-02-18', 'GCash Payment', 'declined', '20220511227 ', 140, ''),
(104, 1005, 'Bake Mac', 2, '420.00', '2022-02-18', 'GCash Payment', 'declined', '20220511227 ', 90, ''),
(105, 1005, 'Bake Mac', 2, '420.00', '2022-02-18', 'GCash Payment', 'declined', '20220511227 ', 90, ''),
(106, 1005, 'Bake Mac', 2, '420.00', '2022-02-18', 'GCash Payment', 'declined', '20220511227 ', 90, ''),
(107, 1005, 'Fish Fillet', 2, '420.00', '2022-02-18', 'GCash Payment', 'declined', '20220511227 ', 135, ''),
(108, 1005, 'Bake Mac', 2, '420.00', '2022-02-18', 'GCash Payment', 'declined', '20220511227 ', 90, ''),
(109, 1005, 'Pork Asado', 2, '420.00', '2022-02-18', 'GCash Payment', 'declined', '20220511227 ', 40, ''),
(110, 1005, 'Burger Steak', 2, '420.00', '2022-02-18', 'GCash Payment', 'declined', '20220511227 ', 140, ''),
(111, 1005, 'Big Boss', 2, '420.00', '2022-02-22', 'GCash Payment', 'declined', '20220511227 ', 240, ''),
(112, 1005, 'Big Boss', 2, '420.00', '2022-02-22', 'GCash Payment', 'declined', '20220511227 ', 240, ''),
(113, 1005, 'Bake Mac', 2, '420.00', '2022-02-22', 'GCash Payment', 'declined', '20220511227 ', 90, ''),
(114, 1005, 'Fish Fillet', 2, '420.00', '2022-02-22', 'GCash Payment', 'declined', '20220511227 ', 135, ''),
(115, 1005, 'Pork Asado', 2, '420.00', '2022-02-22', 'GCash Payment', 'declined', '20220511227 ', 40, ''),
(116, 1005, 'Bake Mac', 2, '420.00', '2022-02-22', 'GCash Payment', 'declined', '20220511227 ', 90, ''),
(121, 1005, 'Big Boss', 1, '420.00', '2022-02-22', 'GCash Payment', 'declined', '20220511227 ', 240, ''),
(122, 1005, 'Bake Mac', 1, '420.00', '2022-02-22', 'GCash Payment', 'declined', '20220511227 ', 90, ''),
(123, 1005, 'Big Boss', 1, '420.00', '2022-02-22', 'GCash Payment', 'declined', '20220511227 ', 240, ''),
(124, 1005, 'Bake Mac', 1, '420.00', '2022-02-22', 'GCash Payment', 'declined', '20220511227 ', 90, ''),
(125, 1005, 'Burger Steak', 1, '420.00', '2022-02-22', 'GCash Payment', 'declined', '20220511227 ', 140, ''),
(126, 1005, 'Fish Fillet', 1, '420.00', '2022-02-22', 'GCash Payment', 'declined', '20220511227 ', 135, ''),
(127, 1005, 'Pork Asado', 1, '420.00', '2022-02-22', 'GCash Payment', 'declined', '20220511227 ', 40, ''),
(128, 1005, 'Big Boss', 1, '420.00', '2022-02-22', 'GCash Payment', 'declined', '20220511227 ', 240, ''),
(129, 1005, 'Bake Mac', 1, '420.00', '2022-02-22', 'GCash Payment', 'declined', '20220511227 ', 90, ''),
(130, 1005, 'Big Boss', 1, '420.00', '2022-02-22', 'GCash Payment', 'declined', '20220511227 ', 240, ''),
(131, 1005, 'Big Boss', 1, '420.00', '2022-02-22', 'GCash Payment', 'declined', '20220511227 ', 240, ''),
(132, 1005, 'Bake Mac', 1, '420.00', '2022-02-22', 'GCash Payment', 'declined', '20220511227 ', 90, ''),
(133, 1005, 'Pork Asado', 1, '420.00', '2022-02-22', 'GCash Payment', 'declined', '20220511227 ', 40, ''),
(134, 1005, 'Pansit Malabon', 1, '420.00', '2022-02-22', 'GCash Payment', 'declined', '20220511227 ', 120, ''),
(135, 1005, 'Bake Mac', 2, '420.00', '2022-02-22', 'GCash Payment', 'declined', '20220511227 ', 90, ''),
(136, 1005, 'Fish Fillet', 1, '420.00', '2022-02-22', 'GCash Payment', 'declined', '20220511227 ', 135, ''),
(137, 1005, 'Big Boss', 1, '420.00', '2022-02-22', 'GCash Payment', 'declined', '20220511227 ', 240, ''),
(138, 1005, 'Fish Fillet', 1, '420.00', '2022-02-22', 'GCash Payment', 'declined', '20220511227 ', 135, ''),
(139, 1005, 'Pansit Malabon', 1, '420.00', '2022-02-22', 'GCash Payment', 'declined', '20220511227 ', 120, ''),
(142, 1005, 'Big Boss', 2, '420.00', '2022-02-23', 'GCash Payment', 'declined', '20220511227 ', 240, ''),
(143, 1005, 'Pork Asado', 1, '420.00', '2022-02-23', 'GCash Payment', 'declined', '20220511227 ', 40, ''),
(144, 1005, 'Bake Mac', 3, '420.00', '2022-02-28', 'GCash Payment', 'declined', '20220511227 ', 90, ''),
(145, 1005, 'Big Boss', 1, '420.00', '2022-03-24', 'GCash Payment', 'declined', '20220511227 ', 240, ''),
(146, 1005, 'Bake Mac', 1, '420.00', '2022-03-24', 'GCash Payment', 'declined', '20220511227 ', 90, ''),
(147, 1005, 'Burger Steak', 1, '420.00', '2022-03-24', 'GCash Payment', 'declined', '20220511227 ', 140, ''),
(148, 1005, 'Big Boss', 2, '420.00', '2022-03-24', 'GCash Payment', 'declined', '20220511227 ', 240, ''),
(149, 1005, 'Pork Asado', 3, '420.00', '2022-03-24', 'GCash Payment', 'declined', '20220511227 ', 40, ''),
(150, 1005, 'Bake Mac', 1, '420.00', '2022-03-24', 'GCash Payment', 'declined', '20220511227 ', 90, ''),
(151, 1005, 'Burger Steak', 1, '420.00', '2022-04-02', 'GCash Payment', 'declined', '20220511227 ', 140, ''),
(153, 1005, 'Pork Asado', 5, '420.00', '2022-04-02', 'GCash Payment', 'declined', '20220511227 ', 40, ''),
(154, 1005, 'Bake Mac', 1, '420.00', '2022-04-02', 'GCash Payment', 'declined', '20220511227 ', 90, ''),
(155, 1005, 'Burger Steak', 3, '420.00', '2022-04-02', 'GCash Payment', 'declined', '20220511227 ', 140, ''),
(156, 1005, 'Fish Fillet', 2, '420.00', '2022-04-02', 'GCash Payment', 'declined', '20220511227 ', 135, ''),
(157, 1005, 'Big Boss', 1, '420.00', '2022-04-02', 'GCash Payment', 'declined', '20220511227 ', 240, ''),
(158, 1005, 'Fish Fillet', 1, '420.00', '2022-04-02', 'GCash Payment', 'declined', '20220511227 ', 135, ''),
(159, 1005, 'Big Boss', 4, '420.00', '2022-04-02', 'GCash Payment', 'declined', '20220511227 ', 240, ''),
(160, 1005, 'Big Boss', 1, '420.00', '2022-04-06', 'GCash Payment', 'declined', '20220511227 ', 240, ''),
(161, 1005, 'Big Boss', 1, '420.00', '2022-04-06', 'GCash Payment', 'declined', '20220511227 ', 240, ''),
(162, 1005, 'Bake Mac', 1, '420.00', '2022-04-06', 'GCash Payment', 'declined', '20220511227 ', 90, ''),
(164, 1005, 'Pansit Malabon', 2, '420.00', '2022-04-06', 'GCash Payment', 'declined', '20220511227 ', 120, ''),
(165, 1005, 'Burger Steak', 4, '420.00', '2022-04-06', 'GCash Payment', 'declined', '20220511227 ', 140, ''),
(166, 1005, 'Bake Mac', 1, '420.00', '2022-04-08', 'GCash Payment', 'declined', '20220511227 ', 90, ''),
(167, 1005, 'Burger Steak', 1, '420.00', '2022-04-08', 'GCash Payment', 'declined', '20220511227 ', 140, ''),
(168, 1005, 'Pork Asado', 5, '420.00', '2022-04-15', 'GCash Payment', 'declined', '20220511227 ', 40, ''),
(169, 1005, 'Bake Mac', 1, '420.00', '2022-04-17', 'GCash Payment', 'declined', '20220511227 ', 90, ''),
(170, 1005, 'Big Boss', 4, '420.00', '2022-04-18', 'GCash Payment', 'declined', '20220511227 ', 240, ''),
(171, 1005, 'Burger Steak', 3, '420.00', '2022-04-18', 'GCash Payment', 'declined', '20220511227 ', 140, ''),
(172, 1005, 'Bake Mac', 4, '360.00', '2022-04-18', 'GCash Payment', 'declined', '20220511227 ', 90, ''),
(173, 1005, 'Bake Mac', 1, '90.00', '2022-04-18', 'GCash Payment', 'declined', '20220511227 ', 90, ''),
(174, 1005, 'Fish Fillet', 1, '135.00', '2022-04-18', 'GCash Payment', 'declined', '20220511227 ', 135, ''),
(175, 1005, 'Fish Fillet', 1, '275.00', '2022-04-18', 'GCash Payment', 'declined', '20220511227 ', 135, ''),
(176, 1005, 'Burger Steak', 1, '275.00', '2022-04-18', 'GCash Payment', 'declined', '20220511227 ', 140, ''),
(178, 1005, 'Burger Steak', 1, '0.00', '2022-04-29', 'GCash Payment', 'declined', '20220511227 ', 140, ''),
(179, 1005, 'Bake Mac', 1, '0.00', '2022-04-29', 'GCash Payment', 'declined', '20220511227 ', 90, ''),
(180, 1005, 'Bake Mac', 1, '0.00', '2022-04-29', 'GCash Payment', 'declined', '20220511227 ', 90, ''),
(181, 1005, 'Fish Fillet', 1, '0.00', '2022-04-29', 'GCash Payment', 'declined', '20220511227 ', 135, ''),
(182, 1005, 'Bake Mac', 1, '0.00', '2022-04-29', 'GCash Payment', 'declined', '20220511227 ', 90, ''),
(183, 1005, 'Pork Asado', 1, '0.00', '2022-04-29', 'GCash Payment', 'declined', '20220511227 ', 40, ''),
(184, 1005, 'Bake Mac', 1, '0.00', '2022-04-29', 'GCash Payment', 'declined', '20220511227 ', 90, ''),
(185, 1005, 'Burger Steak', 3, '0.00', '2022-04-29', 'GCash Payment', 'declined', '20220511227 ', 140, ''),
(187, 1005, 'Burger Steak', 1, '0.00', '2022-04-29', 'GCash Payment', 'declined', '20220511227 ', 140, ''),
(188, 1005, 'Fish Fillet', 1, '135.00', '2022-04-29', 'GCash Payment', 'declined', '20220511227 ', 135, ''),
(189, 1005, 'Big Boss', 2, '240.00', '2022-04-30', 'GCash Payment', 'declined', '20220511227 ', 240, ''),
(190, 1005, 'Big Boss', 1, '240.00', '2022-05-07', 'GCash Payment', 'declined', '20220511227 ', 240, ''),
(191, 1005, 'Fish Fillet', 2, '270.00', '2022-05-07', 'GCash Payment', 'declined', '20220511227 ', 135, ''),
(192, 1005, 'Bake Mac', 6, '540.00', '2022-05-07', 'GCash Payment', 'declined', '20220511227 ', 90, ''),
(193, 1005, 'Fish Fillet', 3, '405.00', '2022-05-07', 'GCash Payment', 'declined', '20220511227 ', 135, ''),
(194, 1005, 'Bake Mac', 1, '90.00', '2022-05-07', 'GCash Payment', 'declined', '20220511227 ', 90, ''),
(195, 1005, 'Fish Fillet', 1, '135.00', '2022-05-07', 'GCash Payment', 'declined', '20220511227 ', 135, ''),
(196, 1005, 'Bake Mac', 2, '180.00', '2022-05-07', 'GCash Payment', 'declined', '20220511227 ', 90, ''),
(197, 1005, 'Bake Mac', 3, '270.00', '2022-05-11', 'GCash Payment', 'declined', '20220511227 ', 90, ''),
(198, 1005, 'Fish Fillet', 1, '135.00', '2022-05-11', 'GCash Payment', 'declined', '20220511227 ', 135, ''),
(199, 1005, 'Fish Fillet', 5, '675.00', '2022-05-11', 'GCash Payment', 'declined', '20220511227 ', 135, ''),
(200, 1005, 'Pork Asado', 5, '200.00', '2022-05-11', 'GCash Payment', 'declined', '20220511227 ', 40, ''),
(201, 1005, 'Pansit Malabon', 2, '240.00', '2022-05-11', 'GCash Payment', 'declined', '20220511227 ', 120, ''),
(202, 1005, 'Fish Fillet', 12, '1.00', '2022-05-11', 'GCash Payment', 'declined', '20220511227 ', 135, ''),
(203, 1005, 'Big Boss', 5, '1.00', '2022-05-11', 'GCash Payment', 'declined', '20220511227 ', 240, ''),
(204, 1005, 'Bake Mac', 20, '1.00', '2022-05-11', 'GCash Payment', 'declined', '20220511227 ', 90, ''),
(205, 1005, 'Big Boss', 8, '1.00', '2022-05-11', 'GCash Payment', 'declined', '20220511227 ', 240, ''),
(206, 1005, 'Big Boss', 2, '480.00', '2022-05-11', 'GCash Payment', 'declined', '20220511227 ', 240, ''),
(207, 1005, 'Big Boss', 1, '1.00', '2022-05-11', 'GCash Payment', 'declined', '20220511227 ', 240, ''),
(208, 1005, 'Pork Asado', 20, '1.00', '2022-05-11', 'GCash Payment', 'declined', '20220511227 ', 40, ''),
(209, 1005, 'Pork Asado', 15, '720.00', '2022-05-11', 'GCash Payment', 'declined', '20220511227 ', 40, ''),
(210, 1005, 'Pansit Malabon', 1, '720.00', '2022-05-11', 'GCash Payment', 'declined', '20220511227 ', 120, ''),
(211, 1005, 'Pork Asado', 15, '600.00', '2022-05-11', 'GCash Payment', 'declined', '20220511227 ', 40, ''),
(212, 1005, 'Burger Steak', 5, '1300.00', '2022-05-11', 'GCash Payment', 'declined', '20220511227 ', 140, ''),
(213, 1005, 'Big Boss', 2, '1780.00', '2022-05-11', 'GCash Payment', 'declined', '20220511227 ', 240, ''),
(214, 1005, 'Fish Fillet', 1, '735.00', '2022-05-11', 'GCash Payment', 'declined', '20220511227 ', 135, ''),
(215, 1005, 'Big Boss', 2, '1020.00', '2022-05-11', 'GCash Payment', 'declined', '20220511227 ', 240, ''),
(216, 1005, 'Burger Steak', 1, '380.00', '2022-05-11', 'GCash Payment', 'declined', '20220511227 ', 140, ''),
(217, 1005, 'Fish Fillet', 4, '1020.00', '2022-05-11', 'GCash Payment', 'declined', '20220511227 ', 135, ''),
(218, 1005, 'Fish Fillet', 2, '540.00', '2022-05-11', 'GCash Payment', 'declined', '20220511227 ', 135, ''),
(219, 1005, 'Bake Mac', 3, '540.00', '2022-05-11', 'GCash Payment', 'declined', '20220511227 ', 90, ''),
(220, 1005, 'Fish Fillet', 3, '405.00', '2022-05-11', 'GCash Payment', 'declined', '20220511227 ', 135, ''),
(221, 1005, 'Bake Mac', 2, '585.00', '2022-05-11', 'GCash Payment', 'declined', '20220511227 ', 90, ''),
(222, 1005, 'Big Boss', 1, '240.00', '2022-05-11', 'GCash Payment', 'declined', '20220511227 ', 240, ''),
(223, 1005, 'Burger Steak', 2, '520.00', '2022-05-11', 'GCash Payment', 'declined', '20220511227 ', 140, ''),
(224, 1005, 'Bake Mac', 3, '270.00', '2022-05-11', 'GCash Payment', 'declined', '20220511227 ', 90, ''),
(225, 1005, 'Burger Steak', 2, '280.00', '2022-05-11', 'GCash Payment', 'declined', '20220511227 ', 140, ''),
(226, 1005, 'Burger Steak', 2, '280.00', '2022-05-11', 'GCash Payment', 'declined', '20220511227 ', 140, ''),
(227, 1005, 'Bake Mac', 1, '90.00', '2022-05-11', 'GCash Payment', 'declined', '20220511227 ', 90, ''),
(228, 1005, 'Burger Steak', 2, '280.00', '2022-05-11', 'GCash Payment', 'declined', '20220511231 ', 140, ''),
(229, 1005, 'Bake Mac', 1, '90.00', '2022-05-11', 'GCash Payment', 'declined', '20220511229 ', 90, ''),
(230, 1005, 'Fish Fillet', 1, '135.00', '2022-05-11', 'GCash Payment', 'declined', '20220511231 ', 135, ''),
(231, 1005, 'Big Boss', 1, '240.00', '2022-05-11', 'GCash Payment', 'declined', '20220511231 ', 240, ''),
(232, 1005, 'Big Boss', 1, '240.00', '2022-05-11', 'GCash Payment', 'declined', '20220511233 ', 240, ''),
(233, 1005, 'Fish Fillet', 1, '135.00', '2022-05-11', 'GCash Payment', 'declined', '20220511233 ', 135, ''),
(234, 1005, 'Fish Fillet', 1, '135.00', '2022-05-13', 'GCash Payment', 'declined', '20220513234 ', 135, ' '),
(235, 1005, 'Fish Fillet', 1, '135.00', '2022-05-13', 'GCash Payment', 'declined', '20220513235 ', 135, ' '),
(236, 1005, 'Bake Mac', 1, '90.00', '2022-05-13', 'GCash Payment', 'declined', '20220513236 ', 90, ' '),
(237, 1005, 'Pansit Malabon', 1, '120.00', '2022-05-13', 'GCash Payment', 'declined', '20220513237 ', 120, ' '),
(238, 1005, 'Pork Asado', 1, '40.00', '2022-05-13', 'GCash Payment', 'declined', '20220513238 ', 40, ' '),
(239, 1005, 'Burger Steak', 1, '140.00', '2022-05-13', 'COD', 'declined', '20220513239 ', 140, ' '),
(240, 1005, 'Burger Steak', 2, '280.00', '2022-05-13', 'COD', 'declined', '20220513241 ', 140, ' '),
(241, 1005, 'Pork Asado', 1, '40.00', '2022-05-13', 'COD', 'declined', '20220513241 ', 40, ' '),
(242, 1005, 'Bake Mac', 1, '90.00', '2022-05-13', '', 'declined', '20220513242 ', 90, ' '),
(243, 1005, 'Fish Fillet', 1, '135.00', '2022-05-13', 'GCash Payment', 'declined', '20220513243 ', 135, ' '),
(244, 1005, 'Bake Mac', 1, '90.00', '2022-05-13', 'GCash Payment', 'declined', '20220513244 ', 90, ' '),
(245, 1005, 'Fish Fillet', 1, '135.00', '2022-05-13', 'GCash Payment', 'declined', '20220513245 ', 135, ' '),
(246, 1005, 'Big Boss', 1, '240.00', '2022-05-13', 'GCash Payment', 'declined', '20220513246 ', 240, ' '),
(247, 1005, 'Bake Mac', 1, '90.00', '2022-05-13', 'GCash Payment', 'declined', '20220513247 ', 90, ' '),
(248, 1005, 'Bake Mac', 1, '90.00', '2022-05-13', 'GCash Payment', 'declined', '20220513248 ', 90, ' '),
(249, 1005, 'Bake Mac', 2, '180.00', '2022-05-13', 'GCash Payment', 'declined', '20220513249 ', 90, ' '),
(250, 1005, 'Fish Fillet', 1, '135.00', '2022-05-13', 'GCash Payment', 'declined', '20220513250 ', 135, ' '),
(251, 1005, 'Big Boss', 1, '240.00', '2022-05-13', 'GCash Payment', 'declined', '20220513251 ', 240, ' '),
(252, 1005, 'Burger Steak', 1, '140.00', '2022-05-13', 'GCash Payment', 'declined', '20220513252 ', 140, ' '),
(253, 1005, 'Fish Fillet', 1, '135.00', '2022-05-13', 'GCash Payment', 'declined', '20220513253 ', 135, ' '),
(254, 1005, 'Fish Fillet', 1, '135.00', '2022-05-13', 'GCash Payment', 'declined', '20220513254 ', 135, ' '),
(255, 1005, 'Burger Steak', 1, '140.00', '2022-05-13', 'GCash Payment', 'declined', '20220513255 ', 140, ' '),
(256, 1005, 'Burger Steak', 1, '140.00', '2022-05-17', 'GCash Payment', 'declined', '20220517256 ', 140, ' '),
(257, 1005, 'Fish Fillet', 1, '135.00', '2022-05-18', 'GCash Payment', 'declined', '20220518257 ', 135, ' '),
(258, 1005, 'Pork Asado', 1, '40.00', '2022-05-18', 'GCash Payment', 'declined', '20220518258 ', 40, ' '),
(259, 1005, 'Burger Steak', 1, '140.00', '2022-05-18', 'GCash Payment', 'declined', '20220518259 ', 140, ' '),
(260, 1005, 'Bake Mac', 1, '90.00', '2022-05-18', 'GCash Payment', 'declined', '20220518260 ', 90, ' '),
(261, 1005, 'Pansit Malabon', 1, '120.00', '2022-05-18', 'GCash Payment', 'declined', '20220518261 ', 120, 'GCash Payment '),
(262, 1005, 'Big Boss', 1, '240.00', '2022-05-18', 'GCash Payment', 'declined', '20220518262 ', 240, ' '),
(263, 1005, 'Burger Steak', 1, '140.00', '2022-05-18', 'GCash Payment', 'declined', '20220518263 ', 140, ' '),
(264, 1005, 'Fish Fillet', 1, '135.00', '2022-05-18', 'GCash Payment', 'declined', '20220518264 ', 135, 'comments[''] '),
(265, 1030, 'Pork Asado', 1, '40.00', '2022-05-22', 'GCash Payment', 'declined', '20220522265 ', 40, ' '),
(266, 1030, 'Burger Steak', 1, '140.00', '2022-05-22', 'GCash Payment', 'declined', '20220522266 ', 140, ' '),
(267, 1030, 'Fish Fillet', 1, '135.00', '2022-05-22', 'GCash Payment', 'declined', '20220522267 ', 135, ' '),
(268, 1030, 'Fish Fillet', 1, '135.00', '2022-05-22', '', 'declined', '20220522269 ', 135, ' '),
(269, 1030, 'Bake Mac', 1, '90.00', '2022-05-22', '', 'declined', '20220522269 ', 90, ' '),
(270, 1005, 'Fish Fillet', 2, '270.00', '2022-05-30', '', 'Completed', '20220530270 ', 135, ' '),
(271, 1030, 'Big Boss', 1, '240.00', '2022-05-30', '', 'Completed', '20220530271 ', 240, ' '),
(272, 1030, 'Fish Fillet', 1, '135.00', '2022-06-06', 'COD ', 'On Delivery', '20220606272 ', 135, 'Sa may tabi lang'),
(273, 1030, 'Big Boss', 1, '240.00', '2022-06-06', 'GCASH ', 'Approved', '20220606273 ', 240, 'ill pay it when the goods was delivered'),
(274, 1030, 'Big Boss', 3, '720.00', '2022-06-06', 'COD ', 'Approved', '20220606274 ', 240, 'test'),
(275, 1030, 'Big Boss', 1, '240.00', '2022-06-06', 'GCASH ', 'On Delivery', '20220606283 ', 240, 'Bro gcash bro'),
(280, 1030, 'Burger Steak', 1, '140.00', '2022-06-06', 'GCASH ', 'On Delivery', '20220606283 ', 140, 'Bro gcash bro'),
(283, 1030, 'Bake Mac', 1, '90.00', '2022-06-06', 'GCASH ', 'On Delivery', '20220606283 ', 90, 'Bro gcash bro');

-- --------------------------------------------------------

--
-- Table structure for table `pay_method`
--

CREATE TABLE `pay_method` (
  `id` int(11) NOT NULL,
  `p_method` char(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pay_method`
--

INSERT INTO `pay_method` (`id`, `p_method`) VALUES
(1, 'Cash on Delivery'),
(2, 'GCash Payment');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `PROD_ID` int(100) NOT NULL,
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
(622, 'burger.jpg', 'Giant burger', 'Unavailable', 255, 'Burgers'),
(623, 'burger.jpg', 'Regular Burger', 'Archive', 75, 'Burgers'),
(625, 'icedtea.jpg', 'Iced tea', 'Unavailable', 20, 'Beverages'),
(628, 'buffalowings.jpg', 'Spicy Buffalo Wings', 'Archive', 120, 'Meals'),
(629, 'buffalowings.jpg', 'Reg buffalo wings', 'Archive', 200, 'Meals'),
(630, 'pasta.jpg', 'Spaghetti', 'Archive', 185, 'Meals'),
(631, 'icedtea.jpg', 'Iced Tea p4', 'Archive', 75, 'Beverages'),
(632, 'pasta.jpg', 'pasta', 'Archive', 300, 'Burgers'),
(633, 'bulwawo.jpg', 'Bulwawo masalap', 'Archive', 140, 'Meals'),
(634, 'bakemac.jpg', 'Bake Mac', 'Available', 90, 'Meals'),
(638, 'melt.jpg', 'Bacon Mushroom Melt', 'Unavailable', 120, 'Beverages'),
(639, 'malabon.jpg', 'Pansit Malabon', 'Available', 120, 'Partytray'),
(640, 'porkasado.jpg', 'Pork Asado', 'Available', 40, 'Burgers'),
(641, 'burgersteak.jpg', 'Burger Steak', 'Available', 140, 'Meals'),
(642, 'fishfillet.jpg', 'Fish Fillet', 'Available', 135, 'Meals'),
(643, 'bigboss.jpg', 'Big Boss', 'Available', 240, 'Burgers');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `ID` int(11) NOT NULL,
  `ORDER_ID` varchar(100) NOT NULL,
  `C_ID` varchar(60) NOT NULL,
  `QTY` int(11) NOT NULL,
  `TOTAL` decimal(11,2) NOT NULL,
  `TRANSDATE` varchar(100) NOT NULL,
  `STATUS` varchar(100) NOT NULL,
  `PROCESSBY` varchar(100) NOT NULL,
  `DELIVEREDBY` char(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`ID`, `ORDER_ID`, `C_ID`, `QTY`, `TOTAL`, `TRANSDATE`, `STATUS`, `PROCESSBY`, `DELIVEREDBY`) VALUES
(1, '202201097037', '2', 3, '765.00', '2022-01-09', 'Completed', 'rroxas', 'rider1'),
(2, '202201099904', '0', 1, '185.00', '2022-01-09', 'Completed', 'rroxas', 'rider1'),
(3, '202201099273', 'alruf', 20, '5100.00', '2022-01-09', 'Completed', 'rroxas', 'rider1'),
(4, '202201093841', '0', 1, '140.00', '2022-01-09', 'Completed', 'rroxas', 'rider1'),
(5, '202201097956', 'al ruf', 5, '1275.00', '2022-01-09', 'Completed', 'rroxas', 'rider1'),
(6, '202201092801', 'al ruf', 1, '120.00', '2022-01-09', 'Completed', 'rroxas', 'rider1'),
(7, '202201109081', 'aaron enrico', 1, '120.00', '2022-01-10', 'Completed', 'rroxas', 'rider1'),
(8, '202201104170', 'ivan vergara', 2, '180.00', '2022-01-10', 'Completed', 'rroxas', 'rider1'),
(9, '202201106074', 'aaron enrico', 1, '120.00', '2022-01-10', 'Completed', 'rroxas', 'rider1'),
(10, '202201104804', 'aaron enrico', 1, '90.00', '2022-01-10', 'Completed', 'rroxas', 'rider1'),
(11, '202202221995', 'ivan vergara', 2, '180.00', '2022-02-22', 'Completed', 'rroxas', 'rider1'),
(12, '202202236722', 'ivan vergara', 2, '480.00', '2022-02-23', 'Completed', 'rroxas', 'rider1'),
(13, '20220408167 ', 'ivan vergara', 1, '257.60', '2022-04-08', 'Completed', 'rroxas', 'rider1'),
(14, '20220511219 ', 'ivan vergara', 2, '540.00', '2022-05-11', 'Completed', 'rroxas', 'rider1'),
(15, '20220530270 ', 'ivan vergara', 2, '270.00', '2022-05-30', 'Completed', 'rroxas', 'rider1'),
(16, '20220530271 ', 'fernando sudayon', 1, '240.00', '2022-05-30', 'Completed', 'rroxas', 'rider1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `EMP_ID` int(11) NOT NULL,
  `EMP_FNAME` varchar(100) NOT NULL,
  `EMP_LNAME` varchar(100) NOT NULL,
  `EMP_MI` char(60) NOT NULL,
  `EMP_CONTACTNUM` varchar(20) NOT NULL,
  `EMAILADD` char(50) NOT NULL,
  `verify_token` varchar(255) NOT NULL,
  `FULLADD` varchar(100) NOT NULL,
  `POSITION` varchar(100) NOT NULL,
  `EMP_UNAME` varchar(100) NOT NULL,
  `EMP_PASS` varchar(100) NOT NULL,
  `U_STATUS` varchar(60) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`EMP_ID`, `EMP_FNAME`, `EMP_LNAME`, `EMP_MI`, `EMP_CONTACTNUM`, `EMAILADD`, `verify_token`, `FULLADD`, `POSITION`, `EMP_UNAME`, `EMP_PASS`, `U_STATUS`, `created_at`) VALUES
(1001, 'fernando', 'sudayon', 'p', '912391293', 'sudayon@sample.com', '', '17-y Vic Santolan Pasig City', 'admin', 'user1', '123456', 'ACTIVE', '2022-05-16 13:27:10'),
(1002, 'albert', 'x', 'rufus', '9123123', 'sample2@sample.com', '', 'Roxas Ave. 420st.', 'RIDER', 'alruf01', '123456', 'ACTIVE', '2022-05-16 13:27:10'),
(1003, 'aaron', 'enrico', 'z', '912345678', 'enricoa@sample.com', '', 'Dito sa may tabi ng puno sa antipolo banda', 'customer', 'enricohaha', '123123', 'ACTIVE', '2022-05-16 13:27:10'),
(1004, '', '', '', '0', '', '', '', '', '', '', 'DEACTIVATED', '2022-05-16 13:27:10'),
(1005, 'ivan', 'vergara', 's', '91223132', 'ivergara@gmail.com', '', 'Antipolo 420st. ', 'customer', 'ivan1', '123123', 'ACTIVE', '2022-05-16 13:27:10'),
(1006, 'kiko', 'm', 'pangilinan', '2147483647', 'km.pangilinan@gmail.com', '', '69 Street Quezon City', 'EMPLOYEE', 'kiko', 'matos', 'ACTIVE', '2022-05-16 13:27:10'),
(1007, 'indang', 'dada', 'x', '000-0000-0000', 'test@gmail.com', '', 'Tondo manila 89', 'customer', 'shroud123', 'md5(Shroud123456)', 'DEACTIVATED', '2022-05-21 11:01:16'),
(1008, 'indang', 'dada', 'x', '000-0000-0000', 'test@gmail.com', '', 'Tondo manila 89', 'customer', 'shroud123', 'md5(Shroud123456)', 'DEACTIVATED', '2022-05-21 11:01:55'),
(1009, 'kape', 'biscuit', 'at', '000-0000-0000', 'test2@test.com', '', 'Makati City', 'customer', 'shroudy123', '(Rowdy4201)', 'DEACTIVATED', '2022-05-21 11:06:12'),
(1010, 'kape', 'biscuit', 'at', '000-0000-0000', 'test2@test.com', '', 'Makati City', 'customer', 'shroudy123', '799ec3f6c15c7ae6b2a858ed7f536d20', 'DEACTIVATED', '2022-05-21 11:08:25'),
(1011, 'kape', 'biscuit', 'at', '000-0000-0000', 'test2@test.com', '', 'Makati City', 'customer', 'shroudy123', '799ec3f6c15c7ae6b2a858ed7f536d20', 'DEACTIVATED', '2022-05-21 11:10:56'),
(1012, 'test', 'testing', 'x', '09194236581', 'test@gmail.com', '', 'Test 123st Manila', 'customer', 'testing123', '2c9341ca4cf3d87b9e4eb905d6a3ec45', 'DEACTIVATED', '2022-05-21 11:25:53'),
(1013, 'test', 'testing', 'x', '09194236581', 'test@gmail.com', '', 'Test 123st Manila', 'customer', 'testing123', '2c9341ca4cf3d87b9e4eb905d6a3ec45', 'DEACTIVATED', '2022-05-21 11:26:43'),
(1014, 'test1', 'again', 'l', '09115456581', 'test3@gmail.com', '', 'testing Cavite city', 'customer', 'miss', '523242b160d75beb65f1f683dbe0dd0d', 'DEACTIVATED', '2022-05-21 11:29:20'),
(1015, 'test1', 'again', 'l', '09115456581', 'test3@gmail.com', '', 'testing Cavite city', 'customer', 'miss', '523242b160d75beb65f1f683dbe0dd0d', 'DEACTIVATED', '2022-05-21 11:29:48'),
(1016, 'shanti', 'dope', 'p', '09194236581', 'sudayonfernando001@gmail.com', '502587', '123st Victorino A.', 'customer', 'shanti123', '414d126252e6f2587bd764d65ab7c972', 'ACTIVE', '2022-05-21 14:25:34'),
(1017, 'shanti', 'dope', 'p', '09194236581', 'sudayonfernando001@gmail.com', '392835', '123st Victorino A.', 'customer', 'shanti123', '414d126252e6f2587bd764d65ab7c972', 'ACTIVE', '2022-05-21 14:25:34'),
(1018, 'bro', 'me', 'its', '09194236581', 'sudayonfernando001@gmail.com', '402457', 'Victoria 420 Ext.', 'customer', 'bro123', 'efc361811e8a1b3077e2a95b0e384869', 'ACTIVE', '2022-05-21 14:25:34'),
(1019, 'kendrick', 'lamar', 'e', '09194236581', 'sudayonfernando01@gmail.com', '974857', 'Hollywood 69ave', 'customer', 'lamar1', '0540bc41b122c8112c4f78f0b19aff03', 'DEACTIVATED', '2022-05-21 13:59:52'),
(1020, 'young', 'niggz', 'w', '09194236588', 'sudayonfernando01@gmail.com', '142814', 'Amsterdam 420', 'customer', 'ynigg4', '03b2b3ab1269c3b7e9d304f44c7bb5ba', 'DEACTIVATED', '2022-05-21 14:06:20'),
(1021, 'young', 'niggz', 'w', '09194236588', 'sudayonfernando01@gmail.com', '258386', 'Amsterdam 420', 'customer', 'ynigg4', '03b2b3ab1269c3b7e9d304f44c7bb5ba', 'DEACTIVATED', '2022-05-21 14:07:30'),
(1022, 'young', 'niggz', 'w', '09194236588', 'sudayonfernando01@gmail.com', '304343', 'Amsterdam 420', 'customer', 'ynigg4', '03b2b3ab1269c3b7e9d304f44c7bb5ba', 'DEACTIVATED', '2022-05-21 14:10:27'),
(1023, 'ron', 'henley', 'r', '09194206581', 'mortalshroud@gmail.com', '113653', 'Makati 8th Ave 129', 'customer', 'ron123', '926b02cba774e47cdf291108f10ab2a3', 'DEACTIVATED', '2022-05-21 14:16:19'),
(1024, 'ron', 'henley', 'r', '09194206581', 'mortalshroud@gmail.com', '378635', 'Makati 8th Ave 129', 'customer', 'ron123', '926b02cba774e47cdf291108f10ab2a3', 'DEACTIVATED', '2022-05-21 14:17:52'),
(1025, 'ron', 'henley', 'r', '09194206581', 'mortalshroud@gmail.com', '510854', 'Makati 8th Ave 129', 'customer', 'ron123', '926b02cba774e47cdf291108f10ab2a3', 'DEACTIVATED', '2022-05-21 14:23:08'),
(1026, 'ron', 'puff', 'pa', '09194206588', 'sudayonfernando001@gmail.com', '816487', 'Makati Mdew park', 'customer', 'ron123', 'd9c8d684fcfddd2fb30bfe34e78dc27e', 'ACTIVE', '2022-05-21 14:25:34'),
(1027, 'ronnie', 'puffnaman', 'p', '09194206565', 'sudayonfernando001@gmail.com', '507796', 'Laguna sampaloc lake 123ext.', 'customer', 'himiss', '1Missyou', 'DEACTIVATED', '2022-05-21 14:30:08'),
(1028, 'pre', 'koto', 'a', '09194205454', 'sudayonfernando01@gmail.com', '411136', 'I miss you mac miller', 'customer', 'himiss1', '1Missyou', 'ACTIVE', '2022-05-21 14:33:57'),
(1029, 'pre', 'koto', 'a', '09194205454', 'sudayonfernando01@gmail.com', '894681', 'I miss you mac miller', 'customer', 'himiss1', '1Missyou', 'ACTIVE', '2022-05-21 14:33:57'),
(1030, 'fernando', 'sudayon', 'p', '09321765616', 'sudayonfernando01@gmail.com', '155797', '170 z A. victorino st', 'customer', 'sudayon1', 'Sudayon123', 'ACTIVE', '2022-05-22 07:21:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `audit_log`
--
ALTER TABLE `audit_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pay_method`
--
ALTER TABLE `pay_method`
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `PROCESSBY` (`PROCESSBY`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`EMP_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `audit_log`
--
ALTER TABLE `audit_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=284;
--
-- AUTO_INCREMENT for table `pay_method`
--
ALTER TABLE `pay_method`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `PROD_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=644;
--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `EMP_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1031;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

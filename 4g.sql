-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 17, 2020 at 08:22 AM
-- Server version: 5.7.31-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `afgcom_4g`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `id_number` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `name`, `phone`, `id_number`, `date`) VALUES
(56, 'محمد', '0710154', '41544581558', '2020-08-16');

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `id` int(11) NOT NULL,
  `customername` varchar(255) NOT NULL,
  `prodect` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`id`, `customername`, `prodect`, `amount`, `date`) VALUES
(5, 'على حامد', 'تحويل رصيد', '150', '2020-07-20'),
(6, 'احمد جبريل ', 'شاحن سامسونج ابيض', '60', '2020-07-20');

-- --------------------------------------------------------

--
-- Table structure for table `notvaction`
--

CREATE TABLE `notvaction` (
  `not_id` int(11) NOT NULL,
  `msg` varchar(400) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(255) NOT NULL,
  `prodectname` varchar(255) NOT NULL,
  `prem_manth` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `preid` int(11) NOT NULL,
  `sen` tinyint(4) NOT NULL DEFAULT '0',
  `prem_id` varchar(255) NOT NULL,
  `amount_manth` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notvaction`
--

INSERT INTO `notvaction` (`not_id`, `msg`, `date`, `name`, `prodectname`, `prem_manth`, `phone`, `preid`, `sen`, `prem_id`, `amount_manth`) VALUES
(2129, 'حان وقت تذكير العميل احمد على    بدفع مبلغ495 <br>اسم المنتج سامونج جلاجسى<br> رقم موبايل العميل 654945989<br>التاريخ ', '2020-07-06', 'احمد على ', 'سامونج جلاجسى', '495', '654945989', 503, 1, '38', '465'),
(2130, 'حان وقت تذكير العميل احمد على    بدفع مبلغ495 <br>اسم المنتج سامونج جلاجسى<br> رقم موبايل العميل 654945989<br>التاريخ ', '2020-10-06', 'احمد على ', 'سامونج جلاجسى', '495', '654945989', 504, 0, '38', '200'),
(2131, 'حان وقت تذكير العميل احمد على    بدفع مبلغ495 <br>اسم المنتج سامونج جلاجسى<br> رقم موبايل العميل 654945989<br>التاريخ ', '2020-11-06', 'احمد على ', 'سامونج جلاجسى', '495', '654945989', 505, 0, '38', '0'),
(2132, 'حان وقت تذكير العميل احمد على    بدفع مبلغ495 <br>اسم المنتج سامونج جلاجسى<br> رقم موبايل العميل 654945989<br>التاريخ ', '2020-12-06', 'احمد على ', 'سامونج جلاجسى', '495', '654945989', 506, 0, '38', '400'),
(2133, 'حان وقت تذكير العميل احمد على    بدفع مبلغ495 <br>اسم المنتج سامونج جلاجسى<br> رقم موبايل العميل 654945989<br>التاريخ ', '2021-01-06', 'احمد على ', 'سامونج جلاجسى', '495', '654945989', 507, 0, '38', '0'),
(2134, 'حان وقت تذكير العميل احمد على    بدفع مبلغ495 <br>اسم المنتج سامونج جلاجسى<br> رقم موبايل العميل 654945989<br>التاريخ ', '2021-02-06', 'احمد على ', 'سامونج جلاجسى', '495', '654945989', 508, 0, '38', '0'),
(2135, 'حان وقت تذكير العميل احمدالسعيد   بدفع مبلغ260 <br>اسم المنتج هواهوى<br> رقم موبايل العميل 01017946721<br>التاريخ ', '2020-09-16', 'احمدالسعيد', 'هواهوى', '260', '01017946721', 519, 0, '39', '0'),
(2136, 'حان وقت تذكير العميل احمدالسعيد   بدفع مبلغ260 <br>اسم المنتج هواهوى<br> رقم موبايل العميل 01017946721<br>التاريخ ', '2020-10-16', 'احمدالسعيد', 'هواهوى', '260', '01017946721', 520, 0, '39', '0'),
(2137, 'حان وقت تذكير العميل احمدالسعيد   بدفع مبلغ260 <br>اسم المنتج هواهوى<br> رقم موبايل العميل 01017946721<br>التاريخ ', '2020-11-16', 'احمدالسعيد', 'هواهوى', '260', '01017946721', 521, 0, '39', '0'),
(2138, 'حان وقت تذكير العميل احمدالسعيد   بدفع مبلغ260 <br>اسم المنتج هواهوى<br> رقم موبايل العميل 01017946721<br>التاريخ ', '2020-12-16', 'احمدالسعيد', 'هواهوى', '260', '01017946721', 522, 0, '39', '0'),
(2139, 'حان وقت تذكير العميل احمدالسعيد   بدفع مبلغ260 <br>اسم المنتج هواهوى<br> رقم موبايل العميل 01017946721<br>التاريخ ', '2021-01-16', 'احمدالسعيد', 'هواهوى', '260', '01017946721', 523, 0, '39', '0'),
(2140, 'حان وقت تذكير العميل احمدالسعيد   بدفع مبلغ260 <br>اسم المنتج هواهوى<br> رقم موبايل العميل 01017946721<br>التاريخ ', '2021-02-16', 'احمدالسعيد', 'هواهوى', '260', '01017946721', 524, 0, '39', '0'),
(2141, 'حان وقت تذكير العميل احمدالسعيد   بدفع مبلغ260 <br>اسم المنتج هواهوى<br> رقم موبايل العميل 01017946721<br>التاريخ ', '2021-03-16', 'احمدالسعيد', 'هواهوى', '260', '01017946721', 525, 0, '39', '0'),
(2142, 'حان وقت تذكير العميل احمدالسعيد   بدفع مبلغ260 <br>اسم المنتج هواهوى<br> رقم موبايل العميل 01017946721<br>التاريخ ', '2021-04-16', 'احمدالسعيد', 'هواهوى', '260', '01017946721', 526, 0, '39', '0'),
(2143, 'حان وقت تذكير العميل احمدالسعيد   بدفع مبلغ260 <br>اسم المنتج هواهوى<br> رقم موبايل العميل 01017946721<br>التاريخ ', '2021-05-16', 'احمدالسعيد', 'هواهوى', '260', '01017946721', 527, 0, '39', '0'),
(2144, 'حان وقت تذكير العميل احمدالسعيد   بدفع مبلغ260 <br>اسم المنتج هواهوى<br> رقم موبايل العميل 01017946721<br>التاريخ ', '2021-06-16', 'احمدالسعيد', 'هواهوى', '260', '01017946721', 528, 0, '39', '0'),
(2145, 'حان وقت تذكير العميل احمدالسعيد   بدفع مبلغ260 <br>اسم المنتج هواهوى<br> رقم موبايل العميل 01017946721<br>التاريخ ', '2021-07-16', 'احمدالسعيد', 'هواهوى', '260', '01017946721', 529, 0, '39', '0'),
(2146, 'حان وقت تذكير العميل احمدالسعيد   بدفع مبلغ260 <br>اسم المنتج هواهوى<br> رقم موبايل العميل 01017946721<br>التاريخ ', '2021-08-16', 'احمدالسعيد', 'هواهوى', '260', '01017946721', 530, 0, '39', '0'),
(2147, 'حان وقت تذكير العميل محمد   بدفع مبلغ245 <br>اسم المنتج تلفون5<br> رقم موبايل العميل 0710154<br>التاريخ ', '2020-09-06', 'محمد', 'تلفون5', '245', '0710154', 531, 0, '41', '0'),
(2148, 'حان وقت تذكير العميل محمد   بدفع مبلغ245 <br>اسم المنتج تلفون5<br> رقم موبايل العميل 0710154<br>التاريخ ', '2020-10-06', 'محمد', 'تلفون5', '245', '0710154', 532, 0, '41', '0'),
(2149, 'حان وقت تذكير العميل محمد   بدفع مبلغ245 <br>اسم المنتج تلفون5<br> رقم موبايل العميل 0710154<br>التاريخ ', '2020-11-06', 'محمد', 'تلفون5', '245', '0710154', 533, 0, '41', '0'),
(2150, 'حان وقت تذكير العميل محمد   بدفع مبلغ245 <br>اسم المنتج تلفون5<br> رقم موبايل العميل 0710154<br>التاريخ ', '2020-12-06', 'محمد', 'تلفون5', '245', '0710154', 534, 0, '41', '0'),
(2151, 'حان وقت تذكير العميل محمد   بدفع مبلغ245 <br>اسم المنتج تلفون5<br> رقم موبايل العميل 0710154<br>التاريخ ', '2021-01-06', 'محمد', 'تلفون5', '245', '0710154', 535, 0, '41', '0'),
(2152, 'حان وقت تذكير العميل محمد   بدفع مبلغ245 <br>اسم المنتج تلفون5<br> رقم موبايل العميل 0710154<br>التاريخ ', '2021-02-06', 'محمد', 'تلفون5', '245', '0710154', 536, 0, '41', '0'),
(2153, 'حان وقت تذكير العميل محمد   بدفع مبلغ245 <br>اسم المنتج تلفون5<br> رقم موبايل العميل 0710154<br>التاريخ ', '2021-03-06', 'محمد', 'تلفون5', '245', '0710154', 537, 0, '41', '0'),
(2154, 'حان وقت تذكير العميل محمد   بدفع مبلغ245 <br>اسم المنتج تلفون5<br> رقم موبايل العميل 0710154<br>التاريخ ', '2021-04-06', 'محمد', 'تلفون5', '245', '0710154', 538, 0, '41', '0'),
(2155, 'حان وقت تذكير العميل محمد   بدفع مبلغ245 <br>اسم المنتج تلفون5<br> رقم موبايل العميل 0710154<br>التاريخ ', '2021-05-06', 'محمد', 'تلفون5', '245', '0710154', 539, 0, '41', '0'),
(2156, 'حان وقت تذكير العميل محمد   بدفع مبلغ245 <br>اسم المنتج تلفون5<br> رقم موبايل العميل 0710154<br>التاريخ ', '2021-06-06', 'محمد', 'تلفون5', '245', '0710154', 540, 0, '41', '0'),
(2157, 'حان وقت تذكير العميل محمد   بدفع مبلغ245 <br>اسم المنتج تلفون5<br> رقم موبايل العميل 0710154<br>التاريخ ', '2021-07-06', 'محمد', 'تلفون5', '245', '0710154', 541, 0, '41', '0'),
(2158, 'حان وقت تذكير العميل محمد   بدفع مبلغ245 <br>اسم المنتج تلفون5<br> رقم موبايل العميل 0710154<br>التاريخ ', '2021-08-06', 'محمد', 'تلفون5', '245', '0710154', 542, 0, '41', '0'),
(2159, 'حان وقت تذكير العميل محمد   بدفع مبلغ245 <br>اسم المنتج fff<br> رقم موبايل العميل 0710154<br>التاريخ ', '2020-09-16', 'محمد', 'fff', '245', '0710154', 543, 0, '42', '4545'),
(2160, 'حان وقت تذكير العميل محمد   بدفع مبلغ245 <br>اسم المنتج fff<br> رقم موبايل العميل 0710154<br>التاريخ ', '2020-10-16', 'محمد', 'fff', '245', '0710154', 544, 0, '42', '0'),
(2161, 'حان وقت تذكير العميل محمد   بدفع مبلغ245 <br>اسم المنتج fff<br> رقم موبايل العميل 0710154<br>التاريخ ', '2020-11-16', 'محمد', 'fff', '245', '0710154', 545, 0, '42', '0'),
(2162, 'حان وقت تذكير العميل محمد   بدفع مبلغ245 <br>اسم المنتج fff<br> رقم موبايل العميل 0710154<br>التاريخ ', '2020-12-16', 'محمد', 'fff', '245', '0710154', 546, 0, '42', '0'),
(2163, 'حان وقت تذكير العميل محمد   بدفع مبلغ245 <br>اسم المنتج fff<br> رقم موبايل العميل 0710154<br>التاريخ ', '2021-01-16', 'محمد', 'fff', '245', '0710154', 547, 0, '42', '0'),
(2164, 'حان وقت تذكير العميل محمد   بدفع مبلغ245 <br>اسم المنتج fff<br> رقم موبايل العميل 0710154<br>التاريخ ', '2021-02-16', 'محمد', 'fff', '245', '0710154', 548, 0, '42', '0'),
(2165, 'حان وقت تذكير العميل محمد   بدفع مبلغ245 <br>اسم المنتج fff<br> رقم موبايل العميل 0710154<br>التاريخ ', '2021-03-16', 'محمد', 'fff', '245', '0710154', 549, 0, '42', '0'),
(2166, 'حان وقت تذكير العميل محمد   بدفع مبلغ245 <br>اسم المنتج fff<br> رقم موبايل العميل 0710154<br>التاريخ ', '2021-04-16', 'محمد', 'fff', '245', '0710154', 550, 0, '42', '0'),
(2167, 'حان وقت تذكير العميل محمد   بدفع مبلغ245 <br>اسم المنتج fff<br> رقم موبايل العميل 0710154<br>التاريخ ', '2021-05-16', 'محمد', 'fff', '245', '0710154', 551, 0, '42', '0'),
(2168, 'حان وقت تذكير العميل محمد   بدفع مبلغ245 <br>اسم المنتج fff<br> رقم موبايل العميل 0710154<br>التاريخ ', '2021-06-16', 'محمد', 'fff', '245', '0710154', 552, 0, '42', '0'),
(2169, 'حان وقت تذكير العميل محمد   بدفع مبلغ245 <br>اسم المنتج fff<br> رقم موبايل العميل 0710154<br>التاريخ ', '2021-07-16', 'محمد', 'fff', '245', '0710154', 553, 0, '42', '0'),
(2170, 'حان وقت تذكير العميل محمد   بدفع مبلغ245 <br>اسم المنتج fff<br> رقم موبايل العميل 0710154<br>التاريخ ', '2021-08-16', 'محمد', 'fff', '245', '0710154', 554, 0, '42', '0'),
(2171, 'حان وقت تذكير العميل محمد   بدفع مبلغ257 <br>اسم المنتج hdfhdgh<br> رقم موبايل العميل 0710154<br>التاريخ ', '2020-09-25', 'محمد', 'hdfhdgh', '257', '0710154', 557, 0, '43', '0'),
(2172, 'حان وقت تذكير العميل محمد   بدفع مبلغ257 <br>اسم المنتج hdfhdgh<br> رقم موبايل العميل 0710154<br>التاريخ ', '2020-10-25', 'محمد', 'hdfhdgh', '257', '0710154', 558, 0, '43', '0'),
(2173, 'حان وقت تذكير العميل محمد   بدفع مبلغ257 <br>اسم المنتج hdfhdgh<br> رقم موبايل العميل 0710154<br>التاريخ ', '2020-11-25', 'محمد', 'hdfhdgh', '257', '0710154', 559, 0, '43', '0'),
(2174, 'حان وقت تذكير العميل محمد   بدفع مبلغ257 <br>اسم المنتج hdfhdgh<br> رقم موبايل العميل 0710154<br>التاريخ ', '2020-12-25', 'محمد', 'hdfhdgh', '257', '0710154', 560, 0, '43', '0'),
(2175, 'حان وقت تذكير العميل محمد   بدفع مبلغ257 <br>اسم المنتج hdfhdgh<br> رقم موبايل العميل 0710154<br>التاريخ ', '2021-01-25', 'محمد', 'hdfhdgh', '257', '0710154', 561, 0, '43', '0'),
(2176, 'حان وقت تذكير العميل محمد   بدفع مبلغ257 <br>اسم المنتج hdfhdgh<br> رقم موبايل العميل 0710154<br>التاريخ ', '2021-02-25', 'محمد', 'hdfhdgh', '257', '0710154', 562, 0, '43', '0'),
(2177, 'حان وقت تذكير العميل محمد   بدفع مبلغ257 <br>اسم المنتج hdfhdgh<br> رقم موبايل العميل 0710154<br>التاريخ ', '2021-03-25', 'محمد', 'hdfhdgh', '257', '0710154', 563, 0, '43', '0'),
(2178, 'حان وقت تذكير العميل محمد   بدفع مبلغ257 <br>اسم المنتج hdfhdgh<br> رقم موبايل العميل 0710154<br>التاريخ ', '2021-04-25', 'محمد', 'hdfhdgh', '257', '0710154', 564, 0, '43', '0'),
(2179, 'حان وقت تذكير العميل محمد   بدفع مبلغ257 <br>اسم المنتج hdfhdgh<br> رقم موبايل العميل 0710154<br>التاريخ ', '2021-05-25', 'محمد', 'hdfhdgh', '257', '0710154', 565, 0, '43', '0'),
(2180, 'حان وقت تذكير العميل محمد   بدفع مبلغ257 <br>اسم المنتج hdfhdgh<br> رقم موبايل العميل 0710154<br>التاريخ ', '2021-06-25', 'محمد', 'hdfhdgh', '257', '0710154', 566, 0, '43', '0'),
(2181, 'حان وقت تذكير العميل محمد   بدفع مبلغ257 <br>اسم المنتج hdfhdgh<br> رقم موبايل العميل 0710154<br>التاريخ ', '2021-07-25', 'محمد', 'hdfhdgh', '257', '0710154', 567, 0, '43', '0'),
(2182, 'حان وقت تذكير العميل محمد   بدفع مبلغ257 <br>اسم المنتج hdfhdgh<br> رقم موبايل العميل 0710154<br>التاريخ ', '2021-08-25', 'محمد', 'hdfhdgh', '257', '0710154', 568, 0, '43', '0');

-- --------------------------------------------------------

--
-- Table structure for table `prem`
--

CREATE TABLE `prem` (
  `prem_id` int(11) NOT NULL,
  `c_name` int(11) NOT NULL,
  `teker_name` varchar(255) NOT NULL,
  `teker_id` varchar(255) NOT NULL,
  `teker_phone` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `prodect_name` varchar(255) NOT NULL,
  `prodect_price` varchar(255) NOT NULL,
  `amount_pay` varchar(255) NOT NULL,
  `prem_lemt` varchar(255) NOT NULL,
  `discrption` text NOT NULL,
  `rem_amount` varchar(255) NOT NULL,
  `prem_manth` varchar(255) NOT NULL,
  `precent` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prem`
--

INSERT INTO `prem` (`prem_id`, `c_name`, `teker_name`, `teker_id`, `teker_phone`, `date`, `prodect_name`, `prodect_price`, `amount_pay`, `prem_lemt`, `discrption`, `rem_amount`, `prem_manth`, `precent`) VALUES
(42, 56, '', '', '', '2020-09-16', 'fff', '2600', '500', '14', '', '2940', '210', '40'),
(43, 56, '', '', '', '2020-08-25', 'hdfhdgh', '2600', '400', '12', 'تاريخ شراء العده 10-102020', '3080', '257', '40');

-- --------------------------------------------------------

--
-- Table structure for table `premmanth`
--

CREATE TABLE `premmanth` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `c_name` int(11) NOT NULL,
  `prems_id` int(11) NOT NULL,
  `amount_manth` varchar(255) DEFAULT '0',
  `discrption` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `premmanth`
--

INSERT INTO `premmanth` (`id`, `date`, `c_name`, `prems_id`, `amount_manth`, `discrption`) VALUES
(543, '2020-09-16', 56, 42, '4545', ' '),
(544, '2020-10-16', 56, 42, '0', ''),
(545, '2020-11-16', 56, 42, '0', ''),
(546, '2020-12-16', 56, 42, '0', ''),
(547, '2021-01-16', 56, 42, '0', ''),
(548, '2021-02-16', 56, 42, '0', ''),
(549, '2021-03-16', 56, 42, '0', ''),
(550, '2021-04-16', 56, 42, '0', ''),
(551, '2021-05-16', 56, 42, '0', ''),
(552, '2021-06-16', 56, 42, '0', ''),
(553, '2021-07-16', 56, 42, '0', ''),
(554, '2021-08-16', 56, 42, '0', ''),
(555, '2021-09-16', 56, 42, '0', ''),
(557, '2020-09-25', 56, 43, '0', ''),
(558, '2020-10-25', 56, 43, '0', ''),
(559, '2020-11-25', 56, 43, '0', ''),
(560, '2020-12-25', 56, 43, '0', ''),
(561, '2021-01-25', 56, 43, '0', ''),
(562, '2021-02-25', 56, 43, '0', ''),
(563, '2021-03-25', 56, 43, '0', ''),
(564, '2021-04-25', 56, 43, '0', ''),
(565, '2021-05-25', 56, 43, '0', ''),
(566, '2021-06-25', 56, 43, '0', ''),
(567, '2021-07-25', 56, 43, '0', ''),
(568, '2021-08-25', 56, 43, '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `storby`
--

CREATE TABLE `storby` (
  `stor_by` int(11) NOT NULL,
  `prodectname` varchar(255) NOT NULL,
  `customername` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `count` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `proft` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `storseal`
--

CREATE TABLE `storseal` (
  `stor_id` int(11) NOT NULL,
  `prodectname` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `count` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `storseal`
--

INSERT INTO `storseal` (`stor_id`, `prodectname`, `price`, `count`, `total`, `date`) VALUES
(46, 'جراب تاب', '50', '1', '50', '2020-08-06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `is_admin` tinyint(4) DEFAULT '0',
  `othar` tinyint(4) NOT NULL DEFAULT '0',
  `image` varchar(255) NOT NULL,
  `storpremtion` varchar(255) DEFAULT NULL,
  `primprmtion` varchar(255) DEFAULT NULL,
  `active_code` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `password`, `email`, `is_admin`, `othar`, `image`, `storpremtion`, `primprmtion`, `active_code`, `date`) VALUES
(6, 'ahmedgabril', '$2y$10$hJKjxBQmZ2.Tb7PLjjvsl.DFdSVoHX5CyQGF2j004lSblVjrH6Jxe', 'ahmed@gmail.com', 3, 1, 'image_profile5f0e395faee5c.jpg', '', '', '5f14eb0edc345', '0000-00-00'),
(7, 'عمرو عراقى ', '$2y$10$sZnzG35QARCQ/tdZ52xBfOk0Z5Fx1ddPIM8qJ8PkXCVvJkCttDU1u', 'amr@g.com', 2, 0, '', 'add,edit,del,viwe', '', '', '0000-00-00'),
(8, 'حماده', '$2y$10$S0shzIlQ4ZbQm3r3UEmdS.xr5qGtOa2hizHeManaUDgs/SxjIHmfa', 'ahmed3@gmail.com', 3, 0, '', 'add,edit,del,viwe', 'add,edit,del,viwe', '', '0000-00-00'),
(9, 'aliahmed', '$2y$10$aZ9RKKs99ALmnjp34SQO4uqI1as64X5h0fbywV2Uqq29bjLFyaDpi', 'alih@g.com', 3, 0, '', '', '', '', '0000-00-00'),
(10, 'عمرو عراقى ', '$2y$10$9Yw8bwZb4QzkxalAQu813elqe45g5/A6dB8zy32KC4tTzDokiNcd2', 'a@g.com', 2, 0, '', 'add,edit,del,viwe', '', '', '0000-00-00'),
(11, 'ahnedcvzcxvxzcvx', '$2y$10$joaDcdpljJTbvst04dJqt.y9gZdu1gtVzCMlyDOsS6nlLdyDW7Syi', 'ahmed5@gmail.com', 2, 0, '', 'add', 'add', '', '2020-07-23'),
(12, 'احمد جبريل', '$2y$10$t6tNrBZRnOenvfNeifHSx.uHEzVrNu0ra6pDpulD6jwmsscScZdd.', 'ajbry2124@110.com', 3, 0, '', '', 'add', '', '2020-07-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notvaction`
--
ALTER TABLE `notvaction`
  ADD PRIMARY KEY (`not_id`);

--
-- Indexes for table `prem`
--
ALTER TABLE `prem`
  ADD PRIMARY KEY (`prem_id`),
  ADD KEY `c_name` (`c_name`);

--
-- Indexes for table `premmanth`
--
ALTER TABLE `premmanth`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prem_id` (`prems_id`),
  ADD KEY `c_name` (`c_name`);

--
-- Indexes for table `storby`
--
ALTER TABLE `storby`
  ADD PRIMARY KEY (`stor_by`);

--
-- Indexes for table `storseal`
--
ALTER TABLE `storseal`
  ADD PRIMARY KEY (`stor_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `dept`
--
ALTER TABLE `dept`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `notvaction`
--
ALTER TABLE `notvaction`
  MODIFY `not_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2183;

--
-- AUTO_INCREMENT for table `prem`
--
ALTER TABLE `prem`
  MODIFY `prem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `premmanth`
--
ALTER TABLE `premmanth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=570;

--
-- AUTO_INCREMENT for table `storby`
--
ALTER TABLE `storby`
  MODIFY `stor_by` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `storseal`
--
ALTER TABLE `storseal`
  MODIFY `stor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `prem`
--
ALTER TABLE `prem`
  ADD CONSTRAINT `prem_ibfk_1` FOREIGN KEY (`c_name`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `premmanth`
--
ALTER TABLE `premmanth`
  ADD CONSTRAINT `premmanth_ibfk_1` FOREIGN KEY (`prems_id`) REFERENCES `prem` (`prem_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `premmanth_ibfk_2` FOREIGN KEY (`c_name`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

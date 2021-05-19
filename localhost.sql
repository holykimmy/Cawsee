-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 19, 2021 at 08:59 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id16617766_data`
--
CREATE DATABASE IF NOT EXISTS `id16617766_data` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id16617766_data`;

-- --------------------------------------------------------

--
-- Table structure for table `beverage`
--

CREATE TABLE `beverage` (
  `id` int(50) NOT NULL,
  `iname` varchar(100) CHARACTER SET utf8 COLLATE utf8_german2_ci NOT NULL,
  `amount` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `detail` text NOT NULL,
  `img` varchar(200) NOT NULL,
  `date_save` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `beverage`
--

INSERT INTO `beverage` (`id`, `iname`, `amount`, `price`, `detail`, `img`, `date_save`) VALUES
(11, 'คาปูชิโน่', 100, 60, 'อร่อย', '98450314620210519_030249.PNG', '2021-05-18 20:02:49'),
(12, 'อเมริกาโน่', 100, 65, 'อร่อยมาก', '190742563320210519_030402.PNG', '2021-05-18 20:04:02'),
(13, 'มอคค่า', 100, 70, 'อร่อยมาก', '171682775320210519_030533.PNG', '2021-05-18 20:05:33'),
(15, 'ลาเต้', 100, 75, 'อร่อยมาก', '137151117920210519_030729.PNG', '2021-05-18 20:07:29'),
(16, 'เอสเพรชโซ่', 100, 75, 'อร่อยมาก', '43080309020210519_031035.PNG', '2021-05-18 20:10:35'),
(17, 'กาแฟ', 40, 100, 'ดื่มแล้วสดชื่น', '141341257020210519_153636.jpg', '2021-05-19 08:36:36');

-- --------------------------------------------------------

--
-- Table structure for table `cake`
--

CREATE TABLE `cake` (
  `id` int(255) NOT NULL,
  `iname` varchar(100) NOT NULL,
  `amount` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `detail` text NOT NULL,
  `img` varchar(200) NOT NULL,
  `date_save` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cake`
--

INSERT INTO `cake` (`id`, `iname`, `amount`, `price`, `detail`, `img`, `date_save`) VALUES
(4, 'เค้กช็อกโกแล็ต', 60, 85, 'อร่อย', '28588555420210519_031136.jpg', '2021-05-18 20:11:36'),
(5, 'เค้กมะพร้าว', 100, 75, 'อร่อย', '97289503120210519_031253.jpg', '2021-05-18 20:12:53'),
(6, 'เค้กสตอร์เบอร์รี่', 60, 85, 'อร่อย', '108413490820210519_031512.jpg', '2021-05-18 20:15:12');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `price`) VALUES
(1, 'Mixed Color', '1.jpeg', '400'),
(2, 'Dark Color', '2.jpeg', '300'),
(3, 'Red Mixed  ', '3.jpeg', '400'),
(4, 'Green Color  ', '5.jpeg', '500'),
(5, 'Blue Color', '6.jpeg', '600'),
(6, 'Dark Blue', '7.jpeg', '700'),
(7, 'Grey Color', '8.jpeg', '800');

-- --------------------------------------------------------

--
-- Table structure for table `soda`
--

CREATE TABLE `soda` (
  `id` int(255) NOT NULL,
  `iname` varchar(100) NOT NULL,
  `amount` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `detail` text NOT NULL,
  `img` varchar(200) NOT NULL,
  `date_save` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `soda`
--

INSERT INTO `soda` (`id`, `iname`, `amount`, `price`, `detail`, `img`, `date_save`) VALUES
(16, 'มะนาวโซดา', 100, 45, 'อร่อย', '168644438520210519_034515.PNG', '2021-05-18 20:45:15'),
(17, 'เลม่อนโซดา', 100, 45, 'อร่อย', '2881048320210519_034624.PNG', '2021-05-18 20:46:24'),
(18, 'แดงมะนาวโซดา', 56, 45, 'อร่อย', '154503529120210519_034723.PNG', '2021-05-18 20:47:23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(200) CHARACTER SET utf8 COLLATE utf8_german2_ci NOT NULL,
  `p_detail` text CHARACTER SET utf8 NOT NULL,
  `p_price` float NOT NULL,
  `p_img` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `date_save` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='table product';

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`p_id`, `p_name`, `p_detail`, `p_price`, `p_img`, `date_save`) VALUES
(1, 'scd', 'dc', 100, '73447328820210518_050111.PNG', '2021-05-17 22:01:11'),
(2, 'adf', 'far', 100, '207965669220210518_050222.PNG', '2021-05-17 22:02:22'),
(3, 'scd', 'dc', 100, '156692956020210518_050413.PNG', '2021-05-17 22:04:13');

-- --------------------------------------------------------

--
-- Table structure for table `tea`
--

CREATE TABLE `tea` (
  `id` int(255) NOT NULL,
  `iname` varchar(100) NOT NULL,
  `amount` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `detail` text NOT NULL,
  `img` varchar(200) NOT NULL,
  `date_save` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tea`
--

INSERT INTO `tea` (`id`, `iname`, `amount`, `price`, `detail`, `img`, `date_save`) VALUES
(10, 'ชานมไต้หวัน', 100, 50, 'อร่อย', '1050488220210519_031646.PNG', '2021-05-18 20:16:46'),
(12, 'ชานมกล้วย', 100, 56, 'อร่อย', '13806753320210519_031900.PNG', '2021-05-18 20:19:00'),
(13, 'ชานมเผือก', 100, 45, 'อร่อย', '67024331320210519_032049.PNG', '2021-05-18 20:20:49'),
(14, 'ชานม', 100, 45, 'อร่อย', '64097768420210519_032147.PNG', '2021-05-18 20:21:47'),
(15, 'ชาเขียวนมสด', 100, 50, 'อร่อย', '78081579820210519_032254.PNG', '2021-05-18 20:22:54'),
(16, 'ชาไทย', 100, 65, 'อร่อย', '99816095720210519_034421.PNG', '2021-05-18 20:44:21');

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

CREATE TABLE `user1` (
  `id` int(255) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` text NOT NULL,
  `address` text NOT NULL,
  `level` varchar(100) NOT NULL DEFAULT 'member'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user1`
--

INSERT INTO `user1` (`id`, `fname`, `lname`, `email`, `password`, `phone`, `address`, `level`) VALUES
(1, 'admin', 'cawsee', 'admin@cawsee', 'cwfinally', '', '', 'admin'),
(15, 'เณศรา', 'ห่อจันทร์', 'nessara@gmail.com', '12344321', '0800503114', '127 อซท ม.23 อ.อออทม จ.โซล 10010', 'member'),
(17, 'คิ้ม', 'สวยย', 'kimz@gmail.com', '5555', '0800000000', '127 อซท ม.23 อ.อออทม จ.โซล 10010', 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beverage`
--
ALTER TABLE `beverage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cake`
--
ALTER TABLE `cake`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soda`
--
ALTER TABLE `soda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `tea`
--
ALTER TABLE `tea`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user1`
--
ALTER TABLE `user1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beverage`
--
ALTER TABLE `beverage`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `cake`
--
ALTER TABLE `cake`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `soda`
--
ALTER TABLE `soda`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tea`
--
ALTER TABLE `tea`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user1`
--
ALTER TABLE `user1`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

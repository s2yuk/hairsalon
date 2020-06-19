-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 19, 2020 at 02:30 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hairsalon`
--

-- --------------------------------------------------------

--
-- Table structure for table `catalog`
--

CREATE TABLE `catalog` (
  `catalog_id` int(11) NOT NULL,
  `catalog_photo` varchar(100) NOT NULL,
  `catalog_comment` varchar(1000) NOT NULL,
  `photo_stylist` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `catalog`
--

INSERT INTO `catalog` (`catalog_id`, `catalog_photo`, `catalog_comment`, `photo_stylist`) VALUES
(12, 'catalog1.jpg', 'Welcome to our hair salon!', 'Smith'),
(13, 'catalog2.jpg', 'It is nice to see you :)', 'Smith'),
(14, 'catalog3.jpg', 'We are always waiting for you.', 'Catherine '),
(15, 'catalog4.jpg', 'We can deliver the trend style.', 'Tom'),
(16, 'catalog5.jpg', 'Set your hair for beautiful moment...', 'Catherine '),
(17, 'catalog6.jpg', 'natural styling', 'Tom'),
(18, 'catalog7.jpg', 'casual style!', 'Jimmy'),
(19, 'catalog8.jpg', 'Summer is comming soon.', 'Smith');

-- --------------------------------------------------------

--
-- Table structure for table `catalog_comment`
--

CREATE TABLE `catalog_comment` (
  `comment_id` int(11) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `catalog_id` int(11) NOT NULL,
  `user_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `catalog_comment`
--

INSERT INTO `catalog_comment` (`comment_id`, `comment`, `user`, `catalog_id`, `user_id`) VALUES
(36, 'cool !!', 'test', 18, 3),
(37, 'like :)', 'test', 17, 3),
(38, 'awesome!', 'test', 16, 3),
(39, 'Nice.', 'test', 19, 3),
(40, 'Interesting !', 'test', 15, 3),
(41, 'Beautiful photo', 'test', 14, 3),
(42, 'good :)', 'test', 13, 3),
(43, 'Hi !', 'test', 12, 3),
(44, 'cool', 'user', 19, 4),
(45, 'hey nice photo!', 'user', 18, 4),
(46, 'Beautiful ', 'user', 17, 4),
(47, 'Stunning !', 'user', 16, 4),
(48, 'wow', 'user', 15, 4),
(49, 'like.', 'user', 14, 4),
(50, 'Hello !', 'user', 13, 4),
(51, 'Hello !', 'user', 12, 4),
(52, 'thank you!', 'admin', 18, 2),
(53, 'thank you!', 'admin', 19, 2);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `c_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `c_gender` varchar(10) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `bio` varchar(100) DEFAULT NULL,
  `login_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`c_id`, `fname`, `lname`, `c_gender`, `telephone`, `bio`, `login_id`) VALUES
(1, 'yuka', 'matsumoto', 'female', '08012345678', NULL, 1),
(2, 'admin', 'admin1', 'male', '09012345678', NULL, 2),
(3, 'test', 'test1', 'male', '1234567890', 'test to add bio', 3),
(4, 'user', 'user1', 'male', '04812345678', NULL, 4),
(6, 'test', 'test', 'male', '18181818181', NULL, 6),
(7, 'new', 'client1', 'femal', '09011111111', NULL, 7);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(30) NOT NULL,
  `contact_email` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `service` varchar(100) NOT NULL,
  `stylist` varchar(100) NOT NULL,
  `comment` varchar(300) NOT NULL,
  `iphoto` varchar(300) NOT NULL,
  `c_id` int(11) DEFAULT NULL,
  `send_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_name`, `contact_email`, `gender`, `service`, `stylist`, `comment`, `iphoto`, `c_id`, `send_time`) VALUES
(1, 'yuka', 'yuka@kredo', '', '', 'Manager', 'test message', '', 1, '2020-06-01 11:56:43'),
(2, 'yuka', 'yuka@kredo', '', 'hair', 'no_choice', 'photo test', '', 1, '2020-06-02 11:56:43'),
(3, 'test', 'test@kredo', 'male', 'hair', 'Manager', 'photo test2', '', 3, '2020-06-06 11:56:43'),
(4, 'a', 'admin@kredo', 'male', 'nail', 'no_choice', 'test', '', 2, '2020-06-06 11:56:43'),
(5, 'u', 'user@kredo', 'male', 'hair', 'Manager', 'photo', 'IMG_2637.JPG', 4, '2020-06-06 11:56:43'),
(6, 'test', 'test@kredo', 'female', 'hair', 'no_choice', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum labore quaerat nihil voluptatem, optio ipsum placeat inventore error totam atque odio quis saepe nesciunt maiores reiciendis adipisci. Quod, officiis nihil?', '', 3, '2020-06-06 11:56:43'),
(7, 'user', 'user@kredo', 'male', 'hair', 'no_choice', 'photo upload test', 'IMG_2631.JPG', 4, '2020-06-06 11:56:43'),
(8, 'yuka matsumoto', 'yuka@kredo', '', '', 'no_choice', '', '', 1, '2020-06-06 11:56:43'),
(9, 'yuka matsumoto', 'yuka@kredo', '', '', 'no_choice', 'photo upload test', 'IMG_2635.JPG', 1, '2020-06-06 11:56:43'),
(11, 'yuka matsumoto', 'yuka@kredo', '', '', 'no_choice', 'test message', 'スクリーンショット 2020-06-08 17.52.50.png', 1, '2020-06-19 07:19:43'),
(13, 'test test1', 'test@kredo', 'female', 'cut', 'Smith', 'I want to have trend hair style...', '', 3, '2020-06-19 13:23:00'),
(14, 'yuka matsumoto', 'yuka@kredo', 'female', 'color', 'Jimmy', 'I want have new color!!\r\nis it available?', 'catalog4.jpg', 1, '2020-06-19 14:14:03'),
(15, 'new client1', 'new@kredo', 'female', 'perm', 'no_choice', 'i want to try perm....', '', 7, '2020-06-19 14:22:50');

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `coupon_id` int(11) NOT NULL,
  `coupon_name` varchar(100) NOT NULL,
  `coupon_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`coupon_id`, `coupon_name`, `coupon_price`) VALUES
(1, 'Cut + Color + Treatment ', 7500),
(2, 'Cut + Color + Aujua treatment', 9900),
(3, 'Aujua treatment + Shampoo Blow', 4950),
(4, 'Cut + Aujua treatment', 7150),
(5, 'Cut + Shampoo Blow  * For woman ', 4400),
(6, 'Cut + color ', 8250),
(7, 'Cut + Perm', 10450),
(8, 'Cut + Perm + Treatment', 11550),
(9, 'Cut + Perm + Aujua treatment', 13750);

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `info_id` int(11) NOT NULL,
  `news` varchar(1000) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`info_id`, `news`, `date`) VALUES
(3, 'Happy Valentine’s day! ', '2020-02-13'),
(4, 'Ready for summer', '2020-05-24'),
(5, 'new trend color available :)', '2020-06-19');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'U'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `email`, `password`, `status`) VALUES
(1, 'yuka@kredo', 'yuka', 'U'),
(2, 'admin@kredo', 'admin', 'A'),
(3, 'test@kredo', 'test', 'U'),
(4, 'user@kredo', 'user', 'U'),
(6, 'test@test', 'test', 'U'),
(7, 'new@kredo', 'new', 'U');

-- --------------------------------------------------------

--
-- Table structure for table `msg_reply`
--

CREATE TABLE `msg_reply` (
  `r_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `text` varchar(300) NOT NULL,
  `file` varchar(300) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `send_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `msg_reply`
--

INSERT INTO `msg_reply` (`r_id`, `c_id`, `text`, `file`, `user_id`, `send_time`) VALUES
(3, 8, 'reply test, no photo', '', 1, '2020-06-06 12:08:34'),
(7, 6, 'Reply test\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum labore quaerat nihil voluptatem, optio ipsum placeat inventore error totam atque odio quis saepe nesciunt maiores reiciendis adipisci.', '', 1, '2020-06-06 12:08:34'),
(9, 7, 'admin reply test', '', 2, '2020-06-06 12:08:34'),
(11, 8, 'like this style', 'IMG_2635.JPG', 1, '2020-06-06 12:08:34'),
(13, 7, 'image photo test', 'IMG_2635.JPG', 1, '2020-06-06 12:08:34'),
(15, 5, 'photo upload', 'IMG_2635.JPG', 1, '2020-06-06 12:08:34'),
(16, 9, 'reply photo upload test', 'IMG_2632.JPG', 1, '2020-06-06 12:08:34'),
(17, 8, 'admin reply photo test', 'IMG_2636.JPG', 2, '2020-06-06 12:08:34'),
(18, 6, 'user reply test .', '', 3, '2020-06-06 12:08:34'),
(22, 3, 'reply test ', '', 3, '2020-06-06 12:08:34'),
(29, 1, 'admin reply ', '', 2, '2020-06-06 12:08:34'),
(46, 9, 'photo test', 'IMG_2636.JPG', 1, '2020-06-06 12:08:34'),
(47, 1, 'user reply', '', 1, '2020-06-06 12:08:34'),
(48, 10, 'reply test', '', 5, '2020-06-06 12:09:03'),
(49, 14, 'hello ms.\r\nyes maam, we are ready to service :)', '', 2, '2020-06-19 14:17:19'),
(50, 15, 'please advice me!', '', 7, '2020-06-19 14:23:12'),
(51, 15, 'hi , i want to show some photos', 'catalog1.jpg', 2, '2020-06-19 14:24:03'),
(52, 15, 'how about this?', 'catalog2.jpg', 2, '2020-06-19 14:24:35');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reserve_id` int(11) NOT NULL,
  `reserve_date` date NOT NULL,
  `reserve_hour` varchar(10) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `c_id` int(11) NOT NULL,
  `order_menu` varchar(100) NOT NULL,
  `add_menu` varchar(100) DEFAULT NULL,
  `nomination` varchar(100) NOT NULL,
  `total_price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reserve_id`, `reserve_date`, `reserve_hour`, `fname`, `lname`, `c_id`, `order_menu`, `add_menu`, `nomination`, `total_price`) VALUES
(20, '2020-06-04', '16:00', 'yuka', 'matsumoto', 1, '1', '7', '', '9700'),
(43, '2020-06-12', '10:00', 'test', 'testt', 0, '1', '', '', '7500'),
(53, '2020-06-18', '14:00', 'yuka', 'test', 0, '1', '7', '', '9700'),
(61, '2020-06-20', '10:00', 'new', 'client', 0, '1', '', 'Smith', '7500'),
(62, '2020-06-24', '11:00', 'admin', 'admin1', 2, '1', '', 'Jimmy', '7500'),
(63, '2020-06-20', '10:00', 'admin', 'admin1', 2, '1', '16', 'Tom', '14100'),
(65, '2020-06-19', '10:00', 'yuka', 'test', 0, '', '1', '', '6600'),
(66, '2020-06-19', '12:00', 'test', 'user', 0, '', '3', 'Smith', '7700');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `nickname` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `rating` varchar(100) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `login_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `nickname`, `date`, `rating`, `comment`, `photo`, `login_id`) VALUES
(2, 'test test', '2020-02-03', '5', 'I recommend this salon :)                    ', '', 3),
(9, 'Yuka', '2020-02-01', '5', 'Look my hair color! This is what i wanted.. ;)', 'yuka.jpg', 3),
(14, 'anonymous', '2020-02-21', '5', '                            Contentment !!!', '', 5),
(15, 'yuka', '2020-05-21', '4', '                            good hair salon.', '', 1),
(16, 'yyy', '2020-06-06', '4', '                            good!!', '', 1),
(17, 'Yuka', '2020-06-09', '3', 'good service!', '', 2),
(18, 'anonymous', '2020-06-19', '5', 'Satisfied !!!', 'catalog1.jpg', 2),
(19, 'anonymous', '2020-06-19', '4', 'nice salon.', 'catalog8.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(30) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `service_name`, `price`) VALUES
(1, 'Stylist Cut', 6600),
(2, 'manager Cut', 7150),
(3, 'producer Cut', 7700),
(4, 'bangs Cut', 1650),
(5, 'one Color', 8800),
(6, 'bleach Color', 14300),
(7, '2 step', 2200),
(8, '4 step', 4400),
(9, 'aujua', 6600),
(10, 'Perm', 8800),
(11, 'Digital Perm', 12100),
(12, 'Bangs Perm', 3300),
(13, 'straight', 15400),
(14, 'part Straight', 6600),
(15, 'head Spa', 3300),
(16, 'Hair Set', 6600),
(17, 'Shampoo & Blow', 3300);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(30) NOT NULL,
  `position` varchar(100) NOT NULL,
  `staff_gender` varchar(10) NOT NULL,
  `staff_photo` varchar(100) NOT NULL,
  `staff_bio` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_name`, `position`, `staff_gender`, `staff_photo`, `staff_bio`) VALUES
(34, 'Smith', 'producer', 'Male', 'Staff1.jpg', 'owner'),
(35, 'Catherine ', 'manager', 'Female', 'Staff2.jpg', 'export of women’s beauty  '),
(36, 'Tom', 'stylist', 'Male', 'Staff3.jpg', 'TOP Stylist'),
(37, 'Jimmy', 'stylist', 'Male', 'Staff4.jpg', 'like japanese culture'),
(38, 'Jan', 'stylist', 'Male', 'Staff5.jpg', 'new stylist'),
(39, 'Emily ', 'assistant', 'Female', 'Staff6.jpg', 'hair assistant ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`catalog_id`);

--
-- Indexes for table `catalog_comment`
--
ALTER TABLE `catalog_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`info_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `msg_reply`
--
ALTER TABLE `msg_reply`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reserve_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catalog`
--
ALTER TABLE `catalog`
  MODIFY `catalog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `catalog_comment`
--
ALTER TABLE `catalog_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `coupon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `msg_reply`
--
ALTER TABLE `msg_reply`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reserve_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

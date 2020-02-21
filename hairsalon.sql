-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 21, 2020 at 04:26 AM
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
(3, 'cabinet.jpg', 'cabinet photo', 'takuto'),
(4, 'comit2.jpg', '2 people ', 'Anna'),
(5, 'comit4.jpg', 'update from admin.php', 'yuuuukkaaaaa'),
(7, 'hairsalon2.jpg', 'inside our salon', 'Yuya Yamaguchi'),
(8, 'hairsalon3.jpg', 'this is private room..', 'Yuya Yamaguchi'),
(9, 'short6.jpg', 'short hair style :)', 'Yasuaki Ogawa'),
(10, 'long2.jpg', 'how is it?', 'Yasuaki Ogawa'),
(11, 'm3.jpg', 'airy hair style', 'Eri Hiramoto');

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
(1, '$comment', '$comment_user', 3, 0),
(2, '$comment', '$comment_user', 3, 3),
(3, 'asdasda', 'yuka', 5, 1),
(4, 'shiro', 'yuka', 5, 1),
(5, 'hey', 'yuka', 7, 1),
(6, 'beautiful', 'yuka', 8, 1),
(7, 'nice :)', 'yuka', 8, 1),
(8, 'cool salon', 'yuka', 7, 1),
(9, 'happy', 'yuka', 4, 1),
(10, 'Interesting !', 'yuka', 3, 1),
(11, 'test success ', 'yuka', 7, 1),
(12, 'ha;feruh panoerhapomimhkjdfhsluhlifudcngfyudcfyugr', 'yuka', 7, 1),
(13, 'cool', 'user', 8, 4),
(14, 'Recommend !', 'admin', 9, 2),
(15, 'thank you!', 'admin', 5, 2),
(16, 'thank you!', 'admin', 5, 2),
(17, 'sample', 'admin', 3, 2),
(18, 'like!', 'Takuto', 11, 5),
(19, 'hey', 'Takuto', 10, 5),
(20, 'hey', 'Takuto', 10, 5),
(21, '', 'Takuto', 11, 5),
(22, '', 'Takuto', 10, 5),
(23, '', 'Takuto', 10, 5),
(24, 'sample', 'Takuto', 10, 5),
(25, 'sample', 'Takuto', 10, 5),
(26, 'cool', 'Takuto', 5, 5),
(27, 'cute!', 'Takuto', 9, 5),
(28, 'thank you!', 'admin', 10, 2),
(29, 'thank you!', 'admin', 11, 2),
(30, 'thank you!', 'admin', 9, 2),
(31, 'cool', 'admin', 11, 2),
(32, 'cool', 'admin', 9, 2);

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
(1, 'yuka', 'matsumoto', 'femal', '08012345678', NULL, 1),
(2, 'admin', 'admin1', 'male', '09012345678', NULL, 2),
(3, 'test', 'test1', 'male', '1234567890', NULL, 3),
(4, 'user', 'user1', 'male', '04812345678', NULL, 4),
(5, 'Takuto', 'Imari', 'male', '09022223333', NULL, 5);

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
(1, 'ftyouygiuhpi;jhkhi;@', '2020-02-05'),
(2, 'kseokijrgoirj', '2020-02-12'),
(3, 'Happy Valentine’s day! ', '2020-02-13');

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
(5, 'takuto@kredo', 'takuto', 'U');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `menu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `menu`) VALUES
(1, 'cut');

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
  `order_menu2` varchar(100) DEFAULT NULL,
  `add_menu` varchar(100) DEFAULT NULL,
  `nomination` varchar(100) NOT NULL,
  `total_price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reserve_id`, `reserve_date`, `reserve_hour`, `fname`, `lname`, `c_id`, `order_menu`, `order_menu2`, `add_menu`, `nomination`, `total_price`) VALUES
(1, '2020-02-19', '10:00:00', 'yuka', 'matsumoto', 1, 'cut', 'color', 'treatment', 'yamaguchi', '18000'),
(7, '2020-02-25', '10:00:00', 'yuka', 'matsumoto', 1, 'Cut + Color + Treatment ', '', '2 step', 'Eri Hiramoto', '9700'),
(8, '2020-02-26', '10:00:00', 'yuka', 'matsumoto', 1, 'Cut + Color + Aujua treatment', '', '2 step', 'You Ichijo', '12100'),
(9, '2020-02-27', '10:00:00', 'yuka', 'matsumoto', 1, '', 'Yamaguchi Cut+ Color', '2 step', 'Yuya Yamaguchi', '18700'),
(10, '2020-02-20', '10:00:00', 'user', 'user1', 4, 'Cut + color ', '', 'aujua', 'KOUSUKE', '14850'),
(11, '2020-02-20', '10:00:00', 'test', 'test1', 3, 'Cut + Perm', '', 'Hair Set', 'Eri Hiramoto', '17050'),
(13, '2020-02-21', '10:00:00', 'test', 'test1', 3, 'Cut + Color + Treatment ', '', 'Stylist Cut', 'Yasuaki Ogawa', '14100'),
(14, '2020-02-21', '11:00:00', 'test', 'test1', 3, 'Cut + Color + Treatment ', '', '', 'Eri Hiramoto', '7500'),
(15, '2020-02-23', '10:00', 'Takuto', 'Imari', 5, 'Cut + Color + Treatment ', '', '', 'Yasuaki Ogawa', '7500');

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
(12, 'anonymous', '2020-02-05', '4', 'I  will repeat here :)\r\n ', 'comit3.jpg', 4),
(13, 'TENGA', '2020-02-16', '5', '                            NICE!', '', 4),
(14, 'anonymous', '2020-02-21', '5', '                            Contentment !!!', '', 5);

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
(17, 'Shampoo & Blow', 3300),
(18, 'Yamaguchi Cut + Treatment', 12100),
(19, 'Ogawa Cut + Treatment', 11550),
(20, 'Yamaguchi Cut+ Color', 16500),
(21, 'Ogawa Cut +Color', 15950),
(22, 'Kousuke Cut + Color', 14300);

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `skill_id` int(11) NOT NULL,
  `skillname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`skill_id`, `skillname`) VALUES
(1, 'Cut'),
(2, 'Color'),
(3, 'Perm'),
(4, 'Straight-perm'),
(5, 'Treatment '),
(6, 'Others ');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(30) NOT NULL,
  `position` varchar(100) NOT NULL,
  `staff_gender` varchar(1) NOT NULL,
  `staff_photo` varchar(100) NOT NULL,
  `staff_bio` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_name`, `position`, `staff_gender`, `staff_photo`, `staff_bio`) VALUES
(27, 'Yuya Yamaguchi', 'producer', 'M', 'staff1.jpg', 'our producer'),
(28, 'Yasuaki Ogawa', 'manager', 'M', 'staff2.jpg', 'Manager'),
(29, 'KOUSUKE', 'stylist', 'M', 'staff3.jpg', 'TOP Stylist'),
(30, 'Eri Hiramoto', 'stylist', 'F', 'staff4.jpg', '6th years'),
(31, 'You Ichijo', 'stylist', 'M', 'staff5.jpg', '6th years'),
(32, 'mitsuki', 'assistant', 'F', 'staff6.jpg', 'trainee');

-- --------------------------------------------------------

--
-- Table structure for table `staffs_skills`
--

CREATE TABLE `staffs_skills` (
  `staffskill_id` int(11) NOT NULL,
  `user_id` int(100) NOT NULL,
  `skill_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staffs_skills`
--

INSERT INTO `staffs_skills` (`staffskill_id`, `user_id`, `skill_name`) VALUES
(2, 27, 'Perm'),
(3, 27, 'Treatment '),
(4, 28, 'Cut'),
(5, 28, 'Perm'),
(6, 28, 'Straight-perm'),
(7, 28, 'Treatment '),
(8, 28, 'Others '),
(9, 29, 'Perm'),
(10, 29, 'Straight-perm'),
(11, 29, 'Treatment '),
(12, 30, 'Cut'),
(13, 30, 'Color'),
(14, 30, 'Treatment '),
(15, 30, 'Perm'),
(16, 30, 'Straight-perm'),
(17, 30, 'Treatment '),
(18, 31, 'Perm'),
(19, 31, 'Straight-perm'),
(20, 32, 'Treatment '),
(21, 32, 'Others '),
(22, 31, 'Cut'),
(23, 31, 'Color'),
(24, 31, 'Perm'),
(25, 31, 'Straight-perm'),
(26, 31, 'Treatment '),
(27, 31, 'Others '),
(28, 32, 'Treatment '),
(29, 32, 'Others ');

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE `time` (
  `hour_id` int(11) NOT NULL,
  `time_number` varchar(30) NOT NULL,
  `time_signe` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `time`
--

INSERT INTO `time` (`hour_id`, `time_number`, `time_signe`) VALUES
(1, '10:00', '×'),
(2, '11:00', '×'),
(3, '12:00', '◎'),
(4, '13:00', '◎'),
(5, '14:00', '◎'),
(6, '15:00', '◎'),
(7, '16:00', '×'),
(8, '17:00', '×'),
(9, '18:00', '×'),
(10, '19:00', '×'),
(11, '20:00', '×');

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
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

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
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`skill_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `staffs_skills`
--
ALTER TABLE `staffs_skills`
  ADD PRIMARY KEY (`staffskill_id`);

--
-- Indexes for table `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`hour_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catalog`
--
ALTER TABLE `catalog`
  MODIFY `catalog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `catalog_comment`
--
ALTER TABLE `catalog_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `coupon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reserve_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `staffs_skills`
--
ALTER TABLE `staffs_skills`
  MODIFY `staffskill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `time`
--
ALTER TABLE `time`
  MODIFY `hour_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 14, 2020 at 05:41 AM
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
(24, 'sample', 'Takuto', 10, 5),
(25, 'sample', 'Takuto', 10, 5),
(26, 'cool', 'Takuto', 5, 5),
(27, 'cute!', 'Takuto', 9, 5),
(28, 'thank you!', 'admin', 10, 2),
(29, 'thank you!', 'admin', 11, 2),
(30, 'thank you!', 'admin', 9, 2),
(31, 'cool', 'admin', 11, 2),
(32, 'cool', 'admin', 9, 2),
(33, 'thank you!', 'admin', 8, 2);

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
(3, 'test', 'test1', 'male', '1234567890', NULL, 3),
(4, 'user', 'user1', 'male', '04812345678', NULL, 4),
(5, 'Takuto', 'Imari', 'male', '09022223333', 'test bio', 5),
(6, 'test', 'test', 'male', '18181818181', NULL, 6);

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
(10, 'Takuto Imari', 'takuto@kredo', 'male', 'hair', 'Manager', 'Hello message test', '', 5, '2020-06-06 11:58:36');

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
(3, 'Happy Valentine’s day! ', '2020-02-13'),
(4, 'Ready for summer', '2020-05-24');

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
(5, 'takuto@kredo', 'takuto', 'U'),
(6, 'test@test', 'test', 'U');

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
(8, 8, 'user reply c_id =8', '', 1, '2020-06-06 12:08:34'),
(9, 7, 'admin reply test', '', 2, '2020-06-06 12:08:34'),
(11, 8, 'like this style', 'IMG_2635.JPG', 1, '2020-06-06 12:08:34'),
(13, 7, 'image photo test', 'IMG_2635.JPG', 1, '2020-06-06 12:08:34'),
(15, 5, 'photo upload', 'IMG_2635.JPG', 1, '2020-06-06 12:08:34'),
(16, 9, 'reply photo upload test', 'IMG_2632.JPG', 1, '2020-06-06 12:08:34'),
(17, 8, 'admin reply photo test', 'IMG_2636.JPG', 2, '2020-06-06 12:08:34'),
(18, 6, 'user reply test .', '', 3, '2020-06-06 12:08:34'),
(22, 3, 'reply test ', '', 3, '2020-06-06 12:08:34'),
(29, 1, 'admin reply ', '', 2, '2020-06-06 12:08:34'),
(36, 1, 'tete', 'IMG_2637.JPG', 2, '2020-06-06 12:08:34'),
(46, 9, 'photo test', 'IMG_2636.JPG', 1, '2020-06-06 12:08:34'),
(47, 1, 'user reply', '', 1, '2020-06-06 12:08:34'),
(48, 10, 'reply test', '', 5, '2020-06-06 12:09:03');

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
(19, '2020-06-01', '10:00', 'yuka', 'matsumoto', 1, '1', '8', '', '11900'),
(20, '2020-06-04', '16:00', 'yuka', 'matsumoto', 1, '1', '7', '', '9700'),
(24, '2020-06-03', '10:00', 'test', 'test1', 3, '2', '', 'Yasuaki Ogawa', '9900'),
(27, '2020-06-08', '10:00', 'yuka', 'matsumoto', 1, '3', '6', 'KOUSUKE', '19250'),
(29, '2020-06-13', '10:00', 'yuka', 'matsumoto', 1, '2', '', 'You Ichijo', '9900'),
(34, '2020-06-07', '10:00', 'new', 'new', 0, '3', '', 'Eri Hiramoto', '11550'),
(36, '2020-06-08', '11:00', 'neww', 'neww', 0, '8', '', 'You Ichijo', '11550'),
(37, '2020-06-08', '12:00', 'test', 'test', 0, '', '', '', '6600'),
(39, '2020-06-09', '11:00', 'Takuto', 'Imari', 5, '7', '', 'Eri Hiramoto', '10450'),
(40, '2020-06-10', '10:00', 'test', 'test', 6, '1', '', '', '7500'),
(41, '2020-06-11', '19:00', 'admin', 'admin1', 2, '', '3', 'KOUSUKE', '7700'),
(42, '2020-06-13', '14:00', 'yuka', 'matsumoto', 1, '1', '', 'Hiramoto', '7500'),
(43, '2020-06-12', '10:00', 'test', 'testt', 0, '1', '', '', '7500'),
(44, '2020-06-12', '10:00', 'www', 'www', 0, '', '', '', '6600'),
(45, '2020-06-15', '10:00', 'eee', 'eee', 0, '1', '', '', '7500'),
(46, '2020-06-14', '10:00', 'test', 'test', 0, '6', '', 'Yuya ', '10450'),
(47, '2020-06-12', '11:00', 'admin', 'admin1', 2, '5', '', 'KOUSUKE', '4400'),
(48, '2020-06-18', '18:00', 'admin', 'admin1', 2, '1', '', 'Hiramoto', '7500');

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
(14, 'anonymous', '2020-02-21', '5', '                            Contentment !!!', '', 5),
(15, 'yuka', '2020-05-21', '4', '                            good hair salon.', '', 1),
(16, 'yyy', '2020-06-06', '4', '                            good!!', '', 1);

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
(27, 'Yuya ', 'producer', 'Male', 'staff1.jpg', 'our producer'),
(28, 'Yasu', 'producer', 'Male', 'staff2.jpg', 'Manager'),
(29, 'KOUSUKE', 'stylist', 'Male', 'staff3.jpg', 'TOP Stylist'),
(30, 'Hiramoto', 'stylist', 'Female', 'staff4.jpg', '6th years'),
(31, 'You', 'stylist', 'Male', 'staff5.jpg', '6th years'),
(32, 'mitsuki', 'assistant', 'Female', 'staff6.jpg', 'trainee');

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
  MODIFY `catalog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `catalog_comment`
--
ALTER TABLE `catalog_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `coupon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `msg_reply`
--
ALTER TABLE `msg_reply`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reserve_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

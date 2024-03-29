-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2024 at 04:54 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission_form`
--

CREATE TABLE `admission_form` (
  `reg_no` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_admin`
--

CREATE TABLE `t_admin` (
  `ad_id` varchar(10) NOT NULL,
  `ad_name` varchar(50) NOT NULL,
  `ad_pswd` varchar(50) NOT NULL,
  `ad_eml` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_admin`
--

INSERT INTO `t_admin` (`ad_id`, `ad_name`, `ad_pswd`, `ad_eml`) VALUES
('AD00000001', 'admin', 'admin', 'admin@gmail.com'),
('admin', 'Jakir', '123', 'jakirkhan9@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `t_status`
--

CREATE TABLE `t_status` (
  `s_id` varchar(50) NOT NULL,
  `s_stat` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_status`
--

INSERT INTO `t_status` (`s_id`, `s_stat`) VALUES
('CUTM00008', 'Applied'),
('CUTM00012', 'Applied'),
('CUTM00018 ', 'Applied'),
('CUTM00019', 'Applied'),
('CUTM00020', 'Applied'),
('CUTM00021', 'Applied');

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `s_detid` varchar(15) NOT NULL,
  `s_id` varchar(15) NOT NULL,
  `s_phn1` int(11) NOT NULL,
  `s_phn2` int(11) NOT NULL,
  `f_name` varchar(45) NOT NULL,
  `f_occ` varchar(45) NOT NULL,
  `f_phn` int(11) NOT NULL,
  `m_name` varchar(45) NOT NULL,
  `m_occ` varchar(45) NOT NULL,
  `m_phn` int(11) NOT NULL,
  `s_iop` int(11) NOT NULL,
  `s_sex` varchar(6) NOT NULL,
  `s_cadr` varchar(50) NOT NULL,
  `s_cst` varchar(20) NOT NULL,
  `s_cpin` int(6) NOT NULL,
  `s_cmob` int(20) NOT NULL,
  `s_padr` varchar(50) NOT NULL,
  `s_pst` varchar(20) NOT NULL,
  `s_ppin` int(6) NOT NULL,
  `s_pmob` int(11) NOT NULL,
  `s_ruc` varchar(11) NOT NULL,
  `s_natn` varchar(50) NOT NULL,
  `s_relg` varchar(25) DEFAULT NULL,
  `s_catg` varchar(10) NOT NULL,
  `s_mainsxam` varchar(20) NOT NULL,
  `s_mainsrank` varchar(10) NOT NULL,
  `s_mainsroll` varchar(20) NOT NULL,
  `s_mainsbrnch` varchar(45) NOT NULL,
  `s_branch` varchar(100) NOT NULL,
  `s_college` varchar(25) NOT NULL,
  `s_center` varchar(20) NOT NULL,
  `s_crtype` varchar(10) NOT NULL,
  `s_pcm` varchar(10) NOT NULL,
  `s_tenbrd` varchar(50) NOT NULL,
  `s_tenyop` varchar(25) NOT NULL,
  `s_tentotmark` varchar(4) NOT NULL,
  `s_tenmarkob` varchar(4) NOT NULL,
  `s_tendiv` varchar(4) NOT NULL,
  `s_tenprcmark` varchar(4) NOT NULL,
  `s_twlbrd` varchar(7) NOT NULL,
  `s_twlyop` varchar(4) NOT NULL,
  `s_twltotmark` varchar(4) NOT NULL,
  `s_twlmarkob` varchar(4) NOT NULL,
  `s_twldiv` varchar(4) NOT NULL,
  `s_twlprcmark` varchar(4) NOT NULL,
  `s_moi` varchar(8) NOT NULL,
  `s_pay` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`s_detid`, `s_id`, `s_phn1`, `s_phn2`, `f_name`, `f_occ`, `f_phn`, `m_name`, `m_occ`, `m_phn`, `s_iop`, `s_sex`, `s_cadr`, `s_cst`, `s_cpin`, `s_cmob`, `s_padr`, `s_pst`, `s_ppin`, `s_pmob`, `s_ruc`, `s_natn`, `s_relg`, `s_catg`, `s_mainsxam`, `s_mainsrank`, `s_mainsroll`, `s_mainsbrnch`, `s_branch`, `s_college`, `s_center`, `s_crtype`, `s_pcm`, `s_tenbrd`, `s_tenyop`, `s_tentotmark`, `s_tenmarkob`, `s_tendiv`, `s_tenprcmark`, `s_twlbrd`, `s_twlyop`, `s_twltotmark`, `s_twlmarkob`, `s_twldiv`, `s_twlprcmark`, `s_moi`, `s_pay`) VALUES
('DE00000003', 'CUTM00003', 1234567890, 1234567890, 'Madhusudan Mahato', 'Employee', 1234567890, 'Sheela Mahato', 'Housemaker', 1234567890, 400000, 'Female', 'Jamshedpur', 'Jharkhand', 831004, 1234567890, 'Jamshedpur', 'Jharkhand', 831004, 1234567890, 'City', 'Indian', 'Sikh', 'GEN', 'JEE MAIN', '723', '71', 'Jamshedpur', 'COMPUTER SCIENCE AND ENG', 'CIT', 'Bhubaneshwar', 'Regular', '80', 'ICSE', '2011', '100', '80', '1', '80', '     Ot', '2014', '100', '66', '1', '79', 'English', 'Self'),
('DE00000004', 'CUTM00008', 2147483647, 2147483647, 'Rakesh Saigal', 'Journalist', 2147483647, 'Nisha Saigal', 'Homemaker', 2147483647, 200000, 'Female', 'Near Meera Hotel', 'Odisha', 768028, 2147483647, 'Near Meera Hotel', 'Odisha', 768028, 2147483647, 'City', 'Indian', 'Hindu', 'GEN', 'OJEE', '177', '3456278', 'Bhubaneshwar', 'ELECTRICAL AND ELECTRONICS ENG', 'CIT', 'Bhubaneshwar', 'Regular', '89', 'CBSE', '2011', '500', '483', '1', '89', 'chse', '2013', '600', '512', '1', '75', 'English', 'Loan'),
('DE00000005', 'CUTM00012', 0, 0, 'MD.x', 'Businessman', 0, 'Mst.Y', 'Housewife', 0, 50000, '', 'Bangladesh', 'Dhaka', 4545, 123456789, 'Bangladesh', 'Dhaka', 4545, 123456789, '', 'Bangladesh', 'Islam', '', '', '', '', '', 'Computer Science Engineering', '', '', '', '', 'Rajshahi', '2017', '1300', '1050', 'A', '75', ' Rajsha', '2019', '1200', '950', 'B+', '62', '', ''),
('DE00000006', 'CUTM00018 ', 2147483647, 2147483647, 'Md.MMMM', 'Business', 1823123232, 'Mst.Y', 'Housewife', 1823123232, 50000, 'Male', 'Bangladesh', 'Raj', 4545, 1823123232, 'Bangladesh', 'Khulna', 4100, 1823123232, '', 'Bangladeshi', 'Islam', '', '', '', '', '', 'CIVIL ENGINEERING', '', '', '', '', 'Rajshahi', '2017', '1300', '1200', 'A', '75', ' Rajsha', '2016', '1100', '950', 'B+', '62', '', ''),
('DE00000007', 'CUTM00019', 2147483647, 2147483647, 'Md. Saaaaaaaaaa', 'Businessman', 2147483647, 'Mst. Laaaaaa', 'Housewife', 2147483647, 100000, 'Male', 'BD', 'Rajshahi', 6000, 2147483647, 'BD', 'Rajshahi', 6000, 2147483647, 'City', 'Bangladeshi', 'Islam', '', '', '', '', '', 'COMPUTER SCIENCE & ENGINEERING', '', '', '', '', 'Rajshahi', '2017', '1250', '1100', '4.50', 'A-', 'Rajshah', '2019', '1250', '1150', '4.68', 'A-', '', ''),
('DE00000008', 'CUTM00020', 789465123, 897465132, 'asdfghjk', 'okjhgfd', 987465132, 'asdfghjk', 'zxcvbnm', 87945132, 654123, 'Female', 'Bangladesh', 'Dhaka', 4545, 1823123232, 'Bangladesh', 'Dhaka', 4100, 1823123232, 'City', 'Bangladeshi', 'Islam', '', '', '', '', '', 'COMPUTER SCIENCE & ENGINEERING', '', '', '', '', 'Rajshahi', '2017', '1300', '1100', 'A', '75', ' Rajsha', '2019', '1200', '1100', 'A', '62', '', ''),
('DE00000009', 'CUTM00021', 2147483647, 2147483647, 'MD. AAAA', 'Businessman', 2147483647, 'Mst. BBB', 'Housewife', 2147483647, 200000, 'Male', 'Bangladeshi', 'Rajshahi', 6000, 2147483647, 'Bangladeshi', 'Rajshahi', 6000, 2147483647, 'City', 'Bangladeshi', 'Islam', '', '', '', '', '', 'COMPUTER SCIENCE & ENGINEERING', '', '', '', '', 'Rajshahi', '2017', '1350', '1250', '5.00', '80%', 'Rajshah', '2019', '1250', '1000', '4.68', '70%', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `t_userdoc`
--

CREATE TABLE `t_userdoc` (
  `s_id` varchar(10) NOT NULL,
  `s_pic` varchar(200) NOT NULL,
  `s_tenmarkpic` varchar(200) NOT NULL,
  `s_tencerpic` varchar(200) NOT NULL,
  `s_twdmarkpic` varchar(200) NOT NULL,
  `s_twdcerpic` varchar(200) NOT NULL,
  `s_idprfpic` varchar(200) NOT NULL,
  `s_sigpic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_userdoc`
--

INSERT INTO `t_userdoc` (`s_id`, `s_pic`, `s_tenmarkpic`, `s_tencerpic`, `s_twdmarkpic`, `s_twdcerpic`, `s_idprfpic`, `s_sigpic`) VALUES
('CUTM00003', 'B612-2015-04-06-14-19-16.jpg', '4th Sem TT_CSE.pdf', '4th Sem TT_CSE.pdf', '4th Sem TT_CSE.pdf', '4th Sem TT_CSE.pdf', '4th Sem TT_CSE.pdf', 'Signature.png'),
('CUTM00008', 'IMG_20150301_235958.JPG', '4th Sem TT_CSE.pdf', '4th Sem TT_CSE.pdf', '4th Sem TT_CSE.pdf', '4th Sem TT_CSE.pdf', '4th Sem TT_CSE.pdf', 'Signature.png'),
('CUTM00012', 'istockphoto-1146465010-612x612.jpg', 'download.jpg', 'images.jpg', 'download (2).jpg', 'download (3).jpg', 'istockphoto-942004112-612x612.jpg', 'download (5).jpg'),
('CUTM00018 ', 'pexels-piccinng-3075993.jpg', 'pexels-piccinng-3075993.jpg', 'pexels-piccinng-3075993.jpg', 'pexels-piccinng-3075993.jpg', 'pexels-frank-cone-2258536.jpg', 'pexels-piccinng-3075993.jpg', 'pexels-frank-cone-2258536.jpg'),
('CUTM00019', '13346.jpg', 'images.jpg', 'download (4).jpg', 'download (3).jpg', 'download (2).jpg', 'istockphoto-1299940320-612x612.jpg', 'download (5).jpg'),
('CUTM00020', 'img1.jpg', 'ssc_marksheet.jpg', 'ssc_cer.jpg', 'hsc_marksheet.jpg', 'hsc_cer.jpg', 'id_card.jpg', 'signature.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `t_usermark`
--

CREATE TABLE `t_usermark` (
  `s_id` varchar(50) NOT NULL,
  `s_omr` varchar(50) NOT NULL,
  `s_mark` int(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_usermark`
--

INSERT INTO `t_usermark` (`s_id`, `s_omr`, `s_mark`) VALUES
('CUTM00003', '123', 345);

-- --------------------------------------------------------

--
-- Table structure for table `t_user_data`
--

CREATE TABLE `t_user_data` (
  `s_id` varchar(10) NOT NULL,
  `s_pwd` varchar(15) NOT NULL,
  `s_dob` date DEFAULT NULL,
  `s_name` varchar(45) NOT NULL,
  `s_email` varchar(45) NOT NULL,
  `s_mob` varchar(11) DEFAULT NULL,
  `s_signupdate` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_user_data`
--

INSERT INTO `t_user_data` (`s_id`, `s_pwd`, `s_dob`, `s_name`, `s_email`, `s_mob`, `s_signupdate`) VALUES
('CUTM00003', 'QBAfi0Wy', '2022-09-08', 'jakir', 'jakir2310@gmail.com', '1234567890', '2022-09-30 14:43:31.000000'),
('CUTM00008', 'X3PXhxEV', '2022-10-15', 'Ankita ', 'ankita@gmail.com', '6884280078', '2022-10-08 19:15:11.000000'),
('CUTM00010', '0pzGI4Bf', '2022-10-07', 'Sweety', 'abc@gmai.com', '1234567890', '2022-10-09 23:01:06.000000'),
('CUTM00011', 'NC3Ro5KU', '2022-10-06', 'abc', '130301csl062@cutm.ac.in', '1234567890', '2022-10-10 13:48:10.000000'),
('CUTM00012', '123', '0000-00-00', 'Jakir Khan', 'jakirkhannisan9@gmail.com', '0170500203', '2023-03-02 23:19:38.000000'),
('CUTM00013', 'rqa2SQgW', '0000-00-00', 'Tomal', 'tomal@gmail.com', '515151119', '2023-03-05 21:41:18.000000'),
('CUTM00014', 'kix9gS5k', '0000-00-00', 'Rafsan', 'rafsan@gmail.com', '0172222313', '2023-03-06 14:27:06.000000'),
('CUTM00015', 'O8XyoBwc', '0000-00-00', 'ABC', 'abc@gmail.com', '01702000322', '2023-03-06 14:32:40.000000'),
('CUTM00016', 'dqkOUDJR', '0000-00-00', 'Md', 'md@gmail.com', '01234555', '2023-03-06 18:24:38.000000'),
('CUTM00017', 'I2Ifjndd', '0000-00-00', 'Jakir', 'a@gmail.com', '0123456', '2023-03-07 14:46:13.000000'),
('CUTM00018', 'FWjCtWHa', '0000-00-00', 'karim', 'zahid@gmail.com', '11111111111', '2023-03-07 15:05:14.000000'),
('CUTM00019', 'dRUlz2oE', '0001-05-23', 'Istiak Ahmed', 'istiak@gmail.com', '01701234567', '2023-03-09 09:03:33.000000'),
('CUTM00020', 'AeR9ShLO', '0000-00-00', 'Tanai Islam', 'tanai@gmail.com', '01231311211', '2023-04-12 13:39:59.000000'),
('CUTM00021', 'c7D5QQWK', '0000-00-00', 'Jakir Khan', 'jakir@gmail.com', '01701231231', '2023-06-01 16:22:43.000000'),
('CUTM00022', 'vH2NcMnp', '0000-00-00', 'Jakir Khan', 'jk@gmail.com', '0172012333', '2024-01-16 13:48:25.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_admin`
--
ALTER TABLE `t_admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `t_status`
--
ALTER TABLE `t_status`
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`s_detid`),
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `t_userdoc`
--
ALTER TABLE `t_userdoc`
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `t_usermark`
--
ALTER TABLE `t_usermark`
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `t_user_data`
--
ALTER TABLE `t_user_data`
  ADD PRIMARY KEY (`s_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_status`
--
ALTER TABLE `t_status`
  ADD CONSTRAINT `t_status_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `t_user_data` (`s_id`);

--
-- Constraints for table `t_user`
--
ALTER TABLE `t_user`
  ADD CONSTRAINT `t_user_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `t_user_data` (`s_id`);

--
-- Constraints for table `t_userdoc`
--
ALTER TABLE `t_userdoc`
  ADD CONSTRAINT `t_userdoc_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `t_user_data` (`s_id`);

--
-- Constraints for table `t_usermark`
--
ALTER TABLE `t_usermark`
  ADD CONSTRAINT `t_usermark_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `t_user_data` (`s_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

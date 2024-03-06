-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2024 at 06:55 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vbu_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_posted`
--

CREATE TABLE `book_posted` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `mrp` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `pubdate` date NOT NULL,
  `edition` int(5) NOT NULL,
  `pagenumber` int(10) NOT NULL,
  `lang` varchar(50) NOT NULL,
  `used` varchar(255) NOT NULL,
  `rate` int(3) NOT NULL,
  `email` varchar(255) NOT NULL,
  `whatsapp` varchar(255) NOT NULL,
  `contact` int(10) NOT NULL,
  `address` varchar(500) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `posted_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_posted`
--

INSERT INTO `book_posted` (`id`, `image`, `name`, `author`, `subject`, `date`, `mrp`, `price`, `publisher`, `pubdate`, `edition`, `pagenumber`, `lang`, `used`, `rate`, `email`, `whatsapp`, `contact`, `address`, `time`, `posted_by`) VALUES
(40, '1704216048_blobio-imr-202201_6254b9449d6b453a80f187afcdfd2ea3.jpg', 'Data Structures and Algorithms Made Easy', 'Karumanchi Narasimha', 'Computer Science', '2023-07-08', 952, 350, 'CareerMonk Publications', '2019-02-21', 9, 453, 'English', '4 Months', 10, 'sknuraktar@testmail.com', '8452150123', 2147483647, 'Bolpur, Sriniketan near Post office.\r\n\r\nYou can take the book at DCSS Gate anytime!', '2024-01-02 17:20:48', 'sknuraktar1999@gmail.com'),
(41, '1704218450_blobio-imr-202202_364707b30dc64369bc367b294f290bd2.jpg', 'Taming Python By Programming', ' Jeeva Jose', 'Computer Science', '2023-07-13', 852, 200, 'Khanna Books', '2021-02-11', 1, 348, 'English', '7 Months', 8, 'sknuraktar@testmail.com', '9856324512', 2147483647, 'Bolpur, Sriniketan near Post office.\r\n\r\nYou can take the book at DCSS Gate anytime!', '2024-01-02 18:00:50', 'sknuraktar1999@gmail.com'),
(42, '1704218579_blobio-imr-202201_6fb546396d0a4537bb88639f2d6924f8.jpg', 'Cracking the Coding Interview  ', 'McDowell Gayle Laakmann', 'Computer Science', '2023-10-13', 599, 350, 'CareerCup', '2015-06-27', 6, 708, 'English', '4 month', 7, 'sknuraktar@testmail.com', '8546254106', 2147483647, 'Bolpur, Sriniketan near Post office.\r\n\r\nYou can take the book at DCSS Gate anytime!', '2024-01-02 18:02:59', 'sknuraktar1999@gmail.com'),
(43, '1704218814_blobio-imr-201910_a96c4238c2aa4573ab4d674cef9dcf03-removebg-preview.png', 'Programming with Java', 'Balagurusamy E', 'Computer Science', '2023-08-25', 750, 450, 'McGraw Hill Education India', '2023-06-15', 5, 600, 'English', '7 Months', 7, 'sknuraktar@testmail.com', '8546325454', 2147483647, 'Bolpur, Sriniketan near Post office.\r\n\r\nYou can take the book at DCSS Gate anytime!', '2024-01-02 18:06:54', 'sknuraktar1999@gmail.com'),
(44, '1704219022_blobio-imr-202105_14c3968dae9c476fa4ac32dbdf377c49-removebg-preview.png', 'Object Oriented Programming with C++', ' E Balagurusamy', 'Computer Science', '2023-09-22', 780, 470, 'McGraw Hill Education India', '2023-11-16', 8, 700, 'English', '1 Months', 10, 'sknuraktar@testmail.com', '8545621542', 2147483647, 'Bolpur, Sriniketan near Post office.\r\n\r\nYou can take the book at DCSS Gate anytime!', '2024-01-02 18:10:22', 'sknuraktar1999@gmail.com'),
(45, '1704219149_blobio-202103_2p0dk4nu.jpg', 'Let Us C ', ' Kanetkar Yashavant P.', 'Computer Science', '2021-06-17', 399, 140, 'BPB Publications', '2018-07-05', 12, 738, 'English', '10 Months', 6, 'sknuraktar@testmail.com', '5421587456', 2147483647, 'Bolpur, Sriniketan near Post office.\r\n\r\nYou can take the book at DCSS Gate anytime!', '2024-01-02 18:12:29', 'sknuraktar1999@gmail.com'),
(46, '1704219420_blobio-imr_8921ea24219f479fb7a772cc4edf0471.jpg', 'Computer Science with Python: Textbook for CBSE Class XII', ' Preeti Arora', 'Computer Science', '2023-12-07', 775, 700, 'SULTAN CHAND & SONS', '2023-12-27', 1, 450, 'English', '2 Weeks', 10, 'sknuraktar@testmail.com', '1234567890', 1234567890, 'Bolpur, Sriniketan near Post office.\r\n\r\nYou can take the book at DCSS Gate anytime!', '2024-01-02 18:17:00', 'sknuraktar1999@gmail.com'),
(47, '1704219640_71jndwmaDfL._SL1245_.jpg', 'Turing Machine Universality of the Game of Life', ' Rendell Paul', 'Computer Science', '2023-12-07', 10385, 6850, 'Springer International Publishing AG', '2016-10-12', 1, 177, 'English', '5 Months', 9, 'sknuraktar@testmail.com', '8452165845', 2147483647, 'Bolpur, Sriniketan near Post office.\r\n\r\nYou can take the book at DCSS Gate anytime!', '2024-01-02 18:20:40', 'sknuraktar1999@gmail.com'),
(48, '1704220515_blobio-imr_d20c2e939a0b45c69ecb443c3aa6fed4.jpg', 'Mathematics For NDA And NA', 'R.S. Aggarwal', 'Mathematics', '2023-06-28', 699, 440, 'S.CHAND', '2022-10-14', 3, 600, 'English', '8 Months', 8, 'sknuraktar@testmail.com', '8545256521', 2147483647, 'Bolpur, Sriniketan near Post office.\r\n\r\nYou can take the book at DCSS Gate anytime!', '2024-01-02 18:35:15', 'sknuraktar1999@gmail.com'),
(49, '1704220669_discrete-mathematics-and-its-applications-sie-8th-edition-original-imag4ynhfuhccb9y.jpeg', 'Discrete Mathematics and Its Applications', 'Rosen Kenneth Hkrithivasan Dr. Kamala', 'Mathematics', '2023-07-14', 895, 450, 'McGraw-Hill', '2021-06-09', 8, 1208, 'English', '1 Year ', 6, 'sknuraktar@testmail.com', '8545215452', 2147483647, 'Bolpur, Sriniketan near Post office.\r\n\r\nYou can take the book at DCSS Gate anytime!', '2024-01-02 18:37:49', 'sknuraktar1999@gmail.com'),
(50, '1704220878_ethical-hacking-the-beginning-with-hacking-tools-original-imag45ydpsgnkuah.jpeg', 'Ethical Hacking : The Beginning', 'Aamer Khan', 'Cyber Security', '2023-12-08', 999, 750, 'Code Academy', '2021-06-17', 2, 200, 'English', '3 Weeks', 10, 'sknuraktar@testmail.com', '8545215452', 2147483647, 'Bolpur, Sriniketan near Post office.\r\n\r\nYou can take the book at DCSS Gate anytime!', '2024-01-02 18:41:18', 'sknuraktar1999@gmail.com'),
(51, '1704220972_blobio-imr-202207_67d36d4636a3492fba1079fe68721bf7.jpg', 'Beginners Guide To Ethical Hacking and Cyber Security', ' Abhinav Ojha', 'Cyber Security', '2023-09-22', 219, 110, 'Notion Press', '2020-06-17', 3, 218, 'English', '5 Months', 8, 'sknuraktar@testmail.com', '7584521564', 2147483647, 'Bolpur, Sriniketan near Post office.\r\n\r\nYou can take the book at DCSS Gate anytime!', '2024-01-02 18:42:52', 'sknuraktar1999@gmail.com'),
(52, '1704221064_fundamentals-of-cyber-security-original-imafbyyh7hmz6gfq.jpeg', 'Fundamentals of Cyber Security', 'Bhushan Mayank', 'Cyber Security', '2023-07-20', 399, 290, 'BPB Publications', '2023-06-07', 4, 220, 'English', '4 Months', 9, 'sknuraktar@testmail.com', '8546212510', 2147483647, 'Bolpur, Sriniketan near Post office.\r\n\r\nYou can take the book at DCSS Gate anytime!', '2024-01-02 18:44:24', 'sknuraktar1999@gmail.com'),
(53, '1704309372_712cJ4DrAPL.jpg', 'Tintin: Explorers on the Moon', 'Herge', 'Comics', '2023-10-13', 1398, 750, 'Harpercollins Publishers India', '2013-01-01', 1, 120, 'English', '2 Years', 8, 'sknuraktar@testmail.com', '8546251323', 2147483647, 'Location: Bolpur, Sriniketan near Post office. You can take the book at DCSS Gate anytime!', '2024-01-03 19:16:12', 'sknuraktar1999@gmail.com'),
(54, '1704309980_71z2Bh-hnSL.jpg', 'Ecology,environmental Science & Conservation', 'Sp Singh Js Singh', 'Environment Science', '2023-10-13', 750, 350, '‎S.Chand (G/L) & Company Ltd', '2017-11-01', 1, 550, 'English', '6 Months', 7, 'sknuraktar@testmail.com', '8565254254', 2147483647, 'Location: Bolpur, Sriniketan near Post office.\r\nYou can take the book at DCSS Gate anytime!', '2024-01-03 19:26:20', 'sknuraktar1999@gmail.com'),
(55, '1704310133_D1MGGzTe9pS.jpg', 'Microprocessor Architecture 8085', 'Ramesh Gaonkar', 'Computer Science', '2023-04-13', 750, 180, ' Penram International Publishing', '2013-07-11', 6, 820, 'English', '6 Months', 8, 'sknuraktar@testmail.com', '8563215425', 2147483647, 'Location: Bolpur, Sriniketan near Post office. You can take the book at DCSS Gate anytime!', '2024-01-03 19:28:53', 'sknuraktar1999@gmail.com'),
(56, '1704310233_blobio-imr-202008_88ba8b3d79ef4fd5b442f1aaabfd0da3.jpg', 'Tintin in Tibet', 'Henge', 'Comics', '2023-12-07', 569, 450, 'HarperCollins Publishers', '2019-05-07', 2, 64, 'English', '1 Week', 9, 'sknuraktar@testmail.com', '8562352452', 2147483647, 'Location: Bolpur, Sriniketan near Post office. You can take the book at DCSS Gate anytime!', '2024-01-03 19:30:33', 'sknuraktar1999@gmail.com'),
(57, '1704310353_blobio-imr-202008_13a9dec8fe644f618bd6ed8bd0f282b1.jpg', 'All in One Physics Cbse Class 12 2019-20', 'unknown', 'Physics', '2023-09-22', 575, 400, 'Arihant Publishers', '2022-05-20', 2, 669, 'English', '1 Month', 10, 'sknuraktar@testmail.com', '8521542152', 2147483647, 'Location: Bolpur, Sriniketan near Post office. You can take the book at DCSS Gate anytime!', '2024-01-03 19:32:33', 'sknuraktar1999@gmail.com'),
(58, '1704310450_71rjUMQSGvL.jpg', 'Introduction to Automata Theory', 'John E. Hopcroft', 'Computer Science', '2023-08-11', 775, 420, 'Pearson Education India', '2021-02-03', 6, 554, 'English', '5 Month', 10, 'sknuraktar@testmail.com', '8521478963', 2147483647, 'Location: Bolpur, Sriniketan near Post office. You can take the book at DCSS Gate anytime!', '2024-01-03 19:34:10', 'sknuraktar1999@gmail.com'),
(59, '1704310564_linux-commands-for-beginners-original-imagv2q28kgwzvqe.jpeg', 'Linux Commands for Beginners', 'Khalid Husain', 'Computer Science', '2023-12-22', 300, 150, 'White Falcon Publishing', '2023-11-23', 1, 76, 'English', '1 Week', 10, 'sknuraktar@testmail.com', '8562315698', 2147483647, 'Location: Bolpur, Sriniketan near Post office. You can take the book at DCSS Gate anytime!', '2024-01-03 19:36:04', 'sknuraktar1999@gmail.com'),
(60, '1708539321_black-green-material-design-hd-1920x1080.jpg', 'testing data', 'abc', 'sub', '2024-01-01', 1, 1, 'some', '2023-01-01', 1, 1, 'en', 'e', 1, 'sk', '12', 12, 'ok', '2024-02-21 18:15:21', 'nur2@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `my_post_1703328219`
--

CREATE TABLE `my_post_1703328219` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `mrp` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `pubdate` date NOT NULL,
  `edition` int(5) NOT NULL,
  `pagenumber` int(10) NOT NULL,
  `lang` varchar(50) NOT NULL,
  `used` varchar(255) NOT NULL,
  `rate` int(3) NOT NULL,
  `email` varchar(255) NOT NULL,
  `whatsapp` varchar(255) NOT NULL,
  `contact` int(10) NOT NULL,
  `address` varchar(500) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `my_post_1703328219`
--

INSERT INTO `my_post_1703328219` (`id`, `image`, `name`, `author`, `subject`, `date`, `mrp`, `price`, `publisher`, `pubdate`, `edition`, `pagenumber`, `lang`, `used`, `rate`, `email`, `whatsapp`, `contact`, `address`, `time`) VALUES
(16, '1704216048_blobio-imr-202201_6254b9449d6b453a80f187afcdfd2ea3.jpg', 'Data Structures and Algorithms Made Easy', 'Karumanchi Narasimha', 'Computer Science', '2023-07-08', 952, 350, 'CareerMonk Publications', '2019-02-21', 9, 453, 'English', '4 Months', 10, 'sknuraktar@testmail.com', '8452150123', 2147483647, 'Bolpur, Sriniketan near Post office.\r\n\r\nYou can take the book at DCSS Gate anytime!', '2024-01-02 17:20:48'),
(17, '1704218450_blobio-imr-202202_364707b30dc64369bc367b294f290bd2.jpg', 'Taming Python By Programming', ' Jeeva Jose', 'Computer Science', '2023-07-13', 852, 200, 'Khanna Books', '2021-02-11', 1, 348, 'English', '7 Months', 8, 'sknuraktar@testmail.com', '9856324512', 2147483647, 'Bolpur, Sriniketan near Post office.\r\n\r\nYou can take the book at DCSS Gate anytime!', '2024-01-02 18:00:50'),
(18, '1704218579_blobio-imr-202201_6fb546396d0a4537bb88639f2d6924f8.jpg', 'Cracking the Coding Interview  ', 'McDowell Gayle Laakmann', 'Computer Science', '2023-10-13', 599, 350, 'CareerCup', '2015-06-27', 6, 708, 'English', '4 month', 7, 'sknuraktar@testmail.com', '8546254106', 2147483647, 'Bolpur, Sriniketan near Post office.\r\n\r\nYou can take the book at DCSS Gate anytime!', '2024-01-02 18:02:59'),
(19, '1704218814_blobio-imr-201910_a96c4238c2aa4573ab4d674cef9dcf03-removebg-preview.png', 'Programming with Java', 'Balagurusamy E', 'Computer Science', '2023-08-25', 750, 450, 'McGraw Hill Education India', '2023-06-15', 5, 600, 'English', '7 Months', 7, 'sknuraktar@testmail.com', '8546325454', 2147483647, 'Bolpur, Sriniketan near Post office.\r\n\r\nYou can take the book at DCSS Gate anytime!', '2024-01-02 18:06:54'),
(20, '1704219022_blobio-imr-202105_14c3968dae9c476fa4ac32dbdf377c49-removebg-preview.png', 'Object Oriented Programming with C++', ' E Balagurusamy', 'Computer Science', '2023-09-22', 780, 470, 'McGraw Hill Education India', '2023-11-16', 8, 700, 'English', '1 Months', 10, 'sknuraktar@testmail.com', '8545621542', 2147483647, 'Bolpur, Sriniketan near Post office.\r\n\r\nYou can take the book at DCSS Gate anytime!', '2024-01-02 18:10:22'),
(21, '1704219149_blobio-202103_2p0dk4nu.jpg', 'Let Us C ', ' Kanetkar Yashavant P.', 'Computer Science', '2021-06-17', 399, 140, 'BPB Publications', '2018-07-05', 12, 738, 'English', '10 Months', 6, 'sknuraktar@testmail.com', '5421587456', 2147483647, 'Bolpur, Sriniketan near Post office.\r\n\r\nYou can take the book at DCSS Gate anytime!', '2024-01-02 18:12:29'),
(22, '1704219420_blobio-imr_8921ea24219f479fb7a772cc4edf0471.jpg', 'Computer Science with Python: Textbook for CBSE Class XII', ' Preeti Arora', 'Computer Science', '2023-12-07', 775, 700, 'SULTAN CHAND & SONS', '2023-12-27', 1, 450, 'English', '2 Weeks', 10, 'sknuraktar@testmail.com', '1234567890', 1234567890, 'Bolpur, Sriniketan near Post office.\r\n\r\nYou can take the book at DCSS Gate anytime!', '2024-01-02 18:17:00'),
(23, '1704219640_71jndwmaDfL._SL1245_.jpg', 'Turing Machine Universality of the Game of Life', ' Rendell Paul', 'Computer Science', '2023-12-07', 10385, 6850, 'Springer International Publishing AG', '2016-10-12', 1, 177, 'English', '5 Months', 9, 'sknuraktar@testmail.com', '8452165845', 2147483647, 'Bolpur, Sriniketan near Post office.\r\n\r\nYou can take the book at DCSS Gate anytime!', '2024-01-02 18:20:40'),
(24, '1704220515_blobio-imr_d20c2e939a0b45c69ecb443c3aa6fed4.jpg', 'Mathematics For NDA And NA', 'R.S. Aggarwal', 'Mathematics', '2023-06-28', 699, 440, 'S.CHAND', '2022-10-14', 3, 600, 'English', '8 Months', 8, 'sknuraktar@testmail.com', '8545256521', 2147483647, 'Bolpur, Sriniketan near Post office.\r\n\r\nYou can take the book at DCSS Gate anytime!', '2024-01-02 18:35:15'),
(25, '1704220669_discrete-mathematics-and-its-applications-sie-8th-edition-original-imag4ynhfuhccb9y.jpeg', 'Discrete Mathematics and Its Applications', 'Rosen Kenneth Hkrithivasan Dr. Kamala', 'Mathematics', '2023-07-14', 895, 450, 'McGraw-Hill', '2021-06-09', 8, 1208, 'English', '1 Year ', 6, 'sknuraktar@testmail.com', '8545215452', 2147483647, 'Bolpur, Sriniketan near Post office.\r\n\r\nYou can take the book at DCSS Gate anytime!', '2024-01-02 18:37:49'),
(26, '1704220878_ethical-hacking-the-beginning-with-hacking-tools-original-imag45ydpsgnkuah.jpeg', 'Ethical Hacking : The Beginning', 'Aamer Khan', 'Cyber Security', '2023-12-08', 999, 750, 'Code Academy', '2021-06-17', 2, 200, 'English', '3 Weeks', 10, 'sknuraktar@testmail.com', '8545215452', 2147483647, 'Bolpur, Sriniketan near Post office.\r\n\r\nYou can take the book at DCSS Gate anytime!', '2024-01-02 18:41:18'),
(27, '1704220972_blobio-imr-202207_67d36d4636a3492fba1079fe68721bf7.jpg', 'Beginners Guide To Ethical Hacking and Cyber Security', ' Abhinav Ojha', 'Cyber Security', '2023-09-22', 219, 110, 'Notion Press', '2020-06-17', 3, 218, 'English', '5 Months', 8, 'sknuraktar@testmail.com', '7584521564', 2147483647, 'Bolpur, Sriniketan near Post office.\r\n\r\nYou can take the book at DCSS Gate anytime!', '2024-01-02 18:42:52'),
(28, '1704221064_fundamentals-of-cyber-security-original-imafbyyh7hmz6gfq.jpeg', 'Fundamentals of Cyber Security', 'Bhushan Mayank', 'Cyber Security', '2023-07-20', 399, 290, 'BPB Publications', '2023-06-07', 4, 220, 'English', '4 Months', 9, 'sknuraktar@testmail.com', '8546212510', 2147483647, 'Bolpur, Sriniketan near Post office.\r\n\r\nYou can take the book at DCSS Gate anytime!', '2024-01-02 18:44:24'),
(29, '1704309372_712cJ4DrAPL.jpg', 'Tintin: Explorers on the Moon', 'Herge', 'Comics', '2023-10-13', 1398, 750, 'Harpercollins Publishers India', '2013-01-01', 1, 120, 'English', '2 Years', 8, 'sknuraktar@testmail.com', '8546251323', 2147483647, 'Location: Bolpur, Sriniketan near Post office. You can take the book at DCSS Gate anytime!', '2024-01-03 19:16:12'),
(30, '1704309980_71z2Bh-hnSL.jpg', 'Ecology,environmental Science & Conservation', 'Sp Singh Js Singh', 'Environment Science', '2023-10-13', 750, 350, '‎S.Chand (G/L) & Company Ltd', '2017-11-01', 1, 550, 'English', '6 Months', 7, 'sknuraktar@testmail.com', '8565254254', 2147483647, 'Location: Bolpur, Sriniketan near Post office.\r\nYou can take the book at DCSS Gate anytime!', '2024-01-03 19:26:20'),
(31, '1704310133_D1MGGzTe9pS.jpg', 'Microprocessor Architecture 8085', 'Ramesh Gaonkar', 'Computer Science', '2023-04-13', 750, 180, ' Penram International Publishing', '2013-07-11', 6, 820, 'English', '6 Months', 8, 'sknuraktar@testmail.com', '8563215425', 2147483647, 'Location: Bolpur, Sriniketan near Post office. You can take the book at DCSS Gate anytime!', '2024-01-03 19:28:53'),
(32, '1704310233_blobio-imr-202008_88ba8b3d79ef4fd5b442f1aaabfd0da3.jpg', 'Tintin in Tibet', 'Henge', 'Comics', '2023-12-07', 569, 450, 'HarperCollins Publishers', '2019-05-07', 2, 64, 'English', '1 Week', 9, 'sknuraktar@testmail.com', '8562352452', 2147483647, 'Location: Bolpur, Sriniketan near Post office. You can take the book at DCSS Gate anytime!', '2024-01-03 19:30:33'),
(33, '1704310353_blobio-imr-202008_13a9dec8fe644f618bd6ed8bd0f282b1.jpg', 'All in One Physics Cbse Class 12 2019-20', 'unknown', 'Physics', '2023-09-22', 575, 400, 'Arihant Publishers', '2022-05-20', 2, 669, 'English', '1 Month', 10, 'sknuraktar@testmail.com', '8521542152', 2147483647, 'Location: Bolpur, Sriniketan near Post office. You can take the book at DCSS Gate anytime!', '2024-01-03 19:32:33'),
(34, '1704310450_71rjUMQSGvL.jpg', 'Introduction to Automata Theory', 'John E. Hopcroft', 'Computer Science', '2023-08-11', 775, 420, 'Pearson Education India', '2021-02-03', 6, 554, 'English', '5 Month', 10, 'sknuraktar@testmail.com', '8521478963', 2147483647, 'Location: Bolpur, Sriniketan near Post office. You can take the book at DCSS Gate anytime!', '2024-01-03 19:34:10'),
(35, '1704310564_linux-commands-for-beginners-original-imagv2q28kgwzvqe.jpeg', 'Linux Commands for Beginners', 'Khalid Husain', 'Computer Science', '2023-12-22', 300, 150, 'White Falcon Publishing', '2023-11-23', 1, 76, 'English', '1 Week', 10, 'sknuraktar@testmail.com', '8562315698', 2147483647, 'Location: Bolpur, Sriniketan near Post office. You can take the book at DCSS Gate anytime!', '2024-01-03 19:36:04');

-- --------------------------------------------------------

--
-- Table structure for table `my_post_1708539244`
--

CREATE TABLE `my_post_1708539244` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `mrp` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `pubdate` date NOT NULL,
  `edition` int(5) NOT NULL,
  `pagenumber` int(10) NOT NULL,
  `lang` varchar(50) NOT NULL,
  `used` varchar(255) NOT NULL,
  `rate` int(3) NOT NULL,
  `email` varchar(255) NOT NULL,
  `whatsapp` varchar(255) NOT NULL,
  `contact` int(10) NOT NULL,
  `address` varchar(500) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `my_post_1708539244`
--

INSERT INTO `my_post_1708539244` (`id`, `image`, `name`, `author`, `subject`, `date`, `mrp`, `price`, `publisher`, `pubdate`, `edition`, `pagenumber`, `lang`, `used`, `rate`, `email`, `whatsapp`, `contact`, `address`, `time`) VALUES
(1, '1708539321_black-green-material-design-hd-1920x1080.jpg', 'testing data', 'abc', 'sub', '2024-01-01', 1, 1, 'some', '2023-01-01', 1, 1, 'en', 'e', 1, 'sk', '12', 12, 'ok', '2024-02-21 18:15:21');

-- --------------------------------------------------------

--
-- Table structure for table `m_1708625068`
--

CREATE TABLE `m_1708625068` (
  `id` int(11) NOT NULL,
  `message` varchar(750) NOT NULL,
  `seen` tinyint(1) DEFAULT 0,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `selling` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `m_1708625068`
--

INSERT INTO `m_1708625068` (`id`, `message`, `seen`, `time`, `selling`) VALUES
(1, 'hi', 1, '2024-02-22 18:15:09', 1),
(2, 'hello', 1, '2024-02-22 18:37:49', 1),
(3, 'Hey!', 1, '2024-02-22 18:37:56', 0),
(4, 'wassup', 1, '2024-02-22 18:43:36', 1),
(5, 'superb!', 1, '2024-02-22 18:43:45', 0),
(6, 'working?', 1, '2024-02-22 18:49:59', 1),
(7, 'yes', 1, '2024-02-22 18:50:05', 1),
(8, 'yes yes', 1, '2024-02-22 18:50:13', 0),
(9, '123', 1, '2024-02-22 18:54:52', 1),
(10, 'ok', 1, '2024-02-22 18:54:59', 1),
(11, 'hey', 1, '2024-02-22 18:55:04', 1),
(12, 'hey', 1, '2024-02-22 18:56:14', 1),
(13, '00', 1, '2024-02-22 18:56:20', 1),
(14, 'oi', 1, '2024-02-22 18:56:28', 1),
(15, 'working', 1, '2024-02-22 18:56:32', 1),
(16, 'fine', 1, '2024-02-22 18:56:36', 0),
(17, 'superb', 1, '2024-02-22 18:56:43', 0),
(18, '001', 1, '2024-02-22 18:59:31', 0),
(19, 'hy', 1, '2024-02-22 19:13:53', 0),
(20, 'hmm', 1, '2024-02-22 19:14:00', 0),
(21, 'yy', 1, '2024-02-22 19:14:12', 0),
(22, 'jj', 1, '2024-02-22 19:14:57', 0),
(23, 'kk', 1, '2024-02-22 19:15:01', 0),
(24, '3', 1, '2024-02-22 19:15:45', 0),
(25, '4', 1, '2024-02-22 19:19:27', 0),
(26, '5', 1, '2024-02-22 19:19:31', 0),
(27, '6', 1, '2024-02-22 19:19:35', 0),
(28, 'work done', 1, '2024-02-22 19:20:15', 0),
(29, 'done', 1, '2024-02-22 19:20:20', 0),
(30, 'ok', 1, '2024-02-22 19:20:25', 1),
(31, 'gn', 1, '2024-02-23 13:18:34', 1),
(32, 'gn2', 1, '2024-02-23 13:19:09', 0),
(33, 'hello', 1, '2024-02-23 13:21:18', 0),
(34, 'superb', 1, '2024-02-23 13:24:28', 1),
(35, 'working fine', 1, '2024-02-23 13:24:31', 1),
(36, 'realtime', 1, '2024-02-23 13:24:34', 1),
(37, 'speed', 1, '2024-02-23 13:24:36', 1),
(38, 'helo', 1, '2024-02-23 13:43:19', 1),
(39, 'hello', 1, '2024-02-23 13:47:33', 1),
(40, 'yo', 1, '2024-02-23 13:49:40', 0),
(41, 'hello', 1, '2024-02-23 17:50:43', 1),
(42, 'ola', 1, '2024-02-24 06:11:30', 1),
(43, 'hey', 1, '2024-02-24 06:50:48', 0),
(44, 'alr', 1, '2024-02-24 09:34:25', 1),
(45, 'hello1', 1, '2024-02-24 10:17:23', 0),
(46, 'hello2', 1, '2024-02-24 10:17:52', 1),
(47, 'hi', 1, '2024-02-24 10:18:39', 1),
(48, '22', 1, '2024-02-24 10:19:09', 1),
(49, '33', 1, '2024-02-24 10:22:32', 1),
(50, '44', 1, '2024-02-24 10:23:02', 1),
(51, '55', 1, '2024-02-24 10:25:10', 1),
(52, '66', 1, '2024-02-24 10:26:28', 1),
(53, '77', 1, '2024-02-24 10:29:07', 1),
(54, '88', 1, '2024-02-24 10:31:48', 1),
(55, '99', 1, '2024-02-24 10:32:18', 1),
(56, '10', 1, '2024-02-24 10:32:26', 1),
(57, '11', 1, '2024-02-24 10:32:36', 1),
(58, '12', 1, '2024-02-24 10:32:45', 1),
(59, '13', 1, '2024-02-24 10:34:18', 1),
(60, '14', 1, '2024-02-24 10:34:25', 1),
(61, '15', 1, '2024-02-24 10:34:34', 1),
(62, '16', 1, '2024-02-24 10:35:41', 1),
(63, '12', 1, '2024-02-24 10:35:49', 1),
(64, '12', 1, '2024-02-24 10:35:52', 1),
(65, '12', 1, '2024-02-24 10:35:53', 1),
(66, '12', 1, '2024-02-24 10:35:53', 1),
(67, 'hey', 1, '2024-02-24 10:38:43', 1),
(68, 'olaala', 1, '2024-02-24 10:38:59', 1),
(69, '1', 1, '2024-02-24 10:39:16', 1),
(70, '1', 1, '2024-02-24 10:39:27', 1),
(71, '2', 1, '2024-02-24 10:39:32', 1),
(72, 'update', 1, '2024-02-24 11:12:32', 1),
(73, 'hello', 1, '2024-02-24 11:12:56', 1),
(74, 'okie', 1, '2024-02-24 16:20:09', 1),
(75, 'hola', 1, '2024-02-24 16:39:39', 1),
(76, 'hey', 1, '2024-02-24 16:40:54', 0),
(77, 'superb', 1, '2024-02-24 16:41:09', 0),
(78, 'hey', 1, '2024-02-24 16:42:08', 0),
(79, 'hello', 1, '2024-02-24 16:43:24', 0),
(80, 'oi', 1, '2024-02-24 16:49:51', 1),
(81, 'haaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 1, '2024-02-29 17:36:28', 1),
(82, 'Hello 🤗', 1, '2024-02-29 18:05:32', 1),
(83, 'hi', 1, '2024-02-29 18:12:42', 1),
(84, 'hello', 1, '2024-03-03 06:27:17', 1),
(85, 'hi', 1, '2024-03-03 06:29:05', 1),
(86, 'ok', 1, '2024-03-03 06:31:10', 1),
(87, 'sup', 1, '2024-03-03 06:35:16', 1),
(88, 'ok', 1, '2024-03-03 06:42:21', 1),
(89, 'hi', 1, '2024-03-03 06:42:33', 1),
(90, 'jk', 1, '2024-03-03 06:43:26', 1),
(91, 'ok', 1, '2024-03-03 06:46:33', 1),
(92, 'hey', 0, '2024-03-06 10:46:11', 0),
(93, 'hello', 0, '2024-03-06 16:59:28', 0),
(94, '🤗', 0, '2024-03-06 17:05:39', 0),
(95, '😀', 0, '2024-03-06 17:53:22', 0),
(96, '🙄ok', 0, '2024-03-06 17:53:28', 0);

-- --------------------------------------------------------

--
-- Table structure for table `m_1709744532`
--

CREATE TABLE `m_1709744532` (
  `id` int(11) NOT NULL,
  `message` varchar(750) NOT NULL,
  `seen` tinyint(1) DEFAULT 0,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `selling` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `m_1709744532`
--

INSERT INTO `m_1709744532` (`id`, `message`, `seen`, `time`, `selling`) VALUES
(1, 'Is it available?!', 0, '2024-03-06 17:02:12', 0),
(2, '👍😀🙄🫡😥', 0, '2024-03-06 17:49:08', 0),
(3, '👍👍🙄dfsdaf🫡', 0, '2024-03-06 17:49:42', 0),
(4, '👍', 0, '2024-03-06 17:53:04', 0),
(5, '🫡🫡', 0, '2024-03-06 17:53:09', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE `user_reg` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `my_post` varchar(255) NOT NULL,
  `u_table` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`id`, `username`, `email`, `password`, `my_post`, `u_table`) VALUES
(13, 'Nur Aktar', 'sknuraktar1999@gmail.com', 'nur', 'my_post_1703328219', 'u_1703328219'),
(16, 'nur2', 'nur2@gmail.com', 'nur', 'my_post_1708539244', 'u_1708539244');

-- --------------------------------------------------------

--
-- Table structure for table `u_1703328219`
--

CREATE TABLE `u_1703328219` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `bookid` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `m_table` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `selling` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `u_1703328219`
--

INSERT INTO `u_1703328219` (`id`, `user_name`, `book_name`, `bookid`, `image`, `m_table`, `time`, `selling`) VALUES
(30, 'nur2', 'Linux Commands for Beginners', 59, '1704310564_linux-commands-for-beginners-original-imagv2q28kgwzvqe.jpeg', 'm_1708625068', '2024-02-22 18:04:28', 1),
(35, 'nur2', 'Ecology,environmental Science & Conservation', 54, '1704309980_71z2Bh-hnSL.jpg', 'm_1709744532', '2024-03-06 17:02:12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `u_1708539244`
--

CREATE TABLE `u_1708539244` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `bookid` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `m_table` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `selling` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `u_1708539244`
--

INSERT INTO `u_1708539244` (`id`, `user_name`, `book_name`, `bookid`, `image`, `m_table`, `time`, `selling`) VALUES
(2, 'Nur Aktar', 'Linux Commands for Beginners', 59, '1704310564_linux-commands-for-beginners-original-imagv2q28kgwzvqe.jpeg', 'm_1708625068', '2024-02-22 18:04:28', 0),
(7, 'Nur Aktar', 'Ecology,environmental Science & Conservation', 54, '1704309980_71z2Bh-hnSL.jpg', 'm_1709744532', '2024-03-06 17:02:12', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_posted`
--
ALTER TABLE `book_posted`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `my_post_1703328219`
--
ALTER TABLE `my_post_1703328219`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `my_post_1708539244`
--
ALTER TABLE `my_post_1708539244`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_1708625068`
--
ALTER TABLE `m_1708625068`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_1709744532`
--
ALTER TABLE `m_1709744532`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_reg`
--
ALTER TABLE `user_reg`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `u_1703328219`
--
ALTER TABLE `u_1703328219`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `u_1708539244`
--
ALTER TABLE `u_1708539244`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_posted`
--
ALTER TABLE `book_posted`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `my_post_1703328219`
--
ALTER TABLE `my_post_1703328219`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `my_post_1708539244`
--
ALTER TABLE `my_post_1708539244`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `m_1708625068`
--
ALTER TABLE `m_1708625068`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `m_1709744532`
--
ALTER TABLE `m_1709744532`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_reg`
--
ALTER TABLE `user_reg`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `u_1703328219`
--
ALTER TABLE `u_1703328219`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `u_1708539244`
--
ALTER TABLE `u_1708539244`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

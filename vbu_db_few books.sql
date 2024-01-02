-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2024 at 08:34 PM
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
(52, '1704221064_fundamentals-of-cyber-security-original-imafbyyh7hmz6gfq.jpeg', 'Fundamentals of Cyber Security', 'Bhushan Mayank', 'Cyber Security', '2023-07-20', 399, 290, 'BPB Publications', '2023-06-07', 4, 220, 'English', '4 Months', 9, 'sknuraktar@testmail.com', '8546212510', 2147483647, 'Bolpur, Sriniketan near Post office.\r\n\r\nYou can take the book at DCSS Gate anytime!', '2024-01-02 18:44:24', 'sknuraktar1999@gmail.com');

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
(28, '1704221064_fundamentals-of-cyber-security-original-imafbyyh7hmz6gfq.jpeg', 'Fundamentals of Cyber Security', 'Bhushan Mayank', 'Cyber Security', '2023-07-20', 399, 290, 'BPB Publications', '2023-06-07', 4, 220, 'English', '4 Months', 9, 'sknuraktar@testmail.com', '8546212510', 2147483647, 'Bolpur, Sriniketan near Post office.\r\n\r\nYou can take the book at DCSS Gate anytime!', '2024-01-02 18:44:24');

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE `user_reg` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `my_post` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`id`, `username`, `email`, `password`, `my_post`) VALUES
(13, 'Nur Aktar', 'sknuraktar1999@gmail.com', 'nur', 'my_post_1703328219');

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
-- Indexes for table `user_reg`
--
ALTER TABLE `user_reg`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_posted`
--
ALTER TABLE `book_posted`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `my_post_1703328219`
--
ALTER TABLE `my_post_1703328219`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user_reg`
--
ALTER TABLE `user_reg`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

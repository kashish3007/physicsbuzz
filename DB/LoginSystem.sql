-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 05, 2020 at 12:53 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `LoginSystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `c_plus_plus`
--

CREATE TABLE `c_plus_plus` (
  `id` int(6) NOT NULL,
  `question` varchar(500) DEFAULT NULL,
  `option1` varchar(500) DEFAULT NULL,
  `option2` varchar(500) DEFAULT NULL,
  `option3` varchar(500) DEFAULT NULL,
  `option4` varchar(500) DEFAULT NULL,
  `correct_option` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `c_plus_plus`
--

INSERT INTO `c_plus_plus` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `correct_option`) VALUES
(1, 'The default access specifier for the class members is :', 'public', 'protected', 'private', 'None Of the Above', 'Op2'),
(2, 'How can we make a class act as an interface in C++', 'By Only Providing all the functions as virtual functions in the class', 'Defining the class following with the keyword virtual', 'Defining the class following the keyword interface', 'Defining the class following with the keyword abstract.', 'Op1'),
(3, 'Objects created using new operator are stored in ____ memory', 'Cache', 'Heap', 'Stack', 'None of the above', 'Op2'),
(4, 'Which type of data file is analogous to an audio cassete tape', 'Random access file', 'Sequential Access File', 'Binary File', 'Source Code File', 'Op2'),
(5, 'Compiler generates ___ file', 'Executable code', 'Object Code', 'Assembly Code', 'None Of the Above', 'Op2');

-- --------------------------------------------------------

--
-- Table structure for table `dsa`
--

CREATE TABLE `dsa` (
  `id` int(6) NOT NULL,
  `question` varchar(500) DEFAULT NULL,
  `option1` varchar(500) DEFAULT NULL,
  `option2` varchar(500) DEFAULT NULL,
  `option3` varchar(500) DEFAULT NULL,
  `option4` varchar(500) DEFAULT NULL,
  `correct_option` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dsa`
--

INSERT INTO `dsa` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `correct_option`) VALUES
(1, 'In a min-heap:', 'parent nodes have values greater than or equal to their childs', 'parent nodes have values less than or equal to their childs', 'both statements are true', 'both statements are wrong', 'Op1'),
(2, 'What data structure can be used to check if a syntax has balanced paranthesis ?', 'queue', 'tree', 'list', 'stack', 'Op4'),
(3, 'Find the odd out', 'Prims Minimal Spanning Tree Algorithm', 'Kruskals Minimal Spanning Tree Algorithm', 'Floyd-Warshalls All pair shortest path Algorithm', 'Dijkstras Minimal Spanning Tree Algorithm', 'Op3'),
(4, 'Which of the following algorithm is not stable?', 'Bubble Sort', 'Quick Sort', 'Merge Sort', 'Insertion Sort', 'Op2'),
(5, 'Which of the following has search effeciency of Ο(1) −', 'Tree', 'Heap', 'Hash Table', 'Linked List', 'Op3');

-- --------------------------------------------------------

--
-- Table structure for table `python`
--

CREATE TABLE `python` (
  `id` int(6) NOT NULL,
  `question` varchar(500) DEFAULT NULL,
  `option1` varchar(500) DEFAULT NULL,
  `option2` varchar(500) DEFAULT NULL,
  `option3` varchar(500) DEFAULT NULL,
  `option4` varchar(500) DEFAULT NULL,
  `correct_option` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `python`
--

INSERT INTO `python` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `correct_option`) VALUES
(1, 'Name the python module that supports regular expressions', 'regex', 're', 'pyre', 'pyregex', 'Op2'),
(2, 'Which event among them is fired when the right mouse button is released?', 'ButtonReleased', 'ButtonPressed', 'ButtonReleased-3', 'ButtonPressed-3', 'Op3'),
(3, 'We can create an image in canvas. Select the option to do so?', 'Image = PhotoImage(imagefilename)', 'Canvas.create_image(filename)', 'Image = Photoimage(file=imagefilename)', 'Image = Photoimage(imagefilename)', 'Op3'),
(4, 'What will be the output of the following python Expression print(4.00/(2.0+2.0))', 'Error', '1.0', '1.00', '1', 'Op2'),
(5, 'What is the output of print 0.1 + 0.2 == 0.3?', 'True', 'False', 'Machine Independent', 'Error', 'Op2');

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

CREATE TABLE `user1` (
  `attempt_date` datetime DEFAULT NULL,
  `quiz` varchar(30) DEFAULT NULL,
  `scored_marks` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user1`
--

INSERT INTO `user1` (`attempt_date`, `quiz`, `scored_marks`) VALUES
('2020-11-05 12:03:03', 'CPP', '5'),
('2020-11-05 12:45:40', 'Python', '10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `create_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `create_datetime`) VALUES
(1, 'admin', 'kunwar9789@gmail.com', 'Anup@mIIO9', '2020-10-28 23:06:28'),
(20, 'user1', 'user@example.com', '827ccb0eea8a706c4c34a16891f84e7b', '2020-11-05 12:01:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `c_plus_plus`
--
ALTER TABLE `c_plus_plus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dsa`
--
ALTER TABLE `dsa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `python`
--
ALTER TABLE `python`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `c_plus_plus`
--
ALTER TABLE `c_plus_plus`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dsa`
--
ALTER TABLE `dsa`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `python`
--
ALTER TABLE `python`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

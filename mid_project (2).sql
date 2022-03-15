-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2022 at 02:16 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mid_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `schedule` varchar(100) NOT NULL,
  `reg_id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `schedule`, `reg_id`) VALUES
(1, 'Advance WebTech', 'Sunday-Time:11-2pm\nTuesday-Time:12-2pm', 23),
(2, 'Webtechnologies', 'Sunday-Time:8-11am\nTuesday-Time:8-10am', 23),
(3, 'HCI', 'Monday-Time:11-2pm\nWednesday-Time:12-2pm', 23);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`) VALUES
(1, 'cs');

-- --------------------------------------------------------

--
-- Table structure for table `facs`
--

CREATE TABLE `facs` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `day` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `room` varchar(200) NOT NULL,
  `offer_id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facs`
--

INSERT INTO `facs` (`id`, `name`, `day`, `time`, `room`, `offer_id`) VALUES
(1, 'DR. MOHAMMAD MAHMUDUL HASAN ', 'S/T', '11-12.30', 'D:N:118', 1),
(2, 'MD. REZWAN- BIN-MIZAN ', 'M/W', '12.30-2', 'D:S:112', 3),
(3, 'DR. A. F. M. SAIFUDDIN SAIF', 'M/W', '2-5', 'D:N:105', 4),
(4, 'FARZANA BENTE ALAM', 'M/W', '2-5', 'D:N:106', 5),
(5, 'DR. MD. TAIMUR AHAD', 'S/T', '2-5', 'D:N:107', 6),
(6, 'DR. MOHAMMED JASHIM UDDIN', 'M/W', '11-12.30', 'D:N:119', 7),
(7, 'DIPTA JUSTIN GOMES', 'M/W', '12.30-2', 'D:N:113', 20),
(8, 'TOHEDUL ISLAM', 'S/T', '2-5', 'D:N:108', 8),
(9, 'MD. NAVID BIN ANWAR', 'M/W', '2-5', 'D:N:110', 9),
(10, 'MD. NAZMUL HOSSAIN', 'S/T', '11-12.30', 'D:S:120', 10),
(11, 'SAJIB HASAN', 'M/W', '12.30-2', 'D:N:114', 11),
(12, 'DEBAJYOTI KARMAKER', 'S/T', '2-5', 'D:S:111', 14),
(13, 'MD. AL-AMIN', 'M/W', '11-12.30', 'D:N:121', 15),
(14, 'REZWAN AHMED', 'S/T', '12.30-2', 'D:N:115', 16),
(15, 'DR. KHANDAKER TABIN HASAN', 'M/W', '11-12.30', 'D:N:122', 17),
(16, 'TANVIR AHMED', 'S/T', '12.30-2', 'D:N:116', 18),
(17, 'S.M. ABDUR BHUIYAN ROUF & DEBAJYOTI KARMAKER ', 'S/M/T/W', '11-5', 'D:N:117', 19);

-- --------------------------------------------------------

--
-- Table structure for table `finances`
--

CREATE TABLE `finances` (
  `id` int(11) NOT NULL,
  `date` varchar(200) NOT NULL,
  `particulars` varchar(200) NOT NULL,
  `debit` varchar(200) NOT NULL,
  `credit` varchar(200) NOT NULL,
  `balance` varchar(200) NOT NULL,
  `utility` varchar(200) NOT NULL,
  `res_id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `finances`
--

INSERT INTO `finances` (`id`, `date`, `particulars`, `debit`, `credit`, `balance`, `utility`, `res_id`) VALUES
(1, '09-Dec-2021', '2021-2022,Spring', '70475.00', '0.00', '70,475.00', '3000', 1),
(2, '30-May-2021', 'Semester Payment', '0.00', '20700.00', '71000.00', '4000', 1),
(3, '07-Jun-2020', 'Semester Discount [COVID-19]', '0.00', '17000.00', '71700.00', '5000', 1),
(4, '21-Nov-2019', '2019-2020,Spring', '77000.00', '0.00', '77000.00', '6000', 1),
(5, '24-Aug-2020', '2020-2021,Fall', '82,425.00', '0.00', '82425.00', '7000', 1),
(6, '06-Dec-2020', '2020-2021,Spring', '84050.00', '0.00', '84050.00', '8000', 1),
(7, '15-May-2019', '2018-2019,Summer', '85000.00', '0.00', '85000.00', '9000', 1),
(8, '17-Feb-2019', '2018-2019,Spring', '86500.00', '0.00', '86700.00', '2000', 1),
(9, '07-Jun-2020', '2019-2020,Summer', '88500.00', '0.00', '88700.00', '1000', 1),
(10, '29-Mar-2021', '2020-2021,Summer', '91700.00', '0.00', '91700.00', '1000', 11),
(11, '23-Sep-2021', 'Semester Payment', '0.00', '900000', '92600.00', '500', 1);

-- --------------------------------------------------------

--
-- Table structure for table `libs`
--

CREATE TABLE `libs` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `borrowed` varchar(200) NOT NULL,
  `returned` varchar(200) NOT NULL,
  `fine` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `libs`
--

INSERT INTO `libs` (`id`, `title`, `borrowed`, `returned`, `fine`) VALUES
(1, 'Abcd', '12.03.22', '13.3.22', '122');

-- --------------------------------------------------------

--
-- Table structure for table `lib_finances`
--

CREATE TABLE `lib_finances` (
  `id` int(11) NOT NULL,
  `debit` int(200) NOT NULL,
  `credit` int(200) NOT NULL,
  `total` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lib_finances`
--

INSERT INTO `lib_finances` (`id`, `debit`, `credit`, `total`) VALUES
(1, 200, 200, 0);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `directory` varchar(500) NOT NULL,
  `c_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `name`, `directory`, `c_id`) VALUES
(1, 'Advance WebTech', 'Mid Project Must show on Sunday', 1);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` int(11) NOT NULL,
  `course` varchar(200) NOT NULL,
  `capacity` int(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `credit` varchar(200) NOT NULL,
  `dept` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `course`, `capacity`, `status`, `credit`, `dept`) VALUES
(1, 'ALGORITHMS  [A]', 40, 'Open', '3', 'CS'),
(3, 'INTRODUCTION TO DATABASE [A]', 41, 'Open', '3', 'CS'),
(4, 'COMPUTER GRAPHICS [A]', 41, 'Open', '3', 'CS'),
(5, 'OBJECT ORIENTED ANALYSIS AND DESIGN [A]', 40, 'Open', '3', 'CS'),
(6, 'THEORY OF COMPUTATION [A]', 40, 'Cancel', '3', 'CS'),
(7, 'OBJECT ORIENTED PROGRAMMING IN JAVA [B]', 40, 'Cancel', '3', 'CS'),
(8, 'COMPLEX VARIABLE,LAPLACE & Z-TRANSFORMATION [A]', 40, 'Cancel', '3', 'MATH'),
(9, 'COMPILER DESIGN [F]', 40, 'Open', '3', 'CS'),
(10, 'COMPUTER NETWORKS [C]', 40, 'Open', '3', 'CS'),
(11, 'SOFTWARE ENGINEERING [B]', 41, 'Cancel', '3', 'CS'),
(14, 'DATA COMMUNICATION [F]', 42, 'Open', '3', 'CS'),
(15, 'ARTIFICIAL INTELLIGENCE AND EXPERT SYSTEM [B]', 40, 'Open', '3', 'CS'),
(16, 'OBJECT ORIENTED PROGRAMMING 2 [L]', 40, 'Open', '3', 'CS'),
(17, 'DATA WAREHOUSING AND DATA MINING [CS] [A]', 40, 'Open', '3', 'MATH'),
(18, 'HUMAN COMPUTER INTERACTION [A]', 40, 'Open', '3', 'CS'),
(19, 'ADVANCED PROGRAMMING IN WEB TECHNOLOGY [A]', 40, 'Open', '3', 'CS'),
(20, 'THESIS [BSCS] [G64] ', 40, 'Open', '3', 'CS'),
(21, 'PRINCIPLES OF ECONOMICS (FST) [F]', 40, 'Open', '3', 'SOCIAL'),
(22, 'MATRICES, VECTORS, FOURIER ANALYSIS [B]', 40, 'Open\r\n', '3', 'Math');

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `userid` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `cpassword` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `usertype` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL,
  `session` varchar(200) NOT NULL,
  `blood_group` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `name`, `userid`, `email`, `address`, `password`, `cpassword`, `gender`, `usertype`, `file`, `session`, `blood_group`) VALUES
(23, 'Khalak', '11-22222-1', 'khalakbinkhair@gmail.com', 'Bashundhara R/A', '0530e22dea41e24a039563139cdc215e', '0530e22dea41e24a039563139cdc215e', 'Male', 'Student', 'Khalak1647316013.156-1566120_png-logo-for-student-transparent-png.png', '2019-2020, Spring', 'B+'),
(24, 'Khalak Bin Khair', '18-38697-3', 'khalakbinkhair@gmail.com', 'Bashundhara R/A', '0530e22dea41e24a039563139cdc215e', '0530e22dea41e24a039563139cdc215e', 'Male', 'Student', 'Khalak Bin Khair1647073128.IMG-20190429-WA0020.jpg', '2019-2020, Spring', 'B+');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(200) NOT NULL,
  `course` varchar(200) NOT NULL,
  `grade` varchar(200) NOT NULL,
  `gpa` varchar(200) NOT NULL,
  `marks` int(200) NOT NULL,
  `session` varchar(200) NOT NULL,
  `credit` int(200) NOT NULL,
  `fac_id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `course`, `grade`, `gpa`, `marks`, `session`, `credit`, `fac_id`) VALUES
(1, 'ALGORITHMS [A]', 'A+', '7.5', 90, '2020-2021,Fall', 2, 1),
(2, 'INTRODUCTION TO DATABASE [A]', 'A', '11.25', 85, '2020-2021,Fall', 3, 2),
(4, 'COMPUTER GRAPHICS [A]', 'A+', '12', 95, '2020-2021,Fall', 3, 3),
(5, 'OBJECT ORIENTED ANALYSIS AND DESIGN [A]', 'A+', '12', 90, '2020-2021,Spring', 3, 4),
(6, 'THEORY OF COMPUTATION [A]', 'A', '11.25', 85, '2020-2021,Spring', 3, 5),
(7, 'OBJECT ORIENTED PROGRAMMING IN JAVA [B]', 'A+', '12', 92, '2020-2021,Fall', 3, 6),
(8, 'COMPLEX VARIABLE,LAPLACE & Z-TRANSFORMATION [A]', 'A', '11.25', 85, '2020-2021,Spring', 3, 7),
(9, 'COMPILER DESIGN [F]', 'A+', '12', 95, '2020-2021,Spring', 3, 8),
(10, 'COMPUTER NETWORKS [C]', 'A+', '12', 92, '2020-2021,Summer', 3, 9),
(11, 'SOFTWARE ENGINEERING [B]', 'A+', '12', 91, '2020-2021,Summer', 3, 10),
(12, 'MATRICES, VECTORS, FOURIER ANALYSIS [B]', 'A+', '12', 95, '2020-2021,Summer', 3, 11),
(13, 'DATA COMMUNICATION [F]', 'A', '11.25', 89, '2020-2021,Summer', 3, 12),
(14, 'ARTIFICIAL INTELLIGENCE AND EXPERT SYSTEM [B]', 'A+', '12', 90, '2021-2022,Fall', 3, 13),
(15, 'OBJECT ORIENTED PROGRAMMING 2 [L]', 'A+', '12', 92, '2021-2022,Fall', 3, 14),
(16, 'DATA WAREHOUSING AND DATA MINING [CS] [A]', 'A+', '12', 94, '2021-2022,Fall', 3, 15),
(17, 'NUMERICAL METHODS FOR SCIENCE AND ENGINEERING [E]', 'A+', '12', 91, '2021-2022,Spring', 3, 16),
(18, 'HUMAN COMPUTER INTERACTION [A]', 'A+', '12', 91, '2021-2022,Spring', 3, 17),
(19, 'ADVANCED PROGRAMMING IN WEB TECHNOLOGY [A]', 'A+', '12', 90, '2021-2022,Spring', 3, 18),
(20, 'THESIS [BSCS] [G64] ', 'A+', '12', 90, '2021-2022,Spring', 3, 19),
(21, 'PRINCIPLES OF ECONOMICS (FST) [F]', 'A', '11.25', 89, '2021-2022,Spring', 3, 19);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_notices`
--

CREATE TABLE `teacher_notices` (
  `id` int(10) NOT NULL,
  `headline` varchar(100) NOT NULL,
  `whole` varchar(500) NOT NULL,
  `c_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_notices`
--

INSERT INTO `teacher_notices` (`id`, `headline`, `whole`, `c_id`) VALUES
(1, 'Quiz', 'Quiz at 26 march', 1),
(2, 'Exam', 'Exam at 26 march', 1),
(3, 'Quiz', 'Quiz lec 2', 2),
(4, 'Exam', 'Exam Lec 2', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Course_reg_FK` (`reg_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facs`
--
ALTER TABLE `facs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `offer_facs_FK` (`offer_id`);

--
-- Indexes for table `finances`
--
ALTER TABLE `finances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reg_fin_FK` (`res_id`);

--
-- Indexes for table `libs`
--
ALTER TABLE `libs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lib_finances`
--
ALTER TABLE `lib_finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `coursenote` (`c_id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_notices`
--
ALTER TABLE `teacher_notices`
  ADD KEY `coursenotice` (`c_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `facs`
--
ALTER TABLE `facs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `finances`
--
ALTER TABLE `finances`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `libs`
--
ALTER TABLE `libs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lib_finances`
--
ALTER TABLE `lib_finances`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `Course_reg_FK` FOREIGN KEY (`reg_id`) REFERENCES `registrations` (`id`);

--
-- Constraints for table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `coursenote` FOREIGN KEY (`c_id`) REFERENCES `courses` (`id`);

--
-- Constraints for table `teacher_notices`
--
ALTER TABLE `teacher_notices`
  ADD CONSTRAINT `coursenotice` FOREIGN KEY (`c_id`) REFERENCES `courses` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

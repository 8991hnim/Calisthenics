-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2018 at 05:49 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `calisthenics`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `ID` int(11) NOT NULL,
  `Name` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ID`, `Name`) VALUES
(1, 'bicep'),
(2, 'tricep'),
(3, 'forearms'),
(4, 'shoulder'),
(5, 'abs'),
(6, 'cardio'),
(7, 'chest'),
(8, 'back'),
(9, 'leg'),
(10, 'nutrition');

-- --------------------------------------------------------

--
-- Table structure for table `exercise`
--

CREATE TABLE `exercise` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `UrlYT` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exercise`
--

INSERT INTO `exercise` (`ID`, `Name`, `UrlYT`) VALUES
(1, 'Jumping Jacks', 'iSSAk4XCsRA'),
(2, 'Push-Up', 'wxhNoKZlfY8'),
(3, 'Diamond Push-Up', 'J0DnG1_S92I'),
(4, 'Clapping Push-Up', 'EYwWCgM198U'),
(5, 'Pull-Up', 'XB_7En-zf_M'),
(6, 'Chin-Up', 'b-ztMQpj8yc'),
(7, 'Wide Grip Chin-Up', 'w_PxgjPlU6s'),
(8, 'Wide Grip Pull-Up', 'iywjqUo5nmU'),
(9, 'Close Grip Pull-Up', 'j--ftfgTL5I'),
(10, 'Close Grip Chin-up', '6bTcFTRoqcw'),
(11, 'Superman Push-up', '6iam4u23zuM'),
(12, 'High Knee', 'oDdkytliOqE'),
(13, 'Archer Push-Up', 'h_1-gJEaksI'),
(14, 'Hindu Push-Up', 'I-KWxLXWBN0'),
(15, 'Planche', 'UZ-1jwG7aQ4'),
(16, 'One Arm Push-Up', 'JiHkxqbhNuw'),
(17, 'Crunches', 'Xyd_fa5zoEU'),
(18, 'Cross Arm Crunches', 'wgaIH-0rvQw'),
(19, 'Russian Twist', 'wkD8rjkodUI'),
(20, 'Mountain Climber', 'nmwgirgXLYM'),
(21, 'Plank', 'pSHjTRCQxIw'),
(22, 'Flutter Kicks', 'ANVdMDaYRts'),
(23, 'Clapping Crunches', 'moaZFyRi0sM'),
(24, 'Triple Clap Push-Up', '0hfmJaydq4o'),
(25, 'Butt Bridge', '8bbE64NuDTU'),
(26, 'V-Up', 'iP2fjvG0g3w'),
(27, 'Reverse Crunches', 'hyv14e2QDq0');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`ID`) VALUES
(1),
(2),
(3);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `ID` int(11) NOT NULL,
  `Title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci,
  `Content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci,
  `ShortContent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci,
  `LinkYoutube` text,
  `Image` text,
  `CategoryID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`ID`, `Title`, `Content`, `ShortContent`, `LinkYoutube`, `Image`, `CategoryID`) VALUES
(2, 'TAY TRƯỚC VỚI 2 CHIẾC GHẾ? ', '- Dụng cụ đơn giản: \r\n  2 chiếc ghế\r\n- Để 2 tay lên ghế \r\n bắt đầu tập', 'Bài tập cho tay trước TẠI NHÀ (và KHÔNG DỄ!)', '4Vg4Pai-XYI', 'bicep1', 1),
(3, 'TAY TRƯỚC VỚI 3 CHIẾC GHẾ? ', '- Dụng cụ đơn giản: \r\n  2 chiếc ghế\r\n- Để 2 tay lên ghế \r\n bắt đầu tập', 'Bài tập cho tay trước TẠI NHÀ (và KHÔNG DỄ!)', '4Vg4Pai-XYI', 'bicep2', 1),
(4, 'TAY TRƯỚC VỚI 4 CHIẾC GHẾ? ', '- Dụng cụ đơn giản: \r\n  2 chiếc ghế\r\n- Để 2 tay lên ghế \r\n bắt đầu tập', 'Bài tập cho tay trước TẠI NHÀ (và KHÔNG DỄ!)', '4Vg4Pai-XYI', 'bicep3', 1),
(5, 'TAY TRƯỚC VỚI 0 CHIẾC GHẾ? ', '- Dụng cụ đơn giản: \r\n  2 chiếc ghế\r\n- Để 2 tay lên ghế \r\n bắt đầu tập', 'Bài tập cho tay trước TẠI NHÀ (và KHÔNG DỄ!)', '4Vg4Pai-XYI', 'bicep4', 1),
(6, 'tại sao', 'contentttttttttttttt', 'shorrt content', 'test', 'bicep1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `progress_training`
--

CREATE TABLE `progress_training` (
  `UserID` int(11) NOT NULL,
  `LevelID` int(11) NOT NULL,
  `DayTrained` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `progress_training`
--

INSERT INTO `progress_training` (`UserID`, `LevelID`, `DayTrained`) VALUES
(2, 1, 0),
(2, 2, 0),
(2, 3, 0),
(3, 1, 7),
(3, 2, 0),
(3, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `LevelID` int(11) NOT NULL,
  `Day` int(11) NOT NULL,
  `ExerciseID` int(11) NOT NULL,
  `Set` int(11) DEFAULT NULL,
  `Rep` int(11) DEFAULT NULL,
  `BreakTime` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`LevelID`, `Day`, `ExerciseID`, `Set`, `Rep`, `BreakTime`) VALUES
(1, 1, 1, 30, 1, '30 giây'),
(1, 1, 2, 2, 10, '30 giây '),
(1, 1, 3, 3, 5, '30 giây'),
(1, 1, 12, 1, 50, '30 giây'),
(1, 2, 1, 1, 30, '30s'),
(1, 2, 12, 50, 1, '30s'),
(1, 2, 17, 2, 10, '30s'),
(1, 2, 21, 1, 60, '30s'),
(1, 2, 23, 2, 6, '30s');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `Account` text,
  `Pass` text,
  `Username` text,
  `Email` text,
  `Type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Account`, `Pass`, `Username`, `Email`, `Type`) VALUES
(1, 'hnim', '123456', '123456', 'hnim@gmail.com', 1),
(2, 'hnim2', '$2y$10$raWiP/e5hS9M6B8R2etCbOQ/jQlBp5MwMbB/gRrjg9nru209DXwu.', 'minh', NULL, 2),
(3, 'hnim3', '$2y$10$Xw4Ql2nBM.16rLuHu7qZYOKYm4mf83WAjLfxbEq9EBa/cKjPBPh3S', 'minh', 'daylaemail@gmail.com', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `exercise`
--
ALTER TABLE `exercise`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CategoryID` (`CategoryID`);

--
-- Indexes for table `progress_training`
--
ALTER TABLE `progress_training`
  ADD PRIMARY KEY (`UserID`,`LevelID`),
  ADD KEY `LevelID` (`LevelID`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`LevelID`,`Day`,`ExerciseID`),
  ADD KEY `ExerciseID` (`ExerciseID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `exercise`
--
ALTER TABLE `exercise`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`CategoryID`) REFERENCES `category` (`ID`);

--
-- Constraints for table `progress_training`
--
ALTER TABLE `progress_training`
  ADD CONSTRAINT `progress_training_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`ID`),
  ADD CONSTRAINT `progress_training_ibfk_2` FOREIGN KEY (`LevelID`) REFERENCES `level` (`ID`);

--
-- Constraints for table `training`
--
ALTER TABLE `training`
  ADD CONSTRAINT `training_ibfk_1` FOREIGN KEY (`ExerciseID`) REFERENCES `exercise` (`ID`),
  ADD CONSTRAINT `training_ibfk_2` FOREIGN KEY (`LevelID`) REFERENCES `level` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

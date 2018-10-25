-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2018 at 11:06 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `AuthorID` int(10) UNSIGNED NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Surname` varchar(30) NOT NULL,
  `Nationality` varchar(30) NOT NULL,
  `BirthYear` int(4) UNSIGNED NOT NULL,
  `DeathYear` int(4) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`AuthorID`, `Name`, `Surname`, `Nationality`, `BirthYear`, `DeathYear`) VALUES
(1, 'Miguel', 'de Cervantes Saavedra', 'Spanish', 1547, 1616),
(2, 'Charles', 'Dickens', 'British', 1812, 1870),
(3, 'J.R.R.', 'Tolkien', 'British', 1892, 1973),
(4, 'Antoine', 'de Saint-Exupery', 'French', 1900, 1944),
(5, 'J.K.', 'Rowling', 'British', 1965, NULL),
(6, 'Agatha', 'Christie', 'British', 1890, 1976),
(7, 'Cao', 'Xueqin', 'Chinese', 1715, 1763),
(8, 'Henry', ' Rider Haggard', 'British', 1856, 1925),
(9, 'C.S.', 'Lewis', 'British', 1898, 1963),
(10, 'Mark', ' Twain', 'American', 1835, 1910),
(11, 'jsbcj', 'fjcnb', 'jwfhnj', 4545, 4547),
(12, 'jsjc', 'jhfkj', 'jdhkj', 0, 0),
(13, 'ksjck', 'khjkck', 'ckfkcfk', 4545, 7885),
(14, 'hgAS', 'JBASSJCB', 'BSCHB', 1111, 4545),
(59, 'jhjjj', 'jhjh', 'kjjkj', 1545, 5454),
(60, 'jnns', 'kjmk', 'mkmk', 5445, 4455),
(71, 'uyasduhu', 'hjhjj', 'jhjj', 1515, 5455),
(72, 'uyasduhu', 'hjhjj', 'jhjj', 1515, 5455),
(73, 'romeo', 'juliet', 'usa', 1968, 2000),
(75, 'jkyugjygjygy', 'kjhkjhjhjkhj', 'jjhkgjgk', 1959, 1999),
(76, 'PPPPauthor', 'PPPP', 'PPPP', 1515, 5454),
(79, 'scooby', 'scooby', 'india', 1989, 2000),
(80, 'cat', 'cat', 'cat', 4545, 4888),
(81, 'qwqwqw', 'qwqwqw', 'qwqwqw', 1212, 1212),
(82, 'aaa', 'aaa', 'aaa', 4545, 4545),
(83, 'pipip', 'pipip', 'pipip', 1458, 7852),
(84, 'san', 'san', 'san', 1454, 4545),
(85, 'hen', 'hen', 'hen', 4545, 4878),
(86, 'parrot', 'parrot', 'india', 1949, 1999),
(87, 'shfjhskjh', 'kjhkjkh', 'hkjhkjhjk', 4545, 5454),
(88, 'paper', 'paper', 'paper', 1564, 4589),
(89, 'loliauthors', 'loli', 'ind', 1987, 4578),
(90, 'lewis', 'lewis', 'china', 1968, 1999),
(91, 'pot', 'pot', 'pot', 4152, 1254),
(92, 'actor', 'hjjhj', 'hjjhj', 4545, 5454),
(93, 'pipipPI', 'pipipi', 'pipipi', 4545, 4545),
(94, 'help', 'help', 'help', 1234, 4567),
(95, 'lopop', 'loplop', 'loplop', 1589, 4537),
(96, 'lillpo', 'lillp', 'lillp', 5487, 7896),
(97, 'jshjlchajhlav', 'hlkhjkhkjgk', 'kjhkjhjk', 4545, 2121);

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `BookID` int(10) UNSIGNED NOT NULL,
  `BookTitle` varchar(255) NOT NULL,
  `OriginalTitle` varchar(255) DEFAULT NULL,
  `YearofPublication` int(4) NOT NULL DEFAULT '0',
  `Genre` varchar(30) NOT NULL,
  `MillionsSold` int(10) UNSIGNED NOT NULL,
  `LanguageWritten` varchar(30) NOT NULL,
  `BookCover` varchar(255) NOT NULL,
  `AuthorID` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`BookID`, `BookTitle`, `OriginalTitle`, `YearofPublication`, `Genre`, `MillionsSold`, `LanguageWritten`, `BookCover`, `AuthorID`) VALUES
(1, 'Don Quixote', 'El Ingenioso Hidalgo Don Quixote de la Mancha', 1605, 'Novel', 500, 'Spanish', 'DonQuixote.jpg', 1),
(2, 'A Tale of Two Cities', 'A Tale of Two Cities', 1859, 'Historical Fiction', 200, 'English', 'aTaleofTwoCities.jpg', 2),
(3, 'The Lord of the Rings', 'The Lord of the Rings', 1954, 'Fantasy/Adventure', 150, 'English', 'theHobbit.jpg', 3),
(4, 'The Litle Prince', 'Le Petit Prince', 1943, 'Fable', 142, 'French', 'theLittlePrince.jpg', 4),
(5, 'Harry Potter and the Sorcerer\'s Stone', 'Harry Potter and the Sorcerer\'s Stone', 1997, 'Fantasy Fiction', 107, 'English', 'default.png', 5),
(6, 'And Then There Were None', 'Ten Little Niggers', 1939, 'Mystery', 100, 'English', 'andThenThereWereNone.jpg', 6),
(7, 'The Dream of the Red Chamber', 'The Story of the Stone', 1792, 'Novel', 100, 'Chinese', 'redChamber.jpg', 7),
(8, 'The Hobbit ', 'There and Back Again', 1937, 'High Fantasy', 100, 'English', 'theHobbit.jpg', 3),
(9, 'She: A History of Adventure', 'She', 1886, 'FIction', 100, 'English', 'She.jpg', 8),
(10, 'The Lion, the Witch and the Wardrobe', 'The Lion, the Witch and the Wardrobe', 1950, 'Fantasy', 85, 'English ', 'default.png', 9),
(11, 'jhjhjoooooo', 'kkh', 4898, 'jjk', 45, 'njhj', 'theHobbit.jpg', 11),
(13, 'kjdk', 'jwhcjf', 4759, 'jskfwes', 47, 'kjkd', 'She.jpg', 13),
(14, 'JJJPPPQQQ', 'JJK', 1515, 'IJIJ', 12, 'JIJI', 'andThenThereWereNone.jpg', 14),
(60, 'nuttynutty', 'nutty', 5444, 'kmkk', 5, 'mkkmmk', 'aTaleofTwoCities.jpg', 60),
(71, 'lavanyapppp', 'khjhj', 4454, 'hjhgj', 5, 'jhjhjh', 'redChamber.jpg', 71),
(72, 'kjkjkjuhjnPPPqq', 'khjhj', 4454, 'hjhgj', 5, 'jhjhjh', 'andThenThereWereNone.jpg', 72),
(75, 'puppu12', 'hghmgfnfcg', 0, '1959', 1999, '75', 'She.jpg', 75),
(76, 'PPPPbook', 'PPPP', 1544, 'bbjbj', 4, 'jhjhjhj', 'redChamber.jpg', 76),
(92, 'pots', 'pot', 1548, 'pot', 4, 'pot', 'default.png', 91),
(95, 'help', 'help', 4568, 'help', 5, 'help', 'redChamber.jpg', 94),
(96, 'lillp', 'lillp', 4589, 'kjbnmn', 2, 'eng', 'She.jpg', 96),
(97, 'kjhgylav', 'hghghb', 4545, 'jhgh', 4, 'jhghjg', 'She.jpg', 97);

-- --------------------------------------------------------

--
-- Table structure for table `booklog`
--

CREATE TABLE `booklog` (
  `BooklogID` int(10) NOT NULL,
  `CreatedDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifiedDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `BookID` int(10) NOT NULL,
  `UserID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booklog`
--

INSERT INTO `booklog` (`BooklogID`, `CreatedDate`, `ModifiedDate`, `BookID`, `UserID`) VALUES
(34, '2018-10-25 17:25:12', '2018-10-25 17:25:49', 90, 4),
(36, '2018-10-25 18:01:26', '2018-10-25 18:14:39', 92, 4),
(39, '2018-10-25 18:17:28', '2018-10-25 18:17:28', 95, 1),
(40, '2018-10-25 18:32:36', '2018-10-25 18:38:40', 96, 4),
(41, '2018-10-25 18:37:14', '2018-10-25 18:38:40', 96, 4),
(42, '2018-10-25 18:43:33', '2018-10-25 18:45:46', 97, 8);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `LoginID` int(10) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `UserID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`LoginID`, `Username`, `Password`, `UserID`) VALUES
(1, 'lav', '$2y$10$mdQE9AVAYFOr14VbySVfqOnLbmQMTr1IWkjCKgwQSfjRaX2CY/P0a', 1),
(4, 'vas', '$2y$10$VNLuqKWpTkrpBzAsRXaoF.sl9/telO6uDL7RnyN2eP5vLEUoSoa66', 4),
(5, 'san', '$2y$10$FjCJCvWBHdw84AT6xNdRkurbFzVARXTJDd.k4yTSsIqb8Yibrps0.', 5),
(6, 'aadhu', '$2y$10$fhvPZsqa/qyGUVdSQ0PrD.FbAZI9dlH5pLTuq/qNKSpUVGj39XS4q', 6),
(7, 'kat', '$2y$10$Q7Uk3/uouwe0RnY8jBKiK./4IBgH15rDiEBC6Koxnrfe.DZuRHwhy', 7),
(8, 'pup', '$2y$10$0Czj4luhAp93DgDCK9nhGeczCats24xedzSayJ.RhR.l.MOvKjxrS', 8),
(9, 'peppa', '$2y$10$ZzZ6ufUyLFP21tn3oa26Ie9rmsTXLYTFOy.TLXYfgbWxS2lpjI/Zy', 9),
(10, 'opop', '$2y$10$m6I70isKX6KCiIT3S1PTmuC9LVHbk.ikUDT9j.StsAa33bCBiUgh6', 10),
(11, 'jhjhj', '$2y$10$zg.VDKWbHn7epqR92ZFU3es9l9b67NU7DyE65PAh.LfF1Q7vkey8S', 11),
(20, 'klkll', '$2y$10$RFuniQ/Pbrfs.ZQsuvgkJ.CzXjSBLNA0.pT8.Ya213GjijiND/sZm', 20),
(21, 'ooops', '$2y$10$hjZJ25Eqd08eOtGZ4aM3i.2Sdn2Mfz8NdUoeiN7xz6nnWedGvvZee', 21),
(22, 'peterq', '$2y$10$jgNlo5W7WCe8EDn0XLfE0ORl7ofCfCCktoMaEj17i0IIUBMc2gMzu', 22);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(10) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `FirstName`, `LastName`, `Email`, `Role`) VALUES
(1, 'Lavanya', 'Vasanth', 'lavan_sampath@yahoo.com', 'Admin'),
(4, 'Vasanth', 'Krish', 'appu_vasanth@yahoo.com', 'User'),
(5, 'sanjita', 'vasanth', 'sanju@gmail.com', 'Admin'),
(6, 'aadhvika', 'vasanth', 'aadhu@yahoo.com', 'User'),
(7, 'kat', 'kat', 'kat@kat.com', 'User'),
(8, 'pup', 'pup', 'pup@pup.com', 'Admin'),
(9, 'peppa', 'peppa', 'peppa@peppa.com', 'User'),
(10, 'opop', 'opop', 'opop@opop.com', 'User'),
(11, 'hjk', 'hjhj', 'hkhjhjk@jhj.com', 'Admin'),
(20, 'klkllkl', 'klllllk', 'lkll@kklk.com', 'Admin'),
(21, 'oops', 'oops', 'oops@oops.com', 'User'),
(22, 'peter', 'peter', 'peter@peter.com', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`AuthorID`),
  ADD KEY `az1` (`Name`),
  ADD KEY `az2` (`Name`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`BookID`),
  ADD KEY `fk_authorID` (`AuthorID`),
  ADD KEY `indenxx` (`BookTitle`);

--
-- Indexes for table `booklog`
--
ALTER TABLE `booklog`
  ADD PRIMARY KEY (`BooklogID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`LoginID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `AuthorID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `BookID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `booklog`
--
ALTER TABLE `booklog`
  MODIFY `BooklogID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `LoginID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `fk_authorID` FOREIGN KEY (`AuthorID`) REFERENCES `author` (`AuthorID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

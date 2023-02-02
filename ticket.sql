-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2023 at 06:14 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(10) NOT NULL,
  `usrname` char(16) NOT NULL,
  `passwrd` longtext NOT NULL,
  `tipe` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `usrname`, `passwrd`, `tipe`) VALUES
(1, 'user12345', '$2y$12$8J6ytUH995MszN.TTyjIjuH.rBuEr1/pVE074IDKHLyvO2fomTc36', 'user'),
(2, 'admin12345', '$2y$12$z.ixjX8yU6a1TMWNNPbwe.8FlCCXfQd1Qk76dp3sRnjNZepyXO8Wu', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(10) NOT NULL,
  `film` char(255) NOT NULL,
  `studio` char(255) NOT NULL,
  `bench` char(255) NOT NULL,
  `date` char(255) NOT NULL,
  `time` char(255) NOT NULL,
  `price` int(11) NOT NULL,
  `code` char(10) NOT NULL,
  `status` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id` int(1) NOT NULL,
  `img` char(255) NOT NULL,
  `title` char(255) NOT NULL,
  `synopsis` char(255) NOT NULL,
  `genre` char(255) NOT NULL,
  `duration` char(255) NOT NULL,
  `director` char(255) NOT NULL,
  `age_rating` char(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `img`, `title`, `synopsis`, `genre`, `duration`, `director`, `age_rating`, `price`) VALUES
(1, 'Image/Black-Adam.jpg', 'Black Adam', 'Nearly 5,000 years after he was bestowed with the almighty powers of the Egyptian gods and imprisoned just as quickly Black Adam is freed from his earthly tomb, ready to unleash his unique form of justice on the modern world.', 'Genre : Action, Adventure, Fantasy, Science', 'Duration : 2 Hours 12 Minutes', 'Director : Jaume Collet-Serra', 'Age Rating : R13+', 50000),
(2, 'Image/Spider-Man.jpg', 'Spider-Man : No Way Home', 'With Spider-Man is identity now revealed, Peter asks Doctor Strange to help. When a spell goes wrong, dangerous foes from other worlds start to appear, forcing Peter to discover what it truly means to be Spider-Man.', 'Genre : Action, Science Fiction, Adventure', 'Duration : 2 Hours 28 Minutes', 'Director : Jon Watts', 'Age Rating : R13+', 50000),
(3, 'Image/Wakanda-Forever.jpg', 'Black Panther : Wakanda Forever', 'The people of Wakanda fight to protect their home from intervening world powers as they mourn the death of King T\'Challa.', 'Genre : Action', 'Duration : 2 Hours 41 Minutes', 'Director : Ryan Coogler', 'Age Rating : R13+', 50000),
(4, 'Image/Justice-League.jpg', 'Justice League', 'Fueled by his restored faith in humanity and inspired by Superman\'s selfless act, Bruce Wayne enlists the help of his new-found ally, Diana Prince, to face an even greater enemy.', 'Genre : Action, Science Fiction, Adventure', 'Duration : 2 Hours 0 Minutes', 'Director : Joss Whedon, Zack Snyder', 'Age Rating : R13+', 50000),
(5, 'Image/Avatar-2.jpg', 'Avatar: The Way of Water', 'Jake Sully lives with his newfound family formed on the extrasolar moon Pandora. Once a familiar threat returns to finish what was previously started, Jake must work with Neytiri and the army of the Na\'vi race to protect their home.', 'Genre : Action, Adventure, Fantasy', 'Duration : 3 Hours 12 Minutes', 'Director : James Cameron', 'Age Rating : R13+', 50000),
(6, 'Image/Avenger-Endgame.jpg', 'Avengers: Endgame', 'After the devastating events of Avengers: Infinity War (2018), the universe is in ruins. With the help of remaining allies, the Avengers assemble once more in order to reverse Thanos\' actions and restore balance to the universe.', 'Genre : Action, Adventure, Drama', 'Duration : 3 Hours 1 Minutes', 'Director : Anthony Russo, Joe Russo, Jacob Shrimpton', 'Age Rating : R13+', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(1) NOT NULL,
  `film` char(255) NOT NULL,
  `studio` char(255) NOT NULL,
  `bench` char(255) NOT NULL,
  `date` char(255) NOT NULL,
  `time` char(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `film`, `studio`, `bench`, `date`, `time`, `price`) VALUES
(1, 'Avengers: Endgame', '04', 'F15', '2023-01-22', '19:00', 50000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

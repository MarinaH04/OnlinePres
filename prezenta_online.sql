-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24 Iun 2019 la 13:02
-- Versiune server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prezenta_online`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `materie`
--

CREATE TABLE `materie` (
  `cod_m` int(12) DEFAULT NULL,
  `denumire` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `materie`
--

INSERT INTO `materie` (`cod_m`, `denumire`) VALUES
(5, 'Contabilitate'),
(6, 'Engleza'),
(7, 'Informatica');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `prezenta`
--

CREATE TABLE `prezenta` (
  `id_prezenta` int(11) NOT NULL,
  `id_ps` int(11) NOT NULL,
  `id_zi` int(11) NOT NULL,
  `prezent_a` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `prezenta`
--

INSERT INTO `prezenta` (`id_prezenta`, `id_ps`, `id_zi`, `prezent_a`) VALUES
(1, 3, 1, 'P'),
(2, 2, 1, 'P'),
(3, 1, 1, 'P'),
(4, 3, 2, 'A'),
(5, 2, 2, 'A'),
(6, 1, 2, 'A'),
(7, 3, 3, 'P'),
(8, 2, 3, 'A'),
(9, 1, 3, 'P');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `prof`
--

CREATE TABLE `prof` (
  `id_prof` int(11) NOT NULL,
  `firstname` varchar(256) NOT NULL,
  `lastname` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `p_username` varchar(256) NOT NULL,
  `p_password` varchar(256) NOT NULL,
  `cod_materie` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `prof`
--

INSERT INTO `prof` (`id_prof`, `firstname`, `lastname`, `email`, `p_username`, `p_password`, `cod_materie`) VALUES
(1, 'Marian', 'Popescu', 'marian.popescu@ulbsibiu.ro', 'MarianH304', '$2y$10$58ZL20sjZDmounRI4d.uVuwtn1bp3r1oOcgkCM26JSx4dNkUHXu.u', '1'),
(2, 'Alina', 'Dobrila', 'alina.dobr@ulbsibiu.', 'Alina_D', '$2y$10$kEfGYSoNB3UVweJZYbSVLu2ZyqaKvGObLMJvVXSL.rjgI5xFQQ66q', '2');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `prof_stud`
--

CREATE TABLE `prof_stud` (
  `id_ps` int(11) NOT NULL,
  `id_prof` int(11) NOT NULL,
  `id_stud` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `prof_stud`
--

INSERT INTO `prof_stud` (`id_ps`, `id_prof`, `id_stud`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 2, 1),
(5, 2, 2),
(6, 2, 3),
(7, 2, 4);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `student`
--

CREATE TABLE `student` (
  `stud_id` int(11) NOT NULL,
  `firstname` varchar(256) NOT NULL,
  `lastname` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `s_username` varchar(256) NOT NULL,
  `s_password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `student`
--

INSERT INTO `student` (`stud_id`, `firstname`, `lastname`, `email`, `s_username`, `s_password`) VALUES
(1, 'Marina', 'Hanzu', 'hanzumarina@yahoo.com', 'Marina04', '$2y$10$YgbHu6ZFphDiGo2MTA/u/.JqpZ6Z93bQR27yEpLcZo7dlti6GFgyG'),
(2, 'Anca', 'Jurca', 'ancajurca@yahoo.com', 'J_Develop', '$2y$10$YD8/shktnesdnh8ikzeJ/u7ALxm.9vCN/9F8rG4GxzHVUjd0Y6Mwy'),
(3, 'Stefan', 'Cristescu', 'stefan1425@yahoo.com', 'Stefan_cris', '$2y$10$nCxhD5ecUGT0i1u8U8qCOOQ6HXbyy/QE1ZuJDgc0kQA7VXQGNCoVe'),
(4, 'Denisa', 'Stefanescu', 'denisa_stefan@yahoo.com', 'Deny_28', '$2y$10$ZEUnPZqcpkWWDys2e0fr..GRQLx4EpaH4Sb2lSDMqhRoNcZ.P4WPu');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `zile`
--

CREATE TABLE `zile` (
  `id_zi` int(11) NOT NULL,
  `Denumire` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `zile`
--

INSERT INTO `zile` (`id_zi`, `Denumire`) VALUES
(1, 'Luni'),
(2, 'Marti'),
(3, 'Miercuri'),
(4, 'Joi'),
(5, 'Vineri');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prezenta`
--
ALTER TABLE `prezenta`
  ADD PRIMARY KEY (`id_prezenta`);

--
-- Indexes for table `prof`
--
ALTER TABLE `prof`
  ADD PRIMARY KEY (`id_prof`);

--
-- Indexes for table `prof_stud`
--
ALTER TABLE `prof_stud`
  ADD PRIMARY KEY (`id_ps`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stud_id`);

--
-- Indexes for table `zile`
--
ALTER TABLE `zile`
  ADD PRIMARY KEY (`id_zi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prezenta`
--
ALTER TABLE `prezenta`
  MODIFY `id_prezenta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `prof`
--
ALTER TABLE `prof`
  MODIFY `id_prof` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `prof_stud`
--
ALTER TABLE `prof_stud`
  MODIFY `id_ps` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stud_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `zile`
--
ALTER TABLE `zile`
  MODIFY `id_zi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

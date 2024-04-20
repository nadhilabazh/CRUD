-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 06:19 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mhs` int(11) NOT NULL,
  `nim` char(13) DEFAULT NULL,
  `nama_mhs` varchar(50) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `jurusan` varchar(30) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `tempat_lahir` varchar(30) DEFAULT NULL,
  `no_hp` varchar(13) DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `foto` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mhs`, `nim`, `nama_mhs`, `email`, `jurusan`, `tgl_lahir`, `tempat_lahir`, `no_hp`, `agama`, `jenis_kelamin`, `alamat`, `foto`) VALUES
(0, '062040421289', 'Vilia Nur Arifah', 'vilia.nur69@gmail.com', '2003-06-29', '0000-00-00', 'Teknik Kimia', '081231027834', 'Islam', 'Perempuan', 'Palembang', 'vilia.jpg'),
(1, '062030701619', 'Nadhila Bazhlina', 'nadhilabazh@gmail.com', 'Teknik Komputer', '2002-06-27', 'Palembang', '085781263754', 'Islam', 'Perempuan', 'Palembang', 'nadhila.jpg'),
(2, '062050520276', 'Ria Febriyanti', 'riafeb12@gmail.com', 'Teknik Mesin', '2002-02-27', 'Palembang', '082133458129', 'Islam', 'Perempuan', 'Jl. PDAM', 'riafeb.jpeg'),
(3, '062040411610', 'Aliyyah Bakhitah', 'albakhitah@gmail.com', 'Teknik Kimia', '2002-05-21', 'Palembang', '089742318750', 'Islam', 'Perempuan', 'Jl. Lunjuk', 'aliyyah.jpeg'),
(4, '062030311621', 'Ria Anggi Safitri', 'angiii@gmail.com', 'Teknik Elektro', '2002-03-19', 'Palembang', '085674309943', 'Islam', 'Perempuan', 'Jl. Banyuasin', 'anggi.jpeg'),
(5, '062030701615', 'Intan Ratulia', 'intan007@gmail.com', 'Teknik Komputer', '2002-11-28', 'Palembang', '082265911354', 'Islam', 'Perempuan', 'Jl. Suroso', 'intan.jpeg'),
(6, '062030800324', 'Aldi Setiawan', 'aldeee@gmail.com', 'Manajamen Informatika', '2002-02-05', 'Palembang', '082167042851', 'Islam', 'Laki-laki', 'Jl. Manggis', 'aldi.jpg'),
(7, '062030801611', 'Dhiya Kasful Haqi', 'haqi12@gmail.com', 'Manajamen Informatika', '2002-08-14', 'Palembang', '085749328667', 'Islam', 'Laki-laki', 'Jl. Belimbing', 'haqii.jpeg'),
(8, '062030310260', 'Wanda Aprilia Koto', 'wandaak@gmail.com', 'Teknik Elektro', '2002-04-13', 'Palembang', '081160754921', 'Islam', 'Perempuan', 'Jl. Nangka', 'wanda.jpeg'),
(9, '062030701623', 'Tiara Maharani', 'tiara42@gmail.com', 'Teknik Komputer', '2002-07-16', 'Palembang', '086652283107', 'Islam', 'Perempuan', 'Jl. Maskarebet', 'tiara.jpg'),
(10, '062030700259', 'Sri Wahyuni', 'samsulsri11@gmail.com', 'Teknik Komputer', '2002-01-30', 'Palembang', '089512549650', 'Islam', 'Perempuan', 'Jl. Lunjuk', 'sri.jpeg'),
(11, '062030701612', 'Ersa Monica Sari', 'ersa56@gmail.com', 'Teknik Komputer', '2002-09-25', 'Palembang', '089867332195', 'Islam', 'Perempuan', 'Jl. Liverpool', 'ersa.jpeg'),
(12, '062050521609', 'Ade Hilta Apriansyah', 'adehilt@gmail.com', 'Teknik Mesin', '2002-03-21', 'Palembang', '082134873459', 'Islam', 'Laki-laki', 'Jl. Pepaya', 'ade.jpg'),
(13, '062030320249', 'Dede Romansyah', 'dederomn@gmail.com', 'Teknik Elektro', '2002-10-02', 'Palembang', '081254296412', 'Islam', 'Laki-laki', 'Jl. Apeli', 'dede.jpeg'),
(14, '062030121617', 'M Galung Saputra', 'galunggg@gmail.com', 'Teknik Sipil', '2002-02-01', 'Palembang', '085841289466', 'Islam', 'Laki-laki', 'Jl. Smanpoel', 'galung.jpeg'),
(15, '062030121618', 'Mikhael Harianja', 'mikell@gmail.com', 'Teknik Sipil', '2002-04-17', 'Palembang', '083127539621', 'Kristen', 'Laki-laki', 'Jl. Kelengkeng', 'mikhael.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mhs`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

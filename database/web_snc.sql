-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2019 at 02:31 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_snc`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(6) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(6) NOT NULL,
  `nama_menu` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `keterangan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `nama_menu`, `alamat`, `keterangan`) VALUES
(1, 'BERANDA', '#hero', 'one_page'),
(3, 'TENTANG KAMI', '#about', 'one_page'),
(4, 'PERATURAN ORGANISASI', '#services', 'one_page'),
(5, 'KEPENGURUSAN ', '#team', 'one_page'),
(6, 'BERITA', '#portfolio', 'one_page'),
(7, 'DOWNLOAD MATERI', 'index.php?menu=download_materi', 'other_page'),
(8, 'KONTAK', '#contact', 'one_page');

-- --------------------------------------------------------

--
-- Table structure for table `peraturan_organisasi`
--

CREATE TABLE `peraturan_organisasi` (
  `id` int(10) NOT NULL,
  `nama_peraturan` varchar(100) NOT NULL,
  `isi_peraturan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peraturan_organisasi`
--

INSERT INTO `peraturan_organisasi` (`id`, `nama_peraturan`, `isi_peraturan`) VALUES
(1, 'Pasal Satu', 'Anggota SNC dilarang mengakses situs-situs internet yang diluar kewajaran dan batas-batas peraturan perundang-undangan yang berupa pornografi, pornoaksi, dll.'),
(2, 'Pasal Dua', 'Anggota SNC dilarang terlibat atau berhubungan dengan apa saja yang dapat merusak dan mencemarkan nama baik SNC.'),
(3, 'Pasal Tiga', 'Anggota SNC harus berjanji tidak akan melakukan hal tersebut diatas'),
(4, 'Pasal Empat', 'Anggota SNC harus mau berbagi ilmu yang telah diperoleh dari manapun kepada sesame anggota maupun orang lain.'),
(5, 'Pasal Lima', 'Harus memakai celana panjang dan baju bebas rapi.'),
(6, 'Pasal Enam', 'Bagi anggota yang berhalangan hadir pada pertemuan snc maka mereka harus memberitahuakannya ke pada senior.'),
(7, 'Pasal Tujuh', 'Bagi yang terlambat hadir harus memberitahukan keterlambatannya ke senior.');

-- --------------------------------------------------------

--
-- Table structure for table `tentang_kami`
--

CREATE TABLE `tentang_kami` (
  `id` int(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tentang_kami`
--

INSERT INTO `tentang_kami` (`id`, `judul`, `isi`) VALUES
(2, 'Tentang Kami', 'Awalnya, ekskul ini hanyalah sebuah kelompok belajar yang dibentuk oleh 5 orang siswa jurusan TI. Seiring berjalannya waktu, ternyata banyak siswa-siswi lain yang berminat ikut dalam kelompok belajar ini. Kemudian salah satu dari anggota kelompok menyarankan agar kelompok belajar in dijadika ekskul di SMKN 3 Mataram. Semua anggota setuju lalu lahirlah WZC (Wireless Zone Community). Setelah berjalan satu tahun, para anggota berpikir bahwa tidak selamanya jaringan menggunakan wireless. Maka pada saat pelantikan anggota WZC angkatan pertama, para pencetus WZC sepakat untuk mengubah nama WZC (Wireless Zone Community) menjadi SNC (Smekti Nircable Community).\r\nTujuan umum Smekti Nircable Community (SNC) adalah sebagai berikut:\r\n1. Mencetak siswa-siswi SMKN 3 Mataram yang mampu mengharumkan nama sekolah melalui ilmu TIK.\r\n2. Membina siswa-siswi SMKN 3 Mataram menjadi siswa-siswi yang kreatif dalam dunia TIK.\r\n3. Melahirkan seorang hacker yang berguna bagi nusa dan bangsa.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peraturan_organisasi`
--
ALTER TABLE `peraturan_organisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tentang_kami`
--
ALTER TABLE `tentang_kami`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `peraturan_organisasi`
--
ALTER TABLE `peraturan_organisasi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tentang_kami`
--
ALTER TABLE `tentang_kami`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

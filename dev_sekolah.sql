-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Nov 2024 pada 07.40
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dev_sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_agenda`
--

CREATE TABLE `tbl_agenda` (
  `idAgenda` int(11) NOT NULL,
  `judulAgenda` varchar(200) NOT NULL,
  `agenda` text NOT NULL,
  `author` varchar(200) NOT NULL,
  `waktu` datetime NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_agenda`
--

INSERT INTO `tbl_agenda` (`idAgenda`, `judulAgenda`, `agenda`, `author`, `waktu`, `gambar`) VALUES
(2, 'asdasd', 'asdasd', 'admin', '2024-11-12 09:33:14', '1731403994_6508b2bf699aec853d2e.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `idBerita` int(11) NOT NULL,
  `judulBerita` varchar(200) NOT NULL,
  `berita` text NOT NULL,
  `author` varchar(200) NOT NULL,
  `waktu` datetime NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_berita`
--

INSERT INTO `tbl_berita` (`idBerita`, `judulBerita`, `berita`, `author`, `waktu`, `gambar`) VALUES
(3, 'adasdasd', 'asdasdasd', 'admin', '2024-11-14 04:19:02', 'berita_20582.jpg'),
(4, 'asdasd', 'asdasdasd', 'admin', '2024-11-14 04:23:21', 'berita_28674.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `idGaleri` int(11) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `keterangan` text NOT NULL,
  `author` varchar(200) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`idGaleri`, `gambar`, `keterangan`, `author`, `waktu`) VALUES
(3, '1731569267_95134b51607919b61463.jpg', 'adfadfadf', 'admin', '2024-11-14 07:27:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_info_sekolah`
--

CREATE TABLE `tbl_info_sekolah` (
  `idInfoSekolah` int(11) NOT NULL,
  `judulInfo` varchar(200) NOT NULL,
  `informasi` varchar(255) NOT NULL,
  `author` varchar(200) NOT NULL,
  `waktu` datetime NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_info_sekolah`
--

INSERT INTO `tbl_info_sekolah` (`idInfoSekolah`, `judulInfo`, `informasi`, `author`, `waktu`, `gambar`) VALUES
(4, 'asdasd', 'asdasd', 'admin', '2024-11-14 07:19:08', '1731568748_6247e7fb8c9a33c76a90.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_komite_sekolah`
--

CREATE TABLE `tbl_komite_sekolah` (
  `idKomiteSekolah` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jabatan` varchar(200) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_komite_sekolah`
--

INSERT INTO `tbl_komite_sekolah` (`idKomiteSekolah`, `nama`, `jabatan`, `foto`) VALUES
(5, '324234324', 'asdfsadf', 'komite_sekolah_73288.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_log`
--

CREATE TABLE `tbl_log` (
  `idLog` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `keterangan` text NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_log`
--

INSERT INTO `tbl_log` (`idLog`, `username`, `keterangan`, `waktu`) VALUES
(1, 'admin', 'Penambahan Username tidak berhasil dikarenakan username sudah terdaftar', '2024-11-09 05:54:37'),
(2, 'admin', 'Melakukan Login Admin', '2024-11-09 06:08:57'),
(3, 'admin', 'Melakukan Login Admin', '2024-11-09 06:09:15'),
(4, 'admin', 'Melakukan Login Admin', '2024-11-09 06:09:25'),
(5, 'Tidak Diketahui', 'Melakukan Percobaan Login dengan menggunakan username admin', '2024-11-09 06:09:59'),
(6, 'admin', 'Melakukan Login Admin', '2024-11-09 06:10:34'),
(7, 'admin', 'Melakukan Login Admin', '2024-11-09 06:16:15'),
(8, 'admin', 'Melakukan Login Admin', '2024-11-09 08:14:58'),
(9, 'admin', 'Melakukan Login Admin', '2024-11-09 08:15:08'),
(10, 'Tidak Diketahui', 'Melakukan Percobaan Login dengan menggunakan username admin', '2024-11-09 08:19:27'),
(11, 'Tidak Diketahui', 'Melakukan Percobaan Login dengan menggunakan username asdas', '2024-11-09 08:20:26'),
(12, 'Tidak Diketahui', 'Melakukan Percobaan Login dengan menggunakan username sdbfkbadskjf', '2024-11-09 08:21:29'),
(13, 'admin', 'Melakukan Login Admin', '2024-11-11 04:11:01'),
(14, 'admin', 'Melakukan Login Admin', '2024-11-11 04:12:23'),
(15, 'admin', 'Melakukan Login Admin', '2024-11-11 04:17:35'),
(16, 'admin', 'Melakukan Login Admin', '2024-11-11 04:19:41'),
(17, 'Tidak Diketahui', 'Melakukan Percobaan Login dengan menggunakan username admin', '2024-11-12 01:05:51'),
(18, 'admin', 'Melakukan Login Admin', '2024-11-12 01:05:55'),
(19, 'admin', 'Melakukan Perubahan Password', '2024-11-12 01:16:42'),
(20, 'admin', 'Melakukan Perubahan Password', '2024-11-12 01:19:43'),
(21, 'admin', 'Melakukan Penambahan Username, dengan username tester', '2024-11-12 01:24:31'),
(22, 'admin', 'Melakukan Perubahan Data', '2024-11-12 01:34:33'),
(23, 'admin', 'Melakukan Perubahan Data', '2024-11-12 01:35:53'),
(24, 'admin', 'Melakukan Perubahan Data', '2024-11-12 01:35:58'),
(25, 'admin', 'Melakukan Perubahan Data Profil ', '2024-11-12 01:44:50'),
(26, 'admin', 'Melakukan Perubahan sambutan ', '2024-11-12 02:34:01'),
(27, 'admin', 'Melakukan Perubahan sambutan ', '2024-11-12 02:34:10'),
(28, 'admin', 'Melakukan Perubahan sambutan ', '2024-11-12 02:36:08'),
(29, 'admin', 'Melakukan Perubahan Sejarah ', '2024-11-12 02:37:08'),
(30, 'admin', 'Melakukan Perubahan Sejarah ', '2024-11-12 02:37:28'),
(31, 'admin', 'Melakukan Perubahan Sejarah ', '2024-11-12 02:40:03'),
(32, 'admin', 'Melakukan Perubahan Sejarah ', '2024-11-12 02:51:48'),
(33, 'admin', 'Melakukan Perubahan Sejarah ', '2024-11-12 02:51:56'),
(34, 'admin', 'Melakukan Penambahan Struktur Organisasi Sekolah', '2024-11-12 03:01:26'),
(35, 'admin', 'Melakukan Penambahan Struktur Organisasi Sekolah', '2024-11-12 03:24:01'),
(36, 'admin', 'Melakukan Penambahan Struktur Organisasi Sekolah', '2024-11-12 03:24:35'),
(37, 'admin', 'Melakukan Penghapusan Struktur OPRganisasi Sekolah', '2024-11-12 03:24:38'),
(38, 'admin', 'Melakukan Penambahan Struktur Organisasi Sekolah', '2024-11-12 03:28:46'),
(39, 'admin', 'Melakukan Login Admin', '2024-11-12 07:00:09'),
(40, 'admin', 'Melakukan Perubahan Foto Struktur Organisasi Sekolah ', '2024-11-12 07:01:08'),
(41, 'admin', 'Melakukan Perubahan Struktur Organisasi Sekolah ', '2024-11-12 07:01:23'),
(42, 'admin', 'Melakukan Penambahan Struktur Organisasi Sekolah', '2024-11-12 07:04:07'),
(43, 'admin', 'Melakukan Penambahan Struktur Organisasi Sekolah', '2024-11-12 07:09:05'),
(44, 'admin', 'Melakukan Penambahan Struktur Organisasi Sekolah', '2024-11-12 07:13:16'),
(45, 'admin', 'Melakukan Perubahan Foto Struktur Organisasi Sekolah ', '2024-11-12 07:15:04'),
(46, 'admin', 'Melakukan Penambahan Struktur Organisasi Sekolah', '2024-11-12 07:16:00'),
(47, 'admin', 'Melakukan Perubahan Foto Struktur Organisasi Sekolah ', '2024-11-12 07:16:08'),
(48, 'admin', 'Melakukan Penambahan Struktur Organisasi Sekolah', '2024-11-12 07:17:11'),
(49, 'admin', 'Melakukan Perubahan Foto Struktur Organisasi Sekolah ', '2024-11-12 07:17:22'),
(50, 'admin', 'Melakukan Perubahan Struktur Organisasi Sekolah ', '2024-11-12 07:17:28'),
(51, 'admin', 'Melakukan Penambahan Struktur Organisasi Osis', '2024-11-12 07:26:06'),
(52, 'admin', 'Melakukan Perubahan Struktur Organisasi Osis ', '2024-11-12 07:26:12'),
(53, 'admin', 'Melakukan Perubahan Foto Struktur Organisasi Osis ', '2024-11-12 07:26:24'),
(54, 'admin', 'Melakukan Penambahan Struktur Organisasi Osis', '2024-11-12 07:29:43'),
(55, 'admin', 'Melakukan Perubahan Foto Struktur Organisasi Osis ', '2024-11-12 07:29:50'),
(56, 'admin', 'Melakukan Penghapusan Struktur Osis', '2024-11-12 07:33:28'),
(57, 'admin', 'Melakukan Penambahan Struktur Organisasi Osis', '2024-11-12 07:39:15'),
(58, 'admin', 'Melakukan Penghapusan Struktur Osis', '2024-11-12 07:39:43'),
(59, 'admin', 'Melakukan Penambahan Struktur Organisasi Sekolah', '2024-11-12 07:40:28'),
(60, 'admin', 'Melakukan Penambahan Struktur Organisasi Sekolah', '2024-11-12 07:41:18'),
(61, 'admin', 'Melakukan Perubahan Struktur Organisasi Sekolah ', '2024-11-12 07:41:29'),
(62, 'admin', 'Melakukan Perubahan Foto Struktur Organisasi Sekolah ', '2024-11-12 07:41:38'),
(63, 'admin', 'Melakukan Penghapusan Struktur Organisasi Pendidik', '2024-11-12 07:42:56'),
(64, 'admin', 'Melakukan Penambahan Struktur Organisasi Sekolah', '2024-11-12 07:43:04'),
(65, 'admin', 'Melakukan Penambahan Struktur Organisasi Sekolah', '2024-11-12 07:49:20'),
(66, 'admin', 'Melakukan Penambahan Struktur Organisasi Sekolah', '2024-11-12 07:50:02'),
(67, 'admin', 'Melakukan Perubahan Struktur Organisasi Sekolah ', '2024-11-12 07:50:32'),
(68, 'admin', 'Melakukan Perubahan Foto Struktur Organisasi Sekolah ', '2024-11-12 07:51:28'),
(69, 'admin', 'Melakukan Penambahan Struktur Organisasi Sekolah', '2024-11-12 07:52:28'),
(70, 'admin', 'Melakukan Perubahan Foto Struktur Organisasi Sekolah ', '2024-11-12 07:52:44'),
(71, 'admin', 'Melakukan Penghapusan Struktur Organsisasi non pendidik', '2024-11-12 07:52:50'),
(72, 'admin', 'Melakukan Penambahan Berita', '2024-11-12 08:14:21'),
(73, 'admin', 'Melakukan Perubahan Berita ', '2024-11-12 08:16:28'),
(74, 'admin', 'Melakukan Perubahan gambar berita ', '2024-11-12 08:19:03'),
(75, 'admin', 'Melakukan Perubahan gambar berita ', '2024-11-12 08:19:20'),
(76, 'admin', 'Melakukan Penambahan Berita', '2024-11-12 08:21:11'),
(77, 'admin', 'Melakukan Penghapusan Berita', '2024-11-12 08:21:14'),
(78, 'admin', 'Melakukan Penambahan informasi', '2024-11-12 08:32:47'),
(79, 'admin', 'Melakukan Penambahan informasi', '2024-11-12 08:36:10'),
(80, 'admin', 'Melakukan Perubahan gambar informasi ', '2024-11-12 08:54:17'),
(81, 'admin', 'Melakukan Perubahan gambar informasi ', '2024-11-12 08:54:25'),
(82, 'admin', 'Melakukan Penghapusan informasi', '2024-11-12 08:56:51'),
(83, 'admin', 'Melakukan Penambahan informasi', '2024-11-12 08:56:58'),
(84, 'admin', 'Melakukan Penghapusan informasi', '2024-11-12 08:57:01'),
(85, 'admin', 'Melakukan Penambahan agenda', '2024-11-12 09:00:46'),
(86, 'admin', 'Melakukan Perubahan agenda ', '2024-11-12 09:01:15'),
(87, 'admin', 'Melakukan Perubahan agenda ', '2024-11-12 09:02:22'),
(88, 'admin', 'Melakukan Perubahan gambar agenda ', '2024-11-12 09:04:00'),
(89, 'admin', 'Melakukan Perubahan gambar agenda ', '2024-11-12 09:04:09'),
(90, 'admin', 'Melakukan Penghapusan agenda', '2024-11-12 09:04:41'),
(91, 'admin', 'Melakukan Penambahan galeri', '2024-11-12 09:25:48'),
(92, 'admin', 'Melakukan Penghapusan galeri', '2024-11-12 09:30:30'),
(93, 'admin', 'Melakukan Penambahan galeri', '2024-11-12 09:30:38'),
(94, 'admin', 'Melakukan Penambahan agenda', '2024-11-12 09:33:14'),
(95, 'admin', 'Melakukan Perubahan gambar agenda ', '2024-11-12 09:34:04'),
(96, 'admin', 'Melakukan Penghapusan galeri', '2024-11-12 09:34:08'),
(97, 'admin', 'Melakukan Penambahan prestasi', '2024-11-12 09:45:34'),
(98, 'admin', 'Melakukan Perubahan prestasi ', '2024-11-12 09:46:03'),
(99, 'admin', 'Melakukan Perubahan gambar prestasi ', '2024-11-12 09:47:32'),
(100, 'admin', 'Melakukan Perubahan gambar prestasi ', '2024-11-12 09:47:47'),
(101, 'admin', 'Melakukan Penghapusan prestasi', '2024-11-12 09:47:51'),
(102, 'Tidak Diketahui', 'Melakukan Percobaan Login dengan menggunakan username admin', '2024-11-13 09:00:54'),
(103, 'Tidak Diketahui', 'Melakukan Percobaan Login dengan menggunakan username admin', '2024-11-13 09:12:20'),
(104, 'Tidak Diketahui', 'Melakukan Percobaan Login dengan menggunakan username admin', '2024-11-13 09:12:25'),
(105, 'admin', 'Melakukan Login Admin', '2024-11-13 09:12:29'),
(106, 'admin', 'Melakukan Perubahan Data Profil ', '2024-11-13 09:40:18'),
(107, 'admin', 'Melakukan Perubahan Data Profil ', '2024-11-13 09:45:50'),
(108, 'admin', 'Melakukan Login Admin', '2024-11-14 03:55:14'),
(109, 'admin', 'Melakukan Perubahan Data Profil ', '2024-11-14 03:57:40'),
(110, 'admin', 'Melakukan Perubahan Data Profil ', '2024-11-14 03:57:52'),
(111, 'admin', 'Melakukan Perubahan Data Profil ', '2024-11-14 04:01:11'),
(112, 'admin', 'Melakukan Perubahan Data Profil ', '2024-11-14 04:01:55'),
(113, 'admin', 'Melakukan Perubahan Data Profil ', '2024-11-14 04:02:21'),
(114, 'admin', 'Melakukan Login Admin', '2024-11-14 04:18:47'),
(115, 'admin', 'Melakukan Penambahan Berita', '2024-11-14 04:19:02'),
(116, 'admin', 'Melakukan Penambahan Berita', '2024-11-14 04:23:21'),
(117, 'admin', 'Melakukan Penambahan informasi', '2024-11-14 07:19:08'),
(118, 'admin', 'Melakukan Penambahan galeri', '2024-11-14 07:27:47'),
(119, 'admin', 'Melakukan Penambahan prestasi', '2024-11-14 07:28:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_osis`
--

CREATE TABLE `tbl_osis` (
  `idOsis` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jabatan` varchar(200) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_prestasi`
--

CREATE TABLE `tbl_prestasi` (
  `idPrestasi` int(11) NOT NULL,
  `judulPrestasi` varchar(200) NOT NULL,
  `keterangan` text NOT NULL,
  `author` varchar(200) NOT NULL,
  `waktu` datetime NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_prestasi`
--

INSERT INTO `tbl_prestasi` (`idPrestasi`, `judulPrestasi`, `keterangan`, `author`, `waktu`, `gambar`) VALUES
(2, 'asdasdas', 'dasdasdasd', 'admin', '2024-11-14 07:28:20', '1731569300_0e411cd4e81340b365e0.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_profil`
--

CREATE TABLE `tbl_profil` (
  `idProfil` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nomorTelepon` varchar(200) NOT NULL,
  `alamat` text NOT NULL,
  `tentang` text NOT NULL,
  `pengantar` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `linkMaps` text NOT NULL,
  `instagram` varchar(200) NOT NULL,
  `youtube` varchar(200) NOT NULL,
  `facebook` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_profil`
--

INSERT INTO `tbl_profil` (`idProfil`, `nama`, `nomorTelepon`, `alamat`, `tentang`, `pengantar`, `gambar`, `linkMaps`, `instagram`, `youtube`, `facebook`) VALUES
(1, 'Advent', '087168276817', 'tes', 'tes', 'tes', 'profil_78918.jpg', 'tes', '@advent', 'advent', '@advent');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sambutan`
--

CREATE TABLE `tbl_sambutan` (
  `idSambutan` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `sambutan` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_sambutan`
--

INSERT INTO `tbl_sambutan` (`idSambutan`, `gambar`, `sambutan`, `author`, `waktu`) VALUES
(1, 'test.jpg', '<p>1234123123sdasd&nbsp;</p>', 'admin', '2024-11-12 02:36:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sejarah`
--

CREATE TABLE `tbl_sejarah` (
  `idSejarah` int(11) NOT NULL,
  `sejarah` text NOT NULL,
  `author` varchar(200) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_sejarah`
--

INSERT INTO `tbl_sejarah` (`idSejarah`, `sejarah`, `author`, `waktu`) VALUES
(1, '<p>lasnflslfasd aslfnlskdfnlas asjflkasdn</p>', 'admin', '2024-11-12 02:40:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sekolah`
--

CREATE TABLE `tbl_sekolah` (
  `idSekolah` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jabatan` varchar(200) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_sekolah`
--

INSERT INTO `tbl_sekolah` (`idSekolah`, `nama`, `jabatan`, `foto`) VALUES
(4, 'tester', 'asdasd', '1731394868_679de1b3ca78734e8ea8.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tenaga_nonpendidik`
--

CREATE TABLE `tbl_tenaga_nonpendidik` (
  `idTenagaNonPendidik` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jabatan` varchar(200) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tenaga_pendidik`
--

CREATE TABLE `tbl_tenaga_pendidik` (
  `idTenagaPendidik` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jabatan` varchar(200) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_tenaga_pendidik`
--

INSERT INTO `tbl_tenaga_pendidik` (`idTenagaPendidik`, `nama`, `jabatan`, `foto`) VALUES
(3, 'asdasd', 'asdasd', 'sekolah_79440.jpg'),
(4, 'akdsnaklsdn', 'nlnalsdnk', 'sekolah_95725.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `idUser` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hakAkses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`idUser`, `username`, `nama`, `password`, `hakAkses`) VALUES
(1, 'admin', 'admin', '$2y$10$vSRhGu7p6PayAL2Dxm/92udJzait2C05CWx1NerIgM5YK5r7SKH.u', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_visi_misi`
--

CREATE TABLE `tbl_visi_misi` (
  `idVisiMisi` int(11) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `author` varchar(200) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_visi_misi`
--

INSERT INTO `tbl_visi_misi` (`idVisiMisi`, `visi`, `misi`, `author`, `waktu`) VALUES
(1, '<p>lsdfashdf</p>', '<p>k;j293849</p>', 'admin', '2024-11-12 02:51:56');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  ADD PRIMARY KEY (`idAgenda`);

--
-- Indeks untuk tabel `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`idBerita`);

--
-- Indeks untuk tabel `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD PRIMARY KEY (`idGaleri`);

--
-- Indeks untuk tabel `tbl_info_sekolah`
--
ALTER TABLE `tbl_info_sekolah`
  ADD PRIMARY KEY (`idInfoSekolah`);

--
-- Indeks untuk tabel `tbl_komite_sekolah`
--
ALTER TABLE `tbl_komite_sekolah`
  ADD PRIMARY KEY (`idKomiteSekolah`);

--
-- Indeks untuk tabel `tbl_log`
--
ALTER TABLE `tbl_log`
  ADD PRIMARY KEY (`idLog`);

--
-- Indeks untuk tabel `tbl_osis`
--
ALTER TABLE `tbl_osis`
  ADD PRIMARY KEY (`idOsis`);

--
-- Indeks untuk tabel `tbl_prestasi`
--
ALTER TABLE `tbl_prestasi`
  ADD PRIMARY KEY (`idPrestasi`);

--
-- Indeks untuk tabel `tbl_profil`
--
ALTER TABLE `tbl_profil`
  ADD PRIMARY KEY (`idProfil`);

--
-- Indeks untuk tabel `tbl_sambutan`
--
ALTER TABLE `tbl_sambutan`
  ADD PRIMARY KEY (`idSambutan`);

--
-- Indeks untuk tabel `tbl_sejarah`
--
ALTER TABLE `tbl_sejarah`
  ADD PRIMARY KEY (`idSejarah`);

--
-- Indeks untuk tabel `tbl_sekolah`
--
ALTER TABLE `tbl_sekolah`
  ADD PRIMARY KEY (`idSekolah`);

--
-- Indeks untuk tabel `tbl_tenaga_nonpendidik`
--
ALTER TABLE `tbl_tenaga_nonpendidik`
  ADD PRIMARY KEY (`idTenagaNonPendidik`);

--
-- Indeks untuk tabel `tbl_tenaga_pendidik`
--
ALTER TABLE `tbl_tenaga_pendidik`
  ADD PRIMARY KEY (`idTenagaPendidik`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`idUser`);

--
-- Indeks untuk tabel `tbl_visi_misi`
--
ALTER TABLE `tbl_visi_misi`
  ADD PRIMARY KEY (`idVisiMisi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  MODIFY `idAgenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `idBerita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `idGaleri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_info_sekolah`
--
ALTER TABLE `tbl_info_sekolah`
  MODIFY `idInfoSekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_komite_sekolah`
--
ALTER TABLE `tbl_komite_sekolah`
  MODIFY `idKomiteSekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_log`
--
ALTER TABLE `tbl_log`
  MODIFY `idLog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT untuk tabel `tbl_osis`
--
ALTER TABLE `tbl_osis`
  MODIFY `idOsis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_prestasi`
--
ALTER TABLE `tbl_prestasi`
  MODIFY `idPrestasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_profil`
--
ALTER TABLE `tbl_profil`
  MODIFY `idProfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_sambutan`
--
ALTER TABLE `tbl_sambutan`
  MODIFY `idSambutan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_sejarah`
--
ALTER TABLE `tbl_sejarah`
  MODIFY `idSejarah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_sekolah`
--
ALTER TABLE `tbl_sekolah`
  MODIFY `idSekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_tenaga_nonpendidik`
--
ALTER TABLE `tbl_tenaga_nonpendidik`
  MODIFY `idTenagaNonPendidik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_tenaga_pendidik`
--
ALTER TABLE `tbl_tenaga_pendidik`
  MODIFY `idTenagaPendidik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_visi_misi`
--
ALTER TABLE `tbl_visi_misi`
  MODIFY `idVisiMisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

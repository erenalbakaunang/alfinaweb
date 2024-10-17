-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 17, 2024 at 02:17 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alfina`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `nim` varchar(45) DEFAULT NULL,
  `role` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `username`, `password`, `nama`, `nim`, `role`) VALUES
(130, 'salsabilakusuma', 'salsa123', 'Salsabila Kusumaningrum', '1301184110', 'mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `surat_aktif_mahasiswa`
--

CREATE TABLE `surat_aktif_mahasiswa` (
  `id` int(11) NOT NULL,
  `bahasa` varchar(100) DEFAULT NULL,
  `tujuan` varchar(100) DEFAULT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `nim` varchar(45) DEFAULT NULL,
  `program_studi` varchar(100) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `Tanggal` date NOT NULL,
  `Lainnya` text NOT NULL,
  `Nama_Ortu` text NOT NULL,
  `Pekerjaan_Ortu` text NOT NULL,
  `Nip_Ortu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_aktif_mahasiswa`
--

INSERT INTO `surat_aktif_mahasiswa` (`id`, `bahasa`, `tujuan`, `nama`, `nim`, `program_studi`, `alamat`, `status`, `Tanggal`, `Lainnya`, `Nama_Ortu`, `Pekerjaan_Ortu`, `Nip_Ortu`) VALUES
(130, 'Bahasa', 'Untuk Asuransi Kesehatan ', 'Salsabila Kusumaningrum', '1301184110', 'S1 Informatika', 'Bandung', 'Disetujui', '2024-10-17', '', 'Sulistiana', 'Pegawai Negeri Sipil', '1234567'),
(131, 'Bahasa', 'Untuk Kehilangan KTM', 'Salsabila Kusumaningrum', '1301184110', 'S1 Informatika', 'Bandung', 'Disetujui', '2024-10-17', '', 'Sulistiana', 'PNS', '1234567'),
(132, 'English', 'Untuk Visa', 'Salsabila Kusumaningrum', '1301184110', 'S1 Informatika', 'Bandung', NULL, '2023-10-01', '', 'Sulistiana', 'PNS', '1234567');

-- --------------------------------------------------------

--
-- Table structure for table `surat_berkelakuan_baik`
--

CREATE TABLE `surat_berkelakuan_baik` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `nim` varchar(45) DEFAULT NULL,
  `program_studi` varchar(100) DEFAULT NULL,
  `bahasa` varchar(45) DEFAULT NULL,
  `tujuan` text DEFAULT NULL,
  `deskripsi_tujuan` varchar(45) DEFAULT NULL,
  `Tanggal` date NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_berkelakuan_baik`
--

INSERT INTO `surat_berkelakuan_baik` (`id`, `nama`, `nim`, `program_studi`, `bahasa`, `tujuan`, `deskripsi_tujuan`, `Tanggal`, `Status`) VALUES
(130, 'Salsabila Kusumaningrum', '1301184110', 'S1 Informatika', 'Bahasa', 'Magang', 'Keperluan berkas untuk magang di perusahaan', '2024-10-17', 'Disetujui'),
(131, 'Salsabila Kusumaningrum', '1301184110', 'S1 Informatika', 'Bahasa', 'Beasiswa', 'Keperluan berkas untuk beasiswa', '2024-09-01', 'Disetujui'),
(132, 'Salsabila Kusumaningrum', '1301204382', 'S1 Informatika', 'English', 'Pendaftaran Studi Magister', 'keperluan untuk berkas mendaftar S2', '2024-08-15', 'Disetujui');

-- --------------------------------------------------------

--
-- Table structure for table `surat_dispensasi`
--

CREATE TABLE `surat_dispensasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `nim` varchar(45) DEFAULT NULL,
  `program_studi` varchar(100) DEFAULT NULL,
  `bahasa` varchar(45) DEFAULT NULL,
  `tujuan` varchar(300) DEFAULT NULL,
  `bukti` text DEFAULT NULL,
  `tanggal_mulai` varchar(45) DEFAULT NULL,
  `tanggal_selesai` varchar(45) DEFAULT NULL,
  `link_eksternal` text DEFAULT NULL,
  `Tanggal` date NOT NULL,
  `Status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_dispensasi`
--

INSERT INTO `surat_dispensasi` (`id`, `nama`, `nim`, `program_studi`, `bahasa`, `tujuan`, `bukti`, `tanggal_mulai`, `tanggal_selesai`, `link_eksternal`, `Tanggal`, `Status`) VALUES
(130, 'Salsabila Kusumaningrum', '1301184110', 'S1 Informatika', 'Bahasa', 'Magang', 'image', '10/10/2023', '10/11/2023', NULL, '2023-09-15', 'Disetujui'),
(131, 'Salsabila Kusumaningrum', '1301184110', 'S1 Informatika', 'Bahasa', 'Lomba Hackathon', 'image', '2024-03-19', '2024-03-20', NULL, '2024-03-04', 'Disetujui'),
(132, 'Salsabila Kusumaningrum', '1301184110', 'S1 Informatika', 'Bahasa', 'Lomba Paduan suara ', 'image', '2023-06-25', '2023-06-30', NULL, '2023-06-07', 'Disetujui');

-- --------------------------------------------------------

--
-- Table structure for table `surat_pengantar_kp`
--

CREATE TABLE `surat_pengantar_kp` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `nim` varchar(45) DEFAULT NULL,
  `program_studi` varchar(100) DEFAULT NULL,
  `bahasa` varchar(45) DEFAULT NULL,
  `topik` varchar(200) DEFAULT NULL,
  `anggota` text DEFAULT NULL,
  `tanggal_mulai` varchar(45) DEFAULT NULL,
  `tanggal_selesai` varchar(45) DEFAULT NULL,
  `nama_perusahaan` varchar(200) DEFAULT NULL,
  `nama_divisi` varchar(100) DEFAULT NULL,
  `nama_jabatan` varchar(100) DEFAULT NULL,
  `alamat_perusahaan` text DEFAULT NULL,
  `Tanggal` date NOT NULL,
  `Status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_pengantar_kp`
--

INSERT INTO `surat_pengantar_kp` (`id`, `nama`, `nim`, `program_studi`, `bahasa`, `topik`, `anggota`, `tanggal_mulai`, `tanggal_selesai`, `nama_perusahaan`, `nama_divisi`, `nama_jabatan`, `alamat_perusahaan`, `Tanggal`, `Status`) VALUES
(130, 'Salsabila Kusumaningrum', '1301184110', 'S1 Informatika', 'Bahasa', 'Software engineer', 'Salsabila Kusumaningrum', '2023-06-01', '2023-07-03', 'PT Mitra Digital Solusi', 'Teknologi Informasi (IT)\r\n', 'Analis Sistem', 'Jl. Jend. Sudirman No. 45, Jakarta Pusat, DKI Jakarta', '2023-05-01', 'Disetujui'),
(131, 'Salsabila Kusumaningrum', '1301184110', 'S1 Informatika', 'Bahasa', 'Data Análisis', 'Salsabila Kusumaningrum, Kania Ardhani Putri, Larasati, Syahrul Foriawan', '2023-04-04', '2023-05-04', 'InnoByte Solutions', 'Data Science & Artificial Intelligence', 'Data Analyst', 'Gedung InnoHub, Lantai 5, Jl. Sultan Iskandar Muda, Surabaya 60123\r\n', '2023-03-01', 'Disetujui'),
(132, 'Salsabila Kusumaningrum', '1301184110', 'S1 Informatika', 'Bahasa', 'System support', 'Salsabila Kusumaningrum, Alfina Rahmawati', '2024-02-01', '2024-03-01', 'CyberGate Solutions', 'Keamanan Siber', 'Cybersecurity Specialist', 'Plaza CyberGate, Jl. Patriot No. 45, Jakarta Selatan', '2023-12-01', 'Disetujui');

-- --------------------------------------------------------

--
-- Table structure for table `surat_pengantar_mata_kuliah`
--

CREATE TABLE `surat_pengantar_mata_kuliah` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `nim` varchar(45) DEFAULT NULL,
  `program_studi` varchar(100) DEFAULT NULL,
  `bahasa` varchar(45) DEFAULT NULL,
  `mata_kuliah` varchar(100) DEFAULT NULL,
  `anggota` varchar(150) DEFAULT NULL,
  `nama_perusahaan` varchar(200) DEFAULT NULL,
  `nama_divisi` varchar(200) DEFAULT NULL,
  `nama_jabatan` varchar(200) DEFAULT NULL,
  `alamat_perusahaan` text DEFAULT NULL,
  `Tanggal` date NOT NULL,
  `Status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_pengantar_mata_kuliah`
--

INSERT INTO `surat_pengantar_mata_kuliah` (`id`, `nama`, `nim`, `program_studi`, `bahasa`, `mata_kuliah`, `anggota`, `nama_perusahaan`, `nama_divisi`, `nama_jabatan`, `alamat_perusahaan`, `Tanggal`, `Status`) VALUES
(130, 'Salsabila Kusumaningrum', '1301184110', 'S1 Informatika', 'Bahasa', 'Struktur Data', 'Salsabila Kusumaningrum, Nabila Hana\' Salimah', 'PT Mitra Digital Solusi', 'Teknologi Informasi (IT)', 'Analis Sistem', 'Jl. Jend. Sudirman No. 45, Jakarta Pusat, DKI Jakarta', '2024-10-17', 'Disetujui'),
(131, 'Salsabila Kusumaningrum', '1301184110', 'S1 Informatika', 'Bahasa', 'Verifikasi dan Validate Perangkat Lunar', 'Salsabila Kusumaningrum, Ridho Rosadi Asri, Octhovino', 'SoftSecure Innovations', 'Verifikasi dan Validasi Teknologi\r\n', 'Spesialis Validasi Sistem', 'alan Teknologi No. 10,\r\nKawasan Bisnis Digital,\r\nJakarta Selatan 12430, Indonesia', '2024-10-17', 'Disetujui');

-- --------------------------------------------------------

--
-- Table structure for table `surat_pengantar_ta`
--

CREATE TABLE `surat_pengantar_ta` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `nim` varchar(45) DEFAULT NULL,
  `program_studi` varchar(100) DEFAULT NULL,
  `bahasa` varchar(45) DEFAULT NULL,
  `tipe_penelitian` varchar(100) DEFAULT NULL,
  `topik` varchar(200) DEFAULT NULL,
  `anggota` text DEFAULT NULL,
  `nama_perusahaan` varchar(200) DEFAULT NULL,
  `nama_divisi` varchar(100) DEFAULT NULL,
  `nama_jabatan` varchar(100) DEFAULT NULL,
  `alamat_perusahaan` text DEFAULT NULL,
  `Tanggal` date NOT NULL,
  `Status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_pengantar_ta`
--

INSERT INTO `surat_pengantar_ta` (`id`, `nama`, `nim`, `program_studi`, `bahasa`, `tipe_penelitian`, `topik`, `anggota`, `nama_perusahaan`, `nama_divisi`, `nama_jabatan`, `alamat_perusahaan`, `Tanggal`, `Status`) VALUES
(130, 'Salsabila Kusumaningrum', '1301184110', 'S1 Informatika', 'Bahasa', 'Tugas Akhir', 'Ui ux', 'Salsabila Kusumaningrum', 'Direktorat Aset dan Sustainability Telkom University', 'Aset dan Sustainability', 'Direktur', 'Gedung E Kultubai Utara, Jl. Telekomunikasi, Sukapura, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257', '2023-03-15', 'Disetujui');

-- --------------------------------------------------------

--
-- Table structure for table `surat_rekomendasi_beasiswa`
--

CREATE TABLE `surat_rekomendasi_beasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `nim` varchar(45) DEFAULT NULL,
  `program_studi` varchar(100) DEFAULT NULL,
  `bahasa` varchar(45) DEFAULT NULL,
  `nama_beasiswa` varchar(300) DEFAULT NULL,
  `link_eksternal` text DEFAULT NULL,
  `bukti` text DEFAULT NULL,
  `format_surat` text DEFAULT NULL,
  `Tanggal` date NOT NULL,
  `Status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_rekomendasi_beasiswa`
--

INSERT INTO `surat_rekomendasi_beasiswa` (`id`, `nama`, `nim`, `program_studi`, `bahasa`, `nama_beasiswa`, `link_eksternal`, `bukti`, `format_surat`, `Tanggal`, `Status`) VALUES
(130, 'Salsabila Kusumaningrum', '1301184110', 'S1 Informatika', 'Bahasa', 'orc', NULL, 'image', 'file', '2022-10-17', 'Disetujui'),
(131, 'Salsabila Kusumaningrum', '1301184110', 'S1 Informatika', 'Bahasa', 'IDCloudhost', NULL, 'image', 'file', '2023-10-17', 'Disetujui'),
(132, 'Salsabila Kusumaningrum', '1301184110', 'S1 Informatika', 'Bahasa', 'IGGS', NULL, 'image', 'file', '2024-10-17', 'Disetujui');

-- --------------------------------------------------------

--
-- Table structure for table `surat_tugas_kompetisi`
--

CREATE TABLE `surat_tugas_kompetisi` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `nim` varchar(45) DEFAULT NULL,
  `program_studi` varchar(100) DEFAULT NULL,
  `bahasa` varchar(45) DEFAULT NULL,
  `Nama_lomba` text DEFAULT NULL,
  `tanggal_kompetisi` varchar(45) DEFAULT NULL,
  `jenis_kompetisi` varchar(100) DEFAULT NULL,
  `url` text DEFAULT NULL,
  `Tanggal` date NOT NULL,
  `Status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_tugas_kompetisi`
--

INSERT INTO `surat_tugas_kompetisi` (`id`, `nama`, `nim`, `program_studi`, `bahasa`, `Nama_lomba`, `tanggal_kompetisi`, `jenis_kompetisi`, `url`, `Tanggal`, `Status`) VALUES
(130, 'Salsabila Kusumaningrum', '1301184110', 'S1 Informatika', 'Bahasa', 'Hackathon', '2023-01-01', 'Kompetisi Nasional', NULL, '2023-02-01', 'Disetujui'),
(131, 'Salsabila Kusumaningrum', '1301184110', 'S1 Informatika', 'Bahasa', 'ICStar', '2023-06-01', 'Kompetisi Nasional', NULL, '2023-07-01', 'Disetujui'),
(132, 'Salsabila Kusumaningrum', '1301184110', 'S1 Informatika', 'Bahasa', 'Gemastik', '2024-01-01', 'Kompetisi Internasional', NULL, '2024-02-01', 'Disetujui');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_aktif_mahasiswa`
--
ALTER TABLE `surat_aktif_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_berkelakuan_baik`
--
ALTER TABLE `surat_berkelakuan_baik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_dispensasi`
--
ALTER TABLE `surat_dispensasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_pengantar_kp`
--
ALTER TABLE `surat_pengantar_kp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_pengantar_mata_kuliah`
--
ALTER TABLE `surat_pengantar_mata_kuliah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_pengantar_ta`
--
ALTER TABLE `surat_pengantar_ta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_rekomendasi_beasiswa`
--
ALTER TABLE `surat_rekomendasi_beasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_tugas_kompetisi`
--
ALTER TABLE `surat_tugas_kompetisi`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

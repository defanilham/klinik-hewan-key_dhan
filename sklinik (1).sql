-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2024 at 01:48 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sklinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `kategori_artikel_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lab`
--

CREATE TABLE `lab` (
  `id` int(3) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `satuan` varchar(10) NOT NULL,
  `harga` int(6) NOT NULL,
  `created_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lab`
--

INSERT INTO `lab` (`id`, `nama`, `satuan`, `harga`, `created_time`, `updated_time`, `deleted`) VALUES
(1, 'Kolesterol', 'mg/dl', 15000, '2020-04-07 08:32:20', '2020-04-12 03:05:59', 1),
(2, 'Asam Urat', 'mg/dl', 15000, '2020-04-07 01:43:20', '2020-04-07 01:43:20', 1),
(3, 'Gula Darah Sewaktu', 'mg/dl', 15000, '2020-04-07 01:43:47', '2020-04-07 01:51:29', 1),
(4, 'Gula Darah Puasa', 'mg/dl', 15000, '2020-04-12 03:06:27', '2020-04-12 03:06:27', 1),
(5, 'Gula Darah 2 Jam PP', 'mg/dl', 15000, '2020-04-26 05:09:37', '2020-04-26 21:05:34', 1),
(6, 'Hemoglobin', 'mg/dl', 15000, '2020-04-26 05:45:42', '2020-04-26 05:45:42', 1),
(7, 'radang tenggorokan', 'mg/dl', 20000, '2023-11-09 02:17:12', '2023-11-09 02:17:12', 1),
(8, 'Blood Count', 'mg/dl', 15000, '2023-11-20 02:02:27', '2023-11-20 02:02:27', 1),
(9, 'Complete Blood Count', 'mg/dl', 20000, '2023-11-20 02:04:11', '2023-11-20 02:04:11', 0),
(10, 'Urine Analysis', 'mg/dl', 15000, '2023-11-20 02:04:50', '2023-11-20 02:04:50', 0),
(11, 'Analisis Feses', 'mg/dl', 15000, '2023-11-20 02:05:14', '2023-11-20 02:05:14', 0),
(12, 'Biokimia Darah', 'mg/dl', 50000, '2023-11-20 02:05:56', '2023-11-20 02:05:56', 0),
(13, 'Pemeriksaan Elektrolit', 'mg/dl', 20000, '2023-11-20 02:06:14', '2023-11-20 02:06:14', 0),
(14, 'Pemeriksaan Fungsi Ginjal', 'mg/dl', 25000, '2023-11-20 02:06:31', '2023-11-20 02:06:31', 0),
(15, 'Pemeriksaan Fungsi Hati', 'mg/dl', 25000, '2023-11-20 02:06:51', '2023-11-20 02:06:51', 0),
(16, 'Pemeriksaan Hormon', 'mg/dl', 30000, '2023-11-20 02:07:15', '2023-11-20 02:07:15', 0),
(17, 'Pemeriksaan Mikrobiologi', 'mg/dl', 30000, '2023-11-20 02:07:45', '2023-11-20 02:07:45', 0),
(18, 'Pemeriksaan Radiologi', 'mg/dl', 50000, '2023-11-20 02:09:35', '2023-11-20 02:09:35', 0),
(19, 'Pemeriksaan Serologi', 'mg/dl', 35000, '2023-11-20 02:10:01', '2023-11-20 02:10:01', 0),
(20, 'Pemeriksaan DNA', 'mg/dl', 35000, '2023-11-20 02:10:18', '2023-11-20 02:10:18', 0),
(21, 'Pemeriksaan Kerokan Kulit', 'mg/dl', 25000, '2023-11-20 02:11:30', '2023-11-20 02:11:30', 0),
(22, 'Deteksi Penyakit Berisiko', 'mg/dl', 40000, '2023-11-20 02:11:52', '2023-11-20 02:11:52', 0);

-- --------------------------------------------------------

--
-- Table structure for table `metadata`
--

CREATE TABLE `metadata` (
  `id` int(11) NOT NULL,
  `Judul` varchar(25) NOT NULL,
  `Deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `metadata`
--

INSERT INTO `metadata` (`id`, `Judul`, `Deskripsi`) VALUES
(1, 'Daftar Pasien', 'Merupakan list pasien yang sudah terdaftar di klinik hewan key_dhan.'),
(2, 'Tambah Pasien', 'Isi biodata berikut untuk menambah pasien baru.'),
(3, 'Edit Pasien', 'Lakukan pengeditan pasien sesuai kolom yang tertera.'),
(4, 'Daftar Obat', 'Daftar obat-obatan yang terdaftar di klinik hewan key_dhan.'),
(5, 'Tambah Obat Baru', 'Tambahkan obat baru kedalam database dengan mengisi formulir berikut'),
(6, 'Edit Obat', 'lakukan perubahan informasi mengenai obat yang anda inginkan dengan menuliskannya di formulir berikut.'),
(7, 'Daftar Pemeriksaan Lab', 'Daftar pemeriksaan lab yang tersedia di klinik key_dhan.'),
(8, 'Tambah Pemeriksaan Lab', 'Tabahkan fasilitas lab kedalam database dengan mengisi formulir berikut.'),
(9, 'Edit Lab', 'lakukan perubahan informasi mengenai obat yang anda inginkan dengan menuliskannya di formulir berikut.'),
(10, 'Lihat Rekam Medis', 'Lihat rekam medis yang tersdia pada pasien yang dipilih.'),
(11, 'Tambah Rekam Medis', 'Tambahkan rekam medis pada pasien yang dipilih.'),
(12, 'List Rekam Medis Pasien', 'Jejak rekam medis pasien di klinik key_dhan.'),
(13, 'Edit Rekam Medis', 'Lakukan Pengeditan rekam medis.'),
(14, 'Buat Tagihan Kunjungan', 'Berikut adalah tagihan tehadap pasien yang diperiksa.'),
(15, 'Lihat rekam Medis', 'Lihat Rekam Medis Pasien Yang Dipilih'),
(16, 'Pengaturan', 'Pengaturan yang tersedia untuk klinik key_dhan'),
(17, 'Dashboard', 'Halaman muka dari klinik key_dhan, overview hal-hal mengenai klinik key_dhan.'),
(18, 'Daftar Pengguna', 'Daftar pengguna atau pegawai yang dapat log-in di klinik key_dhan.');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2014_10_12_000000_create_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 2),
(6, '2023_11_16_002900_create_galeri_table', 2),
(7, '2023_11_18_060200_update_pasien_table', 3),
(8, '2023_12_14_015653_add_columns_to_pasien_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id` int(4) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `sediaan` varchar(50) NOT NULL,
  `dosis` int(12) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `stok` int(5) NOT NULL,
  `harga` int(9) NOT NULL,
  `created_time` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_time` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id`, `nama_obat`, `sediaan`, `dosis`, `satuan`, `stok`, `harga`, `created_time`, `updated_time`, `deleted`) VALUES
(1, 'Metronidazole', 'Tablet', 500, 'mg', 4, 10000, '2020-04-26 19:00:17', '2020-04-26 19:00:17', 0),
(2, 'Amoxicillin', 'Syrup', 500, 'mg', 58, 15000, '2020-04-26 19:00:52', '2023-11-20 07:22:43', 0),
(3, 'Cefixime', 'Kapsul', 200, 'mg', 100, 40000, '2020-04-26 12:04:38', '2020-04-26 12:04:38', 0),
(4, 'Cefixime', 'Kapsul', 100, 'mg', 100, 30000, '2020-04-26 12:05:19', '2020-04-26 12:05:19', 1),
(5, 'Paracetamol', 'Tablet', 500, 'mg', 88, 10000, '2020-04-26 12:08:32', '2020-04-26 12:08:32', 0),
(6, 'Antiemetik', 'Tablet', 100, 'mg', 9, 15000, '2023-11-20 01:55:16', '2023-11-20 01:55:16', 0),
(7, 'Analgesik', 'Tablet', 200, 'mg', 12, 20000, '2023-11-20 01:56:51', '2023-11-20 01:56:51', 1),
(8, 'Diphenhydramine', 'Tablet', 200, 'mg', 7, 25000, '2023-11-20 07:06:14', '2023-11-20 07:06:14', 0),
(9, 'Hydroxyzine', 'Syrup', 100, 'mg', 0, 30000, '2023-11-20 07:06:48', '2023-11-20 07:06:48', 0),
(10, 'Cetirizine', 'Syrup', 100, 'mg', 4, 15000, '2023-11-20 07:07:34', '2023-11-20 07:07:34', 0),
(11, 'chlorpheniramine maleate', 'Syrup', 300, 'mg', 3, 35000, '2023-11-20 07:08:22', '2023-11-20 07:08:22', 0),
(12, 'Kortikosteroid', 'Syrup', 100, 'mg', 3, 10000, '2023-11-20 07:09:10', '2023-11-20 07:09:10', 0),
(13, 'Enrofloxacin', 'Syrup', 100, 'mg', 6, 15000, '2023-11-20 07:13:52', '2023-11-20 07:13:52', 1),
(14, 'Ivermectin', 'Syrup', 200, 'mg', 5, 50000, '2023-11-20 07:14:27', '2023-11-20 07:14:27', 0),
(15, 'Fenbendazole', 'Tablet', 200, 'mg', 11, 30000, '2023-11-20 07:16:03', '2023-11-20 07:16:03', 0),
(16, 'Enrofloxacin', 'Tablet', 300, 'mg', 5, 35000, '2023-11-20 07:16:33', '2023-11-20 07:16:33', 0),
(17, 'Meloxicam', 'Syrup', 200, 'mg', 5, 20000, '2023-11-20 07:17:00', '2023-11-20 07:17:00', 0),
(18, 'Fipronil', 'Kapsul', 200, 'mg', 8, 15000, '2023-11-20 07:18:37', '2023-11-20 07:18:37', 0),
(19, 'Carprofen', 'Kapsul', 200, 'mg', 9, 35000, '2023-11-20 07:19:08', '2023-11-20 07:19:08', 0),
(20, 'Ivermectin', 'Kapsul', 300, 'mg', 5, 10000, '2023-11-20 07:19:34', '2023-11-20 07:19:34', 1),
(21, 'Clavulanate', 'Kapsul', 300, 'mg', 4, 25000, '2023-11-20 07:20:11', '2023-11-20 07:20:11', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id` int(4) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `jk` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `hp` varchar(14) NOT NULL,
  `pendidikan` varchar(16) DEFAULT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `alergi` text DEFAULT NULL,
  `created_time` datetime NOT NULL,
  `updated_time` datetime NOT NULL,
  `deleted` tinyint(1) DEFAULT 0,
  `nama_hewan` varchar(255) DEFAULT NULL,
  `ras` varchar(255) DEFAULT NULL,
  `warna_bulu` varchar(255) DEFAULT NULL,
  `jenis_hewan` varchar(255) DEFAULT NULL,
  `berat_badan` int(11) DEFAULT NULL,
  `diagnosa_awal` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id`, `nama`, `tgl_lhr`, `jk`, `alamat`, `hp`, `pendidikan`, `pekerjaan`, `alergi`, `created_time`, `updated_time`, `deleted`, `nama_hewan`, `ras`, `warna_bulu`, `jenis_hewan`, `berat_badan`, `diagnosa_awal`) VALUES
(1, 'Jajang Rukmana Sukarna', '2020-04-01', 'Perempuan', 'JAKARTA', '082191019181', 'SMP', 'Buruh', 'tidak ada alergi', '0000-00-00 00:00:00', '2020-04-27 03:48:16', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Abdul Somara', '1991-01-01', 'Laki-laki', 'Garut indah sekali jaya tentrem abadi dan tak terlupakan', '0918212111', NULL, 'Pengangguran', 'alergi kamu', '0000-00-00 00:00:00', '2020-04-27 03:58:25', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Pinkan Rambo', '1991-02-01', 'perempuan', 'Hutan', '019281992', 'Tidak Ssekolah', 'Model', NULL, '2020-04-27 04:01:21', '2020-04-27 04:01:21', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Fia Jatuh', '1991-01-01', 'Laki-laki', 'Panggung', '01999212', 'Tidak Ssekolah', 'soundsystem', NULL, '2020-04-27 04:05:21', '2020-04-27 04:05:21', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'ivan pratama', '2000-01-07', 'Laki-laki', 'kota jambi', '087637782389', 'SMA', 'swasta', 'udang dan telur', '2023-11-09 04:29:15', '2023-11-09 06:51:42', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Arsyad Al Fatih', '2020-01-20', 'Laki-laki', 'Jl.Ir.H.Juanda No.56, Simpang III Sipin, Kec.Kota Baru, Kota Jambi', '089675839108', 'Perguruan Tinggi', 'Arsitek', 'Alergi Serangga atau Renceng (Flea Allergy Dermatitis)', '2023-11-19 18:57:41', '2023-11-19 19:02:13', 0, 'Fluffy', 'Persian', 'Tipped', 'Kucing', NULL, NULL),
(11, 'Albert Suherman', '2022-03-02', 'perempuan', 'Jl. Ir. H. Juanda, Simpang III Sipin, Kec. Kota Baru, Kota Jambi, Jambi 36129', '08996906443', 'SMA', 'Kasir', 'Dermatitis Alergi Kutu', '2023-11-20 05:22:23', '2023-11-20 05:22:23', 0, 'Bejo', 'Maine Coon', 'hitam dan coklat', 'kucing', NULL, NULL),
(12, 'Angel Lestari', '2020-07-07', 'Laki-laki', 'Jl. Mayang Raya, Mayang Mangurai, Kec. Kota Baru, Kota Jambi, Jambi 36129', '089523641376', 'Perguruan Tinggi', 'Guru', 'Alergi Inhalasi (Atopi pada Kucing)', '2023-11-20 05:28:02', '2023-11-20 05:28:02', 0, 'Cimeng', 'Ragdoll', 'Tortoiseshell', 'Kucing', NULL, NULL),
(13, 'Dewi Livia Sari', '2018-08-20', 'perempuan', 'Jl. Sersan Anwarbay, Mayang Mangurai, Kec. Kota Baru, Kota Jambi, Jambi 36129', '083843069913', 'SMP', 'Desainer', 'tidak ada', '2023-11-20 05:32:13', '2023-11-20 05:32:13', 0, 'Blacky', 'Labrador Retriever', 'hitam solid', 'Anjing', NULL, NULL),
(14, 'Eddy Purwanto', '2022-01-02', 'perempuan', 'Bagan Pete, Kec. Kota Baru, Kota Jambi, Jambi 36361', '082118325367', 'SD', 'Musisi', 'tidak ada', '2023-11-20 05:35:53', '2023-11-20 05:35:53', 0, 'Luna', 'Syrian', 'oren dan putih', 'Hamster', NULL, NULL),
(15, 'Eko Purnomo', '2020-12-31', 'Laki-laki', 'Jalan Kolonel Abunjani, Solok Sipin, Telanaipura, Selamat, Kec. Telanaipura, Kota Jambi, Jambi 36124', '082330602071', 'SMA', 'Seniman', 'Alergi Kutu', '2023-11-20 05:58:53', '2023-11-20 05:58:53', 0, 'Max', 'Holland Lop', 'Brown', 'Kelinci', NULL, NULL),
(16, 'Elly Nurlaila Hutabarat', '2022-10-10', 'perempuan', 'Jl. RE. Marta Dinata No.38, Telanaipura, Kec. Telanaipura, Kota Jambi, Jambi 36361', '085282470182', 'Perguruan Tinggi', 'Wartawan', 'tidak ada', '2023-11-20 06:06:10', '2023-11-20 06:06:10', 0, 'Momo', 'Campbell', 'Putih', 'Hamster', NULL, NULL),
(17, 'Erik Setiawan', '2017-04-21', 'Laki-laki', 'Jl. Sumantri Brojonegoro No.1, Solok Sipin, Kec. Danau Tlk., Kota Jambi, Jambi 36121', '081219550857', 'SMA', 'Jurnalis', 'Alergi Makanan', '2023-11-20 06:16:30', '2023-11-20 06:16:30', 0, 'Pedro', 'Bulldog', 'putih dan coklat', 'Anjing', NULL, NULL),
(18, 'Farah Liza', '2021-02-05', 'Laki-laki', 'Jl. Sultan Agung No.99, Murni, Kec. Telanaipura, Kota Jambi, Jambi 36122', '089630309951', 'SMA', 'Penulis', 'tidak ada', '2023-11-20 06:48:23', '2023-11-20 06:48:23', 0, 'Zuzy', 'Dwarf', 'golden brown', 'Kelinci', NULL, NULL),
(19, 'Hadi Lukman', '2021-06-19', 'perempuan', 'Jl. Prof. DR. Hamka No.5, Beringin, Kec. Ps. Jambi, Kota Jambi, Jambi 36124', '082192013087', 'SMA', 'Satpam', 'alergi kutu', '2023-11-20 06:51:51', '2023-11-20 06:51:51', 0, 'Ucil', 'Anggora', 'putih', 'Kucing', NULL, NULL),
(20, 'Kartika Fitri', '2018-03-03', 'Laki-laki', 'Jl. Kapten Pattimura, Simpang IV Sipin, Kec. Telanaipura, Kota Jambi, Jambi 36124', '083870239357', 'Perguruan Tinggi', 'Pramugari', 'tidak ada', '2023-11-20 06:57:34', '2023-11-20 06:57:34', 0, 'Shiro', 'Shiba Inu', 'gold', 'Anjing', NULL, NULL),
(21, 'mail mail', '2015-01-10', 'Laki-laki', 'kota jambi', '087637795089', 'SMA', 'Wartawan', NULL, '2023-11-28 04:42:27', '2023-11-28 04:42:27', 0, 'Maximus', 'Persian', 'oren', 'Kucing', NULL, NULL),
(22, 'kenishiro', '2020-12-30', 'perempuan', 'kota jambi', '087637795072', 'SD', 'swasta', NULL, '2023-11-28 04:46:11', '2023-11-28 04:46:11', 0, 'Momoitaro', 'Maine Coon', 'Brown', 'Kucing', NULL, NULL),
(23, 'rendy cuy', '2021-10-28', 'Laki-laki', 'kota jambi', '087637795730', 'Perguruan Tinggi', 'Arsitek', NULL, '2023-11-28 04:57:40', '2023-11-28 04:57:40', 0, 'Bento', 'Ragdoll', 'hitam dan coklat', 'Anjing', NULL, NULL),
(24, 'vario max', '2021-08-20', 'Laki-laki', 'kota jambi', '087637795085', 'SMP', 'swasta', NULL, '2023-12-14 02:10:14', '2023-12-14 02:10:14', 0, 'jofi', 'Persian', 'Brown', 'Kucing', 15, 'penyakit gatal');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengaturan`
--

CREATE TABLE `pengaturan` (
  `id` int(1) NOT NULL,
  `n_Klinik` varchar(50) NOT NULL,
  `Slogan` varchar(50) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `gambarbool` tinyint(1) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `jasa` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengaturan`
--

INSERT INTO `pengaturan` (`id`, `n_Klinik`, `Slogan`, `logo`, `gambarbool`, `gambar`, `jasa`) VALUES
(1, 'Key_Dhan Pet Clinic', 'Melayani dengan Sepenuh Hati', 'fa-paw', 1, 'logo1700634935.jpg', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `rm`
--

CREATE TABLE `rm` (
  `id` int(5) NOT NULL,
  `idpasien` int(4) NOT NULL,
  `ku` varchar(40) NOT NULL,
  `anamnesis` text NOT NULL,
  `pxfisik` text NOT NULL,
  `lab` text DEFAULT NULL,
  `hasil` text DEFAULT NULL,
  `diagnosis` varchar(40) DEFAULT NULL,
  `resep` text DEFAULT NULL,
  `jumlah` text DEFAULT NULL,
  `aturan` text DEFAULT NULL,
  `dokter` int(3) NOT NULL,
  `created_time` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_time` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rm`
--

INSERT INTO `rm` (`id`, `idpasien`, `ku`, `anamnesis`, `pxfisik`, `lab`, `hasil`, `diagnosis`, `resep`, `jumlah`, `aturan`, `dokter`, `created_time`, `updated_time`, `deleted`) VALUES
(7, 10, 'Muntah berulang setelah makan.', '- Pemilik melaporkan bahwa Fluffy mulai muntah setelah mengkonsumsi makanan baru.\r\n- Tidak ada riwayat penyakit sebelumnya.\r\n- Fluffy tampak lesu dan tidak mau makan.', '- Suhu Tubuh: 38.5°C\r\n- Berat Badan: 3.2 kg\r\n- Kondisi umum: Lesu\r\n- Pemeriksaan abdomen: Memperlihatkan perut terasa keras dan nyeri.', '7', '12', 'Obstruksi usus akut.', '2', '2', '3x1', 2, '2023-11-19 19:12:04', '2023-11-19 19:12:04', 1),
(8, 14, 'dth', 'grfdth', 'rfthbdtfr', '10', '12', 'vfsrb', '2', '2', '3x1', 2, '2023-11-20 17:25:59', '2023-11-20 17:25:59', 1),
(9, 10, 'Muntah berulang setelah makan', 'Pemilik melaporkan bahwa Fluffy mulai muntah setelah mengkonsumsi makanan baru.\r\n Tidak ada riwayat penyakit sebelumnya.\r\n Fluffy tampak lesu dan tidak mau makan.', 'Suhu Tubuh: 38.5°C\r\n Berat Badan: 3.2 kg\r\n Kondisi umum: Lesu\r\n Pemeriksaan abdomen: Memperlihatkan perut terasa keras dan nyeri.', '9', '25', 'Obstruksi usus akut', '2', '2', '3x1', 2, '2023-11-21 03:18:31', '2023-11-21 03:18:31', 0),
(10, 13, 'Batuk persisten dan kesulitan bernapas', 'Pemilik melaporkan bahwa Blacky mulai batuk selama seminggu.\r\n Tidak ada riwayat kontak dengan anjing sakit.\r\n Blacky tampak lesu dan kurang nafsu makan.', 'Suhu Tubuh: 39.2°C,\r\n Berat Badan: 30 kg,\r\n Auskultasi paru-paru: Suara napas mengi dan adanya krepitasi.', '11', '15', 'Pneumonia bakterial', '10', '1', '2x1', 2, '2023-11-21 03:34:37', '2023-11-21 04:06:33', 0),
(11, 15, 'penurunan nafsu makan', 'pemilik melaporkan bahwa Max menolak makanan padat dan tampak mengunyah dengan susah.\r\n Makanan yang diberikan sebagian besar adalah serat dan makanan lunak.', 'pemilik melaporkan bahwa Max menolak makanan padat dan tampak mengunyah dengan susah.\r\n Makanan yang diberikan sebagian besar adalah serat dan makanan lunak.', '22', '20', 'Maloklusi pada Gigi Kelinci', '2', '2', '3x1', 2, '2023-11-21 03:43:35', '2023-11-21 04:07:58', 0),
(12, 19, 'Muntah berulang setelah makan', 'Pemilik melaporkan bahwa Ucil muntah setelah setiap makan.\r\n Ucil tampak lemas dan penurunan berat badan.\r\n Tidak ada riwayat obat atau makanan baru.', 'Suhu Tubuh: 38.7°C,\r\n Berat Badan: 4 kg,\r\n Pemeriksaan abdomen: Teraba massa pada perut.', '15', '35', 'Kanker Hati', '11', '2', '2x1', 2, '2023-11-21 03:48:28', '2023-11-21 03:48:28', 0),
(13, 16, 'gatal-gatal', 'Pemilik melaporkan bahwa Momo memiliki kebiasaan menggigit kandangnya.\r\n Perubahan pada pola makan dan aktivitas malam.', 'Kulit Momo terlihat merah dan terdapat area kebotakan', '17', '15', 'Scabies', '14', '2', '2x1', 2, '2023-11-21 04:04:42', '2023-11-21 04:04:42', 0),
(14, 20, 'sakit saat berjalan', 'Pemilik melaporkan bahwa Shiro terjatuh saat bermain di taman.\r\n Tidak ada riwayat cidera sebelumnya.', 'Pembengkakan pada kaki bagian belakang.\r\n Shiro menunjukkan rasa sakit saat tekanan diberikan pada kaki tersebut.', '18', '25', 'Patah Tulang pada Kaki Belakang Anjing', '19', '3', '2x1', 2, '2023-11-21 04:12:57', '2023-11-21 04:12:57', 0),
(15, 20, 'gatal-gatal', 'ftygbhu', 'fgvybh', '10', '15', 'skabiosis', '2', '1', '2x1', 4, '2023-12-20 07:16:39', '2023-12-20 23:51:21', 0),
(16, 14, 'sgrfbhndgm', 'ghjthjgf', 'gnjfmhy', '12', '25', 'rgthry', '2', '3', '2x1', 4, '2023-12-20 23:53:23', '2023-12-20 23:53:23', 1),
(17, 20, 'Muntah berulang setelah makan.', 'mjgrgdhtg', 'frgbgnjhmgj', '11', '200', 'Maloklusi pada Gigi Kelinci', '5', '3', '2x1', 4, '2023-12-26 17:13:19', '2024-01-17 04:00:49', 0),
(18, 20, 'ikyjuhyfgtb', 'btgdvfsc', 'bvfcds', '20', '50', 'kujyht', '17', '2', '2x1', 4, '2023-12-26 17:23:02', '2023-12-26 17:23:02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profesi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `profesi`, `name`, `email`, `email_verified_at`, `password`, `avatar`, `remember_token`, `admin`, `created_at`, `updated_at`, `deleted`) VALUES
(2, 'admin', 'Admin', 'Defan Ilham', 'defanilham01@gmail.com', NULL, '$2y$10$lsIzdwxI18oSYwTJVMNDd.QqN3lsbI6M3B0VhJzl9BEasd8cSIbUK', 'avatar1701227941.png', NULL, 1, '2020-04-22 02:54:12', '2023-11-28 20:19:01', 0),
(4, 'dokter', 'Dokter', 'Dewi Kirana', 'Dewi@linx.com', NULL, '$2y$10$YaiZfQaaT2uBy.FAC0DTBe3qTNWvyjOKFZZaNMEU3nSXHByA9fKMG', 'avatar1700556371.png', NULL, 0, '2020-04-22 21:43:07', '2023-11-21 01:46:12', 0),
(5, NULL, 'Staff', 'Alek Kelek', NULL, NULL, '$2y$10$NvOWdrlhoHpf31D/uXUt..hT6U5.m1RY6lhdcW/hIeZpkWj.oUdPu', 'default.jpg', NULL, 0, '2020-04-23 19:05:08', '2020-04-26 21:17:38', 1),
(6, NULL, 'Staff', 'test', NULL, NULL, '$2y$10$DcxoUIpnCtZluFcAZgDnvujKQM2X9lT0Ga4oTgks6zxFZJnryIG/K', 'avatar1587712752.jpg', NULL, 1, '2020-04-24 00:19:12', '2020-04-26 21:17:16', 1),
(9, 'staff', 'Staff', 'Erika Putri', 'staff@erika.com', NULL, '$2y$10$m0O2vuFZq.Cb24cwEJSGROP6tmRcT7WS8jMpkdEyFBfxC6oYtD.NC', 'avatar1700556522.png', NULL, 0, '2020-04-24 22:40:12', '2023-11-21 01:48:42', 0),
(10, 'staff1', 'Staff', 'Budi Pratama', 'staff01@example.com', NULL, '$2y$10$VsUVuDz7omBm0hEspTN98O6BxF5K1FYmeVvnXm/JT1v0bhHaWZLQ.', 'avatar1700556970.png', NULL, 1, '2023-11-21 01:55:48', '2023-11-21 01:56:11', 0),
(11, 'qwerty', 'Dokter', 'qwerty', 'qwerty123@linx.com', NULL, '$2y$10$0Iqq8Udf40kddvWbH3knbux5oVuEFmjQ/jun0B6JQ1tklW5SGyIZa', 'avatar1701072823.png', NULL, NULL, '2023-11-27 01:11:18', '2023-11-27 01:13:43', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lab`
--
ALTER TABLE `lab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `metadata`
--
ALTER TABLE `metadata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pengaturan`
--
ALTER TABLE `pengaturan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rm`
--
ALTER TABLE `rm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lab`
--
ALTER TABLE `lab`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `metadata`
--
ALTER TABLE `metadata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `rm`
--
ALTER TABLE `rm`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

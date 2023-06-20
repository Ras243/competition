-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 20, 2023 at 04:51 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_competition`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_lomba`
--

CREATE TABLE `daftar_lomba` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_lomba` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sampul_lomba` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_lomba` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biaya_pendaftaran` int NOT NULL,
  `batas_pendaftaran` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daftar_lomba`
--

INSERT INTO `daftar_lomba` (`id`, `nama_lomba`, `sampul_lomba`, `deskripsi_lomba`, `biaya_pendaftaran`, `batas_pendaftaran`, `created_at`, `updated_at`) VALUES
(1, 'PROGRAMMER', 'vR1n7KrdrYZZwTYoFugxpn3DFvC1WyfzIRxeFYJa.jpg', 'Lomba Programmer adalah kompetisi pemrograman yang menguji kemampuan peserta dalam memecahkan masalah dan menciptakan program komputer efisien dan inovatif.', 100000, '2023-08-01 23:59:44', NULL, '2023-06-12 16:54:21'),
(15, 'CYBER SECURITY', 'W0c2E1BNTENDdR8Ig8yfOI5cNAprTLsmmMRnLf8O.jpg', 'Cyber Security adalah kompetisi di mana peserta bersaing untuk menguji dan meningkatkan keterampilan mereka dalam melindungi sistem komputer dan jaringan dari ancaman keamanan digital.', 150000, '2023-06-06 00:25:02', NULL, '2023-06-12 16:54:39'),
(16, 'DATA MAINING', 'Jvmz2gXhVrrNeUtLTZuGuBrAHuWOpzUK4tqO7nGV.jpg', 'Data Mining adalah sebuah kompetisi yang menantang para peserta untuk menggunakan teknik dan algoritma data mining guna menggali informasi berharga dari sekumpulan data yang diberikan.', 175000, '2023-06-06 00:25:02', NULL, '2023-06-12 16:54:53'),
(17, 'ANIMASI DESAIN', '6frOffN8Y3SnYRUBcTS4vSAC1xqGVbVSWp9cyw3o.jpg', 'Lomba Animasi Desain adalah sebuah kompetisi yang menguji kemampuan peserta dalam menciptakan animasi yang kreatif dan menarik secara visual.', 125000, '2023-06-06 00:25:02', NULL, '2023-06-12 16:55:24'),
(18, 'PENGEMBANGAN BISNIS', 'J1KsSmzvayEWR0zJkUC09Nnhbd5Jz4uB4rV2tOTZ.jpg', 'Pengembangan Bisnis TIK adalah sebuah kompetisi yang bertujuan untuk menguji kemampuan peserta dalam merancang dan mengembangkan model bisnis yang inovatif menggunakan teknologi informasi dan komunikasi (TIK).', 200000, '2023-06-06 00:25:02', NULL, '2023-06-19 03:43:07'),
(19, 'UI/UX', 'xU3fHkUD4WG3rpNQHiIp57gw4SjJdwiqTqTUmtzh.jpg', 'UI/UX (User Interface/User Experience) adalah sebuah kompetisi yang menguji kemampuan peserta dalam merancang antarmuka pengguna yang intuitif dan pengalaman pengguna yang memuaskan untuk produk digital atau aplikasi.', 175000, '2023-06-06 00:25:02', NULL, '2023-06-12 16:56:05'),
(20, 'KARYA TULIS ILMIAH TIK', 'doZgAAubreWs55l81zXnHbe5BAkUXBBUCKxtb1cz.jpg', 'Karya tulis ilmiah TIK adalah sebuah kompetisi yang menantang peserta untuk menyusun dan menghasilkan tulisan ilmiah yang berfokus pada topik atau isu yang terkait dengan teknologi informasi dan komunikasi.', 150000, '2023-06-06 00:25:02', NULL, '2023-06-12 16:56:19'),
(21, 'SMART CITY', 'xsoXBJv5aYN17ckBx2qUVPHqPY4a5VwX5KhyCqJl.jpg', 'Smart City adalah sebuah kompetisi yang bertujuan untuk mendorong peserta untuk merancang dan mengembangkan solusi inovatif berbasis teknologi untuk meningkatkan keberlanjutan, efisiensi, dan kualitas hidup di kota', 150000, '2023-06-06 00:25:02', NULL, '2023-06-12 16:56:39'),
(22, 'DEVELOPMENT RPL', '6J1R56x5h1T3jtvvsSi4n44XiIK6DfQtXe3UiH41.jpg', 'Development RPL (Rekayasa Perangkat Lunak) adalah sebuah kompetisi yang menantang peserta untuk mengembangkan perangkat lunak atau aplikasi yang inovatif dan fungsional.', 175000, '2023-06-06 00:25:02', NULL, '2023-06-12 16:57:02'),
(23, 'ARTIFICIAL INTELLIGENCE', 'MuJykbbNgr8tkfTOQzv9QnGawy82AKsD5axOkO2r.png', 'Artificial Intelligence (AI) adalah sebuah kompetisi yang menguji kemampuan peserta dalam merancang dan mengembangkan solusi AI yang inovatif.', 200000, '2023-06-06 00:25:02', NULL, '2023-06-12 16:57:26'),
(24, 'GAME DEVELOPMENT', 'nExfeVzBQJgVBeFJL9SKgEIcB0EDunHzHvDDwQN7.jpg', 'Game Development adalah sebuah kompetisi yang menantang peserta untuk merancang, mengembangkan, dan membuat permainan komputer yang menarik dan menghibur.', 150000, '2023-06-06 00:25:02', NULL, '2023-06-19 03:12:20');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_28_011439_create_daftar_lomba_table', 2),
(6, '2023_05_30_024442_create_pendaftar_table', 3),
(7, '2014_10_12_000000_create_users_table_old', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_pendaftar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL,
  `instansi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bukti_pembayaran` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_pendaftar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_user` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`id`, `nama_pendaftar`, `jenis_kelamin`, `instansi`, `bukti_pembayaran`, `status_pendaftar`, `created_at`, `updated_at`, `id_user`) VALUES
(1, 'user', 'L', 'UNTAD', 'FEYMH4tSys7tpXyvpyzvjOj7Bc9Ws12sJADFUKk0.jpg', 'Belum Lunas', '2023-06-19 19:50:11', '2023-06-19 20:16:17', 2);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('user','admin') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `alamat`, `phone`, `tgl_lahir`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Pasangkayu', '082194692885', '2003-04-02', 'admin@gmail.com', '2023-05-31 05:28:38', '$2y$10$odbIqUAYe4I4jBZ9u/6xteZcJ1AXwG4MTRnSkN8XbTlRPIRoyGtnO', 'admin', 'V6GHBAqx6sWhvOZq2wRNpewqkJF4QfXwEmWj8cLxhzcB9THfXb6it0JXoNPA', '2023-05-31 05:28:38', '2023-05-31 05:28:38'),
(2, 'user', 'Majene', '085157466178', '2003-08-02', 'user@gmail.com', '2023-05-31 05:34:36', '$2y$10$09DR8S.b0RJZnvlZZsEjseCKnOA0hC0M1O.nO/1N15nhU87Fbc.XK', 'user', 'sqL0Kv9Kqv6suvS2p83CxutXx9Kdt8kNCdAF2Fg2mbJc8NvLyq17DZePjWbc', '2023-05-31 05:34:36', '2023-05-31 05:34:36'),
(4, 'Ivan', 'Bulukumba', '083164839423', '2023-05-04', 'ivan@gmail.com', NULL, '$2y$10$RjLzUzfMZ3//gqZTWOP.DeUWKb8mY8Fre4fRUQCR2CMXmkmKpxZ0e', 'user', NULL, '2023-05-31 05:49:58', '2023-05-31 05:49:58'),
(5, 'Lisa', 'Campalagian', '082165489232', '2003-05-21', 'lisa@gmail.com', NULL, '$2y$10$t09K93RX0hjHJBjeEqIr2OsHtRmQ8Y3U9gYPk6bFQex5Mx1kqRh1W', 'user', NULL, '2023-05-31 05:52:22', '2023-05-31 05:52:22'),
(6, 'Ica', 'Pinrang', '+6282194692887', '2023-06-02', 'ica@gmail.com', NULL, '$2y$10$UHE.MQ/Sy84Z8Axa5lUhduVxyYLGE0.YsVOS.UpDjZT9Qgthsldku', 'user', NULL, '2023-06-01 00:24:12', '2023-06-01 00:24:12'),
(7, 'Alfian', 'Majene', '082194692886', '2023-06-05', 'alfian@gmail.com', NULL, '$2y$10$gvTlBCycpzHekOMrQgcqpudCRjmyCB.0hTDTb7mkGdbSvIUaOisu2', 'user', NULL, '2023-06-02 04:29:33', '2023-06-02 04:29:33'),
(8, 'Rascoding', 'Campalagian', '083164839427', '2023-06-07', 'ras@gmail.com', NULL, '$2y$10$706M57oRnDck3UYVgdgCO./8An2yvWidhTHzgoZ5XQIJfZx/gc1H2', 'user', NULL, '2023-06-05 16:16:23', '2023-06-05 16:16:23'),
(9, 'fildza', 'Paska', '082194692888', '2023-06-01', 'fildza@gmail.com', NULL, '$2y$10$P/3zHpSCa9lr0JAj0J9XS.l06/4Yn2f4xj3qvchPwU/1.1gKMh8QG', 'user', NULL, '2023-06-12 17:25:58', '2023-06-12 17:25:58'),
(10, 'aco', 'Pinrang', '083164839421', '2023-06-06', 'aco@gmail.com', NULL, '$2y$10$QmBvlwc094iRBME2q9BLUu3JJdtQdKMiZ0J9NVw9rMa1pGwvswuG2', 'user', NULL, '2023-06-12 19:38:42', '2023-06-12 19:38:42'),
(11, 'Pak Fahmi', 'Majene', '083164839429', '2022-11-02', 'fahmi@gmail.com', NULL, '$2y$10$2rMIl7KrODwJT5QB4UuV9uVfLMcu6uLMDTUrw6YfeoCVtSilSaQfC', 'user', NULL, '2023-06-12 22:55:46', '2023-06-12 22:55:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_lomba`
--
ALTER TABLE `daftar_lomba`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_lomba`
--
ALTER TABLE `daftar_lomba`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

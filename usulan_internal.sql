-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2021 at 07:24 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simpkm`
--

-- --------------------------------------------------------

--
-- Table structure for table `usulan_internal`
--

CREATE TABLE `usulan_internal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `nim_mhs` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `judul_usulan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_skema`  bigint(20) UNSIGNED NOT NULL,
  `abstrak` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_usulan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_dosen`bigint(20) UNSIGNED NOT NULL,
  `tgl_submit` date NOT NULL,
  `status_usulan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usulan_internal`
--
ALTER TABLE `usulan_internal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usulan_internal_id_user_foreign` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usulan_internal`
--
ALTER TABLE `usulan_internal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `usulan_internal`
--
ALTER TABLE `usulan_internal`
  ADD CONSTRAINT `usulan_internal_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

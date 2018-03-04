-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04 Mar 2018 pada 10.56
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrs`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `divisions`
--

CREATE TABLE `divisions` (
  `id` int(10) UNSIGNED NOT NULL,
  `division_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `divisions`
--

INSERT INTO `divisions` (`id`, `division_status`, `division_description`, `created_at`, `updated_at`) VALUES
(1, 'HR', '-', '2018-02-28 21:29:52', '2018-02-28 21:29:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `grades`
--

CREATE TABLE `grades` (
  `id` int(10) UNSIGNED NOT NULL,
  `grade_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grade_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `grades`
--

INSERT INTO `grades` (`id`, `grade_status`, `grade_description`, `created_at`, `updated_at`) VALUES
(3, 'tes diedit', '-', '2018-03-02 00:28:47', '2018-03-02 00:29:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2018_02_22_142040_create_roles_table', 1),
(10, '2018_02_22_142113_create_userroles_table', 1),
(11, '2018_02_22_142153_create_divisions_table', 1),
(12, '2018_02_22_142259_create_grades_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('garda.anggara90@gmail.com', '$2y$10$TFtRKTocJia.AvZYtLYH0O3/4RVPkiqoxI1NLtvROz0k1eC9/nJbO', '2018-02-28 20:58:35'),
('fawwaz@example.com', '$2y$10$dJzurYA0pPqPauNFP3bAdee4uiMYbPuLxy5XwXTtzWifQ5lf89Dn.', '2018-03-02 00:09:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `userroles`
--

CREATE TABLE `userroles` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `employee_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `division_id` int(10) UNSIGNED DEFAULT NULL,
  `grade_id` int(10) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `employee_id`, `name`, `gender`, `avatar`, `email`, `password`, `division_id`, `grade_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, '87654321', 'dimas', 'Men', NULL, 'dimas@example.com', '$2y$10$XjjmVdYVP58cAvbmU7OsQO.G5CO8TXZ2zlnux3ELeBQWuSisv3Uoi', NULL, NULL, 'BioTLFVlHPr8LJrMGIhr8vdGwUJzQcn5M2dn1ra8yeXHln5ogiTo8rmFjpkt', '2018-03-01 21:24:47', '2018-03-01 21:24:47'),
(6, '12345678', 'Fawwaz', 'Men', NULL, 'fawwaz@example.com', '$2y$10$SEyyqf2LoJOwP3VFCN2OI.CjuKUxSLseYXxogBiQXt76cz4IyOa3O', NULL, NULL, 'dlISs0uPOVo3eHUEUAqdh6n8sL6jJVRwSBJyIhMWupJX01WIVlAloA2UPYp8', '2018-03-02 00:07:37', '2018-03-02 00:07:37'),
(7, '88888888', 'garda', 'men', NULL, 'garda@example.com', NULL, NULL, NULL, NULL, NULL, NULL),
(8, '11111111', 'risky', 'Men', NULL, 'risky@example.com', '$2y$10$O9CPC22Jyp8BRTOhUa2uIeCmEA0NVectj4jS.SaIFciyyNJhWIxSa', NULL, NULL, 'DRC6jtrAdqYHyZjvsBjdU2AM6HeLKAeZU033Rhep4DGbTQHdNty6Q2OZ7lU1', '2018-03-02 00:32:03', '2018-03-02 00:32:03'),
(9, '33333333', 'Fawwaz', 'Select Option', NULL, 'fawwazbaahir4@gmail.com', '$2y$10$Mk3tMBlsjj3Cj7JO/ix54.y6KhnXC7PMnfi8j/x7n0z89qHZ7kZMG', NULL, NULL, '8gL3pNR9Ms2kC3Cx82oV6QQfkhzu4YJ7v5GrZ3npKm80ZuFILgRVQHpgyDLJ', '2018-03-02 00:33:44', '2018-03-02 00:33:44'),
(10, '23232323', 'gatsu', 'Men', NULL, 'garda1@example.com', '$2y$10$vOdUAn2eI.8aNyHj0WUHqOS.AXwT15EYe/fV5rQkAyS6pdkITRI3e', NULL, NULL, 'W9orRmbaUlGUOcpAX8YFZyptRpc04jAq2s8NPig36VEZZZdi3xzHaxeKmO2k', '2018-03-03 23:53:50', '2018-03-03 23:53:50'),
(11, '12312312', 'dummy', 'Select Option', NULL, 'dummy@dummy.com', '$2y$10$/ZOh4zss66QjCyiGm4c4L.GT0kqFNCVLMKPB8BW2HtvmvsetH8GXm', NULL, NULL, 'e1Zh1DxdU6CnNmRJ1gKm196aHxewUBGDzARvIcNFQ1mGbdIj4BmU3R7dUg0a', '2018-03-04 02:52:38', '2018-03-04 02:52:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userroles`
--
ALTER TABLE `userroles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userroles_user_id_foreign` (`user_id`),
  ADD KEY `userroles_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_employee_id_unique` (`employee_id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `userroles`
--
ALTER TABLE `userroles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `userroles`
--
ALTER TABLE `userroles`
  ADD CONSTRAINT `userroles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `userroles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

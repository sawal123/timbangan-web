-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Apr 2023 pada 16.09
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timbangan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_10_19_000639_create_sessions_table', 1),
(7, '2022_10_21_233230_create_timbangan_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('t9jdU1WPL93l2CJCLmCkiXpGXsXFOmwp2OfSsccm', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiZkhPTXc0QXQwQzdFY1lzRHJjTVNFUXVpODBXZVdoc0hWa2p4dlA3MiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHA6Ly9sb2NhbGhvc3QvdGltYmFuZ2FuL3B1YmxpYy9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJHNtVUhVV3lZa2R6TUFRd3VWTmJiaXV0STlhTlVrcy5BalVoMGRuaU52LkRaM0VLcVRMSk9tIjt9', 1674576803),
('VgUZi8q81rSLVQhCFxgyazSnrvKuogxETHEMaprh', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoieHN5YkhVV0JZeGpLWUZwYXRvdTU4Q2oySWtpd2lCN0haN3RPUTJ2NyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yZWthcD9maWx0ZXI9MjAyMy0wMi0xNSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkc21VSFVXeVlrZHpNQVF3dVZOYmJpdXRJOWFOVWtzLkFqVWgwZG5pTnYuRFozRUtxVExKT20iO30=', 1676469941);

-- --------------------------------------------------------

--
-- Struktur dari tabel `timbangans`
--

CREATE TABLE `timbangans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `berat` float NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `timbangans`
--

INSERT INTO `timbangans` (`id`, `berat`, `kode`, `created_at`, `updated_at`) VALUES
(3, 2000, 'bb03', '2022-11-11 12:47:56', '2022-11-11 12:47:56'),
(4, 1100, '3621', '2022-11-11 12:48:33', '2022-11-11 12:48:33'),
(5, 2321, '627a', '2022-11-12 10:20:28', '2022-11-12 10:20:28'),
(6, 2103, 'a4cb', '2022-11-12 10:20:32', '2022-11-12 10:20:32'),
(7, 2130, 'f3f8', '2022-11-12 10:20:44', '2022-11-12 10:20:44'),
(8, 2080, '3f01', '2022-11-12 10:20:49', '2022-11-12 10:20:49'),
(9, 1050, '4e03', '2022-11-12 10:54:32', '2022-11-12 10:54:32'),
(10, 1040, '6056', '2022-11-12 10:54:46', '2022-11-12 10:54:46'),
(11, 1200, '25de', '2022-11-14 12:22:53', '2022-11-14 12:22:53'),
(12, 1400, '9ade', '2022-11-14 12:23:00', '2022-11-14 12:23:00'),
(13, 1600, '513d', '2022-11-14 12:23:07', '2022-11-14 12:23:07'),
(25, 10204, '3652', '2022-11-15 17:39:42', '2023-01-16 13:39:13'),
(26, 2010, 'e76c', '2022-11-15 17:39:56', '2022-11-15 17:39:56'),
(27, 2500, '375d', '2022-11-15 17:39:59', '2022-11-15 17:39:59'),
(29, 1700, 'ae70', '2022-11-15 17:40:07', '2022-11-15 17:40:07'),
(31, 1600, '8b63', '2022-11-16 23:16:05', '2022-11-22 15:33:49'),
(32, 2300, 'b315', '2022-11-16 23:16:21', '2022-11-22 15:34:14'),
(34, 1050, 'efb9', '2022-11-22 14:16:43', '2022-11-22 14:16:43'),
(35, 3210, '7203', '2022-11-22 14:31:24', '2022-11-22 15:25:27'),
(36, 1200, 'ae38', '2022-11-22 14:44:40', '2022-11-22 15:25:35'),
(37, 1300, 'f274', '2022-11-22 14:48:12', '2022-11-22 14:48:12'),
(38, 200, 'bc75', '2022-11-22 14:59:50', '2022-11-22 14:59:50'),
(39, 2030, 'ed1c', '2022-11-22 15:08:50', '2022-11-22 15:25:42'),
(40, 3000, '9ccb', '2022-11-22 15:09:02', '2022-11-22 15:25:52'),
(41, 473, 'e448', '2022-11-22 15:38:40', '2022-11-22 15:38:40'),
(42, 786, 'f2f0', '2022-11-22 15:39:11', '2022-11-22 15:39:11'),
(43, 830, '36f7', '2022-11-22 15:39:34', '2022-11-22 15:39:34'),
(44, 113, '1926', '2022-11-22 16:35:38', '2022-11-22 16:35:38'),
(46, 550, '6870', '2022-11-22 23:00:15', '2022-11-22 23:00:15'),
(48, 2010, 'fc4b', '2022-11-22 23:06:09', '2022-11-23 13:04:52'),
(50, 235, '5f7d', '2022-11-23 13:05:29', '2022-11-23 13:05:29'),
(51, 348, '2607', '2022-11-23 13:05:54', '2022-11-23 13:05:54'),
(52, 372, 'c229', '2022-11-23 13:06:13', '2022-11-23 13:06:13'),
(53, 459, '180a', '2022-12-20 00:17:09', '2022-12-20 00:17:09'),
(54, 553, 'ce54', '2022-12-20 00:17:29', '2022-12-20 00:17:29'),
(55, 566, 'e8a0', '2022-12-20 00:30:48', '2022-12-20 00:30:48'),
(56, 106, 'ae36', '2022-12-20 00:31:09', '2022-12-20 00:31:09'),
(57, 2369, '1e7d', '2023-01-03 14:31:44', '2023-01-03 14:31:44'),
(58, 2940, '59c0', '2023-01-03 14:32:14', '2023-01-03 14:32:14'),
(59, 2934, 'd398', '2023-01-03 14:32:15', '2023-01-03 14:32:15'),
(60, 465, '745b', '2023-01-03 15:30:04', '2023-01-03 15:30:04'),
(61, 1091, '0214', '2023-01-03 15:35:51', '2023-01-03 15:35:51'),
(62, 544, 'afc0', '2023-01-09 13:45:43', '2023-01-09 13:45:43'),
(63, 1057, 'bb14', '2023-01-09 13:46:19', '2023-01-09 13:46:19'),
(64, 566, 'a94c', '2023-01-09 13:48:06', '2023-01-09 13:48:06'),
(65, 54, 'fc8e', '2023-01-09 14:06:05', '2023-01-09 14:06:05'),
(66, 73, 'a1f3', '2023-01-09 14:06:15', '2023-01-09 14:06:15'),
(67, 92, '0608', '2023-01-09 14:06:27', '2023-01-09 14:06:27'),
(68, 459, 'e139', '2023-01-12 14:42:18', '2023-01-12 14:42:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'sawalinto', 'sawalinto@gmail.com', '$2y$10$smUHUWyYkdzMAQwuVNbbiutI9aNUks.AjUh0dniNv.DZ3EKqTLJOm', '2022-10-25 08:09:14', '2022-10-25 08:09:14');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `timbangans`
--
ALTER TABLE `timbangans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `timbangans`
--
ALTER TABLE `timbangans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

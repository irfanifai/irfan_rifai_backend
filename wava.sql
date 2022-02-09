-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3838
-- Waktu pembuatan: 09 Feb 2022 pada 17.21
-- Versi server: 5.7.24
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wava`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_news`
--

CREATE TABLE `admin_news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `news_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_content` text COLLATE utf8mb4_unicode_ci,
  `news_username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `admin_news`
--

INSERT INTO `admin_news` (`id`, `news_title`, `news_content`, `news_username`, `photo`, `created_at`, `updated_at`) VALUES
(2, 'Ipsum', '<p>Quisque pulvinar orci in leo euismod tempus. Maecenas eget purus lobortis, imperdiet urna id, elementum neque. Mauris eros nisl, porta ac quam sit amet, imperdiet ultricies erat. <i>Cras varius varius arcu a commodo. Nulla cursus arcu in ligula tristique rhoncus.</i> Morbi lobortis, eros at laoreet pulvinar, turpis ex euismod leo, id interdum diam eros eget ipsum. Cras vel pretium eros. Quisque id porta sem. Nam vel ipsum lectus. Cras commodo ultrices justo, et imperdiet tortor pharetra imperdiet.<strong> Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus eleifend nisi ac semper aliquam. Fusce viverra nisl ac purus sodales, sed sollicitudin turpis luctus. Morbi eget neque rutrum, varius ipsum nec, iaculis metus.&nbsp;</strong></p>', 'irfan', '1644424155.png', '2022-02-09 09:28:17', '2022-02-09 10:13:52'),
(3, 'Lorem', '<p><strong>Donec ac eros nisl. In odio nunc, laoreet id pharetra vel, hendrerit a justo.</strong> Sed sit amet pharetra dui, eget posuere quam. Aliquam lacinia justo ipsum, ut luctus purus rhoncus ut. Vestibulum nec elit eu nisi volutpat ullamcorper et sit amet enim. Maecenas vitae convallis magna. Mauris bibendum maximus ullamcorper. Quisque eleifend libero fringilla, gravida nunc in, gravida ante. Integer placerat eros accumsan massa porttitor mattis vel ut metus. Ut vel urna odio. In condimentum scelerisque hendrerit. Vivamus ultrices hendrerit metus id convallis. Donec at eleifend erat. Quisque at blandit mauris.&nbsp;</p>', 'irfan', '1644425140.jpeg', '2022-02-09 09:45:40', '2022-02-09 10:13:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

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
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `api_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `remember_token`, `api_token`, `photo`, `client_token`, `email`, `created_at`, `updated_at`) VALUES
(1, 'irfan', 'irfan', '$2y$10$zLZm0GxB5ow1hVYJGXmVR.MkC2U2RVRdKoWdTSwrM1mM2o1cXLqzK', NULL, 'BG2fnGnI0qEpJvJx1x4fk6N8qNZnHw5zcTaiR6Os', '1637134146.png', 'J6LUQM0DASNYzHSoeLBdziwj5rDkBdMDNOyJPRTY', 'irfan@mail.com', '2022-02-08 08:56:51', '2022-02-09 09:02:14'),
(2, 'admin', 'admin', '$2y$10$nnxR2YCW94fgNJ7lFGKdd.s6A2tF0LjBTnP.EV5Jibqov0gz53J16', NULL, 'q1gvhOsu2vVR3sKRCGd8bGD6i3tyWWvAXBq25tBj', '1644391873.png', 'J6LUQM0DASNYzHSoeLBdziwj5rDkBdMDNOyJPRTY', 'admin@mail.com', '2022-02-09 16:07:16', '2022-02-09 00:57:42');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin_news`
--
ALTER TABLE `admin_news`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`username`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin_news`
--
ALTER TABLE `admin_news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

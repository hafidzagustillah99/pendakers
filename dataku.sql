-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jul 2022 pada 09.25
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dataku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_daerah`
--

CREATE TABLE `daftar_daerah` (
  `id` int(11) NOT NULL,
  `daftar` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftar_daerah`
--

INSERT INTO `daftar_daerah` (`id`, `daftar`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Kota Samarinda', '2022-07-20 11:20:09', '2022-07-20 11:20:09', NULL),
(2, 'Kota Bontang', '2022-07-20 12:05:58', '2022-07-20 12:05:58', NULL),
(3, 'Kota Balikpapan', '2022-07-20 12:06:11', '2022-07-20 12:06:11', NULL);

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
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `bidang_kerjasama` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `mou` varchar(255) NOT NULL,
  `pks` varchar(255) NOT NULL,
  `jangka_waktu` varchar(255) NOT NULL,
  `pihak` varchar(255) NOT NULL,
  `instansi` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `catatan` varchar(255) NOT NULL,
  `id_nama_daerah` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kota`
--

CREATE TABLE `kota` (
  `id` int(11) NOT NULL,
  `nama_daerah` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kota`
--

INSERT INTO `kota` (`id`, `nama_daerah`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 'Kab.  Kutai Kartanegara', '2022-06-25 09:15:38', '2022-06-29 09:09:56', NULL),
(6, 'Kota Samarinda', '2022-06-25 09:46:55', '2022-06-25 09:46:55', NULL),
(7, 'Kota Balikpapan', '2022-06-29 23:04:19', '2022-06-29 23:04:19', NULL),
(8, 'Kota Bontang', '2022-06-29 23:04:27', '2022-06-29 23:04:27', NULL),
(9, 'Kab.  Kutai Barat', '2022-06-29 23:05:00', '2022-06-29 23:05:00', NULL),
(10, 'Kab. Kutai Timur', '2022-06-29 23:05:20', '2022-06-29 23:05:20', NULL),
(11, 'Kab. Penajam Paser Utara', '2022-06-29 23:05:49', '2022-06-29 23:05:49', NULL),
(12, 'Kab. Paser', '2022-06-29 23:06:01', '2022-06-29 23:06:01', NULL),
(13, 'Kab. Mahakam Ulu', '2022-06-29 23:06:16', '2022-06-29 23:06:16', NULL),
(14, 'Kab. Berau', '2022-06-29 23:06:26', '2022-06-29 23:06:26', NULL),
(15, 'Kota Samarinda', '2022-07-20 10:50:59', '2022-07-20 10:50:59', NULL),
(16, 'Kota Samarinda', '2022-07-20 10:51:20', '2022-07-20 10:51:20', NULL);

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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
-- Struktur dari tabel `perjanjian`
--

CREATE TABLE `perjanjian` (
  `id` int(11) NOT NULL,
  `bidang_kerjasama` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `mou` varchar(255) DEFAULT NULL,
  `pks` varchar(255) DEFAULT NULL,
  `jangka_waktu` varchar(255) DEFAULT NULL,
  `pihak` varchar(255) DEFAULT NULL,
  `instansi` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `catatan` varchar(255) DEFAULT NULL,
  `id_nama_daerah` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `perjanjian`
--

INSERT INTO `perjanjian` (`id`, `bidang_kerjasama`, `tanggal`, `mou`, `pks`, `jangka_waktu`, `pihak`, `instansi`, `keterangan`, `catatan`, `id_nama_daerah`, `created_at`, `updated_at`, `deleted_at`) VALUES
(11, 'Pendidikan', '2022-07-18', 'Beasiswa', '001', '1 Tahun', 'Negeri', 'Politani Samarinda', 'Umum', '2021', 6, '2022-07-18 03:24:52', '2022-07-18 03:24:52', NULL),
(12, 'Penjualan', '2022-07-18', 'Bisnis', '001', '1 Tahun', 'Swasta', 'PT. Balikpapan Squer', 'Umum', '2021', 7, '2022-07-18 03:28:05', '2022-07-18 03:28:05', NULL),
(13, 'Sawit', '2022-07-18', 'Pembukaan Lahan', '001', '2 Tahun', 'Swasta', 'PT. Sawit Kembang Janggut', 'Rahasia', '2022', 4, '2022-07-18 03:30:48', '2022-07-18 03:30:48', NULL),
(14, 'Sawit Intern', '2022-07-18', 'Sawit Jernih', '001', '2 Tahun', 'Swasta', 'PT. Sawit Indah Permata', 'Terbuka', '2022', 8, '2022-07-18 03:33:09', '2022-07-18 03:33:09', NULL),
(15, 'Infrastuktur', '2022-07-18', 'Pembangunan', '001', '1 Tahun', 'Swasta', 'PT Waskita', 'Bebas aktif', '2021', 9, '2022-07-18 03:34:32', '2022-07-18 03:34:32', NULL),
(16, 'Pemerataan Masyarakat', '2022-07-01', 'Berbagi', '001', '4 Bulan', 'Pemkab Kutai Timur', 'PT. Aksi Cepat Tanggap', 'Terbuka', '2019', 10, '2022-07-18 03:36:58', '2022-07-18 03:36:58', NULL),
(17, 'Pembangunan Ibu Kota Negara', '2022-07-06', 'Pembangunan', '001', '3 Tahun', 'Pemerintah Pusat', 'PT. Waskita', 'Rahasia', '2023', 11, '2022-07-18 03:38:28', '2022-07-18 03:38:28', NULL);

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
-- Struktur dari tabel `samarinda`
--

CREATE TABLE `samarinda` (
  `id` int(20) NOT NULL,
  `tentang` varchar(255) NOT NULL,
  `mou` varchar(255) NOT NULL,
  `pks` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `jangka_waktu` varchar(255) NOT NULL,
  `unitkerja` varchar(255) NOT NULL,
  `mitrakerja` varchar(255) NOT NULL,
  `tahapan` varchar(255) NOT NULL,
  `tahun` int(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `samarinda`
--

INSERT INTO `samarinda` (`id`, `tentang`, `mou`, `pks`, `tanggal`, `jangka_waktu`, `unitkerja`, `mitrakerja`, `tahapan`, `tahun`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Pendidikan', '0001', '001', '2022-07-21', '4 Bulan', 'Biro Otonmi Daerah', 'KEMENDIKBUD', 'Nota Kesepakatan', 2021, '2022-07-20 12:07:13', '2022-07-20 12:07:13', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tentang`
--

CREATE TABLE `tentang` (
  `id` int(50) NOT NULL,
  `daerahku` int(20) DEFAULT NULL,
  `kepala_daerah` varchar(50) DEFAULT NULL,
  `history` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tentang`
--

INSERT INTO `tentang` (`id`, `daerahku`, `kepala_daerah`, `history`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 1, 'Bapak Andi Harun', 'Pada saat pecah perang Gowa, pasukan Belanda dibawah Laksamana Speelman memimpin Angkatan Laut menyerang Makasar dari laut, sedangkan Arupalaka yang membantu Belanda menyerang dari daratan. Akhirnya Kerajaan Gowa dapat dikalahkan dan Sultan Hasanuddin terpaksa menandatangani Perjanjian yang dikenal dengan “ PERJANJIAN BONGAJA “ pada tanggal 18 Nopember 1667.\r\n\r\nSebagian orang-orang Bugis Wajo dari Kerajaan Gowa yang tidak mau tunduk dan patuh terhadap perjanjian Bongaja tersebut, mereka tetap meneruskan perjuangan dan perlawanan secara gerilya melawan Belanda dan ada pula yang hijrah ke pulau-pulau lainnya diantaranya ada yang hijrah kedaerah Kalimantan Timur untuk mengabdikan diri pada Kerajaan Kutai, yaitu rombongan yang dipimpin oleh La Mohang Daeng Mangkona (bergelar Poa Ado yang pertama), kedatangan orang-orang Bugis Wajo dari Kerajaan Gowa itu diterima dengan baik oleh Sultan Kutai.', '2022-07-21 17:57:52', '2022-07-21 17:57:52', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hafidz 99', 'hafidzagustillah17@gmail.com', NULL, '$2y$10$xvSj7G4ISbtGfwSnW4h97uoyYyg3om2Kji.8EAOWWsKuA7QQnaPnO', NULL, '2022-06-29 08:49:15', '2022-06-29 08:49:15'),
(2, 'Sinta', 'sinta@gmail.com', NULL, '$2y$10$8/MK3AJvh3s9AUGDpDnLPeqJHd4sHz6zHuGtmtJgfag5r4PY1eN8K', NULL, '2022-07-05 06:49:44', '2022-07-05 06:49:44'),
(3, 'Gubernur', 'kaltim@gmail.com', NULL, '$2y$10$WM2qM/2CPnB2wAy7arY8VeGOK5a9Ld5tApTZ3aYnwUFKoQ2P1BeUu', NULL, '2022-07-06 03:55:20', '2022-07-06 03:55:20');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftar_daerah`
--
ALTER TABLE `daftar_daerah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kota`
--
ALTER TABLE `kota`
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
-- Indeks untuk tabel `perjanjian`
--
ALTER TABLE `perjanjian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_nama_daerah` (`id_nama_daerah`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `samarinda`
--
ALTER TABLE `samarinda`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_tentang_daftar_daerah` (`daerahku`);

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
-- AUTO_INCREMENT untuk tabel `daftar_daerah`
--
ALTER TABLE `daftar_daerah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kota`
--
ALTER TABLE `kota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `perjanjian`
--
ALTER TABLE `perjanjian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `samarinda`
--
ALTER TABLE `samarinda`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tentang`
--
ALTER TABLE `tentang`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `perjanjian`
--
ALTER TABLE `perjanjian`
  ADD CONSTRAINT `FK_perjanjian_kota` FOREIGN KEY (`id_nama_daerah`) REFERENCES `kota` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tentang`
--
ALTER TABLE `tentang`
  ADD CONSTRAINT `FK_tentang_daftar_daerah` FOREIGN KEY (`daerahku`) REFERENCES `daftar_daerah` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

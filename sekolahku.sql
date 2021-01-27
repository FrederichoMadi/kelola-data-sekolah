-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2021 at 06:13 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolahku`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_course` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `kode_course`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(15, 'ABC-0006', 'Matematika', 'matematika', '2021-01-27 02:00:33', '2021-01-27 02:00:33'),
(16, 'ABC-0007', 'Pendidikan Kewarganegaraan (PkN)', 'pendidikan-kewarganegaraan-pkn', '2021-01-27 02:00:44', '2021-01-27 02:00:44'),
(18, 'ABC-0009', 'Bahasa Indonesia', 'bahasa-indonesia', '2021-01-27 02:02:34', '2021-01-27 02:02:34'),
(21, 'ABC-0012', 'Ilmu Pengetahuan Alam', 'ilmu-pengetahuan-alam', '2021-01-27 02:02:50', '2021-01-27 02:02:50'),
(25, 'ABC-0014', 'Bahasa Inggris', 'bahasa-inggris', '2021-01-27 06:46:25', '2021-01-27 06:46:25'),
(26, 'ABC-0015', 'Ilmu Pengetahuan Sosial', 'ilmu-pengetahuan-sosial', '2021-01-27 08:14:25', '2021-01-27 08:14:25'),
(27, 'ABC-0016', 'Pendidikan Jasmani dan Olahraga', 'pendidikan-jasmani-dan-olahraga', '2021-01-27 08:14:50', '2021-01-27 08:14:50'),
(28, 'ABC-0017', 'Agama', 'agama', '2021-01-27 08:15:07', '2021-01-27 08:15:07');

-- --------------------------------------------------------

--
-- Table structure for table `course_teacher`
--

CREATE TABLE `course_teacher` (
  `teacher_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_teacher`
--

INSERT INTO `course_teacher` (`teacher_id`, `course_id`) VALUES
(8, 25),
(9, 16),
(10, 15),
(11, 18);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `journals`
--

CREATE TABLE `journals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berita` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `journals`
--

INSERT INTO `journals` (`id`, `thumbnail`, `judul`, `slug`, `berita`, `created_at`, `updated_at`) VALUES
(3, 'images/journal/0brwAbnp9ICUsNVvBBrdI5CwaEzkB1NOT6EjvPn2.png', 'Siswa Berprestasi Berhasil Meriah Juara Pada Lomba Cloud', 'siswa-berprestasi-berhasil-meriah-juara-pada-lomba-cloud', '<p>Seorang siswa yang bernama bunga berhasil meraih juara1 dalam lomba yang diakan oleh alibaba cloud</p>', '2021-01-27 07:46:36', '2021-01-27 07:46:36'),
(4, 'images/journal/nR6jZI856vXGCKwdCMXhePcJg7v07I4Z8PAi8Qg7.jpg', 'Suasana Kelas Pada Masa Pandemi Covid', 'suasana-kelas-pada-masa-pandemi', '<p>Setelah diberikan izin oleh Gubernur SekolahKu mulai mengadakan pembelajaran di kelas secara offline</p>', '2021-01-27 07:47:47', '2021-01-27 07:50:04');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_01_19_222748_create_table_teacher', 1),
(9, '2021_01_20_011022_create_teacher_table', 2),
(10, '2021_01_20_011328_create_course_table', 2),
(11, '2021_01_20_020907_create_teacher_course_table', 3),
(14, '2021_01_23_202217_create_school_table', 4),
(16, '2021_01_25_090629_create_journals_table', 5),
(17, '2021_01_25_165756_create_tools_table', 6),
(18, '2021_01_26_183135_create_courses_table', 7);

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
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_sekolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sejarah` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `visi_misi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `thumbnail`, `nama_sekolah`, `slug`, `alamat`, `telepon`, `email`, `sejarah`, `visi_misi`, `created_at`, `updated_at`) VALUES
(1, 'images/school/c9NOso90IVMoPbeZO0Me8zTaULFKhDKf67CP0H1b.jpg', 'Sekolahku Tercinta', 'sekolahku', 'Jl. Bung Karno No.1', '0370298320', 'sekolahku@gmail.com', '<p><b>Sekolah dasar</b>&nbsp;(disingkat&nbsp;<b>SD</b>;&nbsp;<a href=\"https://id.wikipedia.org/wiki/Bahasa_Inggris\" title=\"Bahasa Inggris\">bahasa Inggris</a>:&nbsp;<i>Elementary School</i>&nbsp;atau&nbsp;<i>Primary School</i>) adalah jenjang paling dasar pada pendidikan formal di&nbsp;<a href=\"https://id.wikipedia.org/wiki/Indonesia\" title=\"Indonesia\">Indonesia</a>. Sekolah dasar ditempuh dalam waktu 6 tahun, mulai dari kelas 1 sampai kelas 6. Saat ini murid kelas 6 diwajibkan mengikuti&nbsp;<a href=\"https://id.wikipedia.org/wiki/Ujian_Nasional\" title=\"Ujian Nasional\">Ujian Nasional</a>&nbsp;(EBTANAS) yang mempengaruhi kelulusan siswa. Lulusan sekolah dasar dapat melanjutkan pendidikan ke tingkat&nbsp;<a href=\"https://id.wikipedia.org/wiki/Sekolah_menengah_pertama\" title=\"Sekolah menengah pertama\">SLTP</a>.</p>\r\n\r\n<p>Pelajar sekolah dasar umumnya berusia 6-12 tahun. Di Indonesia, setiap warga negara berusia 6-15 tahun wajib mengikuti pendidikan dasar, yakni sekolah dasar (atau sederajat) 6 tahun dan sekolah menengah pertama (atau sederajat) 3 tahun.</p>\r\n\r\n<p>Sekolah dasar diselenggarakan oleh pemerintah maupun swasta. Sejak diberlakukannya&nbsp;<a href=\"https://id.wikipedia.org/wiki/Otonomi_daerah\" title=\"Otonomi daerah\">otonomi daerah</a>&nbsp;pada tahun&nbsp;<a href=\"https://id.wikipedia.org/wiki/2001\" title=\"2001\">2001</a>, pengelolaan sekolah dasar negeri (SDN) di Indonesia yang sebelumnya berada di bawah&nbsp;<a href=\"https://id.wikipedia.org/wiki/Departemen_Pendidikan_Nasional_Republik_Indonesia\" title=\"Departemen Pendidikan Nasional Republik Indonesia\">Departemen Pendidikan Nasional</a>, kini menjadi tanggung jawab&nbsp;<a href=\"https://id.wikipedia.org/wiki/Pemerintah_daerah\" title=\"Pemerintah daerah\">pemerintah daerah</a>&nbsp;<a href=\"https://id.wikipedia.org/wiki/Kabupaten\" title=\"Kabupaten\">kabupaten</a>/<a href=\"https://id.wikipedia.org/wiki/Kota\" title=\"Kota\">kota</a>. Sedangkan Departemen Pendidikan Nasional hanya berperan sebagai regulator dalam bidang standar nasional pendidikan. Secara struktural, sekolah dasar negeri merupakan unit pelaksana teknis&nbsp;<a href=\"https://id.wikipedia.org/w/index.php?title=Dinas_pendidikan&amp;action=edit&amp;redlink=1\" title=\"Dinas pendidikan (halaman belum tersedia)\">dinas pendidikan</a>&nbsp;kabupaten/kota.</p>', '<h3><strong>Visi sekolah</strong></h3>\r\n\r\n<p><em>&rdquo; MEWUJUDKAN SISWA &ndash; SISWI YANG BERPRESTASI, BERIMAN DAN BERTAQWA KEPADA&nbsp; TUHAN YANG MAHA ESA SERTA CINTA TERHADAP LINGKUNGAN. &rdquo;</em></p>\r\n\r\n<h3><strong>Misi Sekolah</strong></h3>\r\n\r\n<p>Untuk mewujudkan Visi tersebut, Sekolah menentukan langkah &ndash; langkah strategis yang dinyatakan dalam&nbsp;<strong>Misi&nbsp;</strong>berikut :</p>\r\n\r\n<ol>\r\n	<li>Mewujudkan/menciptakan siswa yang taat beribadah</li>\r\n	<li>Membentuk sikap dan prilaku yang baik, santun, sopan dan berkarakter.</li>\r\n	<li>Mewujudkan siswa/i yang disiplin</li>\r\n	<li>Menciptakan suasana Pembelajaran yang aktif, inovatif, kreatif, efektif,&nbsp; menyenangkan, gembira dan berbobot</li>\r\n	<li>Mewujudkan siswa yang berprestasi</li>\r\n	<li>Mewujudkan suasana kekeluargaan antar warga sekolah</li>\r\n	<li>Mewujudkan sekolah hijau ( Gereen School ).</li>\r\n</ol>\r\n\r\n<p>Pembiasaan 3 K( Kebersihan diri, Kebersihan Kelas, dan Kebersihan lingkungan) dan 3 S ( Senyum, Sapa, Salam )</p>\r\n\r\n<p><strong>Tujuan Sekolah</strong></p>\r\n\r\n<p>Tujuan yang ingin dicapai sebagai rencana kegiatan dan pelaksanaan program</p>\r\n\r\n<p>Tujuan yang ingin dicapai sebagai rencana kegiatan dan pelaksanaan program pembelajaran dideskripsikan sebagai berikut&nbsp; :</p>\r\n\r\n<ol>\r\n	<li>Siswa taat beribadah terhadap Tuhan Yang Maha Esa</li>\r\n	<li>Mengembangkan potensi bakat dan minat siswa dan guru</li>\r\n	<li>Nilai siswa kelas VI ( enam ) mencapai standar kelulusan</li>\r\n	<li>Siswa berprestasi dalam bidang keagamaan</li>\r\n	<li>Siswa cerdas dalam Ilmu Pengetahuan dan Ilmu Agama</li>\r\n	<li>Siswa berprestasi dalam bidang olympiade MIPA</li>\r\n	<li>Siswa berprestasi&nbsp; dalam olahraga volly mini, takraw, dan pencak silat</li>\r\n	<li>Warga sekolah menjaga keasrian lingkungan sekolah</li>\r\n	<li>Seluruh &nbsp;warga sekolah melakukan pembiasaan 3 K ( Kebersihan diri, Kebersihan kelas, dan Kebersihan Sekolah )</li>\r\n</ol>', '2021-01-24 08:09:25', '2021-01-27 08:20:28');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NIP` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NIDN` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `thumbnail`, `name`, `slug`, `NIP`, `NIDN`, `created_at`, `updated_at`) VALUES
(8, 'images/teacher/5hJGHUVpul5NlotUIp65S6wIGwMawDSamXB2U6uj.jpg', 'Fredericho Madi', 'fredeicho-madi', '01298313', '10298312', '2021-01-27 07:28:13', '2021-01-27 07:31:41'),
(9, 'images/teacher/XwSyCRc10dISVtK6knCUuQv89djhnukH6Rw2InvP.jpg', 'Nadratul Naim', 'nadratul-naim', '19283091', '28103283', '2021-01-27 07:28:41', '2021-01-27 07:28:41'),
(10, 'images/teacher/EYhZ369jRQzmIYgC85KnbJ6RvEQYJYJ51ZSNc8At.jpg', 'Ande Rizky', 'ande-rizky', '0198230', '0928310', '2021-01-27 07:29:11', '2021-01-27 07:29:11'),
(11, 'images/teacher/jWUMizr6bu1ta7N4AP66z2GODyccVS0whaqfKR90.jpg', 'Ahmad Bim', 'ahmad-bim', '102938', '102983', '2021-01-27 07:29:35', '2021-01-27 07:29:35');

-- --------------------------------------------------------

--
-- Table structure for table `tools`
--

CREATE TABLE `tools` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tools`
--

INSERT INTO `tools` (`id`, `name`, `thumbnail`, `slug`, `jumlah`, `created_at`, `updated_at`) VALUES
(5, 'Meja', 'images/tool/w1RsxVVLx64zsT9xAETu8wlUAN6VQHp7pnYM8LZG.jpg', 'meja', 500, '2021-01-27 08:04:39', '2021-01-27 08:04:39'),
(6, 'Kursi', 'images/tool/LnHDbrR9iZEDXkhqsx34VD50yQjJfeYqmnk8BhRP.png', 'kursi', 500, '2021-01-27 08:04:52', '2021-01-27 08:04:52'),
(8, 'Papan Tulis', 'images/tool/4ifmtHNS8zx9pro11OU4lJnufka8q5xXJa0FX0Kn.jpg', 'papan-tulis', 12, '2021-01-27 08:05:55', '2021-01-27 08:05:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'admin@gmail.com', 'superadmin', NULL, '$2y$10$PcRxog.oGyDY4blPqdodR.ilOQRZ7HqGozugYfVgYKneHx6rUdVFS', NULL, '2021-01-19 15:01:30', '2021-01-19 15:01:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_teacher`
--
ALTER TABLE `course_teacher`
  ADD PRIMARY KEY (`teacher_id`,`course_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `journals`
--
ALTER TABLE `journals`
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
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tools`
--
ALTER TABLE `tools`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `journals`
--
ALTER TABLE `journals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tools`
--
ALTER TABLE `tools`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

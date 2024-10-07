-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2024 at 10:09 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sope`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `articles_title` varchar(255) NOT NULL,
  `document` varchar(255) NOT NULL,
  `created_date` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('mangaleerick4@gmail.com|127.0.0.1', 'i:1;', 1728190238),
('mangaleerick4@gmail.com|127.0.0.1:timer', 'i:1728190238;', 1728190238);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `photo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `created_at`, `updated_at`, `photo`, `email`, `name`, `subject`, `comment`, `phone`) VALUES
(1, '2024-10-06 05:03:35', '2024-10-06 05:03:35', '/storage/images/1728201814mangale passport.png', 'mangaleerick4@gmail.com', 'erick', 'School of Professional Engineering', 'School of Professional Engineering', '0673204233'),
(2, '2024-10-06 07:16:28', '2024-10-06 07:16:28', '/storage/images/1728209787mangale passport.png', 'jumahassan@gmail.com', 'Juma Hassan', 'sope', 'sope', '067340393'),
(3, '2024-10-06 15:09:01', '2024-10-06 15:09:01', '/storage/images/1728238140ERICK MANGALE PASSPORT SIZE.png', 'mangaleerick4@gmail.com', 'Erick Leonard Mangale', 'School of Professional Engineering', 'sope', '067340393'),
(4, '2024-10-06 15:11:48', '2024-10-06 15:11:48', '/storage/images/1728238308rashid.jpg', 'jumahassan@gmail.com', 'Juma Hassan', 'School of Professional Engineering', 'uuoijhhjkl;oiuu', '255713076357'),
(5, '2024-10-06 15:17:07', '2024-10-06 15:17:07', '/storage/images/1728238627rashid.jpg', 'similwa.mdumbwa@gmail.com', 'Juma Hassan', 'School of Professional Engineering', 'drtyujhgfdsascv', '255713076357'),
(6, '2024-10-06 16:03:22', '2024-10-06 16:03:22', '/storage/images/1728241402billss.png', 'harrismangale@gmail.com', 'Juma Hassan', 'SOPE', 'SOPE', '255686814386'),
(7, '2024-10-06 16:04:54', '2024-10-06 16:04:54', '/storage/images/1728241494billss.png', 'jumahassan@gmail.com', 'Juma Hassan', 'School of Professional Engineering', 'School of Professional Engineering', '255713076357'),
(8, '2024-10-06 16:05:48', '2024-10-06 16:05:48', '/storage/images/1728241548billss.png', 'mangaleerick4@gmail.com', 'Juma Hassan', 'School of Professional Engineering', 'School of Professional Engineering', '067340393'),
(9, '2024-10-06 16:08:01', '2024-10-06 16:08:01', '/storage/images/1728241681billss.png', 'similwa.mdumbwa@gmail.com', 'Juma Hassan', 'School of Professional Engineering', 'School of Professional Engineering', '0673204233'),
(10, '2024-10-06 16:10:12', '2024-10-06 16:10:12', '/storage/images/1728241812billss.png', 'similwa.mdumbwa@gmail.com', 'Erick Leonard Mangale', 'SOPE', 'erei', '255713076357'),
(11, '2024-10-06 16:11:05', '2024-10-06 16:11:05', '/storage/images/1728241865billss.png', 'similwa.mdumbwa@gmail.com', 'Juma Hassan', 'School of Professional Engineering', 'euueeu', '255673204233'),
(12, '2024-10-06 16:12:08', '2024-10-06 16:12:08', '/storage/images/1728241928billss.png', 'similwa.mdumbwa@gmail.com', 'PEAKEY INTERNATIONAL CONSULTANCY', 'School of Professional Engineering', 'School of Professional Engineering', '255713299200'),
(13, '2024-10-06 16:13:00', '2024-10-06 16:13:00', '/storage/images/1728241980billss.png', 'mangaleerick4@gmail.com', 'Erick Leonard Mangale', 'School of Professional Engineering', 'School of Professional Engineering', '255713076357'),
(14, '2024-10-06 16:14:34', '2024-10-06 16:14:34', '/storage/images/1728242074billss.png', 'similwa.mdumbwa@gmail.com', 'Ict Security', 'School of Professional Engineering', 'wertytres', '067340393'),
(15, '2024-10-06 16:15:41', '2024-10-06 16:15:41', '/storage/images/1728242141billss.png', 'jumahassan@gmail.com', 'Juma Hassan', 'School of Professional Engineering', 'sope', '0673204233');

-- --------------------------------------------------------

--
-- Table structure for table `corousel`
--

CREATE TABLE `corousel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `content1` varchar(255) NOT NULL,
  `content2` varchar(255) NOT NULL,
  `content3` varchar(255) NOT NULL,
  `created_date` varchar(255) NOT NULL,
  `photo` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `corousel`
--

INSERT INTO `corousel` (`id`, `created_at`, `updated_at`, `content1`, `content2`, `content3`, `created_date`, `photo`) VALUES
(4, '2024-09-22 10:26:34', '2024-09-22 10:26:34', 'School of professiona engineering', 'School of professiona engineering', 'School of professiona engineering', '2024-09-22', '/storage/images/1727011593marathon-package-(2).jpg'),
(5, '2024-09-22 10:34:45', '2024-09-22 10:34:45', 'School of professiona engineering2', 'School of professiona engineering2', 'School of professiona engineering2', '2024-09-22', '/storage/images/1727012085ERICK MANGALE PASSPORT SIZE.png');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_09_21_125842_create_corousel_table', 2),
(5, '2024_09_23_060504_create_services_table', 3),
(6, '2024_09_24_155846_create_news_table', 4),
(7, '2024_10_04_080507_create_articles_table', 5),
(8, '2024_10_06_071251_create_comment_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `news_title` varchar(255) NOT NULL,
  `news_description` varchar(255) NOT NULL,
  `news_category` varchar(255) NOT NULL,
  `created_date` varchar(255) NOT NULL,
  `photo` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `created_at`, `updated_at`, `news_title`, `news_description`, `news_category`, `created_date`, `photo`) VALUES
(4, '2024-10-06 15:37:29', '2024-10-06 15:37:29', 'egistration requirements in the engineering profession. The project will use a hybrid model of online courses, face-to-face sessions, and apprenticeship to deliver industry-aligned, innovative, and accessible training for engineering practitioner', 'egistration requirements in the engineering profession. The project will use a hybrid model of online courses, face-to-face sessions, and apprenticeship to deliver industry-aligned, innovative, and accessible', 'Advertisement', '2024-10-06', '/storage/images/1728239849desktop- firm calculation.png'),
(5, '2024-10-06 15:39:04', '2024-10-06 15:39:04', 'of online courses, face-to-face sessions, and apprenticeship to deliver industry-aligned, innovative, and accessible', 'of online courses, face-to-face sessions, and apprenticeship to deliver industry-aligned, innovative, and accessible', 'Advertisement', '2024-10-06', '/storage/images/1728239944billss.png'),
(6, '2024-10-06 15:40:45', '2024-10-06 15:40:45', '</div>', '</div>', 'Job-Vacancy', '2024-10-31', '/storage/images/1728240045rashid.jpg'),
(7, '2024-10-06 15:44:50', '2024-10-06 15:44:50', 'egistration requirements in the', 'egistration requirements in the', 'Advertisement', '2024-10-06', '/storage/images/1728240290DOCUMENT REQUIRED FOR FIRM APPLICATION.png'),
(8, '2024-10-06 15:48:29', '2024-10-06 15:48:29', 'egistration requirements in the', 'egistration requirements in the', 'Choose Category', '2024-10-12', '/storage/images/1728240509billss.png'),
(9, '2024-10-06 15:49:31', '2024-10-06 15:49:31', 'egistration requirements in the', 'egistration requirements in the', 'Advertisement', '2024-10-06', '/storage/images/1728240571corousel controller.png'),
(10, '2024-10-06 15:51:24', '2024-10-06 15:51:24', '\"alert', '\"alert', 'Choose Category', '2024-10-06', '/storage/images/1728240684billss.png'),
(11, '2024-10-06 15:53:37', '2024-10-06 15:53:37', 'alert', 'alert', 'Advertisement', '2024-10-06', '/storage/images/1728240817corousel controller.png'),
(12, '2024-10-06 15:58:02', '2024-10-06 15:58:02', 'deliver industry-aligned, innovative, and accessible', 'deliver industry-aligned, innovative, and accessible', 'Job-Vacancy', '2024-10-06', '/storage/images/1728241082billss.png'),
(13, '2024-10-06 15:59:20', '2024-10-06 15:59:20', 'engineering profession. The project will use a hybrid model of online courses, face-to-face sessions, and apprenticeship to deliver industry-aligned, innovative, and accessible training for engineering practitioner 	egistration requirements in the', 'engineering profession. The project will use a hybrid model of online courses, face-to-face sessions, and apprenticeship to deliver industry-aligned, innovative, and accessible training for engineering practitioner 	egistration requirements in the', 'Advertisement', '2024-10-06', '/storage/images/1728241160billss.png');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('mangaleerick4@gmail.com', '$2y$12$3VSkeH22KrYAP0HXFEGWeu9BDA62Z3MqHYm3XgjY9WIIlKkHUJzha', '2024-09-19 02:59:52');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Service_name` varchar(255) NOT NULL,
  `Service_description` varchar(255) NOT NULL,
  `created_date` varchar(255) NOT NULL,
  `photo` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `created_at`, `updated_at`, `Service_name`, `Service_description`, `created_date`, `photo`) VALUES
(3, '2024-10-02 15:56:03', '2024-10-02 15:56:03', 'Mentor/Apprenticeship Skills', 'Developing guidance, teaching, and feedback skills to support apprentices, Encouraging learning through hands-on experience and constructive feedback, Establishing a professional relationship and setting clear expectations for growth.', '2024-10-02', '/storage/images/1727895362blog-2.png'),
(4, '2024-10-02 15:58:09', '2024-10-02 15:58:09', 'Soft Skills', 'Interpersonal communication, teamwork, and problem-solving, Adaptability, time management, and conflict resolution, Emotional intelligence and active listening.', '2024-10-02', '/storage/images/1727895489blog-4.png'),
(5, '2024-10-02 16:00:41', '2024-10-02 16:00:41', 'Work Skills', 'Technical proficiency in relevant industry tasks, Hands-on experience and operational understanding of tools and technology and Efficiency in task completion and troubleshooting skills.', '2024-10-02', '/storage/images/1727895640blog-4.png'),
(6, '2024-10-02 16:02:02', '2024-10-02 16:02:02', 'Quarterly Reporting Skills', 'Structuring reports with clear objectives, data, and progress tracking, Monitoring key performance indicators (KPIs) and Providing insights and recommendations based on data analysis.', '2024-10-02', '/storage/images/1727895722blog-4.png'),
(7, '2024-10-02 16:04:01', '2024-10-02 16:04:01', 'Communication Skills', 'Mastering both verbal and written communication for clarity and professionalism, Tailoring communication to different audiences (e.g., peers, management, clients) , Active listening, negotiation, and presentation skills.', '2024-10-02', '/storage/images/1727895841blog-4.png'),
(8, '2024-10-02 16:05:26', '2024-10-02 16:05:26', 'Project Management', 'Planning, executing, and closing projects on time and within budget and Understanding project life cycles, resource allocation, and risk management and Using project management tools (e.g., Gantt charts, agile methodologies).', '2024-10-02', '/storage/images/1727895926blog-4.png'),
(9, '2024-10-02 16:07:31', '2024-10-02 16:07:31', 'Safety Management', 'Identifying hazards and implementing risk mitigation strategies and Ensuring compliance with safety regulations and standards and Promoting a culture of safety through training and monitoring.', '2024-10-02', '/storage/images/1727896051blog-4.png'),
(10, '2024-10-02 16:13:03', '2024-10-02 16:13:03', 'Quality Management', 'Implementing quality control and assurance processes and Monitoring performance against benchmarks to ensure high standards and Continuous improvement through feedback loops and corrective actions.', '2024-10-02', '/storage/images/1727896383blog-4.png'),
(11, '2024-10-02 16:14:24', '2024-10-02 16:14:24', 'Health Management', 'Ensuring workplace health standards are met, focusing on employee well-being and Managing occupational health risks, stress management, and wellness programs and Compliance with health regulations and promoting a healthy work environment.', '2024-10-02', '/storage/images/1727896464blog-4.png'),
(12, '2024-10-02 16:16:15', '2024-10-02 16:16:15', 'Environmental Protection', 'Understanding the impact of engineering projects on the environment, Implementing sustainable practices and minimizing ecological footprints and Ensuring compliance with environmental laws and standards.', '2024-10-02', '/storage/images/1727896575blog-4.png'),
(13, '2024-10-02 16:19:51', '2024-10-02 16:19:51', 'Fieldwork', 'Practical experience in fieldwork relevant to engineering. Data collection, equipment handling, and site inspections. Problem-solving and decision-making in real-world scenarios.', '2024-10-02', '/storage/images/1727896791blog-4.png'),
(14, '2024-10-02 16:21:22', '2024-10-02 16:21:22', 'Case Studies', 'Analyzing real-life engineering scenarios to derive lessons and best practices and Critical thinking and application of theoretical knowledge to practical situations and Collaboration and group discussions to develop solutions.', '2024-10-02', '/storage/images/1727896882blog-4.png'),
(15, '2024-10-02 16:22:46', '2024-10-02 16:22:46', 'Research Methodology and Data Management', 'Developing skills in research design, data collection, and analysis, Organizing and managing data efficiently for accurate reporting and Ethical research practices and proper data documentation.', '2024-10-02', '/storage/images/1727896966blog-4.png'),
(16, '2024-10-02 16:23:47', '2024-10-02 16:23:47', 'Introduction to Emerging Engineering Technologies', 'Familiarizing with cutting-edge technologies in the engineering field, Understanding the potential of innovations such as AI, IoT, and renewable energy and Exploring the impact of new technologies on current and future engineering practices.', '2024-10-02', '/storage/images/1727897027blog-4.png');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('13Sey2qBDhrnuFDDuTfYSSjTdb9Ps9vOvBToU0Bf', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:131.0) Gecko/20100101 Firefox/131.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRXZvcng3cnpCV0o2RlBldVlzR25OUTg0WXY0ZldwT3VueUF5ZFRSRCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1728284205);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ict Security', 'ictsecurity@gmail.com', NULL, '$2y$12$YjRtnesrze9XRdk.v3R6.ul7EtRBkNueet9K/zI0DEpOHTl0iQ/Cy', NULL, '2024-09-19 02:57:21', '2024-09-24 12:11:16'),
(2, 'ICT Support', 'ictsupport@erb.go.tz', NULL, '$2y$12$7s38.L1L.efpkMpPFAbuxO8l38QY1IBhLG1rVRfVuaHR70TsxBig.', NULL, '2024-09-23 11:53:12', '2024-09-23 11:53:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `corousel`
--
ALTER TABLE `corousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `corousel`
--
ALTER TABLE `corousel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

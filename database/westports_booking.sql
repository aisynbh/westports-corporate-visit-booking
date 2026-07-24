-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jul 24, 2026 at 02:06 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `westports_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `organization_name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `arrival_time` time NOT NULL,
  `end_time` time NOT NULL,
  `port_tour_time` time NOT NULL,
  `escort_booking_time` time NOT NULL,
  `safety_briefing_venue` varchar(255) NOT NULL,
  `safety_briefing_time` time NOT NULL,
  `safety_briefing_language` varchar(255) NOT NULL,
  `signage` tinyint(1) NOT NULL DEFAULT 0,
  `souvenir` tinyint(1) NOT NULL DEFAULT 0,
  `room_id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `organization_name`, `date`, `arrival_time`, `end_time`, `port_tour_time`, `escort_booking_time`, `safety_briefing_venue`, `safety_briefing_time`, `safety_briefing_language`, `signage`, `souvenir`, `room_id`, `department_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Northport Malaysia', '2026-07-21', '10:00:00', '11:00:00', '10:00:00', '10:00:00', 'Lobby, Dolphin', '10:00:00', 'English', 1, 1, 1, 1, 1, '2026-07-19 03:43:06', '2026-07-19 04:05:51'),
(2, 'PTP', '2026-07-23', '12:00:00', '13:00:00', '12:00:00', '13:00:00', 'Lobby, Dolphin', '12:00:00', 'Bahasa Malaysia', 0, 0, 1, 1, 1, '2026-07-19 04:43:58', '2026-07-19 04:43:58');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Corporate Comms', 'Corporate Communications Department', '2026-07-19 03:33:36', '2026-07-20 05:32:45');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` varchar(255) NOT NULL,
  `queue` varchar(255) NOT NULL,
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
  `attempts` smallint(5) UNSIGNED NOT NULL,
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
(4, '2026_07_11_072342_create_rooms_table', 1),
(5, '2026_07_11_072400_create_departments_table', 1),
(6, '2026_07_11_072422_create_bookings_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `room_name` varchar(255) NOT NULL,
  `level` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room_name`, `level`, `created_at`, `updated_at`) VALUES
(1, 'Briefing Room A', 'Level 3', '2026-07-19 03:33:47', '2026-07-19 03:33:47');

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
('1AUk7SvmwwwuiVHnM2YcooarnMrMTgCHfRueMXjo', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Herd/1.29.0 Chrome/120.0.6099.291 Electron/28.2.5 Safari/537.36', 'eyJfdG9rZW4iOiJCMG94akVCZjdBdkZ3bW1tNWFVRUxOWFVQY3I0aGR6V0hiTURiQnFzIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cL3NhbXBsZS01NjYudGVzdFwvbG9naW4iLCJyb3V0ZSI6ImxvZ2luIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1784643983),
('368iIqdcl2mcYYa3Om6xapN1iB8fKR4haCXfw1w3', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Herd/1.29.0 Chrome/120.0.6099.291 Electron/28.2.5 Safari/537.36', 'eyJfdG9rZW4iOiJ3VFlsMWYwZjZtUzdJTlJDNWlhZ052ajR3bGFITzNMY2MzcGQwcXpEIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cL3NhbXBsZS01NjYudGVzdFwvP2hlcmQ9cHJldmlldyIsInJvdXRlIjpudWxsfSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1784643985),
('DaAwmuIpmtg9yK8SwtAIT7wvLprJYCp2aD4sqBd4', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Herd/1.29.0 Chrome/120.0.6099.291 Electron/28.2.5 Safari/537.36', 'eyJfdG9rZW4iOiJOOUFUMVc1NFJNUUxiTmxObjBHdW82ekZSNGdIeWdEWGg1MGFxM1dNIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cL3NhbXBsZS01NjYudGVzdFwvP2hlcmQ9cHJldmlldyIsInJvdXRlIjpudWxsfSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1784643983),
('FEV1UMc4WejqkWc3LUKtwNyRCNIit40Y6t25PO0D', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Herd/1.29.0 Chrome/120.0.6099.291 Electron/28.2.5 Safari/537.36', 'eyJfdG9rZW4iOiJyanFVUDhNaHdyVGRWTGpGQnVlQ0xYalNNNGd6QjVVejFEZTVCaVprIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cL3NhbXBsZS01NjYudGVzdFwvbG9naW4iLCJyb3V0ZSI6ImxvZ2luIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1784640660),
('GiSnSjGZAEQcGnK4ym4oaXRqmuce3W1gdgnlqQUL', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Herd/1.29.0 Chrome/120.0.6099.291 Electron/28.2.5 Safari/537.36', 'eyJfdG9rZW4iOiJZZEV1dVNyQ2hjWFF5cjVRTnVpdjc0aFlnSW1vRVhxYlp0U3VKVW9YIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cL3NhbXBsZS01NjYudGVzdFwvbG9naW4iLCJyb3V0ZSI6ImxvZ2luIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1784645315),
('kD4g8jx24gXnz0irZOS87YzIBcK2YM8miXc5QFRg', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'eyJfdG9rZW4iOiIzYWQwRVZGWUozUkd2UmIxV1ZGZVdJNGFiWlJsUjFNWmViRkhOVjBTIiwidXJsIjp7ImludGVuZGVkIjoiaHR0cDpcL1wvc2FtcGxlLTU2Ni50ZXN0XC9kZXBhcnRtZW50cyJ9LCJfcHJldmlvdXMiOnsidXJsIjoiaHR0cDpcL1wvc2FtcGxlLTU2Ni50ZXN0XC9ib29raW5ncyIsInJvdXRlIjoiYm9va2luZ3MuaW5kZXgifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119LCJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI6MX0=', 1784727569),
('MiCHT1tX30iMnonpox8GDbUtZLAgOlwYz6nqVlsb', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Herd/1.29.0 Chrome/120.0.6099.291 Electron/28.2.5 Safari/537.36', 'eyJfdG9rZW4iOiJ3bmRxVG50Z29qZnJYdmFGTXJ5eEc3UUU5eFhnVEc3QzQzTXNjNkFOIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cL3NhbXBsZS01NjYudGVzdFwvbG9naW4iLCJyb3V0ZSI6ImxvZ2luIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1784643822),
('mODvX3kb6Z5ootj5EqBUEfxK1p2zAuFt7JuuKyBz', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Herd/1.29.0 Chrome/120.0.6099.291 Electron/28.2.5 Safari/537.36', 'eyJfdG9rZW4iOiJUSDdKdUZ2M2dXbkNVaG5HWG1neEdQTnhXQmJJOUw3YnBOenRPRTVUIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cL3NhbXBsZS01NjYudGVzdFwvP2hlcmQ9cHJldmlldyIsInJvdXRlIjpudWxsfSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1784640659),
('Q6aOkRUk0OvNoUSSDK9S9b39aF5eWt7Gtsv7PJEe', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Herd/1.29.0 Chrome/120.0.6099.291 Electron/28.2.5 Safari/537.36', 'eyJfdG9rZW4iOiJQVzR0UlAzSU5NQU9tOVlDWGg3SGZKRnprNnl3RHRzTk9lU2lDUHdPIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cL3NhbXBsZS01NjYudGVzdFwvP2hlcmQ9cHJldmlldyIsInJvdXRlIjpudWxsfSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1784645315),
('qBP9nbSbB9IvUQmc20Z235ecHynR3en3qy59vSL1', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'eyJfdG9rZW4iOiJUbFpBOVlvakUxSmRhVnhETWVLdnB3MHRmQ1pTTUZqdmtxNktyak1CIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MDAwXC9ib29raW5ncyIsInJvdXRlIjoiYm9va2luZ3MuaW5kZXgifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119LCJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI6MX0=', 1784644490),
('RBf50YdpOCePLSMBmM7CxWTKslILIz1hijhQkscF', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'eyJfdG9rZW4iOiJFWGwxb0c5bkN1aEtZbVlUS2hIWUl4STRLWEtGT05zRVhFUUI2OUY1IiwidXJsIjp7ImludGVuZGVkIjoiaHR0cDpcL1wvc2FtcGxlLTU2Ni50ZXN0XC9kZXBhcnRtZW50cyJ9LCJfcHJldmlvdXMiOnsidXJsIjoiaHR0cDpcL1wvc2FtcGxlLTU2Ni50ZXN0XC9kZXBhcnRtZW50cyIsInJvdXRlIjoiZGVwYXJ0bWVudHMuaW5kZXgifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119LCJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI6MX0=', 1784813981),
('uNoy5JcLtN0xfsNYfAClJOQXZG83XwWFEHlgA3kH', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Herd/1.29.0 Chrome/120.0.6099.291 Electron/28.2.5 Safari/537.36', 'eyJfdG9rZW4iOiJUc0kwaWMwZHIxQ2dyVjF1RWJ4S1F5cW04QUwwSHZsT0YwcDVqaEsyIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cL3NhbXBsZS01NjYudGVzdFwvbG9naW4iLCJyb3V0ZSI6ImxvZ2luIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1784643985),
('xlRncDheEQnA7MJIQoLHP9jg9uwoKalEk8Fy6NU5', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Herd/1.29.0 Chrome/120.0.6099.291 Electron/28.2.5 Safari/537.36', 'eyJfdG9rZW4iOiJCbVN0RHd3NmpmdlBlaVBrdVNGeG9kUUJqNUhQVjRQdkFoOGRXWTlvIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cL3NhbXBsZS01NjYudGVzdFwvP2hlcmQ9cHJldmlldyIsInJvdXRlIjpudWxsfSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1784643822),
('zEa6xtmOP0pcUvfpNDHrPWUII1i4k3XpjOR26YrG', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'eyJfdG9rZW4iOiJNMHVGbjVjazhnMkM3VktjWnN3YXNOczE1YkQ2cEpha2R1am43SWJ2IiwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119LCJfcHJldmlvdXMiOnsidXJsIjoiaHR0cDpcL1wvc2FtcGxlLTU2Ni50ZXN0XC9ib29raW5nc1wvY3JlYXRlIiwicm91dGUiOiJib29raW5ncy5jcmVhdGUifSwibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiOjF9', 1784653546);

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
(1, 'Admin', 'admin@westports.com', NULL, '$2y$12$U6ChflPDtjJaYEgF1w1DVOZXTZax.VaW29YZZlVafe7Q4WynnFfAO', NULL, '2026-07-19 03:33:55', '2026-07-21 05:18:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookings_room_id_foreign` (`room_id`),
  ADD KEY `bookings_department_id_foreign` (`department_id`),
  ADD KEY `bookings_user_id_foreign` (`user_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`),
  ADD KEY `failed_jobs_connection_queue_failed_at_index` (`connection`,`queue`,`failed_at`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
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
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bookings_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bookings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

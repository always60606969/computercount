-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2020 at 08:02 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_computer`
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
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

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
-- Table structure for table `tb_addcomputer`
--

CREATE TABLE `tb_addcomputer` (
  `id` int(11) NOT NULL,
  `device_name` varchar(50) DEFAULT NULL,
  `device_cpu` varchar(11) DEFAULT NULL,
  `device_ram` varchar(11) DEFAULT NULL,
  `device_capacity` varchar(11) DEFAULT NULL,
  `device_mark` varchar(11) DEFAULT NULL,
  `device_keyboard` int(11) DEFAULT NULL,
  `device_mouse` int(11) DEFAULT NULL,
  `device_desktop` int(11) DEFAULT NULL,
  `device_other` varchar(500) DEFAULT NULL,
  `device_system` varchar(100) DEFAULT NULL,
  `device_user` varchar(100) DEFAULT NULL,
  `device_adddate` varchar(100) DEFAULT NULL,
  `device_id` varchar(11) DEFAULT NULL,
  `device_unit` varchar(50) DEFAULT NULL,
  `device_username` varchar(50) DEFAULT NULL,
  `device_ip` varchar(50) DEFAULT NULL,
  `device_mac` varchar(50) DEFAULT NULL,
  `device_factory` varchar(50) DEFAULT NULL,
  `device_country` varchar(50) DEFAULT NULL,
  `device_mdate` varchar(20) DEFAULT NULL,
  `device_udate` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_addcomputer`
--

INSERT INTO `tb_addcomputer` (`id`, `device_name`, `device_cpu`, `device_ram`, `device_capacity`, `device_mark`, `device_keyboard`, `device_mouse`, `device_desktop`, `device_other`, `device_system`, `device_user`, `device_adddate`, `device_id`, `device_unit`, `device_username`, `device_ip`, `device_mac`, `device_factory`, `device_country`, `device_mdate`, `device_udate`) VALUES
(45, 'Dell компьютер', '6', '4 GB', '5 GB', 'HDD', 1, 1, 1, 'none', 'Windows Vista', 'Баасансүх', '2019-12-25', 'ЗЛ 101', 'ЗХ 189 анги', 'Алтангэрэл', '109.206.57.54', 'a3:ds:12:12:43:sd', 'a3:ds:12:12:43:sd:12', 'Б.Батсайхан', '198.168.13.10', '2020-04-16'),
(46, 'Asus notebook', '15', '11 GB', '12 GB', 'ssd', 2, 1, 2, 'no', 'Windows 10', 'Болдсайхан', '2019-04-10', 'ЗЛ198', 'ЗХ013 анги', 'П.Пүрэвдөрж', '196.168.45.12', '12:df:56:s4:89:78', 'ZHdsF234e', 'Болд-эрдэнэ', '123', '2024-03-03'),
(48, 'Lenovo', '12', '11 GB', '16 GB', 'SSD', 2, 1, 4, 'no', 'Windows 7', 'Bolderdene', '2005-04-02', '12343rfds', 'ZH189', 'Saikhnaa', '196.146.189', 'zx:as:fd:df:er:wq', 'zx:as:fd:df:er:wq', 'Altangerel', '192.168.20.152', '2020-03-02'),
(49, 'Republic', '6', '2 GB', '8 GB', 'SSD', 1, 1, 3, 'no', 'Windows XP', 'Boldoo', '2017-02-01', '165asd', 'ZH189', 'BoldSaikhan', '198.168.26.10', '10:10:10:10', 'ASDWQGFv:sadfs', 'Altansukh1212', '189.168.10.12', '2018-01-02'),
(50, 'MGM', '6', ' GB', ' GB', 'SSD', 1, 1, 2, 'no', 'Windows XP', 'Boldoo', '2017-02-01', '165asd', 'ZH189', 'BoldSaikhan', '198.168.26.10', '10:10:10:10', 'ASDWQGFv:sadfs', 'Altansukh', '189.168.10.12', '2018-01-02'),
(54, 'Saikhnaa', '6', '5', '6', 'SSD', 1, 1, 2, 'no', 'Windows XP', 'Boldoo', '2017-02-01', '165asd', 'ZH189', 'BoldSaikhan', '198.168.26.10', '10:10:10:10', 'ASDWQGFv:sadfs', 'Altansukh', '189.168.10.12', '2018-01-02'),
(56, 'Saikhnaa', '6', '5', '6', 'SSD', 1, 1, 3, 'no', 'Windows XP', 'Boldoo', '2017-02-01', '165asd', 'ZH189', 'BoldSaikhan', '198.168.26.10', '10:10:10:10', 'ASDWQGFv:sadfs', 'Altansukh', '189.168.10.12', '2018-01-02'),
(70, 'Dell 12', '9', '9 GB', '12 GB', 'SSD', 2, 2, 2, 'None', 'Windows Vista', 'С.Батзул', '2020-06-16', 'ЗЛ12334', 'ЗХ189', 'С.Батзул', '192.168.12.15', 'ас:ас:сд', 'ГХ132485', 'С.Батзул', 'С.Батзул', '2020-06-26'),
(71, 'Dell 12', '9', '9 GB', '12 GB', 'SSD', 2, 2, 2, 'None', 'Windows Vista', 'С.Батзул', '2020-06-16', 'ЗЛ12334', 'ЗХ189', 'С.Батзул', '192.168.12.15', 'ас:ас:сд', 'ГХ132485', 'С.Батзул', 'С.Батзул', '2020-06-26'),
(72, 'Dell 12', '9', '9 GB', '12 GB', 'SSD', 2, 2, 2, 'None', 'Windows Vista', 'С.Батзул', '2020-06-16', 'ЗЛ12334', 'ЗХ189', 'С.Батзул', '192.168.12.15', 'ас:ас:сд', 'ГХ132485', 'С.Батзул', 'С.Батзул', '2020-06-26'),
(73, 'Dell 12', '9', '9 GB', '12 GB', 'SSD', 2, 2, 2, 'None', 'Windows Vista', 'С.Батзул', '2020-06-16', 'ЗЛ12334', 'ЗХ189', 'С.Батзул', '192.168.12.15', 'ас:ас:сд', 'ГХ132485', 'С.Батзул', 'С.Батзул', '2020-06-26'),
(74, 'Dell 12', '9', '9 GB', '12 GB', 'SSD', 2, 2, 2, 'None', 'Windows Vista', 'С.Батзул', '2020-06-16', 'ЗЛ12334', 'ЗХ189', 'С.Батзул', '192.168.12.15', 'ас:ас:сд', 'ГХ132485', 'С.Батзул', 'С.Батзул', '2020-06-26'),
(75, 'Dell 12', '9', '9 GB', '12 GB', 'SSD', 2, 2, 2, 'None', 'Windows Vista', 'С.Батзул', '2020-06-16', 'ЗЛ12334', 'ЗХ189', 'С.Батзул', '192.168.12.15', 'ас:ас:сд', 'ГХ132485', 'С.Батзул', 'С.Батзул', '2020-06-26'),
(76, 'Dell 12', '9', '9 GB', '12 GB', 'SSD', 2, 2, 2, 'None', 'Windows Vista', 'С.Батзул', '2020-06-16', 'ЗЛ12334', 'ЗХ189', 'С.Батзул', '192.168.12.15', 'ас:ас:сд', 'ГХ132485', 'С.Батзул', 'С.Батзул', '2020-06-26'),
(77, 'Dell 12', '9', '9 GB', '12 GB', 'SSD', 2, 2, 2, 'None', 'Windows Vista', 'С.Батзул', '2020-06-16', 'ЗЛ12334', 'ЗХ189', 'С.Батзул', '192.168.12.15', 'ас:ас:сд', 'ГХ132485', 'С.Батзул', 'С.Батзул', '2020-06-26');

-- --------------------------------------------------------

--
-- Table structure for table `tb_change`
--

CREATE TABLE `tb_change` (
  `id` int(11) NOT NULL,
  `h_date` varchar(15) DEFAULT NULL,
  `h_reason` varchar(25) NOT NULL,
  `h_give` varchar(25) NOT NULL,
  `h_recieve` varchar(25) NOT NULL,
  `comID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_change`
--

INSERT INTO `tb_change` (`id`, `h_date`, `h_reason`, `h_give`, `h_recieve`, `comID`) VALUES
(1, '2020-05-07', 'Шилжсэн', 'Ганболд', '2020-05-14', 46),
(2, '2020-05-21', 'Шилжсэн', 'С.Алтангэрэл', '2020-05-28', 45),
(3, '2020-05-27', 'Шинээр ирсэн', 'Даваабат', '2020-05-29', 48);

-- --------------------------------------------------------

--
-- Table structure for table `td_programms`
--

CREATE TABLE `td_programms` (
  `id` int(11) NOT NULL,
  `i_date` varchar(15) DEFAULT NULL,
  `i_programms` varchar(50) DEFAULT NULL,
  `comID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `td_programms`
--

INSERT INTO `td_programms` (`id`, `i_date`, `i_programms`, `comID`) VALUES
(1, '2020-05-23', 'Visual studio', 48),
(2, '2020-05-27', 'Excel', 49),
(3, 'dfgdf', 'dfgdfg', 50),
(4, '2020-05-28', 'Photoshop', 46),
(5, '2020-05-27', 'Word', 45),
(6, '2020-05-28', 'Үзлэгийн программ', 48);

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$UhE/rIztDzTn2LtEr1j9QeSUoAEf4MyZA9FQvMqvzDfOvw1QYxU0C', 'XhXCAJcmAfQSPTKA5B9QEq7q6KMfyLA05K6dXJ4Yjev7q9NwdR86wxLxhn9J', '2020-05-28 00:07:19', '2020-05-28 00:07:19'),
(4, 'davaa', 'davaa4510@gmail.com', NULL, '$2y$10$TUBDvPlNk8f5qH7UjWgJOOw.Aqdk9wXN.o50rOIYtRkNMQzDSUDn2', NULL, NULL, NULL),
(5, 'davaa', 'davaa45100@gmail.com', NULL, '$2y$10$JidoNH7xr19V6FYgi7wOQ.zhTdLtrXhCAQ4CsJ2wnX8wFg7A.hhsC', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indexes for table `tb_addcomputer`
--
ALTER TABLE `tb_addcomputer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_change`
--
ALTER TABLE `tb_change`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `td_programms`
--
ALTER TABLE `td_programms`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_addcomputer`
--
ALTER TABLE `tb_addcomputer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `tb_change`
--
ALTER TABLE `tb_change`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `td_programms`
--
ALTER TABLE `td_programms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

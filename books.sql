-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 03, 2021 at 11:45 AM
-- Server version: 5.7.30
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `books`
--

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'lala@gmail.com', 1, '2020-12-28 08:15:58', 1),
(2, '::1', 'lala@gmail.com', 1, '2020-12-28 08:42:54', 1),
(3, '::1', 'lala@gmail.com', 1, '2020-12-28 19:31:58', 1),
(4, '::1', 'lala@gmail.com', 1, '2020-12-28 20:54:06', 1),
(5, '::1', 'lala@gmail.com', 1, '2020-12-28 22:09:26', 1),
(6, '::1', 'angga@gmail.com', 2, '2020-12-29 00:11:07', 1);

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `judul`, `slug`, `penulis`, `penerbit`, `sampul`, `created_at`, `updated_at`) VALUES
(6, 'Merdeka Sejak Hati', 'merdeka-sejak-hati', 'Ahmad Fuadi', 'Gramedia', '1608577344_3170bb209ed49a664d4c.jpeg', '2020-12-21 13:02:24', '2020-12-28 21:24:07'),
(7, '#88 Love Life', '88-love-life', 'Diana Rikasari', 'Gramedia', '1608577402_e7dceb90ec0df39b672e.jpeg', '2020-12-21 13:03:22', '2020-12-21 13:03:22'),
(8, 'Sebuah seni untuk bersikap bodo amat', 'sebuah-seni-untuk-bersikap-bodo-amat', 'Mark Manson', 'Gramedia', '1609215575_752de3ce15a8cf0eba26.jpeg', '2020-12-28 22:19:35', '2020-12-28 22:19:35');

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1609163113, 1);

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'lala@gmail.com', 'dikdik', '$2y$10$VdgJFIJE6xaoQ1eUezEWQeL73E3jIkEuCfZeh5WujhevnYJ5q4qvS', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-12-28 08:15:47', '2020-12-28 08:15:47', NULL),
(2, 'angga@gmail.com', 'angga', '$2y$10$H2BYF2wd.Ni1OqpCILjU7.mgXsJdYnsoM4ZSv6rtE29ba/UOSbqm6', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-12-29 00:10:55', '2020-12-29 00:10:55', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

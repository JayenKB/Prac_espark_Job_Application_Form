-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2021 at 02:05 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobapplication`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobapplication`
--

CREATE TABLE `jobapplication` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phoneno` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relationship_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateofbirth` date DEFAULT NULL,
  `ssc_name_of_bord` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ssc_passing_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ssc_percentage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hsc_name_of_bord` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hsc_passing_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hsc_percentage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bechlor_course_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bechlor_university` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bechlor_passing_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bechlor_percentage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `master_course_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `master_university` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `master_passing_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `master_percentage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workex_company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workex_designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL,
  `language_known` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `technologies_you_know` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mysql_technologies_you_know` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `laravel_technologies_you_know` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oracle_technologies_you_know` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referance_contact_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referance_contact_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referance_contact_relation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preferances_preferd_location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preferances_notice_period` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preferances_expacted_CTC` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preferances_current_CTC` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preferances_department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobapplication`
--

INSERT INTO `jobapplication` (`id`, `first_name`, `last_name`, `address_1`, `address_2`, `email`, `designation`, `phoneno`, `city`, `state`, `gender`, `zip`, `relationship_status`, `dateofbirth`, `ssc_name_of_bord`, `ssc_passing_year`, `ssc_percentage`, `hsc_name_of_bord`, `hsc_passing_year`, `hsc_percentage`, `bechlor_course_name`, `bechlor_university`, `bechlor_passing_year`, `bechlor_percentage`, `master_course_name`, `master_university`, `master_passing_year`, `master_percentage`, `workex_company_name`, `workex_designation`, `from_date`, `to_date`, `language_known`, `technologies_you_know`, `mysql_technologies_you_know`, `laravel_technologies_you_know`, `oracle_technologies_you_know`, `referance_contact_name`, `referance_contact_number`, `referance_contact_relation`, `preferances_preferd_location`, `preferances_notice_period`, `preferances_expacted_CTC`, `preferances_current_CTC`, `preferances_department`, `created_at`, `updated_at`) VALUES
(4, 'jk', 'jk', 'nm,', 'nm,n', ',mnm,', 'mnm,n', 'nm,', 'h', 'hjbn', 'male', 'nm,', 'married', '1212-12-12', 'nm', 'nm', 'bnmbn', 'mbn', 'mb', 'nmb', 'n', 'bnm', 'bmn', 'bnm', 'bmn', 'bmn', 'b', 'nmbm', 'nmn', 'nbmnb', NULL, NULL, 'hindi_read', 'beginer', 'mysql_beginer', 'laravel_beginer', 'oracle_beginer', 'mn', 'jk', 'jjk', 'hj', 'nmn', 'mnmn', 'mnm', 'Marketing', '2021-01-21 05:07:50', '2021-01-21 05:07:50'),
(6, 'jnm', 'bmn', 'nmb', 'nmbmnbm', 'bnm', 'bmn', 'bnm', 'hbjbn', 'nmbnnm', 'male', 'b', 'single', '1212-12-12', 'nmn', 'nm,n', ',mn,mnn', 'mnm,mn', 'm,n,mn', ',n,m', 'n,n', ',n,m', 'n,mn', ',mn', ',m', 'nmn', 'mnbnvgg', 'hvh', 'vbnvn', 'vnb', NULL, NULL, 'hindi_read', 'beginer', 'mysql_beginer', 'laravel_beginer', 'oracle_beginer', 'bh', 'nb', 'nmbnm', 'nj', 'm', 'mb', 'nmb', 'Marketing', '2021-01-21 05:43:28', '2021-01-21 05:43:28'),
(7, 'jkl', 'jlk', 'lkj', 'lkj', 'klj', 'jj', 'lkj', 'hjh', 'hj', 'female', 'klj', 'single', '1212-12-12', 'nm', 'mn', 'm,n', ',mn', ',m', 'nm,', 'n,m', 'n', 'm,n', ',m', 'nm,', 'n', 'n,m', 'n', 'bn', 'b', NULL, NULL, 'hindi_read', NULL, NULL, NULL, NULL, 'bh', 'mn', 'bm', 'n', 'bmbn', 'mbnmbb', 'nn', 'Development', '2021-01-21 06:33:51', '2021-01-21 06:33:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobapplication`
--
ALTER TABLE `jobapplication`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobapplication`
--
ALTER TABLE `jobapplication`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

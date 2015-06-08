-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2015 at 10:58 AM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `myjobportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `empcompanies`
--

CREATE TABLE IF NOT EXISTS `empcompanies` (
`id` int(10) unsigned NOT NULL,
  `employer_id` int(10) unsigned NOT NULL,
  `company_name` text COLLATE utf8_unicode_ci NOT NULL,
  `company_type` text COLLATE utf8_unicode_ci NOT NULL,
  `contact_person` text COLLATE utf8_unicode_ci NOT NULL,
  `contact_persons_designation` text COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `country` text COLLATE utf8_unicode_ci NOT NULL,
  `city` text COLLATE utf8_unicode_ci NOT NULL,
  `mobile` text COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `website` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `empcompanies`
--

INSERT INTO `empcompanies` (`id`, `employer_id`, `company_name`, `company_type`, `contact_person`, `contact_persons_designation`, `address`, `country`, `city`, `mobile`, `email`, `website`, `created_at`, `updated_at`) VALUES
(1, 4, 'dd', '', 'dd', '', '', '', '', '', '', '', '2015-04-27 13:09:09', '2015-04-27 13:09:09'),
(2, 5, 'dd', '', 'dd', '', '', '', '', '', '', '', '2015-04-27 13:34:08', '2015-04-27 13:34:08'),
(6, 6, 'dd', '', 'dd', '', '', '', '', '', '', '', '2015-04-27 13:43:16', '2015-04-27 13:43:16');

-- --------------------------------------------------------

--
-- Table structure for table `employers`
--

CREATE TABLE IF NOT EXISTS `employers` (
`id` int(10) unsigned NOT NULL,
  `username` text COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `password_temp` text COLLATE utf8_unicode_ci NOT NULL,
  `code` text COLLATE utf8_unicode_ci NOT NULL,
  `active` text COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `employers`
--

INSERT INTO `employers` (`id`, `username`, `email`, `password`, `password_temp`, `code`, `active`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, '07sajib', 'sajibcste@gmail.com', '$2y$10$SZQv9zmL0v7sqPemX2gksOb2N59NyHpIbF9qV5JFpFHeATs03GoZq', '', '', '1', '', '2015-04-27 13:43:16', '2015-04-27 13:43:36');

-- --------------------------------------------------------

--
-- Table structure for table `employments`
--

CREATE TABLE IF NOT EXISTS `employments` (
`id` int(10) unsigned NOT NULL,
  `jobseeker_id` int(10) unsigned NOT NULL,
  `company_name` text COLLATE utf8_unicode_ci NOT NULL,
  `company_business` text COLLATE utf8_unicode_ci NOT NULL,
  `company_location` text COLLATE utf8_unicode_ci NOT NULL,
  `position_held` text COLLATE utf8_unicode_ci NOT NULL,
  `department` text COLLATE utf8_unicode_ci NOT NULL,
  `responsibilities` text COLLATE utf8_unicode_ci NOT NULL,
  `datefrom` text COLLATE utf8_unicode_ci NOT NULL,
  `dateto` text COLLATE utf8_unicode_ci NOT NULL,
  `exp_category` text COLLATE utf8_unicode_ci NOT NULL,
  `skills` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `employments`
--

INSERT INTO `employments` (`id`, `jobseeker_id`, `company_name`, `company_business`, `company_location`, `position_held`, `department`, `responsibilities`, `datefrom`, `dateto`, `exp_category`, `skills`, `created_at`, `updated_at`) VALUES
(1, 1, 'NSTU', '1', 'Dhaka', 'MD', 'Sales', 'fdgs', 'Wednesday, 1 April, 2015', 'Wednesday, 8 April, 2015', '1', '984', '2015-04-19 12:52:48', '2015-04-19 12:52:48'),
(2, 1, 'NSTU', '1', 'Dhaka', 'MD', 'Sales', 'dsf', 'Wednesday, 1 April, 2015', 'Friday, 3 April, 2015', '1', '980', '2015-04-19 12:53:21', '2015-04-19 12:53:21'),
(3, 1, 'NSTU', '1', 'Dhaka', 'MD', 'Sales', '', 'Thursday, 2 April, 2015', 'Saturday, 4 April, 2015', '1', '957', '2015-04-19 12:57:18', '2015-04-19 12:57:18'),
(4, 1, 'NSTU', '1', 'Dhaka', 'MD', 'Sales', '', 'Friday, 3 April, 2015', 'Thursday, 9 April, 2015', '1', '949', '2015-04-19 14:34:11', '2015-04-19 14:34:11'),
(5, 1, 'sdfasdf', '1', 'adsfasdf', 'sadfasdf', 'sadfsd', 'asdgfs', 'Friday, 3 April, 2015', 'Wednesday, 1 April, 2015', '1', '949', '2015-04-19 14:35:35', '2015-04-19 14:35:35'),
(6, 2, 'safsdf', '1', 'asdfsdafsdaf', 'dsaf', '', '', 'Wednesday, 1 April, 2015', 'Friday, 3 April, 2015', '1', '957', '2015-04-26 05:56:54', '2015-04-26 05:56:54'),
(7, 2, '111111111', '1', '111111111111111', '11111111111', '', '', 'Thursday, 9 April, 2015', 'Saturday, 11 April, 2015', '1', '', '2015-04-26 08:31:31', '2015-04-26 08:31:31'),
(8, 1, '11111111', '1', '11111', '1111111', '111111111', '', 'Wednesday, 1 April, 2015', 'Tuesday, 21 April, 2015', '1', '', '2015-04-26 09:08:38', '2015-04-26 09:08:38'),
(9, 1, '444444', '1', '4444444', '44444444', '444444', '4444444444', 'Friday, 1 May, 2015', 'Thursday, 21 May, 2015', '1', '', '2015-05-19 01:23:20', '2015-05-19 01:23:20');

-- --------------------------------------------------------

--
-- Table structure for table `jobcategories`
--

CREATE TABLE IF NOT EXISTS `jobcategories` (
`id` int(10) unsigned NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `jobcategories`
--

INSERT INTO `jobcategories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Accounting & Finance', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Admin/HR/Management', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Bank/Insurance/Leasing', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Blue Color Jobs', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Agri-Fisheries/Livestock', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Assistant/Receptionist', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Commercial/Supply Chain', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Education & Teaching', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Engineer & Architects', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'ICT/Telecommunication', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Medical/Health Care', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Others Jobs', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Pharmacist/Chemist', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Sales & Marketing/MPO/MIO', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Social Service/Development', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `jobdetails`
--

CREATE TABLE IF NOT EXISTS `jobdetails` (
`id` int(10) unsigned NOT NULL,
  `employer_id` int(10) unsigned NOT NULL,
  `jobcategory_id` int(10) unsigned NOT NULL,
  `job_title` text COLLATE utf8_unicode_ci NOT NULL,
  `vacancy` text COLLATE utf8_unicode_ci NOT NULL,
  `job_location` text COLLATE utf8_unicode_ci NOT NULL,
  `salary` text COLLATE utf8_unicode_ci NOT NULL,
  `applying_last_date` text COLLATE utf8_unicode_ci NOT NULL,
  `job_responsibility` text COLLATE utf8_unicode_ci NOT NULL,
  `edu_qualification` text COLLATE utf8_unicode_ci NOT NULL,
  `experience` text COLLATE utf8_unicode_ci NOT NULL,
  `add_requirements` text COLLATE utf8_unicode_ci NOT NULL,
  `other_benefits` text COLLATE utf8_unicode_ci NOT NULL,
  `apply_procedure` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=50 ;

--
-- Dumping data for table `jobdetails`
--

INSERT INTO `jobdetails` (`id`, `employer_id`, `jobcategory_id`, `job_title`, `vacancy`, `job_location`, `salary`, `applying_last_date`, `job_responsibility`, `edu_qualification`, `experience`, `add_requirements`, `other_benefits`, `apply_procedure`, `created_at`, `updated_at`) VALUES
(33, 6, 1, 'Sign in problem in laravel using multiauth', '2', '', '', '', '', '', '', '', '', '', '2015-04-28 23:52:50', '2015-04-28 23:52:50'),
(37, 6, 3, 'Sign in problem in laravel using multiauth', '2', 'dsfdf', '', '', '', '', '', '', '', '', '2015-04-29 13:53:24', '2015-04-29 13:53:24'),
(38, 6, 7, 'Sign in problem in laravel using multiauth', '2', 'dsfdf', '', '', '', '', '', '', '', '', '2015-04-29 13:54:41', '2015-04-29 13:54:41'),
(39, 6, 5, 'djhfajkshd', '2', '', '', '', '', '', '', '', '', '', '2015-04-29 23:28:00', '2015-04-29 23:28:01'),
(40, 6, 7, 'Sign in problem in laravel using multiauth', '2', '', '', '', '', '', '', '', '', '', '2015-04-30 02:28:08', '2015-04-30 02:28:08'),
(41, 6, 4, 'Sign in problem in laravel using multiauth', '', '', '', '', '', '', '', '', '', '', '2015-04-30 02:39:15', '2015-04-30 02:39:15'),
(42, 6, 4, 'sss', '', '', '', '', '', '', '', '', '', '', '2015-04-30 02:41:38', '2015-04-30 02:41:38'),
(43, 6, 1, 'Sign in problem in laravel using multiauth', '2', '', '', '', '', '', '', '', '', '', '2015-05-05 20:08:54', '2015-05-05 20:08:55'),
(44, 6, 5, 'sss', '2', '', '', '', '', '', '', '', 'xdsfads.\r\nsdadfg.\r\n', '', '2015-05-05 21:09:42', '2015-05-05 21:09:42'),
(45, 6, 7, 'Sign in problem in laravel using multiauth', '2', 'dsfdf', '123456', '13 May, 2015', 'fdgggf.', 'fdgfdgf.\r\ngfhgfhgfgh.', 'hgjhgj.\r\ncvnvvhj', 'gfghfh.\r\nhghjgj.', 'fhgfhg.\r\nhgjhgj.', '', '2015-05-06 08:11:49', '2015-05-09 22:30:09'),
(48, 6, 2, 'Sign in problem in laravel using multiauth', '2', '', '', '', 'jhjhk.jfksak', 'jdhkjfas.dhjsakh.', '', '', '', '', '2015-05-07 09:31:38', '2015-05-07 09:31:38'),
(49, 6, 10, 'Sign in problem in laravel using multiauth', '2', 'dsfdf', '', '', '', '', '', '', '', '', '2015-05-14 03:41:28', '2015-05-22 00:02:29');

-- --------------------------------------------------------

--
-- Table structure for table `jobseekers`
--

CREATE TABLE IF NOT EXISTS `jobseekers` (
`id` int(10) unsigned NOT NULL,
  `fullname` text COLLATE utf8_unicode_ci NOT NULL,
  `mothersname` text COLLATE utf8_unicode_ci NOT NULL,
  `fathersname` text COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `marital` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `religion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dateofbirth` text COLLATE utf8_unicode_ci NOT NULL,
  `nationalid` text COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `password_temp` text COLLATE utf8_unicode_ci NOT NULL,
  `code` text COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` text COLLATE utf8_unicode_ci NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `jobseekers`
--

INSERT INTO `jobseekers` (`id`, `fullname`, `mothersname`, `fathersname`, `gender`, `marital`, `religion`, `dateofbirth`, `nationalid`, `email`, `password`, `password_temp`, `code`, `remember_token`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Monirul Islam', 'dsafd', 'asdf', '-1', '-1', '', '-1', '', 'sajibcste@gmail.com', '$2y$10$m2Cup1XEhBM.v7sIYtyWiOJNnREcoM5GwMIqa3EoVaFRrLouM8NN6', '', '', '', 1, '2015-04-17 11:41:45', '2015-04-17 11:42:09'),
(2, 'Nazmul Islam', 'Ruhul Amin', 'Parveen', 'M', '1', '', 'M', '', '07sajib@gmail.com', '$2y$10$o1c7k8kONChg26u/RUKcVOrJICF8ISpeYlR/vxJ8IOy4WTvECHEO6', '', '', '', 1, '2015-04-26 05:54:30', '2015-05-17 14:24:34'),
(3, 'Nahidul Islam', 'Karimul Islam', 'ksjafldl', 'Male', '1', 'Islam', 'Male', '19911916765000048', 'shajibpers@gmail.com', '$2y$10$oq2Vf6dSGAEnhzgjyAKh9uNoIoZM/Q91JCxaowbyY1a7xs/P0hLk6', '', '', '', 1, '2015-05-18 06:00:32', '2015-05-18 06:09:08');

-- --------------------------------------------------------

--
-- Table structure for table `job_detail_jobseeker`
--

CREATE TABLE IF NOT EXISTS `job_detail_jobseeker` (
`id` int(10) unsigned NOT NULL,
  `jobseeker_id` int(11) NOT NULL,
  `job_detail_id` int(11) NOT NULL,
  `salary` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `job_detail_jobseeker`
--

INSERT INTO `job_detail_jobseeker` (`id`, `jobseeker_id`, `job_detail_id`, `salary`, `created_at`, `updated_at`) VALUES
(1, 1, 49, 123, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 1, 49, 12345, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 1, 43, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 1, 43, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 1, 49, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 2, 49, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 2, 49, 20000, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 3, 49, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE IF NOT EXISTS `languages` (
`id` int(10) unsigned NOT NULL,
  `jobseeker_id` int(10) unsigned NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `reading` text COLLATE utf8_unicode_ci NOT NULL,
  `writting` text COLLATE utf8_unicode_ci NOT NULL,
  `speaking` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=32 ;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `jobseeker_id`, `title`, `reading`, `writting`, `speaking`, `created_at`, `updated_at`) VALUES
(20, 1, 'gg', 'High', 'High', 'High', '2015-04-23 12:42:49', '2015-04-23 12:42:49'),
(21, 1, 'a', 'High', 'High', 'High', '2015-04-23 12:43:32', '2015-04-23 12:43:32'),
(22, 1, 'b', 'High', 'High', 'High', '2015-04-23 12:43:32', '2015-04-23 12:43:32'),
(23, 1, 'as', 'High', 'High', 'High', '2015-04-23 12:43:54', '2015-04-23 12:43:54'),
(24, 1, 'as', 'Medium', 'Medium', 'Medium', '2015-04-23 12:43:54', '2015-04-23 12:43:54'),
(25, 1, 'cv', 'Low', 'Low', 'Low', '2015-04-23 12:43:54', '2015-04-23 12:43:54'),
(26, 2, 'sd', 'High', 'High', 'High', '2015-04-26 05:57:44', '2015-04-26 05:57:44'),
(27, 2, 'a', 'Medium', 'Medium', 'Medium', '2015-04-26 05:57:44', '2015-04-26 05:57:44'),
(28, 2, 'b', 'High', 'Low', 'High', '2015-04-26 05:57:44', '2015-04-26 05:57:44'),
(29, 2, 'vvv', 'High', 'High', 'High', '2015-04-26 05:57:55', '2015-04-26 05:57:55'),
(30, 1, 'w', 'High', 'High', 'High', '2015-04-26 10:16:02', '2015-04-26 10:16:02'),
(31, 1, 's', 'High', 'High', 'High', '2015-04-26 10:16:02', '2015-04-26 10:16:02');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_04_07_100742_create_password_reminders_table', 1),
('2015_04_07_101744_create_jobseekers_table', 1),
('2015_04_17_152305_create_qualifications_table', 1),
('2015_04_18_053305_create_proqualifications_table', 2),
('2015_04_18_054728_create_trainings_table', 3),
('2015_04_19_180531_create_employments_table', 4),
('2015_04_19_202814_create_others_table', 5),
('2015_04_20_160041_create_language_table', 6),
('2015_04_23_185443_create_references_table', 7),
('2015_04_26_045531_create_photograph_table', 8),
('2015_04_27_154351_create_employers_table', 9),
('2015_04_27_154459_create_empcompanies_table', 9),
('2015_04_28_152102_create_jobdetails_table', 10),
('2015_04_29_045357_create_jobcategory_table', 11),
('2015_05_16_201326_create_submitted_jobs_table', 12),
('2015_05_17_091702_create_job_detail_jobseeker_table', 13),
('2015_05_17_160927_create_job_detail_jobseeker_table', 14),
('2015_05_18_140547_add_major_subject_to_qualifications_table', 15),
('2015_05_18_144724_add_major_to_qualifications_table', 16),
('2015_05_19_152937_add_marks_to_qualifications_table', 17),
('2015_05_22_041055_create_universities_table', 18);

-- --------------------------------------------------------

--
-- Table structure for table `others`
--

CREATE TABLE IF NOT EXISTS `others` (
`id` int(10) unsigned NOT NULL,
  `jobseeker_id` int(10) unsigned NOT NULL,
  `category_name` text COLLATE utf8_unicode_ci NOT NULL,
  `field_of_spec` text COLLATE utf8_unicode_ci NOT NULL,
  `skill_desc` text COLLATE utf8_unicode_ci NOT NULL,
  `extra_curri` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `others`
--

INSERT INTO `others` (`id`, `jobseeker_id`, `category_name`, `field_of_spec`, `skill_desc`, `extra_curri`, `created_at`, `updated_at`) VALUES
(1, 1, '', '961', 'xzcx', 'dsfsd', '2015-04-23 09:23:32', '2015-04-23 09:23:32'),
(2, 1, '', '961', '', '', '2015-04-23 10:29:09', '2015-04-23 10:29:10'),
(3, 1, '', '961', '', '', '2015-04-23 10:30:42', '2015-04-23 10:30:42'),
(4, 1, '', '961', '', '', '2015-04-23 10:30:55', '2015-04-23 10:30:55'),
(5, 1, '', '961', 'dsfsfd', 'sdfgsdddddddddddddddddddd', '2015-04-23 11:12:52', '2015-04-23 11:12:53'),
(6, 2, '', '961', 'sac', 'sdfas', '2015-04-26 05:57:18', '2015-04-26 05:57:18');

-- --------------------------------------------------------

--
-- Table structure for table `password_reminders`
--

CREATE TABLE IF NOT EXISTS `password_reminders` (
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photograph`
--

CREATE TABLE IF NOT EXISTS `photograph` (
`id` int(10) unsigned NOT NULL,
  `jobseeker_id` int(10) unsigned NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `photograph`
--

INSERT INTO `photograph` (`id`, `jobseeker_id`, `image`, `created_at`, `updated_at`) VALUES
(13, 1, 'img/products/1430070259.jpg', '2015-04-26 11:44:20', '2015-04-26 11:44:20');

-- --------------------------------------------------------

--
-- Table structure for table `proqualifications`
--

CREATE TABLE IF NOT EXISTS `proqualifications` (
`id` int(10) unsigned NOT NULL,
  `jobseeker_id` int(10) unsigned NOT NULL,
  `certification` text COLLATE utf8_unicode_ci NOT NULL,
  `institute` text COLLATE utf8_unicode_ci NOT NULL,
  `location` text COLLATE utf8_unicode_ci NOT NULL,
  `from` text COLLATE utf8_unicode_ci NOT NULL,
  `to` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=32 ;

--
-- Dumping data for table `proqualifications`
--

INSERT INTO `proqualifications` (`id`, `jobseeker_id`, `certification`, `institute`, `location`, `from`, `to`, `created_at`, `updated_at`) VALUES
(19, 1, 'sas', 'sdgfz', 'fdsgf', 'Thursday, 2 April, 2015', 'Friday, 3 April, 2015', '2015-04-18 09:27:52', '2015-04-18 09:27:52'),
(20, 1, 'sas', 'sdgfz', 'fdsgf', 'Tuesday, 31 March, 2015', 'Wednesday, 1 April, 2015', '2015-04-19 02:22:33', '2015-04-19 02:22:34'),
(21, 1, 'sas', 'sdgfz', 'fdsgf', 'Friday, 24 April, 2015', 'Friday, 24 April, 2015', '2015-04-23 10:31:57', '2015-04-23 10:31:57'),
(22, 2, 'sdafdsa', 'dsdsd', '', 'Wednesday, 1 April, 2015', 'Thursday, 2 April, 2015', '2015-04-26 05:55:55', '2015-04-26 05:55:55'),
(23, 2, 'sdafdsa', 'dsdsd', '', 'Wednesday, 1 April, 2015', 'Friday, 3 April, 2015', '2015-04-26 08:23:48', '2015-04-26 08:23:48'),
(24, 1, 'sas', 'sdgfz', 'fdsgf', 'Wednesday, 6 May, 2015', 'Saturday, 9 May, 2015', '2015-05-18 23:31:05', '2015-05-18 23:31:07'),
(25, 1, 'sas', 'sdgfz', 'fdsgf', 'Wednesday, 6 May, 2015', 'Saturday, 9 May, 2015', '2015-05-18 23:31:07', '2015-05-18 23:31:07'),
(26, 1, '111111111', '1111111', '111111111', 'Wednesday, 20 May, 2015', 'Thursday, 21 May, 2015', '2015-05-18 23:52:50', '2015-05-18 23:52:50'),
(27, 1, 'sas', 'sdgfz', 'fdsgf', 'Thursday, 21 May, 2015', 'Thursday, 21 May, 2015', '2015-05-19 00:10:09', '2015-05-19 00:10:09'),
(28, 1, '111', 'sdgfz', 'fdsgf', 'Thursday, 21 May, 2015', 'Saturday, 23 May, 2015', '2015-05-19 00:10:55', '2015-05-19 00:10:55'),
(29, 1, 'sas', 'sdgfz', 'fdsgf', 'Wednesday, 27 May, 2015', 'Friday, 15 May, 2015', '2015-05-19 00:17:42', '2015-05-19 00:17:42'),
(30, 1, '2', '2', '2', 'Wednesday, 20 May, 2015', 'Thursday, 21 May, 2015', '2015-05-19 01:10:56', '2015-05-19 01:10:56'),
(31, 1, '3333', '3333', '33333', 'Thursday, 21 May, 2015', 'Thursday, 21 May, 2015', '2015-05-19 01:16:09', '2015-05-19 01:16:09');

-- --------------------------------------------------------

--
-- Table structure for table `qualifications`
--

CREATE TABLE IF NOT EXISTS `qualifications` (
`id` int(10) unsigned NOT NULL,
  `jobseeker_id` int(10) unsigned NOT NULL,
  `level_of_education` text COLLATE utf8_unicode_ci NOT NULL,
  `exam_title` text COLLATE utf8_unicode_ci NOT NULL,
  `major` text COLLATE utf8_unicode_ci NOT NULL,
  `institute_name` text COLLATE utf8_unicode_ci NOT NULL,
  `insOther` text COLLATE utf8_unicode_ci NOT NULL,
  `result` text COLLATE utf8_unicode_ci NOT NULL,
  `marks` text COLLATE utf8_unicode_ci NOT NULL,
  `year_of_passing` text COLLATE utf8_unicode_ci NOT NULL,
  `duration` text COLLATE utf8_unicode_ci NOT NULL,
  `achievement` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=51 ;

--
-- Dumping data for table `qualifications`
--

INSERT INTO `qualifications` (`id`, `jobseeker_id`, `level_of_education`, `exam_title`, `major`, `institute_name`, `insOther`, `result`, `marks`, `year_of_passing`, `duration`, `achievement`, `created_at`, `updated_at`) VALUES
(42, 1, 'Secondary', 'SSC', 'Science', 'BGAB', '', '5', '5', '2007', '2', '', '2015-05-21 23:14:04', '2015-05-21 23:14:04'),
(43, 1, 'Higher Secondary', 'HSC', 'Science', 'CVC', '', '5', '5', '2009', '2', '', '2015-05-21 23:14:51', '2015-05-21 23:14:51'),
(44, 1, 'Bachelor/Honors', 'Bsc.(Engg.)', 'Computer Science', '2', '', 'First Division', '80', '2015', '2', '', '2015-05-21 23:15:23', '2015-05-21 23:15:23'),
(45, 1, 'Secondary', 'HSC', 'Science', '', '', 'First Division', '50', '2000', '2', '', '2015-05-21 23:33:16', '2015-05-21 23:33:16'),
(46, 1, 'Secondary', 'HSC', 'Science', 'Array', '', 'First Division', '50', '2000', '2', '', '2015-05-21 23:35:57', '2015-05-21 23:35:57'),
(47, 1, 'Secondary', 'HSC', 'Science', 'Array', '', 'First Division', '50', '2000', '2', '', '2015-05-21 23:36:07', '2015-05-21 23:36:07'),
(48, 1, 'Secondary', 'HSC', 'Science', '', '', 'First Division', '70', '2000', '2', '', '2015-05-22 02:48:00', '2015-05-22 02:48:00'),
(49, 1, 'Secondary', 'HSC', 'Science', '', '', 'First Division', '22', '2000', '2', '', '2015-05-22 02:50:18', '2015-05-22 02:50:18'),
(50, 1, 'Secondary', 'HSC', 'Science', '', '', 'First Division', '22', '2000', '2', '', '2015-05-22 02:52:24', '2015-05-22 02:52:24');

-- --------------------------------------------------------

--
-- Table structure for table `references`
--

CREATE TABLE IF NOT EXISTS `references` (
`id` int(10) unsigned NOT NULL,
  `jobseeker_id` int(10) unsigned NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `organization` text COLLATE utf8_unicode_ci NOT NULL,
  `designation` text COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `mobile` text COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `relation` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `references`
--

INSERT INTO `references` (`id`, `jobseeker_id`, `name`, `organization`, `designation`, `address`, `mobile`, `email`, `relation`, `created_at`, `updated_at`) VALUES
(7, 1, '11', '11', '11', '11', '01623704258', '', 'Relative', '2015-04-26 09:11:14', '2015-04-26 09:11:14'),
(8, 1, '22', '2', '2', '2', '01623704258', '', 'Relative', '2015-04-26 10:24:35', '2015-04-26 10:24:35');

-- --------------------------------------------------------

--
-- Table structure for table `trainings`
--

CREATE TABLE IF NOT EXISTS `trainings` (
`id` int(10) unsigned NOT NULL,
  `jobseeker_id` int(10) unsigned NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `topics` text COLLATE utf8_unicode_ci NOT NULL,
  `institute` text COLLATE utf8_unicode_ci NOT NULL,
  `location` text COLLATE utf8_unicode_ci NOT NULL,
  `country` text COLLATE utf8_unicode_ci NOT NULL,
  `year` text COLLATE utf8_unicode_ci NOT NULL,
  `duration` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `trainings`
--

INSERT INTO `trainings` (`id`, `jobseeker_id`, `title`, `topics`, `institute`, `location`, `country`, `year`, `duration`, `created_at`, `updated_at`) VALUES
(16, 1, 'dsfasd', 'dsadf', 'NSTU', 'Comilla', 'BD', '2000', '2', '2015-04-19 03:39:14', '2015-04-19 03:39:14'),
(17, 2, 'kjasdkfj', 'jdskjak', 'jskfdjk', 'ksjkfj', 'kjskdjfkl', '2000', '3', '2015-04-26 05:56:13', '2015-04-26 05:56:13'),
(18, 2, 'kjasdkfj', 'jdskjak', 'jskfdjk', '', 'kjskdjfkl', '2000', '3', '2015-04-26 08:24:09', '2015-04-26 08:24:09');

-- --------------------------------------------------------

--
-- Table structure for table `universities`
--

CREATE TABLE IF NOT EXISTS `universities` (
`id` int(10) unsigned NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `universities`
--

INSERT INTO `universities` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Ahsanullah University Of Science & Technology University', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Noakhali Science & Technology University', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Name Of School', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Name Of College', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `empcompanies`
--
ALTER TABLE `empcompanies`
 ADD PRIMARY KEY (`id`), ADD KEY `empcompanies_jobseeker_id_index` (`employer_id`);

--
-- Indexes for table `employers`
--
ALTER TABLE `employers`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employments`
--
ALTER TABLE `employments`
 ADD PRIMARY KEY (`id`), ADD KEY `employments_jobseeker_id_index` (`jobseeker_id`);

--
-- Indexes for table `jobcategories`
--
ALTER TABLE `jobcategories`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobdetails`
--
ALTER TABLE `jobdetails`
 ADD PRIMARY KEY (`id`), ADD KEY `jobdetails_jobseeker_id_index` (`employer_id`), ADD KEY `jobdetails_category_id_index` (`jobcategory_id`);

--
-- Indexes for table `jobseekers`
--
ALTER TABLE `jobseekers`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_detail_jobseeker`
--
ALTER TABLE `job_detail_jobseeker`
 ADD PRIMARY KEY (`id`), ADD KEY `job_detail_jobseeker_jobseeker_id_index` (`jobseeker_id`), ADD KEY `job_detail_jobseeker_job_detail_id_index` (`job_detail_id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
 ADD PRIMARY KEY (`id`), ADD KEY `languages_jobseeker_id_index` (`jobseeker_id`);

--
-- Indexes for table `others`
--
ALTER TABLE `others`
 ADD PRIMARY KEY (`id`), ADD KEY `others_jobseeker_id_index` (`jobseeker_id`);

--
-- Indexes for table `password_reminders`
--
ALTER TABLE `password_reminders`
 ADD KEY `password_reminders_type_index` (`type`), ADD KEY `password_reminders_email_index` (`email`), ADD KEY `password_reminders_token_index` (`token`);

--
-- Indexes for table `photograph`
--
ALTER TABLE `photograph`
 ADD PRIMARY KEY (`id`), ADD KEY `photograph_jobseeker_id_index` (`jobseeker_id`);

--
-- Indexes for table `proqualifications`
--
ALTER TABLE `proqualifications`
 ADD PRIMARY KEY (`id`), ADD KEY `proqualifications_jobseeker_id_index` (`jobseeker_id`);

--
-- Indexes for table `qualifications`
--
ALTER TABLE `qualifications`
 ADD PRIMARY KEY (`id`), ADD KEY `qualifications_jobseeker_id_index` (`jobseeker_id`);

--
-- Indexes for table `references`
--
ALTER TABLE `references`
 ADD PRIMARY KEY (`id`), ADD KEY `references_jobseeker_id_index` (`jobseeker_id`);

--
-- Indexes for table `trainings`
--
ALTER TABLE `trainings`
 ADD PRIMARY KEY (`id`), ADD KEY `trainings_jobseeker_id_index` (`jobseeker_id`);

--
-- Indexes for table `universities`
--
ALTER TABLE `universities`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `empcompanies`
--
ALTER TABLE `empcompanies`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `employers`
--
ALTER TABLE `employers`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `employments`
--
ALTER TABLE `employments`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `jobcategories`
--
ALTER TABLE `jobcategories`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `jobdetails`
--
ALTER TABLE `jobdetails`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `jobseekers`
--
ALTER TABLE `jobseekers`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `job_detail_jobseeker`
--
ALTER TABLE `job_detail_jobseeker`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `others`
--
ALTER TABLE `others`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `photograph`
--
ALTER TABLE `photograph`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `proqualifications`
--
ALTER TABLE `proqualifications`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `qualifications`
--
ALTER TABLE `qualifications`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `references`
--
ALTER TABLE `references`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `trainings`
--
ALTER TABLE `trainings`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `universities`
--
ALTER TABLE `universities`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

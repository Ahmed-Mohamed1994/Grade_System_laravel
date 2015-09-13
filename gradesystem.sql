-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2015 at 11:18 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gradesystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `birth_date` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `mail` text COLLATE utf8_unicode_ci NOT NULL,
  `phone` text COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `profile_image` text COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `address`, `password`, `birth_date`, `mail`, `phone`, `date`, `profile_image`, `remember_token`) VALUES
(2, 'dsfhs', 'djklgjdfj', '$2y$10$/VNMx9QoiRxmu57nt5iTXukCyt2EypqG7Mzo.yIeMNfNjVC5xvvSi', '05/04/2015', 'hassan', '21312391309jj', '0000-00-00 00:00:00', 'lwwD9v_0c7b49a56510.original.jpeg', 'RRA98hdu8xdkrwj2a4re54aiS4sCiwkcETU7cXDaSFBGhdz0ly6pcfnW711D');

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE IF NOT EXISTS `assignments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `student_id` int(10) unsigned NOT NULL,
  `course_id` int(10) unsigned NOT NULL,
  `sub_teacher_id` int(10) unsigned NOT NULL,
  `class_assignment` text COLLATE utf8_unicode_ci NOT NULL,
  `student_assignment` text COLLATE utf8_unicode_ci NOT NULL,
  `deadline_day` date NOT NULL,
  `deadline_time` time NOT NULL,
  `assignment_grade` double NOT NULL,
  `student_grade` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `assignments_student_id_foreign` (`student_id`),
  KEY `assignments_course_id_foreign` (`course_id`),
  KEY `assignments_sub_teacher_id_foreign` (`sub_teacher_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `department` int(10) unsigned NOT NULL,
  `course_code` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `hours` int(10) unsigned NOT NULL,
  `course_type` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `course_department_foreign` (`department`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`, `department`, `course_code`, `date`, `hours`, `course_type`) VALUES
(1, 'internet application', 1, '123', '0000-00-00 00:00:00', 3, 'Yes'),
(2, 'information system', 1, '124', '0000-00-00 00:00:00', 3, 'Yes'),
(3, 'hossamm', 1, '123', '0000-00-00 00:00:00', 2, 'Yes'),
(4, 'hossamm', 1, '213', '0000-00-00 00:00:00', 2, 'Yes'),
(5, 'hossamm', 1, '23', '0000-00-00 00:00:00', 2, 'Yes'),
(6, 'hossamm', 1, '321', '0000-00-00 00:00:00', 2, 'Yes'),
(7, 'hossamm', 1, '123', '0000-00-00 00:00:00', 2, 'Yes'),
(8, 'asd', 1, '999', '0000-00-00 00:00:00', 3, 'Yes'),
(9, 'hossamm', 1, '32', '0000-00-00 00:00:00', 2, 'Yes'),
(10, 'asd', 1, '123', '0000-00-00 00:00:00', 2, 'Yes'),
(11, 'hossamm', 1, '123', '0000-00-00 00:00:00', 2, 'Yes'),
(12, 'asd', 1, '23', '0000-00-00 00:00:00', 2, 'Yes'),
(13, 'hossamm', 1, '123', '0000-00-00 00:00:00', 2, 'Yes'),
(14, 'hossamm', 1, '234', '0000-00-00 00:00:00', 2, 'No'),
(15, 'hossamm', 1, '213', '0000-00-00 00:00:00', 2, 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `course_fields`
--

CREATE TABLE IF NOT EXISTS `course_fields` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `course_id` int(10) unsigned NOT NULL,
  `field_id` int(10) unsigned NOT NULL,
  `value` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `course_fields_field_id_foreign` (`field_id`),
  KEY `course_fields_course_id_foreign` (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=44 ;

--
-- Dumping data for table `course_fields`
--

INSERT INTO `course_fields` (`id`, `course_id`, `field_id`, `value`, `created_at`, `updated_at`) VALUES
(36, 5, 1, '123', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 5, 2, '123', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 11, 2, '123', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 11, 2, '123', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 10, 2, '55', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 3, 2, '123', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 1, 2, '123', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `shortcut_of_department` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`, `shortcut_of_department`, `date`) VALUES
(1, 'information system', 'IS', '0000-00-00 00:00:00'),
(2, 'computer scince', 'cs', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `fields`
--

CREATE TABLE IF NOT EXISTS `fields` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `fields`
--

INSERT INTO `fields` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'midterm', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'assignment', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gpa`
--

CREATE TABLE IF NOT EXISTS `gpa` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `student_id` int(10) unsigned NOT NULL,
  `gpa_value` double NOT NULL,
  `gpa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `gpa_student_id_foreign` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE IF NOT EXISTS `grade` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `teacher_id` int(10) unsigned NOT NULL,
  `student_id` int(10) unsigned NOT NULL,
  `course_field_id` int(10) unsigned NOT NULL,
  `Grade_value_field` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `grade_teacher_id_foreign` (`teacher_id`),
  KEY `grade_student_id_foreign` (`student_id`),
  KEY `grade_course_field_id_foreign` (`course_field_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `id`
--

CREATE TABLE IF NOT EXISTS `id` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `num` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `id`
--

INSERT INTO `id` (`id`, `num`, `created_at`, `updated_at`) VALUES
(1, 20120000, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
('2015_03_16_224624_Create_admin_table', 1),
('2015_03_31_124106_create_students_table', 1),
('2015_03_31_124341_create_id_table', 1),
('2015_03_31_124423_create_teacher_table', 1),
('2015_03_31_173447_create_department_table', 1),
('2015_03_31_200316_create_professor_table', 1),
('2015_04_03_125320_create_slider', 1),
('2015_04_14_154802_create_course_table', 1),
('2015_04_14_170639_create_fields', 1),
('2015_04_14_170452_create_course_fields', 2),
('2015_04_14_171141_create_Grade_table', 2),
('2015_04_14_181450_create_student_total_grade_table', 2),
('2015_04_14_182050_create_prof_course_table', 2),
('2015_04_14_182412_create_sub_teacher_table', 2),
('2015_04_14_182713_create_register_course_section_table', 2),
('2015_04_14_183006_create_assignments_table', 2),
('2015_04_15_103223_create_gpa_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `professor`
--

CREATE TABLE IF NOT EXISTS `professor` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile_image` text COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `professor`
--

INSERT INTO `professor` (`id`, `name`, `Address`, `Date`, `password`, `Phone`, `Mail`, `profile_image`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'hossam', 'jasldkjasldj', '10/02/2017', '$2y$10$laJ6BT0CEOmtKSqbefA8Ru2pXHNHa2nFmoshFgv97SWGJjURXeqG6', '21312391309', 'hossam', 'S8IpUq_0c7b49a56510.original.jpeg', 't775O1ry023OjMwcSFAKRz5nWqpStQLpIjdduXDCo9V4xi9GKNkLvvS6w8kQ', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `prof_course`
--

CREATE TABLE IF NOT EXISTS `prof_course` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `prof_id` int(10) unsigned NOT NULL,
  `course_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `prof_course_course_id_foreign` (`course_id`),
  KEY `prof_course_prof_id_foreign` (`prof_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=39 ;

--
-- Dumping data for table `prof_course`
--

INSERT INTO `prof_course` (`id`, `prof_id`, `course_id`, `created_at`, `updated_at`) VALUES
(32, 2, 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 2, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 2, 11, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 2, 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 2, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 2, 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `register_course_section`
--

CREATE TABLE IF NOT EXISTS `register_course_section` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `student_id` int(10) unsigned NOT NULL,
  `sub_teacher_id` int(10) unsigned DEFAULT NULL,
  `course_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `register_course_section_course_id_foreign` (`course_id`),
  KEY `register_course_section_student_id_foreign` (`student_id`),
  KEY `register_course_section_sub_teacher_id_foreign` (`sub_teacher_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=64 ;

--
-- Dumping data for table `register_course_section`
--

INSERT INTO `register_course_section` (`id`, `student_id`, `sub_teacher_id`, `course_id`, `created_at`, `updated_at`) VALUES
(56, 1, NULL, 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 1, 111, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 1, 115, 11, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 1, 117, 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 1, 119, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 1, NULL, 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 1, NULL, 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 1, 111, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'EMmzMJ_2014_the_maze_runner-1366x768.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'DR2BAH_0c7b49a56510.original.jpeg', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `level` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `Department` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stu_id` int(11) NOT NULL,
  `profile_image` text COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `Address`, `Date`, `password`, `level`, `Department`, `stu_id`, `profile_image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hossam Emmam', 'jasldkjasldj', '02/02/2010', '$2y$10$d9KZqJjxzJ0W/Vw.Pm078O3LB4IR/RSclVMFMVLUe1jSOyxsCkPW.', '1', 'General', 20120001, 'c3AEgh_actress_shraddha_kapoor-1366x768.jpg', 'Mif7UmVdi7BeALUsdXSHyUWpL5bSPCF9avls1Bhj227CWTalEd8E1vbZ1BX5', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'hassan', 'sdasda', '07/16/2015', '$2y$10$FUaGeNx1YpIo6yUc710WNOlnYK.zzqok622Wm6LVPZiWic/FSzo6m', '1', 'General', 20120002, '', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'qdadasdas', 'wqdasda', '07/15/2015', '123456', '1', 'General', 20120003, '', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `student_total_grade`
--

CREATE TABLE IF NOT EXISTS `student_total_grade` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `student_id` int(10) unsigned NOT NULL,
  `course_id` int(10) unsigned NOT NULL,
  `total_grade` double NOT NULL,
  `Grade_GPA` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `student_total_grade_course_id_foreign` (`course_id`),
  KEY `student_total_grade_student_id_foreign` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sub_teacher`
--

CREATE TABLE IF NOT EXISTS `sub_teacher` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `prof_course_id` int(10) unsigned NOT NULL,
  `teacher_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `sub_teacher_prof_course_id_foreign` (`prof_course_id`),
  KEY `sub_teacher_teacher_id_foreign` (`teacher_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=123 ;

--
-- Dumping data for table `sub_teacher`
--

INSERT INTO `sub_teacher` (`id`, `prof_course_id`, `teacher_id`, `created_at`, `updated_at`) VALUES
(111, 33, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(112, 33, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(113, 33, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(114, 33, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(115, 34, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(116, 34, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(117, 35, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(118, 35, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(119, 36, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(120, 36, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(121, 36, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(122, 37, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile_image` text COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `Address`, `Date`, `password`, `Phone`, `Mail`, `profile_image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hassan Alaa', 'jasldkjasldj', '04/20/2015', '$2y$10$2/v1gGAHUh.cCJF45UFa7Ogr3CdwReTlf0mDY2VDijtMZIOon9ao6', '23132', 'hassan', 'Eg08gs_angelina_jolie_hot-wide.jpg', 'ol37hVxMwHpUuRIotWye5S0GBC7azQzXs6LIQmAoXDiHBsZcaJXP7Jyf2Dyh', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'hossammqa', 'jasldkjasldj', '07/09/2015', '123456', '12312', 'hosam', '', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'internet application', 'jasldkjasldj', '09/25/2017', '$2y$10$FUaGeNx1YpIo6yUc710WNOlnYK.zzqok622Wm6LVPZiWic/FSzo6m', '23132sa', 'dsf', '', '2kPTrn1yPEM1to2OU1sOaNk1G3NVlHzhuVRc3GczArQZ0h6uxRu4WYOz2EwX', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assignments`
--
ALTER TABLE `assignments`
  ADD CONSTRAINT `assignments_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `assignments_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `assignments_sub_teacher_id_foreign` FOREIGN KEY (`sub_teacher_id`) REFERENCES `sub_teacher` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_department_foreign` FOREIGN KEY (`department`) REFERENCES `department` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `course_fields`
--
ALTER TABLE `course_fields`
  ADD CONSTRAINT `course_fields_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `course_fields_field_id_foreign` FOREIGN KEY (`field_id`) REFERENCES `fields` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gpa`
--
ALTER TABLE `gpa`
  ADD CONSTRAINT `gpa_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `grade`
--
ALTER TABLE `grade`
  ADD CONSTRAINT `grade_course_field_id_foreign` FOREIGN KEY (`course_field_id`) REFERENCES `course_fields` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `grade_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `grade_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `prof_course`
--
ALTER TABLE `prof_course`
  ADD CONSTRAINT `prof_course_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prof_course_prof_id_foreign` FOREIGN KEY (`prof_id`) REFERENCES `professor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `register_course_section`
--
ALTER TABLE `register_course_section`
  ADD CONSTRAINT `register_course_section_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `register_course_section_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `register_course_section_sub_teacher_id_foreign` FOREIGN KEY (`sub_teacher_id`) REFERENCES `sub_teacher` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_total_grade`
--
ALTER TABLE `student_total_grade`
  ADD CONSTRAINT `student_total_grade_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_total_grade_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sub_teacher`
--
ALTER TABLE `sub_teacher`
  ADD CONSTRAINT `sub_teacher_prof_course_id_foreign` FOREIGN KEY (`prof_course_id`) REFERENCES `prof_course` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sub_teacher_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

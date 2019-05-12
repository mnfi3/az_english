-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 10, 2019 at 12:56 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asmu`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

DROP TABLE IF EXISTS `abouts`;
CREATE TABLE IF NOT EXISTS `abouts` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` varchar(255) DEFAULT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `campus_lives`
--

DROP TABLE IF EXISTS `campus_lives`;
CREATE TABLE IF NOT EXISTS `campus_lives` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `conferences`
--

DROP TABLE IF EXISTS `conferences`;
CREATE TABLE IF NOT EXISTS `conferences` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `address` varchar(255) DEFAULT NULL,
  `phone1` varchar(255) DEFAULT NULL,
  `phone2` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
CREATE TABLE IF NOT EXISTS `departments` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `faculty_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `faculty_id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 7, 'Islamic Science', '2019-05-07 14:00:14', '2019-05-07 14:00:14', NULL),
(2, 1, 'Agronomy and Medical Plants', '2019-05-07 14:00:14', '2019-05-07 14:00:14', NULL),
(3, 5, 'Arabic Language and Literature', '2019-05-07 14:00:51', '2019-05-07 14:00:51', NULL),
(4, 2, 'Biology', '2019-05-07 14:00:51', '2019-05-07 14:00:51', NULL),
(5, 1, 'Biotechnology', '2019-05-07 14:00:51', '2019-05-07 14:00:51', NULL),
(6, 6, 'Chemical Engineering', '2019-05-07 14:00:51', '2019-05-07 14:00:51', NULL),
(7, 2, 'Chemistry', '2019-05-07 14:00:51', '2019-05-07 14:00:51', NULL),
(8, 6, 'Civil Engineering', '2019-05-07 14:00:51', '2019-05-07 14:00:51', NULL),
(9, 4, 'Computer Engineering', '2019-05-07 14:00:51', '2019-05-07 14:00:51', NULL),
(10, 3, 'Education', '2019-05-07 14:00:51', '2019-05-07 14:00:51', NULL),
(11, 3, 'Educational Management', '2019-05-07 14:00:51', '2019-05-07 14:00:51', NULL),
(12, 6, 'Electrical Engineering', '2019-05-07 14:00:51', '2019-05-07 14:00:51', NULL),
(13, 5, 'English Language and Literature', '2019-05-07 14:00:51', '2019-05-07 14:00:51', NULL),
(14, 3, 'Family Studies', '2019-05-07 14:00:51', '2019-05-07 14:00:51', NULL),
(15, 7, 'History of Islamic Nations and Civilization', '2019-05-07 14:00:51', '2019-05-07 14:00:51', NULL),
(16, 3, 'Information Science', '2019-05-07 14:00:51', '2019-05-07 14:00:51', NULL),
(17, 7, 'islamic Jurisprudence and law', '2019-05-07 14:00:51', '2019-05-07 14:00:51', NULL),
(18, 7, 'Islamic Philosophy', '2019-05-07 14:00:51', '2019-05-07 14:00:51', NULL),
(19, 4, 'IT and Computer Engineering', '2019-05-07 14:00:51', '2019-05-07 14:00:51', NULL),
(20, 2, 'Mathematics', '2019-05-07 14:00:51', '2019-05-07 14:00:51', NULL),
(21, 6, 'Mechanical Engineering', '2019-05-07 14:00:51', '2019-05-07 14:00:51', NULL),
(22, 6, 'llurgy and material Engineering', '2019-05-07 14:00:51', '2019-05-07 14:00:51', NULL),
(23, 5, 'Persian Language and Literature', '2019-05-07 14:00:51', '2019-05-07 14:00:51', NULL),
(24, 2, 'Physics', '2019-05-07 14:00:51', '2019-05-07 14:00:51', NULL),
(25, 1, 'Plant Protection', '2019-05-07 14:00:51', '2019-05-07 14:00:51', NULL),
(26, 3, 'Psychology', '2019-05-07 14:00:51', '2019-05-07 14:00:51', NULL),
(27, 7, 'Quran and  Hadith', '2019-05-07 14:00:51', '2019-05-07 14:00:51', NULL),
(28, 7, 'Religions and Mysticim', '2019-05-07 14:00:52', '2019-05-07 14:00:52', NULL),
(29, 3, 'Sport Science', '2019-05-07 14:00:52', '2019-05-07 14:00:52', NULL),
(30, 7, 'Law', '2019-05-07 14:00:52', '2019-05-07 14:00:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

DROP TABLE IF EXISTS `documents`;
CREATE TABLE IF NOT EXISTS `documents` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `documentable_id` int(11) DEFAULT NULL,
  `documentable_type` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

DROP TABLE IF EXISTS `faculties`;
CREATE TABLE IF NOT EXISTS `faculties` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`id`, `name`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Agriculture', '<p><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Myriad Pro&quot;,sans-serif\"><span style=\"color:black\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Established in 2002 by admitting undergraduate students in Plant Protection, the Faculty of Agriculture currently consists of three departments offering degree courses both at undergraduate and postgraduate levels in Plant Protection, Biotechnology, and Medicinal Plants.</span></span></span></span></span></p>', '2019-05-07 12:50:20', '2019-05-07 12:50:20', NULL),
(2, 'Basic Science', '<p><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Myriad Pro&quot;,sans-serif\"><span style=\"color:black\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">The Faculty of Basic Sciences began its activities as the first faculty of the university in 1989 by admitting 38 undergraduate students in Mathematics. Three more departments, Chemistry, Physics, and Biology were established later. Currently, the fac&shy;ulty has more than 1700 students studying various BSc. MSc. and PhD degree courses.</span></span></span></span></span></p>', '2019-05-07 12:51:11', '2019-05-07 12:51:11', NULL),
(3, 'Education and Psychology', '<p><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Myriad Pro&quot;,sans-serif\"><span style=\"color:black\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">The Faculty of Education and Psychology, officially established in 2004, currently consists of five departments offering undergraduate and postgraduate degree courses for 1000 students.</span></span></span></span></span></p>', '2019-05-07 12:51:54', '2019-05-07 12:51:54', NULL),
(4, 'IT and Computer Engineering', '<p><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Myriad Pro&quot;,sans-serif\"><span style=\"color:black\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">The Faculty of Information Technology and Computer Engineering officially started its academic activities in 2005 taking in the first group of its students in IT Engineering. Since 2015, the faculty is offering MSc. degree course in Software Engineering as well.</span></span></span></span></span></p>', '2019-05-07 12:53:42', '2019-05-07 12:53:42', NULL),
(5, 'Literature and Humanities', '<p><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Myriad Pro&quot;,sans-serif\"><span style=\"color:black\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">The Faculty of Literature and Humanities began its academic activities in 1989 by admitting 36 undergraduate students in Persian Language and Literature. Departments of English Language &amp; Literature, and Arabic Language &amp; Literature began offering undergraduate courses in 1990 and 1991 respectively.</span></span></span></span></span></p>', '2019-05-07 12:54:22', '2019-05-07 12:54:22', NULL),
(6, 'Technology and Engineering', '<p><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Myriad Pro&quot;,sans-serif\"><span style=\"color:black\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">The Faculty of Technology and Engineering started its academic activities in 1994, admitting undergraduate students in Civil Engineering and a year later in Electrical (Power) Engineering. Currently, undergraduate and postgraduate courses are offered in Mechanical Engineering, Civil Engineering, Electrical Engineering, Metallurgy &amp; Materials Engineering, and Chemical Engineering.</span></span></span></span></span></p>', '2019-05-07 12:55:09', '2019-05-07 12:55:09', NULL),
(7, 'Theology and Islamic Science', '<p><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Myriad Pro&quot;,sans-serif\"><span style=\"color:black\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">The Faculty of Technology and Engineering started its academic activities in 1994, admitting undergraduate students in Civil Engineering and a year later in Electrical (Power) Engineering. Currently, undergraduate and postgraduate courses are offered in Mechanical Engineering, Civil Engineering, Electrical Engineering, Metallurgy &amp; Materials Engineering, and Chemical Engineering.</span></span></span></span></span></p>', '2019-05-07 12:56:08', '2019-05-07 12:56:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `imageable_id` int(11) DEFAULT NULL,
  `imageable_type` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `imageable_id`, `imageable_type`, `path`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'App\\Faculty', 'uploads/images/2019/05/27k.jpg', '2019-05-07 17:20:20', '2019-05-07 17:20:20', NULL),
(2, 2, 'App\\Faculty', 'uploads/images/2019/05/68p.jpg', '2019-05-07 17:21:11', '2019-05-07 17:21:11', NULL),
(3, 3, 'App\\Faculty', 'uploads/images/2019/05/26r.jpg', '2019-05-07 17:21:54', '2019-05-07 17:21:54', NULL),
(4, 5, 'App\\Faculty', 'uploads/images/2019/05/72a.jpg', '2019-05-07 17:24:22', '2019-05-07 17:24:22', NULL),
(5, 6, 'App\\Faculty', 'uploads/images/2019/05/88en.jpg', '2019-05-07 17:25:09', '2019-05-07 17:25:09', NULL),
(6, 7, 'App\\Faculty', 'uploads/images/2019/05/24el.jpg', '2019-05-07 17:26:08', '2019-05-07 17:26:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

DROP TABLE IF EXISTS `links`;
CREATE TABLE IF NOT EXISTS `links` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `l_l_c_forms`
--

DROP TABLE IF EXISTS `l_l_c_forms`;
CREATE TABLE IF NOT EXISTS `l_l_c_forms` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `masters`
--

DROP TABLE IF EXISTS `masters`;
CREATE TABLE IF NOT EXISTS `masters` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `department_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `speciality` varchar(255) DEFAULT NULL,
  `rank` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `cv_link` varchar(400) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=272 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `masters`
--

INSERT INTO `masters` (`id`, `department_id`, `name`, `speciality`, `rank`, `email`, `cv_link`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Ofoghi, Davoud', NULL, NULL, 'ac.ofoghi@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1062', '2019-05-07 14:16:28', '2019-05-07 14:16:28', NULL),
(2, 1, 'Mirmahmoudi, Seyyed Hadi', NULL, NULL, 'ac.mirmahmoudi@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1268', '2019-05-07 14:16:28', '2019-05-07 14:16:28', NULL),
(3, 1, 'Naghdi, Hosein', NULL, NULL, 'h.naghdi@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1273', '2019-05-07 14:16:28', '2019-05-07 14:16:28', NULL),
(4, 1, 'Kazemkhani, Habibollah', NULL, NULL, 'kazemkhani@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1297', '2019-05-07 14:16:28', '2019-05-07 14:16:28', NULL),
(5, 1, 'Karimzade, Taher', NULL, NULL, 'taherkarimzadeh@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1234', '2019-05-07 14:16:28', '2019-05-07 14:16:28', NULL),
(6, 2, 'Azizpour, Kambiz', NULL, NULL, 'ac.azizpour@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1197', '2019-05-07 14:16:28', '2019-05-07 14:16:28', NULL),
(7, 2, 'Sadeghi, Amir Reza', NULL, NULL, 'sbakhtvari@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/214?Author_fa=%D8%B5%D8%A7%D8%AF%D9%82%DB%8C%20%D8%A8%D8%AE%D8%AA%D9%88%D8%B1%DB%8C%20%D8%A7%D9%85%DB%8C%D8%B1%20%D8%B1%D8%B6%D8%A7&Author_en=Sadeghi%2C%20Amir%20Reza', '2019-05-07 14:16:28', '2019-05-07 14:16:28', NULL),
(8, 2, 'Mohammadi, Hamid', NULL, NULL, 'hmohammadi@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/626?Author_fa=%D9%85%D8%AD%D9%85%D8%AF%DB%8C%20%D8%AD%D9%85%DB%8C%D8%AF&Author_en=Mohammadi%2C%20Hamid', '2019-05-07 14:16:28', '2019-05-07 14:16:28', NULL),
(9, 2, 'Vojodi, Lamia', NULL, NULL, 'ac.vojoudi@azaruniv.ac.ir\n', 'http://azaruniv.sciexplore.ir/Profiles/Author/684?Author_fa=%D9%88%D8%AC%D9%88%D8%AF%DB%8C%20%D9%85%D9%87%D8%B1%D8%A8%D8%A7%D9%86%DB%8C%20%D9%84%D9%85%DB%8C%D8%A7%0D%0A&Author_en=Vojodi%2C%20Lamia', '2019-05-07 14:16:28', '2019-05-07 14:33:50', NULL),
(10, 2, 'Sarabi, Vahid', NULL, NULL, 'sarabi20@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/871?Author_fa=%D8%B3%D8%B1%D8%A7%D8%A8%DB%8C%20%D9%88%D8%AD%DB%8C%D8%AF&Author_en=Sarabi%2C%20Vahid', '2019-05-07 14:16:28', '2019-05-07 14:16:28', NULL),
(11, 2, 'Kamran, Rana Valizadeh', NULL, NULL, 'r.valizadeh@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/919?Author_fa=%D9%88%D9%84%DB%8C%20%D8%B2%D8%A7%D8%AF%D9%87%20%DA%A9%D8%A7%D9%85%D8%B1%D8%A7%D9%86%20%D8%B1%D8%B9%D9%86%D8%A7&Author_en=Kamran%2C%20Rana%20Valizadeh', '2019-05-07 14:16:28', '2019-05-07 14:16:28', NULL),
(12, 2, 'Hazrati, Saeid', NULL, NULL, 'saeid.hazrati@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/403?Author_fa=%D8%AD%D8%B6%D8%B1%D8%AA%DB%8C%20%DB%8C%D8%A7%D8%AF%DA%A9%D9%88%D8%B1%DB%8C%20%D8%B3%D8%B9%DB%8C%D8%AF&Author_en=Hazrati%2C%20Saeid', '2019-05-07 14:16:28', '2019-05-07 14:16:28', NULL),
(13, 3, 'Ahmadzade, Parviz', NULL, NULL, 'ac.ahmadzadeh@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1050', '2019-05-07 14:16:28', '2019-05-07 14:16:28', NULL),
(14, 3, 'Eslami, Mohammadreza', NULL, NULL, 'ac.eslami@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1058', '2019-05-07 14:16:28', '2019-05-07 14:16:28', NULL),
(15, 3, 'Esmailzade, Hasan', NULL, NULL, 'ac.esmailzadeh@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1060', '2019-05-07 14:16:28', '2019-05-07 14:16:28', NULL),
(16, 3, 'Amshasfand, Ja\'far', NULL, NULL, 'j-amshasfand@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1070', '2019-05-07 14:16:28', '2019-05-07 14:16:28', NULL),
(17, 3, 'Bakhshi, Maryam', NULL, NULL, 'ac.bakhshi@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1081', '2019-05-07 14:16:28', '2019-05-07 14:16:28', NULL),
(18, 3, 'Hajizade, Mahin', NULL, NULL, 'hajizadeh@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1105', '2019-05-07 14:16:28', '2019-05-07 14:16:28', NULL),
(19, 3, 'Damadi, Javad', NULL, NULL, 'ac.damadi@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1127', '2019-05-07 14:16:28', '2019-05-07 14:16:28', NULL),
(20, 3, 'Sayyadani, Ali', NULL, NULL, 'a.sayadani@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1186', '2019-05-07 14:16:28', '2019-05-07 14:16:28', NULL),
(21, 3, 'Gheibi, Abdolahad', NULL, NULL, 'abdolahad@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1207', '2019-05-07 14:16:28', '2019-05-07 14:16:28', NULL),
(22, 3, 'Ghahremani, Ali', NULL, NULL, 'ghahramani@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1230', '2019-05-07 14:16:28', '2019-05-07 14:16:28', NULL),
(23, 3, 'Moghadam Mottaghi, Amir', NULL, NULL, 'A.moghaddam@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1260', '2019-05-07 14:16:28', '2019-05-07 14:16:28', NULL),
(24, 3, 'Valizade, Hamid', NULL, NULL, 'hvalizadeh@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1285', '2019-05-07 14:16:28', '2019-05-07 14:16:28', NULL),
(25, 4, 'Chaparzadeh, Nader', NULL, NULL, 'nchapar@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/215?Author_fa=%DA%86%D8%A7%D9%BE%D8%A7%D8%B1%D8%B2%D8%A7%D8%AF%D9%87%20%D9%86%D8%A7%D8%AF%D8%B1&Author_en=Chaparzadeh%2C%20Nader', '2019-05-07 14:16:28', '2019-05-07 14:16:28', NULL),
(26, 4, 'Najavand, Saeed', NULL, NULL, 's.najavand@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/219?Author_fa=%D9%86%DA%98%D8%A7%D9%88%D9%86%D8%AF%20%D8%B3%D8%B9%DB%8C%D8%AF&Author_en=Najavand%2C%20Saeed', '2019-05-07 14:16:28', '2019-05-07 14:16:28', NULL),
(27, 4, 'Pouladi, Nasser', NULL, NULL, 'n.pouladi@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/259?Author_fa=%D9%BE%D9%88%D9%84%D8%A7%D8%AF%DB%8C%20%D9%86%D8%A7%D8%B5%D8%B1&Author_en=Pouladi%2C%20Nasser', '2019-05-07 14:16:28', '2019-05-07 14:16:28', NULL),
(28, 4, 'Zarandi, Leila', NULL, NULL, 'zarandi@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/394?Author_fa=%D8%B2%D8%B1%D9%86%D8%AF%DB%8C%20%D9%85%DB%8C%D8%A7%D9%86%D8%AF%D9%88%D8%A7%D8%A8%20%D9%84%DB%8C%D9%84%D8%A7&Author_en=Zarandi%2C%20L.', '2019-05-07 14:16:28', '2019-05-07 14:16:28', NULL),
(29, 4, 'Namvar Aghdash, Simin', NULL, NULL, 'ac.namvar@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/447?Author_fa=%D9%86%D8%A7%D9%85%D9%88%D8%B1%20%D8%A2%D8%BA%D8%AF%D8%A7%D8%B4%20%D8%B3%DB%8C%D9%85%DB%8C%D9%86&Author_en=Namvar%20Aghdash%2C%20Simin', '2019-05-07 14:16:28', '2019-05-07 14:16:28', NULL),
(30, 4, 'Mostafa, Ebadi Nahari', NULL, NULL, 'm.ebadi@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/460?Author_fa=%D8%B9%D8%A8%D8%A7%D8%AF%DB%8C%20%D9%86%D9%87%D8%A7%D8%B1%DB%8C%20%D9%85%D8%B5%D8%B7%D9%81%DB%8C&Author_en=Mostafa%2C%20Ebadi%20Nahari', '2019-05-07 14:16:28', '2019-05-07 14:16:28', NULL),
(31, 4, 'Moniri Javadhesari, Solmaz', NULL, NULL, 's.moniri@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/512?Author_fa=%D9%85%D9%86%DB%8C%D8%B1%DB%8C%20%D8%AC%D9%88%D8%A7%D8%AF%20%D8%AD%D8%B5%D8%A7%D8%B1%DB%8C%20%D8%B3%D9%88%D9%84%D9%85%D8%A7%D8%B2&Author_en=Moniri%20Javadhesari%2C%20Solmaz', '2019-05-07 14:16:28', '2019-05-07 14:16:28', NULL),
(32, 4, 'Pazhang, Mohammad', NULL, NULL, 'pazhang@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/528?Author_fa=%D9%BE%D8%A7%DA%98%D9%86%DA%AF%20%D9%85%D8%AD%D9%85%D8%AF&Author_en=Pazhang%2C%20Mohammad', '2019-05-07 14:16:28', '2019-05-07 14:16:28', NULL),
(33, 4, 'Farajzadeh, Davoud', NULL, NULL, 'farajzadeh@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/650?Author_fa=%D9%81%D8%B1%D8%AC%20%D8%B2%D8%A7%D8%AF%D9%87%20%D8%AF%D8%A7%D9%88%D8%AF&Author_en=Farajzadeh%2C%20Davoud', '2019-05-07 14:16:28', '2019-05-07 14:16:28', NULL),
(34, 4, 'Valipour, Masoumeh', NULL, NULL, 'm.valipour@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/712?Author_fa=%D9%88%D9%84%DB%8C%20%D9%BE%D9%88%D8%B1%20%D9%85%D8%B9%D8%B5%D9%88%D9%85%D9%87&Author_en=Valipour%2C%20Masoumeh', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(35, 4, 'Kordi, Fatemeh Mahmoodi', NULL, NULL, 'ac.mahmoodi@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/79?Author_fa=%D9%85%D8%AD%D9%85%D9%88%D8%AF%DB%8C%20%DA%A9%D8%B1%D8%AF%DB%8C%20%D9%81%D8%A7%D8%B7%D9%85%D9%87&Author_en=Kordi%2C%20Fatemeh%20Mahmoodi', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(36, 4, 'Zadeh Hosseingholi, Elaheh', NULL, NULL, 'golnaz7983@ gmail. com', 'http://azaruniv.sciexplore.ir/Profiles/Author/851?Author_fa=%D8%B2%D8%A7%D8%AF%D9%87%20%D8%AD%D8%B3%DB%8C%D9%86%D9%82%D9%84%DB%8C%20%D8%A7%D9%84%D9%87%D9%87&Author_en=Zadeh%20Hosseingholi%2C%20Elaheh', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(37, 4, 'Ghaffarian, Sara', NULL, NULL, 's.ghaffarian@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=3124', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(38, 5, 'Pazhouhandeh, Maghsoud', NULL, NULL, 'pazhouhandeh@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/131?Author_fa=%D9%BE%DA%98%D9%88%D9%87%D9%86%D8%AF%D9%87%20%D9%85%D9%82%D8%B5%D9%88%D8%AF&Author_en=Pazhouhandeh%2C%20Maghsoud', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(39, 5, 'Tarinejad, Ali Reza', NULL, NULL, 'tarinejad@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/238?Author_fa=%D8%AA%D8%A7%D8%B1%DB%8C%20%D9%86%DA%98%D8%A7%D8%AF%20%D8%B9%D9%84%DB%8C%D8%B1%D8%B6%D8%A7&Author_en=Tarinejad%2C%20Ali%20Reza', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(40, 5, 'Ahmadabadi, Mohammad', NULL, NULL, 'm.ahmadabadi@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/327?Author_fa=%D8%A7%D8%AD%D9%85%D8%AF%D8%A2%D8%A8%D8%A7%D8%AF%DB%8C%20%D9%85%D8%AD%D9%85%D8%AF&Author_en=Ahmadabadi%2C%20Mohammad', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(41, 5, 'Alizadeh, Alireza', NULL, NULL, 'ac.aalizadeh@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=2545', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(42, 5, 'Majidi, Mohammad', NULL, NULL, 'majidi@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1244', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(43, 6, 'Samira, Aghbolaghi', NULL, NULL, '', NULL, '2019-05-07 14:16:29', '2019-05-07 14:33:50', NULL),
(44, 6, 'Maryam, Hosseini', NULL, NULL, '', NULL, '2019-05-07 14:16:29', '2019-05-07 14:33:50', NULL),
(45, 6, 'Beygi Khosrowshahi, Younes', NULL, NULL, 'y.beygi@azaruniv.ac.ir\n', 'http://azaruniv.sciexplore.ir/Profiles/Author/462?Author_fa=%D8%A8%DB%8C%DA%AF%DB%8C%20%D8%AE%D8%B3%D8%B1%D9%88%D8%B4%D8%A7%D9%87%DB%8C%20%DB%8C%D9%88%D9%86%D8%B3%0D%0A&Author_en=Beygi%20Khosrowshahi%2C%20Younes', '2019-05-07 14:16:29', '2019-05-07 14:33:50', NULL),
(46, 7, 'Mahdiyeh, Safarpour', NULL, NULL, '', NULL, '2019-05-07 14:16:29', '2019-05-07 14:33:50', NULL),
(47, 7, 'Abdorreza, Abri', NULL, NULL, '', NULL, '2019-05-07 14:16:29', '2019-05-07 14:33:50', NULL),
(48, 7, 'Amani-Ghadim, Ali Reza', NULL, NULL, 'amani.gh@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/4?Author_fa=%D8%A7%D9%85%D8%A7%D9%86%DB%8C%20%D9%82%D8%AF%DB%8C%D9%85%20%D8%B9%D9%84%DB%8C%D8%B1%D8%B6%D8%A7&Author_en=Amani-Ghadim%2C%20Ali%20Reza', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(49, 7, 'Khoshmaram, Leila', NULL, NULL, 'khoshmaram@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/41?Author_fa=%D8%AE%D9%88%D8%B4%D9%85%D8%B1%D8%A7%D9%85%20%D9%84%DB%8C%D9%84%D8%A7&Author_en=Khoshmaram%2C%20Leila', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(50, 7, 'Razmi, Habib', NULL, NULL, 'h.razmi@azaruniv.ac.ir\n', 'http://azaruniv.sciexplore.ir/Profiles/Author/62?Author_fa=%D8%B1%D8%B2%D9%85%DB%8C%20%D8%AD%D8%A8%DB%8C%D8%A8&Author_en=Razmi%2C%20Habib', '2019-05-07 14:16:29', '2019-05-07 14:33:50', NULL),
(51, 7, 'Abdolmohammad-Zadeh, Hossein', NULL, NULL, 'h.abdol@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/67?Author_fa=%D8%B9%D8%A8%D8%AF%D8%A7%D9%84%D9%85%D8%AD%D9%85%D8%AF%D8%B2%D8%A7%D8%AF%D9%87%20%D8%AD%D8%B3%DB%8C%D9%86&Author_en=Abdolmohammad-Zadeh%2C%20Hossein', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(52, 7, 'Ayazi, Zahra', NULL, NULL, 'ayazi@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/71?Author_fa=%D8%A7%DB%8C%D8%A7%D8%B2%DB%8C%20%D8%AE%D9%88%D8%B1%D8%AF%D9%87%20%D8%A8%D9%84%D8%A7%D8%BA%20%D8%B2%D9%87%D8%B1%D8%A7&Author_en=Ayazi%2C%20Zahra', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(53, 7, 'Hosaini Sadr, Moayad', NULL, NULL, 'sadr@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/112?Author_fa=%D8%AD%D8%B3%DB%8C%D9%86%DB%8C%20%D8%B5%D8%AF%D8%B1%20%D9%85%D8%A4%DB%8C%D8%AF%0D%0A&Author_en=Hosaini%20Sadr%2C%20Moayad', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(54, 7, 'Mahkam, Mehrdad', NULL, NULL, 'mahkam@azaruniv.ac.ir\n', 'http://azaruniv.sciexplore.ir/Profiles/Author/116?Author_fa=%D9%85%D9%87%DA%A9%D8%A7%D9%85%20%D9%85%D9%87%D8%B1%D8%AF%D8%A7%D8%AF&Author_en=Mahkam%2C%20Mehrdad', '2019-05-07 14:16:29', '2019-05-07 14:33:50', NULL),
(55, 7, 'Salamat-Ahangari, Rahman', NULL, NULL, 'r.salamat@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/138?Author_fa=%D8%B3%D9%84%D8%A7%D9%85%D8%AA%20%D8%A2%D9%87%D9%86%DA%AF%D8%B1%DB%8C%20%D8%B1%D8%AD%D9%85%D8%A7%D9%86&Author_en=Salamat-Ahangari%2C%20Rahman', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(56, 7, 'Assadi, Mohammad Galeh', NULL, NULL, 'mg-assadi@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/204?Author_fa=%D9%82%D9%84%D8%B9%D9%87%20%D8%A7%D8%B3%D8%AF%DB%8C%20%D9%85%D8%AD%D9%85%D8%AF&Author_en=Assadi%2C%20Mohammad%20Galeh', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(57, 7, 'Seyed Ahmadian, Seyed Masood', NULL, NULL, 'seyedahmadian@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/227?Author_fa=%D8%B3%DB%8C%D8%AF%20%D8%A7%D8%AD%D9%85%D8%AF%DB%8C%D8%A7%D9%86%20%D8%B3%DB%8C%D8%AF%20%D9%85%D8%B3%D8%B9%D9%88%D8%AF&Author_en=Seyed%20Ahmadian%2C%20Seyed%20Masood', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(58, 7, 'Farshi Azhar, Fahimeh', NULL, NULL, 'f.farshi@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/274?Author_fa=%D9%81%D8%B1%D8%B4%DB%8C%20%D8%A7%D8%B2%D9%87%D8%B1%20%D9%81%D9%87%DB%8C%D9%85%D9%87&Author_en=Farshi%20Azhar%2C%20Fahimeh', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(59, 7, 'Matin, Amir Abbas', NULL, NULL, 'matin@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/301?Author_fa=%D9%85%D8%AA%DB%8C%D9%86%20%D8%A7%D9%85%DB%8C%D8%B1%20%D8%B9%D8%A8%D8%A7%D8%B3&Author_en=Matin%2C%20Amir%20Abbas', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(60, 7, 'Heidari, Hassan', NULL, NULL, 'hassan_heidari@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/317?Author_fa=%D8%AD%DB%8C%D8%AF%D8%B1%DB%8C%20%D8%AD%D8%B3%D9%86&Author_en=Heidari%2C%20Hassan', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(61, 7, 'Habibi, Biuck A.', NULL, NULL, 'B.HABIBI@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/341?Author_fa=%D8%AD%D8%A8%DB%8C%D8%A8%DB%8C%20%D8%A2%D8%BA%D8%AC%D9%87%20%D8%A7%D9%88%D8%A8%D9%87%20%D8%A8%DB%8C%D9%88%DA%A9&Author_en=Habibi%2C%20Biuck%20A.', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(62, 7, 'Shaghaghi, Zohreh', NULL, NULL, 'shaghaghi@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/342?Author_fa=%D8%B4%D9%82%D8%A7%D9%82%DB%8C%20%D8%B3%D8%B1%D8%A7%D8%B3%DA%A9%D8%A7%D9%86%D8%B1%D9%88%D8%AF%20%D8%B2%D9%87%D8%B1%D9%87&Author_en=Shaghaghi%2C%20Zohreh', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(63, 7, 'Zonouz, Adeleh Moshtaghi', NULL, NULL, 'ac.moshtagi@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/469?Author_fa=%D9%85%D8%B4%D8%AA%D9%82%DB%8C%20%D8%B2%D9%86%D9%88%D8%B2%20%D8%B9%D8%A7%D8%AF%D9%84%D9%87&Author_en=Zonouz%2C%20Adeleh%20Moshtaghi', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(64, 7, 'Valizadeh, Hassan', NULL, NULL, 'h-valizadeh@azaruniv.ac.ir\n', 'http://azaruniv.sciexplore.ir/Profiles/Author/518?Author_fa=%D9%88%D9%84%DB%8C%20%D8%B2%D8%A7%D8%AF%D9%87%20%D8%AD%D8%B3%D9%86&Author_en=Valizadeh%2C%20Hassan', '2019-05-07 14:16:29', '2019-05-07 14:33:50', NULL),
(65, 7, 'Mohammad-Rezaei, Rahim', NULL, NULL, 'r.mohammadrezaei@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/522?Author_fa=%D9%85%D8%AD%D9%85%D8%AF%D8%B1%D8%B6%D8%A7%D8%A6%DB%8C%20%D8%B1%D8%AD%DB%8C%D9%85&Author_en=Mohammad-Rezaei%2C%20Rahim', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(66, 7, 'Bagheri, Massoumeh', NULL, NULL, 'm.bagheri@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/524?Author_fa=%D8%A8%D8%A7%D9%82%D8%B1%DB%8C%20%D9%85%D8%B9%D8%B5%D9%88%D9%85%D9%87&Author_en=Bagheri%2C%20Massoumeh', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(67, 7, 'Soltani, Behzad', NULL, NULL, 'soltani@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/578?Author_fa=%D8%B3%D9%84%D8%B7%D8%A7%D9%86%DB%8C%20%D8%AF%D9%87%D8%AE%D9%88%D8%A7%D8%B1%D9%82%D8%A7%D9%86%DB%8C%20%D8%A8%D9%87%D8%B2%D8%A7%D8%AF&Author_en=Soltani%2C%20Behzad', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(68, 7, 'Mollaei, Saeed', NULL, NULL, 's.mollaei@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/610?Author_fa=%D9%85%D9%84%D8%A7%D8%A6%DB%8C%20%D8%B3%D8%B9%DB%8C%D8%AF&Author_en=Mollaei%2C%20Saeed', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(69, 7, 'Sardroodi, Jaber Jahanbin', NULL, NULL, 'jsardroodi@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/54?Author_fa=%D8%AC%D9%87%D8%A7%D9%86%20%D8%A8%DB%8C%D9%86%20%D8%B3%D8%B1%D8%AF%D8%B1%D9%88%D8%AF%DB%8C%20%D8%AC%D8%A7%D8%A8%D8%B1&Author_en=Sardroodi%2C%20Jaber%20Jahanbin', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(70, 7, 'Rezvani, Zolfaghar', NULL, NULL, 'zrezvani@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/262?Author_fa=%D8%B1%D8%B6%D9%88%D8%A7%D9%86%DB%8C%20%D8%B0%D9%88%D8%A7%D9%84%D9%81%D9%82%D8%A7%D8%B1%0D%0A&Author_en=Rezvani%2C%20Zolfaghar', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(71, 7, 'Hashempour, Hossein', NULL, NULL, 'hashempour@azaruniv.ac.ir\n', 'http://azaruniv.sciexplore.ir/Profiles/Author/576?Author_fa=%D9%87%D8%A7%D8%B4%D9%85%20%D9%BE%D9%88%D8%B1%20%D8%AD%D8%B3%DB%8C%D9%86%0D%0A&Author_en=Hashempour%2C%20Hossein', '2019-05-07 14:16:29', '2019-05-07 14:33:50', NULL),
(72, 7, 'Zareipour, Reza', NULL, NULL, 'zareipour@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1148', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(73, 8, 'Aghajani, Hamed Farshbaf', NULL, NULL, 'h.farshbaf@azaruniv.ac.ir\n', 'http://azaruniv.sciexplore.ir/Profiles/Author/207?Author_fa=%D9%81%D8%B1%D8%B4%D8%A8%D8%A7%D9%81%20%D8%A2%D9%82%D8%A7%D8%AC%D8%A7%D9%86%DB%8C%20%D8%AD%D8%A7%D9%85%D8%AF%0D%0A&Author_en=Aghajani%2C%20Hamed%20Farshbaf', '2019-05-07 14:16:29', '2019-05-07 14:33:50', NULL),
(74, 8, 'Kardan, Nazila', NULL, NULL, 'n.kardan@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/111?Author_fa=%DA%A9%D8%A7%D8%B1%D8%AF%D8%A7%D9%86%20%D8%AD%D9%84%D9%88%D8%A7%D8%A6%DB%8C%20%D9%86%D8%A7%D8%B2%DB%8C%D9%84%D8%A7%0D%0A&Author_en=Kardan%2C%20Nazila', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(75, 8, 'Shervani-Tabar, Bahman', NULL, NULL, 'b.shervani@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/235?Author_fa=شروانی%20تبار%20بهمن&Author_en=Shervani-Tabar%2C%20B.', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(76, 8, 'Soltani-Jigheh, Hossein', NULL, NULL, 'hsoltani@azaruniv.ac.ir\n', 'http://azaruniv.sciexplore.ir/Profiles/Author/412?Author_fa=%D8%B3%D9%84%D8%B7%D8%A7%D9%86%DB%8C%20%D8%AC%DB%8C%D9%82%D9%87%20%D8%AD%D8%B3%DB%8C%D9%86&Author_en=Soltani-Jigheh%2C%20Hossein', '2019-05-07 14:16:29', '2019-05-07 14:33:50', NULL),
(77, 8, 'Hoveidae, Nader', NULL, NULL, 'hoveidaei@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/507?Author_fa=%D9%87%D9%88%DB%8C%D8%AF%D8%A7%D8%A6%DB%8C%20%D9%86%D8%A7%D8%AF%D8%B1%0D%0A&Author_en=Hoveidae%2C%20Nader', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(78, 8, 'Fallahi, Abdolhossein', NULL, NULL, 'fallahi@azaruniv.ac.ir\n', 'http://azaruniv.sciexplore.ir/Profiles/Author/537?Author_fa=%D9%81%D9%84%D8%A7%D8%AD%DB%8C%20%D8%B9%D8%A8%D8%AF%D8%A7%D9%84%D8%AD%D8%B3%DB%8C%D9%86%0D%0A&Author_en=Fallahi%2C%20Abdolhossein', '2019-05-07 14:16:29', '2019-05-07 14:33:50', NULL),
(79, 8, 'Dini, Mehdi', NULL, NULL, 'm.dini@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/589?Author_fa=%D8%AF%DB%8C%D9%86%DB%8C%20%D9%85%D9%87%D8%AF%DB%8C%0D%0A&Author_en=Dini%2C%20Mehdi', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(80, 8, 'Emami Azadi, M. Reza', NULL, NULL, 'dr.emami@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/670?Author_fa=%D8%A7%D9%85%D8%A7%D9%85%DB%8C%20%D8%A2%D8%B2%D8%A7%D8%AF%DB%8C%20%D9%85%D8%AD%D9%85%D8%AF%D8%B1%D8%B6%D8%A7&Author_en=Emami%20Azadi%2C%20M.%20Reza', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(81, 8, 'Saeidifarzad, Bahram', NULL, NULL, 'b.saeidifarzad@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/2463?Author_fa=%D8%B3%D8%B9%DB%8C%D8%AF%DB%8C%20%D9%81%D8%B1%D8%B2%D8%A7%D8%AF%20%D8%A8%D9%87%D8%B1%D8%A7%D9%85&Author_en=Saeidifarzad%2C%20Bahram', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(82, 8, 'Rezaei, Amirhasan', NULL, NULL, 'rezaei.ah@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1333', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(83, 8, 'Hoveidaei, Nader', NULL, NULL, 'hoveidaei@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1334', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(84, 8, 'Asadi, Ebrahim', NULL, NULL, 'asadi@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1055', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(85, 8, 'Entezari, Alireza', NULL, NULL, 'a.entezari@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1073', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(86, 9, 'Farajzadeh, Nasser', NULL, NULL, 'n.farajzadeh@azaruniv.ac.ir\n', 'http://azaruniv.sciexplore.ir/Profiles/Author/52?Author_fa=%D9%81%D8%B1%D8%AC%20%D8%B2%D8%A7%D8%AF%D9%87%20%D9%86%D8%A7%D8%B5%D8%B1%0D%0A&Author_en=Farajzadeh%2C%20Nacer', '2019-05-07 14:16:29', '2019-05-07 14:33:50', NULL),
(87, 9, 'Bouyer, Asgarali', NULL, NULL, 'a.bouyer@azaruniv.ac.ir\n', 'http://azaruniv.sciexplore.ir/Profiles/Author/276?Author_fa=%D8%A8%D9%88%DB%8C%D8%B1%20%D8%B9%D8%B3%DA%AF%D8%B1%20%D8%B9%D9%84%DB%8C&Author_en=Bouyer%2C%20Asgarali', '2019-05-07 14:16:29', '2019-05-07 14:33:50', NULL),
(88, 10, 'Mesrabadi, Javad', NULL, NULL, 'mesrabadi@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/423?Author_fa=%D9%85%D8%B5%D8%B1%D8%A2%D8%A8%D8%A7%D8%AF%DB%8C%20%D8%AC%D9%88%D8%A7%D8%AF%0D%0A&Author_en=Mesrabadi%2C%20Javad', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(89, 10, 'Mahdiuon, Rouhollah', NULL, NULL, 'rmahdiuon@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/529?Author_fa=%D9%85%D9%87%D8%AF%DB%8C%D9%88%D9%86%20%D8%B1%D9%88%D8%AD%20%D8%A7%D9%84%D9%87&Author_en=Mahdiuon%2C%20Rouhollah', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(90, 10, 'Piri, Moosa', NULL, NULL, 'm.piry@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/2473?Author_fa=%D9%BE%DB%8C%D8%B1%DB%8C%20%D9%85%D9%88%D8%B3%DB%8C&Author_en=Piri%2C%20Moosa', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(91, 10, 'Asadian, Sirous', NULL, NULL, 'asadian@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1056', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(92, 10, 'Barghi, Isa', NULL, NULL, 'i.barghi@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1082', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(93, 10, 'Habibi, Ramin', NULL, NULL, 'habibi912@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1107', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(94, 10, 'Zavvar, Taghi', NULL, NULL, 'zavvar@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1152', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(95, 10, 'Sheikhalizade, Siyavash', NULL, NULL, 'ac.shaikhalizadeh@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1172', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(96, 10, 'Farid, Abolfazl', NULL, NULL, 'farid614@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1217', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(97, 10, 'Golmohammadnejad, Gholamreza', NULL, NULL, 'dr.golmohammadnajad@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1238', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(98, 10, 'Yarigoli, Behboud', NULL, NULL, 'b.yargholi@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1287', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(99, 11, 'Ghasemzadeh, Abolfazl', NULL, NULL, 'ghasemzadeh@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1224', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(100, 11, 'Yarmohammadzade, Peyman', NULL, NULL, 'Dr.peyman.ymz@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1286', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(101, 11, 'Rafiei, Mohsen', NULL, NULL, 'm.rafiei@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1143', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(102, 12, 'Behjat, Vahid', NULL, NULL, 'behjat@azaruniv.ac.ir\n', 'http://azaruniv.sciexplore.ir/Profiles/Author/14?Author_fa=%D8%A8%D9%87%D8%AC%D8%AA%20%D9%88%D8%AD%DB%8C%D8%AF%0D%0A&Author_en=Behjat%2C%20Vahid', '2019-05-07 14:16:29', '2019-05-07 14:33:50', NULL),
(103, 12, 'Safari, Amin', NULL, NULL, 'safari@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/24?Author_fa=%D8%B5%D9%81%D8%B1%DB%8C%20%D8%A7%D9%85%DB%8C%D9%86%0D%0A&Author_en=Safari%2C%20Amin', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(104, 12, 'Ajami, Ali', NULL, NULL, 'ajami@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/319?Author_fa=%D8%B9%D8%AC%D9%85%DB%8C%20%D8%A7%D8%B3%D9%81%D9%86%DA%AF%D8%B1%D9%87%20%D8%B9%D9%84%DB%8C&Author_en=Ajami%2C%20Ali', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(105, 12, 'Najafi-Ravadanegh, Sajad', NULL, NULL, 's.najafi@azaruniv.ac.ir\n', 'http://azaruniv.sciexplore.ir/Profiles/Author/414?Author_fa=%D9%86%D8%AC%D9%81%DB%8C%20%D8%B1%D9%88%D8%A7%D8%AF%D8%A7%D9%86%D9%82%20%D8%B3%D8%AC%D8%A7%D8%AF&Author_en=Najafi-Ravadanegh%2C%20Sajad', '2019-05-07 14:16:29', '2019-05-07 14:33:50', NULL),
(106, 12, 'Yousefi, Mousa', NULL, NULL, 'yousefi@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/476?Author_fa=%DB%8C%D9%88%D8%B3%D9%81%DB%8C%20%D9%85%D9%88%D8%B3%DB%8C&Author_en=Yousefi%2C%20Mousa', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(107, 12, 'Banaei, Mohamad Reza', NULL, NULL, 'm.banaei@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/504?Author_fa=%D8%A8%D9%86%D8%A7%D8%A6%DB%8C%20%D9%85%D8%AD%D9%85%D8%AF%20%D8%B1%D8%B6%D8%A7&Author_en=Banaei%2C%20Mohamad%20Reza', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(108, 12, 'Samsunchi, Nader', NULL, NULL, 'samsunchi@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/536?Author_fa=%D8%B5%D8%A7%D9%85%D8%B5%D9%88%D9%86%DA%86%DB%8C%20%D9%86%D8%A7%D8%AF%D8%B1%0D%0A&Author_en=Samsunchi%2C%20Nader', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(109, 12, 'Taghizadegan, Navid', NULL, NULL, 'taghizadegan@azaruniv.ac.ir\n', 'http://azaruniv.sciexplore.ir/Profiles/Author/597?Author_fa=%D8%AA%D9%82%DB%8C%20%D8%B2%D8%A7%D8%AF%DA%AF%D8%A7%D9%86%20%DA%A9%D9%84%D8%A7%D9%86%D8%AA%D8%B1%DB%8C%20%D9%86%D9%88%DB%8C%D8%AF&Author_en=Taghizadegan%2C%20Navid', '2019-05-07 14:16:29', '2019-05-07 14:33:50', NULL),
(110, 12, 'Salehi, Javad', NULL, NULL, 'j.salehi@azaruniv.ac.ir\n', 'http://azaruniv.sciexplore.ir/Profiles/Author/646?Author_fa=%D8%B5%D8%A7%D9%84%D8%AD%DB%8C%20%D8%AC%D9%88%D8%A7%D8%AF&Author_en=Salehi%2C%20Javad', '2019-05-07 14:16:29', '2019-05-07 14:33:50', NULL),
(111, 12, 'Hosseinzadeh, Shahram', NULL, NULL, 's.hosseinzadeh@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/286?Author_fa=%D8%AD%D8%B3%DB%8C%D9%86%E2%80%8C%D8%B2%D8%A7%D8%AF%D9%87%20%D8%B4%D9%87%D8%B1%D8%A7%D9%85&Author_en=Hosseinzadeh%2C%20S.', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(112, 12, 'Monfaredi, Khalil', NULL, NULL, 'khmonfaredi@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/437?Author_fa=%D9%85%D9%86%D9%81%D8%B1%D8%AF%DB%8C%20%D8%AE%D9%84%DB%8C%D9%84&Author_en=Monfaredi%2C%20Khalil', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(113, 12, 'Atashbar, Mahmoud', NULL, NULL, 'atashbar@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1040', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(114, 12, 'Okhravi, Mohamadjavad', NULL, NULL, 'okhrawi@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1054', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(115, 12, 'Reaza, Zaker', NULL, NULL, 'zaker@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1132', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(116, 13, 'Mehrvand, Ahad', NULL, NULL, 'mehrvand@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/273?Author_fa=%D9%85%D9%87%D8%B1%D9%88%D9%86%D8%AF%20%D8%A7%D8%AD%D8%AF&Author_en=Mehrvand%2C%20A.', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(117, 13, 'Amini, Davoud', NULL, NULL, 'd.amini@azaruniv.ac', 'http://azaruniv.sciexplore.ir/Profiles/Author/461?Author_fa=d.amini%40azaruniv.ac&Author_en=Amini%2C%20Davoud', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(118, 13, 'Behin, Bahram', NULL, NULL, 'behin@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/637?Author_fa=%D8%A8%D9%87%DB%8C%D9%86%20%D8%A8%D9%87%D8%B1%D8%A7%D9%85&Author_en=Behin%2C%20Bahram', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(119, 13, 'Ramazani, Abolfazl', NULL, NULL, 'a.ramazani@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/605?Author_fa=%D8%B1%D9%85%D8%B6%D8%A7%D9%86%DB%8C%20%D8%A7%D8%A8%D9%88%D8%A7%D9%84%D9%81%D8%B6%D9%84&Author_en=Ramazani%2C%20Abolfazl', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(120, 13, 'Anbarshahi, Simin', NULL, NULL, 'anbarshahi@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/2198?Author_fa=%D8%B9%D9%86%D8%A8%D8%B1%D8%B4%D8%A7%D9%87%DB%8C%20%D8%B3%DB%8C%D9%85%DB%8C%D9%86&Author_en=Anbarshahi%2C%20Simin', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(121, 13, 'Salahshour, Farzad', NULL, NULL, 'salahshoor@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/2515?Author_fa=%D8%B3%D9%84%D8%AD%D8%B4%D9%88%D8%B1%20%D9%81%D8%B1%D8%B2%D8%A7%D8%AF&Author_en=Salahshour%2C%20Farzad', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(122, 13, 'Arian, Ali', NULL, NULL, 'arian@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1041', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(123, 13, 'Razmjou, Ghader', NULL, NULL, 'razmjou@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1135', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(124, 13, 'Golzar, Morteza', NULL, NULL, 'ac.golzar@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1239', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(125, 14, 'Hayati, Safar', NULL, NULL, 'ac.hayati@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=3703', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(126, 14, 'Rasoulzadeh, Samad', NULL, NULL, 's.rasoulzadeh@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1138', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(127, 14, 'Kheijou, Esmaeil', NULL, NULL, 'kheirjoo@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1124', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(128, 14, 'Alaei, Parvaneh', NULL, NULL, 'allaei@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1200', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(129, 14, 'Farajgholizadeh, Mohammad', NULL, NULL, 'ac.fgolizadeh@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1250', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(130, 15, 'Rezaei, Mohammad', NULL, NULL, 'ac.m.rezaei@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=2972', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(131, 15, 'Javad Ghazi Sherbaf', NULL, NULL, '', NULL, '2019-05-07 14:16:29', '2019-05-07 14:33:50', NULL),
(132, 15, 'Seyyedi, Seyyed Mohsen', NULL, NULL, 'seyyedi@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1166', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(133, 16, 'Shahbazi, Rahim', NULL, NULL, 'shahbazi@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/75?Author_fa=%D8%B4%D9%87%D8%A8%D8%A7%D8%B2%DB%8C%20%DB%8C%D9%88%D8%B2%D8%A8%D9%86%D8%AF%20%D8%B1%D8%AD%DB%8C%D9%85&Author_en=Shahbazi%2C%20Rahim', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(134, 16, 'Hedayati, Aziz', NULL, NULL, 'aziz.hedayati@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/364?Author_fa=%D9%87%D8%AF%D8%A7%DB%8C%D8%AA%DB%8C%20%D8%AE%D9%88%D8%B4%D9%85%D9%87%D8%B1%20%D8%B9%D8%B2%DB%8C%D8%B2&Author_en=Hedayati%2C%20Aziz', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(135, 16, 'Khalili, Leila', NULL, NULL, 'l.khalili@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1120', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(136, 16, 'Moradmand, Ali', NULL, NULL, 'moradmand@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1255', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(137, 17, 'Aminfard, Mohammad', NULL, NULL, 'aminfard@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/2189?Author_fa=%D8%A7%D9%85%DB%8C%D9%86%20%D9%81%D8%B1%D8%AF%20%D9%85%D8%AD%D9%85%D8%AF&Author_en=Aminfard%2C%20Mohammad', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(138, 17, 'Ebrahimnejad, Mohammad', NULL, NULL, 'ac.ebrahimnejhad@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1044', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(139, 17, 'Dehgannejad, Reaza', NULL, NULL, 'ac.dehghannezhad@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1130', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(140, 17, 'Abbasiasl, Shafi\'', NULL, NULL, 'abbasiasl@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1191', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(141, 17, 'Moheborahman, Mohamadali', NULL, NULL, 'm.moheb@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1245', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(142, 18, 'Ahmadvand, Maroufali', NULL, NULL, 'ahmadvand@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1051', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(143, 18, 'Ahmadi Ahangar, Gholamhosein', NULL, NULL, 'ac.ahangar@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1053', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(144, 18, 'Imanpour, Mansour', NULL, NULL, 'imanpour@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1077', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(145, 18, 'Hoseini, Seyyed Ahmad', NULL, NULL, 'ahmadhosseinee@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1110', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(146, 18, 'Hagigat, Sohrab', NULL, NULL, 'ac.haghighat@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1114', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(147, 18, 'Hamdollahi, Ahmad', NULL, NULL, 'ac.hamdollahi@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=3073', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(148, 18, 'Faedi, Akbar', NULL, NULL, 'ac.faideie@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1209', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(149, 18, 'Ghayoomzade, Kamran', NULL, NULL, 'ac.ghayoomzade@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1231', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(150, 19, 'Khodizadeh, Mohammad', NULL, NULL, 'm.khodizadeh@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1122', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(151, 19, 'Hashemzadeh, Mahdi', NULL, NULL, 'hashemzadeh@azaruniv.ac.ir\n', 'http://azaruniv.sciexplore.ir/Profiles/Author/272?Author_fa=%D9%87%D8%A7%D8%B4%D9%85%20%D8%B2%D8%A7%D8%AF%D9%87%20%D9%85%D9%87%D8%AF%DB%8C&Author_en=Hashemzadeh%2C%20Mahdi', '2019-05-07 14:16:29', '2019-05-07 14:33:50', NULL),
(152, 19, 'Hossein Abbasimehr', NULL, NULL, '', NULL, '2019-05-07 14:16:29', '2019-05-07 14:33:50', NULL),
(153, 19, 'Alireza, Roohi', NULL, NULL, '', NULL, '2019-05-07 14:16:29', '2019-05-07 14:33:50', NULL),
(154, 19, 'Nourani, Esmaeil', NULL, NULL, 'ac.nourani@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=3492', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(155, 19, 'Heydarian, Mohsen', NULL, NULL, 'heydarian@azaruniv.ac.ir\n', 'http://azaruniv.sciexplore.ir/Profiles/Author/245?Author_fa=%D8%AD%DB%8C%D8%AF%D8%B1%DB%8C%D8%A7%D9%86%20%D9%85%D8%AD%D8%B3%D9%86%0D%0A&Author_en=Heydarian%2C%20Mohsen', '2019-05-07 14:16:29', '2019-05-07 14:33:50', NULL),
(156, 20, 'Aghazadeh, Nasser', NULL, NULL, 'aghazadeh@azaruniv.ac.ir\n', 'http://azaruniv.sciexplore.ir/Profiles/Author/82?Author_fa=%D8%A2%D9%82%D8%A7%D8%B2%D8%A7%D8%AF%D9%87%20%D9%86%D8%A7%D8%B5%D8%B1&Author_en=Aghazadeh%2C%20Nasser', '2019-05-07 14:16:29', '2019-05-07 14:33:50', NULL),
(157, 20, 'Jahanshahi, Mohammad', NULL, NULL, 'jahanshahi@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/110?Author_fa=%D8%AC%D9%87%D8%A7%D9%86%D8%B4%D8%A7%D9%87%DB%8C%20%D9%85%D8%AD%D9%85%D8%AF&Author_en=Jahanshahi%2C%20Mohammad', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(158, 20, 'Sedghi, Monireh', NULL, NULL, 'sedghi@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/130?Author_fa=%D8%B5%D8%AF%D9%82%DB%8C%20%D9%85%D9%86%DB%8C%D8%B1%D9%87&Author_en=Sedghi%2C%20Monireh', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(159, 20, 'Tari, Somayyeh', NULL, NULL, 's_tari@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/216?Author_fa=%D8%AA%D8%A7%D8%B1%DB%8C%20%D8%B3%D9%85%DB%8C%D9%87&Author_en=Tari%2C%20Somayyeh', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(160, 20, 'Khoeilar, Rana', NULL, NULL, 'khoeilar@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/224?Author_fa=%D8%AE%D9%88%D8%A6%DB%8C%D9%84%D8%B1%20%D8%B1%D8%B9%D9%86%D8%A7&Author_en=Khoeilar%2C%20Rana', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(161, 20, 'Pourmahmoud, Jafar', NULL, NULL, 'pourmahmoud@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/231?Author_fa=%D9%BE%D9%88%D8%B1%D9%85%D8%AD%D9%85%D9%88%D8%AF%20%D9%82%D8%A7%D8%B6%DB%8C%20%D8%AC%D9%87%D8%A7%D9%86%DB%8C%20%D8%AC%D8%B9%D9%81%D8%B1&Author_en=Pourmahmoud%2C%20Jafar', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(162, 20, 'Ranjbar, Mojtaba', NULL, NULL, 'm_ranjbar@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/271?Author_fa=%D8%B1%D9%86%D8%AC%D8%A8%D8%B1%20%D9%85%D8%AC%D8%AA%D8%A8%DB%8C&Author_en=Ranjbar%2C%20Mojtaba', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(163, 20, 'Abedi, Esmaiel', NULL, NULL, 'esabedi@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/277?Author_fa=%D8%B9%D8%A7%D8%A8%D8%AF%DB%8C%20%D8%A7%D8%B3%D9%85%D8%B9%DB%8C%D9%84&Author_en=Abedi%2C%20Esmaiel', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(164, 20, 'Ilmakchi, Mohammad', NULL, NULL, 'ilmakchi@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/318?Author_fa=ilmakchi%40azaruniv.ac.ir&Author_en=%D8%A7%D9%84%D9%85%DA%A9%DA%86%DB%8C%20%D9%85%D8%AD%D9%85%D8%AF', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(165, 20, 'Sheikholeslami, Seyed Mahmoud', NULL, NULL, 's.m.sheikholeslami@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/383?Author_fa=%D8%B4%DB%8C%D8%AE%20%D8%A7%D9%84%D8%A7%D8%B3%D9%84%D8%A7%D9%85%DB%8C%20%DA%AF%D8%A7%D9%88%DA%AF%D8%A7%D9%86%DB%8C%20%D8%B3%DB%8C%D8%AF%20%D9%85%D8%AD%D9%85%D9%88%D8%AF&Author_en=Sheikholeslami%2C%20Seyed%20Mahmoud', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(166, 20, 'Bajravani, Ali', NULL, NULL, 'bajravani@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/497?Author_fa=%D8%A8%D8%AC%D8%B1%D9%88%D8%A7%D9%86%DB%8C%20%D8%B9%D9%84%DB%8C&Author_en=Bajravani%2C%20Ali', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(167, 20, 'Khani, Ali', NULL, NULL, 'khani@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/533?Author_fa=%D8%AE%D8%A7%D9%86%DB%8C%20%D8%B9%D9%84%DB%8C&Author_en=Khani%2C%20Ali', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(168, 20, 'Kheirfam, B.', NULL, NULL, 'b.kheirfam@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/588?Author_fa=%D8%AE%DB%8C%D8%B1%D9%81%D8%A7%D9%85%20%D8%A8%D9%87%D8%B1%D9%88%D8%B2&Author_en=Kheirfam%2C%20B.', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(169, 20, 'Amjadi, Jafar', NULL, NULL, 'j-amjadi@azaruniv.ac.ir\n', 'http://azaruniv.sciexplore.ir/Profiles/Author/640?Author_fa=%D8%A7%D9%85%D8%AC%D8%AF%DB%8C%20%D8%B2%DB%8C%D9%86%20%D8%A7%D9%84%D8%AD%D8%A7%D8%AC%D9%84%D9%88%20%D8%AC%D8%B9%D9%81%D8%B1%0D%0A&Author_en=Amjadi%2C%20Jafar', '2019-05-07 14:16:29', '2019-05-07 14:33:50', NULL),
(170, 20, 'Rezapour, Sh H.', NULL, NULL, 'sh.rezapour@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/705?Author_fa=%D8%B1%D8%B6%D8%A7%D9%BE%D9%88%D8%B1%20%D8%B4%D9%87%D8%B1%D8%A7%D9%85&Author_en=Rezapour%2C%20Sh%20H.', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(171, 20, 'Oskouei, Leili Hassani', NULL, NULL, 'lh_oskouei@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/714?Author_fa=%D8%AD%D8%B3%D9%86%DB%8C%20%D8%A7%D8%B3%DA%A9%D9%88%D8%A6%DB%8C%20%D9%84%DB%8C%D9%84%DB%8C&Author_en=Oskouei%2C%20Leili%20Hassani', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(172, 20, 'Sattari, Mohammad Hossein', NULL, NULL, 'sattari@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/43?Author_fa=%D8%B3%D8%AA%D8%A7%D8%B1%DB%8C%20%D8%A8%D8%A7%D8%B1%D9%86%D8%AC%DB%8C%20%D9%85%D8%AD%D9%85%D8%AF%20%D8%AD%D8%B3%DB%8C%D9%86&Author_en=Sattari%2C%20Mohammad%20Hossein', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(173, 20, 'Somayyeh, Tari', NULL, NULL, '', NULL, '2019-05-07 14:16:29', '2019-05-07 14:33:50', NULL),
(174, 20, 'Haghighatdoost, Ghorbanali', NULL, NULL, 'gorbanali@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/209?Author_fa=%D8%AD%D9%82%DB%8C%D9%82%D8%AA%20%D8%AF%D9%88%D8%B3%D8%AA%20%D8%A8%D9%86%D8%A7%D8%A8%20%D9%82%D8%B1%D8%A8%D8%A7%D9%86%D8%B9%D9%84%DB%8C&Author_en=Haghighatdoost%2C%20Ghorbanali', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(175, 20, 'Ghaffari-Hadigheh, Alireza', NULL, NULL, 'hadigheha@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/466?Author_fa=%D8%BA%D9%81%D8%A7%D8%B1%DB%8C%20%D8%AD%D8%AF%DB%8C%D9%82%D9%87%20%D8%B9%D9%84%DB%8C%D8%B1%D8%B6%D8%A7&Author_en=Ghaffari-Hadigheh%2C%20Alireza', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(176, 20, 'Ahmadkhanlu, Asghar', NULL, NULL, 'ahmadkhanlu@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/612?Author_fa=%D8%A7%D8%AD%D9%85%D8%AF%D8%AE%D8%A7%D9%86%D9%84%D9%88%20%D8%A7%D8%B5%D8%BA%D8%B1&Author_en=Ahmadkhanlu%2C%20Asghar', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(177, 20, 'Irandoust, Mohamad Hasan', NULL, NULL, 'mhirandoust@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1076', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(178, 20, 'Roomi, Vahid', NULL, NULL, 'roomi@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1146', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(179, 20, 'Samadi, Ghasem', NULL, NULL, 'ac.samadi@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1185', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(180, 20, 'Nilchiyani, Mehdi', NULL, NULL, 'mnilchyani@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1274', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(181, 21, 'Rahmanpour, Morteza', NULL, NULL, '', NULL, '2019-05-07 14:16:29', '2019-05-07 14:33:50', NULL),
(182, 21, 'Razmara, Nayyer', NULL, NULL, 'n.razmara@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/396?Author_fa=%D8%B1%D8%B2%D9%85%20%D8%A2%D8%B1%D8%A7%D8%A1%20%D9%86%DB%8C%D8%B1&Author_en=Razmara%2C%20Nayyer', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(183, 21, 'Alami Nia, Amin', NULL, NULL, 'amin.alam@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/404?Author_fa=%D8%A7%D8%B9%D9%84%D9%85%DB%8C%20%D9%86%DB%8C%D8%A7%20%D8%A7%D9%85%DB%8C%D9%86&Author_en=Alami%20Nia%2C%20Amin', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(184, 21, 'Saviz, Mohammadreza R.', NULL, NULL, 'saviz@azaruniv.ac.ir\n', 'http://azaruniv.sciexplore.ir/Profiles/Author/431?Author_fa=%D8%B3%D8%A7%D9%88%DB%8C%D8%B2%20%D9%85%D8%AD%D9%85%D8%AF%20%D8%B1%D8%B6%D8%A7%0D%0A&Author_en=Saviz%2C%20Mohammadreza%20R.', '2019-05-07 14:16:29', '2019-05-07 14:33:50', NULL),
(185, 21, 'Mosaffa, Amirhossein', NULL, NULL, 'mosaffa@azaruniv.ac.ir\n', 'http://azaruniv.sciexplore.ir/Profiles/Author/482?Author_en=Mosaffa%2C%20Amirhossein', '2019-05-07 14:16:29', '2019-05-07 14:33:50', NULL),
(186, 21, 'Saeimi-Sadigh, Mohammad Ali', NULL, NULL, 'saeimi.sadigh@azaruniv.ac.ir\n', 'http://azaruniv.sciexplore.ir/Profiles/Author/629?Author_fa=%D8%B5%D8%A7%D8%A6%DB%8C%D9%85%DB%8C%20%D8%B5%D8%AF%DB%8C%D9%82%20%D9%85%D8%AD%D9%85%D8%AF%20%D8%B9%D9%84%DB%8C%0D%0A&Author_en=Saeimi-Sadigh%2C%20Mohammad%20Ali', '2019-05-07 14:16:29', '2019-05-07 14:33:50', NULL),
(187, 21, 'Gharraei, Reza', NULL, NULL, 'gharraei@azaruniv.ac.ir\n', 'http://azaruniv.sciexplore.ir/Profiles/Author/649?Author_fa=%D8%BA%D8%B1%D8%A7%D8%A6%DB%8C%20%D8%AE%D8%B3%D8%B1%D9%88%D8%B4%D8%A7%D9%87%DB%8C%20%D8%B1%D8%B6%D8%A7%0D%0A&Author_en=Gharraei%2C%20Reza', '2019-05-07 14:16:29', '2019-05-07 14:33:50', NULL),
(188, 21, 'Mohammadpourfard, Mousa', NULL, NULL, 'mohammadpour@azaruniv.ac.ir\n', 'http://azaruniv.sciexplore.ir/Profiles/Author/671?Author_fa=%D9%85%D8%AD%D9%85%D8%AF%D9%BE%D9%88%D8%B1%20%D9%81%D8%B1%D8%AF%20%D9%85%D9%88%D8%B3%DB%8C%0D%0A&Author_en=Mohammadpourfard%2C%20Mousa', '2019-05-07 14:16:29', '2019-05-07 14:33:50', NULL),
(189, 21, 'Ziaei-Asl, Ali', NULL, NULL, 'aziaie@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/680?Author_fa=%D8%B6%DB%8C%D8%A7%D8%A6%DB%8C%20%D8%A7%D8%B5%D9%84%20%D8%B9%D9%84%DB%8C%0D%0A&Author_en=Ziaei-Asl%2C%20Ali', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(190, 21, 'Hashemi, Mir Yousef.', NULL, NULL, 'm.y.hashemi@azaruniv.ac.ir\n', 'http://azaruniv.sciexplore.ir/Profiles/Author/710?Author_fa=%D9%87%D8%A7%D8%B4%D9%85%DB%8C%20%D9%85%DB%8C%D8%B1%20%DB%8C%D9%88%D8%B3%D9%81&Author_en=Hashemi%2C%20Mojtaba%20Y.', '2019-05-07 14:16:29', '2019-05-07 14:33:50', NULL),
(191, 21, 'Abdollahi Jahdi, Mohammad Hosein', NULL, NULL, 'jahdi@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1194', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(192, 21, 'Fallah, Mohsen', NULL, NULL, 'mfallah@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/660?Author_en=Fallah%2C%20Meghdad%20Hosein', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(193, 21, 'Minaei, Masoud', NULL, NULL, 'ac.minaei@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=3627', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(194, 22, 'Aghazadeh, Mostafa', NULL, NULL, '', NULL, '2019-05-07 14:16:29', '2019-05-07 14:33:50', NULL),
(195, 22, 'Farrokhi-Rad, Morteza', NULL, NULL, 'm.farrokhi.rad@azaruniv.ac.ir\n', 'http://azaruniv.sciexplore.ir/Profiles/Author/51?Author_fa=%D9%81%D8%B1%D8%AE%DB%8C%20%D8%B1%D8%A7%D8%AF%20%D9%85%D8%B1%D8%AA%D8%B6%DB%8C%0D%0A&Author_en=Farrokhi-Rad%2C%20Morteza', '2019-05-07 14:16:29', '2019-05-07 14:33:50', NULL),
(196, 22, 'Heidarzadeh, Akbar', NULL, NULL, '', NULL, '2019-05-07 14:16:29', '2019-05-07 14:33:50', NULL),
(197, 22, 'Mohammadzadeh, Roghayeh', NULL, NULL, 'r.mohammadzadeh@azaruniv.ac.ir\n', 'http://azaruniv.sciexplore.ir/Profiles/Author/9?Author_fa=%D9%85%D8%AD%D9%85%D8%AF%D8%B2%D8%A7%D8%AF%D9%87%20%D8%B1%D9%82%DB%8C%D9%87%0D%0A&Author_en=Mohammadzadeh%2C%20Roghayeh', '2019-05-07 14:16:29', '2019-05-07 14:33:50', NULL),
(198, 22, 'Avishan, Behzad', NULL, NULL, 'avishan@azaruniv.ac.ir\n', 'http://azaruniv.sciexplore.ir/Profiles/Author/543?Author_fa=%D8%A2%D9%88%DB%8C%D8%B4%D9%86%20%D8%A8%D9%87%D8%B2%D8%A7%D8%AF%0D%0A&Author_en=Avishan%2C%20Behzad', '2019-05-07 14:16:29', '2019-05-07 14:33:50', NULL),
(199, 22, 'Abyazi, Arezou', NULL, NULL, 'ac.abyazi@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=3626', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(200, 23, 'Pashaei, Mohammad', NULL, NULL, 'm.pashaei@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1089', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL);
INSERT INTO `masters` (`id`, `department_id`, `name`, `speciality`, `rank`, `email`, `cv_link`, `created_at`, `updated_at`, `deleted_at`) VALUES
(201, 23, 'Dastmalchi, Vida', NULL, NULL, 'ac.dastmalchi@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=3650', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(202, 23, 'Rasmi, Atekeh', NULL, NULL, 'ac.rasmi@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1137', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(203, 23, 'Sedghi, Hosein', NULL, NULL, 'ac.hsedghi@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1183', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(204, 23, 'Alizadeh, Naser', NULL, NULL, 'ac.alizadeh@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1201', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(205, 23, 'Gholizadeh, Heidar', NULL, NULL, 'ac.qolizaadeh@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1229', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(206, 23, 'Gholi, Ahmad', NULL, NULL, 'ac.goli@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1240', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(207, 23, 'Moshtaghmehr, Rahman', NULL, NULL, 'moshtagh-mehr@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1256', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(208, 23, 'Nasrollahi, Yadollah', NULL, NULL, 'nasrollahi@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1272', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(209, 24, 'Eghbali, Ali', NULL, NULL, 'a.eghbali@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/83?Author_fa=%D8%A7%D9%82%D8%A8%D8%A7%D9%84%DB%8C%20%D8%B9%D9%84%DB%8C&Author_en=Eghbali%2C%20Ali', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(210, 24, 'Akbari-Kourbolagh, Yahya', NULL, NULL, 'yakbari@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/139?Author_fa=%D8%A7%DA%A9%D8%A8%D8%B1%DB%8C%20%DA%A9%D9%88%D8%B1%D8%A8%D9%84%D8%A7%D8%BA%20%DB%8C%D8%AD%DB%8C%DB%8C&Author_en=Akbari-Kourbolagh%2C%20Y.', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(211, 24, 'Aalipour, Rasoul', NULL, NULL, 'aalipour@azaruniv.ac.i', 'http://azaruniv.sciexplore.ir/Profiles/Author/217?Author_fa=%D8%B9%D8%A7%D9%84%DB%8C%20%D9%BE%D9%88%D8%B1%20%DA%A9%D9%88%D8%B3%D8%A7%D9%84%D8%A7%D8%B1%20%D8%B1%D8%B3%D9%88%D9%84&Author_en=Aalipour%2C%20Rasoul', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(212, 24, 'Mojaveri, Bashir', NULL, NULL, 'bmojaveri@azaruniv.ac.ir\n', 'http://azaruniv.sciexplore.ir/Profiles/Author/409?Author_fa=%D9%85%D8%AC%D8%A7%D9%88%D8%B1%DB%8C%20%D8%A8%D8%B4%DB%8C%D8%B1%0D%0A&Author_en=Mojaveri%2C%20Bashir', '2019-05-07 14:16:29', '2019-05-07 14:33:50', NULL),
(213, 24, 'Darabi, Farhad', NULL, NULL, 'f.darabi@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/410?Author_fa=%D8%AF%D8%A7%D8%B1%D8%A7%D8%A8%DB%8C%20%D9%81%D8%B1%D9%87%D8%A7%D8%AF&Author_en=Darabi%2C%20Farhad', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(214, 24, 'Moslemi, Fatemeh', NULL, NULL, 'f.moslemi@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/445?Author_fa=%D9%85%D8%B3%D9%84%D9%85%DB%8C%20%D9%81%D8%A7%D8%B7%D9%85%D9%87&Author_en=Moslemi%2C%20Fatemeh', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(215, 24, 'Phirouznia, Arash', NULL, NULL, 'Phirouznia@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/513?Author_fa=%D9%81%DB%8C%D8%B1%D9%88%D8%B2%20%D9%86%DB%8C%D8%A7%20%D8%A2%D8%B1%D8%B4&Author_en=Phirouznia%2C%20Arash', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(216, 24, 'Jamshidi-Ghaleh, Kazem', NULL, NULL, 'k-jamshidi@azaruniv.ac.ir\n', 'http://azaruniv.sciexplore.ir/Profiles/Author/519?Author_fa=%D8%AC%D9%85%D8%B4%DB%8C%D8%AF%DB%8C%20%D9%82%D9%84%D8%B9%D9%87%20%DA%A9%D8%A7%D8%B8%D9%85%0D%0A&Author_en=Jamshidi-Ghaleh%2C%20Kazem', '2019-05-07 14:16:29', '2019-05-07 14:33:50', NULL),
(217, 24, 'Fasihi, Mohammad Ali', NULL, NULL, 'ma-fasihi@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/530?Author_fa=%D9%81%D8%B5%DB%8C%D8%AD%DB%8C%20%D8%A2%D9%82%D8%A8%D9%84%D8%A7%D8%BA%20%D9%85%D8%AD%D9%85%D8%AF%20%D8%B9%D9%84%DB%8C&Author_en=Fasihi%2C%20Mohammad%20Ali', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(218, 24, 'Esfandyari-Kalejahi, A.', NULL, NULL, 'ra-esfandyari@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/572?Author_fa=%D8%A7%D8%B3%D9%81%D9%86%D8%AF%DB%8C%D8%A7%D8%B1%DB%8C%20%DA%A9%D9%84%D8%AC%D8%A7%D9%87%DB%8C%20%D8%B9%D8%A8%D8%AF%D8%A7%D9%84%D8%B1%D8%B3%D9%88%D9%84%0D%0A&Author_en=Esfandyari-Kalejahi%2C%20A.', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(219, 24, 'Rezaei-Aghdam, Adel', NULL, NULL, 'rezaei-a@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/591?Author_fa=%D8%B1%D8%B6%D8%A7%D8%A6%DB%8C%20%D8%A7%D9%82%D8%AF%D9%85%20%D8%B9%D8%A7%D8%AF%D9%84&Author_en=Rezaei-Aghdam%2C%20Adel', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(220, 24, 'Akbari-Moghanjoughi, Massoud', NULL, NULL, 'm_akbari@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/613?Author_fa=%D8%A7%DA%A9%D8%A8%D8%B1%DB%8C%20%D9%85%D8%BA%D8%A7%D9%86%D8%AC%D9%88%D9%82%DB%8C%20%D9%85%D8%B3%D8%B9%D9%88%D8%AF&Author_en=Akbari-Moghanjoughi%2C%20Massoud', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(221, 24, 'Rastkar Ebrahimzadeh, Alireza', NULL, NULL, 'a_rastkar@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/373?Author_fa=%D8%B1%D8%A7%D8%B3%D8%AA%DA%A9%D8%A7%D8%B1%20%D8%A7%D8%A8%D8%B1%D8%A7%D9%87%DB%8C%D9%85%20%D8%B2%D8%A7%D8%AF%D9%87%20%D8%B9%D9%84%DB%8C%D8%B1%D8%B6%D8%A7%0D%0A&Author_en=Rastkar%20Ebrahimzadeh%2C%20Alireza', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(222, 24, 'Mohammadpour, Hakimeh', NULL, NULL, 'mhmdpour@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/386?Author_fa=%D9%85%D8%AD%D9%85%D8%AF%D9%BE%D9%88%D8%B1%20%D8%AD%DA%A9%DB%8C%D9%85%D9%87&Author_en=Mohammadpour%2C%20Hakimeh', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(223, 24, 'Esmailpour, Mohammad', NULL, NULL, 'esmailpour@azaruniv.ac.ir\n', 'http://azaruniv.sciexplore.ir/Profiles/Author/901?Author_fa=%D8%A7%D8%B3%D9%85%D8%A7%D8%B9%DB%8C%D9%84%20%D9%BE%D9%88%D8%B1%20%D9%85%D8%AD%D9%85%D8%AF&Author_en=Esmailpour%2C%20Mohammad', '2019-05-07 14:16:29', '2019-05-07 14:33:50', NULL),
(224, 24, 'Mohsen, Mohammadnejad', NULL, NULL, 'mohammadnezhad@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1251', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(225, 24, 'Karimi, Mohammad', NULL, NULL, 'ac.karimi@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1235', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(226, 24, 'Atazade, Mohammad', NULL, NULL, 'atazadeh@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1198', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(227, 24, 'Feizi, Esfandiyar', NULL, NULL, 'efaizi@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1223', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(228, 25, 'Alireza, Alizadeh', NULL, NULL, '', NULL, '2019-05-07 14:16:29', '2019-05-07 14:33:50', NULL),
(229, 25, 'Vaez, Nahid', NULL, NULL, 'vaez@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/175?Author_fa=%D9%88%D8%A7%D8%B9%D8%B8%20%D9%86%D8%A7%D9%87%DB%8C%D8%AF&Author_en=Vaez%2C%20Nahid', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(230, 25, 'Azimi, Solmaz', NULL, NULL, 's_azimi2007 @ yahoo. com', 'http://azaruniv.sciexplore.ir/Profiles/Author/222?Author_fa=%D8%B9%D8%B8%DB%8C%D9%85%DB%8C%20%D8%B3%D9%88%D9%84%D9%85%D8%A7%D8%B2&Author_en=Azimi%2C%20Solmaz', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(231, 25, 'Mehrvar, Ali', NULL, NULL, 'ac.mehrvar@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/338?Author_fa=%D9%85%D9%87%D8%B1%D9%88%D8%B1%20%D8%B9%D9%84%DB%8C&Author_en=Mehrvar%2C%20Ali', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(232, 25, 'Mohammadi, Davoud', NULL, NULL, 'mohamadi@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/418?Author_fa=%D9%85%D8%AD%D9%85%D8%AF%DB%8C%20%D8%AF%D8%A7%D9%88%D8%AF&Author_en=Mohammadi%2C%20Davoud', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(233, 25, 'Lotfollahi, Parisa', NULL, NULL, 'lotfollahi@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/500?Author_fa=%D9%84%D8%B7%D9%81%20%D8%A7%D9%84%D9%87%DB%8C%20%D9%BE%D8%B1%DB%8C%D8%B3%D8%A7&Author_en=Lotfollahi%2C%20Parisa', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(234, 25, 'Kary, Naser Eivazian', NULL, NULL, 'eivazian@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/534?Author_fa=%D8%B9%DB%8C%D9%88%D8%B6%DB%8C%D8%A7%D9%86%20%DA%A9%D8%A7%D8%B1%DB%8C%20%D9%86%D8%A7%D8%B5%D8%B1&Author_en=Kary%2C%20Naser%20Eivazian', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(235, 25, 'Shirzad, Akbar', NULL, NULL, 'ashirzad@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/585?Author_fa=%D8%B4%DB%8C%D8%B1%D8%B2%D8%A7%D8%AF%20%D8%A7%DA%A9%D8%A8%D8%B1&Author_en=Shirzad%2C%20Akbar', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(236, 25, 'Parviz, Laleh', NULL, NULL, 'lparviz@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/242?Author_fa=%D9%BE%D8%B1%D9%88%DB%8C%D8%B2%20%D9%84%D8%A7%D9%84%D9%87&Author_en=Parviz%2C%20Laleh', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(237, 25, 'Fallahzadeh, Vahid', NULL, NULL, 'fallahzadeh@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1220', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(238, 25, 'Moslehi, Shalaleh', NULL, NULL, 'ac.moslehi@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=2958', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(239, 26, 'Yousefi, Rahim', NULL, NULL, 'yousefi@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/248?Author_fa=%DB%8C%D9%88%D8%B3%D9%81%DB%8C%20%D8%B1%D8%AD%DB%8C%D9%85&Author_en=Yousefi%2C%20Rahim', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(240, 26, 'Vaghef, Ladan', NULL, NULL, 'l.vaghef@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/401?Author_fa=%D9%88%D8%A7%D9%82%D9%81%20%D9%84%D8%A7%D8%AF%D9%86&Author_en=Vaghef%2C%20Ladan', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(241, 26, 'Ghoreyshi-Rad, Fakhrossadat', NULL, NULL, 'ghoreyshi@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/487?Author_fa=%D9%82%D8%B1%DB%8C%D8%B4%DB%8C%20%D8%B1%D8%A7%D8%AF%20%D9%81%D8%AE%D8%B1%20%D8%A7%D9%84%D8%B3%D8%A7%D8%AF%D8%A7%D8%AA&Author_en=Ghoreyshi-Rad%2C%20Fakhrossadat', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(242, 26, 'Bafandeh Gharamaleki, Hassan', NULL, NULL, 'h_bafandeh@azaruniv.ac.ir\n', 'http://azaruniv.sciexplore.ir/Profiles/Author/549?Author_fa=%D8%A8%D8%A7%D9%81%D9%86%D8%AF%D9%87%20%D9%82%D8%B1%D8%A7%D9%85%D9%84%DA%A9%DB%8C%20%D8%AD%D8%B3%D9%86&Author_en=Bafandeh%20Gharamaleki%2C%20Hassan', '2019-05-07 14:16:29', '2019-05-07 14:33:50', NULL),
(243, 26, 'Abdi, Reza', NULL, NULL, 'r.abdi@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/2628?Author_fa=%D8%B9%D8%A8%D8%AF%DB%8C%20%D8%B1%D8%B6%D8%A7&Author_en=Abdi%2C%20Reza', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(244, 26, 'Ahmadi, Ezzatollah', NULL, NULL, 'ahamdi.e@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1052', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(245, 26, 'Chalabianlou, Gholamreza', NULL, NULL, '', NULL, '2019-05-07 14:16:29', '2019-05-07 14:33:50', NULL),
(246, 26, 'Soleimani, Mehran', NULL, NULL, 'm_soleimani@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1163', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(247, 26, 'Shalchi, Behzad', NULL, NULL, 'shalchi@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1167', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(248, 26, 'Yaghoubi, Hssan', NULL, NULL, 'hyaghoubi@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1289', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(249, 27, 'Zahedifar, Seyf Ali', NULL, NULL, 'ac.zahedifar@azaruniv.ac.ir\n', 'http://azaruniv.sciexplore.ir/Profiles/Author/300?Author_fa=%D8%B2%D8%A7%D9%87%D8%AF%DB%8C%20%D9%81%D8%B1%20%D8%B3%DB%8C%D9%81%D8%B9%D9%84%DB%8C&Author_en=Zahedifar%2C%20Seyf%20Ali', '2019-05-07 14:16:29', '2019-05-07 14:33:50', NULL),
(250, 27, 'Hamzehpour, Nasser', NULL, NULL, 'ac.hamzepour@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1115', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(251, 27, 'Sadeghi Niri, Roghayye', NULL, NULL, 'ac.sadeghiniri@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1178', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(252, 27, 'Abed Abdollahi, Samad', NULL, NULL, 's.abed@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1192', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(253, 27, 'Mohamaddi Fam, Sajjad', NULL, NULL, '', NULL, '2019-05-07 14:16:29', '2019-05-07 14:33:50', NULL),
(254, 27, 'Alimohammdi, Karim', NULL, NULL, 'alimohammadi@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1202', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(255, 28, 'Dehganzade, sajjad', NULL, NULL, 'sa.deghanzadeh@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1129', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(256, 28, 'Geravan, Saeid', NULL, NULL, 'ac.geravand@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1237', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(257, 29, 'Ghorbanzadeh, Behrouz', NULL, NULL, 'b.ghorbanzadeh@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/157?Author_fa=%D9%82%D8%B1%D8%A8%D8%A7%D9%86%20%D8%B2%D8%A7%D8%AF%D9%87%20%D8%A8%D9%87%D8%B1%D9%88%D8%B2&Author_en=Ghorbanzadeh%2C%20Behrouz', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(258, 29, 'Ghorbanian, Bahloul', NULL, NULL, 'ghorbanian@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/266?Author_fa=%D9%82%D8%B1%D8%A8%D8%A7%D9%86%DB%8C%D8%A7%D9%86%20%D8%A8%D9%87%D9%84%D9%88%D9%84&Author_en=Ghorbanian%2C%20Bahloul', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(259, 29, 'Salehzadeh, Karim', NULL, NULL, 'salehzadeh@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/691?Author_fa=%D8%B5%D8%A7%D9%84%D8%AD%20%D8%B2%D8%A7%D8%AF%D9%87%20%DA%A9%D8%B1%DB%8C%D9%85&Author_en=Salehzadeh%2C%20Karim', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(260, 29, 'Azali Alamadari, K.', NULL, NULL, 'k.azali@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/870?Author_fa=%D8%A2%D8%B2%D8%A7%D9%84%DB%8C%20%D8%B9%D9%84%D9%85%D8%AF%D8%A7%D8%B1%DB%8C%20%DA%A9%D8%B1%DB%8C%D9%85&Author_en=Azali%20Alamadari%2C%20K.', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(261, 29, 'Zadeh, Mohsen Shir Mohammad', NULL, NULL, 'm.smzade@azaruniv.ac.ir', 'http://azaruniv.sciexplore.ir/Profiles/Author/2524?Author_fa=%D8%B4%DB%8C%D8%B1%D9%85%D8%AD%D9%85%D8%AF%D8%B2%D8%A7%D8%AF%D9%87%20%D9%85%D8%AD%D8%B3%D9%86&Author_en=Zadeh%2C%20Mohsen%20Shir%20Mohammad', '2019-05-07 14:16:29', '2019-05-07 14:16:29', NULL),
(262, 29, 'Bashiri, Mehdi', NULL, NULL, 'bashiri@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1332', '2019-05-07 14:16:30', '2019-05-07 14:16:30', NULL),
(263, 29, 'Zarneshan, Azam', NULL, NULL, 'zarneshan@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1151', '2019-05-07 14:16:30', '2019-05-07 14:16:30', NULL),
(264, 29, 'Fakhrpour, Roghayyeh', NULL, NULL, 'fakhrpour@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1210', '2019-05-07 14:16:30', '2019-05-07 14:16:30', NULL),
(265, 29, 'Faraji, Rasoul', NULL, NULL, 'faraji@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1213', '2019-05-07 14:16:30', '2019-05-07 14:16:30', NULL),
(266, 29, 'Yavari, Yousef', NULL, NULL, 'yavarif@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1288', '2019-05-07 14:16:30', '2019-05-07 14:16:30', NULL),
(267, 30, 'Hajipour, Morteza', NULL, NULL, 'ac.hajipour@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1104', '2019-05-07 14:16:30', '2019-05-07 14:16:30', NULL),
(268, 30, 'Zirak Baroughi, Asghar', NULL, NULL, 'a.zirak@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1153', '2019-05-07 14:16:30', '2019-05-07 14:16:30', NULL),
(269, 30, 'Salimi Torkamani, Hojjat', NULL, NULL, 'salimi@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1164', '2019-05-07 14:16:30', '2019-05-07 14:16:30', NULL),
(270, 30, 'Fani, Reza', NULL, NULL, 'ac.fani@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=1208', '2019-05-07 14:16:30', '2019-05-07 14:16:30', NULL),
(271, 30, 'Yousefzade, Ahmad', NULL, NULL, 'ac.yousefzadeh@azaruniv.ac.ir', 'http://pajouhesh.azaruniv.ac.ir/_Pages/Researcher.aspx?ID=2971', '2019-05-07 14:16:30', '2019-05-07 14:16:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `text` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 2),
(3, '2019_05_04_074254_create_posts_table', 3),
(4, '2019_05_04_074809_create_documents_table', 3),
(5, '2019_05_04_075524_create_abouts_table', 4),
(6, '2019_05_04_075847_create_images_table', 4),
(7, '2019_05_04_080202_create_faculties_table', 4),
(8, '2019_05_04_081222_create_researches_table', 4),
(9, '2019_05_04_081517_create_conferences_table', 4),
(10, '2019_05_04_083139_create_campus_lives_table', 5),
(11, '2019_05_04_084359_create_students_table', 5),
(12, '2019_05_04_085232_create_staff_table', 5),
(13, '2019_05_04_085454_create_mous_table', 5),
(14, '2019_05_04_085601_create_projects_table', 5),
(15, '2019_05_04_085902_create_partnerships_table', 5),
(16, '2019_05_04_090305_create_l_l_c_forms_table', 5),
(17, '2019_05_04_090403_create_courses_table', 6),
(18, '2019_05_04_090721_create_contacts_table', 6),
(19, '2019_05_04_090840_create_links_table', 6),
(20, '2019_05_04_090940_create_messages_table', 6),
(21, '2019_05_04_091248_create_departments_table', 6),
(22, '2019_05_04_091326_create_masters_table', 6),
(23, '2019_05_04_091712_create_sliders_table', 6),
(24, '2019_05_04_100057_add_faculty_id_to_departments', 7),
(25, '2019_05_05_102449_add_title_to_students', 8),
(26, '2019_05_06_093719_add_title_to_researches', 9),
(27, '2019_05_06_110048_add_executer_to_projects', 10);

-- --------------------------------------------------------

--
-- Table structure for table `mous`
--

DROP TABLE IF EXISTS `mous`;
CREATE TABLE IF NOT EXISTS `mous` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `partnerships`
--

DROP TABLE IF EXISTS `partnerships`;
CREATE TABLE IF NOT EXISTS `partnerships` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `executers` varchar(255) DEFAULT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `researches`
--

DROP TABLE IF EXISTS `researches`;
CREATE TABLE IF NOT EXISTS `researches` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` varchar(255) DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$RF8h3uFl5EiG7P8cn8YGUu/wrtflCebyV7CwxQrGqOy/z4A429Ktq', 'VCfN8HhpJC5ZRLR5Lc7bpniFPRgXgN8ey1fI51w8u2NvKV1zEA0hUOECf9DF', '2019-05-05 03:37:31', '2019-05-05 03:37:31');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

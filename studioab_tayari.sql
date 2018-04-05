-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 05, 2018 at 12:58 AM
-- Server version: 5.5.51-38.2
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `studioab_tayari`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE IF NOT EXISTS `aboutus` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'The word', '<span style="font-weight: bold;">erfeqfq</span>', NULL, NULL),
(2, 'sgfcwghdf', '                                    <span style="font-weight: 700; font-style: italic;">updated content</span>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subcategory` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `subcategory`, `type`, `created_at`, `updated_at`) VALUES
(1, 'bank', 'level1', 'practice', '2018-04-03 11:11:45', '2018-04-03 16:11:45'),
(2, 'ssc', 'level1', 'practice', '2018-04-03 07:16:31', '0000-00-00 00:00:00'),
(7, 'bank', 'level1', 'test', '2018-04-03 07:17:14', '0000-00-00 00:00:00'),
(8, 'ssc', 'level1', 'test', '2018-04-03 07:17:14', '0000-00-00 00:00:00'),
(9, 'grammer', '', 'learning', '2018-04-03 08:23:19', '0000-00-00 00:00:00'),
(10, 'tenses', '', 'learning', '2018-04-03 08:23:19', '0000-00-00 00:00:00'),
(11, 'fdfdf', 'fdfd', 'fdfdf', '2018-04-04 11:52:32', '2018-04-04 11:52:32'),
(12, 'preposition', '', 'learning', '2018-04-04 14:50:07', '2018-04-04 14:50:07');

-- --------------------------------------------------------

--
-- Table structure for table `dailyphrase`
--

CREATE TABLE IF NOT EXISTS `dailyphrase` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `written` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `spoken` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `formal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `informal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `metadata` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_example` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `second_example` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dailyphrase`
--

INSERT INTO `dailyphrase` (`id`, `title`, `subtitle`, `description`, `written`, `spoken`, `formal`, `informal`, `metadata`, `first_example`, `second_example`, `date`, `created_at`, `updated_at`) VALUES
(5, 'Today PHRASE', 'Today PHRASE PHRASE', '                    \r\n                test', 'Yes', 'Yes', 'Yes', 'Today PHRASE', 'test', '                    Today PHRASE\r\n                \r\n                ', '                    Today PHRASE\r\n                ', '2018-03-26', '2018-03-26 14:43:19', '0000-00-00 00:00:00'),
(6, 'example', 'sub example', '', 'Yes', 'Yes', 'Yes', 'Yes', '', 'Description\r\n                ', 'Description\r\n                ', '2018-03-25', '2018-03-26 05:00:00', '0000-00-00 00:00:00'),
(7, 'ngnhghng', 'htghfghfhg', '', 'No', 'No', 'No', 'Yes', '', '\r\n                hfghrfgh', 'hfghfgrf\r\n                ', '2018-03-24', '2018-03-26 05:00:00', '0000-00-00 00:00:00'),
(8, 'Phrase of The Day', 'Phrase of The Day', '', 'No', 'Yes', 'Yes', 'Yes', 'Phrase of The Day', 'Phrase of The Day\r\n                ', 'Phrase of The Day\r\n                ', '2018-03-27', '2018-03-27 05:00:00', '0000-00-00 00:00:00'),
(9, 'Title of the Phrase', 'Sub Title of the Phrase', '                    Description\r\n                ', 'Yes', 'No', 'Yes', 'Title of the Phrase', 'Metadata of the Phrase', '                    Example 1of the phrase\r\n                ', '                    Example 1of the phrase\r\n                ', '2018-03-28', '2018-03-27 12:57:45', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `dailytips`
--

CREATE TABLE IF NOT EXISTS `dailytips` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `example_1` text COLLATE utf8_unicode_ci,
  `example_2` text COLLATE utf8_unicode_ci,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dailytips`
--

INSERT INTO `dailytips` (`id`, `title`, `description`, `example_1`, `example_2`, `date`, `created_at`, `updated_at`) VALUES
(13, 'How to speak English fluently and confidently : 10 simple tips', 'You want to learn how to speak English fluently, but do not know where to start? Here are 10 simple tips from Rin Career Ready Academy.\r\n', 'Start with believing in yourself\r\n“I was afraid to speak. I was scared people would make fun of me. Will they judge me?\r\n\r\nOne day, I thought if so many people can, even I can. So I spoke in English and my confidence increased.” – Rin Career Ready Academy participant, 2015\r\n', 'Listen a little. Speak a little. Read a little. Write a little. Then, listen a little more. Speak a little more. Read a little more. Write a little more. Do this, till it becomes a habit.\r\n', '2018-04-04', '2018-04-04 05:00:00', NULL),
(14, 'gfg', 'ggdgd', 'gdgdg', 'grgrgr', '2018-04-05', '2018-04-04 05:00:00', NULL),
(15, 'Transcend 4gb ddr3 Laptop ram', 'nknk', 'njbnk', 'kmn,', '2018-04-04', '2018-04-04 05:00:00', NULL),
(16, 'test', 'tgrg', 'gfdfdfg', 'fgdgfd', '2018-04-04', '2018-04-04 05:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dailyword`
--

CREATE TABLE IF NOT EXISTS `dailyword` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description_hindi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `example_english` text COLLATE utf8_unicode_ci NOT NULL,
  `example_hindi` text COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dailyword`
--

INSERT INTO `dailyword` (`id`, `title`, `description`, `description_hindi`, `example_english`, `example_hindi`, `date`, `created_at`, `updated_at`) VALUES
(1, 'Hello', '\r\n**xfgbhgfdnhgfn**', 'This is the hindi description', 'This is the english example', 'This is the hindi example', '2018-03-25', NULL, NULL),
(2, 'Second', 'Second Word', '', '', '', '0000-00-00', NULL, NULL),
(3, 'Third', 'This is the third word\r\n', '', '', '', '0000-00-00', '2018-01-24 18:30:00', NULL),
(4, 'Fourth', 'This is the third word\r\n', '', '', '', '0000-00-00', '2018-01-24 18:30:00', NULL),
(6, 'Fifth', 'This is the third word\r\n', '', '', '', '0000-00-00', '2018-01-24 18:30:00', NULL),
(7, 'ghrhr', 'This is the third word\r\n', '', '', '', '0000-00-00', '2018-01-24 18:30:00', NULL),
(8, 'wfdsf', '\r\ngvsdgsdg', '', '', '', '0000-00-00', '2018-01-24 18:30:00', NULL),
(9, 'werfdeqf', '\r\nrgrfg', '', '', '', '0000-00-00', '2018-01-24 18:30:00', NULL),
(11, 'gsd gfjh', '\r\n*sfsdafsadg*', '', '', '', '0000-00-00', '2018-01-24 18:30:00', NULL),
(12, 'fdgfdh', '\r\nhjfg', '', '', '', '0000-00-00', '2018-01-24 18:30:00', NULL),
(13, 'bxcv bcvn ', '\r\ncnnmvbmvbn', '', '', '', '0000-00-00', '2018-01-24 18:30:00', NULL),
(14, 'Admin', '\r\n**Sansthapak**', '', '', '', '0000-00-00', '2018-01-26 18:30:00', NULL),
(16, 'Administrator', '\r\n**Sansthapak**', '', '', '', '0000-00-00', '2018-01-26 18:30:00', NULL),
(18, 'roundcube', '\r\n**Sansthapak**', '', '', '', '0000-00-00', '2018-01-26 18:30:00', NULL),
(22, 'digital', '\r\n**roundrobin**', '', '', '', '0000-00-00', '2018-01-26 18:30:00', NULL),
(23, 'ADD DAILY WORDS', '\r\nADD DAILY WORDS\r\n', '\r\nADD DAILY WORDS fbf\r\n', '\r\nExample English', '\r\nExample Hindi', '2018-03-25', '2018-03-26 05:00:00', NULL),
(24, 'example', '\r\nDescription', '\r\nDescription Hindi\r\n', '\r\nExample English\r\n', 'Example Hindi\r\n', '2018-03-26', '2018-03-26 05:00:00', NULL),
(25, 'Title', 'Description\r\n', 'Description Hindi\r\n\r\n', 'Example English\r\n\r\n', 'Example Hindi\r\n\r\n', '2018-03-27', '2018-03-27 05:00:00', NULL),
(27, 'ADD DAILY WORDS bf', 'Descriptiongrg\r\n', 'Description Hindi grgr\r\n\r\n', 'Example English grfgr\r\n\r\n', 'Example Hindiggr\r\n\r\n', '2018-03-26', '2018-03-27 05:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `learning`
--

CREATE TABLE IF NOT EXISTS `learning` (
  `id` int(10) NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lesson_number` int(10) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `topic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `example_1` text COLLATE utf8_unicode_ci NOT NULL,
  `example_2` text COLLATE utf8_unicode_ci NOT NULL,
  `use_in_sentence` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `learning`
--

INSERT INTO `learning` (`id`, `category`, `lesson_number`, `title`, `topic`, `description`, `example_1`, `example_2`, `use_in_sentence`, `created_at`, `updated_at`) VALUES
(3, 'grammer', 2, 'Title', 'Topic', 'Description', 'Example 1', 'Example 2', 'Use In Sentence', '2018-03-27 08:53:51', '2018-03-27 08:53:51'),
(4, 'grammer', 3, 'Preposition', 'Preposition Topic', 'Description\r\n', 'Description\r\n', 'Example 2\r\n\r\n', 'Use In Sentence\r\n\r\n', '2018-03-27 09:04:13', '2018-03-27 09:04:13'),
(5, 'grammer', 5, 'test2', 'test2', 'test2\r\n', '\r\ntest2', '\r\ntest2', '\r\ntest2', '2018-03-27 09:36:10', '2018-03-27 09:36:10'),
(6, 'tenses', 10, 'test1', 'test1', 'test1\r\n', '\r\ntest1', '\r\ntest1', '\r\ntest1', '2018-03-27 09:49:42', '2018-03-27 09:49:42'),
(7, 'grammer', 4, 'Title', 'Topic', '\r\nDescription', 'Example 1\r\n', 'Example 2\r\n\r\n', 'Use In Sentence\r\n\r\n', '2018-03-27 12:40:19', '2018-03-27 12:40:19'),
(8, 'grammer', 6, 'verb', 'Topic', 'Description\r\n', 'Example 1\r\n\r\n', 'Example 2\r\n\r\n', 'Use In Sentence\r\n\r\n', '2018-03-27 12:43:46', '2018-03-27 12:43:46'),
(9, 'grammer', 7, 'Title', 'Topic', 'Description\r\n', 'Example 1\r\n\r\n', 'Example 2\r\n\r\n', 'Use In Sentence\r\n\r\n', '2018-03-27 12:44:13', '2018-03-27 12:44:13'),
(10, 'preposition', 1, 'test', 'test', 'test\r\n', '\r\ntest', '\r\ntest', '\r\ntest', '2018-04-04 09:53:43', '2018-04-04 09:53:43');

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
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2018_01_24_103147_create_dailywords_table', 2),
('2018_01_25_071208_create_dailyword_table', 3),
('2018_01_27_102232_create_dailyphrase_table', 4),
('2018_01_28_151213_create_dailytips_table', 5),
('2018_01_29_095737_create_testimonials_table', 6),
('2018_01_30_104336_create_aboutus_table', 7),
('2018_01_30_123944_create_privacy_table', 8),
('2018_01_31_064716_create_pages_table', 9),
('2018_02_01_173227_create_categories_table', 10),
('2018_02_01_174419_create_subcategories_table', 11),
('2018_02_05_102723_create_testquestions_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `metatitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keyword` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `pagecontent` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `metatitle`, `keyword`, `description`, `pagecontent`, `created_at`, `updated_at`) VALUES
(1, 'First Page', 'The meta content', 'keywords                                ', 'descriptiom                                ', '                                                                        <h3><span style="font-weight: bold;">This is the updated content</span></h3>                                                                ', '2018-01-31 09:31:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `practicequestions`
--

CREATE TABLE IF NOT EXISTS `practicequestions` (
  `id` int(10) NOT NULL,
  `question` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `optiona` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `optionb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `optionc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `optiond` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `correct_option` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `answer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subcategory` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `practicequestions`
--

INSERT INTO `practicequestions` (`id`, `question`, `optiona`, `optionb`, `optionc`, `optiond`, `correct_option`, `answer`, `category`, `subcategory`, `created_at`, `updated_at`) VALUES
(1, '                                                                                test\r\n                                    \r\n                                    ', 'test1', 'test2', 'test3', 'test4', 'A', '                                                                                test1\r\n                                    \r\n                                    ', 'bank', 'level1', '2018-04-02 16:46:04', '2018-04-02 16:46:04');

-- --------------------------------------------------------

--
-- Table structure for table `privacy`
--

CREATE TABLE IF NOT EXISTS `privacy` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `privacy`
--

INSERT INTO `privacy` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'First Topic', '                                    <span style="font-weight: bold;">The content of page updated</span>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE IF NOT EXISTS `subcategories` (
  `id` int(10) unsigned NOT NULL,
  `subcname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parentc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `metatitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keyword` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `subcname`, `parentc`, `metatitle`, `keyword`, `description`, `type`, `created_at`, `updated_at`) VALUES
(1, 'First subcat', 'First Category', 'The metatitle                                    ', 'The keywords                                    ', 'The description                                    ', 'learning', '2018-02-02 06:07:46', '2018-02-02 06:07:52'),
(2, 'the sub content', 'the sub title', 'The meta content', 'the keywordsss', 'the description', 'test', '2018-02-07 09:35:12', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int(10) unsigned NOT NULL,
  `client_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `client_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `client_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `client_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `client_message` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `client_name`, `client_email`, `client_url`, `client_image`, `client_message`, `created_at`, `updated_at`) VALUES
(1, 'Sara', 'sara@mail.com', 'http://animationmantrastudio.com/Englishtayari/public/edittips/2', '1517303355.jpg', '\r\nhowdy\r\nadmin admin\r\n\r\n\r\n\r\n\r\n', '2018-01-29 18:30:00', NULL),
(2, 'sara ali', 'sarali@mail.com', 'http://animationmantrastudio.com/Englishtayari/public/edittips/2', '1517295544.png', '\r\ntghtgdhjftrjhrftjtrfjfr', '2018-01-29 18:30:00', NULL),
(3, 'third', 'third@mail.com', 'http://animationmantrastudio.com/Englishtayari/public/edittips/2', '1517295642.jpg', '\r\nhghgjhghjghjghjb', '2018-01-29 18:30:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testquestions`
--

CREATE TABLE IF NOT EXISTS `testquestions` (
  `id` int(10) unsigned NOT NULL,
  `question` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `optiona` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `optionb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `optionc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `optiond` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `correct_option` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `answer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subcategory` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `testquestions`
--

INSERT INTO `testquestions` (`id`, `question`, `optiona`, `optionb`, `optionc`, `optiond`, `correct_option`, `answer`, `category`, `subcategory`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test1', 'test2', 'test3', 'test4', 'A', 'test1\n', 'bank', 'level1', '2018-03-29 14:56:19', '2018-03-29 14:56:19'),
(5, 'test1', 'test', 'test', 'test', 'test', 'A', 'test', 'bank', 'level1', '2018-03-29 17:49:26', '2018-03-29 17:49:26'),
(6, 'Choose any One', 'A', 'B', 'C', 'D', 'A', 'A', 'ssc', 'level1', '2018-03-31 16:56:05', '2018-03-31 16:56:05'),
(7, 'Choose any one                                        \n                                    ', 'A', 'B', 'C', 'D', 'D', 'D', 'ssc', 'level1', '2018-03-31 16:58:20', '2018-03-31 16:58:20'),
(8, 'rgrdgfrgr', 'A', 'B', 'C', 'D', 'D', 'rgrgrgrg', 'ssc', 'level1', '2018-03-31 17:18:41', '2018-03-31 17:18:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '', 'shivyas10@gmail.com', '$2y$10$munbwwEawNoqol7.8/Opt.vg4vXge2mjXyYOa7rcrZj6WzoqgyyFG', 'IKUNZmMtwr8SnLEeXpmebyXOmuOqzXhVVVPDjfP9Ir3A4Y1FR5jbsRdkIxTV', '2018-01-19 04:46:48', '2018-04-04 14:33:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dailyphrase`
--
ALTER TABLE `dailyphrase`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `dailyphrase_title_unique` (`title`);

--
-- Indexes for table `dailytips`
--
ALTER TABLE `dailytips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dailyword`
--
ALTER TABLE `dailyword`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `dailyword_title_unique` (`title`);

--
-- Indexes for table `learning`
--
ALTER TABLE `learning`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `pages_title_unique` (`title`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `practicequestions`
--
ALTER TABLE `practicequestions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privacy`
--
ALTER TABLE `privacy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `subcategories_subcname_unique` (`subcname`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testquestions`
--
ALTER TABLE `testquestions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `dailyphrase`
--
ALTER TABLE `dailyphrase`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `dailytips`
--
ALTER TABLE `dailytips`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `dailyword`
--
ALTER TABLE `dailyword`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `learning`
--
ALTER TABLE `learning`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `practicequestions`
--
ALTER TABLE `practicequestions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `privacy`
--
ALTER TABLE `privacy`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `testquestions`
--
ALTER TABLE `testquestions`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

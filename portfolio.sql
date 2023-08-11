-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql108.infinityfree.com
-- Generation Time: Aug 11, 2023 at 05:57 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_34692258_portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `password_` text NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_id`, `password_`, `added_on`) VALUES
(1, 'pkrahul93', 'pkrahul123', '2022-04-24 06:08:30');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `status`, `added_on`) VALUES
(1, 'Frontend', 1, '2022-04-24 10:11:58'),
(2, 'Blogging-Site', 1, '2022-04-24 10:11:58'),
(3, 'e-Commerce', 1, '2022-04-24 10:11:58'),
(4, 'Services-Site', 1, '2022-04-24 10:11:58'),
(5, 'Matrimonial-Site', 1, '2022-04-24 10:11:58'),
(6, 'Charity-Site', 1, '2022-04-24 10:11:58'),
(7, 'CMS', 1, '2022-04-24 10:11:58'),
(8, 'Management-System', 1, '2022-04-24 10:11:58'),
(9, 'MLM', 1, '0000-00-00 00:00:00'),
(10, 'Others', 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email_` varchar(150) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `msg_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email_`, `contact`, `subject`, `message`, `msg_on`) VALUES
(1, 'Mukesh Kumar', 'mukesh@gmail.com', 8954612348, 'Query about to discussing website development.', 'Query about to discussing website development.Query about to discussing website development.Query about to discussing website development.Query about to discussing website development.Query about to discussing website development.Query about to discussing website development.Query about to discussing website development.Query about to discussing website development.Query about to discussing website development.Query about to discussing website development.', '2022-04-12'),
(2, 'Rahul kumar', 'pkrahul93@gmail.com', 9304036507, 'Test message', 'Hii , there myself Mohan.', '2022-04-27'),
(3, 'Ganni', 'gani@gmail.com', 8569587465, 'Test message2', 'Hii there, this is just a test message for testing.', '2022-05-20'),
(4, 'Ganni', 'gani@gmail.com', 8569587465, 'Test message2', 'Hii there, this is just a test message for testing.', '2022-05-20'),
(5, 'Krish', 'krish@gmail.com', 6985478569, 'Test message', 'Test message....', '2022-05-20'),
(6, 'Raghav', 'pkrahul93@gmail.com', 9304036507, 'Test', 'Test message ', '2023-07-26'),
(7, 'NITESH KUMAR', 'niteshkumar705030@gmail.com', 7488542520, 'hlw sir ', 'demo', '2023-08-06');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `id` int(11) NOT NULL,
  `clients` int(11) NOT NULL,
  `sites` int(11) NOT NULL,
  `exps` int(11) NOT NULL,
  `apps` int(11) NOT NULL,
  `cl_icon` varchar(100) NOT NULL,
  `s_icon` varchar(100) NOT NULL,
  `ex_icon` varchar(100) NOT NULL,
  `app_icon` varchar(100) NOT NULL,
  `added_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`id`, `clients`, `sites`, `exps`, `apps`, `cl_icon`, `s_icon`, `ex_icon`, `app_icon`, `added_on`) VALUES
(1, 30, 30, 2, 5, '<i class=\"bi bi-emoji-smile\"></i>', '<i class=\"bi bi-globe\"></i>', '<i class=\"bi bi-award\"></i>', '<i class=\"bi bi-puzzle\"></i>', '2023-07-26');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` int(11) NOT NULL,
  `u_name` varchar(80) NOT NULL,
  `u_email` varchar(100) NOT NULL,
  `u_phone` int(10) NOT NULL,
  `subject` varchar(120) NOT NULL,
  `message` text NOT NULL,
  `enquiry_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `id` int(11) NOT NULL,
  `offer_png` text NOT NULL,
  `offer_bg` text NOT NULL,
  `discount` varchar(50) NOT NULL,
  `details` text NOT NULL,
  `subject` varchar(100) NOT NULL,
  `start_dt` date NOT NULL,
  `end_dt` date NOT NULL,
  `remaining_day` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `offered_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` int(11) NOT NULL,
  `site_name` varchar(100) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `client` varchar(100) NOT NULL,
  `project_date` date NOT NULL,
  `url` varchar(100) NOT NULL,
  `about_site` text NOT NULL,
  `img1` varchar(150) NOT NULL,
  `img2` varchar(150) NOT NULL,
  `img3` varchar(150) NOT NULL,
  `filter` varchar(50) NOT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `site_name`, `cat_id`, `client`, `project_date`, `url`, `about_site`, `img1`, `img2`, `img3`, `filter`, `slug`, `status`) VALUES
(2, 'BestCareBay', 2, 'Unknown', '2022-02-22', 'On Local', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p style=\"box-sizing: border-box; margin: 0px; font-family: /open sans/, sans-serif; color: #343a40;\">We cater to the need of the consumers to know all about technologies and digital marketing. The world is technologically changing faster than ever. Being updated and informed about technology is crucial in this era. We serve this purpose through our informative blogs.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px; font-family: /open sans/, sans-serif; color: #343a40;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin: 0px; font-family: /open sans/, sans-serif; color: #343a40;\">We have mainly Seven sections on our home page. Our sections are namely News, Technology,&nbsp;Marketing,&nbsp;Software,&nbsp;Security, How to and&nbsp;Reviews.</p>\r\n</body>\r\n</html>', 'upload/be1.png', 'upload/be2.png', 'upload/be3.png', 'filter-blog', 'best+care+bay', 1),
(4, 'Get Support With Experts', 4, 'Unknown....', '2022-03-03', 'On Local', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p class=\"text-center\" style=\"box-sizing: border-box; margin: 5px 0px 30px; font-weight: 400; line-height: 1.2; font-size: 24px; font-family: Roboto, sans-serif; text-align: center; color: #555555;\">It is an online service provider site . It provides service via booking online appointment method.<br /><br />Book An Appointment For Your Needs & Quaries And Get Advice And Best Support With Industry/s Best Technical Experts and Advisores.</p>\r\n</body>\r\n</html>', 'upload/ge1.png', 'upload/ge2.png', 'upload/ge3.png', 'filter-service', 'get+support', 1),
(5, 'Loan Company Site', 10, 'Unknown', '2022-11-10', '#', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 1rem; padding: 0px; border: none; outline: none; font-size: 15px; color: #828282; font-family: Rubik, sans-serif;\">Hailp Loan Services: A one-stop solution to get instant financial relief. Are you searching for a reliable destination to ease your financial crisis but are unsure about whom to trust? This uncertainty is quite common due to a great number of money lenders out there.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 1rem; padding: 0px; border: none; outline: none; font-size: 15px; color: #828282; font-family: Rubik, sans-serif;\">Here you require a one-stop destination that claims to support you with your finance irrespective of your expectations, requirements, or eligibility.</p>\r\n</body>\r\n</html>', 'upload/loan5.png', 'upload/loan2.png', 'upload/loan4.png', 'filter-other', 'loan+site', 1),
(6, 'Dreams In Fabrics', 3, 'Mayur Totalwar', '2023-04-20', 'https://www.dreamsinfabric.com/', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><span style=\"font-family: Rubik, sans-serif; font-size: 18px; text-align: justify;\">&ldquo; Dreams In Fabric Industries Pvt. Ltd.&rdquo; is direct selling private limited company which aims to sell products at affordable prices and to reach globally, we sell our product with our own brand name &ldquo;Topshelf&rdquo;. If you would like to experience best of online shopping for men and women in india, &ldquo; Dreams In Fabric Industries Pvt. Ltd.&rdquo;, is ultimate destination for fashion and lifestyle , being host to a wide array of merchandise including clothing , accessories and more. It is time to redefine your style statement with our treasure-trove of trendy items. </span></p>\r\n</body>\r\n</html>', 'upload/dream011.png', 'upload/dream012.png', 'upload/dream013.png', 'filter-ecom', 'Dreams+In+Fabrics', 1),
(7, 'CrickHub', 3, 'Unknown', '2022-06-22', 'On Local', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>This is a single vendor e-Commerce site designed using Core PHP, HTML, CSS, Javascript, jQuery, AJAX, Bootstrap And others. For Database management I have used MySql and for Online Payments Used Razorpay Payment Gateway and so on.</p>\r\n</body>\r\n</html>', 'upload/ecom01.png', 'upload/ecom02.png', 'upload/ecom03.png', 'filter-ecom', 'crickhub', 1),
(8, 'RMS Walmart', 3, 'Mithlesh Mehta', '2022-12-29', 'https://rmswalmart.com/', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Site Description :&nbsp;<span style=\"color: #777777; font-family: Lexend, Arial, Helvetica, sans-serif; font-size: 16px;\">Buy your multi-branded home appliances online through the best home appliances retail store in Jharkhand. We are a leading online home appliances store in Jharkhand with the finest appliances from the famous brands with the most advanced technologies.&nbsp;</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-stretch: inherit; line-height: inherit; font-family: Lexend, Arial, Helvetica, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-size: 16px; color: #777777;\">Explore a wide range of appliances from authorized brands, check out the best sellers, and buy high-quality home appliances through&nbsp;<span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-style: inherit; font-variant: inherit; font-weight: 600; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit;\">RMSWALMART</span>, your trusted online shopping partner.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-stretch: inherit; line-height: inherit; font-family: Lexend, Arial, Helvetica, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-size: 16px; color: #777777;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-stretch: inherit; line-height: inherit; font-family: Lexend, Arial, Helvetica, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-size: 16px; color: #777777;\">This website has developed by Wordpress and Elementor and various types of pluggins like wo-Commerce.</p>\r\n</body>\r\n</html>', 'upload/rms1.png', 'upload/rms2.png', 'upload/rms3.png', 'filter-ecom', 'rms+walmart', 1),
(9, 'Go-Green', 3, 'Unknown', '2023-05-13', 'On Local', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>This is a Multi Vendor e-Commerce site designed using Core PHP, HTML, CSS, Javascript, jQuery, AJAX, Bootstrap And others. For Database management I have used MySql and for Online Payments Used Razorpay Payment Gateway and so on. This has three pannels like Admin Pannel, Inventroy management Pannel, And the main site. Still in development...</p>\r\n</body>\r\n</html>', 'upload/green1.png', 'upload/green2.png', 'upload/green3.png', 'filter-ecom', 'go+green+ecom', 1),
(10, 'Teacherji Online', 4, 'Unknown', '2023-07-10', 'https://teacherji.online/', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Site Description :&nbsp;<span style=\"color: #666666; font-size: 16px; background-color: #f8f9fa; font-family: Poppins, sans-serif;\">Teacherji.online is a free website, trusted by thousands of Teacher, students and parents.</span></p>\r\n<div class=\"terms-text\" style=\"box-sizing: border-box; margin-bottom: 20px; color: #272b41; font-family: Poppins, sans-serif; font-size: 15px; background-color: #f8f9fa;\">\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #666666; display: inline-block; font-size: 16px;\">We are not the biggest, but we care the best. We put the work to be that awesome for you.</p>\r\n</div>\r\n<div class=\"terms-text\" style=\"box-sizing: border-box; margin-bottom: 20px; color: #272b41; font-family: Poppins, sans-serif; font-size: 15px; background-color: #f8f9fa;\">\r\n<h4 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 20px; font-weight: 500; line-height: 1.2; font-size: 24px;\">Mission</h4>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #666666; display: inline-block; font-size: 16px;\">To make every teacher searchable in their local area for home tuition. To keep the website free for students.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #666666; display: inline-block; font-size: 16px;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #666666; display: inline-block; font-size: 16px;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #666666; display: inline-block; font-size: 16px;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #666666; display: inline-block; font-size: 16px;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #666666; display: inline-block; font-size: 16px;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #666666; display: inline-block; font-size: 16px;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #666666; display: inline-block; font-size: 16px;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #666666; display: inline-block; font-size: 16px;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #666666; display: inline-block; font-size: 16px;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #666666; display: inline-block; font-size: 16px;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #666666; display: inline-block; font-size: 16px;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #666666; display: inline-block; font-size: 16px;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #666666; display: inline-block; font-size: 16px;\">&nbsp;</p>\r\n</div>\r\n</body>\r\n</html>', 'upload/teach.png', 'upload/teach02.png', 'upload/teach03.png', 'filter-service', 'teacher+ji', 1),
(11, 'HSCC ', 9, 'Unknown', '2023-02-23', 'On Local', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><span style=\"color: #333333; font-family: Muli, sans-serif; font-size: 16px;\">We believe in democratising the arbitrage space by redistributing power away from huge financial institutions and back into the hands of regular people. HSCC is dedicated to establishing an atmosphere in which even people with little expertise or without a hefty pocket can profit from pricing discrepancies in the market.</span></p>\r\n<p><span style=\"color: #333333; font-family: Muli, sans-serif; font-size: 16px;\">Developed Binary Model Of MLM System Using Laravel and other frontend technologies.</span></p>\r\n</body>\r\n</html>', 'upload/hscc01.png', 'upload/hscc04.png', 'upload/hscc03.png', 'filter-mlms', 'hscc', 1),
(12, 'Dil Ki Aawaz', 10, 'My Personal Site', '2022-03-17', 'http://heartfeel.great-site.net/', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>This is a Shayri site designed using Core PHP, HTML, CSS, Javascript, jQuery, AJAX, Bootstrap And others. For Database management I have used MySql and so on....</p>\r\n</body>\r\n</html>', 'upload/dil1.png', 'upload/dil2.png', 'upload/dil3.png', 'filter-other', 'dil+ki+aawaz', 1),
(13, 'CMS Sample', 7, 'Unknown', '2022-08-22', '#', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>This is a sample of CMS like Admin Pannel designed using Core PHP, HTML, CSS, Javascript, jQuery, AJAX, Bootstrap And others. For Database management I have used MySql and so on...</p>\r\n</body>\r\n</html>', 'upload/dream21.png', 'upload/dream23.png', 'upload/dream24.png', 'filter-cms', 'cms+sampale+3', 1),
(14, 'CMS Sample', 7, 'Unknown', '2022-10-18', 'On Local', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>This is a sample of CMS like Admin Pannel designed using Core PHP, HTML, CSS, Javascript, jQuery, AJAX, Bootstrap And others. For Database management I have used MySql and so on...</p>\r\n</body>\r\n</html>', 'upload/dream20.png', 'upload/dream22.png', 'upload/dream24.png', 'filter-cms', 'cms+sampale+1', 1),
(15, 'CMS Sample', 7, 'Unknown', '2023-01-24', '#', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>This is a sample of CMS like Admin Pannel designed using Core PHP, HTML, CSS, Javascript, jQuery, AJAX, Bootstrap And others. For Database management I have used MySql and so on...</p>\r\n</body>\r\n</html>', 'upload/dream31.png', 'upload/dream32.png', 'upload/dream34.png', 'filter-cms', 'cms+sampale+2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `prj_name` varchar(100) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `filter` varchar(40) NOT NULL,
  `prj_img` varchar(150) NOT NULL,
  `prj_url` varchar(100) NOT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `project_date` date NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `prj_name`, `cat_id`, `filter`, `prj_img`, `prj_url`, `slug`, `project_date`, `status`) VALUES
(1, 'BestCareBay', 2, 'filter-blog', 'upload/bestcarebay.png', 'https://www.bestcarebay.com', 'best+care+bay', '2022-02-22', 1),
(2, 'Get Support With Experts', 4, 'filter-service', 'upload/techsupport.png', 'https://soclo-legal.supram.in/Techsupport', 'get+support', '2022-03-03', 1),
(3, 'Automobile Villa', 3, 'filter-ecom', 'upload/autovila.png', 'https://soclo-legal.supram.in', 'auto+villa', '2022-04-20', 1),
(4, 'Socio Legal', 6, 'filter-charity', 'upload/sociolegal.png', 'https://sociolegal.org', 'socio+legal', '2022-02-22', 1),
(5, 'Parinayasutra', 5, 'filter-matrimonial', 'upload/parinaysutra.png', 'https://www.parinayasutra.org', 'Parinayasutra', '2022-02-14', 1),
(6, 'Ashapura Tiles & Minerals', 4, 'filter-service', 'upload/ashapura.png', 'https://pkrahul93.github.io/ashapura', 'aashapura+tiles', '2022-01-18', 1),
(8, 'Loan Company Site', 10, 'filter-other', 'upload/loan1.jpg', 'On Local', 'loan+site', '2022-11-10', 1),
(9, 'Dreams In Fabrics', 3, 'filter-ecom', 'upload/dream01.jpg', 'https://www.dreamsinfabric.com/', 'Dreams+In+Fabrics', '2023-04-20', 1),
(10, 'CMS Sample', 7, 'filter-cms', 'upload/dream22.png', 'On Local', 'cms+sampale+1', '2022-10-18', 1),
(11, 'CrickHub', 3, 'filter-ecom', 'upload/ecom1.jpg', 'On Local', 'crickhub', '2022-06-22', 1),
(12, 'CMS Sample', 7, 'filter-cms', 'upload/dream31.png', 'On Local', 'cms+sampale+2', '2023-01-24', 1),
(13, 'Teacherji Online', 4, 'filter-service', 'upload/teach1.jpg', 'https://teacherji.online/', 'teacher+ji', '2023-07-10', 1),
(14, 'HSCC ', 9, 'filter-mlms', 'upload/hscc1.jpg', 'On Local', 'hscc', '2023-02-23', 1),
(15, 'RMS Walmart', 3, 'Selected disabled', 'upload/rms.jpg', 'https://rmswalmart.com/', 'rms+walmart', '2022-12-29', 1),
(16, 'Dil Ki Aawaz', 10, 'filter-other', 'upload/dil.jpg', 'http://heartfeel.great-site.net/', 'dil+ki+aawaz', '2022-03-17', 1),
(17, 'Go Green', 3, 'filter-ecom', 'upload/green.jpg', 'On Local', 'go+green+ecom', '2023-05-13', 1),
(18, 'CMS Sample', 7, 'filter-cms', 'upload/dream21.png', '#', 'cms+sampale+3', '2022-08-22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `post` varchar(100) NOT NULL,
  `phone_no` bigint(20) NOT NULL,
  `client_pic` varchar(100) NOT NULL,
  `review` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `review_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `post`, `phone_no`, `client_pic`, `review`, `status`, `review_on`) VALUES
(9, 'Mahesh Tripathi', 'IT Executive', 8569758965, 'upload/00b8d5890f454e510a3f540ea9e09a0d.jpg', 'Your work has given very satisfaction to me or our company. We are very glad to work with you. You are such a very friendly person that put a great personality to deliver the project before your given dead-line. Once again thank you so much sir.', 1, '2023-07-26'),
(10, 'Deepak Gorai', 'MD', 8569856985, 'admin/upload/02.png', 'jgchkvjbnk hvjlb', 0, '2023-07-26'),
(11, 'Mrinal Ghosh', 'Manager', 8569758548, 'upload/7ba79b40c86a6bf138d0321eac41fa74.jpg', 'So nice service you provide for our clients and the company. Really you are so hard working in nature and friendly.', 1, '2023-07-26'),
(12, 'Mayank Kumar', 'HR ', 8547125869, 'upload/7675b498dcbe8ed610b63cccc16c8744.jpg', 'Sir me and my company is very glad to you and your price less effort and your work. Our Website is running very smoothly as we want thanks for your nice support.', 1, '2023-07-27'),
(13, 'Mona Desai', 'BD', 8652356428, 'upload/IMG_20220711_210824.jpg', 'Sir your work is really so impressive. We and our clients are very happy to your efforts and priceless working. Hope we will work together continue in same manner in future. Thanks for your nice work.', 1, '2023-08-05');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `service_name` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `service_dtl` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `added_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `icon`, `service_dtl`, `status`, `added_on`) VALUES
(2, 'Website Development', '<i class=\"bx bxl-dribbble\"></i>', 'Can design websites for buisness like Tech-Support sites, Matrimonial sites, e-Commerce Sites, Blogging Sites, News Sites, Service Provider sites, Gym Management sites, Hospital/Clinic Management sites and many more.', 1, '2022-04-25'),
(3, 'Web Apps Development', '<i class=\"bx bx-file\"></i>', 'Anyone can want to make web Application for their targeted buisness then Hurry up, You have better option here to get Web-app on instant time as well as effordable price.', 1, '2022-04-27'),
(4, 'Android Webview Development', '<i class=\"bx bx-tachometer\"></i>', 'Anyone can want to make android webview Application for their website, have better option here to get app on instant time as well as effordable price.', 1, '2022-04-27'),
(5, 'Flutter Webview Development', '<i class=\"bx bx-world\"></i>', 'Anyone can want to make flutter webview Application for their website, have better option here to get app on instant time as well as effordable price.', 1, '2022-04-27'),
(6, 'Redesign Websites', '<i class=\"bx bx-slideshow\"></i>', 'Anyone, who want to redesign their pre build websites or update their websites with new features they contact me through my refferals.', 1, '2022-04-27'),
(7, 'e-Commerce Website Development', '<i class=\"bx bx-arch\"></i>', 'You can get Single Vendor or Multi-Vendor like B2B, B2C e-Commerce Websites with online payment process & many more features and can grow your buisness online instantly.', 1, '2022-04-27');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `skill` varchar(100) NOT NULL,
  `avg` int(11) NOT NULL,
  `aaded_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skill`, `avg`, `aaded_on`) VALUES
(1, 'HTML', 90, '2022-05-20'),
(2, 'CSS', 75, '2022-05-20'),
(3, 'JavaScript', 70, '2022-05-20'),
(4, 'jQuery', 80, '2022-05-20'),
(5, 'AJAX', 55, '2022-05-20'),
(6, 'Python', 80, '2022-05-20'),
(7, 'Dynamic Website Development', 90, '2022-05-20'),
(8, 'Rest API Development & Integration', 55, '2022-05-20'),
(9, 'e-Commerce Website Development', 75, '2022-05-20'),
(10, 'PHP/Core PHP', 85, '2022-05-20'),
(11, 'MYSQL', 75, '2022-05-20'),
(12, 'Bootstrap', 80, '2022-05-20'),
(13, 'WordPress', 60, '2022-05-20'),
(14, 'MLM Software Development', 70, '2022-05-20'),
(15, 'Webview App Development', 55, '2022-05-20'),
(16, 'Photoshop', 45, '2022-05-20'),
(17, 'SEO Based Websites', 80, '2022-05-20'),
(18, 'Laravel', 45, '2023-07-26'),
(19, 'Codeigniter', 60, '2023-07-26'),
(20, 'Lampp', 60, '2023-07-26'),
(21, 'Gitlab', 55, '2023-07-26'),
(22, 'Github', 45, '2023-07-26'),
(23, 'PHP OOPs', 40, '2023-07-26'),
(24, 'MVC Strructure', 65, '2023-07-26'),
(25, 'PostgreSQL', 30, '2023-07-26');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` bigint(20) NOT NULL,
  `total_count` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `total_count`) VALUES
(1, 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

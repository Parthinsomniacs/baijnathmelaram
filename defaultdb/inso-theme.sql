-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 18, 2024 at 08:07 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inso-theme`
--

-- --------------------------------------------------------

--
-- Table structure for table `blocks`
--

CREATE TABLE `blocks` (
  `customblockid` int(11) NOT NULL,
  `customblockcontent` text DEFAULT NULL,
  `page` varchar(512) DEFAULT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `junkleads`
--

CREATE TABLE `junkleads` (
  `leads_id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(512) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `formtype` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `utm_source` varchar(255) DEFAULT NULL,
  `utm_medium` varchar(255) DEFAULT NULL,
  `utm_campaign` varchar(255) DEFAULT NULL,
  `utm_content` varchar(255) DEFAULT NULL,
  `utm_term` varchar(255) DEFAULT NULL,
  `utm_isource` varchar(255) DEFAULT NULL,
  `utm_imedium` varchar(255) DEFAULT NULL,
  `utm_icampaign` varchar(255) DEFAULT NULL,
  `utm_icontent` varchar(255) DEFAULT NULL,
  `utm_iterm` varchar(255) DEFAULT NULL,
  `utm_initial_referrer` varchar(255) DEFAULT NULL,
  `utm_last_referrer` varchar(255) DEFAULT NULL,
  `utm_landing_page` varchar(255) DEFAULT NULL,
  `utm_visits` varchar(255) DEFAULT NULL,
  `browser_name` varchar(256) DEFAULT NULL,
  `browser_version` varchar(256) DEFAULT NULL,
  `browser_platform` varchar(256) DEFAULT NULL,
  `ip_address` varchar(256) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE `leads` (
  `leads_id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(512) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `formtype` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `random_val` varchar(255) DEFAULT NULL,
  `utm_source` varchar(255) DEFAULT NULL,
  `utm_medium` varchar(255) DEFAULT NULL,
  `utm_campaign` varchar(255) DEFAULT NULL,
  `utm_content` varchar(255) DEFAULT NULL,
  `utm_term` varchar(255) DEFAULT NULL,
  `utm_isource` varchar(255) DEFAULT NULL,
  `utm_imedium` varchar(255) DEFAULT NULL,
  `utm_icampaign` varchar(255) DEFAULT NULL,
  `utm_icontent` varchar(255) DEFAULT NULL,
  `utm_iterm` varchar(255) DEFAULT NULL,
  `utm_initial_referrer` varchar(255) DEFAULT NULL,
  `utm_last_referrer` varchar(255) DEFAULT NULL,
  `utm_landing_page` varchar(255) DEFAULT NULL,
  `utm_visits` varchar(255) DEFAULT NULL,
  `browser_name` varchar(256) DEFAULT NULL,
  `browser_version` varchar(256) DEFAULT NULL,
  `browser_platform` varchar(256) DEFAULT NULL,
  `ip_address` varchar(256) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `leads`
--

INSERT INTO `leads` (`leads_id`, `fname`, `lname`, `email`, `phone`, `formtype`, `message`, `random_val`, `utm_source`, `utm_medium`, `utm_campaign`, `utm_content`, `utm_term`, `utm_isource`, `utm_imedium`, `utm_icampaign`, `utm_icontent`, `utm_iterm`, `utm_initial_referrer`, `utm_last_referrer`, `utm_landing_page`, `utm_visits`, `browser_name`, `browser_version`, `browser_platform`, `ip_address`, `created_at`) VALUES
(1, 'Sagar', 'Goswami', 'sagar@themidnight.in', '9925743801', NULL, 'Test', NULL, 'Google', 'Google', 'Google', 'Google', 'Google', 'Google', 'Google', 'Google', 'Google', 'Google', 'Google', 'Google', 'Google', '5', 'chrome', '1.2.3', 'Windows', '14.15.36.21', '2022-09-27 11:17:52'),
(2, 'sagar', 'gauswami', 'sagar@themidnight.in', '9925743801', NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Google Chrome', '107.0.0.0', 'windows', '::1', '2022-11-10 09:12:13');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `uid` int(11) NOT NULL,
  `userrole` varchar(512) NOT NULL DEFAULT 'admin',
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uid`, `userrole`, `username`, `password`, `created_at`) VALUES
(1, 'admin', 'insoadmin', '7e59eeee839e946dc6390f291fec8840', '2021-03-31 06:58:02'),
(2, 'salesadmin', 'insosalesadmin', '60cfceb67f784230ce4c28d6787886b7', '2021-03-31 06:58:02');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `settings_id` int(10) NOT NULL,
  `settings_key` varchar(512) DEFAULT NULL,
  `settings_value` text DEFAULT NULL,
  `settings_title` varchar(512) DEFAULT NULL,
  `settings_help_text` varchar(512) DEFAULT NULL,
  `settings_group` varchar(512) DEFAULT NULL,
  `settings_required` int(11) DEFAULT 0,
  `settings_input_type` varchar(512) DEFAULT NULL,
  `status` int(10) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`settings_id`, `settings_key`, `settings_value`, `settings_title`, `settings_help_text`, `settings_group`, `settings_required`, `settings_input_type`, `status`) VALUES
(17, 'companyname', 'insomniacs', 'Company Name', 'Acme Developers', 'Company Settings', 1, 'text', 1),
(18, 'corporatesiteurl', 'https://insomniacs.in/', 'Corporate Site URL', 'https://example.com/', 'Company Settings', 1, 'text', 1),
(19, 'developer_name', 'insomniacs', 'Developer Name', 'Acme Developers Pvt. Ltd.', 'Company Settings', 0, 'text', 1),
(1, 'sitename', 'insomniacs', 'Site Name', 'Acme Astonia', 'Site Settings', 1, 'text', 1),
(2, 'utmsource', 'insomniacs', 'UTM Source', 'acme_astonia', 'Site Settings', 1, 'text', 1),
(39, 'facebookurl', '', 'Facebook URL', 'https://www.facebook.com/acme', 'Social Media', 0, 'text', 1),
(40, 'twitterurl', '', 'Twitter URL', 'https://www.twitter.com/acme', 'Social Media', 0, 'text', 1),
(41, 'twitterhandle', '', 'Twitter Handle', '@acme', 'Social Media', 0, 'text', 1),
(42, 'linkedinurl', '', 'Linked In', 'https://www.linkedin.com/in/acme', 'Social Media', 0, 'text', 1),
(43, 'googleurl', NULL, 'Google URL', NULL, 'Social Media', 0, 'text', 0),
(44, 'youtubeurl', '', 'Youtube URL', 'https://www.youtube.com/acme', 'Social Media', 0, 'text', 1),
(45, 'instagramurl', '', 'Instagram URL', 'https://www.instagram.com/acme', 'Social Media', 0, 'text', 1),
(46, 'pinteresturl', '', 'Pinterest URL', 'https://www.pinterest.in/acme', 'Social Media', 0, 'text', 1),
(36, 'callingnumber', '', 'Calling No', '+919876543210', 'Contact Settings', 0, 'text', 1),
(38, 'whatsappnumber', '', 'Whatsapp No', '+919876543210', 'Contact Settings', 0, 'text', 1),
(37, 'contactemail', '', 'Contact Email', 'acme@example.com', 'Contact Settings', 0, 'text', 1),
(12, 'block_head_index_page', NULL, 'Block Head Index Page', '', 'Tracking Settings', 0, 'textarea', 1),
(8, 'facebookveri', '', 'Facebook Verification', 'a1b2c3d4e5f6g7e8', 'Tracking Settings', 0, 'text', 1),
(9, 'googleveri', '', 'Google Verification', 'a1b2c3d4e5f6g7e8', 'Tracking Settings', 0, 'text', 1),
(10, 'indiveri', '', 'Indi Verification', 'a1b2c3d4e5f6g7e8', 'Tracking Settings', 0, 'text', 1),
(47, 'copyrightname', 'insomniacs', 'Copyright Name', 'Acme Developers', 'Copyright Settings', 1, 'text', 1),
(48, 'copyrighttext', 'All Rights Reserved', 'Copyright Text', 'All Rights Reserved', 'Copyright Settings', 1, 'text', 1),
(20, 'companyaddress', '', 'Company Address', '1, Tech lane, Neverland, IN - 100001', 'Company Settings', 0, 'text', 1),
(21, 'siteaddress', '', 'Site Address', '1, Tech lane, Neverland, IN - 100001', 'Company Settings', 0, 'text', 1),
(49, 'poweredby', 'insomniacs', 'Powered By', 'insomniacs', 'Copyright Settings', 1, 'text', 1),
(50, 'poweredbylink', 'https://insomniacs.in/?utm_source=', 'Powered By Link', 'https://insomniacs.in', 'Copyright Settings', 1, 'text', 1),
(51, 'pagetype', NULL, 'Page Type', NULL, 'Copyright Settings', 0, 'text', 0),
(52, 'device', NULL, 'Device', NULL, 'Copyright Settings', 0, 'text', 0),
(22, 'sendemailid', 'noreply@insomniacs.in', 'Sender EmailId', 'acme@example.com', 'Email Settings', 1, 'text', 1),
(23, 'emailsendername', 'insomniacs', 'Email Sender Name', 'Acme Developers', 'Email Settings', 1, 'text', 1),
(24, 'smtpdebug', '0', 'SMTP Debug', '0', 'Email Settings', 1, 'text', 1),
(25, 'issmtp', '0', 'Is SMTP', '0', 'Email Settings', 0, 'text', 1),
(26, 'emailhostname', 'mail.insomniacs.in', 'Email Host Name', 'mail.example.com', 'Email Settings', 0, 'text', 1),
(27, 'emailusername', 'noreply@insomniacs.in', 'Email Username', 'acme@example.com', 'Email Settings', 0, 'text', 1),
(28, 'emailuserpassword', 'password', 'Email Password', 'password', 'Email Settings', 0, 'text', 1),
(29, 'emailsmtpsecure', 'TLS', 'Email SMTP Secure', 'TLS', 'Email Settings', 0, 'text', 1),
(30, 'emailport', '587', 'Email Port', '487', 'Email Settings', 0, 'text', 1),
(31, 'emailsubject', 'Information Received Successfully', 'Email Subject', 'Information Received Successfully', 'Email Settings', 1, 'text', 1),
(32, 'mailmessage', 'We have received your information and one of our representative shall get back to you.', 'Mail Message', 'We have received your information and one of our representative shall get back to you.', 'Email Settings', 1, 'text', 1),
(33, 'thankyoupagemessage', 'We have successfully received your information and one of our representative shall get back to you with more information.', 'Thank You Message', 'We have successfully received your information and one of our representative shall get back to you with more information.', 'Email Settings', 1, 'text', 1),
(34, 'bcc', 'pooja.rathod@insomniacs.in', 'Email Bcc', 'admin@example.com, admin2@example.com', 'Email Settings', 1, 'text', 1),
(35, 'testbcc', 'pooja.rathod@insomniacs.in', 'Test Email Bcc', 'admin@example.com, admin2@example.com', 'Email Settings', 1, 'text', 1),
(3, 'url', 'http://localhost:8080/inso-default-microsite/', 'Site URL', 'https://example.com/', 'Site Settings', 1, 'text', 1),
(4, 'site', 'live', 'Site', NULL, 'Site Settings', 1, 'text', 1),
(5, 'mode', 'test', 'Mode', 'live/test', 'Site Settings', 1, 'text', 1),
(6, 'localpath', '/inso-default-microsite/', 'Local Path', '/foldername/', 'Site Settings', 1, 'text', 1),
(7, 'cdn', 'http://localhost:8080/inso-default-microsite/', 'CDN Path', 'https://example.com/', 'Site Settings', 1, 'text', 1),
(11, 'block_head_all_page', '', 'Head All Page', NULL, 'Tracking Settings', 0, 'textarea', 1),
(13, 'block_body_start', '', 'Body Start', NULL, 'Tracking Settings', 0, 'textarea', 1),
(14, 'block_body_end', '', 'Body End', NULL, 'Tracking Settings', 0, 'textarea', 1),
(15, 'block_conv_head', '', 'Conversion Head', NULL, 'Tracking Settings', 0, 'textarea', 1),
(16, 'block_conv_body_end', '', 'Conversion Body End', NULL, 'Tracking Settings', 0, 'textarea', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blocks`
--
ALTER TABLE `blocks`
  ADD PRIMARY KEY (`customblockid`);

--
-- Indexes for table `junkleads`
--
ALTER TABLE `junkleads`
  ADD PRIMARY KEY (`leads_id`);

--
-- Indexes for table `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`leads_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`settings_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blocks`
--
ALTER TABLE `blocks`
  MODIFY `customblockid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `junkleads`
--
ALTER TABLE `junkleads`
  MODIFY `leads_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leads`
--
ALTER TABLE `leads`
  MODIFY `leads_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `settings_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

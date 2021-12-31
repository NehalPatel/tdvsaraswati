-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2021 at 03:16 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tdv`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(10) NOT NULL,
  `email` varchar(60) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `image` text NOT NULL,
  `password` varchar(50) NOT NULL,
  `inserted` datetime NOT NULL,
  `inserted_by` int(3) NOT NULL,
  `modified` datetime NOT NULL,
  `modified_by` int(11) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'y',
  `ins` varchar(1) NOT NULL DEFAULT 'y',
  `del` varchar(1) NOT NULL DEFAULT 'y',
  `modi` varchar(1) NOT NULL DEFAULT 'y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `type`, `email`, `mobile`, `image`, `password`, `inserted`, `inserted_by`, `modified`, `modified_by`, `status`, `ins`, `del`, `modi`) VALUES
(4, 'T.D. Vashi', 'admin', 'admin@gmail.com', '9898989898', 'assets/images/noimage.svg', 'tdvashi', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 'y', 'y', 'y', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `admin_rights`
--

CREATE TABLE `admin_rights` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `master_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_rights`
--

INSERT INTO `admin_rights` (`id`, `admin_id`, `master_id`) VALUES
(4, 2, 2),
(5, 2, 3),
(6, 2, 4),
(13, 3, 2),
(14, 3, 3),
(15, 3, 4),
(16, 3, 5),
(17, 3, 6),
(18, 3, 8);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'y',
  `inserted` datetime NOT NULL,
  `inserted_by` int(5) NOT NULL,
  `modified` datetime NOT NULL,
  `modified_by` int(5) NOT NULL,
  `icon` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `configuration`
--

CREATE TABLE `configuration` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `logo` text NOT NULL,
  `contact` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `copyright` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `favicon` text NOT NULL,
  `meta_description` text NOT NULL,
  `meta_keywords` text NOT NULL,
  `analytic_key` varchar(100) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `from_email` varchar(60) NOT NULL,
  `host_name` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `sender_email` varchar(60) NOT NULL,
  `icon` varchar(30) NOT NULL,
  `footer_logo` text NOT NULL,
  `principal_image` text NOT NULL,
  `principal_name` varchar(80) NOT NULL,
  `principal_education` varchar(80) NOT NULL,
  `principal_msg` varchar(100) NOT NULL,
  `about_image` text NOT NULL,
  `trust` text NOT NULL,
  `infrastructure` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `configuration`
--

INSERT INTO `configuration` (`id`, `title`, `logo`, `contact`, `email`, `copyright`, `address`, `favicon`, `meta_description`, `meta_keywords`, `analytic_key`, `sender`, `from_email`, `host_name`, `password`, `sender_email`, `icon`, `footer_logo`, `principal_image`, `principal_name`, `principal_education`, `principal_msg`, `about_image`, `trust`, `infrastructure`) VALUES
(1, 'T D VASHI SHREE SARSWATI VIDHYA MANDIR', 'assets/images/20201220132948.png', '+91 99742 252127  +91 88663 83841', 'mahaveervidhyamandirtrust@gmail.com', '© T.D. Vashi Shree Saraswati Vidhya Mandir', 'Near South Zone Office,\r\nUdhna Surat,\r\n394210', 'assets/images/20200907123826.png', 'T D VASHI SHREE SHREE SARSWATI VIDHYALAY', 'td vashi,tdv saraswati,td vashi saraswati,shishumandir in surat,tdvsaraswati,td vashi surat', '', '', '', '', '', '', '', 'assets/images/20200907011054.png', 'assets/images/20201126103611.jpeg', 'ચંદ્રપ્રકાશજી સંઘવી', '', 'This is the message from trustee', 'assets/images/20200907125506.jpg', 'ટ્રસ્ટનું નામ		: શ્રી મહાવીર વિદ્યામંદિર ટ્રસ્ટ <br>\r\nરજીસ્ટ્રેશન નંબર 	: E/3854/Surat<br>\r\nફોન નંબર 		: ૦૨૬૧ ૨૨૭૪૯૮૦\r\n', '<p>Infrastructue details</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `email` varchar(300) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `message` text NOT NULL,
  `status` varchar(1) NOT NULL,
  `inserted` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `mobile`, `message`, `status`, `inserted`, `modified`) VALUES
(1, 'Ashok', 'excellententerprisesurat@gmail.com', '9824140814', 'Congratulations for developing website.\r\nPlease complete it as soon as possible.\r\nName of school should be rectified', 'y', '2020-09-19 13:16:50', '0000-00-00 00:00:00'),
(2, 'Eric Jones', 'eric@talkwithwebvisitor.com', '416-385-32', 'Hi, Eric here with a quick thought about your website tdvsaraswati.com...\r\n\r\nI’m on the internet a lot and I look at a lot of business websites.\r\n\r\nLike yours, many of them have great content. \r\n\r\nBut all too often, they come up short when it comes to engaging and connecting with anyone who visits.\r\n\r\nI get it – it’s hard.  Studies show 7 out of 10 people who land on a site, abandon it in moments without leaving even a trace.  You got the eyeball, but nothing else.\r\n\r\nHere’s a solution for you…\r\n\r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  You’ll know immediately they’re interested and you can call them directly to talk with them literally while they’re still on the web looking at your site.\r\n\r\nCLICK HERE http://www.talkwithwebvisitors.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nIt could be huge for your business – and because you’ve got that phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation – immediately… and contacting someone in that 5 minute window is 100 times more powerful than reaching out 30 minutes or more later.\r\n\r\nPlus, with text messaging you can follow up later with new offers, content links, even just follow up notes to keep the conversation going.\r\n\r\nEverything I’ve just described is extremely simple to implement, cost-effective, and profitable. \r\n \r\nCLICK HERE http://www.talkwithwebvisitors.com to discover what Talk With Web Visitor can do for your business.\r\n\r\nYou could be converting up to 100X more eyeballs into leads today!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE http://www.talkwithwebvisitors.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithwebvisitors.com/unsubscribe.aspx?d=tdvsaraswati.com\r\n', 'y', '2020-09-21 19:42:47', '0000-00-00 00:00:00'),
(3, 'Marvin', 'info@tdvsaraswati.com', '079 0934 2', 'Hi there \r\n \r\nBuy all styles of Ray-Ban Sunglasses only 19.99 dollars.  If interested, please visit our site: sunglassusa.online\r\n \r\n \r\nThanks and Best Regards, \r\n \r\nContact Us | T D VASHI SHREE SARSWATI VIDHYA MANDIR', 'y', '2020-09-22 18:49:00', '0000-00-00 00:00:00'),
(4, 'Penni Boyes', 'information@tdvsaraswati.com', '06-7165384', 'ATT: tdvsaraswati.com / Welcome Page | T D VASHI SHREE SARSWATI VIDHYA MANDIR WEBSITE SOLUTIONS\r\nThis notification RUNS OUT ON: Oct 19, 2020\r\n\r\n\r\nWe have not gotten a settlement from you.\r\nWe\'ve attempted to contact you yet were incapable to contact you.\r\n\r\n\r\nKindly See: https://bit.ly/3jdWoHo .\r\n\r\nFor information and also to process a discretionary settlement for services.\r\n\r\n\r\n\r\n10192020131930.\r\n', 'y', '2020-10-19 23:06:37', '0000-00-00 00:00:00'),
(5, 'Augustus', 'contact@tdvsaraswati.com', '078 7465 5', 'Hello there \r\n \r\nBuy all styles of Oakley Sunglasses only 19.99 dollars.  If interested, please visit our site: sunglassoutlets.online\r\n \r\n \r\nThanks and Best Regards, \r\n \r\nContact Us | T D VASHI SHREE SARSWATI VIDHYA MANDIR', 'y', '2020-10-20 00:39:55', '0000-00-00 00:00:00'),
(6, 'Epifania', 'info@tdvsaraswati.com', '06-1398682', 'Good Morning\r\n\r\nCAREDOGBEST™ - Personalized Dog Harness. All sizes from XS to XXL.  Easy ON/OFF in just 2 seconds.  LIFETIME WARRANTY.\r\n\r\nFREE Worldwide Shipping!\r\n\r\nClick here: caredogbest.online\r\n\r\nBest regards,\r\n\r\nContact Us | T D VASHI SHREE SARSWATI VIDHYA MANDIR', 'y', '2020-10-25 09:15:53', '0000-00-00 00:00:00'),
(7, 'Eric Jones', 'eric@ow.ly', '416-385-32', 'Hey there, I just found your site, quick question…\r\n\r\nMy name’s Eric, I found tdvsaraswati.com after doing a quick search – you showed up near the top of the rankings, so whatever you’re doing for SEO, looks like it’s working well.\r\n\r\nSo here’s my question – what happens AFTER someone lands on your site?  Anything?\r\n\r\nResearch tells us at least 70% of the people who find your site, after a quick once-over, they disappear… forever.\r\n\r\nThat means that all the work and effort you put into getting them to show up, goes down the tubes.\r\n\r\nWhy would you want all that good work – and the great site you’ve built – go to waste?\r\n\r\nBecause the odds are they’ll just skip over calling or even grabbing their phone, leaving you high and dry.\r\n\r\nBut here’s a thought… what if you could make it super-simple for someone to raise their hand, say, “okay, let’s talk” without requiring them to even pull their cell phone from their pocket?\r\n  \r\nYou can – thanks to revolutionary new software that can literally make that first call happen NOW.\r\n\r\nTalk With Web Traffic is a software widget that sits on your site, ready and waiting to capture any visitor’s Name, Email address and Phone Number.  It lets you know IMMEDIATELY – so that you can talk to that lead while they’re still there at your site.\r\n  \r\nYou know, strike when the iron’s hot!\r\n\r\nClick Here ==> http://ow.ly/r8eS50C1qo7 to try out a Live Demo with Talk With Web Traffic now to see exactly how it works.\r\n\r\nWhen targeting leads, you HAVE to act fast – the difference between contacting someone within 5 minutes versus 30 minutes later is huge – like 100 times better!\r\n\r\nThat’s why you should check out our new SMS Text With Lead feature as well… once you’ve captured the phone number of the website visitor, you can automatically kick off a text message (SMS) conversation with them. \r\n \r\nImagine how powerful this could be – even if they don’t take you up on your offer immediately, you can stay in touch with them using text messages to make new offers, provide links to great content, and build your credibility.\r\n\r\nJust this alone could be a game changer to make your website even more effective.\r\n\r\nStrike when  the iron’s hot!\r\n\r\nClick Here ==> http://ow.ly/r8eS50C1qo7 to learn more about everything Talk With Web Traffic can do for your business – you’ll be amazed.\r\n\r\nThanks and keep up the great work!\r\n\r\nEric\r\nPS: Talk With Web Traffic offers a FREE 14 days trial – you could be converting up to 100x more leads immediately!   \r\nIt even includes International Long Distance Calling. \r\nStop wasting money chasing eyeballs that don’t turn into paying customers. \r\nClick Here ==> http://ow.ly/r8eS50C1qo7 to try Talk With Web Traffic now.\r\n\r\nIf you\'d like to unsubscribe ==> http://ow.ly/cOcy50C1qte', 'y', '2020-10-25 19:43:27', '0000-00-00 00:00:00'),
(8, 'Eric Jones', 'eric@talkwithwebvisitor.com', '416-385-32', 'Hello, my name’s Eric and I just ran across your website at tdvsaraswati.com...\r\n\r\nI found it after a quick search, so your SEO’s working out…\r\n\r\nContent looks pretty good…\r\n\r\nOne thing’s missing though…\r\n\r\nA QUICK, EASY way to connect with you NOW.\r\n\r\nBecause studies show that a web lead like me will only hang out a few seconds – 7 out of 10 disappear almost instantly, Surf Surf Surf… then gone forever.\r\n\r\nI have the solution:\r\n\r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  You’ll know immediately they’re interested and you can call them directly to TALK with them - literally while they’re still on the web looking at your site.\r\n\r\nCLICK HERE http://www.talkwithcustomer.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works and even give it a try… it could be huge for your business.\r\n\r\nPlus, now that you’ve got that phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation pronto… which is so powerful, because connecting with someone within the first 5 minutes is 100 times more effective than waiting 30 minutes or more later.\r\n\r\nThe new text messaging feature lets you follow up regularly with new offers, content links, even just follow up notes to build a relationship.\r\n\r\nEverything I’ve just described is extremely simple to implement, cost-effective, and profitable.\r\n \r\nCLICK HERE http://www.talkwithcustomer.com to discover what Talk With Web Visitor can do for your business, potentially converting up to 100X more eyeballs into leads today!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE http://www.talkwithcustomer.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithcustomer.com/unsubscribe.aspx?d=tdvsaraswati.com\r\n', 'y', '2020-11-01 07:09:26', '0000-00-00 00:00:00'),
(9, 'Juanita', 'admin@tdvsaraswati.com', '416-582-70', 'Morning \r\n \r\nBuy all styles of Ray-Ban Sunglasses only 19.99 dollars.  If interested, please visit our site: framesoutlet.online\r\n \r\n \r\nThanks and Best Regards, \r\n \r\nContact Us | T D VASHI SHREE SARSWATI VIDHYA MANDIR', 'y', '2020-11-04 02:30:12', '0000-00-00 00:00:00'),
(10, 'Eric Jones', 'ericjonesonline@outlook.com', '555-555-12', 'Hey there, I just found your site, quick question…\r\n\r\nMy name’s Eric, I found tdvsaraswati.com after doing a quick search – you showed up near the top of the rankings, so whatever you’re doing for SEO, looks like it’s working well.\r\n\r\nSo here’s my question – what happens AFTER someone lands on your site?  Anything?\r\n\r\nResearch tells us at least 70% of the people who find your site, after a quick once-over, they disappear… forever.\r\n\r\nThat means that all the work and effort you put into getting them to show up, goes down the tubes.\r\n\r\nWhy would you want all that good work – and the great site you’ve built – go to waste?\r\n\r\nBecause the odds are they’ll just skip over calling or even grabbing their phone, leaving you high and dry.\r\n\r\nBut here’s a thought… what if you could make it super-simple for someone to raise their hand, say, “okay, let’s talk” without requiring them to even pull their cell phone from their pocket?\r\n  \r\nYou can – thanks to revolutionary new software that can literally make that first call happen NOW.\r\n\r\nTalk With Web Visitor is a software widget that sits on your site, ready and waiting to capture any visitor’s Name, Email address and Phone Number.  It lets you know IMMEDIATELY – so that you can talk to that lead while they’re still there at your site.\r\n  \r\nYou know, strike when the iron’s hot!\r\n\r\nCLICK HERE http://www.talkwithcustomer.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nWhen targeting leads, you HAVE to act fast – the difference between contacting someone within 5 minutes versus 30 minutes later is huge – like 100 times better!\r\n\r\nThat’s why you should check out our new SMS Text With Lead feature as well… once you’ve captured the phone number of the website visitor, you can automatically kick off a text message (SMS) conversation with them. \r\n \r\nImagine how powerful this could be – even if they don’t take you up on your offer immediately, you can stay in touch with them using text messages to make new offers, provide links to great content, and build your credibility.\r\n\r\nJust this alone could be a game changer to make your website even more effective.\r\n\r\nStrike when  the iron’s hot!\r\n\r\nCLICK HERE http://www.talkwithcustomer.com to learn more about everything Talk With Web Visitor can do for your business – you’ll be amazed.\r\n\r\nThanks and keep up the great work!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – you could be converting up to 100x more leads immediately!   \r\nIt even includes International Long Distance Calling. \r\nStop wasting money chasing eyeballs that don’t turn into paying customers. \r\nCLICK HERE http://www.talkwithcustomer.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithcustomer.com/unsubscribe.aspx?d=tdvsaraswati.com', 'y', '2020-11-09 10:55:03', '0000-00-00 00:00:00'),
(11, 'Wilfred', 'contact@tdvsaraswati.com', '0250-48666', 'Hello \r\n \r\nFull Body Resistance Band Kit - The best and cheapest athletic gear available on the market today. \r\nDo a full body workout from the comfort of your home. You don\'t even need a gym anymore! \r\n\r\nSave 25% OFF + FREE Worldwide Shipping\r\nShop Now: ametathletics.online\r\n \r\n \r\nEnjoy, \r\n \r\nContact Us | T D VASHI SHREE SARSWATI VIDHYA MANDIR', 'y', '2020-11-13 14:59:12', '0000-00-00 00:00:00'),
(12, 'Eric Jones', 'ericjonesonline@outlook.com', '555-555-12', 'Hello, my name’s Eric and I just ran across your website at tdvsaraswati.com...\r\n\r\nI found it after a quick search, so your SEO’s working out…\r\n\r\nContent looks pretty good…\r\n\r\nOne thing’s missing though…\r\n\r\nA QUICK, EASY way to connect with you NOW.\r\n\r\nBecause studies show that a web lead like me will only hang out a few seconds – 7 out of 10 disappear almost instantly, Surf Surf Surf… then gone forever.\r\n\r\nI have the solution:\r\n\r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  You’ll know immediately they’re interested and you can call them directly to TALK with them - literally while they’re still on the web looking at your site.\r\n\r\nCLICK HERE http://www.talkwithcustomer.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works and even give it a try… it could be huge for your business.\r\n\r\nPlus, now that you’ve got that phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation pronto… which is so powerful, because connecting with someone within the first 5 minutes is 100 times more effective than waiting 30 minutes or more later.\r\n\r\nThe new text messaging feature lets you follow up regularly with new offers, content links, even just follow up notes to build a relationship.\r\n\r\nEverything I’ve just described is extremely simple to implement, cost-effective, and profitable.\r\n \r\nCLICK HERE http://www.talkwithcustomer.com to discover what Talk With Web Visitor can do for your business, potentially converting up to 100X more eyeballs into leads today!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE http://www.talkwithcustomer.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithcustomer.com/unsubscribe.aspx?d=tdvsaraswati.com\r\n', 'y', '2020-11-16 07:15:42', '0000-00-00 00:00:00'),
(13, 'Denise Hackett', 'tdvsaraswati.com@tdvsaraswati.com', '04122 80 2', 'Your domain name: tdvsaraswati.com\r\n\r\nWelcome Page | T D VASHI SHREE SARSWATI VIDHYA MANDIR\r\n\r\nThis announcement ENDS ON: Nov 20, 2020!\r\n\r\n\r\nWe have not obtained a settlement from you.\r\nWe\'ve attempted to call you but were not able to reach you.\r\n\r\n\r\nPlease Check Out:  https://cutt.ly/jhw5jIP\r\n\r\n\r\nFor details and to make a optional payment for solutions.\r\n\r\n\r\n11202020031711\r\n', 'y', '2020-11-20 13:47:20', '0000-00-00 00:00:00'),
(14, 'Vania', 'info@tdvsaraswati.com', '0942-91363', 'Hi \r\n \r\nBuy all styles of Oakley Sunglasses only 19.99 dollars.  If interested, please visit our site: designeroutlets.online\r\n \r\n \r\nCheers, \r\n \r\nContact Us | T D VASHI SHREE SARSWATI VIDHYA MANDIR', 'y', '2020-11-21 20:55:39', '0000-00-00 00:00:00'),
(15, 'Rosalina', 'admin@tdvsaraswati.com', '0335 85771', 'Hello \r\n \r\nBody Revolution - Medico Postura™ Body Posture Corrector\r\nImprove Your Posture INSTANTLY!\r\n\r\nBlackFriday & CyberMonday - Deals Unlocked - 65% OFF!  FREE Worldwide Shipping!\r\n\r\nGet yours here: medicopostura.online\r\n \r\nThe Best, \r\n \r\nContact Us | T D VASHI SHREE SARSWATI VIDHYA MANDIR', 'y', '2020-11-29 13:25:51', '0000-00-00 00:00:00'),
(16, 'Eric Jones', 'ericjonesonline@outlook.com', '555-555-12', 'Hello, my name’s Eric and I just ran across your website at tdvsaraswati.com...\r\n\r\nI found it after a quick search, so your SEO’s working out…\r\n\r\nContent looks pretty good…\r\n\r\nOne thing’s missing though…\r\n\r\nA QUICK, EASY way to connect with you NOW.\r\n\r\nBecause studies show that a web lead like me will only hang out a few seconds – 7 out of 10 disappear almost instantly, Surf Surf Surf… then gone forever.\r\n\r\nI have the solution:\r\n\r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  You’ll know immediately they’re interested and you can call them directly to TALK with them - literally while they’re still on the web looking at your site.\r\n\r\nCLICK HERE http://www.talkwithcustomer.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works and even give it a try… it could be huge for your business.\r\n\r\nPlus, now that you’ve got that phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation pronto… which is so powerful, because connecting with someone within the first 5 minutes is 100 times more effective than waiting 30 minutes or more later.\r\n\r\nThe new text messaging feature lets you follow up regularly with new offers, content links, even just follow up notes to build a relationship.\r\n\r\nEverything I’ve just described is extremely simple to implement, cost-effective, and profitable.\r\n \r\nCLICK HERE http://www.talkwithcustomer.com to discover what Talk With Web Visitor can do for your business, potentially converting up to 100X more eyeballs into leads today!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE http://www.talkwithcustomer.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithcustomer.com/unsubscribe.aspx?d=tdvsaraswati.com\r\n', 'y', '2020-12-03 04:26:57', '0000-00-00 00:00:00'),
(17, 'Joe Miller', 'info@domainworld.com', '+125485934', 'Notice#: 491343\r\nDate: 2020-12-04  \r\n\r\nYOUR IMMEDIATE ATTENTION TO THIS MESSAGE IS ABSOLUTELY NECESSARY!\r\n\r\nYOUR DOMAIN tdvsaraswati.com WILL BE TERMINATED WITHIN 24 HOURS\r\n\r\nWe have not received your payment for the renewal of your domain tdvsaraswati.com\r\n\r\nWe have made several attempts to reach you by phone, to inform you regarding the TERMINATION of your domain tdvsaraswati.com\r\n\r\nCLICK HERE FOR SECURE ONLINE PAYMENT: http://yourdomainchoice.xyz/?n=tdvsaraswati.com&r=a&t=1607014682&p=v1\r\n\r\nIF WE DO NOT RECEIVE YOUR PAYMENT WITHIN 24 HOURS, YOUR DOMAIN tdvsaraswati.com WILL BE TERMINATED\r\n\r\nCLICK HERE FOR SECURE ONLINE PAYMENT: http://yourdomainchoice.xyz/?n=tdvsaraswati.com&r=a&t=1607014682&p=v1\r\n\r\nACT IMMEDIATELY. \r\n\r\nThe submission notification tdvsaraswati.com will EXPIRE WITHIN 24 HOURS after reception of this email', 'y', '2020-12-03 22:28:05', '0000-00-00 00:00:00'),
(18, 'Lyle', 'info@tdvsaraswati.com', '0345 46 44', 'Good day\r\n \r\nWellness Enthusiasts! There has never been a better time to take care of your neck pain! \r\n\r\nOur clinical-grade TENS technology will ensure you have neck relief in as little as 20 minutes.\r\n\r\nGet Yours: hineck.online\r\n\r\nGet it Now 50% OFF + Free Shipping!\r\n\r\nBest regards,\r\n\r\nContact Us | T D VASHI SHREE SARSWATI VIDHYA MANDIR', 'y', '2020-12-04 05:22:42', '0000-00-00 00:00:00'),
(19, 'Tia', 'info@tdvsaraswati.com', '', 'Hi there\r\n\r\nBuy medical disposable face mask to protect your loved ones from the deadly CoronaVirus.  The price for N95 Face Mask is $1.99 each.  If interested, please visit our site: pharmacyoutlets.online\r\n\r\nBest regards,\r\n\r\nContact Us | T D VASHI SHREE SARSWATI VIDHYA MANDIR', 'y', '2020-12-11 11:57:12', '0000-00-00 00:00:00'),
(20, 'Eric Jones', 'ericjonesonline@outlook.com', '555-555-12', 'Cool website!\r\n\r\nMy name’s Eric, and I just found your site - tdvsaraswati.com - while surfing the net. You showed up at the top of the search results, so I checked you out. Looks like what you’re doing is pretty cool.\r\n \r\nBut if you don’t mind me asking – after someone like me stumbles across tdvsaraswati.com, what usually happens?\r\n\r\nIs your site generating leads for your business? \r\n \r\nI’m guessing some, but I also bet you’d like more… studies show that 7 out 10 who land on a site wind up leaving without a trace.\r\n\r\nNot good.\r\n\r\nHere’s a thought – what if there was an easy way for every visitor to “raise their hand” to get a phone call from you INSTANTLY… the second they hit your site and said, “call me now.”\r\n\r\nYou can –\r\n  \r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  It lets you know IMMEDIATELY – so that you can talk to that lead while they’re literally looking over your site.\r\n\r\nCLICK HERE http://www.talkwithwebvisitors.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nTime is money when it comes to connecting with leads – the difference between contacting someone within 5 minutes versus 30 minutes later can be huge – like 100 times better!\r\n\r\nThat’s why we built out our new SMS Text With Lead feature… because once you’ve captured the visitor’s phone number, you can automatically start a text message (SMS) conversation.\r\n  \r\nThink about the possibilities – even if you don’t close a deal then and there, you can follow up with text messages for new offers, content links, even just “how you doing?” notes to build a relationship.\r\n\r\nWouldn’t that be cool?\r\n\r\nCLICK HERE http://www.talkwithwebvisitors.com to discover what Talk With Web Visitor can do for your business.\r\n\r\nYou could be converting up to 100X more leads today!\r\nEric\r\n\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE http://www.talkwithwebvisitors.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithwebvisitors.com/unsubscribe.aspx?d=tdvsaraswati.com\r\n', 'y', '2020-12-20 13:13:32', '0000-00-00 00:00:00'),
(21, 'Monika Taul', 'tdvsaraswati.com@tdvsaraswati.com', '06-5681014', 'DOMAIN SERVICES EXPIRATION NOTICE FOR tdvsaraswati.com\r\n\r\nDomain Notice Expiry ON: Dec 21, 2020\r\n\r\nWe have not received a settlement from you.\r\nWe have actually tried to call you yet were not able to contact you.\r\n\r\n\r\nCheck Out: https://cutt.ly/lhBH7XV\r\n\r\nFor information and to post a discretionary payment for your domain website services.\r\n\r\n\r\n\r\n\r\n\r\n122120201538133753688578798tdvsaraswati.com', 'y', '2020-12-22 02:12:16', '0000-00-00 00:00:00'),
(22, 'Dalton Polanco', 'dalton.polanco@gmail.com', '0358 15162', 'Hello.\r\nWe\'ll help stop spending your time and attention on Spam Emails. We\'d like to provide to you our services, the following is our project:\r\nhttps://jtbtigers.com/blockspam508909\r\nWarm regards,\r\n\r\n\r\n\r\n', 'y', '2020-12-22 19:09:49', '0000-00-00 00:00:00'),
(23, 'Lorrie Beeson', 'beeson.lorrie@gmail.com', '0344 82369', 'Hi,\r\nI\'m ,\r\nHow are you doing regarding your Business Reviews?\r\nGoogle reviews improve click-through rates. It’s vital to obtain customers to click your link, plus a good assortment of positive reviews entices individuals to do just that.\r\nhttps://slimex365.com/googlereviews45335 \r\nKind Regards,\r\n', 'y', '2020-12-26 16:59:41', '0000-00-00 00:00:00'),
(24, 'Lettie', 'info@tdvsaraswati.com', '0311 05854', 'Hi\r\n\r\nBuy face mask to protect your loved ones from the deadly CoronaVirus.  The price for N95 Mask is $1.99 each.  If interested, please check our site: facemaskusa.online\r\n\r\nTo your success,\r\n\r\nContact Us | T D VASHI SHREE SARSWATI VIDHYA MANDIR', 'y', '2020-12-26 18:26:00', '0000-00-00 00:00:00'),
(25, 'Shawnfed', 'ahmedkirillov5@gmail.com', '8398276439', '<a href=http://zrenieblog.ru/>Detail</a>:  <a href=http://zrenieblog.ru/>http://zrenieblog.ru/</a>  http://zrenieblog.ru/ <a href=\"http://zrenieblog.ru/\">http://zrenieblog.ru/</a> \r\n歷史 \r\n六七千年前的先民就開始釣魚。周文王曾和兒子們在靈沼釣魚取樂。戰國時范蠡也愛釣魚，常把所釣之魚供給越王勾踐食用。 二十世紀八十年代，中國大陸的各級釣魚協會成立，釣魚地點也從自然水域向養殖水域過度，所釣之魚則從粗養向細養過度。人數增多、水體污染及濫捕濫撈導致釣魚難度上升。釣魚協會開始與漁民和農民簽訂文件，使更多釣者能夠在養殖水域釣魚，達到了雙贏的目的。 二十世紀九十年代初，來自台灣的懸釣法走紅大陸，各地開始建造標準釣池。 二十世紀末，發達國家的釣者提倡回顧自然，引發新一輪野釣戰，而中國的釣者則更青睞精養魚池。<>] \r\n \r\n工具 \r\n \r\n一种钓鱼竿机械部分示意图 \r\n最基本的钓具包括：鱼竿、鱼线、鱼钩、沉坨（又名沉子）、浮标（又名鱼漂）、鱼饵。<>]:1其他辅助钓具包括：失手绳、钓箱、线轮、抄网、鱼篓、渔具盒、钓鱼服、钓鱼鞋等。<>]:1 \r\n \r\n钓竿一般由玻璃纖維或碳纖維轻而有力的竿状物质製成，钓竿和鱼饵用丝线联接。一般的鱼饵可以是蚯蚓、米饭、蝦子、菜叶、苍蝇、蛆等，现代有专门制作好（多数由自己配置的半成品）的粉製鱼饵出售。鱼饵挂在鱼鉤上，不同的對象鱼有不同的釣組配置。在周围水面撒一些誘餌通常会有較好的集魚效果。 \r\n \r\n钓具 \r\n鱼竿 \r\n主条目：鱼竿 \r\n钓鱼的鱼竿按照材质包括：传统竹竿、玻璃纤维竿、碳素竿，按照钓法包括：手竿、矶竿、海竿（又名甩竿），按照所钓鱼类包括：溪流小继竿、日鲫竿（又名河内竿）、鲤竿、矶中小物竿。<>]:6-8 \r\n \r\n鱼钩 \r\n主条目：鱼钩 \r\n鱼钩就是垂钓用的钩，主要分为：有倒钩、无倒钩、毛钩。<>]:14 \r\n \r\n鱼线 \r\n主条目：鱼线 \r\n鱼线就是垂钓时绑接鱼竿和鱼钩的线，历史上曾使用蚕丝（远古日本）、发丝（江户时期日本）、马尾（西欧）、二枚贝（地中海）、蛛网丝（夏威夷）、琼麻（东南亚）、尼龙钓线（美国）。<>]:25 \r\n \r\n鱼漂 \r\n主条目：鱼漂 \r\n鱼漂又名浮标，垂钓时栓在鱼线上的能漂浮的东西，主要用于搜集水底情报，查看鱼汛，观察鱼饵存留状态，以及水底水流起伏变化。<>]:36 \r\n \r\n鱼饵 \r\n主条目：鱼饵 \r\n鱼饵分为诱饵和钓饵，是一种用来吸引鱼群和垂钓时使用的物品，钓饵分为荤饵、素饵、拟饵、拉饵。<>]:170 \r\n \r\n沉子 \r\n主条目：沉子 \r\n沉子又名沉坨、铅锤，是一种调节鱼漂的工具。<>]:45 \r\n \r\n卷线器 \r\n主条目：卷线器 \r\n卷线器主要安装在海竿和矶竿上的一种卷线的工具。<>]:63 \r\n \r\n连结具 \r\n主条目：连结具 \r\n连结具是连结鱼线与钓竿、母线与子线的一种连结物，使用最广泛的是连结环。<>]:55 \r\n \r\n识鱼 \r\n鱼类的视力不如人类，距离、宽度均无法和人类的视力比较，鱼类对水色、绿色比较敏感，鱼类的嗅觉非常灵敏，鱼类的听觉也非常灵敏，钓鲤鱼时，不能在岸上大声谈笑、走动不停，鱼类的思考能力非常弱，鱼类应对周边环境随着气象、水温、水色、潮流、流速、水量的变化而变化，于是便出现了在同一个池塘、水库、湖泊，往日钓鱼收获大，今日少，上午收获大，下午少，晴天大，雨天少等情况。<>]:114-117淡水钓鱼，中国大陆经常垂钓的鱼类对象是本地鲫鱼、日本鲫、非洲鲫、鲤鱼、游鱼、罗非鱼、黄刺鱼（黄鸭叫）、黄尾、鳊鱼、青鱼、草鱼、鲢鱼、鳙鱼，台湾经常垂钓的鱼类对象是本地鲫鱼、日本鲫、吴郭鱼（罗非鱼）、溪哥仔和红猫（粗首马口鱲）、斗鱼、罗汉鱼、苦花、三角姑（河鮠）、竹蒿头（密鱼）。<>]:117 \r\n \r\n影响鱼类的6大因素主要是：季节变更、气温高低、水的涨落、风的大小、水的清浊、天气阴晴', 'y', '2020-12-27 17:07:55', '0000-00-00 00:00:00'),
(26, 'MILNIK4220', 'PAPAIOANNOU5636@thefmail.com', '8556822649', 'Thank you!!1', 'y', '2021-01-01 22:56:43', '0000-00-00 00:00:00'),
(27, 'Eric Jones', 'ericjonesonline@outlook.com', '555-555-12', 'My name’s Eric and I just came across your website - tdvsaraswati.com - in the search results.\r\n\r\nHere’s what that means to me…\r\n\r\nYour SEO’s working.\r\n\r\nYou’re getting eyeballs – mine at least.\r\n\r\nYour content’s pretty good, wouldn’t change a thing.\r\n\r\nBUT…\r\n\r\nEyeballs don’t pay the bills.\r\n\r\nCUSTOMERS do.\r\n\r\nAnd studies show that 7 out of 10 visitors to a site like tdvsaraswati.com will drop by, take a gander, and then head for the hills without doing anything else.\r\n\r\nIt’s like they never were even there.\r\n\r\nYou can fix this.\r\n\r\nYou can make it super-simple for them to raise their hand, say, “okay, let’s talk” without requiring them to even pull their cell phone from their pocket… thanks to Talk With Web Visitor.\r\n\r\nTalk With Web Visitor is a software widget that sits on your site, ready and waiting to capture any visitor’s Name, Email address and Phone Number.  It lets you know immediately – so you can talk to that lead immediately… without delay… BEFORE they head for those hills.\r\n  \r\nCLICK HERE http://www.talkwithcustomer.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nNow it’s also true that when reaching out to hot leads, you MUST act fast – the difference between contacting someone within 5 minutes versus 30 minutes later is huge – like 100 times better!\r\n\r\nThat’s what makes our new SMS Text With Lead feature so powerful… you’ve got their phone number, so now you can start a text message (SMS) conversation with them… so even if they don’t take you up on your offer right away, you continue to text them new offers, new content, and new reasons to do business with you.\r\n\r\nThis could change everything for you and your business.\r\n\r\nCLICK HERE http://www.talkwithcustomer.com to learn more about everything Talk With Web Visitor can do and start turing eyeballs into money.\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – you could be converting up to 100x more leads immediately!   \r\nIt even includes International Long Distance Calling. \r\nPaying customers are out there waiting. \r\nStarting connecting today by CLICKING HERE http://www.talkwithcustomer.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithcustomer.com/unsubscribe.aspx?d=tdvsaraswati.com', 'y', '2021-01-04 00:09:02', '0000-00-00 00:00:00'),
(28, 'Dave Boose', 'tdvsaraswati.com@tdvsaraswati.com', '091 942 73', 'DOMAIN SERVICES EXPIRATION NOTICE FOR tdvsaraswati.com\r\n\r\nDomain Notice Expiry ON: Jan 06, 2021\r\n\r\n\r\nWe have not obtained a payment from you.\r\nWe\'ve tried to email you yet were unable to contact you.\r\n\r\n\r\nBrowse Through: https://cutt.ly/yjf8gcQ\r\n\r\nFor info and also to process a discretionary payment for your domain website services.\r\n\r\n\r\n\r\n\r\n010620211352543753688578798tdvsaraswati.com', 'y', '2021-01-07 00:23:14', '0000-00-00 00:00:00'),
(29, 'Etta Smalley', 'smalley.etta@gmail.com', '0699 920 4', 'Good evening people at tdvsaraswati.com,\r\nHope you’re well. \r\nI\'m ,\r\nHope you’re excellent, and that clients are good. Please allow me to introduce to you this service.\r\nThe quickest way to advertise your internet site. Just enter your URL. Your competitors utilize this service already.\r\nhttps://onlineuniversalwork.com/websitesubmitter311839\r\nRegards,\r\n', 'y', '2021-01-07 13:14:12', '0000-00-00 00:00:00'),
(30, 'Letha Self', 'tdvsaraswati.com@tdvsaraswati.com', '06-3981635', 'DOMAIN SERVICES EXPIRATION NOTICE FOR tdvsaraswati.com\r\n\r\nDomain Notice Expiry ON: Jan 08, 2021\r\n\r\n\r\nWe have not gotten a settlement from you.\r\nWe have actually attempted to contact you yet were unable to contact you.\r\n\r\n\r\nVisit: https://cutt.ly/Ejj35QW\r\n\r\nFor details and also to make a discretionary payment for your domain website service.\r\n\r\n\r\n\r\n\r\n010820210445063753688578798tdvsaraswati.com', 'y', '2021-01-08 16:24:15', '0000-00-00 00:00:00'),
(31, 'Eric Jones', 'ericjonesonline@outlook.com', '555-555-12', 'Cool website!\r\n\r\nMy name’s Eric, and I just found your site - tdvsaraswati.com - while surfing the net. You showed up at the top of the search results, so I checked you out. Looks like what you’re doing is pretty cool.\r\n \r\nBut if you don’t mind me asking – after someone like me stumbles across tdvsaraswati.com, what usually happens?\r\n\r\nIs your site generating leads for your business? \r\n \r\nI’m guessing some, but I also bet you’d like more… studies show that 7 out 10 who land on a site wind up leaving without a trace.\r\n\r\nNot good.\r\n\r\nHere’s a thought – what if there was an easy way for every visitor to “raise their hand” to get a phone call from you INSTANTLY… the second they hit your site and said, “call me now.”\r\n\r\nYou can –\r\n  \r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  It lets you know IMMEDIATELY – so that you can talk to that lead while they’re literally looking over your site.\r\n\r\nCLICK HERE http://www.talkwithwebvisitors.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nTime is money when it comes to connecting with leads – the difference between contacting someone within 5 minutes versus 30 minutes later can be huge – like 100 times better!\r\n\r\nThat’s why we built out our new SMS Text With Lead feature… because once you’ve captured the visitor’s phone number, you can automatically start a text message (SMS) conversation.\r\n  \r\nThink about the possibilities – even if you don’t close a deal then and there, you can follow up with text messages for new offers, content links, even just “how you doing?” notes to build a relationship.\r\n\r\nWouldn’t that be cool?\r\n\r\nCLICK HERE http://www.talkwithwebvisitors.com to discover what Talk With Web Visitor can do for your business.\r\n\r\nYou could be converting up to 100X more leads today!\r\nEric\r\n\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE http://www.talkwithwebvisitors.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithwebvisitors.com/unsubscribe.aspx?d=tdvsaraswati.com\r\n', 'y', '2021-01-10 11:02:15', '0000-00-00 00:00:00'),
(32, 'Natasha McCutcheon', 'tdvsaraswati.com@tdvsaraswati.com', '06-3356185', 'DOMAIN SERVICES EXPIRATION NOTICE FOR tdvsaraswati.com\r\n\r\nDomain Notice Expiry ON: Jan 13, 2021\r\n\r\n\r\nWe have actually not obtained a payment from you.\r\nWe have actually tried to contact you but were unable to contact you.\r\n\r\n\r\nCheck Out: https://bit.ly/35B1QQy\r\n\r\nFor info and also to process a discretionary payment for your domain website services.\r\n\r\n\r\n\r\n\r\n011320211837583753688578798tdvsaraswati.com', 'y', '2021-01-14 05:08:05', '0000-00-00 00:00:00'),
(33, 'Adeline Fenner', 'adeline.fenner@yahoo.com', '79 280 82 ', 'Good evening \r\nHope you’re good, and that customers are good.\r\nWith our service your small business will grow:\r\nhttps://slimex365.com/backlinks146935\r\nWith best regards,\r\n', 'y', '2021-01-15 04:32:03', '0000-00-00 00:00:00'),
(34, 'Benedict Wester', 'benedict.wester@gmail.com', '(08) 8749 ', 'Hi \r\nHope you’re excellent, and that business is good.\r\nWith our service your small business will grow:\r\nhttps://1borsa.com/backlinks889885\r\nWith warm regards,\r\n', 'y', '2021-01-16 16:05:10', '0000-00-00 00:00:00'),
(35, 'Sonya Abend', 'sonya@stardatagroup.com', 'NA', 'It is with sad regret to inform you StarDataGroup.com is shutting down.\r\nIt has been a tough year all round and we decided to go out with a bang!\r\n\r\nAny group of databases listed below is $49 or $149 for all 16 databases in this one time offer.\r\nYou can purchase it at www.StarDataGroup.com and view samples.\r\n\r\n- LinkedIn Database\r\n 43,535,433 LinkedIn Records\r\n\r\n- USA B2B Companies Database\r\n 28,147,835 Companies\r\n\r\n- Forex\r\n Forex South Africa 113,550 Forex Traders\r\n Forex Australia 135,696 Forex Traders\r\n Forex UK 779,674 Forex Traders\r\n\r\n- UK Companies Database\r\n 521,303 Companies\r\n\r\n- German Databases\r\n German Companies Database: 2,209,191 Companies\r\n German Executives Database: 985,048 Executives\r\n\r\n- Australian Companies Database\r\n 1,806,596 Companies\r\n\r\n- UAE Companies Database\r\n 950,652 Companies\r\n\r\n- Affiliate Marketers Database\r\n 494,909 records\r\n\r\n- South African Databases\r\n B2B Companies Database: 1,462,227 Companies\r\n Directors Database: 758,834 Directors\r\n Healthcare Database: 376,599 Medical Professionals\r\n Wholesalers Database: 106,932 Wholesalers\r\n Real Estate Agent Database: 257,980 Estate Agents\r\n Forex South Africa: 113,550 Forex Traders\r\n\r\nVisit www.stardatagroup.com or contact us with any queries.\r\n\r\nKind Regards,\r\nStarDataGroup.com', 'y', '2021-01-18 21:25:17', '0000-00-00 00:00:00'),
(36, 'Jason Mcdowell', 'mcdowell.jason42@hotmail.com', '919-295-97', 'Good evening \r\nHope you’re well, and that customers are good.\r\nTo become the most effective and many known company inside your field, you will need this tool to convert brings about clients out of your site. \r\nhttps://jtbtigers.com/backlinks173813\r\nRegards,\r\n\r\n', 'y', '2021-01-21 09:42:31', '0000-00-00 00:00:00'),
(37, 'Eric Jones', 'ericjonesonline@outlook.com', '555-555-12', 'My name’s Eric and I just came across your website - tdvsaraswati.com - in the search results.\r\n\r\nHere’s what that means to me…\r\n\r\nYour SEO’s working.\r\n\r\nYou’re getting eyeballs – mine at least.\r\n\r\nYour content’s pretty good, wouldn’t change a thing.\r\n\r\nBUT…\r\n\r\nEyeballs don’t pay the bills.\r\n\r\nCUSTOMERS do.\r\n\r\nAnd studies show that 7 out of 10 visitors to a site like tdvsaraswati.com will drop by, take a gander, and then head for the hills without doing anything else.\r\n\r\nIt’s like they never were even there.\r\n\r\nYou can fix this.\r\n\r\nYou can make it super-simple for them to raise their hand, say, “okay, let’s talk” without requiring them to even pull their cell phone from their pocket… thanks to Talk With Web Visitor.\r\n\r\nTalk With Web Visitor is a software widget that sits on your site, ready and waiting to capture any visitor’s Name, Email address and Phone Number.  It lets you know immediately – so you can talk to that lead immediately… without delay… BEFORE they head for those hills.\r\n  \r\nCLICK HERE http://www.talkwithcustomer.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nNow it’s also true that when reaching out to hot leads, you MUST act fast – the difference between contacting someone within 5 minutes versus 30 minutes later is huge – like 100 times better!\r\n\r\nThat’s what makes our new SMS Text With Lead feature so powerful… you’ve got their phone number, so now you can start a text message (SMS) conversation with them… so even if they don’t take you up on your offer right away, you continue to text them new offers, new content, and new reasons to do business with you.\r\n\r\nThis could change everything for you and your business.\r\n\r\nCLICK HERE http://www.talkwithcustomer.com to learn more about everything Talk With Web Visitor can do and start turing eyeballs into money.\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – you could be converting up to 100x more leads immediately!   \r\nIt even includes International Long Distance Calling. \r\nPaying customers are out there waiting. \r\nStarting connecting today by CLICKING HERE http://www.talkwithcustomer.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithcustomer.com/unsubscribe.aspx?d=tdvsaraswati.com', 'y', '2021-01-22 03:27:57', '0000-00-00 00:00:00'),
(38, 'Eric Jones', 'ericjonesonline@outlook.com', '555-555-12', 'Cool website!\r\n\r\nMy name’s Eric, and I just found your site - tdvsaraswati.com - while surfing the net. You showed up at the top of the search results, so I checked you out. Looks like what you’re doing is pretty cool.\r\n \r\nBut if you don’t mind me asking – after someone like me stumbles across tdvsaraswati.com, what usually happens?\r\n\r\nIs your site generating leads for your business? \r\n \r\nI’m guessing some, but I also bet you’d like more… studies show that 7 out 10 who land on a site wind up leaving without a trace.\r\n\r\nNot good.\r\n\r\nHere’s a thought – what if there was an easy way for every visitor to “raise their hand” to get a phone call from you INSTANTLY… the second they hit your site and said, “call me now.”\r\n\r\nYou can –\r\n  \r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  It lets you know IMMEDIATELY – so that you can talk to that lead while they’re literally looking over your site.\r\n\r\nCLICK HERE http://www.talkwithwebvisitors.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nTime is money when it comes to connecting with leads – the difference between contacting someone within 5 minutes versus 30 minutes later can be huge – like 100 times better!\r\n\r\nThat’s why we built out our new SMS Text With Lead feature… because once you’ve captured the visitor’s phone number, you can automatically start a text message (SMS) conversation.\r\n  \r\nThink about the possibilities – even if you don’t close a deal then and there, you can follow up with text messages for new offers, content links, even just “how you doing?” notes to build a relationship.\r\n\r\nWouldn’t that be cool?\r\n\r\nCLICK HERE http://www.talkwithwebvisitors.com to discover what Talk With Web Visitor can do for your business.\r\n\r\nYou could be converting up to 100X more leads today!\r\nEric\r\n\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE http://www.talkwithwebvisitors.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithwebvisitors.com/unsubscribe.aspx?d=tdvsaraswati.com\r\n', 'y', '2021-01-24 11:28:35', '0000-00-00 00:00:00'),
(39, 'Karolyn Bragg', 'bragg.karolyn36@outlook.com', '06765 93 2', 'Hi|Hey|Good evening|Good morning|Good Afternoon} people at tdvsaraswati.com,\r\nHope you’re good. \r\nI\'m , I hope that the company is good and you’ve been successful during the entire current situation.\r\n Hi, I’m an IT specialist, I see that the site mightn\'t have efficient protection from unwanted messages. On our website, you may find an anti-spam filter to your site. I hope you\'ll find it useful. I will be glad to reply to many questions. You can contact me while using the contact information below.\r\nhttps://bogazicitente.com/captcha553408\r\nIn case you are not interested, simply ignore this message so we won\'t contact you again.\r\nWe wish you success and thousands of new clients.', 'y', '2021-01-26 12:04:28', '0000-00-00 00:00:00'),
(40, 'Romaine', 'info@tdvsaraswati.com', '', 'You Won\'t Want To Miss This!  50 pcs medical surgical masks only $1.99 and N95 Mask $1.79 each.  \r\n\r\nOnly 10 orders left!  Get yours here: pharmacyusa.online\r\n\r\nKind Regards,\r\n\r\nContact Us | T D VASHI SHREE SARSWATI VIDHYA MANDIR', 'y', '2021-02-06 10:14:03', '0000-00-00 00:00:00'),
(41, 'Eric Jones', 'eric.jones.z.mail@gmail.com', '555-555-12', 'Cool website!\r\n\r\nMy name’s Eric, and I just found your site - tdvsaraswati.com - while surfing the net. You showed up at the top of the search results, so I checked you out. Looks like what you’re doing is pretty cool.\r\n \r\nBut if you don’t mind me asking – after someone like me stumbles across tdvsaraswati.com, what usually happens?\r\n\r\nIs your site generating leads for your business? \r\n \r\nI’m guessing some, but I also bet you’d like more… studies show that 7 out 10 who land on a site wind up leaving without a trace.\r\n\r\nNot good.\r\n\r\nHere’s a thought – what if there was an easy way for every visitor to “raise their hand” to get a phone call from you INSTANTLY… the second they hit your site and said, “call me now.”\r\n\r\nYou can –\r\n  \r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  It lets you know IMMEDIATELY – so that you can talk to that lead while they’re literally looking over your site.\r\n\r\nCLICK HERE https://talkwithwebvisitors.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nTime is money when it comes to connecting with leads – the difference between contacting someone within 5 minutes versus 30 minutes later can be huge – like 100 times better!\r\n\r\nThat’s why we built out our new SMS Text With Lead feature… because once you’ve captured the visitor’s phone number, you can automatically start a text message (SMS) conversation.\r\n  \r\nThink about the possibilities – even if you don’t close a deal then and there, you can follow up with text messages for new offers, content links, even just “how you doing?” notes to build a relationship.\r\n\r\nWouldn’t that be cool?\r\n\r\nCLICK HERE https://talkwithwebvisitors.com to discover what Talk With Web Visitor can do for your business.\r\n\r\nYou could be converting up to 100X more leads today!\r\nEric\r\n\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE https://talkwithwebvisitors.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithwebvisitors.com/unsubscribe.aspx?d=tdvsaraswati.com\r\n', 'y', '2021-02-11 01:53:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `department` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'y',
  `inserted` datetime NOT NULL,
  `inserted_by` int(5) NOT NULL,
  `modified` datetime NOT NULL,
  `modified_by` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `department`, `image`, `status`, `inserted`, `inserted_by`, `modified`, `modified_by`) VALUES
(3, 'SHISHU MANDIR', '', 'y', '2020-09-07 11:05:27', 2, '0000-00-00 00:00:00', 0),
(4, 'PRATHMIK', '', 'y', '2020-09-07 11:05:27', 2, '0000-00-00 00:00:00', 0),
(5, 'MADHYAMIK', '', 'y', '2020-09-07 11:05:27', 2, '0000-00-00 00:00:00', 0),
(6, 'UCHCHATAR MADHYAMIC', '', 'y', '2020-09-07 11:05:27', 2, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `id` int(11) NOT NULL,
  `title` varchar(80) NOT NULL,
  `start_date` date NOT NULL,
  `close_date` date NOT NULL,
  `file` text NOT NULL,
  `status` int(11) NOT NULL,
  `inserted` datetime NOT NULL,
  `inserted_by` int(11) NOT NULL,
  `modified` datetime NOT NULL,
  `modified_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`id`, `title`, `start_date`, `close_date`, `file`, `status`, `inserted`, `inserted_by`, `modified`, `modified_by`) VALUES
(0, 'THIRD EKAM KASOTO STD  2  MATHEMATICS', '2020-07-07', '2021-07-07', 'assets/images/20201008095837.pdf', 0, '2020-10-08 09:58:37', 4, '0000-00-00 00:00:00', 0),
(0, 'THIRD EKAM KASOTO  GUJARATI', '2020-10-07', '2021-07-07', 'assets/images/20201008104234.pdf', 0, '2020-10-08 10:42:34', 4, '0000-00-00 00:00:00', 0),
(0, 'THIRD EKAM KASOTO  STD 6 GUJARATI', '2020-10-07', '2021-07-07', 'assets/images/20201008104352.pdf', 0, '2020-10-08 10:43:52', 4, '0000-00-00 00:00:00', 0),
(0, 'THIRD EKAM KASOTO  STD 7 GUJARATI', '2020-08-10', '2021-07-07', 'assets/images/20201008104521.pdf', 0, '2020-10-08 10:45:21', 4, '0000-00-00 00:00:00', 0),
(0, 'THIRD EKAM KASOTO  STD 8 GUJARATI', '2020-07-10', '2021-07-07', 'assets/images/20201008104603.pdf', 0, '2020-10-08 10:46:03', 4, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `date` date DEFAULT NULL,
  `short` varchar(500) NOT NULL,
  `long` text NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'y',
  `inserted` datetime NOT NULL,
  `inserted_by` int(5) NOT NULL,
  `modified` datetime NOT NULL,
  `modified_by` int(5) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `title`, `date`, `short`, `long`, `status`, `inserted`, `inserted_by`, `modified`, `modified_by`, `image`) VALUES
(2, 'Anand melo', '2019-08-08', 'Anand melo', 'Anand melo', 'y', '2020-09-07 11:31:02', 2, '2020-09-18 09:31:51', 2, 'assets/images/20200910232548.JPG'),
(3, 'Activities', '2020-07-30', 'This is Activities that is done by the school students.', 'This is Activities that is done by the school students.', 'y', '2020-09-09 11:04:32', 2, '2020-09-09 11:06:34', 2, 'assets/images/20200909110432.jpeg'),
(5, 'Pot making Webinar ', '2020-09-12', 'શ્રીમતી મિનલબેન જોગાણી દ્વારા ધોરણ ૧ થી ૫ની વાલી માતાઓ તેમજ ધોરણ ૬ થી ૮ની વિદ્યાર્થીનીઓને પોટ મેકિંગ તેમજ પોટ શણગાર શીખવાડયું.', 'શ્રીમતી મિનલબેન જોગાણી દ્વારા ધોરણ ૧ થી ૫ની વાલી માતાઓ તેમજ ધોરણ ૬ થી ૮ની વિદ્યાર્થીનીઓને પોટ મેકિંગ તેમજ પોટ શણગાર શીખવાડયું.', 'y', '2020-09-12 12:05:10', 2, '2020-11-28 09:53:19', 4, 'assets/images/20200912120510.N3c_YbVrLMmuts_XLxl259H8t_26uGENdvB7PM5BU-WKSuypPojl3yRdupIgU1kMxKTtKfluyF0yZtM7x-h2pqM6IHZ9PToJEILfgxJjyImuj2Xjs92pBwFMSf9WRqcqDsYrzY8vZzLfpSfAaVW6vvBsa4zuLwm[1]'),
(6, 'NAVRATRI PARV UTSAV', '2020-10-24', 'NAVRATRI PARV UTSAV 24/10/2020', 'NAVRATRI PARV UTSAV 24/10/2020', 'y', '2020-10-24 16:36:16', 4, '0000-00-00 00:00:00', 0, 'assets/images/20201024163616.jpeg'),
(7, 'સરદાર વલવભાઇ પટેલ નિમિતે નિબંધ પ્રતિયોગિતા યોજવમા ', '2020-10-31', 'નિબંધ પ્રતિયોગિત', '', 'y', '2020-10-30 12:26:10', 4, '2020-10-30 12:43:08', 4, ''),
(8, 'ટ્રસ્ટીશ્રીનો શુભેચ્છા સમારંભ', '2020-07-11', 'ટ્રસ્ટીશ્રીનો શુભેચ્છા સમારંભ', 'ટ્રસ્ટીશ્રીનો શુભેચ્છા સમારંભ', 'y', '2020-11-26 10:28:02', 4, '2020-11-26 12:40:05', 4, 'assets/images/20201126102802.jpeg'),
(9, 'શિશુ વાટિકા વાલી બેઠક(વિષય :-વૈદિક ગણિત)', '2020-09-23', 'શિશુવાટિકા અને ધોરણ-૧ની વાલીબેઠક\r\nવૈદિક ગણિત વિષયનું પ્રશિક્ષણ આપવામાં આવ્યું.\r\n', 'શિશુવાટિકા અને ધોરણ-૧ની વાલીબેઠક\r\nવૈદિક ગણિત વિષયનું પ્રશિક્ષણ આપવામાં આવ્યું.\r\n', 'y', '2020-11-26 11:07:13', 4, '2020-11-28 09:52:46', 4, 'assets/images/20201126110713.jpeg'),
(10, 'ધો ૯ થી ૧૨ ના વિદ્યાર્થીઓ દ્વારા દિવાળી કાર્ડ મેકિ', '2020-10-18', 'ધો ૯ થી ૧૨ ના વિદ્યાર્થીઓ દ્વારા દિવાળી કાર્ડ મેકિંગ', 'ધો ૯ થી ૧૨ ના વિદ્યાર્થીઓ દ્વારા દિવાળી કાર્ડ મેકિંગ', 'y', '2020-11-26 12:38:55', 4, '0000-00-00 00:00:00', 0, 'assets/images/20201126123855.jpg'),
(11, 'વિદ્યાર્થીઓ દ્વારા શિક્ષક દિનની ઉજવણી', '2020-09-05', 'ધોરણ 6 થી 8 ના વિદ્યાર્થીઓ એ 1 થી 8 માં આદર્શ વિદ્યાલય એટલે શું પ્રકૃતિ સંરક્ષણ અને ટેકનોલોજીના ફાયદા અને ગેરફાયદા જેવા વિષયો વિશે ઓનલાઇન શિક્ષણ  આપ્યું.', 'ધોરણ 6 થી 8 ના વિદ્યાર્થીઓ એ 1 થી 8 માં આદર્શ વિદ્યાલય એટલે શું પ્રકૃતિ સંરક્ષણ અને ટેકનોલોજીના ફાયદા અને ગેરફાયદા જેવા વિષયો વિશે ઓનલાઇન શિક્ષણ  આપ્યું.', 'y', '2020-11-27 11:08:43', 4, '0000-00-00 00:00:00', 0, 'assets/images/20201127110843.jpg'),
(12, 'વિશ્વ પર્યાવરણ દિનની ઉજવણી ', '2020-06-05', '        ધોરણ-૧ થી ૮ માં ચિત્ર સ્પર્ધા, નિબંધ સ્પર્ધા, ઓડિયો રેકોર્ડિંગ સ્પર્ધા જેવી વિવિધ સ્પર્ધાનું   આયોજન કરવામાં આવ્યું          \r\n', '        ધોરણ-૧ થી ૮ માં ચિત્ર સ્પર્ધા, નિબંધ સ્પર્ધા, ઓડિયો રેકોર્ડિંગ સ્પર્ધા જેવી વિવિધ સ્પર્ધાનું   આયોજન કરવામાં આવ્યું          \r\n', 'y', '2020-11-28 09:55:47', 4, '0000-00-00 00:00:00', 0, 'assets/images/20201128095547.jpg'),
(13, ' ૧૫૮મી  સ્વામી  વિવેકાનંદ જન્મ જયંતીની ઉજવણી  ', '2021-12-01', 'સ્વામી વિવેકાનંદ જયંતી ', 'સ્વામી વિવેકાનંદ એક મહાન હિંદુ સંત અને નેતા હતા જેમને રામકૃષ્ણ મઠની સ્થાપના કરી હતી આપણે એમના જન્મદિન પર પ્રત્યેક વર્ષ ૧૨ જન્યુઅરીએ રાષ્ટ્રીય યુવા દિવસ ઉજવીએ છે , ', 'y', '2021-01-06 11:42:48', 4, '2021-01-18 11:10:44', 4, 'assets/images/20210106114248.jpg'),
(15, 'મકર સંક્રાતિના નિમિતે મુષ્ટિ દાનની  યોજના    ', '2021-01-14', 'ઉતરાયણ', 'શાસ્ત્રો ને અનુસાર મકર સંક્રાતિ નુ દિવસ દાન ,સ્નાન અને ધ્યાન નુ વિશેષ મહત્વ છે એ દિવસે દાન પુણ્યથી  મોક્ષની પ્રાપ્તી થાય છે ', 'y', '2021-01-06 12:23:23', 4, '2021-01-18 11:23:23', 4, ''),
(16, '૨૬ જાન્યુઆરી (૭૨ પ્રજાસત્તાક દિવસ ) ઉજવણી', '2021-01-26', '૨૬ જાન્યુઆરી (૭૨ પ્રજાસત્તાક દિવસ ) ઉજવણી', '૨૬ જાન્યુઆરી (૭૨ પ્રજાસત્તાક દિવસ ) ઉજવણી', 'n', '2021-01-26 09:33:06', 4, '2021-01-26 10:08:33', 4, 'assets/images/20210126100833.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `event_gallery`
--

CREATE TABLE `event_gallery` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `status` varchar(1) NOT NULL,
  `inserted` datetime NOT NULL,
  `inserted_by` int(11) NOT NULL,
  `modified` datetime NOT NULL,
  `modified_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_gallery`
--

INSERT INTO `event_gallery` (`id`, `event_id`, `image`, `status`, `inserted`, `inserted_by`, `modified`, `modified_by`) VALUES
(1, 1, 'assets/images/20200905150704.jpg', '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(2, 1, 'assets/images/20200905150910.jpeg', 'y', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(9, 4, 'assets/images/20200910231954.jpg', 'y', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(10, 4, 'assets/images/20200910232004.jpg', 'y', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(11, 4, 'assets/images/20200910232114.jpg', 'y', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(12, 2, 'assets/images/20200910232738.jpeg', 'y', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(13, 2, 'assets/images/20200910232805.jpg', 'y', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(14, 3, 'assets/images/20200910232932.jpeg', 'y', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(15, 3, 'assets/images/20200910232939.jpeg', 'y', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(16, 3, 'assets/images/20200910232947.jpeg', 'y', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(17, 3, 'assets/images/20200910232954.jpeg', 'y', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(18, 3, 'assets/images/20200910233001.jpeg', 'y', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(19, 6, 'assets/images/20201024163657.jpeg', 'y', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(20, 6, 'assets/images/20201024163735.jpeg', 'y', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(21, 6, 'assets/images/20201024163811.jpeg', 'y', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(22, 8, 'assets/images/20201126102955.jpeg', 'y', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(23, 8, 'assets/images/20201126103009.jpeg', 'y', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(24, 8, 'assets/images/20201126103030.jpeg', 'y', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(25, 9, 'assets/images/20201126110728.jpeg', 'y', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(26, 9, 'assets/images/20201126110738.jpeg', 'y', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(27, 10, 'assets/images/20201126123914.jpg', 'y', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(28, 11, 'assets/images/20201127110907.jpg', 'y', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(30, 11, 'assets/images/20201127110936.jpg', 'y', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(31, 16, 'assets/images/20210126101241.jpg', 'y', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(32, 16, 'assets/images/20210126101417.jpg', 'y', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(33, 16, 'assets/images/20210126101715.jpg', 'y', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `facility`
--

CREATE TABLE `facility` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `short` varchar(500) NOT NULL,
  `long` text NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'y',
  `inserted` datetime NOT NULL,
  `inserted_by` int(5) NOT NULL,
  `modified` datetime NOT NULL,
  `modified_by` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facility`
--

INSERT INTO `facility` (`id`, `title`, `image`, `short`, `long`, `status`, `inserted`, `inserted_by`, `modified`, `modified_by`) VALUES
(2, 'Play Ground', 'assets/images/20200909100857.jpg', 'We have Spacious Play Ground', 'We have Spacious Play Ground', 'y', '2020-09-09 10:08:57', 2, '0000-00-00 00:00:00', 0),
(4, 'School Bus', 'assets/images/20200917092002.jpeg', 'We provide students transportation via Bus Services', 'We provide students transportation via Bus Services', 'y', '2020-09-17 09:20:02', 2, '0000-00-00 00:00:00', 0),
(5, 'Playground ', 'assets/images/20200917092157.jpeg', 'Playground ', '', 'y', '2020-09-17 09:21:57', 2, '0000-00-00 00:00:00', 0),
(7, 'Shishuvatika Room', 'assets/images/20200918091412.jpeg', '', '', 'y', '2020-09-18 09:14:12', 2, '0000-00-00 00:00:00', 0),
(8, 'Chidiya ghar', 'assets/images/20200918091633.jpeg', 'chidiya ghar', '', 'y', '2020-09-18 09:16:33', 2, '0000-00-00 00:00:00', 0),
(9, 'Kathputli  ghar', 'assets/images/20200918091740.jpeg', 'kathputli  ghar', '', 'y', '2020-09-18 09:17:40', 2, '0000-00-00 00:00:00', 0),
(10, 'Classroom  environment', 'assets/images/20200918092140.jpeg', 'Classroom environment', '', 'y', '2020-09-18 09:21:40', 2, '0000-00-00 00:00:00', 0),
(11, 'Computer Lab + E-Class', 'assets/images/20200918092441.jpeg', 'Computer Lab + E-Class', 'Computer Lab + E-Class', 'y', '2020-09-18 09:24:41', 2, '0000-00-00 00:00:00', 0),
(12, 'Projector  Room', 'assets/images/20200918095513.jpeg', 'Projector  Room', 'Projector  Room', 'y', '2020-09-18 09:55:13', 2, '0000-00-00 00:00:00', 0),
(13, 'Chemistry room', 'assets/images/20200918095709.jpeg', 'Chemistry room', 'Chemistry room', 'y', '2020-09-18 09:57:09', 2, '0000-00-00 00:00:00', 0),
(14, 'Water coolers', 'assets/images/20200919094708.jpg', 'Water coolers', 'Water coolers', 'y', '2020-09-19 09:47:08', 2, '0000-00-00 00:00:00', 0),
(15, 'BIOLOGY LEB', 'assets/images/20201008105933.jpg', 'BIOLOGY LEB', 'BIOLOGY LEB', 'y', '2020-10-08 10:59:33', 4, '0000-00-00 00:00:00', 0),
(16, 'CHEMISTRY LAB', 'assets/images/20201008110025.jpg', 'CHEMISTRY LAB', 'CHEMISTRY LAB', 'y', '2020-10-08 11:00:25', 4, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hit_count`
--

CREATE TABLE `hit_count` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `ip_address` varchar(20) NOT NULL,
  `country` varchar(100) NOT NULL,
  `time` time NOT NULL,
  `short_country` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hit_count`
--

INSERT INTO `hit_count` (`id`, `date`, `ip_address`, `country`, `time`, `short_country`) VALUES
(1, '2020-09-07', '219.91.225.90', 'India', '00:55:15', 'IN');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `code` varchar(5) NOT NULL,
  `status` varchar(1) NOT NULL,
  `default` varchar(1) NOT NULL DEFAULT 'n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `master`
--

CREATE TABLE `master` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `text` varchar(100) NOT NULL,
  `link` text NOT NULL,
  `icon` varchar(50) NOT NULL,
  `status` varchar(1) NOT NULL,
  `inserted_by` int(5) NOT NULL,
  `inserted` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `modified_by` int(11) NOT NULL,
  `position` int(3) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master`
--

INSERT INTO `master` (`id`, `title`, `text`, `link`, `icon`, `status`, `inserted_by`, `inserted`, `modified`, `modified_by`, `position`, `parent_id`) VALUES
(1, 'Admin Users', '', 'admin', 'fa fa-users', 'y', 1, '2020-09-04 19:58:18', '0000-00-00 00:00:00', 0, 1, 0),
(2, 'Manage', '', '#', 'fa fa-cogs', 'y', 1, '2020-09-04 19:58:44', '2020-09-04 20:07:00', 1, 3, 0),
(3, 'Sliders', '', 'slider', 'fa fa-image', 'y', 1, '2020-09-04 19:58:59', '0000-00-00 00:00:00', 0, 1, 2),
(5, 'Configuration', '', 'configuration', 'fa fa-cogs', 'y', 1, '2020-09-04 20:02:33', '0000-00-00 00:00:00', 0, 3, 2),
(6, 'Website Hits', '', 'dashboard/web_hits', '', 'y', 1, '2020-09-04 20:03:35', '0000-00-00 00:00:00', 0, 4, 2),
(7, 'Testimonial', '', 'testimonial', '', 'y', 1, '2020-09-04 20:04:11', '0000-00-00 00:00:00', 0, 4, 2),
(9, 'Teachers', '', 'teacher', 'fa fa-user', 'y', 1, '2020-09-04 20:07:16', '0000-00-00 00:00:00', 0, 2, 0),
(10, 'Social', '', 'social', 'fa fa-images', 'y', 1, '2020-09-05 10:23:19', '0000-00-00 00:00:00', 0, 7, 2),
(11, 'Facility', '', 'facility', 'fa fa-user', 'y', 1, '2020-09-05 11:40:01', '0000-00-00 00:00:00', 0, 8, 2),
(12, 'Event', '', 'event', 'fa fa-images', 'y', 1, '2020-09-05 12:44:31', '0000-00-00 00:00:00', 0, 9, 2),
(13, 'News', '', 'news', 'fa fa-images', 'y', 1, '2020-09-05 13:49:52', '0000-00-00 00:00:00', 0, 10, 2),
(14, 'Downloads', '', 'downloads', 'fa fa-images', 'y', 1, '2020-09-05 14:36:49', '0000-00-00 00:00:00', 0, 11, 2),
(15, 'Trustee', '', 'trustee', 'fa fa-user', 'y', 1, '2020-09-06 02:04:09', '0000-00-00 00:00:00', 0, 4, 0),
(16, 'Departments', '', 'department', '', 'y', 2, '2020-09-07 11:04:26', '2020-09-10 23:31:25', 2, 4, 2),
(17, 'About School', '', 'configuration/about', '', 'y', 2, '2020-09-09 10:27:39', '0000-00-00 00:00:00', 0, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(80) NOT NULL,
  `start_date` date NOT NULL,
  `close_date` date NOT NULL,
  `date` date NOT NULL,
  `description` varchar(500) NOT NULL,
  `inserted` datetime NOT NULL,
  `inserted_by` int(11) NOT NULL,
  `modified` datetime NOT NULL,
  `modified_by` datetime NOT NULL,
  `status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `start_date`, `close_date`, `date`, `description`, `inserted`, `inserted_by`, `modified`, `modified_by`, `status`) VALUES
(2, 'Ekam kasoti 3 Coming Soon', '2020-09-20', '2020-09-30', '2020-09-19', 'Ekam kasoti 3 Coming Soon', '2020-09-18 10:16:47', 2, '2020-09-19 09:32:17', '0000-00-00 00:00:00', 'y'),
(3, 'P.T.A. MEETING', '2020-09-21', '2020-09-24', '2020-09-23', 'P.T.A. MEETING', '2020-09-23 11:34:10', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'y'),
(5, 'NAVRATRI PARV UTSAV', '2020-10-24', '2021-10-24', '2020-10-24', 'દિનાંક 24/10/2020 ના રોજ વિદ્યાલયમાં નવરાત્રી પર્વની ઉજવણી કરવામાં આવી જેમાં ટ્રસ્ટીશ્રી, વ્યવસ્થાપકશ્રી,પ્રધાનાચાર્યશ્રી અને આચાર્યશ્રી   મળી યજ્ઞ માતાજીની આરતી તેમજ ગરબા  ગાઈ  રંગેચંગે ઉજવણી કરી.', '2020-10-24 16:43:56', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'y'),
(6, 'FROTH  EKAM KASOTO  26/10/2020 COMING SOON.... ', '2020-10-24', '2020-10-30', '2020-10-24', 'FROTH  EKAM KASOTO  26/10/2020 COMING SOON.... ', '2020-10-24 16:45:50', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'y'),
(7, '14/11/2020  TO 23/11/2020 વાલી બેઠક (વિષય :-આધારભૂત વિષયો)', '2020-11-12', '2020-11-23', '2020-11-26', '14/11/2020  TO 23/11/2020 વાલી બેઠક (વિષય :-આધારભૂત વિષયો)', '2020-11-26 11:02:13', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'y'),
(8, '07/12/2020 TO 11/12/2020 આચાર્ય પ્રશિક્ષણ (વિષય:- આદર્શ પાઠ)', '2020-12-01', '2020-11-12', '2020-11-26', '07/12/2020 TO 11/12/2020 આચાર્ય પ્રશિક્ષણ (વિષય:- આદર્શ પાઠ)', '2020-11-26 11:04:04', 4, '2020-11-26 12:49:17', '0000-00-00 00:00:00', 'y'),
(9, '\"ઓલ ઇન્ડિયા સાયન્સ કોમ્પિટિશન\" ', '2020-11-26', '2020-12-01', '2020-11-27', ' \"ઓલ ઇન્ડિયા સાયન્સ કોમ્પિટિશન\" \r\nપીડીલાઈટ ફેવિકોલ દ્વારા ૯ થી ૧૪ વર્ષની ઉંમર ધરાવતા બાળકો માટે એક સાયન્સ સ્પર્ધાનું આયોજન કરવામાં આવેલ છે જેમાં ભાગ લેવા ઈચ્છતા બાળકોએ પોતાની ઉંમર અનુસાર આપેલ ટોપીક પ્રમાણે સાયન્સ આધારિત ક્રિએટિવ પ્રવૃત્તિ કરી તેનો ફોટો પાડી સૌ પ્રથમ પોતાના ધોરણના વૉટસપ ગ્રુપમાં ત્યારબાદ આપેલ લિંક www.fevicreateidealabs.com પર અપલોડ કરવાનું રહેશે.\r\n૯  થી ૧૪ વર્ષ ના સ્ટુડન્ટ માટે ટોપિક(૪ થી ૮ ધોરણ માટે)\r\nઊર્જા સ્ત્રોતો (sources of energy)\r\nઅથવા\r\nભવિષ્યના શહેરો ', '2020-11-27 10:39:11', 4, '2020-11-27 10:42:03', '0000-00-00 00:00:00', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'y',
  `inserted` datetime NOT NULL,
  `inserted_by` int(11) NOT NULL,
  `modified` datetime NOT NULL,
  `modified_by` int(11) NOT NULL,
  `type` varchar(10) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `description`, `image`, `status`, `inserted`, `inserted_by`, `modified`, `modified_by`, `type`, `category_id`) VALUES
(1, '', '', 'assets/images/20200908103758.jpg', 'y', '2020-09-05 21:17:39', 1, '2020-09-17 09:31:15', 2, 'normal', 0),
(2, 'ટી.ડી વશી શ્રી સરસ્વતી વિદ્યામંદિર', 'શિશુ/પ્રાથમિક/માધ્યમિક/ઉચ્ચતર(સાયન્સ/કોમર્સ)', 'assets/images/20200908103711.jpg', 'y', '2020-09-05 21:21:14', 1, '2020-09-17 09:30:43', 2, 'normal', 0),
(4, '', '', 'assets/images/20200917093921.jpeg', 'y', '2020-09-17 09:39:21', 2, '0000-00-00 00:00:00', 0, 'normal', 0),
(5, '', '', 'assets/images/20200917093939.jpeg', 'y', '2020-09-17 09:39:39', 2, '0000-00-00 00:00:00', 0, 'normal', 0),
(6, '', '', 'assets/images/20200917094010.jpeg', 'y', '2020-09-17 09:40:10', 2, '0000-00-00 00:00:00', 0, 'normal', 0),
(7, '', '', 'assets/images/20200918095113.jpeg', 'y', '2020-09-18 09:51:13', 2, '0000-00-00 00:00:00', 0, 'normal', 0),
(9, 'NAVRATRI PARV UTSAV', 'NAVRATRI PARV UTSAV', 'assets/images/20201024163202.jpeg', 'y', '2020-10-24 16:32:02', 4, '2020-10-24 16:32:13', 4, 'normal', 0),
(10, 'NAVRATRI PARV UTSAV', 'NAVRATRI PARV UTSAV', 'assets/images/20201024163239.jpeg', 'y', '2020-10-24 16:32:39', 4, '0000-00-00 00:00:00', 0, 'normal', 0),
(11, 'NAVRATRI PARV UTSAV', 'NAVRATRI PARV UTSAV', 'assets/images/20201024163317.jpeg', 'y', '2020-10-24 16:33:17', 4, '0000-00-00 00:00:00', 0, 'normal', 0),
(12, 'વિદ્યાર્થીઓ દ્વારા શિક્ષક દિનની ઉજવણી', 'વિદ્યાર્થીઓ દ્વારા શિક્ષક દિનની ઉજવણી  05/09/2020', 'assets/images/noimage.png', 'y', '2020-11-26 10:58:41', 4, '0000-00-00 00:00:00', 0, 'normal', 0),
(13, 'ટ્રસ્ટીશ્રીનો શુભેચ્છા સમારંભ', 'ટ્રસ્ટીશ્રીનો શુભેચ્છા સમારંભ', 'assets/images/20201126124036.jpeg', 'y', '2020-11-26 12:40:36', 4, '0000-00-00 00:00:00', 0, 'normal', 0),
(14, 'Hy', 'Guys', 'assets/images/20210127102403.php', 'y', '2021-01-27 10:24:03', 4, '0000-00-00 00:00:00', 0, 'normal', 0);

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'y',
  `inserted` datetime NOT NULL,
  `inserted_by` int(5) NOT NULL,
  `modified` datetime NOT NULL,
  `modified_by` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`id`, `title`, `class`, `link`, `status`, `inserted`, `inserted_by`, `modified`, `modified_by`) VALUES
(1, 'Facebook', 'fa fa-facebook', 'www.facebook.com', 'y', '2020-09-05 10:55:33', 1, '0000-00-00 00:00:00', 0),
(2, 'YOUTUBE', 'fa fa-youtbe', 'tdvashisarsawatischool@gmail.com', 'y', '2020-09-18 09:10:58', 2, '2020-10-28 12:30:14', 4);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `image` text DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `education` varchar(200) DEFAULT NULL,
  `designation` varchar(80) DEFAULT NULL,
  `experience` int(11) DEFAULT NULL,
  `department_id` int(11) NOT NULL,
  `inserted` datetime NOT NULL,
  `inserted_by` int(11) NOT NULL,
  `modified` datetime NOT NULL,
  `modified_by` int(11) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'y',
  `dob` date DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `image`, `mobile`, `email`, `education`, `designation`, `experience`, `department_id`, `inserted`, `inserted_by`, `modified`, `modified_by`, `status`, `dob`, `gender`) VALUES
(5, 'Neeraj Yadav', 'assets/images/noimage.png', '918200140542', 'singh@gmail.com', 'BCA', 'jhfjgfgj', 1, 2, '2020-09-05 14:16:00', 1, '0000-00-00 00:00:00', 0, 'y', '1997-01-01', 'male'),
(8, 'Nitesh Singh', 'assets/images/noimage.png', '9898989898', 'nitesh@gmail.com', 'B.A , LLB', 'Sr. Eco Teacher', 5, 2, '2020-09-05 14:51:28', 1, '0000-00-00 00:00:00', 0, 'y', '1997-08-20', 'male'),
(9, 'રેશ્માબેન હિરેનભાઈ ઉમરીગર', 'assets/images/20200919094826.jpg', '', '', 'M.A, CCC+, Pre.P.T.C', '', 5, 4, '2020-09-10 22:25:27', 2, '0000-00-00 00:00:00', 0, 'y', '0000-00-00', 'female'),
(10, 'ચેતનભાઇ શાંતિલાલ યાદવ', 'assets/images/20200918111008.jpeg', '12', '', 'M.A, B.Ed, CCC+, DTP', '12', 11, 4, '2020-09-10 22:26:58', 2, '0000-00-00 00:00:00', 0, 'y', '0000-00-00', 'male'),
(11, 'અરુણાબેન યોગેશભાઈ પારેખ', 'assets/images/noimage.png', '', '', 'S.S.C', '', 0, 0, '2020-09-10 22:32:50', 2, '0000-00-00 00:00:00', 0, 'y', '0000-00-00', 'male'),
(12, 'અરુણાબેન યોગેશભાઈ પારેખ', 'assets/images/20200919094302.jpg', '', '', 'S.S.C', '', 15, 4, '2020-09-10 22:33:12', 2, '0000-00-00 00:00:00', 0, 'y', '0000-00-00', 'female'),
(13, 'તનુજાબેન રામદાસ ટંડેલ', 'assets/images/20200919100826.jpg', '', '', 'H.S.C, Pre. P.T.C', '', 10, 4, '2020-09-10 22:33:39', 2, '0000-00-00 00:00:00', 0, 'y', '0000-00-00', 'female'),
(14, 'રેશ્મા હરિલાલ ડોડીયા', 'assets/images/20200918111055.jpg', '', '', 'H.S.C, P.T.C', '', 9, 4, '2020-09-10 22:34:18', 2, '0000-00-00 00:00:00', 0, 'y', '0000-00-00', 'male'),
(15, 'શિલ્પાબેન ભાવિન હાલરી', 'assets/images/20200918111144.jpg', '', '', 'B.A, L.L.B', '', 8, 4, '2020-09-10 22:35:54', 2, '0000-00-00 00:00:00', 0, 'y', '0000-00-00', 'female'),
(16, 'પાયલબેન અશોકભાઈ રાઠોડ', 'assets/images/20200919101547.jpg', '', '', 'B.A, M.A, P.T.C', '', 10, 4, '2020-09-10 22:36:21', 2, '0000-00-00 00:00:00', 0, 'y', '0000-00-00', 'female'),
(17, 'રીન્કુ શ્રીરામજી મિશ્રા', 'assets/images/20200919101412.jpg', '', '', 'S.S.C', '', 2, 4, '2020-09-10 22:46:21', 2, '0000-00-00 00:00:00', 0, 'y', '0000-00-00', 'male'),
(18, 'તારાબેન સતિષભાઈ પટેલ', 'assets/images/20200919094339.jpg', '', '', 'B.A, B.Ed.', '', 2, 4, '2020-09-10 22:46:48', 2, '0000-00-00 00:00:00', 0, 'y', '0000-00-00', 'female'),
(19, 'દિપ્તીબેન હરેશભાઈ સોલંકી', 'assets/images/20200929100629.jpg', '', '', 'B.A', '', 20, 4, '2020-09-10 22:47:08', 2, '0000-00-00 00:00:00', 0, 'y', '0000-00-00', 'female'),
(20, 'સ્નેહલ રામાભાઇ ગામીત', 'assets/images/20200919094138.jpg', '', '', 'B.Sc., B.Ed', '', 1, 4, '2020-09-10 22:47:28', 2, '0000-00-00 00:00:00', 0, 'y', '0000-00-00', 'male'),
(21, 'રૂપાલીબેન કલ્પેશભાઈ ચૌહાણ', 'assets/images/20200919094112.jpg', '', '', 'B.A., B.Ed.', '', 1, 4, '2020-09-10 22:47:44', 2, '0000-00-00 00:00:00', 0, 'y', '0000-00-00', 'female'),
(22, 'વૈશાલીબેન પ્રકાશભાઈ કટયારે', 'assets/images/noimage.png', '', '', 'B.A., M.A', '', 0, 4, '2020-09-10 22:48:04', 2, '0000-00-00 00:00:00', 0, 'y', '0000-00-00', 'female'),
(23, 'ભાવેશભાઈ ગોરધનભાઈ જાદવ', 'assets/images/noimage.png', '', '', 'B.C.A', '', 0, 4, '2020-09-10 22:48:23', 2, '0000-00-00 00:00:00', 0, 'y', '0000-00-00', 'male'),
(24, 'અક્ષય ભાઈ રમેશભાઈ પટેલ', 'assets/images/20200919095409.jpg', '', '', 'P.T.C', '', 3, 4, '2020-09-10 22:48:45', 2, '0000-00-00 00:00:00', 0, 'y', '0000-00-00', 'male'),
(26, 'વૈશાલી પ્રકાશ ભગત', 'assets/images/20200919100856.jpg', '', '', 'H.S.C Pre. PTC', '', 7, 3, '2020-09-10 22:52:22', 2, '0000-00-00 00:00:00', 0, 'y', '0000-00-00', 'female'),
(27, 'મનીષાબેન સંજયભાઈ પોતદાર', 'assets/images/20200919094038.jpg', '', '', 'S.S.C', '', 4, 3, '2020-09-10 22:52:44', 2, '0000-00-00 00:00:00', 0, 'y', '0000-00-00', 'female'),
(28, 'કોરલ સંજયકુમાર રાજપૂત', 'assets/images/20200919093942.jpg', '', '', 'H.S.C Pre. PTC', '', 1, 3, '2020-09-10 22:53:15', 2, '0000-00-00 00:00:00', 0, 'y', '0000-00-00', 'female'),
(29, 'રશ્મીબેન જીગ્નેશભાઈ ઉપાધ્યાય', 'assets/images/20200929100525.jpg', '9974252117', '', 'T.Y.B.A DELED CCC', 'પ્રધાનાચાર્ય', 10, 3, '2020-09-19 10:23:26', 2, '0000-00-00 00:00:00', 0, 'y', '0000-00-00', 'female'),
(30, 'કિરણ છીબાભાઈ પટેલ', 'assets/images/20200929103613.jpg', '', '', 'B.A.,SANGEET VISHARAD ', 'સંગીત શિક્ષક', 11, 4, '2020-09-29 10:36:13', 4, '0000-00-00 00:00:00', 0, 'y', '0000-00-00', 'male'),
(31, 'દુધાત મહેશભાઈ', 'assets/images/20201007085817.jpeg', '', '', 'B.sc.,B.ed', 'PRINCIPAL', 2, 5, '2020-09-30 10:55:29', 4, '0000-00-00 00:00:00', 0, 'y', '0000-00-00', 'male'),
(32, 'બારોટ પૂજા', 'assets/images/20201007085744.jpeg', '', '', 'Diploma', 'ક્લાર્ક', 2, 5, '2020-09-30 10:57:13', 4, '0000-00-00 00:00:00', 0, 'y', '0000-00-00', 'female'),
(33, 'સિંદે રાહુલભાઈ', 'assets/images/20201007085858.jpeg', '', '', 'B.A,P.T.C', 'આચાર્ય', 2, 4, '2020-09-30 10:58:46', 4, '0000-00-00 00:00:00', 0, 'y', '0000-00-00', 'male'),
(34, 'ભોંયે ધર્મેન્દ્રભાઈ', 'assets/images/20200930110037.jpeg', '', '', 'B.A, B.Ed.', 'આચાર્ય', 2, 0, '2020-09-30 11:00:37', 4, '0000-00-00 00:00:00', 0, 'y', '0000-00-00', 'male'),
(35, 'ભોંયે ધર્મેન્દ્રભાઈ જે.', 'assets/images/20201001100445.jpeg', '', '', 'B.A, B.Ed.', 'આચાર્ય', 3, 5, '2020-10-01 10:04:45', 4, '0000-00-00 00:00:00', 0, 'y', '0000-00-00', 'male'),
(36, 'પટેલ ભાવિકાબેન એમ.', 'assets/images/20201001100651.jpeg', '', '', 'B.A, B.Ed.', 'આચાર્ય', 2, 5, '2020-10-01 10:06:51', 4, '0000-00-00 00:00:00', 0, 'y', '0000-00-00', 'female'),
(38, 'જીવાણી હિરલબેન ડી.', 'assets/images/20201007091133.jpg', '', '', 'B.sc,M.sc', 'આચાર્ય', 1, 6, '2020-10-07 09:01:10', 4, '0000-00-00 00:00:00', 0, 'y', '0000-00-00', 'female'),
(39, 'ઝડફિયા  નિલેશભાઈ આર.', 'assets/images/20201007091002.jpeg', '', '', 'B.E.,B.ed.', 'આચાર્ય', 1, 6, '2020-10-07 09:03:02', 4, '0000-00-00 00:00:00', 0, 'y', '0000-00-00', 'male'),
(40, 'રાઠોડ જયેશભાઈ બી.', 'assets/images/20201008091741.jpg', '', '', 'B.Tech', 'આચાર્ય', 1, 6, '2020-10-08 09:17:41', 4, '0000-00-00 00:00:00', 0, 'y', '0000-00-00', 'male'),
(41, 'કુકડીયા રીતેશભાઈ જે.', 'assets/images/20201008092035.jpeg', '', '', 'B.E. M.Sc B.Ed', 'આચાર્ય', 2, 6, '2020-10-08 09:20:35', 4, '0000-00-00 00:00:00', 0, 'y', '0000-00-00', 'male'),
(43, 'લીલાવાળા પ્રતીકકુમાર વી.', 'assets/images/20201008092354.jpeg', '', '', 'M.Com M.Phil', 'આચાર્ય', 1, 6, '2020-10-08 09:23:54', 4, '0000-00-00 00:00:00', 0, 'y', '0000-00-00', 'male'),
(44, 'ઢાપા શૈલેષભાઈ એ.', 'assets/images/20201008092555.jpeg', '', '', 'B.Sc B.Ed', 'આચાર્ય', 0, 5, '2020-10-08 09:25:55', 4, '0000-00-00 00:00:00', 0, 'y', '0000-00-00', 'male'),
(45, 'પાટીલ પ્રતિભાબેન એ ', 'assets/images/20201015121551.jpeg', '', '', 'M.A.,B.Ed', '', 0, 6, '2020-10-15 12:15:51', 4, '0000-00-00 00:00:00', 0, 'y', '0000-00-00', 'male'),
(46, 'ઉકાણી વિશાલભાઈ ડી.', 'assets/images/20201019112808.jpg', '', '', 'B.Com', 'આચાર્ય', 2, 6, '2020-10-19 11:28:08', 4, '0000-00-00 00:00:00', 0, 'y', '0000-00-00', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `detail` text NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'y',
  `inserted` datetime NOT NULL,
  `inserted_by` int(11) NOT NULL,
  `modified` datetime NOT NULL,
  `modified_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `trustee`
--

CREATE TABLE `trustee` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `image` text NOT NULL,
  `status` varchar(1) NOT NULL,
  `inserted` datetime NOT NULL,
  `inserted_by` int(11) NOT NULL,
  `modified` datetime NOT NULL,
  `modified_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trustee`
--

INSERT INTO `trustee` (`id`, `name`, `image`, `status`, `inserted`, `inserted_by`, `modified`, `modified_by`) VALUES
(2, 'LAXMILALJI P. SHAH', 'assets/images/20200907164005.jpeg', 'y', '2020-09-07 16:40:05', 2, '0000-00-00 00:00:00', 0),
(5, 'આશાબેન એન. ભંડારી', 'assets/images/20200923105921.jpg', 'y', '2020-09-23 10:59:21', 2, '0000-00-00 00:00:00', 0),
(6, 'અશોકભાઇ ઢાઢણીયા ', '', 'y', '2020-09-23 11:01:38', 2, '2020-11-26 10:40:33', 4);

-- --------------------------------------------------------

--
-- Table structure for table `web_detail`
--

CREATE TABLE `web_detail` (
  `id` int(11) NOT NULL,
  `about` text NOT NULL,
  `terms` text NOT NULL,
  `privacy` text NOT NULL,
  `refund` text NOT NULL,
  `widget1` varchar(30) NOT NULL,
  `widget2` varchar(30) NOT NULL,
  `widget3` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `web_detail`
--

INSERT INTO `web_detail` (`id`, `about`, `terms`, `privacy`, `refund`, `widget1`, `widget2`, `widget3`) VALUES
(1, '<h2><strong>વિદ્યાલયનો પરિચય</strong></h2>\r\n\r\n<p>શિક્ષણ&nbsp;મુલ્યનિષ્ઠ, કર્તવ્યનિષ્ઠ,રાષ્ટ્રિયતાથી&nbsp;થી&nbsp;ઓત&nbsp;પ્રોત&nbsp;અને સેવા સહિષ્ણુતા અને ભારતીય સંસ્કૃતિને અનુરૂપ હોવું જોઈએ.આ ઉદેશ્ય ને સાર્થક કરવા વિદ્યાભારતી અખિલ ભારતીય સંસ્થાન નો પ્રારંભ કરવામાં આવ્યો.જે વિશ્વ ની સૌથી મોટું બિન સરકારી સંગઠન છે.પૂરા ભારતમાં ૨૭૦૦ વિધાલયો , ૩૧ લાકા વિધાર્થીઓ , ૧૪૦૦૦૦ પ્રશિક્ષિત આચાર્યો એક જ ધ્યેય સાથે કાર્ય કરે છે। સુરતમાં આજ ઉદેશ્યથી પ્રેરિત વિધાલયનો પ્રારંભ કરવાનો વિચાર માનનીય શ્રી સુવાલાલ શાહ અને શ્રી નાનાલાલજી શાહ કોઠારીના ચિંતનથી શ્રી મહાવીર વિદ્યામંદિર ટ્રસ્ટની સ્થાપના કરી શ્રી ટી।ડી। વશી શ્રી સરસ્વતી વિદ્યામંદિરનો પ્રારંભ કરવામાં આવ્યો.જેનું ઉદ્ઘાટન દિનાંક ૧૪.૦૬.૧૯૯૮ ના રોજ વિદ્યાભારતીના અધ્યક્ષ માનનીય શ્રી શાંતિલાલ શેઠના શુભ હસ્તે થયું.પ્રથમ વર્ષમાં ૩૬ વિદ્યાર્થીઓ&nbsp;, ૩ આચાર્યો થી પ્રારંભ થયેલું આ વિદ્યાલય આજે સંપૂર્ણ વ્યવસ્થાઓ સાથે સુસજ્જ છે.<br />\r\nહમણાં અહીં શિશુવાટિકા થી ધોરણ ૧૨ કોમર્સ અને સાઇન્સ સુધીના વર્ગો ચાલે છે.</p>\r\n', '<p>dfas df</p>\r\n\r\n<p>a</p>\r\n\r\n<p>sdf&nbsp;</p>\r\n\r\n<p>a</p>\r\n\r\n<p>sdf&nbsp;</p>\r\n\r\n<p>as</p>\r\n', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_rights`
--
ALTER TABLE `admin_rights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `configuration`
--
ALTER TABLE `configuration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_gallery`
--
ALTER TABLE `event_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facility`
--
ALTER TABLE `facility`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hit_count`
--
ALTER TABLE `hit_count`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master`
--
ALTER TABLE `master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trustee`
--
ALTER TABLE `trustee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_detail`
--
ALTER TABLE `web_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin_rights`
--
ALTER TABLE `admin_rights`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `configuration`
--
ALTER TABLE `configuration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `event_gallery`
--
ALTER TABLE `event_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `facility`
--
ALTER TABLE `facility`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `hit_count`
--
ALTER TABLE `hit_count`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master`
--
ALTER TABLE `master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trustee`
--
ALTER TABLE `trustee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `web_detail`
--
ALTER TABLE `web_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

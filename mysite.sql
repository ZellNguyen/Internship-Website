-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2015 at 01:38 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mysite`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `update_iStatus`()
BEGIN	
    UPDATE internship SET internship.iStatus = 0 
    WHERE internship.iDeadline < CURRENT_DATE;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `cID` int(11) NOT NULL,
  `cName` varchar(50) NOT NULL,
  `cSlug` varchar(100) NOT NULL,
  `cAddress` varchar(100) DEFAULT NULL,
  `cTel` varchar(20) DEFAULT NULL,
  `cEmail` varchar(50) DEFAULT NULL,
  `cWebsite` varchar(50) DEFAULT NULL,
  `cDes` text,
  `cImg` varchar(32) NOT NULL DEFAULT 'default',
  `cThumb` varchar(32) NOT NULL DEFAULT 'default',
  `cExt` varchar(8) NOT NULL DEFAULT '.gif',
  `cStatus` tinyint(4) NOT NULL DEFAULT '2'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`cID`, `cName`, `cSlug`, `cAddress`, `cTel`, `cEmail`, `cWebsite`, `cDes`, `cImg`, `cThumb`, `cExt`, `cStatus`) VALUES
(1, 'University of Science and Technology of Hanoi', 'university-of-science-and-technology-of-hanoi-1451052445', '18 Hoang Quoc Viet', '04 4444 4444', 'internship@usth.edu.vn', 'http://www.usth.edu.vn', 'University of Science and Technology of Hanoi is a university in Vietnam, newly developing in a partnership between the Vietnamese and French governments.', 'default', 'default', '.gif', 1),
(2, 'Vietnam Academy of Science and Technology', 'vietnam-academy-of-science-and-technology-1451045235', '18 Hoang Quoc Viet', '0975345146', 'internship@vast.org', 'http://www.vast.ac.vn/en/', 'The Vietnam Academy of Science and Technology is a large research institute in Vietnam. It was founded in 1975 as the Vietnam Academy of Science, and renamed the Vietnam Academy of Science and Technology in 2008.', 'default', 'default', '.gif', 1),
(3, 'Donuts Hanoi', 'donuts-hanoi-1451069774', '243 De La Thanh, Dong Da, Ha Noi', '0987 654 321', 'donuts.internship@jp.com', 'http://www.donuts.ne.jp/', 'Donuts Hanoi, a branch of Donuts Co., Ltd from Japan is a startup developing the web services with a focus on the social game of smartphone. \nWe believe that a world changing IT products can be delivered by a company started their history with a small team.\n\nIn Japan, Donuts Co., Ltd. has become a leading company of the social game, \nthe smartphone game ”Biker Gangs” of the company has got the 1st place of grossing ranking in Google Play and Appstore. \nWe have also reached a great mile stone with 7 millions users of video sharing network - MixChannel \nFor 6 consecutive years of growth, our sales have exceeded 53 million USD.\n\nIn Vietnam, we are not doing outsourcing, but create new recruiting service, and game for Vietnam market. \nWe believe our service will change Vietnam IT industry, and we can bring impact to Asia.\n\nJoin us to change Vietnam.', 'default', 'default', '.gif', 1),
(4, 'Apple Inc. ', 'apple-inc-1451041910', '108 Silicon Valley. California. USA', '+01 8479 9998', 'internship.iphone@apple.com', 'https://www.apple.com', 'Apple Inc. is an American multinational technology company headquartered in Cupertino, California, that designs, develops, and sells consumer electronics, computer software, and online services.', 'default', 'default', '.gif', 1),
(5, 'Unilever', 'unilever-1451068163', 'District 7, Hochiminh City', '08 1234 5678', 'unilever@example.com', 'https://www.unilever.com', 'Unilever is a British-Dutch multinational consumer goods company co-headquartered in Rotterdam, Netherlands, and London, United Kingdom. Its products include food, beverages, cleaning agents and personal care products.', 'pho1', 'pho1_thumb', '.jpg', 1),
(7, 'hoazell', 'hoazell-1451119024', '32 Trung Kinh, Hanoi', '0964183195', 'hoazell41195@gmail.com', 'http://www.zellnguyen.com', 'ABC&nbsp;ABC&nbsp;ABC&nbsp;ABC&nbsp;ABCABC&nbsp;ABC', 'default', 'default', '.gif', 2);

--
-- Triggers `company`
--
DELIMITER $$
CREATE TRIGGER `hideCompany` AFTER UPDATE ON `company`
 FOR EACH ROW BEGIN 
	IF NEW.cStatus=2 THEN
		UPDATE internship 
		SET iStatus = 0
		WHERE internship.cID = NEW.cID AND internship.iStatus <> 2;
	ELSE
		UPDATE internship 
		SET iStatus = 1
		WHERE internship.cID = NEW.cID AND internship.iDeadline > CURRENT_DATE AND internship.iStatus <> 2;
	END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `internposition`
--

CREATE TABLE IF NOT EXISTS `internposition` (
  `iID` int(11) NOT NULL,
  `pID` int(11) NOT NULL,
  `pName` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internposition`
--

INSERT INTO `internposition` (`iID`, `pID`, `pName`) VALUES
(1, 1, 'Biologist'),
(1, 2, 'Researcher'),
(2, 3, 'Web designer'),
(2, 4, 'Front-end Developer'),
(3, 5, 'Researcher'),
(3, 6, 'Android Developer'),
(3, 7, 'Sound technician'),
(7, 17, 'Job 1'),
(7, 18, 'Job 2'),
(8, 19, 'Job 1'),
(5, 40, 'vrsgfrgv'),
(5, 41, 'bsfbgfd'),
(11, 42, 'pos 1'),
(15, 60, 'bdsfdsfdsfgs'),
(15, 61, 'bvsfhdjg'),
(14, 62, 'Job 1'),
(14, 63, 'Job new 2'),
(9, 64, 'Job 1'),
(9, 65, 'Job 2'),
(4, 67, 'Job 1'),
(16, 70, 'Test 1'),
(16, 71, 'Test 2');

-- --------------------------------------------------------

--
-- Table structure for table `internship`
--

CREATE TABLE IF NOT EXISTS `internship` (
  `iID` int(11) NOT NULL,
  `iTitle` varchar(100) NOT NULL,
  `iSlug` varchar(100) NOT NULL,
  `cID` int(11) NOT NULL,
  `iDeadline` date DEFAULT NULL,
  `iRegister` int(11) DEFAULT '0',
  `iImage_name` varchar(32) DEFAULT 'default',
  `iImage_thumbnail` varchar(32) DEFAULT 'default',
  `iImage_ext` varchar(8) DEFAULT '.gif',
  `iDes` text,
  `iDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `iStatus` tinyint(1) DEFAULT '2',
  `idlogin` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internship`
--

INSERT INTO `internship` (`iID`, `iTitle`, `iSlug`, `cID`, `iDeadline`, `iRegister`, `iImage_name`, `iImage_thumbnail`, `iImage_ext`, `iDes`, `iDate`, `iStatus`, `idlogin`) VALUES
(1, 'Food Technology Project', 'food-technology-project', 3, '2016-03-01', 13, 'default', 'default', '.gif', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam facilisis, ligula eu ullamcorper mattis, enim est fringilla mauris, quis luctus mi est quis lorem. Proin aliquam dui eleifend velit efficitur tincidunt. Donec diam elit, tincidunt non posuere non, rhoncus consequat lectus. Fusce velit turpis, varius in tincidunt ut, pretium eget erat. Curabitur pharetra convallis tellus, et ullamcorper augue euismod quis. Donec laoreet tellus et dictum mollis. Aliquam posuere velit nec augue lacinia, sed accumsan risus lobortis. Nam egestas tristique justo sit amet blandit. Vestibulum imperdiet justo ex, at lobortis tellus luctus in.</p>\n<p>\nNullam finibus, ipsum in lacinia vestibulum, neque lorem finibus orci, eu maximus sem tortor fermentum nisi. Nulla facilisi. Phasellus sapien ante, sodales quis neque vel, facilisis posuere lacus. Ut porttitor venenatis aliquet. Aliquam erat volutpat. Donec ultrices nisl at lectus suscipit, at finibus augue fermentum. Morbi condimentum ac diam at dignissim. Sed cursus leo ut ex tempus, vitae posuere nisl elementum. Maecenas dictum sagittis semper. Morbi mattis hendrerit rutrum. Vestibulum vel bibendum magna. Sed eget venenatis nulla. Suspendisse potenti. Duis pharetra odio quis rutrum efficitur. Aenean rhoncus, magna et tempus rhoncus, ipsum urna maximus orci, vitae elementum diam sapien et mauris.</p>', '2015-12-17 11:09:49', 1, 7),
(2, 'Responsive Advertising Website Design', 'responsive-advertising-web-design', 4, '2016-02-28', 5, 'default', 'default', '.gif', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam facilisis, ligula eu ullamcorper mattis, enim est fringilla mauris, quis luctus mi est quis lorem. Proin aliquam dui eleifend velit efficitur tincidunt. Donec diam elit, tincidunt non posuere non, rhoncus consequat lectus. Fusce velit turpis, varius in tincidunt ut, pretium eget erat. Curabitur pharetra convallis tellus, et ullamcorper augue euismod quis. Donec laoreet tellus et dictum mollis. Aliquam posuere velit nec augue lacinia, sed accumsan risus lobortis. Nam egestas tristique justo sit amet blandit. Vestibulum imperdiet justo ex, at lobortis tellus luctus in.</p>\n<p>\nNullam finibus, ipsum in lacinia vestibulum, neque lorem finibus orci, eu maximus sem tortor fermentum nisi. Nulla facilisi. Phasellus sapien ante, sodales quis neque vel, facilisis posuere lacus. Ut porttitor venenatis aliquet. Aliquam erat volutpat. Donec ultrices nisl at lectus suscipit, at finibus augue fermentum. Morbi condimentum ac diam at dignissim. Sed cursus leo ut ex tempus, vitae posuere nisl elementum. Maecenas dictum sagittis semper. Morbi mattis hendrerit rutrum. Vestibulum vel bibendum magna. Sed eget venenatis nulla. Suspendisse potenti. Duis pharetra odio quis rutrum efficitur. Aenean rhoncus, magna et tempus rhoncus, ipsum urna maximus orci, vitae elementum diam sapien et mauris.</p>', '2015-12-17 12:09:49', 1, 7),
(3, 'Speach Processing Application', 'speech-processing-application', 2, '2016-03-15', 5, 'default', 'default', '.gif', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam facilisis, ligula eu ullamcorper mattis, enim est fringilla mauris, quis luctus mi est quis lorem. Proin aliquam dui eleifend velit efficitur tincidunt. Donec diam elit, tincidunt non posuere non, rhoncus consequat lectus. Fusce velit turpis, varius in tincidunt ut, pretium eget erat. Curabitur pharetra convallis tellus, et ullamcorper augue euismod quis. Donec laoreet tellus et dictum mollis. Aliquam posuere velit nec augue lacinia, sed accumsan risus lobortis. Nam egestas tristique justo sit amet blandit. Vestibulum imperdiet justo ex, at lobortis tellus luctus in.</p>\n<p>\nNullam finibus, ipsum in lacinia vestibulum, neque lorem finibus orci, eu maximus sem tortor fermentum nisi. Nulla facilisi. Phasellus sapien ante, sodales quis neque vel, facilisis posuere lacus. Ut porttitor venenatis aliquet. Aliquam erat volutpat. Donec ultrices nisl at lectus suscipit, at finibus augue fermentum. Morbi condimentum ac diam at dignissim. Sed cursus leo ut ex tempus, vitae posuere nisl elementum. Maecenas dictum sagittis semper. Morbi mattis hendrerit rutrum. Vestibulum vel bibendum magna. Sed eget venenatis nulla. Suspendisse potenti. Duis pharetra odio quis rutrum efficitur. Aenean rhoncus, magna et tempus rhoncus, ipsum urna maximus orci, vitae elementum diam sapien et mauris.</p>', '2015-12-18 13:31:49', 1, 7),
(4, 'Play and Sleep Hard', 'play-and-sleep-hard-1451146506', 1, '2015-12-15', 6, 'default', 'default', '.gif', '<p><font face="Helvetica Neue">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam facilisis, ligula eu ullamcorper mattis, enim est fringilla mauris, quis luctus mi est quis lorem. Proin aliquam dui eleifend velit efficitur tincidunt. Donec diam elit, tincidunt non posuere non, rhoncus consequat lectus. Fusce velit turpis, varius in tincidunt ut, pretium eget erat. Curabitur pharetra convallis tellus, et ullamcorper augue euismod quis. Donec laoreet tellus et dictum mollis. Aliquam posuere velit nec augue lacinia, sed accumsan risus lobortis. Nam egestas tristique justo sit amet blandit. Vestibulum imperdiet justo ex, at lobortis tellus luctus in.</font></p>\n<p><font face="Helvetica Neue">\nNullam finibus, ipsum in lacinia vestibulum, neque lorem finibus orci, eu maximus sem tortor fermentum nisi. Nulla facilisi. Phasellus sapien ante, sodales quis neque vel, facilisis posuere lacus. Ut porttitor venenatis aliquet. Aliquam erat volutpat. Donec ultrices nisl at lectus suscipit, at finibus augue fermentum. Morbi condimentum ac diam at dignissim. Sed cursus leo ut ex tempus, vitae posuere nisl elementum. Maecenas dictum sagittis semper. Morbi mattis hendrerit rutrum. Vestibulum vel bibendum magna. Sed eget venenatis nulla. Suspendisse potenti. Duis pharetra odio quis rutrum efficitur. Aenean rhoncus, magna et tempus rhoncus, ipsum urna maximus orci, vitae elementum diam sapien et mauris.</font></p>', '2015-12-26 10:15:06', 0, 7),
(5, 'Satellite Controller System', 'satellite-controller-system', 3, '2016-03-31', 3, 'default', 'default', '.gif', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam facilisis, ligula eu ullamcorper mattis, enim est fringilla mauris, quis luctus mi est quis lorem. Proin aliquam dui eleifend velit efficitur tincidunt. Donec diam elit, tincidunt non posuere non, rhoncus consequat lectus. Fusce velit turpis, varius in tincidunt ut, pretium eget erat. Curabitur pharetra convallis tellus, et ullamcorper augue euismod quis. Donec laoreet tellus et dictum mollis. Aliquam posuere velit nec augue lacinia, sed accumsan risus lobortis. Nam egestas tristique justo sit amet blandit. Vestibulum imperdiet justo ex, at lobortis tellus luctus in.</p>\n<p>\nNullam finibus, ipsum in lacinia vestibulum, neque lorem finibus orci, eu maximus sem tortor fermentum nisi. Nulla facilisi. Phasellus sapien ante, sodales quis neque vel, facilisis posuere lacus. Ut porttitor venenatis aliquet. Aliquam erat volutpat. Donec ultrices nisl at lectus suscipit, at finibus augue fermentum. Morbi condimentum ac diam at dignissim. Sed cursus leo ut ex tempus, vitae posuere nisl elementum. Maecenas dictum sagittis semper. Morbi mattis hendrerit rutrum. Vestibulum vel bibendum magna. Sed eget venenatis nulla. Suspendisse potenti. Duis pharetra odio quis rutrum efficitur. Aenean rhoncus, magna et tempus rhoncus, ipsum urna maximus orci, vitae elementum diam sapien et mauris.</p>', '2015-12-24 03:00:12', 1, 7),
(7, 'Google Map for Hanoi', 'google-map-for-hanoi', 1, '2016-01-20', 3, 'default', 'default', '.gif', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam facilisis, ligula eu ullamcorper mattis, enim est fringilla mauris, quis luctus mi est quis lorem. Proin aliquam dui eleifend velit efficitur tincidunt. Donec diam elit, tincidunt non posuere non, rhoncus consequat lectus. Fusce velit turpis, varius in tincidunt ut, pretium eget erat. Curabitur pharetra convallis tellus, et ullamcorper augue euismod quis. Donec laoreet tellus et dictum mollis. Aliquam posuere velit nec augue lacinia, sed accumsan risus lobortis. Nam egestas tristique justo sit amet blandit. Vestibulum imperdiet justo ex, at lobortis tellus luctus in.</p>\n<p>\nNullam finibus, ipsum in lacinia vestibulum, neque lorem finibus orci, eu maximus sem tortor fermentum nisi. Nulla facilisi. Phasellus sapien ante, sodales quis neque vel, facilisis posuere lacus. Ut porttitor venenatis aliquet. Aliquam erat volutpat. Donec ultrices nisl at lectus suscipit, at finibus augue fermentum. Morbi condimentum ac diam at dignissim. Sed cursus leo ut ex tempus, vitae posuere nisl elementum. Maecenas dictum sagittis semper. Morbi mattis hendrerit rutrum. Vestibulum vel bibendum magna. Sed eget venenatis nulla. Suspendisse potenti. Duis pharetra odio quis rutrum efficitur. Aenean rhoncus, magna et tempus rhoncus, ipsum urna maximus orci, vitae elementum diam sapien et mauris.</p>', '2015-12-21 09:28:45', 1, 7),
(8, 'Summer Recruitment', 'summer-recruitment', 5, '2016-01-06', 6, 'default', 'default', '.gif', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam facilisis, ligula eu ullamcorper mattis, enim est fringilla mauris, quis luctus mi est quis lorem. Proin aliquam dui eleifend velit efficitur tincidunt. Donec diam elit, tincidunt non posuere non, rhoncus consequat lectus. Fusce velit turpis, varius in tincidunt ut, pretium eget erat. Curabitur pharetra convallis tellus, et ullamcorper augue euismod quis. Donec laoreet tellus et dictum mollis. Aliquam posuere velit nec augue lacinia, sed accumsan risus lobortis. Nam egestas tristique justo sit amet blandit. Vestibulum imperdiet justo ex, at lobortis tellus luctus in.</p>\n<p>\nNullam finibus, ipsum in lacinia vestibulum, neque lorem finibus orci, eu maximus sem tortor fermentum nisi. Nulla facilisi. Phasellus sapien ante, sodales quis neque vel, facilisis posuere lacus. Ut porttitor venenatis aliquet. Aliquam erat volutpat. Donec ultrices nisl at lectus suscipit, at finibus augue fermentum. Morbi condimentum ac diam at dignissim. Sed cursus leo ut ex tempus, vitae posuere nisl elementum. Maecenas dictum sagittis semper. Morbi mattis hendrerit rutrum. Vestibulum vel bibendum magna. Sed eget venenatis nulla. Suspendisse potenti. Duis pharetra odio quis rutrum efficitur. Aenean rhoncus, magna et tempus rhoncus, ipsum urna maximus orci, vitae elementum diam sapien et mauris.</p>', '2015-12-21 09:31:29', 1, 7),
(9, 'Some titles here', 'some-titles-here-1451072713', 2, '2015-12-22', 0, 'default', 'default', '.gif', '<div>Some text here.&nbsp;<span>Some text here.&nbsp;</span><span>Some text here.&nbsp;</span><br></div><ol><li>Some text here. &nbsp;Some text here.&nbsp;Some text here.&nbsp;Some text here.&nbsp;Some text here.&nbsp;Some text here.&nbsp;Some text here.&nbsp;Some text here.&nbsp;Some text here.&nbsp;Some text here.&nbsp;Some text here.&nbsp;Some text here.&nbsp;Some text here.&nbsp;Some text here.&nbsp;Some text here.&nbsp;Some text here.&nbsp;Some text here.&nbsp;Some text here.&nbsp;</li><li>Some text here.&nbsp;<span>Some text here.&nbsp;</span><span>Some text here.&nbsp;</span><span>Some text here.&nbsp;</span><span>Some text here.&nbsp;</span><span>Some text here.&nbsp;</span><span>Some text here.&nbsp;</span><span>Some text here.&nbsp;</span><span>Some text here.&nbsp;</span><span>Some text here.&nbsp;</span><span>Some text here.&nbsp;</span></li><li>Some text here.&nbsp;Some text here.&nbsp;Some text here.&nbsp;Some text here.&nbsp;Some text here.&nbsp;Some text here.&nbsp;Some text here.&nbsp;Some text here.&nbsp;Some text here.&nbsp;Some text here.&nbsp;Some text here.&nbsp;<span><br></span>Some text here.&nbsp;Some text here.&nbsp;Some text here.&nbsp;</li></ol><p>Some text here.&nbsp;<span>Some text here.&nbsp;</span><span>Some text here.&nbsp;</span><span>Some text here.&nbsp;</span><br></p>', '2015-12-25 13:45:13', 2, 7),
(10, 'New test', 'new-test', 3, '2016-01-07', 0, 'default', 'default', '.gif', '<p> NOjcvnewnvu ovnurouvnoeiwfdcf n oinvwoeidfhsiac n oeivhoidshociabscodc vnidofchoaidboasicf oinvoidsoicsc ionvoidncfoiasnodias </p>', '2015-12-24 07:29:05', 1, 7),
(11, 'Title', 'title', 4, '2016-01-05', 0, 'default', 'default', '.gif', '<p><b>Some text goes here.</b>&nbsp;<font face="Courier New">Some text goes here.&nbsp;Some text goes here.&nbsp;Some text goes here.&nbsp;Some text goes here.&nbsp;Some text goes here.&nbsp;Some text goes here.</font>&nbsp;Some text goes here.&nbsp;Some text goes here.&nbsp;Some text goes here.&nbsp;Some text goes here.&nbsp;Some text goes here.&nbsp;Some text goes here.&nbsp;Some text goes here.&nbsp;</p><blockquote><span >Some text goes here.&nbsp;</span><span >Some text goes here.&nbsp;</span><span >Some text goes here.&nbsp;</span><br></blockquote><p>Some text goes here.&nbsp;<span >Some text goes here.&nbsp;</span><span >Some text goes here.&nbsp;</span><span >Some text goes here.&nbsp;</span><span >Some text goes here.&nbsp;</span><span >Some text goes here.&nbsp;</span></p><p><span ><br></span></p><table class="table table-bordered"><tbody><tr><td>Some text goes here.&nbsp;<br></td><td>Some text goes here.&nbsp;<br></td></tr></tbody></table><p><span ><br></span><br></p>', '2015-12-24 03:29:42', 1, 7),
(14, 'Hoa Zell', 'hoa-zell-1451032319', 2, '2016-02-28', 0, 'default', 'default', '.gif', '<div><span>Some text goes here.&nbsp;Some text goes here.&nbsp;Some text goes here.&nbsp;Some text goes here.&nbsp;Some text goes here.&nbsp;Some text goes here.&nbsp;Some text goes here.&nbsp;Some text goes here.&nbsp;Some text goes here.&nbsp;Some text goes here.&nbsp;Some text goes here.&nbsp;</span></div><blockquote><b><span>Some text goes here.&nbsp;</span><span>Some text goes here.&nbsp;</span><span>Some text goes here.&nbsp;</span></b><span><br></span></blockquote><div><span>Some text goes here.&nbsp;</span><span>Some text goes here.&nbsp;</span><span>Some text goes here.&nbsp;</span><span>Some text goes here.&nbsp;</span><span>Some text goes here.&nbsp;</span><span>Some text goes here.&nbsp;</span><span>Some text goes here.&nbsp;</span><span>Some text goes here.&nbsp;</span><span>Some text goes here.&nbsp;</span><span>Some text goes here.&nbsp;</span><span>Some text goes here.&nbsp;</span><span>Some text goes here.&nbsp;</span><span>Some text goes here.&nbsp;</span></div><div><span><br></span></div><ol><li><span><span>Some text goes here.&nbsp;</span><span>Some text goes here.&nbsp;</span><span>Some text goes here.&nbsp;</span><span>Some text goes here.&nbsp;</span></span></li><li><span><span>Some text goes here.&nbsp;Some text goes here.&nbsp;Some text goes here.&nbsp;Some text goes here.&nbsp;</span></span></li><li><span>Some text goes here.&nbsp;</span><span>Some text goes here.&nbsp;</span><span>Some text goes here.&nbsp;</span><span>Some text goes here.</span></li></ol>', '2015-12-25 02:31:59', 1, 7),
(15, 'Title', 'title-1451031896', 2, '2016-02-20', 0, 'default', 'default', '.gif', 'bfefvsdfkhbvc', '2015-12-25 02:24:56', 1, 7),
(16, 'Test', 'test-1451146922', 1, '2015-12-28', 0, 'default', 'default', '.gif', 'hcdco vnoiehfioef ifhewpihf peihfpiewhg eppihg w', '2015-12-26 10:22:02', 2, 7);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `text`) VALUES
(1, 'The 1st article', 'first-article', 'This is the content of the 1st article'),
(2, 'The 2nd article', 'first-article', 'This is the content of the second article'),
(3, 'The 3rd article', 'third-article', 'This is the content of the third article'),
(4, 'The 4th article', 'the-4th-article', 'This is the content of the fourth article'),
(5, 'The 5th article', 'the-5th-article', 'This is the content of the fifth article');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `idlogin` int(11) NOT NULL,
  `dob` date DEFAULT NULL,
  `university` varchar(50) DEFAULT NULL,
  `stid` varchar(25) DEFAULT NULL,
  `skill` text,
  `exp` text,
  `img_name` varchar(32) DEFAULT 'default',
  `thumb_name` varchar(32) DEFAULT 'default_thumb',
  `ext` varchar(8) DEFAULT '.png',
  `upload_date` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`idlogin`, `dob`, `university`, `stid`, `skill`, `exp`, `img_name`, `thumb_name`, `ext`, `upload_date`) VALUES
(7, '1995-11-15', 'USTH', 'USTHBI4-072', '', '', 'kane26', 'kane26_thumb', '.png', '1451042091'),
(14, '1995-11-04', 'USTH', 'USTHBI4-052', '', '', 'zell', 'zell_thumb', '.jpg', '1450284011'),
(17, '1995-11-15', 'University of science and technology of Hanoi', 'USTHBI4-072', '', '', 'default', 'default_thumb', '.png', NULL),
(18, NULL, NULL, NULL, NULL, NULL, 'default', 'default_thumb', '.png', NULL),
(19, NULL, NULL, NULL, NULL, NULL, 'default', 'default_thumb', '.png', NULL),
(20, NULL, NULL, NULL, NULL, NULL, 'default', 'default_thumb', '.png', NULL),
(21, NULL, NULL, NULL, NULL, NULL, 'default', 'default_thumb', '.png', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `rID` int(11) NOT NULL,
  `iID` int(11) NOT NULL,
  `idlogin` int(11) NOT NULL,
  `pID` int(11) NOT NULL,
  `rDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`rID`, `iID`, `idlogin`, `pID`, `rDate`) VALUES
(2, 1, 21, 1, '2015-12-21 07:56:27'),
(3, 1, 19, 2, '2015-12-21 07:56:27'),
(4, 1, 21, 2, '2015-12-21 07:56:27'),
(5, 2, 14, 3, '2015-12-21 07:56:27'),
(6, 2, 18, 4, '2015-12-21 07:56:27'),
(7, 2, 18, 3, '2015-12-21 07:56:27'),
(8, 3, 14, 5, '2015-12-21 07:56:27'),
(9, 3, 17, 6, '2015-12-21 07:56:27'),
(13, 3, 14, 6, '2015-12-21 08:01:32'),
(20, 1, 17, 2, '2015-12-24 21:11:02'),
(22, 2, 17, 4, '2015-12-25 15:38:04');

--
-- Triggers `register`
--
DELIMITER $$
CREATE TRIGGER `addRegister` AFTER INSERT ON `register`
 FOR EACH ROW UPDATE internship SET iRegister = iRegister+1 WHERE internship.iID = NEW.iID
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `removeRegister` AFTER DELETE ON `register`
 FOR EACH ROW UPDATE internship SET iRegister = iRegister-1 WHERE internship.iID = OLD.iID
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `validRegister` BEFORE INSERT ON `register`
 FOR EACH ROW BEGIN 
	SET @count = (SELECT COUNT(iID) 
				  FROM 
                 	(SELECT register.iID, register.idlogin

                     FROM register
                     WHERE register.idlogin = NEW.idlogin
                     AND register.iID IN 
                    	(SELECT iID
                         FROM internship
                         WHERE internship.iStatus = 1)) temp
                 GROUP BY temp.idlogin) ; 
	SET @check = (SELECT internship.iStatus
				FROM internship
				WHERE NEW.iID = internship.iID);
	IF (@count >= 3 OR @check = 0) THEN SIGNAL SQLSTATE VALUE '45000' SET MESSAGE_TEXT = "You have reached your limited number of internship registration OR this internship was expired!"; 
	END IF ; 
	
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `tID` int(11) NOT NULL,
  `tDes` text,
  `tTitle` varchar(100) NOT NULL,
  `iImage_name` varchar(32) NOT NULL,
  `iImage_thumbnail` varchar(32) NOT NULL,
  `iImage_ext` varchar(8) NOT NULL,
  `cID` varchar(50) NOT NULL,
  `tDeadline` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`tID`, `tDes`, `tTitle`, `iImage_name`, `iImage_thumbnail`, `iImage_ext`, `cID`, `tDeadline`) VALUES
(1, 'vdvsfvf', '', '', '', '', '', NULL),
(2, '<ol><li>bvkjesbdk</li><li>vhodshvodsov</li><li>bhvuogbuevylgis</li></ol>', '', '', '', '', '', NULL),
(3, '<b>bvsbvhogih logsi</b>', 'this is a title ', '', '', '', '', NULL),
(4, 'new content', 'new title', '', '', '', '', NULL),
(5, 'adsasdasdas', 'asdasdasdas', '', '', '', '', NULL),
(6, 'asdasdasd', 'asdasdas', '', '', '', '', NULL),
(7, '<b>blkdsbvlfk</b>', 'New 1', '', '', '', '1', NULL),
(8, 'hygtrrgb', 'asdajsdhdio', '', '', '', '1', NULL),
(9, 'asiohasiohasioiodhasoid', 'nlanlkasdnklas', '', '', '', '4', NULL),
(10, '<p>asjbfaiufauafbhiuoq</p><p>asfuohfsuo</p>', 'asiohfioashs', '', '', '', '6', NULL),
(11, 'asdiasdaid', 'asdasdasdasda', '', '', '', '1', NULL),
(12, 'dgsdsghdfhgfjgfjgsj', 'etwqeq3t', '', '', '', '4', NULL),
(13, 'gdfgrgr', 'vdsbfdjgh', '', '', '', '5', NULL),
(14, 'vbrhtrkr', 'giegfi', '', '', '', '4', NULL),
(15, 'bvhoriubvlti', 'tjgfiekls', '', '', '', '3', NULL),
(16, '<ol><li>hln kdn&nbsp;</li><li>bvoisdbvo</li></ol>', 'some title here', '', '', '', '2', NULL),
(17, '<p>lknlknvldk</p><p>bkjbdksvjs</p><p>nkld</p><p>&nbsp;nfnvl</p>', 'thfnob', '', '', '', '5', NULL),
(18, 'bkvjbdsk', 'fwefef', '', '', '', '1', NULL),
(19, 'gbjnk', 'avdvdfdf', '', '', '', '5', NULL),
(20, 'fuyfu', 'veafe', '', '', '', '5', NULL),
(21, 'fuyfu', 'veafe', '', '', '', '5', NULL),
(22, 'fuyfu', 'veafe', '', '', '', '5', NULL),
(23, '<p><span ><b>Some text goes here.</b></span></p><p><span ><b><br></b></span></p><table class="table table-bordered"><tbody><tr><td>bvkhdbsvk</td><td>bvkjdb</td><td>bkjvdbskdj</td></tr><tr><td>bvjdsbvkjd</td><td>hbvlidsvbl</td><td>bjdbsvljd</td></tr><tr><td>vkjebvk</td><td>vbekjvbk</td><td>bvbvl</td></tr></tbody></table><p><span ><b><br></b></span></p>', 'newer title', '', '', '', '2', NULL),
(24, 'bvjdbsvlhgvs;', 'text he', '', '', '', 'NaN', NULL),
(25, 'bkvjdbsvkjds', 'grbdfvbdf', '', '', '', '2', NULL),
(26, 'b dsfbfd', ' fxbfbfcv', '', '', '', 'NaN', NULL),
(27, 'nivndsl', ' vc cbfxvbxcv', '', '', '', '4', NULL),
(28, '', ' xbfcfb', '', '', '', 'NaN', NULL),
(29, 'fuck', 'fuck', '', '', '', '2', '2016-01-02'),
(30, 'shit', 'shit', '', '', '', '1', '2016-02-01');

-- --------------------------------------------------------

--
-- Table structure for table `tposition`
--

CREATE TABLE IF NOT EXISTS `tposition` (
  `tID` int(11) NOT NULL,
  `pID` int(11) NOT NULL,
  `pName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tposition`
--

INSERT INTO `tposition` (`tID`, `pID`, `pName`) VALUES
(16, 1, 'test value'),
(17, 2, 'dnjghh'),
(17, 3, 'hgtklmgy'),
(17, 4, 'ngtukkj'),
(18, 5, 'dhtfjtf'),
(19, 6, 'kjbkjnho'),
(20, 7, 'fgkk'),
(21, 8, 'fgkk'),
(22, 9, 'fgkk'),
(23, 10, 'gfegfrhdt'),
(23, 11, 'bdfhjtrj'),
(24, 12, 'hvoiughrighporj[obgj'),
(25, 13, 'ubkhvev'),
(26, 14, 'bdfbfgb'),
(27, 15, 'hjkkooo'),
(28, 16, ''),
(29, 17, 'fuck'),
(30, 18, 'shit 1'),
(30, 19, 'shit 2');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `idlogin` int(11) NOT NULL,
  `fullname` varchar(45) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `role` varchar(5) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idlogin`, `fullname`, `username`, `email`, `password`, `status`, `role`) VALUES
(7, 'Administrator', 'admin', 'nguyengiakhang1417@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 1, 'admin'),
(14, 'Nguyen Dang Hoa', 'hoazell', 'hoazell41195@gmail.com', '3842436ad4ec0192f14befee8033f322', 1, 'user'),
(17, 'Khang Gia Nguyen', 'test', 'zzzmousezzz@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1, 'user'),
(18, 'Khang', 'khang', 'khangnguyen.tedx@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1, 'user'),
(19, 'Tran Phuong Thao', 'chun', 'abcxyz@example.com', 'e10adc3949ba59abbe56e057f20f883e', 1, 'user'),
(20, 'Nguyen Thanh Tung', 'tungnguyen', 'tung@example.com', 'e10adc3949ba59abbe56e057f20f883e', 1, 'user'),
(21, 'Nguyen Thi Hong Ha', 'hongha', 'hongha@example.com', '14e1b600b1fd579f47433b88e8d85291', 1, 'user');

--
-- Triggers `user`
--
DELIMITER $$
CREATE TRIGGER `deleteProfile` BEFORE DELETE ON `user`
 FOR EACH ROW DELETE FROM profile WHERE profile.idlogin = old.idlogin
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `updateProfile` AFTER INSERT ON `user`
 FOR EACH ROW INSERT INTO profile(idlogin) VALUES (new.idlogin)
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`cID`);

--
-- Indexes for table `internposition`
--
ALTER TABLE `internposition`
  ADD PRIMARY KEY (`pID`), ADD KEY `iID` (`iID`);

--
-- Indexes for table `internship`
--
ALTER TABLE `internship`
  ADD PRIMARY KEY (`iID`), ADD KEY `cID` (`cID`), ADD KEY `idlogin` (`idlogin`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`), ADD KEY `slug` (`slug`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`idlogin`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`rID`), ADD KEY `iID` (`iID`), ADD KEY `idlogin` (`idlogin`), ADD KEY `pID` (`pID`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`tID`);

--
-- Indexes for table `tposition`
--
ALTER TABLE `tposition`
  ADD PRIMARY KEY (`pID`), ADD KEY `tID` (`tID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idlogin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `cID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `internposition`
--
ALTER TABLE `internposition`
  MODIFY `pID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `internship`
--
ALTER TABLE `internship`
  MODIFY `iID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `rID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `tID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `tposition`
--
ALTER TABLE `tposition`
  MODIFY `pID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idlogin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `internposition`
--
ALTER TABLE `internposition`
ADD CONSTRAINT `internposition_ibfk_1` FOREIGN KEY (`iID`) REFERENCES `internship` (`iID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `internship`
--
ALTER TABLE `internship`
ADD CONSTRAINT `internship_ibfk_1` FOREIGN KEY (`cID`) REFERENCES `company` (`cID`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `internship_ibfk_2` FOREIGN KEY (`idlogin`) REFERENCES `user` (`idlogin`);

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
ADD CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`idlogin`) REFERENCES `user` (`idlogin`);

--
-- Constraints for table `register`
--
ALTER TABLE `register`
ADD CONSTRAINT `register_ibfk_1` FOREIGN KEY (`iID`) REFERENCES `internship` (`iID`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `register_ibfk_2` FOREIGN KEY (`idlogin`) REFERENCES `user` (`idlogin`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `register_ibfk_3` FOREIGN KEY (`pID`) REFERENCES `internposition` (`pID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tposition`
--
ALTER TABLE `tposition`
ADD CONSTRAINT `tposition_ibfk_1` FOREIGN KEY (`tID`) REFERENCES `test` (`tID`) ON DELETE CASCADE ON UPDATE CASCADE;

DELIMITER $$
--
-- Events
--
CREATE DEFINER=`root`@`localhost` EVENT `e_daily` ON SCHEDULE EVERY 1 DAY STARTS '2015-12-20 00:00:00' ON COMPLETION NOT PRESERVE ENABLE COMMENT 'Update iStatus' DO CALL update_iStatus$$

DELIMITER ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

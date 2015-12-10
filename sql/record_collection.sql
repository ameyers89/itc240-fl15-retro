-- Adminer 4.2.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `record_Collection`;
CREATE TABLE `record_Collection` (
  `RecordID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Album` varchar(50) DEFAULT NULL,
  `Artist` varchar(50) DEFAULT NULL,
  `Label` varchar(50) DEFAULT NULL,
  `ReleaseDate` int(7) DEFAULT NULL,
  PRIMARY KEY (`RecordID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `record_Collection` (`RecordID`, `Album`, `Artist`, `Label`, `ReleaseDate`) VALUES
(1,	'Jokes',	'Kidcrash',	'Denovali',	2007),
(2,	'Snacks',	'Kidcrash',	'Denovali',	2009),
(3,	'N V N V N V',	'Dreamdecay',	'Iron Lung',	2013),
(4,	'You\'re Living All Over Me',	'Dinosaur Jr',	'Jagjaguwar',	1987),
(5,	'Over, Again',	'Wild Moth',	'Asian Man Records',	2013),
(6,	'Deep Trip',	'Destruction Unit',	'Sacred Bones',	2013),
(7,	'Belly',	'Erica Freas',	'Rumbletowne',	2013),
(8,	'The Evens',	'The Evens',	'Dischord',	2005),
(9,	'Gold Country',	'Chuck Ragan',	'SideOneDummy',	2009),
(10,	'Trying',	'Spook Houses',	'Evil Weevil',	2012),
(11,	'Past Time',	'Grass Widow',	'Kill Rock Stars',	2010),
(12,	'No Device',	'Criminal Code',	'Deranged Records',	2013),
(13,	'I Could Do Whatever I Wanted If I Wanted',	'Snowing',	'Square Of Opposition',	2010),
(14,	'Running Back',	'Weed',	'Lefse Records',	2015),
(15,	'The Chorus',	'Hot Tears',	'Rumbletowne',	2015),
(16,	'Fix My Brain',	'The Marked Men',	'Dirtnap',	2006),
(17,	'Swearin',	'Swearin',	'Salinas',	2012),
(18,	'24 Hour Revenge Therapy',	'Jawbreaker',	'Tupelo Recording Company',	1994),
(19,	'You And Me And The Mountain',	'Maps & Atlases',	'Sargent House',	2009),
(20,	'Summer In Abaddon',	'Pinback',	'Touch and Go',	2004),
(21,	'Vee Vee',	'Archers Of Loaf',	'Merge',	1995),
(22,	'Ditches',	'Sharkpact',	'Rumbletowne',	2011),
(23,	'Home Run',	'Benny The Jet Rodriguez',	'Denovali',	2013);

-- 2015-11-24 02:27:39

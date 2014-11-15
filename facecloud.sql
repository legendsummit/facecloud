-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 11 月 15 日 08:52
-- 服务器版本: 5.5.20
-- PHP 版本: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `facecloud`
--

-- --------------------------------------------------------

--
-- 表的结构 `fl_person`
--

CREATE TABLE IF NOT EXISTS `fl_person` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person_id` char(20) NOT NULL,
  `name` char(20) NOT NULL,
  `sex` char(3) NOT NULL,
  `profession` varchar(50) NOT NULL,
  `introduce` varchar(255) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `fl_person`
--

INSERT INTO `fl_person` (`id`, `person_id`, `name`, `sex`, `profession`, `introduce`, `group_id`) VALUES
(1, 'fd99ba5c58879e24d72d', '成龙', '男', ' 演员', '功夫巨星', 0),
(2, 'e0058c07c521c94d28d7', '李连杰', '男', '演员', '功夫巨星', 0),
(3, '91ee6d7d111edbd65dc8', '刘亦菲', '男', '演员', '美女明星', 0),
(4, '89c7383b67a5cbb5b108', '李冰冰', '女', '演员', '美女明星', 0),
(5, '8d159237f36bae6140c5', '范冰冰', '女', '演员', '美女明星', 0),
(6, 'c8cf5e2ba61c89ce7df9', '张静初', '女', '演员', '美女明星', 0),
(7, '310df19e8289ca59120e', '科比', '男', '球星', 'NBA明星', 0),
(8, '75098078afee36d33844', '詹姆斯', '男', '球星', 'NBA明星', 0),
(9, 'df75f1cdb2a39ea365c2', '梁朝伟', '男', '演员', '影帝', 0),
(10, '3169477628e2001d758f', '麦迪', '男', '球员', 'NBA球星', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

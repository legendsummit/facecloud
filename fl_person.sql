-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 11 月 16 日 11:25
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=35 ;

--
-- 转存表中的数据 `fl_person`
--

INSERT INTO `fl_person` (`id`, `person_id`, `name`, `sex`, `profession`, `introduce`, `group_id`) VALUES
(1, 'fd99ba5c58879e24d72d', '成龙', 'M', ' 演员', '功夫巨星', 0),
(2, 'e0058c07c521c94d28d7', '李连杰', 'M', '演员', '功夫巨星', 0),
(3, '91ee6d7d111edbd65dc8', '刘亦菲', 'W', '演员', '美女明星', 0),
(4, '89c7383b67a5cbb5b108', '李冰冰', 'W', '演员', '美女明星', 0),
(5, '8d159237f36bae6140c5', '范冰冰', 'W', '演员', '美女明星', 0),
(6, 'c8cf5e2ba61c89ce7df9', '张静初', 'W', '演员', '美女明星', 0),
(7, '310df19e8289ca59120e', '科比', 'M', '球星', 'NBA明星', 0),
(8, '75098078afee36d33844', '詹姆斯', 'M', '球星', 'NBA明星', 0),
(9, 'df75f1cdb2a39ea365c2', '梁朝伟', 'M', '演员', '影帝', 0),
(10, '3169477628e2001d758f', '麦迪', 'M', '球员', 'NBA球星', 0),
(15, 'a50e3d3db3a0e2bd37e7', '张伟', 'M', '演员', '爱情公寓', 0),
(16, 'c08021421da54924829c', '陈赫', 'M', ' 演员', '爱情公寓', 0),
(17, '79a25c379ff7a893c96b', '娄艺潇', 'W', '演员', '爱情公寓', 0),
(18, '63bf14a514d56a8fc6ac', '刘翔', 'M', '运动员', '奥运跨栏冠军', 0),
(19, 'ebc88d5e5573ebcff3c6', '林丹', 'M', '运动员', '羽毛球大满贯', 0),
(20, '4f2ae007f5a4f4378602', '王浩', 'M', '运动员', '乒乓球冠军', 0),
(21, 'eeb7d8fb39d04ecf745f', '郭晶晶', 'W', '运动员', '跳水大满贯', 0),
(22, 'c8869401e9be8d4fbf51', '姚明', 'M', '运动员', '著名华裔NBA球星', 0),
(23, '64705b56b43675f59ad4', '林书豪', 'M', '运动员', '著名华裔NBA球员', 0),
(24, 'b42b449a1dc4de86a21b', '郭富城', 'M', '演员', '舞王', 0),
(25, 'c368f304c62ca3e8d35e', '周杰伦', 'M', '歌手', '无与伦比', 0),
(26, '132de0d45036957515c7', '邓紫棋', 'W', '歌手', '新星', 0),
(27, '105e68c4ed35579ea7e5', '孙燕姿', 'W', '歌手', '美女', 0),
(28, '0156faa36540969c6b9c', '梁咏琪', 'M', '歌手', '美女', 0),
(29, '16b8e015cdea45058613', '光良', 'M', '歌手', '第一次', 0),
(30, '262206da02efdcd67565', '任贤齐', 'M', '演员、歌手', '经典、怀旧', 0),
(31, 'b9fbe2f03901f8d184dc', '许嵩', 'M', '歌手', '新星', 0),
(32, '8d06c9bd8aa4a9aefaba', '蔡依林', 'W', '歌手', '天后', 0),
(33, 'c74788311205996cb4df', '王力宏', 'M', '歌手', '帅哥', 0),
(34, '56e5708966e934ed1859', '梁静茹', 'M', '歌手', '美女', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

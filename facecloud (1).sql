-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 11 月 24 日 14:48
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
-- 表的结构 `fl_admin`
--

CREATE TABLE IF NOT EXISTS `fl_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `power` int(3) NOT NULL,
  `is_forbid` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `fl_admin`
--

INSERT INTO `fl_admin` (`id`, `user`, `name`, `password`, `power`, `is_forbid`) VALUES
(3, 'admin', '超级管理员哈哈', '25f9e794323b453885f5181f1b624d0b', 0, 0),
(4, 'a', 'a', '0cc175b9c0f1b6a831c399e269772661', 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `fl_imageurls`
--

CREATE TABLE IF NOT EXISTS `fl_imageurls` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `name` char(20) NOT NULL,
  `url` varchar(60) NOT NULL,
  `face_id` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=445 ;

--
-- 转存表中的数据 `fl_imageurls`
--

INSERT INTO `fl_imageurls` (`id`, `pid`, `name`, `url`, `face_id`) VALUES
(375, 1, '成龙', 'http://legend-face.qiniudn.com/1416051655', '0b59930282aaa2dce1ebcf23acf8977a'),
(376, 1, '成龙', 'http://legend-face.qiniudn.com/1416051681', '88d2f146ffc4c4159a227223772451b7'),
(377, 1, '成龙', 'http://legend-face.qiniudn.com/1416051696', '17ba9c6098f6032be6f679c30e9efa97'),
(378, 1, '成龙', 'http://legend-face.qiniudn.com/1416298974', '9d6d9411a80fff69722505dd8df8adda'),
(379, 2, '李连杰', 'http://legend-face.qiniudn.com/1416051718', 'fae0a0b7f0f97b09e2fb40577ed387e8'),
(380, 2, '李连杰', 'http://legend-face.qiniudn.com/1416051734', '39c20f60d4e347446b9f0d611e336afd'),
(381, 2, '李连杰', 'http://legend-face.qiniudn.com/1416051746', '7ae30c302d4e94f2e16ccb0a7565ae58'),
(382, 3, '刘亦菲', 'http://legend-face.qiniudn.com/1416051778', '5bb1aaf2cb422a45d1d85cfb364441a0'),
(383, 3, '刘亦菲', 'http://legend-face.qiniudn.com/1416051791', '991c1a626d861d502bc15454267b5b3b'),
(384, 4, '李冰冰', 'http://legend-face.qiniudn.com/1416051814', '35aed292501089828c15ecd34ad2483b'),
(385, 4, '李冰冰', 'http://legend-face.qiniudn.com/1416051829', 'cde68e5ee4e1306b1e5a8fd6d855bc34'),
(386, 4, '李冰冰', 'http://legend-face.qiniudn.com/1416051853', 'ca630f311d1302ffe357d06035c97a95'),
(387, 5, '范冰冰', 'http://legend-face.qiniudn.com/1416051871', '1d1cf5bf220f467d2725ea723984b3bd'),
(388, 5, '范冰冰', 'http://legend-face.qiniudn.com/1416051888', '07aa2b0d661347041d849d8abb343994'),
(389, 5, '范冰冰', 'http://legend-face.qiniudn.com/1416051899', '9f61fa53723eabc5c0494c0dd1e3aed1'),
(390, 5, '范冰冰', 'http://legend-face.qiniudn.com/1416051913', '4c8fc78cfc5201f54be2ae27690ab672'),
(391, 6, '张静初', 'http://legend-face.qiniudn.com/1416143614', '24cad4a3a0e1c1c3e71e0d9c082740e1'),
(392, 6, '张静初', 'http://legend-face.qiniudn.com/1416143644', '4508865c39fc28ab5a2a6c286ebe0ae3'),
(393, 6, '张静初', 'http://legend-face.qiniudn.com/1416143728', 'ea3409f23b1a7395bcbd871977aabd2a'),
(394, 7, '科比', 'http://legend-face.qiniudn.com/1416109535', '3d74ca5b3fe1484b7a77ba134895e631'),
(395, 7, '科比', 'http://legend-face.qiniudn.com/1416109554', '069d1eb0b3bf452f2fc2fba510a060d6'),
(396, 7, '科比', 'http://legend-face.qiniudn.com/1416109564', '72cc5bcfbb5b14ee1306006f1b3d6939'),
(397, 7, '科比', 'http://legend-face.qiniudn.com/1416109576', 'bb79e85f1ef018abfc312e83e580a62d'),
(398, 8, '詹姆斯', 'http://legend-face.qiniudn.com/1416109615', 'bac24f4bbc18585893072e2a8a2fda8f'),
(399, 8, '詹姆斯', 'http://legend-face.qiniudn.com/1416109634', '21245a9e0ccb62b738d83898bea5fe2e'),
(400, 8, '詹姆斯', 'http://legend-face.qiniudn.com/1416109645', 'fddf7f206dc8633c7fc77a95f873506a'),
(401, 8, '詹姆斯', 'http://legend-face.qiniudn.com/1416109685', '5a24b0a61c3dd50f96ddc5c1566f0cdb'),
(402, 9, '梁朝伟', 'http://legend-face.qiniudn.com/1416109713', '377f36ea3f05bd822bdfe79fcebcad4a'),
(403, 9, '梁朝伟', 'http://legend-face.qiniudn.com/1416109726', '7f653440220e9fb68314c17d2dc96ee2'),
(404, 10, '麦迪', 'http://legend-face.qiniudn.com/1416109777', '408b881e6d994a82d59da26b98c3ac2d'),
(405, 10, '麦迪', 'http://legend-face.qiniudn.com/1416109791', '7116415ef743e11b8d78440e61545af8'),
(406, 10, '麦迪', 'http://legend-face.qiniudn.com/1416109800', '2fc233704e803fbae8e3a525fd621a6c'),
(407, 15, '张伟', 'http://legend-face.qiniudn.com/1416126497', '54e022df81ca8079bf4fa4c94e7729f6'),
(408, 16, '陈赫', 'http://legend-face.qiniudn.com/1416126825', 'f51ab4fb82e304f27143a158ec895ef5'),
(409, 17, '娄艺潇', 'http://legend-face.qiniudn.com/1416126914', '3bddfaaea6d0a93c5a89338ed59f6a49'),
(410, 18, '刘翔', 'http://legend-face.qiniudn.com/1416127008', 'a8c2647771b64990dcb3119c1de948b1'),
(411, 19, '林丹', 'http://legend-face.qiniudn.com/1416127055', 'bd3fab109bb52fc43addf157e3d5614a'),
(412, 20, '王浩', 'http://legend-face.qiniudn.com/1416127096', '63cad347f82d06f98e09428e21e96a0c'),
(413, 21, '郭晶晶', 'http://legend-face.qiniudn.com/1416128121', '2775c7caf35d2994df137d0b535ee8c5'),
(414, 22, '姚明', 'http://legend-face.qiniudn.com/1416128174', '741b8540be764e9524a6cd2d46fc0845'),
(415, 23, '林书豪', 'http://legend-face.qiniudn.com/1416131915', '7fd5ecd26e5876b94a66146db680eda4'),
(416, 24, '郭富城', 'http://legend-face.qiniudn.com/1416131869', 'be8fe2bd26811c438a7e1fcfb04e7e65'),
(417, 25, '周杰伦', 'http://legend-face.qiniudn.com/1416136411', '3f678405f0fa44870bd3032ab227fd85'),
(418, 26, '邓紫棋', 'http://legend-face.qiniudn.com/1416136464', '9d030ad3fe94d1ae0e3f6d1669c5ca9f'),
(419, 27, '孙燕姿', 'http://legend-face.qiniudn.com/1416136520', 'fb0df3e78425d8063b675d0aab5207f7'),
(420, 28, '梁咏琪', 'http://legend-face.qiniudn.com/1416136575', '98ac7362bce4703f6c022ab893a5ba67'),
(421, 29, '光良', 'http://legend-face.qiniudn.com/1416136619', 'f08c3e51b1c51f78644325bd77b4b50b'),
(422, 30, '任贤齐', 'http://legend-face.qiniudn.com/1416136650', '847b18094f83952d95ab76285822d57f'),
(423, 31, '许嵩', 'http://legend-face.qiniudn.com/1416136936', 'c9bb219c9fc63de08f89ce07c1c2d2f6'),
(424, 32, '蔡依林', 'http://legend-face.qiniudn.com/1416136836', '47c373b7cc621321cfe8787860f917b8'),
(425, 33, '王力宏', 'http://legend-face.qiniudn.com/1416136979', '8b488740353858dd66ab046cb52bba64'),
(426, 34, '梁静茹', 'http://legend-face.qiniudn.com/1416137006', 'e06a6f162d175b4d6e38d558e6f3d946'),
(427, 1, '成龙', 'http://legend-face.qiniudn.com/1416369840', '73a8becfd6ac282039a6ecf32855ec13'),
(428, 1, '成龙', 'http://legend-face.qiniudn.com/1416370300', '74409e3af52936590316e809ac1b36a0'),
(429, 1, '成龙', 'http://legend-face.qiniudn.com/1416372679', '494ba126bf22917d81183b79f12aa54d'),
(430, 1, '成龙', 'http://legend-face.qiniudn.com/1416372751', '084ccf5f322cbe2ec5b0590c5cd77099'),
(431, 1, '成龙', 'http://legend-face.qiniudn.com/1416372762', '891e0baaf1e5c3b96d21cd69cb2919dc'),
(432, 1, '成龙', 'http://legend-face.qiniudn.com/1416372778', '4b795bba861ff64d969fa8f370cf3fc7'),
(433, 1, '成龙', 'http://legend-face.qiniudn.com/1416372794', '2c7a30f48b02672af538608452926a30'),
(434, 1, '成龙', 'http://legend-face.qiniudn.com/1416372844', 'ab59a788f70ece31b61b371e401edf1f'),
(435, 1, '成龙', 'http://legend-face.qiniudn.com/1416373051', '6e3c6c35ca6ca0e628599e45c6166bc6'),
(436, 1, '成龙', 'http://legend-face.qiniudn.com/1416377553', '9b2f2400f4d4213805d0b3ba6f1c31c5'),
(437, 1, '成龙', 'http://legend-face.qiniudn.com/1416377566', '3d14ad59b380e5691f14080069d0ff3e'),
(438, 1, '成龙', 'http://legend-face.qiniudn.com/1416377598', '463bafda3cd555956b9070a8e2fbdcc6'),
(439, 1, '成龙', 'http://legend-face.qiniudn.com/1416377627', 'b124842d9aa66facddd44245b77ab7a8'),
(440, 1, '成龙', 'http://legend-face.qiniudn.com/1416377669', '3162cb30b5425b0edada1c6ce23a37e1'),
(442, 1, '成龙', 'http://legend-face.qiniudn.com/1416388971', '90b10c857d75327a61461fae96047aea'),
(444, 1, '成龙', 'http://legend-face.qiniudn.com/1416468635', '28571f51ae7ef1ab8d7cb858de66da5a');

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
  `introduce` text NOT NULL,
  `group_id` int(11) NOT NULL,
  `user` varchar(20) NOT NULL,
  `uid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=35 ;

--
-- 转存表中的数据 `fl_person`
--

INSERT INTO `fl_person` (`id`, `person_id`, `name`, `sex`, `profession`, `introduce`, `group_id`, `user`, `uid`) VALUES
(1, 'fd99ba5c58879e24d72d', '成龙', 'M', '演员', '<h1>成龙</h1>\r\n\r\n<p>    1954年4月7日生于香港中西区，祖籍安徽芜湖，[2] 国家一级演员，大中华区影坛和国际功夫影星。[3]1960年进入中国戏剧学校学习戏曲，以武师身份进身电影圈。1970年自戏校毕业，因为自幼在影片中跑过龙套，所以希望往电影界发展。1978年吴思远邀成龙拍《蛇形刁手》和《醉拳》令其走红，[4] 1994年“贺岁片”概念的电影《红番区》在美国公映后大受欢迎，使其成功打入好莱坞。[5] 1997年香港回归，江泽民在宴会上敬酒时称成龙为“大哥”，从此“大哥”的称呼成为了成龙的代名词。[6]  2007年，成龙被韩国民众选为代表“中国大人物”之一，仅次于毛泽东、邓小平，高居第3名。[7] 2012年8月24日 《纽约时报》评选出史上20位最伟大动作巨星，成龙荣登第一位。[8] 2013年，成龙当选为全国政协委员。2014年2月14日，成龙再次当选为香港演艺人协会会长。成龙与周润发、周星驰、并称“双周一成”。[10] 他擅长功夫片，电影的谐趣风格及袁和平设计的活泼灵巧兼具杂耍性的武术动作，令成龙找到了自己在功夫片领域的发展方向，其主演的电影全球总票房已经超过200亿元。</p>\r\n\r\n<h2>早年经历</h2>\r\n\r\n<h3>儿童时代</h3>\r\n\r\n<p>    1954年成龙在香港出生，祖籍安徽省芜湖市鸠江区沈巷镇房桥村，成龙的父母亲最初在法国领事馆工作，父亲是厨师，也是京剧票友。成龙小时候很喜欢打架，因为他住在山顶领事馆区，附近的尽是法国人、美国人，所以经常跟外国小孩子打。这种情况一直到他小学一年级，但由于常打架、闹事，所以无法升级。成龙除了喜欢打架之外，还喜欢看武侠片。那时候 ，武侠片大行其道，曹达华，于素秋是当时最红的明星，成龙崇拜他们，一心想上山学艺。[13] 1961年，成龙的父亲带着成龙来到尖沙咀的美丽都大厦，拜访京剧武生于占元师傅，他正是成龙崇拜的武侠女星于素秋的父亲。成龙看到这边的学生在旁勤奋的练功，觉得非常羡慕，便要求父亲让他在这练武。于是，成龙便成为这儿的一员，与洪金宝（元龙）﹑元奎、元华、元彬、元德、元彪成为七小福。于占元师傅的教育方式基本上是老戏行规矩的严厉与苦练，管束孩子做事，练功的方式就是打、罚。不到四天，成龙就后悔了，最初的那段日子，成龙常常在晚上暗自哭泣。</p>\r\n\r\n<h3>练武时期</h3>\r\n\r\n<p>    练武时期 20世纪60年代，在戏曲班里，成龙每天清早五时起床练功，到晚上12时止。每天过着这样有规律的生活，但每月等派救济品时，便是他们最兴奋的时候了。几十个孩子聚在一起，等红十字会的人来送救济品，当中有白米，奶粉，食品等等。孩子们排半天队等待分配给自己的食物，平常他们吃的饭，是大锅饭。烧饭就由女孩子轮流负责，饭够吃，至于配菜，就得用抢的。[15] 成龙在七小福时期的艺名是元楼，凭着一副身手，他们住在荔园游乐场，长期表演京剧，他们几个人，一出戏里什么都做，幕后换装穿衣忙，幕前武打表演忙。此外，片场本是他们经常出入的地方，小时候，演些童角，临时演员之类，所以成龙很早就出道，成了真正的功夫良才。[16]  </p>\r\n\r\n<h3>武师时期</h3>\r\n\r\n<p>    20世纪70年代，成龙白天当武师，晚上回师父家睡觉。17岁那年，成龙满师的日子到了，结业那天成龙依照老例，向师父下跪叩头，感谢了师父提携之恩。[15] 1971年，成龙开始从事武师的工作，主要在邵氏担任跑龙套的角色。在当武师时期，他的名字是陈元龙，他专门做名演员的替身。这段时期过着风花雪月的日子，工作之余，成龙便尽情玩乐，跳舞，喝酒，上夜总会等，像其他武师一样过着没有明天的放任生活。[15] 当武师，出生入死，出卖的是劳力，可惜地位卑微。每天等候导演来挑人，为了在众多人前被挑中，成龙常卖力演出，因而常被导演选上。在《精武门》片中成龙、元彪扮演的都是被李小龙暴揍的日本浪人，成龙还做了片末被陈真一脚踢飞撞在墙上的铃木的替身。当时拍摄的是李小龙飞脚踢人的场景，但被踢的演员受不了李小龙的脚力。身强力壮的成龙主动要求为这位演员当替身，挨了李小龙这一脚。[17-18] 因为他年轻，身手灵活，且勇于尝试，导演都乐意用他，有什么高难度动作，就会想起陈元龙。[15] 二十世纪70年代，成龙曾模仿李小龙的形象拍片，但始终无法走红。后来成龙明白了“李小龙只有一个”的道理，转而开辟了功夫喜剧的路线。[17]</p>\r\n\r\n<h2>演绎经历</h2>\r\n\r\n<h3>担任主角</h3>\r\n\r\n<p>    1975年，<a href="http://baike.baidu.com/view/60548.htm" target="_blank">新天地</a>公司成立，签了成龙，安排他拍一两部片，分别为《<a href="http://baike.baidu.com/view/1021424.htm" target="_blank">广东小老虎</a>》以及《<a href="http://baike.baidu.com/view/992209.htm" target="_blank">北派功夫</a>》。但票房惨淡。后来<a href="http://baike.baidu.com/view/827029.htm" target="_blank">陈自强</a>投入<a href="http://baike.baidu.com/view/364936.htm" target="_blank">罗维</a>在香港的<a href="http://baike.baidu.com/view/730361.htm" target="_blank">电影公司</a>工作。推荐成龙给罗维，成龙替罗维拍摄的是大制作的<a href="http://baike.baidu.com/view/2969.htm" target="_blank">古龙</a>作品，少林系列（《<a href="http://baike.baidu.com/view/946196.htm" target="_blank">少林木人巷</a>》）但都不得志，在拍摄《<a href="http://baike.baidu.com/view/358054.htm" target="_blank">少林门</a>》时被打致完全失去知觉。1978年，<a href="http://baike.baidu.com/view/364934.htm" target="_blank">吴思远</a>计划拍《<a href="http://baike.baidu.com/view/358612.htm" target="_blank">蛇形刁手</a>》便向罗维借成龙来拍，接着《<a href="http://baike.baidu.com/view/70331.htm" target="_blank">醉拳</a>》二部谐趣功夫喜剧，把成龙活泼精灵的动态表露无遗。《<a href="http://baike.baidu.com/view/70331.htm" target="_blank">醉拳</a>》走红后，罗维放手让成龙自编自导自演了《<a href="http://baike.baidu.com/view/959398.htm" target="_blank">笑拳怪招</a>》，取得不错的成绩。这时多家影业公司向成龙发出加盟邀请，最终<a href="http://baike.baidu.com/view/1966591.htm" target="_blank">嘉禾公司</a>胜出。1980年，成龙在嘉禾的第一部作品《<a href="http://baike.baidu.com/view/358571.htm" target="_blank">师弟出马</a>》，马到成功，接着嘉禾便筹划安排他到美国好莱坞拍《杀手壕》，《炮弹飞车》《<a href="http://baike.baidu.com/view/946177.htm" target="_blank">威龙猛探</a>》。但在外国拍戏，受洋人导演指挥，使他不得发挥，因此这几部片在当时不红。<a href="http://baike.baidu.com/picture/3539/10605302/8805246/f2deb48f8c5494eeb4bf744f2ff5e0fe98257ec2?fr=lemma&ct=cover" target="blank">成龙与女明星(18张)</a>1983年，成龙执导《<a href="http://baike.baidu.com/view/1021149.htm" target="_blank">龙少爷</a>》，再度掀起热潮，他与<a href="http://baike.baidu.com/view/9296.htm" target="_blank">洪金宝</a>、<a href="http://baike.baidu.com/view/15157.htm" target="_blank">元彪</a>、拍《<a href="http://baike.baidu.com/view/457174.htm" target="_blank">奇谋妙计五福星</a>》，《<a href="http://baike.baidu.com/view/153359.htm" target="_blank">快餐车</a>》，《<a href="http://baike.baidu.com/view/72202.htm" target="_blank">福星高照</a>》，《<a href="http://baike.baidu.com/view/772682.htm" target="_blank">夏日福星</a>》，《龙的心》。成龙一方面帮助洪金宝，而洪金宝也有某程度上影响成龙，所以作品都是<a href="http://baike.baidu.com/view/1122775.htm" target="_blank">洪家班</a>的风格，直到《<a href="http://baike.baidu.com/view/153325.htm" target="_blank">警察故事</a>》才自然流事实露出成龙自己的风格。这部片除了在香港卖座之外，还替成龙争取到最佳导演、最佳影片、最受欢迎演员等奖项。[19]1987年，成龙推出的作品《<a href="http://baike.baidu.com/view/191973.htm" target="_blank">龙兄虎弟</a>》、《<a href="http://baike.baidu.com/view/1521813.htm" target="_blank">A计划续集</a>》，88年《<a href="http://baike.baidu.com/view/192115.htm" target="_blank">飞龙猛将</a>》、《<a href="http://baike.baidu.com/view/1788458.htm" target="_blank">警察故事续集</a>》，89年《奇迹》，90年《<a href="http://baike.baidu.com/view/153280.htm" target="_blank">飞鹰计划</a>》全都是3000多万以上的票房。</p>\r\n\r\n<h2>个人生活</h2>\r\n\r\n<h3>感情生活</h3>\r\n\r\n<p><strong>邓丽君</strong></p>\r\n\r\n<p>    1979年9月，<a href="http://baike.baidu.com/view/8696.htm" target="_blank">邓丽君</a>因假护照事件，赴美国洛杉矶散心，恰好成龙也在美国拍电影《<a href="http://baike.baidu.com/view/965085.htm" target="_blank">杀手壕</a>》。邓丽君心情不好，加上身处陌生异地，此时成龙适时给予邓丽君温暖与慰藉，使得这段恋情迅速加温。成龙在唱歌方面也有成绩，这其中就有邓丽君的功劳。他们在美国的时候，邓丽君即将唱歌的基本功传授给成龙。不过成龙电影杀青返港后，并没有因为邓丽君而放弃追逐新欢，旋即与林凤娇谱出新恋曲，此时邓丽君仍被蒙在鼓里，她一厢情愿地飞到香港探成龙班，可是却苦等了一个半小时。直到成龙与林凤娇东窗事发，邓丽君才知道自己好傻，被这段刻骨铭心的爱情伤得好深。当她出席香港金曲奖时，甚至哭着说宁可不领奖，也不愿意从刚好就是颁奖人的成龙手中接过奖座。两人的爱情走到尽头，因为两人性格也不合，成龙重视朋友远甚过女朋友。</p>\r\n\r\n<p><strong>林凤娇</strong></p>\r\n\r\n<p>    <a href="http://baike.baidu.com/view/156414.htm" target="_blank">林凤娇</a>与成龙相识于1981年，当时成龙赴台拍摄《龙少爷》，经义兄<a href="http://baike.baidu.com/view/355107.htm" target="_blank">秦祥林</a>介绍在其家中认识、相恋，林凤娇那个时期在台湾正大红大紫，刚凭《小城故事》里的哑女获得第16届金马奖最佳女主角，代表台湾最具人气的“二林”“二秦”在全东南亚都有广泛的知名度，但在与成龙相遇后，她很快在1982年拍完最后一部影片《步步惊魂》后，就宣布退出影坛，并前往美国与刚拍完《炮弹飞车》的成龙秘密结婚，同年诞下儿子<a href="http://baike.baidu.com/view/28230.htm" target="_blank">房祖名</a>。成龙和林凤娇在美国只是登记，并没有大宴宾客，成家班的一众兄弟也没有前往道贺。[33]2003年，成龙为太太林凤娇在美国洛杉矶举行生日派对，一掷10万美元宴请30位宾客庆祝，还送了一辆<a href="http://baike.baidu.com/subview/6861/9858741.htm" target="_blank">劳斯莱斯</a>给太太做生日礼物。</p>\r\n\r\n<p><strong>吴绮莉</strong></p>\r\n\r\n<p>    1998年，吴绮莉与成龙的初次相识是在一个派对上，后两人陷入爱河。当成龙知道吴绮莉怀孕之后，便质问她到底怎么回事，吴绮莉做出了最后决定：将孩子生下来。决定之后，她再没有跟成龙打招呼，向无线递交了为期半年的事假申请，然后回家休假去了。直到1999年10月，吴绮莉向传媒爆出怀上“龙胎”的新闻。1999年11月19日凌晨，吴绮莉在旧山顶道嘉诺撒医院进行剖腹产手术，顺利诞下一女，吴绮莉为“小龙女”取名为卓林。成龙表示自己“犯了全天下男人都会犯的错”，并承认了事实。</p>\r\n', 0, '', 0),
(2, 'e0058c07c521c94d28d7', '李连杰', 'M', '演员', '<h1>功夫巨星</h1>\r\n', 0, '', 0),
(3, '91ee6d7d111edbd65dc8', '刘亦菲', 'W', '演员', '美女明星', 0, '', 0),
(4, '89c7383b67a5cbb5b108', '李冰冰', 'W', '演员', '美女明星', 0, '', 0),
(5, '8d159237f36bae6140c5', '范冰冰', 'W', '演员', '美女明星', 0, '', 0),
(6, 'c8cf5e2ba61c89ce7df9', '张静初', 'W', '演员', '美女明星', 0, '', 0),
(7, '310df19e8289ca59120e', '科比', 'M', '球星', 'NBA明星', 0, '', 0),
(8, '75098078afee36d33844', '詹姆斯', 'M', '球星', 'NBA明星', 0, '', 0),
(9, 'df75f1cdb2a39ea365c2', '梁朝伟', 'M', '演员', '影帝', 0, '', 0),
(10, '3169477628e2001d758f', '麦迪', 'M', '球员', 'NBA球星', 0, '', 0),
(15, 'a50e3d3db3a0e2bd37e7', '张伟', 'M', '演员', '爱情公寓', 0, '', 0),
(16, 'c08021421da54924829c', '陈赫', 'M', ' 演员', '爱情公寓', 0, '', 0),
(17, '79a25c379ff7a893c96b', '娄艺潇', 'W', '演员', '爱情公寓', 0, '', 0),
(18, '63bf14a514d56a8fc6ac', '刘翔', 'M', '运动员', '奥运跨栏冠军', 0, '', 0),
(19, 'ebc88d5e5573ebcff3c6', '林丹', 'M', '运动员', '羽毛球大满贯', 0, '', 0),
(20, '4f2ae007f5a4f4378602', '王浩', 'M', '运动员', '乒乓球冠军', 0, '', 0),
(21, 'eeb7d8fb39d04ecf745f', '郭晶晶', 'W', '运动员', '跳水大满贯', 0, '', 0),
(22, 'c8869401e9be8d4fbf51', '姚明', 'M', '运动员', '著名华裔NBA球星', 0, '', 0),
(23, '64705b56b43675f59ad4', '林书豪', 'M', '运动员', '著名华裔NBA球员', 0, '', 0),
(24, 'b42b449a1dc4de86a21b', '郭富城', 'M', '演员', '舞王', 0, '', 0),
(25, 'c368f304c62ca3e8d35e', '周杰伦', 'M', '歌手', '<p>无与伦比</p>\r\n', 0, '', 0),
(26, '132de0d45036957515c7', '邓紫棋', 'W', '歌手', '新星', 0, '', 0),
(27, '105e68c4ed35579ea7e5', '孙燕姿', 'W', '歌手', '美女', 0, '', 0),
(28, '0156faa36540969c6b9c', '梁咏琪', 'M', '歌手', '美女', 0, '', 0),
(29, '16b8e015cdea45058613', '光良', 'M', '歌手', '第一次', 0, '', 0),
(30, '262206da02efdcd67565', '任贤齐', 'M', '演员、歌手', '经典、怀旧', 0, '', 0),
(31, 'b9fbe2f03901f8d184dc', '许嵩', 'M', '歌手', '新星', 0, '', 0),
(32, '8d06c9bd8aa4a9aefaba', '蔡依林', 'W', '歌手', '天后', 0, '', 0),
(33, 'c74788311205996cb4df', '王力宏', 'M', '歌手', '帅哥', 0, '', 0),
(34, '56e5708966e934ed1859', '梁静茹', 'M', '歌手', '美女', 0, '', 0);

-- --------------------------------------------------------

--
-- 表的结构 `fl_user`
--

CREATE TABLE IF NOT EXISTS `fl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `user` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `is_forbid` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `fl_user`
--

INSERT INTO `fl_user` (`id`, `name`, `user`, `password`, `phone`, `email`, `is_forbid`) VALUES
(0, 'test', '', '', '', '', 0),
(1, 'admin', '测试哈哈', '25f9e794323b453885f5181f1b624d0b', '', '', 0),
(2, '狐狸', 'summit', '25f9e794323b453885f5181f1b624d0b', '', '1420646999@qq.com', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `w_comments`
-- ----------------------------
DROP TABLE IF EXISTS `w_comments`;
CREATE TABLE `w_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(38) NOT NULL,
  `email` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `date` datetime NOT NULL,
  `news_id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of w_comments
-- ----------------------------

-- ----------------------------
-- Table structure for `w_members`
-- ----------------------------
DROP TABLE IF EXISTS `w_members`;
CREATE TABLE `w_members` (
  `member_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `login` varchar(100) NOT NULL DEFAULT '',
  `passwd` varchar(32) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of w_members
-- ----------------------------
INSERT INTO `w_members` VALUES ('1', 'Admin', 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'test@mail.com');
INSERT INTO `w_members` VALUES ('2', 'Thomas', 'Reitz', 'sliker', 'b854d45c0abf84371b2f31db30b8d0c5', 'test@mail.com');

-- ----------------------------
-- Table structure for `w_news`
-- ----------------------------
DROP TABLE IF EXISTS `w_news`;
CREATE TABLE `w_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `autor` varchar(48) NOT NULL,
  `title` varchar(255) NOT NULL,
  `cat` text NOT NULL,
  `news` text NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of w_news
-- ----------------------------
INSERT INTO `w_news` VALUES ('1', 'Sliker', 'Test News', 'Dies ist eine Test News', 'asdasdasdasdasdasd', '2015-11-25 20:05:01');
INSERT INTO `w_news` VALUES ('2', 'Sliker', 'Willkommen', 'Mein Erstes News System', '<p><center>\n\n        Ich bin dein 7. Sinn,\n\n	Dein doppelter Boden,\n\n	Dein zweites Gesicht.\n\n	Du bist eine kluge Prognose,\n\n	das Prinzip Hoffnung,\n\n	ein Leuchtstreifen aus der Nacht.\n\n	Irgendwann find und lieb ich dich ...\n\n    </center>', '2015-11-25 22:03:43');
INSERT INTO `w_news` VALUES ('4', 'Thomas', 'test', 'Morgen ist Donnerstag', 'willkommen im Demo', '2015-11-25 23:30:55');
INSERT INTO `w_news` VALUES ('5', 'Thomas', 'Test News', 'Hallo meine erste News ....', 'Haloo willkommen im News System plaaaaaa', '2015-11-26 19:46:44');

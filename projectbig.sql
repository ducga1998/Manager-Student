/*
Navicat MySQL Data Transfer

Source Server         : My Localhost
Source Server Version : 50719
Source Host           : localhost:3306
Source Database       : projectbig

Target Server Type    : MYSQL
Target Server Version : 50719
File Encoding         : 65001

Date: 2017-10-17 13:36:26
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id_category` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_category` longtext,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('1', 'Y TE');
INSERT INTO `category` VALUES ('2', 'QUAN DOI');
INSERT INTO `category` VALUES ('3', 'IT');
INSERT INTO `category` VALUES ('4', 'EDUCATION');

-- ----------------------------
-- Table structure for category_detail
-- ----------------------------
DROP TABLE IF EXISTS `category_detail`;
CREATE TABLE `category_detail` (
  `id_category_detail` int(11) unsigned DEFAULT NULL,
  `name_category_detail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_category` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  KEY `id_category_detail` (`id_category_detail`) USING BTREE,
  CONSTRAINT `category_detail_ibfk_1` FOREIGN KEY (`id_category_detail`) REFERENCES `getidpost` (`id_category_detail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of category_detail
-- ----------------------------
INSERT INTO `category_detail` VALUES ('1', 'BAC SI', '1');
INSERT INTO `category_detail` VALUES ('2', 'Y TA', '1');
INSERT INTO `category_detail` VALUES ('3', 'Learning', '4');
INSERT INTO `category_detail` VALUES ('4', 'practive', '4');
INSERT INTO `category_detail` VALUES ('5', 'quoc phong', '2');

-- ----------------------------
-- Table structure for getidpost
-- ----------------------------
DROP TABLE IF EXISTS `getidpost`;
CREATE TABLE `getidpost` (
  `id_category` int(10) unsigned DEFAULT NULL,
  `id_post` int(11) DEFAULT NULL,
  `id_category_detail` int(11) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_category_detail`),
  KEY `id` (`id_category`) USING BTREE,
  CONSTRAINT `getidpost_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of getidpost
-- ----------------------------
INSERT INTO `getidpost` VALUES ('1', '1', '1');
INSERT INTO `getidpost` VALUES ('2', '2', '2');
INSERT INTO `getidpost` VALUES ('3', '4', '3');
INSERT INTO `getidpost` VALUES ('4', '5', '4');
INSERT INTO `getidpost` VALUES ('4', '3', '5');

-- ----------------------------
-- Table structure for infouser
-- ----------------------------
DROP TABLE IF EXISTS `infouser`;
CREATE TABLE `infouser` (
  `UserName` varchar(250) DEFAULT NULL,
  `PassWord` varchar(250) DEFAULT NULL,
  `Name` varchar(250) DEFAULT NULL,
  `BirthDay` date DEFAULT NULL,
  `Country` varchar(250) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `Current_id` int(11) DEFAULT NULL,
  `Mail` varchar(250) DEFAULT NULL,
  `Avatar` varchar(250) DEFAULT NULL,
  `NumberPhone` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of infouser
-- ----------------------------
INSERT INTO `infouser` VALUES ('ducga1998', 'ducga123', 'Duc', '2017-10-02', 'nghe an', '1', '3', 'duc2820@gmail.com', '', '91560203');
INSERT INTO `infouser` VALUES ('dkkkkkkkkkkkk', '123456', 'chun', '2017-10-10', 'nghe an', '2', '1', 'duc2820@gmail.com', null, '978466889');
INSERT INTO `infouser` VALUES ('editer', 'admin', 'hacker', '2017-10-11', 'nghe an', '3', '2', 'chun@gmail.com', null, '915460230');
INSERT INTO `infouser` VALUES ('dsvsdvdsv', '123456', 'chun', '2017-10-02', 'csacascsac', '4', '1', 'duc2820@gmail.com', null, '915460230');
INSERT INTO `infouser` VALUES ('dkkkkkkkkkkkk', 'ddddddd', 'abc', '2017-10-13', 'dsvdsvdsvdsvdsv', '5', '1', 'duc2820@gmail.com', null, '915460230');
INSERT INTO `infouser` VALUES ('cÃ¢cscasc', '123456', 'eqweqw', '2013-03-10', 'nghe am', '6', '3', 'eqweqw', null, '777');

-- ----------------------------
-- Table structure for post
-- ----------------------------
DROP TABLE IF EXISTS `post`;
CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `UserName` varchar(250) DEFAULT NULL,
  `Title` varchar(250) DEFAULT NULL,
  `Content` longtext,
  `view` int(11) DEFAULT NULL,
  `DateUp` datetime DEFAULT NULL,
  `Category_id` int(250) unsigned DEFAULT NULL,
  `id_post` int(11) DEFAULT NULL,
  KEY `id` (`Category_id`) USING BTREE,
  CONSTRAINT `post_ibfk_1` FOREIGN KEY (`Category_id`) REFERENCES `category` (`id_category`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of post
-- ----------------------------
INSERT INTO `post` VALUES ('1', 'nguyen minh duc', 'sdcsdcsdc', 'csdcsdc', '0', '2017-10-03 19:46:30', '3', '1');
INSERT INTO `post` VALUES ('2', 'duc', 'xong', '12csdcsdc', '1', '2017-10-11 20:18:37', '2', '2');
INSERT INTO `post` VALUES ('1', 'nguyen minh duc', 'sdcsdcsdc', 'csdcsdc', '0', '2017-10-03 19:46:30', '1', '1');
INSERT INTO `post` VALUES ('1', 'ducga1998', '32423423423', 'Ä‘Ã¢sdasdadadasda', '0', '2017-10-12 00:00:00', '4', '4');
INSERT INTO `post` VALUES ('1', 'ducga1998', 'sdcsdcsdc', 'csdcsdcsdcsd', '0', '2017-10-12 00:00:00', '4', '5');

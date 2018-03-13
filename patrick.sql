/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 100122
Source Host           : localhost:3306
Source Database       : patrick

Target Server Type    : MYSQL
Target Server Version : 100122
File Encoding         : 65001

Date: 2018-03-06 10:22:54
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for diseases
-- ----------------------------
DROP TABLE IF EXISTS `diseases`;
CREATE TABLE `diseases` (
  `dsid` int(11) NOT NULL AUTO_INCREMENT,
  `dstitle` varchar(255) DEFAULT NULL,
  `dsdesc` varchar(255) DEFAULT NULL,
  `remedies` varchar(255) DEFAULT NULL,
  `nid` int(11) DEFAULT NULL,
  PRIMARY KEY (`dsid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of diseases
-- ----------------------------
INSERT INTO `diseases` VALUES ('1', 'dog', 'dog', 'injection', '3');
INSERT INTO `diseases` VALUES ('3', 'wilson', 'rey', 'sevilla', '3');

-- ----------------------------
-- Table structure for effects
-- ----------------------------
DROP TABLE IF EXISTS `effects`;
CREATE TABLE `effects` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `etitle` varchar(255) DEFAULT NULL,
  `edesc` varchar(255) DEFAULT NULL,
  `remedies` varchar(255) DEFAULT NULL,
  `nid` int(11) DEFAULT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of effects
-- ----------------------------

-- ----------------------------
-- Table structure for nightshade
-- ----------------------------
DROP TABLE IF EXISTS `nightshade`;
CREATE TABLE `nightshade` (
  `nid` int(11) NOT NULL AUTO_INCREMENT,
  `ntitle` varchar(255) DEFAULT NULL,
  `nsn` varchar(255) DEFAULT NULL,
  `ntype` varchar(255) DEFAULT NULL,
  `ndesc` varchar(255) DEFAULT NULL,
  `npic` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`nid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nightshade
-- ----------------------------
INSERT INTO `nightshade` VALUES ('1', 'Tomato', 'Solanum lycopenum', 'Edible', 'Red to orange variety common in the American and Asian countries.', null);
INSERT INTO `nightshade` VALUES ('3', 'Potato', 'Solanum potatum', 'Edible', 'Potato', null);

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'Admin', 'admin1234');

/*

 Source Server         : local
 Source Server Type    : MariaDB
 Source Server Version : 100509
 Source Host           : 127.0.0.1:3306
 Source Schema         : jose_vargas

 Target Server Type    : MariaDB
 Target Server Version : 100509
 File Encoding         : 65001

 Date: 20/04/2021 14:42:08
*/
CREATE DATABASE jose_vargas;


SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for migration
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration` (
  `version` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migration
-- ----------------------------
BEGIN;
INSERT INTO `migration` VALUES ('m000000_000000_base', 1618940378);
INSERT INTO `migration` VALUES ('m210420_173605_create_programador_table', 1618941141);
COMMIT;

-- ----------------------------
-- Table structure for programador
-- ----------------------------
DROP TABLE IF EXISTS `programador`;
CREATE TABLE `programador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dni` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `languages` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of programador
-- ----------------------------
BEGIN;
INSERT INTO `programador` VALUES (1, 'asdasd', 'asda', 'sdasd', 'asda', 'dasda', '2021-04-20 14:31:07', '0000-00-00 00:00:00');
INSERT INTO `programador` VALUES (2, 'fsdf', 'sdfs', 'sdf', 'sdfs', 'sdf', '2021-04-20 14:32:31', '0000-00-00 00:00:00');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;

/*
 Navicat Premium Data Transfer

 Source Server         : 192.168.99.100
 Source Server Type    : MySQL
 Source Server Version : 50639
 Source Host           : 192.168.99.100:3306
 Source Schema         : facebook

 Target Server Type    : MySQL
 Target Server Version : 50639
 File Encoding         : 65001

 Date: 22/03/2019 17:41:56
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(24) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES (1, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99');

-- ----------------------------
-- Table structure for blocked
-- ----------------------------
DROP TABLE IF EXISTS `blocked`;
CREATE TABLE `blocked`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `by` int(11) NOT NULL,
  UNIQUE INDEX `id`(`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for chat
-- ----------------------------
DROP TABLE IF EXISTS `chat`;
CREATE TABLE `chat`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from` int(11) NOT NULL,
  `to` int(11) NOT NULL,
  `message` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `read` int(11) NOT NULL,
  `time` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of chat
-- ----------------------------
INSERT INTO `chat` VALUES (2, 1, 2, '123', 1, '2019-03-15 06:16:51');
INSERT INTO `chat` VALUES (3, 1, 2, '333', 1, '2019-03-15 06:17:37');

-- ----------------------------
-- Table structure for comments
-- ----------------------------
DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
  `message` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `time` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP(0),
  `likes` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of comments
-- ----------------------------
INSERT INTO `comments` VALUES (1, 1, 1, 'test12333', '2019-03-15 05:28:07', 0);
INSERT INTO `comments` VALUES (2, 1, 1, '31212', '2019-03-15 05:28:12', 0);
INSERT INTO `comments` VALUES (3, 1, 1, '123', '2019-03-15 05:28:42', 0);
INSERT INTO `comments` VALUES (4, 1, 3, 'sssss', '2019-03-15 06:19:47', 0);
INSERT INTO `comments` VALUES (5, 1, 6, 'sss', '2019-03-15 06:59:15', 1);
INSERT INTO `comments` VALUES (7, 2, 8, '111 ', '2019-03-15 07:27:42', 0);
INSERT INTO `comments` VALUES (8, 1, 10, '666', '2019-03-18 03:35:21', 0);
INSERT INTO `comments` VALUES (9, 1, 28, '122234567', '2019-03-20 06:46:02', 0);
INSERT INTO `comments` VALUES (10, 4, 31, '1111', '2019-03-21 09:41:59', 0);
INSERT INTO `comments` VALUES (11, 1, 43, '2222', '2019-03-22 02:28:24', 0);

-- ----------------------------
-- Table structure for friendships
-- ----------------------------
DROP TABLE IF EXISTS `friendships`;
CREATE TABLE `friendships`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user1` int(11) NOT NULL,
  `user2` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `time` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of friendships
-- ----------------------------
INSERT INTO `friendships` VALUES (1, 1, 3, 1, '2019-03-15 06:43:23');
INSERT INTO `friendships` VALUES (2, 1, 2, 1, '2019-03-15 06:43:53');

-- ----------------------------
-- Table structure for groups
-- ----------------------------
DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cover` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `privacy` int(11) NOT NULL,
  `posts` int(11) NOT NULL,
  `time` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of groups
-- ----------------------------
INSERT INTO `groups` VALUES (1, '12', '1111111111111', '111', '1112636548_1030874464_1443562408.png', 0, 0, '2019-03-15 07:13:55');
INSERT INTO `groups` VALUES (2, '123', '1222', '112', '599816603_1051169603_453922967.jpg', 0, 0, '2019-03-20 06:47:28');

-- ----------------------------
-- Table structure for groups_users
-- ----------------------------
DROP TABLE IF EXISTS `groups_users`;
CREATE TABLE `groups_users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `permissions` int(11) NOT NULL,
  `time` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of groups_users
-- ----------------------------
INSERT INTO `groups_users` VALUES (1, 1, 2, 1, 2, '2019-03-15 07:13:55');
INSERT INTO `groups_users` VALUES (2, 2, 1, 1, 2, '2019-03-20 06:47:28');
INSERT INTO `groups_users` VALUES (3, 2, 2, 1, 0, '2019-03-20 06:48:59');

-- ----------------------------
-- Table structure for likes
-- ----------------------------
DROP TABLE IF EXISTS `likes`;
CREATE TABLE `likes`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post` int(11) NOT NULL,
  `by` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `time` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `id`(`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of likes
-- ----------------------------
INSERT INTO `likes` VALUES (1, 7, 1, 0, '2019-03-15 06:46:02');
INSERT INTO `likes` VALUES (2, 5, 1, 1, '2019-03-15 06:59:20');
INSERT INTO `likes` VALUES (4, 7, 2, 0, '2019-03-15 07:00:02');
INSERT INTO `likes` VALUES (7, 30, 2, 0, '2019-03-20 07:46:54');
INSERT INTO `likes` VALUES (8, 28, 2, 0, '2019-03-20 07:46:56');
INSERT INTO `likes` VALUES (9, 31, 4, 0, '2019-03-21 08:33:59');

-- ----------------------------
-- Table structure for messages
-- ----------------------------
DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages`  (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `uid` int(32) NOT NULL,
  `message` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tag` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(16) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `value` varchar(1024) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `group` int(11) NOT NULL,
  `page` int(11) NOT NULL,
  `time` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP(0),
  `public` int(11) NOT NULL,
  `likes` int(11) NOT NULL,
  `longitude` double(255, 20) NULL DEFAULT NULL,
  `latitude` double(255, 20) NULL DEFAULT NULL,
  `isPushed` tinyint(4) NULL DEFAULT NULL COMMENT '如果是推送的消息，是否已经推送过了，1为已经推送过',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `id`(`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 54 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of messages
-- ----------------------------
INSERT INTO `messages` VALUES (1, 1, 'test123', '', '', '', 0, 0, '2019-03-15 05:28:01', 1, 0, NULL, NULL, NULL);
INSERT INTO `messages` VALUES (2, 1, '1333', '', '', '', 0, 0, '2019-03-15 05:28:47', 1, 0, NULL, NULL, NULL);
INSERT INTO `messages` VALUES (3, 1, '', '', 'food', 'sss', 0, 0, '2019-03-15 06:19:33', 1, 0, NULL, NULL, NULL);
INSERT INTO `messages` VALUES (4, 1, '', '', 'game', 'wwww', 0, 0, '2019-03-15 06:20:06', 0, 0, NULL, NULL, NULL);
INSERT INTO `messages` VALUES (5, 1, '', '', 'visited', 'ssf', 0, 0, '2019-03-15 06:20:35', 1, 0, NULL, NULL, NULL);
INSERT INTO `messages` VALUES (6, 1, '', '', 'map', 'test', 0, 0, '2019-03-15 06:20:42', 1, 0, NULL, NULL, NULL);
INSERT INTO `messages` VALUES (7, 1, '', '', 'picture', '891921167_1026788788_1447131844.png', 0, 0, '2019-03-15 06:21:00', 1, 2, NULL, NULL, NULL);
INSERT INTO `messages` VALUES (8, 2, '111', '', '', '', 0, 0, '2019-03-15 07:27:23', 1, 0, NULL, NULL, NULL);
INSERT INTO `messages` VALUES (9, 2, '122222', '', '', '', 0, 0, '2019-03-15 07:27:46', 1, 0, NULL, NULL, NULL);
INSERT INTO `messages` VALUES (10, 1, '5555', '', '', '', 0, 0, '2019-03-18 03:35:10', 1, 0, NULL, NULL, NULL);
INSERT INTO `messages` VALUES (11, 1, '555', '', '', '', 0, 1, '2019-03-18 05:47:09', 1, 0, NULL, NULL, NULL);
INSERT INTO `messages` VALUES (12, 1, '556666', '', '', '', 0, 1, '2019-03-18 05:47:16', 1, 0, NULL, NULL, NULL);
INSERT INTO `messages` VALUES (13, 1, '111', '', 'food', '111', 0, 0, '2019-03-19 07:25:57', 1, 0, NULL, NULL, NULL);
INSERT INTO `messages` VALUES (14, 1, '2222222222222', '', 'visited', '11111', 0, 0, '2019-03-19 07:27:21', 1, 0, NULL, NULL, NULL);
INSERT INTO `messages` VALUES (15, 1, '111', '', 'map', '1111', 0, 0, '2019-03-19 07:31:47', 1, 0, NULL, NULL, NULL);
INSERT INTO `messages` VALUES (16, 1, '55', '', '', '', 0, 0, '2019-03-19 08:07:37', 0, 0, NULL, NULL, NULL);
INSERT INTO `messages` VALUES (17, 1, '111', '', '', '', 0, 0, '2019-03-19 08:10:26', 2, 0, NULL, NULL, NULL);
INSERT INTO `messages` VALUES (18, 1, '111', '', '', '', 0, 0, '2019-03-19 08:10:48', 2, 0, NULL, NULL, NULL);
INSERT INTO `messages` VALUES (19, 1, '12366', '', '', '', 0, 0, '2019-03-19 08:28:07', 0, 0, NULL, NULL, NULL);
INSERT INTO `messages` VALUES (20, 1, '123', '', '', '', 0, 0, '2019-03-19 09:01:37', 0, 0, NULL, NULL, NULL);
INSERT INTO `messages` VALUES (21, 1, '2222', '', '', '', 0, 0, '2019-03-19 09:09:01', 1, 0, 30.00000000000000000000, 120.00000000000000000000, NULL);
INSERT INTO `messages` VALUES (22, 1, '11111', '', '', '', 0, 0, '2019-03-19 09:09:38', 1, 0, 30.00000000000000000000, 120.00000000000000000000, NULL);
INSERT INTO `messages` VALUES (23, 1, '111', '', 'map', '', 0, 0, '2019-03-22 01:54:17', 1, 0, 30.28913000000000000000, 120.07328000000000000000, NULL);
INSERT INTO `messages` VALUES (24, 1, '12', '', 'map', '', 0, 0, '2019-03-22 01:54:20', 0, 0, 30.28913000000000000000, 120.07328000000000000000, NULL);
INSERT INTO `messages` VALUES (25, 1, '123', '', 'map', '', 0, 0, '2019-03-22 01:54:21', 3, 0, 30.28913000000000000000, 120.07328000000000000000, NULL);
INSERT INTO `messages` VALUES (26, 1, '12344', '', 'map', '', 0, 0, '2019-03-22 01:54:23', 3, 0, 30.28913000000000000000, 120.07328000000000000000, NULL);
INSERT INTO `messages` VALUES (27, 1, '1111', '', 'map', '', 0, 0, '2019-03-22 01:54:25', 3, 0, 30.28913000000000000000, 120.07328000000000000000, NULL);
INSERT INTO `messages` VALUES (28, 1, '1111', '', 'map', '', 0, 0, '2019-03-22 01:54:27', 1, 1, 30.28913000000000000000, 120.07328000000000000000, NULL);
INSERT INTO `messages` VALUES (29, 1, '111111111111', '', 'map', '', 0, 0, '2019-03-22 01:54:29', 0, 0, 30.28913000000000000000, 120.07328000000000000000, NULL);
INSERT INTO `messages` VALUES (30, 1, '123455667777777777777', '', 'map', '', 0, 0, '2019-03-22 01:54:31', 3, 1, 120.07328000000000000000, 30.28913000000000000000, NULL);
INSERT INTO `messages` VALUES (31, 1, '11111', '', 'map', '', 0, 0, '2019-03-22 01:54:34', 3, 1, 120.07328000000000000000, 30.28913000000000000000, NULL);
INSERT INTO `messages` VALUES (32, 4, '123', '', 'map', '', 0, 0, '2019-03-22 01:54:35', 1, 0, 30.28913000000000000000, 120.07328000000000000000, NULL);
INSERT INTO `messages` VALUES (33, 4, '1111', '', 'map', '', 0, 0, '2019-03-22 01:54:37', 1, 0, 30.28913000000000000000, 120.07328000000000000000, NULL);
INSERT INTO `messages` VALUES (34, 4, '888', '', 'map', '', 0, 0, '2019-03-22 01:54:39', 0, 0, 30.28913000000000000000, 120.07328000000000000000, NULL);
INSERT INTO `messages` VALUES (35, 4, '333', '', 'map', '', 0, 0, '2019-03-22 01:54:41', 3, 0, 120.07328000000000000000, 30.28913000000000000000, NULL);
INSERT INTO `messages` VALUES (36, 4, '777', '', 'map', '', 0, 0, '2019-03-22 01:54:43', 1, 0, 120.07328000000000000000, 30.28913000000000000000, NULL);
INSERT INTO `messages` VALUES (37, 1, '反反复复', '', 'shared', 'ssss', 0, 0, '2019-03-22 02:21:04', 1, 0, 120.07328000000000000000, 30.28913000000000000000, NULL);
INSERT INTO `messages` VALUES (38, 1, '', '', 'map', '11111', 0, 0, '2019-03-22 02:15:07', 1, 0, 120.07328000000000000000, 30.28913000000000000000, NULL);
INSERT INTO `messages` VALUES (39, 1, '11111', '', 'map', '22', 0, 0, '2019-03-22 02:15:17', 1, 0, 120.07328000000000000000, 30.28913000000000000000, NULL);
INSERT INTO `messages` VALUES (40, 1, '', '', 'video', '122333', 0, 0, '2019-03-22 02:22:22', 1, 0, 120.07328000000000000000, 30.28913000000000000000, NULL);
INSERT INTO `messages` VALUES (41, 1, '', '', 'picture', '1431968066_613731608_889059565.png', 0, 0, '2019-03-22 02:23:03', 1, 0, 120.07328000000000000000, 30.28913000000000000000, NULL);
INSERT INTO `messages` VALUES (42, 1, '', '', 'shared', '39', 0, 0, '2019-03-22 02:23:47', 1, 0, NULL, NULL, NULL);
INSERT INTO `messages` VALUES (43, 1, '', '', 'shared', '11111', 0, 0, '2019-03-22 02:38:57', 1, 0, 120.07328000000000000000, 30.28913000000000000000, NULL);
INSERT INTO `messages` VALUES (44, 1, '444', '', '', '', 0, 0, '2019-03-22 08:11:28', 1, 0, 120.07328000000000000000, 30.28913000000000000000, NULL);
INSERT INTO `messages` VALUES (45, 1, '111', '', 'video', '1222', 0, 0, '2019-03-22 08:12:45', 1, 0, 120.07328000000000000000, 30.28913000000000000000, NULL);
INSERT INTO `messages` VALUES (46, 1, '11', '', 'map', '11222', 0, 0, '2019-03-22 08:16:20', 1, 0, 120.07328000000000000000, 30.28913000000000000000, NULL);
INSERT INTO `messages` VALUES (47, 1, '1111', '', 'map', '1111', 0, 0, '2019-03-22 08:16:33', 1, 0, 120.07328000000000000000, 30.28913000000000000000, NULL);
INSERT INTO `messages` VALUES (48, 1, '1111', '', '', '', 0, 0, '2019-03-22 08:25:35', 1, 0, 120.07328000000000000000, 30.28913000000000000000, NULL);
INSERT INTO `messages` VALUES (49, 1, '11111', '', 'map', '11', 0, 0, '2019-03-22 08:25:41', 1, 0, 120.07328000000000000000, 30.28913000000000000000, NULL);
INSERT INTO `messages` VALUES (50, 1, '', '', 'map', '11', 0, 0, '2019-03-22 08:25:48', 1, 0, 120.07328000000000000000, 30.28913000000000000000, NULL);
INSERT INTO `messages` VALUES (51, 1, '111111111111', '', 'map', '1111', 0, 0, '2019-03-22 08:25:57', 1, 0, 120.07328000000000000000, 30.28913000000000000000, NULL);
INSERT INTO `messages` VALUES (52, 1, '1111', '', 'map', '111', 0, 0, '2019-03-22 08:27:40', 1, 0, 120.07328000000000000000, 30.28913000000000000000, NULL);
INSERT INTO `messages` VALUES (53, 1, '1111', '', 'map', '浙江省杭州市西湖区蒋村街道弘德路240号中节能·西溪首座', 0, 0, '2019-03-22 09:37:52', 1, 0, 100.07328000000000000000, 30.28913000000000000000, NULL);

-- ----------------------------
-- Table structure for notifications
-- ----------------------------
DROP TABLE IF EXISTS `notifications`;
CREATE TABLE `notifications`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from` int(11) NOT NULL,
  `to` int(11) NOT NULL,
  `parent` int(11) NOT NULL,
  `child` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `read` int(11) NOT NULL,
  `time` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `id`(`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 37 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of notifications
-- ----------------------------
INSERT INTO `notifications` VALUES (1, 1, 1, 1, 1, 1, 1, '2019-03-15 05:28:07');
INSERT INTO `notifications` VALUES (2, 1, 1, 1, 2, 1, 1, '2019-03-15 05:28:12');
INSERT INTO `notifications` VALUES (3, 1, 1, 1, 3, 1, 1, '2019-03-15 05:28:42');
INSERT INTO `notifications` VALUES (4, 1, 1, 3, 4, 1, 1, '2019-03-15 06:19:47');
INSERT INTO `notifications` VALUES (5, 1, 1, 7, 0, 2, 1, '2019-03-15 06:46:02');
INSERT INTO `notifications` VALUES (6, 1, 1, 6, 5, 1, 1, '2019-03-15 06:59:15');
INSERT INTO `notifications` VALUES (8, 1, 1, 6, 5, 2, 1, '2019-03-15 06:59:20');
INSERT INTO `notifications` VALUES (10, 2, 1, 7, 0, 2, 1, '2019-03-15 07:00:02');
INSERT INTO `notifications` VALUES (12, 2, 0, 1, 0, 7, 0, '2019-03-15 07:13:55');
INSERT INTO `notifications` VALUES (13, 2, 1, 1, 0, 6, 1, '2019-03-15 07:14:29');
INSERT INTO `notifications` VALUES (14, 2, 2, 8, 7, 1, 1, '2019-03-15 07:27:42');
INSERT INTO `notifications` VALUES (15, 1, 1, 10, 8, 1, 1, '2019-03-18 03:35:21');
INSERT INTO `notifications` VALUES (17, 1, 0, 1, 0, 10, 0, '2019-03-18 05:46:49');
INSERT INTO `notifications` VALUES (18, 1, 1, 28, 9, 1, 1, '2019-03-20 06:46:02');
INSERT INTO `notifications` VALUES (19, 1, 0, 2, 0, 7, 0, '2019-03-20 06:47:28');
INSERT INTO `notifications` VALUES (20, 1, 2, 2, 0, 6, 1, '2019-03-20 06:48:25');
INSERT INTO `notifications` VALUES (21, 1, 3, 2, 0, 6, 0, '2019-03-20 06:48:28');
INSERT INTO `notifications` VALUES (22, 2, 0, 2, 0, 7, 0, '2019-03-20 06:48:59');
INSERT INTO `notifications` VALUES (23, 2, 1, 30, 0, 2, 1, '2019-03-20 07:46:54');
INSERT INTO `notifications` VALUES (24, 2, 1, 28, 0, 2, 1, '2019-03-20 07:46:56');
INSERT INTO `notifications` VALUES (26, 1, 1, 31, 0, 100, 1, '2019-03-21 20:37:07');
INSERT INTO `notifications` VALUES (27, 1, 2, 31, 0, 100, 1, '2019-03-21 02:25:03');
INSERT INTO `notifications` VALUES (28, 1, 4, 30, 0, 100, 1, '2019-03-21 08:03:31');
INSERT INTO `notifications` VALUES (29, 1, 4, 31, 0, 100, 1, '2019-03-21 08:03:32');
INSERT INTO `notifications` VALUES (30, 4, 1, 31, 0, 2, 1, '2019-03-21 08:33:59');
INSERT INTO `notifications` VALUES (31, 1, 4, 30, 0, 100, 1, '2019-03-21 09:19:08');
INSERT INTO `notifications` VALUES (32, 1, 4, 31, 0, 100, 1, '2019-03-21 09:19:08');
INSERT INTO `notifications` VALUES (33, 1, 4, 30, 0, 100, 1, '2019-03-21 09:33:56');
INSERT INTO `notifications` VALUES (34, 1, 4, 31, 0, 100, 1, '2019-03-21 09:33:56');
INSERT INTO `notifications` VALUES (35, 4, 1, 31, 10, 1, 1, '2019-03-21 09:42:02');
INSERT INTO `notifications` VALUES (36, 1, 1, 43, 11, 1, 1, '2019-03-22 02:28:24');

-- ----------------------------
-- Table structure for pages
-- ----------------------------
DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `by` int(11) NOT NULL,
  `name` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `category` int(3) NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cover` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `verified` tinyint(1) NOT NULL,
  `time` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of pages
-- ----------------------------
INSERT INTO `pages` VALUES (1, 1, 't113', '1323', 5, '123', '', '', '', '1787518004_1402850939_1972723855.png', '1977349881_1147953670_1082431054.png', 0, '2019-03-18 05:46:49');

-- ----------------------------
-- Table structure for plugins
-- ----------------------------
DROP TABLE IF EXISTS `plugins`;
CREATE TABLE `plugins`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for reports
-- ----------------------------
DROP TABLE IF EXISTS `reports`;
CREATE TABLE `reports`  (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `post` varchar(11) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `parent` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `by` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  `time` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `id`(`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of reports
-- ----------------------------
INSERT INTO `reports` VALUES (1, '7', 0, 1, 2, 0, '2019-03-15 07:22:18');

-- ----------------------------
-- Table structure for settings
-- ----------------------------
DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings`  (
  `title` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `theme` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `perpage` int(11) NOT NULL,
  `censor` varchar(2048) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `captcha` int(11) NOT NULL,
  `intervalm` int(11) NOT NULL,
  `intervaln` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `message` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `format` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `mail` int(11) NOT NULL,
  `sizemsg` int(11) NOT NULL,
  `formatmsg` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `cperpage` int(11) NOT NULL,
  `ilimit` int(11) NOT NULL,
  `climit` int(11) NOT NULL,
  `uperpage` int(11) NOT NULL,
  `sperpage` int(11) NOT NULL,
  `nperpage` tinyint(4) NOT NULL,
  `nperwidget` tinyint(4) NOT NULL,
  `lperpost` int(11) NOT NULL,
  `aperip` int(11) NOT NULL,
  `conline` int(4) NOT NULL,
  `ronline` tinyint(4) NOT NULL,
  `mperpage` tinyint(4) NOT NULL,
  `verified` int(11) NOT NULL,
  `chatr` int(11) NOT NULL,
  `email_activation` tinyint(4) NOT NULL,
  `email_comment` tinyint(4) NOT NULL,
  `email_like` tinyint(4) NOT NULL,
  `email_new_friend` tinyint(4) NOT NULL,
  `email_group_invite` tinyint(4) NOT NULL,
  `email_page_invite` tinyint(4) NOT NULL,
  `smiles` tinyint(4) NOT NULL,
  `fbapp` int(11) NOT NULL,
  `fbappid` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fbappsecret` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `smtp_email` int(11) NOT NULL,
  `smtp_host` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `smtp_port` int(11) NOT NULL,
  `smtp_auth` int(11) NOT NULL,
  `smtp_username` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `smtp_password` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ad1` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ad2` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ad3` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ad4` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ad5` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ad6` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ad7` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tracking_code` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE = MyISAM CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of settings
-- ----------------------------
INSERT INTO `settings` VALUES ('phpDolphin', 'dolphin', 10, 'word1,word2', 1, 10000, 10000, 0, 500, 1048576, 'png,jpg,gif,jpeg', 1, 1048576, 'png,jpg,gif,jpeg', 3, 9, 500, 10, 10, 100, 10, 5, 3, 600, 10, 10, 0, 3, 0, 1, 1, 1, 1, 1, 1, 0, '', '', 0, '', 0, 0, '', '', '', '', '', '', '', '', '', '');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `idu` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `first_name` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `work` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `school` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `bio` varchar(160) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `facebook` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `twitter` varchar(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `gplus` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `image` varchar(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `private` int(11) NOT NULL,
  `suspended` int(11) NOT NULL,
  `salted` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `cover` varchar(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `verified` int(11) NOT NULL,
  `privacy` int(11) NOT NULL DEFAULT 1,
  `gender` tinyint(4) NOT NULL,
  `interests` tinyint(4) NOT NULL,
  `online` int(11) NOT NULL,
  `offline` tinyint(4) NOT NULL,
  `ip` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `user_group` int(11) NOT NULL,
  `notificationl` tinyint(4) NOT NULL,
  `notificationc` tinyint(4) NOT NULL,
  `notifications` tinyint(4) NOT NULL,
  `notificationd` tinyint(4) NOT NULL,
  `notificationf` tinyint(4) NOT NULL,
  `notificationg` tinyint(4) NOT NULL,
  `notificationx` tinyint(4) NOT NULL,
  `notificationp` tinyint(4) NOT NULL,
  `email_comment` tinyint(4) NOT NULL,
  `email_like` tinyint(4) NOT NULL,
  `email_new_friend` tinyint(4) NOT NULL,
  `email_group_invite` tinyint(4) NOT NULL,
  `email_page_invite` tinyint(4) NOT NULL,
  `sound_new_notification` tinyint(4) NOT NULL,
  `sound_new_chat` tinyint(4) NOT NULL,
  `born` date NOT NULL,
  `lastloginlat` double(255, 20) NULL DEFAULT NULL COMMENT '最近一次登录的纬度',
  `lastloginlong` double(255, 20) NULL DEFAULT NULL COMMENT '最近一次登录的经度',
  `push` tinyint(4) UNSIGNED ZEROFILL NULL DEFAULT 0001 COMMENT '配置信息，1为接受其他用户的广播推送',
  UNIQUE INDEX `id`(`idu`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, '123', 'e10adc3949ba59abbe56e057f20f883e', '1412143367@qq.com', '', '', '', '', '', '', '', '', '', '2019-03-15', '', '', '', 'default.png', 0, 0, '', 'default.png', 0, 1, 0, 0, 1553247717, 0, '192.168.99.123', 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '0000-00-00', 30.28913000000000000000, 120.07328000000000000000, 0001);
INSERT INTO `users` VALUES (2, '123444', 'e10adc3949ba59abbe56e057f20f883e', '1412143368@qq.com', '', '', '', '', '', '', '', '', '', '2019-03-15', '', '', '', 'default.png', 0, 0, '', 'default.png', 0, 1, 0, 0, 1553136000, 0, '192.168.99.321', 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '0000-00-00', 30.28913000000000000000, 120.07328000000000000000, 0001);
INSERT INTO `users` VALUES (3, '123444555', 'e10adc3949ba59abbe56e057f20f883e', '1412143369@qq.com', '', '', '', '', '', '', '', '', '', '2019-03-15', '', '', '', 'default.png', 0, 0, '', 'default.png', 0, 1, 0, 0, 1552631950, 0, '192.168.99.456', 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '0000-00-00', 30.28913000000000000000, 120.07328000000000000000, 0001);
INSERT INTO `users` VALUES (4, '122', 'e10adc3949ba59abbe56e057f20f883e', '1111111111@qq.com', '', '', '', '', '', '', '', '', '', '2019-03-21', '', '', '', 'default.png', 0, 0, '', 'default.png', 0, 1, 0, 0, 1553161944, 0, '192.168.99.1', 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '0000-00-00', 30.28913000000000000000, 120.07328000000000000000, 0001);

SET FOREIGN_KEY_CHECKS = 1;

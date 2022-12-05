/*
 Navicat MySQL Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 80012 (8.0.12)
 Source Host           : localhost:3306
 Source Schema         : product

 Target Server Type    : MySQL
 Target Server Version : 80012 (8.0.12)
 File Encoding         : 65001

 Date: 05/12/2022 20:21:25
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for date
-- ----------------------------
DROP TABLE IF EXISTS `date`;
CREATE TABLE `date`  (
  `date` date NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `price` decimal(10, 2) NULL DEFAULT NULL
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of date
-- ----------------------------
INSERT INTO `date` VALUES ('2021-08-11', 'rrape core', 79.85);
INSERT INTO `date` VALUES ('2022-05-28', 'upple pi', 279.00);
INSERT INTO `date` VALUES ('2021-12-10', 'Raspberry', 41.63);
INSERT INTO `date` VALUES ('2021-11-20', 'zherry elite', 204.54);
INSERT INTO `date` VALUES ('2021-09-28', 'Mango', 169.83);
INSERT INTO `date` VALUES ('2022-06-27', 'Mango', 429.52);
INSERT INTO `date` VALUES ('2020-01-30', 'eango', 130.60);
INSERT INTO `date` VALUES ('2020-08-29', 'Ramqutan core', 283.47);
INSERT INTO `date` VALUES ('2022-07-05', 'iPluots', 125.50);
INSERT INTO `date` VALUES ('2020-07-12', 'Swrawberry', 35.19);
INSERT INTO `date` VALUES ('2020-05-17', 'Raspberry air', 104.07);
INSERT INTO `date` VALUES ('2021-01-13', 'Chwrry', 276.29);
INSERT INTO `date` VALUES ('2021-05-27', 'Grfpe', 248.55);
INSERT INTO `date` VALUES ('2021-06-14', 'Rambutan premium', 429.84);
INSERT INTO `date` VALUES ('2022-11-23', 'xGrape', 24.39);
INSERT INTO `date` VALUES ('2020-07-25', 'ytrawberry', 340.51);
INSERT INTO `date` VALUES ('2021-11-08', 'Strawperry', 130.79);
INSERT INTO `date` VALUES ('2021-08-17', 'iStrawberry', 372.35);
INSERT INTO `date` VALUES ('2021-10-25', 'Rambutan mini', 199.79);
INSERT INTO `date` VALUES ('2022-11-26', 'Kiwi mini', 208.46);
INSERT INTO `date` VALUES ('2021-01-30', 'Apple', 485.35);
INSERT INTO `date` VALUES ('2022-05-26', 'ambi-Orange', 100.19);
INSERT INTO `date` VALUES ('2022-02-10', 'ambi-Rambutan', 255.98);
INSERT INTO `date` VALUES ('2022-05-15', 'Strawnerry pi', 360.60);
INSERT INTO `date` VALUES ('2022-02-26', 'omni-Appae', 342.49);
INSERT INTO `date` VALUES ('2020-06-06', 'eluots elite', 233.33);
INSERT INTO `date` VALUES ('2020-06-29', 'Apple', 490.01);
INSERT INTO `date` VALUES ('2022-11-07', 'Raspbrrry', 162.28);
INSERT INTO `date` VALUES ('2020-05-18', 'Orxnge premium', 0.45);
INSERT INTO `date` VALUES ('2021-10-29', 'iAppwe', 50.07);
INSERT INTO `date` VALUES ('2021-02-09', 'Grype', 383.19);
INSERT INTO `date` VALUES ('2022-08-22', 'Styawberry core', 18.09);
INSERT INTO `date` VALUES ('2021-08-03', 'ambi-Cherry', 359.00);
INSERT INTO `date` VALUES ('2020-02-08', 'ultra-lrange', 235.19);
INSERT INTO `date` VALUES ('2022-05-03', 'Ramiutan', 10.11);
INSERT INTO `date` VALUES ('2020-03-31', 'Kiwi', 212.76);
INSERT INTO `date` VALUES ('2020-02-27', 'Rambutan pi', 174.50);
INSERT INTO `date` VALUES ('2020-10-15', 'Cherny plus', 327.42);
INSERT INTO `date` VALUES ('2020-12-10', 'Ramautan', 24.90);
INSERT INTO `date` VALUES ('2022-05-13', 'Strawbyrry plus', 499.47);
INSERT INTO `date` VALUES ('2020-06-01', 'Orange mini', 234.26);
INSERT INTO `date` VALUES ('2022-07-28', 'Cheqry air', 191.48);
INSERT INTO `date` VALUES ('2022-08-23', 'Strawberry', 151.53);
INSERT INTO `date` VALUES ('2022-06-07', 'Cherry mini', 168.59);
INSERT INTO `date` VALUES ('2020-06-02', 'Rambutjn pi', 284.32);
INSERT INTO `date` VALUES ('2022-02-27', 'Raspbetry', 165.22);
INSERT INTO `date` VALUES ('2022-04-16', 'taspberry premium', 31.82);
INSERT INTO `date` VALUES ('2022-07-12', 'opple', 251.13);
INSERT INTO `date` VALUES ('2020-07-04', 'Strawberry plus', 492.76);
INSERT INTO `date` VALUES ('2020-10-07', 'brange', 57.74);

-- ----------------------------
-- Table structure for orders
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders`  (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NULL DEFAULT NULL,
  `customer_id` int(11) NULL DEFAULT NULL,
  `quantity` int(11) NULL DEFAULT NULL,
  `size` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `status` char(1) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`order_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 17 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of orders
-- ----------------------------
INSERT INTO `orders` VALUES (15, 13, 13, 1, 'M', NULL);
INSERT INTO `orders` VALUES (14, 12, 13, 1, 'FS', NULL);
INSERT INTO `orders` VALUES (13, 13, 13, 1, 'FS', NULL);
INSERT INTO `orders` VALUES (12, 13, 12, 1, 'XL', NULL);
INSERT INTO `orders` VALUES (11, 13, 12, 1, 'FS', NULL);
INSERT INTO `orders` VALUES (16, 7, 13, 3, 'FS', NULL);

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products`  (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `product_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `sex` char(1) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `price` float NULL DEFAULT NULL,
  `category` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `type` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `style` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `date` date NULL DEFAULT NULL,
  `size` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `color` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `intro` tinytext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES (1, '3.jpg', 'ambi-Strawberry', '1', 258.03, 'accessory', 'watch', 'business', '2022-09-14', 'Standard/', 'yellow', 'This is some intro');
INSERT INTO `products` VALUES (30, '4.jpg', 'omni-Cherry', '1', 229.09, 'shirt', 'top', 'leisure', '2022-04-01', 'FS/S/M/L/XL', 'red', 'This is some intro');
INSERT INTO `products` VALUES (3, '5.jpg', 'Kiwi', '1', 252.4, 'accessory', 'belt', 'decoration', '2022-10-12', 'Standard/', 'black', 'This is some intro');
INSERT INTO `products` VALUES (4, '7.jpg', 'omni-vrape', '1', 82.75, 'tshirt', 'top', 'sport', '2022-09-06', 'FS/S/M/L/XL', 'white', 'This is some intro');
INSERT INTO `products` VALUES (5, '9.jpg', 'Raipberry', '1', 149.46, 'shirt', 'top', 'fashion', '2022-11-16', 'FS/S/M/L/XL', 'pink', 'This is some intro');
INSERT INTO `products` VALUES (6, '10.jpg', 'iRambutan', '1', 471.25, 'shirt', 'top', 'fashion', '2022-09-13', 'FS/S/M/L/XL', 'white', 'This is some intro');
INSERT INTO `products` VALUES (21, '11.jpg', 'Pluots', '1', 188.22, 'shirt', 'top', 'business', '2022-09-30', 'FS/S/M/L/XL', 'grey', 'This is some intro');
INSERT INTO `products` VALUES (8, '12.jpg', 'Caerry', '1', 291.78, 'bag', 'bag', 'sport', '2022-09-24', 'Standard/', 'black', 'This is some intro');
INSERT INTO `products` VALUES (9, '13.jpg', 'Kiqi', '1', 46.88, 'bag', 'bag', 'sport', '2022-11-01', 'Standard/', 'black', 'This is some intro');
INSERT INTO `products` VALUES (7, 'pic2.jpg', 'Orange core', '1', 9.25, 'tshirt', 'top', 'leisure', '2022-11-20', 'FS/S/M/L/XL', 'blue', 'This is some intro');
INSERT INTO `products` VALUES (12, 'pic4.jpg', 'Rambutan', '1', 306.19, 'tshirt', 'top', 'leisure', '2022-03-13', 'FS/S/M/L/XL', 'ocean', 'This is some intro');
INSERT INTO `products` VALUES (13, 'pic5.jpg', 'ambi-Grjpe', '1', 225.37, 'shirt', 'top', 'leisure', '2022-11-22', 'FS/S/M/L/XL', 'purple', 'This is some intro');
INSERT INTO `products` VALUES (2, '8.jpg', 'Myngo core', '0', 301.05, 'shirt', 'top', 'leisure', '2022-07-05', 'FS/S/M/L/XL', 'black', 'This is some intro');
INSERT INTO `products` VALUES (15, 'pic1.jpg', 'Stravberry', '0', 384.88, 'tshirt', 'top', 'leisure', '2022-09-18', 'FS/S/M/L/XL', 'white', 'This is some intro');
INSERT INTO `products` VALUES (16, 'pic3.jpg', 'Rasbberry core', '0', 5.29, 'dress', 'top', 'fashion', '2022-06-17', 'FS/S/M/L/XL', 'green', 'This is some intro');
INSERT INTO `products` VALUES (17, 'pic6.jpg', 'omni-Apple', '0', 57.8, 'loungewear', 'top', 'household', '2022-05-22', 'FS/S/M/L/XL', 'red', 'This is some intro');
INSERT INTO `products` VALUES (18, 's4.jpg', 'Kswi', '0', 293.87, 'dress', 'top', 'fashion', '2022-06-18', 'FS/S/M/L/XL', 'red', 'This is some intro');
INSERT INTO `products` VALUES (19, '16.jpg', 'Mango pro', '0', 263.17, 'bag', 'bag', 'fashion', '2022-05-28', 'Standard/', 'brown', 'This is some intro');
INSERT INTO `products` VALUES (22, '17.png', 'Apple core', '0', 171.17, 'jacket', 'top', 'fashion', '2021-08-11', 'FS/S/M/L/XL', 'grey', 'This is some intro');
INSERT INTO `products` VALUES (23, '18.png', 'Pluots core', '0', 226.48, 'shoes', 'shoes', 'fashion', '2022-05-28', 'S/M/L', 'black', 'This is some intro');
INSERT INTO `products` VALUES (24, '19.png', 'Cherny core', '1', 463.74, 'jacket', 'top', 'leisure', '2021-12-10', 'FS/S/M/L/XL', 'black', 'This is some intro');
INSERT INTO `products` VALUES (25, '20.png', 'Raspberry premium', '0', 317.59, 'accessory', 'scarf', 'decoration', '2021-11-20', 'Standard/', 'pink', 'This is some intro');
INSERT INTO `products` VALUES (26, '21.png', 'ypple air', '1', 483.64, 'suit', 'top', 'business', '2021-09-28', 'S/M/L', 'black', 'This is some intro');
INSERT INTO `products` VALUES (27, '22.jpg', 'Grape', '1', 482.28, 'hoodie', 'top', 'sport', '2022-06-27', 'FS/S/M/L/XL', 'black', 'This is some intro');
INSERT INTO `products` VALUES (28, '23.png', 'Cheroy', '0', 189.35, 'accessory', 'watch', 'decoration', '2020-01-30', 'Standard/', 'black', 'This is some intro');
INSERT INTO `products` VALUES (29, '24.jpg', 'Orxnge premium', '1', 233.33, 'jeans', 'bottom', 'leisure', '2022-02-10', 'FS/S/M/L/XL', 'blue', 'This is some intro');
INSERT INTO `products` VALUES (14, '25.jpg', 'iAppwe', '1', 490.01, 'jeans', 'bottom', 'leisure', '2022-05-15', 'FS/S/M/L/XL', 'black', 'This is some intro');
INSERT INTO `products` VALUES (31, '26.jpg', 'Grype', '1', 162.28, 'swimwear', 'bottom', 'fashion', '2022-02-26', 'FS/S/M/L/XL', 'cyan', 'This is some intro');
INSERT INTO `products` VALUES (32, '27.jpg', 'Styawberry core', '1', 0.45, 'swimwear', 'bottom', 'sport', '2020-06-06', 'FS/S/M/L/XL', 'black', 'This is some intro');
INSERT INTO `products` VALUES (33, '28.jpg', 'ambi-Cherry', '1', 50.07, 'swimwear', 'bottom', 'sport', '2020-06-29', 'FS/S/M/L/XL', 'black', 'This is some intro');
INSERT INTO `products` VALUES (34, '29.jpg', 'omni-Appae', '1', 383.19, 'trousers', 'bottom', 'sport', '2022-11-07', 'FS/S/M/L/XL', 'black', 'This is some intro');
INSERT INTO `products` VALUES (35, '30.jpg', 'Orxnge premium', '0', 0.45, 'shoes', 'shoes', 'fashion', '2020-05-18', 'FS/S/M/L/XL', 'white', 'This is some intro');
INSERT INTO `products` VALUES (36, '31.jpg', 'iAppwe', '0', 50.07, 'shoes', 'shoes', 'fashion', '2021-10-29', 'FS/S/M/L/XL', 'pink', 'This is some intro');
INSERT INTO `products` VALUES (37, '32.jpg', 'Grype', '0', 383.19, 'shoes', 'shoes', 'fashion', '2021-02-09', 'FS/S/M/L/XL', 'green', 'This is some intro');
INSERT INTO `products` VALUES (38, '33.jpg', 'Styawberry core', '0', 18.09, 'accessory', 'jewellery', 'decoration', '2022-08-22', 'Standard/', 'yellow', 'This is some intro');
INSERT INTO `products` VALUES (39, '34.jpg', 'ambi-Cherry', '0', 359, 'bag', 'bag', 'fashion', '2021-08-03', 'Standard/', 'white', 'This is some intro');
INSERT INTO `products` VALUES (40, '35.jpg', 'ultra-lrange', '0', 235.19, 'hat', 'hat', 'fashion', '2020-02-08', 'Standard/', 'red', 'This is some intro');
INSERT INTO `products` VALUES (41, '36.jpg', 'Ramiutan', '0', 10.11, 'hat', 'hat', 'leisure', '2022-05-03', 'Standard/', 'orange', 'This is some intro');
INSERT INTO `products` VALUES (42, '37.jpg', 'Kiwi', '0', 212.76, 'loungewear', 'top', 'household', '2020-03-31', 'FS/S/M/L/XL', 'olive', 'This is some intro');

SET FOREIGN_KEY_CHECKS = 1;

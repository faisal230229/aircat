/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 80030 (8.0.30)
 Source Host           : localhost:3306
 Source Schema         : aircat

 Target Server Type    : MySQL
 Target Server Version : 80030 (8.0.30)
 File Encoding         : 65001

 Date: 19/02/2024 03:44:08
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for media
-- ----------------------------
DROP TABLE IF EXISTS `media`;
CREATE TABLE `media`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  `uuid` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `collection_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `disk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `size` bigint UNSIGNED NOT NULL,
  `manipulations` json NOT NULL,
  `custom_properties` json NOT NULL,
  `generated_conversions` json NOT NULL,
  `responsive_images` json NOT NULL,
  `order_column` int UNSIGNED NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `media_uuid_unique`(`uuid` ASC) USING BTREE,
  INDEX `media_model_type_model_id_index`(`model_type` ASC, `model_id` ASC) USING BTREE,
  INDEX `media_order_column_index`(`order_column` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of media
-- ----------------------------
INSERT INTO `media` VALUES (2, 'App\\Models\\Slider', 3, '03dad588-8cb8-4b00-a29c-1867d59e48a1', 'default', 'slider-one', '01HPKMZD9VSHSE49W2DTCTSRKG.png', 'image/png', 'public', 'public', 1521196, '[]', '{\"alt_text\": {}}', '[]', '[]', 1, '2024-02-14 11:10:35', '2024-02-14 11:10:35');
INSERT INTO `media` VALUES (3, 'App\\Models\\Slider', 4, '73529415-6230-469c-bec3-c7f14b51533a', 'default', 'slider-one', '01HPKPJ36Q24DBHSERN4R2E5XF.png', 'image/png', 'public', 'public', 1521196, '[]', '{\"alt_text\": {}}', '[]', '[]', 1, '2024-02-14 11:38:17', '2024-02-14 11:38:17');
INSERT INTO `media` VALUES (4, 'App\\Models\\Slider', 5, '217721e1-3e42-4629-82f3-7b23d7acda36', 'default', 'slider-one', '01HPKPPW8994A098XW44JN6S8D.png', 'image/png', 'public', 'public', 1521196, '[]', '{\"alt_text\": {}}', '[]', '[]', 1, '2024-02-14 11:40:52', '2024-02-14 11:40:52');
INSERT INTO `media` VALUES (5, 'App\\Models\\Slider', 6, 'edf745da-d046-4f1d-be4e-7a371f1a9736', 'default', 'slider-one', '01HPKPVPJH970QJ4SR43MNKHW4.png', 'image/png', 'public', 'public', 1521196, '[]', '{\"alt_text\": {}}', '[]', '[]', 1, '2024-02-14 11:43:30', '2024-02-14 11:43:30');
INSERT INTO `media` VALUES (6, 'App\\Models\\Slider', 7, '1faf1655-74bc-4c04-89b2-4169d418599b', 'default', 'slider-one', '01HPKPYZE23QNHMD3XXG50VZDN.png', 'image/png', 'public', 'public', 1521196, '[]', '{\"alt_text\": {}}', '[]', '[]', 1, '2024-02-14 11:45:18', '2024-02-14 11:45:18');
INSERT INTO `media` VALUES (7, 'App\\Models\\Slider', 8, '1ffb7446-ad07-43d6-ab6e-525bfff9c624', 'default', 'slider-one', '01HPKQ04D7SAK85MGEBW15EHTA.png', 'image/png', 'public', 'public', 1521196, '[]', '{\"alt_text\": {}}', '[]', '[]', 1, '2024-02-14 11:45:56', '2024-02-14 11:45:56');
INSERT INTO `media` VALUES (8, 'App\\Models\\Slider', 9, 'fee905b2-1a96-4b68-bd70-89511b56fbba', 'default', 'slider-one', '01HPKQJTNGP4EZERE05F1BBAK9.png', 'image/png', 'public', 'public', 1521196, '[]', '{\"alt_text\": \"SLIDER\"}', '[]', '[]', 1, '2024-02-14 11:56:08', '2024-02-14 11:56:08');
INSERT INTO `media` VALUES (10, 'App\\Models\\Service', 1, 'b59a81b6-3f0a-44d7-a2af-7cac18cb8954', 'default', 'air-freight-service', '01HPP2YP4GAAS4BG88K380AJWS.png', 'image/png', 'public', 'public', 386268, '[]', '{\"alt_text\": \"air-freight\"}', '[]', '[]', 1, '2024-02-15 09:53:20', '2024-02-15 09:53:20');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_reset_tokens_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (5, '2024_02_14_063840_create_permission_tables', 2);
INSERT INTO `migrations` VALUES (6, '2024_02_14_073203_create_sliders_table', 3);
INSERT INTO `migrations` VALUES (7, '2024_02_14_082144_create_media_table', 4);
INSERT INTO `migrations` VALUES (9, '2024_02_14_120222_create_services_table', 5);
INSERT INTO `migrations` VALUES (10, '2024_02_15_060416_create_settings_table', 6);

-- ----------------------------
-- Table structure for model_has_permissions
-- ----------------------------
DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE `model_has_permissions`  (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`, `model_id`, `model_type`) USING BTREE,
  INDEX `model_has_permissions_model_id_model_type_index`(`model_id` ASC, `model_type` ASC) USING BTREE,
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of model_has_permissions
-- ----------------------------

-- ----------------------------
-- Table structure for model_has_roles
-- ----------------------------
DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE `model_has_roles`  (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`role_id`, `model_id`, `model_type`) USING BTREE,
  INDEX `model_has_roles_model_id_model_type_index`(`model_id` ASC, `model_type` ASC) USING BTREE,
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of model_has_roles
-- ----------------------------
INSERT INTO `model_has_roles` VALUES (1, 'App\\Models\\User', 1);
INSERT INTO `model_has_roles` VALUES (2, 'App\\Models\\User', 2);

-- ----------------------------
-- Table structure for password_reset_tokens
-- ----------------------------
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_reset_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for permissions
-- ----------------------------
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `permissions_name_guard_name_unique`(`name` ASC, `guard_name` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of permissions
-- ----------------------------
INSERT INTO `permissions` VALUES (1, 'view_role', 'web', '2024-02-14 06:39:01', '2024-02-14 06:39:01');
INSERT INTO `permissions` VALUES (2, 'view_any_role', 'web', '2024-02-14 06:39:01', '2024-02-14 06:39:01');
INSERT INTO `permissions` VALUES (3, 'create_role', 'web', '2024-02-14 06:39:01', '2024-02-14 06:39:01');
INSERT INTO `permissions` VALUES (4, 'update_role', 'web', '2024-02-14 06:39:01', '2024-02-14 06:39:01');
INSERT INTO `permissions` VALUES (5, 'delete_role', 'web', '2024-02-14 06:39:01', '2024-02-14 06:39:01');
INSERT INTO `permissions` VALUES (6, 'delete_any_role', 'web', '2024-02-14 06:39:01', '2024-02-14 06:39:01');
INSERT INTO `permissions` VALUES (7, 'view_user', 'web', '2024-02-14 06:57:43', '2024-02-14 06:57:43');
INSERT INTO `permissions` VALUES (8, 'view_any_user', 'web', '2024-02-14 06:57:43', '2024-02-14 06:57:43');
INSERT INTO `permissions` VALUES (9, 'create_user', 'web', '2024-02-14 06:57:43', '2024-02-14 06:57:43');
INSERT INTO `permissions` VALUES (10, 'update_user', 'web', '2024-02-14 06:57:43', '2024-02-14 06:57:43');
INSERT INTO `permissions` VALUES (11, 'delete_user', 'web', '2024-02-14 06:57:43', '2024-02-14 06:57:43');
INSERT INTO `permissions` VALUES (12, 'delete_any_user', 'web', '2024-02-14 06:57:43', '2024-02-14 06:57:43');

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token` ASC) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type` ASC, `tokenable_id` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for role_has_permissions
-- ----------------------------
DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE `role_has_permissions`  (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`, `role_id`) USING BTREE,
  INDEX `role_has_permissions_role_id_foreign`(`role_id` ASC) USING BTREE,
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of role_has_permissions
-- ----------------------------
INSERT INTO `role_has_permissions` VALUES (1, 1);
INSERT INTO `role_has_permissions` VALUES (2, 1);
INSERT INTO `role_has_permissions` VALUES (3, 1);
INSERT INTO `role_has_permissions` VALUES (4, 1);
INSERT INTO `role_has_permissions` VALUES (5, 1);
INSERT INTO `role_has_permissions` VALUES (6, 1);
INSERT INTO `role_has_permissions` VALUES (7, 1);
INSERT INTO `role_has_permissions` VALUES (8, 1);
INSERT INTO `role_has_permissions` VALUES (9, 1);
INSERT INTO `role_has_permissions` VALUES (10, 1);
INSERT INTO `role_has_permissions` VALUES (11, 1);
INSERT INTO `role_has_permissions` VALUES (12, 1);
INSERT INTO `role_has_permissions` VALUES (7, 2);
INSERT INTO `role_has_permissions` VALUES (8, 2);

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `roles_name_guard_name_unique`(`name` ASC, `guard_name` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES (1, 'Super Admin', 'web', '2024-02-14 06:39:01', '2024-02-14 06:53:57');
INSERT INTO `roles` VALUES (2, 'Manager', 'web', '2024-02-14 06:46:20', '2024-02-14 06:46:20');

-- ----------------------------
-- Table structure for services
-- ----------------------------
DROP TABLE IF EXISTS `services`;
CREATE TABLE `services`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `meta_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` json NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `services_slug_unique`(`slug` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of services
-- ----------------------------
INSERT INTO `services` VALUES (1, 'AIR FREIGHT', 'air-freight', 'Experience the excellence of our air freight service, where your cargo is transported swiftly and securely, making us your global shipping partner.', '<div class=\"filament-tiptap-grid-builder\" data-type=\"asymmetric\" data-cols=\"12\" style=\"grid-template-columns: repeat(12, 1fr);\" data-stack-at=\"md\"><div class=\"filament-tiptap-grid-builder__column\" data-col-span=\"1\" style=\"grid-column: span 1;\"><p><img src=\"/storage/images/c560a3e9-94c7-4cc6-8256-c9fccd394d77.png\" alt=\"import-export\" title=\"import-export service\" width=\"72\" height=\"72\"></p></div><div class=\"filament-tiptap-grid-builder__column\" data-col-span=\"11\" style=\"grid-column: span 11;\"><p><strong>Export and Import Services</strong></p><p>Unleash Your Export Potential with Air Freight Expertise! Our specialized export and import services ensure your products reach international destinations with ease. We handle the entire process, from customs compliance to logistics, so you can focus on expanding your global reach.</p></div></div><div class=\"filament-tiptap-grid-builder\" data-type=\"asymmetric\" data-cols=\"12\" style=\"grid-template-columns: repeat(12, 1fr);\" data-stack-at=\"md\"><div class=\"filament-tiptap-grid-builder__column\" data-col-span=\"1\" style=\"grid-column: span 1;\"><p><img src=\"/storage/images/32d78f2f-7bce-4ebf-9c26-320888bf7916.png\" alt=\"consolidate\" width=\"72\" height=\"73\"></p></div><div class=\"filament-tiptap-grid-builder__column\" data-col-span=\"11\" style=\"grid-column: span 11;\"><p><strong>Consolidate</strong></p><p>Elevate Your Air Freight Efficiency with Consolidation Services. Our expertise in consolidating air freight shipments ensures streamlined logistics and significant cost savings. Simplify your operations and enhance your competitiveness.</p></div></div><div class=\"filament-tiptap-grid-builder\" data-type=\"asymmetric\" data-cols=\"12\" style=\"grid-template-columns: repeat(12, 1fr);\" data-stack-at=\"md\"><div class=\"filament-tiptap-grid-builder__column\" data-col-span=\"1\" style=\"grid-column: span 1;\"><p><img src=\"/storage/images/b2aa4ead-be99-4aff-a2a1-8cf12d93399c.png\" alt=\"local clearance\" title=\"local clearance\" width=\"72\" height=\"72\"></p></div><div class=\"filament-tiptap-grid-builder__column\" data-col-span=\"11\" style=\"grid-column: span 11;\"><p><strong>Local Clearance</strong></p><p>Our team specializes in streamlining customs and regulatory processes, ensuring your air cargo arrives swiftly and efficiently.</p></div></div>', '#333333', 'Air Freight', 'Experience the excellence of our air freight service', '\"air freight,cargo,aircat\"', '2024-02-15 09:53:20', '2024-02-15 10:32:31');

-- ----------------------------
-- Table structure for settings
-- ----------------------------
DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of settings
-- ----------------------------
INSERT INTO `settings` VALUES (1, 'app_name', 'Air Cat Logistics SDN BHD', '2024-02-15 06:13:37', '2024-02-15 06:13:37');
INSERT INTO `settings` VALUES (2, 'app_email', 'enquiries@aircat.com.bn', '2024-02-15 06:17:19', '2024-02-15 06:17:19');
INSERT INTO `settings` VALUES (3, 'app_address', 'Unit A1 & A2, 1st Floor, Jaya Setia Square, Berakas BB2713, Airport Road, Negara Brunei Darussalam', '2024-02-15 06:18:01', '2024-02-15 06:18:01');
INSERT INTO `settings` VALUES (4, 'app_phone', '(+673) 2231871', '2024-02-15 06:18:34', '2024-02-15 06:18:34');
INSERT INTO `settings` VALUES (5, 'app_fb_link', 'https://www.facebook.com', '2024-02-15 06:19:54', '2024-02-15 06:19:54');
INSERT INTO `settings` VALUES (6, 'app_insta_link', 'https://www.instagram.com', '2024-02-15 06:20:44', '2024-02-15 06:20:44');

-- ----------------------------
-- Table structure for sliders
-- ----------------------------
DROP TABLE IF EXISTS `sliders`;
CREATE TABLE `sliders`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `heading` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sliders
-- ----------------------------
INSERT INTO `sliders` VALUES (1, 'Welcome to\nAIR CAT LOGISTICS,\nYour One-Stop Solution for\nWorldwide Logistics.', 1, 1, '2024-02-14 10:08:38', '2024-02-14 10:08:38');
INSERT INTO `sliders` VALUES (3, 'test', 1, 1, '2024-02-14 11:10:35', '2024-02-14 11:10:35');
INSERT INTO `sliders` VALUES (4, 'test', 2, 0, '2024-02-14 11:38:15', '2024-02-14 11:38:15');
INSERT INTO `sliders` VALUES (5, 'testing', 3, 1, '2024-02-14 11:40:52', '2024-02-14 11:40:52');
INSERT INTO `sliders` VALUES (6, 'testing', 3, 1, '2024-02-14 11:43:30', '2024-02-14 11:43:30');
INSERT INTO `sliders` VALUES (7, 'testing', 3, 1, '2024-02-14 11:45:18', '2024-02-14 11:45:18');
INSERT INTO `sliders` VALUES (8, 'testing', 3, 1, '2024-02-14 11:45:56', '2024-02-14 11:45:56');
INSERT INTO `sliders` VALUES (9, 'FINAL TESTING', 5, 1, '2024-02-14 11:56:08', '2024-02-14 11:56:08');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'admin', 'admin@aircat.com', NULL, '$2y$12$H8PZsOUZ45vdjiZEDJstoOH/1srKulccsPE3Nwti0JrHR3rsOVcUu', 'Mv1fIEYgcoFUqtHLuDTkbF6NAQ80qHEq6aG6mSP0ISTqRupEioljnS3ZWxM5', '2024-02-10 13:50:31', '2024-02-10 13:50:31');
INSERT INTO `users` VALUES (2, 'Manager', 'manager@gmail.com', NULL, '$2y$12$kYzbEX3xBgmsS6f1GQ7zt.ms4ELwOcqkUvfwzadMhlRkpuNwPU0ZG', NULL, '2024-02-14 07:05:45', '2024-02-14 07:05:45');

SET FOREIGN_KEY_CHECKS = 1;

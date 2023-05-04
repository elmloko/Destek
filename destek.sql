-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para destek
CREATE DATABASE IF NOT EXISTS `destek` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `destek`;

-- Volcando estructura para tabla destek.areas
CREATE TABLE IF NOT EXISTS `areas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Volcando datos para la tabla destek.areas: ~4 rows (aproximadamente)
INSERT INTO `areas` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Direccion Administrativa Financiera', '2023-04-25 18:29:52', '2023-04-25 18:29:52'),
	(2, 'Dirección Operativa', '2023-04-25 18:32:52', '2023-04-25 18:32:52'),
	(4, 'Dirección Ejecutiva', '2023-04-25 18:33:12', '2023-04-25 18:33:12'),
	(5, 'Asesoría Legal.', '2023-04-27 15:48:19', '2023-04-27 15:53:20');

-- Volcando estructura para tabla destek.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Volcando datos para la tabla destek.failed_jobs: ~0 rows (aproximadamente)

-- Volcando estructura para tabla destek.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Volcando datos para la tabla destek.migrations: ~4 rows (aproximadamente)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2023_04_05_054828_create_permission_tables', 1),
	(6, '2023_04_05_140333_create_areas_table', 1),
	(7, '2023_04_19_202928_create_tecnicos_table', 1),
	(8, '2023_04_06_191101_create_tickets_table', 2);

-- Volcando estructura para tabla destek.model_has_permissions
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Volcando datos para la tabla destek.model_has_permissions: ~0 rows (aproximadamente)

-- Volcando estructura para tabla destek.model_has_roles
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Volcando datos para la tabla destek.model_has_roles: ~3 rows (aproximadamente)
INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
	(1, 'App\\Models\\User', 3),
	(2, 'App\\Models\\User', 4),
	(3, 'App\\Models\\User', 5);

-- Volcando estructura para tabla destek.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Volcando datos para la tabla destek.password_resets: ~0 rows (aproximadamente)

-- Volcando estructura para tabla destek.permissions
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `guard_name` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Volcando datos para la tabla destek.permissions: ~16 rows (aproximadamente)
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'ver-rol', 'web', '2023-04-25 18:20:02', '2023-04-25 18:20:02'),
	(2, 'crear-rol', 'web', '2023-04-25 18:20:02', '2023-04-25 18:20:02'),
	(3, 'editar-rol', 'web', '2023-04-25 18:20:02', '2023-04-25 18:20:02'),
	(4, 'borrar-rol', 'web', '2023-04-25 18:20:02', '2023-04-25 18:20:02'),
	(5, 'ver-area', 'web', '2023-04-25 18:20:02', '2023-04-25 18:20:02'),
	(6, 'crear-area', 'web', '2023-04-25 18:20:02', '2023-04-25 18:20:02'),
	(7, 'editar-area', 'web', '2023-04-25 18:20:02', '2023-04-25 18:20:02'),
	(8, 'borrar-area', 'web', '2023-04-25 18:20:02', '2023-04-25 18:20:02'),
	(9, 'ver-usuario', 'web', '2023-04-25 18:20:02', '2023-04-25 18:20:02'),
	(10, 'crear-usuario', 'web', '2023-04-25 18:20:02', '2023-04-25 18:20:02'),
	(11, 'editar-usuario', 'web', '2023-04-25 18:20:02', '2023-04-25 18:20:02'),
	(12, 'borrar-usuario', 'web', '2023-04-25 18:20:02', '2023-04-25 18:20:02'),
	(13, 'ver-tecnico', 'web', '2023-04-25 18:20:02', '2023-04-25 18:20:02'),
	(14, 'crear-tecnico', 'web', '2023-04-25 18:20:02', '2023-04-25 18:20:02'),
	(15, 'editar-tecnico', 'web', '2023-04-25 18:20:02', '2023-04-25 18:20:02'),
	(16, 'borrar-tecnico', 'web', '2023-04-25 18:20:02', '2023-04-25 18:20:02');

-- Volcando estructura para tabla destek.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Volcando datos para la tabla destek.personal_access_tokens: ~0 rows (aproximadamente)

-- Volcando estructura para tabla destek.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `guard_name` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Volcando datos para la tabla destek.roles: ~3 rows (aproximadamente)
INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'Administrador', 'web', '2023-04-25 18:28:40', '2023-04-25 18:28:40'),
	(2, 'Autorizador', 'web', '2023-04-27 14:23:09', '2023-04-27 14:23:09'),
	(3, 'Tecnico', 'web', '2023-04-27 14:25:21', '2023-04-27 14:25:21');

-- Volcando estructura para tabla destek.role_has_permissions
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Volcando datos para la tabla destek.role_has_permissions: ~23 rows (aproximadamente)
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
	(1, 1),
	(2, 1),
	(3, 1),
	(4, 1),
	(5, 1),
	(6, 1),
	(7, 1),
	(8, 1),
	(9, 1),
	(10, 1),
	(11, 1),
	(12, 1),
	(13, 1),
	(14, 1),
	(15, 1),
	(16, 1),
	(1, 3),
	(5, 3),
	(9, 3),
	(13, 3),
	(14, 3),
	(15, 3),
	(16, 3);

-- Volcando estructura para tabla destek.tecnicos
CREATE TABLE IF NOT EXISTS `tecnicos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `apellido` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Volcando datos para la tabla destek.tecnicos: ~2 rows (aproximadamente)
INSERT INTO `tecnicos` (`id`, `nombre`, `apellido`, `created_at`, `updated_at`) VALUES
	(2, 'Beymar', 'Espinoza', '2023-04-27 14:24:19', '2023-04-27 14:24:19'),
	(3, 'Ale', 'Quintanilla', '2023-04-28 19:46:18', '2023-04-28 19:46:18');

-- Volcando estructura para tabla destek.tickets
CREATE TABLE IF NOT EXISTS `tickets` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `solucion` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `estado` enum('por_aprobar','activo','terminado') CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL DEFAULT 'por_aprobar',
  `nombre` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `tecnico_id` bigint unsigned DEFAULT NULL,
  `area_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tickets_area_id_foreign` (`area_id`),
  KEY `tickets_tecnico_id_foreign` (`tecnico_id`),
  CONSTRAINT `tickets_area_id_foreign` FOREIGN KEY (`area_id`) REFERENCES `areas` (`id`),
  CONSTRAINT `tickets_tecnico_id_foreign` FOREIGN KEY (`tecnico_id`) REFERENCES `tecnicos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Volcando datos para la tabla destek.tickets: ~10 rows (aproximadamente)
INSERT INTO `tickets` (`id`, `descripcion`, `solucion`, `estado`, `nombre`, `tecnico_id`, `area_id`, `created_at`, `updated_at`) VALUES
	(1, 'Soporte a mi cableado de red', NULL, 'activo', 'leo', 3, 1, '2023-04-25 18:30:01', '2023-04-28 21:03:48'),
	(2, 'Estoy sin Internet', NULL, 'activo', 'Ale', 2, 1, '2023-04-25 18:30:25', '2023-04-28 21:40:51'),
	(3, 'Soporte a mi cableado de red', 'Revisión de cableado', 'activo', 'Ale', 2, 2, '2023-04-25 18:49:27', '2023-04-28 20:53:30'),
	(4, 'No tengo acceso al zimbra', NULL, 'por_aprobar', 'Alekey', NULL, 1, '2023-04-27 16:27:20', '2023-04-27 16:27:20'),
	(5, 'No prende mi equipo', NULL, 'activo', 'Susana', NULL, 2, '2023-04-27 16:27:42', '2023-04-27 19:36:53'),
	(6, 'Tengo mi cable roto', NULL, 'activo', 'Zuleika', NULL, 1, '2023-04-27 16:43:51', '2023-04-27 19:39:47'),
	(7, 'Mi cable se rompio', NULL, 'activo', 'AleChico', NULL, 5, '2023-04-27 19:45:46', '2023-04-28 15:21:18'),
	(8, 'Notengo acceso al zimbra 1 mes', 'no tenia el cable conectado', 'activo', 'Diana', 3, 5, '2023-04-28 19:41:14', '2023-04-28 20:53:39'),
	(9, 'Mi mouse se trabó', NULL, 'activo', 'Maria la del barrio', 3, 4, '2023-04-28 20:46:52', '2023-04-28 21:37:14'),
	(10, 'ronni sabotea el sistema', NULL, 'por_aprobar', 'roni', 2, 1, '2023-04-28 21:04:06', '2023-04-28 21:17:44');

-- Volcando estructura para tabla destek.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Volcando datos para la tabla destek.users: ~10 rows (aproximadamente)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(3, 'Administrador', 'admin@gmail.com', NULL, '$2y$10$YaaeZRFpp0phh1gLRYyWROQeiDXLBpiz5eLd4BbMiSFk5WYUNwHvy', 'Je0ljf0mWERwky0drtJJ64cRWZWpfO6NlYmH8cq0UfNa92ydMEQbmOpjq2n3', '2023-04-25 18:28:59', '2023-05-04 16:01:30'),
	(4, 'Boris', 'boris@gmail.com', NULL, '$2y$10$zqKg0ih5F3yfWzuyFO.Mgekm0YZ7V110oFa00XB2ip9Uh4ojMDtsa', NULL, '2023-04-27 14:24:58', '2023-04-27 14:24:58'),
	(5, 'Tecnico', 'tecnico@gmail.com', NULL, '$2y$10$UjaBiitM/ITDKavD3uJFzex.h9jJDCsxl9pJGW780wdJR49wRpO.S', NULL, '2023-04-27 14:25:47', '2023-05-04 16:02:43'),
	(11, 'Alejandra', 'ale@gmail.com', NULL, '$2y$10$PfqnGv3P/ZIfaB5tmtSy9OwGH3gbgR8eBw9SBNOwV1x6tnELjTFFS', NULL, '2023-05-04 16:04:38', '2023-05-04 16:04:38');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

DROP TABLE IF EXISTS `hotels`;
CREATE TABLE `hotels` (
                          `id` int(11) NOT NULL,
                          `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
                          `address` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
                          `city` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
                          `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
                          `file_hotel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `hotel_rooms`;
CREATE TABLE `hotel_rooms` (
                               `id` int(11) NOT NULL,
                               `hotels_id` int(11) NOT NULL,
                               `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
                               `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
                               `price` decimal(6,2) NOT NULL,
                               `booking_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                               `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `hotel_rooms_images`;
CREATE TABLE `hotel_rooms_images` (
                                      `hotel_rooms_id` int(11) NOT NULL,
                                      `images_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `images`;
CREATE TABLE `images` (
                          `id` int(11) NOT NULL,
                          `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
                          `bin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `messenger_messages`;
CREATE TABLE `messenger_messages` (
                                      `id` bigint(20) NOT NULL,
                                      `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
                                      `headers` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
                                      `queue_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
                                      `created_at` datetime NOT NULL,
                                      `available_at` datetime NOT NULL,
                                      `delivered_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `reservation_rooms`;
CREATE TABLE `reservation_rooms` (
                                     `id` int(11) NOT NULL,
                                     `users_id` int(11) DEFAULT NULL,
                                     `hotels_id` int(11) DEFAULT NULL,
                                     `hotel_rooms_id` int(11) DEFAULT NULL,
                                     `start_date` date NOT NULL,
                                     `end_date` date NOT NULL,
                                     `total_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `reset_password_request`;
CREATE TABLE `reset_password_request` (
                                          `id` int(11) NOT NULL,
                                          `user_id` int(11) NOT NULL,
                                          `selector` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
                                          `hashed_token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
                                          `requested_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
                                          `expires_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
                         `id` int(11) NOT NULL,
                         `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
                         `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`roles`)),
                         `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                         `firstname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
                         `lastname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
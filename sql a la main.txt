CREATE TABLE `users` (
  `id` int(11) PRIMARY KEY NOT NULL,
  `email` varchar(180) NOT NULL,
  `roles` longtext NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  PRIMARY KEY (id)


);

CREATE TABLE `hotels` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50)  NOT NULL,
  `city` varchar(50)  NOT NULL,
  `description` longtext NOT NULL,
  `file_hotel` varchar(255) NOT NULL,
  PRIMARY KEY (id),
);

CREATE TABLE `hotels_users` (
  `hotels_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL
  PRIMARY KEY (hotels_id,users_id),
  FOREIGN KEY (hotels_id) REFERENCES hotels(id),
  FOREIGN KEY (users_id) REFERENCES users(id)

);

CREATE TABLE `hotel_rooms` (
  `id` int(11) NOT NULL,
  `hotels_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` longtext NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `booking_link` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (hotels_id) REFERENCES hotels(id)
);

CREATE TABLE `hotel_rooms_images` (
  `hotel_rooms_id` int(11) NOT NULL,
  `images_id` int(11) NOT NULL,
  PRIMARY KEY (hotel_rooms_id,images_id),
  FOREIGN KEY (hotel_rooms_id) REFERENCES hotel_rooms(id),
  FOREIGN KEY (images_id) REFERENCES images(id)
);

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `bin` varchar(255) NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE `messenger_messages` (
  `id` bigint(20) PRIMARY KEY NOT NULL,
  `body` longtext NOT NULL,
  `headers` longtext NOT NULL,
  `queue_name` varchar(190) NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL
);

CREATE TABLE `reservation_rooms` (
  `id` int(11) PRIMARY KEY NOT NULL,
  `users_id` int(11) DEFAULT NULL,
  `hotels_id` int(11) DEFAULT NULL,
  `hotel_rooms_id` int(11) DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (users_id) REFERENCES users(id),
  FOREIGN KEY (hotels_id) REFERENCES hotels(id),
  FOREIGN KEY (hotel_rooms_id) REFERENCES hotel_rooms(id)
);

CREATE TABLE `reset_password_request` (
  `id` int(11) PRIMARY KEY NOT NULL,
  `user_id` int(11) NOT NULL,
  `selector` varchar(20) NOT NULL,
  `hashed_token` varchar(100) NOT NULL,
  `requested_at` datetime NOT NULL,
  `expires_at` datetime NOT NULL,
  FOREIGN KEY (user_id) REFERENCES users(id),
);




INSERT INTO `users` (`id`, `email`, `roles`, `password`, `firstname`, `lastname`) VALUES (5, 'admin@hypnos.com', '["ROLE_ADMIN"]', 'Azerty10', 'Gwendal', 'Menager');
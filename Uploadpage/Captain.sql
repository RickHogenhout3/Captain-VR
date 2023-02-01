DROP DATABASE IF EXISTS captain_vr;

CREATE DATABASE captain_vr;

USE captain_vr;

CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);
CREATE TABLE coaches (
    coach_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(1050) NOT NULL,
    password VARCHAR(255) NOT NULL
);
<<<<<<< HEAD
<<<<<<< HEAD
INSERT INTO `admin` (`admin-id`, `username`, `email`, `password`) VALUES ('1', 'admin', 'admin@gmail.com', 'admin123');
INSERT INTO `users` (`id`, `username`, `password`) VALUES ('1', 'user', 'wordpass12');

<!--Apart in de sql doen-->

CREATE TABLE `videos` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
=======
CREATE TABLE videos (
   id INT AUTO_INCREMENT PRIMARY KEY,
   video_name VARCHAR(255) NOT NULL,
   video_path VARCHAR(255) NOT NULL,
   uploaded_at DATETIME DEFAULT CURRENT_TIMESTAMP
);
INSERT INTO `coaches` (`coach_id`, `username`, `email`, `password`) VALUES ('1', 'admin', 'admin@gmail.com', 'admin123');
INSERT INTO `users` (`id`, `username`, `password`) VALUES ('1', 'user', 'wordpass12');
>>>>>>> 1405730ef52e6c0934a41b81cab55f015da0460e
=======
CREATE TABLE videos (
   id INT AUTO_INCREMENT PRIMARY KEY,
   name VARCHAR(255) NOT NULL,
   location VARCHAR(255) NOT NULL
);
INSERT INTO `coaches` (`coach_id`, `username`, `email`, `password`) VALUES ('1', 'admin', 'admin@gmail.com', 'admin123');
INSERT INTO `users` (`id`, `username`, `password`) VALUES ('1', 'user', 'wordpass12');
>>>>>>> 3b31429a04539209dbaf8af5acb697f8b24b37d7

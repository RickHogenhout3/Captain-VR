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
INSERT INTO `admin` (`admin-id`, `username`, `email`, `password`) VALUES ('1', 'admin', 'admin@gmail.com', 'admin123');
INSERT INTO `users` (`id`, `username`, `password`) VALUES ('1', 'user', 'wordpass12');
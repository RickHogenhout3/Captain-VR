DROP DATABASE IF EXISTS captain_vr;

CREATE DATABASE captain_vr;

USE captain_vr;

CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    firstname VARCHAR(50) NOT NULL UNIQUE,
    lastname VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);
CREATE TABLE coaches (
    coach_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    firstname VARCHAR(50) NOT NULL UNIQUE,
    lastname VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(1050) NOT NULL,
    password VARCHAR(255) NOT NULL
);
CREATE TABLE videos (
   id INT AUTO_INCREMENT PRIMARY KEY,
   name VARCHAR(255) NOT NULL,
   location VARCHAR(255) NOT NULL
);
INSERT INTO `coaches` (`coach_id`, `firstname`, `lastname`, `email`, `password`) VALUES ('1', 'admin', 'admin', 'admin@gmail.com', 'admin123');
INSERT INTO `users` (`id`, `firstname`,`lastname`, `password`) VALUES ('1', 'user', 'name', 'wordpass12');

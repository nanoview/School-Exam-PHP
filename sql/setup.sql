-- SQL setup for School-Exam-PHP reservation system
-- Creates database, table, and inserts mock data

-- Create database if not exists (adjust name to match connect_db.php)
CREATE DATABASE IF NOT EXISTS `arif_restaurant_db` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `arif_restaurant_db`;

-- Drop and recreate cust table for a clean start (optional)
DROP TABLE IF EXISTS `cust`;

-- Table: cust
-- Matches fields used in poyta.php and reservations.php
CREATE TABLE `cust` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nimi` VARCHAR(100) NOT NULL,
  `sahkoposti` VARCHAR(150) NOT NULL,
  `puhelin` VARCHAR(30) DEFAULT NULL,
  `aika` TIME NOT NULL,
  `ajan` DATE NOT NULL,
  `viesti` TEXT NULL,
  `persons` TINYINT UNSIGNED NOT NULL DEFAULT 1,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `idx_ajan_aika` (`ajan`, `aika`),
  KEY `idx_sahkoposti` (`sahkoposti`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Mock data: 12 realistic Finnish reservations
INSERT INTO `cust` (`nimi`, `sahkoposti`, `puhelin`, `aika`, `ajan`, `viesti`, `persons`) VALUES
('Matti Meikäläinen', 'matti@example.com', '+358401234567', '18:30:00', DATE_ADD(CURDATE(), INTERVAL 1 DAY), 'Ikkunapöytä jos mahdollista', 2),
('Maija Virtanen', 'maija.virtanen@example.com', '+358501112223', '12:00:00', DATE_ADD(CURDATE(), INTERVAL 2 DAY), 'Lasten kanssa, syöttötuoli', 4),
('Antti Korhonen', 'antti.k@example.com', '+358441234321', '19:15:00', DATE_ADD(CURDATE(), INTERVAL 3 DAY), NULL, 2),
('Liisa Nieminen', 'liisa.n@example.com', '+358405555666', '20:00:00', DATE_ADD(CURDATE(), INTERVAL 5 DAY), 'Syntymäpäiväillallinen', 3),
('Jari Laine', 'jari.laine@example.com', '+358409876543', '13:30:00', DATE_ADD(CURDATE(), INTERVAL 7 DAY), 'Hiljainen pöytä kiitos', 2),
('Sanna Heikkinen', 'sanna.heikkinen@example.com', '+358503334445', '17:45:00', DATE_ADD(CURDATE(), INTERVAL 1 DAY), 'Gluteeniton', 2),
('Pekka Mäkelä', 'pekka.makela@example.com', '+358504567890', '11:30:00', DATE_ADD(CURDATE(), INTERVAL 4 DAY), NULL, 1),
('Elina Hämäläinen', 'elina.h@example.com', '+358406666777', '18:00:00', DATE_ADD(CURDATE(), INTERVAL 6 DAY), 'Näkymä keittiöön', 2),
('Ville Koskinen', 'ville.k@example.com', '+358407777888', '16:00:00', DATE_ADD(CURDATE(), INTERVAL 8 DAY), 'Lahjakortti mukana', 2),
('Tiina Saarinen', 'tiina.s@example.com', '+358408888999', '14:00:00', DATE_ADD(CURDATE(), INTERVAL 9 DAY), 'Vegaanivaihtoehdot?', 5),
('Jukka Salonen', 'jukka.s@example.com', '+358409999000', '19:45:00', DATE_ADD(CURDATE(), INTERVAL 10 DAY), 'Myöhäinen illallinen', 2),
('Katja Karjalainen', 'katja.k@example.com', '+358401112233', '12:15:00', DATE_ADD(CURDATE(), INTERVAL 11 DAY), 'Terassi jos sää sallii', 3);

-- Optional: A past reservation to verify ordering
INSERT INTO `cust` (`nimi`, `sahkoposti`, `puhelin`, `aika`, `ajan`, `viesti`, `persons`) VALUES
('Testi Menneisyys', 'past@example.com', '+358401111111', '13:00:00', DATE_SUB(CURDATE(), INTERVAL 2 DAY), 'Testimenossa', 2);

-- Verify
-- SELECT * FROM `cust` ORDER BY `ajan` DESC, `aika` DESC;
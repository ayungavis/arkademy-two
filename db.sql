CREATE TABLE `hobbies` (
	`id` int(2) NOT NULL,
	`person_id` int(2) NOT NULL,
	`name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `categories` (
	`id` int(4) NOT NULL,
	`name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `hobbies` ADD PRIMARY KEY (`id`);
ALTER TABLE `hobbies` MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

ALTER TABLE `categories` ADD PRIMARY KEY (`id`);
ALTER TABLE `categories` MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

INSERT INTO `categories` VALUES
(1, 'Nurhadi'),
(2, 'Aldo'),
(3, 'Dodi');

INSERT INTO `hobbies` VALUES
(1, 1, 'Bird watching'),
(2, 1, 'Martial arts'),
(3, 2, 'Hiking'),
(4, 1, 'Archery'),
(5, 2, 'Beekeeping'),
(6, 3, 'Book restoration');
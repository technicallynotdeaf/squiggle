DROP TABLE IF EXISTS `##_com_squiggle_data`;

CREATE TABLE `##_com_squiggle_data` (
	`id`  INT(11)     NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(50) UNIQUE NOT NULL,
	`acronym` VARCHAR(25) UNIQUE NOT NULL,
	PRIMARY KEY (`party_id`)
)
ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci;

INSERT INTO `#__com_squiggle_data` (`name`, `acronym`) VALUES
('Free and Open Source Software', 'FOSS'),
('General Public License' , 'GPL'), 
('Electronic Frontier Foundation', 'EFF'); 


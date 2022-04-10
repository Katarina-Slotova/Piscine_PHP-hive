CREATE TABLE ft_table (
	id int NOT NULL AUTO_INCREMENT,
	`login` varchar(10) DEFAULT "toto" NOT NULL,
	group ENUM('staff', 'student', 'other') NOT NULL,
	creation_date DATE 
	PRIMARY KEY (id)
);
1     CREATE TABLE review(
	id INT NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(10) NOT NULL,
	rate TINYINT(10) NOT NULL,
	massage VARCHAR(250) NOT NULL,
	PRIMARY KEY (id)
       )ENGINE INNODB CHARSET utf8;
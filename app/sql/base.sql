CREATE DATABASE `test-wp` CHARACTER SET utf8 COLLATE utf8_general_ci;
CREATE USER 'pod'@'localhost' IDENTIFIED BY 'dU3RSy5v373npWa';
GRANT ALL PRIVILEGES ON pod.* TO 'test-wp'@'localhost' WITH GRANT OPTION;

CREATE TABLE figures(
   id INT NOT NULL AUTO_INCREMENT,
   type VARCHAR(100) NOT NULL,
   PRIMARY KEY ( id )
)


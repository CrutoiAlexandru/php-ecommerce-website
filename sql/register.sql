CREATE TABLE users (
    id INT NOT NULL AUTO_INCREMENT,
    username VARCHAR(30) NOT NULL, 
    password VARCHAR(64) NOT NULL, 
    email VARCHAR(30) NOT NULL, 
    token VARCHAR(64),
    PRIMARY KEY (id));

INSERT INTO users (username, password, mail) 
    VALUES ('user1', 'pas1', 'email1');
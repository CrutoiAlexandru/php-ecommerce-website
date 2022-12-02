CREATE TABLE users (
    id INT NOT NULL AUTO_INCREMENT,
    username VARCHAR(30) NOT NULL, 
    password VARCHAR(64) NOT NULL, 
    email VARCHAR(30) NOT NULL, 
    token VARCHAR(64),
    PRIMARY KEY (id));

CREATE TABLE orders (
    id INT NOT NULL AUTO_INCREMENT,
    user_id INT NOT NULL, 
    product VARCHAR(300) NOT NULL, 
    country VARCHAR(20) NOT NULL,
    county VARCHAR(20),
    city VARCHAR(20) NOT NULL,
    street VARCHAR(20) NOT NULL,
    number VARCHAR(10) NOT NULL,
    PRIMARY KEY (id));

CREATE TABLE cart (
    user_id INT NOT NULL, 
    product VARCHAR(300), 
    PRIMARY KEY (id));

INSERT INTO users (username, password, mail) 
    VALUES ('user1', 'pas1', 'email1');
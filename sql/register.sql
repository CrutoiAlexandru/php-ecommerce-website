CREATE TABLE users (
    id INT AUTO_INCREMENT,
    username VARCHAR(30), 
    password VARCHAR(300), 
    mail VARCHAR(30), 
    PRIMARY KEY (id));

INSERT INTO users (username, password, mail) 
    VALUES ('user1', 'pas1', 'mail1');
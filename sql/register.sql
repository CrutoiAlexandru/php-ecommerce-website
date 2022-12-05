CREATE TABLE users (
    id INT NOT NULL AUTO_INCREMENT,
    username VARCHAR(30) NOT NULL, 
    password VARCHAR(64) NOT NULL, 
    email VARCHAR(30) NOT NULL, 
    token VARCHAR(64),
    PRIMARY KEY (id));

INSERT INTO users (username, password, email, token) 
    VALUES ('user1', 'pas1-sha256', 'email1@gmail.com', 'username+password-sha256');

----------------------------------------------------------------

CREATE TABLE orders (
    id INT NOT NULL AUTO_INCREMENT,
    user_id INT NOT NULL, 
    product VARCHAR(300) NOT NULL, 
    country VARCHAR(20) NOT NULL,
    county VARCHAR(20) NOT NULL,
    city VARCHAR(20) NOT NULL,
    street VARCHAR(20) NOT NULL,
    number VARCHAR(10) NOT NULL,
    price INT NOT NULL,
    stage VARCHAR(30) NOT NULL,
    PRIMARY KEY (id));

INSERT INTO orders (user_id, product, country, county, city, street, number, price, stage)
    VALUES (1, 'beani1,beani2', 'Country', 'County', 'City', 'Street', 82, 120, 'Processing');

----------------------------------------------------------------

CREATE TABLE cart (
    user_id INT NOT NULL, 
    product VARCHAR(300), 
    PRIMARY KEY (id));

INSERT INTO cart (user_id, product)
    VALUES (1, 'beani1,sock2');

----------------------------------------------------------------

CREATE TABLE products (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    image VARCHAR(30) NOT NULL,
    description VARCHAR(100) NOT NULL,
    price INT NOT NULL,
    PRIMARY KEY (id));

INSERT INTO products (name, image, description, price)
    VALUES ('beanie1', '/share/img/beanies/beanie1.jpg', 'size: M', 20);

INSERT INTO products (name, image, description, price)
    VALUES ('beanie2', '/share/img/beanies/beanie2.jpg', 'size: M', 20);

INSERT INTO products (name, image, description, price)
    VALUES ('beanie3', '/share/img/beanies/beanie3.jpg', 'size: M', 20);

INSERT INTO products (name, image, description, price)
    VALUES ('hoodie1', '/share/img/hoodies/hoodie1.jpg', 'size: M', 40);

INSERT INTO products (name, image, description, price)
    VALUES ('hoodie2', '/share/img/hoodies/hoodie2.jpg', 'size: M', 40);

INSERT INTO products (name, image, description, price)
    VALUES ('hoodie3', '/share/img/hoodies/hoodie3.jpg', 'size: M', 40);

INSERT INTO products (name, image, description, price)
    VALUES ('sock1', '/share/img/socks/sock1.jpg', 'size: M', 10);

INSERT INTO products (name, image, description, price)
    VALUES ('sock2', '/share/img/socks/sock2.jpg', 'size: M', 10);

INSERT INTO products (name, image, description, price)
    VALUES ('sock3', '/share/img/socks/sock3.jpg', 'size: M', 10);
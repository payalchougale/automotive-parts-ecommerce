CREATE TABLE users (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
email VARCHAR(100),
password VARCHAR(255),
phone VARCHAR(20),
address TEXT,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE products (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(200),
description TEXT,
price DECIMAL(10,2),
category VARCHAR(100),
stock INT,
image VARCHAR(255),
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE cart (
id INT AUTO_INCREMENT PRIMARY KEY,
user_id INT,
product_id INT,
quantity INT
);

CREATE TABLE orders (
id INT AUTO_INCREMENT PRIMARY KEY,
user_id INT,
total_price DECIMAL(10,2),
order_status VARCHAR(50),
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE order_items (
id INT AUTO_INCREMENT PRIMARY KEY,
order_id INT,
product_id INT,
quantity INT,
price DECIMAL(10,2)
);
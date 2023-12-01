DROP DATABASE IF EXISTS L09_Liang_58298_3tables;

CREATE DATABASE L09_Liang_58298_3tables;

USE L09_Liang_58298_3tables;

CREATE TABLE L09_Liang_58298_3tables.clients_HR(
    clients_id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(70) not null,
    email VARCHAR(70) not null,
    join_date DATE not null,
    password VARCHAR(20) not null,
    PRIMARY KEY (clients_id)
);

INSERT INTO clients_HR (clients_id, name, email, join_date, password) VALUES
   (1, 'Alice Johnson', 'alice@gmail.com', '2023-01-01', '111111'),
   (2, 'Bob Smith', 'bob@outlook.com', '2023-02-01', '222222'),
   (3, 'Carol White', 'carol@outlook.com', '2023-03-01', '333333'),
   (4, 'David Brown', 'david@gmail.com', '2023-04-01', '4444444'),
   (5, 'Eve Davis', 'eve@outlook.com', '2023-05-01', '555555'),
   (6, 'Frank Miller', 'frank@gmail.com', '2023-06-01', '666666');

CREATE TABLE L09_Liang_58298_3tables.goods_HR (
    good_id INT NOT NULL AUTO_INCREMENT UNIQUE,
    name VARCHAR(70),
    price DOUBLE(5,2),
    PRIMARY KEY (good_id)
);

INSERT INTO goods_HR (good_id, name, price) VALUES
(1, 'Bluetooth Headphones', 50.99),
(2, 'Wireless Mouse', 25.75),
(3, 'Portable Speaker', 99.99),
(4, 'Smart Watch', 199.99),
(5, 'Tablet 10 inch', 329.99),
(6, 'Digital Camera', 449.99);

CREATE TABLE L09_Liang_58298_3tables.orders_HR (
    id INT NOT NULL AUTO_INCREMENT UNIQUE,
    client_id INT,
    good_id INT,
    quantity INT,
    price DOUBLE(5,2),
    PRIMARY KEY (id)
);

ALTER TABLE orders_HR ADD CONSTRAINT fk_client_id FOREIGN KEY (client_id) REFERENCES clients_HR (clients_id);
ALTER TABLE orders_HR ADD CONSTRAINT fk_good_id FOREIGN KEY (good_id) REFERENCES goods_HR (good_id);

INSERT INTO orders_HR (id, client_id, good_id, quantity, price) VALUES
(1, 1, 2, 2, 51.50),   -- Wireless Mouse each 25.75
(2, 2, 5, 1, 329.99),  -- Tablet 10 inch each 329.99
(3, 3, 3, 3, 299.97),  -- Portable Speaker each 99.99
(4, 4, 1, 1, 50.99);   -- Bluetooth Headphones each 50.99




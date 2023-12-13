DROP DATABASE IF EXISTS L11_Liang_58298_mid2_party;

CREATE DATABASE L11_Liang_58298_mid2_party;

USE L11_Liang_58298_mid2_party;

-- 创建服务表格
CREATE TABLE service_HR (
    service_id INT NOT NULL AUTO_INCREMENT,
    service_name VARCHAR(30) NOT NULL,
    description TEXT,
    PRIMARY KEY (service_id)
);

-- 插入一些示例服务数据
INSERT INTO service_HR (service_name, description) VALUES
('birthday for Sam', 'It needs 10 tables happen on 2024-05-01'),
('Company party', 'It located in the center of the city happen on 2023-12-21'),
('New year party for Company', 'it will be happen on 2024-01-01'),
('personal party', 'It should have 10 people happen on 2024-11-01'),
('wedding for Bob', 'It should have 200 people happen on 2024-03-21'),
('wedding for Alice', 'It should have 100 people happen on 2024-11-11');

CREATE TABLE department_HR (
    department_id INT NOT NULL AUTO_INCREMENT UNIQUE,
    department_name VARCHAR(30),
    department_numberOfEmployees INT,
    PRIMARY KEY (department_id)
);

INSERT INTO department_HR (department_name, department_numberOfEmployees) VALUES
('Event Plan', 10),
('Decoration', 8),
('Customer Support', 5),
('Clean', 12),
('Sales', 9),
('Entertainment Plan', 7),
('Finance', 6);

CREATE TABLE employee_HR (
    employee_id INT NOT NULL AUTO_INCREMENT UNIQUE,
    service_id INT,
    department_id INT,
    employee_name VARCHAR(30) NOT NULL,
    employee_email VARCHAR(70) NOT NULL,
    PRIMARY KEY (employee_id)
);

ALTER TABLE employee_HR ADD CONSTRAINT fk_service_id FOREIGN KEY (service_id) REFERENCES service_HR (service_id);
ALTER TABLE employee_HR ADD CONSTRAINT fk_department_id FOREIGN KEY (department_id) REFERENCES department_HR (department_id);

INSERT INTO employee_HR (service_id, department_id, employee_name, employee_email) VALUES
(1, 1, 'Alice Johnson', 'alice.johnson@gmail.com'),
(1, 2, 'Bob Smith', 'bob.smith@outlook.com'),
(2, 3, 'Carol White', 'carol.white@gmail.com'),
(3, 4, 'David Green', 'david.green@outlook.com'),
(4, 5, 'Eva Brown', 'eva.brown@gmail.com'),
(5, 6, 'Frank Jones', 'frank.jones@gmail.com'),
(6, 7, 'Grace Lee', 'grace.lee@outlook.com');

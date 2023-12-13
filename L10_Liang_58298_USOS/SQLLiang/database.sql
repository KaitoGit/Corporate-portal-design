DROP DATABASE IF EXISTS L10_Liang_58298_USOS;

CREATE DATABASE L10_Liang_58298_USOS;

USE L10_Liang_58298_USOS;

CREATE TABLE company_HR(
    company_id INT NOT NULL AUTO_INCREMENT,
    company_name VARCHAR(30) NOT NULL,
    area VARCHAR(30) NOT NULL,
    PRIMARY KEY (company_id)
);
INSERT INTO company_HR (company_name, area) VALUES
('Google', 'New York'),
('HealthPlus', 'Los Angeles'),
('EduSmart', 'Chicago'),
('EcoEnergy', 'Houston'),
('FinSecure', 'San Francisco'),
('ArtMedia', 'Seattle'),
('Vistula', 'Warsaw');

CREATE TABLE department_HR (
    department_id INT NOT NULL AUTO_INCREMENT UNIQUE,
    department_name VARCHAR(30),
    department_numberOfEmployees INT,
    PRIMARY KEY (department_id)
);

INSERT INTO department_HR (department_name, department_numberOfEmployees) VALUES
('Research', 10),
('Marketing', 8),
('HR', 5),
('Development', 12),
('Sales', 9),
('Customer Support', 7),
('Finance', 6);

CREATE TABLE employee_HR (
    employee_id INT NOT NULL AUTO_INCREMENT UNIQUE,
    company_id INT,
    department_id INT,
    employee_name VARCHAR(30) NOT NULL,
    employee_email VARCHAR(70) NOT NULL,
    PRIMARY KEY (employee_id)
);

ALTER TABLE employee_HR ADD CONSTRAINT fk_company_id FOREIGN KEY (company_id) REFERENCES company_HR (company_id);
ALTER TABLE employee_HR ADD CONSTRAINT fk_department_id FOREIGN KEY (department_id) REFERENCES department_HR (department_id);

INSERT INTO employee_HR (company_id, department_id, employee_name, employee_email) VALUES
(1, 1, 'Alice Johnson', 'alice.johnson@gmail.com'),
(1, 2, 'Bob Smith', 'bob.smith@outlook.com'),
(2, 3, 'Carol White', 'carol.white@gmail.com'),
(3, 4, 'David Green', 'david.green@outlook.com'),
(4, 5, 'Eva Brown', 'eva.brown@gmail.com'),
(5, 6, 'Frank Jones', 'frank.jones@gmail.com'),
(6, 7, 'Grace Lee', 'grace.lee@outlook.com');

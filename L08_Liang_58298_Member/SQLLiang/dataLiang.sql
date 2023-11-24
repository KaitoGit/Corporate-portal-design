-- 删除已存在的数据库（如果有）
DROP DATABASE IF EXISTS l08_liang_58298_hr;

-- 创建新数据库
CREATE DATABASE l08_liang_58298_hr;

-- 使用新数据库
USE l08_liang_58298_hr;

-- 创建会员数据表
CREATE TABLE l08_liang_58298_hr.members(
    member_id INT NOT NULL AUTO_INCREMENT UNIQUE,
    name VARCHAR(70),
    email VARCHAR(70),
    join_date DATE,
    PRIMARY KEY (member_id)
);

-- 向会员数据表中插入数据
INSERT INTO l08_liang_58298_hr.members(member_id, name, email, join_date)
VALUES
   (1, 'Alice Johnson', 'alice@gmail.com', '2023-01-01'),
   (2, 'Bob Smith', 'bob@outlook.com', '2023-02-01'),
   (3, 'Carol White', 'carol@outlook.com', '2023-03-01'),
   (4, 'David Brown', 'david@gmail.com', '2023-04-01'),
   (5, 'Eve Davis', 'eve@outlook.com', '2023-05-01'),
   (6, 'Frank Miller', 'frank@gmail.com', '2023-06-01');

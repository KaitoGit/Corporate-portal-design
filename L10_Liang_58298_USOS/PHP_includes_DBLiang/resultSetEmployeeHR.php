<?php
include '../PHP_includes_DBLiang/databaseHR.php';  // 确保路径与您的项目结构相匹配

// 创建与数据库的连接
$connHR = new mysqli($servernameHR, $usernameHR, $passwordHR, $dbnameHR);

// 编写 SQL 查询
$queryHR = "SELECT company_HR.company_name AS company_name, company_HR.area AS area, ";
$queryHR .= "department_HR.department_name AS department_name, department_HR.department_numberOfEmployees AS department_numberOfEmployees, employee_HR.employee_id AS employee_id, employee_HR.employee_name, employee_HR.employee_email ";
$queryHR .= "FROM employee_HR ";
$queryHR .= "LEFT JOIN company_HR ON employee_HR.company_id = company_HR.company_id ";
$queryHR .= "LEFT JOIN department_HR ON employee_HR.department_id = department_HR.department_id";

// 执行查询
$rsHR = $connHR->query($queryHR);

// 关闭数据库连接
$connHR->close();

$numHR = $rsHR->num_rows; // 获取查询结果的行数
?>

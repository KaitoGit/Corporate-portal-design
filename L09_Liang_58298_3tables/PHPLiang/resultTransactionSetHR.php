<?php
include 'PHPLiang/databaseHR.php';  // 确保路径与您的项目结构相匹配

// 创建与数据库的连接
$connHR = new mysqli($servernameHR, $usernameHR, $passwordHR, $dbnameHR);

// 编写 SQL 查询
$queryHR = "SELECT clients_HR.name AS client_name, clients_HR.email AS client_email, ";
$queryHR .= "goods_HR.name AS good_name, orders_HR.id AS order_id, orders_HR.quantity, orders_HR.price ";
$queryHR .= "FROM orders_HR ";
$queryHR .= "LEFT JOIN clients_HR ON orders_HR.client_id = clients_HR.clients_id ";
$queryHR .= "LEFT JOIN goods_HR ON orders_HR.good_id = goods_HR.good_id";

// 执行查询
$rsHR = $connHR->query($queryHR);

// 关闭数据库连接
$connHR->close();

$numHR = $rsHR->num_rows; // 获取查询结果的行数
?>

<?php
include 'PHPLiang/databaseHR.php'; // 包含数据库连接信息

// 创建数据库连接
$connHR = new mysqli($servernameHR, $usernameHR, $passwordHR, $dbnameHR);

$queryHR = "SELECT * FROM goods_HR"; // SQL 查询，选择所有商品

$rsHR = $connHR->query($queryHR); // 执行查询
$numHR = $rsHR->num_rows; // 获取查询结果的行数

$connHR->close(); // 关闭数据库连接
?>

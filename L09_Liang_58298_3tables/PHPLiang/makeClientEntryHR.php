<?php
if ($newClientHR) {
    include 'PHPLiang/databaseHR.php'; // 包含数据库连接设置

    // 创建新的数据库连接实例
    $connHR = new mysqli($servernameHR, $usernameHR, $passwordHR, $dbnameHR);
    // 准备插入新会员的SQL语句
    $queryHR = "INSERT INTO clients_HR(name, email, join_date,password) ";
    $queryHR .= "VALUES('".$nameHR."','".$emailHR."','".$joinDateHR."','".$paswordHR. "')";
    
    // 执行查询
    $connHR->query($queryHR);

    // 关闭数据库连接
    $connHR->close();
}
?>

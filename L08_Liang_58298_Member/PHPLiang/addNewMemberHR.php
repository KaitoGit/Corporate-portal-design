<?php
if ($newMemberHR) {
    include 'PHPLiang\databaseHR.php'; // 包含数据库连接设置

    // 创建新的数据库连接实例
    $connHR = new mysqli($servernameHR, $usernameHR, $passwordHR, $dbnameHR);

    // 准备插入新会员的SQL语句
    $queryHR = "INSERT INTO members(name, email, join_date) ";
    $queryHR .= "VALUES('".$nameHR."','".$emailHR."','".$joinDateHR. "')";

    // 执行查询
    $connHR->query($queryHR);

    // 关闭数据库连接
    $connHR->close();
}
?>

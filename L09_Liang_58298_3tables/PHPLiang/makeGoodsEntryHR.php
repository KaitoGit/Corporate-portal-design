<?php
if ($newGoodHR) {
    include 'PHPLiang/databaseHR.php'; // 包含数据库连接设置

    // 创建新的数据库连接实例
    $connHR = new mysqli($servernameHR, $usernameHR, $passwordHR, $dbnameHR);

    // 准备插入新商品的 SQL 语句
    $queryHR = "INSERT INTO goods_HR (name, price) ";
    $queryHR .= "VALUES ('".$nameHR."', '".$priceHR."')";

    // 执行查询
    $connHR->query($queryHR);

    // 关闭数据库连接
    $connHR->close();
}
?>

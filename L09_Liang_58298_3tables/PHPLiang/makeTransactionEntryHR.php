<?php
if ($newTransactionHR) {
    include 'PHPLiang/databaseHR.php'; // 包含数据库连接设置

    // 创建新的数据库连接实例
    $connHR = new mysqli($servernameHR, $usernameHR, $passwordHR, $dbnameHR);

    // 准备插入新交易的 SQL 语句
    $queryHR = "INSERT INTO orders_HR (client_id, good_id, quantity, price) ";
    $queryHR .= "VALUES (".$clientIdHR.", ".$goodIdHR.", '".$quantityHR."', '".$priceHR."')";

    // 执行查询并检查是否成功
    if ($connHR->query($queryHR) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $connHR->error;
    }

    // 关闭数据库连接
    $connHR->close();
}
?>

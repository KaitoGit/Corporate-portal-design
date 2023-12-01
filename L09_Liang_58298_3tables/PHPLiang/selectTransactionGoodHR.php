<?php
include 'PHPLiang/databaseHR.php'; 

// 创建数据库连接
$conn = new mysqli($servernameHR, $usernameHR, $passwordHR, $dbnameHR);

// 编写 SQL 查询
$query = "SELECT * FROM goods_HR";
$result = $conn->query($query);

// 生成商品选项
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<option value='" . $row["good_id"] . "'>" . $row["name"] . "</option>";
    }
} else {
    echo "<option value=''>No goods available</option>";
}

// 关闭数据库连接
$conn->close();
?>

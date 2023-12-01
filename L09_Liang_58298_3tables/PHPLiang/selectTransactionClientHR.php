<?php
include 'PHPLiang/databaseHR.php'; // 确保路径正确

// 创建数据库连接
$conn = new mysqli($servernameHR, $usernameHR, $passwordHR, $dbnameHR);

// 编写 SQL 查询
$query = "SELECT * FROM clients_HR";
$result = $conn->query($query);

// 生成客户选项
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<option value='" . $row["clients_id"] . "'>" . $row["name"] . "</option>";
    }
} else {
    echo "<option value=''>No clients available</option>";
}

// 关闭数据库连接
$conn->close();
?>

<?php
include '../PHP_includes_DBLiang/databaseHR.php'; // 确保路径正确

// 创建数据库连接
$conn = new mysqli($servernameHR, $usernameHR, $passwordHR, $dbnameHR);

// 编写 SQL 查询
$query = "SELECT * FROM company_HR";
$result = $conn->query($query);

// 生成选项
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<option value='" . $row["company_id"] . "'>" . $row["company_name"] . "</option>";
    }
} else {
    echo "<option value=''>No company available</option>";
}

// 关闭数据库连接
$conn->close();
?>

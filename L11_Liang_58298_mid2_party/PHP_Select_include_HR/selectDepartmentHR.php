<?php
include '../PHP_DB_include_HR/databaseHR.php'; // 确保路径正确

// 创建数据库连接
$conn = new mysqli($servernameHR, $usernameHR, $passwordHR, $dbnameHR);

// 编写 SQL 查询
$query = "SELECT * FROM department_HR";
$result = $conn->query($query);

// 生成选项
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<option value='" . $row["department_id"] . "'>" . $row["department_name"] . "</option>";
    }
} else {
    echo "<option value=''>No department available</option>";
}

// 关闭数据库连接
$conn->close();
?>

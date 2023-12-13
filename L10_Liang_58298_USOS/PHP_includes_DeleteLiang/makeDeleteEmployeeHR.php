<?php
// 检查是否需要执行删除操作
if ($deleteEmployeeHR) {
    // 包含数据库连接信息的文件
    include '../PHP_includes_DBLiang/databaseHR.php';

    // 创建数据库连接
    $connHR = new mysqli($servernameHR, $usernameHR, $passwordHR, $dbnameHR);

    // 构建删除 SQL 查询
    $queryHR = "DELETE FROM employee_HR WHERE employee_id='".$employee_idHR."'";

    // 执行删除客户的查询
    if ($connHR->query($queryHR)) {
        echo "Employee successfully deleted";
    } else {
        echo "error：" . $connHR->error;
    }

    // 关闭数据库连接
    $connHR->close();
}
?>

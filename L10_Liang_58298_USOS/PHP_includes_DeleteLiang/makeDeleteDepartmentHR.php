<?php
// 检查是否需要执行删除操作
if ($deleteDepartmentHR) {
    // 包含数据库连接信息的文件
    include '../PHP_includes_DBLiang/databaseHR.php';

    // 创建数据库连接
    $connHR = new mysqli($servernameHR, $usernameHR, $passwordHR, $dbnameHR);

    // 检查是否有与相关的记录，如果有，则删除它们
    $queryDeleteEmployee = "DELETE FROM employee_HR WHERE department_id='".$department_idHR."'";
    $connHR->query($queryDeleteEmployee);

    // 构建删除 SQL 查询
    $queryHR = "DELETE FROM department_HR WHERE department_id='".$department_idHR."'";

    // 执行删除客户的查询
    if ($connHR->query($queryHR)) {
        echo "Department successfully deleted";
    } else {
        echo "error：" . $connHR->error;
    }

    // 关闭数据库连接
    $connHR->close();
}
?>

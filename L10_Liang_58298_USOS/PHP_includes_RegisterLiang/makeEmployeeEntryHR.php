<?php
if ($newEmployeeHR) {
    include '../PHP_includes_DBLiang/databaseHR.php'; // 包含数据库连接设置

    // 创建新的数据库连接实例
    $connHR = new mysqli($servernameHR, $usernameHR, $passwordHR, $dbnameHR);
    // 准备插入新会员的SQL语句
    $queryHR = "INSERT INTO employee_HR (company_id, department_id, employee_name, employee_email) ";
    $queryHR .= "VALUES (".$company_idHR.", ".$department_idHR.", '".$employee_nameHR."', '".$employee_emailHR."')";
 
    // 执行查询
    $connHR->query($queryHR);

    // 关闭数据库连接
    $connHR->close();
}
?>

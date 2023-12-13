<?php
if ($newCompanyHR) {
    include '../PHP_includes_DBLiang/databaseHR.php'; // 包含数据库连接设置

    // 创建新的数据库连接实例
    $connHR = new mysqli($servernameHR, $usernameHR, $passwordHR, $dbnameHR);
    // 准备插入新会员的SQL语句
    $queryHR = "INSERT INTO company_HR(company_name, area) ";
    $queryHR .= "VALUES('".$company_nameHR."','".$areaHR. "')";
    
    // 执行查询
    $connHR->query($queryHR);

    // 关闭数据库连接
    $connHR->close();
}
?>

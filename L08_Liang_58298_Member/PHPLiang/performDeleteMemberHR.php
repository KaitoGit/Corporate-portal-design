<?php
// 检查是否需要执行删除操作
if ($deleteHR) {
    // 包含数据库连接信息的文件
    include 'databaseHR.php';

    // 创建数据库连接
    $connHR = new mysqli($servernameHR, $usernameHR, $passwordHR, $dbnameHR);

    // 构建删除会员的 SQL 查询
    $queryHR = "DELETE FROM members WHERE member_id='".$member_idHR."'";

    // 执行查询
    $connHR->query($queryHR);

    // 关闭数据库连接
    $connHR->close();
}
?>

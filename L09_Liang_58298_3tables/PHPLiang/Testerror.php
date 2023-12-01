<?php
include 'PHPLiang/databaseHR.php'; // 确保这个路径是正确的

// 创建与数据库的连接
$connHR = new mysqli($servernameHR, $usernameHR, $passwordHR, $dbnameHR);

// 检查连接
if ($connHR->connect_error) {
    die("Connection failed: " . $connHR->connect_error);
}

// 编写查询
$queryHR = "SELECT * FROM clients_HR WHERE clients_id = 1";

// 执行查询
$result = $connHR->query($queryHR);

if ($result->num_rows > 0) {
    // 输出每行数据
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["clients_id"]. " - Name: " . $row["name"]. " - Email: " . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}

// 关闭连接
$connHR->close();
?>

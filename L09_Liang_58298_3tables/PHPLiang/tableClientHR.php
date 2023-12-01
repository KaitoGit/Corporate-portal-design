<?php 
if ($numHR > 0) {
    // 循环遍历所有客户记录并显示
    while ($row = $rsHR->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["clients_id"] . "</td>"; // 客户ID
        echo "<td>" . $row["name"] . "</td>"; 
        echo "<td>" . $row["email"] . "</td>"; 
        echo "<td>" . $row["join_date"] . "</td>"; 
        echo "<td>" . $row["password"] . "</td>"; 
        echo "</tr>";
    }
} else {
    // 如果没有客户记录
    echo "<tr><td colspan='5'>No clients found</td></tr>";
}
?>

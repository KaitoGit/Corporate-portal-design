<?php 
if ($numHR > 0) {
    // 循环遍历所有客户记录并显示
    while ($row = $rsHR->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["company_id"] . "</td>"; // 客户ID
        echo "<td>" . $row["company_name"] . "</td>"; 
        echo "<td>" . $row["area"] . "</td>"; 
        echo "</tr>";
    }
} else {
    // 如果没有客户记录
    echo "<tr><td colspan='5'>No companys found</td></tr>";
}
?>

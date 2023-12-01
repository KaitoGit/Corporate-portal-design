<?php 
if ($numHR > 0) {
    // 循环遍历所有交易记录并显示
    while ($row = $rsHR->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["order_id"] . "</td>"; // 交易ID
        echo "<td>" . $row["client_name"] . "</td>"; // 客户名
        echo "<td>" . $row["good_name"] . "</td>"; // 商品名
        echo "<td>" . $row["quantity"] . "</td>"; // 数量
        echo "<td>" . $row["price"] . "</td>"; // 总成本
        echo "</tr>";
    }
} else {
    // 如果没有交易记录
    echo "<tr><td colspan='5'>No transactions found</td></tr>";
}
?>

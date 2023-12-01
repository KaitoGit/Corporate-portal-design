<?php 
if ($numHR > 0) {
    // 循环遍历所有商品记录并显示
    while ($row = $rsHR->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["good_id"] . "</td>"; // 商品ID
        echo "<td>" . $row["name"] . "</td>"; // 商品名称
        echo "<td>" . $row["price"] . "</td>"; // 商品价格
        echo "</tr>";
    }
} else {
    // 如果没有商品记录
    echo "<tr><td colspan='3'>No goods found</td></tr>";
}
?>

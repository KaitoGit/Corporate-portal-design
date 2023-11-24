<?php 
$i = 0;
while ($i < $numHR) { // 确保这里使用的是会员总数的变量 $numHR
    $rsHR->data_seek($i);
    $row = $rsHR->fetch_assoc();
    echo "<tr>";
    echo "<td>" . $row["member_id"] . "</td>"; // 会员ID
    echo "<td>" . $row["name"] . "</td>"; // 会员名字
    echo "<td>" . $row["email"] . "</td>"; // 会员邮箱
    echo "<td>" . $row["join_date"] . "</td>"; // 会员加入日期
    echo "</tr>";
    $i++;
}
?>

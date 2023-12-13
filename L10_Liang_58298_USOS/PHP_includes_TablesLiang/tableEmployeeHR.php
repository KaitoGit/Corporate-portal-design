<?php 
if ($numHR > 0) {
    // 循环遍历所有客户记录并显示
    while ($row = $rsHR->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["employee_id"] . "</td>"; // 客户ID
        echo "<td>" . $row["employee_name"] . "</td>"; 
        echo "<td>" . $row["employee_email"] . "</td>"; 
        echo "<td>" . $row["company_name"] . "</td>"; 
        echo "<td>" . $row["area"] . "</td>"; 
        echo "<td>" . $row["department_name"] . "</td>"; 
        echo "<td>" . $row["department_numberOfEmployees"] . "</td>"; 
        echo "</tr>";
    }
} else {
    // 如果没有客户记录
    echo "<tr><td colspan='5'>No departments found</td></tr>";
}
?>

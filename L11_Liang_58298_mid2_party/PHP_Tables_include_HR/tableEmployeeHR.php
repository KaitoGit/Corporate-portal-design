<?php 
if ($numHR > 0) {
    // 循环遍历所有记录并显示
    while ($row = $rsHR->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["employee_id"] . "</td>"; // ID
        echo "<td>" . $row["employee_name"] . "</td>"; 
        echo "<td>" . $row["employee_email"] . "</td>"; 
        echo "<td>" . $row["service_name"] . "</td>"; 
        echo "<td>" . $row["description"] . "</td>"; 
        echo "<td>" . $row["department_name"] . "</td>"; 
        echo "<td>" . $row["department_numberOfEmployees"] . "</td>"; 
        echo "</tr>";
    }
} else {
    // 如果没有记录
    echo "<tr><td colspan='5'>No departments found</td></tr>";
}
?>

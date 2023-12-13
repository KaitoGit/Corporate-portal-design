<?php
$newDepartmentHR = TRUE;
if (isset($_POST['department_name'])) {$department_nameHR = $_POST['department_name'];} else {$newDepartmentHR = FALSE;}
if (isset($_POST['department_numberOfEmployees'])) {$department_numberOfEmployeesHR = $_POST['department_numberOfEmployees'];} else {$newDepartmentHR = FALSE;}
?>


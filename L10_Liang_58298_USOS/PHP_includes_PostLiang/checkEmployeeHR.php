<?php
$newEmployeeHR = TRUE;
if (isset($_POST['company_id'])) {$company_idHR = $_POST['company_id'];} else {$newEmployeeHR = FALSE;}
if (isset($_POST['department_id'])) {$department_idHR = $_POST['department_id'];} else {$newEmployeeHR = FALSE;}
if (isset($_POST['employee_name'])) {$employee_nameHR = $_POST['employee_name'];} else {$newEmployeeHR = FALSE;}
if (isset($_POST['employee_email'])) {$employee_emailHR = $_POST['employee_email'];} else {$newEmployeeHR = FALSE;}
?>


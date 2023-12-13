<?php
$deleteEmployeeHR = TRUE;
if (isset($_POST['deleteEmployee'])) {
    $employee_idHR = $_POST['deleteEmployee'];
} else {
    $deleteEmployeeHR = FALSE;
}
?>

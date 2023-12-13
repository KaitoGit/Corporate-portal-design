<?php
$newServiceHR = TRUE;
if (isset($_POST['service_name'])) {$service_nameHR = $_POST['service_name'];} else {$newServiceHR = FALSE;}
if (isset($_POST['description'])) {$descriptionHR = $_POST['description'];} else {$newServiceHR = FALSE;}
?>


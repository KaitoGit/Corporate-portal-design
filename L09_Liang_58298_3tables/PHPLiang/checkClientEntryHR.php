<?php
$newClientHR = TRUE;
if (isset($_POST['client_name'])) {$nameHR = $_POST['client_name'];} else {$newClientHR = FALSE;}
if (isset($_POST['client_email'])) {$emailHR = $_POST['client_email'];} else {$newClientHR = FALSE;}
if (isset($_POST['client_date'])) {$joinDateHR = $_POST['client_date'];} else {$newClientHR = FALSE;}
if (isset($_POST['client_password'])) {$paswordHR = $_POST['client_password'];} else {$newClientHR = FALSE;}
?>


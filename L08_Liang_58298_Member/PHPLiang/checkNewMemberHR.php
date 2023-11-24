<?php
$newMemberHR = TRUE;
if (isset($_POST['name'])) {$nameHR = $_POST['name'];} else {$newMemberHR = FALSE;}
if (isset($_POST['email'])) {$emailHR = $_POST['email'];} else {$newMemberHR = FALSE;}
if (isset($_POST['joinDate'])) {$joinDateHR = $_POST['joinDate'];} else {$newMemberHR = FALSE;}
?>

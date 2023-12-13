<?php
$deleteCompanyHR = TRUE;
if (isset($_POST['deleteCompany'])) {
    $company_idHR = $_POST['deleteCompany'];
} else {
    $deleteCompanyHR = FALSE;
}
?>
